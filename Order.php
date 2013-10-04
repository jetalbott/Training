<?php

/**
 * Stores info about a customer's order. Looks up the order number and connects with customer and address to populate order information.
 */

class Order extends AbstractBase
{
	
	/**
	 * The Customer object placing the Order.
	 * 
	 * @var Customer
	 */
	protected $_customer;

	/**
	 * An array of the items being ordered, set up as a "Shopping Cart"
	 * 
	 * @var array
	 */
	protected $_cart = array();
	
	/**
	 * The date that the order is placed.
	 * 
	 * @var string
	 */
	protected $_placeDate;

	/**
	 * The date that the order ships to the customer.
	 * 
	 * @var string
	 */
	protected $_shipDate;
	
	/**
	 * The date that the placed order is cancelled, if this occurs.
	 * 
	 * @var string
	 */
	protected $_cancelDate;

	/**
	 * On Order creation the Customer will be saved to the new object; The Customer object also contains any necessary Address data for the order.
	 * 
	 * @param Customer $customer
	 */
	public function __construct(Customer &$customer)
	{
		$this->_customer = &$customer;
	}
	
	/**
	 * Sets the record for the date of the Order placement.
	 * 
	 * @param string $placeDate
	 */
	function setPlaceDate($placeDate)
	{
		$this->_placeDate = $placeDate;
	}
	
	/**
	 * Sets the record for the date the Order shipped.
	 * 
	 * @param string $shipDate
	 */
	function setShipDate($shipDate)
	{
		$this->_shipDate = $shipDate;
	}
	
	function setCancelDate($cancelDate)
	{
		$this->_cancelDate = $cancelDate;
	}
	
	/**
	 * Returns the total value of all the items currently in the cart.
	 * 
	 * @return float
	 */
	function getCartValue()
	{
		$totalValue = 0;

		foreach ($this->_cart as $line_item)
		{
			$totalValue += $line_item->getTotalPrice();
		}

		return $totalValue;
	}

	/**
	 * Adds an Item to the cart.
	 * 
	 * @param Product $product
	 * @param int $quantity
	 * @param float $price
	 */
	function addItem(Product $product, $quantity, $price = NULL)
	{
		$item = new Item($product, $quantity, $price = NULL);				
		$this->_cart[] = $item;
	}

	/**
	 * Get all of the items in the cart.
	 *
	 * @return array Returns an array of Items.
	 */
	function getCart()
	{
		return $this->_cart;
	}
}