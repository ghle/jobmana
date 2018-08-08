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
  'controller' => 'Departman',
  'title' => '',
  'form' => 
  array (
    0 => 
    array (
      'title' => '班级编号',
      'name' => 'classnum',
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
      'title' => '班级名称',
      'name' => 'classname',
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
    5 => 
    array (
      'name' => 'classnum',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '班级编号',
      'extra' => '',
    ),
    6 => 
    array (
      'name' => 'classname',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '班级名称',
      'extra' => '',
    ),
  ),
);
