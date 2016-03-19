<!DOCTYPE html>
 	<html lang="en">
 	<head>
 		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
 		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
 		<meta charset="UTF-8">
 		<title>PIS</title>
		
		<!-- CSS -->
 		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
 		<link href="{!! asset('css/materialize.css') !!}" type="text/css" rel="stylesheet" media="screen,projection"/>
    	<link href="{!! asset('css/style.css') !!}" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href="{!! asset('css/mainStyle.css') !!}" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href="{!! asset('css/jquery.dataTables.css') !!}" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href="{!! asset('css/buttons.dataTables.css') !!}" type="text/css" rel="stylesheet" media="screen,projection"/>
 		<link rel="shortcut icon" href="pictures/logo.png" />

 		<!--  Scripts-->
 		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
 		<script src="{!! asset('js/jquery-2.1.1.min.js') !!}"></script>
    	<script src="{!! asset('js/jquery-1.12.0.min.js') !!}"></script>
    	<script src="{!! asset('js/jquery.dataTables.js') !!}"></script>
 		<script src="js/materialize.js"></script>
 		<script src="js/init.js"></script>

 		<div class="navbar">
 		  <nav class="white">
 		    <div class="nav-wrapper" >
 		    <a class="brand-logo" href="index.html"><img src="pictures/navIcon.png" href="index.html"></a>

 		      <ul class="right hide-on-med-and-down" align="middle">
 		      	
      			<li><a class="waves-effect waves-light btn blue darken-4 white-text modal-trigger" href="#modal1">LOG IN</a></li>
      			@yield('navbar')
 		      </ul>
 		    </div>
 		  </nav>
 		</div>
 	</head>
 	<body class="white">
 		@yield('mainBody')
 	</body>

 	<!-- Modal Structure -->
 	  <div id="modal1" class="modal">
 	    <div class="modal-content">
 	      <h4 class="blue-text text-darken-4">Log In</h4>
 	      <div class="container">
 	      	<form action="login.php" method="get">
 	      		<div class="row">
 	      			<div class="input-field col s6">
 	      			<input id="userName" type="text" class="validate" name="username" required>
 	      			<label for="userName">Username</label>
 	      			</div>
 	      			<div class="input-field col s6">
 	      			<input id="password" type="password" class="validate" name="username" required>
 	      			<label for="password">Password</label>
 	      			</div>
 	      		</div>
 	      	</form>
 	      </div>
 	    </div>
 	    <div class="modal-footer">
 	      <a href="maintenance.html" class=" modal-action modal-close waves-effect waves-light btn blue darken-4" type="submit">SUBMIT</a>
 	    </div>
 	  </div>

 	  <script type="text/javascript">
 	  	$(document).ready(function(){
 	  	   // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
 	  	   $('.modal-trigger').leanModal();
 	  	 });
 	  </script>

 	<footer class="footer page-footer blue darken-4">
 	      <div class="container">
 	      <div class="row">
 	        <div class="col l6 s12 blue  darken-4">
 	        <h5 class="white-text">Pis.com</h5>
 	        <p class="grey-text text-lighten-4">Pis.com is the world's first Patient monitoring system made with heart.</p>
 	        </div>
 	        <div class="col l4 offset-l2 s12 blue  darken-4">
 	        <h5 class="white-text">Links</h5>
 	        <ul>
 	          <li><a class="grey-text text-lighten-3" href="#!">www.facebook.com/Farm2DOfficial</a></li>
 	          <li><a class="grey-text text-lighten-3" href="#!">www.twitter.com/@Farm2DOfficial</a></li>
 	          <li><a class="grey-text text-lighten-3" href="#!">www.Farm2DOfficial.com</a></li>
 	          <li><a class="grey-text text-lighten-3" href="#!">www.instagram.com/@Farm2DOfficial</a></li>
 	        </ul>
 	        </div>
 	      </div>
 	      </div>
 	      <div class="footer-copyright">
 	      <div class="container">
 	      (c) 2015 Copyright
 	      <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
 	      </div>
 	      </div>
 	  </footer>
 	</html>	