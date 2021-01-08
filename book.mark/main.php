<?php

// config.phpを読み込め！という命令
require_once('config.php');

session_start();
$mail=$_POST["email"];
$password=$_POST["password"];

// とりあえずデータを取得していることを確認できた！
var_dump($mail);
var_dump($password);

// アラートはブラウザの機能なので。PHPだけでは実装できない
// $alert = "<script type='text/javascript'>alert('こちらは侍エンジニア塾です。');</script>";
// echo $alert;
?>
<!DOCTYPE html>
<html lang="ja">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="js/main.js"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Your library.com</title>
</head>
<body>
    <h1>Make your own library!</h1>
     <h3>Add book information</h3>

     <form action="" method="post">
         
     </form>

</body>
</html>