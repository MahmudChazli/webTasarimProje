<!DOCTYPE html>
<html lang="tr-TR">
<head>
  <?php include 'php/essentialHead.php'; ?>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Slider için basit bir script ekleyeceğiz -->
  <link rel="stylesheet" href="./styles/sehrim.css">
  <title>Şehrim - Mahmud Chazli</title>
</head>

<body>
  <?php include 'php/navGeri.php'; ?>

  <main class="grow flex flex-col items-center pt-28 pb-12 px-4">
    <div class="w-full max-w-5xl space-y-12">

      <!-- ÖDEV GEREKSİNİMİ: Tıklanabilir Slider (En az 4 Resim) -->
      <section class="glass-card overflow-hidden relative group h-[400px]">
        <div id="slider" class="flex transition-transform duration-500 h-full">
          <img src="./images/slider1.jpg" class="w-full h-full object-cover shrink-0" alt="Galata">
          <img src="./images/slider2.jpg" class="w-full h-full object-cover shrink-0" alt="Ortaköy">
          <img src="./images/slider3.jpg" class="w-full h-full object-cover shrink-0" alt="Eminönü">
          <img src="./images/slider4.jpg" class="w-full h-full object-cover shrink-0" alt="Bebek">
        </div>


        <button onclick="moveSlider(-1)"
                class="absolute left-4 top-1/2 -translate-y-1/2
                    bg-black/50 p-3 rounded-full hover:bg-[#ff8c00]">
          &#x276E;
        </button>
        <button onclick="moveSlider(1)"
                class="absolute right-4 top-1/2 -translate-y-1/2 
                     bg-black/50 p-3 rounded-full hover:bg-[#ff8c00]">
                     &#x276F;
        </button>

      </section>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Halep ve İstanbul Kartları (Daha önce yaptığımız içerik) -->
        <section class="glass-card p-8">
          <h2 class="text-2xl font-bold mb-4 text-[#ff8c00]">1. Halep</h2>
          <p class="text-gray-300">Doğduğum yer, çocukluğumun ilk 6 yılının yaşadığım yeri.</p>
        </section>

        <section class="glass-card p-8">
          <h2 class="text-2xl font-bold mb-4 text-[#ff8c00]">02. İstanbul</h2>
          <p class="text-gray-300">2014'ten beri İstanbul'un Avrupa Yakası'nda yaşıyorum.</p>
        </section>
      </div>

      <!-- ÖDEV GEREKSİNİMİ: Mirasımız veya Takımımız -->
      <section class="glass-card p-8">
        <h2 class="text-3xl font-bold mb-6 text-center">Şehrin Mirası: Galata Kulesi</h2>
        <div class="flex flex-col md:flex-row gap-8 items-center">
            <img src="./images/galata_detail.jpg" class="w-64 h-64 rounded-full object-cover border-4 border-[#ff8c00]" alt="Galata Kulesi">
            <div class="space-y-4">
                <p class="text-gray-200 italic">"Cenevizliler tarafından 1348 yılında inşa edilen bu kule, yaşadığım Avrupa Yakası'nın en ikonik sembollerinden biridir."</p>
                <ul class="list-disc list-inside text-gray-400">
                    <li>Yükseklik: 62.5 metre</li>
                    <li>Yapım Yılı: 1348</li>
                    <li>Konum: Beyoğlu, İstanbul</li>
                </ul>
            </div>
        </div>
      </section>

    </div>
  </main>

  <script>
    let currentIndex = 0;
    const slider = document.getElementById('slider');
    function moveSlider(direction) {
      currentIndex = (currentIndex + direction + 4) % 4;
      slider.style.transform = `translateX(-${currentIndex * 100}%)`;
    }
  </script>

  <?php include 'php/footer.php'; ?>
</body>
</html>