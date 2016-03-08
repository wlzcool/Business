<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Log in</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo (C("WEB_RES_ROOT")); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css"/>
    <!-- Theme style -->
    <link href="<?php echo (C("WEB_RES_ROOT")); ?>dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css"/>
    <!-- iCheck -->
    <link href="<?php echo (C("WEB_RES_ROOT")); ?>plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <div class="form-group has-feedback">
            <input type="text" id="email" class="form-control" placeholder="邮箱地址"/>
        </div>
        <div class="form-group has-feedback">
            <input type="password" id="password" class="form-control" placeholder="密码"/>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input type="checkbox"> 记住我
                    </label>
                </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" id="btnSignIn" class="btn btn-primary btn-block btn-flat">登录</button>
            </div><!-- /.col -->
        </div>

        <a href="#">忘了密码</a><br>
        <a href="register" class="text-center">注册新用户</a>

    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->

<!-- jQuery 2.1.3 -->
<script src="<?php echo (C("WEB_RES_ROOT")); ?>plugins/jQuery/jQuery-2.1.3.min.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="<?php echo (C("WEB_RES_ROOT")); ?>bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- iCheck -->
<script src="<?php echo (C("WEB_RES_ROOT")); ?>plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
        $("#btnSignIn").click(function () {
            $.ajax({
                type: 'POST',
                url: '/home/login/LoginPost',
                timeout: 60 * 1000,
                dataType: 'json',
                data: {"email": $("#email").val(), "password": $("#password").val()},
                success: function (result) {
                    if (result != null && result.State == 'Success') {
                        location.href = "/home/index";
                    } else {
                        alert(result.ErrorMessage);
                    }
                }
            });
        });
    });
</script>
</body>
</html>