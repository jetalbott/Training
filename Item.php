<?php

/**
 * A class that sits between the Product and Order class to capture pricing and quantities at the time of the Order placement.
 */
class Item extends AbstractBase
{
	
	protected static $_tableName = 'item';
	
	/**
	 * The ID of the order this Item belongs to.
	 * 
	 * @var int
	 */
	protected $_orderId;
	
	/**
	 * The ID of the product this Item is instanced from.
	 * 
	 * @var int
	 */
	protected $_productId;
	
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
	public function __construct(array $data)
	{
		if (empty($data['id']) || empty($data['product_id']) || empty($data['order_id']) || empty($data['price']) || empty($data['quantity']))
		{	
			throw new InvalidArgumentException('A required field is empty.');
		}
		$this->_id = $data['id'];	
		$this->_productId = $data['product_id'];
		$this->_orderId = $data['order_id'];
		$this->_price = $data['price'];
		$this->_quantity = $data['quantity']; 
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