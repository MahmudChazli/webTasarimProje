<!DOCTYPE html>
<html lang="tr-TR">
<head>
  <?php include 'php/essentialHead.php'; ?>
</head>

<body>
  <?php include 'php/nav.php'; ?>

  <main class="container mx-auto px-4 flex items-center justify-center pt-40">
    
    <div class="p-10 w-full max-w-md bg-[#93939327] backdrop-blur-md border border-white/10 rounded-3xl shadow-2xl">
      
      <h2 class="text-3xl font-bold text-center mb-8 tracking-tight">Giriş Yap</h2>

      <form action="./php/girisKontrol.php" method="POST" onsubmit="return validateLogin()">
        
        <div class="mb-6">
          <label class="block text-sm font-medium mb-2 opacity-70">E-posta</label>
          <input type="text" name="email" id="email" 
                 placeholder="b1812100001@sakarya.edu.tr"
                 class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 outline-none focus:border-[#ff8c00] transition-all">
        </div>

        <div class="mb-8">
          <label class="block text-sm font-medium mb-2 opacity-70">Şifre</label>
          <input type="password" name="password" id="password" 
                 placeholder="Öğrenci Numarası"
                 class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 outline-none focus:border-[#ff8c00] transition-all">
        </div>

        <div class="pr-5 pl-5">
          <button type="submit" 
                  class="mb-3 w-full  bg-green-500/30 hover:bg-green-500/50 text-green-400 font-bold py-3
                        rounded-xl duration-200">
            Giriş
          </button>
        </div>

        <p id="error-msg" class="text-red-400 text-sm mt-4 text-center hidden"></p>
      </form>

    </div>
  </main>

  <script>
    function validateLogin() {
      const email = email.value;
      const password = password.value;
      const errorDiv = error-msg;
      
      errorDiv.classList.add('hidden');

      if (!email || !password) {
        errorDiv.textContent = "Lütfen tüm alanları doldurunuz.";
        errorDiv.classList.remove('hidden');
        return false;
      }

      const emailPattern = /^[a-zA-Z0-9._%+-]+@sakarya\.edu\.tr$/;
      if (!emailPattern.test(email)) {
        errorDiv.textContent = "Geçerli bir Sakarya Üniversitesi e-postası giriniz.";
        errorDiv.classList.remove('hidden');
        return false;
      }

      return true;
    }

    document.addEventListener("DOMContentLoaded", () => {
  const urlParams = new URLSearchParams(window.location.search);
  const errorDiv = document.getElementById('error-msg');

  if (urlParams.has('error')) {
    const errorType = urlParams.get('error');
    
    if (errorType === 'wrongcredentials') {
      errorDiv.textContent = "Hata: E-posta veya şifre hatalı.";
      errorDiv.classList.remove('hidden');
    }
  }
});
  </script>

  <?php include 'php/footer.php'; ?>
</body>
</html>