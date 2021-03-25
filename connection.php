<?php 

$servername = "localhost" ;
$username = "root" ;
$password = "" ;
$dbname = "school" ;
$conn = new mysqli($servername,$username,$password,$dbname) ;
// if ($conn->connect_error) {
// 	echo "DB not fetched" . $conn->error;
// } else {
// 	echo "DB accessed";
// }

// $sql = " CREATE DATABASE school " ;
// if ($conn->query($sql) === TRUE) {
// 	echo "DB created, proceed with table";
// } else {
// 	echo "DB not created." . $conn->error;
// }

// $sql = " CREATE TABLE users (
// id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// username VARCHAR(250) NOT NULL,
// email VARCHAR(250) NULL,
// password VARCHAR(250) NOT NULL,
// role VARCHAR(250) NOT NULL,
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// ) ";
// if ($conn->query($sql) === TRUE) {
// 	# code...
// 	echo "Table USERS created, proceed";
// } else {
// 	echo "Table not created. Check and try again." . $conn->error;
// }

// $sql = " CREATE TABLE students (
// id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// studentname VARCHAR(250) NOT NULL,
// email VARCHAR(250) NULL,
// phoneNumber VARCHAR(250) NOT NULL,
// gender VARCHAR(250) NOT NULL,
// age VARCHAR(250) NOT NULL,
// studentImage VARCHAR(250) NOT NULL,
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// ) ";
// if ($conn->query($sql) === TRUE) {
// 	# code...
// 	echo "Table STUDENTS created, proceed";
// } else {
// 	echo "Table not created. Check and try again." . $conn->error;
// }





 ?>