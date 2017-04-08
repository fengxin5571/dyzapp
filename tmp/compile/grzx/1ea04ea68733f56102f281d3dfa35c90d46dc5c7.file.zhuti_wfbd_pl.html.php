<?php /* Smarty version Smarty-3.1.12, created on 2016-11-18 15:38:14
         compiled from ".\tpl\grzx\zhuti_wfbd_pl.html" */ ?>
<?php /*%%SmartyHeaderCode:23888582c3abd3c86e3-40596812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ea04ea68733f56102f281d3dfa35c90d46dc5c7' => 
    array (
      0 => '.\\tpl\\grzx\\zhuti_wfbd_pl.html',
      1 => 1479454673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23888582c3abd3c86e3-40596812',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_582c3abd40d171_67511930',
  'variables' => 
  array (
    'zhuti' => 0,
    'zhu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582c3abd40d171_67511930')) {function content_582c3abd40d171_67511930($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['zhu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zhu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zhuti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zhu']->key => $_smarty_tpl->tpl_vars['zhu']->value){
$_smarty_tpl->tpl_vars['zhu']->_loop = true;
?>
<li class="jdal_one" uid='<?php echo $_smarty_tpl->tpl_vars['zhu']->value['id'];?>
'>
	<input type="checkbox">
	<div style="width:80%;padding-left:30px;box-sizing:border-box;border-bottom:solid 1px #f2f2f2; ">
	   <p class="jdal_tit"><?php echo $_smarty_tpl->tpl_vars['zhu']->value['biaoti'];?>
</p>
	   <p class="jdal_nr"><?php echo $_smarty_tpl->tpl_vars['zhu']->value['neirong'];?>
</p>
	</div>   
   <p class="jdal_time" style="margin-left: 10px;"><?php echo $_smarty_tpl->tpl_vars['zhu']->value['addtime'];?>
</p>
   <p class="jdal_pl" style="float:right">评论<span class="pls"><?php echo $_smarty_tpl->tpl_vars['zhu']->value['total'];?>
</span></p>
</li>
<?php } ?><?php }} ?>