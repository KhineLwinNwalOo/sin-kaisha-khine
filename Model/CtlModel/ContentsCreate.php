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
App::uses('ContentsCreateToTblContent', 'Lib/Convert/TblContent');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class ContentsCreate extends AppCtlModel {
	
	public $setInputFormFlag = false;
	const PAGINATE_ORM_NAME = 'TblContent';
	public $validate = array();
	public $fieldParams = array();
    public static $multipleFields = array();
	
	public function setInputFormParams() {
		$ctlModel = $this;
		if ($ctlModel->setInputFormFlag === false) {
			
			self::setInputFormContentsCategoriesName1		 ($ctlModel);
			self::setInputFormContentsCategoriesName2		 ($ctlModel);
			self::setInputFormContentsCategoriesName3		 ($ctlModel);
			self::setInputFormContentsCategoriesName4		 ($ctlModel);
			self::setInputFormContentsCategoriesName5		 ($ctlModel);
			self::setInputFormContentsCategoriesName6		 ($ctlModel);
			self::setInputFormContentsCategoriesName7		 ($ctlModel);
			self::setInputFormContentsCategoriesName8		 ($ctlModel);
			self::setInputFormContentsCategoriesName9		 ($ctlModel);
			self::setInputFormContentsCategoriesName10		 ($ctlModel);

            $ctlModel->setInputFormFlag = true;
		}
	}
	
	private function setInputFormContentsCategoriesName1(self $ctlModel) {
		$fieldName = 'contents_name_1';
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
							'rule'		=> array('checkUnique', 'TblContent', 'content', null),
							'message'	=> '入力された大カテゴリは登録済です',
							// 'allowEmpty'	=> true,
							// 'required'	=> false,
							// 'last'	=> false, // Stop validation after this rule
							// 'on'		=> 'create', // Limit validation to 'create' or 'update' operations
			),
        );
		// 入力フォーム設定
		$ctlModel->fieldParams[$fieldName] = array(
			'type'			=> 'text',
			'maxlength'		=> 50,
			'required'		=> true,
		);
	}
	
	private function setInputFormContentsCategoriesName2(self $ctlModel) {
		$fieldName = 'contents_name_2';
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
							'rule'		=> array('checkUnique', 'TblContent', 'content', null),
							'message'	=> '入力された大カテゴリは登録済です',
							// 'allowEmpty'	=> true,
							// 'required'	=> false,
							// 'last'	=> false, // Stop validation after this rule
							// 'on'		=> 'create', // Limit validation to 'create' or 'update' operations
			),
        );
		// 入力フォーム設定
		$ctlModel->fieldParams[$fieldName] = array(
			'type'			=> 'text',
			'maxlength'		=> 50,
			'required'		=> true,
		);
	}
	private function setInputFormContentsCategoriesName3(self $ctlModel) {
		$fieldName = 'contents_name_3';
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
							'rule'		=> array('checkUnique', 'TblContent', 'content', null),
							'message'	=> '入力された大カテゴリは登録済です',
							// 'allowEmpty'	=> true,
							// 'required'	=> false,
							// 'last'	=> false, // Stop validation after this rule
							// 'on'		=> 'create', // Limit validation to 'create' or 'update' operations
			),
        );
		// 入力フォーム設定
		$ctlModel->fieldParams[$fieldName] = array(
			'type'			=> 'text',
			'maxlength'		=> 50,
			'required'		=> true,
		);
	}
	private function setInputFormContentsCategoriesName4(self $ctlModel) {
		$fieldName = 'contents_name_4';
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
							'rule'		=> array('checkUnique', 'TblContent', 'content', null),
							'message'	=> '入力された大カテゴリは登録済です',
							// 'allowEmpty'	=> true,
							// 'required'	=> false,
							// 'last'	=> false, // Stop validation after this rule
							// 'on'		=> 'create', // Limit validation to 'create' or 'update' operations
			),
        );
		// 入力フォーム設定
		$ctlModel->fieldParams[$fieldName] = array(
			'type'			=> 'text',
			'maxlength'		=> 50,
			'required'		=> true,
		);
	}
	private function setInputFormContentsCategoriesName5(self $ctlModel) {
		$fieldName = 'contents_name_5';
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
							'rule'		=> array('checkUnique', 'TblContent', 'content', null),
							'message'	=> '入力された大カテゴリは登録済です',
							// 'allowEmpty'	=> true,
							// 'required'	=> false,
							// 'last'	=> false, // Stop validation after this rule
							// 'on'		=> 'create', // Limit validation to 'create' or 'update' operations
			),
        );
		// 入力フォーム設定
		$ctlModel->fieldParams[$fieldName] = array(
			'type'			=> 'text',
			'maxlength'		=> 50,
			'required'		=> true,
		);
	}
	private function setInputFormContentsCategoriesName6(self $ctlModel) {
		$fieldName = 'contents_name_6';
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
							'rule'		=> array('checkUnique', 'TblContent', 'content', null),
							'message'	=> '入力された大カテゴリは登録済です',
							// 'allowEmpty'	=> true,
							// 'required'	=> false,
							// 'last'	=> false, // Stop validation after this rule
							// 'on'		=> 'create', // Limit validation to 'create' or 'update' operations
			),
        );
		// 入力フォーム設定
		$ctlModel->fieldParams[$fieldName] = array(
			'type'			=> 'text',
			'maxlength'		=> 50,
			'required'		=> true,
		);
	}
	private function setInputFormContentsCategoriesName7(self $ctlModel) {
		$fieldName = 'contents_name_7';
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
							'rule'		=> array('checkUnique', 'TblContent', 'content', null),
							'message'	=> '入力された大カテゴリは登録済です',
							// 'allowEmpty'	=> true,
							// 'required'	=> false,
							// 'last'	=> false, // Stop validation after this rule
							// 'on'		=> 'create', // Limit validation to 'create' or 'update' operations
			),
        );
		// 入力フォーム設定
		$ctlModel->fieldParams[$fieldName] = array(
			'type'			=> 'text',
			'maxlength'		=> 50,
			'required'		=> true,
		);
	}
	private function setInputFormContentsCategoriesName8(self $ctlModel) {
		$fieldName = 'contents_name_8';
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
							'rule'		=> array('checkUnique', 'TblContent', 'content', null),
							'message'	=> '入力された大カテゴリは登録済です',
							// 'allowEmpty'	=> true,
							// 'required'	=> false,
							// 'last'	=> false, // Stop validation after this rule
							// 'on'		=> 'create', // Limit validation to 'create' or 'update' operations
			),
        );
		// 入力フォーム設定
		$ctlModel->fieldParams[$fieldName] = array(
			'type'			=> 'text',
			'maxlength'		=> 50,
			'required'		=> true,
		);
	}
	private function setInputFormContentsCategoriesName9(self $ctlModel) {
		$fieldName = 'contents_name_9';
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
							'rule'		=> array('checkUnique', 'TblContent', 'content', null),
							'message'	=> '入力された大カテゴリは登録済です',
							// 'allowEmpty'	=> true,
							// 'required'	=> false,
							// 'last'	=> false, // Stop validation after this rule
							// 'on'		=> 'create', // Limit validation to 'create' or 'update' operations
			),
        );
		// 入力フォーム設定
		$ctlModel->fieldParams[$fieldName] = array(
			'type'			=> 'text',
			'maxlength'		=> 50,
			'required'		=> true,
		);
	}
	private function setInputFormContentsCategoriesName10(self $ctlModel) {
		$fieldName = 'contents_name_10';
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
							'rule'		=> array('checkUnique', 'TblContent', 'content', null),
							'message'	=> '入力された大カテゴリは登録済です',
							// 'allowEmpty'	=> true,
							// 'required'	=> false,
							// 'last'	=> false, // Stop validation after this rule
							// 'on'		=> 'create', // Limit validation to 'create' or 'update' operations
			),
        );
		// 入力フォーム設定
		$ctlModel->fieldParams[$fieldName] = array(
			'type'			=> 'text',
			'maxlength'		=> 50,
			'required'		=> true,
		);
	}
	
	public function saveContentCategory(array $data){
	
		$ctlModel = $this;
		$ctlModel->set($data);
		$result = $ctlModel->validates();
		if ($result) {
			$ormModel		= ClassRegistry::init('TblContent');
						
			$convert = new ContentsCreateToTblContent($ctlModel, $ormModel);
			$convert->setCtlData($data);
			
			$result = self::saveTransactionforcontent($convert);
		}

		return $result;
		
	}
	private static function saveTransactionforcontent(ContentsCreateToTblContent $convert) {
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
