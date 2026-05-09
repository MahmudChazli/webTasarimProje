<?php
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';


$users = [
    "b1812100001@sakarya.edu.tr" => "b1812100001",
    "admin@sakarya.edu.tr" => "admin",
];

$login_success = false;
$logged_in_user_id = "";

if (array_key_exists($email, $users) && $users[$email] === $password) {
    $login_success = true;
    
    $logged_in_user_id = explode('@', $email)[0];
}

if ($login_success) {
    echo "<!DOCTYPE html>
    <html lang='tr-TR'>
    <head>
        <meta charset='UTF-8'>
        <style>
            body { 
              font-family: system-ui, Arial;
              background-color: #111111;  
              background-image: url(../images/pattern/blurredPattern.png);
              background-attachment: fixed;
              background-position: center;
              background-repeat: no-repeat;
              background-size: cover;
              height: 100vh;
              display: flex;
              justify-content: center;
              align-items: center;
              margin: 0;

              color: white;
            }
            .welcome-card {
              text-align: center; 
              padding: 2rem; 
              border: 1px solid rgba(255,255,255,0.1);
              border-radius: 20px; 
              background: rgba(147, 147, 147, 0.15); 
              backdrop-filter: blur(10px);
            }
        </style>
    </head>
    <body>
        <div class='welcome-card'>
            <h1>Hoşgeldiniz " . htmlspecialchars($logged_in_user_id) . "</h1>
            <p>Başarıyla giriş yapıldı. Yönlendiriliyorsunuz...</p>
        </div>
    </body>
    </html>";

    header("Refresh:2; url=../index.php");
} else {
    header("Location: ../giris.php?error=wrongcredentials");
    exit();
}
?>