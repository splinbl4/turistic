<?php /* Smarty version 3.1.27, created on 2016-12-15 23:09:28
         compiled from "D:\OpenServer\domains\turistic\manager\templates\default\resource\staticresource\update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:244315852f878c8c8d8_23165415%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '195da6e4112cc44f3607721ea5088c4b91a30794' => 
    array (
      0 => 'D:\\OpenServer\\domains\\turistic\\manager\\templates\\default\\resource\\staticresource\\update.tpl',
      1 => 1479295682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '244315852f878c8c8d8_23165415',
  'variables' => 
  array (
    'tvOutput' => 0,
    'onDocFormPrerender' => 0,
    'resource' => 0,
    '_config' => 0,
    'onRichTextEditorInit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5852f878ca7e61_48538565',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5852f878ca7e61_48538565')) {
function content_5852f878ca7e61_48538565 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '244315852f878c8c8d8_23165415';
?>
<div id="modx-panel-static-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }

}
}
?>