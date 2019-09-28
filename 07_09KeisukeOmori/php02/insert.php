<?php
//1. POSTデータ取得
//$name = filter_input( INPUT_GET, ","name" ); //こういうのもあるよ
//$email = filter_input( INPUT_POST, "email" ); //こういうのもあるよ
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

//2. DB接続します。これがテンプレート
include("funcs.php");
$pdo = db_conn();

//３．データ登録SQL作成
// ->は「～の中に」という意味。prepareは変数を格納する関数
$stmt = $pdo->prepare("INSERT INTO kabu_table(name, code, market, checkdate, reason, market_cap, stock, volume,volume_increment, shite, info, indate) VALUES(:name, :code, :market, :checkdate, :reason, :market_cap, :stock, :volume,:volume_increment, :shite, :info, sysdate())");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT) 文字列の場合はSTR
$stmt->bindValue(':code', $code, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':market', $market, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':checkdate', $checkdate, PDO::PARAM_STR);
$stmt->bindValue(':reason', $reason, PDO::PARAM_STR);
$stmt->bindValue(':market_cap', $market_cap, PDO::PARAM_INT);
$stmt->bindValue(':stock', $stock, PDO::PARAM_INT);
$stmt->bindValue(':volume', $volume, PDO::PARAM_INT);
$stmt->bindValue(':volume_increment', $volume_increment, PDO::PARAM_INT);
$stmt->bindValue(':shite', $shite, PDO::PARAM_STR);
$stmt->bindValue(':info', $info, PDO::PARAM_STR);

//上三行はセキュリティ的な意味
$status = $stmt->execute();//ここで実行truで成功、falseで打ち間違え

//４．データ登録処理後
if($status==false){
  //sql_error();
  function sql_error(){
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);
    }
}else{
  $filename = "index.php";

  redirect($filename);    
}
?>
