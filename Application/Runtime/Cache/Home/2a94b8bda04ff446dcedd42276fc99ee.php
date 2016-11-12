<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>熊大网络</title>
    <link rel="shortcut icon" href="/Public/Home/images/xiaologo.png" type="image/x-icon" />
    <link href="/Public/Home/css/css.css" rel="stylesheet" type="text/css" />
    <link href="/Public/Home/css/style3d.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/Public/Home/images/engine/style.css" media="screen" />
    <script type="text/javascript" src="/Public/js/jquery-1.11.3.js"></script>
    <script src="/Public/Home/js/jquery.hDialog.min.js"></script>
</head>

<body>
<div class="head">
    <div class="top">
        <div class="wrap clear">
            <div class="logo fl"><a href="/index.php/Index/index">
                <img src="/Public/Home/images/logo.png" width="170" height="70" /></a></div>
            <div class="infos fr clear">
                <p class="fl">全国服务热线</p>
                <p><span>0772-666-666</span></p>
            </div>
            <div class="clear"></div>
            <div class="clear"  id="menu">
                <ul class="nav_ul">
                    <li class="nav_li">
                        <h2><a href="<?php echo U('Index/index');?>">首页</a></h2>
                    </li>
                    <!--顶级分类-->
                    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$columnVo): $mod = ($i % 2 );++$i;?><li class="nav_li">
                            <h2><a href="/index.php/<?php echo ($columnVo["english"]); ?>/<?php echo ($columnVo["english"]); ?>"><?php echo ($columnVo["name"]); ?></a></h2>
                            <div class="lists" >
                                <ul class="list_ul">
                                    <!--子分类-->
                                    <?php $_result=SidType($columnVo['lanmu_id']);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="list_li"><a href="/index.php/<?php echo ($columnVo["english"]); ?>/<?php echo ($columnVo["english"]); ?>?lid=<?php echo ($vo["lanmu_id"]); ?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </div>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--头部-->

<div id="wowslider-container">
    <div class="ws_images">
        <ul>
            <li><a href="#"><img src="/Public/Home/images/f1.jpg" /></a></li>
            <li><a href="#"><img src="/Public/Home/images/f2.jpg" /></a></li>
            <li><a href="#"><img src="/Public/Home/images/f3.png" /></a></li>

        </ul>
    </div>

</div>


<script type="text/javascript" src="/Public/Home/images/engine/wowslider.js"></script>
<script type="text/javascript" src="/Public/Home/images/engine/script.js"></script>
<div class="cl30"></div>
<div class="container">
    <div class="wrap">
        <div class="clear">
            <div class="news_info fl">

                <div class="hometit"><a target="_blank" href="<?php echo U('AboutUs/aboutUs');?>" class="more" style="text-decoration:none;">&nbsp;</a><h3><?php echo ($company[0]['name']); ?></h3></div>

                <div class="homecont">
                    <?php echo ($company[0]['lanmu_jianjie']); ?>
                </div>
            </div>

            <!-- ---------------幻灯片下面的内容--------------------- -->
            <div class="home_pics fl">

                <div class="hometit"><a target="_blank" href="<?php echo U('Service/service');?>" class="more" style="text-decoration:none;">&nbsp;</a><h3>服务项目</h3></div>

                <div class="scroll_cont clear">


                    <?php if(is_array($serviceList)): $i = 0; $__LIST__ = $serviceList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="pics <?php if(($vo["lanmu_id"]) == "8"): ?>active<?php else: endif; ?>">
                            <h2><?php echo ($vo['id']); ?></h2>
                            <div class="pic_box clear" style="display:<?php if(($vo["id"]) == "1"): ?>block<?php else: endif; ?>">
                                <h3 class="fl"><?php echo ($vo["title"]); ?></h3>
                                <div class="in fr"><img src="/Public/Home/images/c9.png" width="100" height="76" alt="服务项目" /></div>
                            </div>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>
<!--
                    <div class="pics">
                        <h2>2</h2>
                        <div class="pic_box clear">
                            <h3 class="fl">唯美摄影</h3>
                            <div class="in fr"><img src="/Public/Home/images/c1.jpg" width="100" height="76" /></div>
                        </div>
                    </div>

                    <div class="pics">
                        <h2>3</h2>
                        <div class="pic_box clear">
                            <h3 class="fl">视频摄录</h3>
                            <div class="in fr"><img src="/Public/Home/images/c2.jpg" width="100" height="76" /></div>
                        </div>
                    </div>
                    <div class="pics">
                        <h2>4</h2>
                        <div class="pic_box clear">
                            <h3 class="fl">图像美化</h3>
                            <div class="in fr"><img src="/Public/Home/images/c3.jpg" width="100" height="76" /></div>
                        </div>
                    </div>-->

                </div>
            </div>
            <div class="news_info fr">

                <div class="hometit"><a target="_blank" href="<?php echo U('News/news');?>" class="more" style="text-decoration:none"></a><h3>新闻动态</h3></div>
                <div class="homecont">
                    <ul class="home_new clear">
                        <?php if(is_array($newsList)): $i = 0; $__LIST__ = $newsList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="clear">
                                <a href="/index.php/News/detailNew?nid=<?php echo ($vo["news_id"]); ?>" target="_parent" class="fl col_3 home_new_a"><?php echo ($vo["title"]); ?></a>
                                <span class="fr col_4e4e4e"><?php echo (substr($vo["pulish_time"],0,10)); ?></span>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>

                    </ul>
                </div>
            </div>
        </div>

        <div class="introduce">
            <div class="home_title">
                <strong class="home_titleStr">产品中心</strong>
            </div>
            <!--产品介绍-->
            <div id="introduceScBox" class="introduceScBox">
                <span id="introducePrev"><!--上一个--></span>
                <div class="introduceScDivBox">
                    <div id="introduceScroll" class="introduceScroll clear">

                        <?php if(is_array($produtsList)): $i = 0; $__LIST__ = $produtsList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pVo): $mod = ($i % 2 );++$i;?><!--每个div只放一张图片-->
                            <div class="introduceScrollDiv fl">
                                <div class="introduce_zhezhaoBox">
                                    <div class="introduce_zhezhao"><!--遮罩--></div>

                                    <a href="/index.php/Produts/produtDetail?pid=<?php echo ($pVo["id"]); ?>" target="_blank" class="introduce_ckxq">查看详情</a>
                                </div>
                                <img src="<?php echo ($pVo["pic"]); ?>" width="238" height="179" />
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>


                        <!--&lt;!&ndash;每个div只放一张图片&ndash;&gt;
                        <div class="introduceScrollDiv fl">
                            <div class="introduce_zhezhaoBox">
                                <div class="introduce_zhezhao">&lt;!&ndash;遮罩&ndash;&gt;</div>

                                <a href="" class="introduce_ckxq">查看详情</a>
                            </div>
                            <img src="/Public/Home/images/c1.jpg" width="238" height="179" />
                        </div>
                        &lt;!&ndash;每个div只放一张图片&ndash;&gt;
                        <div class="introduceScrollDiv fl">
                            <div class="introduce_zhezhaoBox">
                                <div class="introduce_zhezhao">&lt;!&ndash;遮罩&ndash;&gt;</div>

                                <a href="" class="introduce_ckxq">查看详情</a>
                            </div>
                            <img src="/Public/Home/images/c4.jpg" width="238" height="179" />
                        </div>
                        &lt;!&ndash;每个div只放一张图片&ndash;&gt;
                        <div class="introduceScrollDiv fl">
                            <div class="introduce_zhezhaoBox">
                                <div class="introduce_zhezhao">&lt;!&ndash;遮罩&ndash;&gt;</div>

                                <a href="" class="introduce_ckxq">查看详情</a>
                            </div>
                            <img src="/Public/Home/images/c2.jpg" width="238" height="179" />
                        </div>
                        &lt;!&ndash;每个div只放一张图片&ndash;&gt;
                        <div class="introduceScrollDiv fl">
                            <div class="introduce_zhezhaoBox">
                                <div class="introduce_zhezhao">&lt;!&ndash;遮罩&ndash;&gt;</div>

                                <a href="" class="introduce_ckxq">查看详情</a>
                            </div>
                            <img src="/Public/Home/images/c3.jpg" width="238" height="179" />
                        </div>-->
                    </div>
                </div>
                <span id="introduceNext"><!--下一个--></span>
            </div>
            <!--产品介绍结束-->
        </div>
    </div>
</div>


<!--底部-->
<div class="cl30"></div>
<div class="copyright">
    <div class="wrap" style=" position:relative;">
        <p class="logobg imgbox">
            <img src="/Public/Home/images/erweima.png" width="93" height="92" />
        </p>
        <p class="logobg2 imgbox">

            <img src="/Public/Home/images/logo.png" height="85" width="204" />
        </p>
        <div class="cl30"></div>
        <div class="links"><span>友情链接：</span>

            <a href="#" >熊大建站</a>|<a href="#">哦撇科技</a>
            |<a href="#">我的网站</a>
            |<a href="#" >厉害了</a>
        </div>
        <div class="infos">

            <p>地址:柳州市沙塘镇君武路168号 电话:8898-666-666</p>
            <p>Copyright © 2015 熊大网络科技有限公司 版权所有</p>
            <p>技术支持：<a href="" >熊大网络</a></p>

        </div>
    </div>
</div>
<ul class="rightNav">

    <li class="text"><a href="<?php echo U('Message/message');?>">在线留言</a></li>

    <li class="text"><a href="<?php echo U('ContactUs/contactUs');?>">联系我们</a></li>

    <li id="goTop"><a title="返回顶部" href="#"><img src="/Public/Home/images/back.png"></a></li>
</ul>

<!--<script type="text/javascript" src="/Public/js/jquery-1.11.3.js"></script>-->

<script src="/Public/Home/js/require.min.js"></script>

</body>
</html>