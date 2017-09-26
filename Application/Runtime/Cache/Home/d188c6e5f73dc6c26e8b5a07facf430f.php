<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <!-- meta -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no"/>
        <!-- Title -->
        <title>
            浙江科技学院软件工程一流学科网
        </title>
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo (C("HOMETOOLS")); ?>img/favicon.ico"/>
        <!-- Stylesheets -->
        <link href="<?php echo (C("HOMETOOLS")); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo (C("HOMETOOLS")); ?>css/fontello.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo (C("HOMETOOLS")); ?>css/flexslider.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo (C("HOMETOOLS")); ?>js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="<?php echo (C("HOMETOOLS")); ?>css/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo (C("HOMETOOLS")); ?>css/responsive-calendar.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo (C("HOMETOOLS")); ?>css/chosen.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo (C("HOMETOOLS")); ?>jackbox/css/jackbox.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo (C("HOMETOOLS")); ?>css/cloud-zoom.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo (C("HOMETOOLS")); ?>css/style.css" rel="stylesheet" type="text/css"/>
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
            
            $(document).ready(function(){
                let x = window.location.toString();
                let s = x.substr(x.length-1,1)
                if(s=='t' || s==0 || s==1 || s==2 || s==3) {
                    let child = $('.banner')[0];
                    $(child).css('background',"rgb(99,178,245)");
                    let title = $('h4')[0];
                    $(title).css('color',"white"); 
                } else if(x.substr(x.length-1,1)==5) {
                    let child = $('.banner')[1];
                    $(child).css('background',"rgb(99,178,245)");
                    let title = $('h4')[4];
                    $(title).css('color',"white");
                } else if(x.substr(x.length-1,1)==6) {
                    let child = $('.banner')[2];
                    $(child).css('background',"rgb(99,178,245)");
                    let title = $('h4')[5];
                    $(title).css('color',"white");
                }
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
        <div id="fb-root">
        </div>
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
                                <a href="<?php echo (C("GOTO")); ?>">
                                    <img src="<?php echo (C("HOMETOOLS")); ?>img/logo.png" alt="Logo"/>
                                </a>
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
                                <span>
                                </span>
                                <span>
                                </span>
                                <span>
                                </span>
                            </div>
                            <span>
                                Menu
                            </span>
                        </div>
                        <ul id="navigation">
                            <li class="home-button current-menu-item">
                                <a href="<?php echo (C("GOTO")); ?>">
                                    <i class="icons icon-home">
                                    </i>
                                </a>
                            </li>
                            <li>
                                <span>
                                    <i class="icons icon-book">
                                    </i>
                                    学科介绍
                                </span>
                                <ul>
                                    <li>
                                        <a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/1">
                                            一流学科
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo (C("GOTO")); ?>Home/Passages/time">
                                            大事记
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <span>
                                    <i class="icons icon-thumbs-up">
                                    </i>
                                    学术研究
                                </span>
                                <ul>
                                    <li>
                                        <a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/2">
                                            学科方向
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/3">
                                            学科团队
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages3/4">
                                            学科成果
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <span>
                                    <i class="icons icon-user">
                                    </i>
                                    人才培养
                                </span>
                                <ul>
                                    <li>
                                        <a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/9">
                                            本科教育
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/10">
                                            研究生教育
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <span>
                                    <i class="icons icon-fire">
                                    </i>
                                    学生成果
                                </span>
                                <ul>
                                    <li>
                                        <a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/11">
                                            项目介绍
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/12">
                                            竞赛介绍
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/13">
                                            竞赛获奖
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <span>
                                    <i class="icons icon-globe">
                                    </i>
                                    资源环境
                                </span>
                                <ul>
                                    <li>
                                        <a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/14">
                                            硬件条件
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/15">
                                            校企合作
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo (C("GOTO")); ?>Home/Student/showList/p/1">
                                    <i class="icons icon-group">
                                    </i>
                                    学子风采
                                </a>
                            </li>
                            <li>
                                <span>
                                    <i class="icons icon-comment">
                                    </i>
                                    招生就业
                                </span>
                                <ul>
                                    <li>
                                        <a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassageslist">
                                            招生介绍
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/16">
                                            实习信息
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/17">
                                            就业信息
                                        </a>
                                    </li>
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
                    <h1>
                        <?php if($type == ''): ?>招生介绍
                        <?php elseif($type == 0): ?>招生简章
                        <?php elseif($type == 1): ?>招生通知
                        <?php elseif($type == 2): ?>招生流程
                        <?php elseif($type == 3): ?>招生问答<?php endif; ?>
                    </h1>
                    <p class="breadcrumb">
                        <a href="<?php echo (C("GOTO")); ?>">
                            首页
                        </a>
                        ->
                        招生就业 ->
                        招生介绍<?php if($type == ''): elseif($type == 0): ?>->招生简章
                                <?php elseif($type == 1): ?>->招生通知
                                <?php elseif($type == 2): ?>->招生流程
                                <?php elseif($type == 3): ?>->招生问答<?php endif; ?>
                    </p>
                </section>
                <!-- Page Heading -->
                <!-- Section -->
                <section class="section full-width-bg gray-bg">
                    <div class="row">
                        <!-- Sidebar -->
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 sidebar">
                            <div class="sidebar-box white">
                                <h3>
                                    <i class="icon-comment">
                                    </i>
                                    招生就业
                                </h3>
                                
                                    <div class="banner-wrapper">
                                        <a class="banner" href="<?php echo (C("GOTO")); ?>Home/Passages/showPassageslist">
                                            <i class="icons icon-calendar">
                                            </i>
                                            <h4>
                                                招生介绍
                                            </h4>
                                        </a>
                                    </div>
                                    <div class="banner-wrapper">
                                        <a class="banner" href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/16">
                                            <i class="icons icon-calendar">
                                            </i>
                                            <h4>
                                                实习信息
                                            </h4>
                                        </a>
                                    </div>
                                    <div class="banner-wrapper">
                                        <a class="banner" href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/17">
                                            <i class="icons icon-calendar">
                                            </i>
                                            <h4>
                                                就业信息
                                            </h4>
                                        </a>
                                    </div>
                            </div>
                            <!-- /Featured Video -->                        <!--
                            Upcoming Events
                        -->
                        <div class="hidden-xs">
                            <div class="sidebar-box white">
                        <h3><span style="padding-right: 8px;color: #4174c5;" id="content1"
                              onmouseover="changeContent(this)">公告通知</span>|
                              <span style="padding-left: 3px;" id="content2" onmouseover="changeContent(this)">学术活动</span>
                        </h3>
                    <div id="right">
                        <div id="aboutcontent1" class="right">
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
                                        <h6><?php if($vo["istop"] == 1): ?>[置顶]<?php endif; ?>
                                            <a href="<?php echo (C("GOTO")); ?>Home/Notice/showNotice/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a>
                                        </h6>

                                    </div>
                                </li>
                                <!-- /Event --><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        <a href="<?php echo (C("GOTO")); ?>Home/Notice/showList/p/1"
                           class="button transparent button-arrow">更多公告</a>
                        </div>

                        <div id="aboutcontent2" class="right">
                        <ul class="upcoming-events">
                            <?php if(is_array($study)): $i = 0; $__LIST__ = $study;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!-- Event -->
                                <li>
                                    <div class="date">
                                    <span>
                                        <span class="day"><?php echo ($vo["day"]); ?></span>
                                        <span class="month"><?php echo ($vo["month"]); ?>月</span>
                                    </span>
                                    </div>

                                    <div class="event-content">
                                        <h6><?php if($vo["istop"] == 1): ?>[置顶]<?php endif; ?>
                                            <a href="<?php echo (C("GOTO")); ?>Home/Notice/showNotice/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a>
                                        </h6>

                                    </div>
                                </li>
                                <!-- /Event --><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                        <a href="<?php echo (C("GOTO")); ?>Home/Notice/showList/p/1"
                           class="button transparent button-arrow">更多活动</a>
                        </div>
                    </div>
                    </div>
                        </div>
                    </div>
                    <!-- /Sidebar -->
                    <!--<div class="col-lg-9 col-md-9 col-sm-8">-->
                    <!--&lt;!&ndash; Single Blog Post &ndash;&gt;-->
                    <!--<div class="blog-post-single">-->
                    <!--<div class="post-content">-->
                    <!--<p class="animate-onscroll"><?php echo ($result['content']); ?></p>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; Pagination &ndash;&gt;-->
                    <!--&lt;!&ndash;<div class="row animate-onscroll">&ndash;&gt;-->
                    <!--&lt;!&ndash;<div class="col-lg-6 col-md-6 col-sm-6 button-pagination align-left">&ndash;&gt;-->
                    <!--&lt;!&ndash;<a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/<?php echo ($result['pre']); ?>"&ndash;&gt;-->
                    <!--&lt;!&ndash;class="button big previous">上一篇</a>&ndash;&gt;-->
                    <!--&lt;!&ndash;</div>&ndash;&gt;-->
                    <!--&lt;!&ndash;<div class="col-lg-6 col-md-6 col-sm-6 button-pagination align-right">&ndash;&gt;-->
                    <!--&lt;!&ndash;<a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages/<?php echo ($result['next']); ?>"&ndash;&gt;-->
                    <!--&lt;!&ndash;class="button big next">下一篇</a>&ndash;&gt;-->
                    <!--&lt;!&ndash;</div>&ndash;&gt;-->
                    <!--&lt;!&ndash;</div>&ndash;&gt;-->
                    <!--&lt;!&ndash; /Pagination &ndash;&gt;-->
                    <!--</div>-->
                    <!--&lt;!&ndash; /Single Blog Post &ndash;&gt;-->
                    <!--&lt;!&ndash; Related Articles &ndash;&gt;-->
                    <!--<div class="related-articles">-->
                    <!--<h3 class="page-header animate-onscroll"><i class="icon-bookmark"></i> 更多动态<a-->
                    <!--href="<?php echo (C("GOTO")); ?>Home/News/showList/p/1"-->
                    <!--class="pull-right">More</a>-->
                    <!--</h3>-->
                    <!--<div class="row">-->
                    <!--<?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>-->
                    <!--<div class="col-lg-4 col-md-4 col-sm-4">-->
                    <!--&lt;!&ndash; Blog Post &ndash;&gt;-->
                    <!--<div class="blog-post animate-onscroll">-->
                    <!--<div class="post-image">-->
                    <!--<img src="<?php echo ($vo["small_path"]); ?>" alt="">-->
                    <!--</div>-->
                    <!--<h4 class="post-title"><a-->
                    <!--href="<?php echo (C("GOTO")); ?>Home/News/showNews/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a>-->
                    <!--</h4>-->
                    <!--<div class="post-meta">-->
                    <!--<span>作者：<?php echo ($vo["author"]); ?></span>-->
                    <!--<span><?php echo ($vo["time"]); ?></span>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; /Blog Post &ndash;&gt;-->
                    <!--</div>-->
                    <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
                    <!--</div>-->
                    <!--</div>-->
                    <!--&lt;!&ndash; /Related Articles &ndash;&gt;-->
                    <!--</div>-->
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                            <?php if(is_array($admissions)): $i = 0; $__LIST__ = $admissions;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="list-passage">
                                    <div class="blog-post animate-onscroll">
                                        <div class="post-content">
                                            <div class="post-side-meta">
                                                <div class="date">
                                                    <span class="day">
                                                        <?php echo ($vo["day"]); ?>
                                                    </span>
                                                    <span class="month">
                                                        <?php echo ($vo["month"]); ?>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="post-header">
                                                <h2>
                                                    <a href="<?php echo (C("GOTO")); ?>Home/Passages/showAdmissions/<?php echo ($vo["id"]); ?>">
                                                        <?php echo ($vo["title"]); ?>
                                                    </a>
                                                </h2>
                                                <div class="post-meta">
                                                    <span>作者：<?php echo ($vo["author"]); ?></span>
                                                    <span><?php echo ($vo["time"]); ?></span><br><br>
                                                    <span>
                                                        分类：[
                                                        <a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassageslist?type=<?php echo ($vo["type"]); ?>">
                                                            <?php if($vo["type"] == 0): ?>招生简章<?php endif; ?>
                                                            <?php if($vo["type"] == 1): ?>招生通知<?php endif; ?>
                                                            <?php if($vo["type"] == 2): ?>招生流程<?php endif; ?>
                                                            <?php if($vo["type"] == 3): ?>招生问答<?php endif; ?>
                                                        </a>
                                                        ]
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><?php endforeach; endif; else: echo "" ;endif; ?>

                        <div class="text-center animate-onscroll">
                            <div class="yahoo2">
                                <?php echo ($page); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Section -->
        </section>
        <!-- Footer -->
        <footer id="footer">
            <!-- Main Footer -->
            <div id="main-footer">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 animate-onscroll">
                        <img src="<?php echo (C("HOMETOOLS")); ?>img/logo.png" class="img-responsive center-block" style=" vertical-align:middle"/>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-2 animate-onscroll">
                        <ul class="list-unstyled">
                            <li>
                                地址：杭州市留和路318号浙江科技学院习得园C2楼
                            </li>
                            <li>
                                邮件：itee@zust.edu.cn
                            </li>
                            <li>
                                电话：0571-85070300
                            </li>
                            <li>
                                邮编：310023
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Main Footer -->
            <!-- Lower Footer -->
            <div id="lower-footer">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 animate-onscroll">
                        <p class="copyright text-center">
                            Copyright © 2012-2017 ZUST ITEE All Rights Reserved 浙江科技学院
                            信息与电子工程学院 版权所有
                        </p>
                    </div>
                </div>
            </div>
            <!-- /Lower Footer -->
        </footer>
        <!-- /Footer -->
        <!-- Back To Top -->
        <a href="#" id="button-to-top">
            <i class="icons icon-up-dir">
            </i>
        </a>
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