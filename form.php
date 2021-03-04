<?php

//
$fName = $sName = $email1 = $phoneNumber = $region = $availability = '' ;

$fNameErr = $sNameErr = $email1Err = $phoneNumberErr = $regionErr = $availabilityErr = '' ;


if (isset($_POST['save'])) {
	
	if (empty($_POST['$fName'])) {
		$fNameErr = "First Name Unavailable" ;
	} else {
		$fName = $_POST['fName'] ;
	}

	if (empty($_POST['$sName'])) {
		$sNameErr = "First Name Unavailable" ;
	} else {
		$sName = $_POST['sName'] ;
	}

	if (empty($_POST['$email'])) {
		$emailErr = "First Name Unavailable" ;
	} else {
		$email = $_POST['email'] ;
	}

	if (empty($_POST['$phoneNumber'])) {
		$phoneNumberErr = "First Name Unavailable" ;
	} else {
		$phoneNumber = $_POST['phoneNumber'] ;
	}

	if (empty($_POST['$region'])) {
		$regionErr = "First Name Unavailable" ;
	} else {
		$region = $_POST['region'] ;
	}

	if (empty($_POST['$availability'])) {
		$availabilityErr = "First Name Unavailable" ;
	} else {
		$availability = $_POST['availability'] ;
	}

}

	if (!empty($fNameErr) || !empty($sNameErr) || !empty($emailErr) || !empty($phoneNumberErr) || !empty($regionErr) || !empty($availabilityErr)  ) {
		echo "Submission Failed.";
	} else {
		echo $fName  ;
		echo $sName ;
		echo $email ;
		echo $phoneNumber ;
		echo $region  ;
		echo $availability  ;
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Form Handling</title>

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">

<style type="text/css">
	
	h2 {
		text-align: center;
		font-style: italic bold;
	}

</style>

</head>
<body>

<h2>Form Validation</h2>
<br/> <br/>
<form method="post" action="form.php">
	
	<div class="row form-group">
		
		<div class="col">
			
			<input type="text" name="fName" id="fName" class="form-control" placeholder="Enter First Name">

		</div>
		<div class="col">
			
			<input type="text" name="sName" id="sName" class="form-control" placeholder="Enter Last Name">

		</div>

	</div> <br/>

	<div class="row form-group">
		
		<div class="col">
			
			<input type="email" name="email1" id="email1" placeholder="Enter Email Address" class="form-control">

		</div>
		<div class="col">
			
			<input type="phone" name="phoneNumber" id="phoneNumber" placeholder="Enter Phone Number" class="form-control">

		</div>

	</div> <br/>

	<div class="row form-group">
		
		<div class="col">
			
			<input type="text" name="region" id="region" placeholder="Enter Region" class="form-control">

		</div>
		<div class="col">
			
			<select name="availability" id="availability" class="form-control">
				<option value="availability">Availability Options</option>
				<option value="Yes">Yes</option>
				<option value="No">No</option>
			</select>

		</div>

	</div> <br/>

	<div class="row form-group">
		
		<div class="col">
			
			<input type="submit" name="save" class="btn btn-primary btn-block" value="Upload New Staff">

		</div>
		<div class="col">
			
			<input type="reset" name="reset" class="btn btn-danger btn-block" value="Reset Form">

		</div>

	</div>

</form>




<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/style.js"></script>
</body>
</html>