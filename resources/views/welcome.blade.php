<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - Rizqi Aditia Maulana</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gradient-to-b from-[#d9dced] via-[#6fa3ec] to-[#d0e1fd] min-h-screen text-slate-800 font-sans">

    @include('components.navbar')

    <!-- Hero Section -->
    <section id="beranda" class="max-w-6xl mx-auto px-6 py-12 md:py-20 flex flex-col md:flex-row items-center justify-between gap-12">
        
        <!-- Left Column: Title & Info -->
        <div class="flex-1 space-y-8">
            <!-- Big Main Title -->
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-widest text-black uppercase">
                PORTOFOLIO
            </h1>

            <!-- Name Capsule Banner -->
            <div class="relative inline-flex items-center justify-center bg-[#3a3535] text-white px-8 py-3 rounded-full shadow-lg border border-slate-600 max-w-xl w-full">
                <span class="absolute left-6 right-6 border-b border-slate-400 top-1/2 -z-0"></span>
                <span class="relative z-10 bg-[#3a3535] px-4 text-base md:text-xl font-bold tracking-wider uppercase text-slate-100">
                    RIZQI ADITIA MAULANA
                </span>
            </div>

            <!-- Contact Information -->
            <div class="space-y-4 pt-2">
                <h3 class="text-xl md:text-2xl font-black tracking-widest text-black uppercase">
                    K O N T A K
                </h3>
                
                <div class="flex flex-wrap items-center gap-6 pt-1">
                    <!-- Phone Contact -->
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-[#f88379] rounded-full flex items-center justify-center text-white shadow-md">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                <path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                            </svg>
                        </div>
                        <span class="font-semibold text-slate-900 text-sm md:text-base">085842963874</span>
                    </div>

                    <!-- Email Contact -->
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-[#f88379] rounded-full flex items-center justify-center text-white shadow-md">
                            <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                                <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                            </svg>
                        </div>
                        <span class="font-semibold text-slate-900 text-sm md:text-base">rizqirizqi880@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column: Profile Photo Frame -->
        <div class="flex-shrink-0">
            <div class="bg-[#3a3535] p-4 rounded-sm shadow-2xl border border-slate-700 w-72 md:w-80">
                <div class="relative overflow-hidden bg-red-800 aspect-[3/4] border border-slate-500">
                    <img 
                        src="{{ asset('images/profile.jpg') }}" 
                        alt="Rizqi Aditia Maulana" 
                        class="w-full h-full object-cover"
                    >
                </div>
            </div>
        </div>

    </section>

</body>
</html>