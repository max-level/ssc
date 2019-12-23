
function getYKTip(type,actionNo){
	if(type && actionNo){
		$.getJSON('/index.php/Tip/getYKTip/'+type+'/'+actionNo, function(tip){
			if(tip){
				$("<div>").append(tip.message).dialog({
						position:['right','bottom'],
						minHeight:40,
						title:'系统提示',
						buttons:''
					});
		  }
		})
	}
}
/*
* USER 用户方面的ajax方法 归类 DAVID -2016
*/
function safeBeforSetPwd(){
	if(!this.oldpassword.value){winjinAlert("请输入原密码","alert");return false;}
	if(this.oldpassword.value.length<6){winjinAlert("原密码至少6位","alert");return false;}
	if(!this.newpassword.value){winjinAlert("请输入新密码","alert");return false;}
	if(this.newpassword.value.length<6){winjinAlert("密码至少6位","alert");return false;}
	var confirmpwd=$(':password.confirm', this).val();
	if(confirmpwd!=this.newpassword.value){winjinAlert("两次输入密码不一样","alert");return false;}
	return true;
}
function safeBeforSetCoinPwd(){
	if(!this.newpassword.value){winjinAlert("请输入新密码","alert");return false;}
	if(this.newpassword.value.length<6){winjinAlert("密码至少6位","alert");return false;}
	var confirmpwd=$(':password.confirm', this).val();
	if(confirmpwd!=this.newpassword.value){winjinAlert("两次输入密码不一样","alert");return false;}
	return true;
}
function safeBeforSetCoinPwd2(){
	if(!this.oldpassword.value){winjinAlert("请输入原密码","alert");return false;}
	if(this.oldpassword.value.length<6){winjinAlert("原密码至少6位","alert");return false;}
	if(!this.newpassword.value){winjinAlert("请输入新密码","alert");return false;}
	if(this.newpassword.value.length<6){winjinAlert("密码至少6位","alert");return false;}
	var confirmpwd=$(':password.confirm', this).val();
	if(confirmpwd!=this.newpassword.value){winjinAlert("两次输入密码不一样","alert");return false;}
	return true;
}
function safeSetPwd(err, data){
	if(err){
		winjinAlert(err,"err");
	}else{
		this.reset();
		winjinAlert(data,"ok");
		
	}
}
function safeBeforSetCBA(){
	if(!this.account.value){winjinAlert("银行帐号没有填写","alert");return false;}
	if(!this.username.value){winjinAlert("银行开户名没有填写","alert");return false;}
	if(!this.coinPassword.value){winjinAlert("请输入提款密码","alert");return false;}
	if(this.coinPassword.value<6){winjinAlert("提款密码至少6位","alert");return false;}
	return true;
}
function safeSetCBA(err, data){
	if(err){
		winjinAlert(err,"err");
		
	}else{
		winjinAlert(data,"ok");
		location.reload();
	}
}

function teamBeforeAddMember(){
	var type=$('[name=type]:checked',this).val();
	if(!this.username.value){alert("没有输入用户名","alert");return false;}
	if(!/^\w{4,16}$/.test(this.username.value)){alert("用户名由4到16位的字母或数字组成","alert");return false;}
	if(!this.password.value){alert("请输入密码","alert");return false;}
	if(this.password.value.length<6){alert("密码至少6位","alert");return false;}
	if(document.getElementById('cpasswd').value!=this.password.value){alert("两次输入密码不一样","alert");return false;}
	if(!this.fanDian.value){alert("请输入返点","alert");return false;}
	if(parseFloat(this.fanDian.value)<0){alert("返点不能小于0%","alert"); return false;}
	if(parseFloat(this.fanDian.value)>parseFloat($(this.fanDian).attr('max'))){alert('返点不能大于'+$(this.fanDian).attr('max'),"alert"); return false;}
	var fanDianDiff= $(this.fanDian).attr('fanDianDiff');
	if((this.fanDian.value*1000) % (fanDianDiff*1000)){alert('返点只能是'+fanDianDiff+'%的倍数',"alert");return false;}
}
function teamAddMember(err, data){
	if(err){
		alert(err,"err");
	}else{
		layer.open({
                content:'<div style="text-align: center;padding: 20px 0px;font-size: 20px;">'+ '添加会员成功' +'</div>',
				//area: ['450px', '200px'],//宽 长
				timeout: 2,
				onyes: true,
				//title: false,
                btn:"确定",
				btnAlign: 'c',//按钮居中
                yes:function(){
                    window.location='/index.php/team/memberList';
                }
            })
	}
}


function dataAddCode(){
	$('form', this).trigger('submit');
}
function defaultCloseModal(){
	$(this).dialog('destroy');
}
function userDataBeforeSubmitCode(){
	
	if(!this.fanDian.value.match(/^[\d\.\%]{1,4}$/)) throw('请正确设置返点');
	if(parseFloat(this.fanDian.value)>=parseFloat($(this.fanDian).attr('max'))) throw('返点不能大于或等于'+$(this.fanDian).attr('max'));
	if(parseFloat(this.fanDian.value)<parseFloat($(this.fanDian).attr('min'))) throw('返点不能小于'+$(this.fanDian).attr('min'));
	if(parseFloat(this.fanDian.value)<parseFloat($(this.fanDian).attr('val'))) throw('返点不能小于'+$(this.fanDian).attr('val'));
	var fanDianDiff= $(this.fanDian).attr('fanDianDiff');
	if((this.fanDian.value*1000) % (fanDianDiff*1000)) throw('返点只能是'+fanDianDiff+'%的倍数');
}
function userDataSubmitCode(err, data){
	if(err){
		winjinAlert(err,"err");
	}else{
		winjinAlert("修改成功","ok");
		$(this).parent().dialog('destroy');
		reload();
	}
}
function userCoinBeforeSubmitCode(){
	if(this.coin.value<=0) throw('金额必须大于0');
}
function userCoinSubmitCode(err, data){
	if(err){
		qq274023(err,"err");
	}else{
		layer.open({
                content:'<div style="text-align: center;">'+ data +'</div>',
				timeout: 2,
				onyes: true,
                btn:"确定",
				btnAlign: 'c',//按钮居中
                yes:function(){
					parent.reloadMemberInfo();
					location.reload();
                }
            })
	}
}
function teamBeforeAddLink(){
	var type=$('[name=type]:checked',this).val();
	if(!this.fanDian.value) throw('请输入返点');
	if(parseFloat(this.fanDian.value)<0) throw('返点不能小于0%');
	if(parseFloat(this.fanDian.value)>parseFloat($(this.fanDian).attr('max'))) throw('返点不能大于'+$(this.fanDian).attr('max'));
	var fanDianDiff= $(this.fanDian).attr('fanDianDiff');
	if((this.fanDian.value*1000) % (fanDianDiff*1000)) throw('返点只能是'+fanDianDiff+'%的倍数');
}
function teamAddLink(err, data){
	if(err){
		alert(err,"err");
	}else{
		layer.open({
                content:'<div style="text-align: center;padding: 20px 0px;font-size: 20px;">'+ '添加链接成功' +'</div>',
				//area: ['450px', '200px'],//宽 长
				timeout: 2,
				onyes: true,
                btn:"确定",
				btnAlign: 'c',//按钮居中
                yes:function(){
                    window.location='/team/linkList';
                }
            })
	}
}
//修改注册链接
function linkDataBeforeSubmitCode(){
	if(!this.fanDian.value.match(/^[\d\.\%]{1,4}$/)) throw('请正确设置返点');
	if(parseFloat(this.fanDian.value)>parseFloat($(this.fanDian).attr('max'))) throw('返点不能大于或等于'+$(this.fanDian).attr('max'));
	if(parseFloat(this.fanDian.value)<parseFloat($(this.fanDian).attr('min'))) throw('返点不能小于'+$(this.fanDian).attr('min'));
	var fanDianDiff= $(this.fanDian).attr('fanDianDiff');
	if((this.fanDian.value*1000) % (fanDianDiff*1000)) throw('返点只能是'+fanDianDiff+'%的倍数');
}
function linkDataSubmitCode(err, data){
	if(err){
		alert(err,"err");
	}else{
		layer.open({
                content:'<div style="text-align: center;">'+ '修改成功' +'</div>',
				//area: ['450px', '200px'],//宽 长
				timeout: 2,
				onyes: true,
                btn:"确定",
				btnAlign: 'c',//按钮居中
                yes:function(){
                   window.parent.location.reload();
                }
            })
	}
}
function linkDataBeforeSubmitDelete(){
}
function linkDataSubmitDelete(err, data){
	if(err){
		alert(err,"err");
	}else{
		layer.open({
                content:'<div style="text-align: center;padding: 20px 0px;font-size: 20px;">'+ '删除成功' +'</div>',
				//area: ['450px', '200px'],//宽 长
				timeout: 2,
				onyes: true,
                btn:"确定",
				btnAlign: 'c',//按钮居中
                yes:function(){
                    window.location='/team/linkList';
                }
            })
	
	}
}


function indexSign(err, data){
	//$('#sign').css('display','none');
	if(err){
		winjinAlert(err,"alert");
	}else{
		reloadMemberInfo();
		winjinAlert(data,"alert");
	}
} 
//余额宝存取利率
function pull(err,data){
	if(err){
		winjinAlert(err,"alert");
	}else{
		reloadMemberInfo();
		winjinAlert(data,"alert");
	}
}
function Combination(c, b) {
    b = parseInt(b);
    c = parseInt(c);
    if (b < 0 || c < 0) {
        return false
    }
    if (b == 0 || c == 0) {
        return 1
    }
    if (b > c) {
        return 0
    }
    if (b > c / 2) {
        b = c - b
    }
    var a = 0;
    for (i = c; i >= (c - b + 1) ; i--) {
        a += Math.log(i)
    }
    for (i = b; i >= 1; i--) {
        a -= Math.log(i)
    }
    a = Math.exp(a);
    return Math.round(a)
}
function strCut(str, len){
	var strlen = str.length;
	if(strlen == 0) return false;
	var j = Math.ceil(strlen / len);
	var arr = Array();
	for(var i=0; i<j; i++)
		arr[i] = str.substr(i*len, len)
	return arr;
}

function filterArray(arrs){
    var k=0,n=arrs.length; 
	var arr = new Array(); 
    for(var i=0;i<n;i++)
    {
        for(var j=i+1;j<n;j++)
        {
            if(arrs[i]==arrs[j])
            {
                arrs[i]=null;
                break;
            }
        }
    }    
    for(var i=0;i<n;i++)
    {
        if(arrs[i])
        {
            arr[k++]=arrs[i]; // arr.push(this[i]);
        }
    } 
    return arr;
}
//base64加密
var base64EncodeChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
var base64DecodeChars = new Array(
　　-1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
　　-1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
　　-1, -1, -1, -1, -1, -1, -1, -1, -1, -1, -1, 62, -1, -1, -1, 63,
　　52, 53, 54, 55, 56, 57, 58, 59, 60, 61, -1, -1, -1, -1, -1, -1,
　　-1,　0,　1,　2,　3,  4,　5,　6,　7,　8,　9, 10, 11, 12, 13, 14,
　　15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, -1, -1, -1, -1, -1,
　　-1, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40,
　　41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, -1, -1, -1, -1, -1);
function base64_encode(str) {
　　var out, i, len;
　　var c1, c2, c3;
　　len = str.length;
　　i = 0;
　　out = "";
　　while(i < len) {
 c1 = str.charCodeAt(i++) & 0xff;
 if(i == len)
 {
　　 out += base64EncodeChars.charAt(c1 >> 2);
　　 out += base64EncodeChars.charAt((c1 & 0x3) << 4);
　　 out += "==";
　　 break;
 }
 c2 = str.charCodeAt(i++);
 if(i == len)
 {
　　 out += base64EncodeChars.charAt(c1 >> 2);
　　 out += base64EncodeChars.charAt(((c1 & 0x3)<< 4) | ((c2 & 0xF0) >> 4));
　　 out += base64EncodeChars.charAt((c2 & 0xF) << 2);
　　 out += "=";
　　 break;
 }
 c3 = str.charCodeAt(i++);
 out += base64EncodeChars.charAt(c1 >> 2);
 out += base64EncodeChars.charAt(((c1 & 0x3)<< 4) | ((c2 & 0xF0) >> 4));
 out += base64EncodeChars.charAt(((c2 & 0xF) << 2) | ((c3 & 0xC0) >>6));
 out += base64EncodeChars.charAt(c3 & 0x3F);
　　}
　　return out;
}



//}}}

//随机数 GetRandomNum(1,6)
function GetRandomNum(Min,Max)
{   
	var Range = Max - Min;   
	var Rand = Math.random();   
	return(Min + Math.round(Rand * Range));   
}   

//qq274023提示  
function alert(tips,style,minH){
	var type="";
	if(style=="err"){
		type="error";
	}else if(style=="alert"){
		type="warning";
	}else if(style=="ok"){
		type="success"
	}
	swal({
		title:"温馨提示",
		text:tips,
		type:type,
		confirmButtonText:"确定",
	});
}
function qq274023(tips,style,minH){
layer.msg(tips);
}

function safeBefornickname(){
	if(!this.name.value){layer.alert("姓名不能为空！");return false;}
	if(!this.sex.value){layer.alert("请选择性别");return false;}
	if(!this.Birth.value){layer.alert("出生年月不能为空！");return false;}
	return true;
}
function safeSetnickname(err, data){
	if(err){
		layer.alert(err,"err");
	}else{
		layer.open({
                content: data,
				timeout: 2,
				onyes: true,
                btn:"确定",
                yes:function(){
                    window.location='/center/user/notice.html';
                }
            })
	
	}
}