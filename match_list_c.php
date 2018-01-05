<meta http-equiv="Content-Type" content="text/html;charset='UTF-8'">
<?php 
//实例化相应的模型类对象，调用某个方法实现固定功能
require './MatchModel.class.php';
 $m_match=new MatchModel();
 $match_list=$m_match->getList();
// 载入负责显示的html文件
require './template/match_list_v.html';
 ?>