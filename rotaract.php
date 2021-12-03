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
  <br>
  <center>
    <div class="container">
      <h3 style=" text-align:center; ">Rotaract</h3>
      <hr>
      <div class="row">
        <div class="col"> <img src="images/ssvgi/club/rotaract.jpg"></div>
        <div class="col">
          <br>
          <p>This Club appreciates inclination in good physical well-being and encourages students to participate in National and International sports event. Stride Club aims at offering an opportunity to participate in a broad variety of sports and recreational activities. This Club provides a valuable learning experience through student involvement and enhances the student’s experience that contributes to the student’s overall education and wellness.</p>
          <br>
          <br>
          <a href=""><i class="fab fa-instagram fa-lg"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <a href=""><i class="fab fa-facebook fa-lg"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
          <br>
          <br>
          <div class="container">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form">
              Apply For Rotaract Club
            </button>
          </div>
          <div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header border-bottom-0">
                  <h5 class="modal-title" id="exampleModalLabel">Application</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form role="form" action="rotaractvacant.php" method="POST" enctype="multipart/form-data" onsubmit="myFunction()">
                  <div class="modal-body">
                    <div class="form-group">
                      <label>Full name</label>
                      <input type="text" class="form-control form2" name="name" aria-describedby="emailHelp" placeholder="Enter Full Name" style="background-color: white;">
                    </div>
                    <div class="form-group">
                      <label for="password1">Course</label>
                      <input type="text" class="form-control form2" name="course" placeholder="Course" style="background-color: white;">
                    </div>
                    <div class="form-group">
                      <label for="">Student ID</label>
                      <input type="text" class="form-control form2" name="student_id" placeholder="Enter Student ID" style="background-color: white;">
                    </div>
                    <div class="form-group">
                      <label for="">Email ID</label>
                      <input type="email" class="form-control form2" name="email" placeholder="Enter Email ID" style="background-color: white;">
                    </div>
                    <div class="form-group">
                      <label for="post">Post</label>
                      <select class="form-control form2" style="background-color:white;" name="v_post" placeholder="Select Post">
                        <option>Select Post</option>
                        <option>President</option>
                        <option>Vice President</option>
                        <option>Secretary</option>
                        <option>Joint Secretary</option>
                        <option>Treasurer</option>
                      </select>
                      <br>
                      <label for="post">Uploade Your Resume</label>
                      <br>
                      <input class="form-control form2" type="file" name="file">
                    </div>
                  </div>
                  <div class="modal-footer border-top-0 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
                <script>
                  function myFunction() {
                    alert("Your detail is recorded We will get in touch with you soon")
                  }
                </script>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </center>
  <br>
  <br>
  <center>
    <h2>Events</h2>
    <hr>
    <div class="container">
      <div class="row">
        <?php
        include("dbs/connect.php");
        $sql = "SELECT * FROM rotaract";
        $results = $connect->query($sql);
        while ($final = $results->fetch_assoc()) {
        ?>
          <div class="col">
            <div class="card">
              <div class="card-header">
                <img src="ADMIN/<?php echo $final['image']; ?>" alt="rotaract" />
              </div>
              <div class="card-body">
                <h2>
                  <?php echo $final['name'] ?>
                </h2>
                <h6>Event Date - <span><?php echo $final['date'] ?></span></h6>
                <hr>
                <p>
                  <?php echo $final['context'] ?>
                </p>
                <div class="row">
                  <div class="col"> <a href="Admin/<?php if ($final['filename'] == true) {
                                                      echo $final['file'];
                                                    } else {
                                                      header('location:rotaract.php');
                                                    } ?> "><button class="btn btn-primary">Read More</button></a></div>
                  <div class="col">
                    <div class="container">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#enroll">
                        Enroll Now
                      </button>
                    </div>
                  </div>
                </div>
                <!-- Modal -->
                <hr>
                <div class="user">
                  <img src="images/ssvgi/rata.png" alt="user" />
                  <div class="user-info">
                    <h5>Posted On</h5>
                    <p><?php echo $final['post_time'] ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </center>
  <center>
    <div class="modal fade" id="enroll" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header border-bottom-0">
            <h5 class="modal-title" id="exampleModalLabel">Event Enroll Form</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form role="form" action="rotaractenroll.php" method="POST" enctype="multipart/form-data" onsubmit="myFunction()">
            <div class="modal-body">
              <div class="form-group">
                <label>Full name</label>
                <input type="text" class="form-control form2" name="name" aria-describedby="emailHelp" placeholder="Enter Full Name" style="background-color: white;">
              </div>
              <div class="form-group">
                <label for="password1">Course</label>
                <input type="text" class="form-control form2" name="course" placeholder="Course" style="background-color: white;">
              </div>
              <div class="form-group">
                <label for="">Email ID</label>
                <input type="email" class="form-control form2" name="email" placeholder="Enter email" style="background-color: white;">
              </div>
              <div class="form-group">
                <label for="">Mobile Number</label>
                <input type="number" class="form-control form2" name="number" placeholder="Enter Mobile Number" style="background-color: white;">
              </div>
              <div class="form-group">
                <label for="">Event Name</label>
                <input type="text" class="form-control form2" name="eventname" placeholder="Enter Evenet Name" style="background-color: white;">
              </div>
            </div>
            <div class="modal-footer border-top-0 d-flex justify-content-center">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </form>
          <script>
            function myFunction() {
              alert("You Are successfully enrolled for the event")
            }
          </script>
        </div>
      </div>
    </div>
  </center>
  <hr>
  <center>
    <div class="container" id="team">
      <section class="ftco-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="heading-section mb-5">OUR TEAM</h2>
            </div>
            <?php
            include("dbs/connect.php");
            $sql = "SELECT  id, role, post, name, image FROM teammember where id = '20'";
            $results = $connect->query($sql);
            $final = $results->fetch_array();
            ?>
            <div class="col-md-12">
              <div class="featured-carousel owl-carousel">
                <div class="item">
                  <div class="work">
                    <div class="img d-flex align-items-end justify-content-center" style="background-image: url(ADMIN/<?php echo $final[4] ?>);">
                      <div class="text w-100">
                        <span class="cat"><?php echo $final[3] ?></span>
                        <div class="container" style="background-color: black; width: 100%;">
                          <h3><a href="#"><?php echo $final[2] ?></a></h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                include("dbs/connect.php");
                $sql = "SELECT  id, role, post, name, image FROM teammember where id = '21'";
                $results = $connect->query($sql);
                $final2 = $results->fetch_array();
                ?>
                <div class="item">
                  <div class="work">
                    <div class="img d-flex align-items-end justify-content-center" style="background-image: url(ADMIN/<?php echo $final2[4] ?>);">
                      <div class="text w-100">
                        <span class="cat"><?php echo $final2[3] ?></span>
                        <div class="container" style="background-color: black; width: 100%;">
                          <h3><a href="#"><?php echo $final2[2] ?></a></h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                include("dbs/connect.php");
                $sql = "SELECT  id, role, post, name, image FROM teammember where id = '22'";
                $results = $connect->query($sql);
                $final2 = $results->fetch_array();
                ?>
                <div class="item">
                  <div class="work">
                    <div class="img d-flex align-items-end justify-content-center" style="background-image: url(ADMIN/<?php echo $final2[4] ?>);">
                      <div class="text w-100">
                        <span class="cat"><?php echo $final2[3] ?></span>
                        <div class="container" style="background-color: black; width: 100%;">
                          <h3><a href="#"><?php echo $final2[2] ?></a></h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                include("dbs/connect.php");
                $sql = "SELECT  id, role, post, name, image FROM teammember where id = '23'";
                $results = $connect->query($sql);
                $final2 = $results->fetch_array();
                ?>
                <div class="item">
                  <div class="work">
                    <div class="img d-flex align-items-end justify-content-center" style="background-image: url(ADMIN/<?php echo $final2[4] ?>);">
                      <div class="text w-100">
                        <span class="cat"><?php echo $final2[3] ?></span>
                        <div class="container" style="background-color: black; width: 100%;">
                          <h3><a href="#"><?php echo $final2[2] ?></a></h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                include("dbs/connect.php");
                $sql = "SELECT  id, role, post, name, image FROM teammember where id = '24'";
                $results = $connect->query($sql);
                $final2 = $results->fetch_array();
                ?>
                <div class="item">
                  <div class="work">
                    <div class="img d-flex align-items-end justify-content-center" style="background-image: url(ADMIN/<?php echo $final2[4] ?>);">
                      <div class="text w-100">
                        <span class="cat"><?php echo $final2[3] ?></span>
                        <div class="container" style="background-color: black; width: 100%;">
                          <h3><a href="#"><?php echo $final2[2] ?></a></h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                include("dbs/connect.php");
                $sql = "SELECT  id, role, post, name, image FROM teammember where id = '25'";
                $results = $connect->query($sql);
                $final2 = $results->fetch_array();
                ?>
                <div class="item">
                  <div class="work">
                    <div class="img d-flex align-items-end justify-content-center" style="background-image: url(ADMIN/<?php echo $final2[4] ?>);">
                      <div class="text w-100">
                        <span class="cat"><?php echo $final2[3] ?></span>
                        <div class="container" style="background-color: black; width: 100%;">
                          <h3><a href="#"><?php echo $final2[2] ?></a></h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                include("dbs/connect.php");
                $sql = "SELECT  id, role, post, name, image FROM teammember where id = '26'";
                $results = $connect->query($sql);
                $final2 = $results->fetch_array();
                ?>
                <div class="item">
                  <div class="work">
                    <div class="img d-flex align-items-end justify-content-center" style="background-image: url(ADMIN/<?php echo $final2[4] ?>);">
                      <div class="text w-100">
                        <span class="cat"><?php echo $final2[3] ?></span>
                        <div class="container" style="background-color: black; width: 100%;">
                          <h3><a href="#"><?php echo $final2[2] ?></a></h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </center>
  <!--Carousel part2 end-->
  <?php
  include('plugins/footer.php');
  ?>
</body>

</html>