
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

<style>
    a.tt{
   position:relative;
   z-index:24;
   color:#3CA3FF;
       font-weight:bold;
   text-decoration:none;
   font-size:8px;
}
a.tt span{ display: none; }

a.tt:hover{ z-index:25; color: #aaaaff; background:;}
a.tt:hover span.tooltip{
   display:block;
   position:absolute;
   top:0px; left:0;
       padding: 15px 0 0 0;
       width:200px;
       color: #993300;
   text-align: center;
       filter: alpha(opacity:90);
       KHTMLOpacity: 0.90;
       MozOpacity: 0.90;
       opacity: 0.90;
	    font-size:12px;
}
a.tt:hover span.top{
       display: block;
       padding: 30px 8px 0;
   background: url(images/bubble.gif) no-repeat top;
}
a.tt:hover span.middle{ /* different middle bg for stretch */
       display: block;
       padding: 0 8px;
       background: url(images/bubble_filler.gif) repeat bottom;
}
a.tt:hover span.bottom{
       display: block;
       padding:3px 8px 10px;
       color: #548912;
   background: url(images/bubble.gif) no-repeat bottom;
}

</style>    




<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tree View</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Company Tree Details Update<small>Left and Right tree view information </small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">














<div class="row">

    <div class="col-md-4 col-md-offset-4 center">


        <form class="form-group form-inline">
            <input type="text" value="" name="usrid"  class="form-control input-sm"/>
            <button class="btn btn-primary center" type="submit">Search User</button>
             </form> 
    </div>
</div>
<div class="row">

    <div class="col-md-12 center">

        </td></tr>
        <tr>
            <td bgcolor="#FFFFFF" align="center">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-condensed mb-none">
                        <tr>

                            <td width="950" valign="top" style="background-color:#ffffff"> 
                                          <!--  <center>  <a href='treedownload.php'><img src="images/download.jpg" border="0" /></a> </center>
                                -->          <center>
                            <span style="font-size:14px; color:#333333; font-weight:bold;">
Total Left Point 756.00 and Right Point 531.00                            </span>
                        </center>
                        <br />
                          <!--<table width="1024" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="2" valign="top">
            
            
            
            <table width="630" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="630" align="center"><img src="images/man.jpg" width="45" height="50" /></td>
          </tr>
          <tr>
            <td align="center">&nbsp;</td>
          </tr>
          <tr>
            <td align="center"><table width="630" border="0" align="center" cellpadding="0" cellspacing="0">
              <tr>
                <td colspan="2" align="center"><img src="images/big_arrow.jpg" width="600" height="20" /></td>
              </tr>
              <tr>
                <td colspan="2" align="left">&nbsp;</td>
              </tr>
              <tr>
                <td align="left"><img src="images/dis_man.jpg" width="45" height="50" /></td>
                <td align="right"><img src="images/dis_man.jpg" width="45" height="50" /></td>
              </tr>
            </table></td>
          </tr>
        </table>
            
    
    
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center">&nbsp;</td>
      </tr>
      
      <tr>
        <td width="485" valign="top"><table width="474" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td colspan="2" align="center"><table width="342" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td colspan="2" align="center"><img src="images/midd_arrow.jpg" width="307" height="20" /></td>
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
                </tr>
              <tr>
                <td><img src="images/man.jpg" width="45" height="50" /></td>
                <td align="right"><img src="images/man.jpg" width="45" height="50" /></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td colspan="2" align="center">&nbsp;</td>
            </tr>
          
          <tr>
            <td width="212" valign="top"><table width="184" border="0" cellpadding="0" cellspacing="0">
    
                <tr>
                  <td colspan="2" align="center"><img src="images/small_icon.jpg" width="160" height="20" /></td>
                </tr>
                <tr>
                  <td colspan="2" align="left">&nbsp;</td>
                  </tr>
                <tr>
                  <td align="left"><img src="images/man.jpg" width="45" height="50" /></td>
                  <td align="right"><img src="images/man.jpg" width="45" height="50" /></td>
                </tr>
            </table></td>
            <td width="235" align="right" valign="top"><table width="184" border="0" align="center" cellpadding="0" cellspacing="0">
    
              <tr>
                <td colspan="2" align="center"><img src="images/small_icon.jpg" width="160" height="20" /></td>
              </tr>
              <tr>
                <td colspan="2" align="left">&nbsp;</td>
                </tr>
              <tr>
                <td align="left"><img src="images/man.jpg" width="45" height="50" /></td>
                <td align="right"><img src="images/man.jpg" width="45" height="50" /></td>
              </tr>
            </table></td>
          </tr>
          
        </table></td>
        <td width="539" align="right" valign="top"><table width="474" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td colspan="2" align="center"><table width="342" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td colspan="2" align="center"><img src="images/midd_arrow.jpg" width="307" height="20" /></td>
              </tr>
              <tr>
                <td colspan="2">&nbsp;</td>
                </tr>
              <tr>
                <td><img src="images/man.jpg" width="45" height="50" /></td>
                <td align="right"><img src="images/man.jpg" width="45" height="50" /></td>
              </tr>
            </table></td>
            </tr>
          <tr>
            <td colspan="2" valign="top">&nbsp;</td>
            </tr>
          <tr>
            <td width="212" valign="top"><table width="184" border="0" cellpadding="0" cellspacing="0">
    
                <tr>
                  <td colspan="2" align="center"><img src="images/small_icon.jpg" width="160" height="20" /></td>
                </tr>
                <tr>
                  <td colspan="2" align="left">&nbsp;</td>
                  </tr>
                <tr>
                  <td align="left"><img src="images/man.jpg" width="45" height="50" /></td>
                  <td align="right"><img src="images/man.jpg" width="45" height="50" /></td>
                </tr>
            </table></td>
            <td width="235" align="center" valign="top"><table width="184" border="0" align="center" cellpadding="0" cellspacing="0">
    
                <tr>
                  <td colspan="2" align="center"><img src="images/small_icon.jpg" width="160" height="20" /></td>
                </tr>
                <tr>
                  <td colspan="2" align="left">&nbsp;</td>
                  </tr>
                <tr>
                  <td align="left"><img src="images/man.jpg" width="45" height="50" /></td>
                  <td align="right"><img src="images/man.jpg" width="45" height="50" /></td>
                </tr>
            </table></td>
          </tr>
          
        </table></td>
      </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
      </tr>
    </table>-->
                        <table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                                <td colspan="2" valign="top" align="center">                            <table width="630" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td width="630" align="center">                                            <img src="../profileimage/GUR1001.JPG" width="45" height="50" class="img-circle" />
                                  </td>
                                </tr>
                                <tr>
                                    <td align="center">GenX Infotech</td>
                                </tr>
                                <tr>
                                    <td align="center">100001</td>
                                </tr>
                                <tr>
                                    <td align="center"><table width="630" border="0" align="center" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td colspan="2" align="center"><img src="images/big_arrow.jpg" width="593" height="20" /></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2" align="left">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td align="left">                                                    <a href='user-treeview.php?usrid=247196' class='tt'> <img src="images/tree_on.png" width="45" height="50" class="img-circle" /> <span class='tooltip'><span class='top'></span><span class='middle'><table><tr><td>User ID</td><td> 247196</td></tr>
			<tr><td>Name</td><td> Aaliyah </td></tr>
			
			
			<tr><td>Left Sales Point </td><td> 484.00</td></tr>
			<tr><td>Right Sales Point </td><td> 270.00</td></tr>
			<tr><td>DOJ</td><td>26 Jun 2016</td></tr>
			</table></span><span class='bottom'></span></span></a></td>
                                                <td align="right"><a href='user-treeview.php?usrid=954835' class='tt'><img src="images/tree_on.png" width="45" height="50" class="img-circle"/><span class='tooltip'><span class='top'></span><span class='middle'><table><tr><td>User ID</td><td> 954835</td></tr>
			<tr><td>Name</td><td> Parker </td></tr>
			
			
			<tr><td>Left Sales Point </td><td> 264.00</td></tr>
			<tr><td>Right Sales Point </td><td> 265.00</td></tr>
			<tr><td>DOJ</td><td>26 Jun 2016</td></tr>
			
			</table></span><span class='bottom'></span></span></a></td>
                                            </tr>
                                            <tr>
                                                <td align="left">247196</td>
                                                <td align="right">954835</td>
                                            </tr>
                                            <tr>
                                                <td align="left">Aaliyah </td>
                                                <td align="right">Parker </td>
                                            </tr>
                                        </table></td>
                                </tr>
                            </table>
                                                                                        <!--<table width="630" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td width="630" align="center"><img src="images/man.jpg" width="45" height="50" /></td>
            </tr>
            <tr>
              <td align="center">&nbsp;</td>
            </tr>
            <tr>
              <td align="center"><table width="630" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td colspan="2" align="center"><img src="images/big_arrow.jpg" width="600" height="20" /></td>
                </tr>
                <tr>
                  <td colspan="2" align="left">&nbsp;</td>
                </tr>
                <tr>
                  <td align="left"><img src="images/dis_man.jpg" width="45" height="50" /></td>
                  <td align="right"><img src="images/dis_man.jpg" width="45" height="50" /></td>
                </tr>
              </table></td>
            </tr>
          </table>-->                          </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">&nbsp;</td>
                            </tr>
                            <tr>
                                <td width="485" valign="top"><table width="474" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td colspan="2" align="center">                            <table width="342" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td colspan="2" align="center"><img src="images/midd_arrow.jpg" width="307" height="20" /></td>
                                </tr>
                                <tr>
                                    <td colspan="2">&nbsp;</td>
                                </tr>
                                                                                                                                            <tr>
                                    <td>                                                                    <a href='user-treeview.php?usrid=875884' class='tt'> <img src="images/tree_on.png" width="45" height="50" border="0" class="img-circle" /> <span class='tooltip'><span class='top'></span><span class='middle'><table><tr><td>User ID</td><td> 875884</td></tr>
			<tr><td>Name</td><td> Logan</td></tr>
			
			
			<tr><td>Left Sales Point </td><td> 264.00</td></tr>
			<tr><td>Right Sales Point </td><td> 218.00</td></tr>
			<tr><td>DOJ</td><td>26 Jun 2016</td></tr>
	
			</table></span><span class='bottom'></span></span></a></td>
                                    <td align="right"><a href='user-treeview.php?usrid=857825' class='tt'><img src="images/tree_on.png" width="45" height="50" class="img-circle" /> <span class='tooltip'><span class='top'></span><span class='middle'><table><tr><td>User ID</td><td> 857825</td></tr>
			<tr><td>Name</td><td> Olivia </td></tr>
			
			
			<tr><td>Left Sales Point </td><td> 115.00</td></tr>
			<tr><td>Right Sales Point </td><td> 153.00</td></tr>
			<tr><td>DOJ</td><td>26 Jun 2016</td></tr>
	
			</table></span><span class='bottom'></span></span></a></td>
                                </tr>
                                <tr>
                                    <td align="left">875884</td>
                                    <td align="right">857825</td>
                                </tr>
                                <tr>
                                    <td align="left">Logan</td>
                                    <td align="right">Olivia </td>
                                </tr>
                            </table>
                                                                        </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" align="center">&nbsp;</td>
                                        </tr>
                                                                                            <tr>
                                                <td width="212" valign="top">                            <table width="184" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td colspan="2" align="center"><img src="images/small_icon.jpg" width="160" height="20" /></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="left">&nbsp;</td>
                                </tr>
                                                                        <tr>
                                    <td>                                <a href='user-treeview.php?usrid=472775' class='tt'><img src="images/tree_on.png" width="45" height="50" class="img-circle" /> <span class='tooltip'><span class='top'></span><span class='middle'><table><tr><td>User ID</td><td> 472775</td></tr>
			<tr><td>Name</td><td> Aaliyah </td></tr>
			
			
			<tr><td>Left Sales Point </td><td> 128.00</td></tr>
			<tr><td>Right Sales Point </td><td> 134.00</td></tr>
			<tr><td>DOJ</td><td>27 Jun 2016</td></tr>
	
			</table></span><span class='bottom'></span></span></a></td>
                                    <td align="right"><a href='user-treeview.php?usrid=842772' class='tt'><img src="images/tree_on.png" width="45" height="50" class="img-circle" /> <span class='tooltip'><span class='top'></span><span class='middle'><table><tr><td>User ID</td><td> 842772</td></tr>
			<tr><td>Name</td><td> Ariana </td></tr>
			
			
			<tr><td>Left Sales Point </td><td> 120.00</td></tr>
			<tr><td>Right Sales Point </td><td> 96.00</td></tr>
			<tr><td>DOJ</td><td>27 Jun 2016</td></tr>
	
			</table></span><span class='bottom'></span></span></a></td>
                                </tr>
                                <tr>
                                    <td align="left">472775</td>
                                    <td align="right">842772</td>
                                </tr>
                                <tr>
                                    <td align="left">Aaliyah </td>
                                    <td align="right">Ariana </td>
                                </tr>
                            </table>
                                                                </td>
                                                <td width="235" align="right" valign="top">                            <table width="184" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td colspan="2" align="center"><img src="images/small_icon.jpg" width="160" height="20" /></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="left">&nbsp;</td>
                                </tr>
                                                                        <tr>
                                    <td>                                <a href='user-treeview.php?usrid=812795' class='tt'><img src="images/tree_on.png" width="45" height="50" class="img-circle" /> <span class='tooltip'><span class='top'></span><span class='middle'><table><tr><td>User ID</td><td> 812795</td></tr>
			<tr><td>Name</td><td> Camila </td></tr>
			
			
			<tr><td>Left Sales Point </td><td> 45.00</td></tr>
			<tr><td>Right Sales Point </td><td> 68.00</td></tr>
			<tr><td>DOJ</td><td>27 Jun 2016</td></tr>
	
			</table></span><span class='bottom'></span></span></a></td>
                                    <td align="right"><a href='user-treeview.php?usrid=677119' class='tt'><img src="images/tree_on.png" width="45" height="50" class="img-circle" /> <span class='tooltip'><span class='top'></span><span class='middle'><table><tr><td>User ID</td><td> 677119</td></tr>
			<tr><td>Name</td><td> Faith </td></tr>
			
			
			<tr><td>Left Sales Point </td><td> 82.00</td></tr>
			<tr><td>Right Sales Point </td><td> 68.00</td></tr>
			<tr><td>DOJ</td><td>27 Jun 2016</td></tr>
	
			</table></span><span class='bottom'></span></span></a></td>
                                </tr>
                                <tr>
                                    <td align="left">812795</td>
                                    <td align="right">677119</td>
                                </tr>
                                <tr>
                                    <td align="left">Camila </td>
                                    <td align="right">Faith </td>
                                </tr>
                            </table>
                                                                </td>
                                            </tr>
                                        </table></td>
                                <td width="539" align="right" valign="top"><table width="474" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td colspan="2" align="center">                            <table width="342" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td colspan="2" align="center"><img src="images/midd_arrow.jpg" width="307" height="20" /></td>
                                </tr>
                                <tr>
                                    <td colspan="2">&nbsp;</td>
                                </tr>
                                                                                                                                            <tr>
                                    <td>                                                                    <a href='user-treeview.php?usrid=294795' class='tt'> <img src="images/tree_on.png" width="45" height="50" border="0" class="img-circle" /> <span class='tooltip'><span class='top'></span><span class='middle'><table><tr><td>User ID</td><td> 294795</td></tr>
			<tr><td>Name</td><td> Dylan</td></tr>
			
			
			<tr><td>Left Sales Point </td><td> 131.00</td></tr>
			<tr><td>Right Sales Point </td><td> 131.00</td></tr>
			<tr><td>DOJ</td><td>27 Jun 2016</td></tr>
	
			</table></span><span class='bottom'></span></span></a></td>
                                    <td align="right"><a href='user-treeview.php?usrid=216123' class='tt'><img src="images/tree_on.png" width="45" height="50" class="img-circle" /> <span class='tooltip'><span class='top'></span><span class='middle'><table><tr><td>User ID</td><td> 216123</td></tr>
			<tr><td>Name</td><td> Aiden </td></tr>
			
			
			<tr><td>Left Sales Point </td><td> 131.00</td></tr>
			<tr><td>Right Sales Point </td><td> 132.00</td></tr>
			<tr><td>DOJ</td><td>27 Jun 2016</td></tr>
	
			</table></span><span class='bottom'></span></span></a></td>
                                </tr>
                                <tr>
                                    <td align="left">294795</td>
                                    <td align="right">216123</td>
                                </tr>
                                <tr>
                                    <td align="left">Dylan</td>
                                    <td align="right">Aiden </td>
                                </tr>
                            </table>
                                                                        </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" valign="top">&nbsp;</td>
                                        </tr>
                                            <tr>
                                                <td width="212" valign="top">                            <table width="184" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td colspan="2" align="center"><img src="images/small_icon.jpg" width="160" height="20" /></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="left">&nbsp;</td>
                                </tr>
                                                                        <tr>
                                    <td>                                <a href='user-treeview.php?usrid=639281' class='tt'><img src="images/tree_on.png" width="45" height="50" class="img-circle" /> <span class='tooltip'><span class='top'></span><span class='middle'><table><tr><td>User ID</td><td> 639281</td></tr>
			<tr><td>Name</td><td> Abigail </td></tr>
			
			
			<tr><td>Left Sales Point </td><td> 64.00</td></tr>
			<tr><td>Right Sales Point </td><td> 64.00</td></tr>
			<tr><td>DOJ</td><td>28 Jun 2016</td></tr>
	
			</table></span><span class='bottom'></span></span></a></td>
                                    <td align="right"><a href='user-treeview.php?usrid=177111' class='tt'><img src="images/tree_on.png" width="45" height="50" class="img-circle" /> <span class='tooltip'><span class='top'></span><span class='middle'><table><tr><td>User ID</td><td> 177111</td></tr>
			<tr><td>Name</td><td> Grace </td></tr>
			
			
			<tr><td>Left Sales Point </td><td> 64.00</td></tr>
			<tr><td>Right Sales Point </td><td> 64.00</td></tr>
			<tr><td>DOJ</td><td>28 Jun 2016</td></tr>
	
			</table></span><span class='bottom'></span></span></a></td>
                                </tr>
                                <tr>
                                    <td align="left">639281</td>
                                    <td align="right">177111</td>
                                </tr>
                                <tr>
                                    <td align="left">Abigail </td>
                                    <td align="right">Grace </td>
                                </tr>
                            </table>
                                                                </td>
                                                <td width="235" align="center" valign="top">                            <table width="184" border="0" align="center" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td colspan="2" align="center"><img src="images/small_icon.jpg" width="160" height="20" /></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="left">&nbsp;</td>
                                </tr>
                                                                        <tr>
                                    <td>                                <a href='user-treeview.php?usrid=634433' class='tt'><img src="images/tree_on.png" width="45" height="50" class="img-circle" /> <span class='tooltip'><span class='top'></span><span class='middle'><table><tr><td>User ID</td><td> 634433</td></tr>
			<tr><td>Name</td><td> Mackenzie </td></tr>
			
			
			<tr><td>Left Sales Point </td><td> 64.00</td></tr>
			<tr><td>Right Sales Point </td><td> 64.00</td></tr>
			<tr><td>DOJ</td><td>28 Jun 2016</td></tr>
	
			</table></span><span class='bottom'></span></span></a></td>
                                    <td align="right"><a href='user-treeview.php?usrid=694243' class='tt'><img src="images/tree_on.png" width="45" height="50" class="img-circle" /> <span class='tooltip'><span class='top'></span><span class='middle'><table><tr><td>User ID</td><td> 694243</td></tr>
			<tr><td>Name</td><td> Nathan </td></tr>
			
			
			<tr><td>Left Sales Point </td><td> 64.00</td></tr>
			<tr><td>Right Sales Point </td><td> 65.00</td></tr>
			<tr><td>DOJ</td><td>28 Jun 2016</td></tr>
	
			</table></span><span class='bottom'></span></span></a></td>
                                </tr>
                                <tr>
                                    <td align="left">634433</td>
                                    <td align="right">694243</td>
                                </tr>
                                <tr>
                                    <td align="left">Mackenzie </td>
                                    <td align="right">Nathan </td>
                                </tr>
                            </table>
                                                                </td>
                                            </tr>
                                        </table></td>
                            </tr>
                            <tr>
                                <td colspan="2">&nbsp;</td>
                            </tr>
                        </table>
                                                                                               </td>
                        </tr>
                    </table>

                </div>


    </div>
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
  
  </html>
