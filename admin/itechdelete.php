<?php
include('../dbs/connect.php');
$newid=$_GET['del_id'];

$sql="DELETE from itech WHERE id='$newid'";
if (mysqli_query($connect,$sql)) {
    header('location: itechlist.php');
}else{
    echo "Not Deleted";
}
?>
