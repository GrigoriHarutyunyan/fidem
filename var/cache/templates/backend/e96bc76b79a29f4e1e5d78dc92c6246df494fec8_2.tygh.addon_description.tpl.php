<?php
/* Smarty version 4.1.1, created on 2023-12-25 05:11:25
  from 'C:\OSPanel\domains\fidem\design\backend\templates\views\addons\components\manage\addon_description.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65897f7d0fdaa5_75937834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e96bc76b79a29f4e1e5d78dc92c6246df494fec8' => 
    array (
      0 => 'C:\\OSPanel\\domains\\fidem\\design\\backend\\templates\\views\\addons\\components\\manage\\addon_description.tpl',
      1 => 1703363087,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/addons/components/addons/addon_license_required.tpl' => 1,
  ),
),false)) {
function content_65897f7d0fdaa5_75937834 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\fidem\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'C:\\OSPanel\\domains\\fidem\\app\\functions\\smarty_plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
\Tygh\Languages\Helper::preloadLangVars(array('new_addon'));
$_smarty_tpl->_assignInScope('show_version', (($tmp = $_smarty_tpl->tpl_vars['show_version']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
$_smarty_tpl->_assignInScope('show_install_datetime', (($tmp = $_smarty_tpl->tpl_vars['show_install_datetime']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['is_marketplace_addons']->value) {?>
    <?php $_smarty_tpl->_assignInScope('href', $_smarty_tpl->tpl_vars['a']->value['addon_marketplace_page']);?>
    <?php $_smarty_tpl->_assignInScope('is_open_new_tab', true);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('href', fn_url("addons.update?addon=".((string)$_smarty_tpl->tpl_vars['a']->value['addon'])));?>
    <?php if (fn_allowed_for("MULTIVENDOR") && $_smarty_tpl->tpl_vars['selected_storefront_id']->value) {?>
        <?php $_smarty_tpl->_assignInScope('href', fn_link_attach($_smarty_tpl->tpl_vars['href']->value,"storefront_id=".((string)$_smarty_tpl->tpl_vars['selected_storefront_id']->value)));?>
    <?php }
}?>

<?php $_smarty_tpl->_subTemplateRender("tygh:views/addons/components/addons/addon_license_required.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="addons-addon-description">
    <div>
        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8');?>
"
           class="row-status addons-addon-description__name addons-addon-description__name--<?php echo htmlspecialchars((string) mb_strtolower($_smarty_tpl->tpl_vars['a']->value['status'], 'UTF-8'), ENT_QUOTES, 'UTF-8');?>
 nowrap-responsive"
           title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon_full_description']->value, ENT_QUOTES, 'UTF-8');?>
"
           <?php if ($_smarty_tpl->tpl_vars['is_open_new_tab']->value) {?>
               target="_blank"
           <?php }?>
        >
            <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a']->value['short_name'], ENT_QUOTES, 'UTF-8');?>

        </a>

        <?php if ($_smarty_tpl->tpl_vars['a']->value['recently_installed']) {?>
            <?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"icon-circle addons-addon-description__new-addon addons-addon-description__new-addon--".((string)(mb_strtolower($_smarty_tpl->tpl_vars['a']->value['status'], 'UTF-8'))),'title'=>$_smarty_tpl->__("new_addon")),$_smarty_tpl);?>

        <?php }?>
    </div>
    <div class="addons-addon-description__description">
        <small class="muted addons-addon-description__description-small">
            <?php echo strip_tags($_smarty_tpl->tpl_vars['a']->value['description'],"<a>");?>

        </small>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['show_version']->value || $_smarty_tpl->tpl_vars['show_install_datetime']->value) {?>
        <div>
            <small class="muted" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addon_full_version_info']->value, ENT_QUOTES, 'UTF-8');?>
">
                <?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['a']->value['version'] ?? null)===null||$tmp==='' ? 0.1 ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>

            </small>
            <small class="muted">•</small>
            <?php if ($_smarty_tpl->tpl_vars['a']->value['install_datetime']) {?>
                <small class="muted" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['install_datetime_full_info']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <?php echo htmlspecialchars((string) smarty_modifier_date_format($_smarty_tpl->tpl_vars['a']->value['install_datetime'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format'])), ENT_QUOTES, 'UTF-8');?>

                </small>
            <?php } else { ?>
                <small class="muted">—</small>
            <?php }?>

        </div>
    <?php }?>

        <div class="hidden">
        <?php if ($_smarty_tpl->tpl_vars['a']->value['is_long_name']) {?>
            <?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>

        <?php }?>
        <?php echo $_smarty_tpl->tpl_vars['a']->value['addon'];?>

    </div>
</div>
<?php }
}
