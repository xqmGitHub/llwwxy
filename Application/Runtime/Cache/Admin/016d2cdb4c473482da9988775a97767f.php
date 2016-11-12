<?php if (!defined('THINK_PATH')) exit();?><!--头部-->
<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no" />

    <title>熊大网络</title>

    <link rel="stylesheet" href="/Public/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Public/admin/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/Public/admin/bower_components/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/Public/admin/bower_components/metisMenu/dist/metisMenu.min.css">
    <link rel="stylesheet" href="/Public/admin/bower_components/Waves/dist/waves.min.css">
    <link rel="stylesheet" href="/Public/admin/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">

    <link rel="stylesheet" href="/Public/admin/js/selects/cs-select.css">
    <link rel="stylesheet" href="/Public/admin/js/selects/cs-skin-elastic.css">

    <link rel="stylesheet" href="/Public/admin/css/jquery-confirm.css">
    <link rel="stylesheet" href="/Public/css/overhang.min.css">

    <script src="/Public/admin/js/menu/modernizr.custom.js"></script>

    <link rel="stylesheet" href="/Public/admin/css/style.css">

    <link rel="icon" href="/Public/admin/images/xiaologo.png" type="image/x-icon" />
    <link rel="shortcut icon" href="/Public/admin/images/xiaologo.png" type="image/x-icon" />
    <style>
        /*页码*/
        /*css black2 style pagination*/
          div.pagenumber{padding:7px;margin:3px;text-align:center;}
          div.pagenumber a{border:#000000 1px solid;padding:2px 5px;margin:2px;color:#000000;text-decoration:none;}
          div.pagenumber a:hover{border:#000000 1px solid;color:#fff;background-color:#000;}
          div.pagenumber a:active{border:#000000 1px solid;color:#fff;background-color:#000;}
          div.pagenumber span.current{border:#000000 1px solid;padding:2px 5px;font-weight:bold;margin:2px;color:#fff;background-color:#000000;}
          div.pagenumber span.disabled{border:#eee 1px solid;padding:2px 5px;margin:2px;color:#ddd;}
          /*div.pagenumber input{border:1px solid black;margin:3px;text-align:center;}
          div.pagenumber input[type=button]{background-color: white;color: black;}
          div.pagenumber input[type=button]:hover{color:#fff;background-color:#000;}*/

        .modal .modal-body{
            padding: 20px 110px 0;
        }
        .modal .modal-body ul{
            list-style-type: none;
        }
        .modal .modal-body ul li{
            height: 32px;
            font-size: 14px;
        }
        .modal .modal-body ul li label{
            font-weight: normal;
            width:80px;
            height: 15px;;
            margin: 0;
        }
        .modal .modal-body ul li label span{
            display: inline-block;
            float: right;
            vertical-align: middle;
            color: #666;
        }
        .modal .modal-body ul li input{
            width: 250px;;
        }
    </style>
</head>


<body>
<div id="main-wrapper" class="main-wrapper">
    <!--Preloader-->
    <div id="preloader" class="preloader table-wrapper">
        <div class="table-row">
            <div class="table-cell">
                <div class="la-ball-scale-multiple la-3x">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </div>

    <ul id="gn-menu" class="navbar gn-menu-main">
        <li class="gn-trigger">
            <a id="menu-toggle" class="menu-toggle gn-icon gn-icon-menu">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="cross">
                    <span></span>
                    <span></span>
                </div>
            </a>
            <nav class="gn-menu-wrapper">
                <div class="gn-scroller">
                    <ul class="gn-menu metismenu">

                        <li class="active">
                            <a href="/index.php/Admin/Index/index" class="active"><i class="fa fa-home"></i>主页</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-lock"></i> 管理员管理<span class="fa arrow"></span></a>
                            <ul class="gn-submenu collapse" aria-expanded="false">
                                <li><a href="<?php echo U('Admin/User/userList');?>">管理员列表</a></li>
                                <li><a href="<?php echo U('Admin/User/showAddUser');?>">添加管理员</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-columns"></i>栏目管理<span class="fa arrow"></span>
                            </a>
                            <ul class="gn-submenu collapse" aria-expanded="false">
                                <li><a href="<?php echo U('Admin/Column/columnList');?>">栏目列表</a></li>
                                <li><a href="<?php echo U('Admin/Column/showAddColumn');?>">添加栏目</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-flag"></i>广告管理<span class="fa arrow"></span>
                            </a>
                            <ul class="gn-submenu collapse" aria-expanded="false">
                                <li><a href="<?php echo U('Admin/Advertisement/advertisementList');?>">广告列表</a></li>
                                <li><a href="<?php echo U('Admin/Advertisement/showAddAdvertisement');?>">添加广告</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-ticket"></i>新闻管理<span class="fa arrow"></span>
                            </a>
                            <ul class="gn-submenu collapse" aria-expanded="false">
                                <li><a href="<?php echo U('Admin/New/newList');?>">新闻列表</a></li>
                                <li><a href="<?php echo U('Admin/New/showAddNew');?>">添加新闻</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-dropbox"></i>产品管理<span class="fa arrow"></span>
                            </a>
                            <ul class="gn-submenu collapse" aria-expanded="false">
                                <li><a href="<?php echo U('Admin/Produts/produtsList');?>">产品列表</a></li>
                                <li><a href="<?php echo U('Admin/Produts/showAddProduts');?>">添加产品</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-server"></i>服务项目管理<span class="fa arrow"></span>
                            </a>
                            <ul class="gn-submenu collapse" aria-expanded="false">
                                <li><a href="<?php echo U('Admin/Service/serviceList');?>">服务项目列表</a></li>
                                <li><a href="<?php echo U('Admin/Service/showAddService');?>">添加服务项目</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/index.php/Admin/Message/messageList"><i class="fa fa-flickr"></i> 在线留言</a>
                        </li>
                    </ul>
                </div>
                <!-- /gn-scroller -->
                <div class="bottom-bnts">
                    <a class="profile" href="profile.html"><i class="mdi mdi-account"></i></a>
                    <a class="fix-nav" href="#"><i class="mdi mdi-pin"></i></a>
                    <a id="logout" href="#"><i class="mdi mdi-power"></i></a>
                </div>
            </nav>
        </li>
        <li>
            <a href="/index.php/Admin/Index/index" class="logo text-uppercase">熊大网络</a>
        </li>
        <li class="top-clock">
            <span class="current-time"></span>
        </li>
        <li class="container-fluid pull-right">
            <ul class="nav navbar-right right-menu">
                <li class="members-btn">
                    <a class="show-members1">
                        <i class="fa fa-user"></i>

                        <span> 您好！<?php echo CheckSeesion();?></span>
                    </a>
                </li>

                <li class="dropdown some-btn">
                    <a class="fullscreen">
                        <!--<i class="mdi mdi-fullscreen"></i>-->
                        <span><a href="<?php echo U('Home/Index/index');?>" target="_blank">返回前台</a></span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>


    <!--Content-->
    <div id="content" class="content container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo U('Admin/Produts/produtsList');?>">产品管理</a></li>
                        <li class="active">产品列表</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="content-box big-box">
            <h4 class="zero-m" align="center">产品列表</h4>
            <div class="table-responsive" id="ajax_return">

            </div>
        </div>

    </div>

</div>

<!--Footer-->

<!--<div class="footer">© 2016 熊大网络</div>-->

<div class="login-modal modal fade">
    <div class="table-wrapper">
        <div class="table-row">
            <div class="table-cell text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <div class="login i-block">
                    <div class="content-box">
                        <div class="light-blue-bg biggest-box">

                            <h1 class="zero-m text-uppercase">Welcome</h1>

                        </div>
                        <div class="big-box text-left login-form">
                            <h4 class="text-center">Login</h4>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control material" id="login" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control material" id="password" placeholder="Password">
                                </div>

                                <button type="submit" class="btn btn-block btn-info text-uppercase waves">Login</button>

                            </form>
                            <a href="#" class="green i-block">Forgot password?</a>
                            <p>Do not have an account?</p>
                            <a class="btn btn-block btn-warning text-uppercase waves waves-button">Create an account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--Scripts-->
<script src="/Public/admin/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/Public/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/Public/admin/bower_components/metisMenu/dist/metisMenu.min.js"></script>
<script src="/Public/admin/bower_components/Waves/dist/waves.min.js"></script>
<script src="/Public/admin/bower_components/moment/min/moment.min.js"></script>
<script src="/Public/admin/bower_components/jquery.nicescroll/jquery.nicescroll.min.js"></script>
<script src="/Public/admin/bower_components/slimScroll/jquery.slimscroll.min.js"></script>
<script src="/Public/admin/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.js"></script>
<script src="/Public/admin/bower_components/cta/dist/cta.min.js"></script>

<!--Menu-->
<script src="/Public/admin/js/menu/classie.js"></script>
<script src="/Public/admin/js/menu/gnmenu.js"></script>

<!--Selects-->
<script src="/Public/admin/js/selects/selectFx.js"></script>

<!--Custom Scripts-->
<script src="/Public/admin/js/common.js"></script>

<script src="/Public/admin/js/jquery.Mousewheel-3.1.13.js"></script>
<script src="/Public/admin/js/jquery-confirm.js"></script>
<script src="/Public/js/jQueryUI.v1.12.0.min.js"></script>
<script src="/Public/js/overhang.min.js"></script>

<script type="text/javascript">
    $(window).ready(function(){

        ajax_get_table(1);

        $('#logout').click(function(){
            $.confirm({
                title: '提示！',
                content: '确定要退出登录吗？',
                confirm: function(){
                    $.ajax({
                        url:"/index.php/Admin/Index/logout",
                        data:{},
                        type:"post",
                        success:function(){
                            window.location.href="/index.php/Admin/Index/login";
                        }
                    })
                }
            })
        });
    });
    // ajax 抓取页面 form 为表单id  page 为当前第几页
    function ajax_get_table(form,page){
        cur_page = page; //当前页面 保存为全局变量
        $.ajax({
            type : "POST",
            url:"/index.php/Admin/Produts/ajaxProdutsList?p="+cur_page,//+tab,
//            url:"/index.php?m=Admin&c=New&a=ajaxNewsList&p="+page,//+tab,
            data : {},// 你的formid
            success: function(data){
                $("#ajax_return").html('');
                $("#ajax_return").append(data);
            }
        });
    }
</script>
</body>

</html>