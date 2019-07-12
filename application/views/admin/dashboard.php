<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets_admin/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets_admin/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets_admin/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <?php include 'header.php'; ?>
        <!-- /. NAV TOP  -->
        <?php include 'menu.php'; ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
          <div id="page-inner">
            <div class="row">
              <div class="col-md-12">
                <h1 class="page-head-line">DASHBOARD</h1>
                <!-- <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1> -->
              </div>
            </div>
            <!-- /. ROW  -->
            <div class="row">
              <div class="col-md-2">
                  <div class="main-box mb-red">
                      <a href="#">
                          <h3>Slider</h3>
                          <h5>
                           <?php
                            echo $this->db->get('slider')->num_rows();
                           ?>
                          </h5>
                      </a>
                  </div>
              </div>
                <div class="col-md-2">
                    <div class="main-box mb-pink">
                        <a href="#">
                            <h3>Gallery</h3>
                            <h5>
                              <?php
                               echo $this->db->get('img_gallery')->num_rows();
                              ?>
                            </h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="main-box mb-dull">
                        <a href="#">
                            <h3>Video</h3>
                            <h5>
                              <?php
                               echo $this->db->get('video_tbl')->num_rows();
                              ?>
                            </h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="main-box mb-pink">
                        <a href="#">
                            <h3>Music</h3>
                            <h5>
                              <?php
                               echo $this->db->get('music_tbl')->num_rows();
                              ?>
                            </h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="main-box mb-dull">
                        <a href="#">
                            <h3>Events</h3>
                            <h5>
                              <?php
                               echo $this->db->get('event_tbl')->num_rows();
                              ?>
                            </h5>
                        </a>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="main-box mb-red">
                        <a href="#">
                            <h3>Social Link</h3>
                            <h5>
                              <?php
                               echo $this->db->get('link_tbl')->num_rows();
                              ?>
                            </h5>
                        </a>
                    </div>
                </div>
            </div>
                <!-- /. ROW  -->
                <div class="row">
                  <div class="col-md-12">

                      <div class="table-responsive">
                          <table class="table table-striped table-bordered table-hover">
                              <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>User</th>
                                      <th>Update Informations</th>
                                      <th>Type</th>
                                      <th>Date/Time</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>1</td>
                                      <td><span class="label label-success">Admin</span></td>
                                      <td>1 Slider image added.</td>
                                      <td><span class="label label-danger">Image</span></td>
                                      <td>12/06/2018,12:20am</td>
                                  </tr>
                              </tbody>
                          </table>
                      </div>
                  </div>

                    <!-- <div class="col-md-4">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <i class="fa fa-bell fa-fw"></i>Notifications Panel
                            </div>

                            <div class="panel-body">
                                <div class="list-group">

                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-twitter fa-fw"></i>3 New Followers
                                    <span class="pull-right text-muted small"><em>12 minutes ago</em>
                                    </span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-envelope fa-fw"></i>Message Sent
                                    <span class="pull-right text-muted small"><em>27 minutes ago</em>
                                    </span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-tasks fa-fw"></i>New Task
                                    <span class="pull-right text-muted small"><em>43 minutes ago</em>
                                    </span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-upload fa-fw"></i>Server Rebooted
                                    <span class="pull-right text-muted small"><em>11:32 AM</em>
                                    </span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-bolt fa-fw"></i>Server Crashed!
                                    <span class="pull-right text-muted small"><em>11:13 AM</em>
                                    </span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-warning fa-fw"></i>Server Not Responding
                                    <span class="pull-right text-muted small"><em>10:57 AM</em>
                                    </span>
                                    </a>

                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-bolt fa-fw"></i>Server Crashed!
                                    <span class="pull-right text-muted small"><em>11:13 AM</em>
                                    </span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-warning fa-fw"></i>Server Not Responding
                                    <span class="pull-right text-muted small"><em>10:57 AM</em>
                                    </span>
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <i class="fa fa-shopping-cart fa-fw"></i>New Order Placed
                                    <span class="pull-right text-muted small"><em>9:49 AM</em>
                                    </span>
                                    </a>
                                </div>

                                <a href="#" class="btn btn-info btn-block">View All Alerts</a>
                            </div>

                        </div>
                    </div> -->
                </div>
                <!--/.Row-->
                <hr />
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets_admin/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets_admin/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets_admin/js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="assets_admin/js/custom.js"></script>

<!-- <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../../../../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-58127580-1', 'auto');
  ga('send', 'pageview');

</script> -->

</body>

<!-- Mirrored from binarytheme.com/BTlivedemos/2014/09/16/advance-admin/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Jun 2018 10:13:08 GMT -->
</html>
