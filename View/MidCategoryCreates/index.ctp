<?php 
$ctlHelper	= $this->MidCategoryCreate;

if (!$ctlHelper instanceof MidCategoryCreateHelper)	throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);

?>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style	type="text/css">
	.datacategory{width: 300px;height:20px;}
</style>

<?php
// 検索フォーム
$formStart						 = $ctlHelper->getFormStart						();
$inputMiddleCatagories1          = $ctlHelper->getMiddleCategoriesName1			();
$inputMiddleCatagories2          = $ctlHelper->getMiddleCategoriesName2			();
$inputMiddleCatagories3          = $ctlHelper->getMiddleCategoriesName3			();
$formEnd						 =$ctlHelper->getFormEnd();
?>

<div id="midcategory">
	<table>
	<tr>
		<td><h3> 中カテゴリ登録</h3> </td>

	</tr>
	<tr>
		<td> 大カテゴリ </td>     
		<td>
			<select class="datacategory" name="big_id" id="big_dropdown">
			<option value="">▼選択してください</option>
			</select>
		</td>   
		<td></td>
	</tr>
	<tr>
		<td> 中カテゴリ </td>     
		<td><?php echo $inputMiddleCatagories1;?></td>   
		<td></td>
	</tr>
	<tr>
		<td></td>     
		<td><?php echo $inputMiddleCatagories2;?></td>    
		<td></td>
	</tr>
	<tr>
		<td></td>     
		<td><?php echo $inputMiddleCatagories3;?></td>      
		<td><button type="button" class="middle_category" id="mid_category_insert" style="width:65px;height: 34px;background-color:#dcdcdc; ">登 録</button></td>		        
	</tr>
	<tr>
		<th></th><th></th><th></th>
	</tr>
	</table>
</div>

<script>(function($) {
	$("input[type=text]").val("");
	var elBigCat = '#big_dropdown';
	var elMidCategoryInsert = '#mid_category_insert';
	var elMidCategory		= '#midcategory';
	var url = '/BigCategoryCreates/big_category/';
	$(elBigCat).html('<option value="">検索中 ... </option>');
	$(elBigCat).load(url);
	
	$(elMidCategoryInsert).click(function(){
		var midcategory_val = {};
		var action = '/MidCategoryCreates/midcategoryinsert';
		var big_value =$('#big_dropdown').val();
		if(big_value){
			$(elMidCategory).find(':input[type!=button]').each(function() {  
				var mid_val = $(this).val();
				var mid_name = $(this).attr('name');
					midcategory_val[mid_name] = mid_val;
			});

			$.ajax({
				url: action,
				type: 'post',
				data: midcategory_val,
				dataType: 'html',
				success: function(d, t, x) { 
					$('#CategoriesCreateIndexForm').submit();
				},

				error: function(x, t, e) {
					alert('中カテゴリ名前は同じです。');
//					var tmp = location.href;
//					location.href = tmp;
				}

			});
		}
	});
})(jQuery);</script>
