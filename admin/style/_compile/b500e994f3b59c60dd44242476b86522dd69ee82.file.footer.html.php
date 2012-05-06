<?php /* Smarty version Smarty-3.1.7, created on 2012-05-05 14:01:49
         compiled from "style/templates\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:48314f89eb393fd238-68370354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b500e994f3b59c60dd44242476b86522dd69ee82' => 
    array (
      0 => 'style/templates\\footer.html',
      1 => 1336226494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48314f89eb393fd238-68370354',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f89eb3945111',
  'variables' => 
  array (
    'lang' => 0,
    'generated' => 0,
    'queries' => 0,
    'memory' => 0,
    'js' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f89eb3945111')) {function content_4f89eb3945111($_smarty_tpl) {?>			</div>
		</div>	
		<!--<div id="sidebar">
			<h3>Right sidebar</h3>
			<p>
				test
			</p>
		</div>-->
	</div>
	<div id="footer">
		Site powered by LiberumCMS &copy; LiberumTeam 2012<br><br>
		<?php echo $_smarty_tpl->tpl_vars['lang']->value['generated'];?>
 <?php echo $_smarty_tpl->tpl_vars['generated']->value;?>
ms &bull; <?php echo $_smarty_tpl->tpl_vars['lang']->value['queries'];?>
: <?php echo $_smarty_tpl->tpl_vars['queries']->value;?>
 &bull; <?php echo $_smarty_tpl->tpl_vars['lang']->value['memory'];?>
: <?php echo $_smarty_tpl->tpl_vars['memory']->value;?>

	</div>
	<script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
jquery-1.7.2.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
editor/jquery.markitup.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
editor/sets/default/set.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
jquery.tipsy.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
liberum.js"></script>
</body>
</html><?php }} ?>