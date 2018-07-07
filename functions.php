<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $fav = new Typecho_Widget_Helper_Form_Element_Text('fav', NULL, NULL, _t('站点LOGO'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO,不填即为默认。'));
    $form->addInput($fav);
    $GitHubLink = new Typecho_Widget_Helper_Form_Element_Text('GitHubLink', NULL, NULL, _t('GitHub'), _t('请填入完整链接。'));
    $form->addInput($GitHubLink);
    $rssLink = new Typecho_Widget_Helper_Form_Element_Text('rssLink', NULL, NULL, _t('rss'), _t('请填入完整链接。'));
    $form->addInput($rssLink);
    $twitterLink = new Typecho_Widget_Helper_Form_Element_Text('twitterLink', NULL, NULL, _t('twitter'), _t('请填入完整链接。'));
    $form->addInput($twitterLink);

	$effect = new Typecho_Widget_Helper_Form_Element_Checkbox('effect', 
    array(
    'fixbug' => _t('fix bug button(oﾟvﾟ)ノ'),
    'Prism' => _t('代码高亮'),
    ),
    array('fixbug', 'Prism'), _t('额外功能'));
    
    $form->addInput($effect->multiMode());
}

function active_current_menu($archive,$expected,$active_class='active'){
    if($expected == 'index' && $archive.is('index')){
        echo $active_class;
    }else if($archive.is('archive') && $archive.getArchiveSlug() == $expected){
        echo $active_class;
    }else{
        echo '';
    }
}

// 添加浏览数字段到内容
function themeFields($layout) {
    $viewsNum = new Typecho_Widget_Helper_Form_Element_Text('viewsNum', NULL, 0, _t('文章浏览数'), _t('文章浏览数统计'));
    $layout->addItem($viewsNum);
}

/*
 * @params Widget_Archive $archive
 */
function themeInit($archive){
    // 判断是否为文章或页面
    if($archive->is('single')){
        viewCounter($archive);
    }
}
/*
 * 统计文章浏览数
 * @params Widget_Archive $archive
 */
function viewCounter($archive){
    $cid = $archive->cid;
    $views = Typecho_Cookie::get('__typecho_views');
    $views = !empty($views) ? explode(',', $views) : array();
    if(!in_array($cid,$views)){
        $db = Typecho_Db::get();
        $field = $db->fetchRow($db->select()->from('table.fields')->where('cid = ? AND name = ?', $cid , 'viewsNum'));
        if(empty($field)){
            $db->query($db->insert('table.fields')
            ->rows(array('cid' => $cid, 'name' => 'viewsNum', 'type' => 'str', 'str_value' => 1, 'int_value' => 0, 'float_value' => 0)));
        }else{
            $db->query($db->update('table.fields')->expression('str_value', 'str_value + 1')->where('cid = ? AND name = ?', $cid , 'viewsNum'));
        }
        array_push($views, $cid);
        $views = implode(',', $views);
        Typecho_Cookie::set('__typecho_views', $views); //记录到cookie
    }
}


