<!DOCTYPE html>
<html lang="en">

<?php
include('plugins/session.php');
include('plugins/head.php');

if (isset($_SESSION['role']) && $_SESSION['role'] != 'kalanjali' && $_SESSION['role'] != 'admin' && $_SESSION['role'] != 'kalanjalitm') {
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="title">Kalanjali Club Events List</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <th>Name</th>
                                        <th class="text-right">Show</th>
                                        <th class="text-right">Update</th>
                                        <th class="text-right">Delete</th>
                                    </thead>
                                    <?php
                                    include('../dbs/connect.php');
                                    $sql = "SELECT * from kalanjali";
                                    $results = $connect->query($sql);
                                    while ($final = $results->fetch_assoc()) {
                                    ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $final['name'] ?></td>
                                                <td class="text-right">
                                                    <a href="kalanjalishow.php?event_id=<?php echo $final['id'] ?>">
                                                        <button class="btn btn-primary">Open</button>
                                                    </a>
                                                </td>
                                                <td class="text-right">
                                                    <a href="kalanjaliupdate.php?up_id=<?php echo $final['id'] ?>">
                                                        <button class="btn btn-primary">Update</button>
                                                    </a>
                                                </td>
                                                <td class="text-right">
                                                    <a href="kalanjalidelete.php?del_id=<?php echo $final['id'] ?>">
                                                        <button class="btn btn-primary">Delete</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    <?php }
                                    ?>
                                </table>
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