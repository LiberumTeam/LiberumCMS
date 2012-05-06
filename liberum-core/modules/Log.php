<?php
/**
 * Module to log admin actions.
 *
 * @author LiberumTeam
 * @license BSD
 * @package Core
 * @subpackage Modules
 */
class Log
{

	static public function add($text, $user)
	{
		global $db;
		$time = time();
		$query = $db->query("INSERT INTO ".$db->prefix."logs (action, time, user) VALUES ('$text', '$time', '$user')");
		if($query)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}
	
	static public function get()
	{
		global $db;
		$query = $db->fetch($db->query("SELECT * FROM ".$db->prefix."logs ORDER BY lid DESC"));
		$x = 0;
		foreach($query as $item)
		{
			$query[$x]['time'] = date('d F Y H:i', $item['time']);
			++$x;
		}
		return $query;
	}

}

?>