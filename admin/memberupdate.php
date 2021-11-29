
<!DOCTYPE html>
<html lang="en">

<?php
include('plugins/session.php');
include('plugins/head.php');

if(isset($_SESSION['role']) && $_SESSION['role']!='admin' && $_SESSION['role']!='images' && $_SESSION['role']!='gizmofreaks' && $_SESSION['role']!='rotaract' && $_SESSION['role']!='kalanjali' && $_SESSION['role']!='oasis' && $_SESSION['role']!='gladiators'){
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
                                <h5 class="title">Member</h5>
                            </div>
                            <div class="card-body">
                                <form role="form" action="memberupdatehandler.php" method="POST" enctype="multipart/form-data">
                                    <?php
                                    $newid=$_GET['up_id'];

                                    include('../dbs/connect.php');

                                    $sql="SELECT * from teammember WHERE id='$newid'";
                                    $results=$connect->query($sql);
                                    $final=$results->fetch_assoc();

                                    ?>
                                    <div class=" row ">
                                        <div class="col-md-4 ">
                                            <div class="form-group ">
                                                <label>Username</label>
                                                <input type="text" class="form-control" disabled="" id="username" value="<?php echo $final['username'] ?>" name="username">
                                            </div>
                                        </div>
                                        <div class="col-md-4 ">
                                            <div class="form-group ">
                                                <label>Password</label>
                                                <input type="text" class="form-control" required id="password" placeholder="Enter New Password"  name="password">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" row ">
                                        <div class="col-md-4 ">
                                            <div class="form-group ">
                                                <label>Full Name</label>
                                                <input type="text" class="form-control" required id="username" placeholder="Enter Name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-md-4 ">
                                            <div class="form-group ">
                                                <label>Department</label>
                                                <input type="text" class="form-control" required id="password" placeholder="Department" name="post">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-12">
                                            <div class="form-group ">
                                                <label>Select New Profile Picture</label>
                                                <input type="file" class="form-control" required id="image" placeholder="Select Image" name="image">
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