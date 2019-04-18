<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="col-mb-12 col-4 kit-hidden-tb" id="secondary" role="complementary">
    <?php if (!empty($this->options->sidebarBlock)): ?>
    <!-- 获取今日必应壁纸 -->
    <?php $bing = bing(); ?>
    <section class="widget">
        <div class="info-header" style="background-image:url('<?php _e($this->options->siteUrl() . date('Ymd') . '.jpg'); ?>');">
            <span class="info-header-img">
                <a href="<?php $this->options->adminUrl(); ?>" target="_blank">
                    <img src="https://s.gravatar.com/avatar/7419accf4ff9b99a965177994df9e87b?s=80">
                </a>
            </span>
        </div>
        <div class="description">
            <?php $this->options->description() ?>
        </div>
        <div class="follow-me">
            <a href="https://github.com/WarnerYang" target="_blank">github</a>
            <a href="https://yanghuaqiang.com/" target="_blank">site</a>
            <a href="https://weibo.com/3880708094" target="_blank">weibo</a>
        </div>
    </section>
    <?php if (isset($this->options->plugins['activated']['Views'])): ?>
    <section class="widget">
        <h3 class="widget-title">
            <?php _e('热门文章'); ?>
        </h3>
        <ul class="widget-list">
            <?php Views_Plugin::theMostViewed(); ?>
        </ul>
    </section>
    <?php endif; ?>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
    <section class="widget">
        <h3 class="widget-title">
            <?php _e('最新文章'); ?>
        </h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Recent')
                ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
        </ul>
    </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentComments', $this->options->sidebarBlock)): ?>
    <section class="widget">
        <h3 class="widget-title">
            <?php _e('最近回复'); ?>
        </h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
            <?php while ($comments->next()): ?>
            <li><a href="<?php $comments->permalink(); ?>">
                    <?php $comments->author(false); ?>:
                    <?php $comments->excerpt(35, '...'); ?></a></li>
            <?php endwhile; ?>
        </ul>
    </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
    <section class="widget">
        <h3 class="widget-title">
            <?php _e('分类'); ?>
        </h3>
        <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list'); ?>
    </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>
    <section class="widget">
        <h3 class="widget-title">
            <?php _e('归档'); ?>
        </h3>
        <ul class="widget-list">
            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=Y年m月')
                ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
        </ul>
    </section>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowOther', $this->options->sidebarBlock)): ?>
    <section class="widget">
        <h3 class="widget-title">
            <?php _e('其它'); ?>
        </h3>
        <ul class="widget-list">
            <?php if ($this->user->hasLogin()): ?>
            <li class="last"><a href="<?php $this->options->adminUrl(); ?>">
                    <?php _e('进入后台'); ?> (
                    <?php $this->user->screenName(); ?>)</a></li>
            <li><a href="<?php $this->options->logoutUrl(); ?>">
                    <?php _e('退出'); ?></a></li>
            <?php else: ?>
            <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>">
                    <?php _e('登录'); ?></a></li>
            <?php endif; ?>
            <li><a href="<?php $this->options->feedUrl(); ?>">
                    <?php _e('文章 RSS'); ?></a></li>
            <li><a href="<?php $this->options->commentsFeedUrl(); ?>">
                    <?php _e('评论 RSS'); ?></a></li>
            <li><a href="http://www.typecho.org" target="_blank">Typecho</a></li>
        </ul>
    </section>
    <?php endif; ?>

</div><!-- end #sidebar --> 
