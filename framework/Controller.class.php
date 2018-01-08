<?php 
/**
 * 基础控制器类
 */
  class Controller{
  		/**
  	 	 * 构造方法
  	 	 */
  	    public function __construct(){
  	    	$this->_initContentType();
  	    }
  	 /**
  	  * 初始化相应的Content-type
  	  */
  	 protected function _initContentType(){

  	 	header('Content-Type:text/html;charset=utf-8');
  	 }
  }
 ?>