<?php
class Index extends WebBase{
	//平台首页
	public final function main(){		
		$this->display('index.php');
	}

	public final function at1(){		
		$this->display('At1.php');
	}

	public final function reg(){
		$this->display('reg.php');
	}
    public final function at2(){
		$this->display('At2.php');
	}	
	public final function daili(){
		$this->display('At4.php');
	}
	public final function Promotion(){
		$this->display('inc_top.php');
	}
	public final function sport(){
		$this->display('index/sport.php');
	}
}