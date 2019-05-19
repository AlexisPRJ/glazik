<!DOCTYPE HTML>
<?php
	session_start();
?>
<html>
	<head>
		<title>Glazik</title>
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
									<a href="index.php" class="logo"><strong>GLAZIK AUTO ECOLE</strong></a>
									<ul class="icons">
										<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
										<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon fa-medium"><span class="label">Medium</span></a></li>
									</ul>
								</header>

							<!-- Content -->
								<section>
									<header class="main">
										<h1>Présentation</h1>
									</header>

									<span class="image main"><img src="images/pic11.jpg" alt="" /></span>

									<p>L'auto-école Glazik située à Saint-Germain-en-laye (78100) et créée en 2009, propose des formations au permis B et AAC (conduite accompagnée dés 15 ans) avec un moniteur diplômé d'état ayant plus de 25 ans d'expérience.
									L'auto-école Glazik vous assure une formation complète du code à la conduite et met tout son savoir-faire afin d'atteindre un seul objectif, votre réussite à l'examen du permis.</p>
									<p>Nos cours de code ont lieu en salle équipée de matériel audiovisuel mais également en illimité sur internet avec Prépacode pour vous permettre de progresser à votre rythme où vous voulez quand vous voulez.</p>
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

							<!-- Menu -->
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