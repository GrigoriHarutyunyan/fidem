<?php
/* Smarty version 4.1.1, created on 2023-12-25 05:14:33
  from 'C:\OSPanel\domains\fidem\design\backend\templates\addons\advanced_import\hooks\products\tools_list_items.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_658980399b93b7_34825490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fdeb8f14aa81a610ee92f8b26ffb1f97de09dfe2' => 
    array (
      0 => 'C:\\OSPanel\\domains\\fidem\\design\\backend\\templates\\addons\\advanced_import\\hooks\\products\\tools_list_items.pre.tpl',
      1 => 1703362974,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658980399b93b7_34825490 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('import_product_href', "import_presets.manage&object_type=products" ,false ,2);
$_smarty_tpl->_assignInScope('has_permission_an_import', fn_check_permissions("import_presets","update","admin","POST") ,false ,2);
}
}
