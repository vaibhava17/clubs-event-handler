<?php
include('../dbs/connect.php');
if(isset($_POST['update'])){
	$newid=$_POST['form_id'];
	$newname=$_POST['name'];
	$newdate=$_POST['date'];
	$newcontext=$_POST['context'];

	$target="../data/rotaract/";
	$file_path=$target.basename($_FILES['file']['name']);
	$file_name=$_FILES['file']['name'];
	$file_tmp=$_FILES['file']['tmp_name'];
	$file_store="../data/rotaract".$file_name;

	move_uploaded_file($file_tmp, $file_store);

	$target="../data/rotaract.";
	$image_path=$target.basename($_FILES['image']['name']);
	$image_name=$_FILES['image']['name'];
	$image_tmp=$_FILES['image']['tmp_name'];
	$image_store="../data/rotaract/".$image_name;

	move_uploaded_file($image_tmp, $image_store);

$sql="UPDATE rotaract set name='$newname', date='$newdate', context='$newcontext', image='$image_path', file='$file_path' WHERE id='$newid'";

if (mysqli_query($connect,$sql)) {
	header('location: rotaractlist.php');
}else{
	header('location: dashboard.php');
}
}
?>