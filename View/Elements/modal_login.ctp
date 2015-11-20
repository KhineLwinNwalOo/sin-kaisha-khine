<!-- Elements/modal_login -->
<?php
$view	= $this;
$helper = $project;

if (!$helper instanceof ProjectHelper)	throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);

$urlMainsAjaxLogin = $helper->getUrlMainsAjaxLogin();

/**/
?>
<div id="top-login-menu" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<!-- closeボタン -->
				<h4 class="modal-title"><?php echo h(__('Login')); ?></h4>
			</div>
			<div class="modal-body">
				<div class="form-box">
					<div class="login-form"></div>
					<script>(function($){
						var url = '<?php echo $urlMainsAjaxLogin; ?>';
						$('#top-login-menu div.login-form').load(url);
					})(jQuery);</script>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="sysSubmit btn btn-primary">　Login　</button>
				<button type="button" class="btn" data-dismiss="modal">Cansel</button>
			</div>
			<script>(function($){
				var elButton = '#top-login-menu .sysSubmit';
				var elForm = '#top-login-menu form';
				
				$(elButton).click(function(){
					var url = $(elForm).attr('action');
					var data = {};
					
					$(elForm).find(':input[name]').each(function(){
						var name = $(this).attr('name');
						var val = $(this).val();
						data[name] = val;
					});
				
					$.ajax({
						url: url,
						type: 'post',
						data: data,
						dataType: 'html',
						beforeSend: function(x) {
							$(elButton).attr('disabled', 'disabled');
							$(elButton).css({opacity: 0.5});
						},
						error: function(x, t, e) {
							alert('System Error');
							var tmp = location.href;
							location.href = tmp;
						},
						success: function(d, t, x) {
							$(elForm).parent().html(d);
							$(elButton).attr('disabled', null);
							$(elButton).css({opacity: 1});
						}
					});
				});
			})(jQuery);</script>
		</div>
	</div>
</div>
<style>
	#top-login-menu .login-form table {
		margin-left: 280px;
	}
	
	#top-login-menu .login-form table th {
		width: 100px;
	}
	
	#top-login-menu .login-form .message {
		color: red;
	}
</style>