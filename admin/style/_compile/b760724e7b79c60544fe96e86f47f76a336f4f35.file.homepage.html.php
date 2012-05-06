<?php /* Smarty version Smarty-3.1.7, created on 2012-05-02 22:54:17
         compiled from "style/templates\homepage.html" */ ?>
<?php /*%%SmartyHeaderCode:282204f89f51a6414d4-00729947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b760724e7b79c60544fe96e86f47f76a336f4f35' => 
    array (
      0 => 'style/templates\\homepage.html',
      1 => 1335999256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282204f89f51a6414d4-00729947',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f89f51a6a177',
  'variables' => 
  array (
    'lang' => 0,
    'version' => 0,
    'versionint' => 0,
    'versioncodename' => 0,
    'url' => 0,
    'os' => 0,
    'httpd' => 0,
    'phpver' => 0,
    'mysqlver' => 0,
    'stats' => 0,
    'lastcomments' => 0,
    'comment' => 0,
    'portal_url' => 0,
    'furl' => 0,
    'cfg' => 0,
    'icons' => 0,
    'styleinfo' => 0,
    'logs' => 0,
    'log' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f89f51a6a177')) {function content_4f89f51a6a177($_smarty_tpl) {?><h2><?php echo $_smarty_tpl->tpl_vars['lang']->value['info'];?>
</h2>
<br>
<div class="float">
	<div class="column left">
		<table>
			<tr class="thead">
				<td colspan="2"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['server'];?>
</b></td>
			</tr>
			<tr>
				<td class="twidth"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['version'];?>
 LiberumCMS</b></td>
				<td><?php echo $_smarty_tpl->tpl_vars['version']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['versionint']->value;?>
) (<?php echo $_smarty_tpl->tpl_vars['lang']->value['codename'];?>
: <?php echo $_smarty_tpl->tpl_vars['versioncodename']->value;?>
) <b><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
updates"><?php echo $_smarty_tpl->tpl_vars['lang']->value['check_updates'];?>
</a></b></td>
			</tr>
			<tr>
				<td class="twidth"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['os'];?>
</b></td>
				<td><?php echo $_smarty_tpl->tpl_vars['os']->value;?>
</td>
			</tr>
			<tr>
				<td class="twidth"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['httpserver'];?>
</b></td>
				<td><?php echo $_smarty_tpl->tpl_vars['httpd']->value;?>
</td>
			</tr>
			<tr>
				<td class="twidth"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['version'];?>
 PHP</b></td>
				<td><?php echo $_smarty_tpl->tpl_vars['phpver']->value;?>
</td>
			</tr>
			<tr>
				<td class="twidth"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['version'];?>
 MySQL</b></td>
				<td><?php echo $_smarty_tpl->tpl_vars['mysqlver']->value;?>
</td>
			</tr>
		</table>
	</div>
	<div class="column right">
		<table>
			<tr class="thead">
				<td colspan="2"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['stats'];?>
</b></td>
			</tr>
			<tr>
				<td class="twidth"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['pages'];?>
</b></td>
				<td><?php echo $_smarty_tpl->tpl_vars['stats']->value['pages'];?>
</td>
			</tr>
			<tr>
				<td class="twidth"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['news'];?>
</b></td>
				<td><?php echo $_smarty_tpl->tpl_vars['stats']->value['news'];?>
</td>
			</tr>
			<tr>
				<td class="twidth"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['categories'];?>
</b></td>
				<td><?php echo $_smarty_tpl->tpl_vars['stats']->value['categories'];?>
</td>
			</tr>
			<tr>
				<td class="twidth"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['users'];?>
</b></td>
				<td><?php echo $_smarty_tpl->tpl_vars['stats']->value['users'];?>
</td>
			</tr>
			<tr>
				<td class="twidth"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['comments'];?>
</b></td>
				<td><?php echo $_smarty_tpl->tpl_vars['stats']->value['comments'];?>
</td>
			</tr>
		</table>
	</div>
</div>
<br><br>
<div class="float">
	<div class="column left">
		<table>
			<tr class="thead">
				<td><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['last_comments'];?>
</b></td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['comment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['lastcomments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->key => $_smarty_tpl->tpl_vars['comment']->value){
$_smarty_tpl->tpl_vars['comment']->_loop = true;
?>
			<tr>
				<td>
					<b><?php echo $_smarty_tpl->tpl_vars['comment']->value['author'];?>
</b> <?php if ($_smarty_tpl->tpl_vars['comment']->value['author_type']=='guest'){?>(<?php echo $_smarty_tpl->tpl_vars['lang']->value['guest'];?>
)<?php }?>
					<?php echo $_smarty_tpl->tpl_vars['lang']->value['in'];?>
 <a class="tooltip" href="<?php echo $_smarty_tpl->tpl_vars['portal_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['furl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['cfg']->value['articleurl'];?>
/<?php echo $_smarty_tpl->tpl_vars['comment']->value['url'];?>
#comment-<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
" original-title="<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_content'];?>
"><?php echo $_smarty_tpl->tpl_vars['comment']->value['title'];?>
</a>
					<a class="tooltip" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
posts/comments/delete/<?php echo $_smarty_tpl->tpl_vars['comment']->value['comment_id'];?>
?homepage=1" original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['delete'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
delete_comment.png"></a>
				</td>
			</tr>	
			<?php } ?>
		</table>
	</div>
	<div class="column right">
		<table>
			<tr class="thead">
				<td colspan="2"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['info'];?>
</b></td>
			</tr>
			<tr>
				<td class="twidth"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['style'];?>
</b></td>
				<td><?php echo $_smarty_tpl->tpl_vars['styleinfo']->value['fullname'];?>
</td>
			</tr>
			<tr>
				<td class="twidth"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['lang'];?>
</b></td>
				<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['cfg_fullname'];?>
</td>
			</tr>
		</table>
	</div>
</div>
<br><br>
<div>
	<div style="overflow: scroll; height: 200px;">
		<table>
			<tr class="thead">
				<td colspan="3"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['logs'];?>
</b></td>
			</tr>
			<tr class="thead2">
				<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['date'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['user'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['lang']->value['action'];?>
</td>
			</tr>
			<?php  $_smarty_tpl->tpl_vars['log'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['log']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['log']->key => $_smarty_tpl->tpl_vars['log']->value){
$_smarty_tpl->tpl_vars['log']->_loop = true;
?>
			<tr>
				<td class="twidth"><?php echo $_smarty_tpl->tpl_vars['log']->value['time'];?>
</td>
				<td class="twidth"><?php echo $_smarty_tpl->tpl_vars['log']->value['user'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['log']->value['action'];?>
</td>
			</tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['log']->_loop) {
?>
			<tr>
				<td colspan="3"><?php echo $_smarty_tpl->tpl_vars['lang']->value['no_data'];?>
</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div><?php }} ?>