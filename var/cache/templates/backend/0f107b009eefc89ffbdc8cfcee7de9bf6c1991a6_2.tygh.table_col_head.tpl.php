<?php
/* Smarty version 4.1.1, created on 2023-12-25 05:14:27
  from 'C:\OSPanel\domains\fidem\design\backend\templates\common\table_col_head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_658980330e1e26_50344084',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f107b009eefc89ffbdc8cfcee7de9bf6c1991a6' => 
    array (
      0 => 'C:\\OSPanel\\domains\\fidem\\design\\backend\\templates\\common\\table_col_head.tpl',
      1 => 1703363071,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_658980330e1e26_50344084 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('c_url', $_smarty_tpl->tpl_vars['c_url']->value ? $_smarty_tpl->tpl_vars['c_url']->value : fn_query_remove($_smarty_tpl->tpl_vars['config']->value['current_url'],"sort_by","sort_order"));
$_smarty_tpl->_assignInScope('rev', $_smarty_tpl->tpl_vars['rev']->value ? $_smarty_tpl->tpl_vars['rev']->value : (($tmp = $_REQUEST['content_id'] ?? null)===null||$tmp==='' ? "pagination_contents" ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['type']->value) {?><a class="cm-ajax th-text-overflow <?php if ($_smarty_tpl->tpl_vars['type']->value === $_smarty_tpl->tpl_vars['search']->value['sort_by']) {?>th-text-overflow--<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['search']->value['sort_order_rev'], ENT_QUOTES, 'UTF-8');
}?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
href="<?php echo htmlspecialchars((string) fn_url(((string)$_smarty_tpl->tpl_vars['c_url']->value)."&sort_by=".((string)$_smarty_tpl->tpl_vars['type']->value)."&sort_order=".((string)$_smarty_tpl->tpl_vars['search']->value['sort_order_rev'])), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['rev']->value) {
echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
 data-ca-target-id=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['rev']->value, ENT_QUOTES, 'UTF-8');
}?> <?php if ($_smarty_tpl->tpl_vars['title']->value) {
echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
 title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo (($tmp = $_smarty_tpl->tpl_vars['text']->value ?? null)===null||$tmp==='' ? $_smarty_tpl->__($_smarty_tpl->tpl_vars['type']->value) ?? null : $tmp);?>
</a><?php } elseif ($_smarty_tpl->tpl_vars['text']->value) {?><span class="th-text-overflow"<?php if ($_smarty_tpl->tpl_vars['title']->value) {
echo htmlspecialchars((string) '', ENT_QUOTES, 'UTF-8');?>
 title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</span><?php }
}
}
