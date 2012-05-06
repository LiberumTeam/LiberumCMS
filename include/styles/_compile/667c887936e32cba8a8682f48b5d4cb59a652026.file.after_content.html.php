<?php /* Smarty version Smarty-3.1.7, created on 2012-04-14 15:40:45
         compiled from "styles/default/templates\after_content.html" */ ?>
<?php /*%%SmartyHeaderCode:153134f7f497913fdd3-29320742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '667c887936e32cba8a8682f48b5d4cb59a652026' => 
    array (
      0 => 'styles/default/templates\\after_content.html',
      1 => 1334410842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153134f7f497913fdd3-29320742',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f7f497919643',
  'variables' => 
  array (
    'sidebars' => 0,
    'sidebar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f7f497919643')) {function content_4f7f497919643($_smarty_tpl) {?>        </div>
	</div>
    <div id="sidebar">
		<?php  $_smarty_tpl->tpl_vars['sidebar'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sidebar']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sidebars']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sidebar']->key => $_smarty_tpl->tpl_vars['sidebar']->value){
$_smarty_tpl->tpl_vars['sidebar']->_loop = true;
?>
			<div class="sidebar">
				<div class="inner">
					<h2><?php echo $_smarty_tpl->tpl_vars['sidebar']->value['sidebar_title'];?>
</h2>
					<p>
						<?php echo $_smarty_tpl->tpl_vars['sidebar']->value['sidebar_content'];?>

					</p>
				</div>
			</div>
		<?php } ?>
    </div>
</div><?php }} ?>