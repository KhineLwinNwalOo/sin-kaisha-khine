<?php
App::uses('AppController', 'Controller');
App::uses('UrlUtil', 'Lib/Util');
/**
 * CategoriesCreates Controller
 *
 * @property CategoriesCreate $CategoriesCreate
 * @property PaginatorComponent $Paginator
 */
class MinCategoryCreatesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public function index(){
		$ctl		        = $this;
		$model		        = $ctl->MinCategoryCreate;
		$session            = $ctl->Session;
		$request            = $ctl->request;

		$model->setInputFormParams();
		$model->setSessionToRequestData($request, $session);
		$ctl->layout = false;
	}
	
	public function mincategoryinsert($flgSetAction = false){
		$ctl		        = $this;
		$model		        = $ctl->MinCategoryCreate;
		$session            = $ctl->Session;
		$request            = $ctl->request;
		
		$model->setInputFormParams();
		$model->setSessionToRequestData($request, $session);
		if ($request->is('post') && $flgSetAction === false) {
			$model->set($request->data);
			if ($model->validates()) {
				$model->setRequestToSessionData($session, $request);
				$ctl->setAction('insert', true);
			} else {
				$session->setFlash(__('入力内容を確認して下さい'));
			}
		}
	}
		
	public function insert() {
		$ctl		        = $this;
		$model		        = $ctl->MinCategoryCreate;
		$session            = $ctl->Session;
		$request            = $ctl->request;
		
		$model->setSessionToRequestData($request, $session);
		if (!empty($request->data) && $model->saveminCategory($request->data) ) {
			$model->deleteRequestSessionData($session);
			$session->setFlash(__('小カテゴリを作成しました'));
			$ctl->setAction('index', true);
			return;
		}
	}

	public function min_category($Midid){
		$ctl	    = $this;
		$model	    = $ctl->MinCategoryCreate;
		$minData   = $model->getMinCategory($Midid);

		$ctl->set(compact('minData'));
		$ctl->layout = false;
    }
	
		
	public function beforeFilter() {
		// Authコンポーネントの設定
		//self::_authSetting($this->Auth);
	//	$this->Auth->allow();
		$this->Security->unlockedActions = array(
			'index','mincategoryinsert', 'insert',
		);
		return parent::beforeFilter();
    }
}