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

/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 * @property ExtFormHelper $ExtForm
 */
class ContentsCreateHelper extends AppCtlHelper {
	
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
}
