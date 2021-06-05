<?php

// ********************************* DB接続 ********************************* \\
try {
  $pdo = new PDO('mysql:dbname=mirai_test;charset=utf8;host=localhost','root','root');
  // $pdo = new PDO('mysql:dbname=jaysan_unit1;charset=utf8;host=mysql57.jaysan.sakura.ne.jp','jaysan','ahaldhlasl293847569');
} catch (PDOException $e) {
  exit('DBの接続エラー(DB名違うんじゃない?、テーブル名にしてるとか):'.$e->getMessage());
}

// ***************************** データ登録SQL作成 **************************** \\
$sql = $pdo->prepare("SELECT * FROM mirai_results_test");
$status = $sql->execute();

// ***************************** HTMLにテーブルデータ吐き出すよ！ ************************** \\
if($status==false) {
  $error = $sql->errorInfo();
  exit("SQLのエラー:".$error[2]);
}else{

  while( $row = $sql->fetch(PDO::FETCH_ASSOC)){
    
    echo '<tr>';
      echo '<th>'.$row["clientOfficialName"].'</th>'; 
      echo '<th>'.$row["clientNickName"].'</th>'; 
      echo '<th>'.$row["closingDay"].'</th>'; 
      echo '<th>'.$row["makingInvoiceDay"].'</th>'; 
      echo '<th>'.$row["sendingMoneyDay"].'</th>'; 
      echo '<th>'.$row["gaiyou"].'</th>'; 
    echo '</tr>';

  }
}

?>