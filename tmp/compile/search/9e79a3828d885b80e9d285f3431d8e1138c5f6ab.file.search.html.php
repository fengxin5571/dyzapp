<?php /* Smarty version Smarty-3.1.12, created on 2017-02-18 16:38:11
         compiled from ".\tpl\search\search.html" */ ?>
<?php /*%%SmartyHeaderCode:2070858a7f5e39cd707-38903823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e79a3828d885b80e9d285f3431d8e1138c5f6ab' => 
    array (
      0 => '.\\tpl\\search\\search.html',
      1 => 1487406083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2070858a7f5e39cd707-38903823',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58a7f5e3a02d77_01063802',
  'variables' => 
  array (
    'sheng' => 0,
    'prow' => 0,
    'jilu' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a7f5e3a02d77_01063802')) {function content_58a7f5e3a02d77_01063802($_smarty_tpl) {?><h6>按门店名称搜索</h6>
<div class="search_box">
    <input type="text" placeholder="请输入门店名称" class="sousuo">
    <div onclick="sousuo()" tapmode='tap-active'>搜索</div>
</div>
<h6 style="margin-top: 4px;">按省市区称搜索</h6>
<select name="" id="sheng" onchange="sheng()" tapmode='tap-active'>
<option value="0">请选择</option>
<?php  $_smarty_tpl->tpl_vars['prow'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prow']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sheng']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prow']->key => $_smarty_tpl->tpl_vars['prow']->value){
$_smarty_tpl->tpl_vars['prow']->_loop = true;
?>
<option value="<?php echo $_smarty_tpl->tpl_vars['prow']->value['provinceid'];?>
"><?php echo $_smarty_tpl->tpl_vars['prow']->value['province'];?>
</option>
<?php } ?>
</select>
<span>省</span>
<select name="" id="shi" onchange="shi()" tapmode='tap-active'>
<option value="0">请选择</option>
</select>
<span>市</span>
<select name="" id="mendian">
<option value="0">请选择</option>
</select>
<span>门店</span>
<h6 style="margin-top: 4px;">搜索记录</h6>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jilu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<p class="ssjl" onclick="open_sousuo(<?php echo $_smarty_tpl->tpl_vars['row']->value['mid'];?>
)" tapmode='tap-active'><?php echo $_smarty_tpl->tpl_vars['row']->value['md'];?>
</p>
<?php } ?><?php }} ?>