<?php 

App::uses('AppToConvert', 'Lib/Convert');
//App::uses('MstUserGroup', 'Model');

class CategoriesCreateToTblContent extends AppToConvert {

	/**
	 * OrmModel Save Data
	 * @return array
	 */
	public function getSaveData() {
		$convert	= $this;
		$ctlAlias	= $convert->ctlAlias;
		$ormAlias	= $convert->ormAlias;
		$ctlData	= $convert->ctlData;
		
		$big_category_id = $ctlData['big_id_2'];
		$mid_category_id = $ctlData['mid_id'];
		$min_category_id = $ctlData['min_id'];						
		if($big_category_id && $mid_category_id && $min_category_id){
		
			for($i = 1 ;$i < 11 ;$i++){ 			
				$contentname= "contents_name_". $i; 
				$contentname_val=$ctlData[$ctlAlias][$contentname];
				if($contentname_val){
					$saveData = array(
						$ormAlias => array(
							'tbl_big_category_id'		=> $ctlData['big_id_2'],
							'tbl_mid_category_id'		=> $ctlData['mid_id'],
							'tbl_min_category_id'		=> $ctlData['min_id'],
							'content'					=> $ctlData[$ctlAlias][$contentname],
							'show_flag'					=> '1',
						)
					);
				}				
			}
			return $saveData;
		}

}

}