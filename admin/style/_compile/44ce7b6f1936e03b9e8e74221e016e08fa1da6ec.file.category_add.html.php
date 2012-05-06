<?php /* Smarty version Smarty-3.1.7, created on 2012-05-02 15:18:34
         compiled from "style/templates\category_add.html" */ ?>
<?php /*%%SmartyHeaderCode:112694fa14d9aa9f984-03632638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44ce7b6f1936e03b9e8e74221e016e08fa1da6ec' => 
    array (
      0 => 'style/templates\\category_add.html',
      1 => 1335971674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112694fa14d9aa9f984-03632638',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4fa14d9aaf653',
  'variables' => 
  array (
    'lang' => 0,
    'msg' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa14d9aaf653')) {function content_4fa14d9aaf653($_smarty_tpl) {?><h2><?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
</h2>
<?php if (!empty($_smarty_tpl->tpl_vars['msg']->value)){?><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<?php }?>
<form action="" method="post">
	<p>
		<label for="ftitle"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
: </label>
		<input type="text" name="title" id="ftitle">
	</p>
	<p>
		<label for="fdesc"><?php echo $_smarty_tpl->tpl_vars['lang']->value['description'];?>
 (HTML):<br><br></label>
		<textarea name="desc" id="fdesc"></textarea>
	</p>
	<p>
		<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
" name="category_add">
		<label><?php echo $_smarty_tpl->tpl_vars['lang']->value['or'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
posts/categories/"><?php echo $_smarty_tpl->tpl_vars['lang']->value['back'];?>
</a></label>
	</p>
</form><?php }} ?>