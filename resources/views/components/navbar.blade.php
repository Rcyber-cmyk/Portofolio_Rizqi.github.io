<header class="w-full bg-[#1e4ca1] py-4 shadow-md relative z-40">
    <div class="container mx-auto px-4 flex justify-between md:justify-center items-center">
        
        <!-- Logo / Title Mobile -->
        <span class="text-white font-bold text-lg tracking-wider md:hidden">
            PORTOFOLIO
        </span>

        <!-- Tombol Hamburger Mobile -->
        <button id="mobile-menu-btn" 
                type="button" 
                class="text-white hover:text-slate-200 focus:outline-none p-2 rounded-md md:hidden z-50"
                aria-label="Toggle Navigation">
            <svg id="icon-open" class="w-6 h-6 block" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            <svg id="icon-close-btn" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>

        <!-- Sidebar Navigation -->
        <!-- Menggunakan murni Tailwind utility class (Fixed right di Mobile, Static di Desktop) -->
        <nav id="mobile-sidebar" 
             class="fixed top-0 right-0 h-full w-64 bg-[#1b4390] shadow-2xl z-50 transform translate-x-full transition-transform duration-300 ease-in-out p-6 flex flex-col md:static md:h-auto md:w-auto md:bg-transparent md:shadow-none md:translate-x-0 md:p-0 md:flex-row md:items-center gap-3">
            
            <!-- Header Sidebar (Mobile Only) -->
            <div class="flex justify-between items-center pb-4 border-b border-blue-400/30 mb-2 md:hidden">
                <span class="text-white font-bold text-lg tracking-wider">MENU</span>
                <button id="close-sidebar-btn" type="button" class="text-white hover:text-slate-300 p-1">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            <!-- Links -->
            <a href="{{ url('/') }}" 
               class="{{ Request::is('/') ? 'bg-[#a8c6f7] text-slate-900 font-bold shadow' : 'text-white hover:bg-white/10' }} px-4 py-2.5 rounded-lg transition-colors text-left text-sm md:text-base block">
                Beranda
            </a>

            <a href="{{ url('/tentang') }}" 
               class="{{ Request::is('tentang') ? 'bg-[#a8c6f7] text-slate-900 font-bold shadow' : 'text-white hover:bg-white/10' }} px-4 py-2.5 rounded-lg transition-colors text-left text-sm md:text-base block">
                Tentang
            </a>

            <a href="{{ url('/pendidikan') }}" 
               class="{{ Request::is('pendidikan') ? 'bg-[#a8c6f7] text-slate-900 font-bold shadow' : 'text-white hover:bg-white/10' }} px-4 py-2.5 rounded-lg transition-colors text-left text-sm md:text-base block">
                Pendidikan
            </a>

            <a href="{{ url('/kerja') }}" 
               class="{{ Request::is('kerja') ? 'bg-[#a8c6f7] text-slate-900 font-bold shadow' : 'text-white hover:bg-white/10' }} px-4 py-2.5 rounded-lg transition-colors text-left text-sm md:text-base block">
                Riwayat Pekerjaan
            </a>

            <a href="{{ url('/projek') }}" 
               class="{{ Request::is('projek') ? 'bg-[#a8c6f7] text-slate-900 font-bold shadow' : 'text-white hover:bg-white/10' }} px-4 py-2.5 rounded-lg transition-colors text-left text-sm md:text-base block">
                Projek
            </a>

            <a href="{{ url('/sertifikasi') }}" 
               class="{{ Request::is('sertifikasi') ? 'bg-[#a8c6f7] text-slate-900 font-bold shadow' : 'text-white hover:bg-white/10' }} px-4 py-2.5 rounded-lg transition-colors text-left text-sm md:text-base block">
                Sertifikasi
            </a>
        </nav>

        <!-- Latar Belakang Gelap (Mobile Only) -->
        <div id="sidebar-overlay" class="fixed inset-0 bg-black/50 z-40 hidden md:hidden transition-opacity"></div>

    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleBtn = document.getElementById('mobile-menu-btn');
        const closeBtn = document.getElementById('close-sidebar-btn');
        const sidebar = document.getElementById('mobile-sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        const iconOpen = document.getElementById('icon-open');
        const iconCloseBtn = document.getElementById('icon-close-btn');

        function openSidebar() {
            sidebar.classList.remove('translate-x-full');
            sidebar.classList.add('translate-x-0');
            overlay.classList.remove('hidden');
            if (iconOpen && iconCloseBtn) {
                iconOpen.classList.add('hidden');
                iconCloseBtn.classList.remove('hidden');
            }
        }

        function closeSidebar() {
            sidebar.classList.remove('translate-x-0');
            sidebar.classList.add('translate-x-full');
            overlay.classList.add('hidden');
            if (iconOpen && iconCloseBtn) {
                iconOpen.classList.remove('hidden');
                iconCloseBtn.classList.add('hidden');
            }
        }

        if (toggleBtn && sidebar) {
            toggleBtn.addEventListener('click', function (e) {
                e.stopPropagation();
                if (sidebar.classList.contains('translate-x-full')) {
                    openSidebar();
                } else {
                    closeSidebar();
                }
            });
        }

        if (closeBtn) {
            closeBtn.addEventListener('click', closeSidebar);
        }

        if (overlay) {
            overlay.addEventListener('click', closeSidebar);
        }
    });
</script>