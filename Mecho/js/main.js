$(document).ready(function(){
    var body_height = $("body").height();

    /*改变背景高度*/
    $(".copyright").on('click',function() {
        var pic_height = $("#pic").height();
        if(pic_height ==  body_height){
            $("#pic").animate({height:"75%"});
            $("#header").removeClass("hide");
            $(".info_box").css("background","rgba(0,0,0,0.3)");
            $(".info_box p").removeClass("hide");
        }else{
            $("#pic").animate({height:"100%"});
            $("#header").addClass("hide");
            $(".info_box").css("background","rgba(0,0,0,0)");
            $(".info_box p").addClass("hide");
        }
    });

    /*搜索*/
    $("#search").on('click', function() {
        $(".search_box").show();
        $(".search_box .ipt").focus();
    });
    $(".search_box .ipt").blur(function() {
        $(".search_box").hide();
    });

    /*面包导航*/
    $(".hamburger").click(function(){
        $(this).toggleClass("is-active");
        $("#menu").toggle();
        $("#header").toggleClass("header-bg2");
    });
});
