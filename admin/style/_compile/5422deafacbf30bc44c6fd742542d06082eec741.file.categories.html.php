<?php /* Smarty version Smarty-3.1.7, created on 2012-05-02 15:25:52
         compiled from "style/templates\categories.html" */ ?>
<?php /*%%SmartyHeaderCode:73114fa14b205963c8-19646219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5422deafacbf30bc44c6fd742542d06082eec741' => 
    array (
      0 => 'style/templates\\categories.html',
      1 => 1335972352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73114fa14b205963c8-19646219',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4fa14b2077983',
  'variables' => 
  array (
    'lang' => 0,
    'msg' => 0,
    'url' => 0,
    'categories' => 0,
    'portal_url' => 0,
    'furl' => 0,
    'cfg' => 0,
    'category' => 0,
    'icons' => 0,
    'thispage' => 0,
    'nextpage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fa14b2077983')) {function content_4fa14b2077983($_smarty_tpl) {?><h2><?php echo $_smarty_tpl->tpl_vars['lang']->value['categories'];?>
</h2>
<?php if (!empty($_smarty_tpl->tpl_vars['msg']->value)){?><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<?php }?>
<br>
<div>
	<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
posts/categories/add/" class="button"><?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
</a><br><br>
	<table>
		<tr class="thead">
			<td colspan="5"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['categories'];?>
</b></td>
		</tr>
		<tr class="thead2">
			<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['description'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['action'];?>
</td>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
		<tr>
			<td><a href="<?php echo $_smarty_tpl->tpl_vars['portal_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['furl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['cfg']->value['articleurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['category']->value['category_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['category_title'];?>
 [#<?php echo $_smarty_tpl->tpl_vars['category']->value['cid'];?>
]</a></td>
			<td><?php echo $_smarty_tpl->tpl_vars['category']->value['category_description'];?>
</td>
			<td class="buttons twidth">
				<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
posts/categories/edit/<?php echo $_smarty_tpl->tpl_vars['category']->value['cid'];?>
" original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
edit.png"></a>
				<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
posts/categories/delete/<?php echo $_smarty_tpl->tpl_vars['category']->value['cid'];?>
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
posts/categories/?page=<?php echo $_smarty_tpl->tpl_vars['thispage']->value-1;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['prevpage'];?>
</a><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['nextpage']->value){?><a class="next" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
posts/categories/?page=<?php echo $_smarty_tpl->tpl_vars['thispage']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nextpage'];?>
</a><?php }?>
	</div>
</div><?php }} ?>