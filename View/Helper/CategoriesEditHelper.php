<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppCtlHelper', 'View/Helper');
App::uses('UrlUtil', 'Lib/Util');

/**
 * Description of CategoriesSearchHelper
 *
 * @author hanai
 */
class CategoriesEditHelper  extends AppCtlHelper {
	
	private $dataPaginate = array();
        
        
    public function setDataPaginate(array $dataPaginate) {
		$this->dataPaginate = $dataPaginate;
	}	
	
    /**
	 * フォーム開始
	 * @return string
	*/
	
	public function getFormStart(array $options = array()) {
		$form	= $this->ExtForm;
		$alias	= $this->alias;
		return $form->create($alias, $options);
	}
	
	/**
	 * フォーム終了
	 * @return string
	 */
	public function getFormEnd() {
		$form = $this->ExtForm;
		return $form->end();
	}
        
	public function getLinkCategoriesSearch() {
		$html		= $this->Html;
		$title		= __('事業目的検索');
		$url		= UrlUtil::getCategoriesSearch();
		$options	= array();
		
		return $html->link($title, $url, $options);
	}
        
	public function getLinkCategoriesCreate() {
		$html		= $this->Html;
		$title		= __('事業目的登録');
		$url		= UrlUtil::getCategoriesCreate();
		$options	= array();
		
		return $html->link($title, $url, $options);
	}
	
	public function getLinkCategoriesEditButtom() {
		$html		= $this->Html;
		$title		= __('事業目的編集');
		$url		= UrlUtil::getCategoriesEditButtom();
		$options	= array();
		
		return $html->link($title, $url, $options);
	}
	
	public function getLinkLogout() {
		$html		= $this->Html;
		$title		= __('ログアウト');
		$url		= UrlUtil::getLogout();
		$options	= array();
		
		return $html->link($title, $url, $options);
	}
        
	public function getPaginatorBigCategoryName() {
		$paginator	= $this->Paginator;
		//$key		= '大カテゴリ';
		$title		= '大カテゴリ';
		$options	= array();
		
		return $paginator->sort( $title, $options);
	}
	
	public function getPaginatorMiddleCategoryName() {
		$paginator	= $this->Paginator;
		//$key		= '中カテゴリ';
		$title		= '中カテゴリ';
		$options	= array();
		
		return $paginator->sort( $title, $options);
	}
	
	public function getPaginatorSmallCategoryName() {
		$paginator	= $this->Paginator;
		//$key		= '小カテゴリ';
		$title		= '小カテゴリ';
		$options	= array();
		
		return $paginator->sort( $title, $options);
	}
	
	public function getPaginatorContentName() {
		$paginator	= $this->Paginator;
		//$key		= '事業目的';
		$title		= '事業目的';
		$options	= array();
		
		return $paginator->sort( $title, $options);
	}
		
	/**
	 * メンバ情報編集リンク
	 * @param int $index
	 * @return string
	 */
	public function getLinkCategoriesEdit($index = 0) {
		$html	= $this->Html;
		$data	= $this->dataPaginate[$index];
		$alias	= 'TblContent';
		$field1	= 'tbl_big_category_id';
		$field2	= 'tbl_mid_category_id';
		$field3	= 'tbl_min_category_id';
		$tbl_big_category_id = $data[$alias][$field1];
		$tbl_mid_category_id = $data[$alias][$field2];
		$tbl_min_category_id = $data[$alias][$field3];
		
		$title		= __('編集');
		$url		= UrlUtil::getCategoriesEdit($tbl_big_category_id,$tbl_mid_category_id,$tbl_min_category_id);
		$options	= array();
		return $html->link($title, $url, $options);
	}
	
	/**
	 * メンバ情報削除リンク
	 * @param int $index
	 * @return string
	 */
	public function getLinkCategoriesDelete($index = 0) {
		$form	= $this->ExtForm;
		$data	= $this->dataPaginate[$index];
		$alias	= 'TblContent';
		$field1	= 'tbl_big_category_id';
		$field2	= 'tbl_mid_category_id';
		$field3	= 'tbl_min_category_id';
		$tbl_big_category_id = $data[$alias][$field1];
		$tbl_mid_category_id = $data[$alias][$field2];
		$tbl_min_category_id = $data[$alias][$field3];
		
		$title		= __('削除');
		$url		= UrlUtil::getCategoriesDelete($tbl_big_category_id,$tbl_mid_category_id,$tbl_min_category_id);
		$options	= array();
		//$confirmMessage = sprintf(__('ID: %1$s [%2$s]のメンバー情報を削除しますか？'), $tbl_big_category_id);
		return $form->postLink($title, $url, $options);
	}

	public function getBigCatagoriesName() {
		$form		= $this->ExtForm;
		$field		= 'big_name';
		
		return h($form->extValue($field));
	}
	
	public function getMinCatagoriesName() {
		$form		= $this->ExtForm;
		$field		= 'min_name';
		
		return h($form->extValue($field));
	}
	
	public function getMidCatagoriesName() {
		$form		= $this->ExtForm;
		$field		= 'mid_name';
		
		return h($form->extValue($field));
	}
	
	public function getContentName(){
		$form		= $this->ExtForm;
		$options    =array();
		$field		= 'content';
		
		return $form->error($field) . $form->input($field, $options);
	}

	public function getEditSubmitConf() {
		$form	= $this->ExtForm;
		$caption	= '検 索';
		$options	= array(
			'div'	=> false,
		);
		
		return $form->submit($caption, $options);
	}       
}