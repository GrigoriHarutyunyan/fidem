<?php
/* Smarty version 4.1.1, created on 2023-12-25 05:16:35
  from 'C:\OSPanel\domains\fidem\design\backend\templates\addons\vendor_communication\hooks\products\update_tools_list.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_658980b3e39eb9_37809731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54074faf22790106eaf042d27d3d5d8dfc2d0d65' => 
    array (
      0 => 'C:\\OSPanel\\domains\\fidem\\design\\backend\\templates\\addons\\vendor_communication\\hooks\\products\\update_tools_list.post.tpl',
      1 => 1703363053,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl' => 1,
  ),
),false)) {
function content_658980b3e39eb9_37809731 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("tygh:addons/vendor_communication/views/vendor_communication/components/new_thread_button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_type'=>(defined('VC_OBJECT_TYPE_PRODUCT') ? constant('VC_OBJECT_TYPE_PRODUCT') : null),'object_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id'],'menu_button'=>true,'divider'=>true), 0, false);
}
}
