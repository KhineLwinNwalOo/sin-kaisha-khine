<?php

App::uses('AppController', 'Controller');
App::uses('UrlUtil', 'Lib/Util');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoriesDeletesController
 *
 * @author ASUS
 */
class CategoriesDeletesController extends AppController {
	
	public function index($content_id) {
		$ctl		= $this;
		$model		= $ctl->CategoriesDelete;
		$session	= $ctl->Session;
		$request	= $ctl->request;
		
		$flashMessage = __('事業目的の削除に失敗しました');
		if ($request->is('post')) {
			if ($model->deleteContent($content_id)) {
				$flashMessage = __('事業目的の削除が完了しました');
			}
		}
		$session->setFlash($flashMessage);
		$url = UrlUtil::getCategoriesSearch();
		$ctl->redirect($url);
	}
}
