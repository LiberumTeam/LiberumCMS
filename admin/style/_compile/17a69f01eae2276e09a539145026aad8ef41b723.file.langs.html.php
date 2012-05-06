<?php /* Smarty version Smarty-3.1.7, created on 2012-04-22 16:13:47
         compiled from "style/templates\langs.html" */ ?>
<?php /*%%SmartyHeaderCode:280144f942d6a264fd6-00035638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17a69f01eae2276e09a539145026aad8ef41b723' => 
    array (
      0 => 'style/templates\\langs.html',
      1 => 1335111226,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '280144f942d6a264fd6-00035638',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f942d6a44b48',
  'variables' => 
  array (
    'lang' => 0,
    'msg' => 0,
    'langs' => 0,
    'l' => 0,
    'cfg' => 0,
    'url' => 0,
    'icons' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f942d6a44b48')) {function content_4f942d6a44b48($_smarty_tpl) {?><h2><?php echo $_smarty_tpl->tpl_vars['lang']->value['langs'];?>
</h2>
<p>
	<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)){?><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<br><?php }?>
	<table>
		<tr class="thead">
			<td colspan="3"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['langs'];?>
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
		<?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['langs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>
			<tr<?php if ($_smarty_tpl->tpl_vars['l']->value['file']==$_smarty_tpl->tpl_vars['cfg']->value['lang']){?> class="tthis"<?php }?>>
				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['cfg_fullname'];?>
 (<?php echo $_smarty_tpl->tpl_vars['l']->value['cfg_codename'];?>
)<?php if ($_smarty_tpl->tpl_vars['l']->value['file']==$_smarty_tpl->tpl_vars['cfg']->value['lang']){?> <b>(<?php echo $_smarty_tpl->tpl_vars['lang']->value['current'];?>
)</b><?php }?></td>
				<td><?php echo $_smarty_tpl->tpl_vars['l']->value['cfg_author'];?>
</td>
				<td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
langs/set/<?php echo $_smarty_tpl->tpl_vars['l']->value['file'];?>
">
					<img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
/lang.png" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['set'];?>
">
				</a></td>
			</tr>
		<?php } ?>
	</table>
</p><?php }} ?>