<?php

/**
 * Holds Customer login and address information for Orders.
 */
class Customer extends AbstractBase
{
	
	protected static $_tableName = 'customer';
	
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
	
	protected function __construct(array $data)
	{
		if (empty($data['id']) || empty($data['email']) || empty($data['password']) || empty($data['first_name']) || empty($data['last_name']))
		{	
			throw new InvalidArgumentException('A required field is empty.');
		}
		$this->_id = $data['id'];	
		$this->_email = $data['email'];
		$this->_password = $data['password'];
		$this->_firstName = $data['first_name'];
		$this->_lastName = $data['last_name'];
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