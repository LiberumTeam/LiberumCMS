<?php /* Smarty version Smarty-3.1.7, created on 2012-04-29 00:29:28
         compiled from "include/styles/default/templates\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:107094f9c8b68286760-47004243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5741c977def8ffde34c4ce2c363d6081cd0fb89' => 
    array (
      0 => 'include/styles/default/templates\\footer.html',
      1 => 1333831649,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107094f9c8b68286760-47004243',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sitetitle' => 0,
    'version' => 0,
    'generated' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f9c8b682ab3b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9c8b682ab3b')) {function content_4f9c8b682ab3b($_smarty_tpl) {?>	<div id="footer">
        Copyright by <b><?php echo $_smarty_tpl->tpl_vars['sitetitle']->value;?>
</b> &copy; 2012<br>
		Powerade by LiberumCMS <?php echo $_smarty_tpl->tpl_vars['version']->value;?>
 &copy; LiberumTeam 2012<br>
		Generated in <?php echo $_smarty_tpl->tpl_vars['generated']->value;?>
 s
	</div>
</body>
</html><?php }} ?>