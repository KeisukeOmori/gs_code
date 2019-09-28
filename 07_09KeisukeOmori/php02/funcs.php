<?php
//共通に使う関数を記述

//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}

//DB接続
function db_conn(){
    try {
      //Password:MAMP='root',XAMPP=''
      //host=レンタルサーバのアドレスに変更する（本番の時）
      //MAMPの人はユーザー名はroot, パスワードもroot
      $pdo = new PDO('mysql:dbname=kabu_db;charset=utf8;host=localhost','root','root');
      return $pdo; //function内に入ってる変数を外に出す
    } catch (PDOException $e) {
      exit('DB Connection Error:'.$e->getMessage());
      //エラーが出たら上のexitの文字が出るような設定
      //exit('');はとにかく止めたいときに使う関数。
    }
    }

    //SQLエラー
function sql_error(){
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);
    }



function redirect($file_name){
    //５．index.phpへリダイレクト
    header("Location: ".$file_name);
        exit();
      }