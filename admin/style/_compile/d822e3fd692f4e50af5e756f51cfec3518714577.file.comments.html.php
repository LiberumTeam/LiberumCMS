<?php /* Smarty version Smarty-3.1.7, created on 2012-05-02 14:53:55
         compiled from "style/templates\comments.html" */ ?>
<?php /*%%SmartyHeaderCode:16574fa145ee997925-55070035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd822e3fd692f4e50af5e756f51cfec3518714577' => 
    array (
      0 => 'style/templates\\comments.html',
      1 => 1335970434,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16574fa145ee997925-55070035',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4fa145ef10c59',
  'variables' => 
  array (
    'lang' => 0,
    'msg' => 0,
    'comments' => 0,
    'portal_url' => 0,
    'furl' => 0,
    'cfg' => 0,
    'comment' => 0,
    'url' => 0,
    'thispage' => 0,
    'icons' => 0,
    'nextpage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa145ef10c59')) {function content_4fa145ef10c59($_smarty_tpl) {?><h2><?php echo $_smarty_tpl->tpl_vars['lang']->value['comments'];?>
</h2>
<?php if (!empty($_smarty_tpl->tpl_vars['msg']->value)){?><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<?php }?>
<br>
<div>
	<table>
		<tr class="thead">
			<td colspan="5"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['comments'];?>
</b></td>
		</tr>
		<tr class="thead2">
			<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['post'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['content'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['author'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['date'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['action'];?>
</td>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value){
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
		<tr>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['portal_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['furl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['cfg']->value['articleurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['comment']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['comment']->value['title'];?>
 [#<?php echo $_smarty_tpl->tpl_vars['comment']->value['pid'];?>
]</a></td>
			<td><?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>
</td>
			<td class="twidth"><b><?php echo $_smarty_tpl->tpl_vars['comment']->value['author'];?>
</b> <?php if ($_smarty_tpl->tpl_vars['comment']->value['author_type']=='user'){?>(<?php echo $_smarty_tpl->tpl_vars['lang']->value['user'];?>
: #<?php echo $_smarty_tpl->tpl_vars['comment']->value['author_id'];?>
)<?php }else{ ?>(<?php echo $_smarty_tpl->tpl_vars['comment']->value['author_ip'];?>
)<?php }?></td>
			<td class="twidth"><?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_date'];?>
</td>
			<td class="buttons twidth">
				<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
posts/comments/delete/<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['thispage']->value;?>
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
posts/comments/?page=<?php echo $_smarty_tpl->tpl_vars['thispage']->value-1;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['prevpage'];?>
</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['nextpage']->value){?><a class="next" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
posts/comments/?page=<?php echo $_smarty_tpl->tpl_vars['thispage']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nextpage'];?>
</a><?php }?>
	</div>
</div><?php }} ?>