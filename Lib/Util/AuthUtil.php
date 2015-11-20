<?php 


class AuthUtil {

	/**
	 * 認証情報の更新
	 * @param AuthComponent $auth
	 */
	public static function refresh(AuthComponent $auth) {
		$authrModelNmae	= 'TblUser';
		$authModel		= ClassRegistry::init($authrModelNmae);
		$primaryKey		= $authModel->primaryKey;
		$id				= $auth->user($primaryKey);
		$data			= $authModel->read(null, $id);
		
		$tmp1	= $data[$authrModelNmae];
		$tmp2	= $data;
		unset($tmp2[$authrModelNmae]);
		
		$authData = am($tmp1, $tmp2);
		$auth->login($authData);
	}

	/**
	 * @param AuthComponent $auth
	 */
	public static function getTblUserId(AuthComponent $auth) {
		return $auth->user('id');
	}

	/**
	 * @param AuthComponent $auth
	 */
	public static function getTblUserUserName(AuthComponent $auth) {
		return $auth->user('user_name');
	}

	/**
	 * @param AuthComponent $auth
	 */
	public static function getTblUserAddress(AuthComponent $auth) {
		return $auth->user('address');
	}

	/**
	 * @param AuthComponent $auth
	 */
	public static function getTblUserPhoneNo(AuthComponent $auth) {
		return $auth->user('phone_no');
	}

	/**
	 * @param AuthComponent $auth
	 */
	public static function getTblUserUserMail(AuthComponent $auth) {
		return $auth->user('user_mail');
	}

	/**
	 * @param AuthComponent $auth
	 */
	public static function getTblUserUserLogin(AuthComponent $auth) {
		return $auth->user('user_login');
	}

	/**
	 * @param AuthComponent $auth
	 */
	public static function getTblUserPassword(AuthComponent $auth) {
		return $auth->user('password');
	}

	/**
	 * @param AuthComponent $auth
	 */
	public static function getTblUserUserPassword(AuthComponent $auth) {
		return $auth->user('user_password');
	}

	/**
	 * @param AuthComponent $auth
	 */
	public static function getTblUserLoginFlag(AuthComponent $auth) {
		return $auth->user('login_flag');
	}

	/**
	 * @param AuthComponent $auth
	 */
	public static function getTblUserMstUserGroupId(AuthComponent $auth) {
		return $auth->user('mst_user_group_id');
	}

	/**
	 * @param AuthComponent $auth
	 */
	public static function getTblUserTblSellGeneralCarCount(AuthComponent $auth) {
		return $auth->user('tbl_sell_general_car_count');
	}

	/**
	 * @param AuthComponent $auth
	 */
	public static function getTblUserTblSellCommCarCount(AuthComponent $auth) {
		return $auth->user('tbl_sell_comm_car_count');
	}

	/**
	 * @param AuthComponent $auth
	 */
	public static function getTblUserRemarks(AuthComponent $auth) {
		return $auth->user('remarks');
	}

	/**
	 * @param AuthComponent $auth
	 */
	public static function getTblUserCreated(AuthComponent $auth) {
		return $auth->user('created');
	}

	/**
	 * @param AuthComponent $auth
	 */
	public static function getTblUserUpdated(AuthComponent $auth) {
		return $auth->user('updated');
	}

	/**
	 * @param AuthComponent $auth
	 */
	public static function getMstUserGroupId(AuthComponent $auth) {
		return $auth->user('MstUserGroup.id');
	}

	/**
	 * @param AuthComponent $auth
	 */
	public static function getMstUserGroupName(AuthComponent $auth) {
		return $auth->user('MstUserGroup.name');
	}

	/**
	 * @param AuthComponent $auth
	 */
	public static function getMstUserGroupSort(AuthComponent $auth) {
		return $auth->user('MstUserGroup.sort');
	}

	/**
	 * @param AuthComponent $auth
	 */
	public static function getMstUserGroupSysName(AuthComponent $auth) {
		return $auth->user('MstUserGroup.sys_name');
	}

	/**
	 * @param AuthComponent $auth
	 */
	public static function getMstUserGroupOptions(AuthComponent $auth) {
		return $auth->user('MstUserGroup.options');
	}

	/**
	 * @param AuthComponent $auth
	 */
	public static function getMstUserGroupCreated(AuthComponent $auth) {
		return $auth->user('MstUserGroup.created');
	}

	/**
	 * @param AuthComponent $auth
	 */
	public static function getMstUserGroupUpdated(AuthComponent $auth) {
		return $auth->user('MstUserGroup.updated');
	}

	/**
	 * @param AuthComponent $auth
	 */
	public static function getMstUserGroupDeleted(AuthComponent $auth) {
		return $auth->user('MstUserGroup.deleted');
	}

}