<?php
include_once "base.php";//include_once是只抓一次

$sql="select * from user ";//資料庫語法(抓取我user這張表單裡的所有資料)
$rows=$pdo->query($sql)->fetchAll();//fecthAll()是抓取全部資料，fecth()是抓取一筆資料。rows這邊變數可以任意更改
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>會員列表</title>
    <style>
  table{
    border-collapse:collapse;
    border-spacing:0;
    margin:auto;
  }
  td{
    border:1px solid #ccc;
    padding:10px;
    text-align:center;
  }
  </style>
</head>
<body>
<table>
    <tr>
        <td>姓名</td>
        <td>帳號</td>
        <td>地址</td>
        <td>電話</td>
        <td>email</td>
        <td>操作</td>
    </tr>
    <?php
    foreach($rows as $user){//利用迴圈的方式來抓取$user表單裡的所有資料
    ?>
    <tr>
        <td><?=$user['name'];?></td>
        <td><?=$user['acc'];?></td>
        <td><?=$user['addr'];?></td>
        <td><?=$user['tel'];?></td>
        <td><?=$user['email'];?></td>
        <td><a href="del_user.php?id=<?=$user['id'];?>">刪除</td><!--因為我們要刪除資料庫裡的資料(所以從列表那邊著手)透過get的方式-->
    </tr>
    <?php
    }
    ?>
</table>
    
</body>
</html>
