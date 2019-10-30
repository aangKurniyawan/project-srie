<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Deterge -  Laundry a Flat Bootstrap Responsive Website Template | Services :: w3layouts</title>
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
<?php $this->load->view('menu/header_menu');?>
  <!--/banner-section-->
<!-- contact -->
	<div class="contact">
		<div class="container">
		<h4 class="tittles-w3agileits">Daftar <span>Member</span></h4>
			<div class="col-md-4 wthree_contact_left">
				<h6>Ke Untungan Menjadi Member</h6>
				<p class="para-w3-agile">Dapatkan <span>Pelayanan Spesial</span> dari kami 
					<span>Untuk Kamu</span> Yang Terdaftar Sebagai Member</p>
				<div class="info-img-agileits">
					<div class="info1"></div>
					<div class="info2"></div>
					<div class="info3"></div>
					<div class="clearfix"> </div>
				</div>
				<h6>Jam Operasional</h6>
				<ul>
					<li><span>Senin-Jum'at</span> 9:00 Pagi - 10:00 Malam </li>
					<li><span>Sabtu & Minggu</span> 9:00 Pagi - 12:00 Malam</li>
				</ul>
			</div>
			<div class="col-md-8 wthree_contact_left">
				<h6>Isi Data Anda Disini</h6>
				<form action="#" method="post">
						<div class="col-md-6 wthree_contact_left_grid">
							<input type="text" name="Name" placeholder="Nama Lengkap" required="">
							<input type="email" name="Email" placeholder="No Telepon" required="">
							<!-- <input type="email" name="Email" placeholder="Email" required=""> -->
							<select class="form-control" >
								<option>-Pilih Jenis Kelamin-</option>
								<option>Laki-laki</option>
								<option>Perempuan</option>
							</select>
						</div>
						<div class="col-md-6 wthree_contact_left_grid agileits-login">
							<input type="text" name="Telephone" placeholder="Email" required="">
							<input type="password" class="password " name="Password" placeholder="Password" required=""/>
						</div>
						<div class="clearfix"> </div>
						<textarea name="Message" placeholder="Alamat..." required=""></textarea>
						<input type="submit" value="Daftar">
						<input type="reset" value="Batal">
					</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	
<!-- //contact -->
<!--footer -->
	<?php $this->load->view('menu/footer'); ?>
<!--//footer-->	
<!-- modal -->
	<div class="modal about-modal w3-agileits fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body login-page "><!-- login-page -->     
									<div class="login-top sign-top">
										<div class="agileits-login">
										<h5>Login</h5>
										<form action="#" method="post">
											<input type="email" class="email" name="Email" placeholder="Email" required=""/>
											<input type="password" class="password" name="Password" placeholder="Password" required=""/>
											<div class="wthree-text"> 
												<ul> 
													<li>
														<label class="anim">
															<input type="checkbox" class="checkbox">
															<span> Remember me ?</span> 
														</label> 
													</li>
													<li> <a href="#">Forgot password?</a> </li>
												</ul>
												<div class="clearfix"> </div>
											</div>  
											<div class="w3ls-submit"> 
												<input type="submit" value="LOGIN">  	
											</div>	
										</form>

										</div>  
									</div>
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
									<div class="login-top sign-top">
										<div class="agileits-login">
										<h5>Register</h5>
										<form action="#" method="post">
											<input type="text" name="Username" placeholder="Username" required=""/>
											<input type="email"  name="Email" placeholder="Email" required=""/>
											<input type="password" name="Password" placeholder="Password" required=""/>
											<div class="wthree-text"> 
												<ul> 
													<li>
														<label class="anim">
															<input type="checkbox" class="checkbox">
															<span> I accept the terms of use</span> 
														</label> 
													</li>
												</ul>
												<div class="clearfix"> </div>
											</div>  
											<div class="w3ls-submit"> 
												<input type="submit" value="Register">  	
											</div>	
										</form>

										</div>  
									</div>
						</div>  
				</div> <!-- //login-page -->
			</div>
		</div>
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