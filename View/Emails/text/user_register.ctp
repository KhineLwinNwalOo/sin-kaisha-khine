<?php

if (!isset($data))	throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);

$user_name	= Hash::get($data, 'Tbluser.user_name');
$address	= Hash::get($data, 'Tbluser.address');
$phone_no	= Hash::get($data, 'Tbluser.phone_no');
$user_mail	= Hash::get($data, 'Tbluser.user_mail');
$user_login	= Hash::get($data, 'Tbluser.user_login');
$password	= '******(Hide)'

?>
<?php echo __('Dear'); ?> <?php echo $user_name; ?> 
 
<?php echo __('Member registration to Caroll, thank you.'); ?> 
 
--------------------------------------------- 
<?php echo __('Registration Contents'); ?> 
--------------------------------------------- 
<?php echo __('User Name（Public）'); ?> :  <?php echo $user_name; ?> 
<?php echo __('Address（Public）'); ?> :  <?php echo $address; ?> 
<?php echo __('Phone No（Public）'); ?> :  <?php echo $phone_no; ?> 
<?php echo __('E-Mail（Public）'); ?> :  <?php echo $user_mail; ?> 
<?php echo __('Login Name'); ?> :  <?php echo $user_login; ?> 
<?php echo __('Login Password'); ?> :  <?php echo $password; ?> 
 