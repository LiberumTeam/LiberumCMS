<?php /* Smarty version Smarty-3.1.7, created on 2012-05-01 11:51:15
         compiled from "style/templates\header.html" */ ?>
<?php /*%%SmartyHeaderCode:254014f89eab15856f1-62059185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f40daac1af42a817c1c9af0fb6d1542e6c531ccb' => 
    array (
      0 => 'style/templates\\header.html',
      1 => 1335873072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '254014f89eab15856f1-62059185',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f89eab1bf984',
  'variables' => 
  array (
    'lang' => 0,
    'style' => 0,
    'js' => 0,
    'images' => 0,
    'user' => 0,
    'portal_url' => 0,
    'cfg' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f89eab1bf984')) {function content_4f89eab1bf984($_smarty_tpl) {?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value['cfg_codename'];?>
">
<head>
	<meta charset="<?php echo $_smarty_tpl->tpl_vars['lang']->value['cfg_charset'];?>
">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
index.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
tipsy.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
js/editor/skins/markitup/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
js/editor/sets/default/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
jquery.jqplot.css">
	<link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['images']->value;?>
favicon.ico">
	<title>LiberumACP</title>
</head>
<body>
	<?php if ($_smarty_tpl->tpl_vars['user']->value){?>
	<div id="head">
		<img src="<?php echo $_smarty_tpl->tpl_vars['images']->value;?>
icon.png" alt="">
        <?php echo $_smarty_tpl->tpl_vars['lang']->value['hello'];?>
 <b><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</b>! -
        <a href="<?php echo $_smarty_tpl->tpl_vars['portal_url']->value;?>
" class="navno"><?php echo $_smarty_tpl->tpl_vars['lang']->value['back_to'];?>
 "<?php echo $_smarty_tpl->tpl_vars['cfg']->value['sitetitle'];?>
"</a> -
		<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
logout" class="navno"><?php echo $_smarty_tpl->tpl_vars['lang']->value['logout'];?>
</a>
	</div>
	<?php }?>
	<div id="box"><?php }} ?>