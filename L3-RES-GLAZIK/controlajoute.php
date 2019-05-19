<?php
	//Hashage du mot de passe
	$pw = password_hash($_POST['pwd'], PASSWORD_DEFAULT);
	$mail = $_POST['email'];
include("auth_bdd.php");
if (isset($_GET["val"])) {
    $sql ="INSERT INTO membres VALUES ("."NULL".",'".$_POST['pseudo']."','".$pw."','".$_POST['email']."')";
    $req = $bdd->query($sql);
    header ("Location:edit.php?msg=ajout");
	}
	$bdd = null;
?>
