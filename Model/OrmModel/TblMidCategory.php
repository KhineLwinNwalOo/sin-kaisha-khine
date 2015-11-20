<?php
App::uses('AppOrmModel', 'Model');
/**
 * TblMidCategory Model
 *
 * @property TblBigCategory $TblBigCategory
 * @property TblContent $TblContent
 * @property TblMinCategory $TblMinCategory
 */
class TblMidCategory extends AppOrmModel {

/**
 * Display field
 *
 * @var string
 */
    public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed
	
	public $validate = array(
		'name' => array(
			'checkUnique' => array(
				'rule'			=> array('checkUnique', 'TblMidCategory', 'name', null),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

/**
 * belongsTo associations
 *
 * @var array
 */
    public $belongsTo = array(
	'TblBigCategory' => array(
	    'className' => 'TblBigCategory',
	    'foreignKey' => 'tbl_big_category_id',
          //  'counterCache'	=> 'tbl_general_category_count',
	    'conditions' => '',
	    'fields' => '',
	    'order' => ''
	)
    );

/**
 * hasMany associations
 *
 * @var array
 */
    public $hasMany = array(
	'TblContent' => array(
	    'className' => 'TblContent',
	    'foreignKey' => 'tbl_mid_category_id',
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
	    'foreignKey' => 'tbl_mid_category_id',
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
	)
    );

}
