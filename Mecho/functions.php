<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $form->addInput($logoUrl);
    
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
    'ShowOther' => _t('显示其它杂项')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowOther'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
}

/**
* 获取必应每日壁纸、故事
* @author  華強博客
* @link    http://www.yanghuaqiang.com
*/
function bing(){
    //删除之前的图片和故事
    for ($i=1; $i <=10 ; $i++) { 
        @unlink(date('Ymd',time()-24*3600*$i).'.jpg');
        @unlink(date('Ymd',time()-24*3600*$i).'.json');
    }

    $img_name   = date('Ymd').'.jpg'; //每日图片
    $coverstory = date('Ymd').'.json'; //每日故事 json格式

    if (!file_exists($img_name)) {
        $url = "http://www.bing.com/HPImageArchive.aspx?format=js&idx=0&n=1";
        $result = file_get_contents($url);
        $output = json_decode($result,true);
        $img_url = $output["images"][0]["url"];
        $img = file_get_contents("http://cn.bing.com".$img_url);  
        @file_put_contents($img_name,$img); //写入图片
    }
    if (!file_exists($coverstory)) {
        $json = file_get_contents('http://cn.bing.com/cnhp/coverstory/');
        @file_put_contents($coverstory,$json); //写入文本
    }
    $coverstory = json_decode(file_get_contents($coverstory),true);
    return $coverstory;
}

/*
function themeFields($layout) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $layout->addItem($logoUrl);
}
*/

