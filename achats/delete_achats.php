<?php 
	$code=$_GET['code'];
	
	//header("location :afficher.php") ;
	
	require_once('../connection.php');
	$req="delete from achat where id_achat=$code";
	$rs = mysqli_query($conn,$req) or die(mysqli_error());
	setcookie("achat_sup",1,time()+2,"/");
    header("location:afficher_achats.php");
	mysqli_close($conn); 
?>