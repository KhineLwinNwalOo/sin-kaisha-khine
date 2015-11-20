<?php 

App::uses('AppToConvert', 'Lib/Convert');
//App::uses('MstUserGroup', 'Model');

class MidCategoryCreateToTblMidCategory extends AppToConvert {

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
		while (!empty($ctlData[$ctlAlias]['middlecategory_name_'.$i])) {
			$result[] = array(
				$ormAlias => array(
					'tbl_big_category_id'		=> $ctlData['big_id'],
					'name'						=> $ctlData[$ctlAlias]['middlecategory_name_'.$i],
					'sort'						=> '2300',
					'tbl_content_count'			=> '1',
					'tbl_content_count_all'		=> '1',
				),
			);
			$i++;
		}
		return $result;
	}
}
	
