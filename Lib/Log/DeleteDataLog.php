<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('AppLog', 'Lib/Log');
App::uses('UserOperationLogFile', 'Lib/File/Log');

/**
 * Description of DeleteDataLog
 *
 * @author hanai
 */
class DeleteDataLog extends AppLog {
	
	/**
	 *
	 * @var AuthComponent
	 */
	private $auth = null;
	
	/**
	 *
	 * @var AppCtlModel 
	 */
	private $model = null;
	
	/**
	 *
	 * @var array
	 */
	private $deleteData = array();


	public function setAuth(AuthComponent $auth) {
		$this->auth = $auth;
	}
	
	public function setCtlModel(AppCtlModel $model) {
		$this->model = $model;
	}
	
	public function setDeleteData(array $deleteData) {
		$this->deleteData = $deleteData;
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
		
		$logFile = new UserOperationLogFile($timestamp, $remoteIp);
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
		$auth		= $log->auth;
		$model		= $log->model;
		$deleteData	= $log->deleteData;
		
		$userId		= self::createUserId($auth);
		$mdoelName	= $model->name;
		$textDeleteData	= Debugger::exportVar($deleteData, 25);
		
		$result = array(
			'LogType   : Delete Data',
			'UserId    : ' . $userId,
			'ModelName : ' . $mdoelName,
			'---Delete Data---',
			$textDeleteData,
			'---End---',
		);
		
		return join("\n", $result);
	}
}