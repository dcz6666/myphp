<?php 
  /**
   * admin 表操作模型
   */
  class AdminModel extends Model{
  	 /**
      *验证管理员是否合法
      *@param $admin_name
      *@param $admin_pass
      *@param bool
      */
     public function check($admin_name,$admin_pass){
     	$sql="SELECT * FROM `P34_admin` WHERE admin_name='$admin_name' and admin_pass=md5('$admin_pass')";
     	$row=$this->_dao->getRow($sql);
     	return (bool) $row;
     }
  }
  
 ?>