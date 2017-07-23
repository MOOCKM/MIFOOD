<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>MIFOOD-classify</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="/MIFOOD2/Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/MIFOOD2/Public/css/classify.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="/MIFOOD2/Public/css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="/MIFOOD2/Public/css/page.css" rel="stylesheet" type="text/css" media="all" />

<!-- //font-awesome icons -->
<!-- js -->
<script src="/MIFOOD2/Public/js/jquery.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
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
</head>
	
<body>
<!-- header -->
	<div class="agileits_header">
		<div class="w3l_offers">
			<a href="products.html">今日特别推荐 !</a>
		</div>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="text" name="Product" value="搜索..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '搜索...';}" required="">
				<input type="submit" value=" ">
			</form>
		</div>
		<div class="w3l-right">
		<ul>
		<?php if($_SESSION['user'] == '' ): ?><li><a href="#" data-toggle="modal" data-target="#myModal4"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>登录</a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModal5"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>注册</a></li>
					 <?php else: ?>
					<li><a href="/MIFOOD2/index.php/Home/Index/user" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span><?php echo ($_SESSION['user']); ?></a></li>
					<li><a href="/MIFOOD2/index.php/Home/Index/log_out"><span class=" glyphicon" aria-hidden="true"></span>退出</a></li><?php endif; ?>
	 </ul>
		</div>
			<div class="clearfix"> </div>
	</div>
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>
<!-- //script-for sticky-nav -->
	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="index.html"><span>new</span> MIFOOD</a></h1>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="special_items">
					<li><a href="/MIFOOD2/index.php/Home/Index/index">首页</a><i>/</i></li>
					<li ><a href="/MIFOOD2/index.php/Home/Index/top">Top系列</a><i>/</i></li>
					<li><a href="/MIFOOD2/index.php/Home/Index/classify"><span style="color:#E64C3C">分类</span></a><i>/</i></li>
					<li><a href="/MIFOOD2/index.php/Home/Index/health">写食派</a></li>
				</ul>
			</div>
		</div>
	</div>
<!-- //header -->
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
				<ul class="nav navbar-nav nav_1">
				<?php if(is_array($category)): foreach($category as $key=>$v): ?><li><a href="/MIFOOD2/index.php/Home/Index/page2/category_id/<?php echo ($v['category_id']); ?>"><?php echo ($v["category_name"]); ?></a></li><?php endforeach; endif; ?>

					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3l_banner_nav_right_banner">
								<h3>吃得<span>放心</span> 开心.</h3>
								<div class="more">
									<a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">去看看</a>
								</div>
							</div>
						</li>
						<li>
							<div class="w3l_banner_nav_right_banner1">
								<h3>美食<span></span> 在于寻找.</h3>
								<div class="more">
									<a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">去看看</a>
								</div>
							</div>
						</li>
						<li>
							<div class="w3l_banner_nav_right_banner2">
								<h3>折扣 <i>50%</i>推荐.</h3>
								<div class="more">
									<a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">去看看</a>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>
			<!-- flexSlider -->
				<link rel="stylesheet" href="/MIFOOD2/Public/css/flexslider.css" type="text/css" media="screen" property="" />
				<script defer src="/MIFOOD2/Public/js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
		</div>
		<div class="clearfix"></div>
	</div>
<div id='ajaxpage'>
<div class='page1' style='display:none;'><a href="<?php echo U('page2',array('p'=>1));?>" title="">自动点击执行AJAX请求显示第一页内容</a></div> 
</div>
	<div id="top-brands">
		<div class="container">
			<h3>火锅</h3>
			<div class="agile_top_brands_grids">
 <?php if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($k % 2 );++$k;?><div class="col-md-3 top_brand_left">
					<div class="hover14 column">
						<div class="agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="/MIFOOD2/Public/images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="details.html"><img title=" " alt=" " src="/MIFOOD2/Public/images/top-1.jpg" width="180" height="140"/></a>		
											<p><?php echo ($list['shop_name']); ?></p>
											<h4>$8.00 <span><?php echo ($k); ?></span></h4>
										</div>
										<div class="snipcart-details top_brand_home_details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="Pepsi soft drink" />
													<input type="hidden" name="amount" value="8.00" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="直达链接" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
					</div>
				</div><?php endforeach; endif; else: echo "" ;endif; ?> 
				<div class="clearfix"> </div>
			</div>
		</div>
		
		</div>
		<?php echo ($page); ?>
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
<!-- Bootstrap Core JavaScript -->
<script src="/MIFOOD2/Public/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="/MIFOOD2/Public/js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>











</body></html>
<script type="text/javascript">
//这是分页中各个分页的AJAX请求
$(function(){
$('#ajaxpage').on('click','.page a',function () { 
$.ajax({
type: "GET",
url:$(this).attr('href'), //取得分页a标签链接地址，正好是要提交的控制器和传参：Index/ajaxPage/p/1
success:function(data){
$('#ajaxpage').html(data); //将分页控制器输出的模版加载到容器中
}
});
return false; //使a标签失效，防止页面跳转
});
});
$(function () {
$('.page a').trigger('click');
});
</script>