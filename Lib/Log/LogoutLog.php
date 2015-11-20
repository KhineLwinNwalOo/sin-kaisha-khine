<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('AppLog', 'Lib/Log');
App::uses('UserAccessLogFile', 'Lib/File/Log');

/**
 * Description of UserAccessLogFile
 *
 * @author hanai
 */
class LogoutLog extends AppLog {
	
	/**
	 *
	 * @var AuthComponent
	 */
	private $auth = null;
	
	public function setAuth(AuthComponent $auth) {
		$this->auth = $auth;
	}
	
	/**
	 * 
	 * @param type $contents
	 */
	public function write() {
		$log = $this;
		$timestamp	= $log->timestamp;
		$remoteIp	= $log->remoteIp;
		$auth		= $log->auth;
		$logContents = $log->getLogContents();
		
		$logFile = new UserAccessLogFile($timestamp, $remoteIp);
		$logFile->setAuth($auth);
		$logFile->setLogContents($logContents);
		$logFile->write();
	}

	/**
	 * ユーザID、コントローラ名、アクション名、メソッド名(post or get)、リクエストパラメータ
	 * @return string
	 */
	protected function getLogContents() {
		$log = $this;
		$auth	= $log->auth;
		$userId	= self::createUserId($auth);
		
		$result = array(
			'LogType : User Logout',
			'UserId  : ' . $userId,
			'--------------------------------------------------------',
			'--------------------------------------------------------',
			'  ◆         ◆◆◆◆◆    ◆◆◆◆◆    ◆◆◆◆◆   ◆     ◆  ◆◆◆◆◆◆◆  ',
			'  ◆        ◆     ◆  ◆     ◆  ◆     ◆  ◆     ◆     ◆     ',
			'  ◆        ◆     ◆  ◆        ◆     ◆  ◆     ◆     ◆     ',
			'  ◆        ◆     ◆  ◆   ◆◆◆  ◆     ◆  ◆     ◆     ◆     ',
			'  ◆        ◆     ◆  ◆     ◆  ◆     ◆  ◆     ◆     ◆     ',
			'  ◆        ◆     ◆  ◆     ◆  ◆     ◆  ◆     ◆     ◆     ',
			'  ◆◆◆◆◆◆◆   ◆◆◆◆◆    ◆◆◆◆◆    ◆◆◆◆◆    ◆◆◆◆◆      ◆     ',
			'--------------------------------------------------------',
			'--------------------------------------------------------',
		);
		
		return join("\n", $result);
	}
}