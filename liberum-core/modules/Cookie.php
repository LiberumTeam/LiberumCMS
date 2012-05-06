<?php

	/**
	 * Helper help with cookies
	 * @author Thelleo
	 * @package Core
	 * @subpackage Modules
	 * @info This module was created before LiberumCMS so it is other than rest
	 */
	class Cookie
	{
		
		const DAY = 86400;
		const WEEK = 604800;
		const MONTH = 2592000;
		
		/**
		 * 
		 * Salt to hash cookie content
		 * @var Mixed
		 */
		static public $salt;
		
		/**
		 * 
		 * Create a cookie
		 * @param Mixed $name
		 * @param Mixed $value
		 * @param Int $exp
		 */
		static public function set($name, $value, $exp = 86400)
		{
			
			$hash = $value.'_'.sha1($value.self::$salt);
			setcookie($name, $hash, (time() + $exp), '/');
		}
		
		/**
		 * 
		 * Check cookie
		 * @param Mixed $name
		 */
		static public function check($name)
		{
			
			$cookie = @$_COOKIE[$name];
			$value = explode('_', $cookie);
			$hash = sha1(@$value[0].self::$salt);
			if($hash == @$value[1])
			{
				
				return TRUE;
				
			}
			else
			{
				
				self::delete($name);
				return FALSE;
				
			}
			
		}
		
		/**
		 *
		 * Getting a cookie
		 * @param String name
		 */
		static public function get($name, $check = TRUE)
		{
		
			$cookie = explode('_', @$_COOKIE[$name]);
			if($check)
			{
				if(self::check($name))
				{
					return $cookie[0];
				}
				else
				{
					self::delete($name);
					return FALSE;
				}
			}
			return ($cookie[0] ? $cookie[0] : FALSE);
		}
		
		/**
		 * 
		 * Delete cookie
		 * @param String $name
		 */
		static public function delete($name)
		{
			#unset($_COOKIE[$name]);
			setcookie($name, NULL, time() - 2592000);		
		
		}
		
	}

?>