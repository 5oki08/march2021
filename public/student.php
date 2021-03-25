<?php

 session_start(); 
 include '../connection.php' ;


$studentName = $studentEmail = $phoneNumber = $gender = $age = '' ;
$studentImage = '' ;

$studentNameErr = $studentEmailErr = $phoneNumberErr = $genderErr = $ageErr = $studentImageErr = '' ;




if ( isset($_POST['uploadStudent']) ) {


 $target = "../studentImages/" .basename($_FILES['studentImage']['name']);

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
		$gender = $_POST['gender'] ;
	}
	if ( empty($_POST['age']) ) {
		$ageErr = " Input  Age " ;
	} else {
		$age = $_POST['age'] ;
	}


	$studentImage = $_FILES['studentImage']['name'] ;


	if (file_exists($target))  {
		 echo "Sorry, image file already exists.";
	}


	if ( empty($studentNameErr) && empty($studentEmailErr) && empty($phoneNumberErr) && empty($genderErr) && empty($ageErr) && empty($studentImageErr) ) {
			// if ( empty($studentNameErr) ) {
		$stmt = $conn->prepare(" INSERT INTO students (studentname,email,phoneNumber,gender,age,studentImage) VALUES (?,?,?,?,?,?) ") ;
		$stmt->bind_param( "ssssss",$studentName,$studentEmail,$phoneNumber,$gender,$age,$studentImage ) ;

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
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>Student Dashboard</title>
</head>
<body>

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
	
	<form action="student.php" method="post" enctype="multipart/form-data">
		
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
			<input type="number" name="age" id="age" placeholder="Enter Age" class="form-control">
		</div>
		<div class="form-group">
			<label for="studentImage">Upload Image</label>
			<input type="file" name="studentImage" id="studentImage" placeholder="Upload Student Image" class="form-control">
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