<?php

/**
 * Information about an individual product, which belongs to another Category.
 */

class Product extends AbstractBase
{

	protected static $_tableName = 'product';

	/**
	 * The Product's name.
	 *
	 * @var string
	 */
	protected $_name;
	
	/**
	 * The ID of the Category that the Product belongs to.
	 * 
	 * @var int
	 */
	protected $_categoryId;
	
	/**
	 * The Category object that the Product belongs to.
	 *
	 * @var Category
	 */
	protected $_category;

	/**
	 * The price of the product.
	 *
	 * @var float
	 */
	protected $_price;

	/**
	 * A description of the Product.
	 *
	 * @var string
	 */
	protected $_description;
	
	/**
	 * Initializes a Product with the Category, Name, and Price information.
	 * 
	 * @param Category $category
	 * @param string $name
	 * @param float $price
	 */
	public function __construct(array $data)
	{
		if (empty($data['id']) || empty($data['category_id']) || empty($data['name']) || empty($data['price']) || empty($data['description']))
		{	
			throw new InvalidArgumentException('A required field is empty.');
		}
		$this->_id = $data['id'];	
		$this->_categoryId = $data['category_id'];
		$this->_name = $data['name'];
		$this->_price = $data['price'];
		$this->_description = $data['description'];
	}

	/**
	 * Returns the name of the product.
	 *
	 * @return string
	 */
	function getName()
	{
		return $this->_name;
	}

	/**
	 * Returns the listed price of the Product.
	 *
	 * @return float
	 */
	function getPrice()
	{
		return $this->_price;
	}

	/**
	 * Sets a name to the Product.
	 * 
	 * @param string $name
	 */
	function setName($name)
	{
		$this->_name = $name;
	}
	
	/**
	 * Sets the price of a Product.
	 * 
	 * @param float $price
	 */
	function setPrice($price)
	{
		$this->_price = $price;
	}
	
	/**
	 * Sets a description to the Product.
	 * 
	 * @param string $description
	 */
	function setDescription($description)
	{
		$this->_description = $description;
	}
	
	/**
	 * Returns the Product's current description.
	 *
	 * @return string
	 */
	function getDescription()
	{
		return $this->_description;
	}
	
}