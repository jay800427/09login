<?php
session_start();//只要用到SESSION都要有這段
unset($_SESSION['login']);//清除login的值
unset($_SESSION['id']);//清除id的值

header("location:index.php");//導回首頁
?>