	var hz6d_guest_id = $53.getCookie('53gid2');

	var hz6d_cus_web_msg_gids = "";

	function hz6d_cus_web_msg_open(){
		var openurl = "https://www6.53kf.com/webCompany.php?arg=10007377&style=1&kflist=off&kf=public%40atguigu.com%2Cliulei%40atguigu.com%2Cliumingyue%40atguigu.com%2Cinfo%40atguigu.com%2Cvideo%40atguigu.com%2C3069368606%40qq.com%2Ctingting%40atguigu.com%2Cwangya%40atguigu.com%2Czhuchangqing%40atguigu.com%2Cwanggang%40atguigu.com%2Cmary%40atguigu.com&zdkf_type=1&lnk_overflow=0&language=zh-cn&charset=gbk&username=&userinfo=&introurl=&lyurl=&lytype=0&copartner=&referer=http%3A%2F%2Fwww.atguigu.com%2Fbigdata%2F&keyword=http%3A%2F%2Fwww.atguigu.com%2F&brief=&logo=&question=&uid=22bdfd330ef010ae2173b1f01cea06da";
		try{
			window.open(openurl,"_blank","height=473,width=703,top=200,left=200,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=no,location=no,titlebar=no");
		}catch(e){}
	}

//	hz6d_get_guest_id_timer = setTimeout("hz6d_get_guest_id()", 500);

	var create_flp_jquery_timer = window.setInterval(function(){
		if (!document.getElementById('hz6d_flp_jquery')) {
			$53.creElm({
				id: 'hz6d_flp_jquery',
				src: 'https://www6.53kf.com/minkh/js/jquery-1.4.2.flp.js?20121127002',
				charset: "utf-8",
				type: 'text/javascript'
			},'script', document.body, 1);
			clearInterval(create_flp_jquery_timer);
		}
	},500);	var new_fk_count=0; //访客消息条数
	var is_close = 0;//对话是否结束
	var firefox_onOff = 0;
	var HZ6D_CONFIGSNEW = {
	   'com_id': "72007377",
	   'flashingInterval' : {},
	   'newMsgInterval' : 0

    };

    //取代原跨域方式
    try{
    	window.addEventListener("message",function(event){
    		if (typeof(event.data) != 'string') return;
	        if(event.data.indexOf('53kf_new_msg') != -1){
	            hz6d_flashing();
	            hz6d_showIvt4("msg");
	        }
			if(event.data.indexOf('53kf_new_colse') != -1){
	            is_close = 1;
	        }
	        if(event.data.indexOf('53kf_min_window') != -1){
	            is_close = 1;
	            firefox_onOff = 1;
	            hide_floatWindow();
	        }
	        if (event.data.indexOf('53kf_show_window') != -1) {
	        	show_floatWindow();
	        }
	    });
    }catch(e){
        window.attachEvent("onmessage",function(event){
        	if (typeof(event.data) != 'string') return;
	        if(event.data.indexOf('53kf_new_msg') != -1){
	            hz6d_flashing();
	            hz6d_showIvt4("msg");
	        }
			if(event.data.indexOf('53kf_new_colse') != -1){
				is_close = 1;
        	}
        	if(event.data.indexOf('53kf_min_window') != -1){
	            is_close = 1;
	            firefox_onOff = 1;
	            hide_floatWindow();
	        }
	        if (event.data.indexOf('53kf_show_window') != -1) {
	        	show_floatWindow();
	        }
        });
    }

	function hz6d_flashing() {
		if (1 == 1 || 1 > 20) {
			if (document.getElementById('mini-btn').style.display=='block') {
				if (0 == 1) {//强制展开是否开启
					show_floatWindow('qzzk');
				}else{
					var info_num = document.getElementById("info-num");
					if(info_num.innerHTML =='0'){
						info_num.style.display = "block";
					};
					info_num.innerHTML = parseInt(info_num.innerHTML)+1;
				}
			}
		}else{
			if(parseInt(flp("#div_company_mini").css("height")) <= 36) {//对话框缩小时
				if(0 == 1) {//强制展开是否开启
	                max_min_company_mini(document.getElementById("hz6d_cname_mini_div").nextSibling);
				}else{
	    			if(!HZ6D_CONFIGSNEW.newMsgInterval) {
	    	            flp('#hz6d_cname_mini_div').html("您有新消息");
	    		      	HZ6D_CONFIGSNEW.newMsgInterval = setInterval("flp('#hz6d_cname_mini_div').fadeOut(150).fadeIn(150)",400);
	    			}
				}
			}
		}
	}

	function hz6d_re_flashing(cid) {
        clearInterval(HZ6D_CONFIGSNEW.newMsgInterval);
    	HZ6D_CONFIGSNEW.newMsgInterval = 0;
    	if(1 == 17)
    		flp('#hz6d_cname_mini_div').html("Anything Stusio");
    	else
	    	flp('#hz6d_cname_mini_div').html(hz6d_cname);
	}			// 发送acc
			var hz6d_filter_time = "";
            var is_right="r";
            var is_top="b";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			var height_new = 414;
			// 邀请框处理
			var acc_pop_page		 = "1";
			var acc_pop_pagenum	= 1;
			var acc_pop_total		= "1";
			var acc_pop_totalnum = 3;

			var nowpage					= window.location.href;
			nowpage = nowpage.replace('http://','').replace('https://','');
			nowpage = nowpage.split('?');
			nowpage = nowpage[0].replace(/\./g,'_').replace(/\//g,'_');

			var acc_lr					 = "1";
			var acc_tb					 = "1";
			var acc_middle			 = "0";
			var how_float			 = "1";
			var acc_left				 = 320;
			var acc_top					= 135;
			var acc_autotype		 = "0"; // 点击接受或拒绝不再弹出
            var ivt_autotype           = "0";
			var zdyivt						= "1";
			var ivtstr						= "<div style=\"    position: relative; z-index: 10000; cursor: pointer;\" id=\"acc_title\" class=\"Lelem\" maxwidth=\"400\" maxheight=\"400\" minwidth=\"100\" minheight=\"100\" operating=\"null\" type=\"null\"><div style=\"left: 0px; top: 0px; width: 588px; height: 414px; display: block; position: absolute; z-index: 10001; cursor: pointer;\" class=\"Lelem\" operating=\"KF\" type=\"img\" eld_img=\"https://www6.53kf.com/img/upload/10007377/zdypic/box_100073771470202123.png\"><img style=\"width: 588px; height: 414px;\" src=\"https://www6.53kf.com/img/upload/10007377/zdypic/box_100073771470202123.png\" width=\"588\" height=\"414\"></div><div style=\"left: 4px; top: 5px; width: 18px; height: 15px; display: block; position: absolute; z-index: 10003; cursor: pointer;\" class=\"Lelem\" operating=\"CLOSE\" type=\"img\" eld_img=\"https://www6.53kf.com/img/upload/10007377/zdypic/box_100073771425364619.png\"><img style=\"width: 18px; height: 15px;\" src=\"https://www6.53kf.com/img/upload/10007377/zdypic/box_100073771425364619.png\" width=\"18\" height=\"15\"></div></div>";
			var is_autoyqk				= "1";
			var once_autoyqk            = 0;//邀请语开关
			var zdyivt_width			= "500px";
			var zdyivt_height		 = "200px";
			var acc_reinvite			= "1";
			var acc_reauto				= "1";
			var acc_reauto_time	 = 30000;
			var acc_poptime			 = 0;
		//	var acc_poptype			 = -1;
            var acc_zdfq                = "no";
			var acc_freeze				= "off";
			var acc_chattype			= 3;
			var acc_pop_type			= 1;


            var ivt_zdfq                = "yes";
            var ivt_poptime             = 30000;//邀请框延迟弹出
            var ivt_reauto				= "1";
			var ivt_reauto_time	        = 30000;
            var ivt_pop_page		 = "1";
			var ivt_pop_pagenum	= 2;
			var ivt_pop_total		= "1";
			var ivt_pop_totalnum = 3;


			var acc_from_kf			 = false;
			var hz6d_ivt_effect	 = "1";
			var hz6d_cname				= "&#23578;&#30789;&#35895;";
			var font_color;
			hz6d_cname = hz6d_cname.replace(/\"/g, '&quot;').replace(/\'/g, '&#039;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
			var hz6d_ivt_tpl			= "../templates/ivt/53kf_v01/kf.tpl";

			var acc_content = "&#26377;&#20160;&#20040;&#21487;&#20197;&#24110;&#21161;&#24744;&#30340;&#21527;?";
			var chatWindow;			//弹出新窗口
			var deteTime;
			if(1==0)
			{
				acc_content = "&#32769;&#24072;&#19981;&#22312;&#32447;&#65292;&#28857;&#20987;&#30041;&#35328;&#65281;";
			}

			var ivt_timer = 0;
			var force_kf = "";
			var man_content = "";

			var zdfq_switch = "no";
			var zdfq_type = "1";
			var first_ivt_type = "2";
			var mini_style_type = "1";
			var mini_online_text = "与老师在线交流！";
			mini_online_text = mini_online_text.replace(/\"/g, '&quot;').replace(/\'/g, '&#039;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
			var mini_off_text = "给老师留言吧！";
			mini_off_text = mini_off_text.replace(/\"/g, '&quot;').replace(/\'/g, '&#039;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
			var minicolor_tbbj = "rgb(31, 140, 235)";
			var jtfq_type = 1;//交替发起时用于判断弹出浮动窗口还是邀请框
			var mini_size = "1";//浮动窗口尺寸

			$53.creElm({
				'id':'kfiframe',
				'src':'',
				'style':'display:none;overflow:hidden;',
				'frameBorder':0,
				'scrolling': 'no'
			},'iframe');
			$53.creElm({
				'id':'kfivteffect',
				'style':'display:none;position:absolute;width:0px;height:0px;overflow:hidden;border:1px solid #1B88D0;background:#D6EEFD;z-index:10087;'
			},'div');
			$53.creElm({
				'id':'kfivtwin',
				'style': (is_autoyqk == 1) ? 'display:none;overflow:visible;' : 'display:none;overflow:hidden;',
				'innerHTML': (is_autoyqk == 1) ? ivt_seturl(ivtstr) : ivtstr
			},'div');
				// 强制对话小窗口HTML
				mini_button_position = 'right:0; bottom:0;';
				if(is_right=='l' && is_top=="b"){
					mini_button_position = 'left:0; bottom:0;';
				}else if(is_right=='l' && is_top=="t"){
					mini_button_position = 'left:0; top:0;';
				}else if(is_right=='r' && is_top=="t"){
					mini_button_position = 'right:0; top:0;';
				}
				var bubble_html = '';
				var btn_style1 = '';
				var btn_style2 = '';
				if (1 == 1) {
					var minichat_text = mini_online_text;
				}else{
					var minichat_text = mini_off_text;
				}

				var mini_size_height=460;
				if(mini_size==2){
					mini_size_height = 400;
				}
				//用于浮动窗口初始状态变量
				var div_company_mini_height = mini_size_height;
				var mini_btn_display = 'display:none;';
				var mini_div_display = '';
				if (acc_pop_type == 2) {
					mini_btn_display = 'display:block;';
					mini_div_display = 'display:none;';
					div_company_mini_height = 0;
				}

				if(1 == 1){
					btn_style1 = 'background: center center no-repeat;background-image: url(https://www6.53kf.com/style/chat/new2017/image/png/img-info24.png);background-image: url(https://www6.53kf.com/style/chat/new2017/image/svg/img-info24.svg), none;'
					btn_style2 = 'position: relative;height: 100%;width: 100%;background: center center no-repeat;background-color: '+minicolor_tbbj+';background-image: url(https://www6.53kf.com/style/chat/new2017/image/png/img-info36.png);background-image: url(https://www6.53kf.com/style/chat/new2017/image/svg/img-info36.svg), none;'
				}else {
					btn_style1 = 'background: center center no-repeat;background-image: url(https://www6.53kf.com/style/chat/new2017/image/png/img-email24.png);background-image: url(https://www6.53kf.com/style/chat/new2017/image/svg/img-email24.svg), none;'
					btn_style2 = 'position: relative;height: 100%;width: 100%;background: center center no-repeat;background-color: '+minicolor_tbbj+';background-image: url(https://www6.53kf.com/style/chat/new2017/image/png/img-email36.png);background-image: url(https://www6.53kf.com/style/chat/new2017/image/svg/img-email36.svg), none;'

				}

				if(mini_style_type==1){
					bubble_html = '<div class="mini-btn mini-btn1" id="mini-btn" onclick="show_floatWindow();" style="white-space:nowrap;cursor:pointer;'+mini_btn_display+'position:absolute;'+mini_button_position+'z-index:-1;height: 42px;border-radius:2px; overflow: hidden; background: '+minicolor_tbbj+';-webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, .06), 0 2px 32px rgba(0, 0, 0, .16)!important;box-shadow: 0 1px 6px rgba(0, 0, 0, .06), 0 2px 32px rgba(0, 0, 0, .16)!important;">'+
										'<div class="mini-btn-info" style="position: relative;width: 42px;height: 42px;display:inline-block;"><span style="width:100%;height:100%;position:absolute;left:0;top:0;z-index:1;'+btn_style1+'"></span><span style="width:100%;height:100%;position:absolute;left:0;top:0;background:#000;opacity:0.2;filter:alpha(opacity=20);"></span><span id="info-num" style="display:none;position: absolute;top: 5px;right: 5px;z-index:10;height: 14px;min-width: 14px;line-height: 14px;border-radius: 7px;background: red;font-size: 12px;color: #FFFFFF;letter-spacing: 0.47px;text-align: center;">0</span></div>'+
										'<div class="mini-btn-middle" style="font-weight:normal;display:inline-block;vertical-align:top;line-height: 42px;padding: 0 8px;font-size: 16px;color: #FFFFFF;letter-spacing: 0.83px;word-break: break-all;text-align: center;">'+minichat_text+'</div>'+
										'<div class="mini-btn-window" style="display:inline-block;width: 42px;height: 42px;background: center center no-repeat;background-image: url(https://www6.53kf.com/style/chat/new2017/image/png/to-maxWindow.png);background-image: url(https://www6.53kf.com/style/chat/new2017/image/svg/to-maxWindow.svg), none;"></div>'+
									'</div>';
				}else if(mini_style_type==2){
					bubble_html = '<div class="mini-btn mini-btn2" id="mini-btn" onclick="show_floatWindow();" style="cursor:pointer;'+mini_btn_display+'position:absolute;'+mini_button_position+'z-index:-1;width: 42px;border-radius:2px; overflow: hidden; background: '+minicolor_tbbj+';-webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, .06), 0 2px 32px rgba(0, 0, 0, .16)!important;box-shadow: 0 1px 6px rgba(0, 0, 0, .06), 0 2px 32px rgba(0, 0, 0, .16)!important;">'+
										'<div class="mini-btn-info" style="position: relative;width: 42px;height: 42px;"><span style="width:100%;height:100%;position:absolute;left:0;top:0;z-index:1;'+btn_style1+'"></span><span style="width:100%;height:100%;position:absolute;left:0;top:0;background:#000;opacity:0.2;filter:alpha(opacity=20);"></span><span id="info-num" style="display:none;position: absolute;top: 5px;right: 5px;z-index:10;height: 14px;min-width: 14px;line-height: 14px;border-radius: 7px;background: red;font-size: 12px;color: #FFFFFF;letter-spacing: 0.47px;text-align: center;">0</span></div>'+
										'<div class="mini-btn-middle" style="font-weight:normal;line-height: 20px;padding: 8px 13px 16px;font-size: 16px;color: #FFFFFF;letter-spacing: 3.83px;word-wrap: break-word;text-align: center;">'+minichat_text+'</div>'+
									'</div>';
				}else if(mini_style_type==3){
					bubble_html = '<div class="mini-btn mini-btn3" id="mini-btn" onclick="show_floatWindow();" style="cursor:pointer;'+mini_btn_display+'position:absolute;'+mini_button_position+'z-index:-1;width: 64px;height: 64px;border-radius: 32px; overflow: hidden; background: '+minicolor_tbbj+';-webkit-box-shadow: 0 1px 6px rgba(0, 0, 0, .06), 0 2px 32px rgba(0, 0, 0, .16)!important;box-shadow: 0 1px 6px rgba(0, 0, 0, .06), 0 2px 32px rgba(0, 0, 0, .16)!important;">'+
										'<div style="'+btn_style2+'"><span id="info-num" style="display:none;position: absolute;top: 12px;right: 12px;z-index:10;height: 14px;min-width: 14px;line-height: 14px;border-radius: 7px;background: red;font-size: 12px;color: #FFFFFF;letter-spacing: 0.47px;text-align: center;">0</span></div>'+
									'</div>';
				}

				var tmp_innerHTML = bubble_html;
				tmp_innerHTML += '<div id="iframe_company_mini_div" style="'+mini_div_display+'font-size: 0;background-color:#fff;border-radius:2px;overflow:hidden;width:100%;height:'+mini_size_height+'px;box-shadow:0 5px 40px rgba(0,0,0,.16)!important;-webkit-box-shadow:0 5px 40px rgba(0,0,0,.16)!important;">'+
									'<h6 class="pc-visitor-header" style="width:100%;box-sizing:border-box;background: '+minicolor_tbbj+' no-repeat 10px;margin:0;padding:0;padding-left: 42px;font-size: 14px;color: #fff;height: 36px;line-height: 36px;position: relative;font-weight: normal;padding-right: 72px;">'+
										'<img style="width:24px;height:24px;position:absolute;left:10px;top:6px;border-radius:2px;" src="https://www6.53kf.com/img/upload/10007377/mobile/temp/mobile_53kf_1511507486.jpg"/>'+
										'<label style="line-height:36px;cursor:move;font-weight:normal;cursor:move;display: inline-block;width: 90%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;" class="header-company">' + hz6d_cname + '</label>'+
										'<span onclick="max_from_company_mini(this);" title="最大化"  class="pc-new pc-title-btn" style="background: url(https://www6.53kf.com/style/chat/new2017/image/png/newWindow.png) center no-repeat;background-image: url(https://www6.53kf.com/style/chat/new2017/image/svg/newWindow.svg),none;position: absolute;width: 36px;height: 36px;cursor: pointer;right: 40px;top: 0;fill: #F08000;"></span>'+
										'<span onclick="hide_floatWindow();" title="最小化" class="pc-hide pc-title-btn" style="background: url(https://www6.53kf.com/style/chat/new2017/image/png/to-minWindow.png) center no-repeat;background-image: url(https://www6.53kf.com/style/chat/new2017/image/svg/to-minWindow.svg),none;position: absolute;width: 36px;height: 36px;cursor: pointer;right: 0px;top: 0;"></span>'+
									'</h6>'+
									'<iframe id="iframe_company_mini" frameborder="0"  style="height:'+(mini_size_height-36)+'px;width:100%;margin:0;padding:0;visibility: inherit;">'+
									'</iframe>'+
								'</div>';
				$53.creElm({
    				'id':'div_company_mini',
    				//'style':'display:none;position:fixed;right:0;bottom:0;width:400px;height:500px;overflow:hidden;z-index:10089;cursor:move;box-shadow:0 5px 40px rgba(0,0,0,.16)!important;-webkit-box-shadow:0 5px 40px rgba(0,0,0,.16)!important;',
					'style':'line-height:0;font-size:0;display:none;position:fixed;right:0;bottom:0;width:360px;height:'+div_company_mini_height+'px;overflow:hidden;z-index:10089;cursor:move;overflow: visible;',
    				'innerHTML': tmp_innerHTML
		      	},'div');
		      	floatWindowBindEvent();//绑定事件//  ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓  2017版访客端新增 ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓


			// 隐藏浮动窗口
			function hide_floatWindow(event){
				document.querySelector('#div_company_mini').style.height="0";
				document.querySelector('#iframe_company_mini_div').style.display="none";
				document.querySelector('.mini-btn').style.display="block";
				//调整窗口位置
				var wid=document.documentElement.clientWidth;
				var hei=document.documentElement.clientHeight;
				if(0 == 0){
					if(is_right=='l'){
						var right=parseInt(0);
						right=wid-right-parseInt($53("div_company_mini").style.width);
						$53("div_company_mini").style.right = right + 'px';
					}else{
						$53("div_company_mini").style.right = "0" + 'px';
					}
					if(is_top=='t') {
						var bottom=parseInt(0);
						bottom=hei-bottom-parseInt($53("div_company_mini").style.height);
						$53("div_company_mini").style.bottom = bottom + 'px';
					}else{
						$53("div_company_mini").style.bottom = "0"+ 'px';
					}
				}else{
					logoPosition();
					var right_per = parseInt(0)/100;
					var bottom_per = parseInt(0)/100;
					$53("div_company_mini").style.left = (wid-parseInt($53("div_company_mini").style.width))*(1-right_per) + 'px';
					$53("div_company_mini").style.top = (hei-parseInt($53("div_company_mini").style.height))*(1-bottom_per) + 'px';
				}

				if (is_close == 1) return false;//如果对话结束 则不再执行规则

				if(zdfq_switch=='yes'){
					if (acc_reauto == 1 && zdfq_type == 1) {//浮动窗口 开启反复发起
						setTimeout(function () {
							show_floatWindow('zdfq');
						},acc_reauto_time);
					}else if (zdfq_type == 3) {//交替发起
						if (jtfq_type==1) {
							jtfq_type = 2;
							setTimeout(function () {
								hz6d_checkIvt();
							},acc_reauto_time);
						}else{
							jtfq_type = 1;
							setTimeout(function () {
								show_floatWindow('zdfq');
							},acc_reauto_time);
						}
					}
					//添加cookie 实现整个域读取
					if(acc_reauto == 1) {
						document.cookie = "my_acc_reauto_time=" + new Date().getTime() + ";path=/";
					} else { //没有反复开启弹出窗口  删除cookie
						document.cookie = "my_acc_reauto_time=null;path=/";
					}
				}
			}
			// 显示浮动窗口
			var mini_btn_flag;
			var show_floatWindow_firefoxRefresh = 1;
			function show_floatWindow(type){//type:  zdfq:主动发起规则打开  qzzk:强制展开打开   不传:用户点击展开

				// 火狐缓存刷新问题
				if (navigator.userAgent.indexOf("Firefox") > -1 && firefox_onOff == 1) {
					var iframe = document.getElementById("iframe_company_mini");
					var iframe_src = iframe.getAttribute("src");
					iframe.setAttribute("src",iframe_src+"&huancun="+Math.random());
					firefox_onOff = 0;
				}

				// 防止拖动的时候触发点击事件
				if(mini_btn_flag) return false;
				if (type == 'zdfq') {
					if (!hz6d_isShowIvt('chat')){
						return false;
					}else{
						hz6d_setTotalNum('chat');
					}
				}
				var mini_size_height;
				if(1==1){
					mini_size_height=460;
					if(mini_size==2){
						mini_size_height = 400;
					}
				}else {
					mini_size_height = parseInt($53("iframe_company_mini_div").style.height);
				}

				document.querySelector('#div_company_mini').style.height=mini_size_height+"px";
				document.querySelector('#iframe_company_mini_div').style.display="block";
				document.querySelector('.mini-btn').style.display="none";
				document.getElementById("info-num").style.display="none";
				document.getElementById("info-num").innerHTML = "0";

				//调整窗口位置
				var wid=document.documentElement.clientWidth;
				var hei=document.documentElement.clientHeight;
				if(0 == 0){
					if(is_right=='l'){
						var right=parseInt(0);
						right=wid-right-parseInt($53("div_company_mini").style.width);
						$53("div_company_mini").style.right = right + 'px';
					}else{
						$53("div_company_mini").style.right = "0" + 'px';
					}
					if(is_top=='t') {
						var bottom=parseInt(0);
						bottom=hei-bottom-parseInt($53("div_company_mini").style.height);
						$53("div_company_mini").style.bottom = bottom + 'px';
					}else{
						$53("div_company_mini").style.bottom = "0"+ 'px';
					}
				}else{
					logoPosition();
					var right_per = parseInt(0)/100;
					var bottom_per = parseInt(0)/100;
					$53("div_company_mini").style.left = (wid-parseInt($53("div_company_mini").style.width))*(1-right_per) + 'px';
					$53("div_company_mini").style.top = (hei-parseInt($53("div_company_mini").style.height))*(1-bottom_per) + 'px';
				}
			};
			//为新版浮动窗口绑定事件
			function floatWindowBindEvent(){
				document.querySelector('.mini-btn').onmouseenter = function(){
					this.style.boxShadow = '0 2px 8px rgba(0, 0, 0, .09), 0 4px 40px rgba(0, 0, 0, .24)';
				}
				document.querySelector('.mini-btn').onmouseleave = function(){
					this.style.boxShadow = ' 0 1px 6px rgba(0, 0, 0, .06), 0 2px 32px rgba(0, 0, 0, .16)';
				}

				document.querySelector('.pc-new').onmouseenter = function(){
					this.style.backgroundColor = 'rgba(255, 255, 255, .1)';
					//this.style.filter = 'progid:DXImageTransform.Microsoft.gradient(startcolorstr=#19FFFFFF,endcolorstr=#19FFFFFF)';
				}
				document.querySelector('.pc-new').onmouseleave = function(){
					this.style.backgroundColor = '';
				}
				document.querySelector('.pc-hide').onmouseenter = function(){
					this.style.backgroundColor = 'rgba(255, 255, 255, .1)';
					//this.style.filter = 'progid:DXImageTransform.Microsoft.gradient(startcolorstr=#19FFFFFF,endcolorstr=#19FFFFFF)';
				}
				document.querySelector('.pc-hide').onmouseleave = function(){
					this.style.backgroundColor = '';
				}
				if (1 == '24') {
					document.querySelector('.pc-close').onmouseenter = function(){
						this.style.backgroundColor = 'rgba(255, 255, 255, .1)';
						//this.style.filter = 'progid:DXImageTransform.Microsoft.gradient(startcolorstr=#19FFFFFF,endcolorstr=#19FFFFFF)';
					}
					document.querySelector('.pc-close').onmouseleave = function(){
						this.style.backgroundColor = '';
					}
				}
			}

			//百分比模式下图标定位
			function logoPosition(){
				if(parseInt(0) < 51 && parseInt(0) < 51) {
					$53('mini-btn').style.right = 0;
					$53('mini-btn').style.bottom = 0;
					$53('mini-btn').style.left = 'auto';
					$53('mini-btn').style.top = 'auto';
				}
				if(parseInt(0) < 51 && parseInt(0) > 50) {
					$53('mini-btn').style.right = 0;
					$53('mini-btn').style.bottom = 'auto';
					$53('mini-btn').style.left = 'auto';
					$53('mini-btn').style.top = 0;
				}
				if(parseInt(0) > 50 && parseInt(0) < 51) {
					$53('mini-btn').style.right = 'auto';
					$53('mini-btn').style.bottom = 0;
					$53('mini-btn').style.left = 0;
					$53('mini-btn').style.top = 'auto';
				}
				if(parseInt(0) > 50 && parseInt(0) > 50) {
					$53('mini-btn').style.right = 'auto';
					$53('mini-btn').style.bottom = 'auto';
					$53('mini-btn').style.left = 0;
					$53('mini-btn').style.top = 0;
				}
			}
			// 百分比模式下监听尺寸变化
			window.onresize = function(){
				if(0 == 1){
					var wid=document.documentElement.clientWidth;
					var hei=document.documentElement.clientHeight;
					logoPosition();
					var right_per = parseInt(0)/100;
					var bottom_per = parseInt(0)/100;
					$53("div_company_mini").style.left = (wid-parseInt($53("div_company_mini").style.width))*(1-right_per) + 'px';
					$53("div_company_mini").style.top = (hei-parseInt($53("div_company_mini").style.height))*(1-bottom_per) + 'px';
				}		
			}

	//↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑  2017版访客端新增 ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑


			//	mini悬浮对话窗口 转到正常聊天窗口
			function max_from_company_mini(t)
			{
				var openurl = "https://www6.53kf.com/webCompany.php?arg=10007377&style=1&kflist=off&kf=public%40atguigu.com%2Cliulei%40atguigu.com%2Cliumingyue%40atguigu.com%2Cinfo%40atguigu.com%2Cvideo%40atguigu.com%2C3069368606%40qq.com%2Ctingting%40atguigu.com%2Cwangya%40atguigu.com%2Czhuchangqing%40atguigu.com%2Cwanggang%40atguigu.com%2Cmary%40atguigu.com&zdkf_type=1&lnk_overflow=0&language=zh-cn&charset=gbk&username=&userinfo=&introurl=&lyurl=&lytype=0&copartner=&referer=http%3A%2F%2Fwww.atguigu.com%2Fbigdata%2F&keyword=http%3A%2F%2Fwww.atguigu.com%2F&brief=&logo=&question=&uid=22bdfd330ef010ae2173b1f01cea06da&tfrom=2"+force_kf;
				try{
					chatWindow = window.open(openurl,"_blank","height=600,width=800,top=50,left=200,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=no,location=no,titlebar=no");
					if(chatWindow==null){
						location.href = openurl;
					}else{
						chatWindow.focus();
						chatWindow.opener = window;
					}
				}catch(e){
					location.href = openurl;	// 傲游
				}
				if (1 == 1 || 1 > 20) {
					hide_floatWindow();
				}else{
					close_company_mini();
					t.parentNode.parentNode.removeChild(t.parentNode);
				}
			}

			function cgpic(t){
				if( $53("div_company_mini").style.width =="400px"){
					document.querySelector('.mini_narrow').style.background="url('https://www6.53kf.com/style/chat/minichat2/img/minx1.png') no-repeat";
				}

			}
			function cgpic2(t){
				if( $53("div_company_mini").style.width =="400px"){
					document.querySelector('.mini_narrow').style.background="url('https://www6.53kf.com/style/chat/minichat2/img/minx2.png') no-repeat";
				}
			}
			function cgpic3(t){
				document.querySelector('.mini_maxto').style.background="url('https://www6.53kf.com/style/chat/minichat2/img/double1.png') no-repeat";
			}
			function cgpic4(t){
				document.querySelector('.mini_maxto').style.background="url('https://www6.53kf.com/style/chat/minichat2/img/double2.png') no-repeat";
			}
			function cgpic5(t){
				document.querySelector('.mini_close').style.background="url('https://www6.53kf.com/style/chat/minichat2/img/close1.png') no-repeat 50% 50%";
			}
			function cgpic6(t){
				document.querySelector('.mini_close').style.background="url('https://www6.53kf.com/style/chat/minichat2/img/close2.png') no-repeat 50% 50%";
			}



			//	mini悬浮对话窗口 缩小、放大
			function max_min_company_mini(t)
			{
				if (t.getAttribute('max_min') == 'max')
				{
					$53("div_company_mini").style.height = "36px";
					$53("hz6d_cname_mini_div").style.width = "130px";
					$53("div_company_mini").style.width = "203px";
					$53("iframe_company_mini_div").style.display = "none";
					t.style.backgroundImage = "url('https://www6.53kf.com/style/chat/minichat2/img/max.png')";
					t.setAttribute('max_min','min');
					t.title = t.getAttribute('mini_recover');
                    $53("div_company_mini").style.right = '0px';
			     	$53("div_company_mini").style.bottom = '0px';                    $53("mini_header_bg_div").style.backgroundImage = "url('https://www6.53kf.com/style/chat/minichat2/img/header_bg2_1.png')";
				}
				else
				{
					hz6d_re_flashing(HZ6D_CONFIGSNEW.com_id);
					$53("iframe_company_mini_div").style.display = "";
					$53("div_company_mini").style.height = "378px";
					$53("div_company_mini").style.width = "403px";
					$53("hz6d_cname_mini_div").style.width = "330px";
					t.style.backgroundImage = "url('https://www6.53kf.com/style/chat/minichat2/img/min.png')";
					t.setAttribute('max_min','max');
					t.title = t.getAttribute('mini_narrow');
                    var wid=document.documentElement.clientWidth;
					var hei=document.documentElement.clientHeight;
					if(0 == 0){
	                    if(is_right=='l'){
	                        var right=parseInt(0);
	                        right=wid-right-403;
	                        $53("div_company_mini").style.right = right + 'px';

						}else{
								$53("div_company_mini").style.right = "0" + 'px';
						}
						if(is_top=='t') {
							var bottom=parseInt(0);
							bottom=hei-bottom-378;
							$53("div_company_mini").style.bottom = bottom + 'px';
						}else{
							$53("div_company_mini").style.bottom = "0"+ 'px';
						}
					}else{
						logoPosition();
						var right_per = parseInt(0)/100;
						var bottom_per = parseInt(0)/100;
						$53("div_company_mini").style.left = (wid-parseInt($53("div_company_mini").style.width))*(1-right_per) + 'px';
						$53("div_company_mini").style.top = (hei-parseInt($53("div_company_mini").style.height))*(1-bottom_per) + 'px';
					}
				}                   $53("mini_header_bg_div").style.backgroundImage = "url('https://www6.53kf.com/style/chat/minichat2/img/header_bg_1.png')";

            }
			// 定时调用判断是否显示邀请框
			function hz6d_checkIvt() { hz6d_showIvt(); }

			// 显示冻结层
			function hz6d_showFreeze(){
				if(acc_freeze=="on"){
					var div = $53("hz6d_freeze_div");
					if(div==null){
						hz6d_createFreezeDiv();
					}else{
						div.style.display = "block";
					}
				}
			}

			// 创建冻结层
			function hz6d_createFreezeDiv(){
				var div = document.createElement('DIV');
				div.id = 'hz6d_freeze_div';
				with(div.style){
					zIndex=6998;
					top='0px';
					left='0px';
					width='100%';
					height='100%';
					border='none';
					margin=padding=0;
					position='absolute';
					backgroundColor='#000';
					opacity='0.2';
					filter='alpha(opacity=20)';
					duration=1000;
				}
				document.body.insertBefore(div,document.body.firstChild);
				setInterval("hz6d_checkFreezeStyle()", 1);
			}

			var hz6d_maxPageWidth = 0;
			var hz6d_maxPageHeight = 0;
			// 定时调整冻结层大小
			function hz6d_checkFreezeStyle(){
				try{
					var freeze = $53("hz6d_freeze_div");
					if(freeze!=null){
						var scroll = hz6d_getScrollPosition();
						var client = hz6d_getClientWindow();
						var w = client.width+scroll.sLeft;
						var h = client.height+scroll.sTop;
						if(w > hz6d_maxPageWidth){
							hz6d_maxPageWidth = w;
							freeze.style.width = hz6d_maxPageWidth+"px";
						}
						if(h > hz6d_maxPageHeight){
							hz6d_maxPageHeight = h;
							freeze.style.height = hz6d_maxPageHeight+"px";
						}
					}
				}catch(e){}
			}

			// 删除冻结层
			function hz6d_destroyFreezeDiv(){
				try{
					var div = $53("hz6d_freeze_div");
					if(div!=null) { div.style.display = "none"; }
				}catch(e){}
			}

			// 显示邀请框
			function hz6d_showIvt(){
				if(hz6d_isShowIvt('ivt')) {
					if($53("kfivtwin").style.display=="none" && (onliner_zdfq!=2 || zdfq_type==3) || acc_from_kf==true){
						acc_from_kf = false;
						get_ACCWindow();
						hz6d_setTotalNum('ivt');
						// hz6d_setPageNum('ivt');
					}
				}
			}

			// 判断是否显示邀请框 强制
			function hz6d_isShowIvt(type){
				if(acc_reinvite==1 && acc_from_kf==true) { return true; }

                if(type == 'ivt') {
                    //点击接受或拒绝后不再弹出
                    if(ivt_autotype==3 && zdfq_type==3){
    					if(onliner_zdfq==3){
    						return false;
    					}
				    }
                }

                // if(type == 'chat') {
                    // if(acc_autotype==3){
					//点击接受或拒绝后不再弹出
    					// if(onliner_zdfq!=0){
    					// 	return false;
    					// }
				    // }
                // }
				if(!hz6d_overTotalNum(type)) {
					// if(hz6d_overPageNum(type)) {
					// 	return false;
					// }
				}else{
					return false;
				}
				return true;
			}

			// 判断是否超过所有页面次数
			function hz6d_overTotalNum(type) {
				if($53("kfivtwin").style.display!="none") return;
                // if(type == 'chat') {
                    // if(acc_pop_total==1) {
					   var total_invite = $53.getCookie("invite_53kf_totalnum_1");
					   if(total_invite=="") { total_invite = 0; }
					   if(total_invite>=acc_pop_totalnum) {return true; }
				    // }
                // }

				// if(type == 'ivt') {
				// 	if(ivt_pop_total==1) {
				// 		var total_invite = $53.getCookie("invite_53kf_totalnum_1"+'ivt');
				// 		if(total_invite=="") { total_invite = 0; }
				// 		if(total_invite>=ivt_pop_totalnum) {return true; }
				// 	}
				// }

				return false;
			}

			// 判断是否超过每个页面次数
			function hz6d_overPageNum(type){
				if($53("kfivtwin").style.display!="none") return;
                if(type == 'chat') {
    				if(acc_pop_page==1){
    					var page_invite = kf_getCookie(nowpage);
    					if(page_invite=="") { page_invite = 0; }
    					if(page_invite>=acc_pop_pagenum) { return true; }
    				}
                }
                if(type == 'ivt') {
                    if(ivt_pop_page==1){
    					var page_invite = $53.getCookie(nowpage+'ivt');
    					if(!page_invite) { page_invite = 0; }
    					if(page_invite>=ivt_pop_pagenum) { return true; }
    				}
                }
				return false;
			}

			// 设置所有页面弹出次数
			function hz6d_setTotalNum(type){//如果主动发起方式为交替发起，则一个循环为一次
				if (type == 'ivt') {
					if (zdfq_type == 2 || (zdfq_type == 3 && first_ivt_type == 2)) {
						hz6d_setTotalNum2();
					}
				}
				if (type == 'chat') {
					if (zdfq_type == 1 || (zdfq_type == 3 && first_ivt_type == 1) || (zdfq_type == 3 && first_ivt_type == 2 && ivt_autotype==3 && onliner_zdfq==3)) {
						hz6d_setTotalNum2();
					}
				}
			}

			// 设置所有页面弹出次数
			function hz6d_setTotalNum2()
			{
                var total_cookie_name = 'invite_53kf_totalnum_1';
				var total_invite = kf_getCookie(total_cookie_name);
				if(total_invite=="") { total_invite = 0; }
				total_invite++;
				document.cookie = total_cookie_name+"="+total_invite;
			}

			// 设置每个页面弹出次数
			function hz6d_setPageNum(type)
			{
                var pagenum_cookie_name = nowpage;
                if(type == 'ivt'){
                     pagenum_cookie_name = nowpage + 'ivt';
                }
				var page_invite = kf_getCookie(pagenum_cookie_name);
				if(page_invite=="") { page_invite = 0; }
				page_invite++;
				document.cookie = pagenum_cookie_name+"="+page_invite;
			}

            function kf_getCookie(objName) {
                var arrStr = document.cookie.split("; ");

                for(var i = 0;i < arrStr.length;i ++) {

                    var temp = arrStr[i].split("=");

                    if(temp[0] == objName) return unescape(temp[1]);
                }
                return '';
            }

			// 隐藏邀请框
			function hidden_ivt()
			{
				if(zdfq_switch == 'yes') {
					//document.cookie = "onliner_zdfq72007377="+onliner_zdfq;
					document.cookie = "my_acc_reauto_time=" + new Date().getTime() + ";path=/";
				} else {
					document.cookie = "my_acc_reauto_time=null;path=/";
				}
				try{ $53("kfiframe").style.display = "none"; }catch(e){}
				try{ hidden_ACCWindow(); }catch(e){}
				hz6d_destroyFreezeDiv();
				try{ force_kf = ""; }catch(e){}
			}

			function hz6d_haveMIn(){
				if('1' == 0 && $53("hz6d_mnkh_content").style.display=="none" ){//&& onliner_zdfq!=2
						acc_from_kf=false;
						hz6d_showContent();
						force_kf = "";
						onliner_zdfq = 2;
						hidden_ivt();
						hz6d_setTotalNum('chat');
						// hz6d_setPageNum('chat');
				}else if($53("div_company_mini").style.display=="none" ){//onliner_zdfq!=2
						acc_from_kf=false;
						get_location(acc_chattype);
						if (first_ivt_type == 1) {
							if (!(zdfq_type==3 && jtfq_type==2)) {
								hz6d_setTotalNum('chat');
							}
						}else{
							if (!(zdfq_type==3 && jtfq_type==1)) {
								hz6d_setTotalNum('chat');
							}
						}

						// hz6d_setPageNum('chat');
				}else{
					try{
						if (1 == 1 || 1 > 20) {
							show_floatWindow('qzzk');
						}else{
							hz6d_showIvt4();
						}
					}catch(e){}
				}
			}

			function hz6d_showIvt3() {
				if(hz6d_isShowIvt('chat')) {
					var time=setInterval(function () {
						if('1' == 0 && $53("hz6d_mnkh_content")){
							hz6d_haveMIn();
							clearInterval(time);
						}else if($53("div_company_mini")){
							hz6d_haveMIn();
							clearInterval(time);
						}
					},1);
				}
			}

			function hz6d_showIvt4(type) {
				if(hz6d_isShowIvt('chat') || type) {
					var time=setInterval(function () {
						if('1' == 0 && $53("hz6d_mnkh_content")){
							if($53("hz6d_mnkh_content").style.display=="none" ){
								$53("hz6d_mnkh_content").style.display = "block";
								hz6d_setTotalNum('chat');
								// hz6d_setPageNum('chat');
							}
							clearInterval(time);
						}else if($53("div_company_mini")){
							if($53("div_company_mini").style.display=="none" ){
								$53("div_company_mini").style.display = "block";
								hz6d_setTotalNum('chat');
								// hz6d_setPageNum('chat');
							}
							clearInterval(time);
						}
					},1000);
				}
			}

			function hz6d_deteWindow(){
				if(hz6d_isShowIvt('chat')){
					if(chatWindow==null || chatWindow.closed==true){
						acc_from_kf=false;
						get_location(acc_chattype);
						hz6d_setTotalNum('chat');
						// hz6d_setPageNum('chat');
					}
				}else{
					clearInterval(deteTime);
				}
			}

			function hz6d_showIvt2 () {
				deteTime = setInterval(function () {hz6d_deteWindow();},acc_reauto_time);
			}

			function hz6d_startReautoTimer2(acc_chattype) {
				if(acc_chattype==3) {
					hz6d_showIvt3();
				}
				if(acc_chattype==2){
					hz6d_showIvt2();
				}
				if(acc_chattype==1){
					if(hz6d_isShowIvt('chat')){
						get_location(acc_chattype);
						hz6d_setTotalNum('chat');
						// hz6d_setPageNum('chat');
					}
				}
			}

			// 加载后是否显示邀请框 对话框
			function hz6d_LoadToShowIvt()
			{
				// if(ivt_zdfq=='yes' && (1==1 || "on"=="on"))//邀请框
				// {
				// 	setTimeout("hz6d_checkIvt()", ivt_poptime);
				// }

    			//if(acc_zdfq=='yes' && (1==1 || "on"=="on"))//强制对话
				// {
				// 	setTimeout(function () {hz6d_startReautoTimer2(acc_chattype);}, acc_poptime);
				// }

				if (zdfq_switch == 'yes' && (1==1 || "on"=="on")) {
					if(zdfq_type==1){//强制对话
						setTimeout(function () {hz6d_showIvt3();}, acc_poptime);
					}else if (zdfq_type==2) {//邀请框
						setTimeout("hz6d_checkIvt()", acc_poptime);
					}else if (zdfq_type==3) {//交替发起
						if (first_ivt_type == 1) {//首次邀请方式 1:邀请框 2:浮动窗口
							setTimeout("hz6d_checkIvt()", acc_poptime);
						}else{
							setTimeout(function () {hz6d_showIvt3();}, acc_poptime);
						}
					}
				}
			}
			//同一个域下处理cookie 改变延迟时间
			var my_acc_reauto_time_cookie = $53.getCookie('my_acc_reauto_time');

			if(my_acc_reauto_time_cookie && 1) {
				acc_poptime = acc_reauto_time - (new Date().getTime() - my_acc_reauto_time_cookie);
			}
			//查询link表，判断是否已有客服在线，建立对话

			// if(1==1 || "on"=="on" || "on"=="on") {
				hz6d_LoadToShowIvt();
			// }

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

			var hz6d_company_mini = null;
			// 强制对话
			function get_location(type){
				// type:1 覆盖本窗口 2 新窗口 如果被拦截，则本窗口刷新 3 悬浮对话窗口
				try{
					var openurl = "https://www6.53kf.com/webCompany.php?arg=10007377&style=1&kflist=off&kf=public%40atguigu.com%2Cliulei%40atguigu.com%2Cliumingyue%40atguigu.com%2Cinfo%40atguigu.com%2Cvideo%40atguigu.com%2C3069368606%40qq.com%2Ctingting%40atguigu.com%2Cwangya%40atguigu.com%2Czhuchangqing%40atguigu.com%2Cwanggang%40atguigu.com%2Cmary%40atguigu.com&zdkf_type=1&lnk_overflow=0&language=zh-cn&charset=gbk&username=&userinfo=&introurl=&lyurl=&lytype=0&copartner=&referer=http%3A%2F%2Fwww.atguigu.com%2Fbigdata%2F&keyword=http%3A%2F%2Fwww.atguigu.com%2F&brief=&logo=&question=&uid=22bdfd330ef010ae2173b1f01cea06da&tfrom=2"+force_kf;
                                        var popParam = $53.getPopParam();
                                        if(popParam != ''){   //判断是否是调JS-SDK弹出强制对话框
                                                openurl += popParam;
                                        }
					if(type==1){
						location.href = openurl;
					}else if(type==2){
						try{
							chatWindow = window.open(openurl,"","height=600,width=800,top=50,left=200,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=no,location=no,titlebar=no");
							if(chatWindow==null){
								location.href = openurl + '&timeStamp=' + new Date().getTime();
							}else{
								chatWindow.focus();
								chatWindow.opener = window;
							}
						}catch(e){
							location.href = openurl + '&timeStamp=' + new Date().getTime();	// 傲游
						}
					}else{
						if('1' == 0){
							acpt_force_kf(force_kf);
							var timer=setInterval(function () {
								if($53("hz6d_mnkh_content")){
									hz6d_showContent();
									clearInterval(timer);
								}
							},100);
						}else{
							var openurl_mini = openurl;
							var tpl = "";
							if(openurl_mini.match(/&tpl=[^&]*/gim)!=null){
								openurl_mini = openurl_mini.replace(/&tpl=[^&]*/gim, "&tpl=minichat2");
							}else{
								tpl = "&tpl=minichat2";
							}
							$53("iframe_company_mini").src = openurl_mini + tpl + '&timeStamp=' + new Date().getTime()+'&interface_color=1&interface_theme=1&minchat_style=1';
							var div = $53("div_company_mini");
							hz6d_company_mini = new hz6d_div_scroll(div);
							hz6d_company_mini.start();
							div.style.display = "";
						}
						is_close = 0;
					}
					force_kf = "";
					// onliner_zdfq = 2;
					// hidden_ivt();
				}catch(e){}
			}
			// 悬浮邀请框滚动
			function hz6d_div_scroll(d){
				var self = this;
				this.div = d;
				this.right = 0;
				this.bottom = 0;
				this.timer = 0;
				this.posX=this.posY=this.posR=this.posB=0;
				this.scrollX=this.scrollY=false;

				this.start = function(){
					this.goPosition();
					this.timer = setInterval(this.scroll, 10);
					this.move();
				}
				this.stop = function(){
					if(this.timer!=0){ clearInterval(this.timer); }
				}
				this.goPosition = function(){
					this.right = 0;
					this.bottom = 0;
					this.right_per = parseInt(0)/100;
					this.bottom_per = parseInt(0)/100;
	                var wid=document.documentElement.clientWidth;
	                var hei=document.documentElement.clientHeight;
					if(0 == 0){
	                    if(is_right=='l')
	                    {
	                        var right=parseInt(this.right);
	                        right=wid-right-parseInt($53("div_company_mini").style.width);
	                        this.div.style.right = right + "px";}
	                    else
	                    {
	                        this.div.style.right = this.right + "px";}
	                    if(is_top=='t')
	                    {
	                        var bottom=parseInt(this.bottom);
	                        bottom=hei-bottom-parseInt($53("div_company_mini").style.height);
	                        this.div.style.bottom = bottom + "px";}
	                    else{
	                        this.div.style.bottom = this.bottom + "px";
	                    }
					}else{
						logoPosition();
						this.div.style.left = (wid-parseInt(this.div.style.width))*(1-this.right_per) + 'px';
						this.div.style.top = (hei-parseInt(this.div.style.height))*(1-this.bottom_per) + 'px';
					}
				}
				this.scroll = function(){

					var scroll = hz6d_getScrollPosition();
					var cur_right = -scroll.sLeft;
					var cur_bottom = -scroll.sTop;
				}
				this.move = function(){
					this.div.onmousedown = function(e){
						if(!e) e = window.event; //如果是IE

						mini_btn_flag = false;
						self.posX = e.clientX;
						self.posY = e.clientY;
						self.posR = parseInt(self.div.style.right);
						self.posB = parseInt(self.div.style.bottom);
						self.posL = parseInt(self.div.style.left);
						self.posT = parseInt(self.div.style.top);
						if(self.div.setCapture){
							self.div.setCapture();
						}else if(window.captureEvents){
							window.captureEvents(Event.MOUSEMOVE|Event.MOUSEUP);
						}
						var d = document;
						d.onmousemove = function(ev){
							if(!ev) ev = window.event; //如果是IE
							if(Math.abs(ev.clientX - self.posX)>5 || Math.abs(ev.clientY - self.posY)>5) mini_btn_flag = true;

							if(0 == 0){
								self.div.style.right = (self.posR - (ev.clientX - self.posX)) + "px";
								self.div.style.bottom = (self.posB - (ev.clientY - self.posY)) + "px";
							}else{
								self.div.style.left = (self.posL + (ev.clientX - self.posX)) + "px";
								self.div.style.top = (self.posT + (ev.clientY - self.posY)) + "px";
							}

						}
						d.onmouseup = function(){
							//var self_height = 460;
							//if(mini_size==2){
								//self_height = 400;
							//}
							var self_height = parseInt(self.div.style.height);
							var self_width = parseInt(self.div.style.width);

							// 限制拖出区域
							if(parseInt(self.div.style.right)<0){
								self.div.style.right=0;
							};
							if(parseInt(self.div.style.bottom)<0){
								self.div.style.bottom=0;
							};
							if(parseInt(self.div.style.left)<0){
								self.div.style.left=0;
							};
							if(parseInt(self.div.style.top)<0){
								self.div.style.top=0;
							};
							if(parseInt(self.div.style.bottom)+self_height>parseInt(document.documentElement.clientHeight)){
								self.div.style.bottom = parseInt(document.documentElement.clientHeight)-self_height+"px";
							}
							if(parseInt(self.div.style.right)+self_width>parseInt(document.documentElement.clientWidth)){
								self.div.style.right = parseInt(document.documentElement.clientWidth)-self_width+"px";
							}

							if(self.div.releaseCapture){
								self.div.releaseCapture();
							}else if(window.captureEvents){
								window.captureEvents(Event.MOUSEMOVE|Event.MOUSEUP);
							};
							d.onmousemove = null;
							d.onmouseup = null;
						}
					}
				}
			}
			// 关闭悬浮框
			function close_company_mini(){
				$53("div_company_mini").style.display = "none";
				$53("iframe_company_mini").src = "";
				hz6d_company_mini.stop();
				if(acc_reauto == 1 && acc_zdfq=='yes'){
					setTimeout(function () {hz6d_showIvt3();},acc_reauto_time);
                    onliner_zdfq = 0;
				}
                if(acc_autotype == 3) {onliner_zdfq = 3;document.cookie = "onliner_zdfq72007377="+onliner_zdfq;}
                hz6d_startReautoTimer();//邀请框反复发起
				//添加cookie 实现整个域读取
				if(acc_reauto == 1) {
					document.cookie = "my_acc_reauto_time=" + new Date().getTime() + ";path=/";
				} else { //没有反复开启弹出窗口  删除cookie
					document.cookie = "my_acc_reauto_time=null;path=/";
				}
			}

			//隐藏悬浮框
			function close_company_mini(){
				$53("div_company_mini").style.display = "none";
				if(zdfq_switch=='yes'){
					if (acc_reauto == 1 && zdfq_type == 1) {//浮动窗口  开启反复发起
						setTimeout(function () {
							if(is_close == 1) hz6d_showIvt3();
							else hz6d_showIvt4();
						},acc_reauto_time);
                		onliner_zdfq = 0;
					}else if (zdfq_type == 3) {//交替发起
						if (first_ivt_type == 1) {
							setTimeout("hz6d_checkIvt()", acc_reauto_time);
						}else if (first_ivt_type == 2) {
							hz6d_checkIvt();
						}
					}
				}
				// if(acc_autotype == 3) {onliner_zdfq = 3;document.cookie = "onliner_zdfq72007377="+onliner_zdfq;}
				hz6d_startReautoTimer();//邀请框反复发起
				//添加cookie 实现整个域读取
				if(acc_reauto == 1) {
					document.cookie = "my_acc_reauto_time=" + new Date().getTime() + ";path=/";
				} else { //没有反复开启弹出窗口  删除cookie
					document.cookie = "my_acc_reauto_time=null;path=/";
				}
			}

			var ivt_top = 0;
			var ivt_left = 0;

			var ivt_width="400";
			var ivt_height="auto";

			var hz6d_effect_time = 200;
			var hz6d_effect_timer = 10;
            //获取邀请框的宽高
            function get_wh(){
                var ivt_obj=document.getElementById("acc_title").getElementsByTagName("div");
                var ivt_width=0;
                var ivt_height=0;
                for(var i=0;i<ivt_obj.length;i++){
                    var width=parseInt((ivt_obj[i].style.width).replace(/px/ig,""));
                    var height=parseInt((ivt_obj[i].style.height).replace(/px/ig,""));
                    if(width>ivt_width) ivt_width=width;
                    if(height>ivt_height) ivt_height=height;
                }
                return {"width":ivt_width,"height":ivt_height};
            }
			// 显示邀请框
			function get_ACCWindow(){
				var ivtPosition = hz6d_getIvtPosition();

				if(zdyivt==1){
					ivt_height_init = zdyivt_height;
					ivt_width_init = zdyivt_width;
				}else{
					ivt_height_init = "auto";
					ivt_width_init = "400px";
				}
				$53("kfivtwin").style.height = ivt_height_init;
				$53("kfivtwin").style.width = ivt_width_init;

				try{
					$53("kfivtwin").style.zIndex = "10088";
					$53("kfivtwin").style.fontSize = "12px";
					$53("kfivtwin").style.position = "absolute";
					if(how_float==1 && hasdoctype) $53("kfivtwin").style.position = "fixed";

					$53("kfiframe").style.width = $53("kfivtwin").clientWidth + 0 + "px";
					$53("kfiframe").style.height = $53("kfivtwin").clientHeight + -7 + "px";
					$53("kfiframe").style.position = "absolute";
					if(how_float==1 && hasdoctype) $53("kfiframe").style.position = "fixed";
					$53("kfiframe").style.filter = "alpha(opacity=1)";
					$53("kfiframe").style.display = "";
				}catch(e){}

				var openurl = "https://www6.53kf.com/webCompany.php?arg=10007377&style=1&kflist=off&kf=public%40atguigu.com%2Cliulei%40atguigu.com%2Cliumingyue%40atguigu.com%2Cinfo%40atguigu.com%2Cvideo%40atguigu.com%2C3069368606%40qq.com%2Ctingting%40atguigu.com%2Cwangya%40atguigu.com%2Czhuchangqing%40atguigu.com%2Cwanggang%40atguigu.com%2Cmary%40atguigu.com&zdkf_type=1&lnk_overflow=0&language=zh-cn&charset=gbk&username=&userinfo=&introurl=&lyurl=&lytype=0&copartner=&referer=http%3A%2F%2Fwww.atguigu.com%2Fbigdata%2F&keyword=http%3A%2F%2Fwww.atguigu.com%2F&brief=&logo=&question=&uid=22bdfd330ef010ae2173b1f01cea06da&tfrom=2" + force_kf;
				if(is_autoyqk == 1){
					once_autoyqk = Number(once_autoyqk) + 1;
					if(once_autoyqk == 1){
						try{
							acc_content = $53("hz6d_acc_content").innerHTML;
						}catch(e){}
					}
					if(man_content!=""){
						try{
							$53("hz6d_acc_content").innerHTML = man_content.replace(/\"/g, '&quot;').replace(/\'/g, '&#039;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
						}catch(e){}
						man_content = "";
					}
					else{
						try{
							$53("hz6d_acc_content").innerHTML = acc_content;
						}catch(e){}
					}
				}
				else{
					if(man_content!=""){
						try{
							$53("hz6d_acc_content").innerHTML = man_content.replace(/\"/g, '&quot;').replace(/\'/g, '&#039;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
						}catch(e){}
						man_content = "";
					}else{
						try{
							$53("hz6d_acc_content").innerHTML = acc_content;
						}catch(e){}
					}
				}

				try{
					var isNew = hz6d_ivt_tpl.indexOf("new2011");
					if(zdyivt==1 || isNew>0){
						var zdyIds = document.getElementsByTagName("div");
						for(var i=0; i<zdyIds.length; i++){
							if(zdyIds[i].id=="hz6d_53kf_invite_acc"){
								zdyIds[i].onclick = function(){onliner_zdfq=2;window.open(openurl,"_blank","height=473,width=703,top=200,left=200,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=no,location=no,titlebar=no");hidden_ivt();}
							}
						}
					}else{
						$53("hz6d_53kf_invite_acc").onclick = function(){onliner_zdfq=2;window.open(openurl,"_blank","height=473,width=703,top=200,left=200,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=no,location=no,titlebar=no");hidden_ivt();}
					}
				}catch(e){}

				function hz6d_open_move(iconDivMain){
					var obj = $53("kfivtwin");
					obj.style.display = "block";
					var obj_height = obj.offsetHeight;
					var obj_width = obj.offsetWidth;
					obj.style.display = "none";

					var tb_top = parseInt(iconDivMain.style.top.replace("px",""));
					var tb_left = parseInt(iconDivMain.style.left.replace("px",""));
					var tb_width = parseInt(iconDivMain.style.width.replace("px",""));
					var tb_height = parseInt(iconDivMain.style.height.replace("px",""));

					obj = $53("kfivteffect");
					obj.style.top = tb_top + "px";
					obj.style.left = tb_left + "px";
					obj.style.height = tb_height + "px";
					obj.style.width = tb_width + "px";
					obj.style.display = "block";

					var moveHeight = tb_height;
					var moveWidth	= tb_width;
					var moveTop		= tb_top;
					var moveLeft	 = tb_left;

					var offTop		 = Math.abs(tb_top-ivtPosition.top);
					var offLeft		= Math.abs(tb_left-ivtPosition.left);

					var topStep		= offTop/(hz6d_effect_time/hz6d_effect_timer);
					var leftStep	 = offLeft/(hz6d_effect_time/hz6d_effect_timer);

					var heightStep = (obj_height-tb_height)/(hz6d_effect_time/hz6d_effect_timer);
					var widthStep	= (obj_width-tb_width)/(hz6d_effect_time/hz6d_effect_timer);

					var topD = 1;
					if(tb_top-ivtPosition.top>0) { topD=-1; }
					var leftD = 1;
					if(tb_left-ivtPosition.left>0) { leftD=-1; }

					function dmove(){
						moveHeight += heightStep;
						moveWidth	+= widthStep;
						moveTop		+= topD*topStep;
						moveLeft	 += leftD*leftStep;

						if(moveWidth>obj_width){
							obj.style.display = "none";
							clearInterval(iIntervalId);
							hz6d_showIvtWindow();
						}else{
							var ivtPosition_t = hz6d_getIvtPosition();
							obj.style.height = moveHeight + 'px';
							obj.style.width = moveWidth + 'px';
							obj.style.top = moveTop + (ivtPosition_t.top-ivtPosition.top) + 'px';
							obj.style.left = moveLeft + (ivtPosition_t.left-ivtPosition.left) + 'px';
						}
					}
					var iIntervalId = setInterval(dmove, hz6d_effect_timer);
					try{iconDivMain.style.display = "none";}catch(e){}
				}

				if(hz6d_ivt_effect==1 && hz6d_kf_type==2 && hz6d_pos_model==1 && hz6d_hidden==0){
					hz6d_checkIconDivMain();
				}else{
					hz6d_showIvtWindow();
				}

				function hz6d_showIvtWindow(){
					var ivtPosition_t = hz6d_getIvtPosition();
					if(how_float==1) var ivtPosition_t = hz6d_getIvtFixedPosition();
					hz6d_setIvtTop(ivtPosition_t.top);
					hz6d_setIvtLeft(ivtPosition_t.left);
					$53("kfivtwin").style.display = "block";
					hz6d_initScrollPosition();
					hz6d_showFreeze();
					hz6d_startScrollTimer();
				}
				function hz6d_setIvtTop(top){
					$53("kfivtwin").style.top = top + "px";
					$53("kfiframe").style.top = top + "px";
				}
				function hz6d_setIvtLeft(left){
					$53("kfivtwin").style.left = left + "px";
					$53("kfiframe").style.left = left + "px";
				}
				function hz6d_initScrollPosition(){
					var scrollPosition = hz6d_getScrollPosition();
					ivt_top = scrollPosition.sTop;
					ivt_left = scrollPosition.sLeft;
				}
				function hz6d_checkIconDivMain(){
					var iconDivMain = $53("iconDivMain"+kf_icon_id);
					if(iconDivMain!=null){
						if(hz6d_close_icon==0){
							hz6d_open_move(iconDivMain);
						}else{
							hz6d_showIvtWindow();
						}
					}else{
						setTimeout(hz6d_checkIconDivMain, 100);
					}
				}
				function hz6d_startScrollTimer(){
					if(ivt_timer==0 && how_float!=1){
						if(browser=="360" || browser=="TheWorld"){
							ivt_timer = window.setInterval("ivt_autoScroll()", 500);
						}else{
							ivt_timer = window.setInterval("ivt_autoScroll()", 10);
						}
					}
				}

				var posX;
				var posY;
				fdiv = $53("kfivtwin");
				$53("acc_title").onmousedown=function(e){
					if(!e) e = window.event;	 //如果是IE
					posX = e.clientX - parseInt(fdiv.style.left);
					posY = e.clientY - parseInt(fdiv.style.top);
					fdiv.style.zIndex=999999999999;
					this.style.zIndex=999999999999;
					try{
						var bdElm = document.querySelector('#LXB_CONTAINER .lxb-container');
						if(bdElm !== null){
							bdElm.style.zIndex = 9999
						}
					}catch(e){}
					document.onmousemove = mousemove;
					document.onmouseup = function(n){document.onmousemove = null;}
				}
				// document.onmouseup = function(){
				// 	document.onmousemove = null;
				// }
				function mousemove(ev){
					if(ev==null) ev = window.event;//如果是IE
					fdiv.style.left = (ev.clientX - posX) + "px";
					fdiv.style.top = (ev.clientY - posY) + "px";
					ivt_top = Math.max(document.body.scrollTop,document.documentElement.scrollTop);
					ivt_left = Math.max(document.body.scrollLeft,document.documentElement.scrollLeft);

					// if(ivt_top==0) { ivt_top = document.documentElement.scrollTop; }
					// if(ivt_left==0) { ivt_left = document.documentElement.scrollLeft; }
				}
			}

			function hidden_ACCWindow(){
				function hz6d_close_move(iconDivMain){
					var obj = $53("kfivtwin");
					var obj_height = obj.offsetHeight;
					var obj_width = obj.offsetWidth;
					var ivtPosition = {top:obj.offsetTop,left:obj.offsetLeft};
					if(how_float==1) var ivtPosition = hz6d_getIvtPosition();
					obj.style.display = "none";

					var tb_top = parseInt(iconDivMain.style.top.replace("px",""));
					var tb_left = parseInt(iconDivMain.style.left.replace("px",""));
					var tb_width = parseInt(iconDivMain.style.width.replace("px",""));
					var tb_height = parseInt(iconDivMain.style.height.replace("px",""));

					obj = $53("kfivteffect");
					obj.style.top = ivtPosition.top + "px";
					obj.style.left = ivtPosition.left + "px";
					obj.style.height = obj_height + "px";
					obj.style.width = obj_width + "px";
					obj.style.display = "block";

					var moveHeight = obj_height;
					var moveWidth	= obj_width;
					var moveTop		= ivtPosition.top;
					var moveLeft	 = ivtPosition.left;

					var offTop		 = Math.abs(tb_top-ivtPosition.top);
					var offLeft		= Math.abs(tb_left-ivtPosition.left);

					var topStep		= offTop/(hz6d_effect_time/hz6d_effect_timer);
					var leftStep	 = offLeft/(hz6d_effect_time/hz6d_effect_timer);

					var heightStep = (obj_height-tb_height)/(hz6d_effect_time/hz6d_effect_timer);
					var widthStep	= (obj_width-tb_width)/(hz6d_effect_time/hz6d_effect_timer);

					var topD = 1;
					if(tb_top-ivtPosition.top>0) { topD=-1; }
					var leftD = 1;
					if(tb_left-ivtPosition.left>0) { leftD=-1; }

					ivtPosition = hz6d_getIvtPosition();
					function dmove()
					{
						moveHeight -= heightStep;
						moveWidth	-= widthStep;
						moveTop		-= topD*topStep;
						moveLeft	 -= leftD*leftStep;

						if(moveWidth<tb_width){
							obj.style.display = "none";
							try{iconDivMain.style.display = "block";}catch(e){}
							clearInterval(iIntervalId);
							hz6d_startReautoTimer();
						}else{
							var ivtPosition_t = hz6d_getIvtPosition();
							obj.style.height = moveHeight + 'px';
							obj.style.width = moveWidth + 'px';
							obj.style.top = moveTop + (ivtPosition_t.top-ivtPosition.top) + 'px';
							obj.style.left = moveLeft + (ivtPosition_t.left-ivtPosition.left) + 'px';
						}
					}
					var iIntervalId = setInterval(dmove, hz6d_effect_timer);
				}
				if(hz6d_ivt_effect==1 && hz6d_kf_type==2 && hz6d_pos_model==1 && hz6d_hidden==0){
					var iconDivMain = $53("iconDivMain"+kf_icon_id);
					if(hz6d_close_icon==0){
						hz6d_close_move(iconDivMain);
					}else{
						$53("kfivtwin").style.display = "none";
						hz6d_startReautoTimer();
					}
				}else{
					$53("kfivtwin").style.display = "none";
					hz6d_startReautoTimer();
				}
			}

			function hz6d_startReautoTimer(){//邀请框反复发起
				// if(acc_reauto==1 && zdfq_switch == 'yes') { setTimeout("hz6d_checkIvt()", acc_reauto_time); }
				if(is_close == 1) return false;//如果已经结束对话  则不再执行规则
				if (acc_reauto==1 && zdfq_type==2 && zdfq_switch == 'yes') {//主动发起方式为邀请框且开启反复发起
					setTimeout("hz6d_checkIvt()", acc_reauto_time);
				}else if (zdfq_type==3 && zdfq_switch == 'yes') {//主动发起方式为交替发起
					if (onliner_zdfq == 3) {
						setTimeout(function(){
							if (document.getElementById("div_company_mini") && document.getElementById("div_company_mini").style.display!='none') {
								if (1 == 1 || 1 > 20) {
									show_floatWindow('zdfq');
								}else{
									hz6d_showIvt4();
								}
							}else{
								hz6d_showIvt3();
							}
						}, acc_reauto_time);
					}
				}
			}

			// get ivt fixed position
			function hz6d_getIvtFixedPosition(){
				var clientRect = hz6d_getClientWindow();

				if(ivt_height=="auto") { ivt_height="200"; }
				if(zdyivt==1){
					ivt_width = zdyivt_width.replace("px","");
					ivt_height = zdyivt_height.replace("px","");
				}
				if(acc_middle==1){
					acc_lr = 1;
					acc_tb = 1;
                                        var ivt_wh=get_wh();
					acc_left = (clientRect.width-ivt_wh.width)/2;
					acc_top = (clientRect.height-ivt_wh.height)/2-40;
				}

				if(acc_lr==2){
					var ivt_left_init = clientRect.width - acc_left - ivt_width;
				}else{
					var ivt_left_init = acc_left;
				}
				if(acc_tb==2){
					var ivt_top_init = clientRect.height - acc_top - ivt_height;
				}else{
					var ivt_top_init = acc_top;
				}
				return {top:ivt_top_init, left:ivt_left_init};
			}

			// get ivt position
			function hz6d_getIvtPosition(){
				var clientRect = hz6d_getClientWindow();

				if(ivt_height=="auto") {
					if(height_new == 0 || height_new == ''){
						ivt_height="200";
					}else{
						ivt_height=height_new;
					}
				}
				if(zdyivt==1){
					ivt_width = zdyivt_width.replace("px","");
					ivt_height = zdyivt_height.replace("px","");
				}
				if(acc_middle==1){
					acc_lr = 1;
					acc_tb = 1;
                    var ivt_wh=get_wh();
					acc_left = (clientRect.width-ivt_wh.width)/2;
					acc_top = (clientRect.height-ivt_wh.height)/2-40;
				}

				var scrollPosition = hz6d_getScrollPosition();
				if(acc_lr==2){
					var ivt_left_init = scrollPosition.sLeft + clientRect.width - acc_left - ivt_width;
				}else{
					var ivt_left_init = acc_left + scrollPosition.sLeft;
				}
				if(acc_tb==2){
					var ivt_top_init = clientRect.height + scrollPosition.sTop - acc_top - ivt_height;
				}else{
					var ivt_top_init = acc_top + scrollPosition.sTop;
				}
				return {top:ivt_top_init, left:ivt_left_init};
			}

			// get scroll position
			function hz6d_getScrollPosition(){
				var s_top = document.body.scrollTop;
				var s_left = document.body.scrollLeft;
				if(s_left==0) { s_left=document.documentElement.scrollLeft; }
				if(s_top==0) { s_top=document.documentElement.scrollTop; }
				return {sTop:s_top, sLeft:s_left};
			}

			// get client width height
			function hz6d_getClientWindow(){
				var clientWidth = 0;
				var clientHeight = 0;
				if(document.documentElement && document.documentElement.scrollTop){
					clientWidth = document.documentElement.clientWidth;
					clientHeight = document.documentElement.clientHeight;
				}else if(document.body){
					clientWidth = document.body.clientWidth;
					clientHeight = document.body.clientHeight;
				}
				if(hasdoctype){
					clientHeight = document.documentElement.clientHeight;
					clientWidth = document.documentElement.clientWidth;
				}
				return {width:clientWidth, height:clientHeight};
			}

			// old client height width
			var hz6d_oldClient = hz6d_getClientWindow();
			function ivt_autoScroll(){
				var scrollPosition = hz6d_getScrollPosition();
				// new client height width
				var hz6d_newClient = hz6d_getClientWindow();

				var hz6d_kfivtwin = $53("kfivtwin");
				var hz6d_kfiframe = $53("kfiframe");

				// top change
				if(scrollPosition.sTop!=ivt_top || hz6d_oldClient.height!=hz6d_newClient.height){
					if(scrollPosition.sTop!=ivt_top){
						if(browser=="360" || browser=="TheWorld"){
							ivt_top = scrollPosition.sTop;
						}else{
							ivt_top = smoothMove(ivt_top, scrollPosition.sTop);
						}
					}
					if(hz6d_oldClient.height!=hz6d_newClient.height){
						if(browser=="360" || browser=="TheWorld"){
							hz6d_oldClient.height = hz6d_newClient.height;
						}else{
							hz6d_oldClient.height = smoothMove(hz6d_oldClient.height, hz6d_newClient.height);
						}
					}
					var hz6d_ivt_top = 0;
					if(acc_tb==2){
						hz6d_ivt_top = hz6d_oldClient.height - acc_top - ivt_height + ivt_top;
					}else{
						hz6d_ivt_top = acc_top + ivt_top;
					}

					if(browser=="360" || browser=="TheWorld"){
						if(hz6d_kfivtwin.style.display=="none"){
							hz6d_recover = false;
						}else{
							hz6d_recover = true;
							hz6d_kfivtwin.style.display = "none";
							try{
								hz6d_kfiframe.style.display = "none";
							}catch(e){}
						}
						hz6d_kfivtwin.style.top = hz6d_ivt_top+"px";
						try{
							hz6d_kfiframe.style.top = hz6d_ivt_top+"px";
						}catch(e){}
						if(hz6d_recover==true){
							hz6d_kfivtwin.style.display = "block";
							try{
								hz6d_kfiframe.style.display = "block";
							}catch(e){}
						}
					}else{
						hz6d_kfivtwin.style.top = hz6d_ivt_top+"px";
						try{
							hz6d_kfiframe.style.top = hz6d_ivt_top+"px";
						}catch(e){}
					}
				}

				// left change
				if(scrollPosition.sLeft!=ivt_left || hz6d_oldClient.width!=hz6d_newClient.width){
					if(scrollPosition.sLeft!=ivt_left){
						if(browser=="360" || browser=="TheWorld"){
							ivt_left = scrollPosition.sLeft;
						}else{
							ivt_left = smoothMove(ivt_left, scrollPosition.sLeft);
						}
					}
					if(hz6d_oldClient.width!=hz6d_newClient.width){
						if(browser=="360" || browser=="TheWorld"){
							hz6d_oldClient.width = hz6d_newClient.width;
						}else{
							hz6d_oldClient.width = smoothMove(hz6d_oldClient.width, hz6d_newClient.width);
						}
					}
					var hz6d_ivt_left = 0;
					if(acc_lr==2){
						hz6d_ivt_left = ivt_left + hz6d_oldClient.width - acc_left - ivt_width;
					}else{
						hz6d_ivt_left = acc_left + ivt_left;
					}

					if(browser=="360" || browser=="TheWorld"){
						if(hz6d_kfivtwin.style.display=="none"){
							hz6d_recover = false;
						}else{
							hz6d_recover = true;
							hz6d_kfivtwin.style.display = "none";
							try{
								hz6d_kfiframe.style.display = "none";
							}catch(e){}
						}
						hz6d_kfivtwin.style.left = hz6d_ivt_left+"px";
						try{
							hz6d_kfiframe.style.left = hz6d_ivt_left+"px";
						}catch(e){}
						if(hz6d_recover==true){
							hz6d_kfivtwin.style.display = "block";
							try{
								hz6d_kfiframe.style.display = "block";
							}catch(e){}
						}
					}else{
						hz6d_kfivtwin.style.left = hz6d_ivt_left+"px";
						try{
							hz6d_kfiframe.style.left = hz6d_ivt_left+"px";
						}catch(e){}
					}
				}
			}
			function show_floatWindow2(){
				if (document.getElementById("div_company_mini") && document.getElementById("div_company_mini").style.display!='none') {
					if (1 == 1 || 1 > 20) {
						show_floatWindow();
					}else{
						hz6d_showIvt4();
					}
				}else{
					hz6d_showIvt3();
				}
			}
			//替换连接 new
			function ivt_seturl(zdy_yqk)
			{
				var divs_str = zdy_yqk.replace(/operating="([^"]*)"/g,function(str){
					var vals = str.split('"');
					if(vals[1])
					{
						var click_str = '';
						var link_str ='';
						var target_str = '_blank';
						var hrs = '';
						var valst = vals[1].split("|");
						switch(valst[0])
						{
							case 'KF':
								var click_open_url = 'window.open(\"https://www6.53kf.com/webCompany.php?arg=10007377&style=1&kflist=off&kf=public%40atguigu.com%2Cliulei%40atguigu.com%2Cliumingyue%40atguigu.com%2Cinfo%40atguigu.com%2Cvideo%40atguigu.com%2C3069368606%40qq.com%2Ctingting%40atguigu.com%2Cwangya%40atguigu.com%2Czhuchangqing%40atguigu.com%2Cwanggang%40atguigu.com%2Cmary%40atguigu.com&zdkf_type=1&lnk_overflow=0&language=zh-cn&charset=gbk&username=&userinfo=&introurl=&lyurl=&lytype=0&copartner=&referer=http%3A%2F%2Fwww.atguigu.com%2Fbigdata%2F&keyword=http%3A%2F%2Fwww.atguigu.com%2F&brief=&logo=&question=&uid=22bdfd330ef010ae2173b1f01cea06da&tfrom=2\",\"_blank\",\"height=600,width=800,top=50,left=200,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=no,location=no,titlebar=no\")';
								click_open_url = encodeURIComponent(click_open_url);
								click_str ='onliner_zdfq=2;hz6d_is_exist(\"'+click_open_url+'\");hidden_ivt();';
								if (zdfq_type == 3) {

									click_str = 'onliner_zdfq=2;jtfq_type=2;show_floatWindow2();hidden_ivt();';

								}
								break;
								//click_str ='onliner_zdfq=2;get_open_start();window.open(\"https://www6.53kf.com/webCompany.php?arg=10007377&style=1&kflist=off&kf=public%40atguigu.com%2Cliulei%40atguigu.com%2Cliumingyue%40atguigu.com%2Cinfo%40atguigu.com%2Cvideo%40atguigu.com%2C3069368606%40qq.com%2Ctingting%40atguigu.com%2Cwangya%40atguigu.com%2Czhuchangqing%40atguigu.com%2Cwanggang%40atguigu.com%2Cmary%40atguigu.com&zdkf_type=1&lnk_overflow=0&language=zh-cn&charset=gbk&username=&userinfo=&introurl=&lyurl=&lytype=0&copartner=&referer=http%3A%2F%2Fwww.atguigu.com%2Fbigdata%2F&keyword=http%3A%2F%2Fwww.atguigu.com%2F&brief=&logo=&question=&uid=22bdfd330ef010ae2173b1f01cea06da&tfrom=2\",\"_blank\",\"height=473,width=703,top=200,left=200,status=yes,toolbar=no,menubar=no,resizable=yes,scrollbars=no,location=no,titlebar=no\");hidden_ivt();';break;
							case 'CLOSE':
								click_str = 'onliner_zdfq=3;jtfq_type=1;hidden_ivt();'; break;
							case 'ETEL':
								click_str = 'window.open(\'https://tb.53kf.com/eht.php?company_id=72007377&style_id=106007519\',\'_blank\',\'height=400,width=300,top=100,left=200,status=yes,toolbar=no,menubar=no,resizable=no,scrollbars=no,location=no,titlebar=no\')';break;
							case 'QQ':
								if(valst[1]){
									if(valst[1].toLowerCase().indexOf('biz') > -1){
										var qq = valst[1].replace('biz','');
										link_str = 'https://www6.53kf.com/bizqq.php?qq=' + qq + '&from=' + window.encodeURIComponent(window.location.href);
									}else{
										link_str = 'tencent://message/?uin=' + valst[1];
									}
									if(valst[1] == '97559766')
										link_str="http://www.53kf.com/?www.53rj.com";
								};
								break;
							case 'MSN': if (valst[1]) {link_str = 'msnim:chat?contact=' + valst[1]; if(valst[1].indexOf('fonlue') > -1) link_str='http://www.53kf.com/?www.53rj.com';} break;
							case 'WW': if (valst[1]) link_str = 'aliim://sendmsg?touid=cntaobao' + valst[1]; if(valst[1] == 'fonlue') link_str='http://www.53kf.com/?www.53rj.com'; break;
							case 'HYLINK': if (valst[1]) link_str = valst[1]; if(valst[2]) target_str = valst[2]; hrs = 1;break;
							default: click_str = '';link_str = '';
						}
						var onclick_str = '';
						if (link_str == '' && click_str != '') onclick_str = "onclick='" + click_str + ";'";
						else if (link_str != ''&& click_str != '') onclick_str = ' onclick="' + click_str + ';window.open(\'' + link_str +'\',\'' + target_str + '\');" ';
						else if (link_str != ''&& click_str == '' && !hrs) onclick_str = ' onclick="window.open(\'' + link_str +'\');" ';
						else if (link_str != ''&& click_str == '' && hrs) onclick_str = 'href="'+ link_str+'" target="'+ target_str +'"';
						return onclick_str;
					}
				});
				return divs_str;
			}
			// if(1==0 && "on"=="on"){
			// 	if(acc_poptype==1){
			// 		setTimeout("hz6d_checkIvt()", 500);
			// 	}else if(acc_poptype==2){
			// 		setTimeout(function () {hz6d_startReautoTimer2(acc_chattype);}, 500);
			// 	}
			// }
			setTimeout(function(){
				var imgdragstart = function(){return false;};
				try {
					var hid_img = $53('kfivtwin').getElementsByTagName('img');
					for(i in hid_img)hid_img[i].ondragstart=imgdragstart;
					$53('acc_title').style.overflow = 'visible'; // 修正bug
				} catch(e){}
			},2000);