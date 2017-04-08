<?php /* Smarty version Smarty-3.1.12, created on 2016-11-23 11:01:46
         compiled from ".\tpl\zygw\smrz.html" */ ?>
<?php /*%%SmartyHeaderCode:313035832538983fe08-10881737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8d080770956889462ef02be459785204a37de7d' => 
    array (
      0 => '.\\tpl\\zygw\\smrz.html',
      1 => 1479868768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '313035832538983fe08-10881737',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5832538987cea0_43409584',
  'variables' => 
  array (
    'zygw' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5832538987cea0_43409584')) {function content_5832538987cea0_43409584($_smarty_tpl) {?><ul>  
    <li style="margin-top:10px;">
    真实姓名：
        <input type="text" placeholder="" class="name" value="<?php echo $_smarty_tpl->tpl_vars['zygw']->value['xingming'];?>
" placeholder="请填写真实信息，提交后不可更改">
        <span style="float:right"><?php if ($_smarty_tpl->tpl_vars['zygw']->value['shenhe']==1){?>正在审核<?php }elseif($_smarty_tpl->tpl_vars['zygw']->value['shenhe']==2){?>已认证<?php }?></span>
    </li>
    <li style="margin-top:10px;">性别：
    	<?php if ($_smarty_tpl->tpl_vars['zygw']->value['shenhe']==0){?>
        <label><input type="radio" class="xb" value="0">保密</label>
        <label><input type="radio" class="xb" value="1">男</label>
        <label><input type="radio" class="xb" value="2">女</label>
    	<?php }else{ ?>
    	<?php if ($_smarty_tpl->tpl_vars['zygw']->value['xingbie']==0){?>保密<?php }elseif($_smarty_tpl->tpl_vars['zygw']->value['xingbie']==1){?>男<?php }elseif($_smarty_tpl->tpl_vars['zygw']->value['xingbie']==2){?>女<?php }?>
    	<?php }?>
    </li>
    <li style="margin-top:10px;height:auto">
    工作证上传：<span style="float:right"><?php if ($_smarty_tpl->tpl_vars['zygw']->value['shenhe']==1){?>正在审核<?php }elseif($_smarty_tpl->tpl_vars['zygw']->value['shenhe']==2){?>已认证<?php }?></span>
        <div class="lp_img_box1">
            <div class="lp_img_one_big">
				<?php if ($_smarty_tpl->tpl_vars['zygw']->value['gongzuozheng']==''){?><?php }else{ ?>
                <div class="lp_img_one">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['zygw']->value['gongzuozheng'];?>
" alt="" class="lp_one_img lp_one_img_gzz">
                    <img src="../../image/img-qm/X.png" alt="" class="x_img" onclick="sctp(this)" tapmode='tap-active'>
                </div>
				<?php }?>
            </div>
            <div class="add_one" onclick="sc_img1()" tapmode='tap-active'>
                <img src="../../image/img-qm/add1.png" alt="" class="add_img">
            </div>    
        </div>
    </li>
    <li style="margin-top:10px;height:auto">
    身份证上传：<span style="float:right"><?php if ($_smarty_tpl->tpl_vars['zygw']->value['shenhe']==1){?>正在审核<?php }elseif($_smarty_tpl->tpl_vars['zygw']->value['shenhe']==2){?>已认证<?php }?></span>
        <div class="lp_img_box2">
            <div class="lp_img_one_big">
			<?php if ($_smarty_tpl->tpl_vars['zygw']->value['idcard']==''){?><?php }else{ ?>
                <div class="lp_img_one">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['zygw']->value['idcard'];?>
" alt="" class="lp_one_img lp_one_img_sfz">
                    <img src="../../image/img-qm/X.png" alt="" class="x_img" onclick="sctp(this)" tapmode='tap-active'>
                </div>
			<?php }?>
            </div>
            <div class="add_one" onclick="sc_img2()" tapmode='tap-active'>
                <img src="../../image/img-qm/add1.png" alt="" class="add_img">
            </div>
        </div>
    </li>
</ul>
<?php if ($_smarty_tpl->tpl_vars['zygw']->value['shenhe']==0){?>
<div style="padding:0 10px">
    <button class="qr_btn" onclick="queren()" tapmode='tap-active'>保存</button>
</div>
<?php }?><?php }} ?>