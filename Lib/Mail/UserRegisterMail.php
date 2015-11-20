<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('AppMail', 'Lib/Mail');

/**
 * Description of UserRegisterMail
 *
 * @author hanai
 */
class UserRegisterMail extends AppMail {
	
	const MAIL_CTP = 'user_register';
	const LAYOUT_CTP = 'user';
	
	protected $data = array();
	
	
	public function setData($data) {
		$this->data = $data;
	}
	
	
	public function send() {
		$mail	= $this;
		$data	= $mail->data;
		
		$from_mail	= self::FROM_ADDRESS;
		$user_mail	= Hash::get($data, 'TblUser.user_mail');
		$subject	= '[' . SERVICE_NAME . ']' . __('Member registration completion');
		$mailCtp	= self::MAIL_CTP;
		$layoutCtp	= self::LAYOUT_CTP;
		
		$email = $mail->getCakeEmail();
		$email->from($from_mail);
		$email->to($user_mail);
		$email->subject($subject);
		$email->emailFormat('text');
		$email->template($mailCtp, $layoutCtp);
		$email->viewVars(compact('data'));
		return $email->send();
	}	
}