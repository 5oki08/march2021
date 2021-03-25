<?php session_start(); ?>
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
	<title>Admin Dashboard</title>
</head>
<body>

<?php 
if (isset($_GET['logSuccessAdmin'])) {
	if (isset($_SESSION['activeuser'])) {
		echo $_SESSION['activeuser'];
		session_unset();
		session_destroy();
	} else {
		echo "Welcome Admin User";
	}
}


 ?>


<form action="../authentication/logout.php">
	<input type="submit" name="logout" id="logout" value="Log Out User">
</form>


<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>