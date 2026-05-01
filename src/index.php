<!DOCTYPE html>
<html lang="tr-TR">
  <head>
    <?php include 'php/essentialHead.php'; ?>

    <link href="./styles/index.css" rel="stylesheet">
    
    <title>Web Tasarım Ödev</title>

    <style>
      .borderBlue {
        border: 2px solid blue; 
      }
      .borderRed {
        border: 2px solid red;
      }
    </style>
  </head>

  <body>

    <div class="flex justify-center" id="about-section">
      <div class="grid grid-cols-1">
        <div>
          <img class="rounded-full" id="profile-picture" src="./images/profilePicture.jpg" alt="Mahmud Chazli Profile Picture">
        </div>
        
        <hr id="profile-border">
        
        <div class="text-center align-baseline" style="font-weight: bold; font-size: 23px;">
          Mahmud chazli
        </div>
      </div>

      <div id="profile-border"></div>

      <aside class="text-center" style="padding:65px 10px 0px 10px; font-size:20px;">
          Merhaba ben Mahmud Chazlı'yım <br>
          <p style="text-wrap:nowrap;">Sakarya Üniversitesi Bilgisayar Mühendisliği okuyorum.</p>
          Bilgisayarlar küçüken beri ilgimi çekiyordu
          hem yazılım açısından hem de dönanım açısından.
      </aside>
    </div>

    <div class="flex" id="redirect-div">
      <button class="opacity-0 redirect-btn " id="profile-border"
              onclick="window.open('./cv.php', '_self')">
        CV
      </button>

      <button class="opacity-0 redirect-btn " id="profile-border"
              onclick="window.open('./sehrim.php', '_self')">
        Şehrim
      </button>

      <button class="opacity-0 redirect-btn " id="profile-border"
              onclick="window.open('./iletisim.php', '_self')">
        iletişim
      </button>
    </div>
    
  </body>
</html>