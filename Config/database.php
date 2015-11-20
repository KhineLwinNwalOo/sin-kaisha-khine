<?php
class DATABASE_CONFIG {
	
	//public $default = array();

	/**
	 * 開発環境
	 * @var array 
	 */
        public $default = array(
            'datasource'	=> 'Database/Mysql',
            'persistent'	=> false,
            'host'		=> 'localhost',
            'login'		=> 'root',
            'password'		=> 'root',
            'database'		=> 'sin_kaisha', //'test_sinkaisha',
            'encoding'		=> 'utf8',
//            'unix_socket'       => '/Applications/MAMP/tmp/mysql/mysql.sock',
	);
//	public $local = array(
//		'datasource'	=> 'Database/Mysql',
//		'persistent'	=> false,
//		'host'			=> 'localhost',
//		'login'			=> 'root',
//		'password'		=> 'root',
//		'database'		=> 'bs_mitsumori',
//		'encoding'		=> 'utf8',
//	);
//
//	/**
//	 * 本番環境
//	 * @var array 
//	 */
//	public $development = array(
//		'datasource'	=> 'Database/Mysql',
//		'persistent'	=> false,
//		'host'			=> '',
//		'login'			=> '',
//		'password'		=> '',
//		'database'		=> 'bs_mitsumori',
//		'encoding'		=> 'utf8'
//	);
//	
//	/**
//	 * テスト
//	 * @var array 
//	 */
//	public $test = array(
//		'datasource'	=> 'Database/Mysql',
//		'persistent'	=> false,
//		'host'			=> 'localhost',
//		'login'			=> 'root',
//		'password'		=> 'root',
//		'database'		=> 'bs_mitsumori_test',
//		'encoding'		=> 'utf8',
//	);
//	
//	public function __construct() {
//		$this->default = $this->local;
//		return;
////		$serverName = env('SERVER_NAME');
////		switch ($serverName) {
////			case 'www.bs-mitsumori:
////			case 'bs-mitsumori':
////				$this->default = $this->development;
////				break;
////			default :
////				$this->default = $this->local;
////		}
//	}
}
