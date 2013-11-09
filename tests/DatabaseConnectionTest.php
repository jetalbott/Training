<?php

/**
 * DatabaseConnection test case.
 */
class DatabaseConnectionTest extends AbstractTest {

	/**
	 *
	 * @var DatabaseConnection
	 */
	private $DatabaseConnection;

	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp() {
		parent::setUp ();

		// TODO Auto-generated DatabaseConnectionTest::setUp()

		$this->DatabaseConnection = new DatabaseConnection(/* parameters */);
	}

	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		// TODO Auto-generated DatabaseConnectionTest::tearDown()
		$this->DatabaseConnection = null;

		parent::tearDown ();
	}

	/**
	 * Constructs the test case.
	 */
	public function __construct() {
		// TODO Auto-generated constructor
	}

	/**
	 * Tests DatabaseConnection::select()
	 */
	public function testSelect() {
		// TODO Auto-generated DatabaseConnectionTest::testSelect()
		$this->markTestIncomplete ( "select test not implemented" );

		DatabaseConnection::select(/* parameters */);
	}

	/**
	 * Tests DatabaseConnection::update()
	 */
	public function testUpdate() {
		// TODO Auto-generated DatabaseConnectionTest::testUpdate()
		$this->markTestIncomplete ( "update test not implemented" );

		DatabaseConnection::update(/* parameters */);
	}

	/**
	 * Tests DatabaseConnection::delete()
	 */
	public function testDelete() {
		// TODO Auto-generated DatabaseConnectionTest::testDelete()
		$this->markTestIncomplete ( "delete test not implemented" );

		DatabaseConnection::delete(/* parameters */);
	}

	/**
	 * Tests DatabaseConnection::insert()
	 */
	public function testInsert() {
		// TODO Auto-generated DatabaseConnectionTest::testInsert()
		$this->markTestIncomplete ( "insert test not implemented" );

		DatabaseConnection::insert(/* parameters */);
	}
}

