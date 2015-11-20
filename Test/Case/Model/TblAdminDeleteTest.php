<?php
App::uses('OrmModelUtil', 'Lib/Util');

/**
 * RootDataSave Test Case
 *
 */
class TblAdminDeleteTest extends CakeTestCase {

	/**
	 *
	 * @var TblAdmin
	 */
	public $TblAdmin = null;
	
	/**
	 *
	 * @var TblAdminLock
	 */
	public $TblAdminLock = null;


	/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tbl_admin',
		'app.tbl_admin_lock',
		
	);
	
	
	/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$test = $this;
		
		$test->TblAdmin		= ClassRegistry::init('TblAdmin');
		$test->TblAdminLock	= ClassRegistry::init('TblAdminLock');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		$test = $this;
		
		unset($test->TblAdmin);
		unset($test->TblAdminLock);
		
		parent::tearDown();
	}
	
	/**
	 * データが削除される事を確認
	 * ロックデータが削除される事を確認
	 */
	public function testAppTblAdminDeleteCount() {
		$test = $this;
		
		$admin		= $test->TblAdmin;
		$adminLock	= $test->TblAdminLock;
		
		$deleteId	= 1;
		
		$beforeTblAdminCount		= self::findCountTblAdmin($admin);
		$beforeTblAdminLockCount	= self::findCountTblAdminLock($adminLock);
		
		$admin->delete($deleteId);
		
		
		$afterTblAdminCount		= self::findCountTblAdmin($admin);
		$afterTblAdminLockCount	= self::findCountTblAdminLock($adminLock);
		
		$test->assertEqual($beforeTblAdminCount - 1 , $afterTblAdminCount);
		$test->assertEqual($beforeTblAdminLockCount - 1 , $afterTblAdminLockCount);
	}
	
	
	/**
	 * データの削除内容を確認
	 * ロックデータの削除内容を確認
	 */
	public function testAppTblAdminDeleteData() {
		$test = $this;
		
		$admin		= $test->TblAdmin;
		$adminLock	= $test->TblAdminLock;
		
		$deleteId = 1;
		
		$beforeData		= self::findFirstTblAdmin($admin, $deleteId);
		$beforeLockData	= self::findFirstTblAdminLock($adminLock, $deleteId);
		
		$admin->delete($deleteId);
		
		$afterData		= self::findFirstTblAdmin($admin, $deleteId);
		$afterLockData	= self::findFirstTblAdminLock($adminLock, $deleteId);
		
		
		$test->assertNotEqual($beforeData, $afterData);
		$test->assertNotEqual($beforeLockData, $afterLockData);
	}
	
	
	private static function findFirstTblAdmin(TblAdmin $admin, $admin_id) {
		$options = array(
			'conditions' => array(
				'TblAdmin.id' => $admin_id,
			),
			'recursive' => 0,
		);
		
		return $admin->find('first', $options);
	}
	
	private static function findFirstTblAdminLock(TblAdminLock $adminLock, $admin_id) {
		
		$options = array(
			'conditions' => array(
				'id' => $admin_id,
			),
		);
		
		return $adminLock->find('first', $options);
	}
	
	private static function findCountTblAdmin(TblAdmin $admin) {
		$options = array();
		
		return $admin->find('count', $options);
	}
	
	private static function findCountTblAdminLock(TblAdminLock $admin) {
		$options = array();
		
		return $admin->find('count', $options);
	}
}