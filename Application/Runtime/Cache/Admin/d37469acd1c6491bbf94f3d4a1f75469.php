<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>添加分类</title>

    <!-- Bootstrap core CSS -->
    <link href="/Application/Admin/View//Public/static/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="/Application/Admin/View//Public/static/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="/Application/Admin/View//Public/static/font-awesome/css/font-awesome.min.css">
</head>

<body>

<div id="wrapper">

    <!-- Sidebar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo U('index/index');?>">管理后台</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">

            <ul class="nav navbar-nav side-nav">
    <li><a href="<?php echo U('index/index');?>"><i class="fa fa-dashboard"></i> 仪表盘</a></li>
    <li class="dropdown">
        <a href="<?php echo U('category/index');?>"><i class="fa fa-reorder"></i> 分类管理</a>
    </li>
    <li class="dropdown">
        <a href="<?php echo U('post/index');?>"><i class="fa fa-edit"></i> 文章管理</a>
    </li>
    <li class="dropdown">
        <a href="<?php echo U('page/index');?>"><i class="fa fa-file-text-o"></i> 单页管理 </a>
    </li>
    <li class="dropdown">
        <a href="<?php echo U('member/index');?>"><i class="fa fa-users"></i> 用户管理</a>  
    </li>
     <li class="dropdown">
        <a href="<?php echo U('links/index');?>"><i class="fa fa-link"></i> 链接管理</a>
    </li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i> 系统设置 <b class="caret"></b></a>
        <ul class="dropdown-menu">
            <li><a href="<?php echo U('setting/index');?>">自定义字段</a></li>
            <li><a href="#">系统优化</a></li>
            <li><a href="#">缓存管理</a></li>
        </ul>
    </li>
</ul>

            <ul class="nav navbar-nav navbar-right navbar-user">

                <li class="dropdown user-dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> 你好,<?php echo session('username');?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="fa fa-gear"></i> 设置</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo U('login/logout');?>"><i class="fa fa-power-off"></i> 退出</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
<div id="page-wrapper">
    <form method="post" action="<?php echo U('category/update');?>">
        <div class="form-group">
            <label for="aa">分类标题</label>
            <input type="text" name="title" class="form-control" id="aa" value="<?php echo ($model["title"]); ?>" placeholder="输入分类标题">
        </div>
        <div class="form-group">
            <label for="bb">父分类</label>
            <select name="pid" id="bb" class="form-control">
                <option value="">顶级分类</option>
                <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>" <?php if($model['pid'] == $v['id']) {echo 'selected="selected"' ;}?> ><?php echo ($v["html"]); ?> <?php echo ($v["title"]); ?></option><?php endforeach; endif; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="ee">分类别名</label>
            <input type="text" name="name" class="form-control" id="cc" value="<?php echo ($model["name"]); ?>" placeholder="输入分类别名,不能和其他分类别名重复">
        </div>
        <div class="form-group">
            <label for="dd">关键词</label>
            <input type="text" name="keywords" class="form-control" id="dd" value="<?php echo ($model["keywords"]); ?>" placeholder="请输入SEO关键词(选填)">
        </div>
        <div class="form-group">
            <label for="ee">描述信息</label>
            <textarea name="description" id="ee" cols="30" rows="10" class="form-control" placeholder="请输入分类描述(选填)"><?php echo ($model["description"]); ?></textarea>
        </div>
        <input type="hidden" name="id" value="<?php echo ($model["id"]); ?>">
        <button type="submit" class="btn btn-default">更新</button>
    </form>
</div>
<!-- JavaScript -->
<script src="/Application/Admin/View//Public/static/js/jquery-1.10.2.js"></script>
<script src="/Application/Admin/View//Public/static/js/bootstrap.js"></script>
<script src="/Application/Admin/View//Public/static/js/app.js"></script>

</body>
</html>