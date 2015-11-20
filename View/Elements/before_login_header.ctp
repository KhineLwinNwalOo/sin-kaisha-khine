<!-- Elements/before_login_header -->
<?php

$helper = $project;

if (!$helper instanceof ProjectHelper)	throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);

?>
<div id="utility-wrap" class="container">
	<ul style="list-style-type:none; padding:0; height: 44px;">
		<li><a href="#top-register-menu" data-toggle="modal"><span class="glyphicon glyphicon-ok-sign"></span> <?php echo h(__('Register')); ?> </a></li>
		<li><a href="#top-login-menu" data-toggle="modal"><span class="glyphicon glyphicon-user"></span> <?php echo h(__('Login')); ?> </a></li>
	</ul>
</div>