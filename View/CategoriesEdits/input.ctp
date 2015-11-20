 <!-- CategoriesEdits/input -->
<?php 
$ctlHelper	= $this->CategoriesEdit;

if (!$ctlHelper instanceof CategoriesEditHelper)	throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);

$formStart	= $ctlHelper->getFormStart(array('action' => 'input'));
$linkLogout								= $ctlHelper->getLinkLogout				();

$inputBigCatagoriesName						= $ctlHelper->getBigCatagoriesName	();
$inputMidCatagoriesName						= $ctlHelper->getMidCatagoriesName	();
$inputMinCatagoriesName						= $ctlHelper->getMinCatagoriesName	();
$inputContentName							= $ctlHelper->getContentName		();
$SearchSubmit								= $ctlHelper->getEditSubmitConf		();
$formEnd									= $ctlHelper->getFormEnd			();
?> 
<div class="index">
<h2>事業目的編集</h2>
<?php echo $formStart; $count=0;?>
<table cellpadding="0" cellspacing="0" border="0">
	<tr style="height: 40px;">
        <td>大カテゴリ</td>     
        <td><?php echo $inputBigCatagoriesName; ?></td>             
    </tr>
	<tr style="height: 40px;">
        <td>中カテゴリ</td>     
        <td><?php echo $inputMidCatagoriesName; ?></td>             
    </tr>
	<tr style="height: 40px;">
        <td>小カテゴリ</td>     
        <td><?php echo $inputMinCatagoriesName; ?></td>             
    </tr>
    <tr style="height: 40px;">
        <td>事業目的</td>     
        <td><?php echo $inputContentName; ?></td>             
    </tr>
	<tr style="height: 40px;">
        <td></td>     
        <td><?php echo $SearchSubmit; ?></td>             
    </tr>
</table>
</div>
<?php 
$linkCategoriesSearch					= $ctlHelper->getLinkCategoriesSearch				();
$linkCategoriesCreate					= $ctlHelper->getLinkCategoriesCreate				();
$linkCategoriesEdit						= $ctlHelper->getLinkCategoriesEditButtom			();
?>
<div class="actions">    
	<h3>操作</h3>
		<table>
            <tr>
                <h3 class="title">メニュー</h3>
            </tr>
            <tr>
                <th><?php echo $linkCategoriesSearch; ?></th>
            </tr>
            <tr>
                <th><?php echo $linkCategoriesCreate; ?></th>
            </tr>
			<tr>
                <th><?php echo $linkCategoriesEdit; ?></th>
            </tr>
			
            <tr>
                <td class="actions">アカウント管理</td>
            </tr>
            <tr>
                <td class="actions">アカウント登録</td>
            </tr>
            <tr>
				<th><?php echo $linkLogout; ?></th>
            </tr>
        </table>
	<?php echo $formEnd; ?>
</div>