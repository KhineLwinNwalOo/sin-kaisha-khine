<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('AppLog', 'Lib/Log');
App::uses('UserOperationLogFile', 'Lib/File/Log');
App::uses('MailErrorLogFile', 'Lib/File/Log');

/**
 * Description of MailErrorLog
 *
 * @author hanai
 */
class MailErrorLog extends AppLog {
	
	/**
	 *
	 * @var AuthComponent
	 */
	private $auth = null;
	
	/**
	 *
	 * @var ExtCakeEmail
	 */
	private $extCakeEmail = null;
	

	public function setAuth(AuthComponent $auth) {
		$this->auth = $auth;
	}
	
	public function setExtCakeEmail(ExtCakeEmail $mail) {
		$this->extCakeEmail = $mail;
	}

	/**
	 * 
	 * @param type $contents
	 */
	public function write() {
		$log = $this;
		// ユーザ毎のログに詳細を記録
		self::writeUserOperationLogFileFile($log);
		// 共通のログに概要を記録
		self::writeMailErrorLogFile($log);
	}
	
	/**
	 * ユーザ毎のアクセスログに詳細を記録
	 * @param self $log
	 */
	private static function writeUserOperationLogFileFile(self $log) {
		$timestamp	= $log->timestamp;
		$remoteIp	= $log->remoteIp;
		$auth		= $log->auth;
		
		$logContents = $log->getContents();
		
		$logFile = new UserOperationLogFile($timestamp, $remoteIp);
		$logFile->setAuth($auth);
		$logFile->setLogContents($logContents);
		$logFile->write();
	}
	
	/**
	 * 共通のアクセスログに概要を記録
	 * @param self $log
	 */
	private static function writeMailErrorLogFile(self $log) {
		$timestamp	= $log->timestamp;
		$remoteIp	= $log->remoteIp;
		
		$logContents = $log->getContents();
		
		$logFile = new MailErrorLogFile($timestamp, $remoteIp);
		$logFile->setLogContents($logContents);
		$logFile->write();
	}

	/**
	 * 
	 * @return string
	 */
	protected function getContents() {
		$log = $this;
		$auth	= $log->auth;
		$mail	= $log->extCakeEmail;
		
		$userId		= self::createUserId($auth);
		$config		= Debugger::exportVar($mail->getConfig(), 25);
		$from		= Debugger::exportVar($mail->getFrom(), 25);
		$to			= Debugger::exportVar($mail->getTo(), 25);
		$cc			= Debugger::exportVar($mail->getCc(), 25);
		$bcc		= Debugger::exportVar($mail->getBcc(), 25);
		$subject	= Debugger::exportVar($mail->getSubject(), 25);
		$message	= Debugger::exportVar($mail->getMessage(), 25);
		$error		= $mail->getErrorMessage();
		
		$result = array(
			'LogType : Mial Send Error',
			'UserId  : ' . $userId,
			'--- From ---',
			$from,
			'--- To ---',
			$to,
			'--- Cc ---',
			$cc,
			'--- Bcc ---',
			$bcc,
			'Subject : ' . $subject,
			'--- Message ---',
			$message,
			'--- Config ---',
			$config,
			'--- Error ---',
			$error,
			'--- End ---',
			'----------------------------------------------------------------------------',
			'----------------------------------------------------------------------------',
			'  ◆     ◆   ◆◆◆      ◆     ◆             ◆◆◆◆◆   ◆◆◆◆◆◆◆  ◆     ◆  ◆◆◆◆◆    ',
			'  ◆◆   ◆◆    ◆      ◆ ◆    ◆            ◆     ◆  ◆        ◆◆    ◆  ◆    ◆   ',
			'  ◆◆   ◆◆    ◆      ◆ ◆    ◆            ◆◆       ◆        ◆ ◆   ◆  ◆     ◆  ',
			'  ◆ ◆ ◆ ◆    ◆     ◆   ◆   ◆              ◆◆◆    ◆◆◆◆◆◆◆  ◆  ◆  ◆  ◆     ◆  ',
			'  ◆ ◆ ◆ ◆    ◆     ◆◆◆◆◆   ◆                 ◆◆  ◆        ◆   ◆ ◆  ◆     ◆  ',
			'  ◆  ◆  ◆    ◆    ◆     ◆  ◆            ◆     ◆  ◆        ◆    ◆◆  ◆    ◆   ',
			'  ◆  ◆  ◆   ◆◆◆   ◆     ◆  ◆◆◆◆◆◆◆       ◆◆◆◆◆   ◆◆◆◆◆◆◆  ◆     ◆  ◆◆◆◆◆    ',
			'----------------------------------------------------------------------------',
			'-----------------------------------------------',
			'  ◆◆◆◆◆◆◆  ◆◆◆◆◆◆   ◆◆◆◆◆◆    ◆◆◆◆◆   ◆◆◆◆◆◆   ',
			'  ◆        ◆     ◆  ◆     ◆  ◆     ◆  ◆     ◆  ',
			'  ◆        ◆     ◆  ◆     ◆  ◆     ◆  ◆     ◆  ',
			'  ◆◆◆◆◆◆◆  ◆◆◆◆◆◆   ◆◆◆◆◆◆   ◆     ◆  ◆◆◆◆◆◆   ',
			'  ◆        ◆    ◆   ◆    ◆   ◆     ◆  ◆    ◆   ',
			'  ◆        ◆     ◆  ◆     ◆  ◆     ◆  ◆     ◆  ',
			'  ◆◆◆◆◆◆◆  ◆     ◆  ◆     ◆   ◆◆◆◆◆   ◆     ◆  ',
			'-----------------------------------------------',
			'-----------------------------------------------',
		);
		
		return join("\n", $result);
	}
}