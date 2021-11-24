

<?php
include('../dbs/connect.php');
?>

<?php
if ($_SESSION['role']=='admin') { ?>

<!-- admin -->
<div class="sidebar" data-color="orange">
<!--Change the color of the sidebar using: data-color="blue | green | orange | red | yellow"-->
      <div class="logo">
        <a href=".php" class="simple-text logo-normal">
          ADMIN PANEL
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="dashboard.php">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>          
          <li>
          <a href="memberlist.php">
              <i class="now-ui-icons business_badge"></i>
              <p>Member List</p>
            </a>
          </li>
           <li>
            <a href="mail.php">
              <i class="now-ui-icons ui-1_email-85"></i>
              <p>Mail Box</p>
            </a>
          </li>
            <div class="logo">
        <a href="panache.php" class="simple-text logo-normal">
          PANACHE
        </a>
      </div>
          <li>
            <a href="panache.php">
              <i class="now-ui-icons ui-1_simple-add"></i>
              <p>Add Event</p>
            </a>
          </li>
          <li>
            <a href="panachelist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
          <li>
            <a href="panacheenroll.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Event Enrollments</p>
            </a>
          </li>
          <li>
            <a href="panacheapplydata.php">
              <i class="now-ui-icons gestures_tap-01"></i>
              <p>Applications</p>
            </a>
          </li>
            <div class="logo">
        <a href="stride.php" class="simple-text logo-normal">
          STRIDE
        </a>
      </div>
          <li>
          <a href="stride.php">
              <i class="now-ui-icons ui-1_simple-add"></i>
              <p>Add Event</p>
            </a>
          </li>
          <li>
            <a href="stridelist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
          <li>
            <a href="strideenroll.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Event Enrollments</p>
            </a>
          </li>
          <li>
            <a href="strideapplydata.php">
              <i class="now-ui-icons gestures_tap-01"></i>
              <p>Applications</p>
            </a>
          </li>
            <div class="logo">
        <a href="itech.php" class="simple-text logo-normal">
          I-TECH
        </a>
      </div>
          <li>
          <a href="itech.php">
              <i class="now-ui-icons ui-1_simple-add"></i>
              <p>Add Event</p>
            </a>
          </li>
          <li>
            <a href="itechlist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
          <li>
            <a href="itechenroll.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Event Enrollments</p>
            </a>
          </li>
          <li>
            <a href="itechapplydata.php">
              <i class="now-ui-icons gestures_tap-01"></i>
              <p>Applications</p>
            </a>
          </li>
            <div class="logo">
        <a href="rockon.php" class="simple-text logo-normal">
         ROCK-ON
        </a>
      </div>
          <li>
          <a href="rockon.php">
              <i class="now-ui-icons ui-1_simple-add"></i>
              <p>Add Event</p>
            </a>
          </li>
          <li>
            <a href="rockonlist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
          <li>
            <a href="rockonenroll.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Event Enrollments</p>
            </a>
          </li>
          <li>
            <a href="rockonapplydata.php">
              <i class="now-ui-icons gestures_tap-01"></i>
              <p>Applications</p>
            </a>
          </li>
            <div class="logo">
        <a href="images.php" class="simple-text logo-normal">
          IMAGES
        </a>
      </div>
          <li>
          <a href="images.php">
              <i class="now-ui-icons ui-1_simple-add"></i>
              <p>Add Event</p>
            </a>
          </li>
          <li>
            <a href="imageslist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
          <li>
            <a href="imagesenroll.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Event Enrollments</p>
            </a>
          </li>
          <li>
            <a href="imagesapplydata.php">
              <i class="now-ui-icons gestures_tap-01"></i>
              <p>Applications</p>
            </a>
          </li>
            <div class="logo">
        <a href="mfactor.php" class="simple-text logo-normal">
          M-FACTOR
        </a>
      </div>
          <li>
          <a href="mfactor.php">
              <i class="now-ui-icons ui-1_simple-add"></i>
              <p>Add Event</p>
            </a>
          </li>
          <li>
            <a href="mfactorlist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
          <li>
            <a href="mfactorenroll.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Event Enrollments</p>
            </a>
          </li>
          <li>
            <a href="mfactorapplydata.php">
              <i class="now-ui-icons gestures_tap-01"></i>
              <p>Applications</p>
            </a>
          </li>
            <div class="logo">
        <a href="responsible.php" class="simple-text logo-normal">
          The Responsible Invertian
        </a>
      </div>
          <li>
          	<a href="responsible.php">
              <i class="now-ui-icons ui-1_simple-add"></i>
              <p>Add Event</p>
            </a>
          </li>
          <li>
            <a href="responsiblelist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
          <li>
            <a href="responsibleenroll.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Event Enrollments</p>
            </a>
          </li>
          <li>
            <a href="responsibleapplydata.php">
              <i class="now-ui-icons gestures_tap-01"></i>
              <p>Applications</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand">Admin Panel</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">  
              <li class="nav-item">
                <a class="nav-link" href="plugins/logout.php">
                  <i class="now-ui-icons ui-1_lock-circle-open"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Sign Out</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

<!-- stride -->
<?php }elseif ($_SESSION['role']=='stride') { ?>
      <div class="sidebar" data-color="orange">
      <div class="logo">
        <a href="#.php" class="simple-text logo-normal">
          ADMIN PANEL
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <div class="logo">
        <a href="../stride.php" class="simple-text logo-normal">
          Stride
        </a>
      </div>
        <li>
          <a href="stridememberlist.php">
              <i class="now-ui-icons business_badge"></i>
              <p>Member List</p>
            </a>
          </li>
          <li>
          <a href="stride.php">
              <i class="now-ui-icons ui-1_simple-add"></i>
              <p>Add Event</p>
            </a>
          </li>
          <li>
            <a href="stridelist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
          <li>
            <a href="strideenroll.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Event Enrollments</p>
            </a>
          </li>
          <li>
            <a href="strideapplydata.php">
              <i class="now-ui-icons gestures_tap-01"></i>
              <p>Applications</p>
            </a>
          </li>
           <li>
            <a href="mail.php">
              <i class="now-ui-icons ui-1_email-85"></i>
              <p>Mail Box</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand">Welcome to Stride Club</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-#" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="plugins/logout.php">
                  <i class="now-ui-icons ui-1_lock-circle-open"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Sign Out</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

<!-- panache -->
<?php }elseif ($_SESSION['role']=='panache') { ?>
      <div class="sidebar" data-color="orange">
      <div class="logo">
        <a href="#.php" class="simple-text logo-normal">
          ADMIN PANEL
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <div class="logo">
        <a href="../panache.php" class="simple-text logo-normal">
        Panache
        </a>
      </div>
          <li>
          <a href="panachememberlist.php">
              <i class="now-ui-icons business_badge"></i>
              <p>Member List</p>
            </a>
          </li>
          <li>
          <a href="panache.php">
              <i class="now-ui-icons ui-1_simple-add"></i>
              <p>Add Event</p>
            </a>
          </li>
          <li>
            <a href="panachelist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
          <li>
            <a href="panacheenroll.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Event Enrollments</p>
            </a>
          </li>
          <li>
            <a href="panacheapplydata.php">
              <i class="now-ui-icons gestures_tap-01"></i>
              <p>Applications</p>
            </a>
          </li>
           <li>
            <a href="mail.php">
              <i class="now-ui-icons ui-1_email-85"></i>
              <p>Mail Box</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand">Welcome to Panache Club</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="plugins/logout.php">
                  <i class="now-ui-icons ui-1_lock-circle-open"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Sign Out</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

<!-- itech -->
<?php }elseif ($_SESSION['role']=='itech') { ?>
      <div class="sidebar" data-color="orange">
      <div class="logo">
        <a href="#.php" class="simple-text logo-normal">
          ADMIN PANEL
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <div class="logo">
        <a href="../itech.php" class="simple-text logo-normal">
        I-tech
        </a>
      </div>
          <li>
          <a href="itechmemberlist.php">
              <i class="now-ui-icons business_badge"></i>
              <p>Member List</p>
            </a>
          </li>
          <li>
          <a href="itech.php">
              <i class="now-ui-icons ui-1_simple-add"></i>
              <p>Add Event</p>
            </a>
          </li>
          <li>
            <a href="itechlist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
            <a href="itechenroll.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Event Enrollments</p>
            </a>
          </li>
          <li>
            <a href="itechapplydata.php">
              <i class="now-ui-icons gestures_tap-01"></i>
              <p>Applications</p>
            </a>
          </li>
          <li>
           <li>
            <a href="mail.php">
              <i class="now-ui-icons ui-1_email-85"></i>
              <p>Mail Box</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand">Welcome to I-Tech Club</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
              
              <li class="nav-item">
                <a class="nav-link" href="plugins/logout.php">
                  <i class="now-ui-icons ui-1_lock-circle-open"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Sign Out</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <!-- rockon -->

        <?php }elseif ($_SESSION['role']=='rockon') { ?>
          <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="#.php" class="simple-text logo-normal">
          ADMIN PANEL
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          
         
            <div class="logo">
        <a href="../rockon.php" class="simple-text logo-normal">
         ROCK-ON
        </a>
      </div>
          <li>
          <a href="rockonmemberlist.php">
              <i class="now-ui-icons business_badge"></i>
              <p>Member List</p>
            </a>
          </li>
          <li>
          <a href="rockon.php">
              <i class="now-ui-icons ui-1_simple-add"></i>
              <p>Add Event</p>
            </a>
          </li>
          <li>
            <a href="rockonlist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
          <li>
            <a href="rockonenroll.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Event Enrollments</p>
            </a>
          </li>
          <li>
            <a href="rockonapplydata.php">
              <i class="now-ui-icons gestures_tap-01"></i>
              <p>Applications</p>
            </a>
          </li>
           <li>
            <a href="mail.php">
              <i class="now-ui-icons ui-1_email-85"></i>
              <p>Mail Box</p>
            </a>
          </li>
            
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand">Welcome to Rock-on Club</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
              
              <li class="nav-item">
                <a class="nav-link" href="plugins/logout.php">
                  <i class="now-ui-icons ui-1_lock-circle-open"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Sign Out</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>



        <!-- images -->

          <?php }elseif ($_SESSION['role']=='images') { ?>
      <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="#.php" class="simple-text logo-normal">
          ADMIN PANEL
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          
        
            <div class="logo">
        <a href="../images.php" class="simple-text logo-normal">
        images
        </a>
      </div>
          <li>
          <a href="imagesmemberlist.php">
              <i class="now-ui-icons business_badge"></i>
              <p>Member List</p>
            </a>
          </li>
          <li>
          <a href="images.php">
              <i class="now-ui-icons ui-1_simple-add"></i>
              <p>Add Event</p>
            </a>
          </li>
          <li>
            <a href="imageslist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
          <li>
            <a href="imagesenroll.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Event Enrollments</p>
            </a>
          </li>
          <li>
            <a href="imagesapplydata.php">
              <i class="now-ui-icons gestures_tap-01"></i>
              <p>Applications</p>
            </a>
          </li>
           <li>
            <a href="mail.php">
              <i class="now-ui-icons ui-1_email-85"></i>
              <p>Mail Box</p>
            </a>
          </li>
            
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand">Welcome to Images Club</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
              
              <li class="nav-item">
                <a class="nav-link" href="plugins/logout.php">
                  <i class="now-ui-icons ui-1_lock-circle-open"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Sign Out</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>



      <!-- responsible -->

          <?php }elseif ($_SESSION['role']=='responsible') { ?>
      <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="#.php" class="simple-text logo-normal">
          ADMIN PANEL
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          
        
            <div class="logo">
        <a href="../responsible.php" class="simple-text logo-normal">
        The Responsible Invertian
        </a>
      </div>
          <li>
          <a href="responsiblememberlist.php">
              <i class="now-ui-icons business_badge"></i>
              <p>Member List</p>
            </a>
          </li>
          <li>
          <a href="responsible.php">
              <i class="now-ui-icons ui-1_simple-add"></i>
              <p>Add Event</p>
            </a>
          </li>
          <li>
          <a href="responsiblelist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Event List</p>
            </a>
          </li>
          <li>
            <a href="responsibleenroll.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Event Enrollments</p>
            </a>
          </li>
          <li>
            <a href="responsibleapplydata.php">
              <i class="now-ui-icons gestures_tap-01"></i>
              <p>Applications</p>
            </a>
          </li>
           <li>
            <a href="mail.php">
              <i class="now-ui-icons ui-1_email-85"></i>
              <p>Mail Box</p>
            </a>
          </li>
         
            
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand">Welcome to The Responsible Invertian Club</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
              
              <li class="nav-item">
                <a class="nav-link" href="plugins/logout.php">
                  <i class="now-ui-icons ui-1_lock-circle-open"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Sign Out</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>



      <!-- mfactor -->

         

          <?php }elseif ($_SESSION['role']=='mfactor') { ?>
      <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="#.php" class="simple-text logo-normal">
          ADMIN PANEL
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          
        
            <div class="logo">
        <a href="../mfactor.php" class="simple-text logo-normal">
        M-Factor
        </a>
      </div>
          <li>
          <a href="mfactormemberlist.php">
              <i class="now-ui-icons business_badge"></i>
              <p>Member List</p>
            </a>
          </li>
          <li>
          <a href="mfactor.php">
              <i class="now-ui-icons ui-1_simple-add"></i>
              <p>Add Event</p>
            </a>
          </li>
          <li>
            <a href="mfactorlist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
          <li>
            <a href="mfactorenroll.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Event Enrollments</p>
            </a>
          </li>
          <li>
            <a href="mfactorapplydata.php">
              <i class="now-ui-icons gestures_tap-01"></i>
              <p>Applications</p>
            </a>
          </li>
           <li>
            <a href="mail.php">
              <i class="now-ui-icons ui-1_email-85"></i>
              <p>Mail Box</p>
            </a>
          </li>
          
            
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand">Welcome to M-Factor Club</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
              
              <li class="nav-item">
                <a class="nav-link" href="plugins/logout.php">
                  <i class="now-ui-icons ui-1_lock-circle-open"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Sign Out</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    
            <!-- stride -->


    <?php }elseif ($_SESSION['role']=='stridetm') { ?>
      <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="#.php" class="simple-text logo-normal">
          ADMIN PANEL
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          
        
            <div class="logo">
        <a href="../stride.php" class="simple-text logo-normal">
            stride
        </a>
      </div>
          <li>
          <a href="stride.php">
              <i class="now-ui-icons ui-1_simple-add"></i>
              <p>Add Event</p>
            </a>
          </li>
          <li>
            <a href="stridelist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
          <li>
            <a href="strideenroll.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Event Enrollments</p>
            </a>
          </li>
           <li>
            <a href="mail.php">
              <i class="now-ui-icons ui-1_email-85"></i>
              <p>Mail Box</p>
            </a>
          </li>
          
            
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand">Welcome to Stride Club</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
              
              <li class="nav-item">
                <a class="nav-link" href="plugins/logout.php">
                  <i class="now-ui-icons ui-1_lock-circle-open"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Sign Out</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <!-- panache -->


<?php }elseif ($_SESSION['role']=='panachetm') { ?>
      <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="#.php" class="simple-text logo-normal">
          ADMIN PANEL
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          
        
            <div class="logo">
        <a href="../panache.php" class="simple-text logo-normal">
        Panache
        </a>
      </div>
          <li>
          <a href="panache.php">
              <i class="now-ui-icons ui-1_simple-add"></i>
              <p>Add Event</p>
            </a>
          </li>
          <li>
            <a href="panachelist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
          <li>
            <a href="panacheenroll.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Event Enrollments</p>
            </a>
          </li>
           <li>
            <a href="mail.php">
              <i class="now-ui-icons ui-1_email-85"></i>
              <p>Mail Box</p>
            </a>
          </li>
            
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand">Welcome to Panache Club</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
              
              <li class="nav-item">
                <a class="nav-link" href="plugins/logout.php">
                  <i class="now-ui-icons ui-1_lock-circle-open"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Sign Out</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <!-- itech -->


    <?php }elseif ($_SESSION['role']=='itechtm') { ?>
      <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="#.php" class="simple-text logo-normal">
          ADMIN PANEL
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          
        
            <div class="logo">
        <a href="../itech.php" class="simple-text logo-normal">
        I-tech
        </a>
      </div>
          <li>
          <a href="itech.php">
              <i class="now-ui-icons ui-1_simple-add"></i>
              <p>Add Event</p>
            </a>
          </li>
          <li>
            <a href="itechlist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
          <li>
            <a href="itechenroll.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Event Enrollments</p>
            </a>
          </li>
           <li>
            <a href="mail.php">
              <i class="now-ui-icons ui-1_email-85"></i>
              <p>Mail Box</p>
            </a>
          </li>
            
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand">Welcome to I-Tech Club</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
              
              <li class="nav-item">
                <a class="nav-link" href="plugins/logout.php">
                  <i class="now-ui-icons ui-1_lock-circle-open"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Sign Out</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <!-- rockon -->

        <?php }elseif ($_SESSION['role']=='rockontm') { ?>
          <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="#.php" class="simple-text logo-normal">
          ADMIN PANEL
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          
         
            <div class="logo">
        <a href="../rockon.php" class="simple-text logo-normal">
         ROCK-ON
        </a>
      </div>
          <li>
          <a href="rockon.php">
              <i class="now-ui-icons ui-1_simple-add"></i>
              <p>Add Event</p>
            </a>
          </li>
          <li>
            <a href="rockonlist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
          <li>
            <a href="rockonenroll.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Event Enrollments</p>
            </a>
          </li>
           <li>
            <a href="mail.php">
              <i class="now-ui-icons ui-1_email-85"></i>
              <p>Mail Box</p>
            </a>
          </li>
          
            
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand">Welcome to Rock-on Club</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
              
              <li class="nav-item">
                <a class="nav-link" href="plugins/logout.php">
                  <i class="now-ui-icons ui-1_lock-circle-open"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Sign Out</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>



        <!-- images -->

          <?php }elseif ($_SESSION['role']=='imagestm') { ?>
      <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="#.php" class="simple-text logo-normal">
          ADMIN PANEL
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          
        
            <div class="logo">
        <a href="../images.php" class="simple-text logo-normal">
        images
        </a>
      </div>
          <li>
          <a href="images.php">
              <i class="now-ui-icons ui-1_simple-add"></i>
              <p>Add Event</p>
            </a>
          </li>
          <li>
            <a href="imageslist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
          <li>
            <a href="imagesenroll.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Event Enrollments</p>
            </a>
          </li>
           <li>
            <a href="mail.php">
              <i class="now-ui-icons ui-1_email-85"></i>
              <p>Mail Box</p>
            </a>
          </li>
            
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand">Welcome to Images Club</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
              
              <li class="nav-item">
                <a class="nav-link" href="plugins/logout.php">
                  <i class="now-ui-icons ui-1_lock-circle-open"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Sign Out</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>



      <!-- responsible -->

          <?php }elseif ($_SESSION['role']=='responsibletm') { ?>
      <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="#.php" class="simple-text logo-normal">
          ADMIN PANEL
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          
        
            <div class="logo">
        <a href="../responsible.php" class="simple-text logo-normal">
        The Responsible Invertian
        </a>
      </div>
          <li>
          <a href="responsible.php">
              <i class="now-ui-icons ui-1_simple-add"></i>
              <p>Add Event</p>
            </a>
          </li>
          <li>
            <a href="responsibleenroll.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Event Enrollments</p>
            </a>
          </li>
          <li>
            <a href="mail.php">
              <i class="now-ui-icons ui-1_email-85"></i>
              <p>Mail Box</p>
            </a>
          </li>
            
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand">Welcome to The Responsible Invertian Club</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
              
              <li class="nav-item">
                <a class="nav-link" href="plugins/logout.php">
                  <i class="now-ui-icons ui-1_lock-circle-open"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Sign Out</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>



      <!-- mfactor -->

         

          <?php }elseif ($_SESSION['role']=='mfactortm') { ?>
      <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="#.php" class="simple-text logo-normal">
          ADMIN PANEL
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          
        
            <div class="logo">
        <a href="../mfactor.php" class="simple-text logo-normal">
        M-Factor
        </a>
      </div>
          <li>
          <a href="mfactor.php">
              <i class="now-ui-icons ui-1_simple-add"></i>
              <p>Add Event</p>
            </a>
          </li>
          <li>
            <a href="mfactorlist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
          <li>
            <a href="mfactorenroll.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Event Enrollments</p>
            </a>
          </li>
           <li>
            <a href="mail.php">
              <i class="now-ui-icons ui-1_email-85"></i>
              <p>Mail Box</p>
            </a>
          </li>  
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand">Welcome to M-Factor Club</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-#" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="plugins/logout.php">
                  <i class="now-ui-icons ui-1_lock-circle-open"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Sign Out</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <?php } ?>
      
