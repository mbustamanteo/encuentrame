<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>EncuentraMe - ¡Ayúdanos a encontrar a niños extraviados!</title> 
	<meta name="description" content="Red Box Bootstrap Theme"/>
	<meta name="keywords" content="Template, Theme, web, html5, css3, Bootstrap" />
	<meta name="author" content="Łukasz Holeczek from creativeLabs"/>
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/parallax-slider.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
	
	<!--start: Header -->
	<header>
		
		<!--start: Container -->
		<div class="container">
			
			<!--start: Row -->
			<div class="row">
					
				<!--start: Logo -->
				<div class="logo span3">
						
					<a class="brand" href="#">Encuentra<span>Me</span></a>
						
				</div>
				<!--end: Logo -->
					
				<!--start: Navigation -->
				<div class="span9">
					
					<div class="navbar navbar-inverse">
			    		<div class="navbar-inner">
			          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			          		</a>
			          		<div class="nav-collapse collapse">
			            		<ul class="nav">
									<li ><a href="index.html">Inicio</a></li>
									<li class="dropdown" class="dropdown">
			                			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Encuéntrame<b class="caret"></b></a>
			                			<ul class="dropdown-menu">
			                  				<li><a href="portfolio3.html">Niños Extraviados</a></li>
											<!--<li><a href="portfolio4.html">4 Columns</a></li>-->
			                			</ul>
			              			</li>
			              			<li ><a href="about.html">¿Qué Hacemos?</a></li>
									<li class="dropdown">
			                			<!--<a href="#" class="dropdown-toggle" data-toggle="dropdown">Features<b class="caret"></b></a>
			                			<ul class="dropdown-menu">
			                  				<li><a href="social-icons.html">Social Icons</a></li>
											<li><a href="icons.html">Standard Icons</a></li>
											<li><a href="icons_set2.html">Font Awesome Icons</a></li>
											<li><a href="typography.html">Typography</a></li>
											<li><a href="shortcodes.html">Shortcodes</a></li>
											<li><a href="list-styles.html">List Styles</a></li>
			                			</ul>
			              			</li>-->
																		
									<!--<li ><a href="services.html">Services</a></li>
									<li ><a href="pricing.html">Pricing</a></li>
									<li ><a href="blog.html">Blog</a></li>-->
			              			<li class="active"><a href="contact.html">Contacto</a></li>
			            		</ul>
			          		</div>
			        	</div>
			      	</div>
					
				</div>	
				<!--end: Navigation -->
					
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->	
	<!-- start: Wrapper -->	
	<div id="wrapper">		
		
		<!-- start: Container -->	
		<div class="container">
			
			<!-- start: Map -->
			<div>

				<!-- starts: Google Maps -->
				<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
				<div id="googlemaps">
					<div id="map" class="google-map google-map-full"></div>
				</div>
				<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
				<script src="js/jquery.gmap.min.js"></script>
				<script type="text/javascript">
					$('#map').gMap({
						controls: {
							panControl: false,
							zoomControl: false,
							mapTypeControl: false,
							scaleControl: false,
							streetViewControl: false,
							overviewMapControl: false
						},
						maptype: 'ROADMAP',
						scrollwheel: true,
						zoom: 13,
						markers: [
							{
								address: 'San Francisco, United States', // Your Adress Here
								html: '',
								popup: false,
							}

						],

					});
				</script>
				<!-- end: Google Maps -->
				
			</div>
			<!-- end: Map -->
			
			<hr class="clean">
			<!-- start: Row -->
			<div class="row">
			
				<!-- start: Contact Form -->
				<div class="span9">
					
					<div class="title"><h3>Sobre nosotros</h3></div>
					<p>
						 Somos un equipo de estudiantes de la Universidad de la Frontera de Temuco, Chile, llamado BUCALA, participantes de Desarrollando America Latina 2012. Nuestro proyecto se llama EncuentraMe y consiste en la creación de una plataforma de difusión de información de niños extraviados en latinoamerica. 
					</p>
					
					
					<div class="title"><h3>Contactanos</h3></div>
					
					<!-- start: Row -->
					<div class="row">

					<!-- start: Contact Form -->
					<div id="contact-form">

						<form method="post" action="">
							
							<fieldset>
								
								<div class="span3">
									<div class="input">
										<input tabindex="1" id="name" name="name" type="text" value="" class="input-xlarge span3" placeholder="Nombre: ...">
									</div>
								</div>

								<div class="span3">
									<div class="input">
										<input tabindex="2" id="email" name="email" type="text" value="" class="input-xlarge span3" placeholder="Email: ...">
									</div>
								</div>
								
								<div class="span3">
									<div class="input">
										<input tabindex="3" id="www" name="www" type="text" value="" class="input-xlarge span3" placeholder="WWW: ...">
									</div>
								</div>

								<div class="span9">
									<div class="input">
										<textarea tabindex="3" class="input-xlarge span9" id="message" name="body" rows="10" placeholder="Mensaje: ..."></textarea>
									</div>
								</div>

								<div class="actions">
									<button tabindex="3" type="submit" class="btn btn-succes btn-large span2">Enviar Mensaje</button>
								</div>
							</fieldset>

						</form>

					</div>
					<!-- end: Contact Form -->
					
					</div>
					<!-- end: Row -->

				</div>
				<!-- end: Contact Form -->

	
				<div class="span3">
					
					<!-- start: Contact Info -->
					<div class="title"><h3>Contacto</h3></div>
					<p>
						<i class="mini-ico-home"></i> <b>BUCALA</b>
					</p>
					<p>
						<i class="mini-ico-map-marker"></i> Francisco Salazar 
					</p>
					<p>	
						<i class="mini-ico-map-marker"></i> Temuco, Chile
					</p>	
					<p>
						<i class="mini-ico-envelope"></i> m.bustamante01@ufromail.cl
					</p>
					<p>
						<i class="mini-ico-globe"></i> Web: companyname.com
					</p>	
					<!-- end: Contact Info -->		
					
					
					<!-- start: Social Sites -->
					<div class="title"><h3>¡Siguenos!</h3></div>
					<ul class="social-bookmarks">
						<li class="facebook"><a href="https://www.facebook.com/lukaszholeczek">facebook</a></li>
						<li class="google"><a href="#">google</a></li>
						<li class="skype"><a href="#">skype</a></li>
						<li class="twitter"><a href="http://www.twitter.com/lukaszholeczek">twitter</a></li>
						<li class="youtube"><a href="#">youtube</a></li>
					</ul>
					<!-- end: Social Sites -->
					
				</div>
				
			</div>
			<!-- end: Row -->

		</div>
		<!-- end: Container -->
				
  	</div>
	<!-- end: Wrapper  -->			

	<!-- start: Footer -->
	<div id="footer">
		
		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: About -->
				
					<div class="span3">
					<h3>Contacto</h3>
					<p>
						<i class="mini-ico-home"></i> <b>BUCALA</b>
					</p>
					<p>
						<i class="mini-ico-map-marker"></i> Francisco Salazar 
					</p>
					<p>	
						<i class="mini-ico-map-marker"></i> Temuco, Chile
					</p>	
					<p>
						<i class="mini-ico-envelope"></i> m.bustamante01@ufromail.cl
					</p>
					<p>
						<i class="mini-ico-globe"></i> Web: companyname.com
					
				<!-- end: About -->

				<!-- start: Photo Stream -->
				
				<!-- end: Photo Stream -->
				
				<!-- start: Follow Us -->
				<div class="span3">
					
					<h3>Siguenos</h3>
					
					<div id="social-r" class="tooltips">
						<a href="#" rel="tooltip" title="Facebook" class="facebook">Facebook</a>
						<a href="#" rel="tooltip" title="Skype" class="skype">Skype</a>
						<a href="#" rel="tooltip" title="Tumblr" class="tumblr">Tumblr</a>
						<a href="#" rel="tooltip" title="Twitter" class="twitter">Twitter</a>
						<a href="#" rel="tooltip" title="YouTube" class="youtube">YouTube</a>
					</div>
				
				</div>
				<!-- end: Follow Us -->
				
			</div>
			<!-- end: Row -->	
			
		</div>
		<!-- end: Container  -->

	</div>
	<!-- end: Footer -->
	
	<!-- start: Footer Menu -->
	<div id="under-footer" class="hidden-tablet hidden-phone">

		<!-- start: Container -->
		<div class="container">
			
			<!-- start: Row -->
			<div class="row">

				<!-- start: Footer Menu Logo -->
				<div class="span2">
					<div id="under-footer-logo">
						<a class="brand" href="#">Encuentra<span>Me</span>.</a>
					</div>
				</div>
				<!-- end: Footer Menu Logo -->

				<!-- start: Footer Menu Links-->
				<div class="span9">
					
					<div id="under-footer-copyright">
						&copy; 2012, <a href="http://bucala.co">BUCALA</a>. Designed by <a href="http://bucala">BUCALA</a> in Chile <img src="img/poland.png" alt="Poland" style="margin-top:-4px">
					</div>
					
				</div>
				<!-- end: Footer Menu Links-->

				<!-- start: Footer Menu Back To Top -->
				<div class="span1">
						
					<div id="under-footer-back-to-top">
						<a href="#"></a>
					</div>
				
				</div>
				<!-- end: Footer Menu Back To Top -->
			
			</div>
			<!-- end: Row -->
			
		</div>
		<!-- end: Container  -->	

	</div>	
	<!-- end: Footer Menu -->

<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery-1.8.2.js"></script>
<script src="js/isotope.js"></script>
<script src="js/jquery.imagesloaded.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script src="js/fancybox.js"></script>
<script src="js/twitter.js"></script>
<script src="js/jquery.placeholder.min.js"></script>
<script defer="defer" src="js/custom.js"></script>
<!-- end: Java Script -->

</body>
</html>