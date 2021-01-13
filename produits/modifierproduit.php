<?php
	require_once('../connection.php');
	$prix = $_POST['prix'];
	$libelle =$_POST['libelle'];
	$code =$_POST['id'];
	
	$req1 = " update produits set prix=$prix ,libelle='$libelle' where  id_produit=$code ";
	$rs1 = mysqli_query($conn,$req1) or die(mysqli_error());
	setcookie('testmod',1,time()+2,'/');
	header('location:afficher_produits.php');
	 mysqli_close($conn); 
?>