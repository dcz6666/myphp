<?php 
 /**
  * 基础模型类
  */
  class Model{
  	/**
  	*初始化DAO
  	*/
    protected $_dao;
  	protected function _initDAO(){
  			$config=array(
			 'host'=>'127.0.0.1',
			 'port'=>'3306',
			 'username'=>'root',
			 'password'=>'123',
			 'charset'=>'utf8',
			 'dbname'=>'php34',
			);
   	   require_once './framework/MySQL.class.php';
			$this->_dao=MySQLDB::getInstance($config);
  	}
    /**
     * 构造方法
     */
    public function __construct(){
      //初始化DAO
      $this->_initDAO();
    }
  }
 ?>