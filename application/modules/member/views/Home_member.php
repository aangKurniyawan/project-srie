
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Laundry |Home</title>
<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Deterge Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="<?php echo base_url();?>assets_member/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>assets_member/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets_member/css/zoomslider.css" />
<link href="<?php echo base_url();?>assets_member/css/owl.carousel.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets_member/css/style.css" rel="stylesheet" type="text/css" media="all" />

<link href="//fonts.googleapis.com/css?family=Hind+Vadodara:300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Cabin+Sketch:400,700" rel="stylesheet">
</head>
<body>
<!-- header -->
	<div id="demo-1" data-zs-src='["<?php echo base_url();?>assets_member/images/4.jpg", "<?php echo base_url();?>assets_member/images/2.jpg", "<?php echo base_url();?>assets_member/images/1.jpg","<?php echo base_url();?>assets_member/images/3.jpg"]' data-zs-overlay="dots">
		<div class="demo-inner-content">
		<!--/header-w3l-->
		<div class="header-w3-agileits" id="home">
	<div class="w3-header-bottom">
		<?php foreach($profile as $data): ?>
		<div class="container"> 
				<h1><a href="index.html"><span class="letter"><?php echo $data['nama_outlet']?></span><span class="square"></span></a></h1>	
			<div class="header-w3-top">
				<div class="agileinfo-phone">
				<div class="phone-wthree-left">
					
					<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
					<p>Silahkan Hubungi Kami!</span></p>
				</div>
				 <h2><?php echo $data['no_telepon']?></h2>
				</div>
			</div>
			<div class="top-nav">
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
							<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="first-list"><a class="active" href="<?php echo site_url('home/');?>">Beranda</a></li>
							<li><a href="<?php echo site_url('service/');?>">Layanan</a></li>
							<li><a href="<?php echo site_url('daftarMember/');?>">Daftar</a></li>
							<li><a href="#myModal2" data-toggle="modal">Login</a></li>
						<!-- 	<li><a href="<?php echo site_url('kontak/');?>">Kontak</a></li> -->
							<li><a href="<?php echo site_url('kontak/');?>">Transaksi</a></li>
						</ul>	
					<div class="clearfix"> </div>
				</div>	
				</nav>		
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//header-w3l-->
	<!--/banner-info-->
		<div class="agile-baner-info-w3ls">  		   
			<h3>Percayakan Pakaian Kotor Anda Kepada Kami <span></span></h3>
			<div class="clearfix"> </div>
			<div class="bnr-agileits-w3layouts-btn">
				<!-- <a href="#" class="button-w3layouts hvr-rectangle-out" data-toggle="modal" data-target="#myModal">Read more</a> -->
			</div>
		</div>
	<!--/banner-info-->
		</div>
		   </div>
    </div>

<!-- services -->
<div class="services-w3-agileits w3agileits-ref">
	<div class="col-md-6  services-info">
		<h6>Lihat Status Transaksi Anda <span>Disini </span></h6>
		<p class="para-w3-agile">Masukan Kode Transaksi</p>
		<form action="<?php echo base_url('lihat');?>" method="post">		 
			<input type="text" name="id_transaksi"class="text" required />
			<input type="submit" value="Cari" />					 
		</form>
		<div class="clearfix"></div>
	</div>
	<div class="col-md-6 services-left">
		<h3 class="sub-tittle-agileits">Semua <span>L</span>ayanan <span>K</span>ami</h3>
		<div class="col-md-4 service-grids-w3ls">
			<i class="fa fa-shirtsinbulk i1" aria-hidden="true"></i>
			<div class="serv-rt-w3-agile">
				<h5>Dry Cleaning</h5><!-- 
				<p>Nikmati layanan Dry Cleaning Untuk Transaksi Anda </p> -->
			</div>
			<div class="clearfix"></div>
		</div>
			<div class="col-md-4 service-grids-w3ls">
				<i class="fa fa-shopping-basket i2" aria-hidden="true"></i>
				<div class="serv-rt-w3-agile">
					<h5>Pressing</h5><!-- 
					<p>Lorem ipsum dolor sit amet </p> -->
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4 service-grids-w3ls">
				<i class="fa fa-magic i3" aria-hidden="true"></i>
				<div class="serv-rt-w3-agile">
					<h5>Laundry</h5><!-- 
					<p>Lorem ipsum dolor sit amet </p> -->
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-4 service-grids-w3ls">
				<i class="fa fa-paper-plane-o i4" aria-hidden="true"></i>
				<div class="serv-rt-w3-agile">
					<h5>Pickup & Delivery</h5><!-- 
					<p>Lorem ipsum dolor sit amet </p> -->
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
	</div>
	<div class="clearfix"></div>
</div>
<!--//services-->
<!-- agile_testimonials -->
<div class="test">
	<div class="container">
	<div class="col-md-3 test-left-agileinfo">
	<h3 class="sub-tittle-agileits"><span>T</span>estimonials</h3>
	</div>
		<div class="col-md-9 test-gr">
			<div class=" test-gri1">
				<div id="owl-demo2" class="owl-carousel">
					<div class="agile">
						<div class="test-grid">
							<div class="col-md-8 test-grid1">
								<p class="para-w3-agile"><i class="fa fa-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.
								Lorem ipsum dolor .</p>
								<div class="test-info-w3ls">
									<h4>Stella Franklin</h4>
									<span>Lorem Ipsum</span>
								</div>
							</div>	
							<div class="col-md-4 test-grid2">
								<img src="<?php echo base_url();?>assets_member/images/t1.jpg" alt="" class="img-r">
							</div>
						</div>	
						<div class="clearfix"></div>
					</div>
					<div class="agile">
						<div class="test-grid">
							<div class="col-md-8 test-grid1">
								<p class="para-w3-agile"><i class="fa fa-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.
								Lorem ipsum dolor.</p>
							<div class="test-info-w3ls">
								<h4>Tim Mathis</h4>
								<span>Lorem Ipsum</span>
							</div>
						</div>	
						<div class="col-md-4 test-grid2">
							<img src="<?php echo base_url();?>assets_member/images/t2.jpg" alt="" class="img-r">
						</div>
					</div>	
				<div class="clearfix"></div>
			</div>
			<div class="agile">
				<div class="test-grid">
					<div class="col-md-8 test-grid1">
						<p class="para-w3-agile"><i class="fa fa-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.
						Lorem ipsum dolor .</p>
					<div class="test-info-w3ls">
						<h4>Patrick Jean</h4>
						<span>Lorem Ipsum</span>
					</div>
				</div>	
				<div class="col-md-4 test-grid2">
					<img src="<?php echo base_url();?>assets_member/images/t3.jpg" alt="" class="img-r">
				</div>
			</div>	
			<div class="clearfix"></div>
		</div>
		<div class="agile">
			<div class="test-grid">
				<div class="col-md-8 test-grid1">
					<p class="para-w3-agile"><i class="fa fa-quote-left"></i>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.
					Lorem ipsum dolor .</p>
					<div class="test-info-w3ls">
						<h4>Helen Tompson</h4>
						<span>Lorem Ipsum</span>
					</div>
				</div>	
				<div class="col-md-4 test-grid2">
					<img src="<?php echo base_url();?>assets_member/images/t4.jpg" alt="" class="img-r">
				</div>
			</div>	
		<div class="clearfix"></div>
	</div>	
</div>
</div>	
</div>
</div>
</div>
<!-- agile_testimonials -->
<!--footer -->
	<?php $this->load->view('menu/footer'); ?>
<!--//footer-->	
<?php endforeach;?>
<!-- modal -->
	<div class="modal about-modal w3-agileits fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body login-page "><!-- login-page -->     
					<?php $this->load->view("login/form_login");?>
				</div>  
			</div> <!-- //login-page -->
		</div>
	</div>
	<!-- //modal --> 
	<!-- modal -->
	<div class="modal about-modal w3-agileits fade" id="myModal3" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body login-page "><!-- login-page -->     
					<?php $this->load->view("login/form_login");?>
				</div>
			</div>  
		</div> <!-- //login-page -->
	</div>
</div>
	<!-- //modal --> 
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="<?php echo base_url();?>assets_member/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets_member/js/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets_member/js/jquery.zoomslider.min.js"></script>
<!-- requried-jsfiles-for owl -->
 <script src="<?php echo base_url();?>assets_member/js/owl.carousel.js"></script>
 <script>
	$(document).ready(function() {
		$("#owl-demo2").owlCarousel({
		items : 1,
		lazyLoad : false,
		autoPlay : true,
		navigation : false,
		navigationText : false,
		pagination : true,
		});
	});
 </script>

<script type="text/javascript" src="<?php echo base_url();?>assets_member/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets_member/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<script src="<?php echo base_url();?>assets_member/js/bootstrap.js"></script>
</body>
</html>