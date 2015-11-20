 <!-- CategoriesSearchs/index -->
<?php 
$ctlHelper	= $this->CategoriesSearch;

//if (! $ctlHelper    instanceof CategoriesSearchHelper)  throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);
if (!isset($dataPaginate))						throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);
if (!$ctlHelper instanceof CategoriesSearchHelper)	throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);
$ctlHelper->setDataPaginate($dataPaginate);
// ログインフォーム
$formStart	= $ctlHelper->getFormStart();
$inputTblMakerId = $ctlHelper->getInputBigCatId();
$inputContentName = $ctlHelper->getInputContentName();
$formEnd	= $ctlHelper->getFormEnd();

?>
<?php
// 検索フォーム
$linkCategoriesSearch				= $ctlHelper->getLinkCategoriesSearch		();
$linkCategoriesCreate				= $ctlHelper->getLinkCategoriesCreate		();
$linkCategoriesEdit				    = $ctlHelper->getLinkCategoriesEditButtom	();
$PaginatorBigCategoryName			= $ctlHelper->getPaginatorBigCategoryName	();
$PaginatorMiddleCategoryName		= $ctlHelper->getPaginatorMiddleCategoryName();
$PaginatorSmallCategoryName			= $ctlHelper->getPaginatorSmallCategoryName	();
$PaginatorContentName				= $ctlHelper->getPaginatorContentName       ();
$paginatorCounter					= $ctlHelper->getPaginatorCounter           ();
$paginatorLinks						= $ctlHelper->getPaginatorLinks             ();
$linkLogout							= $ctlHelper->getLinkLogout					();

$valueBigCatId						= $ctlHelper->getValueBigCatId();
$valueMidCatId						= $ctlHelper->getValueMidCatId();
$valueMinCatId						= $ctlHelper->getValueMinCatId();
?>
 
<div class="index">
<h2>事業目的検索</h2>
<?php  $count=0;?>
<table cellpadding="0" cellspacing="0" border="0">
	<tr>
		<th><?php echo $PaginatorContentName; ?> </th>
		<th colspan="3"> </th>

		<th class="actions">操作</th>
	</tr> 
	<?php  for($i=0;$i<$ctlHelper->getDataPaginateCount();$i++){ 
		$valueContents					= $ctlHelper->getvalueContents					    ($i);
		$valueContentsId				= $ctlHelper->getvalueContentsId				    ($i);
		$valueContentsBigName           = $ctlHelper->getvalueContentsBigName				($i);
		$valueContentsMidName           = $ctlHelper->getvalueContentsMidName				($i);
		$valueContentsMinName           = $ctlHelper->getvalueContentsMinName				($i);
		$LinkCategoriesEdit				= $ctlHelper->getLinkCategoriesEdit					($i);
		$LinkCategoriesDelete			= $ctlHelper->getLinkCategoriesDelete				($i);
	  ?>
	<tr>	
		<td>
			<?php echo $valueContents;?>  
		</td>
		<td class="actions" rowspan="2" colspan="3"> </td>
		<td class="actions"  rowspan="2" style="vertical-align: center;"> 
		<?php echo $LinkCategoriesEdit; ?>	<?php echo $LinkCategoriesDelete;?>
		</td>
	</tr>
	<tr>
		<td colspan="5"> <?php echo $valueContentsBigName.">".$valueContentsMidName.">".$valueContentsMinName;  ?></td>
	</tr>
	<?php } ?>
</table>
<p><?php echo $paginatorCounter; ?></p>
<div class="paging"><?php echo $paginatorLinks; ?></div>
</div>
 
<?php 
 $SearchSubmit						   = $ctlHelper->getSearchSubmitConf		();
 ?>
<div class="actions">
	<h3>検索</h3>
	<?php echo $formStart; ?>
	<table border="0" >
		<tr>
			<td><font size="1.5">大カテゴリ </font> </td>     
			<td><?php echo $inputTblMakerId; ?>
			</td>           	
		</tr>
		<tr>
			<td><font size="1.5">中カテゴリ</font></td>     
			<td><select name="data[CategoriesSearch][mid_id]" id="CategoriesSearchMidId" style="width:140px;" >
				<option value="">▼選択してください</option>
				</select>
			</td>           	
		</tr>
		<tr>
			<td><font size="1.5">小カテゴリ</font>  </td>     
			<td><select name="data[CategoriesSearch][min_id]" id="CategoriesSearchMinId" style="width:140px;">
				<option value="">▼選択してください</option>
				</select></td>      
		</tr>
		<tr>
			<td><font size="1.5">事業目的</font>  </td>     
			<td>
				<?php echo $inputContentName;?>
			</td>      
		</tr>
		<tr>
			<td><?php echo $SearchSubmit; ?></td>
		</tr>
	</table>
	<h3>操作</h3>
	<ul>
		<li><?php echo $linkCategoriesCreate; ?></li>
	</ul>
		
	<?php echo $formEnd; ?>
</div>
 <script>(function($) {

		var elBigCat_2					= '#CategoriesSearchBigId';
		var elMidCat_2					= '#CategoriesSearchMidId';
		var elMinCat_2					= '#CategoriesSearchMinId';	
		//var elContentCategoryInsert		= '#Content_category_insert';
		//var elContentCategory			= '#contentsdata';
		//$("input[type=text]").val("");
		
		var valueMidCatId = '<?php echo $valueMidCatId; ?>';	
		var valueMinCatId = '<?php echo $valueMinCatId; ?>';
		
//		var url		= '/BigCategoryCreates/big_category/';
//		$(elBigCat_2).html('<option value="">検索中 ... </option>');
//		$(elBigCat_2).load(url);
		
		
		$(elBigCat_2).change(function(){
			var Bigid = $(this).val();
			if (Bigid) {
				var url = '/MidCategoryCreates/mid_category/' + escape(Bigid);
				$(elMidCat_2).html('<option value="">検索中 ... </option>');
				$(elMidCat_2).load(url);
				$(elMinCat_2).html('<option value="">▼選択してください</option>');
			} else {
				$(elMidCat_2).html('<option value="">▼選択してください</option>');
				$(elMinCat_2).html('<option value="">▼選択してください</option>');
			}	
		});
		//$(elBigCat_2).change();
		
		 $(elMidCat_2).change(function(){
        var Midid = $(this).val();
        if (Midid) {
            var url = '/MinCategoryCreates/min_category/' + escape(Midid);
            $(elMinCat_2).html('<option value="">検索中 ... </option>');
            $(elMinCat_2).load(url);
        } else {
            $(elMinCat_2).html('<option value="">▼選択してください</option>');
        }	
    });
    //$(elMidCat_2).change();
	
	(function($) {
			var Bigid = $(elBigCat_2).val();
			var url = '/MidCategoryCreates/mid_category/' + escape(Bigid);
			$(elMidCat_2).html('<option value="">検索中 ... </option>');
			$(elMidCat_2).load(url, function(){
				$(elMidCat_2).val(valueMidCatId);
				//$('#mid_dropdown_2 option[value="'+valueMidCatId+'"]').prop('selected', true);
			});
			
			var url2 = '/MinCategoryCreates/min_category/' + escape(valueMidCatId);
			$(elMinCat_2).html('<option value="">検索中 ... </option>');
			$(elMinCat_2).load(url2, function(){
				$(elMinCat_2).val(valueMinCatId);
				//$('#mid_dropdown_2 option[value="'+valueMidCatId+'"]').prop('selected', true);
			});
			
		})(jQuery);
	
})(jQuery);
</script>
