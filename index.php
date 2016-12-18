<?php

// Connexion
require '/lib/connexion.php';

// Couper le texte
require'/lib/helper.php'; 
$cutText = new Helper();

// si page pas setté, afficher accueil
if(!isset($_GET['page'])){
    $_GET['page']='accueil';

}

require '/sql/reqPages.php';

require __DIR__.'/includes/header.inc.php'; // Constante (retourne le chemin absolu)

//echo $page->content;
// si page accueil, afficher carousel
if($_GET['page']=='accueil'){
	echo $page->content;
	require '/includes/slider.php';

	//Afficher les dernières news sous le carousel
	require '/sql/reqNews.php';
	require '/includes/lastNews.php';

}

require __DIR__.'/includes/footer.inc.php';
