<?php 
session_start();
include '../connection.php';

$usernameReg = $emailReg = $passwordReg = $passwordRegEncrypt = $role = '' ;
$usernameRegErr = $emailRegErr = $passwordRegErr = $roleErr = '' ;

$_SESSION['userAccept'] = "User Successful Regsistration" ;
$_SESSION['userDeny'] = "User Unsuccessful Regsistration" ;
$_SESSION['classTypeAccept'] = "success" ;
$_SESSION['classTypeError'] = "danger" ;

$_SESSION['userDuplicate'] = "User Duplication" ;


if ( isset($_POST['save']) ) {
	if ( empty($_POST['usernameReg']) ) {
		$usernameRegErr =  "Username Error" ;
	} else {
		$usernameReg = $_POST['usernameReg'] ;
	}
	if ( empty($_POST['emailReg']) ) {
		$emailRegErr =  "Email Error" ;
	} else {
		$emailReg = $_POST['emailReg'] ;
	}
	if ( empty($_POST['passwordReg']) ) {
		$passwordRegErr =  "Password Error" ;
	} else {
		$passwordReg = $_POST['passwordReg'] ;
		$passwordRegEncrypt = md5($passwordReg)  ;
	}
	if ( empty($_POST['role']) ) {
		$roleErr =  "Role Not Selected" ;
	} else {
		$role = $_POST['role'] ;
	}

	$sql = " SELECT * FROM users WHERE username='$usernameReg' && email='$emailReg' && password='$passwordRegEncrypt' && role='$role' " ;
	$result= mysqli_query($conn,$sql) ;
	$num = mysqli_num_rows($result) ;

	if ( $num>=1 ) {
		$_SESSION['userDuplicate'];
		header('location: ../index.php?userDup') ;
	} else {
		if ( empty($usernameRegErr) && empty($emailRegErr) && empty($passwordRegErr) && empty($roleErr) ) {
		$stmt = $conn->prepare(" INSERT INTO users (username,email,password,role) VALUES (?,?,?,?) ") ;
		$stmt->bind_param("ssss",$usernameReg,$emailReg,$passwordRegEncrypt,$role) ;

		if ( $stmt->execute() === TRUE ) {
			$_SESSION['userAccept'];
			$_SESSION['classTypeAccept'];
			header('location: ../index.php?userOk') ;
		} else {
			$_SESSION['userDeny'];
			$_SESSION['classTypeError'];
			header('location: ../index.php?userNotOk') ;
		}
	} else {
		$_SESSION['userDeny'];
		$_SESSION['classTypeError'];
		header('location: ../index.php?userNotOk') ;
	}

	} 

}






 ?>