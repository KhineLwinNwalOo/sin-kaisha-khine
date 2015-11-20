<?php
App::uses('AppController', 'Controller');
App::uses('UrlUtil', 'Lib/Util');
/**
 * CategoriesSearchs Controller
 *
 * @property CategoriesSearch $CategoriesSearch
 * @property PaginatorComponent $Paginator
 */
class CategoriesEditsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
        
    public function index($content_id){
		$ctl		= $this;
		$model		= $ctl->CategoriesEdit;
		$session	= $ctl->Session;
		$request	= $ctl->request;
		$sessionKey = $model->getSessionKey($content_id);

		$model->setEditDataToRequest( $request, $content_id);
		$model->setRequestToSessionData($session, $request, $sessionKey);
		$this->setAction('input', $content_id, true);
	}

	public function input($content_id) {
		$ctl		= $this;
		$model		= $ctl->CategoriesEdit;
		$session	= $ctl->Session;
		$request	= $ctl->request;
		$sessionKey = $model->getSessionKey($content_id);
		$model->setInputFormParams();
		$model->setSessionToRequestData($request, $session, $sessionKey);
		if ($request->is('post')) {
			if (!empty($request->data) && $model->saveCategory($request->data)) {
				$model->deleteRequestSessionData($session, $sessionKey);
				$session->setFlash(__('事業目的情報を更新しました'));
				$url = UrlUtil::getCategoriesSearch();
				$this->redirect($url);
				return;
			} else {
				$session->setFlash(__('事業目的情報の更新に失敗しました'));
				$ctl->setAction('input', true);
				return;
			}
		}
		
	}
	
    public function beforeFilter() {
        // Authコンポーネントの設定
        //self::_authSetting($this->Auth);
      //  $this->Auth->allow();
        return parent::beforeFilter();
    }
}
