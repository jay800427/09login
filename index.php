<?php
 session_start();//有用到SESSION語法的頁面開頭都要加這項
if(!empty($_COOKIE['login'])){ //如果登入進去有值的話
  header("location:member_center.php");//會被導入回會員中心
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="#" type="image/x-icon">
  <title>註冊登入系統</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
if(!empty($_GET['s'])){
  echo "註冊成功，請輸入帳密以登入";
}
if(!empty($_GET['err'])){
  echo "帳號或密碼有誤，請重新輸入";
}
?>
  <h1>會員登入</h1>
<form action="login_api.php" method="post"> 
<table class="wrapper">
  <tr>
    <td>帳號：</td>
    <td><input type="text" name="acc" id="acc"></td>
  </tr>
  <tr>
    <td>密碼：</td>
    <td><input type="password" name="pw" id="pw"></td>
  </tr>
  <tr>
    <td colspan="2" class="ct">
        <input type="submit" value="登入">
        <input type="reset" value="重置">
    </td>
  </tr>
  <tr>
    <td colspan="2" class="ct">
      <a href="reg.php" class="reg">註冊會員</a> 
      <a href="forget.php" class="reg">忘記密碼</a>
    </td>
  </tr>
</table>
</form>   
</body>
</html>
