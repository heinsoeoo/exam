<?php 

$servername="localhost";
$username="root";
$password="toor";
$dbName="exam";

$con=new mysqli($servername,$username,$password,$dbName);

if ($con->connect_error) {
	die("Connection failed:" .$conn->connect_error);
}

return $con;

 ?>
