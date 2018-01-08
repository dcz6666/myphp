<?php 
  /**
   * match表的操作模型类
   */
   class MatchModel extends Model{
   	// 获得所有的比赛列表
   	public function getList(){
   		$config=array(
			 'host'=>'127.0.0.1',
			 'port'=>'3306',
			 'username'=>'root',
			 'password'=>'123',
			 'charset'=>'utf8',
			 'dbname'=>'php34',
			);
			$dao=MySQLDB::getInstance($config); //database access object 数据库操作对象（dao）
			$sql="select t1.t_name as t1_name, m.t1_score, m.t2_score, t2.t_name as t2_name, m.m_time from `match` as m left join `team` as t1 ON m.t1_id = t1.t_id  left join `team` as t2 ON m.t2_id=t2.t_id;";
			 return $this->_dao->getAll($sql);
		}
   }
 ?>