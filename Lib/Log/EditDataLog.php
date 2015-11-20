<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('AppLog', 'Lib/Log');
App::uses('UserOperationLogFile', 'Lib/File/Log');

/**
 * Description of EditDataLog
 *
 * @author hanai
 */
class EditDataLog extends AppLog {
	
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
	private $beforeData = array();


	public function setAuth(AuthComponent $auth) {
		$this->auth = $auth;
	}
	
	public function setCtlModel(AppCtlModel $model) {
		$this->model = $model;
	}
	
	public function setBeforeData(array $beforeData) {
		$this->beforeData = $beforeData;
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
		$beforeData	= $log->beforeData;
		
		$userId		= self::createUserId($auth);
		$mdoelName	= $model->name;
		$textBeforeData	= Debugger::exportVar($beforeData, 25);
		$textEditData	= Debugger::exportVar($model->data, 25);
		
		$result = array(
			'LogType   : Edit Data',
			'UserId    : ' . $userId,
			'ModelName : ' . $mdoelName,
			'---Before Data---',
			$textBeforeData,
			'---Edit Data---',
			$textEditData,
			'---End---',
		);
		
		return join("\n", $result);
	}
}