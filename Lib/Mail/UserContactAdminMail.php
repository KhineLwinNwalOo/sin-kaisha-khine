<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('AppMail', 'Lib/Mail');
App::uses('AuthUtil', 'Lib/Util');
App::uses('MstUserGroup', 'Model');

/**
 * Description of UserContactAdminMail
 *
 * @author hanai
 */
class UserContactAdminMail extends AppMail {
	
	const MAIL_CTP = 'user_contact_admin';
	const LAYOUT_CTP = 'admin';
	
	protected $data = array();
	
	/**
	 *
	 * @var AuthComponent
	 */
	protected $auth = null;
	
	/**
	 *
	 * @var TblUser
	 */
	protected $TblUser = null;
	
	public function setData($data) {
		$this->data = $data;
	}
	
	public function setAuth(AuthComponent $auth) {
		$this->auth = $auth;
	}
	
	public function setTblUser(TblUser $tblUser) {
		$this->TblUser = $tblUser;
	}
	
	public function send() {
		$mail	= $this;
		$data	= $mail->data;
		$auth	= $mail->auth;
		$tblUser = $mail->TblUser;
		
		AuthUtil::refresh($auth);
		
		$title		= Hash::get($data, 'UserContact.title');
		$from_mail	= self::FROM_ADDRESS;
		$admin_mail	= self::getAdminMail($tblUser);
		$subject	= '[' . SERVICE_NAME . '(' . __('User Contact') . ')]' . $title;
		$mailCtp	= self::MAIL_CTP;
		$layoutCtp	= self::LAYOUT_CTP;
		
		$email = $mail->getCakeEmail();
		$email->from($from_mail);
		$email->to($admin_mail);
		$email->subject($subject);
		$email->emailFormat('text');
		$email->template($mailCtp, $layoutCtp);
		$email->viewVars(compact('data', 'auth'));
		return $email->send();
	}
	
	private static function getAdminMail(TblUser $tblUser) {
		$data = self::findAllAdminTblUser($tblUser);
		
		return Hash::extract($data, '{n}.TblUser.user_mail');
	}
	
	private static function findAllAdminTblUser(TblUser $tblUser) {
		$options = array(
			'fields' => array(
				'user_mail',
			),
			'conditions' => array(
				'mst_user_group_id' => MstUserGroup::ID_ADMIN,
			),
			'recursive' => -1,
		);
		
		return $tblUser->find('all', $options);
	}
}