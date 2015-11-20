<?php
/**
 * TblAdminFixture
 *
 */
class TblAdminFixture extends CakeTestFixture {

	public $table = 'tbl_admins';
/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'admin_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'admin_mail' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'admin_password' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'login_flag' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'updated' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'tbl_admins_idx1' => array('column' => 'admin_name', 'unique' => 1),
			'tbl_admins_idx2' => array('column' => 'admin_mail', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'admin_name' => 'AdminName01',
			'admin_mail' => 'admin01@co.mm',
			'password' => 'aaaaaa',
			'admin_password' => 'aaaaaa',
			'login_flag' => 1,
			'created' => '2015-08-07 11:06:23',
			'updated' => '2015-08-07 11:06:23'
		),
		array(
			'id' => 2,
			'admin_name' => 'AdminName02',
			'admin_mail' => 'admin02@co.mm',
			'password' => 'aaaaaa',
			'admin_password' => 'aaaaaa',
			'login_flag' => 1,
			'created' => '2015-08-07 11:06:23',
			'updated' => '2015-08-07 11:06:23'
		),
		array(
			'id' => 3,
			'admin_name' => 'AdminName03',
			'admin_mail' => 'admin03@co.mm',
			'password' => 'aaaaaa',
			'admin_password' => 'aaaaaa',
			'login_flag' => 1,
			'created' => '2015-08-07 11:06:23',
			'updated' => '2015-08-07 11:06:23'
		),
	);

}
