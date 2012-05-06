<?php
	return array(
		'system' => array( // Don't touch system config
			'classes' => array(
				'smarty/Smarty.class.php', 
				'db.class.php',
				'nbbc/nbbc.php'
			),
			'api_url' => 'http://cms.thelleo.pl/', // NEVER change this!
		),
		'db' => array(
			'host' => 'localhost',
			'user' => 'root',
			'password' => '',
			'database' => 'liberum',
			'prefix' => '',
		),
		'cookie_salt' => 'asdf54132156',
		'admin_url' => 'admin',
	);
?>