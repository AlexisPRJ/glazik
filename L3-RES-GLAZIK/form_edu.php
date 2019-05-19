<!DOCTYPE HTML>
<?php
				include("verification.php");
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
										<h1>Paramètres Utilisateurs</h1>
										<form  action="recup_donnees.php" autocomplete="on" method="POST" enctype="multipart/form-data">
                                    <h2><center>Espace Privilégié</center></h2> 
                                    <p> 
                                    	<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
                                        <label for="ci" data-icon="u" > Votre CI : </label>
                                        <input id="ci" name="ci" required="required" type="file" class="alt"/>
                                    </p>
                                    <p> 
                                        <label for="apji" data-icon="u" > Votre Attesation de participation à la journée d'intégration : </label>
                                        <input id="apji" name="apji" required="required" type="file" class="alt"/>
                                    </p>
                                    <p> 
                                        <label for="photo" data-icon="u" > Vos photos : </label>
                                        <input id="photo" name="photo" required="required" type="file" class="alt"/>
                                    </p>
                                    <p>
                                        <center><input type="submit" value="Envoyer" /></center> 
								    </p>
									</header>
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