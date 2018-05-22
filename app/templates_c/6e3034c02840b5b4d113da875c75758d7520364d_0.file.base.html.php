<?php
/* Smarty version 3.1.30, created on 2018-05-22 19:02:42
  from "/var/www/html/pages/base.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b04695234e930_32627779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e3034c02840b5b4d113da875c75758d7520364d' => 
    array (
      0 => '/var/www/html/pages/base.html',
      1 => 1527015749,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b04695234e930_32627779 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <title>Home</title>
</head>
<body>
<div class="header">
    <img height="15%" width="15%" alt="website logo" src="images/logo.png">
    <span id="titre">
        L'ACUPUNCTURE POUR LES ZEUBS
      </span>
</div>
<div class="menu">
    <nav class="menuoptions">
        <span class="menuitem"><a href="base.html">&nbsp; Accueil &nbsp;</a></span>
        <span class="menuitem"><a href="base.html">&nbsp; Liste pathologies &nbsp;</a></span>
        <span class="menuitem"><a href="base.html">&nbsp; Contact &nbsp;</a></span>
        <span class="menuitem"><form>
          <input type="text" placeholder="Recherche pathologie">
          <button type="submit"><img src="public/images/searchicon.png" alt="search icon" height="15em"></button>
        </form></span>
    </nav>
</div>
<div class="content">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17591779145b04695234d6d2_47263173', 'content');
?>

</div>
<div class="footer">
    <p>
        Projet de Jeremy MERLE, Eloi MOUREZ, Dylan MARTINS, Maxence BARJON, Nicols ROUQUIE, Baptiste ROUX
    </p>
</div>
</body>
</html><?php }
/* {block 'content'} */
class Block_17591779145b04695234d6d2_47263173 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}
