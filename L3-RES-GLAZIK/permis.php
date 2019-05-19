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
										<h1>Les permis</h1>
									</header>

									<!-- Content -->
										<h2>Les Formules</h2>
													<div class="table-wrapper">
														<table class="alt">
															<thead>
																<tr>
																	<th>Formule</th>
																	<th>Description</th>
																	<th>Durée</th>
																	<th>Prix</th>
																
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>Malin</td>
																	<td>Code + Conduite</td>
																	<td>6 mois</td>
																	<td>699€</td>
																</tr>
																<tr>
																	<td>Complet</td>
																	<td>Code + Conduite accompagnée</td>
																	<td>3 mois</td>
																	<td>930€</td>
																</tr>
																<tr>
																	<td>Simplissime</td>
																	<td> Code + Conduite en accéléré</td>
																	<td> 30 jours</td>
																	<td>1200€</td>
																</tr>
																<tr>
																	<td>Moto Malin</td>
																	<td>Code + conduite + circuit</td>
																	<td>4 mois</td>
																	<td>1399€</td>
																</tr>
																<tr>
																	<td>Moto Noob</td>
																	<td>Code + certificat 125cc</td>
																	<td>3 semaines</td>
																	<td>499€</td>
																</tr>
															</tbody>
														</table>
													</div>
										<div class="row">
											<div class="col-6 col-12-small">
												<h2 style="text-align: center; color: red">PROMOTION</h2>
												<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat commodo eu sed ante lacinia. Sapien a lorem in integer ornare praesent commodo adipiscing arcu in massa commodo lorem accumsan at odio massa ac ac. Semper adipiscing varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
											</div>
											<div class="col-6 col-12-small">
												<h2 style="text-align: center; color: red">PROMOTION</h2>
												<p>In arcu accumsan arcu adipiscing accumsan orci ac. Felis id enim aliquet. Accumsan ac integer lobortis commodo ornare aliquet accumsan erat tempus amet porttitor. Ante commodo blandit adipiscing integer semper orci eget. Faucibus commodo adipiscing mi eu nullam accumsan morbi arcu ornare odio mi adipiscing nascetur lacus ac interdum morbi accumsan vis mi accumsan.</p>
											</div>
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
							<!-- Menu -->
								<?php include("menu.php"); ?>
							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Glazik Auto Ecole All rights reserved.</p>
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