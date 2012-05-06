<?php /* Smarty version Smarty-3.1.7, created on 2012-04-29 00:29:27
         compiled from "include/styles/default/templates\nav.html" */ ?>
<?php /*%%SmartyHeaderCode:217854f9c8b67c17852-65467407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f59ca75a9247f3d9ecf73b47e071f31597e4f280' => 
    array (
      0 => 'include/styles/default/templates\\nav.html',
      1 => 1334428547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '217854f9c8b67c17852-65467407',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'lang' => 0,
    'menu' => 0,
    'element' => 0,
    'furl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f9c8b67d02f6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9c8b67d02f6')) {function content_4f9c8b67d02f6($_smarty_tpl) {?><ul id="nav">
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['homepage'];?>
</a></li>
	<?php  $_smarty_tpl->tpl_vars['element'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['element']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['element']->key => $_smarty_tpl->tpl_vars['element']->value){
$_smarty_tpl->tpl_vars['element']->_loop = true;
?>
		<?php if ($_smarty_tpl->tpl_vars['element']->value['type']=='page'){?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['furl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['element']->value['page']['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['element']->value['name'];?>
</a>
		<?php }else{ ?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['element']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['element']->value['name'];?>
</a>
		<?php }?>
	<?php } ?>
</ul><?php }} ?>