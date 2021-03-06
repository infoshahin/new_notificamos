<?php include 'includes_top.php'; ?>


<!-- Start Content -->
<div class="container-fluid left-menu">

    <div class="navbar main">
        <div class="innerpx">
            <button type="button" class="btn btn-navbar hidden-desktop hidden-tablet">
                <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
            </button>
            <div class="positionWrapper">
                <span class="line"></span>

                <div class="profile">
                    <img src="http://www.placehold.it/38x38/232323" class="avatar" alt="Profile"/>
						<span class="info hidden-phone">
							<strong><?php
                                $admin_type = $this->session->userdata('logged_in');
                                echo $admin_type['username'];
                                $admin_title = $this->crud_model->get_user_type($admin_type['user_type_id']);

                                ?></strong>
							<em><?php echo $admin_title[0]['title']; ?></em>
						</span>
                </div>

                <ul class="topnav hidden-phone">

                    <li>
                        <a href="<?php echo base_url(); ?>verifylogin/logout"
                           class="logout glyphicons lock"><i></i><span>Logout</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row-fluid rrow main">
        <div class="span12 main col" role="main">
            <div class="row-fluid rrow">
                <div class="span2 col main-left hide hidden-phone menu-large">
                    <div class="rrow scroll-y-left">
                        <div class="iScrollWrapper">
                            <?php
                            if ($admin_title[0]['title'] == 'Super Admin' || $admin_title[0]['title'] == 'Admin') {

                                ?>
                                <!----------------------Menu Section Start for super admin ----------------------->
                                <ul>
                                    <li class="glyphicons home currentScroll <?php if ($page_name == 'dashboard') echo 'active'; ?>"><a
                                            href="<?php echo base_url();?>admin/"><i></i><span>Dashboard</span></a></li>
                                    <li class="glyphicons coins <?php if ($page_name == 'campaigns') echo 'active'; ?>"><a
                                            href="<?php echo base_url();?>admin/campaigns"><i></i><span>Campaigns</span></a>
                                    </li>
                                    <li class="glyphicons sort <?php if ($page_name == 'Categories') echo 'active'; ?>"><a href="<?php echo base_url();?>admin/cetagory"><i></i><span>Categories</span></a>
                                    </li>
                                    <li class="glyphicons sort <?php if ($page_name == 'coverage') echo 'active'; ?>"><a href="<?php echo base_url();?>admin/coverage"><i></i><span>Coverage</span></a>
                                    </li>
                                    <li class="glyphicons sort <?php if ($page_name == 'merchant') echo 'active'; ?>"><a
                                            href="<?php echo base_url();?>admin/view_merchants"><i></i><span>Merchant</span></a></li>
                                    <li class="glyphicons picture <?php if ($page_name == 'user') echo 'active'; ?>"><a
                                            href="<?php echo base_url();?>admin/user_view"><i></i><span>User</span></a></li>
                                    <li class="glyphicons adress_book <?php if ($page_name == 'clients') echo 'active'; ?>"><a href="<?php echo base_url();?>admin/client_view"><i></i><span>Clients</span></a>
                                    </li>
                                    <li class="glyphicons charts"><a href="#"><i></i><span>Notification</span></a>
                                    </li>
                                    <li class="glyphicons cogwheels"><a href="#"><i></i><span>Delivery Log</span></a>
                                    </li>

                                </ul>
                                <!----------------------Menu Section End for super admin----------------------->
                            <?php }
                            if ($admin_title[0]['title'] == 'Merchant') { ?>

                                <!----------------------Menu Section Start for Merchant admin ----------------------->
                                <ul>
                                    <li class="glyphicons home currentScroll <?php if ($page_name == 'dashboard') echo 'active'; ?>"><a
                                            href="<?php echo base_url();?>admin/"><i></i><span>Dashboard</span></a></li>
                                    <li class="glyphicons coins <?php if ($page_name == 'campaigns') echo 'active'; ?>"><a href="<?php echo base_url();?>admin/campaigns"><i></i><span>Campaigns</span></a>
                                    </li>
                                    <li class="glyphicons charts <?php if ($page_name == 'notification') echo 'active'; ?>"><a href="#"><i></i><span>Notification</span></a>
                                    </li>
                                    <li class="glyphicons cogwheels <?php if ($page_name == 'delivery_log') echo 'active'; ?>"><a href="#"><i></i><span>Delivery Log</span></a>
                                    </li>

                                </ul>
                                <!----------------------Menu Section End for Merchant admin----------------------->
                            <?php } ?>
							
							 <!----------------------Menu Section End for super admin----------------------->
                            <?php 
                            if ($admin_title[0]['title'] == 'Moderator') { ?>

                                <!----------------------Menu Section Start for Moderator admin ----------------------->
                                <ul>
                                    <li class="glyphicons home currentScroll <?php if ($page_name == 'dashboard') echo 'active'; ?>"><a
                                            href="<?php echo base_url();?>admin/"><i></i><span>Dashboard</span></a></li>
                                    <li class="glyphicons sort <?php if ($page_name == 'merchant') echo 'active'; ?>"><a
                                            href="<?php echo base_url();?>admin/view_merchants"><i></i><span>Merchant</span></a></li>
                                    <li class="glyphicons picture <?php if ($page_name == 'user') echo 'active'; ?>"><a
                                            href="<?php echo base_url();?>admin/user_view"><i></i><span>User</span></a></li>

                                </ul>
                                <!----------------------Menu Section End for Moderator admin----------------------->
                            <?php } ?>


                        </div>
							<span class="navarrow hide">
								<span class="glyphicons circle_arrow_down"><i></i></span>
							</span>
                    </div>
                </div>

                <?php echo $maincontent; ?>


            </div>
        </div>

        <!-- End Content -->
    </div>

    <!-- Sticky Footer -->
    <div id="footer" class="hide">
        <div class="wrap">
            <ul>
                <li class="active"><span data-toggle="menu-position" data-menu-position="left-menu"
                                         class="glyphicons circle_arrow_left" title=""><i></i></span></li>
                <li><span data-toggle="menu-position" data-menu-position="right-menu"
                          class="glyphicons circle_arrow_right" title=""><i></i></span></li>
                <li><span data-toggle="menu-position" data-menu-position="top-menu" class="glyphicons circle_arrow_top"
                          title=""><i></i></span></li>
                <li class="divider"></li>
                <li class="active"><span data-toggle="menu-size" data-menu-size="0"
                                         class="glyphicons show_big_thumbnails text" title=""><i></i><span
                            class="hidden-phone">Large menus</span></span></li>
                <li><span data-toggle="menu-size" data-menu-size="1" class="glyphicons show_thumbnails text"
                          title=""><i></i><span class="hidden-phone">Small menus</span></span></li>
            </ul>
        </div>
    </div>

</div>

<?php include 'includes_bottom.php'; ?>
	