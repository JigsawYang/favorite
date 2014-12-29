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
        <li class="active">About Me</li>
    </ol>

    <div class="row">

        <!-- Sidebar -->
        <aside class="col-md-4 sidebar sidebar-left">
            <div class="row widget">
                <div class="col-xs-12">
                    <p><img src="__PUBLIC__/images/3.jpg" alt=""></p>
                </div>
            </div>
        </aside>
        <!-- /Sidebar -->

        <!-- Article main content -->
        <article class="col-md-6 maincontent">
            <header class="page-header">
                <h1 class="page-title">About Me</h1>
            </header>
            <h2 class='cv cv-h2'>简介</h2>
            <p class='cv cv-content'>2012年底接触IT行业, 从此爱上这个行业, 不断自学技术, 后兼职于上海某互联网公司. 现辞掉家乡工作,想完全投身于互联网行业
                坚持自己的路, 希望未来会更精彩.
            </p>
            <h2 class="cv cv-h2">我的信息</h2>
            <div class="col-md-4">
                <h3 class="cv-h3">姓名:</h3>
                <h3 class="cv-h3">生日:</h3>
                <h3 class="cv-h3">电话:</h3>
                <h3 class="cv-h3">Email:</h3>
            </div>
            <div class="col-md-8">
                <p class="cv cv-content">杨瑞</p>
                <p class="cv cv-content">1986-12-17</p>
                <p class="cv cv-content">15124811872</p>
                <a class="cv cv-content" href="mailto:#">fadeblack307@163.com</a>
            </div>
            <div class="clearfix"></div>
            <h2 class="cv cv-h2">教育经历</h2>
            <div class="col-md-4">
                <h3 class="cv cv-h3">毕业院校:</h3>
                <h3 class="cv cv-h3">毕业日期:</h3>
            </div>
            <div class="col-md-8">
                <p class="cv cv-content">安徽建筑大学</p>
                <p class="cv cv-content">2009</p>
            </div>
        </article>

        <!-- /Article -->

    </div>
    <hr>
    <div class="row">
        <h2 class="cv cv-h2">工作经历</h2>
        <div class="col-md-12">
            <h3 class="cv cv-h3">北京新东方集团&nbsp;&nbsp;&nbsp;2010-2012</h3>
            <p class="cv cv-content">负责美国院校的系统更新</p>
            <h3 class="cv cv-h3">上海某互联网公司(兼职)&nbsp;&nbsp;&nbsp;2014-至今</h3>
            <p class="cv cv-content">公司后台管理系统的协助开发</p>
        </div>

    </div>

    <hr>
    <div class="row">
        <h2 class="cv cv-h2">项目经历</h2>
        <div class="col-md-12">
            <h3 class="cv cv-h3">后台管理系统</h3>
            <p class="cv cv-content">独自开发公司后台管理的用户和图表模块, 一些AJAX处理. 所用的一些技术, Thinkphp, php, js&jquery, html&css,
            利用正则写一些数据的格式化处理</p>
        </div>

    </div>
    <hr>

    <h2 class="cv cv-h2">技术技能</h2>
    <div class="templatemo-charts">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="row templatemo-chart-row">

                    <div class="templatemo-chart-box col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <canvas id="templatemo-pie-chart"></canvas>
                        <h4>HTML &amp; CSS &amp; Bootstrap</h4>
                        <span class="text-muted">技术水平</span>
                    </div>

                    <div class="templatemo-chart-box col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <canvas id="doughnut-js"></canvas>
                        <h4>JavaScript &amp; jQuery</h4>
                        <span class="text-muted">技术水平</span>
                    </div>

                    <div class="templatemo-chart-box col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <canvas id="templatemo-doughnut-chart"></canvas>
                        <h4>PHP &amp; ThinkPHP</h4>
                        <span class="text-muted">技术水平</span>
                    </div>

                    <div class="templatemo-chart-box col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <canvas id="doughnut-tk"></canvas>
                        <h4>Linux &amp; C &amp; Standard Lib</h4>
                        <span class="text-muted">技术水平</span>
                    </div>



                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="row templatemo-chart-row">

                    <div class="templatemo-chart-box col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <canvas id="pie-chart"></canvas>
                        <h4>Python &amp; Django &amp; Flask</h4>
                        <span class="text-muted">技术水平</span>
                    </div>

                    <div class="templatemo-chart-box col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <canvas id="doughnut-node"></canvas>
                        <h4>Node.js &amp; Express</h4>
                        <span class="text-muted">技术水平</span>
                    </div>

                    <div class="templatemo-chart-box col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <canvas id="radar-chart"></canvas>
                        <h4>工具</h4>
                        <span class="text-muted">熟悉程度</span>
                    </div>

                    <div class="templatemo-chart-box col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        <canvas id="polar-chart"></canvas>
                        <h4>爱好</h4>
                        <span class="text-muted">程度</span>
                    </div>

                </div>
            </div>
        </div>


    </div>

</div>  <!-- /container -->

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


<script src="__PUBLIC__/js/jquery-1.11.1.js"></script>
<script src="__PUBLIC__/js/headroom.min.js"></script>
<script src="__PUBLIC__/js/jQuery.headroom.min.js"></script>

<script src="__PUBLIC__/js/bootstrap.min.js"></script>
<script src="__PUBLIC__/js/Chart.min.js"></script>
<script src="__PUBLIC__/js/template.js"></script>
<script src="__PUBLIC__/js/mychart.js"></script>

</body>
</html>