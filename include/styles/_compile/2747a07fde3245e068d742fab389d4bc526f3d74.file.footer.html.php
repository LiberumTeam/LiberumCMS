<?php /* Smarty version Smarty-3.1.7, created on 2012-04-07 22:47:30
         compiled from "styles/default/templates\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:170674f61099c09e8f2-21712633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2747a07fde3245e068d742fab389d4bc526f3d74' => 
    array (
      0 => 'styles/default/templates\\footer.html',
      1 => 1333831649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170674f61099c09e8f2-21712633',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f61099c1188d',
  'variables' => 
  array (
    'sitetitle' => 0,
    'version' => 0,
    'generated' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f61099c1188d')) {function content_4f61099c1188d($_smarty_tpl) {?>	<div id="footer">
        Copyright by <b><?php echo $_smarty_tpl->tpl_vars['sitetitle']->value;?>
</b> &copy; 2012<br>
		Powerade by LiberumCMS <?php echo $_smarty_tpl->tpl_vars['version']->value;?>
 &copy; LiberumTeam 2012<br>
		Generated in <?php echo $_smarty_tpl->tpl_vars['generated']->value;?>
 s
	</div>
</body>
</html><?php }} ?>