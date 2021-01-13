<?php
	require_once('../connection.php');
	$compte = $_POST['compte'];
	$nom =$_POST['nom'];
	$code =$_POST['id'];
	
	$req = "insert into acheteurs(nom,compte) value('$nom','$compte')";
	$rs = mysqli_query($conn,$req) or die(mysqli_error());
	setcookie('acheteur_ajou',1,time()+2,'/' );
	
	header('location:afficher_acheteurs.php');
	 mysqli_close($conn); 
?>