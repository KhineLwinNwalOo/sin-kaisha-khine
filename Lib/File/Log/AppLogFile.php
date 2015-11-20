<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('File', 'Utility');
App::uses('Debugger', 'Utility');

/**
 * ログファイル用共通クラス
 * Description of AppLogFile
 *
 * @author hanai
 */
abstract class AppLogFile {
	
	const DATE_FORMAT	= 'Ymd';
	const ID_LENGTH		= 11;
	const PATH_BASE		= 'logs/';
	
	protected $logContents = '';
	
	final public function __construct($timestamp, $remoteIp = null) {
		$logFile = $this;
		
		$logFile->timestamp	= $timestamp;
		$logFile->remoteIp	= $remoteIp;
	}
	
	final public function setLogContents($logContents) {
		$this->logContents = $logContents;
	}
	
	/**
	 * 
	 * @param type $contents
	 */
	final public function write() {
		$logFile = $this;
		
		$path			= $logFile->getPath();
		$logHeader		= $logFile->getLogHeader();
		$logContents	= $logFile->logContents;
		
		$file = new File($path, true, 0777);
		$file->lock = true;
		$file->append($logHeader);
		$file->append("\n");
		$file->append($logContents);
		$file->append("\n\n");
		$file->close();
	}
	
	abstract protected function getPath();

	/**
	 * ログヘッダを取得
	 * @return string
	 */
	protected function getLogHeader() {
		$logFile	= $this;
		$remoteIp	= $logFile->remoteIp;
		$timestamp	= $logFile->timestamp;
		
		$result = array(
			'[' . $remoteIp . ']',
			'[' . date('Y-m-d H:i:s', $timestamp) . ']',
			'（' . $timestamp . '）',
		);
		return join("", $result);
	}
}