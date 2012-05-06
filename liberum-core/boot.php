<?php

	define('LC_VERSION', '0.0.1-InDev');
	define('LC_CODENAME', 'Development');
	define('LC_VERSION_INT', '001');
	
	include(COREPATH.'Core.php');
	$LiberumCMS = new Core;
	$LiberumCMS->loadClasses();
	$urlparam = $LiberumCMS->urlRewrite();    
	
	$db = new DB($cfg['db']['host'], $cfg['db']['user'], $cfg['db']['password'], $cfg['db']['database']);
	$db->query('SET NAMES utf8');
	$config = $LiberumCMS->getConfig();
	$lang = include(INCPATH.'language/'.$config['lang'].'.php');
	if(!isset($cfg) || !isset($config) || !isset($lang))
	{
		Core::error('Fail to load config or lang files! :: ~/liberum-core/boot.php');
	}
	
?>