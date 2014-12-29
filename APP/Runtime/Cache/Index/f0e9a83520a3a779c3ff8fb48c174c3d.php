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
        <li><a href="<?php echo U('Index/Index/index');?>">Home</a></li>
        <li class="active">Webinfo</li>
    </ol>

    <div class="row">

        <!-- Article main content -->
        <article class="col-sm-8 maincontent">
            <header class="page-header">
                <h1 class="page-title">Show Web Info</h1>
            </header>
            <?php if(($info)): ?><h3><?php echo ($info[0]['title']); ?></h3>
                <p><img src="__PUBLIC__/images/mac.jpg" alt="" class="img-rounded pull-right" width="300" > <?php echo ($info[0]['content']); ?></p>
                <a class="btn btn-action btn-lg" role="button" href="<?php echo ($info[0]['address']); ?>" target="_blank">点进进入官网</a>
                <?php else: ?>
                <h3>对不起</h3>
                <p><img src="__PUBLIC__/images/mac.jpg" alt="" class="img-rounded pull-right" width="300" > 没有符合搜索条件的结果</p>
                <a class="btn btn-action btn-lg" role="button" href="<?php echo U('Index/Index/index');?>" target="_blank">点击返回</a><?php endif; ?>
        </article>
        <!-- /Article -->

        <!-- Sidebar -->
        <aside class="col-sm-4 sidebar sidebar-right">

            <div class="widget">
                <h4>相关链接</h4>
                <?php if(($sim_link)): ?><ul class="list-unstyled list-spaces">
                        <?php if(is_array($sim_link)): foreach($sim_link as $key=>$v): ?><li>
                                <a href="<?php echo ($v["address"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a><br>
                                <span class="small text-muted"><?php echo ($v["address"]); ?></span>
                                <span class="small text-muted"> &nbsp; &nbsp; &nbsp;点击次数 (<?php echo ($v["click"]); ?>)</span>
                            </li><?php endforeach; endif; ?>
                    </ul>
                    <?php else: endif; ?>
            </div>
            <hr/>
            <div class="widget">
                <h4>最热网站</h4>
                <ul class="list-unstyled list-spaces">
                    <?php if(is_array($hot)): foreach($hot as $key=>$v): ?><li>
                            <a href="<?php echo ($v["address"]); ?>" target="_blank"><?php echo ($v["title"]); ?></a><br>
                            <span class="small text-muted"><?php echo ($v["address"]); ?></span>
                            <span class="small text-muted"> &nbsp; &nbsp; &nbsp;点击次数 (<?php echo ($v["click"]); ?>)</span>
                        </li><?php endforeach; endif; ?>
                </ul>
            </div>

        </aside>
        <!-- /Sidebar -->

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