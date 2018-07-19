jQuery(document).ready(function($) {
	//滑动效果
	var p=0,t=0;
	var h = $("#header").height();
	$(window).scroll(function(event){
		p = $(this).scrollTop();  
		p > 200 ? $('.return-top').show() : $('.return-top').hide();
		if(t< p && p>50){
			setTimeout(function(){$('#header').removeClass('visible');},200);
			$('.hamburger').removeClass("is-active");
			$("#nav-menu").removeAttr('style');

		}else{
			setTimeout(function(){$('#header').addClass('visible');},150);
		}  
		t = p;       
	});

	//回顶部
	$('.return-top').click(function(){
		$('body,html').animate({scrollTop:0});
	});

	//导航菜单切换
	$(".hamburger").click(function(event){
		$(this).toggleClass("is-active");
		$("#nav-menu").slideToggle(100);
	});

	//替换全局a标签 外链统一新窗口打开
	$('a').each(function(index, el) {
		if(el.host!=document.domain){
			$(this).attr('target','_blank');
		}
	});

	//代码高亮
	$('pre code').each(function(i, block) {
		try{
			hljs.highlightBlock(block);
		}catch(e){

		}
	});
});

