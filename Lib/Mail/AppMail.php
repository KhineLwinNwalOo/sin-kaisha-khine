<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('ExtCakeEmail', 'Lib/Mail');

/**
 * Description of AppMail
 *
 * @author hanai
 */
abstract class AppMail {
	
	const FROM_ADDRESS = 'info@caroll.me';
	
	/**
	 * メール送信インスタンス取得
	 * 
	 * @param type $config
	 * @return \CakeEmail
	 */
	protected function getCakeEmail($config = null) {
		return new ExtCakeEmail($config);
	}
	
	/**
	 * メール送信メソッド
	 */
	abstract public function send();
	
}