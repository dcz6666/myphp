<?php 
/**
 * 自动加载类文件函数
 */
function userAutoload($class_name){
 //先处理确定的（框架中的核心类）
 //类名与类文件映射数组
 $framework_class_list=array(
   //类名=>文件地址
   'Controller'=>'./framework/Controller.class.php',
   'Model'=>'./framework/Model.class.php',
   'Factory'=>'./framework/Factory.class.php',
   'MySQL'=>'./framework/MySQL.class.php',
 );
  //判断是否为核心类
  if(isset($framework_class_list[$class_name])){
  	 //是核心类
  	 require $framework_class_list[$class_name];
  }
  //判断是否为可增加（控制器类，模型类）
  //控制器类
 
}
sql_autoload_register(userAutoload);
//确地分发参数
//平台
$default platform='test';
define('PLATFORM',isset($_GET['p'])?$_GET['p']:$default_platform);
//控制器类
$default_controller='Match';
 define('CONTROLLER',isset($_GET['c'])?$_GET['c']:$default_controller);
//动作
$default_action='list';
define('ACTION',isset($_GET['a'])?$_GET['a']:$default_action);
//实例化控制器类,并调用方法
$controller_name=CONTROLLER.'Controller';
require './application/'.PLATFORM.'/controller/'.$controller_name.'.class.php';
//实例化
$controller=new $controller_name();
//调用方法（action动作）
//拼凑当前的方法动作名字符串
$action_name=ACTION.'Action';
$controller->$action_name();
 ?>