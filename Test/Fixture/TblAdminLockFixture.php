<?php
/**
 * TblAdminLockFixture
 *
 */
class TblAdminLockFixture extends CakeTestFixture {
	
	public $table = 'tbl_admin_locks';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array('id' => 1,),
		array('id' => 2,),
		array('id' => 3,),
	);

}
