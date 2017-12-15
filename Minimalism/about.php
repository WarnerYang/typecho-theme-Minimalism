<?php
/**
 * 关于
 *
 * @package custom
 * @author  Warner
 * @link 	http://yanghuaqiang.com
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
		<ul class="project">
			<li class="pro-list">
				<span class="pro-title">武汉留学生创业园微信后台管理系统</span> 
				<a href="#">
					<div class="pro-intro">
						<p>一个政府项目，类似于公众号平台的后台管理</p>
						<p>职责：PHP接口开发</p>
						<p>框架及插件：ThinkPHP + Bootstrap + Layer</p>
					</div>
				</a>
			</li>
			<li class="pro-list">
				<span class="pro-title">发明快线后台管理系统</span> 
				<a href="#">
					<div class="pro-intro">
						<p>公司软件产品的后台管理系统</p>
						<p>职责：PHP后台开发</p>
						<p>框架及插件：ThinkPHP + Layer</p>
					</div>
				</a>
			</li>
			<li class="pro-list">
				<span class="pro-title">武汉知识产权研究院任务管理系统</span> 
				<a href="#">
					<div class="pro-intro">
						<p>一个任务管理发布平台</p>
						<p>职责：数据库设计 + PHP后台开发</p>
						<p>框架及插件：ThinkPHP + Layer</p>
					</div>
				</a>
			</li>
			<li class="pro-list">
				<span class="pro-title">发明快线App 2.0</span> 
				<a href="#">
					<div class="pro-intro">
						<p>一款集专利申请、专利资讯、专利检索、专家咨询的APP</p>
						<p>职责：PHP接口开发</p>
						<p>框架及插件：ThinkPHP + MUI</p>
					</div>
				</a>
			</li>
		</ul>
	</div>
</article>

<?php $this->need('footer.php'); ?>