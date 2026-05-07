<!DOCTYPE html>
<html lang="tr-TR">
<head>
  <?php include 'php/essentialHead.php'; ?>
  <link rel="stylesheet" href="./styles/sehrim.css">
</head>

<body>
  <?php include 'php/nav.php'; ?>

  <main class="grow flex flex-col items-center pt-28 pb-12 px-4">
    <div class="w-full max-w-5xl space-y-12">

      <section class="glass-card-css overflow-hidden relative group"
               style="height:600px; overflow:hidden; mask-image:radial-gradient(white, black)">
        <div id="slider" class="flex transition-transform duration-500 h-full font-semibold text-xs">

          <!-- Slide -->
          <div class="w-full h-full shrink-0 relative">
            <img src="./images/sehir/istanbul1.jpg" 
            class="w-full h-full object-cover shrink-0" alt="Kayaşehir">
            
            <span class="absolute top-4 right-4 px-3 py-1 rounded-lg backdrop-blur-md bg-black/60">
              Başakşehir, İstanbul
            </span>
            
            <span class="absolute top-12 right-4 px-3 py-1 rounded-lg backdrop-blur-md bg-black/60">
              Kayaşehir Ramadan
            </span>
          </div>

          <!-- Slide -->
          <div class="w-full h-full shrink-0 relative">
            <img src="./images/sehir/istanbul2.jpg" 
            class="w-full h-full object-cover shrink-0" alt="Eminönü">
            
            <span class="absolute top-4 right-4 px-3 py-1 rounded-lg backdrop-blur-md bg-black/60 border border-white/10">
              Küçükçekmece, İstanbul
            </span>
            
            <span class="absolute top-12 right-4 px-3 py-1 rounded-lg backdrop-blur-md bg-black/60">
              Tema World
            </span>
          </div>

          <!-- Slide -->
          <div class="w-full h-full shrink-0 relative">
            <img src="./images/sehir/istanbul3.jpg" 
            class="w-full h-full object-cover shrink-0" alt="Eminönü">

            <span class="absolute top-4 right-4 px-3 py-1 rounded-lg backdrop-blur-md bg-black/60 border border-white/10">
              Fatih, İstanbul
            </span>

            <span class="absolute top-12 right-4 px-3 py-1 rounded-lg backdrop-blur-md bg-black/60">
              Galata Külesi
            </span>
          </div>

          <!-- Slide -->
          <div class="w-full h-full shrink-0 relative">
            <img src="./images/sehir/syria1.jpg" 
            class="w-full h-full object-cover shrink-0" alt="Bebek">

            <span class="absolute top-4 right-4 px-3 py-1 rounded-lg backdrop-blur-md bg-black/60 border border-white/10">
              Eski Halep, Suriye
            </span>

            <span class="absolute top-12 right-4 px-3 py-1 rounded-lg backdrop-blur-md bg-black/60">
              Halep Kalesi
            </span>
          </div>

          <!-- Slide -->
          <div class="w-full h-full shrink-0 relative">
            <img src="./images/sehir/antalya.jpg" 
            class="w-full h-full object-cover shrink-0" alt="Ortaköy">

            <span class="absolute top-4 right-4 px-3 py-1 rounded-lg backdrop-blur-md bg-black/60 border border-white/10">
              Belek, Antalya
            </span>

            <span class="absolute top-12 right-4 px-3 py-1 rounded-lg backdrop-blur-md bg-black/60">
              Max Royal
            </span>
          </div>

          <!-- Slide -->
          <div class="w-full h-full shrink-0 relative">
            <img src="./images/sehir/ankara.jpg" 
            class="w-full h-full object-cover shrink-0" alt="Bebek">

            <span class="absolute top-4 right-4 px-3 py-1 rounded-lg backdrop-blur-md bg-black/60 border border-white/10">
              Çankaya, Ankara
            </span>

            <span class="absolute top-12 right-4 px-3 py-1 rounded-lg backdrop-blur-md bg-black/60">
              Anıtkabir
            </span>
          </div>

          <!-- Slide -->          
          <div class="w-full h-full shrink-0 relative">
            <img src="./images/sehir/uae.jpg" 
            class="w-full h-full object-cover shrink-0" alt="Ortaköy">

            <span class="absolute top-4 right-4 px-3 py-1 rounded-lg backdrop-blur-md bg-black/60 border border-white/10">
              Abu Dabi, BAE
            </span>

            <span class="absolute top-12 right-4 px-3 py-1 rounded-lg backdrop-blur-md bg-black/60">
              Şeyh Zayid Camii
            </span>
          </div>

          <!-- Slide -->
          <div class="w-full h-full shrink-0 relative">
            <img src="./images/sehir/malezia1.jpg" 
            class="w-full h-full object-cover shrink-0" alt="Bebek">
            
            <span class="absolute top-4 right-4 px-3 py-1 rounded-lg backdrop-blur-md bg-black/60 border border-white/10">
              Langkawi, Malezya
            </span>

            <span class="absolute top-12 right-4 px-3 py-1 rounded-lg backdrop-blur-md bg-black/60">
              Langkawi Sky Bridge
            </span>
          </div>

          <!-- Slide -->
          <div class="w-full h-full shrink-0 relative">
            <img src="./images/sehir/malezia2.jpg" 
            class="w-full h-full object-cover shrink-0" alt="Bebek">

            <span class="absolute top-4 right-4 px-3 py-1 rounded-lg backdrop-blur-md bg-black/60 border border-white/10">
              Langkawi, Malezya
            </span>

            <span class="absolute top-12 right-4 px-3 py-1 rounded-lg backdrop-blur-md bg-black/60">
              Ritz Carlton
            </span>
          </div>

        </div>

        <!-- Buttons -->
        <button onclick="moveSlider(-1)"
                class="absolute left-4 top-1/2 -translate-y-1/2
                    bg-black/50 p-3 rounded-xl hover:bg-[#ff8c00]">
          &#x276E;
        </button>
        <button onclick="moveSlider(1)"
                class="absolute right-4 top-1/2 -translate-y-1/2 
                     bg-black/50 p-3 rounded-xl hover:bg-[#ff8c00]">
          &#x276F;
        </button>
      </section>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <section class="glass-card-css p-8">
          <h2 class="text-2xl font-bold mb-4 text-[#ff8c00]">1. Halep</h2>
          <p class="text-gray-300">Doğduğum yer, çocukluğumun ilk 6 yılının yaşadığım yeri.</p>
        </section>

        <section class="glass-card-css p-8">
          <h2 class="text-2xl font-bold mb-4 text-[#ff8c00]">2. İstanbul</h2>
          <p class="text-gray-300">2014'ten beri İstanbul'un Avrupa Yakası'nda yaşıyorum.</p>
        </section>
      </div>

      <section class="glass-card-css p-8">
        <h2 class="text-3xl font-bold mb-6 text-center text-[#ff8c00]">Halep Kalesi</h2>
        <div class="flex flex-col md:flex-row gap-8 items-center">
          
          <img src="./images/sehir/syria2.jpg" 
               class="rounded-xl object-center border-4 border-[#ff8c00]"
               style="width:400px; height:500px;"
               alt="Halep Kalesi">

          <div class="space-y-4">
              <p class="text-gray-200 italic text-2xl">"Dünyanın en eski ve en büyük kalelerinden biri olan Halep Kalesi, çocukluğumun geçtiği bu şehrin ruhunu temsil ediyor."</p>
              <ul class="list-disc list-inside text-gray-400 text-1xl">
                <li>Toplam Alan: 39.000 m&sup2;</li>
                <li>Yapım Yılı: M.Ö. 3. Binyıl</li>
                <li>Konum: Eski Halep, Suriye</li>
              </ul>
          </div>
        </div>
      </section>

    </div>
  </main>

  <script>
    let currentIndex = 0;
    function moveSlider(direction) {
      currentIndex = (currentIndex + direction + 9) % 9;
      slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    }
  </script>

  <?php include 'php/footer.php'; ?>
</body>
</html>