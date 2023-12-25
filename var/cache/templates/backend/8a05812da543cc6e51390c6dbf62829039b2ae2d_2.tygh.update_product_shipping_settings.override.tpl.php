<?php
/* Smarty version 4.1.1, created on 2023-12-25 05:16:27
  from 'C:\OSPanel\domains\fidem\design\backend\templates\addons\product_variations\hooks\products\update_product_shipping_settings.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_658980ab2defd1_05935722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a05812da543cc6e51390c6dbf62829039b2ae2d' => 
    array (
      0 => 'C:\\OSPanel\\domains\\fidem\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_shipping_settings.override.tpl',
      1 => 1703363029,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658980ab2defd1_05935722 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("shippings")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
