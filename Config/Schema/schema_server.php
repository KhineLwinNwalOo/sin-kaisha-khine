<?php
App::import('Lib', 'InitValue');
/**
 *  Database . sin_kaisha
 */
class AppSchema extends CakeSchema {

    public function before($event = array()) {
        return true;
    }

    public function after($event = array()) {


    }

    public function __destruct() {
        InitValue::insertData($this->_dbInitData);
    }

    /**
     * 大カテゴリ
     * @var type 
     */
    public $tbl_big_categories = array(
        'id'            => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'プライマリID', 'extra' => 'auto_increment'),
        'name'          => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => 'カテゴリ名', 'charset' => 'utf8'),
        'sort'          => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '表示順'),
        'created'       => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
        'updated'       => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),

        'indexes'       => array(
            'PRIMARY' => array('column' => 'id', 'unique' => true),
            'tbl_big_categories_idx1' => array('column' => 'name',	'unique' => true),
            'tbl_big_categories_idx2' => array(
                'unique' => false,
                'column' => array('sort',),
            ),
        ),
        'tableParameters' => array(
            'engine' => 'InnoDB',
            'charset' => 'utf8',
            'collate' => 'utf8_general_ci',
        ),
    );

    /**
     * 中カテゴリ
     * @var type 
     */
    public $tbl_mid_categories = array(
        'id'                    => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'プライマリID', 'extra' => 'auto_increment'),
        'tbl_big_category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '大カテゴリID'),
        'name'                  => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '表示名', 'charset' => 'utf8'),
        'sort'                  => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '表示順'),
        'created'               => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
        'updated'               => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),

        'indexes'               => array(
            'PRIMARY' => array('column' => 'id', 'unique' => true),
            'tbl_mid_categories_idx1' => array('column' => 'name',	'unique' => true),
            'tbl_mid_categories_idx2' => array(
                'unique' => false,
                'column' => array('tbl_big_category_id', 'sort',),
            ),
        ),
        'tableParameters'       => array(
            'engine' => 'InnoDB',
            'charset' => 'utf8',
            'collate' => 'utf8_general_ci',
        ),
    );

    /**
     * 小カテゴリ
     * @var type 
     */
    public $tbl_min_categories = array(
        'id'                    => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'プライマリID', 'extra' => 'auto_increment'),
        'tbl_big_category_id'	=> array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '大カテゴリID'),
        'tbl_mid_category_id'   => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '中カテゴリID'),
        'name'                  => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'comment' => '表示名', 'charset' => 'utf8'),
        'sort'                  => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '表示順'),
        'created'               => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
        'updated'               => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),

        'indexes'               => array(
            'PRIMARY' => array('column' => 'id', 'unique' => true),
            'tbl_min_categories_idx1' => array('column' => 'name',	'unique' => true),
            'tbl_min_categories_idx2' => array(
                'unique' => false,
                'column' => array('tbl_mid_category_id', 'sort',),
            ),
        ),
        'tableParameters'       => array(
            'engine' => 'InnoDB',
            'charset' => 'utf8',
            'collate' => 'utf8_general_ci',
        ),
    );

    public $tbl_contents = array(
        'id'                    => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary', 'comment' => 'プライマリID', 'extra' => 'auto_increment'),
        'tbl_big_category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '大カテゴリID'),
        'tbl_mid_category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '中カテゴリID'),
        'tbl_min_category_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'comment' => '小カテゴリID'),
        'content'               => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 200, 'collate' => 'utf8_general_ci', 'comment' => '事業目的'),
        'show_flag'             => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1, 'comment' => '表示フラグ'),
        'created'               => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '作成日時'),
        'updated'               => array('type' => 'datetime', 'null' => true, 'default' => null, 'comment' => '更新日時'),

        'indexes'               => array(
            'PRIMARY' => array('column' => 'id', 'unique' => true),
	    'tbl_contents_idx1' => array(
                'unique' => false,
                'column' => array('show_flag', 'tbl_big_category_id', 'tbl_mid_category_id', 'tbl_min_category_id',),
            ),
	    'tbl_contents_idx2' => array(
                'unique' => false,
                'column' => array('content',),
            ),
        ),
        'tableParameters'       => array(
            'engine' => 'InnoDB',
            'charset' => 'utf8',
            'collate' => 'utf8_general_ci',
        ),
    );
    
    /**
     * DB初期値設定
     * @var type 
     */
    protected $_dbInitData = array(
    /**/
	'tbl_big_categories'	=> 'tbl_big_categories.csv',
	'tbl_mid_categories'	=> 'tbl_mid_categories.csv',
	'tbl_min_categories'	=> 'tbl_min_categories.csv',
	'tbl_contents'		=> 'tbl_contents.csv',
    );
}
