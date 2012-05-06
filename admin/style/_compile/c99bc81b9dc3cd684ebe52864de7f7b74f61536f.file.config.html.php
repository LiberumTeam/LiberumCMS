<?php /* Smarty version Smarty-3.1.7, created on 2012-04-25 14:27:43
         compiled from "style/templates\config.html" */ ?>
<?php /*%%SmartyHeaderCode:56954f93d2440dd743-76448378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c99bc81b9dc3cd684ebe52864de7f7b74f61536f' => 
    array (
      0 => 'style/templates\\config.html',
      1 => 1335364060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56954f93d2440dd743-76448378',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f93d24424f46',
  'variables' => 
  array (
    'lang' => 0,
    'msg' => 0,
    'cfg' => 0,
    'furl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f93d24424f46')) {function content_4f93d24424f46($_smarty_tpl) {?><h2><?php echo $_smarty_tpl->tpl_vars['lang']->value['config'];?>
</h2>
<br>
<?php if (isset($_smarty_tpl->tpl_vars['msg']->value)){?><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
<br><?php }?>
<form action="" method="post">
	<fieldset>
		<legend><?php echo $_smarty_tpl->tpl_vars['lang']->value['general'];?>
</legend>
		<p>
			<label for="ftitle"><?php echo $_smarty_tpl->tpl_vars['lang']->value['sitetitle'];?>
:</label>
			<input type="text" name="sitetitle" id="fsitetitle" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['sitetitle'];?>
">
		</p>
		<p>
			<label for="fdescription"><?php echo $_smarty_tpl->tpl_vars['lang']->value['description'];?>
:</label>
			<input type="text" name="description" id="fdescription" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['description'];?>
">
		</p>
		<p>
			<label for="fkeywords"><?php echo $_smarty_tpl->tpl_vars['lang']->value['keywords'];?>
:</label>
			<input type="text" name="keywords" id="fkeywords" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['keywords'];?>
">
		</p>
		<p>
			<label for="furl"><?php echo $_smarty_tpl->tpl_vars['lang']->value['url'];?>
:</label>
			<input type="text" name="url" id="furl" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['url'];?>
">
		</p>
	</fieldset>
	<fieldset>
		<legend><?php echo $_smarty_tpl->tpl_vars['lang']->value['seo'];?>
</legend>
		<p>
			<label for="ffurls"><?php echo $_smarty_tpl->tpl_vars['lang']->value['furls'];?>
:</label>
			<select class="fsmall" name="furls" id="ffurls">
				<option<?php if ($_smarty_tpl->tpl_vars['cfg']->value['furls']==1){?> selected="selected"<?php }?> value="1"><?php echo $_smarty_tpl->tpl_vars['lang']->value['yes'];?>
</option>
				<option<?php if ($_smarty_tpl->tpl_vars['cfg']->value['furls']==0){?> selected="selected"<?php }?> value="0"><?php echo $_smarty_tpl->tpl_vars['lang']->value['no'];?>
</option>
			</select>
		</p>
		<p>
			<label for="farticleurl"><?php echo $_smarty_tpl->tpl_vars['lang']->value['articleurl'];?>
:</label>
			<b><?php echo $_smarty_tpl->tpl_vars['cfg']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['furl']->value;?>
</b>
			<input class="fsmall" type="text" name="articleurl" id="farticleurl" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['articleurl'];?>
">
			<b>/some-title/</b>
		</p>
		<p>
			<label for="fauthorurl"><?php echo $_smarty_tpl->tpl_vars['lang']->value['authorurl'];?>
:</label>
			<b><?php echo $_smarty_tpl->tpl_vars['cfg']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['furl']->value;?>
</b>
			<input class="fsmall" type="text" name="authorurl" id="fauthorurl" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['authorurl'];?>
">
			<b>/some-auhtor/</b>
		</p>
		<p>
			<label for="fcategoryurl"><?php echo $_smarty_tpl->tpl_vars['lang']->value['categoryurl'];?>
:</label>
			<b><?php echo $_smarty_tpl->tpl_vars['cfg']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['furl']->value;?>
</b>
			<input class="fsmall" type="text" name="categoryurl" id="fcategoryurl" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['categoryurl'];?>
">
			<b>/some-category/</b>
		</p>
	</fieldset>
	<fieldset>
		<legend><?php echo $_smarty_tpl->tpl_vars['lang']->value['posts'];?>
</legend>
		<p>
			<label for="fpagelimit"><?php echo $_smarty_tpl->tpl_vars['lang']->value['postsperpage'];?>
:</label>
			<input class="fsmall" type="text" name="pagelimit" id="fpagelimit" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['pagelimit'];?>
">
		</p>
		<p>
			<label for="fcommentspagelimit"><?php echo $_smarty_tpl->tpl_vars['lang']->value['commentsperpage'];?>
:</label>
			<input class="fsmall" type="text" name="commentspagelimit" id="fcommentspagelimit" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['commentspagelimit'];?>
">
		</p>
		<p>
			<label for="fcomment_max_length"><?php echo $_smarty_tpl->tpl_vars['lang']->value['commentsmax'];?>
:</label>
			<input class="fsmall" type="text" name="comment_max_length" id="fcomment_max_length" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['comment_max_length'];?>
">
		</p>
		<p>
			<label for="fcomment_wait_time"><?php echo $_smarty_tpl->tpl_vars['lang']->value['commentwaittime'];?>
:</label>
			<input class="fsmall" type="text" name="comment_wait_time" id="fcomment_wait_time" value="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['comment_wait_time'];?>
"> (<?php echo $_smarty_tpl->tpl_vars['lang']->value['onlyguest'];?>
)
		</p>
	</fieldset>
	<p class="configform">
		<input type="submit" name="configformsubmit" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['change'];?>
">
	</p>
</form><?php }} ?>