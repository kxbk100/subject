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
                            <li><a href="<?php echo (C("GOTO")); ?>Home/Passages/showPassages3/4">学科成果</a></li>
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
    <section id="content">
        <!-- Page Heading -->
        <section class="section page-heading animate-onscroll">
            <h1>大事记</h1>
            <p class="breadcrumb"><a href="<?php echo (C("GOTO")); ?>">首页</a> -> 学科介绍 -> 大事记</p>
        </section>
        <!-- Page Heading -->
        <!-- Section -->
        <section class="section full-width-bg gray-bg">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                        <ul class="event_year">
                            <li class="current"><label for="2013">2013</label></li>
                            <li><label for="2012">2012</label></li>
                            <li><label for="2011">2011</label></li>
                            <li><label for="2010">2010</label></li>
                            <li><label for="2009">2009</label></li>
                            <li><label for="2008">2008</label></li>
                            <li><label for="2007">2007</label></li>
                            <li><label for="2006">2006</label></li>
                            <li><label for="2005">2005</label></li>
                            <li><label for="2004">2004</label></li>
                            <li><label for="2003">2003</label></li>
                            <li><label for="2002">2002</label></li>
                        </ul>

                        <ul class="event_list">
                            <div>
                                <h3 id="2013">2013</h3>
                                <li>
                                    <span>5月</span>
                                    <p><span>站长之家专栏改版上线</span></p>
                                </li>
                                <li>
                                    <span>4月</span>
                                    <p><span>站长工具旗下产品，超级监控上线</span></p>
                                </li>
                                <li>
                                    <span>3月</span>
                                    <p><span>站长之家创业栏目上线</span></p>
                                </li>
                            </div>

                            <div>
                                <h3 id="2012">2012</h3>
                                <li>
                                    <span>9月</span>
                                    <p><span>站长之家北京分公司成立</span></p>
                                </li>
                            </div>

                            <div>
                                <h3 id="2011">2011</h3>
                                <li><span>3月13日</span>
                                    <p><span><a href="http://www.313.com/"
                                                target="_blank">建站大师（www.313.com）上线</a></span>
                                    </p></li>
                                <li><span>3月26日</span>
                                    <p><span>站长论坛荣获<a href="http://bbs.ifeng.com/special/bbs100/" target="_blank">2010年第二届中文论坛100强称号（名列第50位）</a></span>
                                    </p></li>
                                <li><span>4月-11月</span>
                                    <p><span>4月-11月 站长之家<a href="http://9th.chinaz.com/" target="_blank">九周年全国交流会启动（厦门、南京、杭州、广州、合肥、武汉、西安、重庆、上海等地）</a>，同时宣布与新浪微博达成<a
                                            href="http://9th.chinaz.com/tianshijijin.aspx"
                                            target="_blank">微博创新基金合作，启动中小站长专项投资</a></span>
                                    </p></li>
                                <li><span>6月11日</span>
                                    <p><span><a href="http://open.313.com"
                                                target="_blank">推出建站大师开放平台open.313.com</a></span>
                                    </p></li>
                                <li><span>9月10日</span>
                                    <p><span>站长之家北京分公司成立</span></p></li>
                            </div>

                            <div>
                                <h3 id="2010">2010</h3>
                                <li><span>5月21日</span>
                                    <p><span><a href="http://my.chinaz.com/" target="_blank">全站用户中心上线</a></span></p>
                                </li>

                                <li><span>5月26日</span>
                                    <p><span>C2C交易平台<a href="http://jy.chinaz.com/" target="_blank">站长交易上线</a></span>
                                    </p>
                                </li>


                                <li><span>6月11日</span>
                                    <p><span><a href="http://bbs.chinaz.com/" target="_blank">站长论坛新版上线</a></span></p>
                                </li>

                                <li><span>9月10日</span>
                                    <p><span><a href="http://bbs.chinaz.com/" target="_blank">站长论坛发帖超过千万</a></span></p>
                                </li>

                                <li><span>10月8日</span>
                                    <p><span><a href="http://mytool.chinaz.com"
                                                target="_blank">我的工具(Mytool.chinaz.com)新版上线</a></span></p></li>

                                <li><span>10月14日</span>
                                    <p><span><a href="http://down.chinaz.com" target="_blank">站长下载第三次改版完成</a></span></p>
                                </li>

                                <li><span>10月18日</span>
                                    <p><span><a href="http://www.bbsmax.com/" target="_blank">全资收购社区开发商BBSMAX</a>，<a
                                            href="http://www.microsoft.com/web/gallery/bbsmax.aspx"
                                            target="_blank">并与微软Web应用平台达成合作</a></span>
                                    </p></li>

                                <li>
                                    <span>12月4日</span>
                                    <p><span>在阿里巴巴主办的“第二届中国地方与行业网站峰会”上获</a><a
                                            href="http://www.chinaz.com/news/2010/1204/147210_3.shtml"
                                            target="_blank">最受欢迎的站长服务商</a></span>
                                    </p></li>
                            </div>

                            <div>
                                <h3 id="2009">2009</h3>
                                <li><span>3月20日</span>
                                    <p><span>举办<a href="http://vote.chinaz.com/"
                                                  target="_blank">中国站长站7周年站长调查活动</a></span>
                                    </p></li>

                                <li><span>3月23日</span>
                                    <p><span>正式推出<a href="http://www.cnidc.com" target="_blank">IDC行业的B2C平台</a> - <a
                                            href="http://www.cnidc.com" target="_blank">主机网</a>！</span></p></li>

                                <li><span>7月8日</span>
                                    <p><span><a href="http://www.chinaz.com/news/zt/dc/"
                                                target="_blank">发布中国站长行业调查报告</a></span></p></li>

                                <li><span>9月8日</span>
                                    <p><span>正式推出集<a href="http://www.idc123.com" target="_blank">虚拟主机评测</a>和IDC导航于一体的<a
                                            href="http://www.idc123.com" target="_blank">主机之家</a>！</span></p></li>
                                <li><span>11月26日</span>
                                    <p><span><a href="http://mytool.chinaz.com/"
                                                target="_blank">我的工具(MYtool.chinaz.com)发布</a></span></p></li>
                            </div>

                            <div>
                                <h3 id="2008">2008</h3>
                                <li><span>1月8日</span>
                                    <p><span><a href="http://www.cnzz.com" target="_blank">站长统计</a>用户数突破60万！</span></p>
                                </li>
                                <li><span>2月2日</span>
                                    <p><span><a href="http://bbs.chinaz.com/Club/thread-1060455-1-1.html"
                                                target="_blank">宣布与BBSmax结成战略合作伙伴!</a></span>
                                    </p></li>
                                <li><span>2月15日</span>
                                    <p><span><a href="http://tool.chinaz.com/client/"
                                                target="_blank">推出站长工具软件v1.0测试版</a></span></p></li>
                                <li><span>4月16日</span>
                                    <p><span><a href="http://bbs.chinaz.com/Club/thread-1088776-1-1.html"
                                                target="_blank">推出一个小工具-网站测速 v1.0测试版</a></span>
                                    </p></li>
                                <li><span>4月23日</span>
                                    <p><span><a href="http://www.chinaz.com" target="_blank">站长资讯推出v2008新版</a></span>
                                    </p>
                                </li>
                                <li><span>4月28日</span>
                                    <p><span><a href="http://www.chinaz.cn"
                                                target="_blank">推出软件下载子站-精品软件站 chinaz.cn</a></span></p></li>
                                <li><span>5月5日</span>
                                    <p><span><a href="http://helper.chinaz.com"
                                                target="_blank">站长工具软件正式更名为站长助手</a></span>
                                    </p></li>
                                <li><span>5月6日</span>
                                    <p><span><a href="http://bm.chinaz.com" target="_blank">推出一个小工具，网站保姆</a></span></p>
                                </li>
                                <li><span>5月22日</span>
                                    <p><span>推出"万站签名迎奥运"活动！</span></p></li>
                                <li><span>6月1日</span>
                                    <p><span><a href="http://down.chinaz.com" target="_blank">站长下载第二次改版完成</a></span></p>
                                </li>
                            </div>

                            <div>
                                <h3 id="2007">2007</h3>
                                <li><span>1月29日</span>
                                    <p><span>推出<a href="http://desk.chinaz.com"
                                                  target="_blank">壁纸</a>栏目 Desk.chinaz.com</span></p></li>
                                <li><span>3月3日</span>
                                    <p><span><a href="http://tech.sina.com.cn/i/2007-03-07/10341405010.shtml"
                                                target="_blank">五周年站长聚会活动 厦门站顺利召开</a></span></p></li>
                                <li><span>3月17日</span>
                                    <p><span><a href="http://tech.163.com/07/0320/11/3A195A7Q000915I3.html"
                                                target="_blank">五周年站长聚会活动 上海站顺利召开</a></span>
                                    </p></li>
                                <li><span>3月31日</span>
                                    <p><span><a href="http://5th.chinaz.com" target="_blank">五周年聚会-千位站长齐聚广州</a></span>
                                    </p>
                                </li>
                                <li><span>4月7日</span>
                                    <p><span><a href="http://5th.chinaz.com" target="_blank">五周年聚会安徽合肥站顺利召开</a></span>
                                    </p>
                                </li>

                                <li><span>4月22日</span>
                                    <p><span><a href="http://tech.sina.com.cn/i/2007-04-22/17121477057.shtml"
                                                target="_blank">CNZZ荣获第三届站长大会07年十大创新网站</a></span></p></li>

                                <li><span>8月13日</span>
                                    <p><span>站长统计当日统计流量突破10亿!</span></p></li>
                                <li><span>9月14日</span>
                                    <p><span><a href="http://down.chinaz.com" target="_blank">站长下载</a>栏目改版完成</span></p>
                                </li>
                            </div>

                            <div>
                                <h3 id="2006">2006</h3>

                                <li><span>4月8日</span>
                                    <p><span>中国站长联盟(cnzz.com)的免费统计分析服务当日统计量突破4亿次！</span></p></li>
                                <li><span>5月25日</span>
                                    <p><span>推出素材下载栏目(sc.chinaz.com)！</span></p></li>
                                <li><span>8月8日</span>
                                    <p><span>中国站长联盟(cnzz.com)的免费统计分析服务当日统计量突破5亿次！</span></p></li>
                            </div>

                            <div>
                                <h3 id="2005">2005</h3>
                                <li><span>1月23日</span>
                                    <p><span>网站论坛帖子突破200万！</span></p></li>
                                <li><span>2月20日</span>
                                    <p><span>免费域名注册量突破20万！</span></p></li>
                                <li><span>3月10日</span>
                                    <p><span>站长学院栏目正式开通(edu.chinaz.com)！</span></p></li>
                                <li><span>5月20日</span>
                                    <p><span>域名交易栏目已有1万个域名在进行出售！</span></p></li>
                                <li><span>5月24日</span>
                                    <p><span>正式进入ALEXA中文网站排名100强(第98名)!</span></p></li>
                                <li><span>6月3日</span>
                                    <p><span>网站用户达到20万！</span></p></li>
                                <li><span>7月1日</span>
                                    <p><span>正式进入ALEXA全球网站500强！！(第499名)</span></p></li>
                                <li><span>7月16日</span>
                                    <p><span>推出站长博客栏目。blog.chinaz.com</span></p></li>
                                <li><span>8月28日</span>
                                    <p><span>网站在Alexa.com的全球网站当日排名进入200名内(199名)！</span></p></li>
                                <li><span>9月1日</span>
                                    <p><span>中国站长联盟(cnzz.com)推出，开始提供统计服务！</span></p></li>
                                <li><span>10月9日</span>
                                    <p><span>子站点中国站长联盟(cnzz.com)当日排名进入1000名内(890)！</span></p></li>
                                <li><span>11月5日</span>
                                    <p><span>子站点中国站长联盟(cnzz.com)当日排名进入500名内(485)！</span></p></li>
                                <li><span>12月16日</span>
                                    <p><span>chinaz.com正式进入alexa全球总排名200名以内。(第195名)</span></p></li>
                                <li><span>12月23日</span>
                                    <p><span>中国站长联盟(cnzz.com)的免费统计分析服务当日统计量突破1.8亿次！</span></p></li>
                                <li><span>12月27日</span>
                                    <p><span>网站在Alexa.com的全球网站当日排名进入100名内(97名)！</span></p></li>
                            </div>

                            <div>
                                <h3 id="2004">2004</h3>
                                <li><span>3月2日</span>
                                    <p><span>网站论坛帖子突破100万！</span></p></li>
                                <li><span>4月18日</span>
                                    <p><span>下载栏目提供下载次数突破2000万！</span></p></li>
                                <li><span>4月20日</span>
                                    <p><span>9126.com免费转向域名系统为用户提供转向次数突破1亿次！</span></p></li>
                                <li><span>5月7日</span>
                                    <p><span>网站在Alexa.com的全球网站排名中正式进入1000名内(全球第958名)！</span></p></li>
                                <li><span>8月3日</span>
                                    <p><span>网站在Alexa.com的全球网站当日排名进入500名内(495名)！</span></p></li>
                                <li><span>9月3日</span>
                                    <p><span>域名交易栏目测试开通！</span></p></li>
                            </div>

                            <div>
                                <h3 id="2003">2003</h3>
                                <li><span>3月22日</span>
                                    <p><span>网站注册用户达到50000</span></p></li>
                                <li><span>4月12日</span>
                                    <p><span>9126.com免费转向域名系统为站长们提供的转向次数突破2000万！</span></p></li>
                                <li><span>5月13日</span>
                                    <p><span>下载栏目提供下载次数突破1000万！</span></p></li>
                                <li><span>6月13日</span>
                                    <p><span>虚拟主机栏目正式开通！(idc.chinaz.com)</span></p></li>
                                <li><span>6月25日</span>
                                    <p><span>网站日访问量突破20万!</span></p></li>
                                <li><span>7月3日</span>
                                    <p><span>在Alexa.com的全球网站排名进入1万名以内(9826)!</span></p></li>
                                <li><span>7月9日</span>
                                    <p><span>9126.com免费转向域名系统注册用户突破10万！</span></p></li>
                                <li><span>10月19日</span>
                                    <p><span>网站论坛帖子突破50万！</span></p></li>
                                <li><span>11月2日</span>
                                    <p><span>网站在Alexa.com的全球网站当日排名进入1000名内(974名)！</span></p></li>
                                <li><span>11月3日</span>
                                    <p><span>网站注册用户突破10万！</span></p></li>
                                <li><span>12月26日</span>
                                    <p><span>网站在Alexa.com的全球网站当日排名再创新高！！(636名)</span></p></li>
                            </div>

                            <div>
                                <h3 id="2002">2002</h3>

                                <li>
                                    <span>12月28</span>
                                    <p><span>网站主域名更改为chinaz.com</span></p>
                                </li>

                                <li>
                                    <span>12月27日</span>
                                    <p><span>网站注册用户达到20000</span></p>
                                </li>


                                <li>
                                    <span>11月20日</span>
                                    <p><span>网站日访问量突破10万!</span></p>
                                </li>

                                <li>
                                    <span>10月21日</span>
                                    <p><span>免费转向域名栏目开始提供服务(9126.com) </span></p>
                                </li>

                                <li>
                                    <span>5月1日</span>
                                    <p><span>网站正式对外公布，下载栏目正式开通</span></p>
                                </li>
                                <li>
                                    <span>4月1日</span>
                                    <p><span>网站主域名更改为cnzzz.com</span></p>
                                </li>
                                <li>
                                    <span>3月3日</span>
                                    <p><span>网站开始筹建(chinazzz.com)</span></p>
                                </li>
                            </div>
                        </ul>

                        <div class="clearfix"></div>
                </div>
            </div>
        </section>
        <!-- Section -->
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


</body>

</html>