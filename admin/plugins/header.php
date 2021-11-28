<?php include('../dbs/connect.php'); ?>
<?php if ($_SESSION['role'] == 'admin') { ?>
  <!-- Super Admin -->
  <div class="sidebar" data-color="orange">
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
          <a href="kalanjali.php" class="simple-text logo-normal">
            KALANJALI
          </a>
        </div>
        <li>
          <a href="kalanjali.php">
            <i class="now-ui-icons ui-1_simple-add"></i>
            <p>Add Event</p>
          </a>
        </li>
        <li>
          <a href="kalanjalilist.php">
            <i class="now-ui-icons files_paper"></i>
            <p>Events List</p>
          </a>
        </li>
        <li>
          <a href="kalanjalienroll.php">
            <i class="now-ui-icons design_bullet-list-67"></i>
            <p>Event Enrollments</p>
          </a>
        </li>
        <li>
          <a href="kalanjaliapplydata.php">
            <i class="now-ui-icons gestures_tap-01"></i>
            <p>Applications</p>
          </a>
        </li>
        <div class="logo">
          <a href="gladiators.php" class="simple-text logo-normal">
            GLADIATORS
          </a>
        </div>
        <li>
          <a href="gladiators.php">
            <i class="now-ui-icons ui-1_simple-add"></i>
            <p>Add Event</p>
          </a>
        </li>
        <li>
          <a href="gladiatorslist.php">
            <i class="now-ui-icons files_paper"></i>
            <p>Events List</p>
          </a>
        </li>
        <li>
          <a href="gladiatorsenroll.php">
            <i class="now-ui-icons design_bullet-list-67"></i>
            <p>Event Enrollments</p>
          </a>
        </li>
        <li>
          <a href="gladiatorsapplydata.php">
            <i class="now-ui-icons gestures_tap-01"></i>
            <p>Applications</p>
          </a>
        </li>
        <div class="logo">
          <a href="gizmofreaks.php" class="simple-text logo-normal">
            GIZMOFREAKS
          </a>
        </div>
        <li>
          <a href="gizmofreaks.php">
            <i class="now-ui-icons ui-1_simple-add"></i>
            <p>Add Event</p>
          </a>
        </li>
        <li>
          <a href="gizmofreakslist.php">
            <i class="now-ui-icons files_paper"></i>
            <p>Events List</p>
          </a>
        </li>
        <li>
          <a href="gizmofreaksenroll.php">
            <i class="now-ui-icons design_bullet-list-67"></i>
            <p>Event Enrollments</p>
          </a>
        </li>
        <li>
          <a href="gizmofreaksapplydata.php">
            <i class="now-ui-icons gestures_tap-01"></i>
            <p>Applications</p>
          </a>
        </li>
        <div class="logo">
          <a href="oasis.php" class="simple-text logo-normal">
            OASIS
          </a>
        </div>
        <li>
          <a href="oasis.php">
            <i class="now-ui-icons ui-1_simple-add"></i>
            <p>Add Event</p>
          </a>
        </li>
        <li>
          <a href="oasislist.php">
            <i class="now-ui-icons files_paper"></i>
            <p>Events List</p>
          </a>
        </li>
        <li>
          <a href="oasisenroll.php">
            <i class="now-ui-icons design_bullet-list-67"></i>
            <p>Event Enrollments</p>
          </a>
        </li>
        <li>
          <a href="oasisapplydata.php">
            <i class="now-ui-icons gestures_tap-01"></i>
            <p>Applications</p>
          </a>
        </li>
        <div class="logo">
          <a href="rotaract.php" class="simple-text logo-normal">
            ROTARACT
          </a>
        </div>
        <li>
          <a href="rotaract.php">
            <i class="now-ui-icons ui-1_simple-add"></i>
            <p>Add Event</p>
          </a>
        </li>
        <li>
          <a href="rotaractlist.php">
            <i class="now-ui-icons files_paper"></i>
            <p>Events List</p>
          </a>
        </li>
        <li>
          <a href="rotaractenroll.php">
            <i class="now-ui-icons design_bullet-list-67"></i>
            <p>Event Enrollments</p>
          </a>
        </li>
        <li>
          <a href="rotaractapplydata.php">
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
    
    <!-- gladiators Leader-->
  <?php } elseif ($_SESSION['role'] == 'gladiators') { ?>
    <div class="sidebar" data-color="orange">
      <div class="logo">
        <a href="#.php" class="simple-text logo-normal">
          ADMIN PANEL
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <div class="logo">
            <a href="../gladiators.php" class="simple-text logo-normal">
              Gladiators
            </a>
          </div>
          <li>
            <a href="gladiatorsmemberlist.php">
              <i class="now-ui-icons business_badge"></i>
              <p>Member List</p>
            </a>
          </li>
          <li>
            <a href="gladiators.php">
              <i class="now-ui-icons ui-1_simple-add"></i>
              <p>Add Event</p>
            </a>
          </li>
          <li>
            <a href="gladiatorslist.php">
              <i class="now-ui-icons files_paper"></i>
              <p>Events List</p>
            </a>
          </li>
          <li>
            <a href="gladiatorsenroll.php">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Event Enrollments</p>
            </a>
          </li>
          <li>
            <a href="gladiatorsapplydata.php">
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
            <a class="navbar-brand">Welcome to Gladiators Club</a>
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
      <!-- gladiators Team Members -->
    <?php } elseif ($_SESSION['role'] == 'gladiatorstm') { ?>
      <div class="sidebar" data-color="orange">
        <div class="logo">
          <a href="#.php" class="simple-text logo-normal">
            ADMIN PANEL
          </a>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
          <ul class="nav">
            <div class="logo">
              <a href="../gladiators.php" class="simple-text logo-normal">
                Gladiators
              </a>
            </div>
            <li>
              <a href="gladiators.php">
                <i class="now-ui-icons ui-1_simple-add"></i>
                <p>Add Event</p>
              </a>
            </li>
            <li>
              <a href="gladiatorslist.php">
                <i class="now-ui-icons files_paper"></i>
                <p>Events List</p>
              </a>
            </li>
            <li>
              <a href="gladiatorsenroll.php">
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
              <a class="navbar-brand">Welcome to Gladiators Club</a>
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

        <!-- Kalanjali Leader -->
      <?php } elseif ($_SESSION['role'] == 'kalanjali') { ?>
        <div class="sidebar" data-color="orange">
          <div class="logo">
            <a href="#.php" class="simple-text logo-normal">
              ADMIN PANEL
            </a>
          </div>
          <div class="sidebar-wrapper" id="sidebar-wrapper">
            <ul class="nav">
              <div class="logo">
                <a href="../kalanjali.php" class="simple-text logo-normal">
                  Kalanjali
                </a>
              </div>
              <li>
                <a href="kalanjalimemberlist.php">
                  <i class="now-ui-icons business_badge"></i>
                  <p>Member List</p>
                </a>
              </li>
              <li>
                <a href="kalanjali.php">
                  <i class="now-ui-icons ui-1_simple-add"></i>
                  <p>Add Event</p>
                </a>
              </li>
              <li>
                <a href="kalanjalilist.php">
                  <i class="now-ui-icons files_paper"></i>
                  <p>Events List</p>
                </a>
              </li>
              <li>
                <a href="kalanjalienroll.php">
                  <i class="now-ui-icons design_bullet-list-67"></i>
                  <p>Event Enrollments</p>
                </a>
              </li>
              <li>
                <a href="kalanjaliapplydata.php">
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
                <a class="navbar-brand">Welcome to Kalanjali Club</a>
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
          <!-- Kalanjali Team Members -->
        <?php } elseif ($_SESSION['role'] == 'kalanjalitm') { ?>
          <div class="sidebar" data-color="orange">
            <div class="logo">
              <a href="#.php" class="simple-text logo-normal">
                ADMIN PANEL
              </a>
            </div>
            <div class="sidebar-wrapper" id="sidebar-wrapper">
              <ul class="nav">
                <div class="logo">
                  <a href="../kalanjali.php" class="simple-text logo-normal">
                    Kalanjali
                  </a>
                </div>
                <li>
                  <a href="kalanjali.php">
                    <i class="now-ui-icons ui-1_simple-add"></i>
                    <p>Add Event</p>
                  </a>
                </li>
                <li>
                  <a href="kalanjalilist.php">
                    <i class="now-ui-icons files_paper"></i>
                    <p>Events List</p>
                  </a>
                </li>
                <li>
                  <a href="kalanjalienroll.php">
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
                  <a class="navbar-brand">Welcome to Kalanjali Club</a>
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

            <!-- Gizmofreaks Leader -->
          <?php } elseif ($_SESSION['role'] == 'gizmofreaks') { ?>
            <div class="sidebar" data-color="orange">
              <div class="logo">
                <a href="#.php" class="simple-text logo-normal">
                  ADMIN PANEL
                </a>
              </div>
              <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">
                  <div class="logo">
                    <a href="../gizmofreaks.php" class="simple-text logo-normal">
                      Gizmofreaks
                    </a>
                  </div>
                  <li>
                    <a href="gizmofreaksmemberlist.php">
                      <i class="now-ui-icons business_badge"></i>
                      <p>Member List</p>
                    </a>
                  </li>
                  <li>
                    <a href="gizmofreaks.php">
                      <i class="now-ui-icons ui-1_simple-add"></i>
                      <p>Add Event</p>
                    </a>
                  </li>
                  <li>
                    <a href="gizmofreakslist.php">
                      <i class="now-ui-icons files_paper"></i>
                      <p>Events List</p>
                    </a>
                  </li>
                  <a href="gizmofreaksenroll.php">
                    <i class="now-ui-icons design_bullet-list-67"></i>
                    <p>Event Enrollments</p>
                  </a>
                  </li>
                  <li>
                    <a href="gizmofreaksapplydata.php">
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
                    <a class="navbar-brand">Welcome to Gizmofreaks Club</a>
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

              <!-- Gizmofreaks Team Members -->
            <?php } elseif ($_SESSION['role'] == 'gizmofreakstm') { ?>
              <div class="sidebar" data-color="orange">
                <div class="logo">
                  <a href="#.php" class="simple-text logo-normal">
                    ADMIN PANEL
                  </a>
                </div>
                <div class="sidebar-wrapper" id="sidebar-wrapper">
                  <ul class="nav">
                    <div class="logo">
                      <a href="../gizmofreaks.php" class="simple-text logo-normal">
                        Gizmofreaks
                      </a>
                    </div>
                    <li>
                      <a href="gizmofreaks.php">
                        <i class="now-ui-icons ui-1_simple-add"></i>
                        <p>Add Event</p>
                      </a>
                    </li>
                    <li>
                      <a href="gizmofreakslist.php">
                        <i class="now-ui-icons files_paper"></i>
                        <p>Events List</p>
                      </a>
                    </li>
                    <li>
                      <a href="gizmofreaksenroll.php">
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
                      <a class="navbar-brand">Welcome to Gizmofreaks Club</a>
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

                <!-- Oasis Leader -->
              <?php } elseif ($_SESSION['role'] == 'oasis') { ?>
                <div class="sidebar" data-color="orange">
                  <div class="logo">
                    <a href="#.php" class="simple-text logo-normal">
                      ADMIN PANEL
                    </a>
                  </div>
                  <div class="sidebar-wrapper" id="sidebar-wrapper">
                    <ul class="nav">
                      <div class="logo">
                        <a href="../oasis.php" class="simple-text logo-normal">
                          Oasis
                        </a>
                      </div>
                      <li>
                        <a href="oasismemberlist.php">
                          <i class="now-ui-icons business_badge"></i>
                          <p>Member List</p>
                        </a>
                      </li>
                      <li>
                        <a href="oasis.php">
                          <i class="now-ui-icons ui-1_simple-add"></i>
                          <p>Add Event</p>
                        </a>
                      </li>
                      <li>
                        <a href="oasislist.php">
                          <i class="now-ui-icons files_paper"></i>
                          <p>Events List</p>
                        </a>
                      </li>
                      <li>
                        <a href="oasisenroll.php">
                          <i class="now-ui-icons design_bullet-list-67"></i>
                          <p>Event Enrollments</p>
                        </a>
                      </li>
                      <li>
                        <a href="oasisapplydata.php">
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
                        <a class="navbar-brand">Welcome to Oasis Club</a>
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
                  <!-- Oasis Team Members-->
                <?php } elseif ($_SESSION['role'] == 'oasistm') { ?>
                  <div class="sidebar" data-color="orange">
                    <div class="logo">
                      <a href="#.php" class="simple-text logo-normal">
                        ADMIN PANEL
                      </a>
                    </div>
                    <div class="sidebar-wrapper" id="sidebar-wrapper">
                      <ul class="nav">
                        <div class="logo">
                          <a href="../oasis.php" class="simple-text logo-normal">
                            Oasis
                          </a>
                        </div>
                        <li>
                          <a href="oasis.php">
                            <i class="now-ui-icons ui-1_simple-add"></i>
                            <p>Add Event</p>
                          </a>
                        </li>
                        <li>
                          <a href="oasislist.php">
                            <i class="now-ui-icons files_paper"></i>
                            <p>Events List</p>
                          </a>
                        </li>
                        <li>
                          <a href="oasisenroll.php">
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
                          <a class="navbar-brand">Welcome to Oasis Club</a>
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

                    <!-- Rotaract Leader -->
                  <?php } elseif ($_SESSION['role'] == 'rotaract') { ?>
                    <div class="sidebar" data-color="orange">
                      <div class="logo">
                        <a href="#.php" class="simple-text logo-normal">
                          ADMIN PANEL
                        </a>
                      </div>
                      <div class="sidebar-wrapper" id="sidebar-wrapper">
                        <ul class="nav">
                          <div class="logo">
                            <a href="../rotaract.php" class="simple-text logo-normal">
                              Rotaract
                            </a>
                          </div>
                          <li>
                            <a href="rotaractmemberlist.php">
                              <i class="now-ui-icons business_badge"></i>
                              <p>Member List</p>
                            </a>
                          </li>
                          <li>
                            <a href="rotaract.php">
                              <i class="now-ui-icons ui-1_simple-add"></i>
                              <p>Add Event</p>
                            </a>
                          </li>
                          <li>
                            <a href="rotaractlist.php">
                              <i class="now-ui-icons files_paper"></i>
                              <p>Events List</p>
                            </a>
                          </li>
                          <li>
                            <a href="rotaractenroll.php">
                              <i class="now-ui-icons design_bullet-list-67"></i>
                              <p>Event Enrollments</p>
                            </a>
                          </li>
                          <li>
                            <a href="rotaractapplydata.php">
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
                            <a class="navbar-brand">Welcome to Rotaract Club</a>
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
                      <!-- Rotaract Team Members-->
                    <?php } elseif ($_SESSION['role'] == 'rotaracttm') { ?>
                      <div class="sidebar" data-color="orange">
                        <div class="logo">
                          <a href="#.php" class="simple-text logo-normal">
                            ADMIN PANEL
                          </a>
                        </div>
                        <div class="sidebar-wrapper" id="sidebar-wrapper">
                          <ul class="nav">
                            <div class="logo">
                              <a href="../rotaract.php" class="simple-text logo-normal">
                                Rotaract
                              </a>
                            </div>
                            <li>
                              <a href="rotaract.php">
                                <i class="now-ui-icons ui-1_simple-add"></i>
                                <p>Add Event</p>
                              </a>
                            </li>
                            <li>
                              <a href="rotaractlist.php">
                                <i class="now-ui-icons files_paper"></i>
                                <p>Events List</p>
                              </a>
                            </li>
                            <li>
                              <a href="rotaractenroll.php">
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
                              <a class="navbar-brand">Welcome to Rotaract Club</a>
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