<?php
	$id =$_GET['id'];
	//-----------------------------------------------------------------
	include('cnx.php');
	// Suppression (DELETE) :
	$sql = "DELETE FROM `client` WHERE id=".$id;
    $db->exec($sql);
    header('location:../listeclients.php');
?>