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
class MinCategoryCreateHelper extends AppCtlHelper {
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
	
	/**
	 * 名
	 * @return string
	 */
	
	
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
	
}