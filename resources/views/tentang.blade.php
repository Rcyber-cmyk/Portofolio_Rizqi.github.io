<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Saya - Portofolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gradient-to-br from-slate-900 via-blue-600 to-indigo-950 text-slate-100 min-h-screen font-sans antialiased" x-data="{ openModal: false, imgUrl: '' }">

    <!-- Memanggil Navbar Component -->
    @include('components.navbar')

    <!-- Main Content Container -->
    <main class="container mx-auto px-4 py-10 max-w-6xl">
        
        <!-- Header Judul -->
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-xs font-bold uppercase tracking-widest text-slate-200 bg-indigo-500/10 border border-indigo-500/20 px-4 py-1.5 rounded-full inline-block mb-3">
                Informasi & Profil
            </span>
            <h1 class="text-4xl md:text-5xl font-extrabold text-white tracking-tight">
                TENTANG SAYA
            </h1>
        </div>

        <!-- Section Utama: Grid 2 Kolom (Profil Ringkasan & Biodata Detail) -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
            
            <!-- Kolom Kiri: Deskripsi Profil Ringkas (2 Kolom di Desktop) -->
            <div class="lg:col-span-2 bg-slate-800/80 backdrop-blur-md rounded-2xl p-6 md:p-8 border border-slate-700/60 shadow-xl flex flex-col justify-between">
                <div>
                    <h2 class="text-2xl font-bold text-white mb-4 flex items-center gap-2">
                        <span class="text-indigo-400">👋</span> Ringkasan Profesional
                    </h2>
                    <p class="text-slate-300 leading-relaxed text-sm md:text-base font-normal mb-4">
                        Saya adalah <b>Backend Engineer & Data Analyst</b> lulusan Sarjana S1 Teknik Informatika Universitas AKI (UNAKI) Semarang. Saya berfokus pada pembangunan arsitektur sistem berbasis web yang efisien, terstruktur, dan terukur. 
                    </p>
                    <p class="text-slate-300 leading-relaxed text-sm md:text-base font-normal mb-6">
                        Berpengalaman dalam mengembangkan sistem backend <i>end-to-end</i> menggunakan <b>Laravel</b> dan <b>MySQL</b>, merancang skema ERD, serta mengimplementasikan algoritma Sistem Pendukung Keputusan (SPK) berbasis SAW (Simple Additive Weighting) untuk analisis data. Selain itu, saya memiliki fondasi yang kuat dalam <i>hardware troubleshooting</i>, jual-beli & perbaikan perangkat komputer, serta strategi analisis data berbasis SPSS & Python.
                    </p>

                    <!-- Tech Stack Badges Grid -->
                    <h3 class="text-sm font-bold uppercase tracking-wider text-indigo-400 mb-3">Keahlian Utama & Tools:</h3>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="bg-indigo-500/20 text-indigo-300 border border-indigo-500/30 text-xs font-semibold px-3 py-1.5 rounded-lg">PHP / Laravel</span>
                        <span class="bg-indigo-500/20 text-indigo-300 border border-indigo-500/30 text-xs font-semibold px-3 py-1.5 rounded-lg">MySQL & ERD Design</span>
                        <span class="bg-indigo-500/20 text-indigo-300 border border-indigo-500/30 text-xs font-semibold px-3 py-1.5 rounded-lg">Microsoft Office</span>
                        <span class="bg-indigo-500/20 text-indigo-300 border border-indigo-500/30 text-xs font-semibold px-3 py-1.5 rounded-lg">Python / NLP</span>
                        <span class="bg-indigo-500/20 text-indigo-300 border border-indigo-500/30 text-xs font-semibold px-3 py-1.5 rounded-lg">Git & GitHub</span>
                        <span class="bg-indigo-500/20 text-indigo-300 border border-indigo-500/30 text-xs font-semibold px-3 py-1.5 rounded-lg">Hardware Maintenance</span>
                        <span class="bg-indigo-500/20 text-indigo-300 border border-indigo-500/30 text-xs font-semibold px-3 py-1.5 rounded-lg">Figma UI/UX</span>
                    </div>
                </div>

                <!-- Quick Highlight Box -->
                <div class="grid grid-cols-3 gap-4 pt-6 border-t border-slate-700/60 text-center">
                    <div class="bg-slate-900/50 p-3 rounded-xl border border-slate-700/40">
                        <span class="block text-xl md:text-2xl font-bold text-indigo-400">S1</span>
                        <span class="text-[11px] text-slate-400 font-medium">Teknik Informatika</span>
                    </div>
                    <div class="bg-slate-900/50 p-3 rounded-xl border border-slate-700/40">
                        <span class="block text-xl md:text-2xl font-bold text-emerald-400">Teknik</span>
                        <span class="text-[11px] text-slate-400 font-medium">Komputer & Jaringan</span>
                    </div>
                    <div class="bg-slate-900/50 p-3 rounded-xl border border-slate-700/40">
                        <span class="block text-xl md:text-2xl font-bold text-amber-400">10+</span>
                        <span class="text-[11px] text-slate-400 font-medium">Sertifikasi & Lisensi</span>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan: Detail Biodata (1 Kolom di Desktop) -->
            <div class="bg-slate-800/80 backdrop-blur-md rounded-2xl p-6 md:p-8 border border-slate-700/60 shadow-xl flex flex-col justify-between">
                <div>
                    <h2 class="text-2xl font-bold text-white mb-6 flex items-center gap-2">
                        <span class="text-indigo-400">📌</span> Biodata Diri
                    </h2>

                    <ul class="space-y-4 text-sm">
                        <li class="border-b border-slate-700/50 pb-3">
                            <span class="text-xs text-slate-400 block font-medium uppercase tracking-wider">Nama Lengkap</span>
                            <span class="font-bold text-white text-base">Rizqi Aditia Maulana</span>
                        </li>
                        <li class="border-b border-slate-700/50 pb-3">
                            <span class="text-xs text-slate-400 block font-medium uppercase tracking-wider">Tanggal Lahir</span>
                            <span class="font-bold text-white text-base">12 Februari 2003</span>
                        </li>
                        <li class="border-b border-slate-700/50 pb-3">
                            <span class="text-xs text-slate-400 block font-medium uppercase tracking-wider">Domisili / Lokasi</span>
                            <span class="font-semibold text-slate-200">Demak, Jawa Tengah, Indonesia</span>
                        </li>
                        <li class="pb-1">
                            <span class="text-xs text-slate-400 block font-medium uppercase tracking-wider">Minat / Spesialisasi</span>
                            <span class="font-semibold text-slate-200">Backend System, Database Architecture, Full-Stack Developer, Data Analysis, Management Data, Teknisi, Bisnis</span>
                        </li>
                    </ul>
                </div>

                <div class="pt-6 border-t border-slate-700/60 mt-6">
                    <a href="mailto:rizqirizqi880@gmail.com" class="w-full bg-indigo-600 hover:bg-indigo-500 text-white font-bold py-2.5 px-4 rounded-xl text-center text-sm transition-all shadow-lg flex items-center justify-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 002-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        Hubungi Saya
                    </a>
                </div>
            </div>

        </div>

        <!-- Section 4 Foto Dokumentasi Kegiatan (Sesuai Gambar Referensi) -->
        <div class="bg-slate-800/80 backdrop-blur-md rounded-2xl p-6 md:p-8 border border-slate-700/60 shadow-xl">
            <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-2 border-b border-slate-700/60 pb-4">
                <div>
                    <h3 class="text-xl font-bold text-white flex items-center gap-2">
                        <span>📷 Dokumentasi Aktivitas</span>
                    </h3>
                </div>
                <span class="text-xs bg-indigo-500/10 text-indigo-300 border border-indigo-500/20 px-3 py-1 rounded-full font-medium">
                    4 Foto Dokumentasi
                </span>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                
                <!-- Foto 1 -->
                <div class="group relative bg-slate-950 rounded-xl overflow-hidden border border-slate-700/60 h-48 md:h-56">
                    <img src="{{ asset('images/dokumentasi_t1.jpeg') }}" alt="Dokumentasi 1" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.onerror=null; this.src='https://placehold.co/400x300/1e293b/ffffff?text=Pengembangan+Aplikasi';">
                    <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <button @click="openModal = true; imgUrl = '{{ asset('images/dokumentasi_t1.jpeg') }}'" class="bg-indigo-600 text-white text-xs px-3 py-1.5 rounded-lg shadow font-medium">Lihat Foto</button>
                    </div>
                </div>

                <!-- Foto 2 -->
                <div class="group relative bg-slate-950 rounded-xl overflow-hidden border border-slate-700/60 h-48 md:h-56">
                    <img src="{{ asset('images/dokumentasi_t2.jpeg') }}" alt="Dokumentasi 2" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.onerror=null; this.src='https://placehold.co/400x300/1e293b/ffffff?text=Setup+Kerja';">
                    <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <button @click="openModal = true; imgUrl = '{{ asset('images/dokumentasi_t2.jpeg') }}'" class="bg-indigo-600 text-white text-xs px-3 py-1.5 rounded-lg shadow font-medium">Lihat Foto</button>
                    </div>
                </div>

                <!-- Foto 3 -->
                <div class="group relative bg-slate-950 rounded-xl overflow-hidden border border-slate-700/60 h-48 md:h-56">
                    <img src="{{ asset('images/dokumentasi_t3.jpeg') }}" alt="Dokumentasi 3" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.onerror=null; this.src='https://placehold.co/400x300/1e293b/ffffff?text=Pengerjaan+Sistem';">
                    <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <button @click="openModal = true; imgUrl = '{{ asset('images/dokumentasi_t3.jpeg') }}'" class="bg-indigo-600 text-white text-xs px-3 py-1.5 rounded-lg shadow font-medium">Lihat Foto</button>
                    </div>
                </div>

                <!-- Foto 4 -->
                <div class="group relative bg-slate-950 rounded-xl overflow-hidden border border-slate-700/60 h-48 md:h-56">
                    <img src="{{ asset('images/dokumentasi_t4.jpeg') }}" alt="Dokumentasi 4" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.onerror=null; this.src='https://placehold.co/400x300/1e293b/ffffff?text=Kolaborasi+Tim';">
                    <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <button @click="openModal = true; imgUrl = '{{ asset('images/dokumentasi_t4.jpeg') }}'" class="bg-indigo-600 text-white text-xs px-3 py-1.5 rounded-lg shadow font-medium">Lihat Foto</button>
                    </div>
                </div>

            </div>
        </div>

        <!-- MODAL PREVIEW FOTO -->
        <div x-show="openModal" x-transition class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-950/80 backdrop-blur-md" style="display: none;">
            <div class="relative bg-slate-900 border border-slate-700 rounded-2xl max-w-3xl w-full overflow-hidden shadow-2xl p-2">
                <div class="flex justify-end p-2">
                    <button @click="openModal = false" class="text-slate-400 hover:text-white p-1 rounded-lg hover:bg-slate-800">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>
                <div class="p-2 flex justify-center max-h-[80vh] overflow-auto">
                    <img :src="imgUrl" class="max-w-full h-auto rounded-lg object-contain">
                </div>
            </div>
        </div>

    </main>

</body>
</html>