<?php
include_once "base.php";

$id=$_GET['id'];//在會員資料頁面(member_center)，經由刪除導引過來(透過GET的方式)，所以我們這邊會需要用一個變數來接id的這個值
$sql="DELETE FROM user WHERE id='$id'";//SQL語法:從資料庫裡來刪除user這張表單裡的任何一筆資料
echo $sql;

$pdo->exec($sql);

echo "<a href='admin.php'>已刪除資料,回會員列表</a>";
//header("location:admin.php");



?>