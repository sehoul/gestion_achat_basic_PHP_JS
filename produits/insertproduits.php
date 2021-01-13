<?php
	require_once('../connection.php');
	$id = $_POST['id'];
	$libelle = $_POST['libelle'];
	$prix = $_POST['prix'];
	$req = "insert into produits(libelle,prix) value('$libelle',$prix)";
	$rs = mysqli_query($conn,$req) or die(mysqli_error());
	setcookie('testajou',1,time()+2,'/' );
	
	header('location:afficher_produits.php');
	mysqli_close($conn); 
?>