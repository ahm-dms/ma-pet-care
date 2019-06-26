<?php
	$id =$_GET['id'];
	//-----------------------------------------------------------------
	include('cnx.php');
	// Suppression (DELETE) :
	$sql = "DELETE FROM `registration` WHERE id=".$id;
    $db->exec($sql);
    header('location:../listepets.php');
?>