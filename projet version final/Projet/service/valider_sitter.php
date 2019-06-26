<?php 
	include('conx.php');
	$name =$_POST['name'];
	$daten =$_POST['daten'];
	$gender =$_POST['gender'];
	$desc =$_POST['desc'];
	$bio =$_POST['bio'];
	$service =$_POST['service'];
	$type =$_POST['type'];
	$tarif =$_POST['tarif'];
	$nbrser=$_POST['nbrser'];
		$sql = "INSERT INTO `registration`(`name`, `daten`, `gendre`,`description`, `bio`, `service`, `type`, `tarif`, `nbrservice`)
								 VALUES ('$name','$daten','$gender','$desc','$bio','$service','$type',$tarif,$nbrser)";
    $db->exec($sql);
    header('location:../sitter_info.php');
?>