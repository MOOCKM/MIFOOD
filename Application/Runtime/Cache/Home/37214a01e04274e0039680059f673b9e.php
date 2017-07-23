<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MIFOOD详情页</title>
	<link rel="stylesheet" type="text/css" href="/3.2.1/Application/Public/css/details.css">
	<link rel="icon" href="/3.2.1/Application/Public/images/logo2.ico" type="images/x-icon"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="/3.2.1/Application/Public/css/details.css">
	<script type="text/javascript" src="/3.2.1/Application/Public/js/details.js"></script>
	<script type="text/javascript" src="/3.2.1/Application/Public/js/Chart.js"></script>
    <!--[if lte IE 8]>
        <script src="excanvas.js"></script>
    <![endif]-->
</head>
<body>
	<div class="header">
		<div id="header_word">
			<div id="header_word_left">
				MIFood
			</div>
			<div id="menu_word_left">
				<ul id="select">
					<li><a href="#">店铺推荐</a></li>
					<li><a href="#" id="mesage">店铺详情</a></li>
					<li><a href="#">健康密码</a></li>
				</ul>
			</div>
			
			<div id="header_word_right">
				<ul id="in">
					<li><img src="/3.2.1/Application/Public/images/account.png" width="16" height="16"></li>
					<li><a href="#">登陆</a></li>
					<li><a href="#">注册</a></li>
				</ul>
			</div>
			<div id="menu_word">
			
				<div id="menu_word_right">
					<div class="search d2">
					  	<form>
						  <input type="text" placeholder="店铺、美食">
						  <button type="submit"></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="menu">
		<div id="menu_left">
			店铺详情
		</div>
	</div>
	<div id="center">
		<div id="center_word">
			<div id="center_top_left">
				<?php echo ($shop[0]['shop_name']); ?> <!-- 此处更改点名 -->
			</div>
			<div id="center_top_right">
				<ul>
					<li>1531535浏览</li>
					<li><?php echo ($shop[0]['loves']); ?>收藏</li>
					<li><input type="button" id="catch" value="收藏"></li>
				</ul>
			</div>
			<div id="title1">
				<ul>
					<li><img src="http://localhost/3.2.1/Application/Common/Common/function1.php?url=<?php echo ($shop[0]['shop_img']); ?>"></li>
					<li>店铺详情</li>
				</ul>
			</div>
			<div id="title1_word">

			</div>
			<div id="title2">
				<ul>
					<li><img src="/3.2.1/Application/Public/images/热菜.png"></li>
					<li>基本菜肴</li>
				</ul>
			</div>
			<div id="title2_word">

			</div>
			<div id="title3">
				<ul>
					<li><img src="/3.2.1/Application/Public/images/分析.png"></li>
					<li>好评率分析</li>
				</ul>
			</div>
			<div style="width: 50%" id="title3_word_left">
    			<canvas id="myChart" width="550" height="350"></canvas>
			</div>
			<div id="title3_word_right">
				
			</div>
			<div id="title4">
				<ul>
					<li><img src="/3.2.1/Application/Public/images/评论.png"></li>
					<li>店铺评论</li>
					<?php echo ($comment[0]['content']); ?>
				</ul>
			</div>
			
		</div>
	</div>
	<div id="center_select">
		<div id="center_select_word">
			<div id="center_select_left">
				<ul id="bottom_select">
						<li><a href="#" id="imasage">近期评论</a></li>
						<li><a href="#">晒图评价</a></li>
						<li><a href="#">低分评价</a></li>
				</ul>
			</div>
			<div id="center_select_right">
				    <select name="year">
			    		<option value="默认排序" selected="selected">默认排序</option>
				      	<option value="时间排序">时间排序</option>
				    </select>
			</div>
		</div>
	</div>
	<div id="title5_word">

	</div>
	<div id="bottom_function">
		<hr style="height:2px;border:none;border-top:2px solid #d32323;">
		<div id="bottom_function_word">
			<div id="bottom_function_word_top">
				<img src="/3.2.1/Application/Public/images/logo.png" />
			</div>
			<hr style="color:#7fe1e7;height:2px">
			<div id="bottom_function_word_center">
				<div  id="bottom_function_word_center_left">
					<ul>
						<div class="bottom_set">我们的网站</div>
						<li><a href="#">经验交流</a><br></li>
						<li><a href="#">外卖分析</a></li>
					</ul>
				</div>
				<div  id="bottom_function_word_center_center">
					<div class="bottom_set">友情链接</div>
						<input type=button onclick="window.open('#')" value="天天美食" id="tags1" style='background:transparent' onMouseOver='ChangeColor1()' onMouseout='RevertColor1()'/>
                		<input type=button onclick="window.open('#')" value="口碑外卖" id="tags2" style='background:transparent' onMouseOver='ChangeColor2()' onMouseout='RevertColor2()'/><br>
                		<input type=button onclick="window.open('#')" value="薄荷网" id="tags3" style='background:transparent' onMouseOver='ChangeColor3()' onMouseout='RevertColor3()'/>
                		<input type=button onclick="window.open('#')" value="饿了吗" id="tags4" style='background:transparent' onMouseOver='ChangeColor4()' onMouseout='RevertColor4()'/><br>
                		<input type=button onclick="window.open('#')" value="易淘食" id="tags5" style='background:transparent' onMouseOver='ChangeColor5()' onMouseout='RevertColor5()'/>
                		<input type=button onclick="window.open('#')" value="39健康饮食" id="tags6" style='background:transparent' onMouseOver='ChangeColor6()' onMouseout='RevertColor6()'/>
				</div>
				<div  id="bottom_function_word_center_right"><ul>
					<ul>
						<div class="bottom_set">关于我们</div>
						<li><a href="#">2017年MIFood团队</a><br></li>
						<li><a href="#">联系我们</a></li>
					</ul>
				</div>
			</div>
			<hr style="color:#7fe1e7;height:2px">
			<div id="the_last">
				<ul id="the_last_function">
					<li><a href="#">首页</a></li>
					<li><a href="#">个人主页</a></li>
					<li><a href="#">联系我们</a></li>
				</ul>
				<div id="my_name">
					Copyright@2017MIFood团队
				</div>
				
			</div>
		</div>
	</div>
	
</body>
</html>
<!-- d32323
f3f3f3 -->

<script>
//为data准备的数据
var arr2=new Array();  arr2[0]="80";arr2[1]="73";arr2[2]="75";arr2[3]="78";
arr2[4]="85";arr2[5]="88";arr2[6]="85"; arr2[7]="80"; //此处获得数据百分值，程序的看这里

//用于存放图表上的数据
var lineChartData = {  
//表的X轴参数
labels : ["03.01","03.08","03.15","03.22","03.29","04.05","04.12","04.19"],
datasets : [
    {
        fillColor : "transparent",     //背景色，常用transparent透明
        strokeColor : "transparent",  //线条颜色，也可用"#ffffff"
        pointColor : "transparent",   //点的填充颜色
        pointStrokeColor : "transparent",            //点的外边框颜色
        data : [80,80,80,80,80,80,80]      //点的Y轴值     
        //这里后台千万别动，它本来这里多了一条线，我全搞透明了，删掉也不行
    },

    {
        fillColor : "transparent",
        strokeColor : "rgba(151,187,205,1)",
        pointColor : "rgba(151,187,205,1)",
        pointStrokeColor : "#fff",
        data : []    //data中的参数，通过下方for循环，获取arr2中的数据
    }
  ]
}

   for(var i = 0; i < arr2.length;i++)
   { 
    lineChartData.datasets[1].data.push(arr2[i]);//将数组arr2中的值写入data
   }

//定义图表的参数   
var defaults = {
    scaleStartValue :70,     // Y 轴的起始值
    scaleLineColor : "rgba(0,0,0,.1)",    // Y/X轴的颜色
    scaleLineWidth : 1,        // X,Y轴的宽度
    scaleShowLabels : true,    // 刻度是否显示标签, 即Y轴上是否显示文字   
    scaleLabel : "<%=value%>", // Y轴上的刻度,即文字
    scaleFontFamily : "'Arial'",  // 字体  
    scaleFontSize : 20,        // 文字大小 
    scaleFontStyle : "normal",  // 文字样式  
    scaleFontColor : "#666",    // 文字颜色  
    scaleShowGridLines : true,   // 是否显示网格  
    scaleGridLineColor : "rgba(0,0,0,.05)",   // 网格颜色
    scaleGridLineWidth : 1,      // 网格宽度  
    bezierCurve : false,         // 是否使用贝塞尔曲线? 即:线条是否弯曲     
    pointDot : true,             // 是否显示点数  
    pointDotRadius : 6,          // 圆点的大小  
    pointDotStrokeWidth : 1,     // 圆点的笔触宽度, 即:圆点外层边框大小 
    datasetStroke : true,        // 数据集行程
    datasetStrokeWidth : 2,      // 线条的宽度, 即:数据集
    datasetFill : false,         // 是否填充数据集 
    animation : true,            // 是否执行动画  
    animationSteps : 60,          // 动画的时间   
    animationEasing : "easeOutQuart",    // 动画的特效   
    onAnimationComplete : null    // 动画完成时的执行函数   
    }

    window.onload = function(){
        var ctx = document.getElementById("myChart").getContext("2d");
        window.myLine = new Chart(ctx).Line(lineChartData,defaults); 
    }

</script>