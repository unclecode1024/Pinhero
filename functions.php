<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form)
{
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, 'https://blog.unclecode.cn/upload/avatar.jpg', _t('头像'), _t('在这里填入一个头像 URL 地址'));
    $form->addInput($logoUrl);

    $motto = new Typecho_Widget_Helper_Form_Element_Textarea('motto', NULL, '为了更美好的生活，前进~🎉', _t('格言'), _t('在这里填入一段话，将会显示在头像右侧'));
    $form->addInput($motto);
    
    $footerbeian = new Typecho_Widget_Helper_Form_Element_Text('footerbeian', NULL, NULL, _t('备案号'), _t('如果你的网站已备案，请在这里填写备案号，否则请空着它。'));
    $form->addInput($footerbeian);

    $wechat = new Typecho_Widget_Helper_Form_Element_Textarea('wechat', NULL, 'https://file.unclecode.cn/wechat_qr.png', _t('微信收款码'), _t('在这里填入微信收款码地址'));
    $form->addInput($wechat);

    $alipy = new Typecho_Widget_Helper_Form_Element_Textarea('alipy', NULL, 'https://file.unclecode.cn/wechat_qr.png', _t('支付宝收款码'), _t('在这里填入支付宝收款码地址'));
    $form->addInput($alipy);

    $envId = new Typecho_Widget_Helper_Form_Element_Textarea('envId', NULL, NULL, _t('评论系统envId'), _t('在这里填入评论系统envId，此处不填则不开启评论功能'));
    $form->addInput($envId);
}