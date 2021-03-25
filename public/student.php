<?php

 session_start(); 
 include '../connection.php' ;


$studentName = $studentEmail = $phoneNumber = $gender = $age = '' ;
$studentImage = '' ;

$studentNameErr = $studentEmailErr = $phoneNumberErr = $genderErr = $ageErr = '' ;
$studentImageErr = '' ;


if ( isset($_POST['uploadStudent']) ) {

	if ( empty($_POST['studentName']) ) {
		$studentNameErr = " Student Name cannot be blank " ;
	} else {
		$studentName = $_POST['studentName'] ;
	}
	if ( empty($_POST['studentEmail']) ) {
		$studentEmailErr = " Student Email cannot be blank " ;
	} else {
		$studentEmail = $_POST['studentEmail'] ;
	}
	if ( empty($_POST['phoneNumber']) ) {
		$phoneNumberErr = " Phone Number Required " ;
	} else {
		$phoneNumber = $_POST['phoneNumber'] ;
	}
	if ( empty($_POST['gender']) ) {
		$genderErr = " Select Gender " ;
	} else {
		$genderErr = $_POST['gender'] ;
	}
	if ( empty($_POST['age']) ) {
		$ageErr = " Input  Age " ;
	} else {
		$age = $_POST['age'] ;
	}
	$studentImage = $_FILES['studentImages']['name'] ;


	if ( empty($studentNameErr) && empty($studentEmailErr) && empty($phoneNumberErr) && empty($genderErr) && empty($ageErr) ) {
		
		$stmt = $conn->prepare(" INSERT INTO students (studentName,email,phoneNumber,gender,age) VALUES (?,?,?,?,?) ") ;
		$stmt = bind_param( "sssss",$studentName,$studentEmail,$phoneNumber,$gender,$age ) ;

		if ( $stmt->execute() == TRUE ) {
			move_uploaded_file($_FILES['studentImage']['tmp_name'], $target);
			echo "record updated <br>" ;
			echo "<script> echo('image moved'); </script>";
		} else {
            echo "record not created <br>" . $conn->error;
        }  
        }
        else {
            echo "invalid details";
        }

	}




?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>Student Dashboard</title>
</head>
<body id="studentphp">

<?php 
if (isset($_GET['logSuccessStudent'])) {
	if (isset($_SESSION['activeuser'])) {
		echo $_SESSION['activeuser'];
		session_unset();
		session_destroy();
	} else {
		echo "Welcome Student User";
	}
}
 ?>


<div class="container">
	
	<form action="student.php" method="post">
		
		<div class="form-group">
			<input type="hidden" name="id" id="id" placeholder="id">
		</div>
		<div class="form-group">
			<input type="studentName" name="studentName" id="studentName" placeholder="Enter Student Name" class="form-control">
		</div>
		<div class="form-group">
			<input type="email" name="studentEmail" id="studentEmail" placeholder="Enter Email" class="form-control">
		</div>
		<div class="form-group">
			<input type="phone" name="phoneNumber" id="phoneNumber" placeholder="Enter Phone Number" class="form-control">
		</div>
		<div class="form-group">
			<label for="gender">Select Gender</label>
			<select name="gender" id="gender" class="form-control">
				<option></option>
				<option value="male">Male</option>
				<option value="female">Female</option>
			</select>
		</div>
		<div class="form-group">
			<input type="number" name="number" id="number" placeholder="Enter Age" class="form-control">
		</div>
		<div class="form-group">
			<input type="file" name="studentImage" id="studentImage" placeholder="Upload Student Image(passport)" class="form-control">
		</div>
		<br/>
		<div class="form-group">
			<div class="row">
				<div class="col">
					<input type="submit" name="uploadStudent" id="uploadStudent" value="Upload New Student" class="btn btn-success">
				</div>
				<div class="col">
					<input type="reset" name="reset" id="reset" value="Reset Form" class="btn btn-danger">
				</div>
			</div>
		</div>

	</form>

</div>




<br/> <br/>

<form action="../authentication/logout.php">
	<input type="submit" name="logout" id="logout" value="Log Out User">
</form>

<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>