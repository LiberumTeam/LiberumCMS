<?php /* Smarty version Smarty-3.1.7, created on 2012-05-01 10:00:47
         compiled from "style/templates\page_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:43174f9fb408ac7792-46965125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b504a72455e1a748cdde2686b5a9e9842d4ee62' => 
    array (
      0 => 'style/templates\\page_edit.html',
      1 => 1335866443,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43174f9fb408ac7792-46965125',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f9fb408d116d',
  'variables' => 
  array (
    'lang' => 0,
    'msg' => 0,
    'post' => 0,
    'url' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9fb408d116d')) {function content_4f9fb408d116d($_smarty_tpl) {?><h2><?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
</h2>
<?php if (!empty($_smarty_tpl->tpl_vars['msg']->value)){?><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<?php }?>
<form action="" method="post">
	<p>
		<label for="ftitle"><?php echo $_smarty_tpl->tpl_vars['lang']->value['title'];?>
:</label>
		<input type="text" name="title" id="ftitle" value="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
">
	</p>
	<p>
		<label for="fformatting"><?php echo $_smarty_tpl->tpl_vars['lang']->value['formatting'];?>
:</label>
		<select name="formatting" id="fformatting">
			<option value="bbcode"<?php if ($_smarty_tpl->tpl_vars['post']->value['formatting']=='bbcode'){?> selected="selected"<?php }?>>BBCode</option>
			<option value="html"<?php if ($_smarty_tpl->tpl_vars['post']->value['formatting']=='html'){?> selected="selected"<?php }?>>HTML</option>
		</select>
	</p>
	<p>
		<label for="fcomments"><?php echo $_smarty_tpl->tpl_vars['lang']->value['comments'];?>
:</label>
		<select name="comments" id="fcomments">
			<option value="1"<?php if ($_smarty_tpl->tpl_vars['post']->value['comments']==1){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
</option>
			<option value="0"<?php if ($_smarty_tpl->tpl_vars['post']->value['comments']==0){?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>
</option>
		</select>
	</p>
	<p>
		<label><?php echo $_smarty_tpl->tpl_vars['lang']->value['bonus_options'];?>
:</label><br>
		<input type="checkbox" name="accept" value="1" id="faccept"<?php if ($_smarty_tpl->tpl_vars['post']->value['published']==1){?> checked="checked"<?php }?>> <label for="faccept"><?php echo $_smarty_tpl->tpl_vars['lang']->value['accept_now'];?>
</label><br>
		<input type="checkbox" name="timeupdate" value="1" id="ftimeupdate"> <label for="timeupdate"><?php echo $_smarty_tpl->tpl_vars['lang']->value['timeupdate'];?>
</label>
	</p>
	<p>
		<div id="fcontentd"><textarea id="fcontent" name="content" cols="1" rows="1" class="editor"><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</textarea></div>
		<textarea id="fcontent2" disabled="disabled" name="content" cols="60" rows="20" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</textarea>
	</p>
	<p>
		<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['edit'];?>
!" name="page_edit">
		<label><?php echo $_smarty_tpl->tpl_vars['lang']->value['or'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
posts/pages/"><?php echo $_smarty_tpl->tpl_vars['lang']->value['back'];?>
</a></label>
	</p>
</form><?php }} ?>