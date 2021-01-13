<?php
	require_once('../connection.php');
	$compte = $_POST['compte'];
	$nom =$_POST['nom'];
	$code =$_POST['id'];
	
	$req1 = " update acheteurs set compte=$compte ,nom='$nom' where  id_acheteurs=$code ";
	$rs1 = mysqli_query($conn,$req1) or die(mysqli_error());
	setcookie('acheteur_mod',1,time()+2,'/');
	header('location:afficher_acheteurs.php');
	mysqli_close($conn); 
?>