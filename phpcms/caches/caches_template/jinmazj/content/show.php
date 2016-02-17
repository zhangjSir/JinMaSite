<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="context">
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<div class="col-left">
					<div class="crumbs">
						<a href="<?php echo siteurl($siteid);?>">首页</a><span> &gt; </span><?php echo catpos($catid);?> <?php echo $title;?>
					</div>
					<div class="panel panel-default" id="Article">
						<div class="panel-body" >
							<p class="text-center article-title"><a><?php echo $title;?></a></p>
							<div class="text-center">
								<ul class="list-inline">
									<li>日期：<?php echo $inputtime;?></li>
									<li>来源：<?php echo $copyfrom;?></li>
									<!--<li>评论：<a href="#comment_iframe" id="comment">0</a> </li>-->
									<li>点击：<span id="hits"></span></li>
								</ul>
							</div>
							<div class="showContext">
									<!--<?php if($description) { ?><div class="summary" ><?php echo $description;?></div><?php } ?>-->
									<?php if($allow_visitor==1) { ?>
									<?php echo $content;?>
									<!--内容关联投票-->
									<?php if($voteid) { ?><script language="javascript" src="<?php echo APP_PATH;?>index.php?m=vote&c=index&a=show&action=js&subjectid=<?php echo $voteid;?>&type=2"></script><?php } ?>

									<?php } else { ?>
									<CENTER><a href="<?php echo APP_PATH;?>index.php?m=content&c=readpoint&allow_visitor=<?php echo $allow_visitor;?>"><font color="red">阅读此信息需要您支付 <B><I><?php echo $readpoint;?> <?php if($paytype) { ?>元<?php } else { ?>点<?php } ?></I></B>，点击这里支付</font></a></CENTER>
									<?php } ?>

									<?php if($titles) { ?>
									<fieldset>
										<legend class="f14">本文导航</legend>
										<ul class="list blue row-2">
											<?php $n=1;if(is_array($titles)) foreach($titles AS $r) { ?>
											<li><?php echo $n;?>、<a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a></li>
											<?php $n++;}unset($n); ?>
										</ul>
									</fieldset>
									<?php } ?>

									<div id="pages" class="text-c"><?php echo $pages;?></div>
								</div><!--showContext end-->
							<!--share start-->
							<div data-bd-bind="1455502637003" class="bdsharebuttonbox bdshare-button-style1-16"><a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone">QQ空间</a><a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina">新浪微博</a><a title="分享到腾讯微博" href="#" class="bds_tqq" data-cmd="tqq">腾讯微博</a><a title="分享到人人网" href="#" class="bds_renren" data-cmd="renren">人人网</a><a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin">微信</a><a href="#" class="bds_more" data-cmd="more">分享到：</a></div>
								<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"1","bdSize":"16"},"share":{"bdSize":16},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
								<!--span id='favorite'>
									<a href="javascript:;" onclick="add_favorite('<?php echo addslashes($title);?>');" class="t6">收藏</a>
								</span-->
							<div><!--share end-->
							<!--相关热词搜索 start-->
							<p style="margin-bottom:10px">
								<strong>相关热词搜索：</strong><?php $n=1;if(is_array($keywords)) foreach($keywords AS $keyword) { ?><a href="<?php echo APP_PATH;?>index.php?m=content&c=tag&a=lists&tag=<?php echo urlencode($keyword);?>" class="blue"><?php echo $keyword;?></a> 	<?php $n++;}unset($n); ?>
							</p><!--相关热词搜索 end-->
							<!--声明 start-->
							<div class="alert alert-danger" role="alert">

								除非特别声明，金码之家均为原创或投稿报道，转载请注明作者及原文链接
								<p>原文地址：<a href="http://www.jinmazj.net/it/37.html" alt="<?php echo $title;?>">http://www.jinmazj.net/it/37.html</a></p>
							</div><!--声明 end-->
							<p class="f14">
								<strong>上一篇：</strong><a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a><br />
								<strong>下一篇：</strong><a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a>
							</p>
							<div class="bk10"></div>
					   		<!--<?php if($allow_comment && module_exists('comment')) { ?>
					   		<iframe src="<?php echo APP_PATH;?>index.php?m=comment&c=index&a=init&commentid=<?php echo id_encode("content_$catid",$id,$siteid);?>&iframe=1" width="100%" height="100%" id="comment_iframe" frameborder="0" scrolling="no"></iframe>-->
					  <!--<div class="box">
								<h5>评论排行</h5>
								 <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"comment\" data=\"op=comment&tag_md5=9eeaba0a57bcf88c1b4779f4dc232d7a&action=bang&siteid=%24siteid&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('siteid'=>$siteid,)).'9eeaba0a57bcf88c1b4779f4dc232d7a');if(!$data = tpl_cache($tag_cache_name,3600)){$comment_tag = pc_base::load_app_class("comment_tag", "comment");if (method_exists($comment_tag, 'bang')) {$data = $comment_tag->bang(array('siteid'=>$siteid,'limit'=>'20',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
								<ul class="content list blue f14 row-2">
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<li>·<a href="<?php echo $r['url'];?>" target="_blank"><?php echo str_cut($r[title], 40);?></a><span>(<?php echo $r['total'];?>)</span></li>
									<?php $n++;}unset($n); ?>
								</ul>
								<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</div>
						<?php } ?>
				  </div>-->
					<!--<div class="col-auto">
						<div class="box">
							<h5 class="title-2">频道总排行</h5>
							<ul class="content digg">
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=58900d29a2d86f6669bfff23ba8fcaf2&action=hits&catid=%24catid&num=10&order=views+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>$catid,'order'=>'views DESC',)).'58900d29a2d86f6669bfff23ba8fcaf2');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$catid,'order'=>'views DESC','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
									<li><a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title], 28, '');?></a></li>
								<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							</ul>
						</div>
						<div class="bk10"></div>
						<div class="box">
							<h5 class="title-2">频道本月排行</h5>
							<ul class="content rank">
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d09a3bdd996817c252fccd081b70bebc&action=hits&catid=%24catid&num=10&order=monthviews+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>$catid,'order'=>'monthviews DESC',)).'d09a3bdd996817c252fccd081b70bebc');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$catid,'order'=>'monthviews DESC','limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<li><span><?php echo number_format($r[monthviews]);?></span><a href="<?php echo $r['url'];?>"<?php echo title_style($r[style]);?> class="title" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],56,'...');?></a></li>
								<?php $n++;}unset($n); ?>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							</ul>
						</div>
					</div>-->
							<div  id="cyEmoji" role="cylabs" data-use="emoji" sourceid="<?php echo id_encode("content_$catid",$id,$siteid);?>">
								<div class="cy-wrapper">
									<div class="emoji-tip">您看完此新闻的心情是</div>
									<?php if(module_exists('mood')) { ?><script type="text/javascript" src="<?php echo APP_PATH;?>index.php?m=mood&c=index&a=init&id=<?php echo id_encode($catid,$id,$siteid);?>"></script><?php } ?>

								</div>
							</div>

							<div id="SOHUCS" sid="<?php echo id_encode("content_$catid",$id,$siteid);?>"></div>
							<script charset="utf-8" type="text/javascript" src="<?php echo JS_PATH;?>changyan.js"></script>
					</div><!--panel panel-default end-->
				</div><!--col-left end-->
			</div><!--col-sm-9 end-->
		</div><!--row end-->
	</div><!--container end-->
</div><!--context end-->



<script type="text/javascript">
<!--
	function show_ajax(obj) {
		var keywords = $(obj).text();
		var offset = $(obj).offset();
		var jsonitem = '';
		$.getJSON("<?php echo APP_PATH;?>index.php?m=content&c=index&a=json_list&type=keyword&modelid=<?php echo $modelid;?>&id=<?php echo $id;?>&keywords="+encodeURIComponent(keywords),
				function(data){
				var j = 1;
				var string = "<div class='point key-float'><div style='position:relative'><div class='arro'></div>";
				string += "<a href='JavaScript:;' onclick='$(this).parent().parent().remove();' hidefocus='true' class='close'><span>关闭</span></a><div class='contents f12'>";
				if(data!=0) {
				  $.each(data, function(i,item){
					j = i+1;
					jsonitem += "<a href='"+item.url+"' target='_blank'>"+j+"、"+item.title+"</a><BR>";
					
				  });
					string += jsonitem;
				} else {
					string += '没有找到相关的信息！';
				}
					string += "</div><span class='o1'></span><span class='o2'></span><span class='o3'></span><span class='o4'></span></div></div>";		
					$(obj).after(string);
					$('.key-float').mouseover(
						function (){
							$(this).siblings().css({"z-index":0})
							$(this).css({"z-index":1001});
						}
					)
					$(obj).next().css({ "left": +offset.left-100, "top": +offset.top+$(obj).height()+12});
				});
	}

	function add_favorite(title) {
		$.getJSON('<?php echo APP_PATH;?>api.php?op=add_favorite&title='+encodeURIComponent(title)+'&url='+encodeURIComponent(location.href)+'&'+Math.random()+'&callback=?', function(data){
			if(data.status==1)	{
				$("#favorite").html('收藏成功');
			} else {
				alert('请登录');
			}
		});
	}

$(function(){
   $('#Article .showContext  img').LoadImage(true, 660, 660,'<?php echo IMG_PATH;?>s_nopic.gif');
	//$('#Article .content img').LoadImage(true, 660, 660,'<?php echo IMG_PATH;?>s_nopic.gif');
})
//-->
</script>
<script type="text/javascript">
	//window.changyan.api.config({
		//appid: 'cysfkj6cn',
		//conf: 'prod_63bdd7c9d91eb7e55f967cddfa4f0e8a'
	//});
	(function(){
		var appid = 'cysfkj6cn';
		var conf = 'prod_63bdd7c9d91eb7e55f967cddfa4f0e8a';
		var width = window.innerWidth || document.documentElement.clientWidth;
		if (width < 960) {
			window.document.write('<script id="changyan_mobile_js" charset="utf-8" type="text/javascript" src="http://changyan.sohu.com/upload/mobile/wap-js/changyan_mobile.js?client_id=' + appid + '&conf=' + conf + '"><\/script>'); } else { var loadJs=function(d,a){var c=document.getElementsByTagName("head")[0]||document.head||document.documentElement;var b=document.createElement("script");b.setAttribute("type","text/javascript");b.setAttribute("charset","UTF-8");b.setAttribute("src",d);if(typeof a==="function"){if(window.attachEvent){b.onreadystatechange=function(){var e=b.readyState;if(e==="loaded"||e==="complete"){b.onreadystatechange=null;a()}}}else{b.onload=a}}c.appendChild(b)};loadJs("http://changyan.sohu.com/upload/changyan.js",function(){window.changyan.api.config({appid:appid,conf:conf})}); } })();
	<!--prod_63bdd7c9d91eb7e55f967cddfa4f0e8a-->
</script>
<!--<script type="text/javascript">
	SyntaxHighlighter.autoloader(
			'applescript      http://www.manzj.net/statics/js/diy/scripts/shBrushAppleScript.js',
			'actionscript3 as3    http://www.manzj.net/statics/js/diy/scripts/shBrushAS3.js',
			'bash shell       http://www.manzj.net/statics/js/diy/scripts/shBrushBash.js',
			'coldfusion cf      http://www.manzj.net/statics/js/diy/scripts/shBrushColdFusion.js',
			'cpp c          http://www.manzj.net/statics/js/diy/scripts/shBrushCpp.js',
			'obj-c objc       http://www.manzj.net/statics/js/diy/scripts/shBrushObjC.js',
			'c# c-sharp csharp    http://www.manzj.net/statics/js/diy/scripts/shBrushCSharp.js',
			'css          http://www.manzj.net/statics/js/diy/scripts/shBrushCss.js',
			'delphi pascal      http://www.manzj.net/statics/js/diy/scripts/shBrushDelphi.js',
			'diff patch pas     http://www.manzj.net/statics/js/diy/scripts/shBrushDiff.js',
			'erl erlang       http://www.manzj.net/statics/js/diy/scripts/shBrushErlang.js',
			'groovy         http://www.manzj.net/statics/js/diy/scripts/shBrushGroovy.js',
			'haxe hx        http://www.manzj.net/statics/js/diy/scripts/shBrushHaxe.js',
			'java         http://www.manzj.net/statics/js/diy/scripts/shBrushJava.js',
			'jfx javafx       http://www.manzj.net/statics/js/diy/scripts/shBrushJavaFX.js',
			'js jscript javascript  http://www.manzj.net/statics/js/diy/scripts/shBrushJScript.js',
			'perl pl        http://www.manzj.net/statics/js/diy/scripts/shBrushPerl.js',
			'php          http://www.manzj.net/statics/js/diy/scripts/shBrushPhp.js',
			'text plain       http://www.manzj.net/statics/js/diy/scripts/shBrushPlain.js',
			'py python        http://www.manzj.net/statics/js/diy/scripts/shBrushPython.js',
			'ruby rails ror rb    http://www.manzj.net/statics/js/diy/scripts/shBrushRuby.js',
			'scala          http://www.manzj.net/statics/js/diy/scripts/shBrushScala.js',
			'sql          http://www.manzj.net/statics/js/diy/scripts/shBrushSql.js',
			'vb vbnet       http://www.manzj.net/statics/js/diy/scripts/shBrushVb.js',
			'ps powershell      http://www.manzj.net/statics/js/diy/scripts/shBrushPowerShell.js',
			'xml xhtml xslt html  http://www.manzj.net/statics/js/diy/scripts/shBrushXml.js'
	);
	SyntaxHighlighter.all();

</script>-->
<script language="JavaScript" src="<?php echo APP_PATH;?>api.php?op=count&id=<?php echo $id;?>&modelid=<?php echo $modelid;?>"></script>



<iframe id="bdSharePopup_selectshare1455502637009bg" class="bdselect_share_bg" style="display:none;" frameborder="0"></iframe>
<div data-bd-bind="1455502637009" id="bdSharePopup_selectshare1455502637009box" style="display:none;" share-type="selectshare" class="bdselect_share_box">
	<div class="selectshare-mod-triangle"><div class="triangle-border"></div><div class="triangle-inset"></div>
	</div><div class="bdselect_share_head"><span>分享到</span><a href="http://www.baidu.com/s?wd=&amp;tn=SE_hldp08010_vurs2xrp" class="bdselect_share_dialog_search" target="_blank"><i class="bdselect_share_dialog_search_i"></i>
	<span class="bdselect_share_dialog_search_span">百度一下</span></a><a class="bdselect_share_dialog_close"></a></div>
	<div class="bdselect_share_content"><ul class="bdselect_share_list bdshare-button-style1-16">
		<div class="bdselect_share_partners"></div><a href="#" class="bds_more" data-cmd="more"></a></ul></div>
</div><div data-bd-bind="1455502637011" id="bdimgshare_1455502637011" class="sr-bdimgshare sr-bdimgshare-list sr-bdimgshare-16 sr-bdimgshare-black" style="height:36px;line-height:26px;font-size:12px;width:autopx;display:none;">
	<div class="bdimgshare-bg"></div>
	<div class="bdimgshare-content bdsharebuttonbox bdshare-button-style0-16"><label class="bdimgshare-lbl">分享到：</label><a href="#" onclick="return false;" class="bds_qzone" data-cmd="qzone" hidefocus=""></a><a href="#" onclick="return false;" class="bds_tsina" data-cmd="tsina" hidefocus=""></a><a href="#" onclick="return false;" class="bds_tqq" data-cmd="tqq" hidefocus=""></a><a href="#" onclick="return false;" class="bds_renren" data-cmd="renren" hidefocus=""></a><a href="#" onclick="return false;" class="bds_weixin" data-cmd="weixin" hidefocus=""></a><a href="#" onclick="return false;" class="bds_more" data-cmd="more" hidefocus=""></a></div>
</div>
<?php include template("content","footer"); ?>