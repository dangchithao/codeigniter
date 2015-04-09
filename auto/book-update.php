<?php
$conn = mysql_connect('localhost', 'root', '123456') or die("Could not connect to database vitbay :)");
mysql_select_db('vitbay', $conn);
mysql_query("set names utf8");

$sql = "SELECT id, DATEDIFF(CURDATE(), ngaynhap) as thoigianlaunhat
		FROM saches
		ORDER BY thoigianlaunhat ASC
		"; 
$query = mysql_query($sql, $conn);
// co trang thai cho biet nhung san pham cu trong kho
$flag = 0;
while($row = mysql_fetch_array($query, MYSQL_ASSOC))
{
	if($row['thoigianlaunhat']>=100) // neu cac san pham co thoi gian ton tai >= 100 ngay thi duoc goi la san pham cu 
	{
		$flag = 1;
	}// End if
	$sql_update = "UPDATE saches
				   SET flag = ".$flag."
				   WHERE id = ".$row['id']."
				   ";
	$res = mysql_query($sql_update, $conn);
}// End while
?>