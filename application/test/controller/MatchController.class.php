<meta http-equiv="Content-Type" content="text/html;charset='UTF-8'">
<?php
/**
 * 比赛相关控制器功能
 */
class MatchController extends Controller{
	public function listAction(){
		// header("Content-Type:text/html; charset=utf-8");
		//实例化相应的模型类对象，调用某个方法实现固定功能
		// require './MatchModel.class.php';
		//  $m_match=new MatchModel();
		//  通过工厂获得对象

		$m_match=Factory::M('matchModel');

		$match_list=$m_match->getList();
		// 载入负责显示的html文件
		 require './application/test/view/match_list_v.html';
	}
	/**
	 * 比赛删除
	 */
	public function removeAction(){
		// header("Content-Type:text/html; charset=utf-8");
		echo "比赛控制器的删除动作执行了";
	}
}	
 ?>
