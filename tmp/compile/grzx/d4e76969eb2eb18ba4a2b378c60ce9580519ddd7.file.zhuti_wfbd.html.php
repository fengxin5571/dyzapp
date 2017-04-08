<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 14:22:59
         compiled from ".\tpl\grzx\zhuti_wfbd.html" */ ?>
<?php /*%%SmartyHeaderCode:15266582c36ce58ea83-24000224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4e76969eb2eb18ba4a2b378c60ce9580519ddd7' => 
    array (
      0 => '.\\tpl\\grzx\\zhuti_wfbd.html',
      1 => 1486966377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15266582c36ce58ea83-24000224',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_582c36ce5cf803_45197820',
  'variables' => 
  array (
    'zhuti' => 0,
    'total' => 0,
    'user' => 0,
    'zhu' => 0,
    'im' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582c36ce5cf803_45197820')) {function content_582c36ce5cf803_45197820($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['zhuti']->value)>0){?>
<?php  $_smarty_tpl->tpl_vars['zhu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zhu']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zhuti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zhu']->key => $_smarty_tpl->tpl_vars['zhu']->value){
$_smarty_tpl->tpl_vars['zhu']->_loop = true;
?>
<input type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
' class='wfbd_total'/>
<li class="jdal_one">
    <div class="tx_img"><img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['touxiang'];?>
"></div>
    <div class="one_left">
        <p class="jdal_yhxx">
            <span class="user"><?php echo $_smarty_tpl->tpl_vars['user']->value['nicheng'];?>
</span>
            <span class="pl_num">评论<i class="pls"><?php echo $_smarty_tpl->tpl_vars['zhu']->value['total'];?>
</i></span>
        </p>
        <p class="jdal_time">
            <span><?php echo $_smarty_tpl->tpl_vars['zhu']->value['addtime'];?>
</span>
            <img src="../../image/img-qm/bianji.png" alt="" class="bianji_img" onclick="bianji(<?php echo $_smarty_tpl->tpl_vars['zhu']->value['id'];?>
)" tapmode='tap-active'>
            <img src="../../image/img-cll/del.png" alt="" class="del_img" onclick="shanchu(this,<?php echo $_smarty_tpl->tpl_vars['zhu']->value['id'];?>
)" tapmode='tap-active'>
        </p>
        <p class="tit" onclick="open_ztxq(<?php echo $_smarty_tpl->tpl_vars['zhu']->value['id'];?>
)" tapmode='tap-active'><?php echo $_smarty_tpl->tpl_vars['zhu']->value['biaoti'];?>
</p>
        <p class="jdal_nr" onclick="open_ztxq(<?php echo $_smarty_tpl->tpl_vars['zhu']->value['id'];?>
)" tapmode='tap-active'><?php echo $_smarty_tpl->tpl_vars['zhu']->value['neirong'];?>
</p>
		<?php if ($_smarty_tpl->tpl_vars['zhu']->value['tupian']!=''){?>
        <p class="img_box clearfix">
			<?php  $_smarty_tpl->tpl_vars['im'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['im']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zhu']->value['img']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['im']->key => $_smarty_tpl->tpl_vars['im']->value){
$_smarty_tpl->tpl_vars['im']->_loop = true;
?>
            <img src="<?php echo $_smarty_tpl->tpl_vars['im']->value;?>
">
			<?php } ?>
        </p>
		<?php }?>
    </div>
</li>
<?php } ?>
<?php }else{ ?>
<p class="wuxiaoxi">
	<img src="../../image/img-cll/wuxiaoxi.png">
	<span>总潜水还行？<br>出来冒个泡泡吧！</span>
</p>
<?php }?><?php }} ?>