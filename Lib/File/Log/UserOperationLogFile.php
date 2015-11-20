<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('AppLogFile', 'Lib/File/Log');

/**
 * Description of UserOperationLogFile
 *
 * @author hanai
 */
class UserOperationLogFile extends AppLogFile {
	
	const PATH_BASE = 'logs/days/{:day}/user/{:user_id}_operation.log';
	
	/**
	 *
	 * @var AuthComponent
	 */
	private $auth = null;
	
	public function setAuth(AuthComponent $auth) {
		$this->auth = $auth;
	}
	
	protected function getPath() {
		$logFile = $this;
		$dataFormat	= static::DATE_FORMAT;
		$idLength	= static::ID_LENGTH;
		$subject	= static::PATH_BASE;
		$timestamp	= $logFile->timestamp;
		$auth		= $logFile->auth;
		
		$day		= date($dataFormat, $timestamp);
		$user_id	= $auth->user('id');
		
		$map = array(
			'{:day}'		=> $day,
			'{:user_id}'	=> str_pad($user_id, $idLength, '0', STR_PAD_LEFT),
		);
		$search		= array_keys($map);
		$replace	= array_values($map);
		
		return TMP . str_replace($search, $replace, $subject);
	}	
}