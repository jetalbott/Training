<?php

/**
 * A class that sits between the Product and Order class to capture pricing and quantities at the time of the Order placement.
 */
class Item extends AbstractBase
{
	
	/**
	 * The Product object that this Item is based on.
	 * 
	 * @var Product
	 */
	protected $_product;
	
	/**
	 * The name of the item.
	 * 
	 * @var string
	 */
	protected $_quantity;

	/**
	 * The price per Item that is being ordered.
	 * 
	 * @var float
	 */
	protected $_price;
	
	/**
	 * On creation of an Item, adds Product object, Quantity, and the price of the product. The item checks for an overriding price before pulling the price from the product information.
	 * 
	 * @param Product $product, int $quantity, float $price 
	 */
	public function __construct(Product &$product, $quantity, $price = NULL)
	{
		$this->_product &= $product;
		$this->_quantity = $quantity;
		$this->_price = ($price == NULL) ? $product->getPrice() : $price; 
	}
	
	/**
	 * Returns a price of an individual Item.
	 * 
	 * @return float
	 */
	function getPrice()
	{
		return $this->_price;
	}
	
	/**
	 * Returns the quantity of the item.
	 * 
	 * @return int
	 */
	function getQuantity()
	{
		return $this->_quantity;
	}
	
	/**
	 * Returns the total price of the Item (Item Price * Quantity).
	 * 
	 * @return float
	 */
	function getTotalPrice()
	{
		return $this->getPrice() * $this->getQuantity();
	}		
}