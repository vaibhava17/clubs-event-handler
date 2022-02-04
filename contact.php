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
  <section id="contact">
    <h1 class="section-header">CONTACT US</h1>
    <div class="contact-wrapper">
      <!-- Left contact page -->
      <form id="contact-form" class="form-horizontal" action="contacthandler.php" method="POST" role="form" onsubmit="myFunction()">
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text" class="form-control" id="name" placeholder="Full Name" name="name" value="" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="number" class="form-control" id="number" placeholder="Contact Number" name="number" value="" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" value="" required>
          </div>
        </div>
        <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message" required></textarea>
        <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND" name="submit">
          <div class="alt-send-button">
            <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
          </div>
        </button>
      </form>
      <script>
        function myFunction() {
          alert("Thank you for getting in touch! We appreciate you contacting us/ [Activity Club]. One of our colleagues will get back in touch with you soon!Have a great day!")
        }
      </script>
      <!-- Left contact page -->
      <div class="direct-contact-container">
        <ul class="contact-list">
          <li class="list-item"><span class="contact-text place">10Km Milestone, Bareilly</span></i></li>
          <li class="list-item"><span class="contact-text phone"><a href="tel:1-212-555-5555" title="Give me a call">075994 71144</a></span></i></li>
          <li class="list-item"><span class="contact-text gmail"><a href="mailto:#" title="Send me an email">contact@ssvgi.org</a></span></i></li>
        </ul>
        <hr>
        <ul class="social-media-list">
          <li><a href="#" target="_blank" class="contact-icon">
              <i class="fa fa-facebook" aria-hidden="true"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
              <i class="fa fa-twitter" aria-hidden="true"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
              <i class="fa fa-instagram" aria-hidden="true"></i></a>
          </li>
          <li><a href="#" target="_blank" class="contact-icon">
              <i class="fa fa-codepen" aria-hidden="true"></i></a>
          </li>
        </ul>
        <hr>
      </div>
    </div>
  </section>
  <!--Carousel part2 end-->
  <?php
  include('plugins/footer.php');
  ?>
</body>

</html>