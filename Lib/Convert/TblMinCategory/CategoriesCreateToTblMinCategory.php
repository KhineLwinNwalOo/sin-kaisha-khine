<?php 

App::uses('AppToConvert', 'Lib/Convert');

class CategoriesCreateToTblMinCategory extends AppToConvert {

	/**
	 * OrmModel Save Data
	 * @return array
	 */
	public function getSaveData() {
		$convert	= $this;
		$ctlAlias	= $convert->ctlAlias;
		$ormAlias	= $convert->ormAlias;
		$ctlData	= $convert->ctlData;
		
		$big_category_id = $ctlData['big_id_1'];
		$mid_category_id = $ctlData['mid_id'];				
		if($big_category_id && $mid_category_id){
			for($i = 1 ;$i < 4 ;$i++){ 			
				$mincategoryname = "smallcategory_name_". $i; 
				$min_Catname = $ctlData[$ctlAlias][$mincategoryname];
				if($min_Catname){
					$saveData = array(
						$ormAlias => array(
							'tbl_big_category_id'		=> $ctlData['big_id_1'],
							'tbl_mid_category_id'		=> $ctlData['mid_id'],
							'name'						=> $ctlData[$ctlAlias][$mincategoryname],
							'sort'						=> '2300',
							'tbl_content_count'			=> '1',
							'tbl_content_count_all'		=> '1',
							//'created'					=> env('REMOTE_ADDR'),
							//'updated'					=> env('REMOTE_ADDR'),
						)
					);
				}				
			}
			return $saveData;
		}
	}
}