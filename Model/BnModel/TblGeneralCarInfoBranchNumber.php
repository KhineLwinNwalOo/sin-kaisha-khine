<?php
App::uses('AppBranchNumberModel', 'Model');
/**
 * TblGeneralCarInfoBranchNumber Model
 *
 */
class TblGeneralCarInfoBranchNumber extends AppBranchNumberModel {

	/**
	 * 親テーブルのプライマリキー
	 *
	 * @var type 
	 */
	public $parentIdField = 'tbl_general_car_code_id';
	
	/**
	 * 親テーブルのプライマリキーの固定長
	 *
	 * @var type 
	 */
	public $parentIdLength = 23;
}
