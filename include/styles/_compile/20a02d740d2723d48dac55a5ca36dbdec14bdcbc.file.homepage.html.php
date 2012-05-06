<?php /* Smarty version Smarty-3.1.7, created on 2012-04-14 20:36:26
         compiled from "styles/default/templates\homepage.html" */ ?>
<?php /*%%SmartyHeaderCode:87054f7f46e3cf4165-30035024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20a02d740d2723d48dac55a5ca36dbdec14bdcbc' => 
    array (
      0 => 'styles/default/templates\\homepage.html',
      1 => 1334428571,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87054f7f46e3cf4165-30035024',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f7f46e407d02',
  'variables' => 
  array (
    'news' => 0,
    'lang' => 0,
    'category' => 0,
    'author' => 0,
    'n' => 0,
    'cfg' => 0,
    'furl' => 0,
    'thispage' => 0,
    'nextpage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f7f46e407d02')) {function content_4f7f46e407d02($_smarty_tpl) {?><h2><?php if ($_smarty_tpl->tpl_vars['news']->value[0]['one']){?><?php echo $_smarty_tpl->tpl_vars['news']->value[0]['title'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['lang']->value['articles'];?>
<?php }?></h2>
<?php if (isset($_smarty_tpl->tpl_vars['category']->value)){?>
<div class="post-parent-info">
	<h3><?php echo $_smarty_tpl->tpl_vars['category']->value['category_title'];?>
</h3>
	<p>
		<?php echo $_smarty_tpl->tpl_vars['category']->value['category_description'];?>

	</p>
</div>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['author']->value)){?>
<div class="post-parent-info">
	<h3><?php echo $_smarty_tpl->tpl_vars['author']->value['username'];?>
</h3>
	<p>
		<?php echo $_smarty_tpl->tpl_vars['author']->value['user_description'];?>

	</p>
</div>
<?php }?>
<?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
	<?php if (isset($_smarty_tpl->tpl_vars['n']->value['title'])){?>
    <div class="news">
        <h3 class="news_title"><a href="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['furl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['cfg']->value['articleurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['n']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['n']->value['title'];?>
</a></h3>
        <div class="news_info">
			<?php echo $_smarty_tpl->tpl_vars['lang']->value['added_by'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['furl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['cfg']->value['authorurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['n']->value['username'];?>
"><b><?php echo $_smarty_tpl->tpl_vars['n']->value['styleusername'];?>
</b></a>
			<?php echo $_smarty_tpl->tpl_vars['lang']->value['news_added_day'];?>
 <b><?php echo $_smarty_tpl->tpl_vars['n']->value['date'];?>
</b>
			<?php echo $_smarty_tpl->tpl_vars['lang']->value['in_category'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['cfg']->value['url'];?>
<?php echo $_smarty_tpl->tpl_vars['furl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['cfg']->value['categoryurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['n']->value['category_url'];?>
"><b><?php echo $_smarty_tpl->tpl_vars['n']->value['category_title'];?>
</b></a>
		</div>
        <div class="news_body">
            <p>
				<?php echo $_smarty_tpl->tpl_vars['n']->value['content'];?>

			</p>
        </div>
    </div>
	<?php }?>
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
</div><?php }} ?>