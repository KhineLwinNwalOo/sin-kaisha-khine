<?php
App::uses('AppController', 'Controller');
App::uses('UrlUtil', 'Lib/Util');
/**
 * CategoriesSearchs Controller
 *
 * @property CategoriesSearch $CategoriesSearch
 * @property PaginatorComponent $Paginator
 */
class CategoriesSearchsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
        
	public function index(){
		$ctl		= $this;
		$model		= $ctl->CategoriesSearch;
		$session	= $ctl->Session;
		$request	= $ctl->request;

		$model->setInputFormParams();
		if ($request->is('post')) {
			$model->setRequestToSessionData($session, $request);
		} else {
			$model->deleteRequestSessionData($session);
			$model->setSessionToRequestData($request, $session);
		}
		$model->setPaginateParams($ctl, $request);
		$dataPaginate = $model->getDataPaginate($ctl);
		$ctl->set(compact('dataPaginate'));

	}

	public function beforeFilter() {
		// Authコンポーネントの設定
		//$this->Auth->allow();
		$this->Security->unlockedActions[] = 'index';
		return parent::beforeFilter();
	}

}
