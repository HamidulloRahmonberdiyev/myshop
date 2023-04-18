<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<base href="/AdminLTE/">
<?=$this->getMeta();?>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 <!-- Bootstrap Core CSS -->
 <!-- <link href="css/AdminLTE.min.css" rel='stylesheet' type='text/css' /> -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="select2/dist/css/select2.min.css">
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<link href="my.css" rel="stylesheet" type="text/css" media="all">
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>

</head> 
 <body class="sticky-header left-side-collapsed">
    <section>
    <!-- left side start-->
		<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->
			<div class="logo">
				<h1><a href="<?=ADMIN;?>">Admin<span></span></a></h1>
			</div>
			<div class="logo-icon text-center">
				<a href="<?=ADMIN;?>"><i class="lnr lnr-home"></i> </a>
			</div>

			<!--logo and iconic logo end-->
			<div class="left-side-inner">

				<!--sidebar nav start-->
					<ul class="nav nav-pills nav-stacked custom-nav">
						<li class="active"><a href="<?=ADMIN;?>"><i class="lnr lnr-power-switch"></i><span>Boshqaruv Paneli</span></a></li>
                        <li><a href="<?=ADMIN;?>"><i class="lnr lnr-cog"></i><span>Parametrlar</span></a></li>
						<li><a href="<?=ADMIN;?>/order/"><i class="lnr lnr-cart"></i> <span>Buyurtma</span></a></li>
                        <li class="menu-list">
							<a href="<?=ADMIN;?>"><i class="lnr lnr-menu"></i>
								<span>Kategoriyalar</span></a>
								<ul class="sub-menu-list">
									<li><a href="<?=ADMIN;?>/category">Kategoriylar</a> </li>
									<li><a href="<?=ADMIN;?>/category/add">Kategorya qo'shish</a></li>
								</ul>
						</li>
                        <li class="menu-list">
							<a href="<?=ADMIN;?>"><i class="lnr lnr-pie-chart"></i>
								<span>Mahsulotlar</span></a>
								<ul class="sub-menu-list">
									<li><a href="<?=ADMIN;?>/product">Mahsulotlar</a> </li>
									<li><a href="<?=ADMIN;?>/product/add">Yangi mahsulot</a></li>
								</ul>
						</li>

						<li class="menu-list">
							<a href="<?=ADMIN;?>"><i class="lnr lnr-envelope"></i>
								<span>Yetkazib berish</span></a>
								<ul class="sub-menu-list">
									<li><a href="<?=ADMIN;?>/delivery">Habarlar</a> </li>
									<li><a href="<?=ADMIN;?>/delivery/add">Yangi habar</a></li>
								</ul>
						</li>

						<li class="menu-list">
							<a href="<?=ADMIN;?>"><i class="lnr lnr-book"></i>
								<span>Yangiliklar</span></a>
								<ul class="sub-menu-list">
									<li><a href="<?=ADMIN;?>/news">Yangiliklar</a> </li>
									<li><a href="<?=ADMIN;?>/news/add">Yangi habar</a></li>
								</ul>
						</li>

						<li class="menu-list">
							<a href="<?=ADMIN;?>"> <i>$</i></i>
								<span>Valyuta</span></a>
								<ul class="sub-menu-list">
									<li><a href="<?=ADMIN;?>/currency">Valyutalar</a> </li>
									<li><a href="<?=ADMIN;?>/currency/add">Yangi valyuta</a></li>
								</ul>
						</li>
						
						<li><a href="<?=ADMIN;?>/cache"><i class="lnr lnr-trash"></i> <span>Kesh Tozlash</span></a></li>
						<li class="menu-list">
							<a href="<?=ADMIN;?>"><i class="lnr lnr-users"></i>
								<span>Foydalanuvchilar</span></a>
								<ul class="sub-menu-list">
									<li><a href="<?=ADMIN;?>/user"> Foydalanuvchilar</a> </li>
									<li><a href="<?=ADMIN;?>/user/add"> Yangi foydalanuvchi</a></li>
								</ul>
						</li>

						
				<!--sidebar nav end-->
			</div>
		</div>
		<!-- left side end-->
    
		<!-- main content start-->
		<div class="main-content">
			<!-- header-starts -->
			<div class="header-section">
			 
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->
			<!--notification menu start -->
			<div class="menu-right">
				<div class="user-panel-top">  	
					<div class="profile_details_left">
						<ul class="nofitications-dropdown">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new messages</h3>
												</div>
											</li>
											<li><a href="#">
											   <div class="user_img"><img src="images/1.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor sit amet</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li class="odd"><a href="#">
												<div class="user_img"><img src="images/1.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor sit amet </p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											<li><a href="#">
											   <div class="user_img"><img src="images/1.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor sit amet </p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all messages</a>
												</div> 
											</li>
										</ul>
							</li>
							<li class="login_box" id="loginContainer">
									<div class="search-box">
										<div id="sb-search" class="sb-search">
											<form>
												<input class="sb-search-input" placeholder="Qidiruv..." type="search" id="search">
												<input class="sb-search-submit" type="submit" value="">
												<span class="sb-icon-search"> </span>
											</form>
										</div>
									</div>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
									<ul class="dropdown-menu">
										<li>
											<div class="notification_header">
												<h3>You have 3 new notification</h3>
											</div>
										</li>
										<li><a href="#">
											<div class="user_img"><img src="images/1.png" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet</p>
											<p><span>1 hour ago</span></p>
											</div>
										  <div class="clearfix"></div>	
										 </a></li>
										 <li class="odd"><a href="#">
											<div class="user_img"><img src="images/1.png" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li><a href="#">
											<div class="user_img"><img src="images/1.png" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li>
											<div class="notification_bottom">
												<a href="#">See all notification</a>
											</div> 
										</li>
									</ul>
							</li>	
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">22</span></a>
									<ul class="dropdown-menu">
										<li>
											<div class="notification_header">
												<h3>You have 8 pending task</h3>
											</div>
										</li>
										<li><a href="#">
												<div class="task-info">
												<span class="task-desc">Database update</span><span class="percentage">40%</span>
												<div class="clearfix"></div>	
											   </div>
												<div class="progress progress-striped active">
												 <div class="bar yellow" style="width:40%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
											   <div class="clearfix"></div>	
											</div>
										   
											<div class="progress progress-striped active">
												 <div class="bar green" style="width:90%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
												<div class="clearfix"></div>	
											</div>
										   <div class="progress progress-striped active">
												 <div class="bar red" style="width: 33%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
											   <div class="clearfix"></div>	
											</div>
											<div class="progress progress-striped active">
												 <div class="bar  blue" style="width: 80%;"></div>
											</div>
										</a></li>
										<li>
											<div class="notification_bottom">
												<a href="#">See all pending task</a>
											</div> 
										</li>
									</ul>
							</li>		   							   		
							<div class="clearfix"></div>	
						</ul>
					</div>
					<div class="profile_details">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="<?=ADMIN;?>" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span style="background:url(images/admin.png) no-repeat center"> </span> 
										 <div class="user-name">
											<p><?=$_SESSION['user']['name'];?><span>Administrator</span></p>
										 </div>
										 <i class="lnr lnr-chevron-down"></i>
										 <i class="lnr lnr-chevron-up"></i>
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="<?=ADMIN;?>"><i class="fa fa-cog text-success"></i> Login</a> </li> 
									<li> <a href="<?=ADMIN;?>/user/edit?id=<?=$_SESSION['user']['id'];?>"><i class="fa fa-user text-success"></i> Profil</a> </li> 
									<li> <a href="/user/logout"><i class="fa fa-sign-out text-success"></i> Chiqish</a> </li>
								</ul>
							</li>
							<div class="clearfix"> </div>
						</ul>
					</div>		
					<div class="social_icons">
					    <div class="clearfix"> </div>
					</div>            	
					<div class="clearfix"></div>
				</div>
			  </div>
			</div>
		<!-- //header-ends -->
		<div class="content-wrapper">
			<div class="col-md-12">
				<?php if(isset($_SESSION['error'])): ?>
					<div class="alert alert-danger">
						<?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
					</div>
				<?php endif; ?>
				<?php if(isset($_SESSION['success'])): ?>
					<div class="alert alert-success">
						<?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
		<?=$content;?>
		</div>
        <!--footer section start-->
			<footer>
			<p><a href="https://t.me/hamidullo_rahmonberdiyev" style="color:#0d86be;">Founder of the site is Hamidullo Rahmonberdiyev</a></p>
			</footer>
        <!--footer section end-->
   </section>
<script src="js/classie.js"></script>
<script src="js/uisearch.js"></script>
<script>
    var path = '<?=PATH;?>',
        adminpath = '<?=ADMIN;?>';
</script>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!-- <script>
	new UISearch( document.getElementById( 'sb-search' ) );
</script> -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/Chart.js"></script>
<script src="js/wow.min.js"></script>
<script src="/js/ajaxupload.js"></script>
<script src="/js/validator.js"></script>
<script>
		 new WOW().init();
</script>
<script src="js/bootstrap.min.js"></script>
<script src="select2/dist/js/select2.full.js"></script>
<script src="js/scripts.js"></script>
<script src="ckeditor/ckeditor.js"></script>
<script src="my.js"></script>

</body>
</html>