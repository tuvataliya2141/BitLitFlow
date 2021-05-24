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
            <li class="nav-item <?= ($this->uri->segment('1') == 'home') ? 'active' : ''; ?>">
                <a href="<?= base_url('home'); ?>" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                </a>                                
            </li>
            <li class="nav-item <?= ($this->uri->segment('1') == 'user') ? 'active' : ''; ?>">
                <a href="<?= base_url('user'); ?>" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">New Register</span>
                    <span class="selected"></span>
                </a>                                
            </li>
            <li class="nav-item <?= ($this->uri->segment('1') == 'user') ? 'active' : ''; ?> ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Personal Details</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item <?= ($this->uri->segment('1') == 'user' && $this->uri->segment('2') == "kyc_details") ? 'active' : ''; ?>">
                        <a href="<?= base_url('user/kyc_details'); ?>" class="nav-link nav-toggle">
                            <span class="title">My KYC Details</span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($this->uri->segment('1') == 'user' && $this->uri->segment('2') == "shipping_details") ? 'active' : ''; ?>">
                        <a href="<?= base_url('user/shipping_details'); ?>" class="nav-link nav-toggle">
                            <span class="title">My Shipping Details</span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($this->uri->segment('1') == 'user' && $this->uri->segment('2') == "bank_detail") ? 'active' : ''; ?>">
                        <a href="<?= base_url('user/bank_detail'); ?>" class="nav-link nav-toggle">
                            <span class="title">My Bank Details</span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($this->uri->segment('1') == 'user' && $this->uri->segment('2') == "change_password") ? 'active' : ''; ?>">
                        <a href="<?= base_url('user/change_password'); ?>" class="nav-link nav-toggle">
                            <span class="title">Change Login Password</span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($this->uri->segment('1') == 'user' && $this->uri->segment('2') == "txn_password") ? 'active' : ''; ?>">
                        <a href="<?= base_url('user/txn_password'); ?>" class="nav-link nav-toggle">
                            <span class="title">Change Txn Password</span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($this->uri->segment('1') == 'user' && $this->uri->segment('2') == "my_documents") ? 'active' : ''; ?>">
                        <a href="<?= base_url('user/my_documents'); ?>" class="nav-link nav-toggle">
                            <span class="title">My Documents</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item <?= ($this->uri->segment('1') == 'e_pin') ? 'active' : ''; ?> ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">My Coupon/ E-Pin</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item <?= ($this->uri->segment('1') == 'e_pin' && $this->uri->segment('2') == "e_pin") ? 'active' : ''; ?>">
                        <a href="<?= base_url('e_pin'); ?>" class="nav-link nav-toggle">
                            <span class="title">Create Coupon</span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($this->uri->segment('1') == 'e_pin' && $this->uri->segment('2') == "transfer_epin") ? 'active' : ''; ?>">
                        <a href="<?= base_url('e_pin/transfer_epin'); ?>" class="nav-link nav-toggle">
                            <span class="title">Transfer Coupon</span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($this->uri->segment('1') == 'e_pin' && $this->uri->segment('2') == "transfer_epin_list") ? 'active' : ''; ?>">
                        <a href="<?= base_url('e_pin/transfer_epin_list'); ?>" class="nav-link nav-toggle">
                            <span class="title">Transfer Coupon Report</span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($this->uri->segment('1') == 'e_pin' && $this->uri->segment('2') == "un_used_epin") ? 'active' : ''; ?>">
                        <a href="<?= base_url('e_pin/un_used_epin'); ?>" class="nav-link nav-toggle">
                            <span class="title">Un-used Coupon</span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($this->uri->segment('1') == 'e_pin' && $this->uri->segment('2') == "used_epin") ? 'active' : ''; ?>">
                        <a href="<?= base_url('e_pin/used_epin'); ?>" class="nav-link nav-toggle">
                            <span class="title">Used Coupon</span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($this->uri->segment('1') == 'e_pin' && $this->uri->segment('2') == "request_epin") ? 'active' : ''; ?>">
                        <a href="<?= base_url('e_pin/request_epin'); ?>" class="nav-link nav-toggle">
                            <span class="title">Request Coupon</span>
                        </a>
                    </li>
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
                        <a href="<?= base_url('team'); ?>" class="nav-link nav-toggle">
                            <span class="title">My Genealogy</span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($this->uri->segment('1') == 'team' && $this->uri->segment('2') == "my_direct") ? 'active' : ''; ?>">
                        <a href="<?= base_url('team/my_direct'); ?>" class="nav-link nav-toggle">
                            <span class="title">My Direct Sponsor</span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($this->uri->segment('1') == 'team' && $this->uri->segment('2') == "my_downline") ? 'active' : ''; ?>">
                        <a href="<?= base_url('team/my_downline'); ?>" class="nav-link nav-toggle">
                            <span class="title">My Total Downline</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item <?= ($this->uri->segment('1') == 'payout') ? 'active' : ''; ?> ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">My Income</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item <?= ($this->uri->segment('1') == 'payout' && $this->uri->segment('2') == "payout") ? 'active' : ''; ?>">
                        <a href="<?= base_url('payout'); ?>" class="nav-link nav-toggle">
                            <span class="title">My Binary Income</span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($this->uri->segment('1') == 'payout' && $this->uri->segment('2') == "royal_payout") ? 'active' : ''; ?>">
                        <a href="<?= base_url('payout/royal_payout'); ?>" class="nav-link nav-toggle">
                            <span class="title">My Royalty Income</span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($this->uri->segment('1') == 'payout' && $this->uri->segment('2') == "my_reward") ? 'active' : ''; ?>">
                        <a href="<?= base_url('payout/my_reward'); ?>" class="nav-link nav-toggle">
                            <span class="title">My Award Reward Income</span>
                        </a>
                    </li>					
                </ul>
            </li>
            <li class="nav-item <?= ($this->uri->segment('1') == 'activity') ? 'active' : ''; ?> ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">My Activity</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <!--<li class="nav-item <?= ($this->uri->segment('1') == 'activity' && $this->uri->segment('2') == "activity") ? 'active' : ''; ?>">
                        <a href="<?= base_url('activity'); ?>" class="nav-link nav-toggle">
                            <span class="title">Id Request</span>
                        </a>
                    </li>-->
                    <li class="nav-item <?= ($this->uri->segment('1') == 'activity' && $this->uri->segment('2') == "ticket_check") ? 'active' : ''; ?>">
                        <a href="<?= base_url('activity/ticket_check'); ?>" class="nav-link nav-toggle">
                            <span class="title">Generate Ticket </span>
                        </a>
                    </li>
                    <li class="nav-item <?= ($this->uri->segment('1') == 'activity' && $this->uri->segment('2') == "resolve_ticket") ? 'active' : ''; ?>">
                        <a href="<?= base_url('activity/resolve_ticket'); ?>" class="nav-link nav-toggle">
                            <span class="title">Resolve Ticket</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item <?= ($this->uri->segment('1') == 'wallet') ? 'active' : ''; ?> ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">My Wallet Statement</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item <?= ($this->uri->segment('1') == 'wallet' && $this->uri->segment('2') == "wallet") ? 'active' : ''; ?>">
                        <a href="<?= base_url('wallet'); ?>" class="nav-link nav-toggle">
                            <span class="title">My Statement</span>
                        </a>
                    </li>
                </ul>
            </li>
            <!--<li class="nav-item <?= ($this->uri->segment('1') == 'reports') ? 'active' : ''; ?> ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">My Reports</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item <?= ($this->uri->segment('1') == 'reports' && $this->uri->segment('2') == "reports") ? 'active' : ''; ?>">
                        <a href="<?= base_url('reports'); ?>" class="nav-link nav-toggle">
                            <span class="title">Id Request Details</span>
                        </a>
                    </li>
                </ul>
            </li>-->
            <li class="nav-item <?= ($this->uri->segment('1') == 'royal_income' && $this->uri->segment('2') == "club_member") ? 'active' : ''; ?>">
                <a href="<?= base_url('club_member'); ?>" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Bonanza Club Member</span>
                    <span class="selected"></span>
                </a>                                
            </li>
            <li class="nav-item <?= ($this->uri->segment('2') == 'royal_income') ? 'active' : ''; ?>">
                <a href="<?= base_url('club_member/royal_income'); ?>" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Royalty Income</span>
                    <span class="selected"></span>
                </a>                                
            </li>
            <li class="nav-item <?= ($this->uri->segment('2') == 'capping') ? 'active' : ''; ?>">
                <a href="<?= base_url('club_member/capping'); ?>" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Capping Income</span>
                    <span class="selected"></span>
                </a>                                
            </li>
			<li class="nav-item <?= ($this->uri->segment('2') == 'award_reward') ? 'active' : ''; ?>">
                <a href="<?= base_url('club_member/award'); ?>" class="nav-link nav-toggle">
                    <i class="icon-diamond"></i>
                    <span class="title">Award Reward Income</span>
                    <span class="selected"></span>
                </a>                                
            </li>
        </ul>
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">						