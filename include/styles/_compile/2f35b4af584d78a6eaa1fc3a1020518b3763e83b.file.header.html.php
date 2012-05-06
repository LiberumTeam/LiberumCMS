<?php /* Smarty version Smarty-3.1.7, created on 2012-03-14 22:00:05
         compiled from "K:\xampp\htdocs\lcms\styles/default/templates\header.html" */ ?>
<?php /*%%SmartyHeaderCode:204574f6106d5476bd2-03422680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f35b4af584d78a6eaa1fc3a1020518b3763e83b' => 
    array (
      0 => 'K:\\xampp\\htdocs\\lcms\\styles/default/templates\\header.html',
      1 => 1331754660,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204574f6106d5476bd2-03422680',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'lang' => 0,
    'title' => 0,
    'url' => 0,
    'img_dir' => 0,
    'sitetitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f6106d57faa2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f6106d57faa2')) {function content_4f6106d57faa2($_smarty_tpl) {?><!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value['cfg_codename'];?>
">
<head>
	<meta charset="UTF-8">
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