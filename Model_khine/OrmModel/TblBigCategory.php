<?php
App::uses('AppOrmModel', 'Model');
/**
 * TblBigCategory Model
 *
 * @property TblContent $TblContent
 * @property TblMidCategory $TblMidCategory
 * @property TblMinCategory $TblMinCategory
 */
class TblBigCategory extends AppOrmModel {

/**
 * Display field
 *
 * @var string
 */
    public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed
	
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'checkUnique' => array(
				'rule'			=> array('checkUnique', 'TblBigCategory', 'name', null),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

/**
 * hasMany associations
 *
 * @var array
 */
    public $hasMany = array(
	'TblContent' => array(
	    'className' => 'TblContent',
	    'foreignKey' => 'tbl_big_category_id',
        //'counterCache'	=> 'tbl_general_category_count',
	    'dependent' => false,
	    'conditions' => '',
	    'fields' => '',
	    'order' => '',
	    'limit' => '',
	    'offset' => '',
	    'exclusive' => '',
	    'finderQuery' => '',
	    'counterQuery' => ''
	),
	'TblMidCategory' => array(
	    'className' => 'TblMidCategory',
	    'foreignKey' => 'tbl_big_category_id',
         //   'counterCache'	=> 'tbl_general_category_count',
	    'dependent' => false,
	    'conditions' => '',
	    'fields' => '',
	    'order' => '',
	    'limit' => '',
	    'offset' => '',
	    'exclusive' => '',
	    'finderQuery' => '',
	    'counterQuery' => ''
	),
	'TblMinCategory' => array(
	    'className' => 'TblMinCategory',
	    'foreignKey' => 'tbl_big_category_id',
          //  'counterCache'	=> 'tbl_general_category_count',
	    'dependent' => false,
	    'conditions' => '',
	    'fields' => '',
	    'order' => '',
	    'limit' => '',
	    'offset' => '',
	    'exclusive' => '',
	    'finderQuery' => '',
	    'counterQuery' => ''
	)
    );
	
	public function checkUnique($check, $dbModelName, $uniqueFieldName = null, $primaryIdFieldName = null) {
		$ctlModel	= $this;
		$dbModel	= ClassRegistry::init($dbModelName);
		foreach ($check as $key => $val) {
			$uniqueFieldName	= is_string($uniqueFieldName)? $uniqueFieldName: $key;
			$value				= $val;
		}
		
		$ctlModelAlias	= $ctlModel->alias;
		$conditions = array(
			$uniqueFieldName => $value
		);
		
		if (!is_null($primaryIdFieldName)
			&& isset($ctlModel->data[$ctlModelAlias][$primaryIdFieldName])) {
			$tmpValue = $ctlModel->data[$ctlModelAlias][$primaryIdFieldName];
			$conditions[$dbModel->primaryKey . ' !='] = $tmpValue;
		}
		
		$options = array(
			'conditions' => $conditions,
			'recursive' => -1,
		);
		return !$dbModel->find('count', $options);
	}

}
