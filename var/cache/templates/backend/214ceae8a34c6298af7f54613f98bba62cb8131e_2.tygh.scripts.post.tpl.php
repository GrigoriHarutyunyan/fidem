<?php
/* Smarty version 4.1.1, created on 2023-12-25 05:12:04
  from 'C:\OSPanel\domains\fidem\design\backend\templates\addons\vendor_communication\hooks\index\scripts.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65897fa40f02b8_25161228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '214ceae8a34c6298af7f54613f98bba62cb8131e' => 
    array (
      0 => 'C:\\OSPanel\\domains\\fidem\\design\\backend\\templates\\addons\\vendor_communication\\hooks\\index\\scripts.post.tpl',
      1 => 1703363052,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65897fa40f02b8_25161228 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\fidem\\app\\functions\\smarty_plugins\\function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/addons/vendor_communication/backend/vendor_communication.js"),$_smarty_tpl);
}
}
