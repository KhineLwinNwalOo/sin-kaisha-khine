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

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class CategoriesSearch extends AppCtlModel {
	
	const PAGINATE_ORM_NAME			= 'TblContent';
	
	const HABTM_ALIAS1				= 'TblBigCategory';
	
	const TMP_REQUEST_SESSION_KEY	= 'tmp.Request.CategoriesSearch';
	
	private $setInputFormFlag = false;
	
	public $validate = array();
	
	
	/**
	 * フォーム設定用のパラメータ
	 * @var type 
	 */
	public $fieldParams = array();
	
	
	public function setInputFormParams() {
		$ctlModel = $this;
		if ($ctlModel->setInputFormFlag === false) {
			self::setInputFormTblMakerId										($ctlModel);
			self::setInputFormContentName										($ctlModel);
			self::setInputFormContentsBigName                                   ($ctlModel);
			self::setInputFormContentsMidName                                   ($ctlModel);
			self::setInputFormContentsMinName                                   ($ctlModel);
			self::setInputFormContents										    ($ctlModel);
			self::setInputFormContentsId										($ctlModel);
			self::setInputFormBigCategoriesId									($ctlModel);
			self::setInputFormSearchBigCategoriesName							($ctlModel);
			self::setInputFormSearchMidCategoriesName							($ctlModel);
			self::setInputFormSearchMinCategoriesName							($ctlModel);
			self::setInputFormSearchContent										($ctlModel);
			
			$ctlModel->setInputFormFlag = true;			self::setInputFormSearchContent										($ctlModel);
//			self::setInputFormCategoriesAgeMax		($ctlModel);
//			self::setInputFormCategoriesBirthdayMin	($ctlModel);
//			self::setInputFormCategoriesBirthdayMax	($ctlModel);
//			self::setInputFormTblGroupCountMin	($ctlModel);
//			self::setInputFormTblGroupCountMax	
		}
	}
	
	private static function setInputFormTblMakerId(self $model) {
		$field	= 'big_id';
		$orm	= ClassRegistry::init('TblBigCategory');
		
		$list	= self::findListTblMaker($orm);
		// バリデーション設定
		$model->validate[$field] = array(
//			'notEmpty' => array(
//				'rule' => array( 'notEmpty',),
////				'message' => __('Please Choose Maker'),
//			),
			'inList' => array(
				'rule' => array('inList', array_keys($list), false,),
				'message' => __('invalid selection'),
			),
		);
		
		// 入力フォーム設定
		$model->fieldParams[$field] = array(
			'type'		=> 'select',
			'options'	=> $list,
			'required'	=> false,
			'empty'		=> __('▼選択してください'),
		);
	}
	
	private static function findListTblMaker(TblBigCategory $orm) {
		 $options = array(
            'sort' => array(
                'TblBigCategory.id' => 'DESC'
            ),
			'recursive' =>0,
        );
        return $orm->find('list');
	}
	
	private static function setInputFormContentName(self $model) {
		$field = 'content';
		
		$model->validate[$field] = array(
//			'maxlength' => array(
//				'rule'		=> array('maxlength', 200),
//				'message'	=> __('Please enter within 200 characters'),
//			),
		);
		
		// 入力フォーム設定
		$model->fieldParams[$field] = array(
			'type'		=> 'text',
//			'maxlength'	=> 200,
		);
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
        return $ormModel->find('list');
    }
        
        private static function setInputFormBigCategoriesName(self $ctlModel) {
            $field = 'name';
			$ctlModel->fieldParams[$field] = array(
				'type'		=> 'text',
				'required'	=> false,
			);
		}
		private static function setInputFormContents(self $ctlModel){
			$field = 'content';
			$ctlModel->fieldParams[$field] = array(
				'type'		=> 'text',
				'required'	=> false,
			);
			
		}
		
		private static function setInputFormContentsId(self $ctlModel) {
                 $field = 'id';
		$ctlModel->fieldParams[$field] = array(
			'type'		=> 'text',
			'required'	=> false,
		); 
		}
		private static function setInputFormContentsBigName(self $ctlModel) {
                $field = 'name';
				$ctlModel->fieldParams[$field] = array(
					'type'		=> 'text',
					'required'	=> false,
				); 
		}
		private static function setInputFormContentsMidName(self $ctlModel) {
                $field = 'name';
				$ctlModel->fieldParams[$field] = array(
					'type'		=> 'text',
					'required'	=> false,
				); 
		}
		private static function setInputFormContentsMinName(self $ctlModel) {
                $field = 'name';
				$ctlModel->fieldParams[$field] = array(
					'type'		=> 'text',
					'required'	=> false,
				); 
		}
		
		
		private static function setInputFormBigCategoriesId(self $ctlModel) {
                 $field = 'id';
		$ctlModel->fieldParams[$field] = array(
			'type'		=> 'text',
			'required'	=> false,
		); 
		}

		
		private function setInputFormSearchBigCategoriesName(self $ctlModel) {
			$fieldName = 'name';
		// バリデーション設定
			$ctlModel->fieldParams[$fieldName] = array(
				'type'			=> 'text',
				'maxlength'		=> 50,
			//	'required'		=> true,
			);
		}
		private function setInputFormSearchMidCategoriesName(self $ctlModel) {
			$fieldName = 'name';
			$ctlModel->fieldParams[$fieldName] = array(
				'type'			=> 'text',
				'maxlength'		=> 50,
			//	'required'		=> true,
			);
		}
		private function setInputFormSearchMinCategoriesName(self $ctlModel) {
			$fieldName = 'name';

			$ctlModel->fieldParams[$fieldName] = array(
				'type'			=> 'text',
				'maxlength'		=> 50,
			//	'required'		=> true,
			);
		}
		private function setInputFormSearchContent(self $ctlModel) {
			$fieldName = 'name';
			$ctlModel->fieldParams[$fieldName] = array(
				'type'			=> 'text',
				'maxlength'		=> 50,
			//	'required'		=> true,
			);
		}
		
		public function setPaginateParams(CategoriesSearchsController $ctl, CakeRequest $request) {
		$paginateOrmName	= self::PAGINATE_ORM_NAME;
		$habtmAlias1		= self::HABTM_ALIAS1;
		
		$ctl->{$paginateOrmName} = ClassRegistry::init($paginateOrmName);
		$ctl->paginate = array(
			$paginateOrmName => array(
				'fields' => array(
					$paginateOrmName . '.id',
					$paginateOrmName . '.content',
					$paginateOrmName . '.tbl_big_category_id',
					$paginateOrmName . '.tbl_mid_category_id',
					$paginateOrmName . '.tbl_min_category_id',
					
					$paginateOrmName . '.created',
					$paginateOrmName . '.updated',
					$habtmAlias1.'.name',
					'TblMidCategory.name',
					'TblMinCategory.name',
				),
				'recursive'		=> 0,
				'limit'			=> 20,
				'conditions'	=> self::getConditions($request),
//				'order'			=> array($paginateOrmName.'.id' => 'DESC'),
				
//				'joins' => array(
//						array(
//							'type'	=> 'LEFT',
//							'table' => 'tbl_big_categories',
//	//						'alias' => $habtmAlias1,
//							'conditions' => array($paginateOrmName . '.tbl_big_category_id = ' . $habtmAlias1 . '.id')
//						),
//								array(
//							'type'	=> 'LEFT',
//							'table' => 'tbl_mid_categories',
//						//	'alias' => 'TblMidCategory',
//							'conditions' => array($paginateOrmName . '.tbl_mid_category_id = ' . 'TblMidCategory' . '.id')
//						),
//								array(
//							'type'	=> 'LEFT',
//							'table' => 'tbl_min_categories',
//							//'alias' => 'TblMinCategory',
//							'conditions' => array($paginateOrmName . '.tbl_min_category_id = ' . 'TblMinCategory' . '.id')
//						),
//					)	
			),
		);
	}
    private static function getConditions(CakeRequest $request) {
		$std = new stdClass();
		$std->conditions = array();
		self::setConditionBigCategoryId		($std, $request);
		self::setConditionMidCategoryId		($std, $request);
		self::setConditionMinCategoryId		($std, $request);
		self::setConditionContent			($std, $request);
		return $std->conditions;
	}
	private static function setConditionBigCategoryId(stdClass $std, CakeRequest $request) {
		$paginateOrmName	= self::PAGINATE_ORM_NAME;
		$value = $request->data(['CategoriesSearch']);
		if (!empty($value['big_id'])) {
			$fieldName = $paginateOrmName . '.tbl_big_category_id';
			$std->conditions[$fieldName] = $value['big_id'];
		}
	}
	
	private static function setConditionMidCategoryId(stdClass $std, CakeRequest $request) {
		$paginateOrmName	= self::PAGINATE_ORM_NAME;
		$value = $request->data(['CategoriesSearch']);
		if (!empty($value['mid_id'])) {
			$fieldName = $paginateOrmName . '.tbl_mid_category_id';
			$std->conditions[$fieldName] = $value['mid_id'];
		}
	}
	
	private static function setConditionMinCategoryId(stdClass $std, CakeRequest $request) {
		$paginateOrmName	= self::PAGINATE_ORM_NAME;
		$value = $request->data(['CategoriesSearch']);
		if (!empty($value['min_id'])) {
			$fieldName = $paginateOrmName . '.tbl_min_category_id';
			$std->conditions[$fieldName] = $value['min_id'];
		}
	}
	
	private static function setConditionContent(stdClass $std, CakeRequest $request) {
		$paginateOrmName	= self::PAGINATE_ORM_NAME;
		$value = $request->data(['CategoriesSearch']);
		if (!empty($value['content'])) {
			$fieldName = $paginateOrmName . '.content Like';
			$std->conditions[0]['or'][$fieldName] = '%' . $value['content'] . '%';
		}
	}
//	private static function setConditionBigCategoryId(stdClass $std, CakeRequest $request) {
//		$paginateOrmName	= self::PAGINATE_ORM_NAME;
//		$value = $request->data('big_id');
//		if (!empty($value)) {
//			$fieldName = $paginateOrmName . '.tbl_big_category_id';
//			$std->conditions[$fieldName] = $value;
//		}
//	}
//	
//	private static function setConditionMidCategoryId(stdClass $std, CakeRequest $request) {
//		$paginateOrmName	= self::PAGINATE_ORM_NAME;
//		$value = $request->data('mid_id');
//		if (!empty($value)) {
//			$fieldName = $paginateOrmName . '.tbl_mid_category_id';
//			$std->conditions[$fieldName] = $value;
//		}
//	}
//	
//	private static function setConditionMinCategoryId(stdClass $std, CakeRequest $request) {
//		$paginateOrmName	= self::PAGINATE_ORM_NAME;
//		$value = $request->data('min_id');
//		if (!empty($value)) {
//			$fieldName = $paginateOrmName . '.tbl_min_category_id';
//			$std->conditions[$fieldName] = $value;
//		}
//	}
//	
//	private static function setConditionContent(stdClass $std, CakeRequest $request) {
//		$paginateOrmName	= self::PAGINATE_ORM_NAME;
//		$value = $request->data('content');
//		if (!empty($value)) {
//			$fieldName = $paginateOrmName . '.content Like';
//			$std->conditions[0]['or'][$fieldName] = '%' . $value . '%';
//		}
//	}
	
	public function getDataPaginate(CategoriesSearchsController $ctl) {
		$paginateOrmName = self::PAGINATE_ORM_NAME;
		return $ctl->paginate($paginateOrmName);
	}  
}
