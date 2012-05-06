<?php
/**
 * Class is for ban system.
 * @author LiberumTeam
 * @license BSD
 * @package Core
 * @subpackage Modules
 */
class Ban
{

	/**
	 * Checking ban
	 * @param string $ip
	 * @return bool
	 */
	static public function check($ip)
	{
		global $db;
		$ban = $db->fetch($db->query("SELECT reason FROM ".$db->prefix."bans WHERE ip = '$ip' LIMIT 1"));
		if($ban)
		{
			return $ban[0];
		}
		else
		{
			return FALSE;
		}
	}
	
	/**
	 * Getting all bans
	 * @return array
	 */
	static public function getAll()
	{
		global $db;
		$banlist = $db->fetch($db->query("SELECT * FROM ".$db->prefix."bans"));
		return $banlist;
	}
	
	/**
	 * Adding all bans
	 * @param string $ip
	 * @param string $reason
	 * @return bool
	 */
	static public function add($ip, $reason)
	{
		global $db;
		$query = $db->query("INSERT INTO ".$db->prefix."bans (ip, reason) VALUES ('$ip', '$reason')");
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
	 * Unbanning user
	 * @param int id
	 * @return bool
	 */
	static public function delete($id)
	{
		global $db;
		$query = $db->query("DELETE FROM ".$db->prefix."bans WHERE bid = $id");
		if($query)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}	
	}

}

?>