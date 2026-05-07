<!DOCTYPE html>
<html lang="tr-TR">
<head>
  <?php include 'php/essentialHead.php'; ?>
  <link href="./styles/ilgiAlanlar.css" rel="stylesheet">
</head>

<body>
  <?php include 'php/navGeri.php'; ?>

  <main class="container mx-auto px-8 py-20">
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 
                border-b-2 border-white/40 pb-8">
      
      <div class="relative w-full md:w-80 blur-1">
        <input 
          type="text" id="game-search" placeholder="Oyun Ara" 
          class="w-full bg-transparent placeholder-[#ffffff]/40 
                 font-black py-4 px-6 outline-none border-2 border-white/40
                 transition-all text-lg hover:border-white focus:border-white"
        >
      </div>
    </div>

    <div id="games-container" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">
      <div id="status-msg" class="col-span-full text-center py-32 text-2xl font-black tracking-widest animate-pulse uppercase">
        Sistem Başlatılıyor...
      </div>
    </div>

    <div id="load-more-container" class="flex justify-center mt-20 mb-10">
        <button id="load-more-btn" class="bg-transparent text-[#ffffffb6] hover:text-white hover:border-white border-4 border-[#ffffff87] px-16 py-4 font-black
                    text-xl hover:bg-[#ffffff12] transition-all duration-200 ">
            Daha Fazla Göster
        </button>
    </div>
  </main>

  <?php include 'php/footer.php'; ?>

  <script>
    const RAWG_KEY = '5f1c78ed4540475d84965354590a4d29';
    let timeout = null;
    let nextPageUrl = null;

    async function fetchData(url, append = false) {
      const container = document.getElementById('games-container');
      const loadMoreDiv = document.getElementById('load-more-container');
      const statusMsg = document.getElementById('status-msg');
      
      try {
        const response = await fetch(url);
        
        if (response.status === 401) throw new Error("API ANAHTARI HATALI");
        if (response.status === 429) throw new Error("LIMIT DOLDU (BEKLEYİN)");
        if (!response.ok) throw new Error("SUNUCU HATASI: " + response.status);
        
        const data = await response.json();
        nextPageUrl = data.next;

        // NSFW Filter
        const cleanGames = data.results.filter(game => {
          const nsfwTags = ['nsfw', 'erotic', 'adult', 'hentai', 'sexual-content'];
          return !game.tags?.some(tag => nsfwTags.includes(tag.slug));
        });

        if (!append) {
          // Null check to prevent the "property style" error
          if (statusMsg) statusMsg.style.display = 'none';
          container.innerHTML = '';
        }

        if (cleanGames.length === 0 && !append) {
          container.innerHTML = `
            <p class="col-span-full text-center text-2xl font-black py-20 opacity-50 tracking-widest">
              Eşleşme Bulunmadı.
            </p>
            `;
        } else {
          renderGames(cleanGames);
        }

        if (loadMoreDiv) {
            loadMoreDiv.classList.toggle('hidden', !nextPageUrl);
        }

      } catch (err) {
        console.error("Critical Error:", err);
        if (!append && container) {
          container.innerHTML = `<p class="col-span-full text-center text-[#ff8c00] font-black py-20 tracking-tighter">HATA: ${err.message}</p>`;
        }
      }
    }

    function renderGames(games) {
      const container = document.getElementById('games-container');
      const html = games.map(game => `

        <div class="group border-2 border-[#ffffff12] transition-all duration-300 flex flex-col h-full hover:shadow-none">
          <div class="relative h-56 overflow-hidden">

            <img src="${game.background_image || 'https://via.placeholder.com/600x400/000/ff8c00?text=No+Image'}" 
                 class="w-full h-full object-cover transition duration-500 group-hover:scale-110" alt="${game.name}">
            <div class="absolute top-0 right-0 bg-[#ff8c00] text-black font-black px-3 py-1 text-xs border-l-2 border-b-2 border-black">
              ★ ${game.rating || 'N/A'}
            </div>

          </div>

          <div class="blured-background p-6 flex flex-col grow min-h-[146px]">

            <h4 class="text-xl font-black leading-tight mb-4 line-clamp-2">
              ${game.name}
            </h4>
            <div class="mt-auto flex justify-between items-center pt-4 border-t border-[#ffffffa7]
                        text-[10px] font-bold tracking-widest">
              <span>${game.released?.split('-')[0] || 'TBA'}</span>
              <span class=" ">ID: ${game.id}</span>
            </div>
            
          </div>

        </div>

      `).join('');
      container.insertAdjacentHTML('beforeend', html);
    }

    // Wait for DOM to be fully ready before starting
    document.addEventListener('DOMContentLoaded', () => {
      // Initial Load
      fetchData(`https://api.rawg.io/api/games?key=${RAWG_KEY}&page_size=20&ordering=-relevance&exclude_add=true`);

      // Search Listener
      const searchInput = document.getElementById('game-search');
      if (searchInput) {
        searchInput.addEventListener('input', (e) => {
          clearTimeout(timeout);
          const query = e.target.value.trim();
          timeout = setTimeout(() => {
            const url = query.length > 2 
              ? `https://api.rawg.io/api/games?key=${RAWG_KEY}&search=${encodeURIComponent(query)}&page_size=20&exclude_add=true`
              : `https://api.rawg.io/api/games?key=${RAWG_KEY}&page_size=20&ordering=-relevance&exclude_add=true`;
            fetchData(url, false);
          }, 600);
        });
      }

      // Load More Listener
      const loadMoreBtn = document.getElementById('load-more-btn');
      if (loadMoreBtn) {
        loadMoreBtn.addEventListener('click', () => {
          if (nextPageUrl) {
            const authUrl = nextPageUrl.includes('key=') ? nextPageUrl : `${nextPageUrl}&key=${RAWG_KEY}`;
            fetchData(authUrl, true);
          }
        });
      }
    });
  </script>
</body>
</html>