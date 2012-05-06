<?php
/**
 * Post module is to articles and subpages managed by admin panel.
 *
 * @author LiberumTeam
 * @license BSD
 * @package Core
 * @subpackage Modules
 */
class Post
{

	/**
	 * Getting info about 1 post
	 * @param string|int $param -- ID or URL of post
	 * @return array $post || bool FALSE
	 */
	static public function get($param, $page = FALSE, $parse = TRUE)
	{
		global $db;
		if((int)$param > 0)
		{	
			$sqlend = "WHERE ".$db->prefix."posts.pid = $param";
		}
		else
		{
			$sqlend = "WHERE ".$db->prefix."posts.url = '$param'";
		}
		if($page)
		{
			$sqlend .= ' AND type = \'page\'';
		}
		else
		{
			$sqlend .= ' AND type = \'news\'';
		}
		$post = $db->query("SELECT * FROM ".$db->prefix."posts 
		JOIN ".$db->prefix."categories ON ".$db->prefix."categories.cid = ".$db->prefix."posts.category_id
		JOIN ".$db->prefix."users ON ".$db->prefix."posts.author_id = ".$db->prefix."users.uid
		JOIN ".$db->prefix."groups ON ".$db->prefix."groups.gid = ".$db->prefix."users.group_id
		$sqlend");
		if($post)
		{
			$p = $db->fetch($post);
			return ($p ? ( $parse ? self::parse($p[0], TRUE) : $p[0]) : FALSE);
		}
		else
		{
			return FALSE;
		}
	}
	
	/**
	 * Getting posts to show on main page
	 * @param int $limit -- Limit of records
	 * @param int $offset -- Offset of records
	 * @return array $post || bool FALSE
	 */
	static public function news($limit, $offset, $category = FALSE, $author = FALSE)
	{
		global $db;
		$sqlend = '';
		if($category)
		{
			$sqlend .= ' AND '.$db->prefix.'posts.category_id = \''.$category.'\'';
		}
		if($author)
		{
			$sqlend .= ' AND '.$db->prefix.'posts.author_id = \''.$author.'\'';
		}
		$post = $db->query("SELECT * FROM ".$db->prefix."posts 
		JOIN ".$db->prefix."categories ON ".$db->prefix."categories.cid = ".$db->prefix."posts.category_id
		JOIN ".$db->prefix."users ON ".$db->prefix."posts.author_id = ".$db->prefix."users.uid
		JOIN ".$db->prefix."groups ON ".$db->prefix."groups.gid = ".$db->prefix."users.group_id
		WHERE ".$db->prefix."posts.type = 'news'".$sqlend." AND published = 1
		ORDER BY pid DESC
		LIMIT $limit
		OFFSET $offset");
		if($post)
		{
			$posts = $db->fetch($post);
			$x = 0;
			foreach($posts as $p)
			{
				$posts[$x] = self::parse($p);
				++$x;
			}
			return $posts;
		}
		else
		{
			return FALSE;
		}
	}
	
	/**
	 * Checking next page
	 * @param int $limit
	 * @param int $offset
	 * @param int $category
	 * @param int $author
	 * @return bool
	 */
	static public function checkNextPage($limit, $offset, $category = FALSE, $author = FALSE)
	{
		global $db;
		$sqlend = '';
		if($category)
		{
			$sqlend .= ' AND category_id = \''.$category.'\'';
		}
		if($author)
		{
			$sqlend .= ' AND author_id = \''.$author.'\'';
		}
		$offset2 = $offset + $limit;
		$nextPage = $db->query("SELECT pid FROM ".$db->prefix."posts -- Comment: Check next page content
		WHERE type = 'news'".$sqlend." AND published = 1
		LIMIT $limit
		OFFSET $offset2");
		if($db->fetch($nextPage))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	
	/**
	 * Getting comments
	 * @param int $post_id
	 * @return array $comments
	 */
	static public function getComments($post_id, $limit, $offset)
	{
		global $db;
		$query = $db->query("SELECT * FROM ".$db->prefix."comments
		".($post_id ? 'WHERE post_id = '.$post_id : 'JOIN '.$db->prefix.'posts WHERE '.$db->prefix.'comments.post_id = '.$db->prefix.'posts.pid')."
		ORDER BY ".$db->prefix."comments.comment_id DESC
		LIMIT $limit
		OFFSET $offset");
		$posts = $db->fetch($query);
		$x = 0;
		foreach($posts as $p)
		{
			$posts[$x] = self::parse($p, FALSE, TRUE);
			++$x;
		}
		return $posts;
	}
	
	/**
	 * Checking next page in comments pagin
	 * @param int $post_id
	 * @param int $limit
	 * @param int $offset
	 * @return bool
	 */
	static public function checkNextPageInComments($post_id, $limit, $offset)
	{
		global $db;
		$offset2 = $offset + $limit;
		$query = $db->query("SELECT * FROM ".$db->prefix."comments
		".($post_id ? 'WHERE post_id = '.$post_id : '')."
		ORDER BY comment_id DESC
		LIMIT $limit
		OFFSET $offset2");
		if($db->fetch($query))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	
	/**
	 * Getting post URL
	 * @param int $id
	 * @return array $query || bool
	 */
	static public function getUrl($id)
	{
		global $db;
		$query = $db->fetch($db->query("SELECT url FROM ".$db->prefix."posts WHERE pid = $id"));
		if($query)
		{
			return $query[0];
		}
		else
		{
			return FALSE;
		}
	}
	
	/**
	 * Adding comment to DB
	 * @param int $post_id
	 * @param string $author_type
	 * @param string||int $author
	 * @param string $content
	 * @param string $email
	 */
	static public function addComment($post_id, $author_type, $author, $content, $email)
	{
		global $db;
		$author_sql = '';
		if($author_type == 'user')
		{
			$author_sql .= "'user', '0', '$author'";
		}
		else if($author_type == 'guest')
		{
			$author_sql .= "'guest', '$author', '0'";
		}
		$date = time();
		$ip = $_SERVER['REMOTE_ADDR'];
		$query = $db->query("INSERT INTO ".$db->prefix."comments
		(post_id, author_type, author_nick, author_id, comment_date, comment_content, author_ip, author_email)
		VALUES ($post_id, ".$author_sql.", $date, '$content', '$ip', '$email')");
		if($query)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	
	/** 
	 * Counting comments
	 * @param int $post_id
	 * @return int $query[0]['COUNT(*)']
	 */
	static public function countComments($post_id)
	{
		global $db;
		$query = $db->fetch($db->query("SELECT COUNT(*) FROM ".$db->prefix."comments WHERE post_id = $post_id"));
		return $query[0]['COUNT(*)'];
	}
	
	/** 
	 * Getting posts for admin panel
	 * @param int $limit
	 * @param int $offset
	 * @param string $type
	 * @param string $order
	 * @param string $order_type
	 * @return array $posts
	 */
	static public function adminGet($limit, $offset, $type, $order = 'pid', $order_type = 'DESC')
	{
		global $db;
		$posts = $db->fetch($db->query("SELECT * FROM ".$db->prefix."posts 
		JOIN ".$db->prefix."categories ON ".$db->prefix."categories.cid = ".$db->prefix."posts.category_id
		JOIN ".$db->prefix."users ON ".$db->prefix."posts.author_id = ".$db->prefix."users.uid
		JOIN ".$db->prefix."groups ON ".$db->prefix."groups.gid = ".$db->prefix."users.group_id
		WHERE ".$db->prefix."posts.type = '".$type."'
		ORDER BY ".$order." ".$order_type."
		LIMIT $limit
		OFFSET $offset"));
		$x = 0;
		foreach($posts as $post)
		{
			$posts[$x]['styleusername'] = User::styleUsername($post['username'], $post['nickstyle']);
			$posts[$x]['date'] = date('d-m-Y H:i', $posts[$x]['date']);
			++$x;
		}
		return $posts;
	}
	
	/**
	 * Changeing string to url 
	 * @param string $string
	 * @return string $string || string $title
	 */
	static public function stringToUrl($string)
	{
		$title = $string;
		$title = strtolower($title);
		$title = preg_replace('![^'.preg_quote('-').'\pL\pN\s]+!u', '', $title);
		$title = preg_replace('!['.preg_quote('-').'\s]+!u', '-', $title);
		$title =  trim($title, '-');
		return (empty($title) ? $string : $title);
	}
	
	/**
	 * Adding new post 
	 * @param string $title
	 * @param string $category
	 * @param int $author
	 * @param string $content
	 * @param stringe $formatting
	 * @param string $type
	 * @param int $comments
	 * @param int $accept
	 */
	static public function add($title, $category, $author, $content, $formatting, $type, $comments, $accept = '0')
	{
		global $db;
		$time = time();
		$url = self::stringToUrl($title);
		$query = $db->query("INSERT INTO ".$db->prefix."posts (title, category_id, author_id, content, formatting, type, comments, date, published, url)
		VALUES ('$title', '$category', '$author', '$content', '$formatting', '$type', '$comments', '$time', '$accept', '$url')");
		if($query)
		{
			return TRUE;
		}	
		else
		{
			return FALSE;
		}
	}
	
	/**
	 * Deleting comment
	 * @param int $cid
	 * @return bool
	 */
	static public function deleteComment($cid)
	{
		global $db;
		$query = $db->query("DELETE FROM ".$db->prefix."comments WHERE comment_id = '$cid'");
		if($query)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	
	/**
	 * Editting post
	 * @param int $id
	 * @param string $title
	 * @param string $category
	 * @param int $author
	 * @param string $content
	 * @param string $formatting
	 * @param string $type
	 * @param int $comments
	 * @param int $accept
	 * @param bool $timeupdate
	 * @return bool
	 */
	static public function edit($id, $title, $category, $author, $content, $formatting, $type, $comments, $accept = '0', $timeupdate)
	{
		global $db;
		$url = self::stringToUrl($title);
		$query = $db->query("UPDATE ".$db->prefix."posts 
		SET title = '$title', category_id = '$category', author_id = '$author', content = '$content', formatting = '$formatting', 
		type = '$type', comments = '$comments', ".($timeupdate ? 'date = \''.time().'\', ' : '')."published = '$accept', url = '$url'
		WHERE pid = $id");
		if($query)
		{
			return TRUE;
		}	
		else
		{
			return FALSE;
		}
	}
	
	/**
	 * Getting list of categories
	 * @param bool $page
	 * @param int $limit
	 * @param int $offset
	 */
	static public function categories($page = FALSE, $limit = FALSE, $offset = FALSE)
	{
		global $db;
		$categories = $db->fetch($db->query("SELECT * FROM ".$db->prefix."categories 
		ORDER BY category_title ASC
		".($page ? "LIMIT $limit OFFSET $offset" : '')));
		return $categories;
	}
	
	/**
	 * Getting category by id
	 * @param int $id
	 */
	static public function getCategory($id)
	{
		global $db;
		$category = $db->fetch($db->query("SELECT * FROM ".$db->prefix."categories WHERE cid = '$id'"));
		return $category[0];
	}
	
	/**
	 * Editting category
	 * @param int $id
	 * @param string $title
	 * @param string $description
	 * @param string $url
	 */
	static public function editCategory($id, $title, $description, $url)
	{
		global $db;
		$query = $db->query("UPDATE ".$db->prefix."categories SET category_title = '$title', category_url = '$url', category_description = '$description' WHERE cid = '$id'");
		if($query)
		{
			return TRUE;
		}	
		else
		{
			return FALSE;
		}
	}
	
	/**
	 * Deletting category
	 * @param int $id
	 */
	static public function deleteCategory($id)
	{
		global $db;
		$query = $db->query("DELETE FROM ".$db->prefix."categories WHERE cid = '$id'");
		if($query)
		{
			return TRUE;
		}	
		else
		{
			return FALSE;
		}
	}
	
	/**
	 * Adding category
	 * @param string $title
	 * @param string $description
	 * @param string $url
	 */
	static public function addCategory($title, $description, $url)
	{
		global $db;
		$query = $db->query("INSERT INTO ".$db->prefix."categories (category_title, category_url, category_description) VALUES ('$title', '$url', '$description')");
		if($query)
		{
			return TRUE;
		}	
		else
		{
			return FALSE;
		}
	}
	
	/**
	 * Checking next page in categories
	 * @param int $limit
	 * @param int $offset
	 * @return bool
	 */
	static public function checkNextPageInCategories($limit, $offset)
	{
		global $db;
		$offset2 = $offset + $limit;
		$query = $db->query("SELECT cid FROM ".$db->prefix."categories
		ORDER BY cid DESC
		LIMIT $limit
		OFFSET $offset2");
		if($db->fetch($query))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	
	/**
	 * Getting last comments
	 * @param int $limit
	 */
	static public function lastComments($limit)
	{
		global $db;
		$query = $db->query("SELECT * FROM ".$db->prefix."comments
		JOIN ".$db->prefix."posts ON ".$db->prefix."posts.pid = ".$db->prefix."comments.post_id
		ORDER BY ".$db->prefix."comments.comment_id DESC
		LIMIT $limit");
		$posts = $db->fetch($query);
		$x = 0;
		foreach($posts as $p)
		{
			$posts[$x] = self::parse($p, FALSE, TRUE);
			++$x;
		}
		return $posts;
	}
	
	/** 
	 * Checking next page in admin panel
	 * @param int $limit
	 * @param int $offset
	 * @param string $type
	 * @return bool
	 */
	static public function adminCheckPage($limit, $offset, $type)
	{
		global $db;
		$offset2 = $offset + $limit;
		$nextPage = $db->query("SELECT pid FROM ".$db->prefix."posts
		WHERE type = '$type'
		LIMIT $limit
		OFFSET $offset2");
		if($db->fetch($nextPage))
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	
	/** 
	 * Lets publish some posts!
	 * @param int $id
	 * @return bool
	 */
	static public function accept($id)
	{
		global $db;
		$query = $db->query("UPDATE ".$db->prefix."posts SET published = 1 WHERE pid = '$id'");
		if($query)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	
	/** 
	 * Lets back off some posts!
	 * @param int $id
	 * @return bool
	 */
	static public function deaccept($id)
	{
		global $db;
		$query = $db->query("UPDATE ".$db->prefix."posts SET published = 0 WHERE pid = '$id'");
		if($query)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	
	/** 
	 * Remove post.
	 * @param int $id
	 * @return bool
	 */
	static public function delete($id)
	{
		global $db;
		$query = $db->query("DELETE FROM ".$db->prefix."posts WHERE pid = '$id'");
		if($query)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	
	/**
	 * Function to parse post
	 * @param array $post -- Post content
	 * @param bool $all -- Parse full post or just part before [--cut--] element?
	 * @param bool $comment -- Is comment?
	 * @return array $post -- Parsed post
	 */
	static public function parse($post, $all = FALSE, $comment = FALSE)
	{
		global $config, $db;
		$bb = new BBCode;
		$bb->SetSmileyURL($config['url'].TPLPATH.$config['style'].'/images/smileys/');
		if($comment)
		{
			$post['comment_date'] = date('d F Y H:i', @$post['comment_date']);
			if(!empty($post['comment_content'])) 
			{
				$post['content'] = $post['comment_content'];
			}
			$post['content'] = $bb->Parse($post['content']);
			if($post['author_type'] == 'user')
			{
				$user = $db->fetch($db->query("SELECT * FROM ".$db->prefix."users
				JOIN ".$db->prefix."groups ON ".$db->prefix."groups.gid = ".$db->prefix."users.group_id
				WHERE ".$db->prefix."users.uid = ".$post['author_id']));
				$nick = User::styleUsername($user[0]['username'], $user[0]['nickstyle']);
			}
			else
			{
				$nick = $post['author_nick'];
			}
			$post['author'] = $nick;
		}
		else if(!$comment)
		{
			$post['date'] = date('d F Y H:i', @$post['date']);
			if(!$all)
			{
				$ex = explode('[--cut--]', $post['content']);
				$post['content'] = $ex[0];
			}
			else
			{
				$post['content'] = str_replace('[--cut--]', '', $post['content']);
			}
			if($post['formatting'] == 'bbcode')
			{
				$post['content'] = $bb->Parse($post['content']);
			}
			$post['one'] = FALSE;
		}
		return $post;
	}

}
?>