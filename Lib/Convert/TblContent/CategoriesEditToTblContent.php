<?php 

App::uses('AppToConvert', 'Lib/Convert');

class CategoriesEditToTblContent extends AppToConvert {

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
				'id'					=> $ctlData[$ctlAlias]['id'],
				'tbl_big_category_id'	=> $ctlData[$ctlAlias]['tbl_big_category_id'],
				'tbl_mid_category_id'	=> $ctlData[$ctlAlias]['tbl_mid_category_id'],
				'tbl_min_category_id'	=> $ctlData[$ctlAlias]['tbl_min_category_id'],
				'content'				=> $ctlData[$ctlAlias]['content'],
				'show_flag'				=> 1,
			),
		);
		return $saveData;
	}
}