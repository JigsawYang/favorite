<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Jigsaw Yang">

    <title>Favorite Website</title>

    <link rel="shortcut icon" href="__PUBLIC__/images/gt_favicon.png">

    <link rel="stylesheet" href="__PUBLIC__/css/bootstrap.min.css">
    <link rel="stylesheet" href="__PUBLIC__/css/font-awesome.min.css">

    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="__PUBLIC__/css/bootstrap-theme.css" media="screen" >
    <link rel="stylesheet" href="__PUBLIC__/css/main.css">
    <link rel="stylesheet" href="__PUBLIC__/css/jquery.autocomplete.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="__PUBLIC__/js/html5shiv.js"></script>
    <script src="__PUBLIC__/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
    <div class="container">
        <div class="navbar-header">
            <!-- Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo U('Index/Index/index');?>">
                <img src="__PUBLIC__/images/logo2.png" alt="logo"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
                <li class="active">
                    <a href="<?php echo U('Index/Index/index');?>">Home</a>
                </li>
                <li>
                    <a href="<?php echo U('Index/About/index');?>">About Me</a>
                </li>
                <?php if(($name)): ?><li>
                        <a class="btn" href="#"><?php echo ($name); ?></a>
                    </li>
                    <li>
                        <a class="btn" href="<?php echo U('Index/Index/logout');?>">Logout</a>
                    </li>
                <?php else: ?>
                    <li>
                        <a class="btn" href="<?php echo U('Index/Login/index');?>">Login</a>
                    </li>
                    <li>
                        <a class="btn" href="<?php echo U('Index/Reg/index');?>">Register</a>
                    </li><?php endif; ?>

            </ul>
        </div>
        <!--/.nav-collapse --> </div>
</div>
<!-- /.navbar -->

<header id="head" class="secondary"></header>

<!-- container -->
<div class="container">

    <ol class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li class="active">User access</li>
    </ol>

    <div class="row">

        <!-- Article main content -->
        <article class="col-xs-12 maincontent">
            <header class="page-header">
                <h1 class="page-title">Login</h1>
            </header>

            <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3 class="thin text-center">Login to your account</h3>
                        <p class="text-center text-muted">If don't have a account, <a href="<?php echo U('Index/Reg/index');?>">Register</a> here than you can enjoy a nice search. </p>
                        <hr>

                        <form action="<?php echo U('Index/Login/login');?>" method="post" id="regform">
                            <div class="top-margin">
                                <label>Username<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="username" autocomplete="off">
                            </div>
                            <div class="top-margin">
                                <label>Password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" name="password" autocomplete="off">
                            </div>

                            <div class="row top-margin">
                                <div class="col-sm-6">
                                    <label>验证码 <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="code" autocomplete="off">
                                </div>
                                <div class="col-sm-6" style="margin-top: 9px;">
                                    <img src="<?php echo U('Index/Reg/verify');?>" alt="vcode" id="code">
                                    <a href="javascript:void(change_code(this));">看不清</a>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col-lg-8">
                                </div>
                                <div class="col-lg-4 text-right">
                                    <button class="btn btn-action" type="submit">Sign in</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </article>
        <!-- /Article -->

    </div>
</div>	<!-- /container -->

<footer id="footer" class="top-space">

    <div class="footer1">
        <div class="container">
            <div class="row">

                <div class="col-md-3 widget">
                    <h3 class="widget-title">Contact</h3>
                    <div class="widget-body">
                        <p>
                            +86 15124811872
                            <br>
                            <a href="mailto:#">fadeblack307@163.com</a>
                            <br>
                            <br>City ShenZhen, China</p>
                    </div>
                </div>

                <div class="col-md-3 widget">
                    <h3 class="widget-title">Follow me</h3>
                    <div class="widget-body">
                        <p class="follow-me-icons">
                            <a href="http://blog.csdn.net/atvance016" target="_blank"> <i class="fa fa-twitter fa-2"></i>
                            </a>
                            <a href="https://github.com/JigsawYang" target="_blank">
                                <i class="fa fa-github fa-2"></i>
                            </a>
                            <a href="http://git.oschina.net/jigsaw" target="_blank">
                                <i class="fa fa-facebook fa-2"></i>
                            </a>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 widget">
                    <h3 class="widget-title">Technology covers</h3>
                    <div class="widget-body">
                        <p>
                            Thinkphp AJAX jQuery Memcache Mysql cUrl Bootstrap3 Session Chart.js
                        </p>
                    </div>
                </div>

            </div>
            <!-- /row of widgets --> </div>
    </div>

    <div class="footer2">
        <div class="container">
            <div class="row">

                <div class="col-md-6 widget">
                    <div class="widget-body">
                        <p class="simplenav">
                            <a href="#">Home</a>
                            |
                            <a href="about.html">About Me</a>
                            | <b><a href="<?php echo U('Index/Login/index');?>">Login</a></b>
                            | <b><a href="<?php echo U('Index/Reg/index');?>">Register</a></b>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 widget">
                    <div class="widget-body">
                        <p class="text-right">
                            Copyright &copy; 2014, Chris Yang. Designed by
                            <a href="http://v3.bootcss.com/" rel="designer">Bootstrap3</a>
                        </p>
                    </div>
                </div>

            </div>
            <!-- /row of widgets --> </div>
    </div>

</footer>

<script type="text/javascript">
    var URL = "<?php echo U('Index/Reg/verify');?>";
    var tabURL = "<?php echo U('Index/Show/index');?>";
</script>
<script src="__PUBLIC__/js/jquery-1.11.1.js"></script>
<script src="__PUBLIC__/js/headroom.min.js"></script>
<script src="__PUBLIC__/js/jQuery.headroom.min.js"></script>
<script src="__PUBLIC__/js/template.js"></script>
<script src="__PUBLIC__/js/bootstrap.min.js"></script>
<script src="__PUBLIC__/js/login.js"></script>
<script src="__PUBLIC__/js/jquery.validate.min.js"></script>
<script src="__PUBLIC__/js/validate.js"></script>
<script src="__PUBLIC__/js/message.js"></script>
<script src="__PUBLIC__/js/cate.js"></script>

</body>
</html>