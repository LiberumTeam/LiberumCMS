<?php
/**
 * Create a list of bradcrumb in site.
 *
 * @author LiberumTeam
 * @license BSD
 * @package Core
 * @subpackage Modules
 */
class Breadcrumb
{

		/**
		 * Var with bradcrumb elements
		 * @var array
		 */
		private $data = array();
		
		/**
		 * This function add element to data array
		 * @param $name 
		 * @param $link
		 */
		public function add($name, $link)
		{
				global $config;
				$this->data[] = '<a href="'.$config['url'].$link.'">'.$name.'</a>';
		}

		/**
		 * Returning breadcrumbs
		 * @return mixed
		 */
		public function get()
		{
				global $config;
				$data = '<a href="'.$config['url'].'">'.$lang['homepage'].'</a>';
				foreach($this->data as $element)
				{
						$data .= ' -> '.$element;
				}
				return $element;
		}

		/**
		 * Destroy data to get more memory for others modules
		 */
		public function __destruct()
		{
				unset($this->data);
		}

}
