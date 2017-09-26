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
                    body, div, dl, dt, dd, ul, ol, li, h2, h3, h4, h5, h6, pre, code, form, fieldset, legend, p, blockquote, th, td, figure {
                        margin: 0;
                        padding: 0;
                    }
                    
                    article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
                        display: block;
                    }
                    
                    ul li {
                        list-style: none;
                    }
                    
                    h2, h3, h4, h5, h6 {
                        font-size: 100%;
                    }
                    
                    blockquote:before, blockquote:after, q:before, q:after {
                        content: "";
                    }
                    
                    body {
                        font: normal 14px/24px;
                        word-wrap: break-word;
                        background: #F0F0F0;
                    }
                    
                    *:focus {
                        outline: 0;
                    }
                    
                    /* page */
                    .page {
                        display: block;
                        margin: 0 auto;
                        background: #fff;
                        -moz-box-shadow: 0 5px 20px #CCCCCC;
                        -webkit-box-shadow: 0 5px 20px #CCCCCC;
                        box-shadow: 0 5px 20px #CCCCCC;
                    }
        
                    .box {
        
                        margin: 18px auto 0 auto;
                    }
                    
                    .event_year {
                        width: 60px;
                        border-bottom: 2px solid #DDD;
                        text-align: center;
                        float: left;
                        margin-top: 10px;
                    }
                    
                    .event_year li {
                        height: 40px;
                        line-height: 40px;
                        background: #FFF;
                        margin-bottom: 1px;
                        font-size: 18px;
                        color: #828282;
                        cursor: pointer;
                    }
        
                    .event_year li.current {
                        width: 70px;
                        background: #0669CF url('<?php echo (C("HOMETOOLS")); ?>img/jian.png') 60px 0 no-repeat;
                        color: #FFF;
                        text-align: left;
                        padding-left: 9px;
                    }
        
                    .event_list {
                        width: 850px;
                        float: right;
                        background: url('<?php echo (C("HOMETOOLS")); ?>img/dian3.png') 139px 0 repeat-y;
                        margin: 10px 0 20px 0;
                    }
                    
                    .event_list h3 {
                        margin: 0 0 10px 132px;
                        font-size: 24px;
                        font-family: Georgia;
                        color: #0e67ed;
                        padding-left: 25px;
                        background: url('<?php echo (C("HOMETOOLS")); ?>img/jian.png') 0 -45px no-repeat;
                        height: 38px;
                        line-height: 30px;
                        font-style: italic;
                    }
                    
                    .event_list li {
                        background: url('<?php echo (C("HOMETOOLS")); ?>img/jian.png') 136px -80px no-repeat;
                    }
                    
                    .event_list li span {
                        width: 127px;
                        text-align: right;
                        display: block;
                        float: left;
                        margin-top: 10px;
                    }
                    
                    .event_list li p {
                        width: 680px;
                        margin-left: 24px;
                        display: inline-block;
                        padding-left: 10px;
                        background: url('<?php echo (C("HOMETOOLS")); ?>img/jian.png') -21px 0 no-repeat;
                        line-height: 25px;
                        _float: left;
                    }
        
                    .event_list li p span {
                        width: 650px;
                        text-align: left;
                        border-bottom: 2px solid #DDD;
                        padding: 10px 15px;
                        background: #FFF;
                        margin: 0;
                    }
                    
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
        
                    $(function () {
                        $('label').click(function () {
                            $('.event_year>li').removeClass('current');
                            $(this).parent('li').addClass('current');
                            var year = $(this).attr('for');
                            $('#' + year).parent().prevAll('div').slideUp(800);
                            $('#' + year).parent().slideDown(800).nextAll('div').slideDown(800);
                        });
                    });
                </script>
    </head>
    <body class="sticky-header-on tablet-sticky-header">
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
                        大事记
                    </h1>
                    <p class="breadcrumb">
                        <a href="<?php echo (C("GOTO")); ?>">
                            首页
                        </a>
                        ->
                        学科介绍 ->
                        大事记
                    </p>
                </section>
                <!-- Page Heading -->
                <!-- Section -->
                <section class="section full-width-bg gray-bg">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <ul class="event_year">
                                <?php if(is_array($years)): $i = 0; $__LIST__ = $years;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                        <label for="<?php echo ($vo); ?>">
                                            <?php echo ($vo); ?>
                                        </label>
                                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                            <ul class="event_list">
                                <?php if(is_array($years)): $i = 0; $__LIST__ = $years;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$year): $mod = ($i % 2 );++$i;?><div>
                                        <h3 id="<?php echo ($year); ?>">
                                            <?php echo ($year); ?>
                                        </h3>
                                        <?php if(is_array($result[$year])): $i = 0; $__LIST__ = $result[$year];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$month): $mod = ($i % 2 );++$i;?><li>
                                                <span>
                                                    <?php echo ($month["month"]); ?>月<?php echo ($month["day"]); ?>
                                                </span>
                                                <p>
                                                    <span>
                                                        <?php echo ($month["title"]); ?>
                                                    </span>
                                                </p>
                                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </div><?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>
                            <div class="clearfix">
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section -->
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
            <!-- Back To Top -->
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
    </section>
</div>
</body>
</html>