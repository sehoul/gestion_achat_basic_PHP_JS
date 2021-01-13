<?php
     //pour afficher alert de supprimer produit !!!
	if(isset($_COOKIE['achat_sup'])){
		setcookie('achat_sup',0,time()-2,'/');
?>
	<script>
		alert("le produit et supprimer ! ");
	</script>
<?php } ?>

<?php
     //pour afficher alert de modifier produit !!!
	if(isset($_COOKIE['achat_mod'])){
		setcookie('achat_mod',0,time()-2,'/');
?>
	<script>
		alert("le produit et MOdifier ! ");
	</script>
		<?php  } ?>


<?php
     //pour afficher alert de ajouet produit !!!
	if( isset($_COOKIE['achat_ajou']) ){
?>
	<script>
		alert("le produit a eter AJouter ! ");
	</script>
<?php } setcookie('achat_ajou',0,time()-2,'/'); ?>
