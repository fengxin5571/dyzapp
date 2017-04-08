<?php /* Smarty version Smarty-3.1.12, created on 2016-11-14 10:50:06
         compiled from ".\tpl\grzx\gft_list.html" */ ?>
<?php /*%%SmartyHeaderCode:300055825257d92bef7-06602306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2dcdbf54cad07891d4205eee0386261966bfaf68' => 
    array (
      0 => '.\\tpl\\grzx\\gft_list.html',
      1 => 1479091410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '300055825257d92bef7-06602306',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5825257d959b57_01539046',
  'variables' => 
  array (
    'tuan' => 0,
    'gf' => 0,
    'btuan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5825257d959b57_01539046')) {function content_5825257d959b57_01539046($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['tuan']->value['id']<1){?><?php }else{ ?>
<div class="gft_list" onclick="tuan_detail('<?php echo $_smarty_tpl->tpl_vars['tuan']->value['id'];?>
','1','<?php echo $_smarty_tpl->tpl_vars['tuan']->value['dianhua'];?>
')" tapmode="tap-active">
	<span><?php echo $_smarty_tpl->tpl_vars['tuan']->value['loupan'];?>
·购房团</span><span class="gray_font">（民间发团）</span>
	<i></i>
</div>
<?php }?>
<?php  $_smarty_tpl->tpl_vars['btuan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['btuan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['gf']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['btuan']->key => $_smarty_tpl->tpl_vars['btuan']->value){
$_smarty_tpl->tpl_vars['btuan']->_loop = true;
?>
<div class="gft_list" onclick="tuan_detail('<?php echo $_smarty_tpl->tpl_vars['btuan']->value['name']['id'];?>
','2','<?php echo $_smarty_tpl->tpl_vars['btuan']->value['tel']['sldh'];?>
')" tapmode="tap-active">
	<span><?php echo $_smarty_tpl->tpl_vars['btuan']->value['name']['name'];?>
·购房团</span><span class="org_font">（官方发团）</span>
	<i></i>
</div>
<?php } ?><?php }} ?>