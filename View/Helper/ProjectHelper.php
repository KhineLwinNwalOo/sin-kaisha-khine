<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppCtlHelper', 'View/Helper');
App::uses('UrlUtil', 'Lib/Util');

/**
 * Description of ProjectHelper
 *
 * @author hanai
 */
class ProjectHelper extends AppCtlHelper {
	
	const SYSTEM_NAME = '名簿管理（コードサンプル）';
	
	private $title_for_layout = '';

	/**
	 * 
	 * @param string $title_for_layout
	 */
	public function setTitleForLayout($title_for_layout) {
		$this->title_for_layout = $title_for_layout;
	}
	
	/**
	 * セッションメッセージ
	 * @return string
	 */
	public function getSessionFlashMessage() {
		$session = $this->Session;
		$attrs = array(
			'element' => null,
		);
		$message = $session->flash('flash', $attrs);
		
		if (empty($message)) {
			return '';
		} else {
			return '<div class="message">' . h($message) . '</div>';
		}
	}
	
	/**
	 * セッションメッセージ
	 * @return string
	 */
	public function getAuthSessionFlashMessage() {
		$session = $this->Session;
		$attrs = array(
			'element' => null,
		);
		$message = $session->flash('auth', $attrs);
		
		if (empty($message)) {
			return '';
		} else {
			return '<div class="message">' . h($message) . '</div>';
		}
	}
	
	/**
	 * タイトル名
	 * @return string
	 */
	public function getTextTitleName() {
		$title_for_layout	= $this->title_for_layout;
		$systemName			= self::SYSTEM_NAME;
		$titleName			= $systemName . '(' . $title_for_layout . ')';
		return h($titleName);
	}
	
	/**
	 * システム名
	 * @return string
	 */
	public function getTextSystemName() {
		return h(__(self::SYSTEM_NAME));
	}
	
	/**
	 * コピーライト
	 * @return string
	 */
	public function getTextCopyright() {
		return h('© hanahubuki.jp');
	}
	
	/**
	 * メニュータイトル
	 */
	public function getTextMenuTitle() {
		return h(__('メニュー'));
	}

	/**
	 * メニューリンク
	 * @return string
	 */
	public function getUlMenuLinks() {
		$html	= $this->Html;
		
		$linkTop			= self::getLinkTop			($html);
		$linkCategoriesCreate	= self::getLinkCategoriesCreate	($html);
		$linkAccountCreate		= self::getLinkAccountCreate($html);
		$linkCategoriesSearch	= self::getLinkCategoriesSearch	($html);
		$linkAccountList	= self::getLinkAccountList	($html);
		$linkLogout			= self::getLinkLogout		($html);
		
		$result = array(
			'<ul>',
				'<li>' . $linkTop			. '</li>',
				'<li>' . $linkCategoriesCreate	. '</li>',
				'<li>' . $linkCategoriesSearch	. '</li>',
				'<li>' . $linkAccountCreate	. '</li>',
				'<li>' . $linkAccountList	. '</li>',
				'<li>' . $linkLogout		. '</li>',
			'</ul>',
		);
		return join("\n", $result);
	}
	
	/**
	 * トップページリンク
	 * @param HtmlHelper $html
	 * @return string
	 */
	private static function getLinkTop(HtmlHelper $html) {
		$title		= __('トップページ');
		$url		= UrlUtil::getMenu();
		$options	= array();
		return $html->link($title, $url, $options);
	}
	
	
	/**
	 * メンバ登録リンク
	 * @param HtmlHelper $html
	 * @return string
	 */
	private static function getLinkCategoriesCreate(HtmlHelper $html) {
		$title		= __('事業目的登録');
		$url		= UrlUtil::getCategoriesCreate();
		$options	= array();
		return $html->link($title, $url, $options);
	}
	
	/**
	 * アカウント作成リンク
	 * @param HtmlHelper $html
	 * @return string
	 */
	private static function getLinkAccountCreate(HtmlHelper $html) {
		$title		= __('アカウント作成');
		$url		= UrlUtil::getAccountCreate();
		$options	= array();
		return $html->link($title, $url, $options);
	}
	
	/**
	 * メンバ検索リンク
	 * @param HtmlHelper $html
	 * @return string
	 */
	private static function getLinkCategoriesSearch(HtmlHelper $html) {
		$title		= __('事業目的検索');
		$url		= UrlUtil::getCategoriesSearch();
		$options	= array();
		return $html->link($title, $url, $options);
	}
	
	
	
	/**
	 * アカウントリストリンク
	 * @param HtmlHelper $html
	 * @return string
	 */
	private static function getLinkAccountList(HtmlHelper $html) {
		$title		= __('アカウント情報');
		$url		= UrlUtil::getAccountList();
		$options	= array();
		return $html->link($title, $url, $options);
	}
	
	/**
	 * ログアウトリンク
	 * @param HtmlHelper $html
	 * @return string
	 */
	private static function getLinkLogout(HtmlHelper $html) {
		$title		= __('ログアウト');
		$url		= UrlUtil::getLogout();
		$options	= array();
		return $html->link($title, $url, $options);
	}
}