
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
        <div class="row top_tiles">
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats  btn-danger" style="background:#ab0b0b">
                  <div class="icon"><!--<i class="fa fa-caret-square-o-right"></i>--></div>
                    <div class="count">641</div>
                    <h3>Total Joining</h3>
                    <p>Total joining member Member's.</p>
                </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats btn-primary" style="background:#337ab7">
                    <div class="icon"></div>
                    <div class="count"><i class="fa fa-rupee"></i>4829000.00</div>
                    <h3>Total Business</h3>
                    <p>Total company business.</p>
                </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats btn-dark" style="background:#7954e3" >
                  <div class="icon"><!--<i class="fa fa-sort-amount-desc"></i>--></div>
                    <div class="count"><i class="fa fa-rupee"></i>588150.00</div>
                    <h3> Payout Given</h3>
                    <p>Latest payout given .</p>
                </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats btn-success">
                    <div class="icon"></div>
                    <div class="count"><i class="fa fa-rupee"></i>32675.00</div>
                    <h3>Total TDS  </h3>
                    <p>Total TDS deduction amount .</p>
                </div>
            </div>
        </div>

















        <div class="page-title">
            <div class="title_left">
                <h3>Total Payout Given<small>Last 10 Payouts</small></h3>
            </div>


        </div>

        <div class="clearfix"></div>

        <div class="row">


            <div class="col-md-9 col-sm-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Payout List <small>Current given list</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <canvas id="mybarChart"></canvas>
                    </div>
                </div>
            </div>



            <div class="col-md-3 col-sm-12 col-xs-12">
                <div>
                    <div class="x_title">
                        <h2>Latest News</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <ul class="list-unstyled top_profiles scroll-view">
                       
                                                
                    </ul>
                </div>
            </div>

        </div>





        <!-- Total Joining -->
                

        <div class="page-title">
            <div class="title_left">
                <h3>Total joining graph<small> Last 30days Joining chart report</small></h3>
            </div>

        </div>

        <div class="clearfix"></div>

        <div class="row">

             
            <div class="col-md-9 col-sm-6 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Current  Joining List <small>Members joining report</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <canvas id="myjoiningbarChart"></canvas>
                    </div>
                </div>
            </div>



            <div class="col-md-3 col-sm-12 col-xs-12">
                <div>
                    <div class="x_title">
                        <h2>Latest Payout</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <ul class="list-unstyled top_profiles scroll-view">
                        
                                                <li class="media event">
                            <a class="pull-left border-aero profile_thumb">
                                <i class="fa fa-user aero"></i>
                            </a>
                            <div class="media-body">
                                <a class="title" href="#">GenX</a>
                                <p><strong><i class="fa fa-rupee"></i>18675.00 </strong> (100001) </p>
                                
                                </p>
                            </div>
                        </li>
                                                <li class="media event">
                            <a class="pull-left border-aero profile_thumb">
                                <i class="fa fa-user green"></i>
                            </a>
                            <div class="media-body">
                                <a class="title" href="#">Parker</a>
                                <p><strong><i class="fa fa-rupee"></i>15975.00 </strong> (954835) </p>
                                
                                </p>
                            </div>
                        </li>
                                                <li class="media event">
                            <a class="pull-left border-aero profile_thumb">
                                <i class="fa fa-user blue"></i>
                            </a>
                            <div class="media-body">
                                <a class="title" href="#">GenX</a>
                                <p><strong><i class="fa fa-rupee"></i>11700.00 </strong> (100001) </p>
                                
                                </p>
                            </div>
                        </li>
                                                <li class="media event">
                            <a class="pull-left border-aero profile_thumb">
                                <i class="fa fa-user aero"></i>
                            </a>
                            <div class="media-body">
                                <a class="title" href="#">Aaliyah</a>
                                <p><strong><i class="fa fa-rupee"></i>9450.00 </strong> (472775) </p>
                                
                                </p>
                            </div>
                        </li>
                                                <li class="media event">
                            <a class="pull-left border-aero profile_thumb">
                                <i class="fa fa-user green"></i>
                            </a>
                            <div class="media-body">
                                <a class="title" href="#">Aiden</a>
                                <p><strong><i class="fa fa-rupee"></i>9450.00 </strong> (216123) </p>
                                
                                </p>
                            </div>
                        </li>
                                                
                    </ul>
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
  
<script>
    Chart.defaults.global.legend = {
        enabled: false
    };

    // Line chart


    // Bar chart
    var ctx = document.getElementById("mybarChart");
    var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels:["17 October 2016","04 October 2016","15 September 2016","15 September 2016","06 September 2016","30 August 2016","18 August 2016","12 August 2016","06 August 2016","05 August 2016"],
            datasets: [{
                    label: 'payout Amount',
                    backgroundColor: "#26B99A",
                    data: ["51975.00","125100.00","2250.00","56700.00","39600.00","23625.00","42525.00","45675.00","1350.00","34425.00"]                },
                {
                    label: 'TDS Amount',
                    backgroundColor: "#f0ad4e",
                    data: ["2887.50","6950.00","125.00","3150.00","2200.00","1312.50","2362.50","2537.50","75.00","1912.50"]                },
                        {
                    label: 'Admin Amount',
                    backgroundColor: "#31b0d5",
                    data: ["2887.50","6950.00","125.00","3150.00","2200.00","1312.50","2362.50","2537.50","75.00","1912.50"]                }
                
            ],
        },
        options: {
            scales: {
                yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
            }
        }
    });

    // Joining Bar  chart
    // Bar chart
    var ctx = document.getElementById("myjoiningbarChart");
    var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["2018-03-28","2018-03-29","2018-03-30","2018-03-31","2018-04-01","2018-04-02","2018-04-03","2018-04-04","2018-04-05","2018-04-06","2018-04-07","2018-04-08","2018-04-09","2018-04-10","2018-04-11","2018-04-12","2018-04-13","2018-04-14","2018-04-15","2018-04-16","2018-04-17","2018-04-18","2018-04-19","2018-04-20","2018-04-21","2018-04-22","2018-04-23","2018-04-24","2018-04-25","2018-04-26","2018-04-27","2018-04-28"],
            datasets: [{
                    label: '# Total Joining',
                    backgroundColor: "#7954e3",
                    data: [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
                }]
        },
        options: {
            scales: {
                yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
            }
        }
    });




</script>


  </html>
		