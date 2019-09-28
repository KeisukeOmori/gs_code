<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>株データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">銘柄一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="insert.php">
<!-- methodは送信方法、actionは送信場所 -->
  <div class="jumbotron">
   <fieldset>
    <legend>銘柄登録</legend>
     <label>名前：<input type="text" name="name"></label><br>
     <label>コード：<input type="text" name="code"></label><br>
     <label>市場：<input type="text" name="market"></label><br>
     <label>注目日：<input type="text" name="checkdate"></label><br>
     <label>理由：<input type="text" name="reason"></label><br>
     <label>時価総額：<input type="text" name="market_cap"></label><br>
     <label>株式数：<input type="text" name="stock"></label><br>
     <label>出来高率：<input type="text" name="volume"></label><br>
     <label>出来高増加率：<input type="text" name="volume_increment"></label><br>
     <label>仕手：<input type="text" name="shite"></label><br>
     <label>その他：<textArea name="info" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
