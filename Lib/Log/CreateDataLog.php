<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('AppLog', 'Lib/Log');
App::uses('UserOperationLogFile', 'Lib/File/Log');

/**
 * Description of CreateDataLog
 *
 * @author hanai
 */
class CreateDataLog extends AppLog {
	
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
	
	public function setAuth(AuthComponent $auth) {
		$this->auth = $auth;
	}
	
	public function setCtlModel(AppCtlModel $model) {
		$this->model = $model;
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
		$auth	= $log->auth;
		$model	= $log->model;
		
		$userId		= self::createUserId($auth);
		$mdoelName	= $model->name;
		$data		= Debugger::exportVar($model->data, 25);
		
		$result = array(
			'LogType   : Create Data',
			'UserId    : ' . $userId,
			'ModelName : ' . $mdoelName,
			'---Data---',
			$data,
			'---End---',
		);
		
		return join("\n", $result);
	}
}