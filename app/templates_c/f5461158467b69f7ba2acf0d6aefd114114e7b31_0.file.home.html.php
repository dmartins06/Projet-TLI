<?php
/* Smarty version 3.1.30, created on 2018-05-22 18:55:59
  from "/var/www/html/pages/home.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b0467bf542b74_28358348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f5461158467b69f7ba2acf0d6aefd114114e7b31' => 
    array (
      0 => '/var/www/html/pages/home.html',
      1 => 1527014757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:pages/base.html' => 1,
  ),
),false)) {
function content_5b0467bf542b74_28358348 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2279634865b0467bf5421b3_24987114', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:pages/base.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'content'} */
class Block_2279634865b0467bf5421b3_24987114 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<h1>
    Bienvenue l'acupuncture pour les nuls.
</h1>

<p>
    L’acupuncture ou acuponcture (du latin médical du XVIIe siècle « acupunctura » formé de acus, « aiguille » et
    punctura, « piqûre ») est un système thérapeutique dont les origines historiques sont très liées avec la
    tradition médicale chinoise.
</p>
<p>
    L'acupuncture consiste en une stimulation de zones précises de l'épiderme : les
    « points d’acupuncture ». Les techniques de stimulation des points d’acupuncture sont effectuées avec des moyens
    divers : des aiguilles le plus souvent, mais aussi d'autres moyens physiques (mécaniques, électriques, magnétiques,
    thermiques, lumineux) ou physico-chimiques, voire d'autres méthodes alternatives dangereuses (apipuncture,
    apithérapie avec des piqûres d'abeille).
</p>
<p>
    Ce site est là pour vous donner des informations sur l'acupuncture et vous pourrez trouver un catalogue
    complet de pathologies ainsi que leurs symptomes. Cliquez sur l'onglet "liste pathologies" du menu pour y accéder.
</p>
<?php
}
}
/* {/block 'content'} */
}
