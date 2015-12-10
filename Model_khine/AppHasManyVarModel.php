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
App::uses('OrmModelUtil', 'Lib/Util');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
abstract class AppHasManyVarModel extends AppHasManyModel {
	
	protected $maxDataCount = PHP_INT_MAX;
	
	
	public $branchNoModelName = '';
	
	/**
	 *
	 * @var AppBranchNumberModel
	 */
	public $branchNoModel = null;

	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
		// 枝番モデルをメンバへ設定
		self::setBranchNoModel($this);
	}
	
	/**
	 * 枝番モデルをメンバへ設定
	 * @param self $model
	 */
	private static function setBranchNoModel(self $model) {
		$branchNoModelName = $model->branchNoModelName;
		
		if ($branchNoModelName === '') {
			$branchNoModelName = $model->name . 'BranchNumber';
		}
		
		$model->branchNoModel = ClassRegistry::init($branchNoModelName);
	}

	
	public function save($data = null, $validate = true, $fieldList = array()) {
		$std = new stdClass();
		$std->data = $data;
		
		// 親モデルとの連係データを設定
		self::setHasManyVarSaveData($this, $std);
		
		return parent::save($std->data, $validate, $fieldList);
	}
	
	/**
	 * 親モデルとの連係データを設定
	 * 
	 * @param self $model
	 * @param stdClass $std
	 */
	private static function setHasManyVarSaveData(self $model, stdClass $std) {
		$parField	= static::PARENT_ID_FIELD_NAME;
		$bnField	= static::BRANCH_NO_FIELD_NAME;
		$ormAlias	= $model->alias;
		$priField	= $model->primaryKey;
		$data		= !empty($std->data)? $std->data: $model->data;
		
		if (isset($data[$ormAlias])) {
			$data = $data[$ormAlias];
		}
		
		if (empty($data[$priField])) {
			$parValue	= $data[$parField];
			$bnValue	= $model->getBranchNo($parValue);
			$priValue	= $model->createStringId($parValue, $bnValue);
			$data[$priField]	= $priValue;
			$data[$bnField]		= $bnValue;
		}
		
		if (!empty($std->data)) {
			$std->data = $data;
		} else {
			$model->data = $data;
		}
	}
	
	/**
	 * 枝番を取得
	 */
	public function getBranchNo($parent_id) {
		$bnModel = $this->branchNoModel;
		
		return $bnModel->getBranchNo($parent_id);
	}
	
	/**
	 * データ数チェックバリデーション
	 * 
	 * @return boolean
	 */
	public function checkMaxDataCount() {
		$model			= $this;
		$maxDataCount	= $model->maxDataCount;
		$modelName		= $model->alias;
		$data			= $model->data;
		
		$parentIdFieldName = static::PARENT_ID_FIELD_NAME;
		
		$parentId = Hash::get($data, $modelName . '.' . $parentIdFieldName);
		
		$dataCount = self::getDataCount($model, $parentId);
		
		return ($maxDataCount >= $dataCount)? true: false;
	}
	
	private static function getDataCount(self $model, $parentId) {
		$parentIdFieldName = static::PARENT_ID_FIELD_NAME;
		
		$options = array(
			'conditions' => array(
				$parentIdFieldName => $parentId,
			),
			'recursive' => -1,
		);
		
		return $model->find('count', $options);
	}

	/**/
}