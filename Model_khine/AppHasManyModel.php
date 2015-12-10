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

App::uses('AppSlaveModel', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
abstract class AppHasManyModel extends AppSlaveModel {
	
	const BRANCH_NO_FIELD_NAME = 'branch_no';
	
	const BRANCH_NO_FIXED_LENGTH = 11;
	
	/**
	 * 文字列型プライマリIDを作成
	 * 
	 * @return string
	 */
	public function createStringId($parentId, $branchNo) {
		$parentIdLength	= static::PARENT_ID_FIXED_LENGTH;
		$branchNoLength	= static::BRANCH_NO_FIXED_LENGTH;
		
		$strParentId	= str_pad($parentId, $parentIdLength, '0', STR_PAD_LEFT);
		$strBranchNo	= str_pad($branchNo, $branchNoLength, '0', STR_PAD_LEFT);
		
		return $strParentId . '_' . $strBranchNo;
	}

	/**
	 * 文字列型プライマリIDのチェック
	 * (over raid)
	 * @param mix $check
	 * @return boolean
	 */
	public function checkStringIdFormat($check) {
		$model		= $this;
		$primaryKey	= $model->primaryKey; 
		$modelName	= $model->name;
		$data		= $model->data;
		
		$fieldParentId	= static::PARENT_ID_FIELD_NAME;
		$fieldBranchNo	= static::BRANCH_NO_FIELD_NAME;
		
		$pathParentId = $modelName . '.' . $fieldParentId;
		$pathBranchNo = $modelName . '.' . $fieldBranchNo;
		
		$parentId	= Hash::get($data, $pathParentId);
		$branchNo	= Hash::get($data, $pathBranchNo);
		
		$id			= Hash::get($check, $primaryKey);
		$checkId	= $model->createStringId($parentId, $branchNo);
		return ($id === $checkId)? true: false;
	}
	/**/
}