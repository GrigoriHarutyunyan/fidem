<?php
/* Smarty version 4.1.1, created on 2023-12-25 05:17:07
  from 'C:\OSPanel\domains\fidem\design\backend\templates\views\tabs\manage_in_tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_658980d3a69500_33318930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'feb66e46bfa25b94a376fec9087ec5d7e32b16c0' => 
    array (
      0 => 'C:\\OSPanel\\domains\\fidem\\design\\backend\\templates\\views\\tabs\\manage_in_tab.tpl',
      1 => 1703363151,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/tabs/manage.tpl' => 1,
  ),
),false)) {
function content_658980d3a69500_33318930 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "product_tabs") {?>hidden<?php }?>" id="content_product_tabs">
    <?php $_smarty_tpl->_subTemplateRender("tygh:views/tabs/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!--content_product_tabs--></div>
<?php }
}