<?php
//session_start();
if(!isset($_SESSION['pseudo']))
{
	echo '<a href="login.php" class="button">Connexion</a>';
}
if(isset($_SESSION['pseudo']))
{
	echo '<a href="logout.php" class="button">Deconnexion</a>';
}
?>