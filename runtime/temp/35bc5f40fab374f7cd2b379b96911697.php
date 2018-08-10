<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:76:"E:\phpstudy\WWW\jobmana\public/../application/admin\view\advertise\edit.html";i:1533825998;s:75:"E:\phpstudy\WWW\jobmana\public/../application/admin\view\template\base.html";i:1533694440;s:86:"E:\phpstudy\WWW\jobmana\public/../application/admin\view\template\javascript_vars.html";i:1533694438;}*/ ?>
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
                <label class="form-label col-xs-3 col-sm-3">公司名称：</label>
                <div class="formControls col-xs-6 col-sm-6">

                 <div class="select-box">
                     <?php if($vo == ''): ?>
                     <select name="comid"  class="select"> 
                             <option value="0" selected>请选择</option>
                            <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vos): $mod = ($i % 2 );++$i;?>
                                
                                <option value="<?php echo $vos['id']; ?>"><?php echo $vos['comname']; ?></option>
                               
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                     </select>
                      <?php endif; if($vo != ''): ?>
                          
                        <select name="comid"  class="select"> 
                             <option value="0" selected>请选择</option>
                            <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vos): $mod = ($i % 2 );++$i;if($vos['id'] == $vo['comid']): ?>
                                <option value="<?php echo $vos['id']; ?>" selected><?php echo $vos['comname']; ?></option>
                                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                          <?php endif; ?>
    
               </div>

                </div>
                <div class="col-xs-3 col-sm-3"></div>
            </div>

        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">招聘编号：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="招聘编号" name="advcode" value="<?php echo isset($vo['advcode']) ? $vo['advcode'] :  ''; ?>" >
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">职位名称：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="职位名称" name="advname" value="<?php echo isset($vo['advname']) ? $vo['advname'] :  ''; ?>" >
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">薪资待遇：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="薪资待遇" name="advtreatment" value="<?php echo isset($vo['advtreatment']) ? $vo['advtreatment'] :  ''; ?>" >
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">发布日期：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text Wdate" placeholder="发布日期" name="advpublish" value="<?php echo isset($vo['advpublish']) ? $vo['advpublish'] :  ''; ?>"  onfocus="WdatePicker({dateFmt:'yyyy-MM-dd'})"  >
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">工作地点：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="工作地点" name="advaddress" value="<?php echo isset($vo['advaddress']) ? $vo['advaddress'] :  ''; ?>" >
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">工作性质：</label>
            <div class="formControls col-xs-6 col-sm-6 skin-minimal">
                <div class="radio-box">
                    <input type="radio" name="advnature" id="advnature-" value="0" checked>
                    <label for="advnature-">全职</label>
                </div>
                <div class="radio-box">
                    <input type="radio" name="advnature" id="advnature-" value="1">
                    <label for="advnature-">兼职</label>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">工作经验：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="工作经验" name="advexperience" value="<?php echo isset($vo['advexperience']) ? $vo['advexperience'] :  ''; ?>" >
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">学历要求：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <div class="select-box">
                    <select name="adveducation" class="select">

                        <option value="0">高中</option>
                        <option value="1">专科</option>
                        <option value="2">本科</option>
                        <option value="3">研究生</option>
                        <option value="4">不限</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">招聘人数：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="number" class="input-text" placeholder="招聘人数" name="advpeoplenum" value="<?php echo isset($vo['advpeoplenum']) ? $vo['advpeoplenum'] :  ''; ?>" >
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">职位类别：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="职位类别" name="advcategory" value="<?php echo isset($vo['advcategory']) ? $vo['advcategory'] :  ''; ?>" >
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">岗位职责：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <textarea class="textarea" placeholder="" name="advduty" onKeyUp="textarealength(this, 100)"><?php echo isset($vo['advduty']) ? $vo['advduty'] :  ''; ?></textarea>
                <p class="textarea-numberbar"><em class="textarea-length">0</em>/100</p>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">职位月薪：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <input type="text" class="input-text" placeholder="职位月薪" name="advsalary" value="<?php echo isset($vo['advsalary']) ? $vo['advsalary'] :  ''; ?>" >
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        
      
        <?php if (\Rbac::AccessCheck('detail', 'Advertise', 'admin')) : ?>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">是否发布：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <!-- <input type="text" class="input-text" placeholder="是否发布" name="advtfpublish" value="<?php echo isset($vo['advtfpublish']) ? $vo['advtfpublish'] :  ''; ?>" > -->
                <select name="advtfpublish" class="select">
                         <option value="0">未审核</option>
                        <option value="1">是</option>
                        <option value="2">否</option>
                    </select>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>

          <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">是否招聘完成：</label>
            <div class="formControls col-xs-6 col-sm-6">
                <!-- <input type="text" class="input-text" placeholder="是否招聘完成" name="advfinnish" value="<?php echo isset($vo['advfinnish']) ? $vo['advfinnish'] :  ''; ?>" > -->
                 <select name="advfinnish" class="select">
                       <option value="0">未审核</option>
                        <option value="1">是</option>
                        <option value="2">否</option>
                    </select>
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-3 col-sm-3">是否审核通过：</label>
            <div class="formControls col-xs-6 col-sm-6">
                 <select name="advexamine" class="select">
                        <option value="0">未审核</option>
                        <option value="1">是</option>
                        <option value="2">否</option>
                    </select>
               
            </div>
            <div class="col-xs-3 col-sm-3"></div>
        </div>
         <?php endif; ?>
          

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
<script type="text/javascript" src="__LIB__/My97DatePicker/WdatePicker.js"></script>
<script>
    $(function () {
        $("[name='advnature'][value='<?php echo isset($vo['advnature']) ? $vo['advnature'] :  ''; ?>']").prop("checked", true);
        $("[name='adveducation']").find("[value='<?php echo isset($vo['adveducation']) ? $vo['adveducation'] :  ''; ?>']").attr("selected", true);

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