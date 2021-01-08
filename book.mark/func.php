<?php
function h($str){
  return htmlspecialchars($str, ENT_QUOTES);
}

function db_conn(){
    try {
        $db_name = "login_db";    //データベース名
        $db_id   = "hoge";      //アカウント名
        $db_pw   = "6ZaDwHpqEGQHR8RG";      //パスワード：XAMPPはパスワード無しに修正してください。
        $db_host = "localhost"; //DBホスト
        return new PDO('mysql:dbname='.$db_name.';charset=utf8;host='.$db_host, $db_id, $db_pw);
    } catch (PDOException $e) {
      exit('DB Connection Error:'.$e->getMessage());
    }
  }

// SQLエラー
// $stmtが定義されていないというエラーが出る
// function sql_error(){
//   //execute（SQL実行時にエラーがある場合）
//   $error = $stmt->errorInfo();
//   exit("SQLError:".$error[2]);
// }

// //SessionCheck
// function sschk(){
//   if(!isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"]!=session_id()){
//     exit("Login Error");
//   }else{
//     session_regenerate_id(true);//「true」めっちゃ重要
//     $_SESSION["chk_ssid"] = session_id();
//   }
// }