<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('AppFromConvert', 'Lib/Convert');

/**
 * Description of MemberEditFromTblMember
 *
 * @author hanai
 */
class CategoriesEditFromTblContent extends AppFromConvert {
	
	
	public function getCtlData() {
		$convert	= $this;
		$ctlAlias	= $convert->ctlAlias;
		$ormAlias	= $convert->ormAlias;
		$ormData	= $convert->ormData;
		
		$inputData = array(
			$ctlAlias => array(
					'id'						=> $ormData[$ormAlias]['id'],
					'tbl_big_category_id'		=> $ormData[$ormAlias]['tbl_big_category_id'],
					'tbl_mid_category_id'		=> $ormData[$ormAlias]['tbl_mid_category_id'],
					'tbl_min_category_id'		=> $ormData[$ormAlias]['tbl_min_category_id'],
					'content'					=> $ormData[$ormAlias]['content'],
					'big_name'					=> $ormData['TblBigCategory']['name'],
					'mid_name'					=> $ormData['TblMidCategory']['name'],
					'min_name'					=> $ormData['TblMinCategory']['name'],
				),
			
		);
		return $inputData;
	}
} 