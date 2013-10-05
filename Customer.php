<?php

/**
 * Holds Customer login and address information for Orders.
 */
class Customer extends AbstractBase
{
	/**
	 * Customer's e-mail address; doubles as the Customer's "username".
	 *
	 * @var string
	 */
	protected $_email;
	
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
	 * The customer's address. Consists of an Address object.
	 * 
	 * @var Address
	 */
	protected $_addr;
	
	public function __construct($pass, $firstName, $lastName, $email)
	{
		$this->_email = $email;
		$this->_password = $pass;
		$this->_firstName = $firstName;
		$this->_lastName = $lastName;
	}

	/**
	 * Updates a Customer's e-mail address/login.
	 * 
	 * @param string $email
	 */
	function setEmail($email)
	{
		$this->_email = $email;
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
	 * Updates a Customer's password.
	 * 
	 * @param string $pass
	 */
	function setPassword($pass)
	{
		$this->_password = $pass;
	}
	
	/**
	 * Updates a Customer's first name.
	 * 
	 * @param unknown $firstName
	 */
	function setFirstName($firstName)
	{
		$this->_firstName = $firstName;
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
	 * Updates a Customer's last name.
	 * 
	 * @param string $lastName
	 */
	function setLastName($lastName)
	{
		$this->_lastName = $lastName;
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