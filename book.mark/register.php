<?php

// セッションを開始します
session_start();

// POST値
$email=$_POST["email"];
$password=$_POST["password"];

// データベースに接続
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
  $pdo=db_conn();


  db_conn();
// ログインの処理を書こう

// ボタンが押された時に次の処理を行う

// 1.内容に不正がないかチェック
//２、 データベースに登録
// 2/不正がなければデータベースとの照会を行う
// 3.照合したら、main.phpにリダイレクト
//4.照合しなければ、registerページに移動



if(isset($_POST['submit'])){

// POSTの内容validate,メール
if(!$email=filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
    echo '入力された値が不正です';
    return false;
}else{
    echo'有効なメールアドレスです';
}

// POSTの内容validate,パスワード
$PassLength=($_POST['password']);
if($PassLength>8){
    echo 'パスワードが短すぎます。パスワードは８文字以上で設定してください。';
    return false;
}else{
    echo '有効なパスワードです';
}

// 登録処理
$sql="INSERT INTO user_table(id,email,password)VALUES(NULL,:a1,:a2)";
$stmt=$pdo->prepare($sql);

// PHPのbindvalue()とは、プリペアドステートメントで使用するSQL文の中で、変数の値をバインドするための関数です。
$stmt->bindValue(':a1',$email,PDO::PARAM_STR);
$stmt->bindValue(':a2',$password,PDO::PARAM_STR);

// プリペアドステートメンとは実行してくださいという命令を出す必要がある
$flag=$stmt->execute();
// 登録できたー！！

echo "登録が完了しました！";


}





?>

<!DOCTYPE html>
<html lang="ja">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/login.js"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login page</title>

<h3>Register　here!</h3>

<form action="register.php" method="post">
    <div class="form-item">
        <p class="formLabel">Email</p>
        <input type="email" name="email" id="email" class="form-style" autocomplete="off"/>
    </div>

<div class="form-item">
    <p class="formLabel">Password</p>
        <input type="password" name="password" id="password" class="form-style" />
    
        <!-- aタグがあるよ -->
    <!-- <p><a href="#" ><small>Forgot Password?</small></a></p>   -->
</div>
 <div class="form-item">
     <h3>If you're already registered ,click here to login!</h3>
             <!-- aタグがあるよ -->
        <p class="pull-left"><a href="login.php"><small>login</small></a></p>
    <input type="submit" class="login pull-right" value="submit" name="submit">
        <div class="clear-fix"></div>
</div>
</form>


</head>
    
</body>
</html>