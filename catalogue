# php - Réalisation d'un catalogue


<link href ="css/index.css" rel="stylesheet">
<?php
session_start();
include 'includes/header.inc.php';
include 'includes/functions.inc.php';
$connect=connect();
// connexion
if (isset($_SESSION['userId'])){
			$sql3="SELECT * FROM panier WHERE userId=".$_SESSION['userId'];
			$result3 = $connect->query($sql3);
			$total=0;
			while($val3=mysqli_fetch_array($result3)){
				$total=$total+$val3['quantite'];
			}
			echo 'Connecté en tant que <b>'.$_SESSION['user'].'</b><br/>
				  Nombre d\'articles dans le panier : '.$total.'<br/>
				  <a href="panier.php">VOIR LE PANIER</a><br/>
				  <a href="logout.php">SE DÉCONNECTER</a><br/><br/>';
	}
	else{
		include 'connect.php';
	}
// menu
$sql="SELECT * FROM categories";
$result=$connect->query($sql);
while($val=mysqli_fetch_array($result)){
	echo'<ul><li><a href="index.php?idCateg='.$val['idCategorie'].'">'.$val['categories'].'</ul></li></a>';


$sql2="SELECT * FROM souscategories WHERE categorieId=".$val['idCategorie'];
$result2=$connect->query($sql2);
while($val2=mysqli_fetch_array($result2)){
	echo' &nbsp;&nbsp;&nbsp;<a href="index.php?idSousCateg='.$val2['idSousCategorie'].'">'.$val2['sousCategories'].'</a>';
}
}

echo'<br/><br/><hr/>';

// tri menu
if(isset($_GET['idCateg'])){
	$sql="SELECT * FROM articles WHERE categorieId=".$_GET['idCateg'];
}
elseif(isset($_GET['idSousCateg'])){
	$sql="SELECT * FROM articles WHERE sousCategorieId=".$_GET['idSousCateg'];
}
else{
	$sql="SELECT * FROM articles";
}
//$sql="SELECT * FROM articles ORDER BY idArticle ASC";
$result=$connect->query($sql);

// mosaique
while($val=mysqli_fetch_array($result)){
	echo'
	<div class="vignette">
	<a href="fiche.php?id='.$val['idArticle'].'"><img src="articles/'.$val['image'].'" alt="" width="100"/></a><br/>
	'.$val['nom'].'<br/>
	<b>'.$val['prix'].'€</b>
	</div>';	 
}

include 'includes/footer.inc.php';
?>
