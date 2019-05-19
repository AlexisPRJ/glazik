<?php
include("verification.php");
	$pseudo = $_SESSION['pseudo'];
	echo '<p> Bienvenu, '.$pseudo.'</p>'; 
	$cheminEtNomTemporaire = $_FILES['ci']['tmp_name'];
	$cheminEtNomDefinitif = 'upload/'.$_FILES['ci']['name'];
	
	$moveIsOk = move_uploaded_file($cheminEtNomTemporaire, $cheminEtNomDefinitif);
	
	if ($moveIsOk) {
		$message = "Le fichier a été uploadé dans ".$cheminEtNomDefinitif;
		
	} else {
		$message = "Suite à une erreur, le fichier n'a pas été uploadé";
	}
	
?>

 <!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<meta name="descrption" content="">
			<title>Traitement upload</title>
		</head>

		<body>
			<h1>Upload</h1>
			
			<p><?= $message ?></p>
		
		
		
		</body>

	</html> 