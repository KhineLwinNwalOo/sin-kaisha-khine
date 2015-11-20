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

App::uses('AppOrmModel', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
abstract class AppSlaveModel extends AppOrmModel {
	
	const PARENT_ID_FIELD_NAME = '';
	
	const PARENT_ID_FIXED_LENGTH = 11;
	
	/**
	 * 親モデル
	 * @var string
	 */
	public $parentModelAlias = '';
	
	/**
	 * thisField => parentField
	 * 
	 * @var array
	 */
	public $slaveDataMap = array();
	
	
	public $listDataOfPaents = array();
	
	public function save($data = null, $validate = true, $fieldList = array()) {
		$std = new stdClass();
		$std->data = $data;
		
		// 親モデルと共通の従属データを設定
		self::setParentSlaveSaveData($this, $std);
		
		return parent::save($std->data, $validate, $fieldList);
	}

	/**
	 * 親モデルと共通の従属データを設定
	 * 
	 * @param self $model
	 * @param stdClass $std
	 */
	protected static function setParentSlaveSaveData(self $model, stdClass $std) {
		$parentModel	= self::getParentModel($model);
		$parentData		= self::getParentData($parentModel, $model, $std);
		self::setParentSlaveData($model, $std, $parentData);
	}
	
	private static function getParentModel(self $model) {
		$parentModelAlias = $model->parentModelAlias;
		return $model->{$parentModelAlias};
	}
	
	private static function getParentData(AppOrmModel $parentModel, self $model, stdClass $std) {
		$parentIdFieldName = static::PARENT_ID_FIELD_NAME;
		$parentId = $std->data[$parentIdFieldName];
		
		if (!isset($model->listDataOfPaents[$parentId])) {
			$model->listDataOfPaents[$parentId] = self::findParentData($parentModel, $parentId);
		}
		
		return $model->listDataOfPaents[$parentId];
	}
	
	private static function findParentData(AppOrmModel $parentModel, $parentId) {
		$options = array(
			'conditions' => array(
				$parentModel->primaryKey => $parentId,
			),
			'recursive' => -1,
		);
		
		return $parentModel->find('first', $options);
	}

	private static function setParentSlaveData(self $model, stdClass $std, array $parentData) {
		$parentModelAlias	= $model->parentModelAlias;
		$slaveDataMap		= $model->slaveDataMap;
		
		foreach ($slaveDataMap as $thisField => $parentField) {
			$std->data[$thisField] = $parentData[$parentModelAlias][$parentField];
		}
	}
	/**/
}