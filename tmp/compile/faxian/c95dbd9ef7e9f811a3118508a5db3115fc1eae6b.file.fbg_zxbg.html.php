<?php /* Smarty version Smarty-3.1.12, created on 2017-02-13 15:42:53
         compiled from ".\tpl\faxian\fbg_zxbg.html" */ ?>
<?php /*%%SmartyHeaderCode:7381587893f2e041c1-72852310%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c95dbd9ef7e9f811a3118508a5db3115fc1eae6b' => 
    array (
      0 => '.\\tpl\\faxian\\fbg_zxbg.html',
      1 => 1486970687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7381587893f2e041c1-72852310',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_587893f2e50662_86223914',
  'variables' => 
  array (
    'zhuti' => 0,
    'total' => 0,
    'zt' => 0,
    'img' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587893f2e50662_86223914')) {function content_587893f2e50662_86223914($_smarty_tpl) {?><?php if (count($_smarty_tpl->tpl_vars['zhuti']->value)>0){?>
<?php  $_smarty_tpl->tpl_vars['zt'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['zt']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zhuti']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['zt']->key => $_smarty_tpl->tpl_vars['zt']->value){
$_smarty_tpl->tpl_vars['zt']->_loop = true;
?>
<input type='hidden' value='<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
' class='zxbg_total'/>
<li class="fx_one">
    <div class="tx_img" onclick="open_biaoqian(<?php echo $_smarty_tpl->tpl_vars['zt']->value['user']['id'];?>
)" tapmode='tap-active'><img src="<?php echo $_smarty_tpl->tpl_vars['zt']->value['user']['touxiang'];?>
"></div>
    <div class="one_left" onclick="open_zhengwen(<?php echo $_smarty_tpl->tpl_vars['zt']->value['id'];?>
)" tapmode='tap-active'>
        <p class="fx_yhxx">
            <span class="user"><?php echo $_smarty_tpl->tpl_vars['zt']->value['user']['nicheng'];?>
</span>
            <span class="pl_num">评论<i class="pls"><?php echo $_smarty_tpl->tpl_vars['zt']->value['total'];?>
</i></span>
        </p>
        <p class="fx_time">
            <span><?php echo $_smarty_tpl->tpl_vars['zt']->value['addtime'];?>
</span>
        </p>
        <p class="tit"><?php echo $_smarty_tpl->tpl_vars['zt']->value['biaoti'];?>
</p>
        <p class="fx_nr"><?php echo $_smarty_tpl->tpl_vars['zt']->value['neirong'];?>
</p>
        <div class="lp_img_box clearfix">
			<?php if ($_smarty_tpl->tpl_vars['zt']->value['tupian']!=''){?>
            <div class="lp_img_box_inner">
				<?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zt']->value['tup']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
	<span>我的天哪，<br>怎么白茫茫一片？</span>
</p>
<?php }?><?php }} ?>