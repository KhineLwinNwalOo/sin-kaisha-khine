<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('AppLog', 'Lib/Log');
App::uses('UserOperationLogFile', 'Lib/File/Log');
App::uses('MailSuccessLogFile', 'Lib/File/Log');

/**
 * Description of MailSuccessLog
 *
 * @author hanai
 */
class MailSuccessLog extends AppLog {
	
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
		self::writeUserOperationLogFile($log);
		// 共通のログに概要を記録
		self::writeMailSuccessLogFile($log);
	}
	
	/**
	 * ユーザ毎のアクセスログに詳細を記録
	 * @param self $log
	 */
	private static function writeUserOperationLogFile(self $log) {
		$timestamp	= $log->timestamp;
		$remoteIp	= $log->remoteIp;
		$auth		= $log->auth;
		
		$logContents = $log->getUserOperationLogContents();
		
		$logFile = new UserOperationLogFile($timestamp, $remoteIp);
		$logFile->setAuth($auth);
		$logFile->setLogContents($logContents);
		$logFile->write();
	}
	
	/**
	 * 共通のアクセスログに概要を記録
	 * @param self $log
	 */
	private static function writeMailSuccessLogFile(self $log) {
		$timestamp	= $log->timestamp;
		$remoteIp	= $log->remoteIp;
		
		$logContents = $log->getMailSuccessLogContents();
		
		$logFile = new MailSuccessLogFile($timestamp, $remoteIp);
		$logFile->setLogContents($logContents);
		$logFile->write();
	}

	/**
	 * 
	 * @return string
	 */
	protected function getUserOperationLogContents() {
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
		
		
		$result = array(
			'LogType : Mial Send Success',
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
			'-----------------------------------------------------------------',
			'   ◆◆◆◆◆   ◆     ◆   ◆◆◆◆◆    ◆◆◆◆◆   ◆◆◆◆◆◆◆   ◆◆◆◆◆    ◆◆◆◆◆   ',
			'  ◆     ◆  ◆     ◆  ◆     ◆  ◆     ◆  ◆        ◆     ◆  ◆     ◆  ',
			'  ◆◆       ◆     ◆  ◆        ◆        ◆        ◆◆       ◆◆       ',
			'    ◆◆◆    ◆     ◆  ◆        ◆        ◆◆◆◆◆◆◆    ◆◆◆      ◆◆◆    ',
			'       ◆◆  ◆     ◆  ◆        ◆        ◆             ◆◆       ◆◆  ',
			'  ◆     ◆  ◆     ◆  ◆     ◆  ◆     ◆  ◆        ◆     ◆  ◆     ◆  ',
			'   ◆◆◆◆◆    ◆◆◆◆◆    ◆◆◆◆◆    ◆◆◆◆◆   ◆◆◆◆◆◆◆   ◆◆◆◆◆    ◆◆◆◆◆   ',
			'-----------------------------------------------------------------',
			'-----------------------------------------------------------------',
		);
		
		return join("\n", $result);
	}
	
	/**
	 * 
	 * @return string
	 */
	protected function getMailSuccessLogContents() {
		$log = $this;
		$auth	= $log->auth;
		$mail	= $log->extCakeEmail;
		
		$userId		= self::createUserId($auth);
		$subject	= $mail->getSubject();
		
		$result = array(
			'[ UserId : ' . $userId . ' ] Subject : ' . $subject,
		);
		
		return join("\n", $result);
	}
}