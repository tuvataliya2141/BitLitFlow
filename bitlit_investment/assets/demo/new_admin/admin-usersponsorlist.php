
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
                <h3>Sponsor's Users List </h3>
            </div>


        </div>
        <div class="clearfix"></div>

       


        
       

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>User Sponsor's List members<small>How many sponsor's members by registered userse</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>

                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        
                        
                        
                        <form class="form-horizontal form-label-left" novalidate action="/demo/newadmin/admin-usersponsorlist.php" method="get" enctype="multipart/form-data">
    
                       <table class="table col-md-6 col-sm-6 col-xs-12" style="width:70%" align="center">                  
                            <thead>
                                <tr>  <td>
                                        
                                     
                                        
                        
                      
                            
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                     <input type="text"  class="form-control has-feedback-left"   name="ids" placeholder="userId / Mobile / Name" data-validate-length-range="3" data-validate-words="1" required="required" >
                                    
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
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
			<thead><tr><th>Sr No</th><th>Name</th><th> Mobile</th><th>Total Sponsor</th><th>Action</th></tr><tr><td>1</td><td>100001: (GenX )</td><td>8146922011</td><td>4</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=100001'><i class='fa fa-list'></i> View</a></td></tr><tr><td>2</td><td>875884: (Logan )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=875884'><i class='fa fa-list'></i> View</a></td></tr><tr><td>3</td><td>294795: (Dylan )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=294795'><i class='fa fa-list'></i> View</a></td></tr><tr><td>4</td><td>472775: (Aaliyah )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=472775'><i class='fa fa-list'></i> View</a></td></tr><tr><td>5</td><td>812795: (Camila )</td><td>8146922011</td><td>3</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=812795'><i class='fa fa-list'></i> View</a></td></tr><tr><td>6</td><td>639281: (Abigail )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=639281'><i class='fa fa-list'></i> View</a></td></tr><tr><td>7</td><td>634433: (Mackenzie )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=634433'><i class='fa fa-list'></i> View</a></td></tr><tr><td>8</td><td>462953: (Lucas )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=462953'><i class='fa fa-list'></i> View</a></td></tr><tr><td>9</td><td>318873: (Kennedy )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=318873'><i class='fa fa-list'></i> View</a></td></tr><tr><td>10</td><td>655363: (Ashley )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=655363'><i class='fa fa-list'></i> View</a></td></tr><tr><td>11</td><td>361588: (Landon )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=361588'><i class='fa fa-list'></i> View</a></td></tr><tr><td>12</td><td>568544: (Aaron )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=568544'><i class='fa fa-list'></i> View</a></td></tr><tr><td>13</td><td>167958: (Kamdyn )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=167958'><i class='fa fa-list'></i> View</a></td></tr><tr><td>14</td><td>168613: (Noah )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=168613'><i class='fa fa-list'></i> View</a></td></tr><tr><td>15</td><td>224998: (Sonu )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=224998'><i class='fa fa-list'></i> View</a></td></tr><tr><td>16</td><td>212261: (Mackenzie )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=212261'><i class='fa fa-list'></i> View</a></td></tr><tr><td>17</td><td>169227: (Jason )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=169227'><i class='fa fa-list'></i> View</a></td></tr><tr><td>18</td><td>573368: (Aaron )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=573368'><i class='fa fa-list'></i> View</a></td></tr><tr><td>19</td><td>522824: (Mason )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=522824'><i class='fa fa-list'></i> View</a></td></tr><tr><td>20</td><td>811375: (Ayden )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=811375'><i class='fa fa-list'></i> View</a></td></tr><tr><td>21</td><td>684799: (Katherine )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=684799'><i class='fa fa-list'></i> View</a></td></tr><tr><td>22</td><td>526667: (John )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=526667'><i class='fa fa-list'></i> View</a></td></tr><tr><td>23</td><td>271841: (Tristian )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=271841'><i class='fa fa-list'></i> View</a></td></tr><tr><td>24</td><td>667726: (Dylan )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=667726'><i class='fa fa-list'></i> View</a></td></tr><tr><td>25</td><td>612936: (Mason )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=612936'><i class='fa fa-list'></i> View</a></td></tr><tr><td>26</td><td>948249: (Anna )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=948249'><i class='fa fa-list'></i> View</a></td></tr><tr><td>27</td><td>716415: (Abigail )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=716415'><i class='fa fa-list'></i> View</a></td></tr><tr><td>28</td><td>658915: (Chase )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=658915'><i class='fa fa-list'></i> View</a></td></tr><tr><td>29</td><td>385898: (Sarah )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=385898'><i class='fa fa-list'></i> View</a></td></tr><tr><td>30</td><td>855562: (Brianna )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=855562'><i class='fa fa-list'></i> View</a></td></tr><tr><td>31</td><td>741323: (Alexander )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=741323'><i class='fa fa-list'></i> View</a></td></tr><tr><td>32</td><td>467984: (Samantha )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=467984'><i class='fa fa-list'></i> View</a></td></tr><tr><td>33</td><td>313137: (Dimitri )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=313137'><i class='fa fa-list'></i> View</a></td></tr><tr><td>34</td><td>114565: (Eli )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=114565'><i class='fa fa-list'></i> View</a></td></tr><tr><td>35</td><td>825377: (John )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=825377'><i class='fa fa-list'></i> View</a></td></tr><tr><td>36</td><td>643795: (Lydia )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=643795'><i class='fa fa-list'></i> View</a></td></tr><tr><td>37</td><td>235441: (Thomas )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=235441'><i class='fa fa-list'></i> View</a></td></tr><tr><td>38</td><td>294547: (Nathan )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=294547'><i class='fa fa-list'></i> View</a></td></tr><tr><td>39</td><td>534778: (Kennedy )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=534778'><i class='fa fa-list'></i> View</a></td></tr><tr><td>40</td><td>984294: (Jacob )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=984294'><i class='fa fa-list'></i> View</a></td></tr><tr><td>41</td><td>238284: (Aiden )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=238284'><i class='fa fa-list'></i> View</a></td></tr><tr><td>42</td><td>797369: (Harry )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=797369'><i class='fa fa-list'></i> View</a></td></tr><tr><td>43</td><td>154431: (Ariana )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=154431'><i class='fa fa-list'></i> View</a></td></tr><tr><td>44</td><td>955219: (Navi )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=955219'><i class='fa fa-list'></i> View</a></td></tr><tr><td>45</td><td>733824: (Isaiah )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=733824'><i class='fa fa-list'></i> View</a></td></tr><tr><td>46</td><td>556262: (Ellie )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=556262'><i class='fa fa-list'></i> View</a></td></tr><tr><td>47</td><td>462276: (Nolan )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=462276'><i class='fa fa-list'></i> View</a></td></tr><tr><td>48</td><td>139513: (Jacob )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=139513'><i class='fa fa-list'></i> View</a></td></tr><tr><td>49</td><td>213734: (Jack )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=213734'><i class='fa fa-list'></i> View</a></td></tr><tr><td>50</td><td>681522: (Peyton )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=681522'><i class='fa fa-list'></i> View</a></td></tr><tr><td>51</td><td>411746: (Jacob )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=411746'><i class='fa fa-list'></i> View</a></td></tr><tr><td>52</td><td>767961: (Riley )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=767961'><i class='fa fa-list'></i> View</a></td></tr><tr><td>53</td><td>878813: (Jason )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=878813'><i class='fa fa-list'></i> View</a></td></tr><tr><td>54</td><td>669972: (Isabella )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=669972'><i class='fa fa-list'></i> View</a></td></tr><tr><td>55</td><td>421831: (Mason )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=421831'><i class='fa fa-list'></i> View</a></td></tr><tr><td>56</td><td>264682: (Christian )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=264682'><i class='fa fa-list'></i> View</a></td></tr><tr><td>57</td><td>594494: (Gabriel )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=594494'><i class='fa fa-list'></i> View</a></td></tr><tr><td>58</td><td>991929: (Dwayne )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=991929'><i class='fa fa-list'></i> View</a></td></tr><tr><td>59</td><td>667272: (Aaron )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=667272'><i class='fa fa-list'></i> View</a></td></tr><tr><td>60</td><td>213241: (Christian )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=213241'><i class='fa fa-list'></i> View</a></td></tr><tr><td>61</td><td>297956: (Tyler )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=297956'><i class='fa fa-list'></i> View</a></td></tr><tr><td>62</td><td>292927: (Wyatt )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=292927'><i class='fa fa-list'></i> View</a></td></tr><tr><td>63</td><td>373573: (Mason )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=373573'><i class='fa fa-list'></i> View</a></td></tr><tr><td>64</td><td>311913: (Savannah )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=311913'><i class='fa fa-list'></i> View</a></td></tr><tr><td>65</td><td>834424: (Lucas )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=834424'><i class='fa fa-list'></i> View</a></td></tr><tr><td>66</td><td>641191: (Oliver )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=641191'><i class='fa fa-list'></i> View</a></td></tr><tr><td>67</td><td>353634: (Julian )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=353634'><i class='fa fa-list'></i> View</a></td></tr><tr><td>68</td><td>293447: (Adam )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=293447'><i class='fa fa-list'></i> View</a></td></tr><tr><td>69</td><td>765869: (Ethan )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=765869'><i class='fa fa-list'></i> View</a></td></tr><tr><td>70</td><td>536851: (Lydia )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=536851'><i class='fa fa-list'></i> View</a></td></tr><tr><td>71</td><td>484474: (Parker )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=484474'><i class='fa fa-list'></i> View</a></td></tr><tr><td>72</td><td>684616: (Jason )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=684616'><i class='fa fa-list'></i> View</a></td></tr><tr><td>73</td><td>179525: (Chase )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=179525'><i class='fa fa-list'></i> View</a></td></tr><tr><td>74</td><td>131673: (Emma )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=131673'><i class='fa fa-list'></i> View</a></td></tr><tr><td>75</td><td>465558: (Chloe )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=465558'><i class='fa fa-list'></i> View</a></td></tr><tr><td>76</td><td>425545: (Rylee )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=425545'><i class='fa fa-list'></i> View</a></td></tr><tr><td>77</td><td>121447: (Jason )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=121447'><i class='fa fa-list'></i> View</a></td></tr><tr><td>78</td><td>688876: (Eliezer )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=688876'><i class='fa fa-list'></i> View</a></td></tr><tr><td>79</td><td>485221: (Sonu )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=485221'><i class='fa fa-list'></i> View</a></td></tr><tr><td>80</td><td>994134: (Landon )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=994134'><i class='fa fa-list'></i> View</a></td></tr><tr><td>81</td><td>227566: (Dylan )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=227566'><i class='fa fa-list'></i> View</a></td></tr><tr><td>82</td><td>838531: (Zachary )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=838531'><i class='fa fa-list'></i> View</a></td></tr><tr><td>83</td><td>324214: (Audrey )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=324214'><i class='fa fa-list'></i> View</a></td></tr><tr><td>84</td><td>545254: (Sonu )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=545254'><i class='fa fa-list'></i> View</a></td></tr><tr><td>85</td><td>668639: (Dwayne )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=668639'><i class='fa fa-list'></i> View</a></td></tr><tr><td>86</td><td>534229: (Sadie )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=534229'><i class='fa fa-list'></i> View</a></td></tr><tr><td>87</td><td>893611: (Julian )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=893611'><i class='fa fa-list'></i> View</a></td></tr><tr><td>88</td><td>676987: (Sadie )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=676987'><i class='fa fa-list'></i> View</a></td></tr><tr><td>89</td><td>885758: (John )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=885758'><i class='fa fa-list'></i> View</a></td></tr><tr><td>90</td><td>279512: (Dwayne )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=279512'><i class='fa fa-list'></i> View</a></td></tr><tr><td>91</td><td>889885: (Sonu )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=889885'><i class='fa fa-list'></i> View</a></td></tr><tr><td>92</td><td>213466: (John )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=213466'><i class='fa fa-list'></i> View</a></td></tr><tr><td>93</td><td>613736: (Rylee )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=613736'><i class='fa fa-list'></i> View</a></td></tr><tr><td>94</td><td>622323: (Adam )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=622323'><i class='fa fa-list'></i> View</a></td></tr><tr><td>95</td><td>472669: (Oliver )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=472669'><i class='fa fa-list'></i> View</a></td></tr><tr><td>96</td><td>545484: (Tristian )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=545484'><i class='fa fa-list'></i> View</a></td></tr><tr><td>97</td><td>987572: (Logan )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=987572'><i class='fa fa-list'></i> View</a></td></tr><tr><td>98</td><td>269217: (Aiden )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=269217'><i class='fa fa-list'></i> View</a></td></tr><tr><td>99</td><td>395439: (Ellie )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=395439'><i class='fa fa-list'></i> View</a></td></tr><tr><td>100</td><td>749264: (Nolan )</td><td>8146922011</td><td>2</td><td> <a class='btn btn-info' href='admin-usersponsorreport.php?userid=749264'><i class='fa fa-list'></i> View</a></td></tr><tr><td colspan=8 align='center'><span class=selected>Previous</span> <strong class=selected>1</strong> <span style="padding:3px;"><a href="admin-usersponsorlist.php?page=2">2</a></span><span style="padding:3px;"><a href="admin-usersponsorlist.php?page=3">3</a></span><span style="padding:3px;"><a href="admin-usersponsorlist.php?page=4">4</a></span> <a href="admin-usersponsorlist.php?page=2">Next</a></td></tr></thead></table>                        </div>
                        
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
        format: 'YYYY-MM-DD',
        dateLimit: { days: 30 }
      }
                
                , function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
          
        });
      });
    </script>

  </html>
