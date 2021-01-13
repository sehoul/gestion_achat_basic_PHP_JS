<?php
     //pour afficher alert de supprimer produit !!!
	if(isset($_COOKIE['acheteur_sup'])){
		setcookie('acheteur_sup',0,time()-2,'/');
?>
	<script>
		alert("le produit et supprimer ! ");
	</script>
<?php } ?>

<?php
     //pour afficher alert de modifier produit !!!
	if(isset($_COOKIE['acheteur_mod'])){
		setcookie('acheteur_mod',0,time()-2,'/');
?>
	<script>
		alert("le produit et MOdifier ! ");
	</script>
		<?php  } ?>


<?php
     //pour afficher alert de ajouet produit !!!
	if( isset($_COOKIE['acheteur_ajou']) ){
?>
	<script>
		alert("le produit a eter AJouter ! ");
	</script>
<?php } setcookie('acheteur_ajou',0,time()-2,'/'); ?>
