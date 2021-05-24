
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
                    <div class="count"><i class="fa fa-rupee"></i>4829000.00</div>
                    <h3>Total Received</h3>
                    <p>Total Joining Amount Received .</p>
                </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats btn-primary" style="background:#337ab7">
                    <div class="icon"></div>
                    <div class="count"><i class="fa fa-rupee"></i>588150.00</div>
                    <h3>Total Payment Given</h3>
                    <p>Total amount distribute to members.</p>
                </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats btn-dark" style="background:#7954e3" >
                  <div class="icon"><!--<i class="fa fa-sort-amount-desc"></i>--></div>
                    <div class="count"><i class="fa fa-rupee"></i>32675.00</div>
                    <h3> TDS  Given</h3>
                    <p>Tax Rules apply .</p>
                </div>
            </div>
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats btn-success">
                    <div class="icon"></div>
                    <div class="count"><i class="fa fa-rupee"></i>4240850</div>
                    <h3>Net Profit </h3>
                    <p>Total Company Profit .</p>
                </div>
            </div>
        </div>
        
        
        
        
        
        
        <div class="page-title">
            <div class="title_left">
                <h3>Payout List</h3>
                
            </div>


        </div>
        <div class="clearfix"></div>



        
        
        
        
        
        
        <div class="page-title">
              <div class="title_left">
                <h3>Total Payout Given<small>Last 10 Payouts</small></h3>
              </div>

            
            </div>

            <div class="clearfix"></div>

            <div class="row">
              

              <div class="col-md-12 col-sm-6 col-xs-12">
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
                
                
                
                        
            </div>
            
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        




        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Current Payout List<small>How many user's eligible for current payouts</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <div class="table-responsive">






                            <table class='table table-bordered'><tr><th>Payoutid</th><th>Total Amount Paid</th><th>Total TDS</th><th>Admin Fees</th><th>Date</th><th>Actions</th><tr><tr><td> Payout:  17</td><td>51975.00</td><td>2887.50</td><td>2887.50</td><td>17 October 2016</td><td><a class='btn btn-info' href='admin-payoutdetails.php?id=17'><i class='fa fa-list'></i> View Payout</a> &nbsp; <a class='btn btn-warning' href='admin-tdsreport.php?id=17'><i class='fa fa-list'></i> View TDS</a> </td></tr><tr><td> Payout:  16</td><td>125100.00</td><td>6950.00</td><td>6950.00</td><td>04 October 2016</td><td><a class='btn btn-info' href='admin-payoutdetails.php?id=16'><i class='fa fa-list'></i> View Payout</a> &nbsp; <a class='btn btn-warning' href='admin-tdsreport.php?id=16'><i class='fa fa-list'></i> View TDS</a> </td></tr><tr><td> Payout:  15</td><td>2250.00</td><td>125.00</td><td>125.00</td><td>15 September 2016</td><td><a class='btn btn-info' href='admin-payoutdetails.php?id=15'><i class='fa fa-list'></i> View Payout</a> &nbsp; <a class='btn btn-warning' href='admin-tdsreport.php?id=15'><i class='fa fa-list'></i> View TDS</a> </td></tr><tr><td> Payout:  14</td><td>56700.00</td><td>3150.00</td><td>3150.00</td><td>15 September 2016</td><td><a class='btn btn-info' href='admin-payoutdetails.php?id=14'><i class='fa fa-list'></i> View Payout</a> &nbsp; <a class='btn btn-warning' href='admin-tdsreport.php?id=14'><i class='fa fa-list'></i> View TDS</a> </td></tr><tr><td> Payout:  13</td><td>39600.00</td><td>2200.00</td><td>2200.00</td><td>06 September 2016</td><td><a class='btn btn-info' href='admin-payoutdetails.php?id=13'><i class='fa fa-list'></i> View Payout</a> &nbsp; <a class='btn btn-warning' href='admin-tdsreport.php?id=13'><i class='fa fa-list'></i> View TDS</a> </td></tr><tr><td> Payout:  12</td><td>23625.00</td><td>1312.50</td><td>1312.50</td><td>30 August 2016</td><td><a class='btn btn-info' href='admin-payoutdetails.php?id=12'><i class='fa fa-list'></i> View Payout</a> &nbsp; <a class='btn btn-warning' href='admin-tdsreport.php?id=12'><i class='fa fa-list'></i> View TDS</a> </td></tr><tr><td> Payout:  11</td><td>42525.00</td><td>2362.50</td><td>2362.50</td><td>18 August 2016</td><td><a class='btn btn-info' href='admin-payoutdetails.php?id=11'><i class='fa fa-list'></i> View Payout</a> &nbsp; <a class='btn btn-warning' href='admin-tdsreport.php?id=11'><i class='fa fa-list'></i> View TDS</a> </td></tr><tr><td> Payout:  10</td><td>45675.00</td><td>2537.50</td><td>2537.50</td><td>12 August 2016</td><td><a class='btn btn-info' href='admin-payoutdetails.php?id=10'><i class='fa fa-list'></i> View Payout</a> &nbsp; <a class='btn btn-warning' href='admin-tdsreport.php?id=10'><i class='fa fa-list'></i> View TDS</a> </td></tr><tr><td> Payout:  9</td><td>1350.00</td><td>75.00</td><td>75.00</td><td>06 August 2016</td><td><a class='btn btn-info' href='admin-payoutdetails.php?id=9'><i class='fa fa-list'></i> View Payout</a> &nbsp; <a class='btn btn-warning' href='admin-tdsreport.php?id=9'><i class='fa fa-list'></i> View TDS</a> </td></tr><tr><td> Payout:  8</td><td>34425.00</td><td>1912.50</td><td>1912.50</td><td>05 August 2016</td><td><a class='btn btn-info' href='admin-payoutdetails.php?id=8'><i class='fa fa-list'></i> View Payout</a> &nbsp; <a class='btn btn-warning' href='admin-tdsreport.php?id=8'><i class='fa fa-list'></i> View TDS</a> </td></tr><tr><td> Payout:  7</td><td>41175.00</td><td>2287.50</td><td>2287.50</td><td>31 July 2016</td><td><a class='btn btn-info' href='admin-payoutdetails.php?id=7'><i class='fa fa-list'></i> View Payout</a> &nbsp; <a class='btn btn-warning' href='admin-tdsreport.php?id=7'><i class='fa fa-list'></i> View TDS</a> </td></tr><tr><td> Payout:  6</td><td>40275.00</td><td>2237.50</td><td>2237.50</td><td>25 July 2016</td><td><a class='btn btn-info' href='admin-payoutdetails.php?id=6'><i class='fa fa-list'></i> View Payout</a> &nbsp; <a class='btn btn-warning' href='admin-tdsreport.php?id=6'><i class='fa fa-list'></i> View TDS</a> </td></tr><tr><td> Payout:  5</td><td>32625.00</td><td>1812.50</td><td>1812.50</td><td>19 July 2016</td><td><a class='btn btn-info' href='admin-payoutdetails.php?id=5'><i class='fa fa-list'></i> View Payout</a> &nbsp; <a class='btn btn-warning' href='admin-tdsreport.php?id=5'><i class='fa fa-list'></i> View TDS</a> </td></tr><tr><td> Payout:  4</td><td>12600.00</td><td>700.00</td><td>700.00</td><td>14 July 2016</td><td><a class='btn btn-info' href='admin-payoutdetails.php?id=4'><i class='fa fa-list'></i> View Payout</a> &nbsp; <a class='btn btn-warning' href='admin-tdsreport.php?id=4'><i class='fa fa-list'></i> View TDS</a> </td></tr><tr><td> Payout:  3</td><td>16650.00</td><td>925.00</td><td>925.00</td><td>09 July 2016</td><td><a class='btn btn-info' href='admin-payoutdetails.php?id=3'><i class='fa fa-list'></i> View Payout</a> &nbsp; <a class='btn btn-warning' href='admin-tdsreport.php?id=3'><i class='fa fa-list'></i> View TDS</a> </td></tr><tr><td> Payout:  2</td><td>14400.00</td><td>800.00</td><td>800.00</td><td>03 July 2016</td><td><a class='btn btn-info' href='admin-payoutdetails.php?id=2'><i class='fa fa-list'></i> View Payout</a> &nbsp; <a class='btn btn-warning' href='admin-tdsreport.php?id=2'><i class='fa fa-list'></i> View TDS</a> </td></tr><tr><td> Payout:  1</td><td>7200.00</td><td>400.00</td><td>400.00</td><td>28 June 2016</td><td><a class='btn btn-info' href='admin-payoutdetails.php?id=1'><i class='fa fa-list'></i> View Payout</a> &nbsp; <a class='btn btn-warning' href='admin-tdsreport.php?id=1'><i class='fa fa-list'></i> View TDS</a> </td></tr></table>                            <br />










                        </div>
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
          labels: ["17 October 2016","04 October 2016","15 September 2016","15 September 2016","06 September 2016","30 August 2016","18 August 2016","12 August 2016","06 August 2016","05 August 2016","31 July 2016","25 July 2016","19 July 2016","14 July 2016","09 July 2016","03 July 2016","28 June 2016"],
          datasets: [{
            label: 'Payout Amount',
            backgroundColor: "#26B99A",
            data: ["51975.00","125100.00","2250.00","56700.00","39600.00","23625.00","42525.00","45675.00","1350.00","34425.00","41175.00","40275.00","32625.00","12600.00","16650.00","14400.00","7200.00"]          },
         {
            label: 'TDS Amount',
            backgroundColor: "#f0ad4e",
            data: ["2887.50","6950.00","125.00","3150.00","2200.00","1312.50","2362.50","2537.50","75.00","1912.50","2287.50","2237.50","1812.50","700.00","925.00","800.00","400.00"]          },
        {
            label: 'Admin Fees',
            backgroundColor: "#31b0d5",
            data: ["2887.50","6950.00","125.00","3150.00","2200.00","1312.50","2362.50","2537.50","75.00","1912.50","2287.50","2237.50","1812.50","700.00","925.00","800.00","400.00"]          } 
    ]
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
     
      
     

      
    </script>



  </html>
					



