<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<!doctype html >
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang="zh-CN"> <!--<![endif]-->
<!--header引用-->
<?php include template("content","header"); ?>
<body ng-app="dashBoard" class="body-init homepage" ng-controller="UserCtrl" ng-class="[bodyClass, activeClass]" ng-cloak>
<script type="text/javascript">
	$(function () {
		new slided("#main-slide","cur",350,260,1);//焦点图
			// Slideshow 
	$("#slider").responsiveSlides({
		auto: true,
		pager: false,
		nav: true,
		speed: 500,
		timeout:4000,
		pager: true, 
		pauseControls: true,
		namespace: "callbacks"
	});
</script>
<!--首页图片滚动-->
<!--<script type="text/javascript">
$(function () {
	// Slideshow 
	$("#slider").responsiveSlides({
		auto: true,
		pager: false,
		nav: true,
		speed: 500,
		timeout:4000,
		pager: true, 
		pauseControls: true,
		namespace: "callbacks"
	});
});
</script>-->

<!--[if lt IE 9]>
<div class="section dashboard-banner for-ie-suckers" style="margin: 0;">
  <div class="container">
    <div class="row">
      <b>361 安全卫士提醒您：</b>您的 IE 浏览器不被支持。试试其他的：<a href="http://www.google.com/chrome">Google 浏览器</a>、<a href="http://www.apple.com/cn/safari/">Safari 浏览器</a>、<a href="http://www.firefox.com/">Firefox 浏览器</a>
    </div>
  </div>
</div>
<![endif]-->
<div class="main">
	<!--滚动ad start -->
	<div class="contentbox bot hidden-xs">
		<div class="container"><!--container start-->
			<div class="row">
				<div class="col-sm-12">
					<!-- Slideshow -->
					<!--div class="callbacks_container">
						<ul class="rslides" id="slider">
							<li><a href="http://www.17sucai.com/"><img src="<?php echo IMG_PATH;?>JinMa/1.jpg" alt=""></a></li>
							<li><a href="http://www.17sucai.com/"><img src="<?php echo IMG_PATH;?>JinMa/2.jpg" alt=""></a></li>
							<li><a href="http://www.17sucai.com/"><img src="<?php echo IMG_PATH;?>JinMa/1.jpg" alt=""></a></li>
							<li><a href="http://www.17sucai.com/"><img src="<?php echo IMG_PATH;?>JinMa/2.jpg" alt=""></a></li>
						</ul>
					</div-->
					<div class="callbacks_container">
						<ul class="rslides" id="slider">
						<li>
						<script language="javascript" src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=11"></script>
						</li>
						</ul>
					</div>
				</div>
			</div>
		</div><!--container end-->
	</div>
	<!--滚动ad end -->
	<!-- 正文start-->
	<div class="contentbox bot">
		<div class="container"><!--container start-->
			<div class="row">
				<!--推荐位滚动图片start-->
				<div class="col-sm-4"><!--col-sm-4 start-->
					<div class="slides">
						<div class="FocusPic">
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dcd1c47627b910509414b85662be50cc&action=position&posid=1&order=listorder+DESC&thumb=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','thumb'=>'1','limit'=>'5',));}?>
							<div class="content" id="main-slide">
								<div class="changeDiv"> 
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<a href="<?php echo $r['url'];?>" title="<?php echo str_cut($r['title'],30);?>"><img src="<?php echo thumb($r['thumb'],350,260);?>" alt="<?php echo $r['title'];?>" width="350" height="260" /></a>
								<?php $n++;}unset($n); ?>
								</div>
							</div>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</div>
					</div>
				</div><!--col-sm-4 end -->
				<!--推荐位滚动图片end-->
				<div class="col-sm-4"><!--col-sm-4 start-->
					<!--热点新闻start-->
					<div class="news-hot">
						<div class="content">
						<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7a7a0e753182bcf4d42b038435e627ed&action=position&posid=2&order=listorder+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','order'=>'listorder DESC','limit'=>'3',));}?>
						 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
							<h4 class="blue"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],36,'');?></a></h4>
							<p><?php if($n==1) { ?><img src="<?php echo thumb($r[thumb],90,60);?>" width="90" height="60"/><?php } ?><?php echo str_cut($r[description],112);?></p>
							<div class="bk20 hr"><hr /></div>
						   <?php $n++;}unset($n); ?>  
						 <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>   
						</div>
					</div>
				</div><!--col-sm-4 end -->
				<!--热点新闻end-->
				<div class="col-sm-4"><!--col-sm-4 start-->
					<!--newschannel start-->
					<div class="newsbox left">
						<div class="title01">
							<div class="weather">
								<iframe width="180" scrolling="no" height="20" frameborder="0" allowtransparency="true" src="http://i.tianqi.com/index.php?c=code&id=1&icon=4&py=taiyuan&wind=1&num=1"></iframe>
							</div>
							<ul class="SwapTab01">
								<li class="fb"><a target="_blank" href="<?php echo $CATEGORYS['19']['url'];?>"><?php echo $CATEGORYS['19']['catname'];?></a></li>
							</ul>
						</div>
						<div class="tab-content01">
							<ul>
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f047a087e3793ae4c7f43b5b3da40c7f&action=lists&catid=19&num=1&order=id&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'19','order'=>'id',)).'f047a087e3793ae4c7f43b5b3da40c7f');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'19','order'=>'id','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<h1><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[title],25);?></a></h1>
								<?php $n++;}unset($n); ?>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
								
								<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=389565199fb7973c1b35f58c68f7a924&action=lists&catid=19&num=8&start=1&order=id&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'19','order'=>'id',)).'389565199fb7973c1b35f58c68f7a924');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'19','order'=>'id','limit'=>'1,8',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<li><span class="time"><?php echo date("m-d",$r[inputtime]);?></span><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a></li>
								<?php $n++;}unset($n); ?>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							</ul>
						</div>
					</div-->
					<!--newschannel end-->
				</div><!--col-sm-4 end -->
				
			</div><!--container end-->
		</div>
		<!--正文end-->
	</div>
</div>


<!--footer引用-->
<?php include template("content","footer"); ?>
</body>
</html>
