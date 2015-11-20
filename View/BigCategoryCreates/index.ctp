<?php 
$ctlHelper	= $this->BigCategoryCreate;

if (!$ctlHelper instanceof BigCategoryCreateHelper)	throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);

?>

<style	type="text/css">
	.datacategory{width: 300px;height:20px;}
</style>

<?php
// 検索フォーム
$formStart				= $ctlHelper->getFormStart			();
$inputBigCatagories		= $ctlHelper->getBigCategoriesName	();
$formEnd				= $ctlHelper->getFormEnd			();
?>

<div id="bigcategory">
	<table cellpadding="0" cellspacing="0" border="0">
		<tr>
			<td colspan="3"><h3> 大カテゴリ登録 </h3></td>
		</tr>
		<tr>
			<td> 大カテゴリ </td>
			<td></td>
			<td></td>
			<td><?php echo $inputBigCatagories; ?></td>   
			<td><button type="button" class="big_category" id="big_category_insert" style="width:65px;height: 34px;background-color:#dcdcdc; ">登 録</button></td>
		</tr>
		<tr>
			<td colspan="3"></td>
		</tr>
	</table>
</div>

<script>(function ($){
	var elBigCategoryInsert		= '#big_category_insert';
	var elbigCategoryval		= '#BigCategoryCreateBigcategoryName';
	
	<?php /** big Category **/?>
		$(elBigCategoryInsert).click(function(){
		
			var bigcategory_val = {};	
			var action = '/BigCategoryCreates/bigcategoryinsert';
			var name = $(elbigCategoryval).attr('name');
			var big_name = $(elbigCategoryval).val();
				bigcategory_val[name] = big_name;
			
			$.ajax({
				url: action,
				type: 'post',
				data: bigcategory_val,
				dataType: 'html',
				success: function(d, t, x) { 
					$('#CategoriesCreateIndexForm').submit();
				},
			
				error: function(x, t, e) {
					alert('大カテゴリ名前は同じです。');
				}
			
			});
		});
})(jQuery);</script>
