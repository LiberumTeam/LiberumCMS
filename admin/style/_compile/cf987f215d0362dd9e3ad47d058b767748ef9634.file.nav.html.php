<?php /* Smarty version Smarty-3.1.7, created on 2012-05-05 14:22:40
         compiled from "style/templates\nav.html" */ ?>
<?php /*%%SmartyHeaderCode:143044f89f4d68a4d75-96359464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf987f215d0362dd9e3ad47d058b767748ef9634' => 
    array (
      0 => 'style/templates\\nav.html',
      1 => 1336227760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143044f89f4d68a4d75-96359464',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_4f89f4d68f443',
  'variables' => 
  array (
    'lang' => 0,
    'url' => 0,
    'urlparam' => 0,
    'icons' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f89f4d68f443')) {function content_4f89f4d68f443($_smarty_tpl) {?><div id="nav">
	<ul>
		<li>
			<h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['general'];?>
</h3>
			<ul>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['info'];?>
"<?php if (empty($_smarty_tpl->tpl_vars['urlparam']->value[1])){?> class="active"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
info.png" alt="">
				<?php echo $_smarty_tpl->tpl_vars['lang']->value['information'];?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
updates" original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['update'];?>
"<?php if ($_smarty_tpl->tpl_vars['urlparam']->value[1]=='updates'){?> class="active"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
update.png" alt="">
				<?php echo $_smarty_tpl->tpl_vars['lang']->value['updates'];?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
credits" original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['authors'];?>
"<?php if ($_smarty_tpl->tpl_vars['urlparam']->value[1]=='credits'){?> class="active"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
author.png" alt="">
				<?php echo $_smarty_tpl->tpl_vars['lang']->value['authors_of_lcms'];?>
</a></li>
			</ul>
		</li>
		<li>
			<h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['system'];?>
</h3>
			<ul>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
config" original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['config'];?>
"<?php if ($_smarty_tpl->tpl_vars['urlparam']->value[1]=='config'){?> class="active"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
config.png" alt="">
				<?php echo $_smarty_tpl->tpl_vars['lang']->value['config'];?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
templates" original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['templates'];?>
"<?php if ($_smarty_tpl->tpl_vars['urlparam']->value[1]=='templates'){?> class="active"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
layout.png" alt="">
				<?php echo $_smarty_tpl->tpl_vars['lang']->value['templates'];?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
langs" original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['langs'];?>
"<?php if ($_smarty_tpl->tpl_vars['urlparam']->value[1]=='langs'){?> class="active"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
lang.png" alt="">
				<?php echo $_smarty_tpl->tpl_vars['lang']->value['langs'];?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
bans" original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['bans'];?>
"<?php if ($_smarty_tpl->tpl_vars['urlparam']->value[1]=='bans'){?> class="active"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
ban.png" alt="">
				<?php echo $_smarty_tpl->tpl_vars['lang']->value['bans'];?>
</a></li>
			</ul>
		</li>
		<li>
			<h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['posts'];?>
</h3>
			<ul>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
posts/news/" original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['news'];?>
"<?php if ($_smarty_tpl->tpl_vars['urlparam']->value[2]=='news'){?> class="active"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
news.png" alt="">
				<?php echo $_smarty_tpl->tpl_vars['lang']->value['manage_news'];?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
posts/pages/" original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['pages'];?>
"<?php if ($_smarty_tpl->tpl_vars['urlparam']->value[2]=='pages'){?> class="active"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
page.png" alt="">
				<?php echo $_smarty_tpl->tpl_vars['lang']->value['manage_pages'];?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
posts/comments/" original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['comments'];?>
"<?php if ($_smarty_tpl->tpl_vars['urlparam']->value[2]=='comments'){?> class="active"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
comment.png" alt="">
				<?php echo $_smarty_tpl->tpl_vars['lang']->value['manage_comments'];?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
posts/categories/" original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['cats'];?>
"<?php if ($_smarty_tpl->tpl_vars['urlparam']->value[2]=='categories'){?> class="active"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
category.png" alt="">
				<?php echo $_smarty_tpl->tpl_vars['lang']->value['manage_categories'];?>
</a></li>
			</ul>
		</li>
		<li>
			<h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['users'];?>
</h3>
			<ul>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
profile/" original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['profile'];?>
"<?php if ($_smarty_tpl->tpl_vars['urlparam']->value[1]=='profile'){?> class="active"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
user.png" alt="">
				<?php echo $_smarty_tpl->tpl_vars['lang']->value['profile'];?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
users/" original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['users'];?>
"<?php if ($_smarty_tpl->tpl_vars['urlparam']->value[1]=='users'){?> class="active"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
user.png" alt="">
				<?php echo $_smarty_tpl->tpl_vars['lang']->value['manage_users'];?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
ranks/" original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['roles'];?>
"<?php if ($_smarty_tpl->tpl_vars['urlparam']->value[1]=='ranks'){?> class="active"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
rank.png" alt="">
				<?php echo $_smarty_tpl->tpl_vars['lang']->value['manage_ranks'];?>
</a></li>
			</ul>
		</li>
		<li>
			<h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['layout'];?>
</h3>
			<ul>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
sidebars/" original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['sidebars'];?>
"<?php if ($_smarty_tpl->tpl_vars['urlparam']->value[1]=='sidebars'){?> class="active"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
sidebar.png" alt="">
				<?php echo $_smarty_tpl->tpl_vars['lang']->value['sidebars'];?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
menu/" original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['menu'];?>
"<?php if ($_smarty_tpl->tpl_vars['urlparam']->value[1]=='menu'){?> class="active"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
menu.png" alt="">
				<?php echo $_smarty_tpl->tpl_vars['lang']->value['menus'];?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
templateseditor/" original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['editor'];?>
"<?php if ($_smarty_tpl->tpl_vars['urlparam']->value[1]=='templateseditor'){?> class="active"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
edit.png" alt="">
				<?php echo $_smarty_tpl->tpl_vars['lang']->value['templateseditor'];?>
</a></li>
			</ul>
		</li>
		<li>
			<h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['modules'];?>
</h3>
			<ul>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
modules/rss/" original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['module_rss'];?>
"<?php if ($_smarty_tpl->tpl_vars['urlparam']->value[2]=='rss'){?> class="active"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
rss.png" alt="">
				<?php echo $_smarty_tpl->tpl_vars['lang']->value['rssmodule'];?>
</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
modules/googleanalytics/" original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['googleanalytics'];?>
"<?php if ($_smarty_tpl->tpl_vars['urlparam']->value[2]=='googleanalytics'){?> class="active"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
googleanalytics.png" alt="">
				<?php echo $_smarty_tpl->tpl_vars['lang']->value['googleanalytics'];?>
</a></li>
			</ul>
		</li>
		<li>
			<h3><?php echo $_smarty_tpl->tpl_vars['lang']->value['maintenance'];?>
</h3>
			<ul>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
database/" original-title="<?php echo $_smarty_tpl->tpl_vars['lang']->value['menu']['database'];?>
"<?php if ($_smarty_tpl->tpl_vars['urlparam']->value[1]=='database'){?> class="active"<?php }?>><img src="<?php echo $_smarty_tpl->tpl_vars['icons']->value;?>
db.png" alt="">
				<?php echo $_smarty_tpl->tpl_vars['lang']->value['database'];?>
</a></li>
			</ul>
		</li>
        <li>
            <h3 id="bottom">&nbsp;</h3>
        </li>
	</ul>
</div>
<div id="content">
	<div class="inner"><?php }} ?>