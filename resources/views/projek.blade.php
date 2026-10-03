<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projek - Portofolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js untuk mengontrol Modal Preview Gambar -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-[#13305d] text-slate-900 min-h-screen font-sans" x-data="{ openModal: false, imgUrl: '', imgTitle: '' }">

    <!-- Memanggil Navbar Component -->
    @include('components.navbar')

    <!-- Main Content Container -->
    <main class="container mx-auto px-4 py-10 max-w-6xl">
        
        <!-- Header Judul -->
        <div class="text-center mb-10">
            <h1 class="text-3xl md:text-5xl font-extrabold text-slate-200 tracking-tight uppercase">
                Portofolio Projek
            </h1>
            <p class="text-slate-200 text-sm md:text-base mt-2 font-medium">
                Detail pengembangan sistem dan aplikasi web beserta contoh dokumentasi tampilan
            </p>
        </div>

        <!-- KARTU PROJEK 1: Website Portal Kerja Joob-seeckher -->
        <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 md:p-8 shadow-xl border border-white/40 mb-10">
            
            <!-- Header Kartu Projek -->
            <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4 mb-6 border-b border-slate-200 pb-4">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-100 px-3 py-1 rounded-full">
                        Web Application & Decision Support System
                    </span>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 mt-2">
                        Website Portal Kerja (Joob-seeckher)
                    </h2>
                </div>
                <!-- Tech Stack Badges -->
                <div class="flex flex-wrap gap-2">
                    <span class="bg-blue-100 text-blue-800 text-xs font-bold px-3 py-1 rounded-md">Laravel</span>
                    <span class="bg-amber-100 text-amber-800 text-xs font-bold px-3 py-1 rounded-md">SPK SAW</span>
                    <span class="bg-cyan-100 text-cyan-800 text-xs font-bold px-3 py-1 rounded-md">Bootstrap CSS</span>
                    <span class="bg-slate-200 text-slate-800 text-xs font-bold px-3 py-1 rounded-md">MySQL</span>
                    <span class="bg-blue-200 text-blue-600 text-xs font-bold px-3 py-1 rounded-md">Laragon</span>
                </div>
            </div>

            <!-- Deskripsi Projek -->
            <div class="mb-8">
                <h3 class="text-lg font-bold text-slate-900 mb-2">Deskripsi Projek:</h3>
                <p class="text-slate-700 leading-relaxed font-medium text-base">
                    <b>Joob-seeckher</b> adalah sistem portal lowongan kerja interaktif berbasis web yang menghubungkan pencari kerja dengan perusahaan. Aplikasi ini dilengkapi dengan implementasi algoritma Simple Additive Weighting (SAW) untuk merekomendasikan pelamar kerja terbaik secara otomatis berdasarkan kriteria dan bobot yang ditentukan oleh pihak rekruter.
                </p>
            </div>

            <!-- Dokumentasi & Tampilan Fitur -->
            <div>
                <h3 class="text-lg font-bold text-slate-900 mb-4 flex items-center gap-2">
                    <span>Dokumentasi & Tampilan Fitur</span>
                </h3>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                
                    <!-- Foto 1 -->
                    <div class="group relative bg-slate-950 rounded-xl overflow-hidden border border-slate-700/60 h-48 md:h-56 cursor-pointer" @click="openModal = true; imgUrl = '{{ asset('images/projek1.png') }}'; imgTitle = 'Tampilan Fitur 1'">
                        <img src="{{ asset('images/projek1.png') }}" alt="Dokumentasi 1" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.onerror=null; this.src='https://placehold.co/400x300/1e293b/ffffff?text=Pengembangan+Aplikasi';">
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="bg-indigo-600 text-white text-xs px-3 py-1.5 rounded-lg shadow font-medium flex items-center gap-1">
                                🔍 Lihat Detail
                            </button>
                        </div>
                    </div>

                    <!-- Foto 2 -->
                    <div class="group relative bg-slate-950 rounded-xl overflow-hidden border border-slate-700/60 h-48 md:h-56 cursor-pointer" @click="openModal = true; imgUrl = '{{ asset('images/projek2.png') }}'; imgTitle = 'Tampilan Fitur 2'">
                        <img src="{{ asset('images/projek2.png') }}" alt="Dokumentasi 2" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.onerror=null; this.src='https://placehold.co/400x300/1e293b/ffffff?text=Setup+Kerja';">
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="bg-indigo-600 text-white text-xs px-3 py-1.5 rounded-lg shadow font-medium flex items-center gap-1">
                                🔍 Lihat Detail
                            </button>
                        </div>
                    </div>

                    <!-- Foto 3 -->
                    <div class="group relative bg-slate-950 rounded-xl overflow-hidden border border-slate-700/60 h-48 md:h-56 cursor-pointer" @click="openModal = true; imgUrl = '{{ asset('images/projek3.png') }}'; imgTitle = 'Tampilan Fitur 3'">
                        <img src="{{ asset('images/projek3.png') }}" alt="Dokumentasi 3" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.onerror=null; this.src='https://placehold.co/400x300/1e293b/ffffff?text=Pengerjaan+Sistem';">
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="bg-indigo-600 text-white text-xs px-3 py-1.5 rounded-lg shadow font-medium flex items-center gap-1">
                                🔍 Lihat Detail
                            </button>
                        </div>
                    </div>

                    <!-- Foto 4 -->
                    <div class="group relative bg-slate-950 rounded-xl overflow-hidden border border-slate-700/60 h-48 md:h-56 cursor-pointer" @click="openModal = true; imgUrl = '{{ asset('images/projek4.png') }}'; imgTitle = 'Tampilan Fitur 4'">
                        <img src="{{ asset('images/projek4.png') }}" alt="Dokumentasi 4" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.onerror=null; this.src='https://placehold.co/400x300/1e293b/ffffff?text=Kolaborasi+Tim';">
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="bg-indigo-600 text-white text-xs px-3 py-1.5 rounded-lg shadow font-medium flex items-center gap-1">
                                🔍 Lihat Detail
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        
        <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 md:p-8 shadow-xl border border-white/40 mb-10">
            
            <!-- Header Kartu Projek -->
            <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4 mb-6 border-b border-slate-200 pb-4">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-100 px-3 py-1 rounded-full">
                        Web Online Store
                    </span>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 mt-2">
                        Website Toko Online Gadget (Z-Tech)
                    </h2>
                </div>
                <!-- Tech Stack Badges -->
                <div class="flex flex-wrap gap-2">
                    <span class="bg-blue-100 text-blue-800 text-xs font-bold px-3 py-1 rounded-md">HTML</span>
                    <span class="bg-amber-100 text-amber-800 text-xs font-bold px-3 py-1 rounded-md">CSS</span>
                    <span class="bg-cyan-100 text-cyan-800 text-xs font-bold px-3 py-1 rounded-md">Visual Code</span>
                </div>
            </div>

            <!-- Deskripsi Projek -->
            <div class="mb-8">
                <h3 class="text-lg font-bold text-slate-900 mb-2">Deskripsi Projek:</h3>
                <p class="text-slate-700 leading-relaxed font-medium text-base">
                    Pembuatan website penjualan produk Online sederhana menggunakan html dan css.
                </p>
            </div>

            <!-- Dokumentasi & Tampilan Fitur -->
            <div>
                <h3 class="text-lg font-bold text-slate-900 mb-4 flex items-center gap-2">
                    <span>Dokumentasi & Tampilan Fitur</span>
                </h3>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                
                    <!-- Foto 1 -->
                    <div class="group relative bg-slate-950 rounded-xl overflow-hidden border border-slate-700/60 h-48 md:h-56 cursor-pointer" @click="openModal = true; imgUrl = '{{ asset('images/pr1.png') }}'; imgTitle = 'Tampilan Fitur 1'">
                        <img src="{{ asset('images/pr1.png') }}" alt="Dokumentasi 1" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.onerror=null; this.src='https://placehold.co/400x300/1e293b/ffffff?text=Pengembangan+Aplikasi';">
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="bg-indigo-600 text-white text-xs px-3 py-1.5 rounded-lg shadow font-medium flex items-center gap-1">
                                🔍 Lihat Detail
                            </button>
                        </div>
                    </div>

                    <!-- Foto 2 -->
                    <div class="group relative bg-slate-950 rounded-xl overflow-hidden border border-slate-700/60 h-48 md:h-56 cursor-pointer" @click="openModal = true; imgUrl = '{{ asset('images/pr2.png') }}'; imgTitle = 'Tampilan Fitur 2'">
                        <img src="{{ asset('images/pr2.png') }}" alt="Dokumentasi 2" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.onerror=null; this.src='https://placehold.co/400x300/1e293b/ffffff?text=Setup+Kerja';">
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="bg-indigo-600 text-white text-xs px-3 py-1.5 rounded-lg shadow font-medium flex items-center gap-1">
                                🔍 Lihat Detail
                            </button>
                        </div>
                    </div>

                    <!-- Foto 3 -->
                    <div class="group relative bg-slate-950 rounded-xl overflow-hidden border border-slate-700/60 h-48 md:h-56 cursor-pointer" @click="openModal = true; imgUrl = '{{ asset('images/pr3.png') }}'; imgTitle = 'Tampilan Fitur 3'">
                        <img src="{{ asset('images/pr3.png') }}" alt="Dokumentasi 3" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.onerror=null; this.src='https://placehold.co/400x300/1e293b/ffffff?text=Pengerjaan+Sistem';">
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="bg-indigo-600 text-white text-xs px-3 py-1.5 rounded-lg shadow font-medium flex items-center gap-1">
                                🔍 Lihat Detail
                            </button>
                        </div>
                    </div>

                    <!-- Foto 4 -->
                    <div class="group relative bg-slate-950 rounded-xl overflow-hidden border border-slate-700/60 h-48 md:h-56 cursor-pointer" @click="openModal = true; imgUrl = '{{ asset('images/pr4.png') }}'; imgTitle = 'Tampilan Fitur 4'">
                        <img src="{{ asset('images/pr4.png') }}" alt="Dokumentasi 4" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.onerror=null; this.src='https://placehold.co/400x300/1e293b/ffffff?text=Kolaborasi+Tim';">
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="bg-indigo-600 text-white text-xs px-3 py-1.5 rounded-lg shadow font-medium flex items-center gap-1">
                                🔍 Lihat Detail
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 md:p-8 shadow-xl border border-white/40 mb-10">
            
            <!-- Header Kartu Projek -->
            <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4 mb-6 border-b border-slate-200 pb-4">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-100 px-3 py-1 rounded-full">
                        Projek Flutter
                    </span>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 mt-2">
                        Aplikasi Toko Sepatu
                    </h2>
                </div>
                <!-- Tech Stack Badges -->
                <div class="flex flex-wrap gap-2">
                    <span class="bg-blue-100 text-blue-800 text-xs font-bold px-3 py-1 rounded-md">Flutter</span>
                    <span class="bg-amber-100 text-amber-800 text-xs font-bold px-3 py-1 rounded-md">Dart</span>
                    <span class="bg-cyan-100 text-cyan-800 text-xs font-bold px-3 py-1 rounded-md">SQL</span>
                </div>
            </div>

            <!-- Deskripsi Projek -->
            <div class="mb-8">
                <h3 class="text-lg font-bold text-slate-900 mb-2">Deskripsi Projek:</h3>
                <p class="text-slate-700 leading-relaxed font-medium text-base">
                    Aplikasi mobile e-commerce yang dirancang untuk memfasilitasi profile, katalog produk, dan transaksi pembelian sepatu lokal/UMKM. Aplikasi ini dikembangkan menggunakan framework Flutter dan bahasa pemrograman Dart untuk menghasilkan antarmuka pengguna (frontend) yang mulus di berbagai perangkat. Selain itu, pengembangan antarmuka ini mengedepankan prinsip Responsive UI/UX Design untuk memastikan kenyamanan pengguna saat memilih varian produk dan melakukan checkout.
                </p>
            </div>

            <!-- Dokumentasi & Tampilan Fitur -->
            <div>
                <h3 class="text-lg font-bold text-slate-900 mb-4 flex items-center gap-2">
                    <span>Dokumentasi & Tampilan Fitur</span>
                </h3>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                
                    <!-- Foto 1 -->
                    <div class="group relative bg-slate-950 rounded-xl overflow-hidden border border-slate-700/60 h-48 md:h-56 cursor-pointer" @click="openModal = true; imgUrl = '{{ asset('images/pro5.png') }}'; imgTitle = 'Tampilan Fitur 1'">
                        <img src="{{ asset('images/pro5.png') }}" alt="Dokumentasi 1" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.onerror=null; this.src='https://placehold.co/400x300/1e293b/ffffff?text=Pengembangan+Aplikasi';">
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="bg-indigo-600 text-white text-xs px-3 py-1.5 rounded-lg shadow font-medium flex items-center gap-1">
                                🔍 Lihat Detail
                            </button>
                        </div>
                    </div>

                    <!-- Foto 2 -->
                    <div class="group relative bg-slate-950 rounded-xl overflow-hidden border border-slate-700/60 h-48 md:h-56 cursor-pointer" @click="openModal = true; imgUrl = '{{ asset('images/pro2.png') }}'; imgTitle = 'Tampilan Fitur 2'">
                        <img src="{{ asset('images/pro2.png') }}" alt="Dokumentasi 2" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.onerror=null; this.src='https://placehold.co/400x300/1e293b/ffffff?text=Setup+Kerja';">
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="bg-indigo-600 text-white text-xs px-3 py-1.5 rounded-lg shadow font-medium flex items-center gap-1">
                                🔍 Lihat Detail
                            </button>
                        </div>
                    </div>

                    <!-- Foto 3 -->
                    <div class="group relative bg-slate-950 rounded-xl overflow-hidden border border-slate-700/60 h-48 md:h-56 cursor-pointer" @click="openModal = true; imgUrl = '{{ asset('images/pro3.png') }}'; imgTitle = 'Tampilan Fitur 3'">
                        <img src="{{ asset('images/pro3.png') }}" alt="Dokumentasi 3" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.onerror=null; this.src='https://placehold.co/400x300/1e293b/ffffff?text=Pengerjaan+Sistem';">
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="bg-indigo-600 text-white text-xs px-3 py-1.5 rounded-lg shadow font-medium flex items-center gap-1">
                                🔍 Lihat Detail
                            </button>
                        </div>
                    </div>

                    <!-- Foto 4 -->
                    <div class="group relative bg-slate-950 rounded-xl overflow-hidden border border-slate-700/60 h-48 md:h-56 cursor-pointer" @click="openModal = true; imgUrl = '{{ asset('images/pro4.png') }}'; imgTitle = 'Tampilan Fitur 4'">
                        <img src="{{ asset('images/pro4.png') }}" alt="Dokumentasi 4" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.onerror=null; this.src='https://placehold.co/400x300/1e293b/ffffff?text=Kolaborasi+Tim';">
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="bg-indigo-600 text-white text-xs px-3 py-1.5 rounded-lg shadow font-medium flex items-center gap-1">
                                🔍 Lihat Detail
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 md:p-8 shadow-xl border border-white/40 mb-10">
            
            <!-- Header Kartu Projek -->
            <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4 mb-6 border-b border-slate-200 pb-4">
                <div>
                    <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-100 px-3 py-1 rounded-full">
                        Projek Web API
                    </span>
                    <h2 class="text-2xl md:text-3xl font-extrabold text-slate-900 mt-2">
                        Website Platform tontonan
                    </h2>
                </div>
                <!-- Tech Stack Badges -->
                <div class="flex flex-wrap gap-2">
                    <span class="bg-blue-100 text-blue-800 text-xs font-bold px-3 py-1 rounded-md">Laravel</span>
                    <span class="bg-amber-100 text-amber-800 text-xs font-bold px-3 py-1 rounded-md">Jikan API</span>
                    <span class="bg-cyan-100 text-cyan-800 text-xs font-bold px-3 py-1 rounded-md">MySQL</span>
                    <span class="bg-slate-200 text-slate-800 text-xs font-bold px-3 py-1 rounded-md">CSS Boostrap</span>
                    <span class="bg-blue-200 text-blue-600 text-xs font-bold px-3 py-1 rounded-md">PHP</span>
                </div>
            </div>

            <!-- Deskripsi Projek -->
            <div class="mb-8">
                <h3 class="text-lg font-bold text-slate-900 mb-2">Deskripsi Projek:</h3>
                <p class="text-slate-700 leading-relaxed font-medium text-base">
                    Perancangan website portal kerja menggunakan bahasa pemprogaman PHP dengan framework Laravel. MYSQL digunakan sebagai database dengan menggunakan Laragon. Pada bagian ini sistem klasifikasi & rekomendasi lebih diutamakan dengan menggunakan API JIKAN sebagai API data.
                </p>
            </div>

            <!-- Dokumentasi & Tampilan Fitur -->
            <div>
                <h3 class="text-lg font-bold text-slate-900 mb-4 flex items-center gap-2">
                    <span>Dokumentasi & Tampilan Fitur</span>
                </h3>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                
                    <!-- Foto 1 -->
                    <div class="group relative bg-slate-950 rounded-xl overflow-hidden border border-slate-700/60 h-48 md:h-56 cursor-pointer" @click="openModal = true; imgUrl = '{{ asset('images/proj1.png') }}'; imgTitle = 'Tampilan Fitur 1'">
                        <img src="{{ asset('images/proj1.png') }}" alt="Dokumentasi 1" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.onerror=null; this.src='https://placehold.co/400x300/1e293b/ffffff?text=Pengembangan+Aplikasi';">
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="bg-indigo-600 text-white text-xs px-3 py-1.5 rounded-lg shadow font-medium flex items-center gap-1">
                                🔍 Lihat Detail
                            </button>
                        </div>
                    </div>

                    <!-- Foto 2 -->
                    <div class="group relative bg-slate-950 rounded-xl overflow-hidden border border-slate-700/60 h-48 md:h-56 cursor-pointer" @click="openModal = true; imgUrl = '{{ asset('images/proj2.png') }}'; imgTitle = 'Tampilan Fitur 2'">
                        <img src="{{ asset('images/proj2.png') }}" alt="Dokumentasi 2" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.onerror=null; this.src='https://placehold.co/400x300/1e293b/ffffff?text=Setup+Kerja';">
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="bg-indigo-600 text-white text-xs px-3 py-1.5 rounded-lg shadow font-medium flex items-center gap-1">
                                🔍 Lihat Detail
                            </button>
                        </div>
                    </div>

                    <!-- Foto 3 -->
                    <div class="group relative bg-slate-950 rounded-xl overflow-hidden border border-slate-700/60 h-48 md:h-56 cursor-pointer" @click="openModal = true; imgUrl = '{{ asset('images/proj3.png') }}'; imgTitle = 'Tampilan Fitur 3'">
                        <img src="{{ asset('images/proj3.png') }}" alt="Dokumentasi 3" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.onerror=null; this.src='https://placehold.co/400x300/1e293b/ffffff?text=Pengerjaan+Sistem';">
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="bg-indigo-600 text-white text-xs px-3 py-1.5 rounded-lg shadow font-medium flex items-center gap-1">
                                🔍 Lihat Detail
                            </button>
                        </div>
                    </div>

                    <!-- Foto 4 -->
                    <div class="group relative bg-slate-950 rounded-xl overflow-hidden border border-slate-700/60 h-48 md:h-56 cursor-pointer" @click="openModal = true; imgUrl = '{{ asset('images/proj4.png') }}'; imgTitle = 'Tampilan Fitur 4'">
                        <img src="{{ asset('images/proj4.png') }}" alt="Dokumentasi 4" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.onerror=null; this.src='https://placehold.co/400x300/1e293b/ffffff?text=Kolaborasi+Tim';">
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                            <button class="bg-indigo-600 text-white text-xs px-3 py-1.5 rounded-lg shadow font-medium flex items-center gap-1">
                                🔍 Lihat Detail
                            </button>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- MODAL PREVIEW DETAIL GAMBAR -->
        <div 
            x-show="openModal" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            @keydown.escape.window="openModal = false"
            class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/80 backdrop-blur-md" 
            style="display: none;">
            
            <div class="relative bg-slate-900 border border-slate-700 rounded-2xl max-w-5xl w-full overflow-hidden shadow-2xl" @click.away="openModal = false">
                <!-- Modal Header -->
                <div class="flex items-center justify-between px-6 py-4 border-b border-slate-800 bg-slate-900/90">
                    <h3 class="text-base font-bold text-white flex items-center gap-2">
                        <span>🖼️ Detail Gambar Dokumentasi</span>
                    </h3>
                    <button @click="openModal = false" class="text-slate-400 hover:text-white p-1 rounded-lg hover:bg-slate-800 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>

                <!-- Modal Body (Gambar Resolusi Penuh) -->
                <div class="p-4 bg-slate-950 flex justify-center items-center max-h-[80vh] overflow-auto">
                    <img :src="imgUrl" class="max-w-full max-h-[75vh] w-auto h-auto object-contain rounded-lg shadow-lg">
                </div>

                <!-- Modal Footer -->
                <div class="px-6 py-3 bg-slate-900 border-t border-slate-800 flex justify-between items-center text-xs text-slate-400">
                    <span>Tekan tombol <b>ESC</b> atau klik di luar kotak untuk menutup.</span>
                    <button @click="openModal = false" class="bg-slate-800 hover:bg-slate-700 text-white font-semibold px-4 py-1.5 rounded-lg transition-colors">
                        Tutup
                    </button>
                </div>
            </div>
        </div>

    </main>

</body>
</html>