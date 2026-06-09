<x-layout>

<section class="relative min-h-screen flex items-center justify-center bg-black overflow-hidden px-6">

    <!-- 🌌 BLOBS BACKGROUND -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>
        <div class="blob blob-3"></div>
    </div>
    
    <!-- CONTENT -->
    <div class="relative z-10 text-center max-w-3xl">
    <!-- PROFILE PICTURE -->
<div class="relative mx-auto mb-10 w-72 h-72 md:w-80 md:h-80 lg:w-96 lg:h-96">

    <!-- GLOW EFFECT -->
    <div class="absolute inset-0 rounded-full bg-gradient-to-r from-purple-500 to-green-400 blur-3xl opacity-60 animate-pulse"></div>

    <!-- BORDER -->
    <div class="relative w-full h-full rounded-full p-2 bg-gradient-to-r from-purple-500 via-fuchsia-500 to-green-400">

        <
        <div class="w-full h-full rounded-full overflow-hidden bg-black">

            <img src="{{ asset('images/profile.jpg') }}"
                 alt="Profile"
                 class="w-full h-full object-cover">

        </div>

    </div>

</div>
        
        <h1 class="text-6xl md:text-7xl font-black text-purple-500 neon-pulse">
            Felisia
        </h1>

        
        <p class="mt-4 text-xl text-gray-300">
            Full Stack Web Developer
        </p>

        
        <p class="mt-6 text-gray-400 leading-relaxed">
            Creo interfacce moderne, performanti e curate nei dettagli usando Laravel, React e Tailwind CSS.
        </p>

        
        <div class="mt-10 flex justify-center gap-6">

            <a href="{{ route('projects') }}"
               class="px-6 py-3 bg-purple-600 hover:bg-purple-700 text-white rounded-full shadow-lg shadow-purple-500/30 transition">
                View Projects
            </a>

            <a href="{{ route('about') }}"
               class="px-6 py-3 border border-purple-500 text-purple-400 hover:bg-purple-500/10 rounded-full transition">
                About Me
            </a>

        </div>

    </div>

</section>


<section class="bg-black px-6 py-20">

    <h2 class="text-center text-3xl font-bold text-purple-400 mb-12">
        Developer Focus
    </h2>

    <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-6">

        <div class="skill-card">
            ✦ Frontend moderno e interattivo
        </div>

        <div class="skill-card">
            ✺ Backend solido con Laravel
        </div>

        <div class="skill-card">
            ✿ UI / UX design curato
        </div>

        <div class="skill-card">
            ◆ Progetti full-stack completi
        </div>

    </div>

</section>

</x-layout>