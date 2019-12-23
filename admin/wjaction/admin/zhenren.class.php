<?php


class Zhenren extends AdminBase{
	public $pageSize=15;

	public final function CreditRecord(){
		$this->display('https://ag.gebbs.net/Payment/OnlineRecharge');
	}
	public final function Credit(){
		$this->display('zhenren/Credit.php');
	}
    public final function agbets(){
		$this->display('zhenren/agbets.php');
	}
	public final function setreamount(){
		$this->display('zhenren/setreamount.php');
	}
	public final function reamountlog(){
		$this->display('zhenren/reamountlog.php');
	}
	
	
	
}