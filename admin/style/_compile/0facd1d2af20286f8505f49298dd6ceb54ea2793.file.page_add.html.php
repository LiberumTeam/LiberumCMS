<?php /* Smarty version Smarty-3.1.7, created on 2012-05-01 09:47:30
         compiled from "style/templates\page_add.html" */ ?>
<?php /*%%SmartyHeaderCode:234574f9fb1103f9d41-89616417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0facd1d2af20286f8505f49298dd6ceb54ea2793' => 
    array (
      0 => 'style/templates\\page_add.html',
      1 => 1335865648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '234574f9fb1103f9d41-89616417',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f9fb11052c5e',
  'variables' => 
  array (
    'lang' => 0,
    'msg' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9fb11052c5e')) {function content_4f9fb11052c5e($_smarty_tpl) {?><h2><?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
</h2>
<?php if (!empty($_smarty_tpl->tpl_vars['msg']->value)){?><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<?php }?>
<form action="" method="post">
	<p>
		<label for="ftitle"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
:</label>
		<input type="text" name="title" id="ftitle">
	</p>
	<p>
		<label for="fformatting"><?php echo $_smarty_tpl->tpl_vars['lang']->value['formatting'];?>
:</label>
		<select name="formatting" id="fformatting">
			<option value="bbcode">BBCode</option>
			<option value="html">HTML</option>
		</select>
	</p>
	<p>
		<label for="fcomments"><?php echo $_smarty_tpl->tpl_vars['lang']->value['comments'];?>
:</label>
		<select name="comments" id="fcomments">
			<option value="1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
</option>
			<option value="0"><?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>
</option>
		</select>
	</p>
	<p>
		<label><?php echo $_smarty_tpl->tpl_vars['lang']->value['bonus_options'];?>
:</label><br>
		<input type="checkbox" name="accept" value="1" id="faccept"> <label for="faccept"><?php echo $_smarty_tpl->tpl_vars['lang']->value['accept_now'];?>
</label>
	</p>
	<p>
		<div id="fcontentd"><textarea id="fcontent" name="content" cols="1" rows="1" class="editor"></textarea></div>
		<textarea id="fcontent2" disabled="disabled" name="content" cols="60" rows="20" style="display: none;"></textarea>
	</p>
	<p>
		<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
!" name="page_add">
		<label><?php echo $_smarty_tpl->tpl_vars['lang']->value['or'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
posts/pages/"><?php echo $_smarty_tpl->tpl_vars['lang']->value['back'];?>
</a></label>
	</p>
</form><?php }} ?>