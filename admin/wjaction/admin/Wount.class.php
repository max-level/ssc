<?php

/**
 * 数据统计有关
 */
class Wount extends AdminBase{
	public $pageSize=15;

	public final function index(){
		$this->display('wcount/index.php');
	}
	

}