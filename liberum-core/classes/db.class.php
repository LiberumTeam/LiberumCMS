<?php
/**
 * This class connect to MySQL server and sending queries.
 * @author Thelleo
 * @version 1.0
 */
class DB
{
	
	/**
	 * List of queries
	 * @var Array
	 */
	private $queries = array();
	
	/**
	 * Handler of actuall connection
	 */
	private $id;
	
	/**
	 * 
	 * Prefix of tables in db
	 * @var String
	 */
	public $prefix = '';
	
	/**
	 * 
	 * Connecting to MySQL server
	 * @param String $host       -- Host of MySQL server, example: localhost
	 * @param String $user       -- Username of MySQL user
	 * @param String $password   -- Password of MySQL user
	 * @param String $database   -- Database name
	 */
	public function __construct($host, $user, $password, $database)
	{
		if($this->id = @mysql_connect($host, $user, $password))
		{
			if(@mysql_select_db($database, $this->id))
			{
				return TRUE;
			}
			else
			{
				$this->error('Can\'t chose database!');
			}
		}
		else
		{
			$this->error('Can\'t connect to MySQL server!');
		}
	}
	
	/**
	 * 
	 * Do a query
	 * @param String $query
	 */
	public function query($query)
	{
		$sql = $query;
		if($result = mysql_query($sql, $this->id))
		{
			$this->queries[] = array(
				'type' => 'query',
				'value' => $query,
			);
			return $result;
		}
		else
		{
			$this->error('Error when try to do a query:<br><code>'.nl2br($sql).'</code>');
		}
	}
	
	/**
	 * 
	 * Do and fetch query
	 * @param String $query
	 */
	public function select($query)
	{
		$sql = $query;
		if($result = mysql_query($sql, $this->id))
		{
			$fetch = array();
			while($s = mysql_fetch_assoc($result))
			{
				$fetch[] = $s;
			}
			$this->queries[] = array(
				'type' => 'simple select',
				'value' => $query,
			);
			return $fetch;
		}
		else
		{
			$this->error('Error when try to do and fetch a query:<br><code>'.nl2br($sql).'</code>');
		}
	}
	
	/**
	 * 
	 * Fetching query
	 * @param Resource $result
	 * @param Int $type
	 */
	public function fetch($result)
	{
		$done = FALSE;
		$return = array();
		while($r = mysql_fetch_assoc($result))
		{
			$return[] = $r;
		}
		return $return;
	}
	
	/**
	 * Showing number of queries
	 * @return int
	 */
	public function queriesNum()
	{
		return count($this->queries);
	}
	
	/**
	 * 
	 * Show debug info for developers
	 */
	public function debug()
	{
		echo '
		<style>
		.liberumcms-table { border-collapse: collapse; width: 90%; margin: auto; border: 1px solid #222; background: #fff; }
		.liberumcms-table td { padding: 10px; border-bottom: 1px solid #222; }
		.liberumcms-table tr:hover:not(.liberumcms-thead) { background: #ddd; }
		.liberumcms-thead { background: #222; color: #ddd; }
		</style>
		<table class="liberumcms liberumcms-table">
			<tr class="liberumcms-thead">
				<td colspan="3">MySQL Debug; Number of queries: '.count($this->queries).'</td>
			</tr>
			<tr class="liberumcms-thead">
				<td>&nbsp;</td>
				<td>Type</td>
				<td>Value</td>
			</tr>';
		$x = 1;
		foreach($this->queries as $query)
		{
			echo '
			<tr>
				<td width="5%">'.$x.'</td>
				<td width="15%">'.$query['type'].'</td>
				<td width="80%">'.nl2br($query['value']).'</td>
			</tr>';
			$x++;
		}
		echo '</table><br><br><br>';
	}
	
	/**
	 * 
	 * Display error and die script
	 * @param String $text
	 */
	private function error($text)
	{
		Core::error('[Database] - '.mysql_error($this->id).'<br>'.$text);
	}
	
	/**
	 * 
	 * Disconnect from server and destroy saved values
	 */
	public function __destruct()
	{
		mysql_close($this->id);	
		unset($this->id);
		unset($this->queries);
	}
	
}
?>