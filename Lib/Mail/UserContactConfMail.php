<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('AppMail', 'Lib/Mail');
App::uses('AuthUtil', 'Lib/Util');

/**
 * Description of UserContactConfMail
 *
 * @author hanai
 */
class UserContactConfMail extends AppMail {
	
	const MAIL_CTP = 'user_contact_conf';
	const LAYOUT_CTP = 'user';
	
	protected $data = array();
	
	/**
	 *
	 * @var AuthComponent
	 */
	protected $auth = null;

	public function setData($data) {
		$this->data = $data;
	}
	
	public function setAuth(AuthComponent $auth) {
		$this->auth = $auth;
	}
	
	public function send() {
		$mail	= $this;
		$data	= $mail->data;
		$auth	= $mail->auth;
		
		AuthUtil::refresh($auth);
		$user_mail	= AuthUtil::getTblUserUserMail($auth);
		$from_mail	= self::FROM_ADDRESS;
		
		$subject	= '[' . SERVICE_NAME . ']' . __('Inquiry Confirmation');
		$mailCtp	= self::MAIL_CTP;
		$layoutCtp	= self::LAYOUT_CTP;
		
		$email = $mail->getCakeEmail();
		$email->from($from_mail);
		$email->to($user_mail);
		$email->subject($subject);
		$email->emailFormat('text');
		$email->template($mailCtp, $layoutCtp);
		$email->viewVars(compact('data', 'auth'));
		return $email->send();
	}	
}