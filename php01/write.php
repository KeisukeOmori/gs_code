<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>
<!-- 書き込みを行います。<br>
This is a Pen. とdata.txt に書き込みます。 -->

<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
$age = $_POST["age"];
$memo = $_POST["memo"];
$c  = ",";
$str = $name.$c.$mail.$c.$age.$c.$memo; 

//文字作成
$date = date("Y-m-d H:i:s");
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $date.$c.$str."\r\n");//"\r\nは改行コード" PHPは"."で変数と変数をくっつける
fclose($file);
?>


<ul>
    <h1>書き込みました</h1>
<li><a href="#">戻る</a></li>
</ul>
</body>
</html>

