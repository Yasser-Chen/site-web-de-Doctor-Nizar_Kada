
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Nizar Kada</title>
<link rel="shortcut icon" href="images\iconMain.png" type="image/x-icon" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Infirmary Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/numscroller-1.0.js"></script>

<!-- //js -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

<!-- fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>

	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->

	<script src="js/responsiveslides.min.js"></script>
</head>
<body>
<!-- header -->
<div class="header wow zoomIn">
	<div class="container">
		<div class="header_left" data-wow-duration="2s" data-wow-delay="0.5s">
			<ul>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+2125227-01020</li>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>05227-01020</li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header -->
<div class="header-bottom">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo grid">
						<div class="grid__item color-3">
							<h1>Nizar Kada</h1>
						</div>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--horatio">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item"><a href="index.php" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="gallery.php" class="menu__link">Gallerie</a></li> 
							<li class="menu__item menu__item--current"><a href="contact.php" class="menu__link">Contact</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>

<!-- banner -->
<div class="banner page_head">

</div>
<!-- //banner -->
<div class="map_contact">
	<div class="container">
		
		<h3 class="tittle">Contact</h3>
		<div class="contact-grids">
			
			<div class="col-md-6 contact-grid ">
				<form action="#" method="post">
					<input type="text" name="Name" placeholder="Nom" required="">
					<input type="email" name="Email" placeholder="Email"  required="">
					<textarea name="Message" placeholder="Message..."  required=""></textarea>
					<input type="submit" name="contact" value="Send" >
					<?php 
					if(isset($_POST['contact'])){
						$file = fopen("files/2.txt","a");
						$txt = $_POST['Name']."\n".$_POST['Email']."\n".$_POST['Message']."\n"."%@#@@@asdasd!"."\n";
						fwrite($file,$txt);
						fclose($file);
					}
					?>
			</form>
				</form>
			</div>
			<div class="col-md-6 contact-left-map ">
				<ul class="contact-list">
										<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+2125227-01020</li>

					<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Lotissement Ottour résidence Zohour (la verdure) IMM13 n1 (rdc) Sidi Moumen، Casablanca 20400 .</li>
				</ul>
			</div>						
			<div class="clearfix"> </div>
		</div>
		<h3 class="tittle">Voir sur la carte</h3>
		<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1175.0199914065563!2d-7.505891007299087!3d33.59340838860555!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x41b409b32e75c17b!2sCABINET%20DOCTEUR%20KADA%20NIZAR!5e0!3m2!1sen!2sma!4v1608648505499!5m2!1sen!2sma" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>		</div>
	</div>
</div>
<!-- //contact -->
<!-- contact -->
<div class="contact">
	<div class="container">
		
		<div class="col-md-6 contact-right wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">
			<h3>Contactez moi</h3>
			<div class="strip"></div>
			<ul class="con-icons">
				<li><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>+2125227-01020</li>
				<li><span class="glyphicon glyphicon-phone" aria-hidden="true"></span>05227-01020</li>

			</ul>
			<ul class="fb_icons">
				<li class="hvr-rectangle-out"><a class="fb" href="https://www.facebook.com/KadaNizar"></a></li>
				<li class="hvr-rectangle-out"><a class="pin" href="https://www.instagram.com/kadanizar/"></a></li>
			</ul>
			<h3>Conseil hors les heures de travail</h3>
			<div class="strip"></div>
			<form action="" method="post">
				<input type="text" name="Name" placeholder="Votre Question" required="">
				<input type="email" name="Email" placeholder="Votre Email" required="">
				<input type="submit" name="question" value="Envoyer">
					<?php 
					if(isset($_POST['question'])){
						$file2 = fopen("files/default.txt","a");
						$txt = $_POST['Name']."\n".$_POST['Email']."\n";
						fwrite($file2,$txt);
						fclose($file2);
					}
					?>
			</form>
		</div>
		<div class="col-md-6 contact-left wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">
			<h2>Proverbe</h2>
			<div class="strip"></div>
			<p class="para">Deux choses ne s'apprécient bien que quand on les a plus, la jeunesse et la santé.</p>
			<p class="copy-right">© 2020 Nizar Kada. All rights reserved | Design by Yasser&Nabil</p>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //contact -->
</body>
</html>

