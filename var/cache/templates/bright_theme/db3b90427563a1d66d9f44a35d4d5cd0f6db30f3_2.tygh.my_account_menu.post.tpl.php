<?php
/* Smarty version 4.1.1, created on 2023-12-25 05:08:33
  from 'C:\OSPanel\domains\fidem\design\themes\responsive\templates\addons\vendor_communication\hooks\profiles\my_account_menu.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65897ed12dd4e8_83298450',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db3b90427563a1d66d9f44a35d4d5cd0f6db30f3' => 
    array (
      0 => 'C:\\OSPanel\\domains\\fidem\\design\\themes\\responsive\\templates\\addons\\vendor_communication\\hooks\\profiles\\my_account_menu.post.tpl',
      1 => 1703378601,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65897ed12dd4e8_83298450 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\fidem\\app\\functions\\smarty_plugins\\modifier.enum.php','function'=>'smarty_modifier_enum',),1=>array('file'=>'C:\\OSPanel\\domains\\fidem\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('vendor_communication.messages','vendor_communication.messages'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('communication_type', smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_CUSTOMER"));
$_smarty_tpl->_assignInScope('communication_type_active', fn_vendor_communication_is_communication_type_active($_smarty_tpl->tpl_vars['communication_type']->value));?>

<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id'] && $_smarty_tpl->tpl_vars['communication_type_active']->value) {?>
    <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) fn_url("vendor_communication.threads"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" ><?php echo $_smarty_tpl->__("vendor_communication.messages");?>
</a></li>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/vendor_communication/hooks/profiles/my_account_menu.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/vendor_communication/hooks/profiles/my_account_menu.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('communication_type', smarty_modifier_enum("Addons\\VendorCommunication\\CommunicationTypes::VENDOR_TO_CUSTOMER"));
$_smarty_tpl->_assignInScope('communication_type_active', fn_vendor_communication_is_communication_type_active($_smarty_tpl->tpl_vars['communication_type']->value));?>

<?php if ($_smarty_tpl->tpl_vars['auth']->value['user_id'] && $_smarty_tpl->tpl_vars['communication_type_active']->value) {?>
    <li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a underlined" href="<?php echo htmlspecialchars((string) fn_url("vendor_communication.threads"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" ><?php echo $_smarty_tpl->__("vendor_communication.messages");?>
</a></li>
<?php }
}
}
}
