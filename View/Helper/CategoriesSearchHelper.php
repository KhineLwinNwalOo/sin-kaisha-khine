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
class CategoriesSearchHelper  extends AppCtlHelper {
	
	private $dataPaginate = array();
        
        
    public function setDataPaginate(array $dataPaginate) {
		$this->dataPaginate = $dataPaginate;
	}
	
	public function getValueBigCatId() {
		$ctl		= $this;
		$request	= $ctl->request;
		
		if(!empty($request->data['CategoriesSearch']['big_id'])) {
			return $request->data['CategoriesSearch']['big_id'];	
		}		
	}
	
	public function getValueMidCatId() {
		$ctl		= $this;
		$request	= $ctl->request;
		
		if(!empty($request->data['CategoriesSearch'])) {
			$value = $request->data['CategoriesSearch'];
			return $value['mid_id'];	
		}			
	}
	
	public function getValueMinCatId() {
		$ctl		= $this;
		$request	= $ctl->request;
		
		if(!empty($request->data['CategoriesSearch'])) {
			$value = $request->data['CategoriesSearch'];
			return $value['min_id'];	
		}	
	}
	
	/**
	 * フォーム開始
	 * @return string
	 */
	public function getFormStart($options = array()) {
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
	
	public function getInputBigCatId() {
		$form		= $this->ExtForm;
		$field		= 'big_id';
		$style = array(
			'width: 140px;',
		);
		$options	= array(
			'style' => join("", $style),
			'class' => '',
		);
		
		return $form->error($field) . $form->input($field, $options);
	}
	
	public function getInputContentName() {
		$form		= $this->ExtForm;
		$field		= 'content';
		$style = array(
			'width: 140px;',
		);
		$options	= array(
			'style' => join("", $style),
			'class' => '',
		);
		
		return $form->error($field) . $form->input($field, $options);
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
		$field	= 'id';
		$id=$data[$alias][$field];
				
		$title		= __('編集');
		$url		= UrlUtil::getCategoriesEdit($id);
		$options	= array();
		return $html->link($title, $url, $options);
	}
	
	/**
	 * メンバ情報削除リンク
	 * @param int $index
	 * @return string
	 */
	public function getLinkCategoriesDelete($index = 0) {
		$helper			= $this;
		$form			= $helper->ExtForm;
		$data			= $helper->dataPaginate[$index];
		$alias			= 'TblContent';
		$content_id		= $data[$alias]['id'];
		$content_name	= $data[$alias]['content'];
		
		$title			= __('削除');
		$url			= UrlUtil::getCategoriesDelete($content_id);
		$options		= array();
		$confirmMessage = sprintf(__('[%1$s]のグループ情報を削除しますか？'), $content_name);
		return $form->postLink($title, $url, $options, $confirmMessage);
	
	}
	
	public function getvalueContents($index = 0){
		$data	= $this->dataPaginate[$index];
		$alias	= 'TblContent';
		$field	= 'content';

		return h($data[$alias][$field]);
	}

	public function getvalueContentsId($index = 0) {
		$data	= $this->dataPaginate[$index];
		$alias	= 'TblContent';
		$field	= 'id';

		return h($data[$alias][$field]);
	}
	
	public function getvalueContentsBigName($index = 0){
		$data	= $this->dataPaginate[$index];
		$alias	= 'TblBigCategory';
		$field	= 'name';

		return h($data[$alias][$field]);
	}
		
	public function getvalueContentsMidName($index = 0){
		$data	= $this->dataPaginate[$index];
		$alias	= 'TblMidCategory';
		$field	= 'name';

		return h($data[$alias][$field]);
	}
	
	public function getvalueContentsMinName($index = 0){
		$data	= $this->dataPaginate[$index];
		$alias	= 'TblMinCategory';
		$field	= 'name';

		return h($data[$alias][$field]);
	}

	public function getSearchBigCategoriesName() {

		$form		= $this->ExtForm;
		$options	= array();
		$field		= 'name';
		return $form->error($field) . $form->input($field, $options);

	}
	
	public function getSearchMidCategoriesName() {
		$form		= $this->ExtForm;
		$options	= array();
		$field		= 'name';
		return $form->error($field) . $form->input($field, $options);

	}
	
	public function getSearchMinCategoriesName() {
		$form		= $this->ExtForm;
		$options	= array();
		$field		= 'name';
		return $form->error($field) . $form->input($field, $options);

	}
	
	public function getSearchContent() {
		$form		= $this->ExtForm;
		$options	= array();
		$field		= 'name';
		return $form->error($field) . $form->input($field, $options);
	}
		
	public function getSearchSubmitConf() {
		$form	= $this->ExtForm;
		$caption	= '検 索';
		$options	= array(
			'div'	=> false,
		);
		return $form->submit($caption, $options);
	}
    

	public function getDataPaginate(CategoriesSearchsController $ctl) {
		$paginateOrmName = self::PAGINATE_ORM_NAME;
		return $ctl->paginate($paginateOrmName);
	}
        
	public function getPaginatorCounter() {
		$paginator	= $this->Paginator;
		$options = array(
			'format' => __('{:page}/{:pages}ページ {:start}-{:end}件を表示(全{:count}件)')
		);
		return $paginator->counter($options);
	}
    
	public function getDataPaginateCount() {
		return count($this->dataPaginate);
	}
        
	public function getPaginatorLinks() {
		$paginator	= $this->Paginator;
		
		$result = array(
			self::getPaginatorLinkPrev		($paginator),
			self::getPaginatorLinkNumbers	($paginator),
			self::getPaginatorLinkNext		($paginator),
		);
		return join("", $result);
	}
    
	private static function getPaginatorLinkPrev(PaginatorHelper $paginator) {
		$title				= '< ' . __('戻る');
		$options			= array();
		$disabledTitle		= null;
		$disabledOptions	= array(
			'class' => 'prev disabled'
		);
		return $paginator->prev($title, $options, $disabledTitle, $disabledOptions);
	}
	
	/**
	 * ページNoリンク
	 * @param PaginatorHelper $paginator
	 * @return string
	 */
	private static function getPaginatorLinkNumbers(PaginatorHelper $paginator) {
		$options = array(
			'separator' => ''
		);
		return $paginator->numbers($options);
	}

	/**
	 * 次へリンク
	 * @param PaginatorHelper $paginator
	 * @return string
	 */
	private static function getPaginatorLinkNext(PaginatorHelper $paginator) {
		$title				= __('次へ') . ' >';
		$options			= array();
		$disabledTitle		= null;
		$disabledOptions	= array(
			'class' => 'next disabled'
		);
		return $paginator->next($title, $options, $disabledTitle, $disabledOptions);
	}
}