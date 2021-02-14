<?php

if (!defined('__TYPECHO_ROOT_DIR__')) exit;



function themeConfig($form) {


    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点 LOGO 地址'), _t('在这里填入一个图片 URL 地址, 以在网站标题前加上一个 LOGO'));

    $form->addInput($logoUrl);

    $SidebarIconUrl = new Typecho_Widget_Helper_Form_Element_Text('SidebarIconUrl', NULL, "https://s3.ax1x.com/2020/11/22/D8zjqe.jpg", _t('侧栏头图'), _t('默认有图片'));

    $form->addInput($SidebarIconUrl);


    $FooderText = new Typecho_Widget_Helper_Form_Element_Text('FooderText', NULL,  _t('页脚文字'), _t('页脚要显示除了版权声明以外的东西'));

    $form->addInput($FooderText);

    $SidebarPictureApi = new Typecho_Widget_Helper_Form_Element_Text('SidebarPictureApi', NULL, 'https://api.ixiaowai.cn/gqapi/gqapi.php', _t('侧边栏图片'), _t('您可以使用一张图片，或<a href="https://www.kcblog.asia/pas.txt">图片Api</a>'));

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
  ], 'pink', _t('强调色'), _t('默认为“Pink”'));

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
  ], 'indigo', _t('主题色'), _t('默认为“Indigo”'));

    $form->addInput($PrimaryColor);


    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 

    array('ShowAll' => _t('总开关（打开/关闭侧栏）'),

    'OldStyleCard' => _t('老式侧栏卡片'),

    'ShowRecentPosts' => _t('显示最新文章'),

    'ShowRecentComments' => _t('显示最近回复'),

    'ShowCategory' => _t('显示分类'),

    'ShowArchive' => _t('显示归档'),

    'ShowTheme' => _t('显示主题链接'),

    'ShowPages' => _t('显示页面'),

    'ShowOther' => _t('显示其它杂项')),

    array('ShowAll', 'ShowRecentPosts',  'ShowArchive', 'ShowPages', 'ShowRecentComments', 'ShowArchive',  'ShowTheme', 'OldStyleCard', 'ShowOther'), _t('侧边栏显示'));



    $form->addInput($sidebarBlock->multiMode());

    $ColorTheme = new Typecho_Widget_Helper_Form_Element_Select('ColorTheme',[    'mdui-theme-layout-dark' => '深色',    'light' => '浅色'  ,    'mdui-theme-layout-auto' => '自动'], '浅色', _t('颜色模式'));    $form->addInput($ColorTheme);


    $MoreItem = new Typecho_Widget_Helper_Form_Element_Text('MoreItem', NULL, NULL, _t('更多链接处自定义'), _t('<a href="https://github.com/Dr-cdfg/KC-Blog-Theme#%E6%9B%B4%E5%A4%9A%E9%93%BE%E6%8E%A5%E8%87%AA%E5%AE%9A%E4%B9%89">使用方法</a>'));

    $form->addInput($MoreItem);
}
/*

function themeFields($layout) {

    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));

    $layout->addItem($logoUrl);

}

*/



