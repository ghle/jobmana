<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:77:"E:\phpstudy\WWW\jobmana\public/../application/admin\view\advertise\index.html";i:1533822142;s:75:"E:\phpstudy\WWW\jobmana\public/../application/admin\view\template\base.html";i:1533694440;s:86:"E:\phpstudy\WWW\jobmana\public/../application/admin\view\template\javascript_vars.html";i:1533694438;s:76:"E:\phpstudy\WWW\jobmana\public/../application/admin\view\advertise\form.html";i:1533723590;s:74:"E:\phpstudy\WWW\jobmana\public/../application/admin\view\advertise\th.html";i:1533818446;s:74:"E:\phpstudy\WWW\jobmana\public/../application/admin\view\advertise\td.html";i:1533822080;}*/ ?>
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
    
    <div class="cl pd-5 bg-1 bk-gray">
        <span class="l">
            <?php if (\Rbac::AccessCheck('add')) : ?><a class="btn btn-primary radius mr-5" href="javascript:;" onclick="layer_open('添加','<?php echo \think\Url::build('add', []); ?>')"><i class="Hui-iconfont">&#xe600;</i> 添加</a><?php endif; if (\Rbac::AccessCheck('forbid')) : ?><a href="javascript:;" onclick="forbid_all('<?php echo \think\Url::build('forbid', []); ?>')" class="btn btn-warning radius mr-5"><i class="Hui-iconfont">&#xe631;</i> 禁用</a><?php endif; if (\Rbac::AccessCheck('resume')) : ?><a href="javascript:;" onclick="resume_all('<?php echo \think\Url::build('resume', []); ?>')" class="btn btn-success radius mr-5"><i class="Hui-iconfont">&#xe615;</i> 恢复</a><?php endif; if (\Rbac::AccessCheck('delete')) : ?><a href="javascript:;" onclick="del_all('<?php echo \think\Url::build('delete', []); ?>')" class="btn btn-danger radius mr-5"><i class="Hui-iconfont">&#xe6e2;</i> 删除</a><?php endif; if (\Rbac::AccessCheck('recyclebin')) : ?><a href="javascript:;" onclick="open_window('回收站','<?php echo \think\Url::build('recyclebin', []); ?>')" class="btn btn-secondary radius mr-5"><i class="Hui-iconfont">&#xe6b9;</i> 回收站</a><?php endif; ?>
        </span>
        <span class="r pt-5 pr-5">
            共有数据 ：<strong><?php echo isset($count) ? $count :  '0'; ?></strong> 条
        </span>
    </div>
    <table class="table table-border table-bordered table-hover table-bg mt-20">
        <thead>
        <tr class="text-c">
            <th width="25"><input type="checkbox"></th>
<th width="">招聘编号</th>
<th width="">职位名称</th>
<th width="">薪资待遇</th>
<th width="">发布日期</th>
<th width="">工作地点</th>
<!-- <th width="">工作性质</th>
<th width="">工作经验</th>
<th width="">学历要求</th>
<th width="">招聘人数</th>
<th width="">职位类别</th>
<th width="">岗位职责</th>
<th width="">职位月薪</th>-->
<th width="">是否招聘完成</th>
<th width="">是否发布</th>
<th width="">是否审核通过</th> 
<th>信息发布公司</th>
            <th width="70">操作</th>
        </tr>
        </thead>
        <tbody>
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <tr class="text-c"> 
         <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vio): $mod = ($i % 2 );++$i;?> 
            
<td><input type="checkbox" name="id[]" value="<?php echo $vo['id']; ?>"></td>
<td><?php echo $vo['advcode']; ?></td>
<td><?php echo $vo['advname']; ?></td>
<td><?php echo $vo['advtreatment']; ?></td>
<td><?php echo $vo['advpublish']; ?></td>
<td><?php echo $vo['advaddress']; ?></td>
<!-- <td><?php echo $vo['advnature']; ?></td>
<td><?php echo $vo['advexperience']; ?></td>
<td><?php echo $vo['adveducation']; ?></td>
<td><?php echo $vo['advpeoplenum']; ?></td>
<td><?php echo $vo['advcategory']; ?></td>
<td><?php echo $vo['advduty']; ?></td>
<td><?php echo $vo['advsalary']; ?></td>-->
<td>
	<?php if($vo['advfinnish'] ==0): ?>未审核<?php endif; if($vo['advfinnish'] ==1): ?>是<?php endif; if($vo['advfinnish'] ==2): ?>否<?php endif; ?>
</td>
<td>
	<?php if($vo['advtfpublish'] ==0): ?>未审核<?php endif; if($vo['advtfpublish'] ==1): ?>是<?php endif; if($vo['advtfpublish'] ==2): ?>否<?php endif; ?>
</td>
<td>
	<?php if($vo['advexamine'] ==0): ?>未审核<?php endif; if($vo['advexamine'] ==1): ?>是<?php endif; if($vo['advexamine'] ==2): ?>否<?php endif; ?>
</td> 

<td>


	<?php if($vo['comid'] == $vio['id']): ?><?php echo $vio['comname']; endif; ?>
	

</td>

          
                <?php if($vio['comtfpass'] == 1): ?>
                    <td class="f-14">
                        <?php if (\Rbac::AccessCheck('detail', 'Advertise', 'admin')) : ?>
                            <a href="javascript:;" class="label label-success radius" onclick="layer_open('详情','<?php echo \think\Url::build('detail', ['id'=>$vo['id']]); ?>')">详情</a>
                        <?php endif; ?>
                        <?php echo show_status($vo['status'],$vo['id']); if (\Rbac::AccessCheck('edit')) : ?> <a title="编辑" href="javascript:;" onclick="layer_open('编辑','<?php echo \think\Url::build('edit', ['id' => $vo["id"], ]); ?>')" style="text-decoration:none" class="ml-5"><i class="Hui-iconfont">&#xe6df;</i></a><?php endif; if (\Rbac::AccessCheck('delete')) : ?> <a title="删除" href="javascript:;" onclick="del(this,'<?php echo $vo['id']; ?>','<?php echo \think\Url::build('delete', []); ?>')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a><?php endif; ?>
                    </td>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <div class="page-bootstrap"><?php echo isset($page) ? $page :  ''; ?></div>
</div>

<script type="text/javascript" src="__LIB__/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="__LIB__/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui/js/H-ui.js"></script>
<script type="text/javascript" src="__STATIC__/h-ui.admin/js/H-ui.admin.js"></script>
<script type="text/javascript" src="__STATIC__/js/app.js"></script>
<script type="text/javascript" src="__LIB__/icheck/jquery.icheck.min.js"></script>

</body>
</html>