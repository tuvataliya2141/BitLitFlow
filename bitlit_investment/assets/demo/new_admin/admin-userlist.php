a
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
                <h3>Registered Members</h3>
            </div>


        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Check registered members<small>How many users Active and In Active</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">




                                                <div class="row top_tiles">
            <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats  btn-info" style="background:#7954e3">
                  <div class="icon"><!--<i class="fa fa-caret-square-o-right"></i>--></div>
                    <div class="count">641</div>
                    <h3>Total Register Members</h3>
                    <p>Total member register.</p>
                </div>
            </div>
            <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats btn-success" style="background:##5cb85c">
                    <div class="icon"></div>
                    <div class="count">206</div>
                    <h3>Total Active Members</h3>
                    <p>How many members are active.</p>
                </div>
            </div>
            <div class="animated flipInY col-lg-4 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats btn-dark" style="background:#ab0b0b" >
                  <div class="icon"><!--<i class="fa fa-sort-amount-desc"></i>--></div>
                    <div class="count">435</div>
                    <h3> Total Inactive Members</h3>
                    <p>In-Active members list .</p>
                </div>
            </div>
            
        </div>
                        
                        
                        
                      
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        <!-- GRAPH SHOWING  -->
                        

         

        <div class="page-title">
            <div class="title_left">
                <h3>Total joining graph<small>  Chart report</small></h3>
            </div>

        </div>

        <div class="clearfix"></div>

        <div class="row">

             
            <div class="col-md-12 col-sm-6 col-xs-12">
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
            <!-- END GRAPGH -->

                       
                       




                    </div>
                </div>
            </div>
        </div>



        
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Check registered members<small>How many users Active and In Active</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
        

                        <form class="form-horizontal form-label-left" novalidate action="/demo/newadmin/admin-userlist.php" method="get" enctype="multipart/form-data">
    
                       <table class="table col-md-6 col-sm-6 col-xs-12" style="width:100%" align="center">                  
                            <thead>
                                <tr>  <td>
                                        
                                     
                                        
                        
                      
                            
                            <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                     <input type="text"  class="form-control has-feedback-left"   name="ids" placeholder="userId / Mobile / Name" data-validate-length-range="3" data-validate-words="1" required="required" >
                                    
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>
						</td>
                                                <td> - OR -</td>
						<td>
                      <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                      
                          
                          <select class="form-control" name="status">
                              <option value="">Choose option</option>
                              <option value="1">Active </option>
                              <option value="2">In-Active</option>
                            
                          </select>
                      </div>   
                            
                                    </td>
                                    <td>
                                         <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="text"  name="range" id="reservation" class="form-control" value="2018-03-27 - 2018-04-27" />
                                    
                      </div> 
                                        
                                    </td>
                                    <td>
                
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button class="btn btn-primary center" type="submit">SEARCH</button></div>
                            </div>
                        

                        
                                    </td>
                       </tr>
                       </thead></table>

                    </form>
                        
                        <div class="table-responsive">

<table class='table table-bordered'>
			<thead><tr><th>Sr No</th><th>Pin No</th><th>Status</th><th>Name</th><th> Mobile</th><th> SponsorId</th><th>Date</th><th>Action</th></tr><tr><td>1</td><td>4MY4TVVKYK</td><td><span class='btn btn-success'> Active</span></td><td>414523: (Malthesh )</td><td>8105594154</td><td>100001</td><td>27/02/2017</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=641'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=641'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=641'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-danger' href='change_status.php?userid=641&status=2' onclick="return confirm('Do you want to Block this users?')"><i class='fa fa-toggle-off'></i> In-Active</a></td></tr><tr><td>2</td><td>YEV3EYEYKA</td><td><span class='btn btn-success'> Active</span></td><td>137774: (Kuldeep )</td><td>9803610000</td><td>181319</td><td>16/01/2017</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=640'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=640'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=640'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-danger' href='change_status.php?userid=640&status=2' onclick="return confirm('Do you want to Block this users?')"><i class='fa fa-toggle-off'></i> In-Active</a></td></tr><tr><td>3</td><td>3YKEKYYAVV</td><td><span class='btn btn-success'> Active</span></td><td>723271: (E )</td><td>9803610000</td><td>181319</td><td>12/01/2017</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=639'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=639'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=639'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-danger' href='change_status.php?userid=639&status=2' onclick="return confirm('Do you want to Block this users?')"><i class='fa fa-toggle-off'></i> In-Active</a></td></tr><tr><td>4</td><td>V6EE333YAA</td><td><span class='btn btn-success'> Active</span></td><td>974289: (D )</td><td>9803610000</td><td>181319</td><td>12/01/2017</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=638'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=638'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=638'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-danger' href='change_status.php?userid=638&status=2' onclick="return confirm('Do you want to Block this users?')"><i class='fa fa-toggle-off'></i> In-Active</a></td></tr><tr><td>5</td><td>VY66EVKYE3</td><td><span class='btn btn-danger'> In-Active</span></td><td>116181: (C )</td><td>9803610000</td><td>181319</td><td>12/01/2017</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=637'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=637'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=637'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=637&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>6</td><td>YK66AEKVEY</td><td><span class='btn btn-danger'> In-Active</span></td><td>365184: (B )</td><td>9803610000</td><td>181319</td><td>12/01/2017</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=636'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=636'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=636'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=636&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>7</td><td>6KKYAVEKA6</td><td><span class='btn btn-danger'> In-Active</span></td><td>831447: (A )</td><td>9803610000</td><td>181319</td><td>12/01/2017</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=635'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=635'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=635'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=635&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>8</td><td>3AKA6AE6VY</td><td><span class='btn btn-danger'> In-Active</span></td><td>967746: (Parmjit )</td><td>9803610000</td><td>857825</td><td>11/01/2017</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=634'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=634'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=634'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=634&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>9</td><td>U7QIUI7II9</td><td><span class='btn btn-danger'> In-Active</span></td><td>997372: (Chase )</td><td>8146922011</td><td>911312</td><td>27/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=633'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=633'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=633'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=633&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>10</td><td>Q7I7Q7U977</td><td><span class='btn btn-success'> Active</span></td><td>822636: (Luke )</td><td>8146922011</td><td>911312</td><td>27/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=632'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=632'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=632'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-danger' href='change_status.php?userid=632&status=2' onclick="return confirm('Do you want to Block this users?')"><i class='fa fa-toggle-off'></i> In-Active</a></td></tr><tr><td>11</td><td>IMI7R9RU99</td><td><span class='btn btn-success'> Active</span></td><td>252527: (Riley )</td><td>8146922011</td><td>872488</td><td>27/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=631'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=631'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=631'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-danger' href='change_status.php?userid=631&status=2' onclick="return confirm('Do you want to Block this users?')"><i class='fa fa-toggle-off'></i> In-Active</a></td></tr><tr><td>12</td><td>IMU9I77QRR</td><td><span class='btn btn-success'> Active</span></td><td>597373: (Jacob )</td><td>8146922011</td><td>872488</td><td>27/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=630'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=630'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=630'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-danger' href='change_status.php?userid=630&status=2' onclick="return confirm('Do you want to Block this users?')"><i class='fa fa-toggle-off'></i> In-Active</a></td></tr><tr><td>13</td><td>9M7MU9QQR7</td><td><span class='btn btn-success'> Active</span></td><td>121171: (Lincoln )</td><td>8146922011</td><td>363332</td><td>27/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=629'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=629'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=629'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-danger' href='change_status.php?userid=629&status=2' onclick="return confirm('Do you want to Block this users?')"><i class='fa fa-toggle-off'></i> In-Active</a></td></tr><tr><td>14</td><td>RQ7Q9URI7U</td><td><span class='btn btn-success'> Active</span></td><td>624989: (Zachary )</td><td>8146922011</td><td>363332</td><td>27/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=628'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=628'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=628'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-danger' href='change_status.php?userid=628&status=2' onclick="return confirm('Do you want to Block this users?')"><i class='fa fa-toggle-off'></i> In-Active</a></td></tr><tr><td>15</td><td>IQ79I9Q7UI</td><td><span class='btn btn-success'> Active</span></td><td>233927: (Mani )</td><td>8146922011</td><td>722825</td><td>26/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=627'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=627'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=627'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-danger' href='change_status.php?userid=627&status=2' onclick="return confirm('Do you want to Block this users?')"><i class='fa fa-toggle-off'></i> In-Active</a></td></tr><tr><td>16</td><td>7I7RR7UM7I</td><td><span class='btn btn-success'> Active</span></td><td>845924: (Dimitri )</td><td>8146922011</td><td>722825</td><td>26/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=626'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=626'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=626'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-danger' href='change_status.php?userid=626&status=2' onclick="return confirm('Do you want to Block this users?')"><i class='fa fa-toggle-off'></i> In-Active</a></td></tr><tr><td>17</td><td>MU999MRIR7</td><td><span class='btn btn-success'> Active</span></td><td>179737: (Adam )</td><td>8146922011</td><td>383793</td><td>26/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=625'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=625'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=625'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-danger' href='change_status.php?userid=625&status=2' onclick="return confirm('Do you want to Block this users?')"><i class='fa fa-toggle-off'></i> In-Active</a></td></tr><tr><td>18</td><td>RU9RRIU7R7</td><td><span class='btn btn-success'> Active</span></td><td>416966: (Bella )</td><td>8146922011</td><td>383793</td><td>26/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=624'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=624'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=624'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-danger' href='change_status.php?userid=624&status=2' onclick="return confirm('Do you want to Block this users?')"><i class='fa fa-toggle-off'></i> In-Active</a></td></tr><tr><td>19</td><td>QQUIIRRI77</td><td><span class='btn btn-success'> Active</span></td><td>677952: (Noah )</td><td>8146922011</td><td>566988</td><td>26/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=623'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=623'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=623'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-danger' href='change_status.php?userid=623&status=2' onclick="return confirm('Do you want to Block this users?')"><i class='fa fa-toggle-off'></i> In-Active</a></td></tr><tr><td>20</td><td>MRUM7UMQMU</td><td><span class='btn btn-danger'> In-Active</span></td><td>829962: (Eva )</td><td>8146922011</td><td>566988</td><td>25/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=622'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=622'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=622'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=622&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>21</td><td>QII7MMUII7</td><td><span class='btn btn-success'> Active</span></td><td>236112: (Daniel )</td><td>8146922011</td><td>199555</td><td>25/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=621'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=621'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=621'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-danger' href='change_status.php?userid=621&status=2' onclick="return confirm('Do you want to Block this users?')"><i class='fa fa-toggle-off'></i> In-Active</a></td></tr><tr><td>22</td><td>UQRI7IIUUI</td><td><span class='btn btn-success'> Active</span></td><td>277465: (Eli )</td><td>8146922011</td><td>199555</td><td>25/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=620'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=620'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=620'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-danger' href='change_status.php?userid=620&status=2' onclick="return confirm('Do you want to Block this users?')"><i class='fa fa-toggle-off'></i> In-Active</a></td></tr><tr><td>23</td><td>I9QMQQMQRI</td><td><span class='btn btn-success'> Active</span></td><td>317837: (Julian )</td><td>8146922011</td><td>864348</td><td>25/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=619'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=619'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=619'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-danger' href='change_status.php?userid=619&status=2' onclick="return confirm('Do you want to Block this users?')"><i class='fa fa-toggle-off'></i> In-Active</a></td></tr><tr><td>24</td><td>7Q9RMQ99RR</td><td><span class='btn btn-danger'> In-Active</span></td><td>432788: (Jonathan )</td><td>8146922011</td><td>864348</td><td>25/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=618'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=618'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=618'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=618&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>25</td><td>7R79QQ9MQM</td><td><span class='btn btn-danger'> In-Active</span></td><td>753195: (James )</td><td>8146922011</td><td>764363</td><td>24/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=617'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=617'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=617'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=617&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>26</td><td>79MIIQIM7U</td><td><span class='btn btn-danger'> In-Active</span></td><td>596344: (Mani )</td><td>8146922011</td><td>764363</td><td>24/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=616'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=616'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=616'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=616&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>27</td><td>IM7MR7URMM</td><td><span class='btn btn-danger'> In-Active</span></td><td>934495: (Christian )</td><td>8146922011</td><td>147355</td><td>24/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=615'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=615'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=615'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=615&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>28</td><td>URI9MIUQ7R</td><td><span class='btn btn-danger'> In-Active</span></td><td>389832: (Isaiah )</td><td>8146922011</td><td>147355</td><td>23/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=614'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=614'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=614'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=614&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>29</td><td>MQUR7QR9UM</td><td><span class='btn btn-danger'> In-Active</span></td><td>194125: (Ariana )</td><td>8146922011</td><td>456499</td><td>23/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=613'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=613'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=613'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=613&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>30</td><td>7MMQIII9QU</td><td><span class='btn btn-danger'> In-Active</span></td><td>192423: (Samantha )</td><td>8146922011</td><td>456499</td><td>23/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=612'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=612'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=612'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=612&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>31</td><td>97RII97U9I</td><td><span class='btn btn-danger'> In-Active</span></td><td>749452: (Eva )</td><td>8146922011</td><td>459657</td><td>23/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=611'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=611'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=611'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=611&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>32</td><td>II97UIRUI7</td><td><span class='btn btn-danger'> In-Active</span></td><td>118692: (Brianna )</td><td>8146922011</td><td>459657</td><td>23/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=610'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=610'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=610'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=610&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>33</td><td>7MR99I79M7</td><td><span class='btn btn-danger'> In-Active</span></td><td>134171: (Victoria )</td><td>8146922011</td><td>986699</td><td>23/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=609'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=609'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=609'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=609&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>34</td><td>U7MMU7UQMR</td><td><span class='btn btn-danger'> In-Active</span></td><td>668625: (Miller )</td><td>8146922011</td><td>986699</td><td>22/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=608'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=608'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=608'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=608&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>35</td><td>7I7URUIIUR</td><td><span class='btn btn-danger'> In-Active</span></td><td>947551: (Olivia )</td><td>8146922011</td><td>368133</td><td>22/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=607'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=607'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=607'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=607&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>36</td><td>QIIUQQIRIR</td><td><span class='btn btn-danger'> In-Active</span></td><td>454582: (Eli )</td><td>8146922011</td><td>368133</td><td>22/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=606'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=606'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=606'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=606&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>37</td><td>RI99RRU977</td><td><span class='btn btn-danger'> In-Active</span></td><td>992756: (Joshua )</td><td>8146922011</td><td>361487</td><td>22/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=605'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=605'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=605'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=605&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>38</td><td>IU9IQ79QRU</td><td><span class='btn btn-danger'> In-Active</span></td><td>588956: (Anna )</td><td>8146922011</td><td>361487</td><td>21/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=604'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=604'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=604'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=604&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>39</td><td>MUUQ97MIRM</td><td><span class='btn btn-danger'> In-Active</span></td><td>532255: (Emma )</td><td>8146922011</td><td>457317</td><td>21/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=603'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=603'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=603'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=603&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>40</td><td>QM7RM7UUIR</td><td><span class='btn btn-danger'> In-Active</span></td><td>221731: (Adam )</td><td>8146922011</td><td>457317</td><td>21/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=602'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=602'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=602'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=602&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>41</td><td>MUIM99IU7R</td><td><span class='btn btn-danger'> In-Active</span></td><td>949545: (Matthew )</td><td>8146922011</td><td>111335</td><td>20/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=601'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=601'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=601'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=601&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>42</td><td>URUMRMMUQQ</td><td><span class='btn btn-danger'> In-Active</span></td><td>355628: (Sadie )</td><td>8146922011</td><td>111335</td><td>20/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=600'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=600'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=600'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=600&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>43</td><td>9UMQQRRM9Q</td><td><span class='btn btn-danger'> In-Active</span></td><td>893631: (Dimitri )</td><td>8146922011</td><td>468861</td><td>19/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=599'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=599'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=599'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=599&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>44</td><td>UIIR779QIM</td><td><span class='btn btn-danger'> In-Active</span></td><td>625885: (Lincoln )</td><td>8146922011</td><td>468861</td><td>19/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=598'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=598'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=598'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=598&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>45</td><td>M79Q9IM779</td><td><span class='btn btn-danger'> In-Active</span></td><td>837522: (Dimitri )</td><td>8146922011</td><td>931795</td><td>19/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=597'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=597'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=597'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=597&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>46</td><td>MQIUQMM77I</td><td><span class='btn btn-danger'> In-Active</span></td><td>856233: (Savannah )</td><td>8146922011</td><td>931795</td><td>19/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=596'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=596'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=596'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=596&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>47</td><td>UM97UURU7Q</td><td><span class='btn btn-danger'> In-Active</span></td><td>377557: (Lydia )</td><td>8146922011</td><td>973355</td><td>19/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=595'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=595'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=595'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=595&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>48</td><td>Q9URRU97MQ</td><td><span class='btn btn-danger'> In-Active</span></td><td>861977: (Mackenzie )</td><td>8146922011</td><td>973355</td><td>19/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=594'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=594'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=594'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=594&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>49</td><td>MRRQRQ7M79</td><td><span class='btn btn-danger'> In-Active</span></td><td>313128: (Daniel )</td><td>8146922011</td><td>111347</td><td>18/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=593'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=593'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=593'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=593&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>50</td><td>I9RR97QR9Q</td><td><span class='btn btn-danger'> In-Active</span></td><td>835136: (Sadie )</td><td>8146922011</td><td>111347</td><td>18/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=592'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=592'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=592'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=592&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>51</td><td>I9RMQ7UQR9</td><td><span class='btn btn-danger'> In-Active</span></td><td>576452: (Peyton )</td><td>8146922011</td><td>227712</td><td>18/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=591'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=591'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=591'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=591&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>52</td><td>UR7I79R9IU</td><td><span class='btn btn-danger'> In-Active</span></td><td>189531: (Ford )</td><td>8146922011</td><td>227712</td><td>18/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=590'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=590'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=590'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=590&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>53</td><td>7MRQM9MRQR</td><td><span class='btn btn-danger'> In-Active</span></td><td>274647: (Sarah )</td><td>8146922011</td><td>342948</td><td>17/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=589'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=589'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=589'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=589&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>54</td><td>77MRMIQ7MI</td><td><span class='btn btn-danger'> In-Active</span></td><td>727775: (Eliezer )</td><td>8146922011</td><td>342948</td><td>17/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=588'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=588'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=588'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=588&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>55</td><td>MMUURRIMMR</td><td><span class='btn btn-success'> Active</span></td><td>868965: (Luke )</td><td>8146922011</td><td>958442</td><td>17/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=587'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=587'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=587'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-danger' href='change_status.php?userid=587&status=2' onclick="return confirm('Do you want to Block this users?')"><i class='fa fa-toggle-off'></i> In-Active</a></td></tr><tr><td>56</td><td>IIMIUU9R9M</td><td><span class='btn btn-success'> Active</span></td><td>644114: (Aaliyah )</td><td>8146922011</td><td>958442</td><td>17/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=586'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=586'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=586'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-danger' href='change_status.php?userid=586&status=2' onclick="return confirm('Do you want to Block this users?')"><i class='fa fa-toggle-off'></i> In-Active</a></td></tr><tr><td>57</td><td>MI7799RRRI</td><td><span class='btn btn-success'> Active</span></td><td>432644: (Nolan )</td><td>8146922011</td><td>425542</td><td>16/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=585'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=585'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=585'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-danger' href='change_status.php?userid=585&status=2' onclick="return confirm('Do you want to Block this users?')"><i class='fa fa-toggle-off'></i> In-Active</a></td></tr><tr><td>58</td><td>7RI977RRIR</td><td><span class='btn btn-success'> Active</span></td><td>792725: (Ashley )</td><td>8146922011</td><td>425542</td><td>16/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=584'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=584'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=584'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-danger' href='change_status.php?userid=584&status=2' onclick="return confirm('Do you want to Block this users?')"><i class='fa fa-toggle-off'></i> In-Active</a></td></tr><tr><td>59</td><td>QMIUI77M7I</td><td><span class='btn btn-success'> Active</span></td><td>866156: (Michael )</td><td>8146922011</td><td>472227</td><td>16/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=583'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=583'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=583'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-danger' href='change_status.php?userid=583&status=2' onclick="return confirm('Do you want to Block this users?')"><i class='fa fa-toggle-off'></i> In-Active</a></td></tr><tr><td>60</td><td>IMM7RUUM99</td><td><span class='btn btn-success'> Active</span></td><td>755337: (Jack )</td><td>8146922011</td><td>472227</td><td>16/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=582'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=582'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=582'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-danger' href='change_status.php?userid=582&status=2' onclick="return confirm('Do you want to Block this users?')"><i class='fa fa-toggle-off'></i> In-Active</a></td></tr><tr><td>61</td><td>7IIUUUUMQR</td><td><span class='btn btn-success'> Active</span></td><td>342533: (Mackenzie )</td><td>8146922011</td><td>891391</td><td>16/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=581'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=581'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=581'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-danger' href='change_status.php?userid=581&status=2' onclick="return confirm('Do you want to Block this users?')"><i class='fa fa-toggle-off'></i> In-Active</a></td></tr><tr><td>62</td><td>UR777RRQMM</td><td><span class='btn btn-danger'> In-Active</span></td><td>643916: (Dimitri )</td><td>8146922011</td><td>891391</td><td>16/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=580'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=580'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=580'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=580&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>63</td><td>UR79R9RRMU</td><td><span class='btn btn-danger'> In-Active</span></td><td>795693: (Katherine )</td><td>8146922011</td><td>533884</td><td>16/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=579'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=579'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=579'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=579&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>64</td><td>799UUI9M77</td><td><span class='btn btn-danger'> In-Active</span></td><td>165543: (Kamdyn )</td><td>8146922011</td><td>533884</td><td>15/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=578'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=578'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=578'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=578&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>65</td><td>QIRMUUMRI7</td><td><span class='btn btn-danger'> In-Active</span></td><td>117151: (Harry )</td><td>8146922011</td><td>361568</td><td>15/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=577'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=577'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=577'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=577&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>66</td><td>UQMIRMIUMM</td><td><span class='btn btn-danger'> In-Active</span></td><td>914995: (Samantha )</td><td>8146922011</td><td>361568</td><td>15/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=576'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=576'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=576'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=576&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>67</td><td>7R99RMQ7QI</td><td><span class='btn btn-danger'> In-Active</span></td><td>343932: (Christian )</td><td>8146922011</td><td>914784</td><td>15/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=575'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=575'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=575'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=575&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>68</td><td>79UUMQ9UMM</td><td><span class='btn btn-danger'> In-Active</span></td><td>314763: (Michael )</td><td>8146922011</td><td>914784</td><td>14/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=574'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=574'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=574'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=574&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>69</td><td>IM7MQIRIRU</td><td><span class='btn btn-danger'> In-Active</span></td><td>186524: (Ernest )</td><td>8146922011</td><td>699957</td><td>14/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=573'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=573'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=573'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=573&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>70</td><td>9MIQURUUI9</td><td><span class='btn btn-danger'> In-Active</span></td><td>365681: (Aaron )</td><td>8146922011</td><td>699957</td><td>13/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=572'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=572'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=572'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=572&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>71</td><td>7I9UURIM7R</td><td><span class='btn btn-danger'> In-Active</span></td><td>179792: (Abigail )</td><td>8146922011</td><td>978115</td><td>13/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=571'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=571'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=571'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=571&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>72</td><td>M9R7UQIRR7</td><td><span class='btn btn-danger'> In-Active</span></td><td>337885: (Luke )</td><td>8146922011</td><td>978115</td><td>13/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=570'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=570'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=570'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=570&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>73</td><td>9QIIRUI9RU</td><td><span class='btn btn-danger'> In-Active</span></td><td>424845: (Agustin )</td><td>8146922011</td><td>463411</td><td>12/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=569'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=569'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=569'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=569&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>74</td><td>9RQMUUQMIU</td><td><span class='btn btn-danger'> In-Active</span></td><td>467695: (Sarah )</td><td>8146922011</td><td>463411</td><td>12/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=568'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=568'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=568'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=568&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>75</td><td>79M77U9MUM</td><td><span class='btn btn-danger'> In-Active</span></td><td>287767: (Isabella )</td><td>8146922011</td><td>889268</td><td>12/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=567'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=567'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=567'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=567&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>76</td><td>Q7MRUI77MU</td><td><span class='btn btn-danger'> In-Active</span></td><td>373728: (Isabella )</td><td>8146922011</td><td>889268</td><td>12/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=566'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=566'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=566'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=566&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>77</td><td>9U7R7UQUUM</td><td><span class='btn btn-success'> Active</span></td><td>277773: (Mani )</td><td>8146922011</td><td>547834</td><td>12/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=565'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=565'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=565'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-danger' href='change_status.php?userid=565&status=2' onclick="return confirm('Do you want to Block this users?')"><i class='fa fa-toggle-off'></i> In-Active</a></td></tr><tr><td>78</td><td>M9I9RI9Q7U</td><td><span class='btn btn-danger'> In-Active</span></td><td>564354: (Aaron )</td><td>8146922011</td><td>547834</td><td>11/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=564'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=564'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=564'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=564&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>79</td><td>RQM99MRM9Q</td><td><span class='btn btn-danger'> In-Active</span></td><td>522238: (Jaxon )</td><td>8146922011</td><td>194927</td><td>11/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=563'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=563'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=563'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=563&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>80</td><td>QRUIQ9QQMM</td><td><span class='btn btn-success'> Active</span></td><td>436366: (Lincoln )</td><td>8146922011</td><td>194927</td><td>11/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=562'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=562'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=562'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-danger' href='change_status.php?userid=562&status=2' onclick="return confirm('Do you want to Block this users?')"><i class='fa fa-toggle-off'></i> In-Active</a></td></tr><tr><td>81</td><td>QIMMIQ9U79</td><td><span class='btn btn-danger'> In-Active</span></td><td>286122: (Michael )</td><td>8146922011</td><td>381637</td><td>11/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=561'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=561'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=561'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=561&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>82</td><td>7Q79IU7M7I</td><td><span class='btn btn-danger'> In-Active</span></td><td>627476: (Jackson )</td><td>8146922011</td><td>381637</td><td>10/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=560'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=560'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=560'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=560&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>83</td><td>U7R9M9I7UR</td><td><span class='btn btn-danger'> In-Active</span></td><td>619168: (James )</td><td>8146922011</td><td>383535</td><td>10/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=559'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=559'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=559'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=559&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>84</td><td>MMMQUUU9QM</td><td><span class='btn btn-danger'> In-Active</span></td><td>866286: (Jose )</td><td>8146922011</td><td>383535</td><td>10/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=558'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=558'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=558'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=558&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>85</td><td>UMRIQQMRMU</td><td><span class='btn btn-danger'> In-Active</span></td><td>394677: (Dylan )</td><td>8146922011</td><td>674864</td><td>09/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=557'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=557'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=557'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=557&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>86</td><td>9QR77MR7RI</td><td><span class='btn btn-danger'> In-Active</span></td><td>989645: (Emma )</td><td>8146922011</td><td>674864</td><td>09/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=556'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=556'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=556'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=556&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>87</td><td>Q9URI7RU99</td><td><span class='btn btn-danger'> In-Active</span></td><td>195388: (Jaxon )</td><td>8146922011</td><td>391244</td><td>09/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=555'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=555'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=555'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=555&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>88</td><td>IIUU9MMURR</td><td><span class='btn btn-danger'> In-Active</span></td><td>177316: (Eli )</td><td>8146922011</td><td>391244</td><td>09/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=554'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=554'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=554'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=554&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>89</td><td>IUQ9I7IQ99</td><td><span class='btn btn-danger'> In-Active</span></td><td>468389: (Penelope )</td><td>8146922011</td><td>912225</td><td>09/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=553'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=553'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=553'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=553&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>90</td><td>7MRRIQMR7R</td><td><span class='btn btn-danger'> In-Active</span></td><td>688796: (Eliezer )</td><td>8146922011</td><td>912225</td><td>09/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=552'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=552'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=552'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=552&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>91</td><td>M9U799999U</td><td><span class='btn btn-danger'> In-Active</span></td><td>198738: (Bella )</td><td>8146922011</td><td>544248</td><td>08/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=551'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=551'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=551'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=551&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>92</td><td>Q7779RQR9R</td><td><span class='btn btn-danger'> In-Active</span></td><td>174747: (Matthew )</td><td>8146922011</td><td>544248</td><td>08/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=550'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=550'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=550'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=550&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>93</td><td>79779RR799</td><td><span class='btn btn-danger'> In-Active</span></td><td>625313: (Daniel )</td><td>8146922011</td><td>762342</td><td>07/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=549'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=549'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=549'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=549&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>94</td><td>QMRIMRIQ79</td><td><span class='btn btn-danger'> In-Active</span></td><td>124136: (Lucas )</td><td>8146922011</td><td>762342</td><td>07/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=548'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=548'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=548'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=548&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>95</td><td>9Q9IURMUMR</td><td><span class='btn btn-danger'> In-Active</span></td><td>632252: (Jose )</td><td>8146922011</td><td>444829</td><td>07/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=547'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=547'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=547'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=547&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>96</td><td>I9IQ7UQ77R</td><td><span class='btn btn-danger'> In-Active</span></td><td>727153: (Michael )</td><td>8146922011</td><td>444829</td><td>07/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=546'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=546'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=546'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=546&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>97</td><td>IIIIQI7U77</td><td><span class='btn btn-danger'> In-Active</span></td><td>392236: (Sarah )</td><td>8146922011</td><td>176263</td><td>07/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=545'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=545'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=545'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=545&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>98</td><td>RUR7UMQI9U</td><td><span class='btn btn-danger'> In-Active</span></td><td>628882: (Jonathan )</td><td>8146922011</td><td>176263</td><td>06/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=544'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=544'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=544'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=544&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>99</td><td>IU99MQIIMI</td><td><span class='btn btn-danger'> In-Active</span></td><td>955497: (Aiden )</td><td>8146922011</td><td>357519</td><td>06/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=543'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=543'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=543'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=543&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td>100</td><td>R7I9IU77I7</td><td><span class='btn btn-danger'> In-Active</span></td><td>378955: (Landon )</td><td>8146922011</td><td>357519</td><td>06/10/2016</td><td><div class='btn-group'>
                      <button type='button' class='btn btn-info'>Action</button>
                      <button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>
                        <span class='caret'></span>
                        <span class='sr-only'>Toggle Dropdown</span>
                      </button>
                      <ul class='dropdown-menu' role='menu'>
                        <li><a href='admin-userupdate.php?userid=542'>Edit Profile</a>
                        </li>
                        <li><a href='admin-userupdatebankdetails.php?userid=542'>Bank Details</a>
                        </li>
                        <li><a href='admin-userupdatepassword.php?userid=542'>Change Password</a>
                        </li>
                        
                      </ul>
                    </div> <a class='btn btn-success' href='change_status.php?userid=542&status=1' onclick="return confirm('Do you want to Active this User?')"><i class='fa fa-toggle-on'></i> Active</a></td></tr><tr><td colspan=8 align='center'><span class=selected>Previous</span> <strong class=selected>1</strong> <span style="padding:3px;"><a href="admin-userlist.php?page=2">2</a></span><span style="padding:3px;"><a href="admin-userlist.php?page=3">3</a></span><span style="padding:3px;"><a href="admin-userlist.php?page=4">4</a></span><span style="padding:3px;"><a href="admin-userlist.php?page=5">5</a></span><span style="padding:3px;"><a href="admin-userlist.php?page=6">6</a></span><span style="padding:3px;"><a href="admin-userlist.php?page=7">7</a></span> <a href="admin-userlist.php?page=2">Next</a></td></tr></thead></table>                        </div>
                        
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
      $(document).ready(function() {
        $('#reservation').daterangepicker(
                
                {
                format: 'YYYY-MM-DD'
                 }
                
                , function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          
        });
      });
    </script>
    
    <script>
    Chart.defaults.global.legend = {
        enabled: false
    };

    // Line chart


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
