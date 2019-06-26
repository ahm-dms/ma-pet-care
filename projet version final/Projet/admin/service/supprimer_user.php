<?php
	$id =$_GET['id'];
	//-----------------------------------------------------------------
	include('cnx.php');
	// Suppression (DELETE) :
	$sql = "DELETE FROM `admin` WHERE id=".$id;
    $db->exec($sql);
    header('location:../listeuser.php');
?>