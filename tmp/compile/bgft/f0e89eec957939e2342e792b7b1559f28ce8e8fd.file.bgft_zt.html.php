<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 15:16:01
         compiled from ".\tpl\bgft\bgft_zt.html" */ ?>
<?php /*%%SmartyHeaderCode:17495826cc52c99278-26066307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0e89eec957939e2342e792b7b1559f28ce8e8fd' => 
    array (
      0 => '.\\tpl\\bgft\\bgft_zt.html',
      1 => 1486970156,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17495826cc52c99278-26066307',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5826cc52ced146_64369356',
  'variables' => 
  array (
    'zt' => 0,
    'total' => 0,
    'zhu' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5826cc52ced146_64369356')) {function content_5826cc52ced146_64369356($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['zt']->value)>0){?>
<?php  $_smarty_tpl->tpl_vars['zhu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zhu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zt']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zhu']->key => $_smarty_tpl->tpl_vars['zhu']->value){
$_smarty_tpl->tpl_vars['zhu']->_loop = true;
?>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" class="zt_total">
<li class="fx_one">
    <div class="tx_img" onclick="open_biaoqian(<?php echo $_smarty_tpl->tpl_vars['zhu']->value['user']['id'];?>
)" tapmode='tap-active'><img src="<?php echo $_smarty_tpl->tpl_vars['zhu']->value['user']['touxiang'];?>
"></div>
    <div class="one_left" onclick="open_ztxq(<?php echo $_smarty_tpl->tpl_vars['zhu']->value['id'];?>
)" tapmode='tap-active'>
        <p class="fx_yhxx">
            <span class="user"><?php echo $_smarty_tpl->tpl_vars['zhu']->value['user']['nicheng'];?>
</span>
            <span class="pl_num">评论<i class="pls"><?php echo $_smarty_tpl->tpl_vars['zhu']->value['pl_total'];?>
</i></span>
        </p>
        <p class="fx_time">
            <span><?php echo $_smarty_tpl->tpl_vars['zhu']->value['addtime'];?>
</span>
        </p>
        <p class="tit"><?php echo $_smarty_tpl->tpl_vars['zhu']->value['biaoti'];?>
</p>
        <p class="fx_nr"><?php echo $_smarty_tpl->tpl_vars['zhu']->value['neirong'];?>
</p>
        <div class="lp_img_box clearfix">
		<?php if ($_smarty_tpl->tpl_vars['zhu']->value['tupian']!=''){?>
            <div class="lp_img_box_inner">
				<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zhu']->value['img']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value){
$_smarty_tpl->tpl_vars['img']->_loop = true;
?>
                <div class="lp_img_one"><img src="<?php echo $_smarty_tpl->tpl_vars['img']->value;?>
" alt="" class="lp_one_img"></div>
				<?php } ?>
            </div>
		<?php }?>
        </div>
    </div>
</li>
<?php } ?>
<?php }else{ ?>
<p class="wuxiaoxi">
	<img src="../../image/img-cll/wuxiaoxi.png">
	<span>这个团太冷清了，<br>还没人发布八卦消息。</span>
</p>
<?php }?><?php }} ?>