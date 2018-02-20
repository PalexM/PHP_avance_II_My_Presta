<?php /* Smarty version Smarty-3.1.19, created on 2018-02-20 12:20:58
         compiled from "C:\wamp64\www\rendu\PHP_avance_II_My_Presta\prestashop\themes\my_theme\modules\homefeatured\homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100815a8c049a4706d9-97876601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3364685aeb11bf86caf68ea785e1697f659e650a' => 
    array (
      0 => 'C:\\wamp64\\www\\rendu\\PHP_avance_II_My_Presta\\prestashop\\themes\\my_theme\\modules\\homefeatured\\homefeatured.tpl',
      1 => 1519125627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100815a8c049a4706d9-97876601',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8c049a484a91_87906782',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8c049a484a91_87906782')) {function content_5a8c049a484a91_87906782($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
