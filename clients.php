<?= include("assets/php/top.php"); ?>


<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">顧客情報</h5>
              <div class="table-responsive table-striped table-hover">

                <table class="table">
                  <!-- 表項目 -->
                  <!-- <thead> -->
                    <tr>
                      <th scope="col">顧客番号</th>
                      <th scope="col">会社略名</th>
                      <th scope="col">正式名称</th>
                      <th scope="col">締め日</th>
                      <th scope="col">請求書作成日</th>
                      <th scope="col">支払いサイト</th>
                      <th scope="col">備考欄</th>
                      <th scope="col">振込先銀行</th>
                      <th scope="col">請求フォーマット</th>
                      <th scope="col">支払先銀行</th>
                      <th scope="col">銀行コード</th>
                      <th scope="col">支店名</th>
                      <th scope="col">支店コード</th>
                      <th scope="col">預金種別</th>
                      <th scope="col">口座名</th>
                      <th scope="col">口座番号</th>
                      <th scope="col">都道府県</th>
                      <th scope="col">市町区村</th>
                      <th scope="col">番地</th>
                      <th scope="col">建物名</th>
                      <th scope="col">事業所電話番号</th>
                      <th scope="col">FAX番号</th>
                      <th scope="col">事業所メアド</th>
                      <th scope="col">担当者名</th>
                      <th scope="col">担当者電話番号</th>
                      <th scope="col">担当者メアド</th>
                    </tr>
                  <!-- </thead> -->
                  
                  <!-- <tbody> -->
                    <?php
                    
                    $fp = fopen('./assets/data/clients.csv','r');

                    while (!feof($fp)){
                      $row = rtrim(fgets($fp),"\n");
                      if($row !== ''){
                        $txt = explode(',',$row);

                        echo '<tr>';
                        for($i = 0; $i < count($txt); ++$i){
                          echo '<td>'.$txt[$i].'</td>';
                        }
                      echo '</tr>';
                      }
                    }

                    fclose($fp);

                    ?>
                  <!-- </tbody> -->

                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
		
<?= include("assets/php/bottom.php"); ?>


<?php

$fp = fopen('./assets/data/clients.csv','r');

while (!feof($fp)){
  $row = rtrim(fgets($fp),"\n");
  if($row !== ''){
    $txt = explode(',',$row);

    echo '<tr>';
    for($i = 0; $i < count($txt); ++$i){
      echo '<td>'.$txt[$i].'</td>';
    }
  echo '</tr>';
  }
}

fclose($fp);

?>