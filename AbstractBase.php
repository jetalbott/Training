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
	
}