<?php include "base.php";
if(empty($_COOKIE['login'])){//如果沒有值的話
  exit();//退出當前頁面
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <title>會員中心</title>
  <link rel="stylesheet" href="style.css"><!--外嵌CSS(連到我目錄下的style.css檔案)-->
</head>
<style>
  table{
    border-collapse:collapse;
    border-spacing:0;
  }
  td{
    border:1px solid #ccc;
    padding:10px;
    text-align:center;
  }
  </style>
<body>
  <div class="member">
    <div class="wellcome">
      HI! 歡迎光臨!以下是你的個人資料:
    </div>
    <div class="private">
      <!--請自行設計個人資料的呈現方式並從資料庫取得會員資料-->
      <?php
      // $dsn="mysql:host=localhost;charset=utf8;dbname=mydb"; //連結資料庫
      // $pdo=new PDO($dsn,'root','');

      $sql="select * from user where id='".$_COOKIE['id']."'";
      //echo $sql;
      $user=$pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
      //print_r($user);

      ?>
      <table>
        <tr>
          <td>id</td>
          <td><?=$user['id'];?></td><!--連結到資料庫裡的user表單的id值-->
        </tr>
        <tr>
          <td>acc</td>
          <td><?=$user['acc'];?></td><!--連結到資料庫裡的user表單的acc值-->
        </tr>
        <tr>
          <td>pw</td>
          <td><?=$user['pw'];?></td>
        </tr>
        <tr>
          <td>name</td>
          <td><?=$user['name'];?></td>
        </tr>
        <tr>
          <td>addr</td>
          <td><?=$user['addr'];?></td>
        </tr>
        <tr>
          <td>tel</td>
          <td><?=$user['tel'];?></td>
        </tr>
        <tr>
          <td>birthday</td>
          <td><?=$user['birthday'];?></td>
        </tr>
        <tr>
          <td>email</td>
          <td><?=$user['email'];?></td>
        </tr>
      </table>



    </div>
  </div>
</body>
</html>