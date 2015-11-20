<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */ 
App::uses('RowDataLock', 'Lib/Interface');

/**
 * Description of OrmModelUtil
 *
 * @author hanai
 */
final class OrmModelUtil {
	
	public static function rowDataLock(AppLockModel $ormModel, $primaryId) {
		if (!empty($primaryId)) {
			$ormModel->rowDataLock($primaryId);
		}
	}

	public static function transactionSave(AppOrmModel $ormModel, array $data = null) {
		if (! $ormModel->save($data)) {
			throw new ErrorException($ormModel->alias . ' Save Error');
		}
	}
	
	public static function transactionSaves(AppOrmModel $ormModel, array $dataOfSaves) {
		$saveIds = array();
		for ($i = 0, $cnt = count($dataOfSaves); $i < $cnt; ++$i) {
			$ormModel->create();
			self::transactionSave($ormModel, $dataOfSaves[$i]);
			$saveIds[] = $ormModel->getID();
		}
		return $saveIds;
	}
	
	public static function deleteHasManyData(AppHasManyModel $hasManyModel, $parentIdField, $parentId, $exceptionFlag = false) {
		$alias	= $hasManyModel->alias;
		$conditions = array(
			$alias . '.' . $parentIdField => $parentId,
		);
		$result = $hasManyModel->deleteAll($conditions);	
		if (!$result && $exceptionFlag) {
			throw new ErrorException($alias . ' Delete All Error');
		}
	}
	
	public static function transactionSaveAssociated(AppPrimaryModel $ormModel, array $data = null) {
		if (! $ormModel->saveAssociated($data)) {
			throw new ErrorException($ormModel->alias . ' Save Error');
		}
	}

	public static function transactionSaveAssociatedDeep(AppPrimaryModel $ormModel, array $data = null) {
		if (! $ormModel->saveAssociated($data, array('deep' => true))) {
			throw new ErrorException($ormModel->alias . ' Save Error');
		}
	}
}