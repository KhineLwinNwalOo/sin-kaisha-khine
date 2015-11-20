<?php $prjHelper = $this->Project;

if (!isset($title_for_layout))				throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);
if (!$prjHelper instanceof ProjectHelper)	throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);



// タグ
$ulMenuLinks			= $prjHelper->getUlMenuLinks();
// テキスト
$textTitleName			= $prjHelper->getTextTitleName();
$textSystemName			= $prjHelper->getTextSystemName();
$textCopyright			= $prjHelper->getTextCopyright();
$textMenuTitle			= $prjHelper->getTextMenuTitle();
// システム
$sessionFlashMessage	= $prjHelper->getSessionFlashMessage();

?>
<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', '事業目的管理');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<script type="text/javascript" src="/js/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="/css/style.css">
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->script('jquery-1.11.1.min');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
		</div>
		<div id="content">
			<?php echo $sessionFlashMessage; ?>			
			<?php echo $this->fetch('content'); ?>
			<div class="actions">
				<h3><?php echo $textMenuTitle; ?></h3>
				<?php echo $ulMenuLinks; ?>
			</div>
			<script>(function($){
				var elContent = 'div.index,div.form';
				var elActions = 'div.actions';
				
				var actionsHeigth = 0;
				$(elActions).each(function(i, e){
					actionsHeigth += $(e).height();
				});
				if ($(elContent).height() < actionsHeigth) {
					$(elContent).height(actionsHeigth);
				}
			})(jQuery);</script>
			<?php echo $this->Session->flash(); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
			?>
			<p>
				<?php echo $cakeVersion; ?>
			</p>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
