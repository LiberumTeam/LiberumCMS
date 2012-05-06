<?php /* Smarty version Smarty-3.1.7, created on 2012-04-24 15:44:52
         compiled from "styles/default/templates\ban.html" */ ?>
<?php /*%%SmartyHeaderCode:269224f96ca3c5bb723-26776615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e01f2c472ae85fb0d2b569ad3d85412ca241566' => 
    array (
      0 => 'styles/default/templates\\ban.html',
      1 => 1335282290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '269224f96ca3c5bb723-26776615',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f96ca3c630e6',
  'variables' => 
  array (
    'lang' => 0,
    'ban' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f96ca3c630e6')) {function content_4f96ca3c630e6($_smarty_tpl) {?><h2><?php echo $_smarty_tpl->tpl_vars['lang']->value['you_are_banned'];?>
</h2>
<p>
	<?php echo $_smarty_tpl->tpl_vars['lang']->value['you_are_banned'];?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value['reason'];?>
:<br><br>
	<em><?php echo $_smarty_tpl->tpl_vars['ban']->value['reason'];?>
</em>
</p><?php }} ?>