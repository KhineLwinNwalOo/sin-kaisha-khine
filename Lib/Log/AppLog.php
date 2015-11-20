<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('File', 'Utility');
App::uses('Debugger', 'Utility');

/**
 * ログファイル用共通クラス
 * Description of AppLog
 *
 * @author hanai
 */
abstract class AppLog {
	
	/**
	 *
	 * @var int
	 */
	protected $timestamp = 0;
	
	/**
	 *
	 * @var string
	 */
	protected $remoteIp = '';
	
	final public function __construct($timestamp, $remoteIp = null) {
		$logFile = $this;
		
		$logFile->timestamp = $timestamp;
		$logFile->remoteIp = $remoteIp;
	}
	
	/**
	 * ログを記述する
	 */
	abstract public function write();
	
	protected static function createUserId(AuthComponent $auth) {
		$id = $auth->user('id');
		if (empty($id)) {
			return 'Not Login User';
		} else {
			return str_pad($id, 11, '0', STR_PAD_LEFT);
		}
	}
}