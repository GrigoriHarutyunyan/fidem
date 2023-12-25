<?php
/* Smarty version 4.1.1, created on 2023-12-25 05:16:18
  from 'C:\OSPanel\domains\fidem\design\backend\templates\addons\product_variations\hooks\products\product_update_price.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_658980a272de86_05327484',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbffd0775a16797e4cee51aa7f907fe8ff066a9c' => 
    array (
      0 => 'C:\\OSPanel\\domains\\fidem\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\product_update_price.override.tpl',
      1 => 1703363024,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658980a272de86_05327484 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("prices")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
