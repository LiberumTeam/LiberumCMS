<?php /* Smarty version Smarty-3.1.7, created on 2012-05-01 09:45:37
         compiled from "style/templates\news_add.html" */ ?>
<?php /*%%SmartyHeaderCode:242324f9d11f6dc4de8-01882894%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07e4c38d77883e4b438455a84a003f5335e8e2d0' => 
    array (
      0 => 'style/templates\\news_add.html',
      1 => 1335864973,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242324f9d11f6dc4de8-01882894',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f9d11f6e4854',
  'variables' => 
  array (
    'lang' => 0,
    'msg' => 0,
    'categories' => 0,
    'category' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9d11f6e4854')) {function content_4f9d11f6e4854($_smarty_tpl) {?><h2><?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
</h2>
<?php if (!empty($_smarty_tpl->tpl_vars['msg']->value)){?><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<?php }?>
<form action="" method="post">
	<p>
		<label for="ftitle"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
:</label>
		<input type="text" name="title" id="ftitle">
	</p>
	<p>
		<label for="fcategory"><?php echo $_smarty_tpl->tpl_vars['lang']->value['category'];?>
:</label>
		<select name="category" id="fcategory">
			<?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value){
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['category_title'];?>
 [#<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['category']->value['cid'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_tmp1;?>
]</option>
			<?php } ?>
		</select>
	</p>
	<p>
		<label for="fformatting"><?php echo $_smarty_tpl->tpl_vars['lang']->value['formatting'];?>
:</label>
		<select name="formatting" id="fformatting">
			<option value="bbcode">BBCode</option>
			<option value="html">HTML</option>
		</select>
	</p>
	<p>
		<label for="fcomments"><?php echo $_smarty_tpl->tpl_vars['lang']->value['comments'];?>
:</label>
		<select name="comments" id="fcomments">
			<option value="1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
</option>
			<option value="0"><?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>
</option>
		</select>
	</p>
	<p>
		<label><?php echo $_smarty_tpl->tpl_vars['lang']->value['bonus_options'];?>
:</label><br>
		<input type="checkbox" name="accept" value="1" id="faccept"> <label for="faccept"><?php echo $_smarty_tpl->tpl_vars['lang']->value['accept_now'];?>
</label>
	</p>
	<p>
		<div id="fcontentd"><textarea id="fcontent" name="content" cols="1" rows="1" class="editor"></textarea></div>
		<textarea id="fcontent2" disabled="disabled" name="content" cols="60" rows="20" style="display: none;"></textarea>
	</p>
	<p>
		<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
!" name="news_add">
		<label><?php echo $_smarty_tpl->tpl_vars['lang']->value['or'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
posts/news/"><?php echo $_smarty_tpl->tpl_vars['lang']->value['back'];?>
</a></label>
	</p>
</form><?php }} ?>