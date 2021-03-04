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

	echo  "<br/>" ;
	echo  "<br/>" ;
	echo  "<br/>" ;

// 

// arrays display
	$cars = array("porsche" , "bugatti" , "mobius");
	echo "Here we are at $cars[0]" . " " . " $cars[1]" . "<br/>" ;
	echo count($cars) . "<br/>" ;

// associative arrays use named keys assigned to them
	// associative example1 using foreach loop
$bkprice = array("a4"=>"100" , "a5"=>"150" , "a6"=>"200" , "a7"=>"300") ;

foreach ($bkprice as $x => $x_value) {
	# code...
	echo "book" . " " . "$x" . " " . "value is" . " " . " $x_value" . "<br/>" ;
}


	// associative example2 using foreach loop
// define the variable name, use the array "formula", give each key a value all enclosed in double quotes
$fuelArea = array( "Nairobi"=>"115" , "Mombasa"=>"112" , "Mwingi"=>"117" , "Gilgil"=>"114" , "Bomet"=>"116" ) ;
// include the foreach loop
foreach ( $fuelArea as $y => $y_value ) {
	#code
	echo "
	<table>
<tr> <th>Area</th> <th>Price</th>  </tr> <tr> <td>$y</td> <td>$y_value</td> </tr> 
	</table>
	";
}


echo "<br/> <br/>" ;

// multidimensional arrays - arrays for an arrays for an arrays (n)
$oppo = array(
array("Reno5",39999,"available"),
array( "A53", 22999, "available" ),
array( "A15", 13999 , "available"),
array( "Reno5 F" , "n/A" , "Coming Soon" )
) ;

// display 1 array, first[row#] , second[col#]
echo $oppo[0][0] . ":Price" . $oppo[0][1] . ":In Stock" . $oppo[0][2] . "<br/>" ;
echo $oppo[1][0] . ":Price" . $oppo[1][1] . ":In Stock" . $oppo[1][2] ;









	?>


</div>




</body>
</html>