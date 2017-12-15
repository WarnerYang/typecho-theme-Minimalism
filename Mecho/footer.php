<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
</div><!-- end .row -->
</div>
</div><!-- end #body -->
<footer id="footer" role="contentinfo">
	<p>
		&copy; <?php echo date('Y'); ?> 
		<a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a> | 
		<a href="http://www.miitbeian.gov.cn" target="_blank">鄂ICP备16012001号-1</a>
	</p>
	<p class="links">
		友情链接：
		<a href="http://www.xiangyoung.com/" target="_blank" title="待风景看透，愿细水长流。">向洋博客</a> | 
		<a href="http://toonui.com/" target="_blank" title="生活和设计总是不离不弃">太有爱</a> |
		<a href="http://wxdas.com/" target="_blank" title="小大的生活就记录在这里">WangXD's</a> | 
		<a href="http://ishwy.me/" target="_blank" title="98年的phper工程师">Shwy的博客</a> 
	</p>
</footer><!-- end #footer -->
<?php $this->footer(); ?>
<script src="<?php $this->options->adminStaticUrl('js', 'jquery.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/main.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/shuru.js'); ?>"></script>
<script type="text/javascript">
	POWERMODE.colorful = true; // make power mode colorful
	POWERMODE.shake = false; // turn off shake
	document.body.addEventListener('input', POWERMODE);
</script>
</body>
</html>