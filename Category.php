<?php

/**
 * Contains Product data as part of a item catalog.
 */
class Category extends AbstractBase
{
	
	protected static $_tableName = 'category';
	
	/**
	 * The parent Category, if it exists.
	 *
	 * @var Category
	 */
	protected $_parent;
	
	/**
	 * The ID of the parent Category
	 * 
	 * @var int
	 */
	protected $_parentId;
	
	/**
	 * The name of the Category.
	 *
	 * @var string
	 */
	protected $_name;

	/**
	 * A description of Product types contained in the Category.
	 *
	 * @var string
	 */
	protected $_description;
	
	
	/**
	 * Initialized the category with a name and description.
	 * 
	 * @param string $name
	 */
	protected function __construct(array $data)
	{
		if (empty($data['id']) || empty($data['name']))
		{
			throw new InvalidArgumentException('A required field is empty.');
		}
		$this->_id = $data['id'];
		$this->_name = $data['name'];
		if (!empty($data['parent_id']))
		{
			$this->_parentId = $data['parent_id'];
		}
		if (!empty($data['decription']))
		{
			$this->_description = $data['description'];
		}
	}
	
	/**
	 * Sets a Parent Category object to the Category.
	 * 
	 * @param Category $parent
	 */
	function setParent(Category &$parent)
	{
		$this->_parent &= $parent;
	}
	
	/**
	 * Set a description to the Category.
	 * 
	 * @param string $description
	 */
	function setDescription($description)
	{
		$this->_description = $description;
	}
	
	function getParent()
	{
		return $this->_parent;
	}
	
	function getName()
	{
		return $this->_name;
	}
	
	function getDescription()
	{
		return $this->_description;
	}
}