
<!DOCTYPE html>
<html lang="en">

<?php
include('plugins/session.php');
include('plugins/head.php');

if(isset($_SESSION['role']) && $_SESSION['role']!='gladiators' && $_SESSION['role']!='admin' && $_SESSION['role']!='gladiatorstm'){
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
                                <h5 class="title">Gladiators Club Event</h5>
                            </div>
                            <div class="card-body">
                                <form role="form" action="gladiatorshandler.php" method="POST" enctype="multipart/form-data">
                                    <div class=" row ">
                                        <div class="col-md-8">
                                            <div class="form-group ">
                                                <label>Event Name</label>
                                                <input type="text" class="form-control" id="name" placeholder="Enter Event Name" name="name">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pl-1 ">
                                            <div class="form-group ">
                                                <label>Date</label>
                                                <input type="date" class="form-control " id="date" placeholder="Enter Event Date" name="date">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row ">
                                        <div class="col-md-12 ">
                                            <div class="form-group ">
                                                <label>Context</label>
                                                <input type="text" class="form-control " id="context" placeholder="Enter Description" name="context">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-md-4 pr-1 ">
                                            <div class="form-group ">
                                                <label>Image</label>
                                                <input type="file" class="form-control " id="image" placeholder="Select Image" name="image">
                                            </div>
                                        </div>
                                        <div class="col-md-4 pr-1 ">
                                            <div class="form-group ">
                                                <label>File</label>
                                                <input type="file" class="form-control " id="file" placeholder="Select File" name="file">
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary ">Submit</button>
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