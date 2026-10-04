<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendidikan - Portofolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Alpine.js untuk fitur dropdown/accordion interaktif -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-[#b3cefa] text-slate-900 min-h-screen font-sans">

    @include('components.navbar')

    <!-- Main Content Container -->
    <main class="container mx-auto px-4 sm:px-6 py-6 md:py-12 max-w-6xl" x-data="{ openSmk: false, openSmp: false, openSd: false }">
        
        <!-- Header Judul -->
        <div class="mb-6 md:mb-8 text-center sm:text-left">
            <h1 class="text-3xl sm:text-4xl md:text-6xl font-extrabold text-black tracking-wide">PENDIDIKAN</h1>
        </div>

        <!-- Section 1: Universitas AKI (S1 Informatika) -->
        <div class="bg-[#b3cefa] mb-8 md:mb-10 pb-6 border-b-2 border-slate-400">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
                
                <!-- Kolom Kiri: Foto Dokumentasi & Deskripsi -->
                <div class="lg:col-span-7">
                    <div class="grid grid-cols-2 gap-2.5 sm:gap-3 mb-4">
                        <div class="h-36 sm:h-44 md:h-52 bg-slate-300 rounded overflow-hidden shadow">
                            <img src="{{ asset('images/unaki3.jpg') }}" alt="Kuliah UNAKI 1" class="w-full h-full object-cover">
                        </div>
                        <div class="h-36 sm:h-44 md:h-52 bg-slate-300 rounded overflow-hidden shadow">
                            <img src="{{ asset('images/unaki2.png') }}" alt="Kuliah UNAKI 2" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <p class="text-slate-900 text-sm sm:text-base md:text-lg font-medium leading-relaxed">
                        Fokus pada pengembangan perangkat lunak backend, analisis data, perancangan basis data relasional (ERD & MySQL), serta implementasi algoritma Sistem Pendukung Keputusan (SPK).
                    </p>
                </div>

                <!-- Kolom Kanan: Detail Informasi & Pas Foto -->
                <div class="lg:col-span-5 flex flex-col justify-between h-full">
                    <div>
                        <h2 class="text-lg sm:text-xl md:text-2xl font-bold text-[#b47a2a] flex flex-wrap items-center gap-1.5 sm:gap-2">
                            <span>•</span> Universitas AKI Semarang 
                            <span class="text-slate-700 font-semibold text-base sm:text-lg">(2022 - 2026)</span>
                        </h2>
                        <div class="mt-2 text-slate-800 text-base sm:text-lg md:text-xl space-y-1 font-medium">
                            <p>S1 Teknik Informatika</p>
                            <p>Menyelesaikan Pendidikan Tepat Waktu</p>
                            <p class="font-bold text-black mt-2">IPK : 3.31</p>
                        </div>
                    </div>

                    <!-- Pas Foto Profil -->
                    <div class="mt-6 flex justify-center sm:justify-end">
                        <div class="w-36 sm:w-40 md:w-48 h-48 sm:h-52 md:h-60 bg-slate-200 border-2 border-slate-400 shadow-md overflow-hidden">
                            <img src="{{ asset('images/unaki1.jpeg') }}" alt="Pasfoto UNAKI" class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="space-y-4">
            <!-- Section 2: SMKN 5 Semarang (Tombol Dropdown / Toggle) -->
            <div class="bg-[#a8c6f7] rounded-xl shadow-md overflow-hidden transition-all duration-300">
                
                <!-- Tombol Pengontrol Dropdown -->
                <button 
                    @click="openSmk = !openSmk" 
                    class="w-full px-4 sm:px-6 py-3.5 sm:py-4 flex flex-wrap sm:flex-nowrap justify-between items-center bg-[#93b8f5] hover:bg-[#83aee6] transition-colors text-left font-bold text-base sm:text-lg md:text-xl text-slate-900 gap-2"
                >
                    <div class="flex flex-wrap items-center gap-1.5 sm:gap-2">
                        <span class="text-[#b47a2a] text-xl sm:text-2xl">•</span>
                        <span>SMK Negeri 5 Semarang (2019 - 2022)</span>
                        <span class="text-xs sm:text-sm font-normal text-slate-700 bg-white/60 px-2 py-0.5 rounded">Teknik Komputer & Jaringan</span>
                    </div>
                    
                    <!-- Icon Panah Rotasi Dropdown -->
                    <div class="flex items-center gap-1.5 text-xs sm:text-sm text-slate-700 ml-auto sm:ml-0">
                        <span x-text="openSmk ? 'Tutup Detail' : 'Lihat Detail'"></span>
                        <svg :class="openSmk ? 'rotate-180' : ''" class="w-5 h-5 sm:w-6 sm:h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </button>

                <!-- Isi Konten Dropdown SMKN 5 Semarang -->
                <div x-show="openSmk" x-collapse x-cloak class="p-4 sm:p-6">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
                        
                        <!-- Kolom Kiri: Foto Praktikum & Deskripsi -->
                        <div class="lg:col-span-7">
                            <div class="grid grid-cols-2 gap-2.5 sm:gap-3 mb-4">
                                <div class="h-36 sm:h-44 md:h-52 bg-slate-300 rounded overflow-hidden shadow">
                                    <img src="{{ asset('images/smk2.jpeg') }}" alt="Praktikum Jaringan" class="w-full h-full object-cover">
                                </div>
                                <div class="h-36 sm:h-44 md:h-52 bg-slate-300 rounded overflow-hidden shadow">
                                    <img src="{{ asset('images/smk3.jpg') }}" alt="Praktikum Komputer" class="w-full h-full object-cover">
                                </div>
                            </div>
                            <p class="text-slate-900 text-sm sm:text-base md:text-lg font-medium leading-relaxed">
                                Mendalami perangkat software & hardware komputer, mempelajari instalasi jaringan, serta memahami troubleshooting komputer & jaringan.
                            </p>
                            
                            <!-- Panah Dekorasi -->
                            <div class="mt-4 flex items-center justify-center lg:justify-start gap-1">
                                <div class="h-0.5 bg-black w-16 sm:w-32"></div>
                                <span class="text-xl sm:text-2xl font-bold text-[#b47a2a]">>>></span>
                                <div class="h-0.5 bg-black w-16 sm:w-32"></div>
                            </div>
                        </div>

                        <!-- Kolom Kanan: Detail Nilai & Pas Foto SMK -->
                        <div class="lg:col-span-5 flex flex-col justify-between h-full">
                            <div>
                                <h2 class="text-lg sm:text-xl md:text-2xl font-bold text-[#b47a2a] flex flex-wrap items-center gap-1.5 sm:gap-2">
                                    <span>•</span> SMK Negeri 5 Semarang <span class="text-slate-700 font-semibold text-base sm:text-lg">2019/2020 - 2021/2022</span> ✨
                                </h2>
                                <div class="mt-2 text-slate-800 text-base sm:text-lg md:text-xl space-y-1 font-medium">
                                    <p>Teknik Komputer & Jaringan</p>
                                    <p>Menyelesaikan Pendidikan Tepat Waktu</p>
                                    <p class="font-bold text-black mt-2">Nilai Akhir : 83.54</p>
                                </div>
                            </div>

                            <!-- Pas Foto SMK -->
                            <div class="mt-6 flex justify-center sm:justify-end">
                                <div class="w-36 sm:w-40 md:w-48 h-48 sm:h-52 md:h-60 bg-slate-200 border-2 border-slate-400 shadow-md overflow-hidden">
                                    <img src="{{ asset('images/smk1.jpeg') }}" alt="Pasfoto SMKN 5 Semarang" class="w-full h-full object-cover">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Section 3: SMP Negeri 2 Mranggen -->
            <div class="bg-[#a8c6f7] rounded-xl shadow-md overflow-hidden transition-all duration-300">
                
                <!-- Tombol Pengontrol Dropdown -->
                <button 
                    @click="openSmp = !openSmp" 
                    class="w-full px-4 sm:px-6 py-3.5 sm:py-4 flex flex-wrap sm:flex-nowrap justify-between items-center bg-[#93b8f5] hover:bg-[#83aee6] transition-colors text-left font-bold text-base sm:text-lg md:text-xl text-slate-900 gap-2"
                >
                    <div class="flex items-center gap-1.5 sm:gap-2">
                        <span class="text-[#b47a2a] text-xl sm:text-2xl">•</span>
                        <span>SMP Negeri 2 Mranggen (2016 - 2019)</span>
                    </div>
                    
                    <!-- Icon Panah Rotasi Dropdown -->
                    <div class="flex items-center gap-1.5 text-xs sm:text-sm text-slate-700 ml-auto sm:ml-0">
                        <span x-text="openSmp ? 'Tutup Detail' : 'Lihat Detail'"></span>
                        <svg :class="openSmp ? 'rotate-180' : ''" class="w-5 h-5 sm:w-6 sm:h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </button>

                <div x-show="openSmp" x-collapse x-cloak class="p-4 sm:p-6">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">

                        <div class="lg:col-span-7">
                            <div class="grid grid-cols-2 gap-2.5 sm:gap-3 mb-4">
                                <div class="h-36 sm:h-44 md:h-52 bg-slate-300 rounded overflow-hidden shadow">
                                    <img src="{{ asset('images/smp2.jpg') }}" alt="Praktikum Jaringan" class="w-full h-full object-cover">
                                </div>
                                <div class="h-36 sm:h-44 md:h-52 bg-slate-300 rounded overflow-hidden shadow">
                                    <img src="{{ asset('images/smp3.jpg') }}" alt="Praktikum Komputer" class="w-full h-full object-cover">
                                </div>
                            </div>
                            <p class="text-slate-900 text-sm sm:text-base md:text-lg font-medium leading-relaxed">
                                Mengikuti pembelajaran dengan baik, aktif dalam beberapa organisasi seperti Pramuka, OSIS, PMR, dan Pencak Silat.
                            </p>
                            
                            <!-- Panah Dekorasi -->
                            <div class="mt-4 flex items-center justify-center lg:justify-start gap-1">
                                <div class="h-0.5 bg-black w-16 sm:w-32"></div>
                                <span class="text-xl sm:text-2xl font-bold text-[#b47a2a]">>>></span>
                                <div class="h-0.5 bg-black w-16 sm:w-32"></div>
                            </div>
                        </div>

                        <div class="lg:col-span-5 flex flex-col justify-between h-full">
                            <div>
                                <h2 class="text-lg sm:text-xl md:text-2xl font-bold text-[#b47a2a] flex flex-wrap items-center gap-1.5 sm:gap-2">
                                    <span>•</span> SMP Negeri 2 Mranggen <span class="text-slate-700 font-semibold text-base sm:text-lg">2016/2017 - 2018/2019</span> ✨
                                </h2>
                                <div class="mt-2 text-slate-800 text-base sm:text-lg md:text-xl space-y-1 font-medium">
                                    <p>Menyelesaikan Pendidikan Tepat Waktu</p>
                                    <p class="font-bold text-black mt-2">Nilai Akhir : 80</p>
                                </div>
                            </div>

                            <div class="mt-6 flex justify-center sm:justify-end">
                                <div class="w-36 sm:w-40 md:w-48 h-48 sm:h-52 md:h-60 bg-slate-200 border-2 border-slate-400 shadow-md overflow-hidden">
                                    <img src="{{ asset('images/smp1.jpeg') }}" alt="Pasfoto SMP" class="w-full h-full object-cover">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <!-- Section 4: SD Negeri 4 Mranggen -->
            <div class="bg-[#a8c6f7] rounded-xl shadow-md overflow-hidden transition-all duration-300">
                
                <!-- Tombol Pengontrol Dropdown -->
                <button 
                    @click="openSd = !openSd" 
                    class="w-full px-4 sm:px-6 py-3.5 sm:py-4 flex flex-wrap sm:flex-nowrap justify-between items-center bg-[#93b8f5] hover:bg-[#83aee6] transition-colors text-left font-bold text-base sm:text-lg md:text-xl text-slate-900 gap-2"
                >
                    <div class="flex items-center gap-1.5 sm:gap-2">
                        <span class="text-[#b47a2a] text-xl sm:text-2xl">•</span>
                        <span>SD Negeri 4 Mranggen (2010 - 2016)</span>
                    </div>
                    
                    <!-- Icon Panah Rotasi Dropdown -->
                    <div class="flex items-center gap-1.5 text-xs sm:text-sm text-slate-700 ml-auto sm:ml-0">
                        <span x-text="openSd ? 'Tutup Detail' : 'Lihat Detail'"></span>
                        <svg :class="openSd ? 'rotate-180' : ''" class="w-5 h-5 sm:w-6 sm:h-6 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </button>

                <div x-show="openSd" x-collapse x-cloak class="p-4 sm:p-6">
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">

                        <div class="lg:col-span-7">
                            <div class="grid grid-cols-2 gap-2.5 sm:gap-3 mb-4">
                                <div class="h-36 sm:h-44 md:h-52 bg-slate-300 rounded overflow-hidden shadow">
                                    <img src="{{ asset('images/sd2.jpeg') }}" alt="Praktikum Jaringan" class="w-full h-full object-cover">
                                </div>
                                <div class="h-36 sm:h-44 md:h-52 bg-slate-300 rounded overflow-hidden shadow">
                                    <img src="{{ asset('images/sd4.jpeg') }}" alt="Praktikum Komputer" class="w-full h-full object-cover">
                                </div>
                            </div>
                            <p class="text-slate-900 text-sm sm:text-base md:text-lg font-medium leading-relaxed">
                                Mengikuti pembelajaran dengan baik, aktif dalam beberapa organisasi Pramuka.
                            </p>
                            
                            <!-- Panah Dekorasi -->
                            <div class="mt-4 flex items-center justify-center lg:justify-start gap-1">
                                <div class="h-0.5 bg-black w-16 sm:w-32"></div>
                                <span class="text-xl sm:text-2xl font-bold text-[#b47a2a]">>>></span>
                                <div class="h-0.5 bg-black w-16 sm:w-32"></div>
                            </div>
                        </div>

                        <div class="lg:col-span-5 flex flex-col justify-between h-full">
                            <div>
                                <h2 class="text-lg sm:text-xl md:text-2xl font-bold text-[#b47a2a] flex flex-wrap items-center gap-1.5 sm:gap-2">
                                    <span>•</span> SD Negeri 4 Mranggen <span class="text-slate-700 font-semibold text-base sm:text-lg">2010/2011 - 2015/2016</span> ✨
                                </h2>
                                <div class="mt-2 text-slate-800 text-base sm:text-lg md:text-xl space-y-1 font-medium">
                                    <p>Menyelesaikan Pendidikan Tepat Waktu</p>
                                    <p class="font-bold text-black mt-2">Nilai Akhir : 82.2</p>
                                </div>
                            </div>

                            <div class="mt-6 flex justify-center sm:justify-end">
                                <div class="w-36 sm:w-40 md:w-48 h-48 sm:h-52 md:h-60 bg-slate-200 border-2 border-slate-400 shadow-md overflow-hidden">
                                    <img src="{{ asset('images/sd1.jpeg') }}" alt="Pasfoto" class="w-full h-full object-cover">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </main>

</body>
</html>