<?php
/* Smarty version 3.1.30, created on 2018-10-10 14:41:16
  from "C:\xampp\htdocs\forage\view\client\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bbdf36c07ed21_96836573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93d2cdedff223ca65b664f389dadf581ff38118f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\forage\\view\\client\\index.html',
      1 => 1539175083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbdf36c07ed21_96836573 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Gestion Clients</title>
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/favicon.ico">
</head>

	 <div class="nav navbar navbar-default navbar-fixed-top">
      <ul class="nav navbar-nav">
        <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/index">Accueil </a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/add">Ajouter Un Client</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Client/liste">Liste des clients</a></li>
      </ul>
    </div>
<body>
	<h1 style="text-align: center; margin-top: 100px">Gestion des Clients et Abonnements</h1>

	<p style="text-align: center; margin-left: 80px; margin-right: 80px;"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</body>
</html><?php }
}
