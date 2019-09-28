<?php
//1. POSTデータ取得
$name   = $_POST["name"];
$code  = $_POST["code"];
$market = $_POST["market"];
$checkdate = $_POST["checkdate"];
$reason = $_POST["reason"];
$market_cap = $_POST["market_cap"];
$stock = $_POST["stock"];
$volume = $_POST["volume"];
$volume_increment = $_POST["volume_increment"];
$shite = $_POST["shite"];
$info = $_POST["info"];
$id     = $_POST["id"];

//2. DB接続します
include("funcs.php");
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare("UPDATE kabu_table SET name=:name,code=:code,market=:market,checkdate=:checkdate,reason=:reason,market_cap=:market_cap,stock=:stock,volume=:volume,volume_increment=:volume_increment,shite=:shite,info=:info, WHERE id=:id");

$stmt->bindValue(':name',   $name,   PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':code',   $code,   PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':market', $market, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':checkdate', $checkdate,  PDO::PARAM_STR);
$stmt->bindValue(':reason',    $reason,     PDO::PARAM_STR);
$stmt->bindValue(':market_cap',$market_cap, PDO::PARAM_INT);
$stmt->bindValue(':stock',     $stock,      PDO::PARAM_INT);
$stmt->bindValue(':volume',          $volume,          PDO::PARAM_INT);
$stmt->bindValue(':volume_increment',$volume_increment,PDO::PARAM_INT);
$stmt->bindValue(':shite',           $shite,           PDO::PARAM_STR);
$stmt->bindValue(':info',            $info,            PDO::PARAM_STR);
$stmt->bindValue(':id',     $id,     PDO::PARAM_INT);
$status = $stmt->execute(); //実行

//４．データ登録処理後
if($status==false){
  sql_error();
}else{
  redirect("select.php");
}
?>