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
App::uses('BigCategoryCreateToTblBigCategory', 'Lib/Convert/TblBigCategory');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class BigCategoryCreate extends AppCtlModel {
	
	public $setInputFormFlag = false;
	
	const PAGINATE_ORM_NAME = 'TblContent';
	
	public $validate = array();
	
	public $fieldParams = array();
	
    public static $multipleFields = array();
	
	public function setInputFormParams() {
		$ctlModel = $this;
		if ($ctlModel->setInputFormFlag === false) {
			
			self::setInputFormBigCategoriesName              ($ctlModel);

            $ctlModel->setInputFormFlag = true;
		}
	}
	
	private function setInputFormBigCategoriesName(self $ctlModel) {
		$fieldName = 'bigcategory_name';
	
		$ctlModel->validate[$fieldName] = array(
			'notEmpty' => array(
				'rule'			=> array('notEmpty', ),
				'message'		=> 'メンバー名を入力して下さい',
				'allowEmpty'	=> true,
			),
			'maxlength' => array(
				'rule'			=> array('maxlength', 50),
				'message'		=> 'メンバー名は50文字以内で入力して下さい',
				'allowEmpty'	=> true,
			),
			'checkUnique' => array(
				'rule'			=> array('checkUnique', 'TblBigCategory', 'bigcategory_name', null),
				'message'		=> 'このメンバー名は登録済です',
				'allowEmpty'	=> true,
			),
		);
		// 入力フォーム設定
		$ctlModel->fieldParams[$fieldName] = array(
			'type'			=> 'text',
			'maxlength'		=> 50,
			'required'		=> true,
		);
	}
	
	//to save data
	public function saveBigCategory(array $data) {
		$ctlModel = $this;
		$ormModel = ClassRegistry::init('TblBigCategory');

		$ctlModel->set($data);
		$result = $ctlModel->validates();
		if ($result) {

			$convert = new BigCategoryCreateToTblBigCategory($ctlModel, $ormModel);
			$convert->setCtlData($data);		
			$result = self::saveTransaction($convert);
		}
		return $result;
	}
		
	private static function saveTransaction(BigCategoryCreateToTblBigCategory $convert) {
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
		
	public function getBigCategory() {
		$ormModel = ClassRegistry::init('TblBigCategory');
       
		return self::findListTblBigCategory($ormModel);
	}
	
	private static function findListTblBigCategory(TblBigCategory $ormModel) {
        $options = array(
            'sort' => array(
                'TblBigCategory.id' => 'DESC'
            ),
			'recursive' =>0,
        );
		
        return $ormModel->find('list', $options);
    }	
}
