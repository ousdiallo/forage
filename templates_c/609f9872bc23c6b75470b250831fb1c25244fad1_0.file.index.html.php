<?php
/* Smarty version 3.1.30, created on 2018-10-10 19:03:43
  from "C:\xampp\htdocs\forage\view\compteur\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5bbe30efbba096_27761106',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '609f9872bc23c6b75470b250831fb1c25244fad1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\forage\\view\\compteur\\index.html',
      1 => 1539191020,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bbe30efbba096_27761106 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Accueil</title>
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
	<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/jquery.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/bootstrap.js"><?php echo '</script'; ?>
>

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
Client/index">Gestion des Clients</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Village/index">Gestion des Village</a></li>        
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/index2">Gestion des Compteurs et Consommations</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Facture/index">Gestion des Factures et Reglements</a></li>
      </ul>
    </div>
<body style="margin-top: 100px;">

	<?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
		<?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
	<div class="alert alert-success alert-dismissible" style="width: 50%; margin-left: 25%;">
	   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	   <strong>Success!</strong> Les Factures ont été générées dans la base de données
	 </div>
	 	
	 	<?php }?>
	 <?php }?>
	
					
			
	<h1 style="text-align: center; margin-top: 100px;"> Gestion des Compteurs</h1>

	<p style="text-align: center; margin-left: 100px; margin-right: 100px">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>

</body>
</html><?php }
}
