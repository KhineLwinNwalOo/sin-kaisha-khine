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
class MidCategoryCreateHelper extends AppCtlHelper {
	/**
	 * フォーム開始
	 * @return string
	 */
	
	public function getFormStart($options = array()) {
		$form	= $this->ExtForm;
		$alias	= $this->alias;
		return $form->create($alias, $options);
	}
	
	public function getFormEnd() {
		$form = $this->ExtForm;
		return $form->end();
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
}
