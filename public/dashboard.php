<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
</head>
<body>

<?php 
if (isset($_GET['guest'])) {
	if (isset($_SESSION['guest'])) {
		echo $_SESSION['guest'];
		session_unset();
		session_destroy();
	} else {
		echo "Welcome guest";
	}
}


 ?>

<form action="../authentication/logout.php">
	<input type="submit" name="logout" id="logout" value="Log Out User">
</form>


</body>
</html>