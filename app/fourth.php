<?php 
	session_start();
	if ($_SESSION[aut] == 'true') {
		header('location:second.php');
	}
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class=" ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class=" ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class=" ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru"> <!--<![endif]-->
<head>
	<meta charset="UTF-8">
	<title>Wf1</title>
	<meta name="description" content="">

	<!-- Fonts Loader from _fonts.css (HTML5 LocalStorage) -->
<script>!function(){function e(e,t,n){e.addEventListener?e.addEventListener(t,n,!1):e.attachEvent&&e.attachEvent("on"+t,n)}function t(e){return window.localStorage&&localStorage.font_css_cache&&localStorage.font_css_cache_file===e}function n(){if(window.localStorage&&window.XMLHttpRequest)if(t(o))a(localStorage.font_css_cache);else{var n=new XMLHttpRequest;n.open("GET",o,!0),e(n,"load",function(){4===n.readyState&&(a(n.responseText),localStorage.font_css_cache=n.responseText,localStorage.font_css_cache_file=o)}),n.send()}else{var c=document.createElement("link");c.href=o,c.rel="stylesheet",c.type="text/css",document.getElementsByTagName("head")[0].appendChild(c),document.cookie="font_css_cache"}}function a(e){var t=document.createElement("style");t.innerHTML=e,document.getElementsByTagName("head")[0].appendChild(t)}var o="css/font.css";window.localStorage&&localStorage.font_css_cache||document.cookie.indexOf("font_css_cache")>-1?n():e(window,"load",n)}();</script>
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->
	<!-- Load CSS Compilled without JS -->
		<noscript>
			<link rel="stylesheet" href="css/_fonts.css">
		</noscript>
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/second.css">
		<link rel="stylesheet" href="css/third.css">
		<link rel="stylesheet" href="css/fourth.css">
		<link rel="stylesheet" href="css/_media.css">
		<!-- Нужно все скомпилировать что выше и закинуть в этот файл -->
		<!-- <link rel="stylesheet" href="compiled.min.css"> -->

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="apple-touch-icon" sizes="57x57" href="img/fav/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/fav/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/fav/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/fav/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/fav/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/fav/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/fav/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/fav/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/fav/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="img/fav/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/fav/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="img/fav/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/fav/favicon-16x16.png">
	<link rel="manifest" href="img/fav/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="img/fav/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<script src="js/modernizr.js"></script> 
	
</head>
<body>
	<div class="wrapper">
		<div class="aut-wrap">
			<h1 class="aut-title">Авторизируйтесь</h1>
			<form action="/" class="aut-info" id="autorizate" method="POST">
			<div class="cb-aut">
				Ошибка!
			</div>
				<div class="tooltip-wrap aut">
					<span class="tooltip-r hidden">введите email</span>
					<input type="text" placeholder="Введите email" class="aut-input email" id="email" name="email">		
				</div>
				<div class="tooltip-wrap aut">
					<span class="tooltip-r hidden">введите пароль</span>
					<input type="password" placeholder="Введите пароль" class="aut-input pass" id="pass" name="pass">		
				</div>	
				</br>					
				<input type="checkbox" class="aut-check-me" id="check-me" >
				<label for="check-me" class="aut-labl-check-me">Запомнить меня?</label>
				<button type="submit" class="btn btn-sent aut-btn">Войти</button>
			</form>
		</div>
		<footer class="main-footer">
			<div class="container">
				<a href="fourth.php" class="log-in">
					вход
				</a>
				<div class="copyright">
					 &copy; 2016. Это мой сайт, пожалуйста, не копируйте и не воруйте его
				</div>  
	      	</div>
		</footer>
		
	</div>
	




<div class="hidden"></div>




<script src="js/jquery.min.js"></script>
<script src="js/jquery.placeholder.min.js"></script>
<script src="js/mainworkli.js"></script>

</body>
</html>