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
	
	/**
	 * Retrieves information from the MySQL Database for display/manipulation by the PHP application.
	 * 
	 * @return array
	 */
	public static function select($tableName,array $conditions=array())
	{
		$query = 'SELECT * FROM `' . $tableName . '`';
		
		if (count($conditions) > 0)
		{
			
			$conditionStr = array();
				
			foreach ($conditions as $field => $value)
			{
				$conditionStr[$field] = '`' . $field . '` = :' . $field;
			}
			
			$query .= ' WHERE ' . implode(' AND ', $conditionStr);
		}
		
		$statement = static::_getConnection()->prepare($query); 	
	
		$statement->execute($conditions);

		$rows = array();
		
		while ($row = $statement->fetch()) $rows[] = $row;
		
		return $rows;

	}
	
	/**
	 * Changes stored information in the MySQL database.
	 * 
	 * @return array
	 */
	public static function update($tableName,array $fields,array $conditions=array())
	{
		if (empty($fields))
		{
			throw new InvalidArgumentException('No fields to update.');
		}	
			
		$query = 'UPDATE `' . $tableName . '` SET ';
		
		$values = array();
		
		$fieldStr = array();
		
		foreach ($fields as $field => $value)
		{
			$fieldStr[$field] = '`' . $field . '` = ?';
			$values[] = $value;
		}
		
		$query .= implode(', ', $fieldStr);
		
		if (count($conditions) > 0)
		{
			
			$conditionStr = array();
				
			foreach ($conditions as $field => $value)
			{
				$conditionStr[$field] = '`' . $field . '` = ?';
				$values[] = $value;
			}
			
			$query .= ' WHERE ' . implode(' AND ', $conditionStr);
		}
		
		$statement = static::_getConnection()->prepare($query);	
	
		$result = $statement->execute($values);
		
		die(var_export($result, TRUE));
	}
	
	/**
	 * Deletes information from the MySQL database.
	 * 
	 * @return array
	 */
	public static function delete($tableName,array $conditions)
	{
		if (empty($conditions))	
		{
			throw new InvalidArgumentException('No rows to delete.');
		}	
			
		$query = 'DELETE FROM `' . $tableName . '`';
			
		$conditionStr = array();
				
		foreach ($conditions as $field => $value)
		{
			$conditionStr[$field] = '`' . $field . '` = :' . $field;
		}
			
		$query .= ' WHERE ' . implode(' AND ', $conditionStr);
		
		$statement = static::_getConnection()->prepare($query); 	
	
		$result = $statement->execute($conditions);

		die(var_export($result, TRUE));
	}
	
	/**
	 * Adds new information in the MySQL database.
	 * 
	 * @return int
	 */
	public static function insert($tableName,array $conditions)
	{
		if (empty($conditions))
		{
			throw new InvalidArgumentException('No data to insert.');
		}	
			
		$query = 'INSERT INTO `' . $tableName . '` ';
		
		$columnStr = array();
		$valueStr = array();
		
		foreach ($conditions as $field => $value)
		{
			$columnStr[$field] = '`' . $field . '`';
			$valueStr[$field] = ':' . $field;
		}
		
		$query .= '(' . implode(', ', $columnStr) . ')';
		$query .= ' VALUES (' . implode(', ', $valueStr) . ')';
		
		$statement = static::_getConnection()->prepare($query);	
	
		$result = $statement->execute($conditions);
		
		$id = static::_getConnection()->lastInsertId('id');
		
		return $id;
		
		die(var_export($result, TRUE));
	}
}