<?php /* Smarty version Smarty-3.1.7, created on 2012-05-03 16:54:30
         compiled from "style/templates\login.html" */ ?>
<?php /*%%SmartyHeaderCode:322514f89ec84789f21-02509616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe247c8b88f87fecea970a5f6868d2e4bea379e3' => 
    array (
      0 => 'style/templates\\login.html',
      1 => 1336064069,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '322514f89ec84789f21-02509616',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f89ec847fe60',
  'variables' => 
  array (
    'url' => 0,
    'images' => 0,
    'lang' => 0,
    'msg' => 0,
    'portal_url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f89ec847fe60')) {function content_4f89ec847fe60($_smarty_tpl) {?><h1><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['images']->value;?>
logo.png" alt="LiberumCMS"></a></h1>
<div id="login">
	<h2>
		<?php echo $_smarty_tpl->tpl_vars['lang']->value['please_login'];?>

	</h2>
	<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)){?><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<?php }?>
	<form action="" method="post">
		<p>
			<label for="fnick"><?php echo $_smarty_tpl->tpl_vars['lang']->value['username'];?>
: </label>
			<input type="text" name="nick" id="fnick">
		</p>
		<p>
			<label for="fpass"><?php echo $_smarty_tpl->tpl_vars['lang']->value['password'];?>
: </label>
			<input type="password" name="pass" id="fpass">
		</p>
		<p>
			<input type="submit" name="login" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['login'];?>
">
			<label><?php echo $_smarty_tpl->tpl_vars['lang']->value['or'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['portal_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['back_to_portal'];?>
</a></label>
		</p>
	</form>
</div><?php }} ?>