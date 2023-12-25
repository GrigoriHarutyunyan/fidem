<?php
/* Smarty version 4.1.1, created on 2023-12-25 05:16:29
  from 'C:\OSPanel\domains\fidem\design\backend\templates\addons\product_variations\hooks\products\update_product_features.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_658980ad62a719_31192797',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43f794a22fa38598cab62b48bd32b3985a6c8640' => 
    array (
      0 => 'C:\\OSPanel\\domains\\fidem\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_features.override.tpl',
      1 => 1703363026,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658980ad62a719_31192797 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("features")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
