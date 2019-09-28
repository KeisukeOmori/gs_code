<?php
//index.php（登録フォームの画面ソースコードを全コピーして、このファイルをまるっと上書き保存）
$id = $_GET["id"]; //?id～**を受け取る
// echo $id;
include("funcs.php");
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM kabu_table WHERE id=:id");
$stmt->bindValue(":id",$id,PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
if($status==false) {
    sql_error();
  }else{
    $row = $stmt->fetch();
    //1レコードとるという意味
  }
?>


<!-- index.phpを再利用してコピペ。 -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ更新</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>[編集]</legend>
    <label>名前：<input type="text" name="name" value="<?=$row["name"]?>"></label><br>
     <label>コード：<input type="text" name="code" value="<?=$row["code"]?>"></label><br>
     <label>市場：<input type="text" name="market" value="<?=$row["market"]?>"></label><br>
     <label>注目日：<input type="text" name="checkdate" value="<?=$row["checkdate"]?>"></label><br>
     <label>理由：<input type="text" name="reason" value="<?=$row["reason"]?>"></label><br>
     <label>時価総額：<input type="text" name="market_cap" value="<?=$row["market_cap"]?>"></label><br>
     <label>株式数：<input type="text" name="stock" value="<?=$row["stock"]?>"></label><br>
     <label>出来高率：<input type="text" name="volume" value="<?=$row["volume"]?>"></label><br>
     <label>出来高増加率：<input type="text" name="volume_increment" value="<?=$row["volume_increment"]?>"></label><br>
     <label>仕手：<input type="text" name="shite" value="<?=$row["shite"]?>"></label><br>
     <label>その他：<textArea name="info" rows="4" cols="40" value="<?=$row["info"]?>"></textArea></label><br>
     <input type="submit" value="送信">
     <!-- //誰のidを変えてるのかを下で明記 -->
     <input type="hidden" name="id" value="<?=$id?>">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
