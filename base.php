<?php
$dsn="mysql:host=localhost;charset=utf8;dbname=mydb"; //連結資料庫
$pdo=new PDO($dsn,'root','');
session_start();
?>