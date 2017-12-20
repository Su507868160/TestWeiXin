<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"F:\wamp64\www\bolg\public/../application/admin\view\login\login.html";i:1509162001;}*/ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><!--Head--><head>
    <meta charset="utf-8">
    <title>童老师ThinkPHP交流群：484519446</title>
    <meta name="description" content="login page">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="__PUBLIC__style/bootstrap.css" rel="stylesheet">
    <link href="__PUBLIC__style/font-awesome.css" rel="stylesheet">
    <!--Beyond styles-->
    <link id="beyond-link" href="__PUBLIC__style/beyond.css" rel="stylesheet">
    <link href="__PUBLIC__style/demo.css" rel="stylesheet">
    <link href="__PUBLIC__style/animate.css" rel="stylesheet">
</head>
<!--Head Ends-->
<!--Body-->

<body>
    <div class="login-container animated fadeInDown">
        <form action="<?php echo url('admin/Login/login'); ?>" method="post">
            <div class="loginbox bg-white">
                <div class="loginbox-title">SIGN IN</div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="username" name="username" type="text">
                </div>
                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="password" name="password" type="password">
                </div>
                <div   class="loginbox-textbox" >
                    <input style="width:100px;float: left;" class="form-control" placeholder="code" name="code" type="code">
                    <div><img style="float: right;cursor:pointer;width:110px;height: 35px" src="<?php echo captcha_src(); ?>" alt="captcha" onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random()"/></div>
                </div>

                <div class=""style="margin: 40px auto 20px 40px;" onclick="<?php echo url('admin/Login/'); ?>">
                    <button>短信验证</button>
                </div>

                <div class="loginbox-textbox">
                    <input class="form-control" placeholder="email" name="email" type="text">
                </div>
                <div class=""style="margin: 0px auto 20px 40px;" onclick="">
                    <button>邮箱验证</button>
                </div>
                <div class="loginbox-submit" style="margin: 40px auto 20px;">
                    <input class="btn btn-primary btn-block" value="Login" type="submit">
                </div>

            </div>
                <div class="logobox">
                    <p class="text-center">童老师ThinkPHP交流群：4845194464</p>
                </div>
        </form>
    </div>
    <!--Basic Scripts-->
    <script src="__PUBLIC__style/jquery.js"></script>
    <script src="__PUBLIC__style/bootstrap.js"></script>
    <script src="__PUBLIC__style/jquery_002.js"></script>
    <!--Beyond Scripts-->
    <script src="__PUBLIC__style/beyond.js"></script>




</body><!--Body Ends--></html>