<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
    <!-- 语言为中文 -->
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width, initial-scale=1.0" name="viewport">
                    <title>
                        MIFOOD-search
                    </title>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="text/javascript" src="/MIFOOD/Public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/MIFOOD/Public/js/ajax.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="/MIFOOD/Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/MIFOOD/Public/css/search.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="/MIFOOD/Public/css/jquery-ui.css" />
<link href="/MIFOOD/Public/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<link href="/MIFOOD/Public/css/bootstrap-responsive.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/MIFOOD/Public/css/page.css" />
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
							<li class="menu__item menu__item--current"><a href="index.html" class="menu__link">首页</a></li>
							<li class="menu__item"><a href="about.html" class="menu__link">Top系列</a></li> 
							<li class="menu__item"><a href="codes.html" class="menu__link">分类</a></li> 
							<li class="menu__item"><a href="gallery.html" class="menu__link">写食派</a></li> 
				<!-- 			<li class="menu__item"><a href="contact.html" class="menu__link">联系我们</a></li> -->
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>
<!-- login -->
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
<!-- //login -->
      <div class="page_container">
    	<div class="breadcrumb">
        	<div class="wrap">
                <div class="container">
                    <a href="index.html">Home</a><span>/</span>4 Columns Portfolio
                </div>
            </div> 
        </div>
    	<!--MAIN CONTENT AREA-->
        <div class="wrap">
            <div class="container inner_content">
                <div id="options">                                           
                    <ul id="filters" class="option-set" data-option-key="filter">
                        <li><a href="#filter" data-option-value="*" class="btn dark_btn selected">All</a></li>
                        <li><a href="#filter" data-option-value=".category01" class="btn dark_btn">Category 01</a></li>                                            
                        <li><a href="#filter" data-option-value=".category02" class="btn dark_btn">Category 02</a></li>
                        <li><a href="#filter" data-option-value=".category03" class="btn dark_btn">Category 03</a></li> 
                    </ul>                                           
                    <div class="clear"></div>
                </div>
                <div id='ajaxpage'>
<div class='page' style='display:none;'><a href="<?php echo U('search',array('p'=>1));?>" title="">自动点击执行AJAX请求显示第一页内容</a></div> 
</div>
                <div class="row">
                    <!-- portfolio_block -->
                    <div class="projects"> 
                    <?php if(is_array($shop)): foreach($shop as $key=>$vo): ?><div class="span3 element category01" data-category="category01">
                            <div class="hover_images">
                                <img src="<?php echo ($vo['shop_img']); ?>" alt="" />
                                <span class="portfolio_zoom"><a href="images/sp1.jpg" rel="prettyPhoto[portfolio1]"></a></span>
                                <span class="portfolio_link"><a href="details.html">View item</a></span>
                            </div> 
                            <div class="item_description">
                                <h6><a href="details.html"><?php echo ($vo['shop_name']); ?></a></h6>
                                <div class="descr"><?php echo ($vo['address']); ?></div>
                            </div>                                    
                        </div><?php endforeach; endif; ?>                                      
                        
                        <?php echo ($page); ?> 
                                              
                        <div class="clear"></div>
                    </div>   
                    <!-- //portfolio_block -->   
                </div>
            </div>
        </div>
    <!--//MAIN CONTENT AREA-->
    	
    </div>
    <!--//page_container-->
  </body>
 <script type="text/javascript" src="/MIFOOD/Public/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="/MIFOOD/Public/js/numscroller-1.0.js"></script>
<script type="text/javascript" src="/MIFOOD/Public/js/easing.js"></script>
	<script src="/MIFOOD/Public/js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="/MIFOOD/Public/js/bootstrap-3.1.1.min.js"></script>
    <script src="/MIFOOD/Public/js/jquery.isotope.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="/MIFOOD/Public/js/sorting.js"></script>
  </html>
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