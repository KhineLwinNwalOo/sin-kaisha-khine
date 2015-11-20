<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('CakeEmail', 'Network/Email');
App::uses('LogUtil', 'Lib/Util');

/**
 * メール送信用クラス
 * Memo：ログ記録情報取得のために機能を拡張
 * 
 * @author hanai
 */
class ExtCakeEmail extends CakeEmail {
	
	protected $errorMessage = '';
	
	final public function send($content = null) {
		$mail = $this;
		
		try {
			parent::send($content);
			$result = true;
		} catch (Exception $e) {
			$mail->errorMessage = $e->getMessage();
			$result = false;
		}
		
		LogUtil::writeMailResult($mail, $result);
		return $result;
	}
	
	public function getConfig() {
		return $this->_config;
	}
	
	public function getFrom() {
		return $this->_from;
	}
	
	public function getTo() {
		return $this->_to;
	}
	
	public function getCc() {
		return $this->_cc;
	}
	
	public function getBcc() {
		return $this->_bcc;
	}
	
	public function getSubject() {
		return $this->_subject;
	}
	
	public function getMessage() {
		return $this->_message;
	}
	public function getErrorMessage() {
		return $this->errorMessage;
	}
}