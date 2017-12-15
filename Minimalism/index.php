<?php
/**
 * 这是一款极简主义的主题，蓝白基调，优雅大方。
 * 
 * @package Typecho Minimalism Theme 
 * @author  Warner
 * @version beta
 * @link    http://yanghuaqiang.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="col-mb-12 col-8" id="main" role="main">
	<?php while($this->next()): ?>
        <article class="post shadow index" itemscope itemtype="http://schema.org/BlogPosting">
			<h2 class="post-title" itemprop="name headline">
				<a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->sticky();$this->title() ?></a>
			</h2>
            <div class="post-content" itemprop="articleBody">
    			<?php $this->excerpt(100,'...'); ?>
            </div>
            <ul class="post-meta">
				<!-- <li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li> -->
				<li><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('Y -m-d'); ?></time></li>
				<?php if(isset($this->options->plugins['activated']['Views'])) _e('<li>').Views_Plugin::theViews(). _e('</li>'); ?>
				<li itemprop="interactionCount"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
				<li><a itemtype="url" href="<?php $this->permalink() ?>">阅读全文</a></li>
			</ul>
        </article>
	<?php endwhile; ?>
    <?php $this->pageNav('上一页', '下一页'); ?>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
