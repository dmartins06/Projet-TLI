<?php

Router::addRoute('/', 'home.php');
Router::addRoute('enregistrer/', 'signup.php');
Router::addRoute('contact/', 'contact.php');
Router::addRoute('recherche/', 'recherche.php');
Router::addRoute('apiList/', 'apiList.php');
Router::addRoute('search/', 'searchPatho.php');

Router::addRouteApi('rechercheParKeyWord/', 'recherche.php');
Router::addRouteApi('connexion/', 'login.php');
Router::addRouteApi('signup/', 'signup.php');
Router::addRouteApi('deconnexion/', 'disconnect.php');
Router::addRouteApi('pathologies/', 'pathologies.php');
Router::addRouteApi('symptomes/', 'symptomes.php');
Router::addRouteApi('meridiens/', 'meridiens.php');
Router::addRouteApi('rechercheParCritere/', 'apiPatho.php');
Router::addRouteApi('types/', 'apiType.php');
