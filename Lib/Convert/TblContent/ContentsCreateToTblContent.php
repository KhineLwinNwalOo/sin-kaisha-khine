<?php 

App::uses('AppToConvert', 'Lib/Convert');
//App::uses('MstUserGroup', 'Model');

class ContentsCreateToTblContent extends AppToConvert {

	/**
	 * OrmModel Save Data
	 * @return array
	 */
	public function getSaveData() {
		
		$convert	= $this;
		$ctlAlias	= $convert->ctlAlias;
		$ormAlias	= $convert->ormAlias;
		$ctlData	= $convert->ctlData;
		
		$result = array();
		$i = 1;
		debug($ctlData['big_id_2']);
		debug($ctlData['mid_id']);
		debug($ctlData['min_id']);
		while (!empty($ctlData[$ctlAlias]['contents_name_'.$i])) {
			$result[] = array(
				$ormAlias => array(
					'tbl_big_category_id'		=> $ctlData['big_id_2'],
					'tbl_mid_category_id'		=> $ctlData['mid_id'],
					'tbl_min_category_id'		=> $ctlData['min_id'],
					'content'					=> $ctlData[$ctlAlias]['contents_name_'.$i],
					'show_flag'					=> '1',
				),
			);
			$i++;
		}
		return $result;

}

}