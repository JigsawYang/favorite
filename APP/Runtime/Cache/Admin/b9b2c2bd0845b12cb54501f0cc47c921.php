<?php if (!defined('THINK_PATH')) exit();?><!--header-->
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title>Favorite Website 后台管理系统</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="__PUBLIC__/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="__PUBLIC__/css/templatemo_main.css">
</head>
<body>
<div class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <div class="logo"><h1>Favorite Website 后台管理系统</h1></div>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
</div>

<!--sidebar-->
<div class="template-page-wrapper">
    <div class="navbar-collapse collapse templatemo-sidebar">
        <ul class="templatemo-sidebar-menu">
            <li>
                <p class="p-center">欢迎, <?php echo ($name); ?></p>
            </li>
            <li class="active"><a href="<?php echo U('Admin/Index/index');?>"><i class="fa fa-home"></i>首页</a></li>
            <li class="sub">
                <a href="javascript:;">
                    <i class="fa fa-list-ol"></i> 网站管理
                    <div class="pull-right"><span class="caret"></span></div>
                </a>
                <ul class="templatemo-submenu">
                    <li><a href="<?php echo U('Admin/Webinfo/index');?>">网站列表</a></li>
                    <li><a href="<?php echo U('Admin/Webinfo/addWeb');?>">添加新网站</a></li>
                    <li><a href="<?php echo U('Admin/Webinfo/trash');?>">回收站</a></li>
                </ul>
            </li>
            <li><a href="<?php echo U('Admin/Chart/index');?>"><i class="fa fa-cubes"></i>点击率图表</a></li>
            <li class="sub">
                <a href="javascript:;">
                    <i class="fa fa-database"></i> 分类管理
                    <div class="pull-right"><span class="caret"></span></div>
                </a>
                <ul class="templatemo-submenu">
                    <li><a href="<?php echo U('Admin/Category/index');?>">分类列表</a></li>
                    <li><a href="<?php echo U('Admin/Category/addCate');?>">添加分类</a></li>
                </ul>
            </li>
            <li class="sub">
                <a href="javascript:;">
                    <i class="fa fa-users"></i> 用户管理
                    <div class="pull-right"><span class="caret"></span></div>
                </a>
                <ul class="templatemo-submenu">
                    <li><a href="<?php echo U('Admin/User/index');?>">用户列表</a></li>
                    <li><a href="<?php echo U('Admin/User/addUser');?>">添加用户</a></li>
                </ul>
            </li>
            <li class="sub">
                <a href="javascript:;">
                    <i class="fa fa-user"></i> 管理员
                    <div class="pull-right"><span class="caret"></span></div>
                </a>
                <ul class="templatemo-submenu">
                    <li><a href="<?php echo U('Admin/AdminUser/index');?>">管理员列表</a></li>
                    <li><a href="<?php echo U('Admin/AdminUser/addUser');?>">添加管理员</a></li>
                </ul>
            </li>
            <li><a href="javascript:;" data-toggle="modal" data-target="#confirmModal"><i class="fa fa-sign-out"></i>Sign
                Out</a></li>
        </ul>
    </div>
    <!--/.navbar-collapse -->

<!--main-->
<div class="templatemo-content-wrapper">
    <div class="templatemo-content" style="margin-bottom: 30px;">
        <ol class="breadcrumb">
            <li><a href="<?php echo U('Admin/Index/index');?>">Home</a></li>
            <li><a href="<?php echo U('Admin/Webinfo/index');?>">Web info</a></li>
            <li class="active">Add Web</li>
        </ol>
        <h1>Add Web Info</h1>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form action="<?php echo U('Admin/Webinfo/addWebHandle');?>" role="form" method="post" id="webform">
                    <div class="form-group">
                        <label for="cid">所属分类</label>
                        <select class="form-control" name="cid">
                            <option>请选择</option>
                            <?php if(($cate)): if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["html"]); echo ($v["name"]); ?></option><?php endforeach; endif; ?>
                                <?php else: ?>
                                <option>请先添加3级子分类</option><?php endif; ?>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">网站名字</label>
                        <input type="text" class="form-control" name="title" placeholder="网站名字" id="title" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="address">网址</label>
                        <input type="text" class="form-control" name="address" placeholder="网址">
                    </div>
                    <div class="form-group">
                        <label for="click">点击次数</label>
                        <input type="text" class="form-control" name="click" placeholder="点击次数" value="100">
                    </div>
                    <div class="form-group">
                        <label for="">网站介绍</label>
                        <textarea class="form-control" rows="8" name="content"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">添加</button>
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>


    </div>
</div>

<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Are you sure you want to sign out?</h4>
            </div>
            <div class="modal-footer">
                <a href="<?php echo U('Admin/Index/logout');?>" class="btn btn-primary">Yes</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>
<footer class="templatemo-footer">
    <div class="templatemo-copyright">
        <p>Copyright &copy; 2014 Favorite Website Write by Jigsaw Yang</p>
    </div>
</footer>
</div>

<script src="__PUBLIC__/js/jquery.min.js"></script>
<script src="__PUBLIC__/js/bootstrap.min.js"></script>
<script src="__PUBLIC__/js/Chart.min.js"></script>
<script src="__PUBLIC__/js/templatemo_script.js"></script>
<script src="__PUBLIC__/js/jquery.validate.min.js"></script>
<script src="__PUBLIC__/js/validate.js"></script>
<script src="__PUBLIC__/js/message.js"></script>
<script src="__PUBLIC__/js/weather.js"></script>
<script type="text/javascript">
    var weatherUrl = "<?php echo U('Admin/Index/getWeather');?>";
    $('#myTab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });

</script>
</body>
</html>