<?php
/* Smarty version 4.1.1, created on 2023-12-25 05:08:11
  from 'C:\OSPanel\domains\fidem\design\themes\responsive\templates\addons\product_reviews\hooks\index\styles.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65897ebb9a49b8_01785511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74e6a310038d8bf33cbafed249838f3f014ec6a5' => 
    array (
      0 => 'C:\\OSPanel\\domains\\fidem\\design\\themes\\responsive\\templates\\addons\\product_reviews\\hooks\\index\\styles.post.tpl',
      1 => 1703378602,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65897ebb9a49b8_01785511 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\fidem\\app\\functions\\smarty_plugins\\function.style.php','function'=>'smarty_function_style',),1=>array('file'=>'C:\\OSPanel\\domains\\fidem\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
echo smarty_function_style(array('src'=>"addons/product_reviews/main.less"),$_smarty_tpl);?>


<?php echo smarty_function_style(array('src'=>"addons/product_reviews/fallback.css"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/product_reviews/hooks/index/styles.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/product_reviews/hooks/index/styles.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
echo smarty_function_style(array('src'=>"addons/product_reviews/main.less"),$_smarty_tpl);?>


<?php echo smarty_function_style(array('src'=>"addons/product_reviews/fallback.css"),$_smarty_tpl);?>

<?php }
}
}
