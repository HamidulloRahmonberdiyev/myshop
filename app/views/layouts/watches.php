<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<head>
<base href="/">
<?=$this->getMeta();?>
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/easy-responsive-tabs.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="css/global.css" >

</head>
<body>
  <div class="wrap">
	<div class="header">
		<div class="headertop_desc">
			<div class="call">
				 <p><span>Murojatlar uchun:</span> Tel: <span class="number">+998 91 250-07-60</span></span></p>
				 <ul class="currency-ul">Valyuta:
						<select class="currency" id="currency">
						<?php new \app\widgets\currency\Currency(); ?>
						</select>
					</ul>
				</div>
				
			<div class="account_desc">
				<ul>
					<li><a href="user/signup">Ro'yhatdan o'tish</a></li>
					<li><a href="user/login">Login</a></li>
					<li><a href="#">Akkauntim</a></li>
					<li>
						<a href="cart/show" onclick="getCart(); return false">Hisobim
						<div class="total">
							
						</div>
						</a>
					</li>
				</ul>
			</div>
			<div class="clear"></div>
		</div>
		<div class="header_top">
			<div class="logo">
				<a href="<?=PATH;?>"><img src="images/logo.webp" alt="" /></a>
			</div>
			  <div class="cart">
			  	   <p>Online do'konimizga xush kelibsiz! <span>Hisobni:</span><div id="dd" class="wrapper-dropdown-2">tekshirish - 
			  	   	<ul class="dropdown">
						 <?php if(!empty($_SESSION['user'])): ?>
                                <li><a href="#">Hush kelibsiz , <?=h($_SESSION['user']['name']);?></a></li>
                                <li><a href="user/logout">Ortga</a></li>
                            <?php else: ?>
                                <li><a href="user/login">Login</a></li>
                                <li><a href="user/signup">Ro'yhatdan o'tish</a></li>
                            <?php endif; ?>
					</ul></div></p>
			  </div>
			  
	 <div class="clear"></div>
  </div>
	<div class="header_bottom">
	     	<div class="menu">
				
	     		<ul>
			    	<li class="active"><a href="<?=PATH;?>">Bosh menyu</a></li>
			    	<li><a href="delivery/index">Yetkazib berish</a></li>
			    	<li><a href="news/index">Yangiliklar</a></li>
			    	<li><a href="contact/index">Aloqa</a></li>
			    	<div class="clear"></div>
     			</ul>
	     	</div>
	     	<div class="search_box">
	     		<form action="search" method="get" autocomplete="off">
	     			<input type="text" class="typeahead" id="typeahead" name="s">
					<input type="submit" value="">
	     		</form>
	     	</div>
	     	<div class="clear"></div>
	     </div>	 
		 
		 <div class="content">
			<div class="container">
				<div class="row">
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
			</div>
		 	<?=$content;?>
		 </div>

	<!-- Footer -->
   <div class="footer">
   	  <div class="wrap">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>Bosh menyu</h4>
						<ul>
						<li><a href="#">Biz haqimizda</a></li>
						<li><a href="news/index">Yangiliklar</a></li>
						<li><a href="delivery/index">Yetkazib berish</a></li>
						<li><a href="contact/index">Bog'lanish</a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Ijtimoiy tarmoqlar</h4>
						<ul>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Telegram</a></li>
						<li><a href="#">Instagram</a></li>
						<li><a href="#">Youtobe</a></li>
						<li><a href="#">Twitter</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Mening hisobim</h4>
						<ul>
							<li><a href="user/signup">Ro'yhatdan o'tish</a></li>
							<li><a href="user/login">Login</a></li>
							<li><a href="cart/show" onclick="getCart(); return false">Hisobim</a></li>
							<li><a href="#">Akkauntim</a></li>
							<li><a href="contact/index">Yordam</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>Aloqa</h4>
						<ul>
							<li><span><i class="fa fa-phone"></i> +998 91 250-07-60</span></li>
							<li><span><i class="fa fa-phone"></i> +998 91 250-07-60</span></li>
						</ul>
						<div class="social-icons">
							<h4>Ijtimoiy tarmoqlar</h4>
					   		  <ul>
							      <li><a href="#" target="_blank"><i class="fa fa-telegram"></i></a></li>
							      <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
							      <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
							      <li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
							      <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
							      <div class="clear"></div>
						     </ul>
   	 					</div>
				</div>
			</div>			
        </div>
        <div class="copy_right">
				<p><a href="https://t.me/hamidullo_rahmonberdiyev" style="color:#0d86be;">Founder of the site is Hamidullo Rahmonberdiyev</a></p>
		   </div>
    </div>
   		
    <a href="#" id="toTop"><span id="toTopHover"> </span></a>

	<!-- Modal -->
<div class="modal fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Savat</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Yana xarid</button>
                <a href="cart/view" type="button" class="btn btn-info">Davom etish</a>
                <button type="button" class="btn btn-danger" onclick="clearCart()">Tashlash</button>
            </div>
        </div>
    </div>
</div>

<?php $curr = \myshop\App::$app->getProperty('currency'); ?>
<script>
	var path = '<?=PATH;?>';
		course = '<?=$curr['value'];?>';
		symboleLeft = '<?=$curr['symbol_left'];?>';
		symboleRight = '<?=$curr['symbol_right'];?>';
</script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/validator.js"></script> 
<script type="text/javascript" src="js/typeahead.bundle.js"></script> 
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });	
</script>
<script type="text/javascript" src="js/easyResponsiveTabs.js"></script>
<script type="text/javascript" src="js/slides.min.jquery.js"></script> 

<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/startstop-slider.js"></script>
<script type="text/javascript" src="js/main.js"></script>


<script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 350,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
			});
		});
	</script>
<script type="text/javascript">
		$(document).ready(function() {			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <script type="text/javascript">
			function DropDown(el) {
				this.dd = el;
				this.initEvents();
			}
			DropDown.prototype = {
				initEvents : function() {
					var obj = this;

					obj.dd.on('click', function(event){
						$(this).toggleClass('active');
						event.stopPropagation();
					});	
				}
			}

			$(function() {

				var dd = new DropDown( $('#dd') );

				$(document).click(function() {
					// all dropdowns
					$('.wrapper-dropdown-2').removeClass('active');
				});

			});

		</script>


</body>
</html>

