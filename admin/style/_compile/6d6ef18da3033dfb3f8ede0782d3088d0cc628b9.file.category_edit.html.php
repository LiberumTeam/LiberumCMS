<?php /* Smarty version Smarty-3.1.7, created on 2012-05-02 15:38:19
         compiled from "style/templates\category_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:238024fa15128cbd025-07421236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d6ef18da3033dfb3f8ede0782d3088d0cc628b9' => 
    array (
      0 => 'style/templates\\category_edit.html',
      1 => 1335973052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238024fa15128cbd025-07421236',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4fa15128d919f',
  'variables' => 
  array (
    'lang' => 0,
    'msg' => 0,
    'category' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa15128d919f')) {function content_4fa15128d919f($_smarty_tpl) {?><h2><?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
</h2>
<?php if (!empty($_smarty_tpl->tpl_vars['msg']->value)){?><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<?php }?>
<form action="" method="post">
	<p>
		<label for="ftitle"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
: </label>
		<input type="text" name="title" id="ftitle" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_title'];?>
">
	</p>
	<p>
		<label for="furl"><?php echo $_smarty_tpl->tpl_vars['lang']->value['niceurl'];?>
:<br><br></label>
		<input type="text" name="url" id="furl" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['category_url'];?>
">
	</p>
	<p>
		<label for="fdesc"><?php echo $_smarty_tpl->tpl_vars['lang']->value['description'];?>
 (HTML):<br><br></label>
		<textarea name="desc" id="fdesc"><?php echo $_smarty_tpl->tpl_vars['category']->value['category_description'];?>
</textarea>
	</p>
	<p>
		<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
" name="category_edit">
		<label><?php echo $_smarty_tpl->tpl_vars['lang']->value['or'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
posts/categories/"><?php echo $_smarty_tpl->tpl_vars['lang']->value['back'];?>
</a></label>
	</p>
</form><?php }} ?>