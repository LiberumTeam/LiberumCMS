<?php

	/**
	 * 
	 * LiberumCMS is open-source Content Manage System for webmasters and
	 * typical clients. LiberumCMS is created by LiberumTeam.
	 * 
	 * @name LiberumCMS Admin
	 * @author LiberumTeam
	 * @copyright LiberumTeam 2012-forever
	 * @license BSD License
	 * 
	 */
	 
    session_start();
	$generated['start'] = microtime(true);
	define('IN_LC', TRUE);
	define('COREPATH', '../liberum-core/');
	define('INCPATH', '../include/');
	define('TPLPATH', 'style/');
	$cfg = include('../include/config.php');
	include(COREPATH.'boot.php');
	$smarty = new Smarty();
	$smarty->setTemplateDir(TPLPATH.'templates/');
	$smarty->setCompileDir(TPLPATH.'_compile');
	$smarty->setCacheDir('../cache');
	$LiberumCMS->loadModules(); // We load modules now because they can use Smarty lib
	$smarty->assign('cfg', $config);
	$smarty->assign('lang', $lang);
	$smarty->assign('images', $config['url'].$cfg['admin_url'].'/style/images/');
	$smarty->assign('icons', $config['url'].$cfg['admin_url'].'/style/images/icons/');
	$smarty->assign('style', $config['url'].$cfg['admin_url'].'/style/');
	$smarty->assign('js', $config['url'].$cfg['admin_url'].'/style/js/');
	$smarty->assign('url', $config['url'].$cfg['admin_url'].'/index.php/');
	$smarty->assign('portal_url', $config['url']);
	$smarty->assign('version', LC_VERSION);
    $smarty->assign('versionint', LC_VERSION_INT);
    $smarty->assign('versioncodename', LC_CODENAME);
    $smarty->assign('stats', Stats::all());
	$smarty->assign('phpver', phpversion());
	$smarty->assign('styleinfo', file_exists(INCPATH.'styles/'.$config['style'].'/config.php') ? include(INCPATH.'styles/'.$config['style'].'/config.php') : FALSE);
	$smarty->assign('furl', ($config['furls'] != 1 ? 'index.php/' : ''));
	Cookie::$salt = $cfg['cookie_salt'];
	$uc = Cookie::get('user_id');
	if($uc && $uc != 'false')
	{
		$user = User::get($uc);
        $user['styleusername'] = User::styleUsername($user['username'], $user['nickstyle']);
        $user['stylegroup'] = User::styleUsername($user['name'], $user['nickstyle']);
	}
	else
	{
		$user = FALSE;
	}
	if($user)
	{
		$limit = 10;
		$page_number = Core::textEscape(@$_GET['page']);
		if(empty($page_number)) {
			$offset = 0;
			$page_number = 1;
		}
		else {
			$offset = $limit * ($page_number - 1);
		}
		// ACP
		// =homepage
		if(empty($urlparam[1]))
		{
			$logs = Log::get();
			$smarty->assign('logs', $logs);
			$smarty->assign('lastcomments', Post::lastComments(5));
			$content = 'homepage.html';
		}
		// =logout
        else if($urlparam[1] == 'logout')
        {
			Cookie::set('user_id', 'false');
            header('Location: '.$config['url'].$cfg['admin_url'].'/index.php/');
        }
		// =credits
        else if($urlparam[1] == 'credits')
        {
			$content = 'credits.html';
        }
		// =updates
        else if($urlparam[1] == 'updates')
        {
			$file = @file_get_contents($cfg['system']['api_url'].'?action=version');
			if($file)
			{
				$file = json_decode($file, TRUE);
				$smarty->assign('ver', $file);
			}
			else
			{
				$smarty->assign('ver', FALSE);
			}
			$content = 'updates.html';
        }
		// =config
        else if($urlparam[1] == 'config')
        {
			if(@$_POST['configformsubmit'])
			{
				unset($_POST['configformsubmit']);
				foreach($_POST as $key => $post)
				{
					$_POST[$key] = Core::textEscape($post, TRUE);
				}
				$error = FALSE;
				foreach($_POST as $key => $post)
				{
					if(!$db->query("UPDATE ".$db->prefix."config 
					SET value = '$post'
					WHERE name = '$key'"))
					{
						$error = TRUE;
					}
				}
				if($error)
				{
					$msg = '<div class="error">'.$lang['error'].'</div>';
				}
				else
				{
					$msg = '<div class="success">'.$lang['success'].'</div>';
				}
				$smarty->assign('msg', $msg);
				$smarty->assign('cfg', Core::getConfig());
				$smarty->assign('furl', ($config['furls'] != 1 ? 'index.php/' : ''));
			}
			$content = 'config.html';
        }
		// =bans
        else if($urlparam[1] == 'bans')
        {
			if(@$_POST['ban'])
			{
				$ip = $_POST['ip'];
				$reason = $_POST['reason'];
				if(Ban::add($ip, $reason))
				{
					$msg = '<div class="success">'.$lang['success'].'</div>';
				}
				else
				{
					$msg = '<div class="error">'.$lang['error'].'</div>';
				}
				$smarty->assign('msg', $msg);
			}
			if(@$urlparam[2] == 'unban')
			{
				if(Ban::delete($urlparam[3]))
				{
					$msg = '<div class="success">'.$lang['success'].'</div>';
				}
				else
				{
					$msg = '<div class="error">'.$lang['error'].'</div>';
				}
				$smarty->assign('msg', $msg);
			}
			$smarty->assign('bans', Ban::getAll());
			$content = 'bans.html';
		}
		// =templates
		else if($urlparam[1] == 'templates')
		{
			if(@$urlparam[2] == 'set')
			{
				if($db->query("UPDATE ".$db->prefix."config SET value = '".$urlparam[3]."' WHERE name = 'style'"))
				{
					$msg = '<div class="success">'.$lang['success'].'</div>';
				}
				else
				{
					$msg = '<div class="error">'.$lang['error'].'</div>';
				}
				$smarty->assign('msg', $msg);
				$smarty->assign('cfg', Core::getConfig());
			}
			$templates = '';
			$dir = INCPATH.'styles/';
			$dh = opendir($dir);
			$donttpls = array('.', '..', '_compile');
			$x = 0;
			while($file = readdir($dh))
			{
				if(!in_array($file, $donttpls))
				{
					$templates[$x] = file_exists($dir.$file.'/config.php') ? include($dir.$file.'/config.php') : FALSE;
					$templates[$x]['folder'] = $file;
					++$x;
				}
			}
			closedir($dh);
			$smarty->assign('templates', $templates);
			$content = 'templates.html';
		}
		// =langs
		else if($urlparam[1] == 'langs')
		{
			if(@$urlparam[2] == 'set')
			{
				if($db->query("UPDATE ".$db->prefix."config SET value = '".$urlparam[3]."' WHERE name = 'lang'"))
				{
					$msg = '<div class="success">'.$lang['success'].'</div>';
				}
				else
				{
					$msg = '<div class="error">'.$lang['error'].'</div>';
				}
				$smarty->assign('msg', $msg);
				$smarty->assign('cfg', Core::getConfig());
			}
			$langs = '';
			$dir = INCPATH.'language/';
			$dh = opendir($dir);
			$dontlang = array('.', '..');
			$x = 0;
			while($file = readdir($dh))
			{
				if(!in_array($file, $dontlang))
				{
					$langs[$x] = file_exists($dir.$file) ? include($dir.$file) : FALSE;
					$langs[$x]['file'] = basename($file, '.php');
					++$x;
				}
			}
			closedir($dh);
			$smarty->assign('langs', $langs);
			$content = 'langs.html';
		}
		// =posts
		else if($urlparam[1] == 'posts')
		{
			// =news
			if($urlparam[2] == 'news')
			{
				$msg = '';
				if($urlparam[3] == 'add')
				{
					if(@$_POST['news_add'])
					{
						$title = Core::textEscape($_POST['title'], TRUE, FALSE);
						$category = Core::textEscape($_POST['category'], TRUE, FALSE);
						$formatting = Core::textEscape($_POST['formatting'], TRUE, FALSE);
						$comments = Core::textEscape($_POST['comments'], TRUE, FALSE);
						$content = Core::textEscape($_POST['content'], TRUE, FALSE);
						$accept = Core::textEscape(@$_POST['accept'], TRUE, FALSE);
						if(Post::add($title, $category, $user['uid'], $content, $formatting, 'news', $comments, $accept))
						{
							$msg = '<div class="success">'.$lang['success'].'</div>';
							header('Location: '.$config['url'].$cfg['admin_url'].'/index.php/posts/news/');
						}
						else
						{
							$msg = '<div class="error">'.$lang['error'].'</div>';
						}
						$smarty->assign('msg', $msg);
					}
					$smarty->assign('categories', Post::categories());
					$content = 'news_add.html';
				}
				else if($urlparam[3] == 'edit')
				{
					if(@$_POST['news_edit'])
					{
						$title = Core::textEscape($_POST['title'], TRUE, FALSE);
						$category = Core::textEscape($_POST['category'], TRUE, FALSE);
						$formatting = Core::textEscape($_POST['formatting'], TRUE, FALSE);
						$comments = Core::textEscape($_POST['comments'], TRUE, FALSE);
						$content = Core::textEscape($_POST['content'], TRUE, FALSE);
						$accept = Core::textEscape(@$_POST['accept'], TRUE, FALSE);
						$timeupdate = Core::textEscape(@$_POST['timeupdate'], TRUE, FALSE);
						if(Post::edit($urlparam[4], $title, $category, $user['uid'], $content, $formatting, 'news', $comments, $accept, $timeupdate))
						{
							$msg = '<div class="success">'.$lang['success'].'</div>';
						}
						else
						{
							$msg = '<div class="error">'.$lang['error'].'</div>';
						}
						$smarty->assign('msg', $msg);
					}
					$post = Post::get($urlparam[4], NULL, FALSE);
					$smarty->assign('post', $post);
					$smarty->assign('categories', Post::categories());
					$content = 'news_edit.html';
				}
				else
				{
					if($urlparam[3] == 'accept')
					{
						if(Post::accept($urlparam[4]))
						{
							$msg = '<div class="success">'.$lang['success'].'</div>';
						}
						else
						{
							$msg = '<div class="error">'.$lang['error'].'</div>';
						}
					}
					else if($urlparam[3] == 'deaccept')
					{
						if(Post::deaccept($urlparam[4]))
						{
							$msg = '<div class="success">'.$lang['success'].'</div>';
						}
						else
						{
							$msg = '<div class="error">'.$lang['error'].'</div>';
						}
					}
					else if($urlparam[3] == 'delete')
					{
						if(Post::delete($urlparam[4]))
						{
							$msg = '<div class="success">'.$lang['success'].'</div>';
						}
						else
						{
							$msg = '<div class="error">'.$lang['error'].'</div>';
						}
					}
					$smarty->assign('msg', $msg);
					$smarty->assign('news', Post::adminGet($limit, $offset, 'news'));
					$smarty->assign('thispage', $page_number);
					$smarty->assign('nextpage', Post::adminCheckPage($limit, $offset, 'news'));
					$content = 'news.html';
				}
			}
			// =pages
			else if($urlparam[2] == 'pages')
			{
				
				$msg = '';
				if($urlparam[3] == 'add')
				{
					if(@$_POST['page_add'])
					{
						$title = Core::textEscape($_POST['title'], TRUE, FALSE);
						$formatting = Core::textEscape(@$_POST['formatting'], TRUE, FALSE);
						$comments = Core::textEscape(@$_POST['comments'], TRUE, FALSE);
						$content = Core::textEscape(@$_POST['content'], TRUE, FALSE);
						$accept = Core::textEscape(@$_POST['accept'], TRUE, FALSE);
						if(Post::add($title, 1, $user['uid'], $content, $formatting, 'page', $comments, $accept))
						{
							$msg = '<div class="success">'.$lang['success'].'</div>';
							header('Location: '.$config['url'].$cfg['admin_url'].'/index.php/posts/pages/');
						}
						else
						{
							$msg = '<div class="error">'.$lang['error'].'</div>';
						}
						$smarty->assign('msg', $msg);
					}
					$content = 'page_add.html';
				}
				else if($urlparam[3] == 'edit')
				{
					if(@$_POST['page_edit'])
					{
						$title = Core::textEscape($_POST['title'], TRUE, FALSE);
						$formatting = Core::textEscape($_POST['formatting'], TRUE, FALSE);
						$comments = Core::textEscape($_POST['comments'], TRUE, FALSE);
						$content = Core::textEscape($_POST['content'], TRUE, FALSE);
						$accept = Core::textEscape(@$_POST['accept'], TRUE, FALSE);
						$timeupdate = Core::textEscape(@$_POST['timeupdate'], TRUE, FALSE);
						if(Post::edit($urlparam[4], $title, 1, $user['uid'], $content, $formatting, 'page', $comments, $accept, $timeupdate))
						{
							$msg = '<div class="success">'.$lang['success'].'</div>';
						}
						else
						{
							$msg = '<div class="error">'.$lang['error'].'</div>';
						}
						$smarty->assign('msg', $msg);
					}
					$post = Post::get($urlparam[4], TRUE, FALSE);
					$smarty->assign('post', $post);
					$content = 'page_edit.html';
				}
				else
				{
					if($urlparam[3] == 'accept')
					{
						if(Post::accept($urlparam[4]))
						{
							$msg = '<div class="success">'.$lang['success'].'</div>';
						}
						else
						{
							$msg = '<div class="error">'.$lang['error'].'</div>';
						}
					}
					else if($urlparam[3] == 'deaccept')
					{
						if(Post::deaccept($urlparam[4]))
						{
							$msg = '<div class="success">'.$lang['success'].'</div>';
						}
						else
						{
							$msg = '<div class="error">'.$lang['error'].'</div>';
						}
					}
					else if($urlparam[3] == 'delete')
					{
						if(Post::delete($urlparam[4]))
						{
							$msg = '<div class="success">'.$lang['success'].'</div>';
						}
						else
						{
							$msg = '<div class="error">'.$lang['error'].'</div>';
						}
					}
					$smarty->assign('msg', $msg);
					$smarty->assign('news', Post::adminGet($limit, $offset, 'page'));
					$smarty->assign('thispage', $page_number);
					$smarty->assign('nextpage', Post::adminCheckPage($limit, $offset, 'page'));
					$content = 'pages.html';
				}
			}
			else if($urlparam[2] == 'comments')
			{
				if($urlparam[3] == 'delete')
				{
					if(Post::deleteComment($urlparam[4]))
					{
						$msg = '<div class="success">'.$lang['success'].'</div>';
						if(@$_GET['homepage'] == '1')
						{
							header('Location: '.$config['url'].$cfg['admin_url'].'/index.php');
						}
					}
					else
					{
						$msg = '<div class="error">'.$lang['error'].'</div>';
					}
					$smarty->assign('msg', $msg);
				}
				$comments = Post::getComments(FALSE, $limit, $offset);
				$smarty->assign('comments', $comments);
				$smarty->assign('thispage', $page_number);
				$smarty->assign('nextpage', Post::checkNextPageInComments(FALSE, $limit, $offset));
				$content = 'comments.html';
			}
			else if($urlparam[2] == 'categories')
			{
				if($urlparam[3] == 'add')
				{
					if(@$_POST['category_add'])
					{
						$title = Core::textEscape($_POST['title'], TRUE);
						$desc = Core::textEscape($_POST['desc'], TRUE);
						$url = Core::textEscape($_POST['url'], TRUE);
						if(Post::addCategory($title, $desc, $url))
						{
							$msg = '<div class="success">'.$lang['success'].'</div>';
							header('Location: '.$config['url'].$cfg['admin_url'].'/index.php/posts/categories/');
						}
						else
						{
							$msg = '<div class="error">'.$lang['error'].'</div>';
						}	
						$smarty->assign('msg', $msg);	
					}
					$content = 'category_add.html';	
				}
				else if($urlparam[3] == 'edit')
				{
					$id = $urlparam[4];
					if(@$_POST['category_edit'])
					{
						$title = Core::textEscape($_POST['title'], TRUE);
						$desc = Core::textEscape($_POST['desc'], TRUE);
						$url = Core::textEscape($_POST['url'], TRUE);
						if(Post::editCategory($id, $title, $desc, $url))
						{
							$msg = '<div class="success">'.$lang['success'].'</div>';
						}
						else
						{
							$msg = '<div class="error">'.$lang['error'].'</div>';
						}		
						$smarty->assign('msg', $msg);	
					}
					$smarty->assign('category', Post::getCategory($id));
					$content = 'category_edit.html';	
				}
				else
				{
					if($urlparam[3] == 'delete')
					{
						if(Post::deleteCategory($urlparam[4]))
						{
							$msg = '<div class="success">'.$lang['success'].'</div>';
						}
						else
						{
							$msg = '<div class="error">'.$lang['error'].'</div>';
						}
						$smarty->assign('msg', $msg);
					}
					$categories = Post::categories(TRUE, $limit, $offset);
					$smarty->assign('categories', $categories);
					$smarty->assign('thispage', $page_number);
					$smarty->assign('nextpage', Post::checkNextPageInCategories($limit, $offset));
					$content = 'categories.html';
				}
			}
			else
			{
				$content = '404.html';
			}
		}
		// =user
		else if($urlparam[1] == 'users')
		{
			if($urlparam[2] == 'add')
			{
				if(@$_POST['user_add'])
				{
					$nick = Core::textEscape($_POST['nick'], TRUE);
					$password = sha1($_POST['password']);
					$email = Core::textEscape($_POST['email'], TRUE);
					$group = Core::textEscape($_POST['group'], TRUE); 
					$description = Core::textEscape($_POST['description'], TRUE);
					if(empty($nick) || empty($email) || empty($group) || empty($description))
					{
						$msg = '<div class="error">'.$lang['not_empty'].'</div>';
					}
					else
					{
						if(User::add($nick, $password, $description, $group, $email))
						{
							$msg = '<div class="success">'.$lang['success'].'</div>';
							header('Location: '.$config['url'].$cfg['admin_url'].'/index.php/users/');
						}
						else
						{
							$msg = '<div class="error">'.$lang['error'].'</div>';
						}	
					}
					$smarty->assign('msg', $msg);
				}
				$groups = User::getGroups();
				$smarty->assign('groups', $groups);
				$content = 'user_add.html';
			}
			else if($urlparam[2] == 'edit')
			{
				$uid = $urlparam[3];
				if(@$_POST['user_edit'])
				{
					$nick = Core::textEscape($_POST['nick'], TRUE);
					$password = (!empty($_POST['password']) ? sha1($_POST['password']) : FALSE);
					$email = Core::textEscape($_POST['email'], TRUE);
					$group = Core::textEscape($_POST['group'], TRUE); 
					$description = Core::textEscape($_POST['description'], TRUE);
					if(empty($nick) || empty($email) || empty($group) || empty($description))
					{
						$msg = '<div class="error">'.$lang['not_empty'].'</div>';
					}
					else
					{
						if(User::edit($uid, $nick, $password, $description, $group, $email))
						{
							$msg = '<div class="success">'.$lang['success'].'</div>';
						}
						else
						{
							$msg = '<div class="error">'.$lang['error'].'</div>';
						}	
					}
					$smarty->assign('msg', $msg);
				}
				$paramuser = User::get($uid);
				$groups = User::getGroups();
				$smarty->assign('groups', $groups);
				$smarty->assign('user', $paramuser);
				$content = 'user_edit.html';
			}
			else
			{
				$msg = '';
				if($urlparam[2] == 'delete')
				{
					if(User::delete($urlparam[3]))
					{
						$msg = '<div class="success">'.$lang['success'].'</div>';
					}
					else
					{
						$msg = '<div class="error">'.$lang['error'].'</div>';
					}
				}
				$users = User::getAll($limit, $offset);
				$x = 0;
				foreach($users as $user2)
				{
					$users[$x]['styleusername'] = User::styleUsername($user2['username'], $user2['nickstyle']);
					$users[$x]['stylegroup'] = User::styleUsername($user2['name'], $user2['nickstyle']);
					++$x;
				}
				$smarty->assign('msg', $msg);
				$smarty->assign('users', $users);
				$smarty->assign('thispage', $page_number);
				$smarty->assign('nextpage', User::checkNextPage($limit, $offset));
				$content = 'users.html';
			}
		}
		else if($urlparam[1] == 'profile')
		{
			$msg = '';
			if(@$_POST['user_edit'])
			{
				$nick = $user['username'];
				$password = (!empty($_POST['password']) ? sha1($_POST['password']) : FALSE);
				$email = Core::textEscape($_POST['email'], TRUE);
				$group = $user['group_id'];
				$description = Core::textEscape($_POST['description'], TRUE);
				if(empty($nick) || empty($email) || empty($group) || empty($description))
				{
					$msg = '<div class="error">'.$lang['not_empty'].'</div>';
				}
				else
				{
					if(User::edit($user['uid'], $nick, $password, $description, $group, $email))
					{
						$msg = '<div class="success">'.$lang['success'].'</div>';
						header('Location: '.$config['url'].$cfg['admin_url'].'/index.php/profile/?msg=success');
					}
					else
					{
						$msg = '<div class="error">'.$lang['error'].'</div>';
					}
				}
			}
			if(@$_GET['msg'] == 'success')
			{
				$msg = '<div class="success">'.$lang['success'].'</div>';
			}
			$smarty->assign('msg', $msg);
			$smarty->assign('user', $user);
			$content = 'user_edit_profile.html';
		}
        else
        {
            $content = '404.html';
        }
	}
	else
	{
		// Login
		if(@$_POST['login'])
		{
			$nick = $_POST['nick'];
			$password = $_POST['pass'];
			if($login = User::login($nick, $password))
			{
				Cookie::set('user_id', $login['uid']);
                header('Location: '.$config['url'].$cfg['admin_url'].'/index.php/');
				$msg = '<div class="success">'.$lang['logged'].'</div>';
			}
			else
			{
				$msg = '<div class="error">'.$lang['logged_error'].'</div>';
			}
			$smarty->assign('msg', $msg);
		}
	}
	
	$os = php_uname('s').' '.php_uname('r').' '.php_uname('v');
	$httpd = $_SERVER['SERVER_SOFTWARE'];
	
	$query = $db->fetch($db->query("SELECT VERSION()"));
	$version = $query[0]['VERSION()'];
	$smarty->assign('mysqlver', $version);
	$smarty->assign('user', $user);
	$smarty->assign('os', $os);
	$smarty->assign('httpd', $httpd);
	$generated['stop'] = microtime(true);
	$generated['result'] = $generated['stop'] - $generated['start'];
	$smarty->assign('generated', number_format($generated['result'], 4));
	$smarty->assign('queries', $db->queriesNum());
	if(!isset($urlparam[1]))
	{
		$urlparam[1] = 1;
	}
	if(!isset($urlparam[2]))
	{
		$urlparam[2] = 1;
	}
	$smarty->assign('urlparam', $urlparam);
	
	$mem_usage = memory_get_usage(true);
	if($mem_usage < 1024)
	{
		$memory = $mem_usage." B";
	}
	else if($mem_usage < 1048576)
	{
		$memory = ($mem_usage/1024)." kB";
	}
	else
	{
		$memory = ($mem_usage/1048576)." MB";
	}
	$smarty->assign('memory', $memory);
	$smarty->display('header.html');
	if($user)
	{
		$smarty->display('nav.html');
		$smarty->display($content);
	}
	else
	{
		$smarty->display('login.html');
	}	
	$smarty->display('footer.html');
?>