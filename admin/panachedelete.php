<?php
include('../dbs/connect.php');
$newid=$_GET['del_id'];

$sql="DELETE from panache WHERE id='$newid'";
if (mysqli_query($connect,$sql)) {
    header('location: panache.php');
}else{
    echo "Not Deleted";
}
?>
