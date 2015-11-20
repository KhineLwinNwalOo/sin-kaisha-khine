<?php
App::uses('AuthUtil', 'Lib/Util');

if (!isset($data))						throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);
if (!$auth instanceof AuthComponent)	throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);

$title		= Hash::get($data, 'UserContact.title');
$content	= Hash::get($data, 'UserContact.content');

$user_name	= AuthUtil::getTblUserUserName($auth);
$address	= AuthUtil::getTblUserAddress($auth);
$phone_no	= AuthUtil::getTblUserPhoneNo($auth);
$user_mail	= AuthUtil::getTblUserUserMail($auth);

$user_id	= AuthUtil::getTblUserId($auth);
$mst_user_group_name		= AuthUtil::getMstUserGroupName($auth);
$tbl_sell_general_car_count = AuthUtil::getTblUserTblSellGeneralCarCount($auth);
$tbl_sell_comm_car_count	= AuthUtil::getTblUserTblSellCommCarCount($auth);
$remarks	= AuthUtil::getTblUserRemarks($auth);

?>
<?php echo __('User Contact'); ?> 
<?php echo __('Title'); ?>：<?php echo $title; ?> 
--------------------------------------------- 
<?php echo __('Contents'); ?> 
--------------------------------------------- 
 <?php echo $content; ?> 
--------------------------------------------- 
<?php echo __('User Info'); ?> 
--------------------------------------------- 
<?php echo __('User Name'); ?> :  <?php echo $user_name; ?> 
<?php echo __('Addres'); ?> :  <?php echo $address; ?> 
<?php echo __('Phone No'); ?> :  <?php echo $phone_no; ?> 
<?php echo __('E-Mail'); ?> :  <?php echo $user_mail; ?> 
 
<?php echo __('User ID'); ?> :  <?php echo $user_id; ?> 
<?php echo __('User Group'); ?> :  <?php echo $mst_user_group_name; ?> 
<?php echo __('Sell General Car Count'); ?> :  <?php echo $tbl_sell_general_car_count; ?> 
<?php echo __('Sell Comm Car Count'); ?> :  <?php echo $tbl_sell_comm_car_count; ?> 
<?php echo __('Remarks'); ?> : 
<?php echo $remarks; ?> 
 