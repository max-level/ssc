(function(a){a.fn.createModal=function(b,d){var c=a.extend({},a.fn.createModal.defaults,b);return this.each(function(){$this=a(this);var f=document.createElement("div"),h=document.createElement("div"),g=document.createElement("div");a(h).css({position:"absolute",top:0,left:0,width:"100%",height:"100%","background-color":c.background,opacity:0.5});a(g).css({position:"fixed",background:"rgb(230,241,246)",background:"-moz-linear-gradient(top, rgba(230,241,246,1) 0%, rgba(248,251,252,1) 100%)",background:"-webkit-linear-gradient(top, rgba(230,241,246,1) 0%,rgba(248,251,252,1) 100%)",background:"linear-gradient(to bottom, rgba(230,241,246,1) 0%,rgba(248,251,252,1) 100%)",filter:"progid:DXImageTransform.Microsoft.gradient( startColorstr='#e6f1f6', endColorstr='#f8fbfc',GradientType=0 )",width:c.width,height:c.height,left:(a(document).width()-parseInt(c.width))/2,top:(a(window).height()-parseInt(c.height))/2});a(f).css({position:"fixed",width:"100%",height:a(document).height(),zIndex:999,left:0,top:0}).append(h).append(g);var e=function(i){a(window).resize(function(){a(g).css({left:(a(window).width()-parseInt(c.width))/2,top:(a(window).height()-parseInt(c.height))/2});a(h).css({height:a(document).height()})});a.ajax({url:"lastResult?lottery="+lottery,type:"GET",contentType:"application/json",data:"",success:function(s){a(g).append("<div class='modal-title' control-move><div class='pn_1'>"+lotteryName+"</div><div class='pn_2'>"+s.drawNumber+" 期开奖</div></div>");a(g).append("<div class='modal-close close-pos-r-t'><img src='/newdsn/images/delete.png'></div>");var n=a("<p>").addClass("menu1").appendTo(a(g));var t=a("<div>").addClass("modal-promot-mess").appendTo(n);a("<div>").addClass("pk_name").appendTo(t);var k=a("<div>").attr("id","result_balls").addClass("T_"+template+" L_"+lottery).appendTo(t);if(template=="HK6"||template=="3D"||template=="KL8"){k.css("margin-top","5px")}else{k.css("margin-top","-5px")}k.empty();var q=s.result.split(",");var v=s.resultOther.split(",");var o;if(template=="HK6"){o=get_animal_by_ball}else{if(template=="3D"){o=function(p,w){return["佰","拾","个"][w]}}}for(var r=0;r<q.length;r++){var m=q[r];var l=a("<span>").appendTo(k);l.append(a("<b>").addClass("b"+m).text(m));if(o){l.append(a("<i>").text(o(m,r)))}if(template=="HK6"){if(r==5){a("<span>").addClass("plus").text("+").appendTo(k)}}}if(v.length>0){a("<div>").css("width","300px").css("float","left").appendTo(k);if(template=="GXKLSF"){j=a("<div>").addClass("result_stat clearfix ml8").appendTo(k)}else{if(template!="PK10"){j=a("<div>").addClass("result_stat clearfix ml4").appendTo(k)}else{var j=a("<div>").addClass("result_stat clearfix").appendTo(k)}}for(var r=0;r<v.length;r++){var u=v[r];if(u){j.append(a("<div>").addClass("statitm").text(u))}}}},error:function(j){alert("失败："+j.code+",请检查下注状况後重试。")},complete:function(){a(f).prependTo("body");if(c.bgClose){a(h).click(function(){a(g).empty();a(f).remove()})}a(".modal-close").click(function(){a(g).empty();a(f).remove()});if(c.move){a(g).find("[control-move]").css("cursor","move").on("mousedown",function(u){a(this)[0].oncontextmenu=function(x){return false};var w=u.pageX,v=u.pageY;var s=a(g).offset().left,n=a(g).offset().top;a(document).on("mousemove",function(x){var z=x.pageX,y=x.pageY;a(g).css({left:z-w+s,top:y-v+n})});a(document).on("mouseup",function(){a(document).unbind("mousemove")})})}if(c.resizable){var o="<div class='resizable-e'></div><div class='resizable-s'></div><div class='resizable-w'></div><div class='resizable-n'></div><div class='resizable-en'></div><div class='resizable-es'></div><div class='resizable-wn'></div><div class='resizable-ws'></div>";var l="resizable-e",t="resizable-s",q="resizable-w",k="resizable-n",j="resizable-en",r="resizable-es",m="resizable-ws",p="resizable-wn";a(g).append(o);a("."+l+",."+t+",."+q+",."+k+",."+j+",."+r+",."+m+",."+p).mousedown(function(u){var y=u.pageX,x=u.pageY,n=a(g).width(),w=a(g).height(),s=a(g).offset().left,v=a(g).offset().top;$this=a(this);a(document).mousemove(function(B){var D=B.pageX,C=B.pageY;var A=D-y,z=C-x;if($this.attr("class")==l){a(g).css("width",n+A)}else{if($this.attr("class")==t){a(g).css("height",w+z)}else{if($this.attr("class")==q){a(g).css({width:n-A,left:s+A})}else{if($this.attr("class")==k){a(g).css({height:w-z,top:v+z})}else{if($this.attr("class")==j){a(g).css({width:n+A,height:w-z,top:v+z})}else{if($this.attr("class")==r){a(g).css({width:n+A,height:w+z})}else{if($this.attr("class")==m){a(g).css({width:n-A,height:w+z,left:s+A})}else{if($this.attr("class")==p){a(g).css({width:n-A,height:w-z,left:s+A,top:v+z})}}}}}}}}});a(document).mouseup(function(){a(this).unbind("mousemove")})})}}});if(d){d()}if(c.addFunction){c.addFunction()}};e($this)})};a.fn.createModal.defaults={background:"#000000",width:"600px",height:"500px",html:"",move:true,resizable:true,bgClose:false,addFunction:function(){}}})(jQuery);function showResult(){$("#add-key4").createModal({background:"#000",width:"360px",height:"110px",bgClose:true,addFunction:function(){$(".modal-promot-mess").click(function(){alert("addFunction")})}},function(){$(".insure-btn-con").click(function(){alert("callback")})})}function showResultList(){$("#resultListHeader",window.parent.document).text(lotteryName+" - 结果走势");$("#resultFrame",window.parent.document).attr("src","result_popup?lottery="+lottery);$("#resultList",window.parent.document).show()};