<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--main-->
<!--suppress ALL -->
<div class="context">
    <!--container start-->
    <div class="container">
        <div class="row">
            <!--left start-->
            <div class="col-sm-9" id="content">
                <!--滚动ad start -->
                <!--<div class="contentbox bot hidden-xs">
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
                        <!--div class="callbacks_container">
                            <ul class="rslides" id="slider">
                                <li>
                                    <script language="javascript"
                                            src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=11"></script>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div-->
                <!--滚动ad end -->
                <div class="col-sm-12">

                    <!--推荐位滚动图片start-->
                    <!--col-sm-6 start-->
                    <div class="col-sm-6">
                        <!--焦点图-->
                        <div class="section-focus-pic" id="section-focus-pic">
                            <div class="pages" data-scro="list">
                                <ul>
                                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=132335f99fcf4a0ddd78b4f4e1cd12b9&action=position&posid=1&order=listorder+DESC&thumb=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','thumb'=>'1','limit'=>'5',));}?>
                                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                    <li class="item" style="left:0px;">
                                        <a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo thumb($r['thumb'],380,300);?>"
                                                                                   width="380" height="300"></a>

                                        <h3><a href="<?php echo $r['url'];?>" target="_blank" style="color:#FFF;text-decoration:none;"><?php echo str_cut($r['title'],30);?></a>
                                        </h3>

                                        <div></div>
                                    </li>
                                    <?php $n++;}unset($n); ?>
                                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                </ul>
                            </div>
                            <div class="controler" data-scro="controler">
                                <b class="down">1</b>
                                <b>2</b>
                                <b>3</b>
                                <b>4</b>
                                <b>5</b>
                            </div>
                            <div class="controler2" data-scro="controler2">
                                <a href="javascript:;" class="prev"><i></i></a>
                                <a href="javascript:;" class="next"><i></i></a>
                            </div>
                        </div>
                        <!--焦点图-->
                    </div>
                    <!--col-sm-6 end -->
                    <!--推荐位滚动图片end-->

                    <!--热点新闻start-->
                    <!--col-sm-4 start-->
                    <div class="col-sm-6">
                        <div class="news-hot">
                            <div class="content">
                                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7597d0628da5720b0f05ffd2171f5a36&action=position&posid=2&order=listorder+DESC&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','order'=>'listorder DESC','limit'=>'3',));}?>
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                <h4 class="blue"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],36,'');?></a></h4>

                                <p><?php if($n==1) { ?><img src="<?php echo thumb($r[thumb],90,60);?>" width="90" height="60"/><?php } ?><?php echo str_cut($r[description],112);?>
                                </p>

                                <div class="bk20 hr">
                                    <hr/>
                                </div>
                                <?php $n++;}unset($n); ?>
                                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            </div>
                        </div>
                    </div>
                    <!--col-sm-4 end -->
                    <!--热点新闻end-->

                </div>

                <!--java知识start-->
                <div class="col-sm-12">
                    <div class="bk10"></div>
                    <div class="panel panel-default" >
                        <div class="panel-body box">
                            <h5 class="title-1">java知识专栏<a href="<?php echo APP_PATH;?>index.php?m=special&c=index&a=special&siteid=<?php echo $siteid;?>" class="more">更多>></a></h5>
                            <div class="row">
                                <div class="col-sm-3">
                                    <a href="http://www.manzj.net/it/37.html" target="_blank" class="thumbnail">
                                        <img alt="30岁左右的程序员，你迷惘了吗?[转载]" class="img-responsive" src="%E7%A0%81%E5%86%9C%E4%B9%8B%E5%AE%B6-www.manzj.net_files/20160121041159419.jpg">
                                    </a>
                                </div>
                                <div class="col-sm-9">
                                    <h4 class="h4o"><a href="http://www.manzj.net/it/37.html" target="_blank">30岁左右的程序员，你迷惘了吗?[转载]</a></h4>
                                    <ul class="list-inline">
                                        <li><i class="fa fa-clock-o fa-fw"></i> 2016-01-21</li>
                                        <li><i class="fa fa-eye fa-fw"></i> 点击量：45</li>
                                        <li><i class="fa fa-comments-o fa-fw"></i> 评论：<span id="sourceId::37" class="cy_cmt_count">11</span></li>
                                    </ul>
                                    <p class="note">
                                        [前言]　 本文写给30左右还奋斗于编写岗位的程序员们，因为在这个年龄段，可能技能、岗位、收入都已相对稳定，但同时，大家或多或少有些不   ...
                                    </p>
                                    <p>
                                        <span class="label label-info ">标签：</span>
                                        <a href="http://www.manzj.net/index.php?m=content&amp;c=tag&amp;a=lists&amp;tag=%E7%A8%8B%E5%BA%8F%E5%91%98">程序员</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--java知识end-->

                <!--.net知识start-->
                <div class="col-sm-12">
                    <div class="bk10"></div>
                    <div class="panel panel-default" >
                        <div class="panel-body box">
                            <h5 class="title-1">.net知识专栏<a href="<?php echo APP_PATH;?>index.php?m=special&c=index&a=special&siteid=<?php echo $siteid;?>" class="more">更多>></a></h5>
                            <div class="row">
                                <div class="col-sm-3">
                                    <a href="http://www.manzj.net/it/37.html" target="_blank" class="thumbnail">
                                        <img alt="30岁左右的程序员，你迷惘了吗?[转载]" class="img-responsive" src="%E7%A0%81%E5%86%9C%E4%B9%8B%E5%AE%B6-www.manzj.net_files/20160121041159419.jpg">
                                    </a>
                                </div>
                                <div class="col-sm-9">
                                    <h4 class="h4o"><a href="http://www.manzj.net/it/37.html" target="_blank">30岁左右的程序员，你迷惘了吗?[转载]</a></h4>
                                    <ul class="list-inline">
                                        <li><i class="fa fa-clock-o fa-fw"></i> 2016-01-21</li>
                                        <li><i class="fa fa-eye fa-fw"></i> 点击量：45</li>
                                        <li><i class="fa fa-comments-o fa-fw"></i> 评论：<span id="sourceId::37" class="cy_cmt_count">11</span></li>
                                    </ul>
                                    <p class="note">
                                        [前言]　 本文写给30左右还奋斗于编写岗位的程序员们，因为在这个年龄段，可能技能、岗位、收入都已相对稳定，但同时，大家或多或少有些不   ...
                                    </p>
                                    <p>
                                        <span class="label label-info ">标签：</span>
                                        <a href="http://www.manzj.net/index.php?m=content&amp;c=tag&amp;a=lists&amp;tag=%E7%A8%8B%E5%BA%8F%E5%91%98">程序员</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--.net知识end-->

                 <!--php知识start-->
                 <div class="col-sm-12">
                     <div class="bk10"></div>
                     <div class="panel panel-default" >
                         <div class="panel-body box">
                             <h5 class="title-1">php知识专栏<a href="<?php echo APP_PATH;?>index.php?m=special&c=index&a=special&siteid=<?php echo $siteid;?>" class="more">更多>></a></h5>
                             <div class="row">
                                 <div class="col-sm-3">
                                     <a href="http://www.manzj.net/it/37.html" target="_blank" class="thumbnail">
                                         <img alt="30岁左右的程序员，你迷惘了吗?[转载]" class="img-responsive" src="%E7%A0%81%E5%86%9C%E4%B9%8B%E5%AE%B6-www.manzj.net_files/20160121041159419.jpg">
                                     </a>
                                 </div>
                                 <div class="col-sm-9">
                                     <h4 class="h4o"><a href="http://www.manzj.net/it/37.html" target="_blank">30岁左右的程序员，你迷惘了吗?[转载]</a></h4>
                                     <ul class="list-inline">
                                         <li><i class="fa fa-clock-o fa-fw"></i> 2016-01-21</li>
                                         <li><i class="fa fa-eye fa-fw"></i> 点击量：45</li>
                                         <li><i class="fa fa-comments-o fa-fw"></i> 评论：<span id="sourceId::37" class="cy_cmt_count">11</span></li>
                                     </ul>
                                     <p class="note">
                                         [前言]　 本文写给30左右还奋斗于编写岗位的程序员们，因为在这个年龄段，可能技能、岗位、收入都已相对稳定，但同时，大家或多或少有些不   ...
                                     </p>
                                     <p>
                                         <span class="label label-info ">标签：</span>
                                         <a href="http://www.manzj.net/index.php?m=content&amp;c=tag&amp;a=lists&amp;tag=%E7%A8%8B%E5%BA%8F%E5%91%98">程序员</a>
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!--php知识end-->

                 <!--flex知识start-->
                 <div class="col-sm-12">
                     <div class="bk10"></div>
                     <div class="panel panel-default" >
                         <div class="panel-body box">
                             <h5 class="title-1">flex知识专栏<a href="<?php echo APP_PATH;?>index.php?m=special&c=index&a=special&siteid=<?php echo $siteid;?>" class="more">更多>></a></h5>
                             <div class="row">
                                 <div class="col-sm-3">
                                     <a href="http://www.manzj.net/it/37.html" target="_blank" class="thumbnail">
                                         <img alt="30岁左右的程序员，你迷惘了吗?[转载]" class="img-responsive" src="%E7%A0%81%E5%86%9C%E4%B9%8B%E5%AE%B6-www.manzj.net_files/20160121041159419.jpg">
                                     </a>
                                 </div>
                                 <div class="col-sm-9">
                                     <h4 class="h4o"><a href="http://www.manzj.net/it/37.html" target="_blank">30岁左右的程序员，你迷惘了吗?[转载]</a></h4>
                                     <ul class="list-inline">
                                         <li><i class="fa fa-clock-o fa-fw"></i> 2016-01-21</li>
                                         <li><i class="fa fa-eye fa-fw"></i> 点击量：45</li>
                                         <li><i class="fa fa-comments-o fa-fw"></i> 评论：<span id="sourceId::37" class="cy_cmt_count">11</span></li>
                                     </ul>
                                     <p class="note">
                                         [前言]　 本文写给30左右还奋斗于编写岗位的程序员们，因为在这个年龄段，可能技能、岗位、收入都已相对稳定，但同时，大家或多或少有些不   ...
                                     </p>
                                     <p>
                                         <span class="label label-info ">标签：</span>
                                         <a href="http://www.manzj.net/index.php?m=content&amp;c=tag&amp;a=lists&amp;tag=%E7%A8%8B%E5%BA%8F%E5%91%98">程序员</a>
                                     </p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!--flex知识end-->
            </div>
            <!--left end-->
             <!--right start-->
             <div class="col-sm-3">
                 <div class="row conr">
                     <!--new channel start-->
                     <div class="col-sm-12">
                         <div class="panel panel-default">
                             <div class="panel-body box">
                                 <h5 class="title-1"><?php echo $CATEGORYS['19']['catname'];?><a href="<?php echo $CATEGORYS['19']['url'];?>" class="more">更多>></a></h5>
                                     <!--div class="title01">
                                         <div class="weather">
                                             <iframe width="160" scrolling="no" height="20" frameborder="0" allowtransparency="true"
                                                     src="http://i.tianqi.com/index.php?c=code&id=1&icon=4&py=taiyuan&wind=1&num=1"></iframe>
                                         </div>
                                     </div-->
                                 <div class="tab-content01">
                                     <ul>
                                         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8d97d993e09f050519446b3cf7b0c435&action=lists&catid=19&num=1&order=id&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'19','order'=>'id',)).'8d97d993e09f050519446b3cf7b0c435');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'19','order'=>'id','limit'=>'1',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                                         <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                         <h1><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[title],25);?></a></h1>
                                         <?php $n++;}unset($n); ?>
                                         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

                                         <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ed9510257b24a591fc562098246b50a2&action=lists&catid=19&num=8&start=1&order=id&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>'19','order'=>'id',)).'ed9510257b24a591fc562098246b50a2');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'19','order'=>'id','limit'=>'1,8',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                                         <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                         <li><span class="time"><?php echo date("m-d",$r[inputtime]);?></span><a href="<?php echo $r['url'];?>"
                                                                                                     title="<?php echo $r['title'];?>"
                                                                                                     target="_blank"><?php echo $r['title'];?></a>
                                         </li>
                                         <?php $n++;}unset($n); ?>
                                         <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                                     </ul>
                                 </div>

                             </div><!---->
                         </div>
                     </div>
                     <!--new channel end-->
                     <!--排行榜 start-->
                     <div class="col-sm-12">
                         <div class="panel panel-default">
                             <div class="panel-body box">
                                 <h5 class="title-1">排行榜</h5>
                             </div>
                         </div>
                     </div>
                     <!--排行榜 start-->

                     <!--专题 start-->
                     <div class="col-sm-12">
                         <div class="panel panel-default">
                             <div class="panel-body box">
                                 <h5 class="title-1">专题</h5>
                             </div>
                         </div>
                     </div>
                     <!--专题 start-->

                     <!--关注我们 start-->
                     <div class="col-sm-12">
                         <div class="panel panel-default">
                             <div class="panel-body box">
                                 <div class="thumbnail">
                                     <img src="<?php echo IMG_PATH;?>JinMa/weixin/weixin.jpg" alt="金码之家" height="258" width="258">
                                     <div class="caption">
                                         <h3>微信关注我们</h3>
                                         <p class="note">专业分享最新IT技术、文章的知识乐园。</p>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!--关注我们 start-->
                 </div>
             </div>
             <!--right end-->
        </div>
        <!--row end-->
    </div>
    <!--container end-->
</div>
<!--main end-->

<script type="text/javascript" src="<?php echo JS_PATH;?>pic/script.js"></script>


<script type="text/javascript">
    $(function () {
        new slide("#main-slide", "cur", 310, 260, 1);//焦点图
        new SwapTab(".SwapTab", "span", ".tab-content", "ul", "fb");//排行TAB
    })
</script>
<?php include template("content","footer"); ?>