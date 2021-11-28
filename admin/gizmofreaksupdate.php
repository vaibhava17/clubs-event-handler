
<!DOCTYPE html>
<html lang="en">

<?php
include('plugins/session.php');
include('plugins/head.php');

if(isset($_SESSION['role']) && $_SESSION['role']!='gizmofreaks' && $_SESSION['role']!='admin' && $_SESSION['role']!='gizmofreakstm'){
    header('location: 404.php');
}
?>

<body class="">
    <div class="wrapper ">
        <?php
        include('plugins/header.php')
        ?>

            <div class="panel-header panel-header-sm">
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8">
                        <div class="card">

                            <div class="card-header">
                                <h5 class="title">Events</h5>
                            </div>
                            <div class="card-body">
                                <form role="form" action="gizmofreaksupdatehandler.php" method="POST" enctype="multipart/form-data">
                                    <?php
                                    $newid=$_GET['up_id'];

                                    include('../dbs/connect.php');

                                    $sql="SELECT * from gizmofreaks WHERE id='$newid'";
                                    $results=$connect->query($sql);
                                    $final=$results->fetch_assoc();

                                    ?>
                                    <div class=" row ">
                                        <div class="col-md-8">
                                            <div class="form-group ">
                                                <label>Event Name</label>
                                                <input type="text" class="form-control" id="name" placeholder="Enter Event Name" value="<?php echo $final['name'] ?>" name="name">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-1 ">
                                            <div class="form-group ">
                                                <label>Date</label>
                                                <input type="date" class="form-control " id="date" placeholder="Enter Event Date" value="<?php echo $final['date'] ?>" name="date">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row ">
                                        <div class="col-md-12 ">
                                            <div class="form-group ">
                                                <label>Context</label>
                                                <input type="text" class="form-control " id="context" placeholder="Enter Description" value="<?php echo $final['context'] ?>" name="context">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-4 pr-1 ">
                                            <div class="form-group ">
                                                <label>Image</label>
                                                <input type="file" class="form-control " id="image" placeholder="Select Image" value="<?php echo $final['image'] ?>" name="image">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pr-1 ">
                                            <div class="form-group ">
                                                <label>File</label>
                                                <input type="file" class="form-control " id="file" placeholder="Select File" value="<?php echo $final['file'] ?>" name="file">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <input type="hidden" value="<?php echo $final['id'] ?>" name="form_id">
                                        <button type="submit" class="btn btn-primary" name="update">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
include('plugins/footer.php');
?>
</body>

</html>