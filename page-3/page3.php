<?php

error_reporting(E_ALL); ini_set('display_errors', 1);

require_once __DIR__.'/../log/auth/boot.php';

$user = null;

if (check_auth()) {
    // Получим данные пользователя по сохранённому идентификатору
    $stmt = pdo()->prepare("SELECT * FROM `users` WHERE `id` = :id");
    $stmt->execute(['id' => $_SESSION['user_id']]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="page3.css">
    <title>Me Chat</title>
</head>

<body>
    <header>
        <div class="navig-menu">
            <div class="head-logo">
                <img src="icon-phone.png" alt="phone" width="70" class="img-phone">
                <h2 class="head-text">Me Chat</h2>
            <?php if($user) { ?> </div>
                <button class="logo-button">
                    <div class="flex-center">
                        <a href="../log/auth/do_logout.php">
                        <span class="button-text">Выйти</span>
                        <img src="icon-exit.png" alt="exit" class="logo" width="40" class="img-exit">
                        </a> 
                    </div>     
                </button>         
            </div>
            <?php } else { ?>
            </div>
                <button class="logo-button">
                    <div class="flex-center">
                        <a href="../log/auth/do_login.php">
                        <span class="button-text">Войти</span>
                        <img src="icon-exit.png" alt="exit" class="logo" width="40" class="img-exit">
                        </a>
                    </div>     
                </button>   
                <?php }?>       
            </div>
    </header>


    <div class="container">
        <div class="chat">
            <div id="chatbox"></div>
            <input type="text" id="input" placeholder="Введите сообщение">
            <button class="btn-send" onclick="sendMessage()"><p id="send">Отправить</p></button>      
        </div>
    </div>

    <script>
        function sendMessage() {
          var message = document.getElementById('input').value;
          var chatbox = document.getElementById('chatbox');
    
          if (message !== '') {
            var newMessage = document.createElement('p');
            newMessage.textContent = message;
            chatbox.appendChild(newMessage);
            document.getElementById('input').value = '';
            chatbox.scrollTop = chatbox.scrollHeight;
          }
        }
      </script>

</body>
</html>