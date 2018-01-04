<meta http-equiv="Content-Type" content="text/html;charset='UTF-8'">
<?php 
 // 通过数据操作，将比赛列表需要的数据处理
require 'MySQL.class.php';
$config=array(
 'host'=>'127.0.0.1',
 'port'=>'3306',
 'username'=>'root',
 'password'=>'123',
 'charset'=>'utf8',
 'dbname'=>'php34',
);
$dao=MySQLDB::getInstance($config); //database access object 数据库操作对象（dao）
// 获得比赛列表数据
$sql="select t1.t_name as t1_name, m.t1_score, m.t2_score, t2.t_name as t2_name, m.m_time from `match` as m left join `team` as t1 ON m.t1_id = t1.t_id  left join `team` as t2 ON m.t2_id=t2.t_id;";
$match_list=$dao->getAll($sql);
 ?>
 <!-- 利用html代码展示数据 -->
<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>比赛列表</title>
	</head>
	<body>
		<table>
			<tr>
				<th>球队一</th>
				<th>比分</th>
				<th>球队二</th>
				<th>时间</th>
			</tr>
			<?php foreach($match_list as $row):?>
			<tr>
				<td><?php echo $row['t1_name'];?></td>
				<td><?php echo $row['t1_score'];?>:<?php echo $row['t2_score'];?></td>
				<td><?php echo $row['t2_name'];?></td>
				<td><?php echo date('Y-m-d H:i:s',$row['m_time']);?></td>
			</tr>
		    <?php endforeach;?>
		</table>
	</body>
</html>