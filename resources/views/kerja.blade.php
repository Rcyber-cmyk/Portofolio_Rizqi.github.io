<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Kerja - Portofolio</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- CDN Tailwind sebagai alternatif jika Vite belum berjalan -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#0e316a] text-slate-900 min-h-screen font-sans">
    <!-- Navbar Component -->
    @include('components.navbar')
    <!-- Main Content -->
    <main class="container mx-auto px-4 py-10 max-w-5xl">
        
        <!-- Header Judul -->
        <div class="text-center mb-12">
            <h1 class="text-3xl md:text-5xl font-extrabold text-slate-200 tracking-tight uppercase">
                Riwayat Kerja
            </h1>
            <p class="text-slate-200 text-sm md:text-base mt-2 font-medium">
                Pengalaman kerja full-time/part-time, magang dan bisnis sendiri
            </p>
        </div>

        <!-- Timeline / Card List -->
        <div class="space-y-10">
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 md:p-8 shadow-lg border border-white/40 hover:shadow-xl transition-all duration-300">
                <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4 mb-6 border-b border-slate-200 pb-4">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-red-700 bg-blue-100 px-3 py-1 rounded-full">
                            Magang Software Engineering
                        </span>
                        <h2 class="text-2xl md:text-3xl font-bold text-slate-900 mt-2">
                            CV Format Masa Depan
                        </h2>
                        <p class="text-slate-600 font-medium">Full-Stack Developer</p>
                    </div>
                    <div class="bg-[#1e4ca1] text-white px-4 py-1.5 rounded-lg text-sm font-semibold shadow-sm">
                        Juli 2025 - Desember 2025
                    </div>
                </div>

                <!-- Konten & Gambar -->
                <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-center">
                    <div class="md:col-span-6 space-y-3">
                        <p class="text-slate-700 leading-relaxed font-medium">
                            Bertanggung jawab dalam pembangunan website portal kerja modul perusahaan dengan menggunakan framework Laravel. Menjadi Full-stack Developer, menganalisa permintaan costumer, dan memberikan solusi atas masalah yang dimiliki costumer.
                        </p>
                        <!-- Skill Tags -->
                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="bg-slate-200 text-slate-800 text-xs font-semibold px-2.5 py-1 rounded">Penyedia layanan software</span>
                            <span class="bg-slate-200 text-slate-800 text-xs font-semibold px-2.5 py-1 rounded">Pengembang Website</span>
                            <span class="bg-slate-200 text-slate-800 text-xs font-semibold px-2.5 py-1 rounded">Customer Support</span>
                        </div>
                    </div>
                    <div class="md:col-span-6 grid grid-cols-2 gap-3">
                        <div class="h-36 bg-slate-200 rounded-xl overflow-hidden shadow-inner border border-slate-300 flex items-center justify-center">
                            <img src="{{ asset('images/cv1.jpeg') }}" alt="Permintaan costumer" class="w-full h-full object-cover" onerror="this.onerror=null; this.parentElement.innerHTML='<span class=\"text-xs text-slate-500 font-medium p-2 text-center\"></span>
                        </div>
                        <div class="h-36 bg-slate-200 rounded-xl overflow-hidden shadow-inner border border-slate-300 flex items-center justify-center">
                            <img src="{{ asset('images/cv2.jpeg') }}" alt="pengerjaan web" class="w-full h-full object-cover" onerror="this.onerror=null; this.parentElement.innerHTML='<span class=\"text-xs text-slate-500 font-medium p-2 text-center\"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 md:p-8 shadow-lg border border-white/40 hover:shadow-xl transition-all duration-300">
                <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4 mb-6 border-b border-slate-200 pb-4">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-amber-700 bg-amber-100 px-3 py-1 rounded-full">
                            Event Management
                        </span>
                        <h2 class="text-2xl md:text-3xl font-bold text-slate-900 mt-2">
                            Himura ADM
                        </h2>
                        <p class="text-slate-600 font-medium">Koordinator Event Karate</p>
                    </div>
                    <div class="bg-[#1e4ca1] text-white px-4 py-1.5 rounded-lg text-sm font-semibold shadow-sm">
                        2024
                    </div>
                </div>

                <!-- Konten & Gambar -->
                <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-center">
                    <div class="md:col-span-6 space-y-3">
                        <p class="text-slate-700 leading-relaxed font-medium">
                            Mengkoordinasikan alur operasional dan manajemen pertandingan pada ajang Kejuaraan Karate Tingkat Nasional 2024. Bertanggung jawab atas kelancaran jalannya acara dan koordinasi antar tim lapangan.
                        </p>
                        <!-- Skill Tags -->
                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="bg-slate-200 text-slate-800 text-xs font-semibold px-2.5 py-1 rounded">Event Coordinator</span>
                            <span class="bg-slate-200 text-slate-800 text-xs font-semibold px-2.5 py-1 rounded">Team Leadership</span>
                            <span class="bg-slate-200 text-slate-800 text-xs font-semibold px-2.5 py-1 rounded">Operational Control</span>
                        </div>
                    </div>

                    <!-- Gallery Gambar Himura ADM -->
                    <div class="md:col-span-6 grid grid-cols-2 gap-3">
                        <div class="h-36 bg-slate-200 rounded-xl overflow-hidden shadow-inner border border-slate-300 flex items-center justify-center">
                            <img src="{{ asset('images/himura1.jpeg') }}" alt="Tim Himura ADM" class="w-full h-full object-cover" onerror="this.onerror=null; this.parentElement.innerHTML='<span class=\"text-xs text-slate-500 font-medium p-2 text-center\"></span>
                        </div>
                        <div class="h-36 bg-slate-200 rounded-xl overflow-hidden shadow-inner border border-slate-300 flex items-center justify-center">
                            <img src="{{ asset('images/himura2.jpeg') }}" alt="Pertandingan Karate" class="w-full h-full object-cover" onerror="this.onerror=null; this.parentElement.innerHTML='<span class=\"text-xs text-slate-500 font-medium p-2 text-center\"></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </br>
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 md:p-8 shadow-lg border border-white/40 hover:shadow-xl transition-all duration-300">
                <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4 mb-6 border-b border-slate-200 pb-4">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-100 bg-green-500 px-3 py-1 rounded-full">
                            Bisnis
                        </span>
                        <h2 class="text-2xl md:text-3xl font-bold text-slate-900 mt-2">
                            Lampu Aquarium Rostoon
                        </h2>
                        <p class="text-slate-600 font-medium">Penjualan online marketplace</p>
                    </div>
                    <div class="bg-[#1e4ca1] text-white px-4 py-1.5 rounded-lg text-sm font-semibold shadow-sm">
                        2023
                    </div>
                </div>

                <!-- Konten & Gambar -->
                <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-center">
                    <div class="md:col-span-6 space-y-3">
                        <p class="text-slate-700 leading-relaxed font-medium">
                            Melakukan pelayanan penjualan lampu terhadap costumer sesuai permintaan dan kebutuhan, pemasaran melalui media online marketplace.
                        </p>
                        <!-- Skill Tags -->
                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="bg-slate-200 text-slate-800 text-xs font-semibold px-2.5 py-1 rounded">Stok Barang</span>
                            <span class="bg-slate-200 text-slate-800 text-xs font-semibold px-2.5 py-1 rounded">Negosiasi & Penawaran</span>
                            <span class="bg-slate-200 text-slate-800 text-xs font-semibold px-2.5 py-1 rounded">Management produk & keuangan excel</span>
                        </div>
                    </div>

                    <!-- Gallery Gambar Himura ADM -->
                    <div class="md:col-span-6 grid grid-cols-2 gap-3">
                        <div class="h-36 bg-slate-200 rounded-xl overflow-hidden shadow-inner border border-slate-300 flex items-center justify-center">
                            <img src="{{ asset('images/bsns1.jpeg') }}" alt="Tim Himura ADM" class="w-full h-full object-cover" onerror="this.onerror=null; this.parentElement.innerHTML='<span class=\"text-xs text-slate-500 font-medium p-2 text-center\"></span>
                        </div>
                        <div class="h-36 bg-slate-200 rounded-xl overflow-hidden shadow-inner border border-slate-300 flex items-center justify-center">
                            <img src="{{ asset('images/bsns2.png') }}" alt="Pertandingan Karate" class="w-full h-full object-cover" onerror="this.onerror=null; this.parentElement.innerHTML='<span class=\"text-xs text-slate-500 font-medium p-2 text-center\"></span>
                        </div>
                    </div>
                </div>
            </div>
        </br>
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 md:p-8 shadow-lg border border-white/40 hover:shadow-xl transition-all duration-300">
                <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4 mb-6 border-b border-slate-200 pb-4">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-blue-700 bg-blue-100 px-3 py-1 rounded-full">
                            Kerja Full-Time Teknis & Servis
                        </span>
                        <h2 class="text-2xl md:text-3xl font-bold text-slate-900 mt-2">
                            Adhi Easy Computer
                        </h2>
                        <p class="text-slate-600 font-medium">Teknisi Komputer Hardware & Software</p>
                    </div>
                    <div class="bg-[#1e4ca1] text-white px-4 py-1.5 rounded-lg text-sm font-semibold shadow-sm">
                        April 2022 - September 2022
                    </div>
                </div>

                <!-- Konten & Gambar -->
                <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-center">
                    <div class="md:col-span-6 space-y-3">
                        <p class="text-slate-700 leading-relaxed font-medium">
                            Bertanggung jawab dalam merawat, mendiagnosa, dan memperbaikinya kerusakan hardware maupun software komputer dan laptop pelanggan. Memberikan solusi teknis yang cepat dan tepat untuk menjaga kepuasan konsumen.
                        </p>
                        <!-- Skill Tags -->
                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="bg-slate-200 text-slate-800 text-xs font-semibold px-2.5 py-1 rounded">Hardware Troubleshooting</span>
                            <span class="bg-slate-200 text-slate-800 text-xs font-semibold px-2.5 py-1 rounded">Laptop Repair</span>
                            <span class="bg-slate-200 text-slate-800 text-xs font-semibold px-2.5 py-1 rounded">Customer Support</span>
                        </div>
                    </div>

                    <!-- Gallery Gambar Adhi Easy Computer -->
                    <div class="md:col-span-6 grid grid-cols-2 gap-3">
                        <div class="h-36 bg-slate-200 rounded-xl overflow-hidden shadow-inner border border-slate-300 flex items-center justify-center">
                            <img src="{{ asset('images/adi1.jpeg') }}" alt="Toko Adhi Easy Computer" class="w-full h-full object-cover" onerror="this.onerror=null; this.parentElement.innerHTML='<span class=\"text-xs text-slate-500 font-medium p-2 text-center\"></span>
                        </div>
                        <div class="h-36 bg-slate-200 rounded-xl overflow-hidden shadow-inner border border-slate-300 flex items-center justify-center">
                            <img src="{{ asset('images/adi2.jpeg') }}" alt="Service Hardware" class="w-full h-full object-cover" onerror="this.onerror=null; this.parentElement.innerHTML='<span class=\"text-xs text-slate-500 font-medium p-2 text-center\"></span>
                        </div>
                    </div>
                </div>
            </div>
        </br>
        <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 md:p-8 shadow-lg border border-white/40 hover:shadow-xl transition-all duration-300">
                <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4 mb-6 border-b border-slate-200 pb-4">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-slate-900 bg-blue-700 px-3 py-1 rounded-full">
                            Part-Time Pernikahan & Seminar
                        </span>
                        <h2 class="text-2xl md:text-3xl font-bold text-slate-900 mt-2">
                            S2 Banguet
                        </h2>
                        <p class="text-slate-600 font-medium">Part-Time Pramusaji</p>
                    </div>
                    <div class="bg-[#1e4ca1] text-white px-4 py-1.5 rounded-lg text-sm font-semibold shadow-sm">
                        2020 - 2024
                    </div>
                </div>

                <!-- Konten & Gambar -->
                <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-center">
                    <div class="md:col-span-6 space-y-3">
                        <p class="text-slate-700 leading-relaxed font-medium">
                            Mengantarkan hidangan kepada tamu
                        </p>
                        <!-- Skill Tags -->
                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="bg-slate-200 text-slate-800 text-xs font-semibold px-2.5 py-1 rounded">Service tempat</span>
                            <span class="bg-slate-200 text-slate-800 text-xs font-semibold px-2.5 py-1 rounded">Penyedia hidangan</span>
                        </div>
                    </div>

                    <!-- Gallery Gambar Himura ADM -->
                    <div class="md:col-span-6 grid grid-cols-2 gap-3">
                        <div class="h-36 bg-slate-200 rounded-xl overflow-hidden shadow-inner border border-slate-300 flex items-center justify-center">
                            <img src="{{ asset('images/sb1.jpeg') }}" alt="Tim Himura ADM" class="w-full h-full object-cover" onerror="this.onerror=null; this.parentElement.innerHTML='<span class=\"text-xs text-slate-500 font-medium p-2 text-center\"></span>
                        </div>
                        <div class="h-36 bg-slate-200 rounded-xl overflow-hidden shadow-inner border border-slate-300 flex items-center justify-center">
                            <img src="{{ asset('images/sb2.jpeg') }}" alt="Pertandingan Karate" class="w-full h-full object-cover" onerror="this.onerror=null; this.parentElement.innerHTML='<span class=\"text-xs text-slate-500 font-medium p-2 text-center\"></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </br>
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 md:p-8 shadow-lg border border-white/40 hover:shadow-xl transition-all duration-300">
                <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-4 mb-6 border-b border-slate-200 pb-4">
                    <div>
                        <span class="text-xs font-bold uppercase tracking-wider text-red-700 bg-blue-100 px-3 py-1 rounded-full">
                            Magang Teknis & Servis
                        </span>
                        <h2 class="text-2xl md:text-3xl font-bold text-slate-900 mt-2">
                            Azma Komputer
                        </h2>
                        <p class="text-slate-600 font-medium">Teknisi Komputer Hardware & Software</p>
                    </div>
                    <div class="bg-[#1e4ca1] text-white px-4 py-1.5 rounded-lg text-sm font-semibold shadow-sm">
                        Mei 2021 - Desember 2021
                    </div>
                </div>

                <!-- Konten & Gambar -->
                <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-center">
                    <div class="md:col-span-6 space-y-3">
                        <p class="text-slate-700 leading-relaxed font-medium">
                            Bertanggung jawab dalam merawat, mendiagnosa, dan memperbaikinya kerusakan hardware maupun software komputer dan laptop pelanggan. Memberikan solusi teknis yang cepat dan tepat untuk menjaga kepuasan konsumen.
                        </p>
                        <!-- Skill Tags -->
                        <div class="flex flex-wrap gap-2 pt-2">
                            <span class="bg-slate-200 text-slate-800 text-xs font-semibold px-2.5 py-1 rounded">Hardware Troubleshooting</span>
                            <span class="bg-slate-200 text-slate-800 text-xs font-semibold px-2.5 py-1 rounded">Laptop Repair</span>
                            <span class="bg-slate-200 text-slate-800 text-xs font-semibold px-2.5 py-1 rounded">Customer Support</span>
                        </div>
                    </div>

                    <!-- Gallery Gambar Adhi Easy Computer -->
                    <div class="md:col-span-6 grid grid-cols-2 gap-3">
                        <div class="h-36 bg-slate-200 rounded-xl overflow-hidden shadow-inner border border-slate-300 flex items-center justify-center">
                            <img src="{{ asset('images/azma1.jpeg') }}" alt="Toko Adhi Easy Computer" class="w-full h-full object-cover" onerror="this.onerror=null; this.parentElement.innerHTML='<span class=\"text-xs text-slate-500 font-medium p-2 text-center\"></span>
                        </div>
                        <div class="h-36 bg-slate-200 rounded-xl overflow-hidden shadow-inner border border-slate-300 flex items-center justify-center">
                            <img src="{{ asset('images/azma2.jpg') }}" alt="Service Hardware" class="w-full h-full object-cover" onerror="this.onerror=null; this.parentElement.innerHTML='<span class=\"text-xs text-slate-500 font-medium p-2 text-center\"></span>
                        </div>
                    </div>
                </div>
            </div>

    </main>

</body>
</html>