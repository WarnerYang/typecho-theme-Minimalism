<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<!DOCTYPE HTML>

<html class="no-js">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">

    <meta name="renderer" content="webkit">

    <meta http-equiv="Cache-Control" content="no-siteapp">

    <meta http-equiv="widow-target" content="_top">

    <meta name="robots" content="index,follow">

    <meta name="format-detection" content="telephone=no">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="icon" href="/favicon.ico" type="image/x-icon" />

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />

    <title><?php $this->archiveTitle(array(

        'category'  =>  _t('分类 %s 下的文章'),

        'search'    =>  _t('包含关键字 %s 的文章'),

        'tag'       =>  _t('标签 %s 下的文章'),

        'author'    =>  _t('%s 发布的文章')

        ), '', ' - '); ?><?php $this->options->title(); ?></title>



        <!-- 使用url函数转换相关路径 -->

        <link rel="stylesheet" href="<?php $this->options->adminStaticUrl('css','normalize.css'); ?>">

        <link rel="stylesheet" href="<?php $this->options->adminStaticUrl('css','grid.css'); ?>">

        <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">



    <!--[if lt IE 9]>

    <script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>

    <script src="http://cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>

    <![endif]-->



    <!-- 通过自有函数输出HTML头部信息 -->

    <?php $this->header(); ?>

<script>

var _hmt = _hmt || [];

(function() {

  var hm = document.createElement("script");

  hm.src = "https://hm.baidu.com/hm.js?2f8706161dc76c7ae8878b67eac251b4";

  var s = document.getElementsByTagName("script")[0]; 

  s.parentNode.insertBefore(hm, s);

})();

</script>

</head>

<body>

<!--[if lt IE 8]>

    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>

    <![endif]-->



    <header id="header" class="clearfix <?php if($this->is('index')): ?><?php else: ?>header-bg<?php endif; ?>">

        <div class="container" id="nav">

            <div class="row">

                <div class="col-3">

                    <a id="logo" href="<?php $this->options->siteUrl(); ?>">

                        <?php if ($this->options->logoUrl): ?>

                            <img src="<?php $this->options->logoUrl() ?>"/>

                        <?php endif; ?>

                        <?php $this->options->title() ?>

                    </a>

                </div>

                <div id="menu" class="col-9">

                    <a<?php if($this->is('index')): ?> class="current"<?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>

                        <a<?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a>

                    <?php endwhile; ?>

                        <!-- <a href="javascript:;" id="search">搜索</a> -->

                    <?php if($this->user->hasLogin()): ?>

                        <a href="<?php $this->options->adminUrl('login.php'); ?>">后台</a>

                    <?php endif; ?>

                </div>                    

                <div class="search_box hide">

                    <form method="post" action="">

                        <input class="ipt" type="text" name="s"/ placeholder="输入你想搜索的内容">

                        <input class="btn" type="submit"> 

                    </form> 

                </div> 

                <div class="hamburger" id="hamburger-1">

                  <span class="line"></span>

                  <span class="line"></span>

                  <span class="line"></span>

              </div>

          </div><!-- end .row -->

      </div>

  </header><!-- end #header -->









