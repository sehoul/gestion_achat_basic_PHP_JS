<?php
	require_once('../connection.php');
	// count les ligne de la table
	$req1 = "select max(id_produit) as mx from produits";
	$rs1 = mysqli_query($conn,$req1) or die(mysqli_error());
	$count = mysqli_fetch_assoc($rs1);
	$count['mx']++;
?>
<html>
<style type="text/css">
body {			background-image: url("../photo/ground.png");
			background-repeat: no-repeat;
			background-size: cover; 
			background-attachment : fixed; }
table {
	position: absolute;
	top: 40%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 400px;
	padding: 40px;
	box-sizing: border-box;
	box-shadow: 0 15px 25px rgba(0,0,0,0.5);
	border-radius: 10px;
}
th{
	color: #131843;
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
<body>
		<form method ="POST" action="insertproduits.php">
		<table >
		<tr> 	
			<th> id_produit </th>
			<td> <input type="text" value="<?php echo $count['mx']; ?>" name="id" readonly></td>
		</tr>
		<tr> 
			<th> libelle </th>
			<td> <input type="text" name="libelle"   required='true'>  </td>
         </tr>
		<tr> 
			<th> prix </th> 
			<td> <input type="text"   name="prix" required='true'>  </td>
		</tr>
		<tr> 
			<td><input type="submit" value="valider" class="button1"></td>
			<td> <input type="reset" value="Annuler" class="button1">  </td>
		</tr>
	</table>
	</form>
	
<?php mysqli_close($conn); ?>
</body>
</html>