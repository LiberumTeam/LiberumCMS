<?php /* Smarty version Smarty-3.1.7, created on 2012-04-24 07:27:17
         compiled from "style/templates\updates.html" */ ?>
<?php /*%%SmartyHeaderCode:220794f9651664d3b80-57908025%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f59009359191266260e0f588e4e18a19222b228' => 
    array (
      0 => 'style/templates\\updates.html',
      1 => 1335252394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '220794f9651664d3b80-57908025',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f9651665207b',
  'variables' => 
  array (
    'lang' => 0,
    'ver' => 0,
    'version' => 0,
    'versionint' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9651665207b')) {function content_4f9651665207b($_smarty_tpl) {?><h2><?php echo $_smarty_tpl->tpl_vars['lang']->value['updates'];?>
</h2>
<p>
	<?php if ($_smarty_tpl->tpl_vars['ver']->value==false){?>
	<div class="error">
		<?php echo $_smarty_tpl->tpl_vars['lang']->value['cant_check_update'];?>

	</div>
	<?php }else{ ?>
	<table>
		<tr class="thead">
			<td colspan="3"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['updates'];?>
</b></td>
		</tr>
		<tr class="thead2">
			<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['youversion'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['cmsversion'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['result'];?>
</td>
		</tr>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['version']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['versionint']->value;?>
)</td>
			<td><?php echo $_smarty_tpl->tpl_vars['ver']->value['version'];?>
 (<?php echo $_smarty_tpl->tpl_vars['ver']->value['versionint'];?>
)</td>
			<td>
				<?php if ($_smarty_tpl->tpl_vars['versionint']->value==$_smarty_tpl->tpl_vars['ver']->value['versionint']||$_smarty_tpl->tpl_vars['versionint']->value>$_smarty_tpl->tpl_vars['ver']->value['versionint']){?>
					<span style="color: green;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['you_cms_is_update'];?>
</span>
				<?php }else{ ?>
					<span style="color: red;"><?php echo $_smarty_tpl->tpl_vars['lang']->value['you_cms_need_update'];?>
</span>
				<?php }?>
			</td>
		</tr>
	</table>
	<?php }?>
</p><?php }} ?>