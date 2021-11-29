<?php
include('../dbs/connect.php');
if(isset($_POST['update'])){
	$newid=$_POST['form_id'];
	$newpassword=$_POST['password'];
	$newname=$_POST['name'];
	$newdepartment=$_POST['post'];

	$target="../data/team/";
	$image_path=$target.basename($_FILES['image']['name']);
	$image_name=$_FILES['image']['name'];
	$image_tmp=$_FILES['image']['tmp_name'];
	$image_store="../data/team/".$image_name;

	move_uploaded_file($image_tmp, $image_store);

$sql="UPDATE teammember set name='$newname', password='$newpassword', image='$image_path', post='$newdepartment' WHERE id='$newid'";

if (mysqli_query($connect,$sql)) {
	header('location: successful.php');
}else{
	header('location: unsuccessful.php');
}
}
?>