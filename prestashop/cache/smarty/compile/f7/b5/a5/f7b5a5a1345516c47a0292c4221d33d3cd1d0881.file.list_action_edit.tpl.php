<?php /* Smarty version Smarty-3.1.19, created on 2018-02-20 11:16:16
         compiled from "C:\wamp64\www\rendu\PHP_avance_II_My_Presta\prestashop\admin\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:160775a8c0380491ea3-81409535%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7b5a5a1345516c47a0292c4221d33d3cd1d0881' => 
    array (
      0 => 'C:\\wamp64\\www\\rendu\\PHP_avance_II_My_Presta\\prestashop\\admin\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1517242832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '160775a8c0380491ea3-81409535',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8c03804be7e5_22098651',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8c03804be7e5_22098651')) {function content_5a8c03804be7e5_22098651($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
