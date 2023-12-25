<?php
/* Smarty version 4.1.1, created on 2023-12-25 05:16:24
  from 'C:\OSPanel\domains\fidem\design\backend\templates\addons\product_variations\hooks\products\update_product_usergroup_ids.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_658980a8013492_37365669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e47989592f5fb4641a6a0e7512856fde075dd1ad' => 
    array (
      0 => 'C:\\OSPanel\\domains\\fidem\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_usergroup_ids.override.tpl',
      1 => 1703363029,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658980a8013492_37365669 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("usergroup_ids")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
