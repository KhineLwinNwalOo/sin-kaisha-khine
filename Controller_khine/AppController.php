<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Controller', 'Controller');
App::uses('LogUtil', 'Lib/Util');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	
	public $title = '';
	
	public $keywords = array();
	
	public $components = array(
		'Session',
		'Security',
		/**/
		'Auth' => array(
			'authenticate' => array(
				'Form' => array(
					'userModel' => 'TblUser',
					'fields' => array(
						'username'	=> 'user_mail',
						'password'	=> 'password',
					),
					'scope' => array(
						'TblUser.login_flag' => true,
					),
				),
			),
			//ログイン後の移動先
			'loginRedirect'		=> array('controller' => 'Mains', 'action' => 'index'),
			//ログアウ後の移動先
			'logoutRedirect'	=> array('controller' => 'Mains', 'action' => 'login'),
			//ログインページのパス
			'loginAction'		=> array('controller' => 'Mains', 'action' => 'login'),
			'authError'			=> 'ログインしてください',
		),
		/**/
		// 'Acl'
	);
	
	public $helpers = array(
		'Session',
		'Project',
	);
	
	
	public function beforeFilter() {
		$ctl		= $this;
		$auth		= $ctl->Auth;
		$session	= $ctl->Session;
		$request	= $ctl->request;
		
		LogUtil::init($session, $auth, time(), env('REMOTE_ADDR'));
		LogUtil::writeUserAccess($request);
		
		return parent::beforeFilter();
	}

	public function beforeRender() {
		$ctl	= $this;
		$auth	= $ctl->Auth;
		$title	= $ctl->title;
		$keywords	= $ctl->keywords;
		
		$ctl->set(compact('auth', 'title', 'keywords'));
		
		return parent::beforeRender();
	}
}
