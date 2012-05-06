<?php /* Smarty version Smarty-3.1.7, created on 2012-05-05 09:57:37
         compiled from "style/templates\user_add.html" */ ?>
<?php /*%%SmartyHeaderCode:32494fa4f7a56afd67-46965369%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '656f4c30dd1679288e27ea39592b90ee59136857' => 
    array (
      0 => 'style/templates\\user_add.html',
      1 => 1336211855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32494fa4f7a56afd67-46965369',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4fa4f7a58517a',
  'variables' => 
  array (
    'lang' => 0,
    'msg' => 0,
    'groups' => 0,
    'group' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa4f7a58517a')) {function content_4fa4f7a58517a($_smarty_tpl) {?><h2><?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
</h2>
<?php if (!empty($_smarty_tpl->tpl_vars['msg']->value)){?><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<?php }?>
<form action="" method="post">
	<p>
		<label for="fnick"><?php echo $_smarty_tpl->tpl_vars['lang']->value['username'];?>
:</label>
		<input type="text" name="nick" id="fnick">
	</p>
	<p>
		<label for="fpassword"><?php echo $_smarty_tpl->tpl_vars['lang']->value['password'];?>
:</label>
		<input type="password" name="password" id="fpassword" autocomplete="off">
	</p>
	<p>
		<label for="femail"><?php echo $_smarty_tpl->tpl_vars['lang']->value['email'];?>
:</label>
		<input type="email" name="email" id="femail">
	</p>
	<p>
		<label for="fgroup"><?php echo $_smarty_tpl->tpl_vars['lang']->value['group'];?>
:</label>
		<select name="group" id="fgroup">
			<?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value){
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['group']->value['gid'];?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</option>
			<?php } ?>
		</select>
	</p>
	<p>
		<label for="fdescription"><?php echo $_smarty_tpl->tpl_vars['lang']->value['description'];?>
:</label><br><br>
		<textarea id="fdescription" name="description" cols="1" rows="1"></textarea>
	</p>
	<p>
		<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
" name="user_add">
		<label><?php echo $_smarty_tpl->tpl_vars['lang']->value['or'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
users/"><?php echo $_smarty_tpl->tpl_vars['lang']->value['back'];?>
</a></label>
	</p>
</form><?php }} ?>