<?php
/* Smarty version 4.1.1, created on 2023-12-25 05:08:38
  from 'C:\OSPanel\domains\fidem\design\themes\responsive\templates\buttons\magnifier.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65897ed6b85229_08703816',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d2c0e4f851c038d65637a4c32f4d173b5e6df16' => 
    array (
      0 => 'C:\\OSPanel\\domains\\fidem\\design\\themes\\responsive\\templates\\buttons\\magnifier.tpl',
      1 => 1703378600,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65897ed6b85229_08703816 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\fidem\\app\\functions\\smarty_plugins\\function.include_ext.php','function'=>'smarty_function_include_ext',),1=>array('file'=>'C:\\OSPanel\\domains\\fidem\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);?><button title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['alt']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-search-magnifier" type="submit"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-search"),$_smarty_tpl);?>
</button>
<input type="hidden" name="dispatch" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="buttons/magnifier.tpl" id="<?php echo smarty_function_set_id(array('name'=>"buttons/magnifier.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else { ?><button title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['alt']->value, ENT_QUOTES, 'UTF-8');?>
" class="ty-search-magnifier" type="submit"><?php echo smarty_function_include_ext(array('file'=>"common/icon.tpl",'class'=>"ty-icon-search"),$_smarty_tpl);?>
</button>
<input type="hidden" name="dispatch" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['but_name']->value, ENT_QUOTES, 'UTF-8');?>
" />
<?php }
}
}
