<!DOCTYPE html>
<html lang="tr-TR">
<head>
  <?php include 'php/essentialHead.php'; ?>
  <link href="./styles/index.css" rel="stylesheet">
</head>

<body>
  <?php include 'php/nav.php'; ?>

  <main class="container mx-auto px-4 pt-24 pb-20 flex flex-col items-center">
    
    <div id="about-section" class="flex flex-col md:flex-row items-center gap-8 p-8 w-full h-auto max-w-4xl 
                bg-[#93939327] backdrop-blur-md border border-white/10 rounded-3xl 
                shadow-[0_25px_50px_-12px_rgba(30,30,30,0.5)] mb-5">
      
      <div class="flex flex-col items-center shrink-0">
        <div>
          <img class="w-64 h-64 mx-auto rounded-full p-2.5 opacity-90 object-cover" 
               src="./images/profilePicture.jpg" alt="Mahmud Chazli Profile fotorafı">
        </div>
        <hr class="w-full border-white/10 my-2 border">
        <div class="text-center font-bold text-[23px]">
          Mahmud chazlı
        </div>
      </div>

      <div class="hidden md:block w-px h-32 border border-white/10 bg-white/10"></div>

      <aside class="text-center md:text-left text-[20px] leading-relaxed">
          Merhaba ben Mahmud Chazlı'yım <br>
          Sakarya Üniversitesi Bilgisayar Mühendisliği okuyorum.
          Bilgisayarlar küçüken beri ilgimi çekiyordu hem yazılım açısından hem de dönanım açısından.
      </aside>
    </div>

    <div class="mt-10 mb-5 bg-[#93939327] backdrop-blur-md border border-white/10 h-auto
              w-full max-w-4xl rounded-3xl p-8 shadow-lg">

      <div class="text-[40px] text-center mb-10 font-bold">Hobiler</div>

      <div class="flex flex-col md:flex-row justify-center items-start text-[22px] gap-4">

        <div class="flex-1 flex flex-col items-center p-4 text-center w-full">
          <div class="border-b border-white/20 pb-2 w-full">Rubik Küp</div>
          <div class="text-[16px] pt-5">
            2019'dan beri Rubik Küp çözüyorum <br>
            <a href="https://www.worldcubeassociation.org/persons/2019CHAZ01" 
              target="_blank" class="hover:text-blue-400 underline decoration-white/20">
              WCA Hesabım
            </a>
          </div>
        </div>

        <div class="flex-1 flex flex-col items-center p-4 text-center w-full
                    md:border-l md:border-r border-white/10 my-4 md:my-0">   
          <div class="border-b border-white/20 pb-2 w-full">Oyun Oynamak</div>
          <div class="text-[16px] pt-5">
            Oyun oynamayı seviyorum
          </div>
        </div>

        <div class="flex-1 flex flex-col items-center p-4 text-center w-full">    
          <div class="border-b border-white/20 pb-2 w-full">Kodlama</div>
          <div class="text-[16px] pt-5">
            Kodun bilgisayarla nasıl çalıştığını görmekten zevk alıyorum
          </div>
        </div>

      </div>
    </div>

    
    <div class="mt-12 p-10 w-full max-w-5xl flex flex-wrap justify-center items-center gap-6 
                bg-[#3131316f] rounded-4xl md:rounded-[100px] shadow-[0_0_30px_10px_rgba(83,83,83,0.448)]" 
         id="redirect-div">
      
      <button class="redirect-btn" onclick="window.open('./cv.php', '_self')">
        CV
      </button>

      <button class="redirect-btn" onclick="window.open('./sehrim.php', '_self')">
        Şehrim
      </button>

      <button class="redirect-btn" onclick="window.open('./ilgiAlanlar.php', '_self')">
        İlgi Alanlar
      </button>
    </div>
  </main>

  <?php include './php/footer.php'; ?>
</body>
</html>