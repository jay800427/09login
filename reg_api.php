<?php
/***************************************************
 * 會員註冊行為：
 * 1.建立連線資料庫的參數
 * 2.判斷是否有送來表單資料
 * 3.建立所需的SQL語法
 * 4.將表單資料以變數形式填入SQL語法中
 * 5.執行資料庫連線並送出SQL語法
 * 6.判斷SQL語法是否執行成功，執行下一步
 ***************************************************/
echo $acc=$_POST['acc'];
echo $pw=$_POST['pw'];
echo $name=$_POST['name'];
echo $addr=$_POST['addr'];
echo $tel=$_POST['tel'];
echo $date=$_POST['date'];
echo $email=$_POST['email'];

//insert into user() values() 新增的語法
$dsn="mysql:host=localhost;charset=utf8;dbname=mydb";
$pdo=new PDO($dsn,'root','');

$sql="insert into user (`acc`,`pw`,`name`,`addr`,`tel`,`birthday`,`email`) values
('$acc','$pw','$name','$addr','$tel','$date','$email')";
echo "sql語法是:".$sql;
// echo $pdo->query($sql);
if ($pdo->query($sql)){
    header("location:index.php?s=1");
}else{
    header("location:reg.php?s=2");
}






?>