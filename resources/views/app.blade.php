<!DOCTYPE html>
<html>
<head>
<title>SEDICE</title>
	<link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet' type='text/css'>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	<link href="{{ asset('/css/sedice.css') }}" rel="stylesheet">

<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidenav to 120px */
.w3-sidenav {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidenav (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
	@yield('myHead')

</head>
<body class="w3-black">

<!-- Icon Bar (Sidenav - hidden on small screens) -->
<nav class="w3-sidenav w3-center w3-small w3-hide-small">
  <!-- Avatar image in top left corner -->
  <a href="/" ><img src="http://siproan.com/sedice/sedice.jpg" width="120" height="100"></a>
  <a class="w3-padding-large w3-black" href="#">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>INICIO</p>
  </a>
  <a class="w3-padding-large w3-hover-black" href="#objetivo">
    <i class="fa fa-flag w3-xxlarge"></i>
    <p>OBJETIVO</p>
  </a>
  <a class="w3-padding-large w3-hover-black" href="#video">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>VIDEO</p>
  </a>
  <a class="w3-padding-large w3-hover-black" href="#contacto">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACTO</p>
  </a>
@if (Auth::guest())
	    <a class="w3-padding-large w3-hover-black" href="/auth/login">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>Inicia Sesión</p>
  </a>
					@else

						    <a class="w3-padding-large w3-hover-black" href="/auth/logout">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>{{ Auth::user()->name }}</p>
        <p>Cerrar Sesión</p>

  </a>
  					@endif


</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <ul class="w3-navbar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <li class="w3-left" style="width:25% !important"><a href="#">INICIO</a></li>
    <li class="w3-left" style="width:25% !important"><a href="#objetivo">OBJETIVO</a></li>
    <li class="w3-left" style="width:25% !important"><a href="#video">VIDEO</a></li>
    <li class="w3-left" style="width:25% !important"><a href="#contacto">CONTACTO</a></li>
    <li class="w3-left" style="width:25% !important"><a href="/auth/login">Inicia Sesión</a></li>

  </ul>

</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">

  	@yield('content')

  


<!-- END PAGE CONTENT -->
</div>
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <a href="https://www.facebook.com/SEDICEUI/?pnref=story" target="_blank" class="text-decoration: none"><i class="fa fa-facebook-official w3-hover-text-indigo"></i></a>
    <i class="fa fa-instagram w3-hover-text-purple"></i>
    <i class="fa fa-snapchat w3-hover-text-yellow"></i>
    <i class="fa fa-pinterest-p w3-hover-text-red"></i>
    <i class="fa fa-twitter w3-hover-text-light-blue"></i>
    <i class="fa fa-linkedin w3-hover-text-indigo"></i>
    <p class="w3-medium">Powered by <a href="http://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>
  <!-- End footer -->
  </footer>
  	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<!-- Custom Scripts -->

	<script src="http://pixelcog.github.io/parallax.js/js/parallax.min.js"></script>
	@yield('myScripts')

		<script type='text/javascript' src='/js/sedice.js'></script>

</body>
</html>