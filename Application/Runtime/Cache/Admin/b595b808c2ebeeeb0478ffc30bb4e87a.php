<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="zh-cn"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="zh-cn"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>后台登录</title>

        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="<?php echo (C("CSS_PATH")); ?>bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="<?php echo (C("CSS_PATH")); ?>plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="<?php echo (C("CSS_PATH")); ?>main.css">

       
        <link rel="stylesheet" href="<?php echo (C("CSS_PATH")); ?>themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="<?php echo (C("JS_PATH")); ?>vendor/modernizr-3.3.1.min.js"></script>
    </head>
    <body>
        <!-- Full Background -->
        <!-- For best results use an image with a resolution of 1280x1280 pixels (prefer a blurred image for smaller file size) -->
        <img src="<?php echo (C("IMG_PATH")); ?>img/placeholders/layout/login2_full_bg.jpg" alt="Full Background" class="full-bg animation-pulseSlow">
        <!-- END Full Background -->

        <!-- Login Container -->
        <div id="login-container">
            <!-- Login Header -->
            <h1 class="h2 text-light text-center push-top-bottom animation-pullDown">
                <!-- <i class="fa fa-cube text-light-op"></i> <strong>AppUI</strong> -->
            </h1>
            <!-- END Login Header -->

            <!-- Login Block -->
            <div class="block animation-fadeInQuick">
                <!-- Login Title -->
                <div class="block-title">
                    <h2>欢迎登录</h2>
                </div>
                <!-- END Login Title -->

                <!-- Login Form -->
                <form id="form-login" action="<?php echo (C("GOTO")); ?>Admin/User/login" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label for="login-email" class="col-xs-12">账号</label>
                        <div class="col-xs-12">
                            <input type="text" id="login-email" name="account" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="login-password" class="col-xs-12">密码</label>
                        <div class="col-xs-12">
                            <input type="password" id="login-password" name="password" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-xs-8">
                            <label class="csscheckbox csscheckbox-primary">
                                <input type="checkbox" id="login-remember-me" name="login-remember-me"><span></span> 记住我
                            </label>
                        </div>
                        <div class="col-xs-4 text-right">
                            <button type="submit" class="btn btn-effect-ripple btn-sm btn-success" value="登录">登录</button>
                        </div>
                    </div>
                </form>
               
            </div>
            <!-- END Login Block -->

            <!-- Footer -->
            <footer class="text-muted text-center animation-pullUp">
                <small>Copyright &copy; 2012-2017 ZUST ITEE All Rights Reserved </small>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Login Container -->

        <!-- jQuery, Bootstrap, jQuery plugins and Custom JS code -->
        <script src="<?php echo (C("JS_PATH")); ?>vendor/jquery-2.2.4.min.js"></script>
        <script src="<?php echo (C("JS_PATH")); ?>vendor/bootstrap.min.js"></script>
        <script src="<?php echo (C("JS_PATH")); ?>plugins.js"></script>
        <script src="<?php echo (C("JS_PATH")); ?>app.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="<?php echo (C("JS_PATH")); ?>js/pages/readyLogin.js"></script>
        <script>$(function(){ ReadyLogin.init(); });</script>
    </body>
</html>