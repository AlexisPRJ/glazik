<?php
	$log = "root";
	$passdb = "";
	try {
//ouverture bd
	$bdd = new PDO('mysql:host=localhost;dbname=glazik', $log, $passdb);
	}
	catch (PDOException $e) {
		print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
	}
	$sql ='SELECT id,pseudo,email FROM membres';
	$req = $bdd->query($sql);
  
	while ($d = $req->fetch()) 
	{
		echo '<b>'.$d['id'].' '.$d['pseudo'].' '.$d['email'].'</b>';
		echo '<b><a href="efface.php?id='.$d['id'].'" ><img src="images/croix.png"></a></b>'.'<b><a href="modif.php?id='.$d['id'].'" ><img src="images/modif.png?id='.$d['id'].'"></b></a>'.'</a><br><br>';
	}
		

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