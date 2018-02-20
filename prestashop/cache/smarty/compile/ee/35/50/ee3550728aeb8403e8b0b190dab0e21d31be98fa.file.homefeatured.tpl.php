<?php /* Smarty version Smarty-3.1.19, created on 2018-02-20 14:29:34
         compiled from "C:\wamp64\www\rendu\PHP_avance_II_My_Presta\prestashop\themes\newTheme\modules\homefeatured\homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:287005a8c22be8905d0-93927662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee3550728aeb8403e8b0b190dab0e21d31be98fa' => 
    array (
      0 => 'C:\\wamp64\\www\\rendu\\PHP_avance_II_My_Presta\\prestashop\\themes\\newTheme\\modules\\homefeatured\\homefeatured.tpl',
      1 => 1519132157,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '287005a8c22be8905d0-93927662',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8c22be8a7cf3_34337307',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8c22be8a7cf3_34337307')) {function content_5a8c22be8a7cf3_34337307($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
