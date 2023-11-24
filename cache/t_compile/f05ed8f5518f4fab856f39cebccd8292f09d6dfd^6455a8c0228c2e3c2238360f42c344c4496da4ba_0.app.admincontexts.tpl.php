<?php
/* Smarty version 4.3.1, created on 2023-11-24 03:17:50
  from 'app:admincontexts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_656007ce474c23_21211277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6455a8c0228c2e3c2238360f42c344c4496da4ba' => 
    array (
      0 => 'app:admincontexts.tpl',
      1 => 1700261828,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_656007ce474c23_21211277 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_285280751656007ce46c0a3_32202464', "page");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/backend.tpl");
}
/* {block "page"} */
class Block_285280751656007ce46c0a3_32202464 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_285280751656007ce46c0a3_32202464',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<?php if ($_smarty_tpl->tpl_vars['newVersionAvailable']->value) {?>
		<notification>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"site.upgradeAvailable.admin",'currentVersion'=>$_smarty_tpl->tpl_vars['currentVersion']->value->getVersionString(false),'latestVersion'=>$_smarty_tpl->tpl_vars['latestVersion']->value),$_smarty_tpl ) );?>

		</notification>
	<?php }?>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'contextsUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'component'=>"grid.admin.context.ContextGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"contextGridContainer",'url'=>$_smarty_tpl->tpl_vars['contextsUrl']->value),$_smarty_tpl ) );?>


<?php
}
}
/* {/block "page"} */
}
