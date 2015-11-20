<!-- Elements/after_login_header -->
<?php

$helper = $project;

if (!$helper instanceof ProjectHelper)	throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);

$linkMyGarage	= $helper->getLinkMyGarage();
$linkSellGeneralCarRegistersIndex = $helper->getLinkSellGeneralCarRegistersIndex();
$linkLogout		= $helper->getLinkLogout();

?>
<div id="utility-wrap" class="container">
	<button type="button" class="btn btn-default dis"><span class="glyphicon glyphicon-plus"></span></button>
	<ul style="list-style-type:none; padding:0; height: 44px;">
		<li><?php echo $linkMyGarage; ?></li>
		<li><?php echo $linkSellGeneralCarRegistersIndex; ?></li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<span class="glyphicon glyphicon-user"></span> <?php echo h(__('User')); ?> <span class="caret"></span>
			</a>
			<ul class="dropdown-menu">
				<li><a href="#top-user-info-edit" data-toggle="modal"><?php echo h(__('User Info Edit')); ?></a></li>
				<li><a href="#top-mail-address-edit" data-toggle="modal"><?php echo h(__('Mail Address Edit')); ?></a></li>
				<li><a href="#top-password-edit" data-toggle="modal"><?php echo h(__('Password Edit')); ?></a></li>
				<li><a href="#top-inquiry" data-toggle="modal"><?php echo h(__('Inquiry')); ?></a></li>
			</ul>
		</li>
		<li><?php echo $linkLogout; ?></li>
	</ul>
</div>