<!-- Mains/index -->
<?php 
$ctlHelper	= $this->Main;

if (!$ctlHelper instanceof MainHelper)	throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);

$linkCategoriesCreate	= $ctlHelper->getLinkCategoriesCreate	();
$linkCategoriesSearch	= $ctlHelper->getLinkCategoriesSearch	();
$linkAccountCreate	= $ctlHelper->getLinkAccountCreate	();
$linkAccountList	= $ctlHelper->getLinkAccountList	();
$linkLogout			= $ctlHelper->getLinkLogout			();

?>
<div class="index">
<h2 class="title">管理者メニュー</h2>
<table>
	<tr>
		<th><?php echo $linkCategoriesCreate; ?></th>
		<td>事業目的の登録</td>
	</tr>
	<tr>
		<th><?php echo $linkCategoriesSearch; ?></th>
		<td>事業目的を検索</td>
	</tr>
	<tr>
		<th><?php echo $linkAccountCreate; ?></th>
		<td>管理者アカウントを作成</td>
	</tr>
	<tr>
		<th><?php echo $linkAccountList; ?></th>
		<td>管理者アカウントの一覧</td>
	</tr>
	<tr>
		<th><?php echo $linkLogout; ?></th>
		<td>システムからログアウト</td>
	</tr>
</table>
</div>
