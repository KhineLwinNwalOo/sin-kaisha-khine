<?php
App::uses('OrmModelUtil', 'Lib/Util');

/**
 * TblAdmin Test Case
 *
 */
class TblAdminTest extends CakeTestCase {

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
	
	public $createData = array(
		'TblAdmin' => array(
			'admin_name'		=> 'Admin NewTest1',
			'admin_mail'		=> 'adminnewtest1@co.mm',
			'password'			=> 'aaaaaa',
			'admin_password'	=> 'aaaaaa',
			'login_flag'		=> '1',
		),
		
	);
	
	public $updateData = array(
		'TblAdmin' => array(
			'id'	=> 1,
			'admin_name'	=> 'Admin Update Test1',
		),
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
	 * 新規のデータが生成される事を確認
	 * 新規のロックデータが生成される事を確認
	 */
	public function testAppTblAdminSaveCreateCount() {
		$test = $this;
		
		$admin		= $test->TblAdmin;
		$adminLock	= $test->TblAdminLock;
		
		$db		= $admin->getDataSource();
		$data	= $test->createData;
		
		$beforeTblAdminCount		= self::findCountTblAdmin($admin);
		$beforeTblAdminLockCount	= self::findCountTblAdminLock($adminLock);
		
		$db->begin();
		OrmModelUtil::transactionSave($admin, $data);
		$db->commit();
		
		$afterTblAdminCount		= self::findCountTblAdmin($admin);
		$afterTblAdminLockCount	= self::findCountTblAdminLock($adminLock);
		
		$test->assertEqual($beforeTblAdminCount, $afterTblAdminCount - 1);
		$test->assertEqual($beforeTblAdminLockCount, $afterTblAdminLockCount - 1);
	}
	
	/**
	 * 新規のデータが生成されない事を確認
	 * 新規のロックデータが生成されない事を確認
	 */
	public function testAppTblAdminSaveUpdateCount() {
		$test = $this;
		
		$admin		= $test->TblAdmin;
		$adminLock	= $test->TblAdminLock;
		
		$db		= $admin->getDataSource();
		$data	= $test->updateData;
		
		$beforeTblAdminCount		= self::findCountTblAdmin($admin);
		$beforeTblAdminLockCount	= self::findCountTblAdminLock($adminLock);
		
		$db->begin();
		OrmModelUtil::transactionSave($admin, $data);
		$db->commit();
		
		$afterTblAdminCount		= self::findCountTblAdmin($admin);
		$afterTblAdminLockCount	= self::findCountTblAdminLock($adminLock);
		
		$test->assertEqual($beforeTblAdminCount, $afterTblAdminCount);
		$test->assertEqual($beforeTblAdminLockCount, $afterTblAdminLockCount);
	}
	
	/**
	 * 新規のデータ内容を確認
	 * 新規のロックデータ内容を確認
	 */
	public function testAppTblAdminSaveCreateData() {
		$test = $this;
		
		$admin		= $test->TblAdmin;
		$adminLock	= $test->TblAdminLock;
		
		$db		= $admin->getDataSource();
		$data	= $test->createData;
		
		$db->begin();
		OrmModelUtil::transactionSave($admin, $data);
		$db->commit();
		
		$id = $admin->getID();
		
		$afterData		= self::findFirstTblAdmin($admin, $id);
		$afterLockData	= self::findFirsTblAdminLock($adminLock, $id);
		
		$checkId		= $id;
		$checkName		= Hash::get($data, 'TblAdmin.admin_name');
		$checkLockId	= $id;
		
		$dataId			= Hash::get($afterData, 'TblAdmin.id');
		$dataName		= Hash::get($afterData, 'TblAdmin.admin_name');
		$dataLockId		= Hash::get($afterLockData, 'TblAdminLock.id');
		
		$test->assertEqual($checkId, $dataId);
		$test->assertEqual($checkName, $dataName);
		$test->assertEqual($checkLockId, $dataLockId);
	}
	
	/**
	 * 更新のデータ内容を確認
	 * 更新のロックデータ内容を確認
	 */
	public function testAppTblAdminSaveUpdateData() {
		$test = $this;
		
		$admin		= $test->TblAdmin;
		$adminLock	= $test->TblAdminLock;
		
		$db		= $admin->getDataSource();
		$data	= $test->updateData;
		
		$db->begin();
		OrmModelUtil::transactionSave($admin, $data);
		$db->commit();
		
		$id = $admin->getID();
		
		$afterData		= self::findFirstTblAdmin($admin, $id);
		$afterLockData	= self::findFirsTblAdminLock($adminLock, $id);
		
		$checkId		= $id;
		$checkName		= Hash::get($data, 'TblAdmin.admin_name');
		$checkLockId	= $id;
		
		$dataId			= Hash::get($afterData, 'TblAdmin.id');
		$dataName		= Hash::get($afterData, 'TblAdmin.admin_name');
		$dataLockId		= Hash::get($afterLockData, 'TblAdminLock.id');
		
		$test->assertEqual($checkId, $dataId);
		$test->assertEqual($checkName, $dataName);
		$test->assertEqual($checkLockId, $dataLockId);
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
	
	private static function findFirsTblAdminLock(TblAdminLock $adminLock, $adminLock_id) {
		
		$options = array(
			'conditions' => array(
				'id' => $adminLock_id,
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
