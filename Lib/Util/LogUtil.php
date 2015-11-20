<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('SessionComponent', 'Controller/Component');
App::uses('AuthComponent', 'Controller/Component');

App::uses('UserAccessLog', 'Lib/Log');
App::uses('LoginSuccessLog', 'Lib/Log');
App::uses('LogoutLog', 'Lib/Log');
App::uses('LginErrorLog', 'Lib/Log');
App::uses('CreateDataLog', 'Lib/Log');
App::uses('EditDataLog', 'Lib/Log');
App::uses('MailSuccessLog', 'Lib/Log');
App::uses('MailErrorLog', 'Lib/Log');

/**
 * Description of LogUtil
 *
 * @author hanai
 */
class LogUtil {
	
	const BEFORE_EDIT_DATA_SESSION_KEY = 'tmp.LogUtil.BeforeEdit.';
	
	/**
	 * 
	 * @var SessionComponent 
	 */
	private static $session = null;
	
	/**
	 * 
	 * @var AuthComponent 
	 */
	private static $auth = null;
	
	/**
	 * 
	 * @var int 
	 */
	private static $timestamp = null;

	/**
	 *
	 * @var string 
	 */
	private static $remoteIp = null;

	/**
	 * 初期化
	 * 
	 * @param SessionComponent $session
	 * @param AuthComponent $auth
	 * @param int $time
	 */
	public static function init(SessionComponent $session = null, AuthComponent $auth = null, $timestamp = null, $remoteIp = null) {
		self::$session		= $session;
		self::$auth			= $auth;
		self::$timestamp	= is_null($timestamp)? time(): $timestamp;
		self::$remoteIp		= is_null($remoteIp)? env('REMOTE_ADDR'): $remoteIp;
	}
	
	/**
	 * アクセスログ
	 * @param AppController $ctl
	 */
	public static function writeUserAccess(CakeRequest $request) {
		$auth		= self::$auth;
		$time		= self::$timestamp;
		$remoteIp	= self::$remoteIp;
		
		if (!is_null($auth) && $auth->loggedIn()) {
			$log = new UserAccessLog($time, $remoteIp);
			$log->setAuth($auth);
			$log->setRequest($request);
			$log->write();
		}
	}
	
	/**
	 * ログインログ
	 */
	public static function writeLoginSuccess() {
		$auth		= self::$auth;
		$time		= self::$timestamp;
		$remoteIp	= self::$remoteIp;
		
		$log = new LoginSuccessLog($time, $remoteIp);
		$log->setAuth($auth);
		$log->write();
	}
	
	/**
	 * ログアウトログ
	 */
	public static function writeLogout() {
		$auth		= self::$auth;
		$time		= self::$timestamp;
		$remoteIp	= self::$remoteIp;
		
		$log = new LogoutLog($time, $remoteIp);
		$log->setAuth($auth);
		$log->write();
	}
	
	/**
	 * データ操作ログ（データ作成）
	 */
	public static function writeCreateData(AppCtlModel $model) {
		$auth		= self::$auth;
		$time		= self::$timestamp;
		$remoteIp	= self::$remoteIp;
		
		$log = new CreateDataLog($time, $remoteIp);
		$log->setAuth($auth);
		$log->setCtlModel($model);
		$log->write();
	}
	
	/**
	 * データ操作ログ（更新前データの一時保存）
	 * @param AppCtlModel $model
	 * @param type $modelDataKey
	 * @param array $data
	 */
	public static function setBeforeEditData(AppCtlModel $model, $modelDataKey, array $data) {
		$session	= self::$session;
		$dataKey	= self::getEditDataKey($model, $modelDataKey);
		$session->write($dataKey, $data);
	}

	/**
	 * データ操作ログ（データ更新）
	 * @param AppCtlModel $model
	 * @param type $modelDataKey
	 */
	public static function writeEditData(AppCtlModel $model, $modelDataKey) {
		$session	= self::$session;
		$auth		= self::$auth;
		$time		= self::$timestamp;
		$remoteIp	= self::$remoteIp;
		
		$dataKey	= self::getEditDataKey($model, $modelDataKey);
		$beforeData = $session->read($dataKey);
		
		$log = new EditDataLog($time, $remoteIp);
		$log->setAuth($auth);
		$log->setCtlModel($model);
		$log->setBeforeData($beforeData);
		$log->write();
	}
	
	/**
	 * データ削除ログ
	 * @param AppCtlModel $model
	 * @param array $deleteData
	 */
	public static function writeDeleteData(AppCtlModel $model, array $deleteData) {
		$auth		= self::$auth;
		$time		= self::$timestamp;
		$remoteIp	= self::$remoteIp;
		
		$log = new DeleteDataLog($time, $remoteIp);
		$log->setAuth($auth);
		$log->setCtlModel($model);
		$log->setDeleteData($deleteData);
		$log->write();
	}
	
	/**
	 * メール送信ログ
	 * @param ExtCakeEmail $mail
	 */
	public static function writeMailResult(ExtCakeEmail $mail, $sendResult) {
		$auth	= self::$auth;
		$time	= self::$timestamp;
		$remoteIp	= self::$remoteIp;
		
		if ($sendResult) {
			$log = new MailSuccessLog($time, $remoteIp);
			$log->setAuth($auth);
			$log->setExtCakeEmail($mail);
			$log->write();
		} else {
			$log = new MailErrorLog($time, $remoteIp);
			$log->setAuth($auth);
			$log->setExtCakeEmail($mail);
			$log->write();
		}
	}
	
	public static function writeLoginError(CakeRequest $request) {
		$time		= self::$timestamp;
		$remoteIp	= self::$remoteIp;
		
		$log = new LginErrorLog($time, $remoteIp);
		$log->setRequest($request);
		$log->write();
	}
	
	private static function getEditDataKey(AppCtlModel $model, $modelDataKey) {
		$tplKey		= self::BEFORE_EDIT_DATA_SESSION_KEY;
		$modelName	= $model->alias;
		
		return $tplKey . $modelName . '.' . $modelDataKey;
	}
}