<?php
/* Smarty version 4.1.1, created on 2023-12-25 05:17:04
  from 'C:\OSPanel\domains\fidem\design\backend\templates\views\block_manager\render\container.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_658980d022e9a5_65562635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e1ac725f876b394ef2f21de5b83d7065953c031' => 
    array (
      0 => 'C:\\OSPanel\\domains\\fidem\\design\\backend\\templates\\views\\block_manager\\render\\container.tpl',
      1 => 1703363094,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:views/block_manager/components/device_availability_attributes.tpl' => 1,
    'tygh:views/block_manager/components/device_icons.tpl' => 1,
  ),
),false)) {
function content_658980d022e9a5_65562635 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\fidem\\app\\functions\\smarty_plugins\\block.hook.php','function'=>'smarty_block_hook',),));
\Tygh\Languages\Helper::preloadLangVars(array('set_custom_configuration','use_default_block_configuration','insert_grid','insert_grid','container_options','enable_or_disable_container'));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"block_manager:container"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"block_manager:container"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();?>
    <div class="device-specific-block container container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container']->value['width'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['container']->value['uses_default_content']) {?>container-lock<?php }?> <?php if ($_smarty_tpl->tpl_vars['container']->value['status'] != "A") {?>container-off<?php }?>"
        data-ca-status="<?php if ($_smarty_tpl->tpl_vars['container']->value['status'] != "A") {?>disabled<?php } else { ?>active<?php }?>"
        <?php $_smarty_tpl->_subTemplateRender("tygh:views/block_manager/components/device_availability_attributes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->tpl_vars['container']->value), 0, false);
?>
        id="container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container']->value['container_id'], ENT_QUOTES, 'UTF-8');?>
"
    >
        <?php if ($_smarty_tpl->tpl_vars['container']->value['linked_message']) {?>
            <p>
                <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container']->value['linked_message'], ENT_QUOTES, 'UTF-8');?>

                <a class="cm-post" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container']->value['set_custom_config_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("set_custom_configuration");?>
</a>
            </p>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['container']->value['has_displayable_content']) {?>
            <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

        <?php }?>
        
        <div class="clearfix"></div>
        <div class="grid-control-menu bm-control-menu">
            <?php $_smarty_tpl->_subTemplateRender("tygh:views/block_manager/components/device_icons.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('item'=>$_smarty_tpl->tpl_vars['container']->value,'wrapper_class'=>"pull-right"), 0, false);
?>

            <h4 class="grid-control-title">
                <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['container']->value['position']);?>

                <?php if ($_smarty_tpl->tpl_vars['container']->value['can_be_reset_to_default']) {?>
                    <a class="cm-post" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container']->value['set_default_config_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("use_default_block_configuration");?>
</a>
                <?php }?>
            </h4>

            <?php if ($_smarty_tpl->tpl_vars['container']->value['has_displayable_content'] && !$_smarty_tpl->tpl_vars['dynamic_object']->value) {?>
                <div class="grid-control-menu-actions">
                    <div class="btn-group action">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="icon-plus cm-tooltip" data-ce-tooltip-position="top" title="<?php echo $_smarty_tpl->__("insert_grid");?>
"></span></a>
                        <ul class="dropdown-menu droptop">
                            <li><a href="#" class="cm-action bm-action-add-grid"><?php echo $_smarty_tpl->__("insert_grid");?>
</a></li>
                        </ul>
                    </div>
                    <div class="cm-tooltip cm-action icon-cog bm-action-properties action" data-ce-tooltip-position="top" title="<?php echo $_smarty_tpl->__("container_options");?>
"></div>
                    <div class="cm-action bm-action-switch cm-tooltip icon-off action" data-ce-tooltip-position="top" title="<?php echo $_smarty_tpl->__("enable_or_disable_container");?>
"></div>
                </div>
            <?php }?>
        </div>
    <!--container_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['container']->value['container_id'], ENT_QUOTES, 'UTF-8');?>
--></div>
<?php $_block_repeat=false;
echo smarty_block_hook(array('name'=>"block_manager:container"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>

<hr />
<?php }
}
