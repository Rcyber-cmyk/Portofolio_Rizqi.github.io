<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sertifikasi - Portofolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js untuk fitur Modal Preview Gambar -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gradient-to-br from-slate-900 via-yellow-500 to-indigo-950 text-slate-100 min-h-screen font-sans antialiased" x-data="{ openModal: false, imgUrl: '', imgTitle: '' }">

    <!-- Memanggil Navbar Component -->
    @include('components.navbar')

    <!-- Main Content Container -->
    <main class="container mx-auto px-4 py-12 max-w-7xl">
        
        <!-- Header Judul dengan Style Modern -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h1 class="text-4xl sm:text-5xl font-extrabold text-white tracking-tight">
                Sertifikasi & Prestasi
            </h1>
            <span class="text-xs font-bold uppercase tracking-widest text-indigo-400 bg-indigo-500/10 border border-indigo-500/20 px-4 py-1.5 rounded-full inline-block mb-3">
                Lisensi & Penghargaan
            </span>
        </div>

        <!-- Grid 3 Kolom Card Sertifikat -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <div class="group bg-slate-800/80 backdrop-blur-md rounded-2xl overflow-hidden border border-slate-700/60 shadow-xl hover:shadow-2xl hover:shadow-indigo-500/10 hover:border-indigo-500/50 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <!-- Container Gambar & Overlay Preview -->
                    <div class="relative overflow-hidden aspect-[4/3] bg-slate-950">
                        <img 
                            src="{{ asset('images/sertif4.jpg') }}" 
                            alt="Sertifikasi Indosat" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            onerror="this.onerror=null; this.src='https://placehold.co/600x450/1e293b/ffffff?text=Cisco+CCNA+Routing';"
                        >
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-2">
                            <button 
                                @click="openModal = true; imgUrl = '{{ asset('images/sertif4.jpg') }}'; imgTitle = 'Sertifikasi Indosat Ooredoo'" 
                                class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium text-xs px-4 py-2 rounded-lg shadow-lg transition-transform transform hover:scale-105 flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                Lihat Pratinjau
                            </button>
                        </div>
                    </div>

                    <!-- Konten Kartu -->
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-blue-400 bg-emerald-500/10 border border-emerald-500/20 px-2.5 py-1 rounded-md">
                                Company Visit
                            </span>
                            <span class="text-xs text-slate-400 font-semibold">2026</span>
                        </div>
                        <h2 class="text-lg font-bold text-white group-hover:text-indigo-400 transition-colors duration-200">
                            Indosat Ooredoo Hutchison Circle Java
                        </h2>
                    </div>
                </div>

                <!-- Footer Card -->
                <div class="px-6 pb-6 pt-2 border-t border-slate-700/40 flex items-center justify-between text-xs text-slate-400">
                    <span class="flex items-center gap-1">
                        <svg class="w-4 h-4 text-blue-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        Seminar
                    </span>
                    <span class="text-slate-400 font-mono">Indosat Ooredoo</span>
                </div>
            </div>

            <div class="group bg-slate-800/80 backdrop-blur-md rounded-2xl overflow-hidden border border-slate-700/60 shadow-xl hover:shadow-2xl hover:shadow-indigo-500/10 hover:border-indigo-500/50 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <!-- Container Gambar & Overlay Preview -->
                    <div class="relative overflow-hidden aspect-[4/3] bg-slate-950">
                        <img 
                            src="{{ asset('images/FMD.jpg') }}" 
                            alt="Sertifikasi" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            onerror="this.onerror=null; this.src='https://placehold.co/600x450/1e293b/ffffff?text=Cisco+CCNA+Routing';"
                        >
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-2">
                            <button 
                                @click="openModal = true; imgUrl = '{{ asset('images/FMD.jpg') }}'; imgTitle = 'Sertifikasi Magang IT'" 
                                class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium text-xs px-4 py-2 rounded-lg shadow-lg transition-transform transform hover:scale-105 flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                Lihat Pratinjau
                            </button>
                        </div>
                    </div>

                    <!-- Konten Kartu -->
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-slate-200 bg-emerald-500/10 border border-emerald-500/20 px-2.5 py-1 rounded-md">
                                Sertifikasi Magang
                            </span>
                            <span class="text-xs text-slate-400 font-semibold">2025</span>
                        </div>
                        <h2 class="text-lg font-bold text-white group-hover:text-indigo-400 transition-colors duration-200">
                            Praktek Kerja Universitas AKI Teknik Informatika
                        </h2>
                    </div>
                </div>

                <!-- Footer Card -->
                <div class="px-6 pb-6 pt-2 border-t border-slate-700/40 flex items-center justify-between text-xs text-slate-400">
                    <span class="flex items-center gap-1">
                        <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        Magang
                    </span>
                    <span class="text-slate-400 font-mono">CV Format Masa Depan</span>
                </div>
            </div>

            <div class="group bg-slate-800/80 backdrop-blur-md rounded-2xl overflow-hidden border border-slate-700/60 shadow-xl hover:shadow-2xl hover:shadow-indigo-500/10 hover:border-indigo-500/50 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <!-- Container Gambar & Overlay Preview -->
                    <div class="relative overflow-hidden aspect-[4/3] bg-slate-950">
                        <img 
                            src="{{ asset('images/sertif1.jpg') }}" 
                            alt="Cisco CCNAv7: Introduction to Networks" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            onerror="this.onerror=null; this.src='https://placehold.co/600x450/1e293b/ffffff?text=Cisco+CCNAv7+Networks';"
                        >
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-2">
                            <button 
                                @click="openModal = true; imgUrl = '{{ asset('images/sertif1.jpg') }}'; imgTitle = 'Cisco CCNAv7: Introduction to Networks'" 
                                class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium text-xs px-4 py-2 rounded-lg shadow-lg transition-transform transform hover:scale-105 flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                Liha Pratinjau
                            </button>
                        </div>
                    </div>

                    <!-- Konten Kartu -->
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-emerald-400 bg-emerald-500/10 border border-emerald-500/20 px-2.5 py-1 rounded-md">
                                Cisco Networking Academy
                            </span>
                            <span class="text-xs text-slate-400 font-semibold">2024</span>
                        </div>
                        <h2 class="text-lg font-bold text-white group-hover:text-indigo-400 transition-colors duration-200">
                            CCNAv7: Introduction to Networks
                        </h2>
                    </div>
                </div>

                <!-- Footer Card -->
                <div class="px-6 pb-6 pt-2 border-t border-slate-700/40 flex items-center justify-between text-xs text-slate-400">
                    <span class="flex items-center gap-1">
                        <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        Terverifikasi
                    </span>
                    <span class="text-slate-400 font-mono">CCNA-NET-2024</span>
                </div>
            </div>

            <div class="group bg-slate-800/80 backdrop-blur-md rounded-2xl overflow-hidden border border-slate-700/60 shadow-xl hover:shadow-2xl hover:shadow-indigo-500/10 hover:border-indigo-500/50 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <!-- Container Gambar & Overlay Preview -->
                    <div class="relative overflow-hidden aspect-[4/3] bg-slate-950">
                        <img 
                            src="{{ asset('images/sertif2.jpg') }}" 
                            alt="Cisco CCNA: Switching, Routing, and Wireless Essentials" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            onerror="this.onerror=null; this.src='https://placehold.co/600x450/1e293b/ffffff?text=Cisco+CCNA+Routing';"
                        >
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-2">
                            <button 
                                @click="openModal = true; imgUrl = '{{ asset('images/sertif2.jpg') }}'; imgTitle = 'Cisco CCNA: Switching, Routing, and Wireless Essentials'" 
                                class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium text-xs px-4 py-2 rounded-lg shadow-lg transition-transform transform hover:scale-105 flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                Lihat Pratinjau
                            </button>
                        </div>
                    </div>

                    <!-- Konten Kartu -->
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-emerald-400 bg-emerald-500/10 border border-emerald-500/20 px-2.5 py-1 rounded-md">
                                Cisco Networking Academy
                            </span>
                            <span class="text-xs text-slate-400 font-semibold">2024</span>
                        </div>
                        <h2 class="text-lg font-bold text-white group-hover:text-indigo-400 transition-colors duration-200">
                            CCNA: Switching, Routing, & Wireless
                        </h2>
                    </div>
                </div>

                <!-- Footer Card -->
                <div class="px-6 pb-6 pt-2 border-t border-slate-700/40 flex items-center justify-between text-xs text-slate-400">
                    <span class="flex items-center gap-1">
                        <svg class="w-4 h-4 text-emerald-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        Terverifikasi
                    </span>
                    <span class="text-slate-400 font-mono">CCNA-ROUT-2024</span>
                </div>
            </div>

            <div class="group bg-slate-800/80 backdrop-blur-md rounded-2xl overflow-hidden border border-slate-700/60 shadow-xl hover:shadow-2xl hover:shadow-indigo-500/10 hover:border-indigo-500/50 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <!-- Container Gambar & Overlay Preview -->
                    <div class="relative overflow-hidden aspect-[4/3] bg-slate-950">
                        <img 
                            src="{{ asset('images/sertif5.jpg') }}" 
                            alt="Sertfikasi Alumni Sharing" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            onerror="this.onerror=null; this.src='https://placehold.co/600x450/1e293b/ffffff?text=Cisco+CCNA+Routing';"
                        >
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-2">
                            <button 
                                @click="openModal = true; imgUrl = '{{ asset('images/sertif5.jpg') }}'; imgTitle = 'Sertifikasi Alumni Sharing'" 
                                class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium text-xs px-4 py-2 rounded-lg shadow-lg transition-transform transform hover:scale-105 flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                Lihat Pratinjau
                            </button>
                        </div>
                    </div>

                    <!-- Konten Kartu -->
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-blue-400 bg-emerald-500/10 border border-emerald-500/20 px-2.5 py-1 rounded-md">
                                Alumni Sharing
                            </span>
                            <span class="text-xs text-slate-400 font-semibold">2024</span>
                        </div>
                        <h2 class="text-lg font-bold text-white group-hover:text-indigo-400 transition-colors duration-200">
                            Strategi Dalam Perang Dunia Kerja Vs AI
                        </h2>
                    </div>
                </div>

                <!-- Footer Card -->
                <div class="px-6 pb-6 pt-2 border-t border-slate-700/40 flex items-center justify-between text-xs text-slate-400">
                    <span class="flex items-center gap-1">
                        <svg class="w-4 h-4 text-blue-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        Seminar
                    </span>
                    <span class="text-slate-400 font-mono">Universitas AKI</span>
                </div>
            </div>

            <div class="group bg-slate-800/80 backdrop-blur-md rounded-2xl overflow-hidden border border-slate-700/60 shadow-xl hover:shadow-2xl hover:shadow-indigo-500/10 hover:border-indigo-500/50 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <!-- Container Gambar & Overlay Preview -->
                    <div class="relative overflow-hidden aspect-[4/3] bg-slate-950">
                        <img 
                            src="{{ asset('images/sertif10.jpg') }}" 
                            alt="Sertifikasi Kelas Digital Marketing" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            onerror="this.onerror=null; this.src='https://placehold.co/600x450/1e293b/ffffff?text=Cisco+CCNA+Routing';"
                        >
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-2">
                            <button 
                                @click="openModal = true; imgUrl = '{{ asset('images/sertif10.jpg') }}'; imgTitle = 'Sertifikasi Kelas Digital Marketing'" 
                                class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium text-xs px-4 py-2 rounded-lg shadow-lg transition-transform transform hover:scale-105 flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                Lihat Pratinjau
                            </button>
                        </div>
                    </div>

                    <!-- Konten Kartu -->
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-red-600 bg-emerald-500/10 border border-emerald-500/20 px-2.5 py-1 rounded-md">
                                Digital Marketing
                            </span>
                            <span class="text-xs text-slate-400 font-semibold">2024</span>
                        </div>
                        <h2 class="text-lg font-bold text-white group-hover:text-indigo-400 transition-colors duration-200">
                            kelas Digital Marketing
                        </h2>
                    </div>
                </div>

                <!-- Footer Card -->
                <div class="px-6 pb-6 pt-2 border-t border-slate-700/40 flex items-center justify-between text-xs text-slate-400">
                    <span class="flex items-center gap-1">
                        <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        Pelatihan
                    </span>
                    <span class="text-slate-400 font-mono">Muslim Creator Class</span>
                </div>
            </div>

            <div class="group bg-slate-800/80 backdrop-blur-md rounded-2xl overflow-hidden border border-slate-700/60 shadow-xl hover:shadow-2xl hover:shadow-amber-500/10 hover:border-amber-500/50 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <!-- Container Gambar & Overlay Preview -->
                    <div class="relative overflow-hidden aspect-[4/3] bg-slate-950">
                        <img 
                            src="{{ asset('images/sertif3.jpg') }}" 
                            alt="Piagam Medali Emas POSN Informatika" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            onerror="this.onerror=null; this.src='https://placehold.co/600x450/1e293b/ffffff?text=Medali+Emas+POSN';"
                        >
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-2">
                            <button 
                                @click="openModal = true; imgUrl = '{{ asset('images/sertif3.jpg') }}'; imgTitle = 'Peraih Medali Emas POSN Informatika 2024'" 
                                class="bg-amber-600 hover:bg-amber-500 text-white font-medium text-xs px-4 py-2 rounded-lg shadow-lg transition-transform transform hover:scale-105 flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                Lihat Pratinjau
                            </button>
                        </div>
                    </div>

                    <!-- Konten Kartu -->
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-amber-400 bg-amber-500/10 border border-amber-500/20 px-2.5 py-1 rounded-md flex items-center gap-1">
                                🏆 Medali Emas
                            </span>
                            <span class="text-xs text-slate-400 font-semibold">2022</span>
                        </div>
                        <h2 class="text-lg font-bold text-white group-hover:text-amber-400 transition-colors duration-200">
                            Pekan Olimpiade Sains Nasional (POSN)
                        </h2>
                    </div>
                </div>

                <!-- Footer Card -->
                <div class="px-6 pb-6 pt-2 border-t border-slate-700/40 flex items-center justify-between text-xs text-slate-400">
                    <span class="flex items-center gap-1 text-amber-400 font-medium">
                        ★ Peringkat Nasional
                    </span>
                    <span class="text-slate-400 font-mono">YAPRESINDO</span>
                </div>
            </div>

            <div class="group bg-slate-800/80 backdrop-blur-md rounded-2xl overflow-hidden border border-slate-700/60 shadow-xl hover:shadow-2xl hover:shadow-indigo-500/10 hover:border-indigo-500/50 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <!-- Container Gambar & Overlay Preview -->
                    <div class="relative overflow-hidden aspect-[4/3] bg-slate-950">
                        <img 
                            src="{{ asset('images/sertif11.jpeg') }}" 
                            alt="Sertifikasi Kompetensi" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            onerror="this.onerror=null; this.src='https://placehold.co/600x450/1e293b/ffffff?text=Cisco+CCNA+Routing';"
                        >
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-2">
                            <button 
                                @click="openModal = true; imgUrl = '{{ asset('images/sertif11.jpeg') }}'; imgTitle = 'Sertifikasi Kompetensi'" 
                                class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium text-xs px-4 py-2 rounded-lg shadow-lg transition-transform transform hover:scale-105 flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                Lihat Pratinjau
                            </button>
                        </div>
                    </div>

                    <!-- Konten Kartu -->
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-red-600 bg-emerald-500/10 border border-emerald-500/20 px-2.5 py-1 rounded-md">
                                Sertifikasi Kompetensi Profesi
                            </span>
                            <span class="text-xs text-slate-400 font-semibold">2022</span>
                        </div>
                        <h2 class="text-lg font-bold text-white group-hover:text-indigo-400 transition-colors duration-200">
                            Keahlian Teknik Komputer & Jaringan
                        </h2>
                    </div>
                </div>

                <!-- Footer Card -->
                <div class="px-6 pb-6 pt-2 border-t border-slate-700/40 flex items-center justify-between text-xs text-slate-400">
                    <span class="flex items-center gap-1">
                        <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        Pelatihan
                    </span>
                    <span class="text-slate-400 font-mono">BNSP</span>
                </div>
            </div>

            <div class="group bg-slate-800/80 backdrop-blur-md rounded-2xl overflow-hidden border border-slate-700/60 shadow-xl hover:shadow-2xl hover:shadow-indigo-500/10 hover:border-indigo-500/50 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <!-- Container Gambar & Overlay Preview -->
                    <div class="relative overflow-hidden aspect-[4/3] bg-slate-950">
                        <img 
                            src="{{ asset('images/sertif6.jpeg') }}" 
                            alt="Sertifikasi Semarang Young Intrepreneur Festival" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            onerror="this.onerror=null; this.src='https://placehold.co/600x450/1e293b/ffffff?text=Cisco+CCNA+Routing';"
                        >
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-2">
                            <button 
                                @click="openModal = true; imgUrl = '{{ asset('images/sertif6.jpeg') }}'; imgTitle = 'Sertifikasi Semarang Young Intrepreneur Festival'" 
                                class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium text-xs px-4 py-2 rounded-lg shadow-lg transition-transform transform hover:scale-105 flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                Lihat Pratinjau
                            </button>
                        </div>
                    </div>

                    <!-- Konten Kartu -->
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-blue-400 bg-emerald-500/10 border border-emerald-500/20 px-2.5 py-1 rounded-md">
                                Semarang Young Intrepreneur Festival
                            </span>
                            <span class="text-xs text-slate-400 font-semibold">2022</span>
                        </div>
                        <h2 class="text-lg font-bold text-white group-hover:text-indigo-400 transition-colors duration-200">
                            Pelatihan Softskill Leadership
                        </h2>
                    </div>
                </div>

                <!-- Footer Card -->
                <div class="px-6 pb-6 pt-2 border-t border-slate-700/40 flex items-center justify-between text-xs text-slate-400">
                    <span class="flex items-center gap-1">
                        <svg class="w-4 h-4 text-blue-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        Seminar Nasional
                    </span>
                    <span class="text-slate-400 font-mono">Semarang Young Intrepreneur Festival</span>
                </div>
            </div>

            <div class="group bg-slate-800/80 backdrop-blur-md rounded-2xl overflow-hidden border border-slate-700/60 shadow-xl hover:shadow-2xl hover:shadow-indigo-500/10 hover:border-indigo-500/50 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <!-- Container Gambar & Overlay Preview -->
                    <div class="relative overflow-hidden aspect-[4/3] bg-slate-950">
                        <img 
                            src="{{ asset('images/sertif7.jpeg') }}" 
                            alt="Sertifikasi Semarang Young Intrepreneur Festival" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            onerror="this.onerror=null; this.src='https://placehold.co/600x450/1e293b/ffffff?text=Cisco+CCNA+Routing';"
                        >
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-2">
                            <button 
                                @click="openModal = true; imgUrl = '{{ asset('images/sertif7.jpeg') }}'; imgTitle = 'Sertifikasi Semarang Young Intrepreneur Festival'" 
                                class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium text-xs px-4 py-2 rounded-lg shadow-lg transition-transform transform hover:scale-105 flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                Lihat Pratinjau
                            </button>
                        </div>
                    </div>

                    <!-- Konten Kartu -->
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-blue-400 bg-emerald-500/10 border border-emerald-500/20 px-2.5 py-1 rounded-md">
                                Semarang Young Intrepreneur Festival
                            </span>
                            <span class="text-xs text-slate-400 font-semibold">2022</span>
                        </div>
                        <h2 class="text-lg font-bold text-white group-hover:text-indigo-400 transition-colors duration-200">
                            Pelatihan Softskill Intrepreneurship
                        </h2>
                    </div>
                </div>

                <!-- Footer Card -->
                <div class="px-6 pb-6 pt-2 border-t border-slate-700/40 flex items-center justify-between text-xs text-slate-400">
                    <span class="flex items-center gap-1">
                        <svg class="w-4 h-4 text-blue-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        Seminar Nasional
                    </span>
                    <span class="text-slate-400 font-mono">Semarang Young Intrepreneur Festival</span>
                </div>
            </div>

            <div class="group bg-slate-800/80 backdrop-blur-md rounded-2xl overflow-hidden border border-slate-700/60 shadow-xl hover:shadow-2xl hover:shadow-indigo-500/10 hover:border-indigo-500/50 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <!-- Container Gambar & Overlay Preview -->
                    <div class="relative overflow-hidden aspect-[4/3] bg-slate-950">
                        <img 
                            src="{{ asset('images/sertif8.jpeg') }}" 
                            alt="Sertifikasi Semarang Young Intrepreneur Festival" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            onerror="this.onerror=null; this.src='https://placehold.co/600x450/1e293b/ffffff?text=Cisco+CCNA+Routing';"
                        >
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-2">
                            <button 
                                @click="openModal = true; imgUrl = '{{ asset('images/sertif8.jpeg') }}'; imgTitle = 'Sertifikasi Semarang Young Intrepreneur Festival'" 
                                class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium text-xs px-4 py-2 rounded-lg shadow-lg transition-transform transform hover:scale-105 flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                Lihat Pratinjau
                            </button>
                        </div>
                    </div>

                    <!-- Konten Kartu -->
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-blue-400 bg-emerald-500/10 border border-emerald-500/20 px-2.5 py-1 rounded-md">
                                Semarang Young Intrepreneur Festival
                            </span>
                            <span class="text-xs text-slate-400 font-semibold">2022</span>
                        </div>
                        <h2 class="text-lg font-bold text-white group-hover:text-indigo-400 transition-colors duration-200">
                            Pelatihan Softskill Public Speaking
                        </h2>
                    </div>
                </div>

                <!-- Footer Card -->
                <div class="px-6 pb-6 pt-2 border-t border-slate-700/40 flex items-center justify-between text-xs text-slate-400">
                    <span class="flex items-center gap-1">
                        <svg class="w-4 h-4 text-blue-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        Seminar Nasional
                    </span>
                    <span class="text-slate-400 font-mono">Semarang Young Intrepreneur Festival</span>
                </div>
            </div>

            <div class="group bg-slate-800/80 backdrop-blur-md rounded-2xl overflow-hidden border border-slate-700/60 shadow-xl hover:shadow-2xl hover:shadow-indigo-500/10 hover:border-indigo-500/50 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <!-- Container Gambar & Overlay Preview -->
                    <div class="relative overflow-hidden aspect-[4/3] bg-slate-950">
                        <img 
                            src="{{ asset('images/sertif9.jpeg') }}" 
                            alt="Sertifikasi Semarang Young Intrepreneur Festival" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            onerror="this.onerror=null; this.src='https://placehold.co/600x450/1e293b/ffffff?text=Cisco+CCNA+Routing';"
                        >
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-2">
                            <button 
                                @click="openModal = true; imgUrl = '{{ asset('images/sertif9.jpeg') }}'; imgTitle = 'Sertifikasi Semarang Young Intrepreneur Festival'" 
                                class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium text-xs px-4 py-2 rounded-lg shadow-lg transition-transform transform hover:scale-105 flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                Lihat Pratinjau
                            </button>
                        </div>
                    </div>

                    <!-- Konten Kartu -->
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-blue-400 bg-emerald-500/10 border border-emerald-500/20 px-2.5 py-1 rounded-md">
                                Semarang Young Intrepreneur Festival
                            </span>
                            <span class="text-xs text-slate-400 font-semibold">2022</span>
                        </div>
                        <h2 class="text-lg font-bold text-white group-hover:text-indigo-400 transition-colors duration-200">
                            Milenials Entrepreneur Summit Singapore & malaysia
                        </h2>
                    </div>
                </div>

                <!-- Footer Card -->
                <div class="px-6 pb-6 pt-2 border-t border-slate-700/40 flex items-center justify-between text-xs text-slate-400">
                    <span class="flex items-center gap-1">
                        <svg class="w-4 h-4 text-blue-400" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        Seminar Internasional
                    </span>
                    <span class="text-slate-400 font-mono">Semarang Young Intrepreneur Festival</span>
                </div>
            </div>

            <div class="group bg-slate-800/80 backdrop-blur-md rounded-2xl overflow-hidden border border-slate-700/60 shadow-xl hover:shadow-2xl hover:shadow-indigo-500/10 hover:border-indigo-500/50 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <!-- Container Gambar & Overlay Preview -->
                    <div class="relative overflow-hidden aspect-[4/3] bg-slate-950">
                        <img 
                            src="{{ asset('images/sertif17.jpg') }}" 
                            alt="Sertifikasi UNAKI INSIGHT" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            onerror="this.onerror=null; this.src='https://placehold.co/600x450/1e293b/ffffff?text=Cisco+CCNA+Routing';"
                        >
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-2">
                            <button 
                                @click="openModal = true; imgUrl = '{{ asset('images/sertif17.jpg') }}'; imgTitle = 'Sertifikasi UNAKI INSIGHT'" 
                                class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium text-xs px-4 py-2 rounded-lg shadow-lg transition-transform transform hover:scale-105 flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                Lihat Pratinjau
                            </button>
                        </div>
                    </div>

                    <!-- Konten Kartu -->
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-red-600 bg-emerald-500/10 border border-emerald-500/20 px-2.5 py-1 rounded-md">
                                UNAKI INSIGHT
                            </span>
                            <span class="text-xs text-slate-400 font-semibold">2022</span>
                        </div>
                        <h2 class="text-lg font-bold text-white group-hover:text-indigo-400 transition-colors duration-200">
                            Pelatihan Mahasiswa Baru
                        </h2>
                    </div>
                </div>

                <!-- Footer Card -->
                <div class="px-6 pb-6 pt-2 border-t border-slate-700/40 flex items-center justify-between text-xs text-slate-400">
                    <span class="flex items-center gap-1">
                        <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        Pelatihan
                    </span>
                    <span class="text-slate-400 font-mono">UNAKI</span>
                </div>
            </div>

            <div class="group bg-slate-800/80 backdrop-blur-md rounded-2xl overflow-hidden border border-slate-700/60 shadow-xl hover:shadow-2xl hover:shadow-indigo-500/10 hover:border-indigo-500/50 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <!-- Container Gambar & Overlay Preview -->
                    <div class="relative overflow-hidden aspect-[4/3] bg-slate-950">
                        <img 
                            src="{{ asset('images/az2.jpg') }}" 
                            alt="Sertifikasi" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            onerror="this.onerror=null; this.src='https://placehold.co/600x450/1e293b/ffffff?text=Cisco+CCNA+Routing';"
                        >
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-2">
                            <button 
                                @click="openModal = true; imgUrl = '{{ asset('images/az1.jpg') }}'; imgTitle = 'Sertifikasi Magang TKJ'" 
                                class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium text-xs px-4 py-2 rounded-lg shadow-lg transition-transform transform hover:scale-105 flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                Lihat Pratinjau
                            </button>
                        </div>
                    </div>

                    <!-- Konten Kartu -->
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-slate-200 bg-emerald-500/10 border border-emerald-500/20 px-2.5 py-1 rounded-md">
                                Sertifikasi Magang
                            </span>
                            <span class="text-xs text-slate-400 font-semibold">2021</span>
                        </div>
                        <h2 class="text-lg font-bold text-white group-hover:text-indigo-400 transition-colors duration-200">
                            Praktek Kerja SMKN & Semarang Teknik Komputer & Jaringan
                        </h2>
                    </div>
                </div>

                <!-- Footer Card -->
                <div class="px-6 pb-6 pt-2 border-t border-slate-700/40 flex items-center justify-between text-xs text-slate-400">
                    <span class="flex items-center gap-1">
                        <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        Magang
                    </span>
                    <span class="text-slate-400 font-mono">Azma Komputer</span>
                </div>
            </div>

            <div class="group bg-slate-800/80 backdrop-blur-md rounded-2xl overflow-hidden border border-slate-700/60 shadow-xl hover:shadow-2xl hover:shadow-indigo-500/10 hover:border-indigo-500/50 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <!-- Container Gambar & Overlay Preview -->
                    <div class="relative overflow-hidden aspect-[4/3] bg-slate-950">
                        <img 
                            src="{{ asset('images/az1.jpg') }}" 
                            alt="Sertifikasi" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            onerror="this.onerror=null; this.src='https://placehold.co/600x450/1e293b/ffffff?text=Cisco+CCNA+Routing';"
                        >
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-2">
                            <button 
                                @click="openModal = true; imgUrl = '{{ asset('images/az1.jpg') }}'; imgTitle = 'Sertifikasi Magang TKJ'" 
                                class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium text-xs px-4 py-2 rounded-lg shadow-lg transition-transform transform hover:scale-105 flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                Lihat Pratinjau
                            </button>
                        </div>
                    </div>

                    <!-- Konten Kartu -->
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-slate-200 bg-emerald-500/10 border border-emerald-500/20 px-2.5 py-1 rounded-md">
                                Sertifikasi Magang
                            </span>
                            <span class="text-xs text-slate-400 font-semibold">2021</span>
                        </div>
                        <h2 class="text-lg font-bold text-white group-hover:text-indigo-400 transition-colors duration-200">
                            Praktek Kerja SMKN & Semarang Teknik Komputer & Jaringan
                        </h2>
                    </div>
                </div>

                <!-- Footer Card -->
                <div class="px-6 pb-6 pt-2 border-t border-slate-700/40 flex items-center justify-between text-xs text-slate-400">
                    <span class="flex items-center gap-1">
                        <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        Magang
                    </span>
                    <span class="text-slate-400 font-mono">Azma Komputer</span>
                </div>
            </div>

            <div class="group bg-slate-800/80 backdrop-blur-md rounded-2xl overflow-hidden border border-slate-700/60 shadow-xl hover:shadow-2xl hover:shadow-indigo-500/10 hover:border-indigo-500/50 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <!-- Container Gambar & Overlay Preview -->
                    <div class="relative overflow-hidden aspect-[4/3] bg-slate-950">
                        <img 
                            src="{{ asset('images/sertif12.jpeg') }}" 
                            alt="Pramuka Penggalang" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            onerror="this.onerror=null; this.src='https://placehold.co/600x450/1e293b/ffffff?text=Cisco+CCNA+Routing';"
                        >
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-2">
                            <button 
                                @click="openModal = true; imgUrl = '{{ asset('images/sertif12.jpeg') }}'; imgTitle = 'Piagam Pramuka Kenaikan Tingkat Penggalang'" 
                                class="bg-indigo-600 hover:bg-indigo-500 text-white font-medium text-xs px-4 py-2 rounded-lg shadow-lg transition-transform transform hover:scale-105 flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                Lihat Pratinjau
                            </button>
                        </div>
                    </div>

                    <!-- Konten Kartu -->
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-red-600 bg-emerald-500/10 border border-emerald-500/20 px-2.5 py-1 rounded-md">
                                Kenaikan Tingkat
                            </span>
                            <span class="text-xs text-slate-400 font-semibold">2016</span>
                        </div>
                        <h2 class="text-lg font-bold text-white group-hover:text-indigo-400 transition-colors duration-200">
                            Pelatihan Pramuka Penggalang
                        </h2>
                    </div>
                </div>

                <!-- Footer Card -->
                <div class="px-6 pb-6 pt-2 border-t border-slate-700/40 flex items-center justify-between text-xs text-slate-400">
                    <span class="flex items-center gap-1">
                        <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>
                        Pelatihan
                    </span>
                    <span class="text-slate-400 font-mono">Pramuka SPENDA Mranggen</span>
                </div>
            </div>

            <div class="group bg-slate-800/80 backdrop-blur-md rounded-2xl overflow-hidden border border-slate-700/60 shadow-xl hover:shadow-2xl hover:shadow-amber-500/10 hover:border-amber-500/50 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <!-- Container Gambar & Overlay Preview -->
                    <div class="relative overflow-hidden aspect-[4/3] bg-slate-950">
                        <img 
                            src="{{ asset('images/sertif13.jpeg') }}" 
                            alt="Piagam Popda Sekolah Dasar" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            onerror="this.onerror=null; this.src='https://placehold.co/600x450/1e293b/ffffff?text=Medali+Emas+POSN';"
                        >
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-2">
                            <button 
                                @click="openModal = true; imgUrl = '{{ asset('images/sertif13.jpeg') }}'; imgTitle = 'Juara 2 Sepak Bola'" 
                                class="bg-amber-600 hover:bg-amber-500 text-white font-medium text-xs px-4 py-2 rounded-lg shadow-lg transition-transform transform hover:scale-105 flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                Lihat Pratinjau
                            </button>
                        </div>
                    </div>

                    <!-- Konten Kartu -->
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-amber-400 bg-amber-500/10 border border-amber-500/20 px-2.5 py-1 rounded-md flex items-center gap-1">
                                🏆 Juara 2
                            </span>
                            <span class="text-xs text-slate-400 font-semibold">2015</span>
                        </div>
                        <h2 class="text-lg font-bold text-white group-hover:text-amber-400 transition-colors duration-200">
                            Lomba Sepak Bola
                        </h2>
                    </div>
                </div>

                <!-- Footer Card -->
                <div class="px-6 pb-6 pt-2 border-t border-slate-700/40 flex items-center justify-between text-xs text-slate-400">
                    <span class="flex items-center gap-1 text-amber-400 font-medium">
                        ★ Peringkat Kecamatan
                    </span>
                    <span class="text-slate-400 font-mono">POPDA</span>
                </div>
            </div>

            <div class="group bg-slate-800/80 backdrop-blur-md rounded-2xl overflow-hidden border border-slate-700/60 shadow-xl hover:shadow-2xl hover:shadow-amber-500/10 hover:border-amber-500/50 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <!-- Container Gambar & Overlay Preview -->
                    <div class="relative overflow-hidden aspect-[4/3] bg-slate-950">
                        <img 
                            src="{{ asset('images/sertif15.jpeg') }}" 
                            alt="Piagam Jambore Ranting" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            onerror="this.onerror=null; this.src='https://placehold.co/600x450/1e293b/ffffff?text=Medali+Emas+POSN';"
                        >
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-2">
                            <button 
                                @click="openModal = true; imgUrl = '{{ asset('images/sertif15.jpeg') }}'; imgTitle = 'Jambore Ranting'" 
                                class="bg-amber-600 hover:bg-amber-500 text-white font-medium text-xs px-4 py-2 rounded-lg shadow-lg transition-transform transform hover:scale-105 flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                Lihat Pratinjau
                            </button>
                        </div>
                    </div>

                    <!-- Konten Kartu -->
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-amber-400 bg-amber-500/10 border border-amber-500/20 px-2.5 py-1 rounded-md flex items-center gap-1">
                                Peserta
                            </span>
                            <span class="text-xs text-slate-400 font-semibold">2015</span>
                        </div>
                        <h2 class="text-lg font-bold text-white group-hover:text-amber-400 transition-colors duration-200">
                            Jambore Ranting
                        </h2>
                    </div>
                </div>

                <!-- Footer Card -->
                <div class="px-6 pb-6 pt-2 border-t border-slate-700/40 flex items-center justify-between text-xs text-slate-400">
                    <span class="flex items-center gap-1 text-amber-400 font-medium">
                        ★ Peringkat Kecamatan
                    </span>
                    <span class="text-slate-400 font-mono">Dinas Pendidikan</span>
                </div>
            </div>

            <div class="group bg-slate-800/80 backdrop-blur-md rounded-2xl overflow-hidden border border-slate-700/60 shadow-xl hover:shadow-2xl hover:shadow-amber-500/10 hover:border-amber-500/50 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <!-- Container Gambar & Overlay Preview -->
                    <div class="relative overflow-hidden aspect-[4/3] bg-slate-950">
                        <img 
                            src="{{ asset('images/sertif14.jpeg') }}" 
                            alt="Piagam Lomba Cerita Rakyat" 
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            onerror="this.onerror=null; this.src='https://placehold.co/600x450/1e293b/ffffff?text=Medali+Emas+POSN';"
                        >
                        <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center gap-2">
                            <button 
                                @click="openModal = true; imgUrl = '{{ asset('images/sertif14.jpeg') }}'; imgTitle = 'Juara 1 Cerita Rakyat'" 
                                class="bg-amber-600 hover:bg-amber-500 text-white font-medium text-xs px-4 py-2 rounded-lg shadow-lg transition-transform transform hover:scale-105 flex items-center gap-1.5">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                                Lihat Pratinjau
                            </button>
                        </div>
                    </div>

                    <!-- Konten Kartu -->
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[11px] font-bold uppercase tracking-wider text-amber-400 bg-amber-500/10 border border-amber-500/20 px-2.5 py-1 rounded-md flex items-center gap-1">
                                🏆 Juara 1
                            </span>
                            <span class="text-xs text-slate-400 font-semibold">2014</span>
                        </div>
                        <h2 class="text-lg font-bold text-white group-hover:text-amber-400 transition-colors duration-200">
                            Lomba Cerita Rakyat
                        </h2>
                    </div>
                </div>

                <!-- Footer Card -->
                <div class="px-6 pb-6 pt-2 border-t border-slate-700/40 flex items-center justify-between text-xs text-slate-400">
                    <span class="flex items-center gap-1 text-amber-400 font-medium">
                        ★ Peringkat Gugus Depan
                    </span>
                    <span class="text-slate-400 font-mono">Dinas Pendidikan</span>
                </div>
            </div>

        </div>

        <!-- MODAL PREVIEW GAMBAR SERTIFIKAT (Pop-up saat diklik) -->
        <div 
            x-show="openModal" 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-950/80 backdrop-blur-md" 
            style="display: none;">
            
            <div class="relative bg-slate-900 border border-slate-700 rounded-2xl max-w-4xl w-full overflow-hidden shadow-2xl">
                <!-- Modal Header -->
                <div class="flex items-center justify-between p-4 border-b border-slate-800">
                    <h3 class="text-base font-bold text-white" x-text="imgTitle"></h3>
                    <button @click="openModal = false" class="text-slate-400 hover:text-white p-1 rounded-lg hover:bg-slate-800 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>
                <!-- Modal Body Image -->
                <div class="p-4 bg-slate-950 flex justify-center max-h-[80vh] overflow-auto">
                    <img :src="imgUrl" :alt="imgTitle" class="max-w-full h-auto rounded-lg object-contain">
                </div>
            </div>
        </div>

    </main>

</body>
</html>