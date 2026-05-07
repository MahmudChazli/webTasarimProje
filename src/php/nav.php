<nav class="nav-css fixed flex h-15 text-[30px] items-center top-0 w-full z-10 border-b-2 border-b-[#ffffff1a]" 
     style="padding: 5px 15px;">
  
  <div class="flex-1 flex justify-start gap-6">
    <a onclick="window.history.back()" class="cursor-pointer hover:opacity-70">&#8592;</a>

    <?php if(basename($_SERVER['SCRIPT_NAME']) != 'index.php'): ?>

    <a class="cursor-pointer hover:opacity-70" href="./index.php">Ana Menu</a>
    <?php endif; ?>

  </div>

  <div class="flex-1 flex justify-end gap-6 pr-6">
    <a class="cursor-pointer hover:opacity-70" href="./iletisim.php">İletişim</a>
    <a class="cursor-pointer hover:opacity-70" href="./giris.php">Giriş</a>
  </div>

</nav>