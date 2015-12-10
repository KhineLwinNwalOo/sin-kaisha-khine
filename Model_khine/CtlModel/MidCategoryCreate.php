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
App::uses('MidCategoryCreateToTblMidCategory', 'Lib/Convert/TblMidCategory');
App::uses('OrmModelUtil', 'Lib/Util');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class MidCategoryCreate extends AppCtlModel {
	
	public $setInputFormFlag = false;
	const PAGINATE_ORM_NAME = 'TblContent';
	public $validate = array();
	public $fieldParams = array();
    public static $multipleFields = array();
	
	public function setInputFormParams() {
		
		$ctlModel = $this;
		if ($ctlModel->setInputFormFlag === false) {
			self::setInputFormMiddleCategoriesName1              ($ctlModel);
			self::setInputFormMiddleCategoriesName2              ($ctlModel);
			self::setInputFormMiddleCategoriesName3              ($ctlModel);
            $ctlModel->setInputFormFlag = true;
		}
	}
	
		private function setInputFormMiddleCategoriesName1(self $ctlModel) {
		$fieldName = 'middlecategory_name_1';
		// バリデーション設定
		$ctlModel->validate[$fieldName] = array(
			'notEmpty' => array(
							'rule'		=> array('notEmpty', ),
							'message'	=> '大カテゴリ名を入力して下さい',
							'allowEmpty'	=> true,
							 'required'	=> false,
							 'last'	=> false, // Stop validation after this rule
							 'on'		=> 'create', // Limit validation to 'create' or 'update' operations
			),
			'maxlength' => array(
							'rule'		=> array('maxlength', 50),
							'message'	=> '大カテゴリ名は50文字以内で入力して下さい',
							'allowEmpty'	=> true,
							// 'required'	=> false,
							// 'last'	=> false, // Stop validation after this rule
							// 'on'		=> 'create', // Limit validation to 'create' or 'update' operations
			),
			'checkUnique' => array(
							'rule'		=> array('checkUnique', 'TblMidCategory', 'name', null),
							'message'	=> '入力された大カテゴリは登録済です',
							// 'allowEmpty'	=> true,
							// 'required'	=> false,
							// 'last'	=> false, // Stop validation after this rule
							// 'on'		=> 'create', // Limit validation to 'create' or 'update' operations
			),
        );
		$ctlModel->fieldParams[$fieldName] = array(
			'type'			=> 'text',
			'maxlength'		=> 50,
			'required'		=> true,
		);
	}
	
	private function setInputFormMiddleCategoriesName2(self $ctlModel) {
		$fieldName = 'middlecategory_name_2';
		// バリデーション設定
		$ctlModel->validate[$fieldName] = array(
			'notEmpty' => array(
							'rule'		=> array('notEmpty', ),
							'message'	=> '大カテゴリ名を入力して下さい',
							'allowEmpty'	=> true,
							// 'required'	=> false,
							// 'last'	=> false, // Stop validation after this rule
							// 'on'		=> 'create', // Limit validation to 'create' or 'update' operations
			),
			'maxlength' => array(
							'rule'		=> array('maxlength', 50),
							'message'	=> '大カテゴリ名は50文字以内で入力して下さい',
							'allowEmpty'	=> true,
							// 'required'	=> false,
							// 'last'	=> false, // Stop validation after this rule
							// 'on'		=> 'create', // Limit validation to 'create' or 'update' operations
			),
			'checkUnique' => array(
							'rule'		=> array('checkUnique', 'TblMidCategory', 'name', null),
							'message'	=> '入力された大カテゴリは登録済です',
							// 'allowEmpty'	=> true,
							// 'required'	=> false,
							// 'last'	=> false, // Stop validation after this rule
							// 'on'		=> 'create', // Limit validation to 'create' or 'update' operations
			),
        );
		$ctlModel->fieldParams[$fieldName] = array(
			'type'			=> 'text',
			'maxlength'		=> 50,
			'required'		=> true,
		);
	}
	
	private function setInputFormMiddleCategoriesName3(self $ctlModel) {
		$fieldName = 'middlecategory_name_3';
		// バリデーション設定
		$ctlModel->validate[$fieldName] = array(
			'notEmpty' => array(
							'rule'		=> array('notEmpty', ),
							'message'	=> '大カテゴリ名を入力して下さい',
							'allowEmpty'	=> true,
							// 'required'	=> false,
							// 'last'	=> false, // Stop validation after this rule
							// 'on'		=> 'create', // Limit validation to 'create' or 'update' operations
			),
			'maxlength' => array(
							'rule'		=> array('maxlength', 50),
							'message'	=> '大カテゴリ名は50文字以内で入力して下さい',
							'allowEmpty'	=> true,
							// 'required'	=> false,
							// 'last'	=> false, // Stop validation after this rule
							// 'on'		=> 'create', // Limit validation to 'create' or 'update' operations
			),
			'checkUnique' => array(
							'rule'		=> array('checkUnique', 'TblMidCategory', 'name', null),
							'message'	=> '入力された大カテゴリは登録済です',
							// 'allowEmpty'	=> true,
							// 'required'	=> false,
							// 'last'	=> false, // Stop validation after this rule
							// 'on'		=> 'create', // Limit validation to 'create' or 'update' operations
			),
        );
		$ctlModel->fieldParams[$fieldName] = array(
			'type'			=> 'text',
			'maxlength'		=> 50,
			'required'		=> true,
		);
	}
	
	public function getMidCategory($tbl_big_category_id) {
	$ormModel = ClassRegistry::init('TblMidCategory');
        
        return self::findListTblMidCategory($ormModel, $tbl_big_category_id);
    }
    
    private static function findListTblMidCategory(TblMidCategory $ormModel, $tbl_big_category_id) {
        $options = array(
            'conditions' => array(
                'TblMidCategory.tbl_big_category_id' => $tbl_big_category_id,
            ),
            'sort' => array(
                'TblMidCategory.sort' => 'DESC'
            ),
        );
        return $ormModel->find('list', $options);
    }
	
	public function saveMidCategory(array $data){
		
		$ctlModel = $this;
		$ctlModel->set($data);
		$result = $ctlModel->validates();
		if ($result) {
			$ormModel = ClassRegistry::init('TblMidCategory');
						
			$convert = new MidCategoryCreateToTblMidCategory($ctlModel, $ormModel);
			$convert->setCtlData($data);
			
			$result = self::saveTransactionformid($convert);
		}

		return $result;
	}

	private static function saveTransactionformid(MidCategoryCreateToTblMidCategory $convert) {
		$db			= $convert->getDataSource();
		$ctlModel	= $convert->getCtlModel();
		$ormModel	= $convert->getOrmModel();
		$saveData	= $convert->getSaveData();
		
		try {
			$db->begin();
			// アカウント情報
			OrmModelUtil::transactionSaves($ormModel, $saveData);
			$db->commit();
		} catch (ErrorException $e) {
			$db->rollback();
			$ctlModel->validationErrors[] = $e->getMessage();
			return false;
		}
		return true;		
	}	
}
