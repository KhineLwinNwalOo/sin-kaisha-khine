<?php
App::uses('AppOrmModel', 'Model');
/**
 * TblMinCategory Model
 *
 * @property TblBigCategory $TblBigCategory
 * @property TblMidCategory $TblMidCategory
 * @property TblContent $TblContent
 */
class TblMinCategory extends AppOrmModel {

/**
 * Display field
 *
 * @var string
 */
    public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
    public $belongsTo = array(
	'TblBigCategory' => array(
	    'className' => 'TblBigCategory',
	    'foreignKey' => 'tbl_big_category_id',
       //     'counterCache'	=> 'tbl_general_category_count',
	    'conditions' => '',
	    'fields' => '',
	    'order' => ''
	),
	'TblMidCategory' => array(
	    'className' => 'TblMidCategory',
	    'foreignKey' => 'tbl_mid_category_id',
        //    'counterCache'	=> 'tbl_general_category_count',
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
	    'foreignKey' => 'tbl_min_category_id',
            'counterCache'	=> 'tbl_general_category_count',
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
