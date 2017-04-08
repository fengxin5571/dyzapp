<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 15:41:07
         compiled from ".\tpl\faxian\tyq_list.html" */ ?>
<?php /*%%SmartyHeaderCode:2236958782eb6706cf6-17838152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37feaa4508cb03f9f0292e3fd24837a10630d8ab' => 
    array (
      0 => '.\\tpl\\faxian\\tyq_list.html',
      1 => 1486971016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2236958782eb6706cf6-17838152',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58782eb674b7a5_26775605',
  'variables' => 
  array (
    'tyq' => 0,
    'total' => 0,
    'row' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58782eb674b7a5_26775605')) {function content_58782eb674b7a5_26775605($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['tyq']->value)>0){?>
<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tyq']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" class="tyq_total">
<li class="fx_one">
    <div class="tx_img" onclick="open_biaoqian(<?php echo $_smarty_tpl->tpl_vars['row']->value['user']['id'];?>
)" tapmode='tap-active'><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['user']['touxiang'];?>
"></div>
    <div class="one_left" onclick="open_zhengwen(<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
)" tapmode='tap-active'>
        <p class="fx_yhxx">
            <span class="user"><?php echo $_smarty_tpl->tpl_vars['row']->value['user']['nicheng'];?>
</span>
            <span class="pl_num">评论<i class="pls"><?php echo $_smarty_tpl->tpl_vars['row']->value['total'];?>
</i></span>
        </p>
        <p class="fx_time">
            <span><?php echo $_smarty_tpl->tpl_vars['row']->value['addtime'];?>
</span>
        </p>
        <p class="tit"><?php echo $_smarty_tpl->tpl_vars['row']->value['biaoti'];?>
</p>
        <p class="fx_nr"><?php echo $_smarty_tpl->tpl_vars['row']->value['neirong'];?>
</p>
        <div class="lp_img_box clearfix">
			<?php if ($_smarty_tpl->tpl_vars['row']->value['tupian']!=''){?>
            <div class="lp_img_box_inner">
				<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['row']->value['tup']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
	<span>您的好友暂未发布<br>任何消息。</span>
</p>
<?php }?><?php }} ?>