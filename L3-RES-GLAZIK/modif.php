<html>
<head>
	<title>DATA Update</title>
</head>
<body>
	<form  action="modif.php" autocomplete="on" name="formodif" method="GET"> 
        <h1>Modification de l'user</h1>
        <p>
		ID de l'utilisateur à modifier :
			<input type="text" name="id" size="3">
		</p>
		<p>
		Login :
			<input type="text" name="pseudo" size="25">
		</p>
		<p>
		Password :
			<input type="text" name="pwd" size="12">
		</p>
		<p>
		Email :
			<input type="text" name="email" size="5">
		</p>
		<button type="submit" name="mod"><em>Ajouter</em></button>
	</form>
<?php
	include("auth_bdd.php");
	 try { 
	$req = $bdd-> query("update membres SET pseudo="."'".$_GET['pseudo']."'".","." pass="."'".$_GET['pwd']."'".","." email=".$_GET['email']."  where id=".$_GET['id']);
	 }
 catch(Exception $e)
{
        echo 'Erreur : '.$e->getMessage().'<br />';
        echo 'N° : '.$e->getCode();
}
?>
<a href="edit.php"> RETOUR </a> 
</body>
</html>