<?php
session_start();
//1. POSTデータ取得
$name   = $_POST["name"];
$email  = $_POST["email"];
$naiyou = $_POST["naiyou"];

if (isset($_FILES["upfile"] ) && $_FILES["upfile"]["error"] ==0 ) {
  
  $file_name = $_FILES["upfile"]["name"];
  
  $tmp_path  = $_FILES["upfile"]["tmp_name"];
  
  $extension = pathinfo($file_name, PATHINFO_EXTENSION);
  
  $file_name = date("YmdHis").md5(session_id()) . "." . $extension;

  
  $img="";
  
  $file_dir_path = "upload/".$file_name;
  
  if ( is_uploaded_file( $tmp_path ) ) {
     
      if ( move_uploaded_file( $tmp_path, $file_dir_path ) ) {
          chmod( $file_dir_path, 0644 );
          
      } else {
          // echo "Error:アップロードできませんでした。";
      }
  }


}else{
   //$img = "画像が送信されていません";
}
//[FileUploadCheck--END--] 



//2. DB接続します
include("funcs.php");
$pdo = db_conn();

//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_an_table(name,email,naiyou,upfile,indate)VALUES(:name,:email,:naiyou,:upfile,sysdate())");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':email', $email, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':upfile', $file_name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行

//４．データ登録処理後
if($status==false){
  sql_error();
}else{
  redirect("index.php");
}
?>
