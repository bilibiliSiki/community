<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="zh-CN" /> 
<script type="text/javascript" src="__PUBLIC__/js/jquery1.4.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/bioV4.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.lazyload.mini.js"></script>
<title>社团</title>
<meta name="Keywords" content="创新服务"/>
<meta name="Description" content="创新服务。"/>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/style/basic.css"/>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/style/list1.css"/>
<script type="text/javascript" src="__PUBLIC__/js/function.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/list.js"></script>
<!--[if IE 6]>
<script type="text/javascript" src="js/DD_belatedPNG.js?v=20130220"></script>
<script type="text/javascript">
DD_belatedPNG.fix('img,.ie6png');
</script>
<![endif]--> 

</head>
<body>
	<script type="text/javascript" src="__PUBLIC__/js/borsertocss.js"> </script><!-- 判断在IE9以下浏览器中根据像素的不同而设置的样式 -->	
    
   
  <!--头部代码开始-->
   
    <div class="navbar navbar-fixed-top" style="_position: relative;_z-index: 10000;">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<div class="nav-collapse">
					<ul class="nav" id="navID">
                        <li class=""><a href="__APP__/Front/Index/index.html"><b>首页</b></a></li>
						<li class=""><a href="__APP__/Front/Club/index.html"><b>社团</b></a></li>
					 	
                    
					 
					</ul>
				</div><!--/.nav-collapse -->
				<ul class="nav pull-right login-none nav-tips">
		<li class="ie6png divider-vertical" style="_width: 30px;_height: 40px;_background: url(images/icons.png) no-repeat 10px -106px;"><a class="dropdown-toggle clearfix" href="/login.html?url=aHR0cDovL3d3dy5iaW9kaXNjb3Zlci5jb20vbmV3cy5odG1sP3BhZ2U9Mg%3D%3D" style="padding: 7px 5px;"><img class="logo-before pull-left" src="__PUBLIC__/images/avatar-icon.png" /></a></li>
	</ul>
<div class="popup-div tips-div" style="position: absolute;z-index: 10000001;display: none;"></div>
<script type="text/javascript">
var tip_show = 1;
//头部下拉
var timer1 = "";
$('#dropdownID-0').hover(function(){
	var obj = $(this);
	if(timer1)
	{
		clearTimeout(timer1);
	}
	timer1 = setTimeout(function(){
		obj.find('.dropdown-menu').show();
		tip_show = 0;
		$(".tips-div").hide();
		obj.find('.other-icon').css({"background":"#2E2E2E"});
	}, 500);
},function(){
	var obj = $(this);
	if(timer1)
	{
		clearTimeout(timer1);
	}
	timer1 = setTimeout(function(){
		obj.find('.dropdown-menu').hide();
		$(".tips-div").hide();
		tip_show = 1;
		getTips();
		obj.find('.other-icon').css({"background":"none"});
	}, 500);
});

var timer2 = "";
$('#dropdownID-1').hover(function(){
	var obj = $(this);
	if(timer2)
	{
		clearTimeout(timer2);
	}
	timer2 = setTimeout(function(){
		obj.find('.dropdown-menu').show();
		tip_show = 0;
		$(".tips-div").hide();
		obj.find('.other-icon').css({"background":"#2E2E2E"});
	}, 500);
},function(){
	var obj = $(this);
	if(timer2)
	{
		clearTimeout(timer2);
	}
	timer2 = setTimeout(function(){
		obj.find('.dropdown-menu').hide();
		tip_show = 1;
		getTips();
		$(".tips-div").hide();
		obj.find('.other-icon').css({"background":"none"});
	}, 500);
});
</script>				



			</div>
		</div>
	</div>
	
    <div class="top-div">
	<div class="container clearfix">
		
       <div class="span3 logo-div logo-img" >
        <a href="#" title="医疗器械创新网"><img src="__PUBLIC__/images/logo.jpg" width=600px;class="ie6png" style="display: block;"/></a>
       </div>
		
        <div class="span11 pull-right top-ad" style="position: relative;_float: right;_height: 80px;_overflow: hidden;">
 <a href="javascript:;" class="pull-left" target="_blank" rel="nofollow">
        <img alt="" src="__PUBLIC__/images/1.jpg" style="width: 100%; display: block;"/></a>
        
         <a href="javascript:;" class="pull-left" style="display:none;" target="_blank">
        <img alt="" src="__PUBLIC__/images/1.jpg" style="width: 100%; display: block;"/></a>

	 <div class="slides-icon-ad slides-ad-point" style="position: absolute;right:60px;">
				<a href="javascript:void(0);" class="icon-css-on ie6png">&nbsp;</a>
				<a href="javascript:void(0);" class="icon-css ie6png">&nbsp;</a>	 
			</div>
            
		</div>
	</div>
</div>
    


<script type="text/javascript">
	$(function(){
		var Interval_control = '';
		var current_index = 0;
		show_pic_ad = function(index){
			$(".top-ad .pull-left").each(function(i){
				$(this).hide();
				if(i == index){
					$(this).show(); 
				}
			});
		};
		show_point_ad = function(index){
			$(".top-ad .slides-ad-point a").each(function(i){
				if($(this).hasClass("icon-css-on")){
					$(this).removeClass("icon-css-on");
					$(this).addClass("icon-css");
				}
				if(i == index){
					if($(this).hasClass("icon-css")){
						$(this).removeClass("icon-css");
					}
					$(this).addClass("icon-css-on");
				}
			});
		};
		slides = function(){
			$(".slides-ad-point a").each(function(index){
				$(this).click(function(){
					current_index = index;
					show_point_ad(index);
					show_pic_ad(current_index);
				});
			});
		};
		slides();
		Interval_control = setInterval(function(){
			show_point_ad(current_index);
			show_pic_ad(current_index);
			if (current_index == ($(".slides-icon-ad a").length - 1)){
				current_index = -1;
			}
			current_index ++;
		},5000);//设置自动切换函数
		//当触发mouseenter事件时，取消正在执行的自动切换方法，触发mouseouter事件时重新设置自动切换
		$(".top-ad .pull-left").mouseenter(function() {
			clearInterval(Interval_control);//停止自动切换
		}).mouseleave(function(){
			Interval_control = setInterval(function(){
				show_point_ad(current_index);
				show_pic_ad(current_index);
				if (current_index == ($(".top-ad .pull-left").length - 1)){
					current_index = -1;
				}
				current_index ++;
			},5000);//设置自动切换函数
		});
	});
</script>

<!--头部代码结束-->


	<div class="hr tp-div-nexthr" style="margin-top: 0;margin-bottom: 0;padding: 0;"></div>
	<div class="container pb-15">
	<!-- Example row of columns -->
	<div class="row">
		<div class="span12">
       
       <!--搜索-->
       
       
	   <div class="clearfix">
         
				<div class="pull-left classifyDIV pt-10 my1D6597">社团种类</div>
				
				
                <div class="pull-right t-20 classifySearch" style="position: relative;">
                  <!--<form action="?" method="get" style="margin:0px; padding:0px;">
					<input id="search-input" type="text" class="search-input pull-left span4" value=""/>
					<a href="javascript:void(0);" title="搜索" class="search-btn-css pull-left search-btn"></a>
                  </form>-->
				</div>
		 </div>
									
          <!--搜索结束-->  

        
          
            
 <!--列表开始-->     
                         
    <!--第一个-->        
<?php if(is_array($club)): $i = 0; $__LIST__ = $club;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="label-div b-30 border-all pb-20 pt-5" style="position: relative; padding-left: 0;">
   
      <div class="pl-20" style="margin-left: 1px;margin-top: 3px;">
      	<a class="fc1D6597" title="研究" href="javascript:;"><?php echo ($vo["cname"]); ?></a>
      </div>
      
	  <div class="news-list">
      
	 <!--<div class="clearfix none-768 pl-20" style="position: absolute;top: 0;right: 15px;">																								     <a class="tags-box l-10 fc999 pull-left" title="关键字" href="javascript:;">关键字</a>
	 <a class="tags-box l-10 fc999 pull-left" title="关键字" href="javascript:;">关键字</a>
     <a class="tags-box l-10 fc999 pull-left" title="关键字" href="javascript:;">关键字</a>
	 </div>-->

	<div class="clearfix pt-3">
		  <div class="index-news-img spanm3 pull-left pt-5">
						<a href="javascript:;" title="标题标题标题" target="_blank" rel="bookmark">
                        <img class="lazyloadimg" alt="标题标题标题标题标题标题" src="/bbs/Public/Uploads/<?php echo ($vo["cpicture"]); ?>"/></a>
		 </div>
  	<div class="offset3 intro">
		<h1>
        <a title="标题标题标题标题" target="_blank" href="javascript:;"><?php echo ($vo["cname"]); ?></a>
        </h1>
	  
      <div class="clearfix" style="height: 22px;margin-top: 0px;">
			<div class="pull-left myxx">	
           
            <i class="m"><a href="javascript:;" target="_blank">社团</a></i>  
            <i class="m"><a href="javascript:;" target="_blank">时间</a></i>   
            <i class="m">2013/03/02</i>
        </div>
            
          <div class="pull-right">
			<a class="follow-btn pr-10 ie6png" href="javascript:void(0);" title="0人关注	0人分享	3人评论" data-id="104417" data-type="news">3人</a>
			<a class="read-btn ie6png" href="javascript:void(0);" title="277次阅读">277次</a>
		 </div>
	</div>
	<p class="t-1"><?php echo ($vo["content"]); ?></p>
    
         <div class="clearfix">
        <a href="__APP__/Front/Detailed/index/id/<?php echo ($vo["mid"]); ?>" title="阅读全文" target="_blank" rel="bookmark" class="read-all pull-left">查看详情</a></div>
         </div>
    </div>
  </div>
</div><?php endforeach; endif; else: echo "" ;endif; ?>
    <!--第一个结束-->      

  <!--列表结束-->         
            
  <div class="result page">
<div class="pagination center pagination-large pt-20">
<ul id="yw1" class="yiiPager">

<li class="page"><a href=""><?php echo ($page); ?></a></li>


</ul>		    </div>
</div>

		</div>
        
      
      <!--右侧代码-->  
       <div class="span4">
			
        
            
            <div class="label-div t-20 border-all">
				<div class="l-15">
               		 <h3 class="label-title border-b b-15 small clearfix" style="padding-bottom: 14px;">关注咨询</h3>
                </div>
				<div class="label-main tody-hot l-15" >
					<ul>
					  <li><a href="">标题标题标题标题标题标题题</li>
                     
                      <li><a href="">标题标题标题标题标题标题标题</li>
					</ul>
				</div>
			</div>
            
            
            
             <div class="label-div t-20 border-all">
				<div class="l-15">
               		 <h3 class="label-title border-b b-15 small clearfix" style="padding-bottom: 14px;">最多分享</h3>
                </div>
				<div class="label-main tody-hot l-15" >
					<ul>
					  <li><a href="">标题标题标题标题标题标题题</li>
                     
					</ul>
				</div>
			</div>
            
            
            
             <div class="label-div t-20 border-all">
				<div class="l-15">
               		 <h3 class="label-title border-b b-15 small clearfix" style="padding-bottom: 14px;">最多评论</h3>
                </div>
				<div class="label-main tody-hot l-15" >
					<ul>
					  <li><a href="">标题标题标题标题标题标题题</li>
                     
					</ul>
				</div>
			</div>
            
          
             
            
	 
            
		</div>
	</div>
</div>

<!--右侧代码结束-->


<!-- /container -->

  <div class="container">
 
 	<div class="hr"></div>
    
    </div>
  
<!-- /container -->

</div>
    
 
<div class="footer">
		 
			<!--<p class="fc999 b-5 footer-info">致力于前沿生物科技和成功商业模式的传播</p>-->
			<div class="clearfix" style="background:#EDEDED;">
				
                <!--<p class="fc999 pull-left footer-info">Copyright © 2013 生物探索网站<span class="l-20">苏ICP备11025281号</span></p>-->
				
                <ul class="about-ul">
				
				
					<li><a title="广告投放" href="javascript:;" class="fc666" target="_blank">广告投放</a></li>
					<li><span>|</span></li>
					<li><a title="广告投放" href="javascript:;" class="fc666" target="_blank">广告投放</a></li>
					<li><span>|</span></li>
					<li><a title="广告投放" href="javascript:;" class="fc666" target="_blank">广告投放</a></li>
					<li><span>|</span></li>
					
					<li><a title="企业服务" href="javascript:;" class="fc666" target="_blank">企业服务</a></li>
					<li><span>|</span></li>
					<li><a title="公司博客" href="javascript:;" class="fc666" target="_blank" >公司博客</a></li>
					<li><span>|</span></li>
					<li><a title="加入我们" href="javascript:;" class="fc666" target="_blank">加入我们</a></li>
					<li><span>|</span></li>
					<li><a title="服务协议" href="javascript:;" class="fc666" target="_blank">服务协议</a></li>
					<li><span>|</span></li>
                     <li id="zk_btn" class="ie6png down-class">
                   	 <a title="友情链接" href="javascript:void(0);" class="fc666">友情链接</a>
                    </li>
				    <div class="clear"></div>
				</ul>
			</div>
    
    <div class="friend-link border-all t-20 b-20">
	<center>
		<ul class="clearfix">
		
		<li><a title="企业服务" href="javascript:;" class="fc666" target="_blank">哈尔滨理工大学荣成校区</a></li>
			<li><span>|</span></li>
		<li><a title="企业服务" href="javascript:;" class="fc666" target="_blank">哈尔滨理工大学</a></li>
		
	</ul>
	</center>
</div>
  <script type="text/javascript">
	$(document).ready(function(){
		var flag = 0;
		$(".friend-link").hide();
		//Down
		$("#zk_btn").click(function(){
			if(flag == 0){
				$(".friend-link").slideDown(400); 
				$(this).removeClass('down-class');
				$(this).addClass('up-class');
				$("html,body").animate({scrollTop:($(".friend-link").offset().top+2000)},600);
				flag = 1;
			}else{
				$(".friend-link").slideUp(400);  
				$(this).removeClass('up-class');
				$(this).addClass('down-class'); 
				flag = 0;
			}
		});
	});
</script>
<p>Copyright ©2015　备888888888号 哈尔滨理工大学(荣成校区)</p>

    
		</div> 
 
<script type="text/javascript">
//回到顶部
backToTop('body');
</script>
</body>
</html>