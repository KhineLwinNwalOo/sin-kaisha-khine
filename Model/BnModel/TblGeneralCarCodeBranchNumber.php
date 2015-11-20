<?php
App::uses('AppBranchNumberModel', 'Model');
/**
 * TblGeneralCarCodeBranchNumber Model
 *
 */
class TblGeneralCarCodeBranchNumber extends AppBranchNumberModel {

	/**
	 * 親テーブルのプライマリキー
	 *
	 * @var type 
	 */
	public $parentIdField = 'tbl_general_car_name_id';
	
	/**
	 * 親テーブルのプライマリキーの固定長
	 *
	 * @var type 
	 */
	public $parentIdLength = 11;
}
