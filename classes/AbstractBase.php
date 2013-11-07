<?php

/**
 * Contains base properties used across all objects
 */
class AbstractBase
{
	/**
	 * Contains individual object IDs
	 * 
	 * @var int
	 */
	protected $_id;
	
	/**
	 * Returns the object's ID
	 * 
	 * @return int
	 */
	function getId()
	{
		return $this->_id;
	}
	
	public static function create(array $data)
	{
		$id = DatabaseConnection::insert(static::$_tableName, $data);
		
		$idArray = array('id' => $id);
		
		$rows = DatabaseConnection::select(static::$_tableName, $idArray);
		
		$object = new static($rows[0]);
		
		return $object; 
	}
}