<?php
include('../dbs/connect.php');
$newid=$_GET['del_id'];

$sql="DELETE from rockon WHERE id='$newid'";
if (mysqli_query($connect,$sql)) {
    header('location: rockon.php');
}else{
    echo "Not Deleted";
}
?>
