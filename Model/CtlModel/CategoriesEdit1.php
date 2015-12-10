<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('AppCtlModel', 'Model');
App::uses('OrmModelUtil', 'Lib/Util');
App::uses('CategoriesEditFromTblContent', 'Lib/Convert/TblContent');
App::uses('CategoriesEditToTblContent', 'Lib/Convert/TblContent');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class CategoriesEdit extends AppCtlModel {
	
	const TMP_REQUEST_SESSION_KEY = 'tmp.Request.CategoriesEdit';
	
	public $setInputFormFlag = false;
	
	const PAGINATE_ORM_NAME = 'TblContent';
	
	public $validate = array();
	
	public $fieldParams = array();
    
	public static $multipleFields = array();
	
	public function getSessionKey($content_id) {
		return static::TMP_REQUEST_SESSION_KEY . $content_id;
	}	
	
	public function setEditDataToRequest(CakeRequest $request, $id) {
		$ctlModel	= $this;
		$ormModel	= ClassRegistry::init('TblContent');
		
		$ormData = self::findTblContent($ormModel, $id);
		if (empty($ormData)) {
			throw new BadRequestException();
		}
		$convert = new CategoriesEditFromTblContent($ctlModel, $ormModel);
		$convert->setOrmData($ormData);
		$ctlData = $convert->getCtlData();
		$request->data = $ctlData;
	}
	
	private static function findTblContent(TblContent $tblContents, $id) {
		$options = array(
			'conditions' => array(
				'TblContent.id' => $id,
				//'TblContent.tbl_mid_category_id' => $tbl_mid_category_id,
				//'TblContent.tbl_min_category_id' => $tbl_min_category_id,
			),
			'recursive' => 1,
		);
		return $tblContents->find('first', $options);
	}
	
	public function setInputFormParams() {
		$ctlModel = $this;
		if ($ctlModel->setInputFormFlag === false) {
			
			self::setInputFormContentName			($ctlModel);
			self::setInputFormBigCatagoriesName		($ctlModel);
			self::setInputFormMidCatagoriesName		($ctlModel);
			self::setInputFormMinCatagoriesName		($ctlModel);
            $ctlModel->setInputFormFlag = true;
		}
	}
	
	private static function setInputFormBigCatagoriesName(self $ctlModel) {
		$fieldName	= 'big_name';
		// バリデーション設定
		$ctlModel->validate[$fieldName] = array(
			'notEmpty' => array(
				'rule'			=> array('notEmpty', ),
				'message'		=> 'E-Mailを入力して下さい',
			),
		);
		// 入力フォーム設定
		$ctlModel->fieldParams[$fieldName] = array(
			'type'			=> 'text',
			//'options'		=> $list,
			'required'		=> false,
			//'multiple'		=> true,
		);
	}
	private static function setInputFormMidCatagoriesName(self $ctlModel) {
		$fieldName	= 'mid_name';
		// バリデーション設定
		$ctlModel->validate[$fieldName] = array(
			'notEmpty' => array(
				'rule'			=> array('notEmpty', ),
				'message'		=> 'E-Mailを入力して下さい',
			),
		);
		// 入力フォーム設定
		$ctlModel->fieldParams[$fieldName] = array(
			'type'			=> 'text',
			//'options'		=> $list,
			'required'		=> false,
			//'multiple'		=> true,
		);
	}
	private static function setInputFormMinCatagoriesName(self $ctlModel) {
		$fieldName	= 'min_name';
		// バリデーション設定
		$ctlModel->validate[$fieldName] = array(
			'notEmpty' => array(
				'rule'			=> array('notEmpty', ),
				'message'		=> 'E-Mailを入力して下さい',
			),
		);
		// 入力フォーム設定
		$ctlModel->fieldParams[$fieldName] = array(
			'type'			=> 'text',
			//'options'		=> $list,
			'required'		=> false,
			//'multiple'		=> true,
		);
	}
	private static function setInputFormContentName(self $ctlModel) {
		$fieldName	= 'content';
		// バリデーション設定
		$ctlModel->validate[$fieldName] = array(
			'notEmpty' => array(
				'rule'			=> array('notEmpty', ),
				'message'		=> 'E-Mailを入力して下さい',
			),
		);
		// 入力フォーム設定
		$ctlModel->fieldParams[$fieldName] = array(
			'type'			=> 'text',
			//'options'		=> $list,
			'required'		=> false,
			//'multiple'		=> true,
		);
	}
	
	public function saveCategory(array $data) {
		$ctlModel	= $this;
		$ormModel	= ClassRegistry::init('TblContent');
		
		$ctlModel->set($data);
		$result = $ctlModel->validates();
		if ($result) {
			$convert = new CategoriesEditToTblContent($ctlModel, $ormModel);
			$convert->setCtlData($data);
			
			$result = self::saveTransaction($convert);
		}
		return $result;
	}
	
	private static function saveTransaction(CategoriesEditToTblContent $convert) {
		$db			= $convert->getDataSource();
		$ctlModel	= $convert->getCtlModel();
		$ormModel	= $convert->getOrmModel();
		$saveData	= $convert->getSaveData();
		
		try {
			$db->begin();
			// アカウント情報
			OrmModelUtil::transactionSave($ormModel, $saveData);
			$db->commit();
		} catch (ErrorException $e) {
			$db->rollback();
			$ctlModel->validationErrors[] = $e->getMessage();
			return false;
		}
		return true;
	}
	
}
