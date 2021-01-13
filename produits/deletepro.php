<?php 
	$code=$_GET['code'];
	
	//header("location :afficher.php") ;
	
	require_once('../connection.php');
	$req="delete from produits where id_produit=$code";
	$rs = mysqli_query($conn,$req) or die(mysqli_error());
	setcookie("testsup",1,time()+2,"/");
    header("location:afficher_produits.php");
	 mysqli_close($conn); 
?>