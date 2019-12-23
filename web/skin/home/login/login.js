var login = angular.module('login', [])
	.controller('loginCtrl', function($scope, $rootScope, $http, $interval) {
		$scope.isShow = true;
		$scope.focusEye = function() {
			$scope.eyeClose = true;
		}
		$scope.blurEye = function() {
			$scope.eyeClose = false;
		}
	})
function userBeforeLoginto(){
    var u=this.username.value;
	var p=this.password.value;
	if(!u || u=='帐号'){throw("请输入用户名");}
	if(!p || p=='xx@x@x.x'){throw("请输入密码");}
}
function userLoginto(err, data){
	if(err){
		layer.msg(err);
		
	}else{
		top.location.href='/';
	}
}