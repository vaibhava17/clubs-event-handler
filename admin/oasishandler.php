<?php
include("../dbs/connect.php");
$name=$_POST['name'];
$date=$_POST['date'];
$context=$_POST['context'];


$target="../data/oasis/";
$file_path=$target.basename($_FILES['file']['name']);
$file_name=$_FILES['file']['name'];
$file_tmp=$_FILES['file']['tmp_name'];
$file_store="../data/oasis/".$file_name;

move_uploaded_file($file_tmp, $file_store);

$target="../data/oasis/";
$image_path=$target.basename($_FILES['image']['name']);
$image_name=$_FILES['image']['name'];
$image_tmp=$_FILES['image']['tmp_name'];
$image_store="../data/oasis/".$image_name;

move_uploaded_file($image_tmp, $image_store);


$sql="INSERT INTO oasis(date,name,context,file,image,filename) Values('$date','$name','$context','$file_path','$image_path','$file_name')";

if (mysqli_query($connect,$sql)) {
	header('location: oasislist.php');
}else{
	header('location: dashboard.php');
}


?>
