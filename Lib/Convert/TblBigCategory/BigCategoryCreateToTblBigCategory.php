<?php 

App::uses('AppToConvert', 'Lib/Convert');
//App::uses('MstUserGroup', 'Model');

class BigCategoryCreateToTblBigCategory extends AppToConvert {

	/**
	 * OrmModel Save Data
	 * @return array
	 */
	public function getSaveData() {
		$convert	= $this;
		$ctlAlias	= $convert->ctlAlias;
		$ormAlias	= $convert->ormAlias;
		$ctlData	= $convert->ctlData;
		
		$saveData = array(
			$ormAlias => array(
				'name'						=> $ctlData[$ctlAlias]['bigcategory_name'],
				'sort'						=> '2400',
				'tbl_content_count'			=> '1',
				'tbl_content_count_all'		=> '1',
			),
		);
		return $saveData;
	}
}