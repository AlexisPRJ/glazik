<!DOCTYPE HTML>
<?php
	session_start();
?>
<html>
	<head>
		<title>GLAZIK</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
							<?php include("button_login.php"); ?>
								<header id="header">
									<a href="index.php" class="logo"><strong>GLAZIK AUTO ECOLE</strong>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
									</ul>
								</header>
							<!-- Banner -->
								<section id="banner">
									<div class="content">
										<header>
											<h1>100% de réussite <br>Chez GLAZIK !</br></h1>
											<p>L'apprentissage de la conduite est essentiel</p>
										</header>
										<p>Vous désirez apprendre à conduire que ce soit pour votre plaisir, pour vos affaires, ou pour gagner votre vie… il importe de choisir judicieusement les professeurs qui vous apprendront, non seulement à vous diriger, mais aussi à ménager le mécanisme de votre voiture et à en tirer le maximum de rendement pour le minimum d’usure et de dépense.</p>
										<ul class="actions">
											<li><a href="presentation.php" class="button big">En savoir plus</a></li>
										</ul>
									</div>
									<span class="image object">
										<img src="images/pic10.jpg" alt="" />
									</span>
								</section>
						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
									<center><a href="verif_espace.php" class="button1">Espace connecté</a></center>
								</section>
							<?php include("menu.php"); ?>
							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Glazik Auto Ecole. All rights reserved.</p>
								</footer>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>