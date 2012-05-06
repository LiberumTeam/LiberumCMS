<?php
/**
 * Class is for user manage.
 *
 * @author LiberumTeam
 * @license BSD
 * @package Core
 * @subpackage Modules
 */
class User
{

	/**
	 * Hashing user password.
	 * @param $password
	 * @return string
	 */
	static public function hash($password)
	{
		return sha1($password);
	}
	
	/**
	 * Login
	 * @param string $nick
	 * @param string $password
	 * @return array $result || bool
	 */
	static public function login($nick, $password)
	{
		global $db;
		$nick = Core::textEscape($nick, TRUE);
		$query = $db->fetch($db->query("SELECT * FROM ".$db->prefix."users WHERE username = '$nick'"));
		if($query)
		{
			$result = $query[0];
			if($result['password'] === self::hash($password))
			{
				return $result;
			}
			else
			{
				return FALSE;
			}
		}
		else
		{
			return FALSE;
		}
	}
	
	/**
	 * Getting all users
	 * @param int $limit
	 * @param int $offset
	 * @return array $users || bool
	 */
	static public function getAll($limit, $offset)
	{	
		global $db;
		$users = $db->fetch($db->query("SELECT * FROM ".$db->prefix."users 
		JOIN ".$db->prefix."groups ON ".$db->prefix."groups.gid = ".$db->prefix."users.group_id
		LIMIT $limit OFFSET $offset"));
		if($users)
		{
			return $users;
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
	 * @return bool
	 */
	static public function checkNextPage($limit, $offset)
	{	
		global $db;
		$offset2 = $offset + $limit;
		$users = $db->fetch($db->query("SELECT uid FROM ".$db->prefix."users
		LIMIT $limit OFFSET $offset2"));
		if($users)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	
	/**
	 * Getting user data
	 * @param int $id
	 * @return array $query || bool
	 */
	static public function get($id)
	{
		global $db;
		$query = $db->fetch($db->query("SELECT * FROM ".$db->prefix."users
		JOIN ".$db->prefix."groups ON ".$db->prefix."groups.gid = ".$db->prefix."users.group_id
		WHERE ".$db->prefix."users.uid = '$id'"));
		if($query)
		{
			$query[0]['permissions'] = json_decode($query[0]['permissions'], TRUE);
			return $query[0];
		}
		else
		{
			return FALSE;
		}
	}
	
	/**
	 * Addign new user
	 * @param string $nick
	 * @param string $password
	 * @param string $description
	 * @param int $group
	 * @param string $email
	 * @return bool
	 */
	static public function add($nick, $password, $description, $group, $email)
	{
		global $db;
		$query = $db->query("INSERT INTO ".$db->prefix."users (username, password, user_description, group_id, email)
		VALUES ('$nick', '$password', '$description', '$group', '$email')");
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
	 * Editting user
	 * @param int $id
	 * @param string $nick
	 * @param string $password
	 * @param string $description
	 * @param int $group
	 * @param string $email
	 * @return bool
	 */
	static public function edit($id, $nick, $password, $description, $group, $email)
	{
		global $db;
		$query = $db->query("UPDATE ".$db->prefix."users 
		SET username = '$nick', ".($password ? "password = '$password', " : '')."user_description = '$description', group_id = '$group', email = '$email'
		WHERE uid = '$id'");
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
	 * Deleting user
	 * @param int $id
	 * @return bool
	 */
	static public function delete($id)
	{
		global $db;
		$query = $db->query("DELETE FROM ".$db->prefix."users WHERE uid = '$id'");
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
	 * Getting list of groups
	 * @return array
	 */
	static public function getGroups()
	{
		global $db;
		$groups = $db->query("SELECT * FROM ".$db->prefix."groups ORDER BY name ASC");
		return $db->fetch($groups);
	}
	
	/**
	 * Function parse username
	 * @param string $username
	 * @param array $group
	 * @return string $username
	 */
	static public function styleUsername($username, $group)
	{
		$username = str_replace('{username}', $username, $group);
		return $username;
	}

}
?>
