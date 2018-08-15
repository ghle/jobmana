<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"E:\phpstudy\WWW\jobmana\public/../application/admin\view\advertise\detail.html";i:1533797458;s:75:"E:\phpstudy\WWW\jobmana\public/../application/admin\view\template\base.html";i:1533694440;s:86:"E:\phpstudy\WWW\jobmana\public/../application/admin\view\template\javascript_vars.html";i:1533694438;}*/ ?>
﻿<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <title><?php echo \think\Config::get('site.title'); ?></title>
    <link rel="Bookmark" href="__ROOT__/favicon.ico" >
    <link rel="Shortcut Icon" href="__ROOT__/favicon.ico" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="__LIB__/html5.js"></script>
    <script type="text/javascript" src="__LIB__/respond.min.js"></script>
    <script type="text/javascript" src="__LIB__/PIE_IE678.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="__STATIC__/h-ui/css/H-ui.min.css"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/h-ui.admin/css/H-ui.admin.css"/>
    <link rel="stylesheet" type="text/css" href="__LIB__/Hui-iconfont/1.0.7/iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="__LIB__/icheck/icheck.css"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/h-ui.admin/skin/default/skin.css" id="skin"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/h-ui.admin/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="__STATIC__/css/app.css"/>
    <link rel="stylesheet" type="text/css" href="__LIB__/icheck/icheck.css"/>
    
    <!--[if IE 6]>
    <script type="text/javascript" src="__LIB__/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <!--定义JavaScript常量-->
<script>
    window.THINK_ROOT = '<?php echo \think\Request::instance()->root(); ?>';
    window.THINK_MODULE = '<?php echo \think\Url::build("/" . \think\Request::instance()->module(), "", false); ?>';
    window.THINK_CONTROLLER = '<?php echo \think\Url::build("___", "", false); ?>'.replace('/___', '');
</script>
</head>
<body>

<nav class="breadcrumb">
    <div id="nav-title"></div>
    <a class="btn btn-success radius r btn-refresh" style="line-height:1.6em;margin-top:3px" href="javascript:;" title="刷新"><i class="Hui-iconfont"></i></a>
</nav>


<div class="page-container">
    <div class="form form-horizontal">
 <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">招聘编号：</label>
            <div class="formControls col-xs-6 col-sm-6">
               <?php echo $vo['advcode']; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">职位名称：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <?php echo $vo['advname']; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">薪资待遇：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <?php echo $vo['advtreatment']; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">发布日期：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <?php echo $vo['advpublish']; ?>

            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">工作地点：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <?php echo $vo['advaddress']; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>

        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">工作性质：</label>
            <div class="formControls col-xs-6 col-sm-6 skin-minimal">
                <?php if($vo['advnature']==1): ?>全职
                <?php else: ?>兼职
                <?php endif; ?>   
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">工作经验：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <?php echo $vo['advexperience']; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">学历要求：</label>
            <div class="formControls col-xs-6 col-sm-6">
                  <?php switch($vo['adveducation']): case "0": ?>高中<?php break; case "1": ?>专科<?php break; case "2": ?>本科<?php break; case "3": ?>研究生<?php break; case "4": ?>不限<?php break; endswitch; ?>
               
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">招聘人数：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <?php echo $vo['advpeoplenum']; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">职位类别：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <?php echo $vo['advcategory']; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">岗位职责：</label>
            <div class="formControls col-xs-6 col-sm-6">
              <!--   <textarea class="textarea" placeholder="" name="advduty" onKeyUp="textarealength(this, 100)"><?php echo isset($vo['advduty']) ? $vo['advduty'] :  ''; ?></textarea>
                <p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
                 -->
                 <?php echo $vo['advduty']; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">职位月薪：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <?php echo $vo['advsalary']; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">是否招聘完成：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <?php echo $vo['advfinnish']; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">是否发布：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <?php echo $vo['advtfpublish']; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">是否审核通过：</label>
            <div class="formControls col-xs-6 col-sm-6">
               <?php echo $vo['advexamine']; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>

    </div>
</div>

<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/js/app.js"></script>
<script type="text/javascript" src="__LIB__/icheck/jquery.icheck.min.js"></script>

</body>
</html>