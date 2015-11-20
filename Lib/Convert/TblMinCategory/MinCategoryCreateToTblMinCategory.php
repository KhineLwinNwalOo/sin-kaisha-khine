<?php 

App::uses('AppToConvert', 'Lib/Convert');

class MinCategoryCreateToTblMinCategory extends AppToConvert {

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
		while (!empty($ctlData[$ctlAlias]['smallcategory_name_'.$i])) {
			$result[] = array(
				$ormAlias => array(
					'tbl_big_category_id'		=> $ctlData['big_id_1'],
					'tbl_mid_category_id'		=> $ctlData['mid_id'],
					'name'						=> $ctlData[$ctlAlias]['smallcategory_name_'.$i],
					'sort'						=> '2300',
					'tbl_content_count'			=> '1',
					'tbl_content_count_all'		=> '1',
				),
			);
			$i++;
		}
		return $result;
		
		
//		$big_category_id = $ctlData['big_id_1'];
//		$mid_category_id = $ctlData['mid_id'];
//
//		if($big_category_id && $mid_category_id){
//			//for($i = 1 ;$i < 4 ;$i++){ 			
//				//$mincategoryname = "smallcategory_name_". $i; 
//				//$min_Catname = $ctlData[$ctlAlias][$mincategoryname];
//				//if($min_Catname){
//					$saveData = array(
//						$ormAlias => array(
//							'tbl_big_category_id'		=> $ctlData['big_id_1'],
//							'tbl_mid_category_id'		=> $ctlData['mid_id'],
//							'name'						=> $ctlData[$ctlAlias]['smallcategory_name_1'],
//							'sort'						=> '2300',
//							'tbl_content_count'			=> '1',
//							'tbl_content_count_all'		=> '1',
//						),
//						array(
//							'tbl_big_category_id'		=> $ctlData['big_id_1'],
//							'tbl_mid_category_id'		=> $ctlData['mid_id'],
//							'name'						=> $ctlData[$ctlAlias]['smallcategory_name_2'],
//							'sort'						=> '2300',
//							'tbl_content_count'			=> '1',
//							'tbl_content_count_all'		=> '1',
//						),
//						array(
//							'tbl_big_category_id'		=> $ctlData['big_id_1'],
//							'tbl_mid_category_id'		=> $ctlData['mid_id'],
//							'name'						=> $ctlData[$ctlAlias]['smallcategory_name_3'],
//							'sort'						=> '2300',
//							'tbl_content_count'			=> '1',
//							'tbl_content_count_all'		=> '1',
//						),
//				
//					);
//				//}				
//			//}
//			return $saveData;
		//}
	}
}