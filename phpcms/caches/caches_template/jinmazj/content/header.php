<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh-CN">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->

<meta http-equiv="cache-control" content="max-age=0">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT">
<meta http-equiv="pragma" content="no-cache">
<!-- Bootstrap -->

<!--script src="<?php echo JS_PATH;?>pic/jquery-1.4a2.min.js" type="text/javascript"></script>
<script src="<?php echo JS_PATH;?>pic/jquery.KinSlideshow-1.2.1.min.js" type="text/javascript"></script-->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>

<![endif]-->
<title><?php if(isset($SEO['title']) && !empty($SEO['title'])) { ?><?php echo $SEO['title'];?><?php } ?><?php echo $SEO['site_title'];?></title>
<meta name="keywords" content="<?php echo $SEO['keyword'];?>">
<meta name="description" content="<?php echo $SEO['description'];?>">

</head>
<body>
<div class="body-top">
		<div class="container">
			<div class="row">
				<div class="col-md-8 hidden-xs">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2e3bec5eab254972ef7678fb28fb15b9&action=position&posid=9&order=id&num=10&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('posid'=>'9','order'=>'id',)).'2e3bec5eab254972ef7678fb28fb15b9');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'9','order'=>'id','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
						<div id="announ">
							 <ul>
							 <?php $n=1; if(is_array($data)) foreach($data AS $k => $v) { ?>
								  <li><a href="<?php echo $v['url'];?>"><?php echo $v['title'];?></a></li>
								  <?php $n++;}unset($n); ?>
							 </ul>
						</div>
				   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
					<?php echo runhook('glogal_header')?>

					</div>
				    
					<!--登录/注册-->
					<div class="col-md-4">
					<!--a href="<?php echo APP_PATH;?>index.php?m=content&c=rss&siteid=<?php echo get_siteid();?>" class="rss ib">rss</a--><span class="rt"><script type=    "text/javascript">	document.write('<iframe src="<?php echo APP_PATH;?>index.php?m=member&c=index&a=mini&forward='+encodeURIComponent(location.href)+'&siteid=<?php echo get_siteid();?>" allowTransparency="true"  width="500" height="24" frameborder="0" scrolling="no"></iframe>')</script></span>
					
					</div>
				</div>	
			</div>

		</div>
	
</div>
<!-- logo -->
<div class="warp hidden-xs">
	<div class="logo">
		<div class="logo-l">
			<a href=""><img src="<?php echo IMG_PATH;?>JinMa/logo.gif" height="78" width="215"   alt=""></a>
		</div>
		<div class="logo-c">
			<a href=""><img src="<?php echo IMG_PATH;?>JinMa/kongbao_370.gif" alt=""></a>
		</div>
		<div class="logo-r">
			<a href=""><img src="<?php echo IMG_PATH;?>JinMa/51idc_370.gif" alt=""></a>
		</div>
	</div>
</div>
<!--search start-->
<div class="search-form">
	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-8">
			   <div class="bdd">
					<form action="<?php echo APP_PATH;?>index.php" method="get" target="_blank">
						<input type="hidden" name="m" value="search"/>
						<input type="hidden" name="c" value="index"/>
						<input type="hidden" name="a" value="init"/>
						<input type="hidden" name="typeid" value="<?php echo $typeid;?>" id="typeid"/>
						<input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
						<input type="text" class="text" name="q" id="q" width="350px"/><input type="submit" value="搜 索" class="button" />
					</form>
				</div>
				<div class="tab" id="search">
					<?php $j=0?>
					<?php $search_model = getcache('search_model_'.$siteid, 'search');?>
					<?php $n=1;if(is_array($search_model)) foreach($search_model AS $k=>$v) { ?>
					<?php $j++;?>
						<a href="javascript:;" onclick="setmodel(<?php echo $v['typeid'];?>, $(this));" style="outline:medium none;" hidefocus="true" <?php if($j==1 && $typeid=$v['typeid']) { ?> class="on" <?php } ?>><?php echo $v['name'];?></a><?php if($j != count($search_model)) { ?><span> | </span><?php } ?>
					<?php $n++;}unset($n); ?>
					<?php unset($j);?>
				</div>
			</div>
		</div>
	</div>
</div>
<!--search end-->

	<!--div class="logo"><a href="<?php echo siteurl($siteid);?>/"><img src="<?php echo IMG_PATH;?>v9/logo.jpg" /></a></div-->
    <div class="topNav navbar" role="navigation"><!--div class="nav-bar"-->
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			  <span class="sr-only">Toggle navigation</span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			</button>
			<a class="navbar-brand font-logo" href="<?php echo siteurl($siteid);?>" target="_self">
               <!--img src="statics/images/JinMa/logo.png" height="45" width="120" alt="JinMaZjCloud" -->JinMaZjCloud
             </a> 
         </div>
		 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<map>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
				<ul class="nav navbar-nav navbar-right" id="menu"> <!--class="nav-site"-->
				<li><a href="<?php echo siteurl($siteid);?>"><span>首页</span></a></li>
				<!--<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<!--li class="line">|</li-->
				<!--<li><a href="<?php echo $r['url'];?>"><span><?php echo $r['catname'];?></span></a></li>
				<?php $n++;}unset($n); ?>-->
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					   <?php if($r[child]) { ?>
						  <li class="">
							  <a href="<?php echo $r['url'];?>"  ><?php echo $r['catname'];?><span class="caret"></span></a>
							  <ul class="dropdown-menu dropdown-caret">
								   <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ff69912bd31d976bbe749667ef3ac337&action=category&catid=%24r%5Barrchildid%5D&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$r[arrchildid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
										 <?php $n=1;if(is_array($data)) foreach($data AS $rs) { ?>
											   <li><a href="<?php echo $rs['url'];?>"><?php echo $rs['catname'];?></a></li>
											   <ul class="dropdown-menu dropdown-caret">
											      <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ff69912bd31d976bbe749667ef3ac337&action=category&catid=%24r%5Barrchildid%5D&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$r[arrchildid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
												     <?php $n=1;if(is_array($data)) foreach($data AS $rss) { ?>
													  <li><a href="<?php echo $rs['url'];?>"><?php echo $rs['catname'];?></a></li>
													 <?php $n++;}unset($n); ?>
												  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
											   </ul>
										  <?php $n++;}unset($n); ?>
								   <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							  </ul>
                           </li>
                        <?php } else { ?>
                           <li><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
                       <?php } ?>
               		<?php $n++;}unset($n); ?>
		
				</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			<?php echo runhook('glogal_menu')?>
			</map>
          </div> 
	        <!--
			<?php if($top_parentid) { ?>
			<div class="dropdown-menu dropdown-caret"><!-- <div class="subnav">-->
				<!--<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=894824ec88c3701696ad9d879ede6b1d&action=category&catid=%24top_parentid&num=15&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$top_parentid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a><!--span> | </span-->
					<!--<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
				<!--a href="<?php echo APP_PATH;?>index.php?m=video&c=index&a=album">视频专辑</a> <span> | </span>
				<?php if($modelid) { ?><a href="<?php echo APP_PATH;?>index.php?m=content&c=search&catid=<?php echo $catid;?>">搜索</a><?php } ?>-->
			<!--</div>
			<?php } ?>-->
		</div>
	</div>
<link href="<?php echo CSS_PATH;?>bootsrap/bootstrap.min.css" rel="stylesheet">


<link href="<?php echo CSS_PATH;?>mywebsite_default.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>font-awesome.css">
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>override.css">
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>base.css">
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>shCoreDefault.css">
<link href="<?php echo CSS_PATH;?>reset.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>jquery.sgallery.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>search_common.js"></script>

<script type="text/javascript" src="<?php echo JS_PATH;?>pic/koala.min.1.5.js"></script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo JS_PATH;?>bootsrap/bootstrap.min.js"></script>
<script src="<?php echo JS_PATH;?>bootsrap/8d819635.homepage.js"></script>

<script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>

<script type="text/javascript" charset="utf-8" src="<?php echo JS_PATH;?>a.js"></script>

<script type="text/javascript" src="<?php echo JS_PATH;?>shCore.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>shAutoloader.js"></script>
<script src="<?php echo JS_PATH;?>version.js" charset="UTF-8" type="text/javascript"></script>
<script src="<?php echo JS_PATH;?>push.js"></script>
<script src="<?php echo JS_PATH;?>share.js"></script>
<link href="http://changyan.itc.cn/css/plugin/emoji.css" type="text/css" rel="stylesheet">

<script type="text/javascript">

	$(function(){

		$("#menu > li").bind('mouseenter', function() {
			$(this).addClass('open');
		});

		$("#menu > li").bind('mouseleave', function() {
			$(this).removeClass('open');
		});

	});
</script>

<script type="text/javascript">
	$(function(){
		startmarquee('announ',22,1,500,3000);
	})
</script>
