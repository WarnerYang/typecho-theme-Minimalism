<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
        </div><!-- end .row -->
    </div>
</div><!-- end #body -->
<div class="return-top">
	<a href="javascript:;" class="triangle" title="回顶部">
		<i class="triangle-up"></i>
	</a>
</div>
<footer id="footer" role="contentinfo">
	&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a> | 鄂ICP备16012001号-1 | Theme By <a href="https://github.com/WarnerYang/typecho_themes">Minimalism</a>
</footer><!-- end #footer -->

<?php $this->footer(); ?>
<script src="//cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
<script src="<?php $this->options->themeUrl('js/main.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/instantclick.js'); ?>" data-no-instant></script> 
<script data-no-instant>InstantClick.init();</script>
</body>
</html>
