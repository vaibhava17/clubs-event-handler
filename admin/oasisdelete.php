<?php
include('../dbs/connect.php');
$newid=$_GET['del_id'];

$sql="DELETE from oasis WHERE id='$newid'";
if (mysqli_query($connect,$sql)) {
    header('location: oasis.php');
}else{
    echo "Not Deleted";
}
?>
