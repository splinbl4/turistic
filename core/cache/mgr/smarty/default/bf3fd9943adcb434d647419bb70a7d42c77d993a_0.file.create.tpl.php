<?php /* Smarty version 3.1.27, created on 2016-12-15 23:08:52
         compiled from "D:\OpenServer\domains\turistic\manager\templates\default\resource\staticresource\create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21155852f8541e59a1_23490636%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf3fd9943adcb434d647419bb70a7d42c77d993a' => 
    array (
      0 => 'D:\\OpenServer\\domains\\turistic\\manager\\templates\\default\\resource\\staticresource\\create.tpl',
      1 => 1479295682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21155852f8541e59a1_23490636',
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
  'unifunc' => 'content_5852f85427a0c8_60744779',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5852f85427a0c8_60744779')) {
function content_5852f85427a0c8_60744779 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21155852f8541e59a1_23490636';
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