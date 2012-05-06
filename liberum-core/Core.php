<?php
/**
 * 
 * Core of LiberumCMS, this class was parent for other.
 * @package Core
 * 
 */
class Core
{
	
	/**
	 * 
	 * This method load elements of LiberumCMS
	 * 
	 */
	public function load()
	{
		$this->loadModules();
		$this->loadClasses();
	}
	
	/**
	 * 
	 * This method load modules of LiberumCMS
	 * 
	 */
	public function loadModules()
	{
		$dir = dir(COREPATH.'modules');
		while($file = $dir->read())
		{
   			if($file != '.' && $file != '..')
				include(COREPATH.'modules/'.$file);
		}
		$dir->close();
	}
	
	/**
	 * 
	 * This method load classes of LiberumCMS
	 * 
	 */
	public function loadClasses()
	{
		global $cfg;
		if(!empty($cfg['system']['classes']))
		{
			foreach($cfg['system']['classes'] as $class)
			{
				include(COREPATH.'classes/'.$class);
			}
		}
	}
	
	/**
	 * 
	 * Function rewrite URL like a .htaccess
	 * @return Array $url
	 */
	public function urlRewrite()
	{
		$url = @$_SERVER['PATH_INFO'] ? @$_SERVER['PATH_INFO'] : '';
		$url = explode('/', $url);
		unset($url[0]);
		return $url;
	}
	
	/**
	 * 
	 * Clear text before hacking
	 * @param String $string
	 * @param Bool $mysql
	 * @param Bool $html
	 */
	static public function textEscape($string, $mysql = FALSE, $html = FALSE)
	{
		$string = stripcslashes(trim($string));
		if($mysql) $string = mysql_real_escape_string($string);
		if($html) $string = htmlspecialchars($string);
		return $string;
	}
	
	/**
	 * 
	 * Getting config from database
	 * @return Array $c
	 */
	public function getConfig()
	{
		global $db;
		$a = $db->select("SELECT * FROM `".$db->prefix."config`");
		$c = array();
		foreach($a as $b)
		{
			$c[$b['name']] = $b['value'];
		}
		return $c;
	}
	
    /**
     * Showing error
     * @param string $text
     */
	static public function error($text)
	{
		die('
		<!DOCTYPE html>
		<html>
		<head>
			<style>
			h1 { margin: 0 0 10px 0; padding: 0; border-bottom: 1px solid #ccc; }
			.liberumcms-error { border: 1px solid #cf1b1b; background: #f5f5f5; padding: 10px; box-shadow: 0 0 4px 1px #cf1b1b; 
			border-radius: 5px; font: 16px Helvetica; color: #666; }
			.liberumcms-error code { background: #222; color: #3cd538; display: block; padding: 5px; margin-top: 10px; }
			html { background: #eee; }
			body { width: 960px; margin: 60px auto; }
			</style>
		</head>
		<body>
		<div class="liberumcms-error">
			<h1>LiberumCMS Error</h1>
			'.$text.'<br><br>
			If you don\'t know what to do please visit support site.
		</div>
		</body>
		</html>
		');
	}
	
    /**
     * Showing error
     * @param string $text
	 * @param array $lang
     */
	static public function langError($text, $lang)
	{
		die('
		<!DOCTYPE html>
		<html>
		<head>
			<style>
			h1 { margin: 0 0 10px 0; padding: 0; border-bottom: 1px solid #ccc; }
			.liberumcms-error { border: 1px solid #cf1b1b; background: #f5f5f5; padding: 10px; box-shadow: 0 0 4px 1px #cf1b1b; 
			border-radius: 5px; font: 16px Helvetica; color: #666; }
			.liberumcms-error code { background: #222; color: #3cd538; display: block; padding: 5px; margin-top: 10px; }
			html { background: #eee; }
			body { width: 960px; margin: 60px auto; }
			</style>
		</head>
		<body>
		<div class="liberumcms-error">
			<h1>'.$lang['lcms_error'].'</h1>
			'.$text.'<br><br>
			'.$lang['lcms_error_text'].'
		</div>
		</body>
		</html>
		');
	}
}
?>