<?php
/* Smarty version 4.1.1, created on 2023-12-25 05:16:36
  from 'C:\OSPanel\domains\fidem\design\backend\templates\addons\attachments\hooks\products\tabs_extra.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_658980b48cf6f0_70472566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bd3effb2aab0521664544248f578c2129e88e91' => 
    array (
      0 => 'C:\\OSPanel\\domains\\fidem\\design\\backend\\templates\\addons\\attachments\\hooks\\products\\tabs_extra.post.tpl',
      1 => 1703362977,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/attachments/views/components/add_new_attachments_files.tpl' => 1,
    'tygh:addons/attachments/views/attachments/manage.tpl' => 1,
  ),
),false)) {
function content_658980b48cf6f0_70472566 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\fidem\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'C:\\OSPanel\\domains\\fidem\\app\\functions\\smarty_plugins\\block.component.php','function'=>'smarty_block_component',),));
?>
<div id="content_attachments" class="cm-hide-save-button <?php if ($_smarty_tpl->tpl_vars['selected_section']->value !== "attachments") {?>hidden<?php }?>">
    <?php if (!(fn_allowed_for("ULTIMATE") && ($_smarty_tpl->tpl_vars['runtime']->value['company_id'] && $_smarty_tpl->tpl_vars['product_data']->value['shared_product'] === smarty_modifier_enum("YesNo::YES") && $_smarty_tpl->tpl_vars['product_data']->value['company_id'] != $_smarty_tpl->tpl_vars['runtime']->value['company_id']))) {?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/attachments/views/components/add_new_attachments_files.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('attachment'=>array(),'object_id'=>$_REQUEST['product_id'],'object_type'=>"product"), 0, false);
?>
    <?php }?>

    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('component', array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"attachments",'section'=>"main",'field'=>"attachments"));
$_block_repeat=true;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"attachments",'section'=>"main",'field'=>"attachments"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/attachments/views/attachments/manage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('object_id'=>$_REQUEST['product_id'],'object_type'=>"product",'hide_add_new_attachments'=>true), 0, false);
?>
    <?php $_block_repeat=false;
echo smarty_block_component(array('name'=>"configurable_page.field",'entity'=>"products",'tab'=>"attachments",'section'=>"main",'field'=>"attachments"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
<!--content_attachments--></div><?php }
}