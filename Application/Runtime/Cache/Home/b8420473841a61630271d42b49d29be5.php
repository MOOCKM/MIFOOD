<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
    <!-- 语言为中文 -->
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width, initial-scale=1.0" name="viewport">
                    <title>
                        MIFOOD-health
                    </title>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="/MIFOOD/Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="/MIFOOD/Public/css/jquery-ui.css" />
<link href="/MIFOOD/Public/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<link href="/MIFOOD/Public/css/health.css" rel="stylesheet" type="text/css" media="all" />
<link href="/MIFOOD/Public/css/leftlunbo.css" rel="stylesheet" type="text/css"  />
<!-- js -->
<script type="text/javascript" src="/MIFOOD/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/MIFOOD/Public/js/numscroller-1.0.js"></script>

<!-- //js -->


<!-- fonts -->
<link href='http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Viga' rel='stylesheet' type='text/css'>

	<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="/MIFOOD/Public/js/move-top.js"></script>
		<script type="text/javascript" src="/MIFOOD/Public/js/easing.js"></script>
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
	<script src="/MIFOOD/Public/js/jquery-ui.js"></script>
		<script>
			$(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
			});
		</script>
<!--/End-date-piker-->
	<script src="/MIFOOD/Public/js/responsiveslides.min.js"></script>
			<!--animate-->
<link href="/MIFOOD/Public/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="/MIFOOD/Public/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
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
					<li><a href="/MIFOOD/index.php/Home/Index/user" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span><?php echo ($_SESSION['user']); ?></a></li>
					<li><a href="/MIFOOD/index.php/Home/Index/log_out"><span class=" glyphicon" aria-hidden="true"></span>退出</a></li><?php endif; ?>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header -->
      	<div class="banner-body">
		<div class="container">
			<div class="banner-body-content">
			<div class="col-xs-3 banner-body-left">
					<div class="logo grid">
						<div class="grid__item color-3">
							<h1><a class="link link--nukun" href="index.html"><i></i>MI<span>F</span>OOD</a></h1>
						</div>
					</div>
				<div class="top-nav">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
							<nav class="stroke">
								<ul class="nav navbar-nav">
									<li><a href="/MIFOOD/index.php/Home/Index/index"><i class="home"></i>首页</a></li>
									<li><a href="/MIFOOD/index.php/Home/Index/top" class="hvr-underline-from-left"><i class="picture1"></i>top系列</a></li>
									<li><a href="/MIFOOD/index.php/Home/Index/classify" class="hvr-underline-from-left"><i class="edit1"></i>分类</a></li>
									<li  class="active"><a href="/MIFOOD/index.php/Home/Index/health" class="hvr-underline-from-left"><i class="text-size1"></i>写食派</a></li>
								</ul>
							</nav>
						</div>
						<!-- /.navbar-collapse -->
					</nav>
				</div>
			</div>
			<div class="col-xs-9 banner-body-right">
				<div class="wmuSlider example1">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="banner">
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="banner1">
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;"> 
							<div class="banner-wrap">
								<div class="banner2">
								</div>
							</div>
						</article>
					</div>
				</div>
					<script src="/MIFOOD/Public/js/jquery.wmuSlider.js"></script> 
					  <script>
						$('.example1').wmuSlider();         
					 </script> 
				<div class="banner-bottom">
					<div class="col-md-4 banner-left">
						<div class="col-xs-3 banner-left1">
							<div class="banner-left11">
								<span> </span>
							</div>
						</div>
						<div class="col-xs-9 banner-right1">
							<h3>健康常识</h3>
						</div>
						<div class="clearfix"> </div>
						<p>生活中你必须注意的一些有关于健康的小细节.</p>
					</div>
					<div class="col-md-4 banner-left">
						<div class="col-xs-3 banner-left1">
							<div class="banner-left22">
								<span> </span>
							</div>
						</div>
						<div class="col-xs-9 banner-right1">
							<h3>瘦身美容</h3>
						</div>
						<div class="clearfix"> </div>
						<p>你一定不知道这样食疗瘦身美容效果竟如此好.</p>
					</div>
					<div class="col-md-4 banner-left">
						<div class="col-xs-3 banner-left1">
							<div class="banner-left33">
								<span> </span>
							</div>
						</div>
						<div class="col-xs-9 banner-right1">
							<h3>食疗食补</h3>
						</div>
						<div class="clearfix"> </div>
						<p>吃什么补什么，以食为材，最为营养;
					 就地材</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"> </div>

			<div class="col-xs-3 banner-body-left">
				<div class="latest-news">
					<h2>相关推荐</h2>
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
						  <h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							 一周热门菜系
							</a>
						  </h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						  <div class="panel-body">
						<ul>
						<li>
						<figure>
    <img src="/MIFOOD/Public/images/sp2.jpg" width="69" height="69" />
    <p class="health-left" >红烧肉</p>
     </figure></li>
     						<li>
						<figure>
    <img src="/MIFOOD/Public/images/sp1.jpg" width="69" height="69" />
    <p class="health-left">牛肉</p>
     </figure></li>
       						<li>
						<figure>
    <img src="/MIFOOD/Public/images/sp3.jpg" width="69" height="69" />
    <p class="health-left">鸡肉</p>
     </figure></li>
						<figure>
    <img src="/MIFOOD/Public/images/sp4.jpg" width="69" height="69" />
    <p class="health-left" >花菜</p></figure></li>

						</ul>
						  </div>
						</div>

					  </div>
					</div>
					<div class="join">
						<a href="single.html">看更多</a>
					</div>

				</div>
						<div class="latest-news">
					<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					  <div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
						  <h4 class="panel-title">
							<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							 一周热门话题
							</a>
						  </h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
						  <div class="panel-body">
						<ul>
						<li>
						<figure>
    <img src="/MIFOOD/Public/images/s4.jpg" width="69" height="69" />
    <p class="health-left" >水果抗癌</p>
     </figure></li>
     						<li>
						<figure>
    <img src="/MIFOOD/Public/images/s2.jpg" width="69" height="69" />
    <p class="health-left">缓解痛经</p>
     </figure></li>
       						<li>
						<figure>
    <img src="/MIFOOD/Public/images/s5.jpg" width="69" height="69" />
    <p class="health-left">样胃粥</p>
     </figure></li>
						<figure>
    <img src="/MIFOOD/Public/images/s7.jpg" width="69" height="69" />
    <p class="health-left" >增长肌肉</p></figure></li>

						</ul>
						  </div>
						</div>

					  </div>
					</div>
					<div class="join">
						<a href="single.html">看更多</a>
					</div>

				</div>
			</div>
			<div class="col-xs-9 banner-body-right">
				<div class="msg-text-bottom">
					<div class="col-md-4 msg-text-bottom-left">
						<figure class="effect-winston">
							<a href="single.html"><img src="/MIFOOD/Public/images/img1.png" alt=" " class="img-responsive" />
							<figcaption>
								
							</figcaption>		
							</a>
						</figure>
					</div>
					<div class="col-md-4 msg-text-bottom-left">
						<figure class="effect-winston">
							<a href="single.html"><img src="/MIFOOD/Public/images/img2.png" alt=" " class="img-responsive" />
							<figcaption>
								
							</figcaption>	
							</a>
						</figure>
					</div>
					<div class="col-md-4 msg-text-bottom-left">
						<figure class="effect-winston">
							<a href="single.html"><img src="/MIFOOD/Public/images/img3.png" alt=" " class="img-responsive" />
							<figcaption>
								
							</figcaption>	
							</a>
						</figure>
					</div>
					<div class="clearfix"> </div>
				</div>

		</div>
				<div class="col-xs-9 banner-body-right">
				<div class="msg-text-bottom">
					<div class="col-md-12 msg-text-bottom-left">
				   <div class="pic col-md-3"> 
				   <a title="5色养生食谱 只有你想不到没有养不到" href="" target="_blank"> 
				   <img alt="5色养生食谱 只有你想不到没有养不到" width="160" height="120" src="/MIFOOD/Public/images/health1.jpg" class="imgLoad" style="display: block;"> 
				   </a> </div>
				   <div class="detail col-md-9" >
<h4> <a title="5色养生食谱 只有你想不到没有养不到" target="_blank" href="http://www.meishichina.com/Health/CommonSense/201703/207825.html" se_prerender_url="complete">5色养生食谱 只有你想不到没有养不到</a> </h4>
<p class="substatus">27分钟前</p>
<p class="subcontent">所谓“民以食为天”，就连养生也不例外。但市面上健康的食物并不少，怎样才能选对食物，吃得健康，健康地吃呢？</p>
</div>
					</div>
					<div class="clearfix"> </div>
					<div class="col-md-12 msg-text-bottom-left">
				   <div class="pic col-md-3"> 
				   <a title="5色养生食谱 只有你想不到没有养不到" href="" target="_blank"> 
				   <img alt="5色养生食谱 只有你想不到没有养不到" width="160" height="120" src="/MIFOOD/Public/images/health2.jpg" class="imgLoad" style="display: block;"> 
				   </a> </div>
				   <div class="detail col-md-9" >
<h4> <a title="春雨绵绵 祛湿排毒食疗方你要知道" target="_blank" href="http://www.meishichina.com/Health/CommonSense/201703/207825.html" se_prerender_url="complete">春雨绵绵 祛湿排毒食疗方你要知道</a> </h4>
<p class="substatus">27分钟前</p>
<p class="subcontent">所谓“民以食为天”，就连养生也不例外。但市面上健康的食物并不少，怎样才能选对食物，吃得健康，健康地吃呢？</p>
</div>
					</div>
					<div class="clearfix"> </div>
							<div class="col-md-12 msg-text-bottom-left">
				   <div class="pic col-md-3"> 
				   <a title="如何做到肠道保健 多吃这8种食物" href="" target="_blank"> 
				   <img alt="如何做到肠道保健 多吃这8种食物" width="160" height="120" src="/MIFOOD/Public/images/health3.jpg" class="imgLoad" style="display: block;"> 
				   </a> </div>
				   <div class="detail col-md-9" >
<h4> <a title="5色养生食谱 只有你想不到没有养不到" target="_blank" href="http://www.meishichina.com/Health/CommonSense/201703/207825.html" se_prerender_url="complete">5色养生食谱 只有你想不到没有养不到</a> </h4>
<p class="substatus">2小时前</p>
<p class="subcontent">肠胃，是人体消化系统的一部分，因此，肠胃对人体健康非常重要。说起来，肠道保健其实就是一些很简单却很有效的小招数，一杯水，</p>
</div>
					</div>
					        <div class="container ">
            <div class="rom " id="page-page">
                <div class="col-md-12 col-sm-6 col-xs-6 col-xxs-12 animate-box">
                    <ul class="pagination pagination-centered">
                        <li>
                            <a href="#">
                                «
                            </a>
                        </li>
                        <li class="active">
                            <a href="#">
                                1
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                2
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                3
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                4
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                5
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                »
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
					<div class="clearfix"> </div>
				</div>

		</div>
		</div>
	</div>
</div>
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
							<a href="top.html"><img src="/MIFOOD/Public/images/s1.jpg" alt="" /></a>
						</div>
						<div class="popular-grid">
							<a href="top.htmll"><img src="/MIFOOD/Public/images/s2.jpg" alt="" /></a>
						</div>
						<div class="popular-grid">
							<a href="top.html"><img src="/MIFOOD/Public/images/s3.jpg" alt="" /></a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="popular-grids">
						<div class="popular-grid">
							<a href="top.html"><img src="/MIFOOD/Public/images/s5.jpg" alt="" /></a>
						</div>
						<div class="popular-grid">
							<a href="top.html"><img src="/MIFOOD/Public/images/s6.jpg" alt="" /></a>
						</div>
						<div class="popular-grid">
							<a href="top.htmll"><img src="/MIFOOD/Public/images/s7.jpg" alt="" /></a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
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
				<div class="clearfix"> </div>
			</div>

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
<script type="text/javascript" src="/MIFOOD/Public/js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>  
	<script type="text/javascript" src="/MIFOOD/Public/js/distpicker.data.js"></script>
	  <script type="text/javascript" src="/MIFOOD/Public/js/distpicker.js"></script>
	  <script  type="text/javascript" src="/MIFOOD/Public/js/main.js"></script>
</body>
</html>