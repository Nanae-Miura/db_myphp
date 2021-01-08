<?php
// セッションをスタート
session_start();




// POSTで送られてきたものの変数を宣言
$email=$_POST["email"];
$password=$_POST["password"];

// １、DB接続
include("func.php");
$pdo=db_conn();



// データベースの保存されているか確認
// sqlの取得
$sql="SELECT *FROM user_table WHERE email=:email AND password=:password";
$stmt = $pdo->prepare($sql); //* PasswordがHash化の場合→条件はlidのみ
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':password', $password, PDO::PARAM_STR); //* PasswordがHash化する場合はコメントする
$status = $stmt->execute();

// // // //3. SQL実行時にエラーがある場合STOP
if($status==false){
 $error=$stmt->errorInfo();
 exit('SQLError:'.$error[2]);
  
}


// //4. 抽出データ数を取得
$val = $stmt->fetch();
echo $val;    


//     // /5. 該当レコードがあればSESSIONに値を代入
//     //if(password_verify($lpw, $val["lpw"])){ //* PasswordがHash化の場合はこっちのIFを使う
    if( $val["id"] != "" ){
//       //Login成功時
//       $_SESSION["chk_ssid"]  = session_id();
//       $_SESSION["kanri_flg"] = $val['kanri_flg'];
//       $_SESSION["name"]      = $val['name'];
//       redirect("select.php");
//     }else{
//       //Login失敗時(Logout経由)
//       redirect("login.php");
    }
    
//     exit();
    