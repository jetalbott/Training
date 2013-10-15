<?php

/**
 * Connects and disconnects from the MySQL Database
 */

Class DatabaseConnection {
	
	/**
	 * PDO Connection Object
	 * 
	 * @var PDO
	 */
	protected static $_connection;
	
	protected static function _connect() 
	{

		try 
		{
			static::$_connection = new PDO("mysql:dbname=shopping_cart;charset=utf8", "root", "mypass");
			static::$_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} 
		catch (PDOException $e) 
		{
			echo "Connection failed: " . $e->getMessage();
		}

	}
	
	/**
	 * Gets the Connection Object
	 * 
	 * @return PDO
	 */
	protected static function _getConnection()
	{
		if (!isset(static::$_connection))
		{
			static::_connect();
		}
	
		return static::$_connection;
	
	}
	
	public static function select($tableName,array $where=array())
	{
		$query = 'SELECT * FROM `' . $tableName . '`';
		
		if (count($where) > 0)
		{
			$query .= " WHERE " . implode(" AND ",$where); 
		}
		
		return static::_getConnection()->query($query); 	
	}
}