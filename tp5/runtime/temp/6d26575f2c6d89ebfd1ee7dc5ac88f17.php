<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"C:\wamp\www\TPC-S\tp5\public/../application/order\view\index\task.html";i:1508392045;s:72:"C:\wamp\www\TPC-S\tp5\public/../application/order\view\public\order.html";i:1508465007;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>标题</title> 
	<link href="__CSS__/comm.css" rel="stylesheet" type="text/css" />
	<link href="__CSS__/center.css" rel="stylesheet" type="text/css" />
	<link href="__CSS__/datepicker.css" rel="stylesheet" type="text/css" />
</head>
<body>
	
	<div class="mainnav">
		<div class="wrap">
			<div id="t_scroll" class="fl l_side t_scroll">
				<a href="http://daoju.qq.com/act/djc/a20160317appxz/index.html" target="_blank" title="手机版"><s class="i_sp i_mobile"></s>手机版</a><i>|</i>
				<a href="http://www.kuyoo.com/" target="_blank" title="游戏币交易">游戏币交易</a><i>|</i>
				<a href="http://pay.qq.com/" target="_blank" title="Q币充值">Q币充值</a><i>|</i>
				<a href="http://xinyue.qq.com/act/pc/a20160530xydjc/index.html?ADTAG=xinyue.daojutoubu" target="_blank" title="心悦游戏家">心悦游戏家</a>
			</div>
			<div class="fr r_side">
				<div class="game game_hide" onmouseover="this.className='game game_show'" onmouseout="this.className='game game_hide'">
					<a class="i_sp game_menu" href="javascript:;" id="game_menu" title="游戏导航">游戏导航</a>
					<iframe scrolling="no" frameborder="0" id="game_area_list" src="http://daoju.qq.com/time/big_mall/tpl/game_area.htm?v=20131108" allowtransparency="true" class="game_pop"></iframe>
				</div><i>|</i>
				<a href="/mall/help/help_daoju.shtml?ADTAG=cop.innercop.DJ.BIG.TOP.DBDH.help" target="_blank" title="帮助中心">帮助中心</a><i>|</i>
				<div id="a_connect" class="fr a_center">
					<a href="http://daoju.gamebbs.qq.com/forum.php?ADTAG=cop.innercop.DJ.BIG.TOP.YMDH.LT" target="_blank" title="官方论坛" class="a_link">官方论坛<s class="i_sp i_centerdown"></s></a>
					<div class="center_list">
						<a class="active" href="http://daoju.gamebbs.qq.com/forum.php?ADTAG=cop.innercop.DJ.BIG.TOP.YMDH.LT" target="_blank" title="官方论坛">官方论坛<s class="i_sp i_centerup"></s></a>
						<a href="http://t.qq.com/daojucheng?ADTAG=cop.innercop.DJ.BIG.TOP.DBDH.WB" target="_blank" title="官方微博">官方微博</a>
					</div>
				</div><i>|</i>
				<div id="a_center" class="fr" style="position:relative;width: 48px;">
					<a href="/mall/center.shtml?ADTAG=cop.innercop.DJ.BIG.TOP.DBDH.GRZX" target="_blank" title="个人中心" class="a_link">个人中心</a>
					<div id="sp_news_num" style="display:none;background-color:red; position: absolute;left:48px;top:4px;height:5px;width:5px;-moz-border-radius:50px;border-radius:50%;-webkit-border-radius:50px;overflow:hidden;">0</div>
				</div><i>|</i>
				<a href="/mall/trade2.shtml" target="_blank" title="我的订单">我的订单</a><i>|</i>
				<div class="login fr">
					<div id="unlogin">
						您还未登录，请<a title="登录" href="javascript:LoginManager.login();">登录</a>
					</div>
					<div id="logined" style="display:none">
						<p>
							欢迎你，<a title="个人中心" class="newpercenter" href="/mall/center.shtml"><span id="login_nickname_span"></span></a>&nbsp;&nbsp;&nbsp;<a title="退出" href="javascript:LoginManager.logout();">退出</a>
						</p>

						<div class="loginhover" style="display:none">
							<p id="header_uin" class="qqnum"></p>
							<div class="persbox">
								<div class="fl usrimg">
									<img id="header_face_img" src="" width="62" height="62" alt="头像">
								</div>
								<div class="fl pinfor">
									<p>
										<b id="header_nick"></b>
										<span class="bean-num" title="聚豆"><i class="bean new-acticon"></i><span id="header_judou"></span></span>
									</p>
									<p class="gthbox">
										<a href="javascript:;">
											<span class="xinyuelevel" id="header_growth_level"></span>
											<span id="header_growth_level_text"></span>
										</a>
										<a class="barbox">
											<span id="header_valuebar" class="svaluebar"></span>
											<span id="header_svover" class="svover" style=""></span>
											<span id="header_gthbar" class="gthbar-num"></span>
										</a>                        
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--<script src="__JS__/hotwords_1.js" type="text/javascript"></script>-->
	<div class="search">
		<div class="wrap clearfix">
			<a href="/mall" class="bg_sp logo fl"></a>
			<div class="s_bar fl">
				<div class="s_text fl">
					<div id="s_menu" class="s_menu fl">
						<a class="all noline" href="#"><s class="i_sp"></s><span id="cur_game">选择游戏</span></a>
						<div class="choose_sub" id="js_wrapper">
						</div>

					</div>
					<input type="text" value="请选择游戏搜索道具" onfocus="this.value=='请选择游戏搜索道具' && (this.value='')"
					onblur="this.value=='' && (this.value='请选择游戏搜索道具')" id="search_txt"/>
				</div>
				<button class="b_sp btn" id="search_btn">搜索</button>
				<div class="words"><p id="word_wrapper">
				<!--
			<script>
				if(typeof(dj_v3_hotwords_1)!="undefined"){
					var _min = Math.min(dj_v3_hotwords_1.list.length,3);
					for(var i=0;i<_min;i++){
						document.write('<a href="#" biz="'+dj_v3_hotwords_1.list[i]['sBizCode']+'" title="'+dj_v3_hotwords_1.list[i]['sKeyword']+'">'+dj_v3_hotwords_1.list[i]['sKeyword']+'</a>');
					}
				}
			</script>
		-->
	</p></div>
</div>
<div class="bg_sp wx fr bg_znq">
	<a style="position:absolute;top:0;left:0;width:129px;height:108px;z-index:32;display:block;" href="http://daoju.qq.com/act/djc/a20160317appxz/index.html"></a>
            <!--<div id="a_ewm" class="ewm">
                <a href="javascript:;" title="掌上道聚城"></a>
                <span class="bg_sp" style="display: none;"></span>
            </div>
            <p>我在道聚城等你</p>
        -->
    </div>
</div>
</div>
<div class="nav">
	<div class="wrap clearfix">
		<div id="all_game" class="all_game fl">
			<a class="show_game" href="javascript:;" title="所有游戏分类"><s class="i_sp i_game_down"></s><p>所有游戏分类</p></a>
			<div class="box">
				<dl class="top"><dt><s class="i_sp i_game"></s>所有游戏分类</dt></dl>
				<dl class="bot">
					<dt><s class="i_sp i_mobilegame"></s>热门游戏<i class="i_sp"></i></dt>
					<dd class="col_2">
						<div class="inner clearfix" style="width:260px">
							<div class="dev" style="width:125px">
								<a href="http://daoju.qq.com/cos">英魂之刃</a>
								<a href="http://daoju.qq.com/zzlt">战争雷霆</a>
								<a href="http://daoju.qq.com/lol">英雄联盟</a>
								<a href="http://daoju.qq.com/cf">穿越火线</a>
								<a style="width:110px" href="http://daoju.qq.com/mho">怪物猎人OL</a>
								<a href="http://daoju.qq.com/codol">使命召唤</a>
								<a href="http://daoju.qq.com/age">上古世纪</a>
								<a href="http://daoju.qq.com/wuxia">天涯明月刀</a>
								<a href="http://daoju.qq.com/fifa">FIFA&nbsp;Online3</a>
							</div>
							<div class="dev" style="width:125px">
								<a href="http://daoju.qq.com/bns">剑灵</a>
								<a href="http://daoju.qq.com/nz">逆战</a>
								<a href="http://daoju.qq.com/speed">QQ飞车</a>
								<a href="http://daoju.qq.com/yl">御龙在天</a>
								<a href="http://daoju.qq.com/yljd" style="width:100px;">御龙在天经典版</a>
								<a href="http://daoju.qq.com/bydr">猎鱼达人3D</a>
							</div>
						</div>
					</dd>
				</dl>
				<dl class="bot">
					<dt><s class="i_sp i_rpggame"></s>角色扮演<i class="i_sp"></i></dt>
					<dd class="col_2" style="width:380px;">
						<div class="inner clearfix">
							<div class="dev" style="width:125px">
								<a style="width:110px" href="http://daoju.qq.com/mho">怪物猎人OL</a>
								<a href="http://daoju.qq.com/age">上古世纪</a>
								<a href="http://daoju.qq.com/wuxia">天涯明月刀</a>
								<a href="http://daoju.qq.com/bns">剑灵</a>
								<a href="http://daoju.qq.com/dnf">地下城与勇士</a>
								<a href="http://daoju.qq.com/jf">疾风之刃</a>
								<a href="http://daoju.qq.com/sg">QQ三国</a>
								<a href="http://daoju.qq.com/xx">寻仙</a>
								<a href="http://daoju.qq.com/dzs">斗战神</a>
							</div>
							<div class="dev">
								<a href="http://daoju.qq.com/xy">轩辕传奇</a>
								<a href="http://daoju.qq.com/yl">御龙在天</a>
								<a href="http://daoju.qq.com/yljd" style="width:100px;">御龙在天经典版</a>
								<a href="http://daoju.qq.com/ffo">自由幻想</a>
								<a href="http://daoju.qq.com/tiantang">天堂</a>
								<a href="http://daoju.qq.com/xxz">QQ仙侠传</a>
								<a href="http://daoju.qq.com/tiantang2">天堂2</a>
								<a href="http://daoju.qq.com/dj2">刀剑2</a>
								<a href="http://daoju.qq.com/hxsj">幻想世界</a>
							</div>
							<div class="dev">
								<a href="http://daoju.qq.com/fo">QQ幻想</a>
								<a href="http://daoju.qq.com/h2">QQ仙灵</a>
							</div>
						</div>
					</dd>
				</dl>
				<dl class="bot">
					<dt><s class="i_sp i_tournament"></s>竞技游戏<i class="i_sp"></i></dt>
					<dd class="col_2">
						<div class="inner clearfix">
							<div class="dev">
								<a href="http://daoju.qq.com/zzlt">战争雷霆</a>
								<a href="http://daoju.qq.com/lol">英雄联盟</a>
								<a href="http://daoju.qq.com/cf">穿越火线</a>
								<a href="http://daoju.qq.com/codol">使命召唤</a>
								<a href="http://daoju.qq.com/nz">逆战</a>
								<a href="http://daoju.qq.com/nba2k">NBA2KOL</a>
								<a href="http://daoju.qq.com/ava">战地之王</a>
								<a href="http://daoju.qq.com/tps">枪神纪</a>
							</div>
							<div class="dev">
								<a href="http://daoju.qq.com/fifa">FIFA&nbsp;Online3</a>
							</div>
						</div>
					</dd>
				</dl>
				<dl class="bot">
					<dt><s class="i_sp i_leisure"></s>休闲游戏<i class="i_sp"></i></dt>
					<dd>
						<div class="inner clearfix">
							<div class="dev">
								<a href="http://daoju.qq.com/x5">QQ炫舞</a>
								<a href="http://daoju.qq.com/x52">炫舞时代</a>
								<a href="http://daoju.qq.com/r2">QQ音速</a>
								<a href="http://daoju.qq.com/speed">QQ飞车</a>
							</div>
						</div>
					</dd>
				</dl>
				<dl class="bot">
					<dt><s class="i_sp i_webgame"></s>网页游戏<i class="i_sp"></i></dt>
					<dd>
						<div class="inner clearfix">
							<div class="dev">
								<a href="http://daoju.qq.com/ye">夜店之王</a>
								<a href="http://daoju.qq.com/bl">部落守卫战</a>
								<a href="http://daoju.qq.com/fight">Q宠大乐斗</a>
								<a href="http://daoju.qq.com/zg">烽火战国</a>
								<a href="http://daoju.qq.com/7">七雄争霸</a>
								<a style="width:160px" href="http://daoju.qq.com/hyol">火影忍者OL</a>
								<a href="http://daoju.qq.com/cos">英魂之刃</a>
								<a href="http://daoju.qq.com/bydr">猎鱼达人3D</a>
							</div>
						</div>
					</dd>
				</dl>
			</div>
		</div>
		<ul class="fl clearfix" id="navBtns">
			<li><a href="/mall/index.shtml?ADTAG=cop.innercop.DJ.BIG.TOP.YMDH.SY" title="首页">首页</a></li>
			<li>
				<a href="/mall/actcenter.shtml?ADTAG=cop.innercop.DJ.BIG.TOP.YMDH.HDZX" title="活动中心">活动中心</a>
				<div class="nav-popup-box">
					<a href="http://daoju.qq.com/mall/shangou.shtml?ADTAG=cop.innercop.DJ.BIG.TOP.YMDH.DJMS" title="闪购专区">闪购专区</a>
					<a href="http://daoju.qq.com/mall/tao.shtml?ADTAG=cop.innercop.DJ.BIG.TOP.YMDH.TBB" title="淘宝贝">淘宝贝</a>
				</div>
			</li>
			<li>
				<a href="http://mall.qq.com/index.shtml?ADTAG=jcp.pc.djcgw.naventr" title="聚诚品" target="_blank">聚诚品</a>
				<div id="sp_news_num" style="position:absolute;left:99px;top:21px; height:9px; width:20px;overflow:hidden;background:url(images/newtips.png) no-repeat;text-indent:-9999em;">new</div>
			</li>
			<li>
				<a href="http://daoju.qq.com/mall/mgc/index.shtml?ADTAG=cop.innercop.DJ.BIG.TOP.YMDH.SYZX" title="手游中心">手游中心</a>
			</li>
			<li id="navJuDou">
				<a href="http://daoju.qq.com/mall/judou.shtml" title="聚豆商城">聚豆商城</a>
				<div class="nav-popup-box" style="display:none;z-index:100;">
					<a href="http://daoju.qq.com/mall/judou.shtml" title="聚豆抽奖">聚豆抽奖</a>
					<a href="http://daoju.qq.com/mall/judou.shtml" title="聚豆兑换">聚豆兑换</a>
				</div>
			</li>
			<li><a href="/mall/center.shtml?ADTAG=cop.innercop.DJ.BIG.TOP.YMDH.GRZX" title="个人中心">个人中心</a></li>
		</ul>
		<div class="fr cart" onmouseover="this.className='fr cart cart_show'" onmouseout="this.className='fr cart'" id="mycart">
			<a class="comm_btn b_cart"><i id="cartNum">0</i><s class="i_sp"></s>购物车</a>
			<div class="cart_box">
				<table width="100%">
					<thead>
						<tr>
							<th>游戏</th>
							<th class="tal">道具名</th>
							<th>单价</th>
							<th>数量</th>
							<th>操作</th>
						</tr>
					</thead>
					<tbody id="cart_body"></tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="bread wrap"><a href="/mall" title="道聚城">道聚城</a>&gt;<b>个人中心</b></div>

<div class="wrap clearfix">
	
	<div class="fl w230 mr10">
		<!--个人中心导航-->
		<div class="comm_bd center_nav" id="center_nav">
			<dl>
				<dd><a href="/order" title="个人中心首页"><s class="i_sp i_center"></s>个人中心首页</a></dd>
				<dd><a href="/order/index/myprivilage" title="我的特权"><s class="i_sp i_privilege"></s>我的特权</a></dd>
				<dd><a href="/order/index/task" title="我的任务"><s class="i_sp i_task"></s>我的任务</a></dd>
				<dd><a href="/order/index/trade" title="我的订单"><s class="i_sp i_trade"></s>我的订单</a></dd>
				<dd><a href="/order/index/actual_trade" title="我的周边订单"><s class="i_sp i_reltrade"></s>我的周边订单</a></dd>
				<dd><a href="/order/index/myaddress" title="我的收货地址"><s class="i_sp i_address"></s>我的收货地址</a></dd>
				<dd><a href="/order/index/ticket" title="我的购物点"><s class="i_sp i_ticket"></s>我的购物点</a></dd>
				<dd><a href="/order/index/coupon" title="我的优惠券"><s class="i_sp i_coupon"></s>我的优惠券</a></dd>
				<dd><a href="/order/index/coin" title="我的聚豆"><s class="i_sp i_coin"></s>我的聚豆</a></dd>
				<dd><a href="/order/index/message" title="我的消息"><s class="i_sp i_message"></s>我的消息</a></dd>
				<dd><a href="/order/index/attention" title="我的关注"><s class="i_sp i_attention"></s>我的关注</a></dd>
				<dd><a href="/order/index/prop" title="我的功能性道具"><s class="i_sp i_prop"></s>我的功能性道具</a></dd>
				<dd><a href="/order/index/charm" title="领取魅力值"><s class="i_sp i_charm"></s>领取魅力值</a></dd>
				<!-- <dd><a href="auction.shtml" title="我的拍卖道具"><s class="i_sp i_auction"></s>我的拍卖道具</a></dd> -->
				<dd><a href="/order/index/myticket" title="我的票务"><s class="i_sp i_myticket"></s>我的票务</a></dd>
			</dl>
		</div>
	</div>
	
	
	<!DOCTYPE html>
<html>
<head>
	<title>腾讯游戏道聚城-集道具聚欢乐</title>
</head>
<body>
	<div class="fl w950" data-onload="initCenter">
		<div id="userInfoCon" class="clearfix comm_bd mb10 center_info">
			<div class="loading" style="margin-bottom:10px;"><span class="loadmsg">loading...</span></div>
		</div>
		<!-- 我的任务 -->
		<div class="usertask">
			<div class="mb10 clearfix center_box">
				<div class="center_tt">我的任务<span class="line"><s class="l_5"></s></span></div>
				<div class="comm_bd tab_task">
					<a id="btn_task_uncomplete" href="javascript:;" class="p_task_spr p_task_not_over">未完成任务</a>
					<div id="blk_task_tab" class="clearfix center_tab"></div>
					<div class="tab_task_cont dis" id="blk_task_list">
						<div class="loading" style="margin-bottom:10px;"><span class="loadmsg">loading...</span></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="myTask_mask" id="mask_popup" style="width: 100%;height: 100%;z-index: 999;position: fixed; top: 0; left: 0;background: #000;opacity: .6;filter: alpha(opacity=60);display: none;"></div>
	<div id="blk_popup" style="display: none; visibility: visible; position: fixed; z-index: 1000; left: 50%; top: 35%; margin-top: -165px; margin-left: -255px;" role="dialog" tabindex="-1"></div>
</body>
</html>
	
</div>

<div class="mask" id="mask"></div>
<div class="foot_area">
	<div class="bx_qa wrap clearfix">
		<div class="bx_qa_t1">
			<h4 class="bx_qa_title"><s class="i_sp i_new"></s>新手上路</h4>
			<ul class="bx_qa_ul c">
				<li><a title="什么是道聚城" target="_blank" class="btn_c" href="/mall/help/help_daoju.shtml">什么是道聚城</a></li>
				<li><a title="如何购买道具" target="_blank" class="btn_c" href="/mall/help/help_buy.shtml">如何购买</a></li>
				<li><a title="如何赠送道具" target="_blank" class="btn_c" href="/mall/help/help_send.shtml">如何赠送</a></li>
				<li><a title="如何获取聚豆" target="_blank" class="btn_c" href="/mall/help/help_judou.shtml">如何获取聚豆</a></li>
			</ul>
		</div>
		<div class="bx_qa_t1">
			<h4 class="bx_qa_title"><s class="i_sp i_qa"></s>常见问题</h4>
			<ul class="bx_qa_ul c">
				<li><a title="道具发货时间" target="_blank" class="btn_c" href="/mall/help/help_provide.shtml">发货时间</a></li>
				<li><a title="道具如何领取" target="_blank" class="btn_c" href="/mall/help/help_receive.shtml">如何领取</a></li>
				<li><a title="道具补发规则" target="_blank" class="btn_c" href="/mall/help/help_reissue.shtml">补发规则</a></li>
				<li><a title="Vip价定义" target="_blank" class="btn_c" href="/mall/help/help_vip.shtml">Vip价定义</a></li>
				<li><a title="道具状态定义" target="_blank" class="btn_c" href="/mall/help/help_status.shtml">道具状态定义</a></li>
			</ul>
		</div>
		<div class="bx_qa_t1">
			<h4 class="bx_qa_title"><s class="i_sp i_pay"></s>支付方式</h4>
			<ul class="bx_qa_ul c">
				<li><a title="支付方式" target="_blank" class="btn_c" href="/mall/help/help_payment.shtml">支付方式</a></li>
				<li><a title="购物点支付" target="_blank" class="btn_c" href="/mall/help/help_ticket.shtml">购物点支付</a></li>
				<li><a title="如何充值" target="_blank" class="btn_c" href="/mall/help/help_recharge.shtml">如何充值</a></li>
			</ul>
		</div>
		<div class="bx_qa_t1 bx_qa_last">
			<h4 class="bx_qa_title"><s class="i_sp i_kf"></s>腾讯在线客服</h4>
			<div class="kf_box"><a class="b_sp" target="_blank" title="腾讯在线客服" href="http://crm2.qq.com/page/portalpage/wpa.php?uin=40012345&amp;f=1&amp;ty=1&amp;ap="></a></div>
		</div>
	</div>
	<div class="wrap">
		<script type="text/javascript" src="__JS__/foot.js"></script>
	</div>
</div>
<div class="fixednav">
	<a href="#top"><i class="bg_sp btn_top"></i>返回顶部</a>
	<a target="_blank" href="http://crm2.qq.com/page/portalpage/wpa.php?uin=40012345&f=1&ty=1&ap=">反馈</a>
</div>
<!--tips提示-->
<div id="lbbox" class="lbbox">
	<a title="关闭" class="gbbtn" id="gbbtn" href="#">x</a>
	<div id="tips_wrapper" class="box1">
	</div>
</div>
<!--tips提示模板-->
<script type="text/html" id="tips1">
<input type="hidden" name="msgid" id="msgid" value="${msgid}"/>
<div class="lhead">
<h2>${headertitle}</h2>
</div>
<div class="webox">
<img width="101" height="101" src="picture/a3d30ac7ba124ffdb25bc4e8aee0bd99.gif" />
<div class="txt">
<h6 class="tac"><a href="$<?php echo url("","",true,false);?>" target="_blank">
${title}
</h6>
</div>
</div>
<a title="立即参加" class="comm_btn ljbtn" href="$<?php echo url("","",true,false);?>" id="tip_access_btn" target="_blank">立即参加</a>
</script>

<!--<script type="text/javascript" src="__JS__/f130f641355b449ab46c076d5fe37303.js" charset="UTF-8"></script>-->
<script src="__JS__/milo.js" type="text/javascript"></script>
<script>
milo.ready(function(){
	need(['daoju.base','daoju.header','daoju.plugin'],function(base,header,plugin){
		header.run();
		base.run("center");
		plugin.tcssPing();
	});
});
</script>

</body>
</html>