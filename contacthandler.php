<?php
include("dbs/connect.php");
$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$subject=$_POST['subject'];
$message=$_POST['message'];


$sql="INSERT INTO contact(name,email,number,subject,message) Values('$name','$email','$number','$subject','$message')";

if (mysqli_query($connect,$sql)) {
	header('location: contact.php');
}else{
	header('location: #');
}
