<?= include("assets/php/top.php"); ?>

<?php

include("funcs.php");
$pdo = db_conn();

$id = $_GET["id"];
// $id = 5; // これTEST用

$stmt = $pdo->prepare("SELECT * FROM mirai_results_test WHERE id=:id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

$view="";
if($status==false) {
    sql_error($stmt);
    }else{
        $res = $stmt->fetch(); //頭の1行を取得する
    }

?>


<div class="clearfix"></div>
	
    <div class="content-wrapper">
        <div class="container-fluid">

        <div class="row mt-3">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                <div class="card-title">顧客登録</div>
                <hr>

                <!-- ================================ updateに更新================================ -->
                <form method="POST" action="update.php">

                    <!-- 1列目 -->
                    <div class="form-group" style="display: flex;">
                    <input name="clientOfficialName" placeholder="正式名称"     type="text" class="form-control" id="input-1" style="width: 49%; margin-right: 2%;" value="<?=$res["clientOfficialName"]?>">
                    <input name="clientNickName"     placeholder="会社略名"     type="text" class="form-control" id="input-2" style="width: 49%;" value="<?=$res["clientNickName"]?>">
                    </div>
                    
                    <!-- 2列目 -->
                    <div class="form-group" style="display: flex;">
                    <input name="closingDay"         placeholder="締め日"       type="text" class="form-control" id="input-3" style="width: 49%; margin-right: 2%;" value="<?=$res["closingDay"]?>">
                    <input name="makingInvoiceDay"   placeholder="請求書作成日" type="text" class="form-control" id="input-4" style="width: 49%;" value="<?=$res["makingInvoiceDay"]?>">
                    </div>

                    <!-- 3列目 -->
                    <div class="form-group" style="display: flex;">
                    <input name="sedingMoneyDay"     placeholder="支払日"       type="text" class="form-control" id="input-5" style="width: 49%; margin-right: 2%;" value="<?=$res["sendingMoneyDay"]?>">
                    <input name="gaiyou"             placeholder="概要欄"       type="text" class="form-control" id="input-6" style="width: 49%;" value="<?=$res["gaiyou"]?>">
                    </div>

                    <input type="hidden" name="id" value="<?=$res["id"]?>">

                    <p>↑一回ここまでで、SQLに入るかどうか確認！================================================================</p>

                    <div class="form-group">
                    <button type="submit" class="btn btn-light px-5"><i class="icon-register"></i>更新する</button>
                    </div>
                </form>
            </div>
            </div>

        </div>
            <div class="overlay toggle-menu"></div>
        </div>      
        </div>
    
<?= include("assets/php/bottom.php"); ?>