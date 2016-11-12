<?php if (!defined('THINK_PATH')) exit();?><!--头部-->
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




<div class="banner3"></div>

<div class="container">
    <div class="wrap">
        <div class="clear">
            <div class="cl30"></div>
            <div class="second_side fl">
                <div class="side_menu">

                    <h3 class="title clear">关于我们<span>About Us</span></h3>
                    <ul class="side_menu_list">
                        <?php $_result=SidType(1);if(is_array($_result)): $i = 0; $__LIST__ = $_result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="/index.php/AboutUs/AboutUs?lid=<?php echo ($vo["lanmu_id"]); ?>&up_id=<?php echo ($vo["up_id"]); ?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
            </div>
            <div class="second_main fr">
                <div class="se_title">
                    <h2>
                       <?php echo ($columnJianjie[0]['name']); ?>
                    </h2>
                    <div class="breadmenu"><a href="<?php echo U('Index/index');?>">首页</a> > <a href="">关于我们</a> > <a href="#"><?php echo ($columnName); ?></a></div>
                </div>
                <div class="cont">
                    <div class="infos">
                        <p style="text-indent:2em;text-align:left;">
                            <?php echo ($columnJianjie[0]['lanmu_jianjie']); ?>
                        </p>
                    </div>
                </div>
            </div>
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