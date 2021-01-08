
<!DOCTYPE html>
<html lang="ja">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/login.js"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login page</title>

<h3>Please log in</h3>

<!-- とりあえず、ログインの登録処理を送るためのページへ送る -->
<form action="login.act.php" method="post">
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
     <h3>If you're not registered yet,click here to register!</h3>
             <!-- aタグがあるよ -->
        <p class="pull-left"><a href="register.php"><small>Register</small></a></p>
    <input type="submit" class="login pull-right" value="submit" name="submit">
        <div class="clear-fix"></div>
</div>
</form>


</head>
    
</body>
</html>