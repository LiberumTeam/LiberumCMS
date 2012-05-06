<?php /* Smarty version Smarty-3.1.7, created on 2012-04-24 15:36:45
         compiled from "style/templates\bans.html" */ ?>
<?php /*%%SmartyHeaderCode:120034f964da04eb387-83358320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cac1cf4238e81b1a5b0e01e957638e9cb37d67c' => 
    array (
      0 => 'style/templates\\bans.html',
      1 => 1335281206,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120034f964da04eb387-83358320',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f964da0534b1',
  'variables' => 
  array (
    'lang' => 0,
    'msg' => 0,
    'bans' => 0,
    'ban' => 0,
    'url' => 0,
    'icons' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f964da0534b1')) {function content_4f964da0534b1($_smarty_tpl) {?><h2><?php echo $_smarty_tpl->tpl_vars['lang']->value['bans'];?>
</h2>
<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)){?><p><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p><?php }?>
<h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
</h3>
<form action="" method="post">
	<p>
		<label for="fip"><?php echo $_smarty_tpl->tpl_vars['lang']->value['ip'];?>
:</label>
		<input type="text" name="ip" id="fip">
	</p>
	<p>
		<label for="freason"><?php echo $_smarty_tpl->tpl_vars['lang']->value['reason'];?>
:</label>
		<input type="text" name="reason" id="freason">
	</p>
	<p>
		<input type="submit" name="ban" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
">
	</p>
</form>
<h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['list'];?>
</h3>
<table>
	<tr class="thead">
		<td colspan="3"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['bans'];?>
</b></td>
	</tr>
	<tr class="thead2">
		<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['ip'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['reason'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['action'];?>
</td>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['ban'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ban']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bans']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ban']->key => $_smarty_tpl->tpl_vars['ban']->value){
$_smarty_tpl->tpl_vars['ban']->_loop = true;
?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['ban']->value['ip'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['ban']->value['reason'];?>
</td>
		<td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
bans/unban/<?php echo $_smarty_tpl->tpl_vars['ban']->value['bid'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
accept.png" alt="<?php echo $_smarty_tpl->tpl_vars['lang']->value['unban'];?>
"></a></td>
	</tr>
	<?php } ?>
</table><?php }} ?>