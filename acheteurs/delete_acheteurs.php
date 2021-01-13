<?php 
	$code=$_GET['code'];
	
	//header("location :afficher.php") ;
	
	require_once('../connection.php');
	$req="delete from acheteurs where id_acheteurs=$code";
	$rs = mysqli_query($conn,$req) or die(mysqli_error());
	setcookie("acheteur_sup",1,time()+2,"/");
    header("location:afficher_acheteurs.php");
	 mysqli_close($conn); 
?>