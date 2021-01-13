<?php
	require_once('../connection.php');
	$code = $_POST['id'];
	$id_acheteur =$_POST['id_acheteur'];
	$id_produit =$_POST['id_produit'];
	
	$req1 = " update achat set id_acheteur=$id_acheteur ,id_produit=$id_produit where  id_achat=$code ";
	$rs1 = mysqli_query($conn,$req1) or die(mysqli_error());
	setcookie('achat_mod',1,time()+2,'/');
	header('location:afficher_achats.php');
	mysqli_close($conn); 
?>