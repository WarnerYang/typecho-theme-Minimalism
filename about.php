<?php
/**
 * 关于
 *
 * @package custom
 * @author  Warner
 * @link 	https://github.com/WarnerYang
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<article class="page">
	<header class="page-bg about-bg">
		<h1 class="page-title">代码如诗 字字珠玑</h1>
	</header>
	<div class="page-container">
		<div class="post-content" itemprop="articleBody">
			<?php $this->content(); ?>
		</div>
	</div>
</article>

<?php $this->need('footer.php'); ?>