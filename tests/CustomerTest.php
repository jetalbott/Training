<?php

require_once 'classes/Customer.php';

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * Customer test case.
 */
class CustomerTest extends PHPUnit_Framework_TestCase
{
    
    /**
     *
     * @var Customer
     */
    private $Customer;

    /**
     * Prepares the environment before running a test.
     */
    protected function setUp()
    {
        parent::setUp();
        
        // TODO Auto-generated CustomerTest::setUp()
        
        $this->Customer = new Customer(/* parameters */);
    }

    /**
     * Cleans up the environment after running a test.
     */
    protected function tearDown()
    {
        // TODO Auto-generated CustomerTest::tearDown()
        $this->Customer = null;
        
        parent::tearDown();
    }

    /**
     * Constructs the test case.
     */
    public function __construct()
    {
        // TODO Auto-generated constructor
    }

    /**
     * Tests Customer->setEmail()
     */
    public function testSetEmail()
    {
        // TODO Auto-generated CustomerTest->testSetEmail()
        $this->markTestIncomplete("setEmail test not implemented");
        
        $this->Customer->setEmail(/* parameters */);
    }

    /**
     * Tests Customer->getEmail()
     */
    public function testGetEmail()
    {
        // TODO Auto-generated CustomerTest->testGetEmail()
        $this->markTestIncomplete("getEmail test not implemented");
        
        $this->Customer->getEmail(/* parameters */);
    }

    /**
     * Tests Customer->setPassword()
     */
    public function testSetPassword()
    {
        // TODO Auto-generated CustomerTest->testSetPassword()
        $this->markTestIncomplete("setPassword test not implemented");
        
        $this->Customer->setPassword(/* parameters */);
    }

    /**
     * Tests Customer->setFirstName()
     */
    public function testSetFirstName()
    {
        // TODO Auto-generated CustomerTest->testSetFirstName()
        $this->markTestIncomplete("setFirstName test not implemented");
        
        $this->Customer->setFirstName(/* parameters */);
    }

    /**
     * Tests Customer->getFirstName()
     */
    public function testGetFirstName()
    {
        // TODO Auto-generated CustomerTest->testGetFirstName()
        $this->markTestIncomplete("getFirstName test not implemented");
        
        $this->Customer->getFirstName(/* parameters */);
    }

    /**
     * Tests Customer->setLastName()
     */
    public function testSetLastName()
    {
        // TODO Auto-generated CustomerTest->testSetLastName()
        $this->markTestIncomplete("setLastName test not implemented");
        
        $this->Customer->setLastName(/* parameters */);
    }

    /**
     * Tests Customer->getLastName()
     */
    public function testGetLastName()
    {
        // TODO Auto-generated CustomerTest->testGetLastName()
        $this->markTestIncomplete("getLastName test not implemented");
        
        $this->Customer->getLastName(/* parameters */);
    }

    /**
     * Tests Customer->setAddress()
     */
    public function testSetAddress()
    {
        // TODO Auto-generated CustomerTest->testSetAddress()
        $this->markTestIncomplete("setAddress test not implemented");
        
        $this->Customer->setAddress(/* parameters */);
    }

    /**
     * Tests Customer->getAddress()
     */
    public function testGetAddress()
    {
        // TODO Auto-generated CustomerTest->testGetAddress()
        $this->markTestIncomplete("getAddress test not implemented");
        
        $this->Customer->getAddress(/* parameters */);
    }
}

