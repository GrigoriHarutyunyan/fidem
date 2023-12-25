<?php
/* Smarty version 4.1.1, created on 2023-12-25 05:16:25
  from 'C:\OSPanel\domains\fidem\design\backend\templates\addons\product_variations\hooks\products\update_product_short_description.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_658980a9954068_40370238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b2d919d1c7fe42553b98d8d9a24713c97ea277b' => 
    array (
      0 => 'C:\\OSPanel\\domains\\fidem\\design\\backend\\templates\\addons\\product_variations\\hooks\\products\\update_product_short_description.override.tpl',
      1 => 1703363029,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658980a9954068_40370238 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("short_description")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
