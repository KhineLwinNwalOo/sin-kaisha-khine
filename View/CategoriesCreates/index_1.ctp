
 <!-- CategoriesCreates/index -->
<?php 
$ctlHelper	= $this->CategoriesCreate;
//if (!isset($dataPaginate))						throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);
if (!$ctlHelper instanceof CategoriesCreateHelper)	throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);

?>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<?php
// 検索フォーム
$formStart                      = $ctlHelper->getFormStart						();
$inputBigCatagories             = $ctlHelper->getBigCategoriesName				();
$BigCategoriesSubmit            = $ctlHelper->getBigCatSubmitConf				(); 

$inputMiddleCatagories1          = $ctlHelper->getMiddleCategoriesName1			();
$inputMiddleCatagories2          = $ctlHelper->getMiddleCategoriesName2			();
$inputMiddleCatagories3          = $ctlHelper->getMiddleCategoriesName3			();
$MiddleCategoriesSubmit          = $ctlHelper->getMiddleCatSubmitConf			();

$inputSmallCatagories1           = $ctlHelper->getSmallCategoriesName1            ();
$inputSmallCatagories2           = $ctlHelper->getSmallCategoriesName2            ();
$inputSmallCatagories3           = $ctlHelper->getSmallCategoriesName3            ();
$SmallCategoriesSubmit			 = $ctlHelper->getSmallCatSubmitConf				();

$inputContents1                  = $ctlHelper->getContentsCategoriesName1         ();
$inputContents2                  = $ctlHelper->getContentsCategoriesName2         ();
$inputContents3                  = $ctlHelper->getContentsCategoriesName3         ();
$inputContents4                  = $ctlHelper->getContentsCategoriesName4         ();
$inputContents5                  = $ctlHelper->getContentsCategoriesName5         ();
$inputContents6                  = $ctlHelper->getContentsCategoriesName6         ();
$inputContents7                  = $ctlHelper->getContentsCategoriesName7         ();
$inputContents8                  = $ctlHelper->getContentsCategoriesName8         ();
$inputContents9                  = $ctlHelper->getContentsCategoriesName9         ();
$inputContents10                 = $ctlHelper->getContentsCategoriesName10        ();
$ContentsCategoriesSubmit        = $ctlHelper->getContentsSubmitConf			  ();


$valueBigCatagories             = $ctlHelper->getvalueBigCategoriesName			();
$valueMiddleCatagories          = $ctlHelper->getvalueMiddleCategoriesName		();
$valueSmallCatagories           = $ctlHelper->getvalueSmallCategoriesName		();
$linkCategoriesSearch		    = $ctlHelper->getLinkCategoriesSearch			();
$linkCategoriesCreate		    = $ctlHelper->getLinkCategoriesCreate			();

$linkLogout			            = $ctlHelper->getLinkLogout		                 ();
$formEnd			            = $ctlHelper->getFormEnd                         ();

?>
 

<div class="form">
<h2>事業目的登録</h2>
<?php echo $formStart; ?>
<table cellpadding="0" cellspacing="0">
    <tr>
        <td><h3> 大カテゴリ登録 </h3></td>
    </tr>
    <tr>
            <td> 大カテゴリ </td>
            <td><?php echo $inputBigCatagories; ?></td>
            <td><button type="button" class="big_category" id="big_category_insert" style="width:65px;height: 34px;background-color:#dcdcdc; ">登 録</button></td>	
    </tr>
    <tr>
        <th></th><th></th><th></th>
    </tr>
</table>
	<div id="midcategory">
		<table>
		<tr>
			<td><h3> 中カテゴリ登録</h3> </td>

		</tr>
		<tr>
			<td> 大カテゴリ </td>     
			<td><?php echo $valueBigCatagories; ?></td>           	
		</tr>

		<tr>
			<td> 中カテゴリ </td>     
			<td><?php echo $inputMiddleCatagories1;?><!--<input type="text" value="" class="dynamic" name="midcategory"> --></td>           	
		</tr>
		<tr>
			<td></td>     
			<td><?php echo $inputMiddleCatagories2;?></td>           	
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
<div id="smallcategory">
<table>
    <tr>
        <td><h3>小カテゴリ登録</h3>  </td>          	
    </tr>
    <tr>
        <td>大カテゴリ </td>     
        <td><?php echo $valueBigCatagories ?></td>           	
    </tr>
    <tr>
        <td>中カテゴリ</td>     
        <td><?php echo $valueMiddleCatagories  ?></td>           	
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
<div id="contentsdata">
<table>
    <tr>
        <td><h3>事業目的登録</h3>  </td>          	
    </tr>
    <tr>
        <td>大カテゴリ  </td>     
        <td><?php echo $valueBigCatagories ?></td>           	
    </tr>
    <tr>
        <td>中カテゴリ</td>     
        <td><?php echo $valueMiddleCatagories ?></td>           	
    </tr>
    <tr>
        <td>小カテゴリ  </td>     
        <td><?php echo $valueSmallCatagories ?></td>      
               
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
</div>
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
                <td class="actions">アカウント管理</td>
            </tr>
            <tr>
                <td class="actions">アカウント登録</td>
            </tr>
            <tr>
		<th><?php echo $linkLogout; ?></th>
            </tr>
        </table>
</div> 
 
 <?php echo $formEnd; ?>
<script>(function($) {
		var elBigCat					= '#smallcategory :input[id=CategoriesCreateTblBigCategoryId]'; 
		var elMidCat					= '#smallcategory :input[id=CategoriesCreateTblMidCategoryId]';
		var elBigCategoryInsert			= '#big_category_insert';
		var elbigCategoryval			= '#CategoriesCreateBigcategoryName';
		var elMidCategoryInsert			= '#mid_category_insert';
		var elmidCategoryval			= '#CategoriesCreateMiddlecategoryName';
		var elMidCategory				= '#midcategory';	
		var elSmallCategoryInsert		= '#small_category_insert';
		var elSmallCategory				= '#smallcategory';	
		var elContentCategoryInsert		= '#Content_category_insert';
		var elContentCategory			= '#contentsdata';
		
		<?php /** big Category **/?>
		$(elBigCategoryInsert).click(function(){
			var bigcategory_val = {};	
			var action = $('.form').find('form').attr('action');
			var name=$(elbigCategoryval).attr('name');
			var big_name = $(elbigCategoryval).val();
			if (name) {
				bigcategory_val[name] = big_name;
			}
			
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


					var tmp = location.href;
					location.href = tmp;
				}
			
			});
		});
		<?php /** mid Category **/?>
		$(elBigCat).change(function(){
        var Bigid = $(this).val();
		alert(Bigid);
        if (Bigid) {
           // var url = '/CategoriesCreates/mid_category/' + escape(Bigid);
           // $(elMidCat).html('<option value="">検索中 ... </option>');
           // $(elMidCat).load(url);
            //$(elMinCat).html('<option value="">▼選択してください</option>');
        } else {
           // $(elMidCat).html('<option value="">▼選択してください</option>');
           // $(elMinCat).html('<option value="">▼選択してください</option>');
        }	
    });
   // $(elBigCat).change();
	
//	$(elMidCat).change(function(){
//        var Midid = $(this).val();
//        if (Midid) {
//            var url = '/CategoriesCreates/min_category/' + escape(Midid);
//           // $(elMinCat).html('<option value="">検索中 ... </option>');
//           // $(elMinCat).load(url);
//        } else {
//           // $(elMinCat).html('<option value="">▼選択してください</option>');
//        }	
//    });
   // $(elMidCat).change();
	
		$(elMidCategoryInsert).click(function(){
				var midcategory_val = {};
				var action = '/CategoriesCreates/test';
				$(elMidCategory).find(':input[type!=button]').each(function() {  
					var mid_val = $(this).val();
					var mid_name = $(this).attr('name');
					if (mid_val) {
						midcategory_val[mid_name] = mid_val;
						//alert(midcategory_val[mid_name]);
					}

				});
			
				$.ajax({
					url: action,
					type: 'post',
					data: midcategory_val,
					dataType: 'html',
					success: function(d, t, x) { 
						//$('#CategoriesCreateIndexForm').submit();
					},

					error: function(x, t, e) {
						alert('中カテゴリ名前は同じです。');


						var tmp = location.href;
						location.href = tmp;
					}

				});
		});
		
		<?php /** small Category **/?>
			
		$(elSmallCategoryInsert).click(function(){
			
			var smallcategory_val = {};
			var action = '/CategoriesCreates/smallcategoryinsert';
			$(elSmallCategory).find(':input[type!=button]').each(function() {  
			var small_val = $(this).val();
					var small_name = $(this).attr('name');
					if (small_val) {
						smallcategory_val[small_name] = small_val;
						alert(smallcategory_val[small_name]);
					}
			});
			
			$.ajax({
					url	: action,
					type: 'post',
					data: smallcategory_val,
					dataType: 'html',
					success: function(d, t, x) { 
						//$('#CategoriesCreateIndexForm').submit();
					},

					error: function(x, t, e) {
						alert('小カテゴリ名前は同じです。');

						var tmp = location.href;
						location.href = tmp;
					}

				});
			
			
		});
		
		$(elContentCategoryInsert).click(function(){
			alert('content insert');
			var contentcategory_val ={};
			var action = '/CategoriesCreates/contentcategoryinsert';
			$(elContentCategory).find(':input[type!=button]').each(function() {  
			var content_val = $(this).val();
					var content_name = $(this).attr('name');
					if (content_val) {
						contentcategory_val[content_name] = content_val;
						//alert(contentcategory_val[small_name]);
					}
			});
			
			$.ajax({
					url	: action,
					type: 'post',
					data: contentcategory_val,
					dataType: 'html',
					success: function(d, t, x) { 
						//$('#CategoriesCreateIndexForm').submit();
					},

					error: function(x, t, e) {
						alert('事業目的名前は同じです。');

						var tmp = location.href;
						location.href = tmp;
					}

				});
			
			
		});
		
			
 })(jQuery);
</script>