<?php /* Smarty version Smarty-3.1.7, created on 2012-04-29 00:29:27
         compiled from "include/styles/default/templates\header.html" */ ?>
<?php /*%%SmartyHeaderCode:113604f9c8b67b0b424-80490200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7458d53f787ef38cb4f3bbf6e9c08b5d3ebda749' => 
    array (
      0 => 'include/styles/default/templates\\header.html',
      1 => 1335554687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113604f9c8b67b0b424-80490200',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f9c8b67be6e7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9c8b67be6e7')) {function content_4f9c8b67be6e7($_smarty_tpl) {?><!DOCTYPE html>
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