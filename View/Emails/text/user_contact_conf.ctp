<?php
App::uses('AuthUtil', 'Lib/Util');

if (!isset($data))						throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);
if (!$auth instanceof AuthComponent)	throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);

$title		= Hash::get($data, 'UserContact.title');
$content	= Hash::get($data, 'UserContact.content');

$user_name	= AuthUtil::getTblUserUserName($auth);

?>
<?php echo __('Dear'); ?> <?php echo $user_name; ?> 
 
<?php echo __('Inquiry Confirmation'); ?> 
<?php echo __('Title'); ?>：<?php echo $title; ?> 
--------------------------------------------- 
<?php echo __('Contents'); ?> 
--------------------------------------------- 
 <?php echo $content; ?> 
 