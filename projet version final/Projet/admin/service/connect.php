<?php
include('cnx.php');  
$req=$db->prepare("SELECT * FROM admin WHERE email = :username AND password = :password");
$req->execute(  
     array(  
          'username'     =>     $_POST["email"],  
          'password'     =>     md5($_POST["password"] ) 
     )  
); 
$data=$req->fetch();
$_SESSION['nom']=$data['nom'];
$_SESSION['prenom']=$data['prenom'];
$_SESSION['id']=$data['id'];
header('location:../accueil.php');
 ?>