<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->

<!-- Mirrored from demo.mosaicpro.biz/bootadmin/html/login.html?page=login&lang=it by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jan 2015 09:17:35 GMT -->
<head>
	<title>Notificamos</title>
	
	<!-- Meta -->
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	
	<!-- Bootstrap -->
	<link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
	
	<!-- Bootstrap Extended -->
	<link href="<?php echo base_url();?>assets/bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/bootstrap/extend/jasny-bootstrap/css/jasny-bootstrap-responsive.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/bootstrap/extend/bootstrap-wysihtml5/css/bootstrap-wysihtml5-0.0.2.css" rel="stylesheet">
	
	<!-- JQueryUI v1.9.2 -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/theme/scripts/jquery-ui-1.9.2.custom/css/smoothness/jquery-ui-1.9.2.custom.min.css" />
	
	<!-- Glyphicons -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/theme/css/glyphicons.css" />
	
	<!-- Bootstrap Extended -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/extend/bootstrap-select/bootstrap-select.css" />
	<link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/extend/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
	
	<!-- Uniform -->
	<link rel="stylesheet" media="screen" href="<?php echo base_url();?>assets/theme/scripts/pixelmatrix-uniform/css/uniform.default.css" />

	<!-- JQuery v1.8.2 -->
	<script src="<?php echo base_url();?>assets/theme/scripts/jquery-1.8.2.min.js"></script>
	
	<!-- Modernizr -->
	<script src="<?php echo base_url();?>assets/theme/scripts/modernizr.custom.76094.js"></script>
	
	<!-- MiniColors -->
	<link rel="stylesheet" media="screen" href="<?php echo base_url();?>assets/theme/scripts/jquery-miniColors/jquery.miniColors.css" />
	
	<!-- Theme -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/theme/css/style.minb4dc.css?1359188708" />
	
	<!-- LESS 2 CSS -->
	<script src="<?php echo base_url();?>assets/theme/scripts/less-1.3.3.min.js"></script>
	<!-- Custom css -->
	 <style type="text/css">
	 .widget .widget-head,
.btn-primary,
.navbar.main .topnav > li .dropdown-menu li > a:hover,
.navbar.main .topnav > li .dropdown-menu .active > a,
.navbar.main .topnav > li .dropdown-menu .active > a:hover,
#flotTip,
.btn-group.open .btn-primary.dropdown-toggle,
.btn-primary.disabled,
.btn-primary[disabled],
.btn-primary:hover,
.filter-bar div.lbl,
.widget.widget-2.primary .widget-head,
.widget .widget-body.list.list-2 ul li.active a i:before,
.label-important,
.table-primary thead th,
.pagination ul > .active > a,
.pagination ul > .active > span,
.gallery ul li .thumb {
  background-color: #b94b6f;
}
a,
p a,
.col.main-left ul li.active.glyphicons i:before,
.col.main-left ul li.active a,
.widget .widget-body.list ul li .count,
.breadcrumb a,
.breadcrumb .glyphicons i:before,
.breadcrumb .glyphicons,
.navbar.main .profile h1,
.col.main-left .navarrow span i:before,
.forgot,
.forgot i:before,
.glyphicons.single,
.glyphicons.single i:before,
.widget .widget-body.list.list-2 ul li.active a,
.table-primary tbody td.important,
.finances_cashflow .glyphicons.btn-action.single i:before,
.col.main-left ul li.hasSubmenu2 ul.collapse li.active a i:before {
  color: #b94b6f;
}
.navbar.main .profile em {
  color: #f2dee5;
}
.navbar.main .notif li a i:before {
  color: #a94263;
}
.navbar.main .notif li a {
  background-color: #d694aa;
}
.col.main-left ul li.active,
.widget .widget-head,
.btn-primary,
.navbar.main .notif li a,
#flotTip,
.widget.widget-2.primary .widget-head,
.widget .widget-body.list.list-2 ul li.active a i:before,
.table-primary thead th,
.pagination ul > .active > a,
.pagination ul > .active > span {
  border-color: #b94b6f;
}
.navbar.main,
.navbar.main .profile,
.navbar.main .topnav > li {
  background-color: #2b2b36;
}
.navbar.main .profile,
.navbar.main .topnav > li,
.navbar.main .profile img.avatar,
.navbar.main .innerpx {
  border-color: #14141a;
}
.navbar.main .line,
.loginWrapper .line {
  border-bottom-color: #14141a;
  border-top-color: #58586f;
  border-left-color: #14141a;
  border-right-color: #58586f;
}
.navbar.main .topnav > li > a span,
.navbar.main .topnav > li > .glyphicons i:before,
.navbar.main .profile strong {
  color: #a7a7b9;
  text-shadow: 0 1px 0 #000000;
}
.navbar.main .profile,
.navbar.main .topnav > li {
  box-shadow: 0 0 0 1px #58586f;
  -webkit-box-shadow: 0 0 0 1px #58586f;
  -moz-box-shadow: 0 0 0 1px #58586f;
}
.navbar.main .topnav > li .btn-group .caret {
  border-top-color: #a7a7b9;
  border-bottom-color: #a7a7b9;
}
.navbar.main .notif li a {
  background-color: #d694aa;
}
.col.main-left {
  background-color: #393947;
}
.col.main-left ul li.hasSubmenu2 ul.collapse li {
  background-color: #17171d;
}
.col.main-left ul li {
  border-color: #22222b;
}
.col.main-left ul li > a,
.col.main-left ul li.hasSubmenu2 ul {
  border-color: #666680;
}
.col.main-left ul li a,
.col.main-left ul li.glyphicons i:before,
.col.main-left ul li .glyphicons i:before {
  color: #b9b9c6;
  text-shadow: 0 1px 0 #0c0c0e;
}
.col.main-left ul li.active i:before {
  text-shadow: none;
}
.span12.main,
.col.main-left ul li.active,
.col.main-left ul li.hasSubmenu2 ul.collapse li.active {
  background-color: #ffffff;
}
.table-primary tbody td {
  background-color: #ffffff;
}
.table-primary tbody tr.selected td,
.table-primary tbody tr.selectable:hover td {
  background-color: #f2dee5;
}
.table-primary.table-bordered tbody td,
.table-primary,
.pagination ul > .disabled > a,
.pagination ul > .disabled > span {
  border-color: #ffffff;
}
.widget .widget-body.list.list-2 ul li.active {
  border-color: #d694aa;
}
.widget .widget-body.list.list-2 ul li a {
  color: #d694aa;
}
.widget .widget-body.list.list-2 ul li a i:before {
  background: #ffffff;
  color: #c7708c;
  border-color: #d694aa;
}
	 </style>
	
</head>
<body>
	


	
	<!-- Start Content -->
	<div class="container-fluid left-menu">
		
		<div class="navbar main">
			<div class="innerpx">
				<button type="button" class="btn btn-navbar hidden-desktop hidden-tablet">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
				</button>
				<div class="positionWrapper">
					<span class="line"></span>
										<div class="profile heading">
						<h1>Notificamos</h1>
						<em>Login</em>
					</div>
										
				</div>
			</div>
		</div>
	
		<div class="row-fluid rrow main">
			<div class="span12 main col" role="main">
				<div class="row-fluid rrow">
					<div class="span2 col main-left hide login menu-large">
						<div class="rrow scroll-y-left">
							<div class="iScrollWrapper">
								<ul>
									<li class="glyphicons home"><a href="index9ed2.html?lang=en"><i></i><span>Dashboard</span></a></li>
									<li class="glyphicons coins"><a href="finances9ed2.html?lang=en"><i></i><span>Finances</span></a></li>
									<li class="hasSubmenu2">
										<a data-toggle="collapse" class="glyphicons shopping_cart" href="#menu_ecommerce"><i></i><span>Online Shop</span></a>
										<ul class="collapse" id="menu_ecommerce">
											<li class=""><a href="products9ed2.html?lang=en" class="glyphicons show_thumbnails"><i></i><span>Products</span></a></li>
											<!-- <li class=""><a href="categories.html?lang=en" class="glyphicons show_big_thumbnails"><i></i><span>Categories</span></a></li> -->
											<li class=""><a href="product_edit9ed2.html?lang=en" class="glyphicons cart_in"><i></i><span>Add product</span></a></li>
											<!-- <li class=""><a href="orders.html?lang=en" class="glyphicons list"><i></i><span>Orders</span></a></li> -->
										</ul>
									</li>
									<li class="glyphicons sort"><a href="pages9ed2.html?lang=en"><i></i><span>Site Pages</span></a></li>
									<li class="glyphicons picture"><a href="gallery9ed2.html?lang=en"><i></i><span>Photo Gallery</span></a></li>
									<li class="glyphicons adress_book"><a href="bookings9ed2.html?lang=en"><i></i><span>Bookings</span></a></li>
									<li class="glyphicons charts"><a href="charts9ed2.html?lang=en"><i></i><span>Charts</span></a></li>
									<li class="glyphicons cogwheels"><a href="ui9ed2.html?lang=en"><i></i><span>UI Elements</span></a></li>
									<li class="hasSubmenu2">
										<a data-toggle="collapse" class="glyphicons show_thumbnails_with_lines" href="#menu_forms"><i></i><span>Forms</span></a>
										<ul class="collapse" id="menu_forms">
											<li class=""><a href="form_demo9ed2.html?lang=en" class="glyphicons user"><i></i><span>My Account</span></a></li>
											<li class=""><a href="form_elements9ed2.html?lang=en" class="glyphicons show_big_thumbnails"><i></i><span>Form Elements</span></a></li>
											<li class=""><a href="form_validator9ed2.html?lang=en" class="glyphicons circle_ok"><i></i><span>Form Validator</span></a></li>
											<!-- <li class=""><a href="form_wizzard.html?lang=en" class="glyphicons share_alt"><i></i><span>Form Wizzard</span></a></li> -->
											<li class=""><a href="file_managers9ed2.html?lang=en" class="glyphicons file_import"><i></i><span>File Managers</span></a></li>
										</ul>
									</li>
									<li class="hasSubmenu2">
										<a data-toggle="collapse" class="glyphicons table" href="#menu_tables"><i></i><span>Tables</span></a>
										<ul class="collapse" id="menu_tables">
											<li class=""><a href="tables9ed2.html?lang=en" class="glyphicons show_thumbnails"><i></i><span>Classic Tables</span></a></li>
											<li class=""><a href="tables_themed9ed2.html?lang=en" class="glyphicons show_thumbnails"><i></i><span>Themed Tables</span></a></li>
											<li class=""><a href="tables_enhanced9ed2.html?lang=en" class="glyphicons show_thumbnails"><i></i><span>Enhanced Tables</span></a></li>
										</ul>
									</li>
									<li class="glyphicons calendar"><a href="calendar9ed2.html?lang=en"><i></i><span>Calendar</span></a></li>
								</ul>
							</div>
							<span class="navarrow hide">
								<span class="glyphicons circle_arrow_down"><i></i></span>
							</span>
						</div>
					</div>
					<div class="span10 col main-right login">
						<div class="rrow scroll-y" id="mainYScroller">
							<div class="inner topRight"><div class="positionWrapper loginWrapper hide">
	<span class="line"></span>
	<div class="box-1 loginbox">
	 
                  
               
		<div class="inner">
			 <form class="form-signin" method="post" action="<?php echo base_url(); ?>verifylogin/">
				<fieldset>
					<legend>Restricted Area</legend>
					  <?php
                    if ($this->session->userdata('message')) {
                        echo '<div style="text-align:left"> ' . $this->session->userdata('message') . '</div>';
                        $this->session->unset_userdata('message');
                    }
                    ?>
					
					<hr class="separator bottom" style="margin-bottom: 10px;" />
					<div class="input-prepend input-full">
						<span class="add-on glyphicons user"><i></i></span>
						<input type="text" name="username" class="" placeholder="Username" />
					</div>
					<div class="input-prepend input-full">
						<span class="add-on glyphicons lock"><i></i></span>
						<input type="password" name="password" class="" placeholder="Password" />
					</div>
					
				
					<a href="#" class="glyphicons circle_question_mark forgot">forgot password <i></i></a>
					<hr class="separator bottom" style="margin-bottom: 10px;" />
					<button type="submit" class="btn btn-icon btn-block glyphicons right flash btn-primary">Login<i></i></button>
				</fieldset>
			</form>
		</div>
	</div>
	<div class="btn-register">
		<a href="#" class="btn btn-icon btn-success glyphicons edit"><i></i>Register</a>
	</div>
</div>

<div>
	<div class="positionWrapper registerWrapper hide">
		<span class="line"></span>
		<div class="box-1 registerbox">
			<div class="inner">
				<form action="<?php echo base_url();?>verifylogin/start_merchant" method="post" class="fts">
					<input type="text" name="username" placeholder="Username" />
					<input type="password" name="password" placeholder="Password" />
					<input type="text" name="contact_person" placeholder="Contact Person" />
					<input type="text" name="company_name" placeholder="Company Name" />
					<input type="text" name="website" placeholder="Website" />
					<input type="text" name="email" placeholder="Email" />
					<input type="text" name="contact_number" placeholder="Contact Number" />
					
					<button type="submit" class="btn btn-icon btn-block glyphicons right edit btn-success">Register<i></i></button>
				</form>
			</div>
		</div>
		<div class="btn-login">
			<a href="#" class="btn btn-icon btn-primary glyphicons unlock"><i></i>Login</a>
		</div>
	</div>
</div>							</div>
						</div>
					</div>
				</div>
			</div>

		<!-- End Content -->
		</div>
		
		<!-- Sticky Footer -->
		<div id="footer" class="hide">
	      	<div class="wrap">
	      		<ul>
	      				      			<li class="active"><span data-toggle="menu-position" data-menu-position="left-menu" class="glyphicons circle_arrow_left" title=""><i></i></span></li>
	      			<li><span data-toggle="menu-position" data-menu-position="right-menu" class="glyphicons circle_arrow_right" title=""><i></i></span></li>
	      			<li><span data-toggle="menu-position" data-menu-position="top-menu" class="glyphicons circle_arrow_top" title=""><i></i></span></li>
	      			<li class="divider"></li>
	      			<li class="active"><span data-toggle="menu-size" data-menu-size="0" class="glyphicons show_big_thumbnails text" title=""><i></i><span class="hidden-phone">Large menus</span></span></li>
	      			<li><span data-toggle="menu-size" data-menu-size="1" class="glyphicons show_thumbnails text" title=""><i></i><span class="hidden-phone">Small menus</span></span></li>
	      				      			<li><a href="documentation9ed2.html?lang=en" class="glyphicons circle_question_mark text" title=""><i></i><span class="hidden-phone">Documentation</span></a></li>
	      		</ul>
	      	</div>
	    </div>
		
	</div>

	
	
	<!-- Cubiq iScroll -->
	<!--[if gte IE 9]><!-->
	<script src="<?php echo base_url();?>assets/theme/scripts/cubiq-iscroll/src/iscroll.js"></script>
	<!--<![endif]-->
	
	<!--[if lt IE 9]>
	<script src="theme/scripts/cubiq-iscroll/src/iscroll-ie.js"></script>
	<![endif]-->
	
	<script type="text/javascript">
	var scrollers = [];
	var mainYScroller;
	
	$(function()
	{
		//document.addEventListener('touchmove', function(e){ e.preventDefault(); });
		var xScrollers = $(".scroll-x");
	    for (var i = 0; i < xScrollers.length; i++)
			scrollers.push(new iScroll(xScrollers[i], { 
				vScroll: false, 
				hideScrollbar: true,
				useTransform: $('html').is('.lt-ie9') ? false : true,
				onBeforeScrollStart: function (e) 
				{
					var target;
					if (!e) var e = window.event;
					if (e.target) target = e.target;
					else if (e.srcElement) target = e.srcElement;
					if (target.nodeType == 3) target = target.parentNode;

					if (target.tagName != 'SELECT' && target.tagName != 'INPUT' && target.tagName != 'TEXTAREA')
					{
						if (e.preventDefault) e.preventDefault();
						else e.returnValue = false;
					}
				} 
			}));

		var yScrollers = $('.scroll-y').not('#mainYScroller');
	    $.each(yScrollers, function(i,v)
		{
	    	var scroller = new iScroll($(v).attr('id'),
	    	{
		    	hScroll: false, 
		    	hideScrollbar: true,
		    	useTransform: $('html').is('.lt-ie9') ? false : true,
		    	onBeforeScrollStart: function (e) 
		    	{
		    		var target;
					if (!e) var e = window.event;
					if (e.target) target = e.target;
					else if (e.srcElement) target = e.srcElement;
					if (target.nodeType == 3) target = target.parentNode;
					
					if (target.tagName != 'SELECT' && 
						target.tagName != 'INPUT' && 
						target.tagName != 'TEXTAREA' &&
						$(target).parents('table-responsive').size() == 0)
					{
						if (e.preventDefault) e.preventDefault();
						else e.returnValue = false;
					}
				}
		    });
	    	scrollers.push(scroller);
		});

	    mainYScroller = new iScroll('mainYScroller',
    	{
	    	zoom: true,
	    	hScroll: false, 
	    	hideScrollbar: true,
	    	useTransform: $('html').is('.lt-ie9') ? false : true,
	    	onBeforeScrollStart: function (e) 
	    	{
	    		var target;
				if (!e) var e = window.event;
				if (e.target) target = e.target;
				else if (e.srcElement) target = e.srcElement;
				if (target.nodeType == 3) target = target.parentNode;

				if ($('input:focus, textarea:focus').length) $('input:focus, textarea:focus').blur();

				if ($(target).parents('.table-responsive').size() > 0 ||
					$(target).parents('.google-visualization-table-table').size() > 0 ||
					$(target).parents('#calendar').size() > 0 ||
					$(target).is('.btn'))
					{
						return true;
					}
					
				if (target.tagName != 'SELECT' && 
					target.tagName != 'INPUT' && 
					target.tagName != 'TEXTAREA')
				{
					if (e.preventDefault) e.preventDefault();
					else e.returnValue = false;
				}
			},
			onScrollEnd: function()
			{
				//if (mainYScroller.enabled == false) mainYScroller.enable();
			}
	    });
	    scrollers['mainYScroller'] = mainYScroller;
	});
	</script>
	
	<!-- JQueryUI v1.9.2 -->
	<script src="<?php echo base_url();?>assets/theme/scripts/jquery-ui-1.9.2.custom/js/jquery-ui-1.9.2.custom.min.js"></script>
	
	<!-- JQueryUI Touch Punch -->
	<!-- small hack that enables the use of touch events on sites using the jQuery UI user interface library -->
	<script src="<?php echo base_url();?>assets/theme/scripts/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- MiniColors -->
	<script src="<?php echo base_url();?>assets/theme/scripts/jquery-miniColors/jquery.miniColors.js"></script>
	
	<!-- Themer -->
	<script>
	var themerPrimaryColor = '#DA4C4C',
		themerHeaderColor = '#393D41',
		themerMenuColor = '#232628';
	</script>
	<script src="<?php echo base_url();?>assets/theme/scripts/jquery.cookie.js"></script>
	<script src="<?php echo base_url();?>assets/theme/scripts/themer.js"></script>
	
	
	
	<!-- Resize Script -->
	<script src="<?php echo base_url();?>assets/theme/scripts/jquery.ba-resize.js"></script>
	
	<!-- Uniform -->
	<script src="<?php echo base_url();?>assets/theme/scripts/pixelmatrix-uniform/jquery.uniform.min.js"></script>
	
	<!-- Bootstrap Script -->
	<script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Bootstrap Extended -->
	<script src="<?php echo base_url();?>assets/bootstrap/extend/bootstrap-select/bootstrap-select.js"></script>
	<script src="<?php echo base_url();?>assets/bootstrap/extend/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
	<script src="<?php echo base_url();?>assets/bootstrap/extend/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js"></script>
	<script src="<?php echo base_url();?>assets/bootstrap/extend/jasny-bootstrap/js/jasny-bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/bootstrap/extend/jasny-bootstrap/js/bootstrap-fileupload.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/bootstrap/extend/bootbox.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/bootstrap/extend/bootstrap-wysihtml5/js/wysihtml5-0.3.0_rc2.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/bootstrap/extend/bootstrap-wysihtml5/js/bootstrap-wysihtml5-0.0.2.js" type="text/javascript"></script>
	
	<!-- Custom Onload Script -->
	<script src="<?php echo base_url();?>assets/theme/scripts/load.js"></script>
	
</body>

<!-- Mirrored from demo.mosaicpro.biz/bootadmin/html/login.html?page=login&lang=it by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jan 2015 09:17:35 GMT -->
</html>