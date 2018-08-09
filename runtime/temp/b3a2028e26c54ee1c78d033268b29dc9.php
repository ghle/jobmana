<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:77:"E:\phpstudy\WWW\jobmana\public/../application/admin\view\companyman\edit.html";i:1533808952;s:75:"E:\phpstudy\WWW\jobmana\public/../application/admin\view\template\base.html";i:1533694440;s:86:"E:\phpstudy\WWW\jobmana\public/../application/admin\view\template\javascript_vars.html";i:1533694438;}*/ ?>
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
    <form class="form form-horizontal" id="form" method="post" action="<?php echo \think\Request::instance()->baseUrl(); ?>">
        <input type="hidden" name="id" value="<?php echo isset($vo['id']) ? $vo['id'] :  ''; ?>">
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">企业编号：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="企业编号" name="comcode" value="<?php echo isset($vo['comcode']) ? $vo['comcode'] :  ''; ?>" >
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">企业名称：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="企业名称" name="comname" value="<?php echo isset($vo['comname']) ? $vo['comname'] :  ''; ?>" >
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">地址：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="地址" name="comadress" value="<?php echo isset($vo['comadress']) ? $vo['comadress'] :  ''; ?>" >
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">联系人：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="联系人" name="compeople" value="<?php echo isset($vo['compeople']) ? $vo['compeople'] :  ''; ?>" >
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">联系电话：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="联系电话" name="comtelphone" value="<?php echo isset($vo['comtelphone']) ? $vo['comtelphone'] :  ''; ?>" >
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">企业简介：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="企业简介" name="comdesc" value="<?php echo isset($vo['comdesc']) ? $vo['comdesc'] :  ''; ?>" >
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">企业性质：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <div class="select-box">
                    <select name="comqua" class="select">
                        <option value="">请选择</option>
                        <option value="0">国营</option>
                        <option value="1">集体</option>
                        <option value="2">私营</option>
                        <option value="3">外资</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">所属行业：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="所属行业" name="comcategory" value="<?php echo isset($vo['comcategory']) ? $vo['comcategory'] :  ''; ?>" >
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">企业规模：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="企业规模" name="comscale" value="<?php echo isset($vo['comscale']) ? $vo['comscale'] :  ''; ?>" >
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">营业执照：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="营业执照" name="comlicense" value="<?php echo isset($vo['comlicense']) ? $vo['comlicense'] :  ''; ?>" >
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">税务登记证：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="税务登记证" name="comtaxreg" value="<?php echo isset($vo['comtaxreg']) ? $vo['comtaxreg'] :  ''; ?>" >
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">机构代码：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="机构代码" name="commecode" value="<?php echo isset($vo['commecode']) ? $vo['commecode'] :  ''; ?>" >
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">公司主页：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="公司主页" name="comhome" value="<?php echo isset($vo['comhome']) ? $vo['comhome'] :  ''; ?>" >
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
       
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">就业专员：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="就业专员" name="commissioner" value="<?php echo isset($vo['commissioner']) ? $vo['commissioner'] :  ''; ?>" >
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">企业logo：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="企业logo" name="comlogo" value="<?php echo isset($vo['comlogo']) ? $vo['comlogo'] :  ''; ?>" >
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">企业照片：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="企业照片" name="comthumb" value="<?php echo isset($vo['comthumb']) ? $vo['comthumb'] :  ''; ?>" >
                
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <?php if (\Rbac::AccessCheck('detail', 'Companyman', 'admin')) : ?>
         <div class="row cl">

            <label class="form-label col-xs-3 col-sm-3">是否审核通过：</label>
            <div class="formControls col-xs-6 col-sm-6">
               
                <div class="select-box">
                    <select name="comtfpass" class="select">
                        <option value="0">未审核</option>
                        
                        <option value="1">是</option>
                        <option value="2">否</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">是否展示照片：</label>
            <div class="formControls col-xs-6 col-sm-6">
              
                 <div class="select-box">
                  
                    <select name="comtfthumb" class="select">
                        <option value="0">未审核</option>
                        
                        <option value="1">是</option>
                        <option value="2">否</option>
                    </select>

                </div>
               
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">是否优秀企业：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <div class="select-box">
                    <select name="comtfexcellent" class="select">
                        <option value="0">未审核</option>
                        <option value="1">是</option>
                        <option value="2">否</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
         <?php endif; ?>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">登录用户编号：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="登录用户编号" name="loginid" value="<?php echo isset($vo['loginid']) ? $vo['loginid'] :  ''; ?>" >
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>

        <div class="row cl">
            <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-3">
                <button type="submit" class="btn btn-primary radius">&nbsp;&nbsp;提交&nbsp;&nbsp;</button>
                <button type="button" class="btn btn-default radius ml-20" onClick="layer_close();">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/js/app.js"></script>
<script type="text/javascript" src="__LIB__/icheck/jquery.icheck.min.js"></script>

<script type="text/javascript" src="__LIB__/Validform/5.3.2/Validform.min.js"></script>
<script>
    $(function () {
        $("[name='comqua']").find("[value='<?php echo isset($vo['comqua']) ? $vo['comqua'] :  '请选择'; ?>']").attr("selected", true);
        $("[name='comtfexcellent']").find("[value='<?php echo isset($vo['comtfexcellent']) ? $vo['comtfexcellent'] :  '请选择'; ?>']").attr("selected", true);

        $("[name='comtfpass']").find("[value='<?php echo isset($vo['comtfpass']) ? $vo['comtfpass'] :  '请选择'; ?>']").attr("selected", true);
        $("[name='comtfthumb']").find("[value='<?php echo isset($vo['comtfthumb']) ? $vo['comtfthumb'] :  '请选择'; ?>']").attr("selected", true);

        $('.skin-minimal input').iCheck({
            checkboxClass: 'icheckbox-blue',
            radioClass: 'iradio-blue',
            increaseArea: '20%'
        });

        $("#form").Validform({
            tiptype: 2,
            ajaxPost: true,
            showAllError: true,
            callback: function (ret){
                ajax_progress(ret);
            }
        });
    })
</script>

</body>
</html>