<?php 
session_start() ;
include '../connection.php';

$emailLog = $passLog = $encryptPassLog = $userRole = $userStatus = '' ;
$emailLogErr = $passLogErr = '' ;

$_SESSION['emailInvalid'] = "Invalid Credentials" ;
$_SESSION['alertTypeInvalid'] = "danger" ;

if ( isset($_POST['login']) ) {
	if ( empty($_POST['emailLog']) ) {
		$emailLogErr =  $_SESSION['emailInvalid'] ;
	} else {
		$emailLog = $_POST['emailLog'] ;
	}
	if ( empty($_POST['passLog']) ) {
		$passLogErr =  $_SESSION['emailInvalid'] ;
	} else {
		$passLog = $_POST['passLog'] ;
	}

	$loginSql = " SELECT * FROM users WHERE email='$emailLog' && password='".md5($passLog)."' " ;

	$result = mysqli_query($conn,$loginSql) ;

	$num = mysqli_num_rows($result) ;

	if ( $num==1 ) {
		while ( $row = mysqli_fetch_array($result) ) {
			$userRole = $row['role'] ;
			$userStatus = $row['verified_status'] ;
		}

		// switch user=switch statement
		switch ($userRole) {
			case 'admin':
				if ($status=='yes') {
					$_SESSION['activeuser'] = $emailLog ;
					header('location: ../public/admin.php?logSuccessAdmin') ;
				} else {
				    	$_SESSION['notVerified'] = "not verified yet";
				    	header('location: ../index.php?nverified');
				    }
				break;
			case 'student':
				$_SESSION['activeuser'] = $emailLog ;
				header('location: ../public/student.php?logSuccessStudent') ;
				break;	
			
			default:
				header('location: ../public/dashboard.php?guest') ;
				break;
		}

	} else {
		$_SESSION['emailInvalid'] ;
		$_SESSION['alertTypeInvalid'] = "danger" ;
		header('location: ../index.php?invalidCred=false');
	}

}








 ?>