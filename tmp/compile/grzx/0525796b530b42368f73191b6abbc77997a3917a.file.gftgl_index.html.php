<?php /* Smarty version Smarty-3.1.12, created on 2017-01-09 14:18:37
         compiled from ".\tpl\grzx\gftgl_index.html" */ ?>
<?php /*%%SmartyHeaderCode:254475872f917a99c38-61014778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0525796b530b42368f73191b6abbc77997a3917a' => 
    array (
      0 => '.\\tpl\\grzx\\gftgl_index.html',
      1 => 1483942716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '254475872f917a99c38-61014778',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5872f917b17a79_38626647',
  'variables' => 
  array (
    'tuan' => 0,
    'dianhua_qu' => 0,
    'dianhua_tel' => 0,
    'user' => 0,
    'img' => 0,
    'im' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5872f917b17a79_38626647')) {function content_5872f917b17a79_38626647($_smarty_tpl) {?><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['tuan']->value['status'];?>
" id="status">
<?php if ($_smarty_tpl->tpl_vars['tuan']->value['status']==2){?>
<p class="state"><span class="shenhe1">已通过初步审核，请完善下列资料</span></p>
<?php }elseif($_smarty_tpl->tpl_vars['tuan']->value['status']==1||$_smarty_tpl->tpl_vars['tuan']->value['status']==4){?>
<p class="state"><span class="shenhe2">正在审核中，请等待</span></p>
<?php }elseif($_smarty_tpl->tpl_vars['tuan']->value['status']==3){?>
<p class="state"><span class="shenhe1">已通过审核，即刻开启您的团主之路吧！</span></p>
<?php }elseif($_smarty_tpl->tpl_vars['tuan']->value['status']==5){?>
<p class="state state1"><span class="shenhe3">部分信息未通过，请完善相关信息！</span><span class="ckxq" onclick="chakan()">| 查看详情</span></p>
<div id="chakan_box">
	<div class="shadow" tapmode='tap-active' onclick="chakan_hide()"></div>
	<div class="wsxx_box">
		<p>须完善：<?php echo $_smarty_tpl->tpl_vars['tuan']->value['check_cont'];?>
</p>
	</div>
</div>
<?php }else{ ?>
<?php }?>
<ul>
    <li style="margin-top:10px;">
        <p>购房团名称 ：</p>
        <input type="text" class="gftmc" value="<?php echo $_smarty_tpl->tpl_vars['tuan']->value['tuan'];?>
" readonly>
    </li>
    <li>
        <p>项目详细地址 ：</p>
        <input type="text" class="xmdz" placeholder="输入后不可再次更改" value="<?php echo $_smarty_tpl->tpl_vars['tuan']->value['dizhi'];?>
" <?php if ($_smarty_tpl->tpl_vars['tuan']->value['status']==2||$_smarty_tpl->tpl_vars['tuan']->value['status']==5){?><?php }else{ ?>readonly<?php }?>>
    </li>
    <li class="mt10">
        <p>开发公司名称 ：</p>
        <input type="text" class="kfsmc" value="<?php echo $_smarty_tpl->tpl_vars['tuan']->value['kaifa'];?>
" <?php if ($_smarty_tpl->tpl_vars['tuan']->value['status']==2||$_smarty_tpl->tpl_vars['tuan']->value['status']==5){?><?php }else{ ?>readonly<?php }?>>
    </li>
    <li>
        <p>售楼部电话 ：</p>
        <input type="text" class="slbdh_qu" placeholder="请输入区号" style="width:50px;" value="<?php echo $_smarty_tpl->tpl_vars['dianhua_qu']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['tuan']->value['status']==2||$_smarty_tpl->tpl_vars['tuan']->value['status']==5){?><?php }else{ ?>readonly<?php }?>>
        <span>-</span>
        <input type="text" name="" class="slbdh_tel" placeholder="请输入固话号码" value="<?php echo $_smarty_tpl->tpl_vars['dianhua_tel']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['tuan']->value['status']==2||$_smarty_tpl->tpl_vars['tuan']->value['status']==5){?><?php }else{ ?>readonly<?php }?>>
    </li>
    <li>
        <p>用户联系电话 ：</p>
        <input type="text" class="yhlxdh" placeholder="15500000000" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['tel'];?>
" readonly>
    </li>
    <li class="mt10">
        <p>售楼均价 ：</p>
        <input type="text" class="slbjj" value="<?php echo $_smarty_tpl->tpl_vars['tuan']->value['junjia']*1;?>
" <?php if ($_smarty_tpl->tpl_vars['tuan']->value['status']==2||$_smarty_tpl->tpl_vars['tuan']->value['status']==5){?><?php }else{ ?>readonly<?php }?>>
        <span>元/平方米</span>
    </li>
    <li>
        <p>目标最低优惠 ：</p>
        <input type="text" class="mbzdyh" value="<?php echo $_smarty_tpl->tpl_vars['tuan']->value['jiage_min']*1;?>
" <?php if ($_smarty_tpl->tpl_vars['tuan']->value['status']==2||$_smarty_tpl->tpl_vars['tuan']->value['status']==5){?><?php }else{ ?>readonly<?php }?>>
        <span>元/套</span>
    </li>
    <li>
        <p>目标最高优惠 ：</p>
        <input type="text" class="mbzgyh" value="<?php echo $_smarty_tpl->tpl_vars['tuan']->value['jiage_max']*1;?>
" <?php if ($_smarty_tpl->tpl_vars['tuan']->value['status']==2||$_smarty_tpl->tpl_vars['tuan']->value['status']==5){?><?php }else{ ?>readonly<?php }?>>
        <span>元/套</span>
    </li>
    <li class="mt10">
        <p style="width:100%">团主宣言：
            <label><input type="radio" value="1" name="xy" checked onchange="xy(0)">自定义</label>
            <label><input type="radio" value="1" name="xy" onchange="xy(1)">模板1</label>
            <label><input type="radio" value="1" name="xy" onchange="xy(2)">模板2</label>
        </p>
    </li>
    <li style="height:auto;display: block">
        <textarea placeholder="请输入自定义团主宣言" class="tzxy" <?php if ($_smarty_tpl->tpl_vars['tuan']->value['status']==2||$_smarty_tpl->tpl_vars['tuan']->value['status']==3||$_smarty_tpl->tpl_vars['tuan']->value['status']==5){?><?php }else{ ?>readonly<?php }?>><?php echo $_smarty_tpl->tpl_vars['tuan']->value['tzxy'];?>
</textarea>
    </li>
    <li class="mt10">
        <p style="width:100%;position:relative;">楼盘相册上传：<span class="jishu"><i><?php echo count($_smarty_tpl->tpl_vars['img']->value);?>
</i>/5</span></p>
    </li>
    <li style="height:auto;display: block">
        <div class="lp_img_box clearfix">
            <div class="lp_img_box_inner">
				<?php if ($_smarty_tpl->tpl_vars['tuan']->value['tupian']==''){?>
				<?php }else{ ?>
				<?php  $_smarty_tpl->tpl_vars['im'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['im']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['img']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['im']->key => $_smarty_tpl->tpl_vars['im']->value){
$_smarty_tpl->tpl_vars['im']->_loop = true;
?>
                <div class="lp_img_one"><img src="<?php echo $_smarty_tpl->tpl_vars['im']->value;?>
" alt="" class="lp_one_img"><img src="../../image/img-qm/X.png" alt="" class="x_img" onclick="sctp(this)" tapmode="tap-active"></div>
				<?php } ?>
				<?php }?>
            </div>
			<?php if (count($_smarty_tpl->tpl_vars['img']->value)<5){?>
            <div class="add_one" onclick="sc_img()" tapmode="tap-active"><img src="../../image/img-qm/add1.png" class="add_img"></div>
			<?php }else{ ?>
			<div class="add_one" onclick="sc_img()" tapmode="tap-active" style="display:none;"><img src="../../image/img-qm/add1.png" class="add_img"></div>
			<?php }?>
        </div>
    </li>
</ul>
<?php if ($_smarty_tpl->tpl_vars['tuan']->value['status']==1||$_smarty_tpl->tpl_vars['tuan']->value['status']==4){?>
<?php }else{ ?>
<div style="padding:0 10px">
    <button class="qr_btn" onclick="qdtj()" tapmode="tap-active">确定提交</button>
</div>
<?php }?><?php }} ?>