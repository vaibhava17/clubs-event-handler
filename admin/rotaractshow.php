<!DOCTYPE html>
<html lang="en">

<?php
include('plugins/session.php');
include('plugins/head.php');

if (isset($_SESSION['role']) && $_SESSION['role'] != 'rotaract' && $_SESSION['role'] != 'admin' && $_SESSION['role'] != 'rotaracttm') {
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
                            <h5 class="title">Rotaract Club Event Details</h5>
                        </div>
                        <div class="card-body">
                            <?php
                            include('../dbs/connect.php');
                            $id = $_GET['event_id'];
                            $sql = "SELECT * from rotaract WHERE id='$id'";
                            $results = $connect->query($sql);
                            $final = $results->fetch_assoc();
                            ?>
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <h5> <span style="color: red;">Event Name: </span><?php echo $final['name'] ?> </h5>
                                        <h5> <span style="color: red;">Event Date: </span><?php echo $final['date'] ?> </h5>
                                        <h6> <span style="color: red;">Description:<br><br></span> <?php echo $final['context'] ?> </h6>
                                    </div>
                                    <div class="col">
                                        <img src="<?php echo $final['image'] ?>" alt="No File" style="height:300px; width: 1000px">
                                    </div>
                                </div>
                            </div>
                            <?php
                            include('plugins/footer.php');
                            ?>
</body>

</html>