<?php
include("auth_bdd.php");
if (isset($_POST['username']) && isset($_POST['password'])) {
	// on affiche nos résultats
$pseudo = $_POST['username'];
$pass = $_POST['password'];
}

//  Récupération de l'utilisateur et de son pass hashé
$req = $bdd->prepare('SELECT id, pass FROM membres WHERE pseudo = :pseudo');
$req->execute(array(
    'pseudo' => $pseudo));
$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['password'], $resultat['pass']);
if (!$resultat)
{
    header ("Location:login.php?msg=error");
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['pseudo'] = $pseudo;
        #echo 'Vous êtes connecté !';
        header ("Location:verif_espace.php");
    }
    else {
        header ("Location:login.php?msg=error");
    }
}
?>