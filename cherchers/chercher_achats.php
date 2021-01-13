<?php 
	require_once('../connection.php');
	$mo_cle="null";
	if(isset($_POST['rechercher'])){
		
		$mo_cle = $_POST['rechercher'];
	}
		if(isset($_POST['rechercher'])){
		  $col = $_POST['select_col'];
		}else{
		$col = "id_achat";
		}
		$req=" select *from achat  where $col  like '%$mo_cle%' ";
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
#button_submit{
	text-align: center;
}

	</style>



</style>
</head>
<body>
	<form method="POST" action="chercher_achats.php">
		<table>
		    <tr>
				<td>choit de colum  a rechercher</td>
				
				<td> <select  name="select_col" >
						<option value="id_achat">id_achat</option>
						<option value="id_acheteur">id_acheteur</option>
						<option value="id_produit">id_produit</option>
					 </select>
				</td>
			</tr>
			<tr>
				<td>rechercher</td> 
				<td><input type="text" name="rechercher" required></td>
				<td><input type="submit" value='Ok' class="button1"></td>
			</tr>
		</table>
	</form>


<table id="table_affiche" >

	<tr> 	
			<th> id_achat </th>
			<th colspan="3" width="26.5%"> Information acheteur</th>
			<th colspan="3"  width="26.5%" > Information produit</th>
		</tr>
		<?php while($achat = mysqli_fetch_assoc($rs)){ ?>
        <tr>
			<td> <?php echo $achat['id_achat'] ;?></td>
			
			
			<td> <?php echo $achat['id_acheteur']; ?></td>
			<td> <?php 
			        $v_achat =$achat['id_acheteur'];
					$req1 ="select * from acheteurs where id_acheteurs = $v_achat"; 
					$rs1 =mysqli_query($conn,$req1) or die(mysqli_error());
					$acheteur = mysqli_fetch_assoc($rs1);
					echo $acheteur['nom'];
					?></td>
			<td> <?php echo $acheteur['compte']; ?></td>
			
			<td> <?php echo $achat['id_produit'] ;?></td>
			<td> <?php 
			        $v_produit =$achat['id_produit'];
					$req2 ="select * from produits where id_produit = $v_produit"; 
					$rs2 =mysqli_query($conn,$req2) or die(mysql_error());
					$produit = mysqli_fetch_assoc($rs2);
					echo $produit['libelle'];
					?></td>
			<td> <?php echo $produit['prix'].'<strong> DH</strong>'; ?></td>
			
			
			<td id="p1"> <a href=" ../achats/update_achats.php ?code=<?php  echo $achat['id_achat']; ?>" ><img alt="modifier" src="../photo/edit.png" title="Modifier"></a></td>
			<td id="p1"> <a href=" ../achats/delete_achats.php ?code=<?php echo  $achat['id_achat'] ;?>" onclick="return(confirm('Voullez-vous vraiment supprimer !!'))"><img src="../photo/delete.png" title="Supprimer"></a></td>
		</tr>
		<?php } ?>
		
</table>
<?php mysqli_close($conn); ?>
</body>
</html>