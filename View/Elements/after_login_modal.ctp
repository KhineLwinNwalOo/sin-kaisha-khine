<!-- Elements/after_login_modal -->
<?php
$view	= $this;
$helper = $project;

if (!$helper instanceof ProjectHelper)	throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);

?>
<?php echo $view->element('modal_user_info_edit', compact('project')); ?> 
<?php echo $view->element('modal_mail_address_edit', compact('project')); ?> 
<?php echo $view->element('modal_password_edit', compact('project')); ?> 
<?php echo $view->element('modal_inquiry', compact('project')); ?> 
