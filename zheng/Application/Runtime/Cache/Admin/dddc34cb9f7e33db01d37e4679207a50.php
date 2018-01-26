<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>郑州成功财经学院图书馆推荐系统</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/zheng/Application/Home/Public/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="http://localhost/zheng/Application/Home/Public/css/main.css"/>
    <script type="text/javascript" src="http://localhost/zheng/Application/Home/Public/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="/zheng/index.php/Admin/index/index">首页</a></li>
                <li><a href="http://www.chenggong.edu.cn/cg_tsg/" >成功学院图书馆首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="/zheng/index.php/Admin/admin/index">管理员</a></li>
                
                <li><a href="/zheng/index.php/Admin/Login/logout">退出登录</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
       <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                    <ul class="sub-menu">
                        <li><a href="/zheng/index.php/Admin/Index/index"><i class="icon-font">&#xe008;</i>学生推荐*</a></li>
                        <li><a href="/zheng/index.php/Admin/Teacher/index"><i class="icon-font">&#xe004;</i>管理员推荐*</a></li>
                        <li><a href="/zheng/index.php/Admin/Index/excel"><i class="icon-font">&#xe008;</i>excel导出*</a></li>
                        <!-- <li><a href="/zheng/index.php/Admin/tongji/tongji"><i class="icon-font">&#xe008;</i>统计*</a></li> -->
                        <!-- <li><a href="##"><i class="icon-font">&#xe004;</i>留言管理</a></li>
                        <li><a href="#"><i class="icon-font">&#xe012;</i>评论管理</a></li>
                        <li><a href="#"><i class="icon-font">&#xe033;</i>广告管理</a></li> -->
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                    <ul class="sub-menu">
                        <li><a href="/zheng/index.php/Admin/Admin/index"><i class="icon-font">&#xe017;</i>管理员信息</a></li>
                        <!-- <li><a href="#"><i class="icon-font">&#xe037;</i>清理缓存</a></li> -->
                        
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="/zheng/index.php/Admin/index/index">首页</a><span class="crumb-step">&gt;</span><span>新增链接</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="" method="post" id="myform" name="myform">
                <input type="hidden" id="id" name="id"  value="<?php echo ($cater["id"]); ?>" >
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red"></i>书名：</th>
                                <td>
                                    <input class="common-text required" id="name" name="name" size="50" value="<?php echo ($cater["name"]); ?>" type="text">*
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red"></i>书号：</th>
                                <td>
                                    <input class="common-text required" id="shuhao" name="shuhao" size="50" value="<?php echo ($cater["shuhao"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red"></i>作者：</th>
                                <td>
                                    <input class="common-text required" id="zuoze" name="zuoze" size="50" value="<?php echo ($cater["zuoze"]); ?>" type="text">*
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red"></i>出版社：</th>
                                <td>
                                    <input class="common-text required" id="chubanshe" name="chubanshe" size="50" value="<?php echo ($cater["chubanshe"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red"></i>荐书人：</th>
                                <td>
                                    <input class="common-text required" id="tuijianren" name="tuijianren" size="50" value="<?php echo ($cater["tuijianren"]); ?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red"></i>联系方式：</th>
                                <td>
                                    <input class="common-text required" id="tel" name="tel" size="50" value="<?php echo ($cater["tel"]); ?>" type="text">*
                                </td>
                            </tr>
                           
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>