<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="body">
    <div class="container">
        <div class="row">
            <div class="col-mb-12 col-12" id="main" role="main">
                <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
                    <h1 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
                    <ul class="post-meta">
                        <li>
                            <time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">
                                <?php $this->date('Y-m-d H:i'); ?>
                            </time>
                        </li>
                        <li><?php $this->category(','); ?></li>
                    </ul>
                    <div class="post-content" itemprop="articleBody">
                        <?php $this->content(); ?>
                    </div>
                    <p itemprop="keywords" class="tags"><?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></p>
                </article>
                <?php $this->need('comments.php'); ?>
                <ul class="post-near">
                    <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
                    <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
                </ul>
            </div><!-- end #main-->

            <?php $this->need('footer.php'); ?>
