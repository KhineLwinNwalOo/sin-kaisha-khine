<?php
App::uses('AppController', 'Controller');
App::uses('UrlUtil', 'Lib/Util');
/**
 * CategoriesCreates Controller
 *
 * @property CategoriesCreate $CategoriesCreate
 * @property PaginatorComponent $Paginator
 */
class CategoriesCreatesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
        
	public function index($flgSetAction = false){
		$ctl		        = $this;
		$model		        = $ctl->CategoriesCreate;
		$session            = $ctl->Session;
		$request            = $ctl->request;

		$model->setInputFormParams();
		$model->setSessionToRequestData($request, $session);
	}
	public function bigcategoryinsert($flgSetAction = false){
		$ctl		        = $this;
		$model		        = $ctl->CategoriesCreate;
		$session            = $ctl->Session;
		$request            = $ctl->request;
		$model->setSessionToRequestData($request, $session);

		if ($request->is('post') && $flgSetAction === false) {
			$model->set($request->data);
			if ($model->validates()) {
				$model->setRequestToSessionData($session, $request);

				if (!empty($request->data) && $model->saveBigCategory($request->data) ) {
					$model->deleteRequestSessionData($session);
					$session->setFlash(__('大カテゴリを作成しました'));
					return;
				}
			} else {
				$session->setFlash(__('入力内容を確認して下さい'));
			}
		}
	}
	
	public function midcategoryinsert($flgSetAction = false){
		$ctl		        = $this;
		$model		        = $ctl->CategoriesCreate;
		$session            = $ctl->Session;
		$request            = $ctl->request;
		$model->setSessionToRequestData($request, $session);

		if ($request->is('post') && $flgSetAction === false) {
			$model->set($request->data);
			if ($model->validates()) {
				$model->setRequestToSessionData($session, $request);
				if (!empty($request->data) && $model->saveMidCategory($request->data) ) {
					$model->deleteRequestSessionData($session);
					$session->setFlash(__('大カテゴリを作成しました'));
					return;
				}
			} else {
				$session->setFlash(__('入力内容を確認して下さい'));
			}
		}
		$ctl->autoRender = false;
	}

	public function smallcategoryinsert($flgSetAction = false){
		$ctl		        = $this;
		$model		        = $ctl->CategoriesCreate;
		$session            = $ctl->Session;
		$request            = $ctl->request;
		
		$model->setSessionToRequestData($request, $session);
		if ($request->is('post') && $flgSetAction === false) {
			$model->set($request->data);
			if ($model->validates()) {
				$model->setRequestToSessionData($session, $request);
				if (!empty($request->data) && $model->saveSmallCategory($request->data) ) {

					$model->deleteRequestSessionData($session);
					$session->setFlash(__('大カテゴリを作成しました'));
					return;
				}
			} else {
				$session->setFlash(__('入力内容を確認して下さい'));
			}
		}
		$ctl->autoRender = false;
	}

	public function contentcategoryinsert($flgSetAction = false){
		$ctl		        = $this;
		$model		        = $ctl->CategoriesCreate;
		$session            = $ctl->Session;
		$request            = $ctl->request;
		$model->setSessionToRequestData($request, $session);

		if ($request->is('post') && $flgSetAction === false) {
			$model->set($request->data);
			if ($model->validates()) {
				$model->setRequestToSessionData($session, $request);
				if (!empty($request->data) && $model->saveContentCategory($request->data) ) {
					$model->deleteRequestSessionData($session);
					$session->setFlash(__('大カテゴリを作成しました'));
					return;
				}
			} else {
				$session->setFlash(__('入力内容を確認して下さい'));
			}
		}
		$ctl->autoRender = false;
	}

	public function beforeFilter() {
		// Authコンポーネントの設定
		//self::_authSetting($this->Auth);
		//$this->Auth->allow();
		$this->Security->unlockedActions = array(
			'index','bigcategoryinsert', 'midcategoryinsert','smallcategoryinsert','contentcategoryinsert',
		);
		return parent::beforeFilter();
	}
	
	public function big_category(){
		$ctl		= $this;
		$model		= $ctl->CategoriesCreate;
		$bigData = $model->getBigCategory();
		$ctl->set(compact('bigData'));
		$ctl->layout = false;
	}

	public function mid_category($Bigid){
		$ctl	    = $this;
		$model	    = $ctl->CategoriesCreate;
		$midData    = $model->getMidCategory($Bigid);

		$ctl->set(compact('midData'));
		$ctl->layout = false;
	}
	
	public function min_category($Midid){
		$ctl	    = $this;
		$model	    = $ctl->CategoriesCreate;
		$minData   = $model->getMinCategory($Midid);

		$ctl->set(compact('minData'));
		$ctl->layout = false;
	}
}
