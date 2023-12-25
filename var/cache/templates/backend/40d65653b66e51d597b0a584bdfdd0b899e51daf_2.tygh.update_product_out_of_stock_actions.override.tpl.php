<?php
/* Smarty version 4.1.1, created on 2023-12-25 05:16:25
  from 'C:\OSPanel\domains\fidem\design\backend\templates\addons\product_variations\hooks\products\update_product_out_of_stock_actions.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_658980a92596d7_64395884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40d65653b66e51d597b0a584bdfdd0b899e51daf' => 
    array (
      0 => 'C:\\OSPanel\\domains\\fidem\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_out_of_stock_actions.override.tpl',
      1 => 1703363028,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658980a92596d7_64395884 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("out_of_stock_actions")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
