<?php 
	include('conx.php');
	$prenom=$_POST['prenom'];
	$nom=$_POST['nom'];
	$daten =$_POST['daten'];
	$name =$_POST['name'];
	$gender =$_POST['gender'];
	$tel =$_POST['tel'];
	$locat =$_POST['locat'];
	$adr=$_POST['adr'];
		$sql = "INSERT INTO `client`(`prenom`,`nom`,`daten`, `gender`, `location`, `adresse`, `name`, `tel`) 
								VALUES ('$prenom','$nom','$daten','$gender','$locat','$adr','$name','$tel')";
    $db->exec($sql);
    header('location:../clt_info.php');
?>