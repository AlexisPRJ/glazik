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
										<h1>Contacts</h1>
									</header>
										<div id="contact" class="animate form">
                            				<form  action="contacts.php" autocomplete="on" method="POST"> 
                                			<p> 
                                    			<p><label for="nom">Nom Prénom :</label><input type="text" id="nom" name="nom" /></p>
												<p><label for="email">Email :</label><input type="text" id="email" name="email" /></p>
                                			</p>
                                			<p> 
                                    			<p><label for="message">Message :</label><textarea id="message" name="message" cols="30" rows="8"></textarea></p>
                               
                                    			<p><input type="submit" value="Envoyer" class="button_submit"/></p>
                                			</p>
                            				</form>
                        				</div>
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
							<!-- MENU -->
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