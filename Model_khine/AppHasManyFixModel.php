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

App::uses('AppHasManyModel', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
abstract class AppHasManyFixModel extends AppHasManyModel {
	
	protected $maxBranchNo = PHP_INT_MAX;
	
	
	public function save($data = null, $validate = true, $fieldList = array()) {
		$std = new stdClass();
		$std->data = $data;
		
		self::setHasManyFixSaveData($this, $std);
		
		return parent::save($std->data, $validate, $fieldList);
	}
	
	private static function setHasManyFixSaveData(self $ormModel, stdClass $std) {
		$parField	= static::PARENT_ID_FIELD_NAME;
		$bnField	= static::BRANCH_NO_FIELD_NAME;
		$ormAlias	= $ormModel->alias;
		$priField	= $ormModel->primaryKey;
		$data		= !empty($std->data)? $std->data: $ormModel->data;
		
		if (isset($data[$ormAlias])) {
			$data = $data[$ormAlias];
		}
		
		if (empty($data[$priField])) {
			$parValue	= Hash::get($data, $parField);
			$bnValue	= Hash::get($data, $bnField);
			
			if (empty($parValue)) {
				throw new ErrorException('setHasManyFixSaveData Error Parent Id Empty (Parent Id Field Name = ' . $parField . ')');
			}
			
			if (empty($bnField)) {
				throw new ErrorException('setHasManyFixSaveData Error Branch No Empty (Branch No Field Name = ' . $bnField . ')');
			}
			
			$data[$priField] = $ormModel->createStringId($parValue, $bnValue);
		}
		
		if (!empty($std->data)) {
			$std->data = $data;
		} else {
			$ormModel->data = $data;
		}
	}
	
	public function checkMaxBranchNo($check) {
		$model			= $this;
		$maxBranchNo	= $model->maxBranchNo;
		
		$check = is_array($check)? array_shift($check): $check;
		if (!is_numeric($check) || empty($check)) {
			$check = 0;
		}
		
		return ($maxBranchNo >= $check)? true: false;
	}
	/**/
}