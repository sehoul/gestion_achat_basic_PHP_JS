<?php 
	require_once('../connection.php');
	$mo_cle="null";
	if(isset($_POST['rechercher'])){
		
		$mo_cle = $_POST['rechercher'];
	}
		if(isset($_POST['rechercher'])){
		  $col = $_POST['select_col'];
		}else{
		$col = "id_produit";
		}
		$req=" select *from produits where $col  like '%$mo_cle%' ";
		$rs=mysqli_query($conn,$req) or die(mysqli_error());
?>
<html>
<head>
	<meta charset="utf-8">
    <title>cherchers acheteurs</title>
			 <style type="text/css">
		table{  width : 90%;  margin : 10px 10px 2px 10px; border-spacing: 0;opacity: 0.75;}
		td, th { 

			text-align: center;
			padding : 5px;
			column-width:160px ;

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

.button1 {
  background-color: white; 
  color: black; 
  border: 2px dashed #f44336;
  width : 90px;
}

.button1:hover {
  background-color: #f44336;
  color: white;
	
}

	</style>
</head>
<body>
	<form method="POST" action="chercher_Produits.php">
		<table>
		    <tr>
				<td>choit de colum  a rechercher</td>
				
				<td> <select  name="select_col" >
						<option value="id_produit">id_produit</option>
						<option value="libelle">libelle</option>
						<option value="prix">prix</option>
					 </select>
				</td>
			</tr>
			<tr>
				<td>rechercher</td> 
				<td><input type="text" name="rechercher" required></td>
				<td  ><input type="submit" value='Ok' class="button1"></td>
			</tr>
		</table>
	</form>


<table id="table_affiche" >

		<tr> 	
			<th width="22.9%"> Id_produit </th>
			<th width="22.9%"> Libelle </th>
			<th width="22.9%"> Prix </th>
		</tr>
		<?php while($produit = mysqli_fetch_assoc($rs)){ ?>
        <tr>
			<td> <?php echo $produit['id_produit'] ;?></td>
			<td> <?php echo $produit['libelle'] ;?></td>
			<td> <?php echo $produit['prix'] ;?></td>
			<td id="p1" > <a href="../produits/updatepro.php ?code=<?php  echo $produit['id_produit']; ?>"><img alt="modifier" src="../photo/edit.png" title="Modifier"></a></td>
			<td id="p1"> <a href="../produits/deletepro.php?code=<?php echo $produit['id_produit'] ;?>" onclick="return(confirm('Voullez-vous vraiment supprimer !!'))" ><img src="../photo/delete.png" title="Supprimer"></a></td>
		</tr>
		<?php } ?>
		
</table>
<?php mysqli_close($conn); ?>
</body>
</html>