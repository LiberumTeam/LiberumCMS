<?php /* Smarty version Smarty-3.1.7, created on 2012-04-27 19:24:50
         compiled from "styles/default/templates\header.html" */ ?>
<?php /*%%SmartyHeaderCode:29114f610939e02e96-80078018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '223368c25693df9209f40a914bb66f5151aef11e' => 
    array (
      0 => 'styles/default/templates\\header.html',
      1 => 1335554687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29114f610939e02e96-80078018',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f610939ebd9b',
  'variables' => 
  array (
    'lang' => 0,
    'cfg' => 0,
    'version' => 0,
    'style_dir' => 0,
    'img_dir' => 0,
    'title' => 0,
    'url' => 0,
    'sitetitle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f610939ebd9b')) {function content_4f610939ebd9b($_smarty_tpl) {?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value['cfg_codename'];?>
">
<head>
	<meta charset="<?php echo $_smarty_tpl->tpl_vars['lang']->value['cfg_charset'];?>
">
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['description'];?>
">
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['keywords'];?>
">
	<meta name="generator" content="LiberumCMS <?php echo $_smarty_tpl->tpl_vars['version']->value;?>
">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['style_dir']->value;?>
style.css">
	<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
favicon.ico">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
	<h1 id="header">
		<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
			<img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['sitetitle']->value;?>
">
		</a>
	</h1><?php }} ?>