<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <title>Favorite Website 后台管理系统</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="__PUBLIC__/css/templatemo_main.css">
    <script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
    <script src="__PUBLIC__/js/jquery.validate.min.js"></script>
    <script src="__PUBLIC__/js/validate.js"></script>
    <script src="__PUBLIC__/js/message.js"></script>

</head>
<body>
<div class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <div class="logo">
            <h1>Favorite Website 后台管理系统</h1>
        </div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
</div>
<div class="template-page-wrapper" >
    <h2 class="center">管理员登陆</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="<?php echo U('Admin/Login/login');?>" role="form" method="post" id="regform">
                    <div class="form-group">
                        <label for="username">用户名</label>
                        <input type="text" class="form-control" name="username" placeholder="请输入用户名" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="password">密码</label>
                        <input type="password" class="form-control" name="password" placeholder="密码" id="password" autocomplete="off">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">登陆</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</div>
</body>
</html>