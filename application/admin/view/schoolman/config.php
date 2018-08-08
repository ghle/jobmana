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
  'controller' => 'Schoolman',
  'title' => '',
  'form' => 
  array (
    0 => 
    array (
      'title' => '学校编号',
      'name' => 'schoolnum',
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
      'title' => '学校名称',
      'name' => 'schoolname',
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
  ),
  'create_table' => '1',
  'table_engine' => 'InnoDB',
  'table_name' => '',
  'field' => 
  array (
    1 => 
    array (
      'name' => 'schoolnum',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '学校编号',
      'extra' => '',
    ),
    2 => 
    array (
      'name' => 'schoolname',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '学校名称',
      'extra' => '',
    ),
  ),
);
