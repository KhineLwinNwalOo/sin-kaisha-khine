<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of XsrfUtil
 *
 * @author hanai
 */
class XsrfUtil {
	
	const TOKEN_FIELD		= 'xsrf_token';
	const SESSION_KEY_BASE	= 'tmp.xsrf_token.';
	
	const TOKEN_KEY_PREFIX	= ',ghn-09eyij#r)gjj';
	const TOKEN_KEY_SUFFIX	= 'nhWWn0Tarejb47;rg@pk';
	
	
	/**
	 * トークン送信フォーム用Input
	 * @param FormHelper $form
	 * @param SessionHelper $session
	 * @param string $dataAlias
	 * @param string $tokenKey
	 * @return string
	 */
	public static function getTokenInput(
			FormHelper $form, SessionHelper $session, $dataAlias, $tokenField = self::TOKEN_FIELD) {
		
		$sessionKey = self::SESSION_KEY_BASE . $dataAlias;
		$options = array(
			'type'	=> 'hidden',
			'value'	=> $session->read($sessionKey),
			'refer'	=> false,
		);
		return $form->input($dataAlias . '.' . $tokenField, $options);
	}
	
	/**
	 * トークン発効
	 * @param SessionComponent $session
	 * @param string $dataAlias
	 */
	public static function setToken(SessionComponent $session, $dataAlias) {
		$sessionKey = self::SESSION_KEY_BASE . $dataAlias;
		$prefix		= self::TOKEN_KEY_PREFIX;
		$suffix		= self::TOKEN_KEY_SUFFIX;
		
		$token = md5($prefix . time() . $suffix);
		$session->write($sessionKey, $token);
	}
	
	/**
	 * トークンチェック
	 * @param CakeRequest $request
	 * @param SessionComponent $session
	 * @param string $dataAlias
	 * @param string $tokenField
	 * @return boolean
	 */
	public static function checkToken(
			CakeRequest $request, SessionComponent $session, $dataAlias, $tokenField = self::TOKEN_FIELD) {
		
		$sessionKey		= self::SESSION_KEY_BASE . $dataAlias;
		$requestToken	= $request->data[$dataAlias][$tokenField];
		$sessionToken	= $session->read($sessionKey);
		$session->delete($sessionKey);
		return ($requestToken === $sessionToken)? true: false;
	}
	
}