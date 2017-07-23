<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
    <!-- 语言为中文 -->
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width, initial-scale=1.0" name="viewport">
                    <title>
                        MIFOOD-home
                    </title>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="text/javascript" src="/MIFOOD2/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/MIFOOD2/Public/js/ajax.js"></script>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link rel="stylesheet" type="text/css" href="/MIFOOD2/Public/css/ajax.css" />
<link href="/MIFOOD2/Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="/MIFOOD2/Public/css/jquery-ui.css" />
<link href="/MIFOOD2/Public/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<link href="/MIFOOD2/Public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="/MIFOOD2/Public/css/leftlunbo.css" rel="stylesheet" type="text/css"  />
<!-- js -->
<script type="text/javascript" src="/MIFOOD2/Public/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/MIFOOD2/Public/js/numscroller-1.0.js"></script>


<!-- //js -->


<!-- fonts -->
<link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Viga' rel='stylesheet' type='text/css'>

	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="/MIFOOD2/Public/js/move-top.js"></script>
		<script type="text/javascript" src="/MIFOOD2/Public/js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->

<!--start-date-piker-->
	<script src="/MIFOOD2/Public/js/jquery-ui.js"></script>
		<script>
			$(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
			});
		</script>
<!--/End-date-piker-->
	<script src="/MIFOOD2/Public/js/responsiveslides.min.js"></script>
			<!--animate-->
<link href="/MIFOOD2/Public/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="/MIFOOD2/Public/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>

<!--//end-animate-->
<!--  <script type="text/javascript" src="/MIFOOD2/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/MIFOOD2/Public/js/ajax.js"></script> -->
</head>
<body>
<!-- header -->
<div class="header wow zoomIn">
	<div class="container">
		<div class="header_left" data-wow-duration="2s" data-wow-delay="0.5s">
			<ul>
				<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+123 456 7890</li>
				<li><a href=""><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>mifood@example.com</a></li>
			</ul>
		</div>
<div class="header_center">
		  <div class="location">
		     <ul>
		       <li><img src="/MIFOOD2/Public/images/location.png" /></li>
		       <li><span>长沙</span></li>
		       <li><button class="btn btn-sm" data-toggle="modal" data-target="#myModal3" id="header-btn">
	【切换城市】
</button></li>
		     </ul>
		  </div>
	</div>
		<!-- login -->
			<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
						   <form class="form-inline">
      <div data-toggle="distpicker">
        <div class="form-group" id="header_option">
          <label class="sr-only" for="province1">Province</label>
          <select class="form-control" id="province1"><option value="" data-code="">—— 省 ——</option><option value="湖南省" data-code="430000" selected="">湖南省</option><option value="北京市" data-code="110000" >北京市</option>
          <option value="天津市" data-code="120000">天津市</option><option value="河北省" data-code="130000">河北省</option>
          <option value="山西省" data-code="140000">山西省</option><option value="内蒙古自治区" data-code="150000">内蒙古自治区</option>
          <option value="辽宁省" data-code="210000">辽宁省</option><option value="吉林省" data-code="220000">吉林省</option>
          <option value="黑龙江省" data-code="230000">黑龙江省</option><option value="上海市" data-code="310000">上海市</option>
          <option value="江苏省" data-code="320000">江苏省</option><option value="浙江省" data-code="330000">浙江省</option>
          <option value="安徽省" data-code="340000">安徽省</option><option value="福建省" data-code="350000">福建省</option>
          <option value="江西省" data-code="360000">江西省</option><option value="山东省" data-code="370000">山东省</option>
          <option value="河南省" data-code="410000">河南省</option><option value="湖北省" data-code="420000">湖北省</option>
          <option value="广东省" data-code="440000">广东省</option><option value="广西壮族自治区" data-code="450000">广西壮族自治区</option><option value="海南省" data-code="460000">海南省</option><option value="重庆市" data-code="500000">重庆市</option><option value="四川省" data-code="510000">四川省</option><option value="贵州省" data-code="520000">贵州省</option><option value="云南省" data-code="530000">云南省</option><option value="西藏自治区" data-code="540000">西藏自治区</option><option value="陕西省" data-code="610000">陕西省</option><option value="甘肃省" data-code="620000">甘肃省</option><option value="青海省" data-code="630000">青海省</option><option value="宁夏回族自治区" data-code="640000">宁夏回族自治区</option><option value="新疆维吾尔自治区" data-code="650000">新疆维吾尔自治区</option><option value="台湾省" data-code="710000">台湾省</option><option value="香港特别行政区" data-code="810000">香港特别行政区</option><option value="澳门特别行政区" data-code="820000">澳门特别行政区</option></select>
        </div>
        <div class="form-group" id="header_option">
          <label class="sr-only" for="city1">City</label>
          <select class="form-control" id="city1"><option value="" data-code="">—— 市 ——</option><option value="长沙市" data-code="430100" selected="">长沙市</option></select>
        </div>
        <div class="form-group" id="header_option">
          <label class="sr-only" for="district1">District</label>
          <select class="form-control" id="district1"><option value="" data-code="">—— 区 ——</option><option value="芙蓉区" data-code="430102" selected="">芙蓉区</option><option value="西城区" data-code="110102">西城区</option><option value="朝阳区" data-code="110105">朝阳区</option><option value="丰台区" data-code="110106">丰台区</option><option value="石景山区" data-code="110107">石景山区</option><option value="海淀区" data-code="110108">海淀区</option><option value="门头沟区" data-code="110109">门头沟区</option><option value="房山区" data-code="110111">房山区</option><option value="通州区" data-code="110112">通州区</option><option value="顺义区" data-code="110113">顺义区</option><option value="昌平区" data-code="110114">昌平区</option><option value="大兴区" data-code="110115">大兴区</option><option value="怀柔区" data-code="110116">怀柔区</option><option value="平谷区" data-code="110117">平谷区</option><option value="密云区" data-code="110118">密云区</option><option value="延庆区" data-code="110119">延庆区</option></select>
        </div>
      </div>
    </form> 

						</div>
									<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭
				</button>
				<button type="button" class="btn btn-primary">
					提交更改
				</button>
			</div>
					</div>
				</div>
	</div>
		<div class="header_right">
			<div class="login">
				<ul>
				<?php if($_SESSION['user'] == '' ): ?><li><a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>登录</a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal5"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>注册</a></li>
					 <?php else: ?>
					<li><a href="/MIFOOD2/index.php/Home/Index/user" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span><?php echo ($_SESSION['user']); ?></a></li>
					<li><a href="/MIFOOD2/index.php/Home/Index/log_out"><span class=" glyphicon" aria-hidden="true"></span>退出</a></li><?php endif; ?><li>
						<div class="search-bar">
							<div class="search">		
								<a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
							</div>
							<script src="/MIFOOD2/Public/js/jquery.magnific-popup.js" type="text/javascript"></script>
								<div id="small-dialog" class="mfp-hide">
									<div class="search-top">
										<div class="login_pop">
											<form action="<?php echo U('Index/search');?>" method="get">
												<input type="submit" value="">
												<input type="text" name="search" value="搜索你喜欢的……" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = '';}">
											</form>
										</div>				
									</div>
									<script>
												$(document).ready(function() {
												$('.popup-with-zoom-anim').magnificPopup({
													type: 'inline',
													fixedContentPos: false,
													fixedBgPos: true,
													overflowY: 'auto',
													closeBtnInside: true,
													preloader: false,
													midClick: true,
													removalDelay: 300,
													mainClass: 'my-mfp-zoom-in'
												});
																												
												});
									</script>				
								</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header -->
<div class="header-bottom ">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo grid">
						<div class="grid__item color-3">
							<h1><a class="link link--nukun" href="index.html"><i></i>MI<span>F</span>OOD</a></h1>
						</div>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--horatio">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="/MIFOOD2/index.php/Home/Index/index" class="menu__link">首页</a></li>
							<li class="menu__item"><a href="/MIFOOD2/index.php/Home/Index/top" class="menu__link">Top系列</a></li> 
							<li class="menu__item"><a href="__
							/classify" class="menu__link">分类</a></li> 
							<li class="menu__item"><a href="/MIFOOD2/index.php/Home/Index/gallery" class="menu__link">写食派</a></li> 
				<!-- 			<li class="menu__item"><a href="contact.html" class="menu__link">联系我们</a></li> -->
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>

<!-- banner -->
<div class="banner">

				<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
				</script>
		<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider3">
				<li>
					<div class="banner1">
						<div class="container">
							<div class="banner-info">
								<h3>味致浓时是故乡<span>Mifood带你找回家的味道 </span> 
								<p>所有的乡愁都是因为，我饿了</p>
								<!-- <a href="top.html" class="hvr-outline-out button2 scroll">怀乡吃</a> -->
							</div>
						</div>
					</div>
				</li> 
				<li>
					<div class="banner2">
						<div class="container">
							<div class="banner-info">
								<h3>唯有爱和美食不可辜负<span> 好的美食在于寻找</span></h3>
								<p>是谁来自山川湖海，却囿于昼夜</p>
								<!-- <a href="top.html" class="hvr-outline-out button2 scroll">寻找吃</a> -->
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner3">
						<div class="container">
							<div class="banner-info">
								<h3>吃是最好的安慰<span> 或是和你    或是和她/他</h3>
								<p>每时每刻，都有一道唤醒回忆的菜</p>
								<!-- <a href="top.html" class="hvr-outline-out button2 scroll">回忆吃</a> -->
							</div>
						</div>
					</div>
				</li> 
				<li>
					<div class="banner4">
						<div class="container">
							<div class="banner-info">
								<h3>好好吃饭用心生活，比什么都幸福<span>谁没在寒风中等过那顿路边摊？</span></h3>
								<p>好的事物包含着温情与良心</p>
					<!-- 			<a href="top.html" class="hvr-outline-out button2 scroll">幸福吃</a> -->
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="clearfix"></div>
</div>
<!-- //banner -->
    <section id="news">
    <div class="container">
      <div class="col-md-12 text-center">
        <div class="inner clearfix" id="new-top">
    
        	<h3><img src="/MIFOOD2/Public/images/h3_top02.png" width="134" height="50" alt="更新情報"></h3>
        	</div>
            
            <div class="wrapper_news clearfix">
            
                <div class="list_box info wow fadeInUp animated" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                    <h4><span>甜点饮品</span></h4>
                    <ul>
               <?php if(is_array($sumLoves)): $i = 0; $__LIST__ = array_slice($sumLoves,0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i;?><li class="clearfix">
			    <div class="mask"><span class="cross"></span></div>   
			    <p>
			    <img width="160" height="160" src="http://localhost/MIFOOD/Application/Common/Common/function1.php?url=<?php echo ($new['shop_img']); ?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt="">			    </p>
                			    <div class="txt">
                                <span><?php echo ($new['shop_name']); ?></span>
                                <h5><?php echo ($new['address']); ?></h5>
                            </div>
			   <a href="/MIFOOD2/index.php/Home/Index/details/shop_id/<?php echo ($new['shop_id']); ?>"></a>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>                   
                    </ul>
                </div><!--list_blog-->
                <div class="list_box shina wow fadeInUp animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <h4><span>火锅</span></h4>
                      <ul>
                      
              <?php if(is_array($sumLoves)): $i = 0; $__LIST__ = array_slice($sumLoves,3,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i;?><li class="clearfix">
			    <div class="mask"><span class="cross"></span></div>   
			    <p>
			    <img width="160" height="160" src="http://localhost/MIFOOD/Application/Common/Common/function1.php?url=<?php echo ($new['shop_img']); ?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt="">			    </p>
                			    <div class="txt">
                                <span><?php echo ($new['shop_name']); ?></span>
                                <h5><?php echo ($new['address']); ?></h5>
                            </div>
			   <a href="/MIFOOD2/index.php/Home/Index/details/shop_id/<?php echo ($new['shop_id']); ?>"></a>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>                   
                    </ul>
			</div>
			<!--list_blog-->
                
                
                <div class="list_box event wow fadeInUp animated" data-wow-delay="0.75s" style="visibility: visible; animation-delay: 0.75s; animation-name: fadeInUp;">
                    <h4><span>西餐</span></h4>
                    <ul>			                        
<?php if(is_array($sumLoves)): $i = 0; $__LIST__ = array_slice($sumLoves,6,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i;?><li class="clearfix">
			    <div class="mask"><span class="cross"></span></div>   
			    <p>
			    <img width="160" height="160" src="http://localhost/MIFOOD/Application/Common/Common/function1.php?url=<?php echo ($new['shop_img']); ?>" class="attachment-thumbnail size-thumbnail wp-post-image" alt="">			    </p>
                			    <div class="txt">
                                <span><?php echo ($new['shop_name']); ?></span>
                                <h5><?php echo ($new['address']); ?></h5>
                            </div>
			    <a href="/MIFOOD2/index.php/Home/Index/details/shop_id/<?php echo ($new['shop_id']); ?>"></a>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?> 
                    </ul>
                </div><!--list_blog-->
        
        	</div><!--wrapper_news-->
            
            <div class="col-md-12 col-sm-12" id="news-btn" data-wow-delay="0.5s" >
               <a href="/MIFOOD2/index.php/Home/Index/top"><button>浏 览 更 多</button></a>
            </div>
    	</div><!--innner-->
    	</div>
    </section><!--news--> 
	
	<!-- special -->
	<div class="special">
		<div class="container">
		<div class="col-md-12" >
			<div class="services-info">
				<h3><img src="/MIFOOD2/Public/images/new.png" />今日新品</h3>
			</div>
			</div>
			<div class="special-grids">
				<div class="col-md-6 w3l-special-grid">
					<div class="col-md-6 w3ls-special-img">
						<div class="wpf-demo-6">
							<div class="w3ls-special-text">
								<p><sub>$</sub>125</p>
							</div>
							<figcaption class="view-caption">
								<h4><?php echo ($timeShops[0]['shop_name']); ?></h4> 
								<a href="/MIFOOD2/index.php/Home/Index/details/shop_id/<?php echo ($timeShops[0]['shop_id']); ?>">搜索</a>
							</figcaption>
						</div>
					</div>
					<div class="col-md-6 agileits-special-info">
						<h4>乐享美味，西餐、中餐……</h4>
						<p><?php echo ($timeShops[0]['address']); ?></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 w3l-special-grid">
					<div class="col-md-6 w3ls-special-img wthree-img">
						<div class="wpf-demo-6">
							<div class="w3ls-special-text">
								<p><sub>$</sub>130</p>
							</div>
							<figcaption class="view-caption">
								<h4><?php echo ($timeShops[1]['shop_name']); ?> </h4> 
								<a href="/MIFOOD2/index.php/Home/Index/details/shop_id/<?php echo ($timeShops[1]['shop_id']); ?>">搜索</a>
							</figcaption>
						</div>
					</div>
					<div class="col-md-6 agileits-special-info">
						<h4>推荐：老坛剁椒鱼头王</h4>
						<p><?php echo ($timeShops[1]['address']); ?></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 w3l-special-grid">
					<div class="col-md-6 agileits-special-info">
						<h4>特色菜：黄焖荷花鱼</h4>
						<p>价格优惠，口味特么好</p>
					</div>
					<div class="col-md-6 w3ls-special-img wthree-img2">
						<div class="wpf-demo-6">
							<div class="w3ls-special-text">
								<p><sub>$</sub>190</p>
							</div>
							<figcaption class="view-caption">
								<h4><?php echo ($timeShops[2]['shop_name']); ?></h4> 
								<a href="/MIFOOD2/index.php/Home/Index/details/shop_id/<?php echo ($timeShops[2]['shop_id']); ?>">搜索</a>
							</figcaption>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 w3l-special-grid">
					<div class="col-md-6 agileits-special-info">
						<h4>推荐：老坛剁椒鱼头王</h4>
						<p><?php echo ($timeShops[2]['address']); ?></p>
					</div>
					<div class="col-md-6 w3ls-special-img wthree-img3">
						<div class="wpf-demo-6">
							<div class="w3ls-special-text">
								<p><sub>$</sub>105</p>
							</div>
							<figcaption class="view-caption">
								<h4><?php echo ($timeShops[3]['shop_name']); ?></h4> 
								<a href="/MIFOOD2/index.php/Home/Index/details/shop_id/<?php echo ($timeShops[3]['shop_id']); ?>">搜索</a>
							</figcaption>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
		</div>
	</div>
	</div>
<!-- contact -->
     	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="agile-footer-grids">
				<div class="col-md-4 agile-footer-grid">
					<h4> 关于我们</h4>
					<p>  经验交流</p>
					<h5> 外卖分析<h5>
				</div>
				<div class="col-md-4 agile-footer-grid">
					<h4>友情链接</h4>
					<ul class="float">
                        <li>
                            <a href="http://www.ttmeishi.com/">
                                天天美食
                            </a>
                        </li>
                        <li>
                            <a href="http://www.ttmeishi.com/">
                                口碑外卖
                            </a>
                        </li>
                        <li>
                            <a href="http://www.ttmeishi.com/">
                                易淘食
                            </a>
                        </li>
                    </ul>
                    <ul class="float">
                        <li>
                            <a href="http://www.ttmeishi.com/">
                                大众点评
                            </a>
                        </li>
                        <li>
                            <a href="http://www.ttmeishi.com/">
                                饿了吗
                            </a>
                        </li>
                        <li>
                            <a href="http://www.ttmeishi.com/">
                                美团外卖
                            </a>
                        </li>
                    </ul>
				</div>
				<div class="col-md-4 agile-footer-grid">
					<h4>热门主题</h4>
					<div class="popular-grids">
						<div class="popular-grid">
							<a href="top.html"><img src="/MIFOOD2/Public/images/s1.jpg" alt="" /></a>
						</div>
						<div class="popular-grid">
							<a href="top.htmll"><img src="/MIFOOD2/Public/images/s2.jpg" alt="" /></a>
						</div>
						<div class="popular-grid">
							<a href="top.html"><img src="/MIFOOD2/Public/images/s3.jpg" alt="" /></a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="popular-grids">
						<div class="popular-grid">
							<a href="top.html"><img src="/MIFOOD2/Public/images/s5.jpg" alt="" /></a>
						</div>
						<div class="popular-grid">
							<a href="top.html"><img src="/MIFOOD2/Public/images/s6.jpg" alt="" /></a>
						</div>
						<div class="popular-grid">
							<a href="top.htmll"><img src="/MIFOOD2/Public/images/s7.jpg" alt="" /></a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- agileits-copyright -->
	<div class="agileits-copyright">
		<div class="container">
			<p>© 2017 Food Corner. All rights reserved | Design by MIFOOD</p>
		</div>
	</div>
<!-- //contact -->
<!-- login -->

			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
									
									<div class="login-right">
										<h3>登录</h3> 
										<form action="<?php echo U('Index/logins');?>" method="post">
											<div class="sign-in">
												<h4>用户名:</h4>
												<input  class="username" type="text" name="username"   required="" value="">	
											</div>
											<div class="sign-in">
												<h4>密码 :</h4>
												<input type="password" name="password"  required="" value="" class="password">
											</div>
											<div class="single-bottom">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>记住密码</label>
											</div>
											<div class="sign-in">
												<input id="submit1" type="submit" value="登 录" >
											</div>
										</form>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
<!-- login -->
			<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" >
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
									<div class="login-bottom">
										<h3>注册</h3>
										<form action="<?php echo U('Login/register');?>" method="post">
											<div class="sign-in">
												<h4>用户名 :</h4>
												<input type="text" name="username" value="" class="username" required="" placeholder="您的用户名">
					<div id="tooltip1" class="tooltip-info prompt">
					<span class="tooltip-icon-border"></span> 
					<span class="tooltip-icon-bg"></span> 
					<span class="state"></span> 
					<span id="mess1" class="mess"></span>
				</div>	
											</div>
											<div class="sign-up">
												<h4>Email:</h4>
												<input type="text" name="email" value="" class="email" onFocus="this.value = '';"  required="" placeholder="请写入合法的邮箱地址">
						<div id="tooltip3" class="tooltip-info prompt">
						<span class="tooltip-icon-border"></span> 
						<span class="tooltip-icon-bg"></span> 
						<span class="state"></span> 
						<span id="mess3" class="mess"></span>
					</div>	
											</div>
											<div class="sign-up">
												<h4>密码 :</h4>
												<input type="password" name="password" value="" class="password"      onFocus="this.value = '';"  required="" placeholder="6~15个字符">
						<div id="tooltip2" class="tooltip-info prompt">
						<span class="tooltip-icon-border"></span> 
						<span class="tooltip-icon-bg"></span> 
						<span class="state"></span>
					    <span id="mess2" class="mess"></span>
					</div>
												
											</div>
											<div class="sign-up">
												<h4>确认密码 :</h4>
												<input type="password" name="confirm_password" value="" class="confirm_password" onFocus="this.value = '';"  required="" placeholder="6~15个字符">
						<div id="tooltip22" class="tooltip-info prompt">
						<span class="tooltip-icon-border"></span> 
						<span class="tooltip-icon-bg"></span> 
						<span class="state"></span> 
						<span id="mess22" class="mess"></span>
					</div>
												
											</div>
											<div class="sign-up">
												<input id="submit" type="submit" value="免费注册" >
											</div>
											
										</form>
									</div>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //login -->
<script type="text/javascript" src="/MIFOOD2/Public/js/bootstrap-3.1.1.min.js"></script>
<script src="/MIFOOD2/Public/js/owl.carousel.js"></script>  
</body>
</html>