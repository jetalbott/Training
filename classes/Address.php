<?php

/**
 * Contains address information for customers stored by ID.
 */
class Address extends AbstractBase
{
	protected static $_tableName = 'address';
	
	/**
	 * ID of the Customer owning the address.
	 * 
	 * @var int
	 */
	protected $_customerId;
	
	/**
	 * Customer's first street address line.
	 *
	 * @var string
	 */
	protected $_addrLine1;
	
	/**
	 * Customer's second street address line.
	 *
	 * @var string
	 */
	protected $_addrLine2;
	
	/**
	 * Customer's city.
	 *
	 * @var string
	 */
	protected $_city;
	
	/**
	 * Customer's State.
	 *
	 * @var string
	 */
	protected $_state;
	
	/**
	 * Customer's zip code.
	 *
	 * @var int
	 */
	protected $_zipCode;
	
	protected function __construct(array $data)
	{
		if (empty($data['id']) || empty($data['customer_id']) || empty($data['addr_line1']) || empty($data['city']) || empty($data['state']) || empty($data['zip_code']))
		{	
			throw new InvalidArgumentException('A required field is empty.');
		}
		$this->_id = $data['id'];
		$this->_customerId = $data['customer_id'];
		$this->_addrLine1 = $data['addr_line1'];
		if (!empty($data['addr_line2']))
		{
			$this->_addrLine2 = $data['addr_line2'];
		}
		$this->_city = $data['city'];
		$this->_state = $data['state'];
		$this->_zipCode = $data['zip_code'];
	}
	
	/**
	 * Returns the customer's first address line.
	 * 
	 * @return string
	 */
	function getAddrLine1()
	{
		return $this->_addrLine1;
	}
	
	/**
	 * Returns the customer's second address line.
	 * 
	 * @return string
	 */
	function getAddrLine2()
	{
		return $this->_addrLine2;
	}
	
	/**
	 * Returns the customer's city.
	 * 
	 * @return string
	 */
	function getCity()
	{
		return $this->_city;
	}
	
	/**
	 * Returns the customer's state.
	 * 
	 * @return string
	 */
	function getState()
	{
		return $this->_state;
	}
	
	/**
	 * Returns the customer's zip code.
	 * 
	 * @return int
	 */
	function getZipCode()
	{
		return $this->_zipCode;
	}
	
}