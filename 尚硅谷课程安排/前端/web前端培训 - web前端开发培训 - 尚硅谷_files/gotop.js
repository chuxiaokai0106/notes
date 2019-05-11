;(function(){
	var ua=navigator.userAgent;
	if (!!ua.match(/(iPhone|iPod|Android|ios)/i) || !!ua.match(/AppleWebKit.*Mobile.*/)  || (!!ua.match(/AppleWebKit.*Mobile.*/) && ua.indexOf("Linux") > -1)) {
		if(!(/iPad/i).test(ua)){

			var except =['http://www.atguigu.com/bigdatasz.shtml','http://www.atguigu.com/hadoopjob.shtml','http://www.atguigu.com/blockchain/','http://www.atguigu.com/yurenjie.shtml','http://www.atguigu.com/springboot.shtml','http://www.atguigu.com/speech.shtml','http://www.atguigu.com/teacher_sz.shtml','http://www.atguigu.com/hspletter.shtml','http://www.atguigu.com/zhxn.shtml','http://www.atguigu.com/bd_dzht.shtml','http://www.atguigu.com/bd_kb.shtml','http://www.atguigu.com/price.shtml','http://www.atguigu.com/only.shtml','http://www.atguigu.com/1024.shtml','http://www.atguigu.com/jiuye.shtml','http://sz.atguigu.com/web/index.html','http://sz.atguigu.com/','http://www.atguigu.com/download.shtml','http://www.atguigu.com/teacher.shtml','http://www.atguigu.com/opensource.shtml','http://www.atguigu.com/online.shtml','http://www.atguigu.com/contant.shtml','http://www.atguigu.com/2017jihua.shtml','http://www.atguigu.com/faq.shtml','http://www.atguigu.com/final_gf.shtml','http://www.atguigu.com/videoevaluation.shtml'];

			var href = window.location.href;

			var b = true;

			for(var i=0;i<except.length;i++){
				if(except[i]==href){
					b=false;
					return;
				}
			}

			if(href.indexOf('test.atguigu.com')>=0){
				b=false;
			}

			if(href.indexOf('2017y1.shtml')>=0){
				b=false;
			}
			if(href.indexOf('2017y2.shtml')>=0){
				b=false;
			}



			if(href=='http://www.atguigu.com/' || href =='http://www.atguigu.com' ){
				b = true;
			}else{
				b = false;
			}

			//学科单页适配移动端
			if(href.indexOf('web')>=0){
				window.location.href = 'http://m.atguigu.com/html5/';
			} 
			if(href.indexOf('python')>=0){
				window.location.href = 'http://m.atguigu.com/python/';
			} 
			if(href.indexOf('bigdata/')>=0){
				window.location.href = 'http://m.atguigu.com/bigdata/';
			}
			if(href.indexOf('kecheng.shtml')>=0){
				window.location.href = 'http://m.atguigu.com/java/';
			}
			if(href.indexOf('181024')>=0){
				window.location.href = 'http://m.atguigu.com/181024/';
			}
			
			if(b){
				
				window.location.href = 'http://m.atguigu.com';
				
			}

			
			
		}
	}else{
		if(window.location.href.indexOf('http://m.atguigu.com') >= 0){
			window.location.href= 'http://www.atguigu.com';
		}
	}
})();

var scrolltotop={
	setting:{
		startline:100, //起始行
		scrollto:0, //滚动到指定位置
		scrollduration:400, //滚动过渡时间
		fadeduration:[500,100] //淡出淡现消失
	},
	controlHTML:'<img src="http://www.atguigu.com/js/topback.gif" style="width:54px; height:54px; border:0;" />', //返回顶部按钮
	controlattrs:{offsetx:0,offsety:1},//返回按钮固定位置
	anchorkeyword:"#top",
	state:{
		isvisible:false,
		shouldvisible:false
	},scrollup:function(){
		if(!this.cssfixedsupport){
			this.$control.css({opacity:0});
		}
		var dest=isNaN(this.setting.scrollto)?this.setting.scrollto:parseInt(this.setting.scrollto);
		if(typeof dest=="string"&&jQuery("#"+dest).length==1){
			dest=jQuery("#"+dest).offset().top;
		}else{
			dest=0;
		}
		this.$body.animate({scrollTop:dest},this.setting.scrollduration);
	},keepfixed:function(){
		var $window=jQuery(window);
		var controlx=$window.scrollLeft()+$window.width()-this.$control.width()-this.controlattrs.offsetx;
		var controly=$window.scrollTop()+$window.height()-this.$control.height()-this.controlattrs.offsety;
		this.$control.css({left:controlx+"px",top:controly+"px"});
	},togglecontrol:function(){
		var scrolltop=jQuery(window).scrollTop();
		if(!this.cssfixedsupport){
			this.keepfixed();
		}
		this.state.shouldvisible=(scrolltop>=this.setting.startline)?true:false;
		if(this.state.shouldvisible&&!this.state.isvisible){
			this.$control.stop().animate({opacity:1},this.setting.fadeduration[0]);
			this.state.isvisible=true;
		}else{
			if(this.state.shouldvisible==false&&this.state.isvisible){
				this.$control.stop().animate({opacity:1},this.setting.fadeduration[1]);
				this.state.isvisible=false;
			}
		}
	},init:function(){
		jQuery(document).ready(function($){
			var mainobj=scrolltotop;
			var iebrws=document.all;
			mainobj.cssfixedsupport=!iebrws||iebrws&&document.compatMode=="CSS1Compat"&&window.XMLHttpRequest;
			mainobj.$body=(window.opera)?(document.compatMode=="CSS1Compat"?$("html"):$("body")):$("html,body");
			mainobj.$control=$('#top11');
			mainobj.$control.click(function(){mainobj.scrollup();return false;});if(document.all&&!window.XMLHttpRequest&&mainobj.$control.text()!=""){mainobj.$control.css({width:mainobj.$control.width()});}mainobj.togglecontrol();
			$('a[href="'+mainobj.anchorkeyword+'"]').click(function(){mainobj.scrollup();return false;});
			$(window).bind("scroll resize",function(e){mainobj.togglecontrol();});
		});
	}
};
$(function(){
   
	function loadimg(arr,funLoading,funOnLoad,funOnError){ 
	  var numLoaded=0, 
	  numError=0, 
	  isObject=Object.prototype.toString.call(arr)==="[object Object]" ? true : false; 
	   
	  var arr=isObject ? arr.get() : arr; 
	  for(a in arr){ 
	    var src=isObject ? $(arr[a]).attr("data-src") : arr[a]; 
	    preload(src,arr[a]); 
	  } 
	   
	  function preload(src,obj){ 
	    var img=new Image(); 
	    img.onload=function(){ 
	      numLoaded++; 
	      funLoading && funLoading(numLoaded,arr.length,src,obj); 
	      funOnLoad && numLoaded==arr.length && funOnLoad(numError); 
	    }; 
	    img.onerror=function(){ 
	      numLoaded++; 
	      numError++; 
	      funOnError && funOnError(numLoaded,arr.length,src,obj); 
	    } 
	    img.src=src; 
	  } 
	   
	} 

	loadimg(['http://www.atguigu.com/images/r_wx_h.png','http://www.atguigu.com/images/r_phone_h.png','http://www.atguigu.com/images/r_ziliao_h.png','http://www.atguigu.com/images/phone.png']);
});
//右侧菜单栏
$(function(){
	var r_str = '<style type="text/css">    html,body,div,span,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,abbr,address,cite,code,del,dfn,em,img,ins,kbd,q,samp,small,strong,sub,sup,var,input,textarea,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,caption,aside,figure,footer,header,hgroup,menu,nav,section,menu,time,mark,audio,video {    margin: 0;    padding: 0;    border: 0;    outline: 0}article,aside,figure,footer,header,hgroup,nav,section {    display: block}nav ul {    list-style: none}blockquote,q {    quotes: none}blockquote:before,blockquote:after,q:before,q:after {    content: \'\';content:none}a{margin:0;padding:0;font-size:100%;vertical-align:baseline;background:0 0;text-decoration:none;cursor:pointer}a:focus{outline:0}a:link,a:visited{text-decoration:none}a:active,a:hover{text-decoration:none;cursor:pointer}hr{display:block;height:1px;border:0;border-top:1px solid#ccc;margin:1em 0;padding:0}ul,ol{list-style:none;list-style-image:none;margin:0;padding:0}img{border:0;-ms-interpolation-mode:bicubic}.dd_listbox:before{content:\'\';display:inline-block;padding:7px;background:#fff;position:absolute;top:-8px;left:20px;box-shadow:-2px 0 0#fff,0-2px 5px rgba(0,0,0,.1),0 2px 0#fff,2px 0 5px rgba(0,0,0,.1);transform:rotate(-45deg);-ms-transform:rotate(-45deg);-moz-transform:rotate(-45deg);-webkit-transform:rotate(-45deg);-o-transform:rotate(-45deg)}@-webkit-keyframes ball-scale{0%{-webkit-transform:scale(0);transform:scale(0)}100%{-webkit-transform:scale(1);transform:scale(1);opacity:0}}@keyframes ball-scale{0%{-webkit-transform:scale(0);transform:scale(0)}100%{-webkit-transform:scale(1);transform:scale(1);opacity:0}}@-webkit-keyframes an-scale{0%{-webkit-transform:scale(1);transform:scale(1)}100%{-webkit-transform:scale(2);transform:scale(2);opacity:0}}@keyframes an-scale{0%{-webkit-transform:scale(1);transform:scale(1)}100%{-webkit-transform:scale(2);transform:scale(2);opacity:0}}@keyframes rock{0%{-webkit-transform:rotate(-30deg);transform:rotate(-30deg)}10%{-webkit-transform:rotate(-15deg);transform:rotate(-15deg)}20%{-webkit-transform:rotate(-30deg);transform:rotate(-30deg)}30%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}35%{-webkit-transform:rotate(-15deg);transform:rotate(-15deg)}40%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}45%{-webkit-transform:rotate(-15deg);transform:rotate(-15deg)}50%{-webkit-transform:rotate(-30deg);transform:rotate(-30deg)}100%{-webkit-transform:rotate(-30deg);transform:rotate(-30deg)}}.toolbar{z-index:9999;position:fixed;right:10px;bottom:4%;z-index:9999;-webkit-transition:all.3s;-moz-transition:all.3s;-ms-transition:all.3s;-o-transition:all.3s;transition:all.3s}.toolbarbox{padding-top:60px;width:52px;height:296px;background:#fff;position:fixed;right:0;top:195px;border-top-left-radius:8px;border-bottom-left-radius:8px;box-shadow:0 0 6px rgba(0,0,0,.09);color:#fff}.toolbarbox img{border:0;max-width:100%;margin-top:10px}.msg{width:52px;height:56px;text-align:center;position:relative;cursor:pointer}.msg.msg-line{position:absolute;top:60px;left:21px;width:10px;height:1px;border-bottom:1px solid#e7e7e7}img.msg-img{position:absolute;left:8px;top:10px}.hidemsg{width:210px;height:40px;line-height:28px;background:#10c46e;text-align:center;border-radius:5px;overflow:hidden}.hidemsg div{position:absolute;left:0;right:0;top:0;bottom:0;margin:auto;pointer-events:none;background-color:#fff;-webkit-border-radius:100%;-moz-border-radius:100%;-o-border-radius:100%;-ms-border-radius:100%;border-radius:100%;-webkit-animation-fill-mode:both;-moz-animation-fill-mode:both;-ms-animation-fill-mode:both;-o-animation-fill-mode:both;animation-fill-mode:both;display:inline-block;width:204px;height:204px;-webkit-animation:ball-scale 1s 0s ease-in-out infinite;-moz-animation:ball-scale 1s 0s ease-in-out infinite;-ms-animation:ball-scale 1s 0s ease-in-out infinite;-o-animation:ball-scale 1s 0s ease-in-out infinite;animation:ball-scale 1s 0s ease-in-out infinite}.hidemsg p{line-height:40px;color:#fff;font-weight:700;font-size:16px}.hidemsgAfter{width:225px;height:40px;position:relative;left:-222px;top:-40px;border-radius:5px;overflow:hidden;cursor:pointer}.hidemsgAfter:after{content:\'\';position:absolute;top:11px;right:7px;display:block;border-top:8px solid transparent;border-bottom:8px solid transparent;border-left:8px solid#10c46e}.mobel{width:52px;height:56px;text-align:center;position:relative;cursor:pointer}.hidemobelBox{width:183px;min-height:60px;background:#10c46e;padding:7px;border-radius:8px;display:none;position:absolute;right:63px;top:17px;cursor:pointer;font-weight:700;text-align:left;line-height:30px}.wx.hidemobelBox{height:auto;text-align:center;width:173px}.hidemobelBox:after{content:\'\';position:absolute;top:6px;right:-8px;display:block;border-top:8px solid transparent;border-bottom:8px solid transparent;border-left:8px solid#10c46e}.Rtop{width:52px;height:56px;text-align:center;cursor:pointer}.hideRtop{width:57px;height:28px;line-height:28px;background:#10c46e;text-align:center;display:none;position:absolute;top:128px;right:63px;border-radius:5px}.hideRtop:after{content:\'\';position:absolute;top:6px;right:-7px;display:block;border-top:8px solid transparent;border-bottom:8px solid transparent;border-left:8px solid#10c46e}.tool-line{width:10px;height:1px;border-bottom:1px solid#e7e7e7;margin:0 auto;margin-top:10px}</style><body class="YaHei index"><div class="toolbar"><div class="toolbarbox"><div class="msg"><a href="http://www6.53kf.com/webCompany.php?arg=10007377&style=1" target="blank"><img src="http://www.atguigu.com/images/nav/msg.png"alt=""class="msg-img"id="msg"style="transform:rotate(0deg)"><div class="msg-line"></div><div class="hidemsgAfter"><div class="hidemsg"><p>现在就与学习导师聊一聊</p><div></div></div></div></a></div><div class="mobel" id="download"><a href="http://www.atguigu.com/download.shtml" target="_blank"><img src="http://www.atguigu.com/images/nav/download.jpg"alt=""><div class="tool-line"></div></a></div><div class="mobel" id="dian"><img src="http://www.atguigu.com/images/nav/dian.jpg" alt=""><div class="tool-line"></div><div class="hidemobelBox"><p>北京：010-56253825<br>深圳：0755-85293825</p></div></div><div class="mobel wx" id="wx"><img id="wxImg" src="http://www.atguigu.com/images/nav/wx.jpg" alt=""><div class="tool-line"></div><div class="hidemobelBox"><img src="http://www.atguigu.com/images/nav/wxEwm.jpg"></div></div><div class="Rtop" id="top11"><a href="javascript:"><img src="http://www.atguigu.com/images/nav/topHover.jpg"alt=""></a><div class="hideRtop"><p>回到顶部</p></div></div></div></div>';
	$('body').append(r_str);
	scrolltotop.init();
   

    $('#download').on('mouseover',function(){
        $(this).find('img').attr('src','http://www.atguigu.com/images/nav/downloadHover.jpg');
    }).on('mouseout',function(){
         $(this).find('img').attr('src','http://www.atguigu.com/images/nav/download.jpg');
    });


    $('#dian').on('mouseover',function(){
        $(this).find('img').attr('src','http://www.atguigu.com/images/nav/dianHover.jpg');
          $(this).find('.hidemobelBox').show();
    }).on('mouseout',function(){
         $(this).find('img').attr('src','http://www.atguigu.com/images/nav/dian.jpg');
          $(this).find('.hidemobelBox').hide();
    });

     $('#wx').on('mouseover',function(){
         $('#wxImg').attr('src','http://www.atguigu.com/images/nav/wxHover.jpg');
          $(this).find('.hidemobelBox').show();
    }).on('mouseout',function(){
         $('#wxImg').attr('src','http://www.atguigu.com/images/nav/wx.jpg');
          $(this).find('.hidemobelBox').hide();
    });

});
