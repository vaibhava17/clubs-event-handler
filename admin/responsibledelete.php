<?php
include('../dbs/connect.php');
$newid=$_GET['del_id'];

$sql="DELETE from responsible WHERE id='$newid'";
if (mysqli_query($connect,$sql)) {
    header('location: responsiblelist.php');
}else{
    echo "Not Deleted";
}
?>
