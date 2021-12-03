<!DOCTYPE html>
<html lang="en">

<?php
include('plugins/session.php');
include('plugins/head.php');

if (isset($_SESSION['role']) && $_SESSION['role'] != 'admin') {
  header('location: 404.php');
}
?>

<body class="">
  <div class="wrapper ">
    <?php include('plugins/header.php') ?>
    <div class="panel-header panel-header-lg"></div>

    <!-- work here -->
    <div class="content">
      <div class="row">
        <div class="col">
          <div class="card card-chart">
            <div class="card-header">
              <h4 class="card-title text-center my-5">Welcome To Admin Panel of SSVGI Activities Clubs</h4>
            </div>
            <div class="card-body">
              <div class="chart-area row justify-content-center">
                <a href="mail.php"><button class="btn btn-primary">Check Mail Box</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include('plugins/footer.php'); ?>
</body>

</html>