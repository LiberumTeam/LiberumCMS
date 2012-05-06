<?php /* Smarty version Smarty-3.1.7, created on 2012-05-01 09:55:40
         compiled from "include/styles/default/templates\page.html" */ ?>
<?php /*%%SmartyHeaderCode:211804f9d02f12e2a29-57807385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08ac6ac84f95ad373ad09b0c3ee3c211f1a4d937' => 
    array (
      0 => 'include/styles/default/templates\\page.html',
      1 => 1335866139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211804f9d02f12e2a29-57807385',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f9d02f15e158',
  'variables' => 
  array (
    'page' => 0,
    'lang' => 0,
    'cfg' => 0,
    'furl' => 0,
    'msg' => 0,
    'user' => 0,
    'commentscount' => 0,
    'comments' => 0,
    'comment' => 0,
    'thispage' => 0,
    'nextpage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9d02f15e158')) {function content_4f9d02f15e158($_smarty_tpl) {?><h2><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
</h2>
<div class="news">
    <div class="news_body">
    	<?php if ($_smarty_tpl->tpl_vars['page']->value['type']=='news'){?> 	
        <div class="news_info">
			<?php echo $_smarty_tpl->tpl_vars['lang']->value['added_by'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['furl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['cfg']->value['authorurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['username'];?>
"><b><?php echo $_smarty_tpl->tpl_vars['page']->value['styleusername'];?>
</b></a>
			<?php echo $_smarty_tpl->tpl_vars['lang']->value['news_added_day'];?>
 <b><?php echo $_smarty_tpl->tpl_vars['page']->value['date'];?>
</b>
			<?php echo $_smarty_tpl->tpl_vars['lang']->value['in_category'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['furl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['cfg']->value['categoryurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['category_url'];?>
"><b><?php echo $_smarty_tpl->tpl_vars['page']->value['category_title'];?>
</b></a>
		</div>
    	<?php }?>
		<p>
			<?php echo $_smarty_tpl->tpl_vars['page']->value['content'];?>

		</p>
    </div>
</div>
<div id="comments">
	<?php if ($_smarty_tpl->tpl_vars['page']->value['comments']==1){?>
		<h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['add_comment'];?>
</h3>
		<?php if (!empty($_smarty_tpl->tpl_vars['msg']->value)){?> <p><b><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</b></p><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['user']->value){?>
			<form action="" method="post">
				<p>
					<label><?php echo $_smarty_tpl->tpl_vars['lang']->value['you_added_as'];?>
: <b>Thelleo</b></label>
				</p>
				<p>
					<label for="fcontent"><?php echo $_smarty_tpl->tpl_vars['lang']->value['content'];?>
 (<?php echo $_smarty_tpl->tpl_vars['lang']->value['bbcode_allowed'];?>
):<br></label>
					<textarea cols="60" rows="10" name="content"></textarea>
				</p>
				<p>
					<input type="submit" name="comment" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
">
				</p>
			</form>
		<?php }else{ ?>
			<form action="" method="post">
				<p>
					<label for="fnick"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nick'];?>
:</label>
					<input type="text" name="nick" id="fnick">
				</p>
				<p>
					<label for="femail"><?php echo $_smarty_tpl->tpl_vars['lang']->value['email'];?>
 (<?php echo $_smarty_tpl->tpl_vars['lang']->value['not_showed'];?>
):</label>
					<input type="text" name="email" id="femail">
				</p>
				<p>
					<label for="fcontent"><?php echo $_smarty_tpl->tpl_vars['lang']->value['content'];?>
 (<?php echo $_smarty_tpl->tpl_vars['lang']->value['bbcode_allowed'];?>
):<br></label>
					<textarea cols="60" rows="10" name="content"></textarea>
				</p>
				<p>
					<input type="submit" name="comment" value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['add'];?>
">
					<br>
				</p>
			</form>
		<?php }?>
		<h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['comments'];?>
 (<?php echo $_smarty_tpl->tpl_vars['commentscount']->value;?>
)</h3>
		<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value){
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
		<div id="comment-<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" class="comment<?php if ($_smarty_tpl->tpl_vars['comment']->value['author_id']==$_smarty_tpl->tpl_vars['page']->value['author_id']){?> comment-by-author<?php }?><?php if ($_smarty_tpl->tpl_vars['comment']->value['author_type']=='user'){?> comment-by-user<?php }?>">
			<b><?php echo $_smarty_tpl->tpl_vars['comment']->value['author'];?>
:</b>
			<p>
				<?php echo $_smarty_tpl->tpl_vars['comment']->value['content'];?>

			</p>
			<p class="comment-info">
				<b><?php echo $_smarty_tpl->tpl_vars['lang']->value['added_by_day'];?>
:</b> <?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_date'];?>

			</p>
		</div>
		<?php } ?>
		<div class="pagin">
			<?php if ($_smarty_tpl->tpl_vars['thispage']->value>1){?>
				<a href="?page=<?php echo $_smarty_tpl->tpl_vars['thispage']->value-1;?>
" class="prev"><?php echo $_smarty_tpl->tpl_vars['lang']->value['prevpage'];?>
</a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['nextpage']->value){?>
				<a href="?page=<?php echo $_smarty_tpl->tpl_vars['thispage']->value+1;?>
" class="next"><?php echo $_smarty_tpl->tpl_vars['lang']->value['nextpage'];?>
</a>
			<?php }?>
		</div>
	<?php }else{ ?>
		<h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['comments'];?>
</h3>
		<p>
			<?php echo $_smarty_tpl->tpl_vars['lang']->value['comments_disabled'];?>

		</p>
	<?php }?>
</div><?php }} ?>