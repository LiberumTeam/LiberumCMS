<?php /* Smarty version Smarty-3.1.7, created on 2012-04-27 21:31:11
         compiled from "style/templates\credits.html" */ ?>
<?php /*%%SmartyHeaderCode:218014f8dd9f9ca7162-58366043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '986d25dc4ac5c843749dfbd53fc249512e72042c' => 
    array (
      0 => 'style/templates\\credits.html',
      1 => 1335562270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '218014f8dd9f9ca7162-58366043',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f8dd9f9d07a6',
  'variables' => 
  array (
    'lang' => 0,
    'images' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f8dd9f9d07a6')) {function content_4f8dd9f9d07a6($_smarty_tpl) {?><h2><?php echo $_smarty_tpl->tpl_vars['lang']->value['authors_of_lcms'];?>
</h2>
<p>
	<table>
		<tr class="thead">
			<td colspan="2"><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['authors_of_lcms'];?>
</b></td>
		</tr>
		<tr>
			<td class="twidth"><b>Thelleo</b></td>
			<td>Project Manager, PHP programmer, Core programmer.</td>
		</tr>
	</table>
</p>
<p>
	<table>
        <tr class="thead">
            <td><b><?php echo $_smarty_tpl->tpl_vars['lang']->value['usedtechnologies'];?>
</b></td>
        </tr>
        <tr class="tnohover">
            <td>
                <a href="http://php.net">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['images']->value;?>
php.png" alt="PHP">
                <a>
                &nbsp;
                <a href="http://mysql.com">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['images']->value;?>
mysql.png" alt="MySQL">
                <a>
                &nbsp;
                <a href="http://smarty.net">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['images']->value;?>
smarty.png" alt="Smarty">
                <a>
                &nbsp;
                <a href="http://jquery.com">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['images']->value;?>
jquery.png" alt="jQuery">
                <a>
                &nbsp;
                <a href="http://nbbc.sourceforge.net/">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['images']->value;?>
nbbc.png" alt="NBBC">
                <a>
            </td>
        </tr>
    </table>
</p><?php }} ?>