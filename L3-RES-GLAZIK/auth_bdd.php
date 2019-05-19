<?php
	$log = "root";
	$passdb = "";
try {
	//ouverture bd
	$bdd = new PDO('mysql:host=localhost;dbname=glazik;charset=utf8', $log, $passdb);
	//echo $pass_hache = password_hash($_POST['password'], PASSWORD_DEFAULT);
	}
catch (PDOExeption $e) {
	print "Erreur !: ".$e->getMessage()."<br/>";
	die();
}
?>