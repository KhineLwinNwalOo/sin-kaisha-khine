<?php
App::uses('AppOrmModel', 'Model');
/**
 * TblContent Model
 *
 * @property TblBigCategory $TblBigCategory
 * @property TblMidCategory $TblMidCategory
 * @property TblMinCategory $TblMinCategory
 */
class TblContent extends AppOrmModel {

/**
 * Display field
 *
 * @var string
 */
    public $displayField = 'content';


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
          ///  'counterCache'	=> 'tbl_general_category_count',
	    'conditions' => '',
	    'fields' => '',
	    'order' => ''
	),
	'TblMidCategory' => array(
	    'className' => 'TblMidCategory',
	    'foreignKey' => 'tbl_mid_category_id',
          //  'counterCache'	=> 'tbl_general_category_count',
	    'conditions' => '',
	    'fields' => '',
	    'order' => ''
	),
	'TblMinCategory' => array(
	    'className' => 'TblMinCategory',
	    'foreignKey' => 'tbl_min_category_id',
         //   'counterCache'	=> 'tbl_general_category_count',
	    'conditions' => '',
	    'fields' => '',
	    'order' => ''
	)
    );
}
