<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UrlUtil
 *
 * @author hanai
 */
class UrlUtil {
	
	/**
	 * ログイン
	 * @return array
	 */
	public static function getLogin() {
		return array(
			'controller'	=> 'Mains',
			'action'		=> 'login',
		);
	}

	/**
	 * ログアウト
	 * @return array
	 */
	public static function getLogout() {
		return array(
			'controller'	=> 'Mains',
			'action'		=> 'logout',
		);
	}

	/**
	 * メニュ
	 * @return array
	 */
	public static function getMenu() {
		return array(
			'controller'	=> 'Mains',
			'action'		=> 'index',
		);
	}
	
	/**
	 * メンバ作成
	 * @return array
	 */
	public static function getCategoriesCreate() {
		return array(
			'controller'	=> 'CategoriesCreates',
			'action'		=> 'index',
		);
	}
	
        public static function getCategoriesSearch() {
		return array(
			'controller'	=> 'CategoriesSearchs',
			'action'		=> 'index',
		);
	}
	public static function getCategoriesEditButtom() {
		return array(
			'controller'	=> 'CategoriesEdits',
			'action'		=> 'index',
		);
	}
	
	public static function getCategoriesDetail($tbl_big_category_id){
		return array(
			'controller'	=> 'CategoriesCreates',
			'action'		=> 'index',
			$tbl_big_category_id,
		);
	}
	
	public static function getCategoriesEdit($id){
		return array(
			'controller'	=> 'CategoriesEdits',
			'action'		=> 'index',
			$id,
		);
	}
        
    public static function getCategoriesDelete($content_id){
		return array(
			'controller'	=> 'CategoriesDeletes',
			'action'		=> 'index',
			$content_id
		);
	}
	public static function getAccountCreate() {
		return array(
			'controller'	=> 'UserCreates',
			'action'		=> 'index',
		);
	}
	public static function getAccountList() {
		return array(
			'controller'	=> 'UserLists',
			'action'		=> 'index',
		);
	}
	public static function getAccountEdit($tbl_user_id) {
		return array(
			'controller'	=> 'UserEdits',
			'action'		=> 'index',
			$tbl_user_id,
		);
	}
	public static function getAccountDelete($tbl_user_id) {
		return array(
			'controller'	=> 'UserDeletes',
			'action'		=> 'index',
			$tbl_user_id,
		);
	}
	
	
}