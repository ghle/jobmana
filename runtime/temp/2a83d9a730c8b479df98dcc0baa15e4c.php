<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"E:\phpstudy\WWW\jobmana\public/../application/admin\view\companyman\detail.html";i:1533870594;s:75:"E:\phpstudy\WWW\jobmana\public/../application/admin\view\template\base.html";i:1533694440;s:86:"E:\phpstudy\WWW\jobmana\public/../application/admin\view\template\javascript_vars.html";i:1533694438;}*/ ?>
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
                <label class="form-label col-xs-3 col-sm-3">企业编号：</label>
                <div class="formControls col-xs-6 col-sm-6">
                    <?php echo $vo['comcode']; ?>
                </div>
                <div class="col-xs-3 col-sm-3"></div>
            </div>

            <div class="row cl">
                <label class="form-label col-xs-3 col-sm-3">企业名称：</label>
                <div class="formControls col-xs-6 col-sm-6">
                    <?php echo $vo['comname']; ?>
                </div>
                <div class="col-xs-3 col-sm-3"></div>
            </div>

            <div class="row cl">
                <label class="form-label col-xs-3 col-sm-3">联系地址：</label>
                <div class="formControls col-xs-6 col-sm-6">
                    <?php echo $vo['comadress']; ?>
                </div>
                <div class="col-xs-3 col-sm-3"></div>
            </div>

            <div class="row cl">
                <label class="form-label col-xs-3 col-sm-3">联系方式：</label>
                <div class="formControls col-xs-6 col-sm-6">
                    <?php echo $vo['comtelphone']; ?>
                </div>
                <div class="col-xs-3 col-sm-3"></div>
            </div>

        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">联系人：</label>
            <div class="formControls col-xs-6 col-sm-6">
               <?php echo $vo['compeople']; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">企业简介：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <?php echo $vo['comdesc']; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>


        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">企业性质：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <?php switch($vo['comqua']): case "0": ?>国营<?php break; case "1": ?>集体<?php break; case "2": ?>私营<?php break; case "3": ?>外资<?php break; endswitch; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">所属行业：</label>
            <div class="formControls col-xs-6 col-sm-6">
               <?php echo $vo['comcategory']; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">企业规模：</label>
            <div class="formControls col-xs-6 col-sm-6">
               <?php echo $vo['comscale']; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">营业执照：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <img src=" <?php echo $vo['comlicense']; ?> ">
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">税务登记证：</label>
            <div class="formControls col-xs-6 col-sm-6">
            <img src=" <?php echo $vo['comtaxreg']; ?> ">
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">机构代码：</label>
            <div class="formControls col-xs-6 col-sm-6">
           <?php echo $vo['commecode']; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">公司主页：</label>
            <div class="formControls col-xs-6 col-sm-6">
            <?php echo $vo['comhome']; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">是否审核通过：</label>
            <div class="formControls col-xs-6 col-sm-6">
              
                 <?php if($vo['comtfexcellent'] == 1): ?>是
                   <?php else: ?>
                   否
                   <?php endif; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">就业专员：</label>
            <div class="formControls col-xs-6 col-sm-6">
              <?php echo $vo['commissioner']; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">企业logo：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <img src="<?php echo $vo['comlogo']; ?>">
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">企业照片：</label>
            <div class="formControls col-xs-6 col-sm-6">
              <img src="<?php echo $vo['comthumb']; ?>">
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">是否展示照片：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <?php if($vo['comtfexcellent'] == 1): ?>是
                   <?php else: ?>
                   否
                <?php endif; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">是否优秀企业：</label>
            <div class="formControls col-xs-6 col-sm-6">
               
                   <?php if($vo['comtfexcellent'] == 1): ?>是
                   <?php else: ?>
                   否
                   <?php endif; ?>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">登录用户编号：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <?php echo $vo['loginid']; ?>
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