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
class UserAccessLog extends AppLog {
	
	/**
	 *
	 * @var CakeRequest
	 */
	private $request = null;
	
	/**
	 *
	 * @var AuthComponent
	 */
	private $auth = null;
	
	public function setRequest(CakeRequest $request) {
		$this->request = $request;
	}
	
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
		$request	= $log->request;
		$auth		= $log->auth;
		
		$userId		= self::createUserId($auth);
		$medhod		= $request->method();
		$referer	= $request->referer();
		$params		= Debugger::exportVar($request->params, 25);
		$data		= Debugger::exportVar($request->data, 25);
		$ctlName	= Inflector::camelize($request->params['controller']);
		$actionName	= $request->params['action'];
		
		$result = array(
			'LogType : User Access',
			'UserId  : ' . $userId,
			'Access  : ' . $ctlName . 'Controller::' . $actionName . '();',
			'Referer : ' . $referer,
			'Medhod  : ' . $medhod,
			'---Params---',
			$params,
			'---Data---',
			$data,
			'---End---'
		);
		
		return join("\n", $result);
	}
}