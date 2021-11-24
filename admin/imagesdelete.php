<?php
include('../dbs/connect.php');
$newid=$_GET['del_id'];

$sql="DELETE from images WHERE id='$newid'";
if (mysqli_query($connect,$sql)) {
    header('location: imageslist.php');
}else{
    echo "Not Deleted";
}
?>
