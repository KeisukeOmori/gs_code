<?php
//1.  DB接続します
include("funcs.php");
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM kabu_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false) {
  //sql_error();
  function sql_error(){
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);
    }
}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  //データを取ってくるときにだけ使うもの。
  while( $r = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    $view .= '<p>';
    $view .= '<a class="btn btn-danger" href="delete.php?id='.$r["id"].'">';
    $view .= '[削除]';
    $view .= '</a>';
    $view .= "　";
    $view .= '<a href="detail.php?id='.$r["id"].'">';
    $view .= $r["id"]."|".$r{"name"}."|".$r{"code"}."|".$r{"market"}."|".$r{"checkdate"}."|".$r{"reason"}."|".$r{"market_cap"}.
    "|".$r{"stock"}."|".$r{"volume"}."|".$r{"volume_increment"}."|".$r{"shite"}."|".$r{"info"}."<br>";
    // 「.=」は後ろのデータを前のデータに接続するという意味
    $view .= '</a>';
    $view .= '</p>';
  }

}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>登録銘柄表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">登録銘柄表示</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
<!-- viewを囲んでるのはphpとecho両方の意味のタグ -->
    <div class="container jumbotron"><?=$view?></div>
</div>
<!-- Main[End] -->

<!-- <button id="ajaxButton" type="button">要求を実行</button>

<script>
(function() {
  var httpRequest;
  document.getElementById("ajaxButton").addEventListener('click', makeRequest);

  function makeRequest() {
    httpRequest = new XMLHttpRequest();

    if (!httpRequest) {
      alert('中断 :( XMLHTTP インスタンスを生成できませんでした');
      return false;
    }
    httpRequest.onreadystatechange = alertContents;
    httpRequest.open('GET', 'test.html');
    httpRequest.send();
  }

  function alertContents() {
    if (httpRequest.readyState === XMLHttpRequest.DONE) {
      if (httpRequest.status === 200) {
        alert(httpRequest.responseText);
      } else {
        alert('リクエストに問題が発生しました');
      }
    }
  }
})();
</script> -->


</body>
</html>
