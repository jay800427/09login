<?php include "base.php";?>
<?php
/***************************************************
 * 會員登入行為：
 * 1.建立連線資料庫的參數
 * 2.判斷是否有送來表單資料
 * 3.從資料庫取得資料
 * 4.比對表單資料和資料庫資料是否一致
 * 5.根據比對的結果決定畫面的行為
  ***************************************************/
  $acc=$_POST['acc'];
  $pw=$_POST['pw'];
  
  echo "acc=".$acc;
  echo "<br>";
  echo "pw=".$pw;
  
// $dsn="mysql:host=localhost;charset=utf8;dbname=mydb";
// $pdo=new PDO($dsn,'root','');

//$sql="select count(*) as 'r' from user where acc='$acc' &&  pw='$pw'";
$sql="select id from user where acc='$acc' &&  pw='$pw'";//從user這張表單，選取該帳戶的所有資訊(假設我的資料庫有三筆，他就會從這三筆去搜尋)

//$data=$pdo->query($sql)->fetchColumn();
$data=$pdo->query($sql)->fetch();


print_r($data);

if(!empty($data)){
  echo "登入成功";
  //$_SESSION['login']=1;//判斷登入有無成功
  //$_SESSION['id']=$data['id'];//判斷登入後有沒有抓到id的資料
  setcookie("login",1,time()+3600);//用cookie的登入方式判斷登入有無成功(我在這邊設定兩分鐘後cookie會失效)
  setcookie("id",$data['id'],time()+3600);//用cookie來判斷登入後有沒有抓到id的資料(我在這邊設定兩分鐘後cookie會失效)
  header("location:member_center.php");
}else{
  echo "登入失敗";
  header("location:index.php?err=1");
}
  
// 原先的範本
  /* if(!empty($data)){
    echo "登入成功";
  }else{
    echo "登入失敗";
  } */
  
  /* if($acc==$data['acc'] && $pw=$data['pw']){
    echo "登入成功";
  }else{
    echo "登入失敗";
  } */

?>