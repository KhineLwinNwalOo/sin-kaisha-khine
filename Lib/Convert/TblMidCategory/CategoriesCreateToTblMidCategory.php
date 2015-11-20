<?php 

App::uses('AppToConvert', 'Lib/Convert');
//App::uses('MstUserGroup', 'Model');

class CategoriesCreateToTblMidCategory extends AppToConvert {

	/**
	 * OrmModel Save Data
	 * @return array
	 */
	
	public function getSaveData() {
		$convert	= $this;
		$ctlAlias	= $convert->ctlAlias;
		$ormAlias	= $convert->ormAlias;
		$ctlData	= $convert->ctlData;
		$big_category_id = $ctlData['big_id'];				
		if($big_category_id){
			for($i = 1 ;$i < 4 ;$i++){ 			
				$midCatname = 'middlecategory_name_'. $i; 
				$mid_Catname = $ctlData[$ctlAlias][$midCatname];
				if($mid_Catname){
					$saveData = array(
						$ormAlias => array(
							'tbl_big_category_id'		=> $ctlData['big_id'],
							'name'						=> $ctlData[$ctlAlias][$midCatname],
							'sort'						=> '2300',
							'tbl_content_count'			=> '1',
							'tbl_content_count_all'		=> '1',
					
						)
					);
				}				
			}
			return $saveData;
		}
	}
}

