<?php

Router::addRoute('/', 'home.php');
Router::addRoute('enregistrer/', 'signup.php');
Router::addRoute('contact/', 'contact.php');
Router::addRouteApi('connexion/', 'login.php');
Router::addRouteApi('signup/', 'signup.php');
Router::addRouteApi('deconnexion/', 'disconnect.php');
Router::addRouteApi('apiTest/', 'pathologies.php');
