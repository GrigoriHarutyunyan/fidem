<?php
/* Smarty version 4.1.1, created on 2023-12-25 05:16:18
  from 'C:\OSPanel\domains\fidem\design\backend\templates\addons\product_second_description\hooks\products\update_product_full_description.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_658980a2975851_17424028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9b8107cdca2fa1d1a26f6b707cdfe748fe29a37' => 
    array (
      0 => 'C:\\OSPanel\\domains\\fidem\\design\\backend\\templates\\addons\\product_second_description\\hooks\\products\\update_product_full_description.post.tpl',
      1 => 1703370029,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:components/append_language.tpl' => 1,
    'tygh:buttons/update_for_all.tpl' => 1,
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_658980a2975851_17424028 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('full_second_description','edit_content_on_site'));
?>
<div class="control-group cm-no-hide-input">
    <label class="control-label" for="elm_product_full_second_descr"><?php echo $_smarty_tpl->__("full_second_description");?>
:</label>
    <div class="controls">
        <div class="input-group <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['input_append_wysiwyg_if_shared_product']->value, ENT_QUOTES, 'UTF-8');?>
">
            <?php $_smarty_tpl->_assignInScope('is_block_manager_available', $_smarty_tpl->tpl_vars['runtime']->value['company_id'] || (fn_allowed_for("MULTIVENDOR")));?>
            <textarea id="elm_product_full_second_descr"
                      name="product_data[full_second_description]"
                      cols="55"
                      rows="8"
                      class="cm-wysiwyg input-large"
                      data-ca-is-block-manager-enabled="<?php echo htmlspecialchars((string) intval(fn_check_view_permissions("block_manager.block_selection","GET")), ENT_QUOTES, 'UTF-8');?>
"
                      data-ca-is-block-manager-available="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['is_block_manager_available']->value, ENT_QUOTES, 'UTF-8');?>
"
            ><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_data']->value['full_second_description'], ENT_QUOTES, 'UTF-8');?>
</textarea>
            <?php $_smarty_tpl->_subTemplateRender("tygh:components/append_language.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs_if_shared_product']->value,'simple_tooltip'=>true), 0, false);
?>
            <?php $_smarty_tpl->_subTemplateRender("tygh:buttons/update_for_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('display'=>$_smarty_tpl->tpl_vars['show_update_for_all']->value,'object_id'=>"full_second_description",'name'=>"update_all_vendors[full_second_description]",'component'=>"products.full_second_description",'hide_inputs'=>$_smarty_tpl->tpl_vars['hide_inputs_if_shared_product']->value,'append'=>true), 0, false);
?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['view_uri']->value) {?>
            <?php ob_start();
echo htmlspecialchars((string) urlencode($_smarty_tpl->tpl_vars['view_uri']->value), ENT_QUOTES, 'UTF-8');
$_prefixVariable4=ob_get_clean();
ob_start();
if (fn_allowed_for("ULTIMATE")) {
echo "&switch_company_id=";
echo (string)$_smarty_tpl->tpl_vars['product_data']->value['company_id'];
}
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_href'=>"customization.update_mode?type=live_editor&status=enable&frontend_url=".$_prefixVariable4.$_prefixVariable5,'but_text'=>$_smarty_tpl->__("edit_content_on_site"),'but_role'=>"action",'but_meta'=>"btn-small btn-live-edit cm-post",'but_target'=>"_blank"), 0, false);
?>
        <?php }?>
    </div>
</div><?php }
}
