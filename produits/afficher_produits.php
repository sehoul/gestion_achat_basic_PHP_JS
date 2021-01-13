<?php
	require_once('../connection.php');
	$req2 ="select * from produits";
	$rs2 = mysqli_query($conn,$req2) or die(mysqli_error()) ;
	require_once('../cookies/cookie_produit.php');
?>
<html>
<head>
	<title>afficher achat</title>
   <style type="text/css">
		table{  width : 80%;  margin : 10px 10px 2px 10px; border-spacing: 0;opacity: 0.75;}
		td, th { 

			text-align: center;
			padding : 5px;
			column-width:100px ;

		}
		tr:nth-child(even){
			background-color: #f6f6f6;

		}
		tr:nth-child(odd){
			background-color: #e9e9e9;
		}
		tr:first-child{
			background-color: #55574A;
		}
		body{
			background-image: url("../photo/ground.png");
			background-repeat: no-repeat;
			background-size: cover; 
			background-attachment : fixed;
		}
		.p111{
			text-align: center;
			
			width : 35%;
		}
	</style>
</head>
<body>

	<p class ="p111">
	<a href='ajouterproduit.php'> <img src="../photo/plus.png" title="Ajouter produit" width="25px"> &nbsp &nbsp </a> 
	<a href='../cherchers/chercher_Produits.php'><img src="../photo/find.png" title="Chercher produit" width="25px"> </a>  <br>
	</p>
	<table >
		<tr> 	
			<th style="color:#ffffff;"> Id_produit </th>
			<th style="color:#ffffff;"> Libelle </th>
			<th style="color:#ffffff;"> Prix </th>
		</tr>
		<?php while($produit = mysqli_fetch_assoc($rs2)){ ?>
        <tr>
			<td> <?php echo $produit['id_produit'] ;?></td>
			<td> <?php echo $produit['libelle'] ;?></td>
			<td> <?php echo $produit['prix'] ;?></td>
			<td id="p1" > <a href="updatepro.php ?code=<?php  echo $produit['id_produit']; ?>"><img src="../photo/edit.png"  title="Modifier"  ></a></td>
			<td id="p1"> <a href="deletepro.php?code=<?php echo $produit['id_produit'] ;?>" onclick="return(confirm('Voullez-vous vraiment supprimer !!'))" ><img src="../photo/delete.png" title="Supprimer" ></a></td>
		</tr>
		<?php } ?>
</table>
<br><br>


<?php mysqli_close($conn); ?>

</body>
</html>