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
  'controller' => 'Children',
  'title' => '',
  'form' => 
  array (
    0 => 
    array (
      'title' => '姓名',
      'name' => 'name',
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
    2 => 
    array (
      'name' => 'name',
      'type' => 'varchar(255)',
      'default' => 'NULL',
      'comment' => '姓名',
      'extra' => '',
    ),
  ),
  'model' => '1',
);
