
<!DOCTYPE html>
<html lang="en">

<?php
include('plugins/session.php');
include('plugins/head.php');


if(isset($_SESSION['role']) && $_SESSION['role']!='rotaract' && $_SESSION['role']!='admin'){
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
                            <h5 class="title">Rotaract Club Applications</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                          <th>
                                            Name
                                          </th>
                                          <th>
                                            Student ID
                                          </th>
                                          <th>
                                            Course
                                          </th>
                                          <th>
                                            Post
                                          </th>
                                           <th>
                                            Email ID
                                          </th>
                                          <th>
                                            Date
                                          </th>
                                          <th class="text-right">
                                            Resume
                                          </th>
                                        </thead>
                                    <?php
                                    include('../dbs/connect.php');
                                    $sql="SELECT * from applyrotaract";
                                    $results=$connect->query($sql);
                                    while ($final=$results->fetch_assoc()) { 
                                    ?>
                                        
                                        <tbody>
                                          <tr>
                                            <td>
                                              <?php echo $final['name'] ?>
                                            </td>
                                            <td>
                                              <?php echo $final['student_id'] ?>
                                            </td>
                                            <td>
                                              <?php echo $final['course'] ?>
                                            </td>
                                            <td>
                                                <?php echo $final['v_post'] ?>
                                            </td>
                                            <td><?php echo $final['email'] ?></td>
                                                <td><?php echo $final['date'] ?></td>
                                            <td class="text-right">
                                              <a href="../<?php echo $final['file'] ?>"><button class="btn btn-dark">resume</button></a>
                                            </td>
                                          </tr>
                                        </tbody>
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