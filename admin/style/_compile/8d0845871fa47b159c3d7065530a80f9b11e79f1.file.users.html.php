<?php /* Smarty version Smarty-3.1.7, created on 2012-05-05 10:50:04
         compiled from "style/templates\users.html" */ ?>
<?php /*%%SmartyHeaderCode:283794fa1b96566a8f1-97537197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d0845871fa47b159c3d7065530a80f9b11e79f1' => 
    array (
      0 => 'style/templates\\users.html',
      1 => 1336214944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '283794fa1b96566a8f1-97537197',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4fa1b96590f03',
  'variables' => 
  array (
    'lang' => 0,
    'msg' => 0,
    'url' => 0,
    'users' => 0,
    'user' => 0,
    'icons' => 0,
    'thispage' => 0,
    'nextpage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa1b96590f03')) {function content_4fa1b96590f03($_smarty_tpl) {?><h2><?php echo $_smarty_tpl->tpl_vars['lang']->value['users'];?>
</h2>
<?php if (!empty($_smarty_tpl->tpl_vars['msg']->value)){?><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<?php }?>
<br>
<div>
	<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
users/add/" class="button"><?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
</a><br><br>
	<table>
		<tr class="thead">
			<td colspan="5"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['users'];?>
</b></td>
		</tr>
		<tr class="thead2">
			<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['nick'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['group'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['description'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['action'];?>
</td>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
		<tr>
			<td class="twidth"><b><?php echo $_smarty_tpl->tpl_vars['user']->value['styleusername'];?>
</b> [#<?php echo $_smarty_tpl->tpl_vars['user']->value['uid'];?>
]</td>
			<td class="twidth"><b><?php echo $_smarty_tpl->tpl_vars['user']->value['stylegroup'];?>
</b> [#<?php echo $_smarty_tpl->tpl_vars['user']->value['gid'];?>
]</td>
			<td><?php echo $_smarty_tpl->tpl_vars['user']->value['user_description'];?>
</td>
			<td class="twidth buttons">
				<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
users/edit/<?php echo $_smarty_tpl->tpl_vars['user']->value['uid'];?>
" original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
edit.png"></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
users/delete/<?php echo $_smarty_tpl->tpl_vars['user']->value['uid'];?>
" original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
delete.png"></a>
			</td>
		</tr>
		<?php } ?>
	</table>
	<div class="pagin">
		<hr>
		<?php if ($_smarty_tpl->tpl_vars['thispage']->value>1){?><a class="prev" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
users/?page=<?php echo $_smarty_tpl->tpl_vars['thispage']->value-1;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['prevpage'];?>
</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['nextpage']->value){?><a class="next" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
users/?page=<?php echo $_smarty_tpl->tpl_vars['thispage']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nextpage'];?>
</a><?php }?>
	</div>
</div><?php }} ?>