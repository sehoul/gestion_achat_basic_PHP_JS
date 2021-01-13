<?php 
	$code = $_GET['code'];
	require_once('../connection.php');
	$req = "select *from achat where id_achat=$code ";
	$rs = mysqli_query($conn,$req) or die(mysqli_error());
	$result=mysqli_fetch_assoc($rs);
	
	
	
?>
<html>
   <style type="text/css">
body {
			background-image: url("../photo/ground.png");
			background-repeat: no-repeat;
			background-size: cover; 
			background-attachment : fixed;
	}
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
	<form method ="POST" action="modifier_achats.php">
		<table >
		<tr> 	
			<th> id_achat </th>
			<td> <input type="text" value="<?php echo $result['id_achat']; ?>" name="id" readonly></td>
		</tr>
		<tr> 
			<th> id_acheteur </th>
			<td> <input type="text" value="<?php echo $result['id_acheteur']; ?>" name="id_acheteur"  required="true" >  </td>
         </tr>
		<tr> 
			<th> id_produit </th> 
			<td> <input type="text" value="<?php echo $result['id_produit']; ?>"  name="id_produit" required="true" >  </td>
		</tr>
		<tr> 
			<td><input type="submit" value="valider" class="button1"></td>
			<td> <input type="reset" value="Annuler" class="button1" >  </td>
		</tr>
	</table>
	</form>
	<?php mysqli_close($conn); ?>
</body>
</html>