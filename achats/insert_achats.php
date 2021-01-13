<?php
	require_once('../connection.php');
	$id = $_POST['id_achat'];
	$id_acheteur =$_POST['id_acheteur'];
	$id_produit =$_POST['id_produit'];
	
	$req = "insert into achat(id_acheteur,id_produit) value('$id_acheteur','$id_produit')";
	$rs = mysqli_query($conn,$req) or die(mysqli_error());
	setcookie('achat_ajou',1,time()+2,'/' );
	
	header('location:afficher_achats.php');
	 mysqli_close($conn); 
?>
