<?php /*%%SmartyHeaderCode:64045a8c061023f548-66654421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5c0f146dd181390f96011d89eb4737af9948524' => 
    array (
      0 => 'C:\\wamp64\\www\\rendu\\PHP_avance_II_My_Presta\\prestashop\\themes\\my_theme\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1519125626,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64045a8c061023f548-66654421',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a8c0a0f0d3d09_30234085',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8c0a0f0d3d09_30234085')) {function content_5a8c0a0f0d3d09_30234085($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//localhost/rendu/PHP_avance_II_My_Presta/prestashop/en/search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Search" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Search</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP -->
<?php }} ?>
