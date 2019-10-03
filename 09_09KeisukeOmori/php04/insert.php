<?php
//1. POSTデータ取得
$name   = $_POST["name"];
$code  = $_POST["code"];
$checkdate = $_POST["checkdate"];
$reason = $_POST["reason"];
$volume_increment = $_POST["volume_increment"];
$info = $_POST["info"];

//2. DB接続します
include("funcs.php");
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO kabu_table(name,code,checkdate,reason,volume_increment,info,indate)VALUES(:name,:code,:checkdate,:reason,:volume_increment,:info,sysdate())");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':code', $code, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':checkdate', $checkdate, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':reason', $reason, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':volume_increment', $volume_increment, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':info', $info, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行

//４．データ登録処理後
if($status==false){
  sql_error();
}else{
  redirect("index.php");
}
?>
