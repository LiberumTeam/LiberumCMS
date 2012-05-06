<?php /* Smarty version Smarty-3.1.7, created on 2012-04-22 13:21:15
         compiled from "style/templates\templates.html" */ ?>
<?php /*%%SmartyHeaderCode:80364f94007adddc50-29524728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c04c82b8229fd50a69067c400ca2aa694720605' => 
    array (
      0 => 'style/templates\\templates.html',
      1 => 1335100874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80364f94007adddc50-29524728',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f94007addf3a',
  'variables' => 
  array (
    'lang' => 0,
    'msg' => 0,
    'templates' => 0,
    'template' => 0,
    'cfg' => 0,
    'url' => 0,
    'icons' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f94007addf3a')) {function content_4f94007addf3a($_smarty_tpl) {?><h2><?php echo $_smarty_tpl->tpl_vars['lang']->value['templates'];?>
</h2>
<p>
	<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)){?><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<br><?php }?>
	<table>
		<tr class="thead">
			<td colspan="3"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['templates'];?>
</b></td>
		</tr>
		<tr class="thead2">
			<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['author'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['action'];?>
</td>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value){
$_smarty_tpl->tpl_vars['template']->_loop = true;
?>
			<tr<?php if ($_smarty_tpl->tpl_vars['template']->value['folder']==$_smarty_tpl->tpl_vars['cfg']->value['style']){?> class="tthis"<?php }?>>
				<td><?php echo $_smarty_tpl->tpl_vars['template']->value['fullname'];?>
<?php if ($_smarty_tpl->tpl_vars['template']->value['folder']==$_smarty_tpl->tpl_vars['cfg']->value['style']){?> <b>(<?php echo $_smarty_tpl->tpl_vars['lang']->value['current'];?>
)</b><?php }?></td>
				<td><?php echo $_smarty_tpl->tpl_vars['template']->value['author'];?>
</td>
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
templates/set/<?php echo $_smarty_tpl->tpl_vars['template']->value['folder'];?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
/layout.png" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['set'];?>
">
				</a></td>
			</tr>
		<?php } ?>
	</table>
</p><?php }} ?>