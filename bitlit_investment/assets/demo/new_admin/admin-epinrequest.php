
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MLM Administrator  </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- jVectorMap -->
    <link href="../production/css/maps/jquery-jvectormap-2.0.3.css" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.css" rel="stylesheet">
	<link href="../vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

  </head>

    <body class="nav-md">
    <div class="container body">
      <div class="main_container">
	  
<div class="col-md-3 left_col">
            <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-users"></i> <span>admin!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="../images/photo.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php">Dashboard</a></li>
                      <li><a href="user-changepassword.php">Edit Password</a></li>
                    </ul>
                  </li>
				  
				  <li><a><i class="fa fa-sitemap"></i> Tree View <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                   <li><a href="user-treeview.php">Tree View</a></li>
				
				<li><a href="user-genology.php">User Genology</a></li> 
				<li><a href="user-tree-details.php">User Tree Details</a></li> </ul>
				
                  </li>
                  
                  
                   <li><a><i class="fa fa-edit"></i> E-Pin System  <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                   	<li><a href="admin-genpin.php">Generate Pin</a></li>
							<li><a href="admin-viewpin.php?pin=0">Balance Pin</a></li>
							<li><a href="admin-viewpin.php?pin=2">Used Pin</a></li>
							<li><a href="admin-usertransfer.php">User Transfer</a></li>
                                                        <li><a href="admin-epinrequest.php">Pin's Request  <span class="label label-danger pull-right">0</span></a></li>
                                                        
		</ul>	
				
                  </li>
                  
                  <li><a><i class="fa fa-file-text"></i>Registered Users  <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="admin-userlist.php"> Active /In-Active Users</a></li>
                         <li><a href="admin-usersponsorlist.php"> User Sponsor's List</a></li>
                       
		</ul>	
				
                  </li>
                  
                 
                  
                  
                  <li><a><i class="fa fa-rupee"></i> Payment<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                   <li><a href="admin-viewnewpayout.php">New Payout Payment</a></li>
		   <li><a href="admin-payoutreport.php">Payout Created Report</a></li>
                   <li><a href="admin-userpayoutreport.php">Search User Payout</a></li>
                   <li><a href="admin-paymentdeposit.php">User Payment Slip<span class="label label-danger pull-right">0</span></a></li>

                   
			        </ul>
				
                  </li>
				  
				  <li><a><i class="fa fa-camera"></i> Gallery<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                   <li><a href="admin-gallery.php">Upload Photo</a></li>
		   <li><a href="admin-galleryview.php">View Photo Gallery</a></li>
			        </ul>
				
                  </li>
                  
                  
                  <li><a><i class="fa fa-newspaper-o"></i> Add News/Achiever <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                   <li><a href="admin-news.php">Add Company News</a></li>
		 <li><a href="admin-newslist.php">Company News List</a></li>
                   <li><a href="admin-achiever.php">Add Company Achievers</a></li>
                    <li><a href="admin-achieverlist.php">Company Achievers List</a></li>
			        </ul>
				
                  </li>
                  
                
                  
             
                  
                  
                  <li><a><i class="fa fa-circle-o-notch"></i> Logout<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                  <li><a href="login.php?log=1"> Logout</a></li>
				
				
                    </ul>
				
                  </li>
                  
                </ul>
              </div>
              <div class="menu_section">
                <h3></h3>
                <ul class="nav side-menu">
                  
         
                        
<!--                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>-->
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="#">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="#">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="#">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="#">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
            <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="../images/photo.png" alt="">admin                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Change password</a></li>
                    
               
                    <li><a href="login.php?log=1"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <!--<li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                <a href="../../../test/class.dbconnect.php"></a>
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>-->
              </ul>
            </nav>
          </div>
        </div>


<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Pin Request</h3>
            </div>


        </div>
        <div class="clearfix"></div>


        <!-- Listing -->

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>My Pin Request search<small>How many pins request to admin</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

           

 <table class='table table-bordered'>
			<thead><tr><th>Sr No</th><th width=50>Pin Quantity</th><th>User Id</th><th>Request Date</th><th>Approval Date</th><th>Status</th></tr><tr bgcolor=''><td>1</td><td>100</td><td>100001</td><td>2018-04-09</td><td>2018-04-09</td><td>Approved</td></tr><tr bgcolor=''><td>2</td><td>7</td><td>100001</td><td>2018-03-13</td><td>2018-03-13</td><td>Approved</td></tr><tr bgcolor=''><td>3</td><td>1</td><td>100001</td><td>2018-01-29</td><td>2018-02-08</td><td>Approved</td></tr><tr bgcolor=''><td>4</td><td>1</td><td>100001</td><td>2018-01-07</td><td>2018-01-28</td><td>Approved</td></tr><tr bgcolor=''><td>5</td><td>5</td><td>100001</td><td>2017-12-20</td><td>2017-12-20</td><td>Approved</td></tr><tr bgcolor=''><td>6</td><td>5</td><td>100001</td><td>2017-12-12</td><td>2017-12-12</td><td>Approved</td></tr><tr bgcolor=''><td>7</td><td>2</td><td>100001</td><td>2017-12-12</td><td>2017-12-12</td><td>Approved</td></tr><tr bgcolor=''><td>8</td><td>12</td><td>100001</td><td>2017-11-03</td><td>2017-11-24</td><td>Approved</td></tr><tr bgcolor=''><td>9</td><td>1</td><td>100001</td><td>2017-10-23</td><td>2017-10-23</td><td>Approved</td></tr><tr bgcolor=''><td>10</td><td>1</td><td>100001</td><td>2017-10-07</td><td>2017-10-08</td><td>Approved</td></tr><tr bgcolor=''><td>11</td><td>1</td><td>100001</td><td>2017-10-07</td><td>2017-10-07</td><td>Approved</td></tr><tr bgcolor=''><td>12</td><td>10</td><td>100001</td><td>2017-10-04</td><td>2017-10-04</td><td>Approved</td></tr><tr bgcolor=''><td>13</td><td>1</td><td>100001</td><td>2017-09-10</td><td>2017-09-20</td><td>Approved</td></tr><tr bgcolor=''><td>14</td><td>1</td><td>100001</td><td>2017-05-25</td><td>2017-06-07</td><td>Approved</td></tr><tr bgcolor=''><td>15</td><td>10</td><td>414523</td><td>2017-02-27</td><td>2017-02-27</td><td>Approved</td></tr><tr bgcolor=''><td>16</td><td>10</td><td>414523</td><td>2017-02-27</td><td>2017-02-27</td><td>Approved</td></tr><tr bgcolor=''><td>17</td><td>1</td><td>100001</td><td>2017-01-28</td><td>2017-01-28</td><td>Approved</td></tr><tr bgcolor=''><td>18</td><td>10</td><td>100001</td><td>2017-01-11</td><td>2017-01-11</td><td>Approved</td></tr><tr bgcolor=''><td>19</td><td>2</td><td>100001</td><td>2016-09-23</td><td>2016-09-24</td><td>Approved</td></tr><tr bgcolor=''><td>20</td><td>99</td><td>100001</td><td>2016-09-03</td><td>2016-09-03</td><td>Approved</td></tr><tr bgcolor=''><td>21</td><td>100</td><td>100001</td><td>2016-07-28</td><td>2016-08-09</td><td>Approved</td></tr><tr><td colspan=9  align='center'></td></tr></table>



                    </div>
                </div>
            </div>
        </div>






    </div>
</div>











 <!-- footer content -->
        <footer>
          <div class="pull-right">
            <a href="http://mlm-india.co.in">Design By MLM-India Buy Software: 8146922011,  DEMO V2.0.1 </a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../production/js/flot/jquery.flot.orderBars.js"></script>
    <script src="../production/js/flot/date.js"></script>
    <script src="../production/js/flot/jquery.flot.spline.js"></script>
    <script src="../production/js/flot/curvedLines.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../production/js/moment/moment.min.js"></script>
    <script src="../production/js/datepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <!-- Flot -->
      <!-- PNotify -->
    <script src="../vendors/pnotify/dist/pnotify.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.nonblock.js"></script>

    <!-- /bootstrap-daterangepicker -->
  <script src="../vendors/validator/validator.min.js"></script>

<script>
    // initialize the validator function
    validator.message.date = 'not a real date';

    // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    $('form')
            .on('blur', 'input[required], input.optional, select.required', validator.checkField)
            .on('change', 'select.required', validator.checkField)
            .on('keypress', 'input[required][pattern]', validator.keypress);

    $('.multi.required').on('keyup blur', 'input', function () {
        validator.checkField.apply($(this).siblings().last()[0]);
    });

    $('form').submit(function (e) {
        e.preventDefault();
        var submit = true;

        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
            submit = false;
        }

        if (submit)
            this.submit();

        return false;
    });
</script>

	
	
  </html>
		