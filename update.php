<?php

// DB処理の読み込み
include("funcs.php");


// ********************************* 1. POSTデータの取得 ********************************* \\

$clientOfficialName = $_POST["clientOfficialName"]; // 正式名称
$clientNickName     = $_POST["clientNickName"];     // 会社略称
$closingDay         = $_POST["closingDay"];         // 締め日
$makingInvoiceDay   = $_POST["makingInvoiceDay"];   // 請求書作成日
$sendingMoneyDay    = $_POST["sendingMoneyDay"];    // 支払日
$gaiyou             = $_POST["gaiyou"];             // 概要欄

// ***********************************************  // ↑ここまでで、一旦SQLを試してみよう

$bankName           = $_POST["bankName"];           // 銀行名
$invoiceFormat      = $_POST["invoiceFormat"];      // 請求書フォーマット
// =========================================        //「支払先銀行」はすっ飛ばす
$bankCode           = $_POST["bankCode"];           // 銀行コード
$branchName         = $_POST["branchName"];         // 支店名
$branchCode         = $_POST["branchCode"];         // 支店コード
$depositType        = $_POST["depositType"];        // 預金種別 (普通、当座など)
$accountName        = $_POST["accountName"];        // 口座名義
$accountNumber      = $_POST["accountNumber"];      // 口座番号
$postCode           = $_POST["postCode"];           // 郵便番号
$prefecture         = $_POST["prefecture"];         // 都道府県
$city               = $_POST["city"];               // 市区町村
$houseNumber        = $_POST["houseNumber"];        // 番地
$building           = $_POST["building"];           // 建物名
$officePhone        = $_POST["officePhone"];        // 事業所電話番号
$officeFax          = $_POST["officeFax"];          // 事業所FAX番号
$officeEmail        = $_POST["officeEmail"];        // 事業所Eメールアドレス
// PIC (Person in Charge) = 担当者 =========================================
$picName            = $_POST["picName"];            // 担当者名
$picPhone           = $_POST["picPhone"];           // 担当者電話番号
$picEmail           = $_POST["picEmail"];           // 担当者Eメールアドレス

$id                 = $_POST["id"];                 // detail.php で POST されて受信


// ************************************** 2. DB接続 ************************************** \\

$pdo = db_conn();      // funcs.phpの$pdoを受け取る


// ********************************* ３．データ登録SQL作成 ********************************* \\

//                   ↓テーブル名         ↓カラム名                                                                                       ↓このコロンがついた変数を「バインド(接続)変数」という
$sql = "UPDATE mirai_results_test SET clientOfficialName=:clientOfficialName, clientNickName=:clientNickName, closingDay=:closingDay, makingInvoiceDay=:makingInvoiceDay, sendingMoneyDay=:sendingMoneyDay, gaiyou=:gaiyou WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':clientOfficialName', $clientOfficialName, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':clientNickName',     $clientNickName,     PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':closingDay',         $closingDay,         PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':makingInvoiceDay',   $makingInvoiceDay,   PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':sendingMoneyDay',    $sendingMoneyDay,    PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':gaiyou',             $gaiyou,             PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)

$stmt->bindValue(':id',                 $id,                 PDO::PARAM_INT);

$status = $stmt->execute();

// ******************************* ４．データ登録処理後の操作 ******************************* \\

if($status==false){
    sql_error($stmt);
}else{
    redirect("clients_test.php");
}

?>