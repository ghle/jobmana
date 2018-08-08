<?php

return array (
  'module' => 'admin',
  'menu' => 
  array (
    0 => 'add',
    1 => 'forbid',
    2 => 'resume',
    3 => 'delete',
    4 => 'recyclebin',
    5 => 'saveorder',
  ),
  'create_config' => true,
  'controller' => 'Advertise',
  'title' => '',
  'form' => 
  array (
    0 => 
    array (
      'title' => '招聘编号',
      'name' => 'advcode',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    1 => 
    array (
      'title' => '职位名称',
      'name' => 'advname',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    2 => 
    array (
      'title' => '薪资待遇',
      'name' => 'advtreatment',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    3 => 
    array (
      'title' => '发布日期',
      'name' => 'advpublish',
      'type' => 'date',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    4 => 
    array (
      'title' => '工作地点',
      'name' => 'advaddress',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    5 => 
    array (
      'title' => '工作性质',
      'name' => 'advnature',
      'type' => 'radio',
      'option' => '全职#兼职',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    6 => 
    array (
      'title' => '工作经验',
      'name' => 'advexperience',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    7 => 
    array (
      'title' => '学历要求',
      'name' => 'adveducation',
      'type' => 'select',
      'option' => '高中#专科#本科#研究生#不限',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    8 => 
    array (
      'title' => '招聘人数',
      'name' => 'advpeoplenum',
      'type' => 'number',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    9 => 
    array (
      'title' => '职位类别',
      'name' => 'advcategory',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    10 => 
    array (
      'title' => '岗位职责',
      'name' => 'advduty',
      'type' => 'textarea',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    11 => 
    array (
      'title' => '职位月薪',
      'name' => 'advsalary',
      'type' => 'text',
      'option' => '',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    12 => 
    array (
      'title' => '是否招聘完成',
      'name' => 'advfinnish',
      'type' => 'text',
      'option' => '是#否',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    13 => 
    array (
      'title' => '是否发布',
      'name' => 'advtfpublish',
      'type' => 'text',
      'option' => '是#否',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
    14 => 
    array (
      'title' => '是否审核通过',
      'name' => 'advexamine',
      'type' => 'text',
      'option' => '是#否',
      'default' => '',
      'search_type' => 'text',
      'validate' => 
      array (
        'datatype' => '',
        'nullmsg' => '',
        'errormsg' => '',
      ),
    ),
  ),
  'create_table' => '1',
  'table_engine' => 'InnoDB',
  'table_name' => '',
  'field' => 
  array (
    1 => 
    array (
      'name' => 'advcode',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '招聘编号',
      'extra' => '',
    ),
    2 => 
    array (
      'name' => 'advname',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '职位名称',
      'extra' => '',
    ),
    3 => 
    array (
      'name' => 'advtreatment',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '薪资待遇',
      'extra' => '',
    ),
    4 => 
    array (
      'name' => 'advpublish',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '发布日期',
      'extra' => '',
    ),
    5 => 
    array (
      'name' => 'advaddress',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '工作地点',
      'extra' => '',
    ),
    6 => 
    array (
      'name' => 'advnature',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '工作性质',
      'extra' => '',
    ),
    7 => 
    array (
      'name' => 'advexperience',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '工作经验',
      'extra' => '',
    ),
    8 => 
    array (
      'name' => 'adveducation',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '学历要求',
      'extra' => '',
    ),
    9 => 
    array (
      'name' => 'advpeoplenum',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '招聘人数',
      'extra' => '',
    ),
    10 => 
    array (
      'name' => 'advcategory',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '职位类别',
      'extra' => '',
    ),
    11 => 
    array (
      'name' => 'advduty',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '岗位职责',
      'extra' => '',
    ),
    12 => 
    array (
      'name' => 'advsalary',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '职位月薪',
      'extra' => '',
    ),
    13 => 
    array (
      'name' => 'advfinnish',
      'type' => 'char(4)',
      'default' => 'NULL',
      'comment' => '是否招聘完成',
      'extra' => '',
    ),
    14 => 
    array (
      'name' => 'advtfpublish',
      'type' => 'char(4)',
      'default' => 'NULL',
      'comment' => '是否发布',
      'extra' => '',
    ),
    15 => 
    array (
      'name' => 'advexamine',
      'type' => 'char(4)',
      'default' => 'NULL',
      'comment' => '是否审核通过',
      'extra' => '',
    ),
  ),
);
