<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('AppLog', 'Lib/Log');
App::uses('LginErrorLogFile', 'Lib/File/Log');

/**
 * Description of LginErrorLog
 *
 * @author hanai
 */
class LginErrorLog extends AppLog {
	
	/**
	 *
	 * @var CakeRequest
	 */
	private $request = null;
	
	public function setRequest(CakeRequest $request) {
		$this->request = $request;
	}
	
	/**
	 * 
	 * @param type $contents
	 */
	public function write() {
		$log = $this;
		$timestamp	= $log->timestamp;
		$remoteIp	= $log->remoteIp;
		$logContents = $log->getLogContents();
		
		$logFile = new LginErrorLogFile($timestamp, $remoteIp);
		$logFile->setLogContents($logContents);
		$logFile->write();
	}

	/**
	 * 
	 * @return string
	 */
	protected function getLogContents() {
		$log = $this;
		$request	= $log->request;
		$remoteIp	= $log->remoteIp;
		
		$referer	= $request->referer();
		$params		= Debugger::exportVar($request->params, 25);
		$data		= Debugger::exportVar($request->data, 25);
		
		$result = array(
			'LogType : User Login Error',
			'IP      : ' . $remoteIp,
			'Referer : ' . $referer,
			'---Params---',
			$params,
			'---Data---',
			$data,
			'---End---'
		);
		
		return join("\n", $result);
	}
}