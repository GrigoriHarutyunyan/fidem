<?php
/* Smarty version 4.1.1, created on 2023-12-25 05:09:28
  from 'C:\OSPanel\domains\fidem\design\themes\responsive\templates\addons\tags\views\tags\components\tags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65897f08009120_90089315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d7bfd9267546cced20b7dca69e10dc3fc70ba9f' => 
    array (
      0 => 'C:\\OSPanel\\domains\\fidem\\design\\themes\\responsive\\templates\\addons\\tags\\views\\tags\\components\\tags.tpl',
      1 => 1703378605,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65897f08009120_90089315 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\OSPanel\\domains\\fidem\\app\\functions\\smarty_plugins\\function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['object']->value['tags']) {?>
<div id="content_tags_tab">
    <div class="ty-control-group">
        <ul class="ty-tags-list clearfix">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['object']->value['tags'], 'tag', false, NULL, 'tags', array (
));
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('tag_name', rawurlencode((string)$_smarty_tpl->tpl_vars['tag']->value['tag']));?>
                <li class="ty-tags-list__item">
                    <a class="ty-tags-list__a" href="<?php echo htmlspecialchars((string) fn_url("tags.view?tag=".((string)$_smarty_tpl->tpl_vars['tag_name']->value)), ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>

                    </a>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>  
</div>
<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/tags/views/tags/components/tags.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/tags/views/tags/components/tags.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['object']->value['tags']) {?>
<div id="content_tags_tab">
    <div class="ty-control-group">
        <ul class="ty-tags-list clearfix">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['object']->value['tags'], 'tag', false, NULL, 'tags', array (
));
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('tag_name', rawurlencode((string)$_smarty_tpl->tpl_vars['tag']->value['tag']));?>
                <li class="ty-tags-list__item">
                    <a class="ty-tags-list__a" href="<?php echo htmlspecialchars((string) fn_url("tags.view?tag=".((string)$_smarty_tpl->tpl_vars['tag_name']->value)), ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['tag']->value['tag'], ENT_QUOTES, 'UTF-8');?>

                    </a>
                </li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>  
</div>
<?php }
}
}
}
