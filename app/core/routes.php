<?php

Router::addRoute('/', 'home.php');
Router::addRouteApi('connexion/', 'login.php');
Router::addRouteApi('deconnexion/', 'disconnect.php');
Router::addRouteApi('apiTest/', 'pathologies.php');
Router::addRouteApi('login/', 'login.php');
