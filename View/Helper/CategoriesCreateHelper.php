<?php
/**
 * Application level View Helper
 *
 * This file is application-wide helper file. You can put all
 * application-wide helper-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Helper
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('AppCtlHelper', 'View/Helper');
App::uses('UrlUtil', 'Lib/Util');
//App::uses('TblCategoriesSubMail', 'Model');

/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 * @property ExtFormHelper $ExtForm
 */
class CategoriesCreateHelper extends AppCtlHelper {
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
	
	public function getLinkAccountCreate() {
		$html		= $this->Html;
		$title		= __('アカウント作成');
		$url		= UrlUtil::getAccountCreate();
		$options	= array();
		return $html->link($title, $url, $options);
	}
	public function getLinkAccountList() {
		$html		= $this->Html;
		$title		= __('アカウント情報');
		$url		= UrlUtil::getAccountList();
		$options	= array();
		return $html->link($title, $url, $options);
	}
	/**
	 * 名
	 * @return string
	 */
	public function getBigCategoriesName() {
		$form		= $this->ExtForm;
		$options	= array();
		$field		= 'bigcategory_name';
		return $form->error($field) . $form->input($field, $options);
	}
        
    public function getMiddleCategoriesName1() {
		$form		= $this->ExtForm;
		$options	= array();
		$field		= 'middlecategory_name_1';
		return $form->error($field) . $form->input($field, $options);
	}
	public function getMiddleCategoriesName2() {
		$form		= $this->ExtForm;
		$options	= array();
		$field		= 'middlecategory_name_2';
		return $form->error($field) . $form->input($field, $options);
	}
	public function getMiddleCategoriesName3() {
		$form		= $this->ExtForm;
		$options	= array();
		$field		= 'middlecategory_name_3';
		return $form->error($field) . $form->input($field, $options);
	}
	
	public function getSmallCategoriesName1() {
		$form		= $this->ExtForm;
		$options	= array();
		$field		= 'smallcategory_name_1';
		return $form->error($field) . $form->input($field, $options);
	}
	public function getSmallCategoriesName2() {
		$form		= $this->ExtForm;
		$options	= array();
		$field		= 'smallcategory_name_2';
		return $form->error($field) . $form->input($field, $options);
	}
	
	public function getSmallCategoriesName3() {
		$form		= $this->ExtForm;
		$options	= array();
		$field		= 'smallcategory_name_3';
		return $form->error($field) . $form->input($field, $options);
	}
	public function getContentsCategoriesName1() {
		$form		= $this->ExtForm;
		$options	= array();
		$field		= 'contents_name_1';
		return $form->error($field) . $form->input($field, $options);
	}
    public function getContentsCategoriesName2() {
		$form		= $this->ExtForm;
		$options	= array();
		$field		= 'contents_name_2';
		return $form->error($field) . $form->input($field, $options);
	}
	 public function getContentsCategoriesName3() {
		$form		= $this->ExtForm;
		$options	= array();
		$field		= 'contents_name_3';
		return $form->error($field) . $form->input($field, $options);
	}
	 public function getContentsCategoriesName4() {
		$form		= $this->ExtForm;
		$options	= array();
		$field		= 'contents_name_4';
		return $form->error($field) . $form->input($field, $options);
	}
	 
	 public function getContentsCategoriesName5() {
		$form		= $this->ExtForm;
		$options	= array();
		$field		= 'contents_name_5';
		return $form->error($field) . $form->input($field, $options);
	}
	 public function getContentsCategoriesName6() {
		$form		= $this->ExtForm;
		$options	= array();
		$field		= 'contents_name_6';
		return $form->error($field) . $form->input($field, $options);
	}
	 public function getContentsCategoriesName7() {
		$form		= $this->ExtForm;
		$options	= array();
		$field		= 'contents_name_7';
		return $form->error($field) . $form->input($field, $options);
	}
	 public function getContentsCategoriesName8() {
		$form		= $this->ExtForm;
		$options	= array();
		$field		= 'contents_name_8';
		return $form->error($field) . $form->input($field, $options);
	}
	 public function getContentsCategoriesName9() {
		$form		= $this->ExtForm;
		$options	= array();
		$field		= 'contents_name_9';
		return $form->error($field) . $form->input($field, $options);
	}
	 public function getContentsCategoriesName10() {
		$form		= $this->ExtForm;
		$options	= array();
		$field		= 'contents_name_10';
		return $form->error($field) . $form->input($field, $options);
	}
        
    
    public function getBigCatSubmitConf() {
		$form	= $this->ExtForm;
		$caption	= '登　録';
		$options	= array(
			'div'	=> false,
		);
		return $form->submit($caption, $options);
	}

    public function getMiddleCatSubmitConf() {
		$form	= $this->ExtForm;
		$caption	= '登　録';
		$options	= array(
			'div'	=> false,
		);
		return $form->submit($caption, $options);
	}
        
        
    public function getSmallCatSubmitConf() {
		$form	= $this->ExtForm;
		$caption	= '登　録';
		$options	= array(
			'div'	=> false,
		);
		return $form->submit($caption, $options);
	}

    public function getContentsSubmitConf() {
		$form	= $this->ExtForm;
		$caption	= '登　録';
		$options	= array(
			'div'	=> false,
		);
		return $form->submit($caption, $options);
	}
           
    public function getvalueBigCategoriesName() {
		
		$form		= $this->ExtForm;
		$options	= array(
			'style' => ' width: 100%;',
		);
		$field		= 'tbl_big_category_id';
		return $form->error($field) . $form->input($field, $options);
	
	
	}

    public function getvalueMiddleCategoriesName() {
		
		$form		= $this->ExtForm;
		$options	= array(
			'style' => ' width: 100%;',
		);
		$field		= 'tbl_mid_category_id';
		return $form->error($field) . $form->input($field, $options);
	
	
	}

    public function getvalueSmallCategoriesName() {
		
		$form		= $this->ExtForm;
		$options	= array(
			'style' => ' width: 100%;',
		);
		$field		= 'tbl_min_category_id';
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
	/**/
}
