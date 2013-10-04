<?php

/**
 * Holds Customer login and address information for Orders.
 */
class Customer extends AbstractBase
{

	/**
	 * Customer's username
	 *
	 * @var string
	 */
	protected $_username;

	/**
	 * Customer's password
	 *
	 * @var string
	 */
	protected $_password;

	/**
	 * Customer's first name
	 *
	 * @var string
	 */
	protected $_firstName;

	/**
	 * Customer's last name
	 *
	 * @var string
	 */
	protected $_lastName;

	/**
	 * Customer's e-mail address
	 *
	 * @var string
	 */
	protected $_email;

	/**
	 * The customer's address. Consists of an Address object.
	 * 
	 * @var Address
	 */
	protected $_addr;
	
	public function __construct($user, $pass, $firstName, $lastName, $email)
	{
		$this->_username = $user;
		$this->_password = $pass;
		$this->_firstName = $firstName;
		$this->_lastName = $lastName;
		$this->_email = $email;
	}
	
	// Setters for properties?
	
	/**
	 * Returns the customer's username.
	 * 
	 * @return string
	 */
	function getUsername()
	{
		return $this->_username;
	}
	
	/**
	 * Returns the customer's first name
	 * 
	 * @return string
	 */
	function getFirstName()
	{
		return $this->_firstName;
	}
	
	/**
	 * Returns the customer's last name
	 * 
	 * @return string
	 */
	function getLastName()
	{
		return $this->_lastName;
	}

	/**
	 * Returns the customer's E-mail Address
	 * 
	 * @return string
	 */
	function getEmail()
	{
		return $this->_email;
	}
	
	/**
	 * Sets an Address object to the Customer.
	 * 
	 * @param Address $address
	 */
	function setAddress(Address &$addr)
	{
		$this->_addr &= $addr;
	}
	
	/**
	 * Returns the customer's address.
	 * 
	 * @return Address
	 */
	function getAddress()
	{
		return $this->_addr;
	}
}