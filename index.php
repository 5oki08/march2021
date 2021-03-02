<!DOCTYPE html>
<html>
<head>
	<title>intro PHP</title>

<!-- local link -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/style.js"></script>

<!-- bootstrap local link -->
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap-grid.min.css">
<!-- js local link -->
<script type="text/javascript" src="bootstrap/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap/bootstrap.min.js"></script>

</head>
<body>

<div id="firstheader">


	<?php 

	// data display using echo
	echo "first page <br/>" ;


	// using variables to display data
	$a = "porsche" ;
	$b = "bugatti" ;
	$c = "mobius" ;
	$d = 4 ;
	echo "In Kenya" . " " . "$c" . " " . "is locally manufactured and assembled." ;

	echo " <br/> " ;

	$e = 8562 ;
	var_dump (is_int ($e) ) ;

	echo "<br/>";

	$f = 8562.2 ;
	var_dump (is_float ($f) ) ;

	echo = "<br/>" ;



	?>


</div>




</body>
</html>