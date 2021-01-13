<?php
     //pour afficher alert de supprimer produit !!!
	if(isset($_COOKIE['testsup'])){
		setcookie('testsup',0,time()-2,'/');
?>
	<script>
		alert("le produit et supprimer ! ");
	</script>
<?php } ?>

<?php
     //pour afficher alert de modifier produit !!!
	if(isset($_COOKIE['testmod'])){
		setcookie('testmod',0,time()-2,'/');
?>
	<script>
		alert("le produit et MOdifier ! ");
	</script>
		<?php  } ?>


<?php
     //pour afficher alert de ajouet produit !!!
	if( isset($_COOKIE['testajou']) ){
?>
	<script>
		alert("le produit a eter AJouter ! ");
	</script>
<?php } setcookie('testajou',0,time()-2,'/'); ?>
