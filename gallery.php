<?php
include("dbs/connect.php");
?>

<!doctype html>
<html lang="en">

<?php
include('plugins/head.php');
?>

<body>
  <?php
  include('plugins/header.php')
  ?>

  <div class="lightbox-gallery" style="background-color: black;">
    <div class="container">
      <div class="intro">
        <h2 class="text-center">Events Gallery</h2>
      </div>
      <div class="row photos">
        <div class="col-sm-6 col-md-4 col-lg-3 item">
          <a href="images/inver2.jpg" data-lightbox="photos">
            <img class="img-fluid" src="images/inver2.jpg">
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 item">
          <a href="images/e4.jpg" data-lightbox="photos">
            <img class="img-fluid" src="images/e4.jpg">
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 item">
          <a href="images/e5.jpg" data-lightbox="photos">
            <img class="img-fluid" src="images/e5.jpg">
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 item">
          <a href="images/e6.jpg" data-lightbox="photos">
            <img class="img-fluid" src="images/e6.jpg">
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 item">
          <a href="images/e7.jpg" data-lightbox="photos">
            <img class="img-fluid" src="images/e7.jpg">
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 item">
          <a href="images/e8.jpg" data-lightbox="photos">
            <img class="img-fluid" src="images/e8.jpg">
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 item">
          <a href="images/inv3.jpg" data-lightbox="photos">
            <img class="img-fluid" src="images/inv3.jpg">
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 item">
          <a href="images/inv3.jpeg" data-lightbox="photos">
            <img class="img-fluid" src="images/inv3.jpeg">
          </a>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-3 item">
          <a href="images/inver.jpg" data-lightbox="photos">
            <img class="img-fluid" src="images/inver.jpg">
          </a>
        </div>
      </div>
    </div>
  </div>

    
<?php
include('plugins/footer.php');
?>
</body>
</html>