<?php

/**
 * Contains Product data as part of a item catalog.
 */
class Category extends AbstractBase
{

	/**
	 * The parent Category, if it exists.
	 *
	 * @var Category
	 */
	protected $_parent;

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
	public function __construct($name, $description = NULL)
	{
		$this->_name = $name;
		$this->_description = $description;
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