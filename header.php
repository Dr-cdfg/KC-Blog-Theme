<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<!DOCTYPE HTML>

<html class="no-js">

<head>

<link

  rel="stylesheet"

  href="https://cdn.jsdelivr.net/npm/mdui@1.0.0/dist/css/mdui.min.css"

  integrity="sha384-2PJ2u4NYg6jCNNpv3i1hK9AoAqODy6CdiC+gYiL2DVx+ku5wzJMFNdE3RoWfBIRP"

  crossorigin="anonymous"

/>

<meta http-equiv='content-language' content='zh-cn'>

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="msvalidate.01" content="26DA607EC0923F9F008EA69EB53AF444" />

<script data-ad-client="ca-pub-1513410622102569" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <meta charset="<?php $this->options->charset(); ?>">

    <meta name="renderer" content="webkit">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title><?php $this->archiveTitle(array(

            'category'  =>  _t('分类 %s 下的文章'),

            'search'    =>  _t('包含关键字 %s 的文章'),

            'tag'       =>  _t('标签 %s 下的文章'),

            'author'    =>  _t('%s 发布的文章')

        ), '', ' - '); ?><?php $this->options->title(); ?></title>



    <!-- 使用url函数转换相关路径 -->

    <link rel="stylesheet" href="//cdnjscn.b0.upaiyun.com/libs/normalize/2.1.3/normalize.min.css">

    <link rel="stylesheet" href="<?php $this->options->themeUrl('grid.css'); ?>">

    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">



    <!--[if lt IE 9]>

    <script src="//cdnjscn.b0.upaiyun.com/libs/html5shiv/r29/html5.min.js"></script>

    <script src="//cdnjscn.b0.upaiyun.com/libs/respond.js/1.3.0/respond.min.js"></script>

    <![endif]-->

    <!-- 深色模式切换js -->


    <?php $this->header(); ?>



</head>

<!-- body标签开始 -->

<body id="body" class="<?php $this->options->ColorTheme(); ?>
<?php if (!empty($this->options->sidebarBlock) && in_array('ShowAll', $this->options->sidebarBlock)): ?> mdui-drawer-body-left<?php endif; ?> mdui-appbar-with-toolbar mdui-theme-accent-<?php $this->options->AccentColor(); ?> mdui-theme-primary-<?php $this->options->PrimaryColor(); ?>">
<!-- body标签结束 -->



<!-- 工具栏开始 -->

 <div class="mdui-appbar mdui-appbar-fixed mdui-color-theme"> 

   <div class="mdui-toolbar mdui-color-theme">

<?php if (!empty($this->options->sidebarBlock) && in_array('ShowAll', $this->options->sidebarBlock)): ?>

    <a class="mdui-btn mdui-btn-icon" mdui-drawer="{target: '#left-drawer'}"><i class="mdui-icon material-icons">menu</i></a>

<?php endif; ?>

    <a style="font-weight: 400;" class="mdui-typo-title" href="<?php $this->options->siteUrl(); ?>" class="mdui-ripple"><?php $this->options->title() ?></a> 

    <div class="mdui-toolbar-spacer"></div>

<?php if($this->user->hasLogin()): ?>

  <a href="<?php $this->options->siteUrl(); ?>admin/write-post.php" mdui-tooltip="{content: '撰写新文章'}" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">mode_edit</i></a>

<?php else: ?>

<?php endif; ?>

    <?php if (!empty($this->options->DarkLight) && in_array('ShowDLB', $this->options->DarkLight)): ?>

         <span class="mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white" id="dark_toggle_btn" mdui-tooltip="{content: '切换颜色模式'}" onclick="toggleDark()"><i class="mdui-icon material-icons">brightness_6</i></span>

<?php endif; ?>

<a href="javascript:;" mdui-tooltip="{content: '其他页面'}" class="mdui-btn mdui-btn-icon" mdui-menu="{target: '#menu-1'}"><i class="mdui-icon material-icons">more_vert</i></a>

<ul class="mdui-menu" id="menu-1">

  <li class="mdui-menu-item">

    <a href="<?php $this->options->siteUrl(); ?>" class="mdui-ripple">首页</a>

  </li>
<?php $this->options->MoreItem(); ?>

  <li class="mdui-divider"></li>

  <li class="mdui-menu-item">

<?php if($this->user->hasLogin()): ?>

<a>欢迎，<?php $this->user->screenName(); ?></a>

  <li class="mdui-menu-item">

    <a href="<?php $this->options->siteUrl(); ?>admin">后台面板</a>

  </li>

<?php else: ?>

                                    <a href="<?php $this->options->adminUrl('login.php'); ?>">

                                      <?php _e( '登录'); ?></a>

<?php endif; ?>

  </li>

</ul>

</div>

</div>



<!-- 工具栏结束 -->



<!-- 侧边栏本质 -->

<?php if (!empty($this->options->sidebarBlock) && in_array('ShowAll', $this->options->sidebarBlock)): ?>

  <div class="mdui-drawer" id="left-drawer">

<?php $this->need('sidebar.php'); ?>

  </div>

<?php endif; ?>

<!-- 侧边栏结束 -->



   



<script

  src="https://cdn.jsdelivr.net/npm/mdui@1.0.0/dist/js/mdui.min.js"

  integrity="sha384-aB8rnkAu/GBsQ1q6dwTySnlrrbhqDwrDnpVHR2Wgm8pWLbwUnzDcIROX3VvCbaK+"

  crossorigin="anonymous"

></script>

<!--[if lt IE 8]>

    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 建议 <a href="http://google.cn/chrome">使用最新Chrome</a>，<a href="https://www.microsoft.com/zh-cn/edge">最新Edge</a>或<a href="http://www.firefox.com.cn/">使用最新火狐浏览器</a>'); ?>.</div>

<![endif]-->





<div id="body" class="mdui-typo">

    <div class="container">

        <div class="row">



    

    

