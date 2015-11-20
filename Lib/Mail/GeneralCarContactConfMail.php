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
class GeneralCarContactConfMail extends AppMail {
	
	const MAIL_CTP = 'general_car_contact_conf';
	const LAYOUT_CTP = 'user';
	
	protected $data = array();
	
	protected $dataTblSellGeneralCar = array();
	
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
	
	public function setDataTblSellGeneralCar(array $dataTblSellGeneralCar) {
		$this->dataTblSellGeneralCar = $dataTblSellGeneralCar;
	}

	public function send() {
		$mail	= $this;
		$data	= $mail->data;
		$auth	= $mail->auth;
		$dataTblSellGeneralCar = $this->dataTblSellGeneralCar;
		
		AuthUtil::refresh($auth);
		$user_mail	= AuthUtil::getTblUserUserMail($auth);
		$from_mail	= self::FROM_ADDRESS;
		
		$subject	= '[' . SERVICE_NAME . ']' . __('Car Sell Inquiry Confirmation');
		$mailCtp	= self::MAIL_CTP;
		$layoutCtp	= self::LAYOUT_CTP;
		
		$email = $mail->getCakeEmail();
		$email->from($from_mail);
		$email->to($user_mail);
		$email->subject($subject);
		$email->emailFormat('text');
		$email->template($mailCtp, $layoutCtp);
		$email->viewVars(compact('data', 'auth', 'dataTblSellGeneralCar'));
		return $email->send();
	}	
}