<?php
session_start();

// inclure le fichier de configuration
require_once './config/config.php';

// inclure les fichier de traduction selon la langue de la session
require_once './lang/'.($_SESSION['lang'] ?? 'fr') .'/translations.php';

function __($key){
	global $translations;
	return isset($translations[$key]) ? $translations[$key] : $key;
}

// definir la langue par defaut dans la session
$lang = $_GET['lang'] ?? $_SESSION['lang'] ?? 'fr';

$_SESSION['lang']= $lang;


// definir la route par defaut
$route = $_GET['route'] ?? 'acceuil';

// ce tableau regroupe toutes les pages avec les differentes routes
$views = [
	'acceuil' => './views/pages/acceuil.view.php',
	'quisommesnous' => './views/pages/quisommesnous.view.php',
	'notrehistoire' => './views/pages/notrehistoire.view.php',
	'contextenational' => './views/pages/contextenational.view.php',
	'structuressanitaires' => './views/pages/structuressanitaires.view.php',
	'notregouvernance' => './views/pages/notregouvernance.view.php',
	'articles' => './views/pages/articles.view.php',
	'projets' => './views/pages/projets.view.php',
	'contact' => './views/pages/contact.view.php',
	'partenaires' => './views/pages/partenaires.view.php',
	'evenements' => './views/pages/evenements.view.php',
	'dons' => './views/pages/dons.view.php',
	'contact_success' => './views/pages/contact_success.view.php',
	'detail_article' => './views/pages/detail_article.view.php',
	'detail_evenement' => './views/pages/detail_evenement.view.php',
	'activites' => './views/pages/activites.view.php',
	'detail_activite' => './views/pages/detail_activite.view.php',
	'equipe' => './views/pages/equipe.view.php',
	// '' => './views/pages/.view.php',
];

// verifi si la route est une cle du tableau des routes
if (array_key_exists($route, $views)){
	// si c'est le cas, il inclut la page correspondante
	include $views[$route];
}else{
	// sinon, il affiche la page d'erreur
	include './views/pages/404.view.php';
}
?>
