<?php

if (!defined('__TYPECHO_ROOT_DIR__')) exit;



function themeConfig($form) {

/*
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO'));

    $form->addInput($logoUrl);
*/

    $SidebarIconUrl = new Typecho_Widget_Helper_Form_Element_Text('SidebarIconUrl', NULL, "https://s3.ax1x.com/2020/11/22/D8zjqe.jpg", _t('侧栏头图Url'), _t('<a href="https://github.com/Dr-cdfg/KC-Blog-Theme#%E4%BE%A7%E8%BE%B9%E6%A0%8F%E5%A4%B4%E5%9B%BE">帮助文档</a>'));

    $form->addInput($SidebarIconUrl);


    $FooderText = new Typecho_Widget_Helper_Form_Element_Text('FooderText', NULL, _t('页脚文字') ,_t('页脚文字'));

    $form->addInput($FooderText);

    $SidebarPictureApi = new Typecho_Widget_Helper_Form_Element_Text('SidebarPictureApi', NULL, 'https://api.ixiaowai.cn/gqapi/gqapi.php', _t('侧边栏图片'), _t('<a href="https://github.com/Dr-cdfg/KC-Blog-Theme#%E4%BE%A7%E8%BE%B9%E6%A0%8F%E5%9B%BE%E7%89%87">帮助文档</a>'));

    $form->addInput($SidebarPictureApi);

    $AccentColor = new Typecho_Widget_Helper_Form_Element_Select('AccentColor',[
    'indigo' => 'Indigo',
    'red' => 'Red',
    'pink' => 'Pink',
    'purple' => 'Purple',
    'deep-purple' => 'Deep Purple',
    'blue' => 'Blue',
    'light-blue' => 'Light Blue',
    'cyan' => 'Cyan',
    'teal' => 'Teal',
    'green' => 'Green',
    'light-green' => 'Light Green',
    'lime' => 'Lime',
    'yellow' => 'Yellow',
    'amber' => 'Amber',
    'orange' => 'Orange',
    'deep-orange' => 'Deep Orange',
    'brown' => 'Brown',
    'grey' => 'Grey',
    'blue-grey' => 'Blue Grey'
  ], 'pink', _t('强调色'), _t('<a href="https://github.com/Dr-cdfg/KC-Blog-Theme#%E8%89%B2%E8%B0%83%E9%A3%8E%E6%A0%BC">帮助文档</a>'));

    $form->addInput($AccentColor);


    $PrimaryColor = new Typecho_Widget_Helper_Form_Element_Select('PrimaryColor',[
    'indigo' => 'Indigo',
    'red' => 'Red',
    'pink' => 'Pink',
    'purple' => 'Purple',
    'deep-purple' => 'Deep Purple',
    'blue' => 'Blue',
    'light-blue' => 'Light Blue',
    'cyan' => 'Cyan',
    'teal' => 'Teal',
    'green' => 'Green',
    'light-green' => 'Light Green',
    'lime' => 'Lime',
    'yellow' => 'Yellow',
    'amber' => 'Amber',
    'orange' => 'Orange',
    'deep-orange' => 'Deep Orange',
    'brown' => 'Brown',
    'grey' => 'Grey',
    'blue-grey' => 'Blue Grey'
  ], 'indigo', _t('主题色'), _t('<a href="https://github.com/Dr-cdfg/KC-Blog-Theme#%E8%89%B2%E8%B0%83%E9%A3%8E%E6%A0%BC">帮助文档</a>'));

    $form->addInput($PrimaryColor);


    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 

    array('ShowAll' => _t('显示侧边栏'),

    'OldStyleCard' => _t('无头像侧栏卡片'),

    'ShowRecentPosts' => _t('显示最新文章（页面）'),

    'ShowRecentComments' => _t('显示最近回复（讨论）'),

    'ShowCategory' => _t('显示分类（分类）'),

    'ShowArchive' => _t('显示归档（归档）'),

    'ShowTheme' => _t('显示主题项目地址（主题）'),

    'ShowPages' => _t('显示页面（页面）'),

    'ShowOther' => _t('显示其它杂项（其他）')),

    array('ShowAll', 'ShowRecentPosts',  'ShowArchive', 'ShowPages', 'ShowRecentComments', 'ShowArchive',  'OldStyleCard', 'ShowOther'), _t('侧边栏显示项目'));



    $form->addInput($sidebarBlock->multiMode());

    $ColorTheme = new Typecho_Widget_Helper_Form_Element_Select('ColorTheme',[   
'mdui-theme-layout-auto' => '自动' ,
 
'mdui-theme-layout-dark' => '深色', 
   
'light' => '浅色'  


], '自动', _t('颜色模式'));    $form->addInput($ColorTheme);


    $MoreItem = new Typecho_Widget_Helper_Form_Element_Text('MoreItem', NULL, NULL, _t('更多链接处自定义'), _t('<a href="https://github.com/Dr-cdfg/KC-Blog-Theme#%E6%9B%B4%E5%A4%9A%E9%93%BE%E6%8E%A5%E8%87%AA%E5%AE%9A%E4%B9%89">帮助文档</a>'));

    $form->addInput($MoreItem);
}
/*

function themeFields($layout) {

    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));

    $layout->addItem($logoUrl);

}

*/



