<?php 
session_start(); 
require '../connection.php' ;



$studentName = $studentEmail = $phoneNumber = $gender = $age = '' ;
$studentImage = '' ;

$studentNameErr = $studentEmailErr = $phoneNumberErr = $genderErr = $ageErr = $studentImageErr = '' ;


$id = 0;
$update = false;
$new_target = '' ;


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


// edit
if ( isset($_GET['edit']) ) {
	$id = $_GET['edit'];
	$update = true;

$resultEdit = $conn->query(" SELECT * FROM students WHERE id=['$id'] ") or die($conn->error) ;

$row = $result->fetch_array();

	$studentName = $row['studentname'];
	$studentEmail = $row['email'];
	$phoneNumber = $row['phoneNumber'];
	$age = $row['age'] ;
	$gender = $row['gender'] ;
	$studentImage = $row['studentImage'] ;
	
}
// update
if ( isset($_POST['updateStudent']) ) {
	
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
	$id = $_POST['id'] ;


	$updateSQL = "UPDATE students SET studentname='$studentname', email='$email', phoneNumber = '$phoneNumber' , gender = '$gender', age='$age' , studentImage= '$studentImage' WHERE id='$id' ";
	
	if ( $conn->query($updateSQL) === TRUE ) {
		move_uploaded_file($_FILES['studentImage']['name'], $newTarget);
		echo "Record Updated";
	} else {
		echo "Records not updated";
	} 
} else {
		echo "Invalid Details";
	}


// delete
if ( isset($_GET['delete']) ) {
	$id = $_GET['delete'];

$deleteSql = " DELETE FROM students WHERE id=['$id'] " ;

if ( $conn->query($deleteSql) === TRUE ) {
	echo " <script> alert('Record Deleted'); </script> ";
} else {
	echo " <script> alert('Record Not Deleted'); </script> ";
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

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


<div class="container">
	
	<form action="admin.php" method="post" enctype="multipart/form-data">
		
		<div class="form-group">
			<input type="hidden" name="id" id="id" placeholder="id">
		</div>
		<div class="form-group">
			<input type="studentName" name="studentName" id="studentName" placeholder="Enter Student Name" class="form-control" value="<?php echo $studentName ?>">
		</div>
		<div class="form-group">
			<input type="email" name="studentEmail" id="studentEmail" placeholder="Enter Email" class="form-control" value="<?php echo $studentEmail ?>">
		</div>
		<div class="form-group">
			<input type="phone" name="phoneNumber" id="phoneNumber" placeholder="Enter Phone Number" class="form-control" value="<?php echo $phoneNumber ?>">
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
			<input type="number" name="number" id="number" placeholder="Enter Age" class="form-control" value="<?php echo $age ?>">
		</div>
		<div class="form-group">
			<input type="file" name="studentImage" id="studentImage" placeholder="Upload Student Image(passport)" class="form-control" value="<?php echo $studentImage ?>">
		</div>
		<br/>
		<div class="form-group">
			<div class="row">
				<?php
                      if ($update == true):
                    ?>
				<div class="col">
					<input type="submit" name="updateStudent" id="uploadStudent" value="Update Student Details" class="btn btn-warning">
				</div>
				<?php else: ?>
				<div class="col">
					<input type="submit" name="uploadStudent" id="uploadStudent" value="Upload Student Details" class="btn btn-success">
				</div>
				<div class="col">
					<input type="reset" name="reset" id="reset" value="Reset Form" class="btn btn-danger">
				</div>
			<?php endif; ?>
			</div>
		</div>

	</form>

</div>

<br/> <br/> 


<div class="container">
<?php 
$mysqli = new mysqli( "localhost","root","","school" ) or die($mysqli->error); ;
$result = $mysqli->query("SELECT * FROM students") or die($mysqli->error) ;
 ?>
	<h3>Student Input Display</h3>
	<table class="table table-dark">
		<tr>
			<td>ID</td>
			<td>Student Name</td>
			<td>Student Email</td>
			<td>Phone Number</td>
			<td>Gender</td>
			<td>Number</td>
			<td>Student Image</td>
			<td colspan="2">Actions</td>
		</tr>
		<?php while ($row = $result->fetch_assoc()) : ?>
		<tr>
			<td> <?php echo $row['id'] ?> </td>
			<td> <?php echo $row['studentname'] ?> </td>
			<td> <?php echo $row['email'] ?> </td>
			<td> <?php echo $row['phoneNumber'] ?> </td>
			<td> <?php echo $row['gender'] ?> </td>
			<td> <?php echo $row['age'] ?> </td>
			<td> <?php
                      echo "<img src='../studentImages/" . $row['studentImage'] ."' style='width: 120px; height=120px;'>";

                     ?> </td>
			<td>
				<a href="admin.php?edit=<?php echo $row['id'] ?>" class="btn btn-primary">Edit</a>
				<a href="admin.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
			</td>
		</tr>
	<?php endwhile; ?>
	</table>
</div>






<form action="../authentication/logout.php">
	<input type="submit" name="logout" id="logout" value="Log Out User">
</form>


<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>