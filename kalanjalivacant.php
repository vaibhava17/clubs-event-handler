<?php
include("dbs/connect.php");
$name=$_POST['name'];
$course=$_POST['course'];
$student_id=$_POST['student_id'];
$email=$_POST['email'];
$v_post=$_POST['v_post'];


$target="data/kalanjali/resume/";
$file_path=$target.basename($_FILES['file']['name']);
$file_name=$_FILES['file']['name'];
$file_tmp=$_FILES['file']['tmp_name'];
$file_store="data/kalanjali/resume/".$file_name;

move_uploaded_file($file_tmp, $file_store);


$sql="INSERT INTO applykalanjali(name,course,student_id,email,v_post,file) Values('$name','$course','$student_id','$email','$v_post','$file_path')";

if (mysqli_query($connect,$sql)) {
	header('location: kalanjali.php');
}else{
	header('location: #');
}


?>
