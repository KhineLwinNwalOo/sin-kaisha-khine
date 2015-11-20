<?php
/**
 * Application level View Helper
 *
 * This file is application-wide helper file. You can put all
 * application-wide helper-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Helper
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('AppHelper', 'View/Helper');

/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 *
 * @property ExtFormHelper $ExtForm Description
 * @property HtmlHelper $Html Description
 * @property SessionHelper $Session Description
 * @property PaginatorHelper $Paginator Description
 * @property TextHelper $Text Description
 */
class AppCtlHelper extends AppHelper {
	
	public $helpers = array('ExtForm', 'Html', 'Session', 'Paginator', 'Text');
	
	protected $data = array();
	
	protected $alias = '';
	
	/**
	 *
	 * @var AuthComponent
	 */
	protected $auth = null;


	public function __construct(View $View, $settings = array()) {
		$this->alias = self::createAlias($this);
		parent::__construct($View, $settings);
	}

	public function setData($data) {
		$this->data = $data;
	}
	
	/**
	 * 認証情報設定
	 * @param AuthComponent $auth
	 */
	public function setAuth(AuthComponent $auth) {
		$this->auth = $auth;
	}
	
	/**
	 * 認証情報チェック
	 * @return boolean
	 */
	public function loggedIn() {
		$auth = $this->auth;
		if (is_null($auth)) {
			return false;
		}
		
		return $auth->loggedIn();
	}

	/**
	 * 
	 * @param self $helper
	 */
	private static function createAlias(self $helper) {
		return preg_replace('/Helper$/', '', get_class($helper));
	}

	/**
	 * セッションメッセージ
	 * @return string
	 */
	public function getSessionFlashMessage() {
		$session = $this->Session;
		$attrs = array(
			'element' => null,
		);
		$message = $session->flash('flash', $attrs);
		
		if (empty($message)) {
			return '';
		} else {
			return '<div class="message">' . h($message) . '</div>';
		}
	}
	
}