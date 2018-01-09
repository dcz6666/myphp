<?php

/**
 * 基础控制器
 */
class Controller {
	/**
	 * 构造方法
	 */
	public function __construct() {
		$this->_initContentType();
	}


	/**
	 * 初始化Content-Type
	 */
	protected function _initContentType() {
		header('Content-Type: text/html; charset=utf-8');
	}
	/**跳转功能
	*@param $url 目标url
	*@param $info 提示信息
	*@param $wair 等待时间（单位秒）
	*/
    protected function _jump($url,$info=null,$wait=3){
        //判断立即跳转还是提示
        if(is_null($info)){
        	header('Location:'.$url);
        }else{
        	// 提示后
        	 header("Refresh:$wait; URL=$url");
        	 echo $info;
        }
        // 终止脚本
        die;
    }

}