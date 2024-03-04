<?php

// Définissez la variable $activePage en fonction de la page actuellement affichée
$activePage = 'acceuil'; // Par défaut, définissez la page d'accueil comme active

// Vérifiez si la clé "route" existe dans $_GET avant de l'utiliser
if (isset($_GET['route'])) {
    if ($_GET['route'] === 'quisommesnous') {
        $activePage = 'quisommesnous';
    } elseif ($_GET['route'] === 'notrehistoire') {
        $activePage = 'notrehistoire';
    } elseif ($_GET['route'] === 'contextenational') {
        $activePage = 'contextenational';
    } elseif ($_GET['route'] === 'structuressanitaires') {
        $activePage = 'structuressanitaires';
    } elseif ($_GET['route'] === 'notregouvernance') {
        $activePage = 'notregouvernance';
    } elseif ($_GET['route'] === 'partenaires') {
        $activePage = 'partenaires';
    } elseif ($_GET['route'] === 'evenements') {
        $activePage = 'evenements';
    } elseif ($_GET['route'] === 'detail_evenement') {
      $activePage = 'evenements';
      
  } elseif ($_GET['route'] === 'articles') {
        $activePage = 'articles';
    } 
    elseif ($_GET['route'] === 'detail_article') {
      $activePage = 'articles';
  } elseif ($_GET['route'] === 'projets') {
        $activePage = 'projets';
    } elseif ($_GET['route'] === 'contact') {
        $activePage = 'contact';
    }
    elseif ($_GET['route'] === 'contact_success') {
      $activePage = 'contact';
  }
    elseif ($_GET['route'] === 'activites') {
      $activePage = 'activites';
  }
  elseif ($_GET['route'] === 'detail_activite') {
    $activePage = 'activites';
}
}

// Utilisez la variable $activePage pour déterminer quelle page est active dans votre menu
?>