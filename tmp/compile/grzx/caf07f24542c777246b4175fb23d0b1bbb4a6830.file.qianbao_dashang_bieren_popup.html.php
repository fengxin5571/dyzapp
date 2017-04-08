<?php /* Smarty version Smarty-3.1.12, created on 2017-01-12 12:02:18
         compiled from ".\tpl\grzx\qianbao_dashang_bieren_popup.html" */ ?>
<?php /*%%SmartyHeaderCode:153135876ffca803ae0-18152106%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'caf07f24542c777246b4175fb23d0b1bbb4a6830' => 
    array (
      0 => '.\\tpl\\grzx\\qianbao_dashang_bieren_popup.html',
      1 => 1484193631,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '153135876ffca803ae0-18152106',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dsuser' => 0,
    'row' => 0,
    'zhuti' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5876ffca835467_14176431',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5876ffca835467_14176431')) {function content_5876ffca835467_14176431($_smarty_tpl) {?><p style="text-align:center;font-size: 16px;color:#333333;line-height: 22px;margin:10px 0">
	打赏给 <?php echo $_smarty_tpl->tpl_vars['dsuser']->value['nicheng'];?>
 <span style="color:#e6001a"><?php echo $_smarty_tpl->tpl_vars['row']->value['ftb']+$_smarty_tpl->tpl_vars['row']->value['ftb_song'];?>
</span>房团币<br/>
	<span style="font-size: 12px;">其中  金币<?php echo $_smarty_tpl->tpl_vars['row']->value['ftb'];?>
币  银币<?php echo $_smarty_tpl->tpl_vars['row']->value['ftb_song'];?>
币<br/>主题：<?php echo $_smarty_tpl->tpl_vars['zhuti']->value['biaoti'];?>
</span>
</p>
<p style="font-size: 10px;color:#999999;float:right"><?php echo $_smarty_tpl->tpl_vars['row']->value['addtime'];?>
</p><?php }} ?>