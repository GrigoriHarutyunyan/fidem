<?php
/* Smarty version 4.1.1, created on 2023-12-25 05:16:34
  from 'C:\OSPanel\domains\fidem\design\backend\templates\addons\required_products\hooks\products\tabs_content.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_658980b26f6a74_19032547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0321e4e6ef5f546f737b89d1b95a180cfdd1dfa8' => 
    array (
      0 => 'C:\\OSPanel\\domains\\fidem\\design\\backend\\templates\\addons\\required_products\\hooks\\products\\tabs_content.post.tpl',
      1 => 1703363032,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/products/components/picker/picker.tpl' => 1,
  ),
),false)) {
function content_658980b26f6a74_19032547 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="<?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "required_products") {?>hidden<?php }?>" id="content_required_products">
    <?php ob_start();
if ($_smarty_tpl->tpl_vars['product_company_id']->value) {
echo "company_id=";
echo (string)$_smarty_tpl->tpl_vars['product_company_id']->value;
}
$_prefixVariable8=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:views/products/components/picker/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('input_name'=>"required_product_ids[]",'item_ids'=>$_smarty_tpl->tpl_vars['required_products']->value,'multiple'=>true,'view_mode'=>"external",'select_group_class'=>"btn-toolbar",'additional_query_params'=>$_prefixVariable8), 0, false);
?>
</div><?php }
}
