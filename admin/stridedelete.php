<?php
include('../dbs/connect.php');
$newid=$_GET['del_id'];

$sql="DELETE from stride WHERE id='$newid'";
if (mysqli_query($connect,$sql)) {
    header('location: stride.php');
}else{
    echo "Not Deleted";
}
?>
