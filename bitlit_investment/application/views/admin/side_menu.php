<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px;">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <!-- END SIDEBAR TOGGLER BUTTON -->
            <li class="nav-item <?= ($this->uri->segment('2') == 'home') ? 'active' : ''; ?>">
                <a href="<?= base_url('admin/home'); ?>" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                </a>                                
            </li>
            <li class="nav-item <?= ($this->uri->segment('2') == 'user') ? 'active' : ''; ?> ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Personal Details</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item <?= ($this->uri->segment('2') == 'user' && $this->uri->segment('3') == "user") ? 'active' : ''; ?>">
                        <a href="<?= base_url('admin/user'); ?>" class="nav-link nav-toggle">
                            <span class="title">New Register</span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($this->uri->segment('2') == 'user' && $this->uri->segment('3') == "user_list") ? 'active' : ''; ?>">
                        <a href="<?= base_url('admin/user/user_list'); ?>" class="nav-link nav-toggle">
                            <span class="title">User List</span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($this->uri->segment('2') == 'user') ? 'active' : ''; ?>">
                        <a href="<?= base_url('admin/user/change_password'); ?>" class="nav-link nav-toggle">
                            <span class="title">Change Login Password</span>
                        </a>
                    </li>
                  </ul>
            </li>
			<li class="nav-item <?= ($this->uri->segment('2') == 'package') ? 'active' : ''; ?>">
                <a href="<?= base_url('admin/package'); ?>" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Package</span>
                    <span class="selected"></span>
                </a>                                
            </li>
			<li class="nav-item <?= ($this->uri->segment('2') == 'e_pin') ? 'active' : ''; ?> ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Coupon/ E-Pin</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item <?= ($this->uri->segment('2') == 'e_pin' && $this->uri->segment('2') == "e_pin") ? 'active' : ''; ?>">
                        <a href="<?= base_url('admin/e_pin'); ?>" class="nav-link nav-toggle">
                            <span class="title">Create Coupon</span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($this->uri->segment('2') == 'e_pin' && $this->uri->segment('3') == "search_epin") ? 'active' : ''; ?>">
                        <a href="<?= base_url('admin/e_pin/search_epin'); ?>" class="nav-link nav-toggle">
                            <span class="title">Search Coupon</span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($this->uri->segment('2') == 'e_pin' && $this->uri->segment('3') == "un_used_epin") ? 'active' : ''; ?>">
                        <a href="<?= base_url('admin/e_pin/un_used_epin'); ?>" class="nav-link nav-toggle">
                            <span class="title">Un-used Coupon</span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($this->uri->segment('2') == 'e_pin' && $this->uri->segment('3') == "used_epin") ? 'active' : ''; ?>">
                        <a href="<?= base_url('admin/e_pin/used_epin'); ?>" class="nav-link nav-toggle">
                            <span class="title">Used Coupon</span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($this->uri->segment('2') == 'e_pin' && $this->uri->segment('3') == "epin_request") ? 'active' : ''; ?>">
                        <a href="<?= base_url('admin/e_pin/epin_request'); ?>" class="nav-link nav-toggle">
                            <span class="title">Coupon Request</span>
                        </a>
                    </li>
<!--                    <li class="nav-item <?= ($this->uri->segment('2') == 'e_pin' && $this->uri->segment('3') == "request_epin") ? 'active' : ''; ?>">
                        <a href="<?= base_url('admin/e_pin/request_epin'); ?>" class="nav-link nav-toggle">
                            <span class="title">Delete All</span>
                        </a>
                    </li>-->
                </ul>
            </li>
            <li class="nav-item <?= ($this->uri->segment('1') == 'team') ? 'active' : ''; ?> ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">My Team</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item <?= ($this->uri->segment('1') == 'team' && $this->uri->segment('2') == "team") ? 'active' : ''; ?>">
                        <a href="<?= base_url('admin/team'); ?>" class="nav-link nav-toggle">
                            <span class="title">Genealogy</span>
                        </a>
                    </li> 
					<li class="nav-item <?= ($this->uri->segment('1') == 'team' && $this->uri->segment('2') == "my_direct") ? 'active' : ''; ?>">
                        <a href="<?= base_url('admin/team/my_direct'); ?>" class="nav-link nav-toggle">
                            <span class="title">My Direct</span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($this->uri->segment('1') == 'team' && $this->uri->segment('2') == "my_downline") ? 'active' : ''; ?>">
                        <a href="<?= base_url('admin/team/my_downline'); ?>" class="nav-link nav-toggle">
                            <span class="title">Total Downline</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item <?= ($this->uri->segment('2') == 'binary') ? 'active' : ''; ?>">
                <a href="<?= base_url('admin/binary'); ?>" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Binary List</span>
                    <span class="selected"></span>
                </a>                                
            </li>
            <li class="nav-item <?= ($this->uri->segment('2') == 'payout' && $this->uri->segment('3') == "my_reward_data") ? 'active' : ''; ?>">
                <a href="<?= base_url('admin/payout/my_reward_data'); ?>" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Award List</span>
                    <span class="selected"></span>
                </a>                                
            </li>
            <li class="nav-item <?= ($this->uri->segment('2') == 'payout' && $this->uri->segment('3') == "royal_payout") ? 'active' : ''; ?>">
                <a href="<?= base_url('admin/payout/royal_payout'); ?>" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Royalty List</span>
                    <span class="selected"></span>
                </a>                                
            </li>
            
        </ul>
            <!-- END SIDEBAR MENU -->
            <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">						