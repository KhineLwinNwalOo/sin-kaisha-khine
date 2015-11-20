<?php
App::uses('TblAdminLock', 'Model');

/**
 * TblAdminLock Test Case
 *
 */
class TblAdminLockTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tbl_admin_lock'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TblAdminLock = ClassRegistry::init('TblAdminLock');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TblAdminLock);

		parent::tearDown();
	}
	
	public function testA() {
		$this->assertEqual('true', 'true');
	}

}
