<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Language" content="zh-CN" /> 
<script type="text/javascript" src="__PUBLIC__/js/jquery1.4.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/bioV4.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/jquery.lazyload.mini.js"></script>
<title>社团详情</title>
<meta name="Keywords" content="咨询详情页"/>
<meta name="Description" content="咨询详情页"/>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/style/basic.css"/>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/style/zx_info.css"/>
<script type="text/javascript" src="__PUBLIC__/js/function.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/zx_info.js"></script>
<script type="text/javascript">
function validate(){

  document.getElementById('myform').submit();
  alert(1);
}
</script>
<!--[if IE 6]>
<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
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
		

<span class="login" id="qqLoginBtn"></span>
			</div>
		</div>
	</div>
    <style>
#qqLoginBtn {
padding-top: 8px;
float:right;
}
</style>
    
	
    <!--<div class="top-div">
	<div class="container clearfix">
		
       <div class="span3 logo-div logo-img" style="margin-left:0px;">
        <a href="/" title="医疗器械创新网"><img src="images/logo.jpg" class="ie6png" style="display: block;"/></a>
       </div>
		
        <div class="span11 pull-right top-ad" style="position: relative;_float: right;_height: 80px;_overflow: hidden;">
 <a href="javascript:;" class="pull-left" target="_blank" rel="nofollow">
        <img alt="" src="images/img1.jpg" style="width: 100%; display: block;"/></a>
        
         <a href="javascript:;" class="pull-left" style="display:none;" target="_blank">
        <img alt="" src="images/img2.jpg" style="width: 100%; display: block;"/></a>

	 <div class="slides-icon-ad slides-ad-point" style="position: absolute;right:60px;">
				<a href="javascript:void(0);" class="icon-css-on ie6png">&nbsp;</a>
				<a href="javascript:void(0);" class="icon-css ie6png">&nbsp;</a>	 
	 </div>
            
	</div>
	</div>
</div>--->
    
 

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
       
   
 <!--内容页面-->    
 
                        
  <div class="label-div b-30 border-all pt-5 t-20" style="position: relative; padding-left: 0;">
  
  	
 
   
  
   <!--<div class="mmdh pull-left"><a href="">首页</a> > <a href="">投资机构</a> > <a href="">机构标题</a></div> 
   <div class="mmkey pull-right"><b><a href="">关键字</a></b><b><a href="">关键字</a></b><b><a href="">关键字</a></b><div class="mmclear"></div></div> ---->
  
   <div class="mmclear"></div>
   
   
   <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div style="margin-top: 14px;" class="clearfix pb-12 pl-25 pr-25">
						<h1 class="pull-left r-10"><?php echo ($vo["title"]); ?></h1>
						<div class="pull-left pt-5 none-768" style="_margin-top:-33px; _margin-left:-10px;"> 
                        <span class="like-plug-gz clearfix pull-left r-15">
                        <a title="感兴趣，关注一下吧" href="javascript:void(0);" class="like-btn pull-right ie6png">关注本文</a>
                        <span class="count pull-left t-5 d-none"></span>
                        </span>
                        </div>
	</div>
   
 
   
  <div style="margin-top: 4px;" class="clearfix pl-25 pr-25">
						<div class="pull-left">
				 
				<span class="r-15 pull-left"><span class="fc999 l-5"><?php echo ($vo["logintime"]); ?></span></span>
				 <span class="r-15 pull-left"><span class="fc999 l-5">种类:<?php echo ($vo["family"]); ?></span></span>
			    <span class="fc999 l-20 pull-left">作者：
                	<span data-obj="News" data-oid="104437" id="obj_hits" class="fc999"><?php echo ($vo["uploadname"]); ?></span>
                </span>
		</div> 
 </div> 
  
 <div class="view-main t-20 pl-25 pr-25">
 
  <table style="width: 100%;" class="fc333 border-all">
		<tbody><tr>
			<td style="padding: 5px 12px;width: 25px;font-size: 22px;text-align: center;background: #E8E8E8; line-height: 30px;color: #999">导读</td>
			<td style="padding: 10px 10px 12px;line-height: 24px;">内容</td>
			</tr>
	</tbody></table>
    
    <div class="view-content" style="margin-top: 18px;">
     
     
       <p><?php echo ($vo["content"]); ?></p>
       
       <p style="text-align:center;"><img src="/bbs/Public/Uploads/<?php echo ($vo["picture"]); ?>" /></p>
       
       
         <!--<p>内容内容内容内 内 容内容内容内容内容内容内容内内容内容</p>--->
         
        <!-- <p style="text-align:center;"><img src="__PUBLIC__/images/video.jpg" /></p>--->
    
	附件: &nbsp;&nbsp;<a href="/bbs/Public/Uploads/<?php echo ($vo["file"]); ?>"><?php echo ($vo["file"]); ?></a>
 
    </div>
    
  
  </div><?php endforeach; endif; else: echo "" ;endif; ?>
  
   
   
  <!--警告：切勿删除-->
  <!--[if IE 6]> <a class="follow-btn ie6png mmmzw"></a><![endif]--> 

</div>


<!---代码分享-->
<div class="t-10 label-div border-all pr-5   pb-10 pl-20 clearfix">
    <div data-bind-msg-win-url="/share/bindmsgwin.html" data-back-url="aHR0cDovL3d3dy5iaW9kaXNjb3Zlci5jb20vbmV3cy9wb2xpdGljcy8xMDQ0MzcuaHRtbCNDQw==" data-pic="http://pic.biodiscover.com/files/c/6f/biodiscover1367054353.6725604.jpg" data-content="美国麻省理工学院（MIT）预测了2013年10大可能改变世界的创新科技技术。MIT预测的未来科技新趋势，可是想要获得致胜先机的科技企业大厂不可或缺的商业参考利器，企业可根据这些预测提早掌握关键的革新技术..." data-title="2013年10大可能改变世界的创新科学技术" data-url="http://www.biodiscover.com/news/politics/104437.html#CC" data-id="104437" data-type="News" data-islogin="0" class="share share-plug">
		<span style="height: 28px;line-height: 28px;color: #000;" class="pull-left r-10">分享到：</span>
    	<div style="margin-top: 7px;" class="pull-left clearfix">
    		<a href="javascript:void(0);" data-forward-href="" data-weibo-id="3571993536727890" data-to="sina" id="sina" class="bio_button_sina pull-left ie6png r-10 ">新浪微博</a>
            
    		<a href="javascript:void(0);" data-forward-href="" data-weibo-id="" data-to="qq" id="qq" class="bio_button_tencent pull-left ie6png r-10 ">腾讯微博</a>
    		<a href="javascript:void(0);" data-forward-href="" data-weibo-id="" data-to="renren" id="renren" class="bio_button_renren pull-left ie6png r-10 ">人人网</a>
    		<a href="javascript:void(0);" data-forward-href="" data-weibo-id="" data-to="linkin" id="linkin" class="bio_button_linkin pull-left ie6png r-10 ">LinkedIn</a>
    	</div>
    	<div style="margin-top: 3px; margin-left: 20px;" class="pull-right">
    		
    	</div>					
    </div>
</div>
<!---代码分享-->


<!--讨论区-->






<!--讨论区结束-->
 


</div>
   
      <!--右侧代码-->  
       <div class="span4">
			
             <div class="t-20 mygz">
				 
                 <dl>
                  <dd><p class="t">关注</p><p>1</p></dd>
                  <dd class="border"><p class="t">分享</p><p>0</p></dd>
                  <dd><p class="t">讨论</p><p>2</p></dd>      
                 <div class="mmclear"></div>                
                 </dl>
                 
				 
			</div>
               <div class="label-div t-20 border-all">
		<div class="l-15"><h3 style="padding-bottom: 14px;" class="label-title border-b b-20 small clearfix">关注我们</h3></div>
				<div class="l-15 home-other clearfix">
					<a target="_blank" class="home-sina" title="新浪微博" href="http://weibo.com/3642854252/"><img style="width: 20%;max-width: 36px;display: inline-block;" src="__PUBLIC__/images/sina.png" alt="新浪微博"></a>
					<a target="_blank" class="home-qq" title="腾讯微博" href="http://t.qq.com/shengwu___tansuo"><img style="width: 20%;max-width: 36px;display: inline-block;" src="__PUBLIC__/images/qq.png" alt="腾讯微博"></a>
					<a target="_blank" class="home-renren" title="人人网" href="http://www.renren.com/600991382"><img style="width: 20%;max-width: 36px;display: inline-block;" src="__PUBLIC__/images/rr.png" alt="人人网"></a>
				  <a style="margin-right: 0;" target="_blank" class="home-linkin" title="LinkedIn" href="http://cn.linkedin.com/pub/bio-discover/38/4b6/a27"><img style="width: 20%;max-width: 36px;display: inline-block;" src="__PUBLIC__/images/in.png" alt="LinkedIn"></a>
				</div>
				<!--<div class="l-15 t-20"><img src="images/mm.png"></div>--->
				<p style="margin-bottom: 0;" class="l-15 t-5 fc999">扫描微信，随时获得最新资讯</p>
			</div>
        
            
            <div class="label-div t-20 border-all">
				<div class="l-15">
               		 <h3 class="label-title border-b b-15 small clearfix" style="padding-bottom: 14px;">关注咨询</h3>
                </div>
				<div class="label-main tody-hot l-15" >
					<ul>
					  <li><a class="icon-css ie6png" href="">标题标题标题标题标题标题题标题</a></li>
                      
                   
                     
					</ul>
				</div>
			</div>
            
            
            
             <div class="label-div t-20 border-all">
				<div class="l-15">
               		 <h3 class="label-title border-b b-15 small clearfix" style="padding-bottom: 14px;">最多分享</h3>
                </div>
				<div class="label-main tody-hot l-15" >
					<ul>
					  <li><a href="">标题标题标题标题标题标题题标题</a></li>
                
                      
					</ul>
				</div>
			</div>
            
            
            
             <div class="label-div t-20 border-all">
				<div class="l-15">
               		 <h3 class="label-title border-b b-15 small clearfix" style="padding-bottom: 14px;">最多评论</h3>
                </div>
				<div class="label-main tody-hot l-15" >
					<ul>
					  <li><a href="">标题标题标题标题标题标题题标题</a></li>
                   
                    
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
/*<![CDATA[*/
jQuery(function($){
$('.add-emote').live('click',function(){get_face2face(this,'face.html')});
$('.face_title div').live('click',function(){face2face(this)});
$('.add_comment_submit').live('click',function(){add_comment_submit_fn(this,$(this).parents('form').attr('id'))});

});
/*]]>*/
</script>


<script type="text/javascript">
//回到顶部
backToTop('body');
</script>
</body>
</html>