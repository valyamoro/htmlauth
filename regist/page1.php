<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <!-- <script src="regist.js" defer></script> -->
    <link rel="stylesheet" href="page1.css">
</head>
<body>

    <form action="../log/auth/do_register.php" method="post">
    <div class="container">
    <h1>Регистрация</h1>    
    
    <div class="block-login">
            <p>Логин</p>
            <input id="username" name="username" type="text" placeholder="Придумайте логин..."> 
    </div>
    
        <div class="block-password">
            <p>Пароль</p>
            <input id="password" name="password" type="password" placeholder="Придумайте пароль...">
        </div>

        <div class="button-send">
                <button  id="button-reg">
                    <p>Зарегистрироваться</p>
                </button>
            </div>
            
            <p id="connect"></p>
        </form>
</body>
</html>