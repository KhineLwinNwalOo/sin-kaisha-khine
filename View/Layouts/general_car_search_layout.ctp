<?php

$view = $this;
$project = $view->Project;

if (!$auth instanceof AuthComponent)	throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);
if (!$project instanceof ProjectHelper)	throw new RuntimeException(__DIR__ . ':' . __FILE__ . ':' . __LINE__);

$auth instanceof AuthComponent;

$title = $project->getTitle();
$metaKeywords = $project->getMetaKeywords();
$metaDescription = $project->getMetaDescription();

$urlCommonsSellCarCounter = $project->getUrlCommonsSellCarCounter();

$linkSellGeneralCarListsIndex = $project->getLinkSellGeneralCarListsIndex();

?>
<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php echo $title; ?> 
		<?php echo $metaKeywords; ?> 
		<?php echo $metaDescription; ?> 
		
        <link href="/common/css/bootstrap.min.css" rel="stylesheet">
        <link href="/common/css/bootstrap-select.css" rel="stylesheet" />
        <link href="/common/css/jquery.bxslider.css" rel="stylesheet" />
        <link href="/common/css/jquery.loadprogress.css" rel="stylesheet" />
        <link href="/common/css/slidebars.min.css" rel="stylesheet" />
        <link href="/common/css/build.css" rel="stylesheet" />
        <link href="/common/css/style.css" rel="stylesheet" />
        <link href="/common/css/attachment.css" rel="stylesheet" />
        <link href="/common/css/general_serach.css" rel="stylesheet">
		
		
		<script src="/common/js/jquery11.min.js"></script>
		<script src="/common/js/imageLoading.js"></script>
		<script src="/common/js/bootstrap.min.js"></script> 
		<script src="/common/js/bootstrap-select.js"></script> 
		<script src="/common/js/jquery-scrollInTurn.js"></script> 
		<script src="/common/js/jquery.bxslider.min.js"></script> 
		<script src="/common/js/jquery.loadprogress.js"></script> 
		<script src="/common/js/slidebars.min.js"></script> 
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
		
</head>
<body>
<div id="sb-site">
  <div id="wrapper">
    <div id="utility">
	<?php if ($auth->loggedIn()) { ?>
	  <?php echo $view->element('after_login_header', compact('project')); ?>
	<?php } else { ?>
	  <?php echo $view->element('before_login_header', compact('project')); ?>
	<?php } ?>
    </div>
    <header>
      <div class="header-wrap">
        <div class="header-top container">
          <div class="logo col-lg-3 col-md-3 col-sm-3 col-xs-5"><a href="/"><img src="/images/logo.png" alt="caroll" ></a></div>
          <div class="counter col-lg-3 col-md-3 col-sm-3 col-xs-7"> 
				<span>-</span> <span>-</span> <span>-</span> <span>-</span> <span>-</span> <span>-</span>
				<p>Cars For Sale</p>
          </div>
		  <script>(function($){
				var url = '<?php echo $urlCommonsSellCarCounter; ?>';
				$('.counter').load(url);
			})(jQuery);</script>
          <nav>
            <div id="gnav" class="col-lg-6 col-md-6 col-sm-6">
              <div class="row">
 <!--               <div class="media-s">
                  <button type="button" class="btn btn-default sb-toggle-left"><span class="glyphicon glyphicon-search"></span></button>
                </div>-->
                <div class="media-l">
					<ul id="navi-ui">
					  <li class="col-lg-2 col-md-2 col-sm-2"><a href="/service/">Service</a></li>
					  <li class="col-lg-2 col-md-2 col-sm-2"><a href="/buying/">Buying</a></li>
					  <li class="col-lg-2 col-md-2 col-sm-2"><a href="/selling/">Selling</a></li>
					  <li class="col-lg-2 col-md-2 col-sm-2"><a href="/fee/">Fee</a></li>
					  <li class="col-lg-2 col-md-2 col-sm-2"><a href="/faq/">FAQ</a></li>
					  <li class="col-lg-2 col-md-2 col-sm-2"><a href="/contact/">Contact</a></li>
					</ul>
					<ul id="sub-navi-ui">
					   <li class="col-lg-12 col-md-12 col-sm-12">
					   <?php if ($auth->loggedIn()) { ?>
						   <?php echo $linkSellGeneralCarListsIndex; ?>
					   <?php } else { ?>
						   <a href="#top-login-menu" data-toggle="modal" class="btn btn-warning login-btn"><span class="glyphicon glyphicon-user"></span><?php echo h(__(' Login')); ?></a>
					   <?php } ?>
					   </li>
				   </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
      
    <?php echo $this->fetch('content'); ?>
      
   <footer id="footer">
      <div class="footer-warp container">
        <div class="footer-contents">
          <div class="row">
            <div class="col-lg-4">
              <h2>Top 10 <span>brands</span></h2>
              <ul class="col-lg-12">
                <li><a href="/list/">Toyota</a></li>
                <li><a href="/list/">Audi</a></li>
                <li><a href="/list/">Honda</a></li>
                <li><a href="/list/">Nissan</a></li>
                <li><a href="/list/">Suzuki</a></li>
                <li><a href="/list/">Ford</a></li>
                <li><a href="/list/">Hyundai</a></li>
                <li><a href="/list/">Mitsubishi</a></li>
                <li><a href="/list/">Land Rover</a></li>
                <li><a href="/list/">Chevrolet</a></li>
              </ul>
            </div>
            <div class="col-lg-4">
              <h2>Top 20 <span>models</span></h2>
              <ul class="col-lg-6">
                <li><a href="/list/">Honda Fit</a></li>
                <li><a href="/list/">Toyota Hilux</a></li>
                <li><a href="/list/">Toyota Land Cruiser</a></li>
                <li><a href="/list/">Toyota Mark II</a></li>
                <li><a href="/list/">Nissan Ad Van</a></li>
                <li><a href="/list/">Hyundai Starex</a></li>
                <li><a href="/list/">Suzuki Swift</a></li>
                <li><a href="/list/">Kia Pregio</a></li>
                <li><a href="/list/">Honda Civic</a></li>
                <li><a href="/list/">Mitsubishi Pajero</a></li>
                <li><a href="/list/">Toyota Fielder</a></li>
              </ul>
              <ul class="col-lg-6">
                <li><a href="/list/">Toyota Kluger</a></li>
                <li><a href="/list/">Toyota Crown</a></li>
                <li><a href="/list/">Toyota Corolla</a></li>
                <li><a href="/list/">Toyota Probox</a></li>
                <li><a href="/list/">Mazda Demio</a></li>
                <li><a href="/list/">Yamaha FZ</a></li>
                <li><a href="/list/">Yamaha FZ-S</a></li>
                <li><a href="/list/">Adixin Click-9</a></li>
                <li><a href="/list/">Honda Scoopy</a></li>
              </ul>
            </div>
            <div class="col-lg-4">
              <h2>Top 6 <span>locations</span></h2>
              <ul class="col-lg-12">
                <li><a href="/list/">Yangon</a></li>
                <li><a href="/list/">Mandalay</a></li>
                <li><a href="/list/">Nay Pyi Taw City</a></li>
                <li><a href="/list/">Bago</a></li>
                <li><a href="/list/">Sagaing</a></li>
                <li><a href="/list/">Taung Gyi</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <a href="#" id="page-top"><span class="glyphicon glyphicon-circle-arrow-up"></span></a>
      <div class="credits">
        <div class="container"> © 2015 by CAROLL. </div>
      </div>
      <!-- Modal -->
      <div id="register-menu" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <!-- closeボタン -->
              <h4 class="modal-title">Register</h4>
            </div>
            <div class="modal-body">
              <div class="form-box">
                <div class="top-label">
                  <h4>Create your Account</h4>
                </div>
                <div class="login-form">
                  <form>
                    <div class="field-row">
                      <label class="field iconified">
                        <input type="text" placeholder="Your Email Address">
                      </label>
                    </div>
                    <div class="field-row">
                      <label class="field iconified">
                        <input type="password" placeholder="Your Password">
                      </label>
                    </div>
                    <div class="forget"><a href="login.html">Already a member?</a></div>
                    <div class="fixed-section">
                      <div class="confirm-btn">
                        <button class="btn-mod btn-2 btn-2d">Register</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Cansel</button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.modal --> 
      <!-- Modal -->
      <div id="login-menu" class="modal fade">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <!-- closeボタン -->
              <h4 class="modal-title">Login</h4>
            </div>
            <div class="modal-body">
              <div class="form-box">
                <div class="top-label">
                  <h4>Login</h4>
                </div>
                <div class="login-form">
                  <form>
                    <div class="field-row">
                      <label class="field iconified">
                        <input type="text" placeholder="Account">
                      </label>
                    </div>
                    <div class="field-row">
                      <label class="field iconified">
                        <input type="password" placeholder="Password">
                      </label>
                    </div>
                    <div class="forget"><a href="#">Forgot your login details?</a></div>
                    <div class="fixed-section">
                      <div class="confirm-btn">
                        <button class="btn-mod btn-2 btn-2d">Login</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-dismiss="modal">Cansel</button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.modal --> 
    </footer>
  </div>
</div>
 <div class="sb-slidebar sb-right sb-style-overlay">
  <div class="scroll-block">
    <div class="top-label">
      <h4>Ask about this vehicle</h4>
    </div>
    <div class="contact-form">
      <form>
        <div class="field-row">
          <label class="field iconified">
            <input name="data[CarDetail][name]" maxlength="200" required="required" placeholder="Your name" type="text" id="CarDetailName" class="form-control">
          </label>
        </div>
        <div class="field-row">
          <label class="field iconified">
            <input name="data[CarDetail][mail]" maxlength="200" required="required" placeholder="Email" type="text" id="CarDetailMail" class="form-control">
          </label>
        </div>
        <div class="field-row">
          <label class="field iconified">
            <input name="data[CarDetail][mail_conf]" maxlength="200" required="required" placeholder="Email Confirmation" type="text" id="CarDetailMailConf" class="form-control">
          </label>
        </div>
        <div class="field-row">
          <label class="field iconified">
            <input name="data[CarDetail][phone]" maxlength="200" required="required" placeholder="Phone" type="text" id="CarDetailPhone" class="form-control">
          </label>
        </div>
        <div class="field-row">
          <label class="field iconified">
            <textarea name="data[CarDetail][comments]" required="required" placeholder="Comments" cols="30" rows="6" id="CarDetailComments" class="form-control"></textarea>
          </label>
        </div>
        <div class="fixed-section">
          <div class="confirm-btn">
            <button class="btn-mod btn-2 btn-2d">Enquiry Confirmation</button>
          </div>
        </div>
        <div style="display:none;">
          <input type="hidden" name="data[_Token][fields]" value="ac313854ac87c0304a223d76cddc3f6ce85756a8%3ACarDetail.tbl_car_id" id="TokenFields2022673548">
          <input type="hidden" name="data[_Token][unlocked]" value="" id="TokenUnlocked1509860791">
        </div>
      </form>
    </div>
    <div class="car-style-size">
      <h2><a href="/detail/">TOYOTA ALTEZZA 2015</a></h2>
      <div class="car-icon"><img src="/images/sample/01.jpg" alt=""></div>
      <div class="car-main">
        <ul class="car-spec">
          <li class="col-lg-6"><span class="glyphicon glyphicon-tasks"></span> MILEAGE</li>
          <li class="col-lg-6"><span class="glyphicon glyphicon-adjust"></span> TRANS</li>
          <li class="col-lg-6"><span class="glyphicon glyphicon-cog"></span> DRIVE</li>
          <li class="col-lg-6"><span class="glyphicon glyphicon-tint"></span> Fuel</li>
        </ul>
        <p>Blue BMW 530i 2001 for sale. Please note that the shown price does not include the price of the slip. The comfort features include A/C...</p>
      </div>
      <div class="car-content">
        <div class="car-price"><a href="/detail/" class="t-price">100 Lakh</a></div>
        <ul class="car-make">
          <li>Modified at <span class="glyphicon glyphicon-time"></span> 21-Apr-2015 10:43 AM</li>
          <li><span class="glyphicon glyphicon-exclamation-sign"></span> Dealer</li>
          <li><span class="glyphicon glyphicon-map-marker"></span> Yangon</li>
          <li class="certified"><span class="glyphicon glyphicon-check"></span> Certified dealer</li>
        </ul>
      </div>
    </div>
  </div>
</div>	
<?php if ($auth->loggedIn()) { ?>
	<?php echo $view->element('after_login_modal', compact('project')); ?>
<?php } else { ?>
	<?php echo $view->element('before_login_modal', compact('project')); ?>
<?php } ?>
<?php echo $this->element('sql_dump'); ?>
<script>
 $(document).ready(function(){
  $('.bxslider03').bxSlider({
    pager: true,
    speed: 1000,
    pause:  4000
  });
});
</script> 
</body>
</html>
