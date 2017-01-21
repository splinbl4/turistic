<?php /* Smarty version 3.1.27, created on 2016-12-11 12:21:10
         compiled from "D:\OpenServer\domains\turistic\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:28302584d1a86102620_37705131%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f27ffd19e695d76d8f47797c8c844e8e160bc00f' => 
    array (
      0 => 'D:\\OpenServer\\domains\\turistic\\setup\\templates\\footer.tpl',
      1 => 1479295682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28302584d1a86102620_37705131',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_584d1a8611dba4_40127068',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_584d1a8611dba4_40127068')) {
function content_584d1a8611dba4_40127068 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'D:/OpenServer/domains/turistic/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '28302584d1a86102620_37705131';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>