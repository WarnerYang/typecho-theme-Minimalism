<?php
/**
 * 留言板
 *
 * @package custom
 * @author  Warner
 * @link 	http://yanghuaqiang.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
<article class="page">
	<header class="page-bg write-bg">
		<h1 class="page-title">尽情吐槽吧</h1>
	</header>
	<div class="page-container">
		<?php $this->need('comments.php'); ?>
	</div>

</article>

<?php $this->need('footer.php'); ?>