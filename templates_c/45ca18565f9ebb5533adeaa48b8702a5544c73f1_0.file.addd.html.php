<?php
/* Smarty version 3.1.30, created on 2018-09-25 13:13:28
  from "C:\xampp\htdocs\forage\view\compteur\addd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5baa1858310ef8_10724348',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45ca18565f9ebb5533adeaa48b8702a5544c73f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\forage\\view\\compteur\\addd.html',
      1 => 1537874000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5baa1858310ef8_10724348 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Compteur</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
		<style>
			h1{ 
				color: #40007d;
			}
		</style>
	</head>
	<body>
		<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.jpg" class="resize" />
		<div class="nav navbar navbar-default navbar-fixed-top">
			<ul class="nav navbar-nav">
				<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Menu page test</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Menu page test 2</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">Menu page test liste</a></li>
			</ul>
		</div>
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
			<div class="panel panel-info">
				<div class="panel-heading">AJOUT D'UN COMPTEUR CLIENT</div>
				<div class="panel-body">			
							
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Compteur/addd">
						<div class="form-group">
							<label class="control-label">ID Compteur</label>
							<input class="form-control" type="text" name="idCompteur" id="idCompteur"/>
						</div>
						<div class="form-group">
							<label class="control-label">Compteur</label>
							<input class="form-control" type="text" name="compteur" id="compteur"/>
						</div>
						<!-- <div class="form-group">
							<label class="control-label">Etat</label>
							<input class="form-control" type="text" name="etatCompteur" id="etatCompteur"/>
						</div> -->
						<div class="form-group">
						    <label for="control-label"> Etat du Compteur</label>
						    <select id="etatCompteur" name="etatCompteur" class="form-control">
						        <option value="">-------------</option>						      	
						      		<option value="1"> Marche</option>
						      		<option value="0"> Arret</option>						      	
						    </select>
						  </div>
						<div class="form-group">
							<label class="control-label">Client</label>
							<input class="form-control" type="text" name="idClient" id="idClient"/>
						</div>
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="valider" value="Envoyer"/>
							<input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html><?php }
}
