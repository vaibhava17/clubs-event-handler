<?php
include("dbs/connect.php");
$name=$_POST['name'];
$course=$_POST['course'];
$email=$_POST['email'];
$number=$_POST['number'];
$eventname=$_POST['eventname'];


$sql="INSERT INTO mfactorenroll(name,course,email,number,eventname) Values('$name','$course','$email','$number','$eventname')";

if (mysqli_query($connect,$sql)) {
	header('location: mfactor.php');
}else{
	header('location: #');
}


?>

