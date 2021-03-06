<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Laundry |Kontak</title>
<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Deterge Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="<?php echo base_url();?>assets_member/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>assets_member/css/font-awesome.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets_member/css/style.css" rel="stylesheet" type="text/css" media="all" />

<link href="//fonts.googleapis.com/css?family=Hind+Vadodara:300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Cabin+Sketch:400,700" rel="stylesheet">

</head>
<body>
<!-- header -->
	<div class="inner-banner-w3layouts">
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
							<li class="first-list"><a class="active" href="<?php echo site_url('berandaMember/');?>">Profile</a></li>
							<li><a href="<?php echo site_url('transaksiMember/').$this->session->userdata("id_user");?>">Transaksi Saya</a></li>
							<li><a href="<?php echo site_url('pesanOnline/');?>">Pesan Online</a></li>
						<!-- 	<li><a href="<?php echo site_url('kontak/');?>">Kontak</a></li> -->
							<li><a href="<?php echo site_url('feedback/');?>">Pendapat Anda</a></li>
							<li><a href="#myModal2" data-toggle="modal">Logout</a></li>
						</ul>	
					<div class="clearfix"> </div>
				</div>	
				</nav>		
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<?php endforeach;?>
	<!--//header-w3l-->
		</div>
	</div>
</div>
  <!--/banner-section-->
<!-- contact -->
	<div class="contact">
		<div class="container">
		<h4 class="tittles-w3agileits">Kontak<span>Kami</span></h4>
			<div class="col-md-4 wthree_contact_left">
				<h6>Tentang Kami</h6>
				<p class="para-w3-agile">Laundry <span>Adalah usaha dibidang jasa laundry</span>
				 yang mengutamakan kualitas pelayanan kepada
					<span>pelanggan</span> yang sudah percaya kepada kami</p>
				<div class="info-img-agileits">
					<div class="info1"></div>
					<div class="info2"></div>
					<div class="info3"></div>
					<div class="clearfix"> </div>
				</div>
				<h6>Jam Operasional</h6>
				<ul>
					<li><span>Senin-Jum'at</span> 9:00 pagi - 10:00 malam </li>
					<li><span>Sabtu & Minggu</span> 9:00 pagi - 12:00 malam</li>
				</ul>
			</div>
			<div class="col-md-8 wthree_contact_left">
				<h6>Keritik dan Saran Anda</h6>
				<form action="<?php echo base_url('addFeedback');?>" method="post">
					<div class="col-md-6 wthree_contact_left_grid">
						<input type="hidden" name="id_member" value="<?php echo $this->session->userdata("id_user")?>" required="">
						<input type="text" name="nama_user" value="<?php echo $this->session->userdata("nama_user")?>" required="">
						<input type="email" name="email" value="<?php echo $this->session->userdata("email")?>" required="">
					</div>
					<div class="col-md-6 wthree_contact_left_grid">
						<input type="text" name="no_telepon" value="<?php echo $this->session->userdata("no_telepon")?>"required="">
						<input type="text" name="subject" placeholder="Subject" required="">
					</div>
					<div class="clearfix"> </div>
					<textarea name="message" placeholder="Message..." required=""></textarea>
					<input type="submit" value="Submit">
					<input type="reset" value="Clear">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //contact -->
<!--footer -->
	<?php $this->load->view('menu/footer'); ?>
	<!-- //modal --> 
	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="<?php echo base_url();?>assets_member/js/jquery-2.1.4.min.js"></script>
 <!-- start-smoth-scrolling -->
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
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
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
<!-- //here ends scrolling icon -->
<!--js for bootstrap working-->
	<script src="<?php echo base_url();?>assets_member/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>