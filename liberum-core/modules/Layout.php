<?php
/**
 * Class is for layout.
 * @author LiberumTeam
 * @license BSD
 * @package Core
 * @subpackage Modules
 */
class Layout
{

	static public function menu()
	{
		global $db;
		$menu = array();
		$query = $db->fetch($db->query("SELECT * FROM ".$db->prefix."menu ORDER BY menu_order ASC"));
		if($query)
		{
			$x = 0;
			foreach($query as $result)
			{
				$menu[$x] = $result;
				if($result['type'] == 'page')
				{
					$menu[$x]['page'] = Post::getUrl($result['post_id']);
				}
				++$x;
			}
		}
		return $menu;
	}
	
	static public function sidebars()
	{
		global $db;
		$sidebars = array();
		$query = $db->fetch($db->query("SELECT * FROM ".$db->prefix."sidebars ORDER BY sidebar_order ASC"));
		if($query)
		{
			foreach($query as $result)
			{
				$sidebars[] = $result;
			}
		}
		return $sidebars;
	}

}

?>