<?php

include("funcs.php");

$id = $_GET["id"];

$pdo = db_conn(); 

$sql = "DELETE FROM mirai_results_test WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

if($status==false){
    sql_error($stmt);
}else{
    redirect("clients_test.php");
}

?>