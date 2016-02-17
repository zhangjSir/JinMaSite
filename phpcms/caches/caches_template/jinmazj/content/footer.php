<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><div class="foot">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<p class="bj">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e3d146232857be4579899ac97dbd2f7c&action=category&catid=1&num=15&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'1','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'15',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
				<a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['catname'];?></a> |
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				<a href="<?php echo APP_PATH;?>index.php?m=link" target="_blank">友情链接</a>
				<br />
				<p class="note text-center">Copyright  &copy; 2016 www.jinmazj.net金码之家.</p>
				<p class="note text-center"><strong><a href="http://www.miitbeian.gov.cn/" target="_blank">www.jinmazj.net金码之家</a></strong> <!--em><?php echo get_pc_version(1);?></em--> <img src="<?php echo IMG_PATH;?>copyright.gif"/><?php echo tjcode();?><?php echo runhook('glogal_footer')?>
				<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1256849348'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1256849348%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script><span id="cnzz_stat_icon_1256849348"><a href="http://www.cnzz.com/stat/website.php?web_id=1256849348" target="_blank" title="站长统计"><img src="%E7%A0%81%E5%86%9C%E4%B9%8B%E5%AE%B6-www.manzj.net_files/pic.gif" border="0" hspace="0" vspace="0"></a></span><script src="%E7%A0%81%E5%86%9C%E4%B9%8B%E5%AE%B6-www.manzj.net_files/z_stat.php" type="text/javascript"></script><script src="%E7%A0%81%E5%86%9C%E4%B9%8B%E5%AE%B6-www.manzj.net_files/core.php" charset="utf-8" type="text/javascript"></script></p>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$(function(){
	$(".picbig").each(function(i){
		var cur = $(this).find('.img-wrap').eq(0);
		var w = cur.width();
		var h = cur.height();
	   $(this).find('.img-wrap img').LoadImage(true, w, h,'<?php echo IMG_PATH;?>msg_img/loading.gif');
	});
})
</script>
</body>
</html>