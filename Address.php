<?php

/**
 * Contains address information for customers stored by ID.
 */
class Address extends AbstractBase
{	
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
	
	public function __construct($addrLine1, $addrLine2="", $city, $state, $zipCode)
	{
		$this->_addrLine1 = $addrLine1;
		$this->_addrLine2 = $addrLine2;
		$this->_city = $city;
		$this->_state = $state;
		$this->_zipCode = $zipCode;
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