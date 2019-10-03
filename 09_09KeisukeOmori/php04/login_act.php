<?php
//最初にSESSIONを開始！！ココ大事！！
session_start();

//POST値


//1.  DB接続します
include("funcs.php");
$pdo = db_conn();

//2. データ登録SQL作成
$sql = "SELECT * FROM gs_user_table WHERE lid=:lid AND life_flg=0"; //idが一致した人。flgが0の人は生きてる人、flgが1の人は退会している人など（データ自体は残っている）
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':lid', $_POST["lid"], PDO::PARAM_STR);
// $stmt->bindValue(':lpw', $_POST["lpw"], PDO::PARAM_STR); //* Hash化する場合はコメントする
$status = $stmt->execute();

//3. SQL実行時にエラーがある場合STOP
if($status==false){
    sql_error();
}

//4. 抽出データ数を取得
$val = $stmt->fetch();         //1レコードだけ取得する方法
//$count = $stmt->fetchColumn(); //SELECT COUNT(*)で使用可能()今何レコード返ってきたかわかる

//5. 該当レコードがあればSESSIONに値を代入
//* if(password_verify($lpw, $val["lpw"])){
if(password_verify($_POST["lpw"],$val["lpw"]) ){
  //Login成功時
  $_SESSION["chk_ssid"]  = session_id();
  $_SESSION["kanri_flg"] = $val['kanri_flg']; //この人が管理者なのか知りたいので取得
  $_SESSION["name"]      = $val['name']; //～さんこんにちはってやりたいから名前取得
  redirect("select.php");
}else{
  //Login失敗時(Logout経由)
  redirect("login.php");
}

exit();


