<?php
/* Smarty version 4.1.1, created on 2023-12-25 05:08:33
  from 'C:\OSPanel\domains\fidem\design\themes\responsive\templates\addons\wishlist\hooks\profiles\my_account_menu.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65897ed1826c01_38199871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b562121dab317012b026042c5c9194619bba9cd9' => 
    array (
      0 => 'C:\\OSPanel\\domains\\fidem\\design\\themes\\responsive\\templates\\addons\\wishlist\\hooks\\profiles\\my_account_menu.post.tpl',
      1 => 1703378604,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65897ed1826c01_38199871 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\fidem\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
\Tygh\Languages\Helper::preloadLangVars(array('wishlist','wishlist'));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a" href="<?php echo htmlspecialchars((string) fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("wishlist");
if ($_smarty_tpl->tpl_vars['wishlist_count']->value > 0) {?> (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wishlist_count']->value, ENT_QUOTES, 'UTF-8');?>
)<?php }?></a></li><?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/wishlist/hooks/profiles/my_account_menu.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/wishlist/hooks/profiles/my_account_menu.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><li class="ty-account-info__item ty-dropdown-box__item"><a class="ty-account-info__a" href="<?php echo htmlspecialchars((string) fn_url("wishlist.view"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo $_smarty_tpl->__("wishlist");
if ($_smarty_tpl->tpl_vars['wishlist_count']->value > 0) {?> (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['wishlist_count']->value, ENT_QUOTES, 'UTF-8');?>
)<?php }?></a></li><?php }
}
}
