<?php /* Smarty version Smarty-3.1.7, created on 2012-05-05 14:11:34
         compiled from "style/templates\user_edit_profile.html" */ ?>
<?php /*%%SmartyHeaderCode:165124fa53495102c04-23622631%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1609b071fddd8071aa69b4269d4eda9219ed5e1' => 
    array (
      0 => 'style/templates\\user_edit_profile.html',
      1 => 1336227093,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165124fa53495102c04-23622631',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4fa534952533a',
  'variables' => 
  array (
    'lang' => 0,
    'user' => 0,
    'msg' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa534952533a')) {function content_4fa534952533a($_smarty_tpl) {?><h2><?php echo $_smarty_tpl->tpl_vars['lang']->value['profile'];?>
: <?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</h2>
<?php if (!empty($_smarty_tpl->tpl_vars['msg']->value)){?><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<?php }?>
<form action="" method="post">
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