<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>

<head>
    <!-- meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <!-- Title -->
    <title>浙江科技学院软件工程一流学科网</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo (C("HOMETOOLS")); ?>img/favicon.ico">
    <!-- Stylesheets -->
    <link href="<?php echo (C("HOMETOOLS")); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo (C("HOMETOOLS")); ?>css/fontello.css" rel="stylesheet" type="text/css">
    <link href="<?php echo (C("HOMETOOLS")); ?>css/flexslider.css" rel="stylesheet" type="text/css">
    <link href="<?php echo (C("HOMETOOLS")); ?>js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"
          media="screen"/>
    <link href="<?php echo (C("HOMETOOLS")); ?>css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="<?php echo (C("HOMETOOLS")); ?>css/responsive-calendar.css" rel="stylesheet" type="text/css">
    <link href="<?php echo (C("HOMETOOLS")); ?>css/chosen.css" rel="stylesheet" type="text/css">
    <link href="<?php echo (C("HOMETOOLS")); ?>jackbox/css/jackbox.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo (C("HOMETOOLS")); ?>css/cloud-zoom.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo (C("HOMETOOLS")); ?>css/style.css" rel="stylesheet" type="text/css">
    <!-- Style -->
    <style type="text/css">
        .no-fouc {
            display: none;
        }
    </style>
    <!-- JQuery -->
    <script src="<?php echo (C("HOMETOOLS")); ?>js/jquery-1.11.0.min.js"></script>
    <script src="<?php echo (C("HOMETOOLS")); ?>js/jquery-ui-1.10.4.min.js"></script>
    <script>
        $(function () {
            $('.tp-banner').revolution({
                delay: 5000,
                startheight: 420,
                navigationType: "none",
            });
        });
    </script>
</head>

<body class="sticky-header-on tablet-sticky-header">
<div id="fb-root"></div>

<!-- Container -->
<div class="container">
    <!-- Header -->
    <header id="header">
        <!-- Main Header -->
        <div id="main-header">
            <div class="container">
                <div class="row">
                    <!-- Logo -->
                    <div id="logo" class="col-lg-12 col-md-12 col-sm-12">
                        <a href="<?php echo (C("GOTO")); ?>"><img src="<?php echo (C("HOMETOOLS")); ?>img/logo.png" alt="Logo"></a>
                    </div>
                    <!-- /Logo -->
                </div>
            </div>
        </div>
        <!-- /Main Header -->
        <!-- Lower Header -->
        <div id="lower-header">

            <div class="container">

                <div id="menu-button">
                    <div>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <span>Menu</span>
                </div>

                <ul id="navigation">

                    <li class="home-button current-menu-item">
                        <a href="<?php echo (C("GOTO")); ?>"><i class="icons icon-home"></i></a>
                    </li>

                    <li>
                        <a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/1"><i class="icons icon-book"></i> 学科介绍</a>
                    </li>

                    <li>
                        <span><i class="icons icon-user"></i> 人才培养</span>
                        <ul>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/2">本科教育</a></li>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/3">研究生教育</a></li>
                        </ul>
                    </li>

                    <li>
                        <span><i class="icons icon-fire"></i> 项目竞赛</span>
                        <ul>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/4">项目介绍</a></li>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/5">竞赛介绍</a></li>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/6">竞赛获奖</a></li>
                        </ul>
                    </li>

                    <li>
                        <span><i class="icons icon-thumbs-up"></i> 研究成果</span>
                        <ul>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/7">项目立项</a></li>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/8">论文发表</a></li>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/9">已有著作</a></li>
                        </ul>
                    </li>

                    <li>
                        <span><i class="icons icon-globe"></i> 资源环境</span>
                        <ul>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/10">师资力量</a></li>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/11">硬件条件</a></li>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/12">校企合作</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo (C("GOTO")); ?>Home/Student/showList/p/1"><i class="icons icon-group"></i>
                            学子风采</a>
                    </li>

                    <li>
                        <span><i class="icons icon-comment"></i> 招生信息</span>
                        <ul>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/13">招生简章</a></li>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/14">招生通知</a></li>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/15">招生流程</a></li>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/16">招生问答</a></li>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/17">联系我们</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- /Header -->


    <section id="content">

        <!-- Page Heading -->
        <section class="section page-heading animate-onscroll">

            <h1>学科动态</h1>
            <p class="breadcrumb"><a href="<?php echo (C("GOTO")); ?>">首页</a> -> 学科动态</p>

        </section>
        <!-- Page Heading -->


        <!-- Section -->
        <section class="section full-width-bg gray-bg">

            <div class="row">

                <div class="col-lg-9 col-md-9 col-sm-8">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!-- Blog Post -->
                                <div class="list-passage">
                                    <div class="blog-post animate-onscroll">
                                        <div class="post-content">
                                            <div class="post-side-meta">
                                                <div class="date">
                                                    <span class="day"><?php echo ($vo["day"]); ?></span>
                                                    <span class="month"><?php echo ($vo["month"]); ?>月</span>
                                                </div>
                                            </div>
                                            <div class="post-header">
                                                <h2><a href="<?php echo (C("GOTO")); ?>Home/News/showNews/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span>作者：<?php echo ($vo["author"]); ?></span>
                                                    <span><?php echo ($vo["time"]); ?></span>
                                                </div>
                                            </div>
                                            <div class="post-exceprt">
                                                <p><?php echo (msubstr($vo["content"],0,50,'utf-8',true)); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Blog Post --><?php endforeach; endif; else: echo "" ;endif; ?>

                        </div>
                    </div>

                    <div class="text-center animate-onscroll">

                        <div class="yahoo2">
                            <?php echo ($page); ?>
                        </div>

                    </div>

                </div>


                <!-- Sidebar -->
                <div class="col-lg-3 col-md-3 col-sm-4 sidebar">
                    <div class="sidebar-box white">
                        <h3><i class="icon-camera"></i> 公告通知</h3>
                        <ul class="upcoming-events">

                            <?php if(is_array($notice)): $i = 0; $__LIST__ = $notice;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!-- Event -->
                                <li>
                                    <div class="date">
									<span>
										<span class="day"><?php echo ($vo["day"]); ?></span>
										<span class="month"><?php echo ($vo["month"]); ?>月</span>
									</span>
                                    </div>

                                    <div class="event-content">
                                        <h6>
                                            <a href="<?php echo (C("GOTO")); ?>Home/Notice/showNotice/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a>
                                        </h6>

                                    </div>
                                </li>
                                <!-- /Event --><?php endforeach; endif; else: echo "" ;endif; ?>


                        </ul>
                        <a href="<?php echo (C("GOTO")); ?>Home/Notice/showList/p/1"
                           class="button transparent button-arrow">更多公告</a>
                    </div>
                </div>
            </div>
            <!-- /Sidebar -->


</div>

</section>
<!-- /Section -->

</section>


<!-- Footer -->
<footer id="footer">

    <!-- Main Footer -->
    <div id="main-footer">

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 animate-onscroll">
                <img src="<?php echo (C("HOMETOOLS")); ?>img/logo.png" class="img-responsive center-block"
                     style=" vertical-align:middle">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12  col-lg-offset-2 col-md-offset-2 animate-onscroll">
                <ul class="list-unstyled">
                    <li>地址：杭州市留和路318号浙江科技学院习得园C2楼</li>
                    <li>邮件：itee@zust.edu.cn</li>
                    <li>电话：0571-85070300</li>
                    <li>邮编：310023</li>
                </ul>
            </div>

        </div>

    </div>
    <!-- /Main Footer -->


    <!-- Lower Footer -->
    <div id="lower-footer">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 animate-onscroll">
                <p class="copyright text-center">Copyright © 2012-2017 ZUST ITEE All Rights Reserved 浙江科技学院
                    信息与电子工程学院 版权所有
                </p>
            </div>


        </div>

    </div>
    <!-- /Lower Footer -->


</footer>
<!-- /Footer -->


<!-- Back To Top -->
<a href="#" id="button-to-top"><i class="icons icon-up-dir"></i></a>

</div>
<!-- /Container -->

<!-- JavaScript -->

<!-- Bootstrap -->
<script type="text/javascript" src="<?php echo (C("HOMETOOLS")); ?>js/bootstrap.min.js"></script>

<!-- Modernizr -->
<script type="text/javascript" src="<?php echo (C("HOMETOOLS")); ?>js/modernizr.js"></script>

<!-- Sliders/Carousels -->
<script type="text/javascript" src="<?php echo (C("HOMETOOLS")); ?>js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<?php echo (C("HOMETOOLS")); ?>js/owl.carousel.min.js"></script>

<!-- Revolution Slider  -->
<script type="text/javascript"
        src="<?php echo (C("HOMETOOLS")); ?>js/revolution-slider/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript"
        src="<?php echo (C("HOMETOOLS")); ?>js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- Calendar -->
<script type="text/javascript" src="<?php echo (C("HOMETOOLS")); ?>js/responsive-calendar.min.js"></script>

<!-- Raty -->
<script type="text/javascript" src="<?php echo (C("HOMETOOLS")); ?>js/jquery.raty.min.js"></script>

<!-- Chosen -->
<script type="text/javascript" src="<?php echo (C("HOMETOOLS")); ?>js/chosen.jquery.min.js"></script>

<!-- InstaFeed -->
<script type="text/javascript" src="<?php echo (C("HOMETOOLS")); ?>js/instafeed.min.js"></script>

<!-- MixItUp -->
<script type="text/javascript" src="<?php echo (C("HOMETOOLS")); ?>js/jquery.mixitup.js"></script>

<!-- JackBox -->
<script type="text/javascript" src="<?php echo (C("HOMETOOLS")); ?>jackbox/js/jackbox-packed.min.js"></script>

<!-- CloudZoom -->
<script type="text/javascript" src="<?php echo (C("HOMETOOLS")); ?>js/zoomsl-3.0.min.js"></script>

<!-- Main Script -->
<script type="text/javascript" src="<?php echo (C("HOMETOOLS")); ?>js/script.js"></script>


<!--[if lt IE 9]>
<script type="text/javascript" src="js/jquery.placeholder.js"></script>
<script type="text/javascript" src="js/script_ie.js"></script>
<![endif]-->


</body>

</html>