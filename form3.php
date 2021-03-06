<?php 

$firstName = $secName = $lastName = $date = $month = $year = $gender = $address1 = $address2 = $cityName = $postalCode = $email = $mobileNo = $phoneNo = $workNo = $company = $courses = '' ;

$firstNameErr = $secNameErr = $lastNameErr = $dateErr = $monthErr = $yearErr = $genderErr = $address1Err = $address2Err = $cityNameErr = $postalCodeErr = $emailErr = $mobileNoErr = $phoneNoErr = $workNoErr = $companyErr = $coursesErr = '' ;


if ( isset($_POST['save']) ) {
	
	if ( empty($_POST['firstName']) ) {
		$firstNameErr = "First Name Entry Error";
	} else {
		$firstName = $_POST['firstName'] ;
	}

	if ( empty($_POST['secName']) ) {
		$secNameErr = "Second Name Entry Error";
	} else {
		$secName = $_POST['secName'] ;
	}

	if ( empty($_POST['lastName']) ) {
		$lastNameErr = "Last Name Entry Error";
	} else {
		$lastName = $_POST['lastName'] ;
	}

	if ( empty($_POST['date']) ) {
		$dateErr = "Date Entry Error";
	} else {
		$date = $_POST['date'] ;
	}

	if ( empty($_POST['month']) ) {
		$monthErr = "Month Entry Error";
	} else {
		$month = $_POST['month'] ;
	}

	if ( empty($_POST['year']) ) {
		$yearErr = "Year Entry Error";
	} else {
		$year = $_POST['year'] ;
	}

	if ( empty($_POST['gender']) ) {
		$genderErr = "Gender Entry Error";
	} else {
		$gender = $_POST['gender'] ;
	}

	if ( empty($_POST['address1']) ) {
		$address1Err = "Address1 Entry Error";
	} else {
		$address1 = $_POST['address1'] ;
	}

	if ( empty($_POST['address2']) ) {
		$address2Err = "Address2 Entry Error";
	} else {
		$address2 = $_POST['address2'] ;
	}

	if ( empty($_POST['cityName']) ) {
		$cityNameErr = "City Name Entry Error";
	} else {
		$cityName = $_POST['cityName'] ;
	}

	if ( empty($_POST['postalCode']) ) {
		$postalCodeErr = "Postal Code Entry Error";
	} else {
		$postalCode = $_POST['postalCode'] ;
	}

	if ( empty($_POST['email']) ) {
		$emailErr = "Email Entry Error";
	} else {
		$email = $_POST['email'] ;
	}

	if ( empty($_POST['mobileNo']) ) {
		$mobileNoErr = "Mobile Number Entry Error";
	} else {
		$mobileNo = $_POST['mobileNo'] ;
	}

	if ( empty($_POST['phoneNo']) ) {
		$phoneNoErr = "Phone Number Entry Error";
	} else {
		$phoneNo = $_POST['phoneNo'] ;
	}

	if ( empty($_POST['workNo']) ) {
		$workNoErr = "Work Number Entry Error";
	} else {
		$workNo = $_POST['workNo'] ;
	}

	if ( empty($_POST['company']) ) {
		$companyErr = "Company Entry Error";
	} else {
		$company = $_POST['company'] ;
	}

	if ( empty($_POST['courses']) ) {
		$courseseErr = "Courses Entry Error";
	} else {
		$courses = $_POST['courses'] ;
	}

}


if ( !empty($firstNameErr) || !empty($secNameErr)  || !empty($lastNameErr ) || !empty($dateErr) || !empty($monthErr) || !empty($yearErr ) || !empty($genderErr) || !empty($address1Err) || !empty($address2Err) || !empty($cityNameErr) || !empty($postalCodeErr) || !empty($emailErr) || !empty($mobileNoErr) || !empty($phoneNoErr) || !empty($workNoErr) || !empty($companyErr) || !empty($coursesErr) ) {
	echo " <strong>Submission Failed. Check Entry Details, then try again.</strong> ";
} else {
	echo "firstName : " . $firstName;
	echo "<br/>" ;
	echo "secondName : " . $secName;
	echo "<br/>" ;
	echo "lastName : " . $lastName;
	echo "<br/>";
	echo "Birth Date : " . $date.$month.$year ;
	echo "<br/>";
	echo "Gender : " . $gender ;
	echo "<br/>";
	echo "Address1 : " . $address1 ;
	echo "<br/>";
	echo "Address2 : " . $address2 ;
	echo "<br/>";
	echo "City : " . $cityName ;
	echo "<br/>" ;
	echo "Postal Code : " . $postalCode ;
	echo "<br/>";
	echo "Email : " . $email ;
	echo "<br/>" ;
	echo "Mobile Number : " . $mobileNo ;
	echo "<br/>" ;
	echo "Phone Number : " . $phoneNo ;
	echo "<br/>" ;
	echo "Work Number : " . $workNo ;
	echo "<br/>" ;
	echo "Current Company : " . $company ;
	echo "<br/>" ;
	echo "Selected Courses : " . $courses ; 

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form Trial 3</title>

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">

<style type="text/css">
	
	body {max-width: 1080px; margin: 0 auto;}
	#form3 {text-align: center;}
	input {text-align: center;}
	p {color:red; font-style:italic;}

</style>

</head>
<body>


<div class="row">
	<div class="col-2" style="background-color:#b7e602;"></div>
	<div class="col-8" style="background-color:#a6c8fc;">
		<div id="form3">
			<h3>Student Registration Form</h3>
			<h5>Fill out the form carefully for successful registration</h5> <br/> <br/>
			<form action="form3.php" method="post">
				
				<div class="row">
					<div class="col">
						<input type="text" name="firstName" id="firstName" class="form-control">
						<label for="firstName" class="label1">First Name</label>
						<p> <?php echo $firstNameErr; ?> </p>
					</div>
					<div class="col">
						<input type="text" name="secName" id="secName" class="form-control">
						<label for="secName" class="label1">Second Name</label>
						<p> <?php echo $secNameErr; ?> </p>
					</div>
					<div class="col">
						<input type="text" name="lastName" id="lastName" class="form-control">
						<label for="lastName" class="label1">Last Name</label>
						<p> <?php echo $lastNameErr; ?> </p>
					</div>
				</div>
				<br/>
				<div class="row">
					<div class="col">
					<label>Birth Date</label>
					<div class="row">
						<div class="col">
							<select name="date" id="date" class="form-control">
								<option>Date</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
							</select>
							<p> <?php echo $dateErr; ?> </p>
							<label for="month"></label>
						</div>
						<div class="col">
							<select name="month" id="month" class="form-control">
								<option>Month</option>
								<option value="january">January</option>
								<option value="february">February</option>
								<option value="march">March</option>
								<option value="april">April</option>
								<option value="may">May</option>
								<option value="june">June</option>
								<option value="july">July</option>
								<option value="august">August</option>
								<option value="september">September</option>
								<option value="october">October</option>
								<option value="november">November</option>
								<option value="december">December</option>
							</select>
							<p> <?php echo $monthErr; ?> </p>
						</div>
						<div class="col">
							<input type="phone" name="year" id="year" placeholder="Year" class="form-control">
							<p> <?php echo $yearErr; ?> </p>
						</div>
					</div>
					</div>
					<div class="col">
						<label for="gender">Gender</label>
						<select name="gender" id="gender" class="form-control">
							<option> <i>Please Select</i> </option>
							<option value="male">Male</option>
							<option value="female">Female</option>
						</select>
						<p> <?php echo $genderErr; ?> </p>
					</div>
				</div>
				<br/> <br/>
				<input type="text" name="address1" id="address1" class="form-control">
				<label for="address1">Street Address</label>
				<p> <?php echo $address1Err; ?> </p>
				<br/> <br/>
				<input type="text" name="address2" id="address2" class="form-control">
				<label for="address2">Street Address Line 2</label>
				<p> <?php echo $address2Err; ?> </p>
				<br/> <br/>
				<input type="text" name="cityName" id="cityName" class="form-control">
				<label for="cityName">City</label>
				<p> <?php echo $cityNameErr; ?> </p>
				<br/> <br/>
				<input type="phone" name="postalCode" id="postalCode" class="form-control" placeholder="xxxxx-xxxxx">
				<label for="postalCode">Postal Code</label>
				<p> <?php echo $postalCodeErr; ?> </p>
				<br/> <br/>

				<div class="row">
					<div class="col">
						<label for="email"> Student E-mail</label>
						<input type="email" name="email" id="email" class="form-control" placeholder="ex: myname@example.com">
						<p> <?php echo $emailErr; ?> </p>
					</div>
					<div class="col">
						<label for="phone"> Mobile Number</label>
						<input type="phone" name="mobileNo" id="mobileNo" class="form-control" placeholder="(000) 000-0000">
						<p> <?php echo $mobileNoErr; ?> </p>
					</div>
				</div>
				<br/> <br/> <br/>
				<div class="row">
					<div class="col">
						<label for="phone">Phone Number</label>
						<input type="phone" name="phoneNo" id="phoneNo" class="form-control" placeholder="(000) 000-0000">
						<p> <?php echo $phoneNoErr; ?> </p>
					</div>
					<div class="col">
						<label for="phone">Work Number</label>
						<input type="phone" name="workNo" id="mworkNo" class="form-control" placeholder="(000) 000-0000">
						<p> <?php echo $workNoErr ; ?> </p>
					</div>
				</div>
				<br/> <br/> <br/>
				<div class="row">
					<div class="col">
						<label for="company">Company</label>
						<input type="text" name="company" id="company" class="form-control">
						<p> <?php echo $companyErr; ?> </p>
					</div>
					<div class="col"></div>
				</div>
				<br/> <br/> <br/>
				<div class="row">
					<div class="col">
						<label for="courses">Courses</label>
						<select name="courses" id="courses" class="form-control">
							<option>Please Select</option>
							<option value="windows8">Windows 8</option>
							<option value="introLinux">Introduction to Linux</option>
							<option value="english">English 101+102</option>
							<option value="creativeWrite">Creative Writing</option>
							<option value="history">History 101+102</option>
						</select>
						<p> <?php echo $coursesErr; ?> </p>
					</div>
					<div class="col"></div>
				</div>
				<br/> <br/> <br/>

				<div class="row">
					<div class="col">
						<input type="submit" name="save" value="Upload New Student" class="btn btn-primary btn-block">
					</div>
					<div class="col">
						<input type="reset" name="reset" value="Reset Form" class="btn btn-danger btn-block">
					</div>
				</div>

			</form>

		</div>
	</div>
	<div class="col-2" style="background-color:#b7e602;"></div>
</div>





<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>