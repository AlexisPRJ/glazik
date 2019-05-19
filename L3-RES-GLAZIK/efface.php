<?php
include("auth_bdd.php");
if (isset($_GET['id'])) {
    $sql ='DELETE FROM membres WHERE id = "'.$_GET['id'].'"';
    $req = $bdd->query($sql);
    $nb = $req->rowCount();
    if ($nb==0){
    	header("Location: edit.php?msg=echouer ");
	}
    else{
    	header("Location: edit.php?msg=accept ");
    } 
	}
	$db = null;
?>