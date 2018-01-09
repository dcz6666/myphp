
<?php 
header('Content-Type: text/html; charset=utf-8');
// header('Location: test2.php');
header('Refresh:3; URL=test2.php');
echo '管理员非法';
die;
file_put_contents('./after_header.txt', 'after header function');
 ?>
 