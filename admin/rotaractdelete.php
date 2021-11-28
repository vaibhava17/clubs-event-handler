<?php
include('../dbs/connect.php');
$newid=$_GET['del_id'];

$sql="DELETE from rotaract WHERE id='$newid'";
if (mysqli_query($connect,$sql)) {
    header('location: rotaract.php');
}else{
    echo "Not Deleted";
}
?>
