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
    <div class="container">
    <h1>Регистрация</h1>    
    
    <div class="block-login">
            <p>Логин</p>
            <input id="login" type="text" placeholder="Придумайте логин..."> 
    </div>
    
        <div class="block-password">
            <p>Пароль</p>
            <input id="password"  type="password" placeholder="Придумайте пароль...">
        </div>

        <div class="button-send">
            <form action="../auth/page2.php">
                <button  id="button-reg">
                    <p>Зарегистрироваться</p>
                </button>
            </form>
        </div>

        <p id="connect"></p>
</body>
</html>