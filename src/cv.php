<!DOCTYPE html>
<html lang="tr-TR">
<head>
  <?php include 'php/essentialHead.php'; ?>
  <link rel="stylesheet" href="./styles/cv.css">
  <title>CV - Mahmud Chazli</title>
</head>

<body>
  <?php include 'php/navGeri.php';?>

  <main class="grow flex justify-center items-start pt-28 pb-12 px-4">
    
    <div class="cv-card w-full max-w-4xl p-8 md:p-12">
      
      <header class="text-center mb-10 border-b-2 border-[#ff8c00] pb-6">
        <h1 class="text-4xl md:text-5xl font-bold mb-2">Mahmud Chazli</h1>
        <p class="text-lg text-gray-300">Sakarya Üniversitesi Bilgisayar Mühendisliği Öğrencisi</p>
      </header>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        
        <div class="md:col-span-1 space-y-8">
          <section>
            <h2 class="text-[#ff8c00] text-sm font-bold uppercase tracking-widest mb-4">Eğitim</h2>
            <div class="text-sm">
              <p class="font-bold" style="margin-left:10px;">Sakarya Üniversitesi</p>
              <p style="margin-left:10px;">Bilgisayar Mühendisliği</p>
            </div>
          </section>

          <section>
            <h2 class="text-[#ff8c00] text-sm font-bold uppercase tracking-widest mb-4">Yetenekler</h2>
            <ul class="list-disc text-sm space-y-2 text-gray-200">
              <li style="margin-left:20px;">ROS 2</li>
              <li style="margin-left:20px;">C++ / C# / Python</li>
              <li style="margin-left:20px;">HTML / CSS / JS</li>
            </ul>
          </section>
        </div>

        <!-- Right Column: Projects & Experience -->
        <div class="md:col-span-2 space-y-8">
          <section>
            <h2 class="text-[#ff8c00] text-sm font-bold uppercase tracking-widest mb-4">Öne Çıkan Projeler</h2>
            
            <div class="mb-6" style="margin-left:7px;">
              <h3 class="text-xl font-semibold">TEKNOFEST İnsansız Deniz Aracı</h3>
              <p class="text-sm text-gray-300 mt-2">
                ROS 2 Humble üzerinde otonom rota takibi, engel tespiti ve Kaçınma algoritmalarının implementasyonu.
              </p>
            </div>

            <div class="mb-6" style="margin-left:7px;">
              <h3 class="text-xl font-semibold">Çizim Uygulaması</h3>
              <p class="text-sm text-gray-300 mt-2">
                Windows Forms C# üzerinde nesne dayalı programlama ile geliştirilmiş gelişmiş çizim uygulaması.
              </p>
            </div>
          </section>
        </div>

      </div>
    </div>
  </main>

  <?php include 'php/footer.php'; ?>
</body>
</html>