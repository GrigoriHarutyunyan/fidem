<?php
/* Smarty version 4.1.1, created on 2023-12-25 05:11:22
  from 'C:\OSPanel\domains\fidem\design\backend\templates\views\addons\components\manage\addons_disabled_msg.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65897f7a215b29_29115202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '346223e63e56c74397b947e444d4bf71573b2b6e' => 
    array (
      0 => 'C:\\OSPanel\\domains\\fidem\\design\\backend\\templates\\views\\addons\\components\\manage\\addons_disabled_msg.tpl',
      1 => 1703363087,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65897f7a215b29_29115202 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('tools_addons_disabled_msg','tools_re_enable_add_ons'));
$_smarty_tpl->_assignInScope('is_addon_management_enabled', true);
if (fn_allowed_for("MULTIVENDOR") && $_smarty_tpl->tpl_vars['selected_storefront_id']->value || fn_allowed_for("ULTIMATE") && $_smarty_tpl->tpl_vars['runtime']->value['company_id']) {?>
    <?php $_smarty_tpl->_assignInScope('is_addon_management_enabled', false);
}?>

<?php if ($_smarty_tpl->tpl_vars['is_addon_management_enabled']->value && ($_smarty_tpl->tpl_vars['settings']->value['init_addons'] === 'none' || $_smarty_tpl->tpl_vars['settings']->value['init_addons'] === 'core')) {?>
    <div class="alert alert-block addon-info-msg">
        <span><?php echo $_smarty_tpl->__("tools_addons_disabled_msg");?>
</span>
        <form action="<?php echo htmlspecialchars((string) fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post">
            <input type="hidden" name="dispatch" value="addons.tools">
            <button type="submit" class="btn btn-warning" name="init_addons" value="restore">
                <?php echo $_smarty_tpl->__("tools_re_enable_add_ons");?>

            </button>
        </form>
    </div>
<?php }?>

<?php }
}
