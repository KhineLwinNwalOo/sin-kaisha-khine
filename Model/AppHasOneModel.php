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
abstract class AppHasOneModel extends AppSlaveModel {
	
	
	public function save($data = null, $validate = true, $fieldList = array()) {
		$std = new stdClass();
		$std->data = $data;
		
		self::setHasOneSaveData($this, $std);
		
		return parent::save($std->data, $validate, $fieldList);
	}
	
	public static function setHasOneSaveData(AppHasOneModel $ormModel, stdClass $std) {
		$parField	= static::PARENT_ID_FIELD_NAME;
		$ormAlias	= $ormModel->alias;
		$priField	= $ormModel->primaryKey;
		$data		= !empty($std->data)? $std->data: $ormModel->data;
		
		if (isset($data[$ormAlias])) {
			$data = $data[$ormAlias];
		}
		
		if (empty($data[$priField])) {
			$parValue	= $data[$parField];
			$priValue	= $ormModel->createStringId($parValue);
			$data[$priField]	= $priValue;
		}
		
		if (!empty($std->data)) {
			$std->data = $data;
		} else {
			$ormModel->data = $data;
		}
	}
	
	/**
	 * 文字列型プライマリIDを作成
	 * 
	 * @return string
	 */
	public function createStringId($parentId) {
		$parentIdLength	= static::PARENT_ID_FIXED_LENGTH;
		return str_pad($parentId, $parentIdLength, '0', STR_PAD_LEFT);
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
		
		$pathParentId = $modelName . '.' . $fieldParentId;
		
		$parentId	= Hash::get($data, $pathParentId);
		
		$id			= Hash::get($check, $primaryKey);
		$checkId	= $model->createStringId($parentId);
		return ($id === $checkId)? true: false;
	}
	/**/
}