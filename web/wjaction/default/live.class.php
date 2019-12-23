<?php
class live extends WebLoginBase {
	public final function casino() {
		$this->display('live/casino.php');
	}
	public final function slots() {
		$this->display('live/slots.php');
	}
	public final function sports() {
		$this->display('live/sports.php');
	}
	public final function money() {
		$this->user_check_func();
		$this->display('live/money.php');
	}
	
	protected function user_check_func(){
		return true;
	}
	
	// ajax加载
	protected function ajax() {
		$this->display('index', array('load_self' => true));
	}
	
	
	public final function balance() {
		$this->user_check_func();
		$this->display('live/balance.php');
	}
	public final function ed() {
		$this->user_check_func();
		$this->display('live/ed.php');
	}
	public final function ag() {
		$this->user_check_func();
		$this->display('live/ag.php');
	}
	public final function bbinlive() {
		$this->user_check_func();
		$this->display('live/bbinlive.php');
	}
	public final function mg() {
		$this->user_check_func();
		$this->display('live/mg.php');
	}
	public final function bbin() {
		$this->user_check_func();
		$this->display('live/bbin.php');
	}
	public final function pt() {
		$this->user_check_func();
		$this->display('live/pt.php');
	}
	public final function reg() {
		$this->user_check_func();
		$this->display('live/reg.php');
	}
	public final function getData() {
		$this->user_check_func();
		$this->display('live/getData.php');
	}
	public final function callback() {
		$this->user_check_func();
		$this->display('live/callback.php');
	}
	public final function ptgaming() {
		$this->user_check_func();
		$this->display('live/ptgaming.php');
	}
}