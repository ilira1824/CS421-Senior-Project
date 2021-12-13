<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', 'nascar244','test');

// get the post records
$txtName = $_POST['name'];

// database insert SQL code
$sql = "INSERT INTO `deliveries` (`Id`, `name`) VALUES ('0', '$txtName')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>