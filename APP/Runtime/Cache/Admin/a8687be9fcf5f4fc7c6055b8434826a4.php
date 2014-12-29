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
    <div class="templatemo-content">
        <ol class="breadcrumb">
            <li><a href="<?php echo U('Admin/Index/index');?>">Home</a></li>
            <li class="active">Admin info</li>
        </ol>
        <h1>Manage Admin Users</h1>

        <div class="row margin-bottom-30">
            <div class="col-md-12">
                <ul class="nav nav-pills">
                    <li class="active"><a href="#">管理员总数 <span class="badge"><?php echo ($count); ?></span></a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="btn-group pull-right" id="templatemo_sort_btn">
                    <button type="button" class="btn btn-default">Sort by</button>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">First Name</a></li>
                        <li><a href="#">Last Name</a></li>
                        <li><a href="#">Username</a></li>
                    </ul>
                </div>

                <div class="table-responsive">
                    <h4 class="margin-bottom-15">Admin Users</h4>
                    <table class="table table-striped table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Last Login IP</th>
                            <th>Last Login Time</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($aduser)): foreach($aduser as $key=>$v): ?><tr>
                                <td><?php echo ($v["id"]); ?></td>
                                <td><?php echo ($v["username"]); ?></td>
                                <td><?php echo ($v["loginip"]); ?></td>
                                <td><?php echo (date("Y-m-d", $v["logintime"])); ?></td>
                                <td><a href="<?php echo U('Admin/AdminUser/editUser', array('id' => $v['id']));?>" class="btn btn-default btn-primary">Edit</a></td>
                                <td><a href="<?php echo U('Admin/AdminUser/delete', array('id' => $v['id']));?>" class="btn btn-danger">Delete</a></td>
                            </tr><?php endforeach; endif; ?>
                        </tbody>
                    </table>
                </div>
               <?php echo ($page); ?>
            </div>
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