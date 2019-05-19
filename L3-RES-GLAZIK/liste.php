<?php
include("auth_bdd.php");
	$sql ='SELECT id,pseudo,email FROM membres';
	$req = $bdd->query($sql);
  
		echo '<div class="table-wrapper">';
			echo '<table class="alt">';
				echo '<thead>';
					echo '<tr>';
						echo '<th>Numéro ID</th>';
						echo '<th>Login</th>';
						echo '<th>Adresse mail</th>';							
					echo '</tr>';
				echo '</thead>';
					echo '<tbody>';

	while ($d = $req->fetch()) 
	{
		
						echo '<tr>';
							echo '<td>'.$d['id'].'</td>';
							echo '<td>'.$d['pseudo'].'</td>';
							echo '<td>'.$d['email'].'</td>';
							echo '<td>'.'<b><center><a href="modif.php?id='.$d['id'].'" ><img src="images/modif.png?id='.$d['id'].'</a><center></b>'.'<b><a href="efface.php?id='.$d['id'].'" ><img src="images/croix.png">'.'</b></a>'.'</a>'.'</td>';
						echo '</tr>';
	}
					echo '</tbody>';
			echo '</table>';
		echo '</div>';
		

    if (isset($_GET["msg"]) && $_GET["msg"] == "accept") {
		echo 'Suppression Réussi';
	}
	if (isset($_GET["msg"]) && $_GET["msg"] == "echouer") {
		echo 'Erreur de suppression';
	}
	if (isset($_GET["msg"]) && $_GET["msg"] == "ajout") {
		echo 'Ajout ok';
	}

// Fermeture bd
$bdd = null;
?>