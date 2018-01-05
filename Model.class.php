<?php 
 /**
  * 基础模型类
  */
  class Model{
  	/**
  	*初始化DAO
  	*/
  	protected function _initDAO(){
  			$config=array(
			 'host'=>'127.0.0.1',
			 'port'=>'3306',
			 'username'=>'root',
			 'password'=>'123',
			 'charset'=>'utf8',
			 'dbname'=>'php34',
			);
   	   require 'MySQL.class.php';
			$dao=MySQLDB::getInstance($config);
  	}
  }
 ?>