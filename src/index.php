<!DOCTYPE html>
<html lang="tr-TR">
<head>
  <?php include 'php/essentialHead.php'; ?>
  <link href="./styles/index.css" rel="stylesheet">
</head>

<body>
  <main class="inline-flex" style="margin: 0 20% 0 20%; width:fit-content; flex-direction:column;">
    <div class="flex justify-center" id="about-section">
      <div class="grid grid-cols-1">
        <div>
          <img class="rounded-full" id="profile-picture" src="./images/profilePicture.jpg" alt="Mahmud Chazli Profile Picture">
        </div>
        <hr id="profile-border">
        <div class="text-center align-baseline" style="font-weight: bold; font-size: 23px;">
          Mahmud chazlı
        </div>
      </div>
      <div id="profile-border"></div>
      <aside class="text-center text-[20px]" style="padding:85px 10px 0px 10px;">
          Merhaba ben Mahmud Chazlı'yım <br>
          <p style="text-wrap:nowrap;">Sakarya Üniversitesi Bilgisayar Mühendisliği okuyorum.</p>
          Bilgisayarlar küçüken beri ilgimi çekiyordu hem yazılım açısından hem de dönanım açısından.
      </aside>
    </div>

    <div class="flex items-center" id="redirect-div">
      <button class="redirect-btn" id="profile-border"
              onclick="window.open('./cv.php', '_self')">
        CV
      </button>

      <button class="redirect-btn" id="profile-border"
              onclick="window.open('./sehrim.php', '_self')">
        Şehrim
      </button>

      <button class="redirect-btn" id="profile-border"
              onclick="window.open('./iletisim.php', '_self')">
        iletişim
      </button>
    </div>
  </main>

  <?php include './php/footer.php'; ?>
</body>
</html>