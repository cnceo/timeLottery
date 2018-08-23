﻿<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<input type="hidden" value="<?=$this->user['username']?>" />
<head>
<meta content="IE=EmulateIE8" http-equiv="X-UA-Compatible" />
<meta name="renderer" content="ie-comp" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" >
<meta charset="utf-8"/>
<title>后台管理中心</title>
<link rel="stylesheet" href="/skin/admin/layout.css" type="text/css" />
<link type="text/css" rel="stylesheet" href="/skin/js/jqueryui/skin/smoothness/jquery-ui-1.8.23.custom.css" />
<!--[if IE]>
	<link rel="stylesheet" href="/skin/admin/ie.css" type="text/css" />
	<script src="/skin/js/html5.js"></script>
<![endif]-->
<script src="/skin/js/jquery-1.8.3.min.js"></script>                          
<script src="/skin/admin/onload.js"></script>
<script src="/skin/admin/wjevent.js"></script>
<script src="/skin/admin/function.js"></script>
<script src="/skin/js/Array.ext.js"></script>
<script src="/skin/js/jqueryui/jquery-ui-1.8.23.custom.min.js"></script>
<script src="/skin/js/jqueryui/i18n/jquery.ui.datepicker-zh-CN.js"></script>
<script src="/skin/js/jquery.messager.js"></script>
<script src="/skin/js/jquery.cookie.js"></script>
<link type="text/css" rel="stylesheet" href="/skin/js/jqueryui/jquery-ui-1.8.23.custom.css" />
<script type="text/javascript" src="/skin/js/jqueryui/jquery-ui-1.8.23.custom.min.js"></script>
<link rel="stylesheet" href="/skin/editor/themes/default/default.css" />
<script charset="utf-8" src="/skin/editor/kindeditor-min.js"></script>
<script charset="utf-8" src="/skin/editor/lang/zh_CN.js"></script>
<script>
			var editor;
			KindEditor.ready(function(K) {
				editor = K.create('#editor_1','#editor_2','#editor_3',{
					resizeType : 1,
					allowPreviewEmoticons : false,
					allowImageUpload : false,
					items : [
						'fontname', 'fontsize', '|', 'forecolor', 'hilitecolor', 'bold', 'italic', 'underline',
						'removeformat', '|', 'justifyleft', 'justifycenter', 'justifyright', 'insertorderedlist',
						'insertunorderedlist', '|', 'emoticons', 'image', 'link']
				});
			});
</script>
<script type="text/javascript">
$(function(){
	$('.quick_search input[name=username]')
	.focus(function(){
		if(this.value=='查找会员') this.value='';
	})
	.blur(function(){
		if(this.value=='') this.value='查找会员';
	})
	.keypress(function(e){
		if(e.keyCode==13) $(this).closest('form').submit();
	});
});
function searchUserSubmit(err,data){
	if(err){
		error(err);
	}else{
		$('#main').html(data);
	}
}
var TIP=true;
function boxBeforSend(){
	if(!this.boxid.value)  throw('数据有误');
	if(!this.title.value) throw('请输入主题');
	if(!this.content.value) throw('请输入内容');
}
function boxSend(err, data){
	if(err){
		error(err);
	}else{
		success('回复成功');
		$(this).dialog("destroy");
		reload();
	}
}
</script>
</head>
<body>
	<header id="header">
		<hgroup>
			<h1 class="site_title">后台系统</h1>
			<h2 class="section_title"><a class="tjgk bq load" href="system/settings">参数设置</a><a class="tjgk bq load" href="business/betLog">投注管理</a><a class="tjgk bq load" href="member/index">用户管理</a><a class="tjgk bq load" href="member/bank">银行管理</a><a class="tjgk bq load" href="member/loginLog">风控管理</a><a class="tjgk bq load" method="post" target="ajax" call="clearDataSuccess" title="即将清空程序缓存，是否继续！" dataType="json" href="/index.php/clear/rmfile">重置缓存</a>
            </h2>
            <div class="btn_view_site"><a href="/index.php/user/logout">安全退出系统</a></div>
		</hgroup>
	</header>
	
	<section id="secondary_bar">
		<div class="user">
			<p>管理员：<?=$this->user['username']?></p>
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a>快捷导航<strong></strong></a> <div class="breadcrumb_divider"></div> <span id="position"><a class="tjgk bq load" href="system/bank">收款管理</a>
		</div>
	</section>
	<aside id="sidebar" class="column">
		<form action="/index.php/member/listUser" class="quick_search" call="searchUserSubmit" dataType="html" target="ajax">
		  <input name="username" type="search" placeholder="查找会员" value="查找会员"/>
	    </form>
		<hr/>
		<h3>号码预设<a>展开</a></h3>
		<ul class="toggle" style="display:none;">
		<?php foreach($this->getRows("select id,title from {$this->prename}type where enable=1 and isDelete=0 and id!=1 and id!=3 and id!=6 and id!=9 and id!=10 and id!=12 and id!=15 and id!=16 and id!=34 and id!=20 and id!=7 and id!=60 and id!=78 and id!=79 and id!=80 order by sort") as $type){ ?>
			<li><a href="data/index2/<?=$type['id']?>" class="k_b_1 bq"><?=$type['title']?></a></li>
		<?php } ?>
		</ul>
		<h3>业务流水<a>展开</a></h3>
		<ul class="toggle" style="display:none;">
			<li><a class="bq yw_b_1" href="business/cash">提现请求</a></li>
			<li><a class="bq yw_b_2" href="business/cashLog">提现记录</a></li>
			<li><a class="bq yw_b_3" href="business/rechargeLog">充值记录</a></li>
			<li><a class="bq yw_b_4" href="business/betLog">普通投注</a></li>
			<li><a class="bq yw_b_7" href="business/coinLog">帐变明细</a></li>
		</ul>
		<h3>开奖数据<a>展开</a></h3>
		<ul class="toggle" style="display:none;">
		<?php foreach($this->getRows("select id,title from {$this->prename}type where enable=1 and isDelete=0 order by sort") as $type){ ?>
			<li><a href="data/index/<?=$type['id']?>" class="k_b_1 bq"><?=$type['title']?></a></li>
		<?php } ?>
		</ul>
        <h3>时间管理<a>展开</a></h3>
		<ul class="toggle" style="display:none;">
			<?php foreach($this->getRows("select id,title from {$this->prename}type where enable=1 and isDelete=0 order by sort") as $type){ ?>
			<li><a href="time/index/<?=$type['id']?>" class="k_b_1 bq"><?=$type['title']?></a></li>
			<?php } ?>
		</ul>
		<h3>数据统计<a>展开</a></h3>
		<ul class="toggle" style="display:none;">
			<li><a href="countData/index" class="s_b_1 bq current">统计概况</a></li>
			<li><a href="countData/betDate" class="s_b_2 bq">综合统计</a></li>
			<li><a href="kjdatas/tests" class="s_b_2 bq">开奖检测</a></li>
		</ul>
		<h3>用户管理<a>展开</a></h3>
		<ul class="toggle" style="display:none;">
			<li><a href="member/add" class="yh_b_1 bq">增加会员</a></li>
			<li><a href="member/index" class="yh_b_2 bq">用户列表</a></li>
            <li><a href="member/bank" class="yh_b_4 bq">银行信息</a></li>
            <li><a href="member/loginLog" class="yh_b_5 bq">登录日志</a></li>
            <li><a href="member/userCountSetting" class="yh_b_5 bq">用户限额设置</a></li>
            
		</ul>
		<h3>管理人员<a>展开</a></h3>
		<ul class="toggle" style="display:none;">
			<li><a href="manage/index" class="g_b_1 bq">管理员列表</a></li>
            <li><a href="manage/controlLog" class="g_b_3 bq">操作日志</a></li>
            <li><a href="manage/loginLog" class="g_b_4 bq">登录日志</a></li>
		</ul>
        <h3><span>佣金管理</span><a>展开</a></h3>
		<ul class="toggle" style="display:none;">
        	<!--li><a href="commission/conCommissionList" class="bq jf_b_2">消费佣金发放</a></li-->
        	<li><a href="commission/lossCommissionList" class="bq jf_b_2">亏损佣金发放</a></li>
		</ul>
		<h3><span>分红管理</span><a>展开</a></h3>
		<ul class="toggle" style="display:none;">
        	<li><a href="bonus/shareBonus" class="bq jf_b_2">分红发放</a></li>
        	<li><a href="bonus/bonusLog" class="bq jf_b_2">分红发放记录</a></li>
		</ul>
		<h3>系统设置<a>展开</a></h3>
		<ul class="toggle" style="display:none;">
			<li><a href="system/settings" class="bq t_b_4">系统设置</a></li>
			<li><a href="system/notice" class="bq t_b_3">公告中心</a></li>
			<li><a href="system/bank" class="bq t_b_5">收款设置</a></li>
			<!--li><a href="system/sysbanklist" class="bq t_b_5">银行管理</a></li-->
			<li><a href="system/type" class="bq t_b_8">彩种管理</a></li>
			<li><a href="system/played" class="bq t_b_9">玩法管理</a></li>
			<li><a href="lhc/rte/308" class="bq t_b_9">六合彩管理</a></li>
			<li><a href="member/level" class="yh_b_6 bq">等级设置</a></li>
			<!--li><a href="pays/index" class="bq jf_b_2">接口管理</a></li-->
		</ul>
		<h3><span>信箱管理</span><a>展开</a></h3>
		<?php
		    $sql="select count(id) from {$this->prename}message_receiver where to_uid=? and is_readed=0 and is_deleted=0";
			$num=$this->getValue($sql,$this->user['uid']);
		?>
		<ul class="toggle"  style="display:none;">
		    <li><a href="#" onclick="sysAddBox()" class="bq jf_b_2">发消息</a></li>
		    <li><a href="Box/receivebox" class="bq jf_b_2">收件箱</a>(<strong style="color:red"> <?=$num?> </strong>)</li>
        	<li><a href="Box/sendbox" class="bq jf_b_2">发件箱</a></li>
			<li><a href="Box/all" class="bq jf_b_1">整站发信记录</a></li>
		</ul>
		<h3><span>招商管理</span><a>展开</a></h3>
		<ul class="toggle"  style="display:none;">
        	<li><a href="About/daili" class="bq jf_b_2">代理申请记录</a></li>
		</ul>
		<h3><span>积分兑换</span><a>展开</a></h3>
		<ul class="toggle"  style="display:none;">
        	<li><a href="Score/goodsList" class="bq jf_b_2">兑换管理</a></li>
			<li><a href="Score/pointList" class="bq jf_b_1">兑换记录</a></li>
		</ul>
		<h3><span>投资理财</span><a>展开</a></h3>
		<ul class="toggle"  style="display:none;">
        	<li><a href="dzyh/dzyhsettings" class="bq jf_b_2">投资理财配置</a></li>
			<li><a href="dzyh/ckpointList" class="bq jf_b_1">存款管理</a></li>
			<li><a href="dzyh/tkpointList" class="bq jf_b_1">取款管理</a></li>
		</ul>
		<h3><span>砸蛋管理</span><a>展开</a></h3>
		<ul class="toggle"  style="display:none;">
        	<li><a href="dbqb/dbqbsettings" class="bq jf_b_2">砸蛋配置</a></li>
			<li><a href="dbqb/pointList" class="bq jf_b_1">砸蛋记录</a></li>
		</ul>
		<h3><span>转盘管理</span><a>展开</a></h3>
		<ul class="toggle"  style="display:none;">
        	<li><a href="Dzp/dzpsettings" class="bq jf_b_2">大转盘配置</a></li>
			<li><a href="Dzp/pointList" class="bq jf_b_1">中奖记录</a></li>
		</ul>
		<h3><span>充值活动</span><a>展开</a></h3>
		<ul class="toggle"  style="display:none;">
        	<li><a href="Event/index" class="bq jf_b_2">活动管理</a></li>
            <li><a href="Event/signList" class="bq jf_b_1">活动记录</a></li>
		</ul>
		<h3><span>佣金活动</span><a>展开</a></h3>
		<ul class="toggle"  style="display:none;">
        	<li><a href="yongjin/setyongjin" class="bq jf_b_2">活动管理</a></li>
			<li><a href="yongjin/yongjinlog" class="bq jf_b_2">领取记录</a></li>
		</ul>
		<h3><span>消费管理</span><a>展开</a></h3>
		<ul class="toggle"  style="display:none;">
        	<li><a href="vipxf/vipxiaofei" class="bq jf_b_2">活动管理</a></li>
			<li><a href="vipxf/vipxflog" class="bq jf_b_2">领取记录</a></li>
		</ul>	
		<h3>抽奖管理<a>展开</a></h3>
		<ul class="toggle" style="display:none;">
			<li><a href="choujiang/add_leavl" class="yh_b_1 bq">增加奖金区间</a></li>
			<li><a href="choujiang/leavl" class="yh_b_2 bq">奖金区间列表</a></li>
            <li><a href="choujiang/lucky" class="yh_b_4 bq">用户抽奖明细</a></li>
            
		</ul>
		<h3><span>卡密管理</span><a>展开</a></h3>
		<ul class="toggle"  style="display:none;">
        	<li><a href="card/index" class="s_b_2 bq">卡密列表</a></li>
			<li><a href="card/record" class="s_b_2 bq">兑换记录</a></li>
		</ul>	

		
		<ul class="toggle"></ul>

		<footer>
			<hr />
			<p><strong></strong></p>
		</footer>
	</aside><!-- end of sidebar -->

	
	
	
	
	
	
	
	
	
	
	<section id="message-tip"></section>
	<section id="main" class="column"><?php $this->display('count/index.php'); ?></section>
</body>
</html>
