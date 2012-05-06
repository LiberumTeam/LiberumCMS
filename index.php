<?php
	/**
	 * 
	 * LiberumCMS is open-source Content Manage System for webmasters and
	 * typical clients. LiberumCMS is created by LiberumTeam.
	 * 
	 * @name LiberumCMS
	 * @author LiberumTeam
	 * @website http://thelleo.pl
	 * @copyright LiberumTeam 2012-forever
	 * @license BSD License
	 * @version 0.2.0-InDev
	 * 
	 */
	 
	$generated['start'] = microtime(true);
	header('Content-Type: text/html; charset=UTF-8');
	define('IN_LC', TRUE);
	define('COREPATH', 'liberum-core/');
	define('INCPATH', 'include/');
	define('TPLPATH', INCPATH.'styles/');
	$cfg = include(INCPATH.'config.php');
	include(COREPATH.'boot.php');
	if(!is_dir(TPLPATH.$config['style']))
	{
		Core::langError(str_replace('{tpl}', TPLPATH.$config['style'], $lang['lcms_error_tpl']), $lang);
	}
	$smarty = new Smarty();
	$smarty->setTemplateDir(TPLPATH.$config['style'].'/templates/');
	$smarty->setCompileDir(TPLPATH.'_compile');
	if(!is_dir('cache')) mkdir('cache', octdec(777)); // For security reasons
	$smarty->setCacheDir('cache');
	$LiberumCMS->loadModules(); // We load modules now because they can use Smarty lib
	Cookie::$salt = $cfg['cookie_salt'];
	$smarty->assign('lang', $lang);
	$smarty->assign('cfg', $config);
	$smarty->assign('url', $config['url']);
	$smarty->assign('sitetitle', $config['sitetitle']);
	$smarty->assign('style', $config['style']);
	$smarty->assign('style_dir', $config['url'].TPLPATH.$config['style'].'/');
	$smarty->assign('img_dir', $config['url'].TPLPATH.$config['style'].'/images/');
	$smarty->assign('version', LC_VERSION);
	$smarty->assign('menu', Layout::menu());
	$smarty->assign('sidebars', Layout::sidebars());
	$smarty->assign('furl', ($config['furls'] != 1 ? 'index.php/' : ''));
	$ban = Ban::check($_SERVER['REMOTE_ADDR']);
	if(!$ban)
	{
		$user = FALSE;
		$uc = Cookie::get('user_id');
		if($uc && $uc != 'false')
		{
			$user = User::get($uc);
		}
		$smarty->assign('user', $user);
		
		$limit = @$urlparam[1] == $config['articleurl'] ? $config['commentspagelimit'] : $config['pagelimit'];
		$page_number = Core::textEscape(@$_GET['page']);
		if(empty($page_number)) {
			$offset = 0;
			$page_number = 1;
		}
		else {
			$offset = $limit * ($page_number - 1);
		}
		
		$smarty->assign('thispage', $page_number);
		
		if(empty($urlparam[1]))
		{
			$title = $lang['homepage'];
			$news = Post::news($limit, $offset);
			$x = 0;
			foreach($news as $n)
			{
				$news[$x]['styleusername'] = User::styleUsername($news[$x]['username'], $news[$x]['nickstyle']);
				++$x;
			}
			$smarty->assign('news', $news);
			$smarty->assign('nextpage', Post::checkNextPage($limit, $offset));
			$page = 'homepage.html';
		}
		else if($urlparam[1] == $config['articleurl'])
		{
			$sqlpage = Post::get($urlparam[2], FALSE);
			if($sqlpage)
			{
				if(@$_POST['comment'])
				{
					if($user)
					{
						$author = $user['uid'];
						$email = $user['email'];
						$content = Core::textEscape($_POST['content'], TRUE, TRUE);
						if(!empty($content))
						{
							if(strlen($content) < (int)$config['comment_max_length'])
							{
								if(Post::addComment($sqlpage['pid'], 'user', $author, $content, $email))
								{
									$msg = $lang['comment_sucess'];
								}
								else
								{
									$msg = $lang['server_error'];
								}
							}
							else
							{
								$msg = $lang['too_long'];
							}
						}
						else
						{
							$msg = $lang['not_empty'];
						}
						$smarty->assign('msg', $msg);
					}
					else
					{
						$author = Core::textEscape($_POST['nick'], TRUE, TRUE);
						$email = Core::textEscape($_POST['email'], TRUE, TRUE);
						$content = Core::textEscape($_POST['content'], TRUE, TRUE);
						$cookie = Cookie::get('commentadd-'.$sqlpage['pid'], FALSE);
						if(!$cookie)
						{
							if(!empty($author) && !empty($email) && !empty($content))
							{
								if(strlen($author) < 60 && strlen($content) < (int)$config['comment_max_length'])
								{
									if(filter_var($email, FILTER_VALIDATE_EMAIL))
									{
										if(Post::addComment($sqlpage['pid'], 'guest', $author, $content, $email))
										{
											Cookie::set('commentadd-'.$sqlpage['pid'], 'TRUE', (int)$config['comment_wait_time']);
											$msg = $lang['comment_sucess'];
										}
										else
										{
											$msg = $lang['server_error'];
										}
									}
									else
									{
										$msg = $lang['not_valid_email'];
									}
								}
								else
								{
									$msg = $lang['too_long'];
								}
							}
							else
							{
								$msg = $lang['not_empty'];
							}
						}
						else
						{
							$msg = str_replace('{time}', $config['comment_wait_time'], $lang['you_must_wait']);
						}
						$smarty->assign('msg', $msg);
					}
				}
				$title = $sqlpage['title'];
				$sqlpage['one'] = TRUE;
				$sqlpage['article'] = TRUE;
				$sqlpage['styleusername'] = User::styleUsername($sqlpage['username'], $sqlpage['nickstyle']);
				$smarty->assign('page', $sqlpage);
				$smarty->assign('commentscount', Post::countComments($sqlpage['pid']));
				$smarty->assign('comments', Post::getComments($sqlpage['pid'], $limit, $offset));
				$smarty->assign('nextpage', Post::checkNextPageInComments($sqlpage['pid'], $limit, $offset));
				$page = 'page.html';
			}
			else
			{
				$title = $lang['404'];
				$page = 'errors/404.html';
			}
		}
		else if($urlparam[1] == $config['categoryurl'])
		{
			$category = $db->fetch($db->query("SELECT cid, category_title, category_description FROM ".$db->prefix."categories WHERE category_url = '".@$urlparam[2]."'"));
			if($category)
			{
				$news = Post::news($limit, $offset, $category[0]['cid']);
				$x = 0;
				foreach($news as $n)
				{
					$news[$x]['styleusername'] = User::styleUsername($news[$x]['username'], $news[$x]['nickstyle']);
					++$x;
				}
				$smarty->assign('category', $category[0]);
				$smarty->assign('news', $news);
				$smarty->assign('nextpage', Post::checkNextPage($limit, $offset, $category[0]['cid']));
				$page = 'homepage.html';
				$title = $category[0]['category_title'];
			}
			else
			{
				$title = $lang['404'];
				$page = 'errors/404.html';
			}
		}
		else if($urlparam[1] == $config['authorurl'])
		{
			$author = $db->fetch($db->query("SELECT *
			FROM ".$db->prefix."users
			JOIN ".$db->prefix."groups ON ".$db->prefix."groups.gid = ".$db->prefix."users.uid 
			WHERE ".$db->prefix."users.username = '".@$urlparam[2]."'"));
			if($author)
			{
				$news = Post::news($limit, $offset, FALSE, $author[0]['uid']);
				$author[0]['username'] = User::styleUsername($author[0]['username'], $author[0]['nickstyle']);
				$x = 0;
				foreach($news as $n)
				{
					$news[$x]['styleusername'] = $author[0]['username'];
					++$x;
				}
				$smarty->assign('author', $author[0]);
				$smarty->assign('news', $news);
				$smarty->assign('nextpage', Post::checkNextPage($limit, $offset, FALSE, $author[0]['uid']));
				$page = 'homepage.html';
				$title = strip_tags($author[0]['username']);
			}
			else
			{
				$title = $lang['404'];
				$page = 'errors/404.html';
			}
		}
		else
		{
			$sqlpage = Post::get($urlparam[1], TRUE);
			if($sqlpage)
			{
				if(@$_POST['comment'])
				{
					if($user)
					{
						$author = $user['uid'];
						$email = $user['email'];
						$content = Core::textEscape($_POST['content'], TRUE, TRUE);
						if(!empty($content))
						{
							if(strlen($content) < (int)$config['comment_max_length'])
							{
								if(Post::addComment($sqlpage['pid'], 'user', $author, $content, $email))
								{
									$msg = $lang['comment_sucess'];
								}
								else
								{
									$msg = $lang['server_error'];
								}
							}
							else
							{
								$msg = $lang['too_long'];
							}
						}
						else
						{
							$msg = $lang['not_empty'];
						}
						$smarty->assign('msg', $msg);
					}
					else
					{
						$author = Core::textEscape($_POST['nick'], TRUE, TRUE);
						$email = Core::textEscape($_POST['email'], TRUE, TRUE);
						$content = Core::textEscape($_POST['content'], TRUE, TRUE);
						$cookie = Cookie::get('commentadd-'.$sqlpage['pid'], FALSE);
						if(!$cookie)
						{
							if(!empty($author) && !empty($email) && !empty($content))
							{
								if(strlen($author) < 60 && strlen($content) < (int)$config['comment_max_length'])
								{
									if(filter_var($email, FILTER_VALIDATE_EMAIL))
									{
										if(Post::addComment($sqlpage['pid'], 'guest', $author, $content, $email))
										{
											Cookie::set('commentadd-'.$sqlpage['pid'], 'TRUE', (int)$config['comment_wait_time']);
											$msg = $lang['comment_sucess'];
										}
										else
										{
											$msg = $lang['server_error'];
										}
									}
									else
									{
										$msg = $lang['not_valid_email'];
									}
								}
								else
								{
									$msg = $lang['too_long'];
								}
							}
							else
							{
								$msg = $lang['not_empty'];
							}
						}
						else
						{
							$msg = str_replace('{time}', $config['comment_wait_time'], $lang['you_must_wait']);
						}
						$smarty->assign('msg', $msg);
					}
				}
				$title = $sqlpage['title'];
				$sqlpage['one'] = TRUE;
				$sqlpage['article'] = FALSE;
				$smarty->assign('page', $sqlpage);
				$smarty->assign('commentscount', Post::countComments($sqlpage['pid']));
				$smarty->assign('comments', Post::getComments($sqlpage['pid'], $limit, $offset));
				$smarty->assign('nextpage', Post::checkNextPageInComments($sqlpage['pid'], $limit, $offset));
				$page = 'page.html';
			}
			else
			{
				$title = $lang['404'];
				$page = 'errors/404.html';
			}
		}
	}
	else
	{
		$smarty->assign('ban', $ban);
		$title = $lang['you_are_banned'];
		$page = 'ban.html';
	}
	
	$generated['stop'] = microtime(true);
	$generated['result'] = $generated['stop'] - $generated['start'];
	
	$resulttitle = $title.' - '.$config['sitetitle'];
	$smarty->assign('title', $resulttitle);
	$smarty->assign('generated', number_format($generated['result'], 4));
	
	$smarty->display('header.html');
	$smarty->display('nav.html');
	$smarty->display('before_content.html');
	$smarty->display($page);
	$smarty->display('after_content.html');
	$smarty->display('footer.html');
	
	// Debug
		echo '
		<style>
		.liberumcms-table { border-collapse: collapse; width: 90%; margin: auto; border: 1px solid #222; background: #fff; }
		.liberumcms-table td { padding: 10px; border-bottom: 1px solid #222; }
		.liberumcms-table tr:hover:not(.liberumcms-thead) { background: #ddd; }
		.liberumcms-thead { background: #222; color: #ddd; }
		</style>
		<table class="liberumcms liberumcms-table">
			<tr class="liberumcms-thead">
				<td colspan="3">URL Parse debug.</td>
			</tr>
			<tr class="liberumcms-thead">
				<td>&nbsp;</td>
				<td>Value</td>
			</tr>
			<tr>
				<td width="5%">#</td>
				<td width="95%">Full URL to parse: /';
		foreach($urlparam as $param)
		{
			echo $param.'/';
		}
		echo '</td>
			</tr>';
		$x = 1;
		foreach($urlparam as $param)
		{
			echo '
			<tr>
				<td width="5%">'.$x.'</td>
				<td width="95%">'.$param.'</td>
			</tr>';
			++$x;
		}
		echo '</table><br><br><br>';
	$q = $db->debug();
	
?> 