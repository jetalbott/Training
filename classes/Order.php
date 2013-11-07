<?php

/**
 * Stores info about a customer's order. Looks up the order number and connects with customer and address to populate order information.
 */

class Order extends AbstractBase
{
	
	protected static $_tableName = 'order';
	
	/**
	 * The Customer ID owning the Order.
	 * 
	 * @var int
	 */
	protected $_customerId;
	
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
	 * The date that the order is created.
	 * 
	 * @var string
	 */
	protected $_createdDate;

	/**
	 * The date that the order is deleted before being receieved, if this occurs.
	 * 
	 * @var string
	 */
	protected $_deletedDate;
	
	/**
	 * The time of the last modification to this Order.
	 * 
	 * @var string
	 */
	protected $_modifiedDate;

	/**
	 * The date that the Order is received for processing.
	 * 
	 * @var string
	 */
	protected $_receivedDate;

	/**
	 * The date that the order ships to the customer.
	 * 
	 * @var string
	 */
	protected $_shippedDate;
	
	/**
	 * The date that the received order is cancelled, if this occurs.
	 * 
	 * @var string
	 */
	protected $_cancelledDate;

	/**
	 * On Order creation the Customer will be saved to the new object; The Customer object also contains any necessary Address data for the order.
	 * 
	 * @param Customer $customer
	 */
	public function __construct(array $data)
	{
		if (empty($data['id']) || empty($data['customer_id']) || empty($data['created_date']))
		{	
			throw new InvalidArgumentException('A required field is empty.');
		}
		$this->_id = $data['id'];	
		$this->_customerId = $data['customer_id'];
		$this->_createdDate = $data['created_date'];
		if (!empty($data['deleted_date']))
		{
			$this->_deletedDate = $data['deleted_date'];
		}
		if (!empty($data['modified_date']))
		{
			$this->_modifiedDate = $data['modified_date'];
		}
		if (!empty($data['received_date']))
		{
			$this->_receivedDate = $data['received_date'];
		}
		if (!empty($data['shipped_date']))
		{
			$this->_shippedDate = $data['shipped_date'];
		}
		if (!empty($data['cancelled_date']))
		{
			$this->_cancelledDate = $data['cancelled_date'];
		}
	}
	
	/**
	 * Gets the record for the date of the Order creation.
	 * 
	 * @return string
	 */
	function getCreatedDate()
	{
		return $this->_createdDate;
	}
	
	/**
	 * Sets the record for the Order's deletion before it is received, if this occurs.
	 * 
	 * @param string $deletedDate
	 */
	function setDeletedDate($deletedDate)
	{
		$this->_deletedDate = $deletedDate;
	}
	
	/**
	 * Sets the record for the time of the last modification to the Order.
	 * 
	 * @param string $modifiedDate
	 */
	function setModifiedDate($modifiedDate)
	{
		$this->_modifiedDate = $modifiedDate;
	}
	
	/**
	 * Returns the time of the last modification to the Order.
	 * 
	 * @return string
	 */
	function getModifiedDate()
	{
		return $this->_modifiedDate;
	}
	
	/**
	 * Sets the date that the Order is receieved for processing.
	 * 
	 * @param string $receivedDate
	 */
	function setReceivedDate($receivedDate)
	{
		$this->_receivedDate = $receivedDate;
	}
	
	/**
	 * Returns the date that the Order was received for processing.
	 * 
	 * @return string
	 */
	function getReceivedDate()
	{
		return $this->_receivedDate;
	}
	
	/**
	 * Sets the record for the date the Order shipped.
	 * 
	 * @param string $shippedDate
	 */
	function setShippedDate($shippedDate)
	{
		$this->_shippedDate = $shippedDate;
	}
	
	/**
	 * Returns the recorded shipment date for the Order.
	 * 
	 * @return string
	 */
	function getShippedDate()
	{
		return $this->_shippedDate;
	}
	
	/**
	 * Sets the record for the date of Order cancellation, if it occurs.
	 * 
	 * @param string $cancelledDate
	 */
	function setCancelledDate($cancelledDate)
	{
		$this->_cancelledDate = $cancelledDate;
	}
	
	/**
	 * Returns the recorded cancellation date, if this occured.
	 * 
	 * @return string
	 */
	function getCancelledDate()
	{
		return $this->_cancelledDate;
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