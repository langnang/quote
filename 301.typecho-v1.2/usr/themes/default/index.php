<?php
if (!defined('__TYPECHO_ROOT_DIR__'))
  exit;

// 创建Widget实例
$widget = $this->widget('Widget_Contents_Post_Recent', 'type=post&order=rand');
$randomPost = $widget->getRandom();

var_dump($randomPost);
?>