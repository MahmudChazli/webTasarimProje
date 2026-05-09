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

        <form action="php/iletisimKontrol.php" method="POST" id="contactForm" @submit.prevent="submitFormVue">
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
              <label class="block text-sm font-medium mb-2 opacity-70">Adınız</label>
              <input type="text" name="name" v-model="formData.name"
                     class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 outline-none focus:border-[#ff8c00] transition-all">
            </div>
            <div>
              <label class="block text-sm font-medium mb-2 opacity-70">E-posta</label>
              <input type="email" name="email" v-model="formData.email"
                     class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 outline-none focus:border-[#ff8c00] transition-all">
            </div>
          </div>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <div>
              <label class="block text-sm font-medium mb-2 opacity-70">Telefon</label>
              <input type="text" id="phone_field" v-model="formData.phone" placeholder="05XXXXXXXXX"
                     class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 outline-none focus:border-[#ff8c00] transition-all">
            </div>
            <div>
              <label class="block text-sm font-medium mb-2 opacity-70">Konu</label>
              <select name="subject" v-model="formData.subject" 
                      class="w-full bg-[#1e1e1e] border border-white/10 rounded-xl px-4 py-3 outline-none focus:border-[#ff8c00] transition-all text-white">
                <option value="Destek">Teknik Destek</option>
                <option value="Geri Bildirim">Geri Bildirim</option>
                <option value="Diğer">Diğer</option>
              </select>
            </div>
          </div>

          <div class="mb-8">
            <label class="block text-sm font-medium mb-2 opacity-70">Mesajınız</label>
            <textarea name="message" v-model="formData.message" rows="4"
                      class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 outline-none focus:border-[#ff8c00] transition-all"></textarea>
          </div>

          <div class="flex flex-col gap-4">
            <div class="flex gap-4">
              <button type="button" onclick="sendWithNativeJS()" 
                      class="flex-1 bg-blue-500/30 hover:bg-blue-500/50 text-blue-400 font-bold py-3 rounded-xl transition-all">
                JS ile Gönder
              </button>
              <button type="submit" 
                      class="flex-1 bg-green-500/30 hover:bg-green-500/50 text-green-400 font-bold py-3 rounded-xl transition-all">
                Vue ile Gönder
              </button>
            </div>
            <button type="button" @click="clearForm"
                    class="w-full bg-red-500/10 hover:bg-red-500/20 text-red-400 py-2 rounded-xl text-sm transition-all">
              Temizle
            </button>
          </div>
        </form>

        <div v-if="isSubmitted" class="mt-8 p-6 bg-green-500/20 border border-green-500/50 rounded-2xl text-center">
            <h3 class="text-xl font-bold text-green-400">Mesajınız Alındı!</h3>
            <p class="opacity-80 mt-2">Teşekkürler {{ formData.name }}, mesajınız başarıyla gönderildi.</p>
        </div>
      </div>
    </main>
  </div>

  <script>
    function sendWithNativeJS() {
      const form = document.getElementById('contactForm');
      const name = form.name.value.trim();
      const email = form.email.value.trim();
      const phone = document.getElementById('phone_field').value.trim();
      const message = form.message.value.trim();
      const subject = form.subject.value;
      
      const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      const phonePattern = /^[0-9]+$/;

      if (!name || !email || !phone || !message) {
        alert("Lütfen tüm alanları doldurunuz.");
        return;
      }
      if (!emailPattern.test(email)) {
        alert("Geçersiz e-posta formatı.");
        return;
      }
      if (!phonePattern.test(phone)) {
        alert("Telefon sadece rakamlardan oluşmalıdır.");
        return;
      }

      const data = new FormData();
      data.append('name', name);
      data.append('email', email);
      data.append('phone', phone);
      data.append('subject', subject);
      data.append('message', message);

      fetch('php/iletisimKontrol.php', {
        method: 'POST',
        body: data
      })
      .then(response => {
        if (response.ok) {
          const appElement = document.getElementById('app');
          const vueInstance = appElement.__vue_app__._instance.proxy;
          vueInstance.formData.name = name;
          vueInstance.isSubmitted = true;
        } else {
          alert("Bir hata oluştu.");
        }
      })
      .catch(error => {
        alert("Sunucu hatası.");
      });
    }

    const { createApp, ref } = Vue;
    createApp({
      setup() {
        const isSubmitted = ref(false);
        const formData = ref({
          name: '', email: '', phone: '',
          subject: 'Destek', message: ''
        });

        const submitFormVue = () => {
          const phonePattern = /^[0-9]+$/;
          if (!formData.value.name || !formData.value.email || !formData.value.phone || !formData.value.message) {
            alert("Lütfen tüm alanları doldurun.");
            return;
          }
          if (!phonePattern.test(formData.value.phone)) {
            alert("Telefon sadece rakam olmalıdır.");
            return;
          }

          const data = new FormData();
          data.append('name', formData.value.name);
          data.append('email', formData.value.email);
          data.append('phone', formData.value.phone);
          data.append('subject', formData.value.subject);
          data.append('message', formData.value.message);

          fetch('php/iletisimKontrol.php', { method: 'POST', body: data })
            .then(() => { isSubmitted.value = true; });
        };

        const clearForm = () => {
          formData.value = { name: '', email: '', phone: '', subject: 'Destek', message: '' };
          isSubmitted.value = false;
        };

        return { formData, submitFormVue, clearForm, isSubmitted };
      }
    }).mount('#app');
  </script>

  <?php include 'php/footer.php'; ?>
</body>
</html>