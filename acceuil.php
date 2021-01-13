<!DOCTYPE html>
<html>
<head>
  <title>Acceuil</title>
</head>
<style type="text/css">
	body{
		background-image: url("photo/ground.png");
		background-repeat: no-repeat;
		background-size : cover; 
		background-attachment : fixed;
	}
	
    li {
      list-style: none;
      float: left;
    }
    a {
      text-decoration: none;
      font-family: sans-serif;
      color: #fff;
      font-size: 20px;
      font-weight: bold;
      padding: 0 20px 0 20px;
    }
    nav{
      position: absolute;
      right: 50%;
      top: 20%;
    }
    .logo{
      font-family: sans-serif;
      font-weight: bold;
      color:#373F74;
      font-size: 20px;
      position: absolute;
      right: 80%;
      top: 10%;
    }
    a:hover
{
  color: #2A93D9;
}
footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color:transparent;
  color: #C0B25C;
  text-align: center;
}
</style>
</head>
<body>
<div class="logo">MarketESTO</div>
  <div class="head">
    <nav>
      <ul>
        <li><a href="acheteurs/afficher_acheteurs.php">Client</a></li>
        <li><a href="achats/afficher_achats.php">Achat</a></li>
        <li><a href="produits/afficher_produits.php">Produit</a></li>
      </ul>
    </nav>
  </div>
<footer>
  <p>Copyright 2019 || All Rights Reserved || designed by MAZOUZI & BELKHADIR</p>
</footer>

</body>

</html>