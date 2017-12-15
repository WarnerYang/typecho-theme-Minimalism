<?php
/**
 * Mecho主题
 * 
 * @package Typecho Mecho Theme 
 * @author  華強博客
 * @version 1.0
 * @link    http://yanghuaqiang.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
$coverstory = bing(); 
?>
<?php if($this->is('index')): ?>
	<div id="pic" style="background-image:url('<?php _e($this->options->siteUrl().date('Ymd').'.jpg'); ?>');">
		<div class="info_box">
			<p class="title"><?php _e($coverstory['title']); ?></p>
			<p class="min"><?php _e($coverstory['attribute']); ?></p>
			<p class="content"><?php _e($coverstory['para1']); ?></p>
			<a class="min copyright" href="javascript:;" title="图片版权归必应所有"><?php _e($coverstory['provider']); ?></a>
		</div>
	</div>
<?php endif; ?>
<div id="body">
	<div class="container">
		<div class="row">
			<div class="col-mb-12 col-12" id="main" role="main">
				<?php while($this->next()): ?>
					<article class="post index" itemscope itemtype="http://schema.org/BlogPosting">
						<h2 class="post-title" itemprop="name headline">
							<a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?>
							</a>
						</h2>
						<ul class="post-meta">
							<li>
								<time datetime="<?php $this->date('c'); ?>" itemprop="datePublished">
									<?php $this->date('Y-m-d'); ?>
								</time>
							</li>
							<li><?php $this->category(','); ?></li>
							<li itemprop="interactionCount">
								<a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments">
									<?php $this->commentsNum('%d 条评论'); ?>
								</a>
							</li>
						</ul>
						<div class="post-content home" itemprop="articleBody">
							<?php $this->excerpt(100, '...'); ?>
						</div>
					</article>
				<?php endwhile; ?>
				<?php $this->pageNav('上一页','下一页',10,'...');?>
			</div><!-- end #main-->
			<?php $this->need('footer.php'); ?>