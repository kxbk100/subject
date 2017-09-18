<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>

<html lang="zh-cn">
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
    <link href="jackbox/css/jackbox.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo (C("HOMETOOLS")); ?>css/cloud-zoom.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo (C("HOMETOOLS")); ?>css/style.css" rel="stylesheet" type="text/css">
    <!-- Style -->
    <style type="text/css">
        .no-fouc {
            display: none;
        }

        .right {
            display: none;
        }

        .right:first-child {
            display: block
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
    <script>
        var currentNode = "content1";
        var changeContent = function (obj) {
            //之前的选项恢复原状
            document.getElementById(currentNode).style.color = "black";
            document.getElementById("about" + currentNode).style.display = "none";
            //currentNode指向新的节点
            currentNode = obj.getAttribute("id");
            //设置新的选项
            document.getElementById(currentNode).style.color = "#4174c5";
            document.getElementById("about" + currentNode).style.display = "block";
        }
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
                        <span><i class="icons icon-book"></i> 学科介绍</span>
                        <ul>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/1">一流学科</a></li>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/time">大事记</a></li>
                        </ul>
                    </li>

                    <li>
                        <span><i class="icons icon-thumbs-up"></i> 学术研究</span>
                        <ul>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/2">学科方向</a></li>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/3">学科团队</a></li>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/4">学科成果</a></li>
                        </ul>
                    </li>

                    <li>
                        <span><i class="icons icon-user"></i> 人才培养</span>
                        <ul>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/9">本科教育</a></li>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/10">研究生教育</a></li>
                        </ul>
                    </li>

                    <li>
                        <span><i class="icons icon-fire"></i> 学生成果</span>
                        <ul>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/11">项目介绍</a></li>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/12">竞赛介绍</a></li>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/13">竞赛获奖</a></li>
                        </ul>
                    </li>

                    <li>
                        <span><i class="icons icon-globe"></i> 资源环境</span>
                        <ul>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/14">硬件条件</a></li>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/15">校企合作</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo (C("GOTO")); ?>Home/Student/showList/p/1"><i class="icons icon-group"></i>
                            学子风采</a>
                    </li>

                    <li>
                        <span><i class="icons icon-comment"></i> 招生就业</span>
                        <ul>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassageslist">招生介绍</a></li>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/16">实习信息</a></li>
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/17">就业信息</a></li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </header>
    <!-- /Header -->
    <!-- Section1 -->
    <section id="content">
        <!-- Section -->
        <section class="section full-width-bg">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-10 col-xs-offset-1">
                    <!-- Revolution Slider -->
                    <div class="tp-banner-container main-revolution">

                        <span class="Apple-tab-span"></span>

                        <div class="tp-banner full-width-revolution">

                            <ul>
                                <li data-transition="papercut" data-slotamount="7" data-link="#">
                                    <img src="<?php echo ($picture[0]['path']); ?>" alt="">
                                    <div class="tp-caption" data-x="left" data-y="200" data-speed="700"
                                         data-start="1000"
                                         data-easing="easeOutBack"><h2><?php echo ($picture[0]['description']); ?></h2></div>
                                </li>

                                <li data-transition="papercut" data-slotamount="7" data-link="#">
                                    <img src="<?php echo ($picture[1]['path']); ?>" alt="">
                                    <div class="tp-caption align-center" data-x="left" data-y="300" data-speed="500"
                                         data-start="1200" data-easing="easeOutBack"><h2>
                                        <?php echo ($picture[1]['description']); ?></h2></div>
                                </li>

                                <li data-transition="papercut" data-slotamount="7" data-link="#">
                                    <img src="<?php echo ($picture[2]['path']); ?>" alt="">
                                    <div class="tp-caption align-right" data-x="right" data-y="100" data-speed="700"
                                         data-start="1000" data-easing="easeOutBack"><h2>
                                        <?php echo ($picture[2]['description']); ?></h2>
                                    </div>
                                    <!--

                                    <div class="tp-caption align-right" data-x="right" data-y="225" data-speed="500"
                                         data-start="1200" data-easing="easeOutBack"><p>
                                        我校学子在省大学生多媒体作品竞赛中获历史最佳成绩我校学子在省大学生多媒体作品竞赛<br>中获历史最佳成绩我校学子在省大学生多媒体作品竞赛中获历史最佳成绩</p>
                                    </div>
                                    -->
                                </li>
                            </ul>

                        </div>

                    </div>
                    <!-- /Revolution Slider -->

                </div>
            </div>
        </section>
    </section>
    <!-- /Section1 -->
    <!-- Seciton2 -->
    <section class="section full-width-bg gray-bg">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-10 col-xs-offset-1 col-lg-offset-0 col-md-offset-0 col-sm-offset-0">
                <!--<div class="owl-header">-->
                <!--<h3 class="page-header animate-onscroll"><i class="icon-bookmark"></i> 学子风采</h3>-->

                <!--<div class="carousel-arrows animate-onscroll">-->
                <!--<span class="left-arrow"><i class="icons icon-left-dir"></i></span>-->
                <!--<span class="right-arrow"><i class="icons icon-right-dir"></i></span>-->
                <!--<a href="#" class="button read-more-button medium button-arrow">More</a>-->
                <!--</div>-->

                <!--</div>-->

                <h3 class="page-header"><i class="icon-bookmark"></i> 学科动态<a
                        href="<?php echo (C("GOTO")); ?>Home/News/showList/p/1" class="pull-right">More</a></h3>
                <!-- Blog Post -->
                <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="blog-post big">
                        <div class="post-image">
                            <img src="<?php echo ($vo["small_path"]); ?>" alt="">
                        </div>

                        <h4 class="post-title"><a
                                href="<?php echo (C("GOTO")); ?>Home/News/showNews/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a></h4>

                        <div class="post-meta">
                            <span>作者：<?php echo ($vo["author"]); ?></span>
                            <span><?php echo ($vo["time"]); ?></span>
                        </div>

                        <p><?php echo (msubstr($vo["content"],0,80,'utf-8',true)); ?><!--限定字数--></p>

                        <a href="<?php echo (C("GOTO")); ?>Home/News/showNews/<?php echo ($vo["id"]); ?>"
                           class="button read-more-button big button-arrow">More</a>

                    </div><?php endforeach; endif; else: echo "" ;endif; ?>


            </div>


            <!-- Sidebar -->
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-10 col-xs-offset-1 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 sidebar">

                <!-- Upcoming Events -->
                <div class="sidebar-box white">
                    <h3><i class="icon-camera"></i>
                        <span style="padding-right: 15px;color: #4174c5;" id="content1"
                              onmouseover="changeContent(this)">公告通知</span>|
                        <span style="padding-left: 8px;" id="content2" onmouseover="changeContent(this)">学术活动</span>
                    </h3>
                    <div id="right">
                        <div id="aboutcontent1" class="right">
                            <ul class="upcoming-events">
                                <?php if(is_array($notice)): $i = 0; $__LIST__ = $notice;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
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
                                            <ul class="event-meta">
                                                <p><?php echo (msubstr($vo["content"],0,80,'utf-8',true)); ?><!--限定字数--></p>
                                            </ul>
                                        </div>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                            <a href="<?php echo (C("GOTO")); ?>Home/Notice/showList/p/1"
                               class="button transparent button-arrow">更多公告</a>
                        </div>

                        <div id="aboutcontent2" class="right">
                            <ul class="upcoming-events">
                                <?php if(is_array($notice)): $i = 0; $__LIST__ = $notice;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
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
                                            <ul class="event-meta">
                                                <p><?php echo (msubstr($vo["content"],0,80,'utf-8',true)); ?><!--限定字数--></p>
                                            </ul>
                                        </div>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                            <a href="<?php echo (C("GOTO")); ?>Home/Notice/showList/p/1"
                               class="button transparent button-arrow">更多活动</a>
                        </div>
                    </div>
                </div>
                <!-- /Upcoming Events -->
            </div>
            <!-- /Sidebar -->

        </div>


        <div class="row no-margin-bottom">


            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-10 col-xs-offset-1 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 ">


                <!-- Owl Carousel -->
                <div class="owl-carousel-container">

                    <div class="owl-header">
                        <h3 class="page-header animate-onscroll"><i class="icon-bookmark"></i> 学子风采<a
                                href="<?php echo (C("GOTO")); ?>Home/Student/showList/p/1"
                                class="pull-right">More</a>
                        </h3>
                        <div class="carousel-arrows animate-onscroll">
                            <span class="left-arrow"><i class="icons icon-left-dir"></i></span>
                            <span class="right-arrow"><i class="icons icon-right-dir"></i></span>
                        </div>

                    </div>

                    <div class="owl-carousel" data-max-items="4">

                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div>


                                <div class="blog-post animate-onscroll">

                                    <div class="post-image">
                                        <img src="<?php echo ($vo["small_path"]); ?>" alt="">
                                    </div>

                                    <h4 class="post-title"><a
                                            href="<?php echo (C("GOTO")); ?>Home/Student/showStudent/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a>
                                    </h4>
                                    <p><?php echo (msubstr($vo["content"],0,50,'utf-8',true)); ?><!--限定字数--></p>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </div>
        </div>


        <!--<div class="row">-->

        <!--<div class="col-lg-9 col-md-9 col-sm-8">-->

        <!--&lt;!&ndash; Banner Rotator &ndash;&gt;-->
        <!--<div class="banner-rotator animate-onscroll">-->

        <!--<div class="flexslider banner-rotator-flexslider">-->

        <!--<ul class="slides">-->

        <!--<li id="flex_rotator_1">-->
        <!--<div class="banner-rotator-content">-->
        <!--<h5>Campaign trial</h5>-->
        <!--<h2>New York</h2>-->
        <!--<span class="date">December 17th</span>-->
        <!--<a href="#" class="button big button-arrow">Details</a>-->
        <!--</div>-->
        <!--</li>-->

        <!--<li id="flex_rotator_2">-->
        <!--<div class="banner-rotator-content">-->
        <!--<h5>Campaign trial</h5>-->
        <!--<h2>Corden</h2>-->
        <!--<span class="date">April 12th</span>-->
        <!--<a href="#" class="button big button-arrow">Details</a>-->
        <!--</div>-->
        <!--</li>-->

        <!--<li id="flex_rotator_3">-->
        <!--<div class="banner-rotator-content">-->
        <!--<h5>Campaign trial</h5>-->
        <!--<h2>Redhedge</h2>-->
        <!--<span class="date">June 27th</span>-->
        <!--<a href="#" class="button big button-arrow">Details</a>-->
        <!--</div>-->
        <!--</li>-->

        <!--</ul>-->

        <!--</div>-->

        <!--</div>-->
        <!--&lt;!&ndash; /Banner Rotator &ndash;&gt;-->
        <!--</div>-->


        <!--&lt;!&ndash; Sidebar &ndash;&gt;-->
        <!--<div class="col-lg-3 col-md-3 col-sm-4 sidebar">-->

        <!--&lt;!&ndash; Image Banner &ndash;&gt;-->
        <!--<div class="sidebar-box image-banner animate-onscroll">-->
        <!--<a href="issues.html">-->
        <!--<img src="img/main-issues-big.jpg" alt="">-->
        <!--<h3>The main issues</h3>-->
        <!--<span class="button transparent button-arrow">Find out more</span>-->
        <!--</a>-->
        <!--</div>-->
        <!--&lt;!&ndash; /Image Banner &ndash;&gt;-->
        <!--</div>-->
        <!--&lt;!&ndash; /Sidebar &ndash;&gt;-->

        <!--</div>-->


    </section>
    <!-- /Section2 -->
    <!-- Footer -->
    <footer id="footer">

        <!-- Main Footer -->
        <div id="main-footer">

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-10 col-xs-offset-1 animate-onscroll">
                    <img src="<?php echo (C("HOMETOOLS")); ?>img/logo.png" class="img-responsive center-block"
                         style=" vertical-align:middle">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-2 animate-onscroll">
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