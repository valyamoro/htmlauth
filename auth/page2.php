<?php

require_once __DIR__.'/../log/auth/boot.php';

if (check_auth()) {
    header('Location: /');
    die;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="page2.css">
    <title>Авторизация</title>
</head>
<body>
    <div class="container">
    <?php flash() ?>
        <h1>Авторизация</h1>    
            
        <form action="../log/auth/do_login.php" method="post">
            <div class="block-login">
                    <p>Логин</p>
                    <input id="username" name="username"  type="text" placeholder="Введите логин..."> 
            </div>
            
                <div class="block-password">
                    <p >Пароль</p>
                    <input id="password" name="password"  type="password" placeholder="Введите пароль...">
                </div>
        
                <div class="button-send">
                <button  id="button-reg">
                    <p>Войти</p>
                </button>
            </div>
        </div>
        
    </div>
</div>  
</form>
</body>
</html>