<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"D:\phpEnv\www\localhost\user\public/../application/admin\view\index\index.html";i:1573537785;}*/ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>会员核对系统</title>
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/static/css/font.css">
	<link rel="stylesheet" href="/static/css/xadmin.css">
	
    <script src="/static/js/jquery.min.js"></script>
    <script src="/static/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/static/js/xadmin.js"></script>

</head>
<body>
    <!-- 顶部开始 -->
    <div class="container">
        <div class="logo"><a href="index.html">会员核对系统</a></div>
        <div class="left_open">
            <i title="展开左侧栏" class="iconfont">&#xe699;</i>
        </div>

        <ul class="layui-nav right" lay-filter="">
          <li class="layui-nav-item">
            <a href="javascript:;"><?php echo \think\Session::get('username'); ?></a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
              <dd><a onClick="x_admin_show('个人信息','<?php echo url("admin/userinfo"); ?>')">个人信息</a></dd>
                <dd><a href="<?php echo url('login/logout'); ?>">切换账号</a></dd>
              <dd><a href="<?php echo url('login/logout'); ?>">退出</a></dd>
            </dl>
          </li>
          <li class="layui-nav-item to-index"><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
        </ul>
        
    </div>
    <!-- 顶部结束 -->
    <!-- 中部开始 -->
     <!-- 左侧菜单开始 -->
    <div class="left-nav">
      <div id="side-nav">
        <ul id="nav">

            <?php if($admin == '1'): ?>
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe726;</i>
                    <cite>管理员管理</cite>
                    <i class="iconfont nav_right">&#xe6a7;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="<?php echo url('admin/adminlist'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>管理员列表</cite>
                        </a>
                    </li >
                </ul>
            </li>
            <?php endif; ?>
            <li>
                <a href="javascript:;">
                    <i class="iconfont">&#xe6b8;</i>
                    <cite>用户管理</cite>
                    <i class="iconfont nav_right">&#xe6a7;</i>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a _href="<?php echo url('user/userlist'); ?>">
                            <i class="iconfont">&#xe6a7;</i>
                            <cite>会员列表</cite>

                        </a>
                    </li >
                    
                </ul>
            </li>             
           </ul>
      </div>
    </div>
    <!-- <div class="x-slide_left"></div> -->
    <!-- 左侧菜单结束 -->
    <!-- 右侧主体开始 -->
    <div class="page-content">
        <div class="layui-tab tab" lay-filter="xbs_tab" lay-allowclose="false">
          <ul class="layui-tab-title">
            <li class="home"><i class="layui-icon">&#xe68e;</i>我的桌面</li>
          </ul>
          <div class="layui-tab-content">
            <div class="layui-tab-item layui-show">
                <iframe src='<?php echo url("index/welcome"); ?>' frameborder="0" scrolling="yes" class="x-iframe"></iframe>
            </div>
          </div>
        </div>
    </div>
    <div class="page-content-bg"></div>
    <!-- 右侧主体结束 -->
    <!-- 中部结束 -->
    <!-- 底部开始 -->
    <!--<div class="footer">
        <div class="copyright">Copyright ©2019 L-admin v2.3 All Rights Reserved</div>  
    </div>-->
    <!-- 底部结束 -->
</body>
</html>