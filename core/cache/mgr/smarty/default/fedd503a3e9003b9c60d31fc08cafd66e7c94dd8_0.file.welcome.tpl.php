<?php /* Smarty version 3.1.27, created on 2016-12-11 12:21:41
         compiled from "D:\OpenServer\domains\turistic\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13953584d1aa55668f6_50208973%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fedd503a3e9003b9c60d31fc08cafd66e7c94dd8' => 
    array (
      0 => 'D:\\OpenServer\\domains\\turistic\\manager\\templates\\default\\welcome.tpl',
      1 => 1479295682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13953584d1aa55668f6_50208973',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584d1aa556a776_29241060',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584d1aa556a776_29241060')) {
function content_584d1aa556a776_29241060 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13953584d1aa55668f6_50208973';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>