<?php /* Smarty version Smarty-3.1.19, created on 2018-02-20 11:15:59
         compiled from "C:\wamp64\www\rendu\PHP_avance_II_My_Presta\prestashop\admin\themes\default\template\controllers\slip\_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:177225a8c036f158213-80944993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21d0985201e4b9b9bd22f82e19a83243bbba42a0' => 
    array (
      0 => 'C:\\wamp64\\www\\rendu\\PHP_avance_II_My_Presta\\prestashop\\admin\\themes\\default\\template\\controllers\\slip\\_print_pdf_icon.tpl',
      1 => 1517242832,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177225a8c036f158213-80944993',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'order_slip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8c036f1a84c5_52113074',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8c036f1a84c5_52113074')) {function content_5a8c036f1a84c5_52113074($_smarty_tpl) {?>



<a class="btn btn-default _blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateOrderSlipPDF&amp;id_order_slip=<?php echo intval($_smarty_tpl->tpl_vars['order_slip']->value->id);?>
">
	<i class="icon-file-text"></i>
	<?php echo smartyTranslate(array('s'=>'Download credit slip'),$_smarty_tpl);?>

</a>

<?php }} ?>
