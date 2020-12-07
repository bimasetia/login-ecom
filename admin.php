<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Control Panel</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
  </head>

  <body>
    

    <ul id="slide-out" class="side-nav fixed z-depth-4">
      <li>
        <div class="userView">
          <div class="background">
            <img src="assets/img/photo1.png">
          </div>
          <a href="#!user"><img class="circle" src="assets/img/avatar04.png"></a>
          <a href="#!name"><span class="white-text name">Welcome back,</span></a>
          <a href="#!email"><span class="white-text email">user!</span></a>
        </div>
      </li>

      <li>
        <form class="sidebar-form">
          <div class="input-group">
            <input id="accounts" type="text" name="username" class="form-control" placeholder="Universal Search" autocomplete="off" />
          </div>
        </form>
      </li>

      <li><a class="active" href="index.html"><i class="material-icons pink-item">dashboard</i>Dashboard</a></li>
      <li><div class="divider"></div></li>

      <li><a class="subheader">Management</a></li>
      <li><a href="#"><i class="material-icons pink-item">thumbs_up_down</i>Name Approvals</a></li>
      <li><a href="#"><i class="material-icons pink-item">note_add</i>News Comments</a></li>

      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">User Management<i class="material-icons pink-item">person</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="#">User Detail</a></li>
                <li><a href="#">Recent Users</a></li>
                <li><a href="#">Reports</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>

      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header">Account<i class="material-icons pink-item">arrow_drop_down</i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="#">Edit Profile</a></li>
                <li><a href="logout.php">Log Out</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
    </ul>
    <main>
    <section class="content">
      <div class="page-announce valign-wrapper"><a href="#" data-activates="slide-out" class="button-collapse valign hide-on-large-only"><i class="material-icons">menu</i></a><h1 class="page-announce-text valign">// Dashboard </h1></div>
      <!-- Stat Boxes -->
      <div class="row">
        <div class="col l3 s6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>420</h3>
              <p>Projects</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer" class="animsition-link">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          </div><!-- ./col -->
          <div class="col l3 s6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                <h3>69</h3>
                <p>Freelancer</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer" class="animsition-link">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
            </div><!-- ./col -->
            <div class="col l3 s6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>36</h3>
                  <p>Support Emails</p>
                </div>
                <div class="icon">
                  <i class="ion ion-email"></i>
                </div>
                <a href="#" class="small-box-footer" class="animsition-link">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
              </div><!-- ./col -->
              <div class="col l3 s6">
                <!-- small box -->
                <div class="small-box bg-red">
                  <div class="inner">
                    <h3>1337</h3>
                    <p>Unique Visitors</p>
                  </div>
                  <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                  </div>
                  <a href="#" class="small-box-footer" class="animsition-link">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
              </div>

              <div class="container">
                <div class="quick-links center-align">
                  <h3>Quick Links</h3>
                  <div class="row">
                    <div class="col l3 s12 tooltipped" data-position="top" data-delay="50" data-tooltip="Mod Handbook"><a class="waves-effect waves-light btn-large" href="#">Mod Handbook</a></div>
                    <div class="col l3 s12 tooltipped" data-position="top" data-delay="50" data-tooltip="Staff Applications"><a class="waves-effect waves-light btn-large" href="#">Staff Applications</a></div>
                    <div class="col l3 s12 tooltipped" data-position="top" data-delay="50" data-tooltip="Name Guidelines"><a class="waves-effect waves-light btn-large" href="#">User Guidelines</a></div>
                    <div class="col l3 s12 tooltipped" data-position="top" data-delay="50" data-tooltip="Issue Tracker"><a class="waves-effect waves-light btn-large" href="#">Issue Tracker</a></div>
                  </div>
                </div>

                <h3 class="center-align">Current Staff Members</h3>
                <div class="custom-responsive">
                  <table class="striped hover centered">
                    <thead><tr>
                      <th>Username</th>
                      <th>Access Level</th>
                      <th>Last Site Login</th>
                      <th>TFA Active?</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Bima</td>
                      <td>Administrator</td>
                      <td>2020-12-31</td>
                      <td><i class="text-green material-icons">check</i></td>
                    </tr>
                    <tr>
                      <td>Aditya</td>
                      <td>Sales</td>
                      <td>2020-12-21</td>
                      <td><i class="text-green material-icons">check</i></td>
                    </tr>
                    <tr>
                      <td>Hendra Wijaya</td>
                      <td>Accounting</td>
                      <td>2020-12-28</td>
                      <td><i class="text-red material-icons">close</i></td>
                    </tr>
                    <tr>
                      <td>Dian Khalista</td>
                      <td>Customer Service</td>
                      <td>2020-12-29</td>
                      <td><i class="text-green material-icons">check</i></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </section>
        </main>
        <footer class="page-footer">
          <div class="footer-copyright">
            <div class="container">
            </div>
          </div>
        </footer>

       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
        <script>
        // Hide sideNav
        $('.button-collapse').sideNav({
        menuWidth: 300, // Default is 300
        edge: 'left', // Choose the horizontal origin
        closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
          draggable: true // Choose whether you can drag to open on touch screens
          });
          $(document).ready(function(){
          $('.tooltipped').tooltip({delay: 50});
          });
          $('select').material_select();
          $('.collapsible').collapsible();
          </script>
          <div class="fixed-action-btn horizontal tooltipped" data-position="top" dattooltipped" data-position="top" data-delay="50" data-tooltip="Quick Links">
            <a class="btn-floating btn-large red">
              <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
              <li><a class="btn-floating red tooltipped" data-position="top" data-delay="50" data-tooltip="Handbook" href="#"><i class="material-icons">insert_chart</i></a></li>
              <li><a class="btn-floating yellow darken-1 tooltipped" data-position="top" data-delay="50" data-tooltip="Staff Applications" href="#"><i class="material-icons">format_quote</i></a></li>
              <li><a class="btn-floating green tooltipped" data-position="top" data-delay="50" data-tooltip="Name Guidelines" href="#"><i class="material-icons">publish</i></a></li>"
              <li><a class="btn-floating blue tooltipped" data-position="top" data-delay="50" data-tooltip="Issue Tracker" href="#"><i class="material-icons">attach_file</i></a></li>
              <li><a class="btn-floating orange tooltipped" data-position="top" data-delay="50" data-tooltip="Support" href="#"><i class="material-icons">person</i></a></li>
            </ul>
          </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      </body>
    </html>
