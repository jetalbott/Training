<?php

/**
 * Information about an individual product, which belongs to another Category.
 */

class Product extends AbstractBase
{

	/**
	 * The Product's name.
	 *
	 * @var string
	 */
	protected $_name;

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
	public function __construct(Category &$category,$name,$price,$description = "")
	{
		$this->_category &= $category;
		$this->_name = $name;
		$this->_price = $price;
		$this->_description = $description;
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