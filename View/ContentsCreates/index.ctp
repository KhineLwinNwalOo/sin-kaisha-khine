<?php 
$ctlHelper	= $this->ContentsCreate;

if (!$ctlHelper instanceof ContentsCreateHelper)	throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);

?>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style	type="text/css">
	.datacategory{width: 300px;height:20px;}
</style>

<?php
// 検索フォーム
$formStart			= $ctlHelper->getFormStart					();
$inputContents1		= $ctlHelper->getContentsCategoriesName1	();
$inputContents2		= $ctlHelper->getContentsCategoriesName2	();
$inputContents3		= $ctlHelper->getContentsCategoriesName3	();
$inputContents4		= $ctlHelper->getContentsCategoriesName4	();
$inputContents5		= $ctlHelper->getContentsCategoriesName5	();
$inputContents6		= $ctlHelper->getContentsCategoriesName6	();
$inputContents7		= $ctlHelper->getContentsCategoriesName7	();
$inputContents8		= $ctlHelper->getContentsCategoriesName8	();
$inputContents9		= $ctlHelper->getContentsCategoriesName9	();
$inputContents10	= $ctlHelper->getContentsCategoriesName10	();
?>
<div id="contentsdata">
<table>
    <tr>
        <td><h3>事業目的登録</h3>  </td>          	
    </tr>
    <tr>
        <td>大カテゴリ  </td>     
        <td><select class="datacategory" name="big_id_2" id="big_dropdown_2">
			<option value="">▼選択してください</option>
		    </select></td>           	
    </tr>
    <tr>
        <td>中カテゴリ</td>     
        <td><select class="datacategory" name="mid_id" id="mid_dropdown_2">
			<option value="">▼選択してください</option>
		    </select></td>           	
    </tr>
    <tr>
        <td>小カテゴリ  </td>     
        <td><select class="datacategory" name="min_id" id="min_dropdown_2">
			<option value="">▼選択してください</option>
		    </select></td>      
               
    </tr>
    <tr>
        <td>事業目的</td>     
        <td><?php echo $inputContents1; ?></td>      
             
    </tr>
    <tr>
        <td></td>    
        <td><?php echo $inputContents2; ?></td>      
             
    </tr>
     <tr>
        <td></td>         
        <td><?php echo $inputContents3; ?></td>      
             
    </tr>
     <tr>
        <td></td>         
        <td><?php echo $inputContents4; ?></td>      
             
    </tr>
     <tr>
        <td></td>        
        <td><?php echo $inputContents5; ?></td>      
             
    </tr>
     <tr>
       <td></td>     
        <td><?php echo $inputContents6; ?></td>      
             
    </tr>
     <tr>
        <td></td>        
        <td><?php echo $inputContents7; ?></td>      
             
    </tr>
     <tr>
        <td></td>         
        <td><?php echo $inputContents8; ?></td>      
             
    </tr>
     <tr>
       <td></td>         
        <td><?php echo $inputContents9; ?></td>      
             
    </tr>
    <tr>
        <td></td>        
        <td><?php echo $inputContents10; ?></td>      
        <td><button type="button" class="content_category" id="Content_category_insert" style="width:65px;height: 34px;background-color:#dcdcdc; ">登 録</button></td></td>	        
    </tr>   
    <tr>
        <th></th><th></th><th></th>
    </tr> 
</table>
</div>
<script>(function($) {
		
	var elBigCat_2					= '#big_dropdown_2';
	var elMidCat_2					= '#mid_dropdown_2';
	var elMinCat_2					= '#min_dropdown_2';	
	var elContentCategoryInsert		= '#Content_category_insert';
	var elContentCategory			= '#contentsdata';
	$("input[type=text]").val("");

	var url		= '/BigCategoryCreates/big_category/';
	$(elBigCat_2).html('<option value="">検索中 ... </option>');
	$(elBigCat_2).load(url);


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
	
	$(elBigCat_2).change();

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
	
    $(elMidCat_2).change();
		
		<?php /** small Category **/?>		
	$(elContentCategoryInsert).click(function(){
		var contents_val = $('#min_dropdown_2').val();
		if(contents_val){
			var contentcategory_val ={};
			var action = '/ContentsCreates/contentcategoryinsert';
			$(elContentCategory).find(':input[type!=button]').each(function() {  
				var content_val = $(this).val();
				var content_name = $(this).attr('name');
				contentcategory_val[content_name] = content_val;
			});

			$.ajax({
				url	: action,
				type: 'post',
				data: contentcategory_val,
				dataType: 'html',
				success: function(d, t, x) { 
					$('#CategoriesCreateIndexForm').submit();
				},

				error: function(x, t, e) {
					alert('事業目的名前は同じです。');
					//var tmp = location.href;
					//location.href = tmp;
				}

			});
		}
	});			
 })(jQuery);
</script>
