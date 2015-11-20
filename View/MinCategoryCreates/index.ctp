<?php 
$ctlHelper	= $this->MinCategoryCreate;

if (!$ctlHelper instanceof MinCategoryCreateHelper)	throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);

?>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style	type="text/css">
	.datacategory{width: 300px;height:20px;}
</style>

<?php
// 検索フォーム
$formStart                      = $ctlHelper->getFormStart						  ();
$inputSmallCatagories1           = $ctlHelper->getSmallCategoriesName1            ();
$inputSmallCatagories2           = $ctlHelper->getSmallCategoriesName2            ();
$inputSmallCatagories3           = $ctlHelper->getSmallCategoriesName3            ();
?>

<div id="smallcategory">
<table>
    <tr>
        <td><h3>小カテゴリ登録</h3>  </td>          	
    </tr>
    <tr>
        <td>大カテゴリ </td>     
        <td><select class="datacategory" name="big_id_1" id="big_dropdown_1">
			<option value="">▼選択してください</option>
		    </select></td>           	
    </tr>
    <tr>
        <td>中カテゴリ</td>     
        <td><select class="datacategory" name="mid_id" id="mid_dropdown_1">
			<option value="">▼選択してください</option>
		    </select></td>           	
    </tr>
    <tr>
        <td>小カテゴリ  </td>     
        <td><?php echo $inputSmallCatagories1; ?></td>      
               
    </tr>
    <tr>
        <td></td>     
        <td><?php echo $inputSmallCatagories2; ?></td>      
             
    </tr>
    <tr>
        <td></td>     
        <td><?php echo $inputSmallCatagories3; ?></td>      
        <td><button type="button" class="small_category" id="small_category_insert" style="width:65px;height: 34px;background-color:#dcdcdc; ">登 録</button></td>	        
    </tr>
    <tr>
        <th></th><th></th><th></th>
    </tr>
</table>
</div>

<script>(function($) {
	
	var elBigCat_1					= '#big_dropdown_1';
	var elMidCat_1					= '#mid_dropdown_1';
	var elSmallCategoryInsert		= '#small_category_insert';
	var elSmallCategory				= '#smallcategory';
	$("input[type=text]").val("");
	var elBigCat = '#big_dropdown';
	var url		= '/BigCategoryCreates/big_category/';
	$(elBigCat_1).html('<option value="">検索中 ... </option>');
	$(elBigCat_1).load(url);

	$(elBigCat_1).change(function(){
		var Bigid = $(this).val();
		if (Bigid) {
			var url = '/MidCategoryCreates/mid_category/' + escape(Bigid);
			$(elMidCat_1).html('<option value="">検索中 ... </option>');
			$(elMidCat_1).load(url);
		} else {
			$(elMidCat_1).html('<option value="">▼選択してください</option>');
		}	
	});
	$(elBigCat_1).change();

	$(elSmallCategoryInsert).click(function(){
		var mid_value =$('#mid_dropdown_1').val();
		if(mid_value){
			var smallcategory_val = {};
			var action = '/MinCategoryCreates/mincategoryinsert';
			$(elSmallCategory).find(':input[type!=button]').each(function() {  
				var small_val = $(this).val();
				var small_name = $(this).attr('name');
				smallcategory_val[small_name] = small_val;
			});

			$.ajax({
				url	: action,
				type: 'post',
				data: smallcategory_val,
				dataType: 'html',
				success: function(d, t, x) { 
					$('#CategoriesCreateIndexForm').submit();
				},

				error: function(x, t, e) {
					alert('小カテゴリ名前は同じです。');
//					var tmp = location.href;
//					location.href = tmp;
				}

			});
		}
	});
})(jQuery);
</script>