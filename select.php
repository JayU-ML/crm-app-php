<?php

// ********************************* DB接続 ********************************* \\

include("funcs.php");
$pdo = db_conn();

// ***************************** データ登録SQL作成 **************************** \\
// $stmt = $pdo->prepare("SELECT * FROM mirai_results_test");
$stmt = $pdo->prepare("SELECT * FROM gs_an_table");
$status = $stmt->execute();

// ***************************** HTMLにテーブルデータ吐き出すよ！ ************************** \\


if($status==false) {
  $error = $stmt->errorInfo();
  exit("SQLのエラー:".$error[2]);
}else{

  while( $row = $stmt->fetch(PDO::FETCH_ASSOC)){
    
    echo '<tr>';

      echo '<th>';
      echo '<a href="detail.php?id='.$row["id"].'">'; //シングル
      echo $row["id"];
      echo '</th>';


      echo '<th>'.$row["clientOfficialName"].'</th>'; 
      echo '<th>'.$row["clientNickName"].'</th>'; 
      echo '<th>'.$row["closingDay"].'</th>'; 
      echo '<th>'.$row["makingInvoiceDay"].'</th>'; 
      echo '<th>'.$row["sendingMoneyDay"].'</th>'; 
      echo '<th>'.$row["gaiyou"].'</th>';


      echo '<th>';
      echo "";
      echo '<a href="delete.php?id='.$row["id"].'">';
      echo "[削除]";
      echo "</a>";
      echo '</th>';


    echo '</tr>';

  }
}

?>