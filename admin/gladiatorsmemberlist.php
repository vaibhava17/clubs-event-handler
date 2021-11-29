
<!DOCTYPE html>
<html lang="en">

<?php
include('plugins/session.php');
include('plugins/head.php');


if(isset($_SESSION['role']) && $_SESSION['role']!='gladiators' && $_SESSION['role']!='admin'){
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
                            <h5 class="title">Gladiators Club Members</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                            <th>Username</th>
                                            <th>Name</th>
                                            <th>Department</th>
                                            <th class="text-right">Update</th>
                                        </thead>
                                    <?php
                                    include('../dbs/connect.php');
                                    $sql="SELECT * from teammember";
                                    $results=$connect->query($sql);
                                    while ($final=$results->fetch_assoc()) { 
                                        if($final['role']=='gladiatorstm'){?>
                                        
                                        <tbody>
                                            <tr>
                                                <td><?php
                                                if($final['role']=='gladiatorstm'){?>
                                                    <?php echo $final['username'] ?>
                                                <?php }
                                                ?></td>
                                                <td><?php
                                                if($final['role']=='gladiatorstm'){?>
                                                    <?php echo $final['name'] ?>
                                                <?php }
                                                ?></td>
                                                <td><?php
                                                if($final['role']=='gladiatorstm'){?>
                                                    <?php echo $final['post'] ?>
                                                <?php }
                                                ?></td>
                                                <td class="text-right">
                                                     <a href="memberupdate.php?up_id=<?php echo $final['id'] ?>"><button class="btn btn-primary">Update</button></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php } ?>
                                    <?php } ?>
                                </table>
                            </div>
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