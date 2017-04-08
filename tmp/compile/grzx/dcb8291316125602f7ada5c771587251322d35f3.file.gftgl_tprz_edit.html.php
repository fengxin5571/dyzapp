<?php /* Smarty version Smarty-3.1.12, created on 2017-01-10 10:54:22
         compiled from ".\tpl\grzx\gftgl_tprz_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:4071587442ff5ce3e1-08785493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcb8291316125602f7ada5c771587251322d35f3' => 
    array (
      0 => '.\\tpl\\grzx\\gftgl_tprz_edit.html',
      1 => 1484016833,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4071587442ff5ce3e1-08785493',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_587442ff5f8344_10534195',
  'variables' => 
  array (
    'tprz' => 0,
    'user' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587442ff5f8344_10534195')) {function content_587442ff5f8344_10534195($_smarty_tpl) {?><li style="margin-top:20px;">
    <p>公告标题 ：</p>
    <input type="text" class="tanpan_tit ipt" value="<?php echo $_smarty_tpl->tpl_vars['tprz']->value['biaoti'];?>
" readonly>
</li>
<li>
    <p>发布人：团主</p>
    <input type="text" class="tanpan_faburen ipt" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['nicheng'];?>
" readonly>
</li>
<li style="margin-top:20px;">
<p>开发公司名称 ：</p>
    <input type="text" class="tanpan_kfs ipt" value="<?php echo $_smarty_tpl->tpl_vars['tprz']->value['kaifashang'];?>
">
</li>
<li>
    <p>谈判时间：</p>
    <input type="text" class="tanpan_shijian ipt"  onclick="sj(this)"  tapmode='tap-active' placeholder="请选择谈判时间" value="<?php echo $_smarty_tpl->tpl_vars['tprz']->value['tanpantime'];?>
">
</li>
<li>
    <p>谈判优惠价格：</p>
    <input type="number" class="tanpan_jiage ipt" value="<?php echo $_smarty_tpl->tpl_vars['tprz']->value['money'];?>
">
    <select name="" id="" class="dw">
		<?php if ($_smarty_tpl->tpl_vars['tprz']->value['dw']==0){?>
		<option value="0" selected>元/平方米</option>
		<option value="1">元/套</option>
		<?php }else{ ?>
		<option value="0">元/平方米</option>
		<option value="1" selected>元/套</option>
		<?php }?>
    </select>
</li>
<li>
    <p>开团时间：</p>
    <input type="text" class="kaituan_shijian ipt"  onclick="sj(this)"  tapmode='tap-active' placeholder="请选择开团时间" value="<?php echo $_smarty_tpl->tpl_vars['tprz']->value['kaituantime'];?>
">
</li>
<li>
    <p>开团要求：</p>
    <input type="number" class="tanpan_yaoqiu ipt" style="width:20%" value="<?php echo $_smarty_tpl->tpl_vars['tprz']->value['renshu'];?>
"><span>人</span>
</li>
<li>
    <p>本团参与：</p>
    <input type="number" class="tanpan_renshu ipt" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
">
</li>
<li>
    <p>谈判内容：</p>
</li>
<li style="height:auto;position: relative;">
    <textarea  class="tanpan_nr" placeholder="请输入与开发商谈判的具体内容" maxlength="1000" onpropertychange="zsxz(this)" oninput="zsxz(this)"><?php echo $_smarty_tpl->tpl_vars['tprz']->value['neirong'];?>
</textarea>
    <span class="jishu"><i>0</i>/1000</span>
</li><?php }} ?>