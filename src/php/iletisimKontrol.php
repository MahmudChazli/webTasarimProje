<?php
$newMessage = [
    "name"    => $_POST['name']    ?? 'N/A',
    "email"   => $_POST['email']   ?? 'N/A',
    "subject" => $_POST['subject'] ?? 'N/A',
    "message" => $_POST['message'] ?? 'N/A',
    "date"    => date("Y-m-d H:i:s")
];

$filePath = '../json/messages.json';

$allMessages = [];

if (file_exists($filePath)) {
    $jsonString = file_get_contents($filePath);
    $allMessages = json_decode($jsonString, true);
    
    if (!is_array($allMessages)) {
        $allMessages = [];
    }
}

$allMessages[] = $newMessage;

file_put_contents($filePath, json_encode($allMessages, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <title>Mesaj Kaydedildi</title>
    <style>
        body { background: #121212; color: white; font-family: sans-serif; display: flex; 
               justify-content: center; align-items: center; min-height: 100vh; margin: 0; }
        .card { background: #1a1a1a; padding: 2rem; border-radius: 20px; border: 1px solid #333; text-align: center; }
        pre { text-align: left; background: #000; padding: 15px; color: #00ff00; border-radius: 10px; overflow-x: auto; }
        a { color: #ff8c00; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Mesajınız Kaydedildi!</h1>
        <p>İşte şu ana kadar kaydedilen tüm mesajlar (JSON formatında):</p>
        <pre><?php echo json_encode($allMessages, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE); ?></pre>
        <br>
        <a href="../iletisim.php">Geri Dön</a>
    </div>
</body>
</html>