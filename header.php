<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle([
            'category' => _t('分类 %s 下的文章'),
            'search'   => _t('包含关键字 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ], '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/css/main.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('/css/normalize.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lxgw-wenkai-webfont@1.1.0/style.css" />

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
    <div class="main">
        <div class="container">
            <header id="header">
                <div class="site-info">
                  <a href="<?php $this->options->siteUrl(); ?>">
                    <img src="<?php $this->options->logoUrl(); ?>" width="60" height="60" alt="<?php $this->options->title() ?>"/>
                  </a>
                  <div class="desciption">
                      <a href="<?php $this->options->siteUrl(); ?>"><div class="title"><?php $this->options->title(); ?></div></a>
                      <div class="motto"><?php $this->options->motto(); ?></div>
                  </div>
                </div>

                <div class="navbar">
                    <ul class="menu_ul">
                        <li class="menu_li"><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
                        <?php $this->widget('Widget_Contents_Page_List')->parse('<li class="menu_li"><a href="{permalink}">{title}</a></li>'); ?>
                    </ul>
                </div>

            </header>