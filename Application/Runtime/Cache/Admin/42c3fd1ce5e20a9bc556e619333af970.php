<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 9]>
    <html class="no-js lt-ie10" lang="ch-zn"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="ch-zn">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8"/>
        <title>
            ZUST软件工程一流学科网站管理中心
        </title>
        <meta name="description" content="AppUI is a Web App Bootstrap Admin Template created by pixelcave and published on Themeforest"/>
        <meta name="author" content="pixelcave"/>
        <meta name="robots" content="noindex, nofollow"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="<?php echo (C("CSS_PATH")); ?>bootstrap.min.css"/>
        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="<?php echo (C("CSS_PATH")); ?>plugins.css"/>
        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="<?php echo (C("CSS_PATH")); ?>main.css"/>
        <link rel="stylesheet" href="<?php echo (C("CSS_PATH")); ?>themes.css"/>
        <!-- END Stylesheets -->
        <!-- Modernizr (browser feature detection library) -->
        <script src="<?php echo (C("JS_PATH")); ?>vendor/modernizr-3.3.1.min.js"></script>
    </head>
    <body>
        <div id="page-wrapper" class="page-loading">
            <div class="preloader">
                <div class="inner">
                    <!-- Animation spinner for all modern browsers -->
                    <div class="preloader-spinner themed-background hidden-lt-ie10">
                    </div>
                    <!-- Text for IE9 -->
                    <h3 class="text-primary visible-lt-ie10">
                        <strong>
                            Loading..
                        </strong>
                    </h3>
                </div>
            </div>
            <div id="page-container" class="header-fixed-top sidebar-visible-lg-full">
                <!-- Main Sidebar -->
                <div id="sidebar">
                    <!-- Sidebar Brand -->
                    <div id="sidebar-brand" class="themed-background">
                        <a href="<?php echo (C("GOTO")); ?>Admin/index/showAdmin" class="sidebar-title">
                            <span class="sidebar-nav-mini-hide">
                                <strong>
                                    ZUST软件工程管理中心
                                </strong>
                            </span>
                        </a>
                    </div>
                    <!-- END Sidebar Brand -->
                    <!-- Wrapper for scrolling functionality -->
                    <div id="sidebar-scroll">
                        <!-- Sidebar Content -->
                        <div class="sidebar-content">
                            <!-- Sidebar Navigation -->
                            <ul class="sidebar-nav">
                                <li>
                                    <a href="#" class="sidebar-nav-menu">
                                        <i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide">
                                        </i>
                                        <i class="fa fa-list-alt sidebar-nav-icon">
                                        </i>
                                        <span class="sidebar-nav-mini-hide">
                                            公告管理
                                        </span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo (C("GOTO")); ?>Admin/Notice/showAdd">
                                                公告发布
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo (C("GOTO")); ?>Admin/Notice/showManage">
                                                公告删改
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu">
                                        <i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide">
                                        </i>
                                        <i class="fa fa-book sidebar-nav-icon">
                                        </i>
                                        <span class="sidebar-nav-mini-hide">
                                            学科动态管理
                                        </span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo (C("GOTO")); ?>Admin/News/showAdd">
                                                学科动态发布
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo (C("GOTO")); ?>Admin/News/showManage">
                                                学科动态删改
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu">
                                        <i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide">
                                        </i>
                                        <i class="gi gi-notes_2 sidebar-nav-icon">
                                        </i>
                                        <span class="sidebar-nav-mini-hide">
                                            文章管理
                                        </span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo (C("GOTO")); ?>Admin/Passages/showManage">
                                                文章修改
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu">
                                        <i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide">
                                        </i>
                                        <i class="fa fa-mortar-board sidebar-nav-icon">
                                        </i>
                                        <span class="sidebar-nav-mini-hide">
                                            学子风采管理
                                        </span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo (C("GOTO")); ?>Admin/Student/showAdd">
                                                学子风采发布
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo (C("GOTO")); ?>Admin/Student/showManage">
                                                学子风采删改
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu">
                                        <i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide">
                                        </i>
                                        <i class="hi hi-picture sidebar-nav-icon">
                                        </i>
                                        <span class="sidebar-nav-mini-hide">
                                            首页幻灯片管理
                                        </span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo (C("GOTO")); ?>Admin/Picture/showModify">
                                                首页幻灯片修改
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu">
                                        <i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide">
                                        </i>
                                        <i class="hi hi-time sidebar-nav-icon">
                                        </i>
                                        <span class="sidebar-nav-mini-hide">
                                            大事记管理
                                        </span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo (C("GOTO")); ?>Admin/Time/showAdd">
                                                大事记发布
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo (C("GOTO")); ?>Admin/Time/showManage">
                                                大事记删改
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="active">
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="hi hi-time sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">招生信息管理</span></a>
                                    <ul>
                                        <li>
                                            <a href="<?php echo (C("GOTO")); ?>Admin/Admissions/showAdd">招生信息发布
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo (C("GOTO")); ?>Admin/Admissions/showManage" class="active">招生信息删改
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="sidebar-separator push">
                                <i class="fa fa-ellipsis-h">
                                </i>
                            </div>
                        </div>
                        <!-- END Sidebar Content -->
                    </div>
                    <div id="sidebar-extra-info" class="sidebar-content sidebar-nav-mini-hide">
                        <div class="text-center">
                            <small>
                                Copyright &copy; 2012-2017 ZUST ITEE All Rights Reserved
                                <br/>
                                <a herf="<?php echo (C("GOTO")); ?>">
                                    浙江科技学院 信息与电子工程学院
                                </a>
                                版权所有
                            </small>
                        </div>
                    </div>
                    <!-- END Sidebar Extra Info -->
                </div>
                <!-- END Main Sidebar -->
                <!-- Main Container -->
                <div id="main-container">
                    <header class="navbar navbar-inverse navbar-fixed-top">
                        <!-- Left Header Navigation -->
                        <ul class="nav navbar-nav-custom">
                            <!-- Main Sidebar Toggle Button -->
                            <li>
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                    <i class="fa fa-ellipsis-v fa-fw animation-fadeInRight" id="sidebar-toggle-mini">
                                    </i>
                                    <i class="fa fa-bars fa-fw animation-fadeInRight" id="sidebar-toggle-full">
                                    </i>
                                </a>
                            </li>
                            <!-- END Main Sidebar Toggle Button -->
                            <!-- Header Link -->
                            <li class="hidden-xs animation-fadeInQuick">
                                <a href="admin_index.html">
                                    <strong>
                                    </strong>
                                </a>
                            </li>
                            <!-- END Header Link -->
                        </ul>
                        <!-- END Left Header Navigation -->
                        <!-- Right Header Navigation -->
                        <ul class="nav navbar-nav-custom pull-right">
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" style="margin-right:20px; ">
                                    <strong>
                                        欢迎您，<?php echo ($name); ?>
                                    </strong>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a href="<?php echo (C("GOTO")); ?>">
                                            <i class="hi hi-home pull-right" style="line-height: 20px;">
                                            </i>
                                            网站首页
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo (C("GOTO")); ?>Admin/User/logout">
                                            <i class="hi hi-off pull-right" style="line-height: 20px;">
                                            </i>
                                            注销账号
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END User Dropdown -->
                        </ul>
                        <!-- END Right Header Navigation -->
                    </header>
                    <!-- END Header -->
                    <!-- Page content -->
                    <div id="page-content">
                        <!-- Blank Header -->
                        <div class="content-header">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="header-section">
                                        <h1>
                                            招生信息管理
                                        </h1>
                                    </div>
                                </div>
                                <div class="col-sm-6 hidden-xs">
                                    <div class="header-section">
                                        <ul class="breadcrumb breadcrumb-top">
                                            <li>
                                                <a href="">
                                                    <i class="fa fa-rotate-right">
                                                    </i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Blank Header -->
                        <!-- Get Started Block -->
                        <div class="block full">
                            <!-- Get Started Title -->
                            <div class="block-title">
                                <h2>
                                    公告删改
                                </h2>
                            </div>
                            <!-- END Get Started Title -->
                            <div class="table-responsive">
                                <table id="example-datatable" class="table table-striped table-bordered table-vcenter">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 50px;">
                                                序号
                                            </th>
                                            <th class="text-center">
                                                作者
                                            </th>
                                            <th class="text-center">
                                                标题
                                            </th>
                                            <th class="text-center">
                                                类别
                                            </th>
                                            <th class="text-center">
                                                发布日期
                                            </th>
                                            <th class="text-center" style="width: 75px;">
                                                操作
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(is_array($result)): $i = 0; $__LIST__ = $result;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                                                <td class="text-center">
                                                    <?php echo ($vo["id"]); ?>
                                                </td>
                                                <td class="text-center">
                                                    <strong>
                                                        <?php echo ($vo["author"]); ?>
                                                    </strong>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo ($vo["title"]); ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php if($vo["type"] == 1): ?>学术活动<?php endif; ?>
                                                    <?php if($vo["type"] == 0): ?>公告通知<?php endif; ?>
                                                </td>
                                                <td class="text-center">
                                                    <?php echo ($vo["time"]); ?>
                                                </td>
                                                <td class="text-center">
                                                    <a href="<?php echo (C("GOTO")); ?>Admin/Notice/showModify?id=<?php echo ($vo["id"]); ?>" data-toggle="tooltip" title="修改" class="btn btn-effect-ripple btn-xs btn-success">
                                                        <i class="fa fa-pencil">
                                                        </i>
                                                    </a>
                                                    <a onclick="return del()" href="<?php echo (C("GOTO")); ?>Admin/Notice/delete?id=<?php echo ($vo["id"]); ?>" data-toggle="tooltip" title="删除" class="btn btn-effect-ripple btn-xs btn-danger">
                                                        <i class="fa fa-times">
                                                        </i>
                                                    </a>
                                                </td>
                                            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END Get Started Block -->
                    </div>
                    <!-- END Page Content -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
        </div>
        <!-- END Page Wrapper -->
        <!-- jQuery, Bootstrap, jQuery plugins and Custom JS code -->
        <script src="<?php echo (C("JS_PATH")); ?>vendor/jquery-2.2.4.min.js"></script>
        <script src="<?php echo (C("JS_PATH")); ?>vendor/bootstrap.min.js"></script>
        <script src="<?php echo (C("JS_PATH")); ?>plugins.js"></script>
        <script src="<?php echo (C("JS_PATH")); ?>app.js"></script>
        <!-- Load and execute javascript code used only in this page -->
        <script src="<?php echo (C("JS_PATH")); ?>pages/uiTables.js"></script>
        <script>
        $(function() {
            UiTables.init();
        });
        </script>
        <script>
        function del1() {
            var msg = "您确定要删除这一条记录吗？";
            if (confirm(msg) == true) {
                return true;
            } else {
                return false;
            }
        }
        $(document).ready(function() {
            $('.form-control').attr('placeholder', '搜索');
        })
        </script>
    </body>
</html>