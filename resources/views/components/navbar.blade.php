<header class="w-full bg-[#1e4ca1] py-4 shadow-md">
    <nav class="container mx-auto px-4 flex flex-wrap justify-center items-center gap-3 text-white font-bold text-sm md:text-base">
        <!-- Beranda -->
        <a href="{{ url('/') }}" 
           class="{{ Request::is('/') ? 'bg-[#a8c6f7] text-slate-900 shadow' : 'text-white hover:text-slate-200' }} px-4 py-2 rounded-md transition-colors">
            Beranda
        </a>

        <!-- Tentang -->
        <a href="{{ url('/tentang') }}" 
           class="{{ Request::is('tentang') ? 'bg-[#a8c6f7] text-slate-900 shadow' : 'text-white hover:text-slate-200' }} px-4 py-2 rounded-md transition-colors">
            Tentang
        </a>

        <!-- Pendidikan -->
        <a href="{{ url('/pendidikan') }}" 
           class="{{ Request::is('pendidikan') ? 'bg-[#a8c6f7] text-slate-900 shadow' : 'text-white hover:text-slate-200' }} px-4 py-2 rounded-md transition-colors">
            Pendidikan
        </a>

        <!-- Riwayat Pekerjaan -->
        <a href="{{ url('/kerja') }}" 
           class="{{ Request::is('kerja') ? 'bg-[#a8c6f7] text-slate-900 shadow' : 'text-white hover:text-slate-200' }} px-4 py-2 rounded-md transition-colors">
            Riwayat Pekerjaan
        </a>

        <!-- Projek -->
        <a href="{{ url('/projek') }}" 
           class="{{ Request::is('projek') ? 'bg-[#a8c6f7] text-slate-900 shadow' : 'text-white hover:text-slate-200' }} px-4 py-2 rounded-md transition-colors">
            Projek
        </a>

        <!-- Sertifikasi -->
        <a href="{{ url('/sertifikasi') }}" 
           class="{{ Request::is('sertifikasi') ? 'bg-[#a8c6f7] text-slate-900 shadow' : 'text-white hover:text-slate-200' }} px-4 py-2 rounded-md transition-colors">
            Sertifikasi
        </a>
    </nav>
</header>