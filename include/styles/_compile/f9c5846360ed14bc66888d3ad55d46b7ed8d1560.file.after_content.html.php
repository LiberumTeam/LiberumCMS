<?php /* Smarty version Smarty-3.1.7, created on 2012-04-29 00:29:28
         compiled from "include/styles/default/templates\after_content.html" */ ?>
<?php /*%%SmartyHeaderCode:119164f9c8b68205413-61127308%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9c5846360ed14bc66888d3ad55d46b7ed8d1560' => 
    array (
      0 => 'include/styles/default/templates\\after_content.html',
      1 => 1334410842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '119164f9c8b68205413-61127308',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sidebars' => 0,
    'sidebar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f9c8b6823ece',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f9c8b6823ece')) {function content_4f9c8b6823ece($_smarty_tpl) {?>        </div>
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