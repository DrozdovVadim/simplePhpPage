<?php
$arUrlRewrite=array (
  0 => 
  array (
    'CONDITION' => '#^/news/category/(.*)#',
    'RULE' => 'category=$1',
    'PATH' => '/news/index.php',
    'SORT' => 10,
  ),
  1 => 
  array (
    'CONDITION' => '#^/news/(.*)#',
    'RULE' => 'ELEMENT_CODE=$1',
    'ID' => '',
    'PATH' => '/news/detail.php',
    'SORT' => 10,
  ),
);
