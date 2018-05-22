<?php
require('./smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->display('./pages/home.html');