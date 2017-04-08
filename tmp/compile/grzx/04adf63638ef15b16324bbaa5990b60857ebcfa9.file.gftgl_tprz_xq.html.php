<?php /* Smarty version Smarty-3.1.12, created on 2017-01-10 15:40:58
         compiled from ".\tpl\grzx\gftgl_tprz_xq.html" */ ?>
<?php /*%%SmartyHeaderCode:327635873581e65a3f7-98643090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04adf63638ef15b16324bbaa5990b60857ebcfa9' => 
    array (
      0 => '.\\tpl\\grzx\\gftgl_tprz_xq.html',
      1 => 1484034044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '327635873581e65a3f7-98643090',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5873581e693770_08978022',
  'variables' => 
  array (
    'tprz' => 0,
    'user' => 0,
    'tuan' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5873581e693770_08978022')) {function content_5873581e693770_08978022($_smarty_tpl) {?><ul class="tprz_box">
    <li style="margin-top:20px;">
        <!-- <p>公告标题 ：</p> -->
        <?php echo $_smarty_tpl->tpl_vars['tprz']->value['biaoti'];?>

        <!-- <input type="text" class="tanpan_tit ipt" readonly value="<?php echo $_smarty_tpl->tpl_vars['tprz']->value['biaoti'];?>
"> -->
    </li>
    <li class="li1">
        <p>发布人：团主 <?php echo $_smarty_tpl->tpl_vars['user']->value['nicheng'];?>
</p>
        <!-- <input type="text" class="tanpan_faburen ipt" readonly value="<?php echo $_smarty_tpl->tpl_vars['user']->value['nicheng'];?>
"> -->
    </li>
	<li class="li1">
        <p>发布时间：<?php echo $_smarty_tpl->tpl_vars['tprz']->value['addtime'];?>
</p>
        <!-- <input type="text" class="tanpan_faburen ipt" readonly value="<?php echo $_smarty_tpl->tpl_vars['tprz']->value['addtime'];?>
"> -->
    </li>
    <li style="margin-top:20px;" class="li2">
        <p>开发公司名称 ：<?php echo $_smarty_tpl->tpl_vars['tprz']->value['kaifashang'];?>
</p>
        <!-- <input type="text" class="tanpan_kfs ipt" readonly value="<?php echo $_smarty_tpl->tpl_vars['tprz']->value['kaifashang'];?>
"> -->
    </li>
    <li class="li2">
        <p>谈判时间：<?php echo $_smarty_tpl->tpl_vars['tprz']->value['tanpantime'];?>
</p>
        <!-- <input type="text" class="tanpan_shijian ipt" readonly value="<?php echo $_smarty_tpl->tpl_vars['tprz']->value['tanpantime'];?>
"> -->
    </li>
    <li class="li2">
        <p>谈判优惠价格：<?php echo $_smarty_tpl->tpl_vars['tprz']->value['money'];?>
<?php if ($_smarty_tpl->tpl_vars['tprz']->value['dw']==0){?>元/平方米<?php }else{ ?>元/套<?php }?></p>
        <input type="number" class="tanpan_jiage ipt" readonly value="<?php echo $_smarty_tpl->tpl_vars['tprz']->value['money'];?>
">
    </li>
    <li class="li2" style="margin-top:20px;">
        <p>开团时间：<?php echo $_smarty_tpl->tpl_vars['tprz']->value['kaituantime'];?>
</p>
        <!-- <input type="text" class="kaituan_shijian ipt" readonly value="<?php echo $_smarty_tpl->tpl_vars['tprz']->value['kaituantime'];?>
"> -->
    </li>
    <li class="li2">
        <p>开团要求：<?php echo $_smarty_tpl->tpl_vars['tprz']->value['renshu'];?>
人</p>
        <!-- <input type="number" class="tanpan_yaoqiu ipt" style="width:20%" readonly value="<?php echo $_smarty_tpl->tpl_vars['tprz']->value['renshu'];?>
"><span>人</span> -->
    </li>
    <li class="li2">
        <p>本团参与：<?php echo $_smarty_tpl->tpl_vars['tuan']->value['total'];?>
人</p>
        <!-- <input type="number" class="tanpan_renshu ipt" readonly value="<?php echo $_smarty_tpl->tpl_vars['tuan']->value['total'];?>
"> -->
    </li>
    <li class="li2" style="margin-top:20px;">
        <p>谈判内容：</p>
    </li>
    <li style="height:auto;position: relative;" class="li2">
        <?php echo $_smarty_tpl->tpl_vars['tprz']->value['neirong'];?>

        <!-- <textarea  class="tanpan_nr"><?php echo $_smarty_tpl->tpl_vars['tprz']->value['neirong'];?>
</textarea> -->
    </li>
</ul>
<div class="btn_box">
    <button class="qr_btn" onclick="fabu()" tapmode='tap-active'>确定发布</button>
</div><?php }} ?>