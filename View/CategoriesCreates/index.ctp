
 <!-- CategoriesCreates/index -->
<?php 
$ctlHelper	= $this->CategoriesCreate;
//if (!isset($dataPaginate))						throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);
if (!$ctlHelper instanceof CategoriesCreateHelper)	throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);

?>

<style	type="text/css">
	.datacategory{width: 300px;height:20px;}
</style>
<?php
// 検索フォーム
$formStart                      = $ctlHelper->getFormStart						();
$LinkAccountCreate				= $ctlHelper->getLinkAccountCreate				();
$LinkAccountList     			= $ctlHelper->getLinkAccountList				();
$linkCategoriesSearch		    = $ctlHelper->getLinkCategoriesSearch			();
$linkCategoriesCreate		    = $ctlHelper->getLinkCategoriesCreate			();
$linkCategoriesEdit				= $ctlHelper->getLinkCategoriesEditButtom		();
$linkLogout			            = $ctlHelper->getLinkLogout		                ();
$formEnd			            = $ctlHelper->getFormEnd                        ();

?>
<div class="form">
	<h2>事業目的登録</h2>
	<?php echo $formStart; ?>
	<div id="bigcategory"></div>
	<div id="midcategory"></div>
	<div id="mincategory"></div>
	<div id="contentsdata"></div>
	<script>(function($) {
		$('#bigcategory').load('/BigCategoryCreates/index');
		$('#midcategory').load('/MidCategoryCreates/index');
		$('#mincategory').load('/MinCategoryCreates/index');
		$('#contentsdata').load('/ContentsCreates/index');
	})(jQuery);</script>
	
	
</div>
<div class="actions">
	<h3>操作</h3>
	<ul>
		<li><?php echo $linkCategoriesSearch; ?></li>
	</ul>
</div>

 
 <?php echo $formEnd; ?>
<script>(function($) {
		var elBigCat					= '#big_dropdown';
		var elBigCat_1					= '#big_dropdown_1';
		var elMidCat_1					= '#mid_dropdown_1';
		
		var elBigCat_2					= '#big_dropdown_2';
		var elMidCat_2					= '#mid_dropdown_2';
		
		var elMinCat_2					= '#min_dropdown_2';
		var elBigCategoryInsert			= '#big_category_insert';
		var elbigCategoryval			= '#CategoriesCreateBigcategoryName';
		
		$("input[type=text]").val("");
		var url = '/CategoriesCreates/big_category/';
		$(elBigCat).html('<option value="">検索中 ... </option>');
		$(elBigCat).load(url);
		$(elBigCat_1).load(url);
		$(elBigCat_2).load(url);
		
		$(elBigCat_1).change(function(){
			var Bigid = $(this).val();
			if (Bigid) {
				var url = '/CategoriesCreates/mid_category/' + escape(Bigid);
				$(elMidCat_1).html('<option value="">検索中 ... </option>');
				$(elMidCat_1).load(url);
			} else {
				$(elMidCat_1).html('<option value="">▼選択してください</option>');
			}	
		});
		$(elBigCat_1).change();
		
		
		$(elBigCat_2).change(function(){
			var Bigid = $(this).val();
			if (Bigid) {
				var url = '/CategoriesCreates/mid_category/' + escape(Bigid);
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
            var url = '/CategoriesCreates/min_category/' + escape(Midid);
            $(elMinCat_2).html('<option value="">検索中 ... </option>');
            $(elMinCat_2).load(url);
        } else {
            $(elMinCat_2).html('<option value="">▼選択してください</option>');
        }	
    });
    $(elMidCat_2).change();	
 })(jQuery);
</script>