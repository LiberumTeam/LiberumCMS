<?php /* Smarty version Smarty-3.1.7, created on 2012-05-05 10:38:17
         compiled from "style/templates\user_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:216424fa5023de34e42-74717239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '431c9c8554af78d8bbc62fb13d6e05b9f8814c27' => 
    array (
      0 => 'style/templates\\user_edit.html',
      1 => 1336214292,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '216424fa5023de34e42-74717239',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4fa5023e076a6',
  'variables' => 
  array (
    'lang' => 0,
    'msg' => 0,
    'user' => 0,
    'groups' => 0,
    'group' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa5023e076a6')) {function content_4fa5023e076a6($_smarty_tpl) {?><h2><?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
</h2>
<?php if (!empty($_smarty_tpl->tpl_vars['msg']->value)){?><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<?php }?>
<form action="" method="post">
	<p>
		<label for="fnick"><?php echo $_smarty_tpl->tpl_vars['lang']->value['username'];?>
:</label>
		<input type="text" name="nick" id="fnick" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
">
	</p>
	<p>
		<label for="fpassword"><?php echo $_smarty_tpl->tpl_vars['lang']->value['password'];?>
:</label>
		<input type="password" name="password" id="fpassword" autocomplete="off" value="">
		<label for="fpassword" class="hint">(<?php echo $_smarty_tpl->tpl_vars['lang']->value['no_password_change'];?>
)</label>
	</p>
	<p>
		<label for="femail"><?php echo $_smarty_tpl->tpl_vars['lang']->value['email'];?>
:</label>
		<input type="email" name="email" id="femail" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
">
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
"<?php if ($_smarty_tpl->tpl_vars['user']->value['group_id']==$_smarty_tpl->tpl_vars['group']->value['gid']){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</option>
			<?php } ?>
		</select>
	</p>
	<p>
		<label for="fdescription"><?php echo $_smarty_tpl->tpl_vars['lang']->value['description'];?>
:</label><br><br>
		<textarea id="fdescription" name="description" cols="1" rows="1"><?php echo $_smarty_tpl->tpl_vars['user']->value['user_description'];?>
</textarea>
	</p>
	<p>
		<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
" name="user_edit">
		<label><?php echo $_smarty_tpl->tpl_vars['lang']->value['or'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
users/"><?php echo $_smarty_tpl->tpl_vars['lang']->value['back'];?>
</a></label>
	</p>
</form><?php }} ?>