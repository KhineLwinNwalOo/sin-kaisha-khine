<!-- Elements/before_login_modal -->
<?php
$view	= $this;
$helper = $project;

if (!$helper instanceof ProjectHelper)	throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);

/**/
?>
<?php echo $view->element('modal_user_register', compact('project')); ?>
<?php echo $view->element('modal_login', compact('project')); ?>