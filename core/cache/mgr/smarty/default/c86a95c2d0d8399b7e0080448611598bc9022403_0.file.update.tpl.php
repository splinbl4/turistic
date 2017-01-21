<?php /* Smarty version 3.1.27, created on 2016-12-11 12:30:43
         compiled from "D:\OpenServer\domains\turistic\manager\templates\default\resource\update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:25515584d1cc3cb9ab0_56201153%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c86a95c2d0d8399b7e0080448611598bc9022403' => 
    array (
      0 => 'D:\\OpenServer\\domains\\turistic\\manager\\templates\\default\\resource\\update.tpl',
      1 => 1479295682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25515584d1cc3cb9ab0_56201153',
  'variables' => 
  array (
    'tvOutput' => 0,
    'hidden' => 0,
    'tv' => 0,
    'onDocFormPrerender' => 0,
    'resource' => 0,
    '_config' => 0,
    'onRichTextEditorInit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584d1cc3cd8ec6_71039073',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584d1cc3cd8ec6_71039073')) {
function content_584d1cc3cd8ec6_71039073 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '25515584d1cc3cb9ab0_56201153';
?>
<div id="modx-panel-resource-div"></div>
<div id="modx-resource-tvs-div"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>
<?php
$_from = $_smarty_tpl->tpl_vars['hidden']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tv'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tv']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tv']->value) {
$_smarty_tpl->tpl_vars['tv']->_loop = true;
$foreach_tv_Sav = $_smarty_tpl->tpl_vars['tv'];
?>
    <input type="hidden" id="tvdef<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->default_text, ENT_QUOTES, 'UTF-8', true);?>
" />
    <?php echo $_smarty_tpl->tpl_vars['tv']->value->get('formElement');?>

<?php
$_smarty_tpl->tpl_vars['tv'] = $foreach_tv_Sav;
}
?>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }

}
}
?>