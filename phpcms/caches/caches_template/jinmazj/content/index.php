<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--main-->
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
                            <script language="javascript"
                                    src="<?php echo APP_PATH;?>index.php?m=poster&c=index&a=show_poster&id=11"></script>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--container end-->
</div>
<!--滚动ad end -->
<!-- 正文start-->
<div class="contentbox">
    <!--container start-->
    <div class="container">
        <!--row start-->
        <div class="row">
            <!--推荐位滚动图片start-->
            <!--col-sm-4 start-->
            <div class="col-sm-4">
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
            <!--col-sm-4 end -->
            <!--推荐位滚动图片end-->
            <!--热点新闻start-->
            <!--col-sm-4 start-->
            <div class="col-sm-4">
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
            <!--金码新闻频道start-->
            <!--col-sm-4 start-->
            <div class="col-sm-4">
                <div class="newsbox left">
                    <div class="title01">
                        <div class="weather">
                            <iframe width="180" scrolling="no" height="20" frameborder="0" allowtransparency="true"
                                    src="http://i.tianqi.com/index.php?c=code&id=1&icon=4&py=taiyuan&wind=1&num=1"></iframe>
                        </div>
                        <ul class="SwapTab01">
                            <li class="fb"><a target="_blank" href="<?php echo $CATEGORYS['19']['url'];?>"><?php echo $CATEGORYS['19']['catname'];?></a>
                            </li>
                        </ul>
                    </div>
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
                </div>
            </div>
            <!--col-sm-4 end -->
            <!--金码新闻频道end-->
        </div>
        <!--row end-->
        <!--row start-->
        <div class="row">
            <!--col-sm-4 start-->
            <div class="col-sm-4">

            </div>
            <!--col-sm-4 end -->
        </div>
        <!--row end-->
    </div>
    <!--container end-->
</div>
<!--正文end-->


<script type="text/javascript" src="<?php echo JS_PATH;?>pic/script.js"></script>


<script type="text/javascript">
    $(function () {
        new slide("#main-slide", "cur", 310, 260, 1);//焦点图
        new SwapTab(".SwapTab", "span", ".tab-content", "ul", "fb");//排行TAB
    })
</script>
<?php include template("content","footer"); ?>