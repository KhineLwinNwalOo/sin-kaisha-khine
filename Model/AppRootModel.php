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
App::uses('AppPrimaryModel', 'Model');
App::uses('OrmModelUtil', 'Lib/Util');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
abstract class AppRootModel extends AppPrimaryModel {
	
	/**
	 * データロックモデル名
	 * 
	 * @var string
	 */
	public $lockModelName = '';

	/**
	 *
	 * @var AppLockModel
	 */
	public $lockModel = null;


	public function __construct($id = false, $table = null, $ds = null) {
		parent::__construct($id, $table, $ds);
		// データロックモデルをメンバへ設定
		self::setLockModel($this);
	}
	
	/**
	 * データロックモデルをメンバへ設定
	 * @param self $model
	 */
	private static function setLockModel(self $model) {
		$lockModelName = $model->lockModelName;
		
		if ($lockModelName === '') {
			$lockModelName = $model->name . 'Lock';
		}
		
		$model->lockModel = ClassRegistry::init($lockModelName);
	}

	/**
	 * データロック用モデル取得
	 */
	public function getLockModel() {
		return $this->lockModel;
 	}
	
	public function afterSave($created, $options = array()) {
		if ($created) {
			$model		= $this;
			$id			= $model->getID();
			$lockModel	= $model->lockModel;
			// 更新用ロックデータ作成
			self::saveLockModelData($lockModel, $id);
		}
		
		return parent::afterSave($created, $options);
	}
	
	/**
	 * 更新ロック用データ作成
	 * @param AppLockModel $lockModel
	 * @param type $id
	 * @throws ErrorException
	 */
	private static function saveLockModelData(AppLockModel $lockModel, $id) {
		$data = array(
			$lockModel->alias => array(
				$lockModel->primaryKey => $id,
			),
		);
		$result = $lockModel->save($data);
		if (!$result) {
			throw new ErrorException($lockModel->name . ' Save Error');
		}
	}
	
	public function afterDelete() {
		$model		= $this;
		$id			= $model->id;
		$lockModel	= $model->lockModel;
		// 更新ロック用データ削除
		self::deleteLockModelData($lockModel, $id);
		
		return parent::afterDelete();
	}
	
	
	/**
	 * 更新ロック用データ削除
	 * @param AppLockModel $lockModel
	 * @param type $id
	 * @throws ErrorException
	 */
	private static function deleteLockModelData(AppLockModel $lockModel, $id) {
		$result = $lockModel->delete($id);
		if (!$result) {
			throw new ErrorException($lockModel->name .' Delete Error');
		}
	}
	/**/
}