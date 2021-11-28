<?php
include('../dbs/connect.php');
$newid=$_GET['del_id'];

$sql="DELETE from gizmofreaks WHERE id='$newid'";
if (mysqli_query($connect,$sql)) {
    header('location: gizmofreakslist.php');
}else{
    echo "Not Deleted";
}
?>
