<?php 
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="css/style.css">	
</head>
<body>

<nav class="navbar navbar-inverse text-dark" style="background-color:#45e692;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">School System</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#signup"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<br/>
<div class="container">
	<div class="jumbotron">
		<div class="row">
			<div class="col">
				<img src="https://cdn4.iconfinder.com/data/icons/education-and-school-10/800/Board-512.png" width="200px" height="200px">
			</div>
			<div class="col">
				<p>Welcome to the School System, fill the details below to proceed.</p>
			</div>
		</div>
	</div>
</div>
<br/>
<div class="container">
	<div class="jumbotron" style="background-color:#45e692;">
		<div class="row">
			<div class="col">
				<h3>Account Creation</h3>
				<p class="alert alert-<?php 

				if (isset($_GET['userOk'])) {
								echo $_SESSION['classTypeAccept'];
								session_unset();
								session_destroy();
							} if (isset($_GET['userNotOk'])) {
								echo $_SESSION['classTypeError'];
								session_unset();
								session_destroy();
							} 
							if (isset($_GET['userDup'])) {
								echo $_SESSION['classTypeError'];
								session_unset();
								session_destroy();
							} 
				 ?>">
					<?php 
					if ( isset($_GET['userOk']) ) {
						if (isset($_SESSION['userAccept'])) {
							echo $_SESSION['userAccept'] ;
							session_unset();
							session_destroy();
						} else { echo "User Registered"; }
					} if ( isset($_GET['userNotOk']) ) {
						if (isset($_SESSION['userDeny'])) {
							echo $_SESSION['userDeny'] ;
							session_unset();
							session_destroy();
						} else { echo "User Not Registered, Check details and try again."; }
					} if ( isset($_GET['userDup']) ) {
						if (isset($SESSION['userDeny'])) {
							echo $_SESSION['userDeny'] ;
							session_unset();
							session_destroy();
						} else { echo "User Duplication"; }
					}
					 ?>
				</p>
				<form id="signup" action="authentication/register.php" method="post">
					<div class="form-group">
						<input type="text" name="usernameReg" id="usernameReg" placeholder="Enter Username" class="form-control">
					</div>
					<div class="form-group">
						<input type="email" name="emailReg" id="emailReg" placeholder="Enter Email" class="form-control">
					</div>
					<div class="form-group">
						<input type="password" name="passwordReg" onkeyup="check();" id="passwordReg" placeholder="Enter Password" class="form-control">
					</div>
					<div class="form-group">
						<input type="password" name="conpasswordReg" onkeyup="check();" id="conpasswordReg" placeholder="Confirm Password" class="form-control">
						<span id="message"></span>
					</div>
					<div class="form-group">
						<label for="role">Select Role</label>
						<select name="role" id="role" class="form-control">
							<option></option>
							<option value="admin">Admin</option>
							<option value="student">Student</option>
						</select>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col">
								<input type="submit" name="save" id="save" class="btn btn-success btn-block" value="Upload New Details">
							</div>
							<div class="col">
								<input type="reset" name="reset" id="reset" value="Reset Form" class="btn btn-block btn-danger">
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="col">
				<h3>LogIn</h3>
				<p class=" alert alert-<?php 
					if (isset($_GET['invalidCred'])) {
								echo $_SESSION['alertTypeInvalid'];
								session_unset();
								session_destroy();
							} if (isset($_GET['nverified'])) {
								echo $_SESSION['alertTypeInvalid'];
								session_unset();
								session_destroy();
							} 
				 ?> "> 
					<?php 
						if ( isset($_GET['invalidCred']) ) {
							if (isset($_SESSION['emailInvalid'])) {
								echo $_SESSION['emailInvalid'];
								session_unset();
								session_destroy();
							} else { echo "Invalid Credentials, check and try again."; }
						}
						if ( isset($_GET['nverified']) ) {
							if (isset($_GET['nverified'])) {
								echo $_SESSION['notVerified'] ;
								session_unset();
								session_destroy();
							}
						}
					 ?>
				 </p>
				<form id="login" action="authentication/login.php" method="post">
					<div class="form-group">
						<input type="email" name="emailLog" id="emailLog" placeholder="Enter Email" class="form-control">
					</div>
					<div class="form-group">
						<input type="password" name="passLog" id="passLog" placeholder="Enter Password" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" name="login" id="login" class="btn btn-success btn-block" value="LogIn"  class="form-control">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>








<script type="text/javascript">
	function check() {
		if ( document.getElementById('passwordReg').value === document.getElementById('conpasswordReg').value ) {
			document.getElementById('message').style.color = "green" ;
			document.getElementById('message').innerHTML = "password match" ;
			document.getElementById('save').disabled = false ;
		} else {
			document.getElementById('message').style.color = "red" ;
			document.getElementById('message').innerHTML = "password mismatch" ;
			document.getElementById('save').disabled = true ;
		}
	}
</script>

<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>