<?php
App::uses('AppController', 'Controller');
App::uses('AjaxUtil', 'Lib/Util');
/**
 * Mains Controller
 *
 * @property Main $Main
 * @property PaginatorComponent $Paginator
 */
class MainsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	//public $components = array('Paginator');
   public function index(){

	}

	public function login(){
		$ctl		= $this;
		$auth		= $ctl->Auth;
		$request	= $ctl->request;
		$session	= $ctl->Session;

		sleep(1);
		if($request->is('post')) {
			if($auth->login()) {
				AjaxUtil::setToken($session);
				$ctl->redirect($auth->redirect());
				return;
			} else {
				sleep(3);
				//ログインNGなら
				$session->setFlash(__('メールアドレスかパスワードが違います'), null, null, 'auth');
			}
		} else {
			$auth->logout();
		}
		$ctl->layout = 'login';
	}


	public function beforeFilter() {
		// Authコンポーネントの設定
		//$this->Auth->allow();
		return parent::beforeFilter();
	}

	public function logout() {
		$ctl		= $this;
		$session	= $ctl->Session;
		$auth		= $ctl->Auth;

		$auth->logout();
		$session->destroy();
		$session->setFlash(__('ログアウトしました'), null, null, 'auth');
		$ctl->redirect($ctl->Auth->logout());
	}
	private static function _authSetting(AuthComponent $auth) {
		$auth->allow('login', 'logout');
	}
}
