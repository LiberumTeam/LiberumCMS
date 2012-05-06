<?php /* Smarty version Smarty-3.1.7, created on 2012-05-02 15:28:07
         compiled from "style/templates\pages.html" */ ?>
<?php /*%%SmartyHeaderCode:7074f9fb0ed79fa26-66230080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd29fa8eba53efc827be358a14f84345786ebbf24' => 
    array (
      0 => 'style/templates\\pages.html',
      1 => 1335969721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7074f9fb0ed79fa26-66230080',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f9fb0edbbf53',
  'variables' => 
  array (
    'lang' => 0,
    'msg' => 0,
    'url' => 0,
    'news' => 0,
    'portal_url' => 0,
    'furl' => 0,
    'cfg' => 0,
    'post' => 0,
    'thispage' => 0,
    'icons' => 0,
    'nextpage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9fb0edbbf53')) {function content_4f9fb0edbbf53($_smarty_tpl) {?><h2><?php echo $_smarty_tpl->tpl_vars['lang']->value['pages'];?>
</h2>
<?php if (!empty($_smarty_tpl->tpl_vars['msg']->value)){?><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<?php }?>
<br>
<div>
	<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
posts/pages/add/" class="button"><?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
</a><br><br>
	<table>
		<tr class="thead">
			<td colspan="7"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['pages'];?>
</b></td>
		</tr>
		<tr class="thead2">
			<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['author'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['date'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['published'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['comments'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['action'];?>
</td>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
		<tr>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['portal_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['furl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['cfg']->value['articleurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['post']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a></td>
			<td class="twidth"><b><?php echo $_smarty_tpl->tpl_vars['post']->value['styleusername'];?>
</b> [#<?php echo $_smarty_tpl->tpl_vars['post']->value['uid'];?>
]</td>
			<td class="twidth"><?php echo $_smarty_tpl->tpl_vars['post']->value['date'];?>
</td>
			<td class="twidth"><?php if ($_smarty_tpl->tpl_vars['post']->value['published']==1){?><?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>
<?php }?></td>
			<td class="twidth"><?php if ($_smarty_tpl->tpl_vars['post']->value['comments']==1){?><?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>
<?php }?></td>
			<td class="buttons">
				<?php if ($_smarty_tpl->tpl_vars['post']->value['published']==1){?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
posts/pages/deaccept/<?php echo $_smarty_tpl->tpl_vars['post']->value['pid'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['thispage']->value;?>
" original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['depublish'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
down.png"></a>
				<?php }else{ ?>
					<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
posts/pages/accept/<?php echo $_smarty_tpl->tpl_vars['post']->value['pid'];?>
?page=<?php echo $_smarty_tpl->tpl_vars['thispage']->value;?>
" original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['publish'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
up.png"></a>
				<?php }?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
posts/pages/edit/<?php echo $_smarty_tpl->tpl_vars['post']->value['pid'];?>
" original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
edit.png"></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
posts/pages/delete/<?php echo $_smarty_tpl->tpl_vars['post']->value['pid'];?>
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
posts/news/?page=<?php echo $_smarty_tpl->tpl_vars['thispage']->value-1;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['prevpage'];?>
</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['nextpage']->value){?><a class="next" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
posts/news/?page=<?php echo $_smarty_tpl->tpl_vars['thispage']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nextpage'];?>
</a><?php }?>
	</div>
</div><?php }} ?>