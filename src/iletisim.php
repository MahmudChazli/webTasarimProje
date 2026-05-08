<!DOCTYPE html>
<html lang="tr-TR">
<head>
  <?php include 'php/essentialHead.php'; ?>
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body>
  <?php include 'php/nav.php'; ?>

  <div id="app">
    <main class="container mx-auto px-4 flex items-center justify-center pt-32 pb-32">
      
      <div class="p-10 w-full max-w-2xl bg-[#93939327] backdrop-blur-md border border-white/10 rounded-3xl shadow-2xl">
        
        <h2 class="text-4xl font-bold text-center mb-8 tracking-tight">İletişim</h2>

        <form @submit.prevent="submitForm">
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
              <label class="block text-sm font-medium mb-2 opacity-70">Adınız</label>
              <input type="text" name="name" v-model="formData.name" required
                     class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 outline-none focus:border-[#ff8c00] transition-all">
            </div>
            <div>
              <label class="block text-sm font-medium mb-2 opacity-70">E-posta</label>
              <input type="email" name="email" v-model="formData.email" required
                     class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 outline-none focus:border-[#ff8c00] transition-all">
            </div>
          </div>

          <div class="mb-6">
            <label class="block text-sm font-medium mb-2 opacity-70">Konu</label>
            <select name="subject" v-model="formData.subject" 
                    class="w-full bg-[#1e1e1e] border border-white/10 rounded-xl px-4 py-3 outline-none focus:border-[#ff8c00] transition-all text-white">
              <option value="Destek">Teknik Destek</option>
              <option value="Geri Bildirim">Geri Bildirim</option>
              <option value="Diğer">Diğer</option>
            </select>
          </div>

          <div class="mb-8">
            <label class="block text-sm font-medium mb-2 opacity-70">Mesajınız</label>
            <textarea name="message" v-model="formData.message" rows="4" required
                      class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 outline-none focus:border-[#ff8c00] transition-all"></textarea>
          </div>

          <div class="flex gap-4">
            <button type="submit" 
                    class="flex-1 bg-green-500/30 hover:bg-green-500/50 text-green-400 font-bold py-3
                           rounded-xl transition-all">
              Gönder
            </button>
            <button type="button" @click="clearForm"
                    class="flex-1 bg-red-500/20 hover:bg-red-500/40 text-red-400 font-bold py-3 rounded-xl transition-all">
              Temizle
            </button>
          </div>

        </form>

        <div v-if="isSubmitted" class="mt-8 p-6 bg-green-500/20 border border-green-500/50 rounded-2xl text-center">
            <h3 class="text-xl font-bold text-green-400">Mesajınız Alındı!</h3>
            <p class="opacity-80 mt-2">Mesajınız Başarıla Gönderildi.</p>
        </div>

      </div>
    </main>
  </div>

  <script>
    const { createApp, ref } = Vue;

    createApp({
      setup() {
        const isSubmitted = ref(false);
        const formData = ref({
          name: '',
          email: '',
          subject: 'Destek',
          message: ''
        });

        const submitForm = () => {
          // Prepare data for PHP
          const data = new FormData();
          data.append('name', formData.value.name);
          data.append('email', formData.value.email);
          data.append('subject', formData.value.subject);
          data.append('message', formData.value.message);

          // The Fetch call "connects" this file to your PHP file
          fetch('php/iletisimKontrol.php', {
            method: 'POST',
            body: data
          })
          .then(response => response.text())
          .then(result => {
            console.log("Server Response:", result);
            isSubmitted.value = true; // Show success box
          })
          .catch(error => {
            console.error("Error:", error);
            alert("Sunucuya bağlanırken bir hata oluştu.");
          });
        };

        const clearForm = () => {
          formData.value = { name: '', email: '', subject: 'Destek', message: '' };
          isSubmitted.value = false;
        };

        return { formData, submitForm, clearForm, isSubmitted };
      }
    }).mount('#app');
  </script>

  <?php include 'php/footer.php'; ?>
</body>
</html>