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
App::uses('CategoriesCreateToTblBigCategory', 'Lib/Convert/TblBigCategory');
App::uses('CategoriesCreateToTblMidCategory', 'Lib/Convert/TblMidCategory');
App::uses('CategoriesCreateToTblMinCategory', 'Lib/Convert/TblMinCategory');
App::uses('CategoriesCreateToTblContent',	  'Lib/Convert/TblContent');
/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class CategoriesCreate extends AppCtlModel {
	
	public $setInputFormFlag = false;
	const PAGINATE_ORM_NAME = 'TblContent';
	public $validate = array();
	public $fieldParams = array();
    public static $multipleFields = array();
	
	
	public function setInputFormParams() {
		$ctlModel = $this;
		if ($ctlModel->setInputFormFlag === false) {
			self::setInputFormBigCategoriesName              ($ctlModel);
            self::setInputFormMiddleCategoriesName1          ($ctlModel);
			self::setInputFormMiddleCategoriesName2          ($ctlModel);
			self::setInputFormMiddleCategoriesName3          ($ctlModel);
            self::setInputFormSmallCategoriesName1           ($ctlModel);
			self::setInputFormSmallCategoriesName2           ($ctlModel);
			self::setInputFormSmallCategoriesName3           ($ctlModel);
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
            self::setInputFormvalueBigCategoriesName		 ($ctlModel);
            self::setInputFormvalueMiddleCategoriesName	     ($ctlModel);
            self::setInputFormvalueSmallCategoriesName	     ($ctlModel);
            $ctlModel->setInputFormFlag = true;
		}
	}
	
	public function getBigCategory() {
		$ormModel = ClassRegistry::init('TblBigCategory');
       // debug(self::findListTblBigCategory($ormModel));
        return self::findListTblBigCategory($ormModel);
		
    }
	private static function findListTblBigCategory(TblBigCategory $ormModel) {
		
        $options = array(
            'sort' => array(
               // 'TblBigCategory.id' => 'DESC'
            ),
			'recursive' =>0,
        );
        return $ormModel->find('list', $options);
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
	
	public function getMinCategory($tbl_mid_category_id) {
	$ormModel = ClassRegistry::init('TblMinCategory');
        
        return self::findListTblMinCategory($ormModel, $tbl_mid_category_id);
    }
    
    private static function findListTblMinCategory(TblMinCategory $ormModel, $tbl_mid_category_id) {
        $options = array(
            'conditions' => array(
                'TblMinCategory.tbl_mid_category_id' => $tbl_mid_category_id,
            ),
            'sort' => array(
                'TblMinCategory.sort' => 'DESC'
            ),
        );
        
        return $ormModel->find('list', $options);
    }
	private function setInputFormBigCategoriesName(self $ctlModel) {
		$fieldName = 'bigcategory_name';
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
                                        'rule'		=> array('checkUnique', 'TblBigCategory', 'name', null),
                                        'message'	=> '入力された大カテゴリは登録済です',
                                        // 'allowEmpty'	=> true,
                                        // 'required'	=> false,
                                        // 'last'	=> false, // Stop validation after this rule
                                        // 'on'		=> 'create', // Limit validation to 'create' or 'update' operations
                        ),
        );
        // 入力フォーム設定
        $ctlModel->fieldParams[$fieldName] = array(
                        'type'		=> 'text',
                        'maxlength'	=> 50,
                        'required'	=> true,
        );
	}
	
	private function setInputFormMiddleCategoriesName1(self $ctlModel) {
		$fieldName = 'middlecategory_name_1';
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
	
	
	
	
    private function setInputFormSmallCategoriesName1(self $ctlModel) {
		$fieldName = 'smallcategory_name_1';
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
                                        'rule'		=> array('checkUnique', 'TblMinCategory', 'name', null),
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
	
	private function setInputFormSmallCategoriesName2(self $ctlModel) {
		$fieldName = 'smallcategory_name_2';
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
                                        'rule'		=> array('checkUnique', 'TblMinCategory', 'name', null),
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
	
	private function setInputFormSmallCategoriesName3(self $ctlModel) {
		$fieldName = 'smallcategory_name_3';
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
                                        'rule'		=> array('checkUnique', 'TblMinCategory', 'name', null),
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
        
        
        private static function setInputFormvalueBigCategoriesName(self $ctlModel) {
            $fieldName	= 'tbl_big_category_id';
            $ormModel	= ClassRegistry::init('TblBigCategory');
            $list		= $ormModel->find('list');

            // 入力フォーム設定
            $ctlModel->fieldParams[$fieldName] = array(
                            'type'		=> 'select',
                            'empty'         => '▼選択してください',
                            'options'	=> $list,
                            'required'	=> true,
            );
        }
        private static function setInputFormvalueMiddleCategoriesName(self $ctlModel) {
            $fieldName	= 'tbl_mid_category_id';
            $ormModel	= ClassRegistry::init('TblMidCategory');
            $list		= $ormModel->find('list');

            // 入力フォーム設定
            $ctlModel->fieldParams[$fieldName] = array(
                            'type'		=> 'select',
                            'empty'         => '▼選択してください',
                            'options'	=> $list,
                            'required'	=> true,
            );
        }
		
		
        private static function setInputFormvalueSmallCategoriesName(self $ctlModel) {
            $fieldName	= 'tbl_min_category_id';
            $ormModel	= ClassRegistry::init('TblMinCategory');
            $list		= $ormModel->find('list');

            // 入力フォーム設定
            $ctlModel->fieldParams[$fieldName] = array(
                            'type'		=> 'select',
                            'empty'         => '▼選択してください',
                            'options'	=> $list,
                            'required'	=> true,
            );
        }
		
		public function saveBigCategory(array $data) {
			$ctlModel = $this;
			$ormModel = ClassRegistry::init('TblBigCategory');

			$ctlModel->set($data);
			$result = $ctlModel->validates();
			if ($result) {

				$convert = new CategoriesCreateToTblBigCategory($ctlModel, $ormModel);
				$convert->setCtlData($data);		
				$result = self::saveTransaction($convert);
			}
			return $result;
		}
	
		private static function saveTransaction(CategoriesCreateToTblBigCategory $convert) {
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
	
	public function saveMidCategory(array $data){
		
		debug("ok");
			$ctlModel = $this;
			$ormModel = ClassRegistry::init('TblMidCategory');
				
			$ctlModel->set($data);
			$result = $ctlModel->validates();
			if ($result) {	
				$convert = new CategoriesCreateToTblMidCategory($ctlModel, $ormModel);
				$convert->setCtlData($data);		
				$result = self::saveTransactionformid($convert);
			}
		return $result;
	}

	private static function saveTransactionformid(CategoriesCreateToTblMidCategory $convert) {
		$db			= $convert->getDataSource();
		$ctlModel	= $convert->getCtlModel();
		$ormModel	= $convert->getOrmModel();
		$saveData	= $convert->getSaveData();
		try {
			$db->begin();
			// アカウント情報
				//OrmModelUtil::transactionSave($ormModel, $saveData);
				OrmModelUtil::transactionSaveAssociatedDeep($ormModel, $saveData);
			$db->commit();
		} catch (ErrorException $e) {
			$db->rollback();
			$ctlModel->validationErrors[] = $e->getMessage();
			return false;
		}
		return true;
	}
	
	public function saveSmallCategory(array $data){
		
			$ctlModel = $this;
			$ormModel = ClassRegistry::init('TblMinCategory');
				
			$ctlModel->set($data);
			$result = $ctlModel->validates();
			debug("save small");
			if ($result) {	
				$convert = new CategoriesCreateToTblMinCategory($ctlModel, $ormModel);
				$convert->setCtlData($data);		
				$result = self::saveTransactionformin($convert);
			}
		return $result;
	}
	
	private static function saveTransactionformin(CategoriesCreateToTblMinCategory $convert) {
		$db			= $convert->getDataSource();
		$ctlModel	= $convert->getCtlModel();
		$ormModel	= $convert->getOrmModel();
		debug("save content");
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
	
	public function saveContentCategory(array $data){
			$ctlModel = $this;
			$ormModel = ClassRegistry::init('TblContent');	
			$ctlModel->set($data);
			$result = $ctlModel->validates();

			if ($result) {	
				$convert = new CategoriesCreateToTblContent($ctlModel, $ormModel);
				$convert->setCtlData($data);		
				$result = self::saveTransactionforcontent($convert);
			}
		return $result;
		
	}
	private static function saveTransactionforcontent(CategoriesCreateToTblContent $convert) {
		$db			= $convert->getDataSource();
		$ctlModel	= $convert->getCtlModel();
		$ormModel	= $convert->getOrmModel();
		debug("save content");
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