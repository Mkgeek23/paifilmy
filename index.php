<?php
	session_start();
	require_once("api/inc.php");
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Filmy - sklep/wyporzyczalnia</title>
	<link rel="stylesheet" type="text/css" href="style/fontello.css">
	<link rel="stylesheet" type="text/css" href="style/style-items.css">

	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="style/style.css">


	


</head>
<body class='index'>
	<nav id="nav-bar">
		<div class="container">
			<div class="nav-bar-left">
				<ul>
					<a href="index.php?a=katalog"><li>Katalog</li></a>
				</ul>
			</div>
			
			<div class="nav-bar-right">
				<?php if(!czyZalogowano()): ?>
				<ul>
					<a href="index.php?a=zarejestruj"><li>Zarejestruj się</li></a>
					<a href="index.php?a=zaloguj"><li>Zaloguj się</li></a>
				</ul>
				<?php endif;?>
				<?php if(czyZalogowano()): ?>
				<ul>
					<a href="index.php?a=wyloguj"><li>Wyloguj się</li></a>
				</ul>
				<?php endif;?>
			</div>
		</div>
	</nav>
		

		<div id=content class="box">
			<?php
				switch ($_GET['a']) {
					case 'home': 				require_once('code/home.php'); 				break;
					case 'katalog': 			require_once('code/catalog.php'); 			break;
					case 'zaloguj': 			require_once('code/login.php'); 			break;
					case 'film': 				require_once('code/movie.php'); 			break;
					case 'zarejestruj': 		require_once('code/register.php'); 			break;
					case 'wyloguj': 			require_once('code/logout.php'); 			break;
					default	: 					require_once('code/home.php');				break;
				}
			?>
		</div>
		
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/myScripts.js"></script>
	<style type="text/css">
		.ytp-chrome-top, .ytp-pause-overlay{
  			display: none;
		}
</style>

</body>
</html>


<?php
	mysqli_close($conn);
?>