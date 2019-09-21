<?php
// //XSS対策をまず書く
// function h($v){
//     return htmlspecialchars($v, ENT_QUOTES);
// }
//関数群を読み込む
include("funcs.php"); //funcsに入ってるものがここにガコンと入ってくる

$name = $_POST["name"]; //get.phpから来たものをキャッチする
$mail = $_POST["mail"];
?>
<html>
<head>
<meta charset="utf-8">
<title>GET練習（受信）</title>
</head>
<body>
<!-- XSS対策のためにhでくくる -->
お名前：<?php echo h($name); ?>
Mail：<?php echo h($mail); ?>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>