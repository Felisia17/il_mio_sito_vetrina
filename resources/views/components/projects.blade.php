<x-layout>

<section class="min-h-screen px-6 py-20 bg-black overflow-hidden">

   
    <div class="text-center mb-16">

        <h1 class="text-5xl md:text-6xl font-black text-purple-500 neon-pulse tracking-tight">
            I miei progetti
        </h1>

        <p class="mt-4 text-gray-400 text-lg">
            Alcuni lavori che ho sviluppato per sperimentare e migliorare le mie competenze
        </p>

    </div>

   
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 place-items-center">

        
        <div class="float-card w-full max-w-md bg-zinc-900 border border-purple-500/30 rounded-2xl overflow-hidden">

            
            <video
                class="w-full h-56 object-cover"
                autoplay
                muted
                loop
                playsinline
            >
                <source src="{{ asset('storage/video/demoreaktor.mp4') }}" type="video/mp4">
            </video>

           
            <div class="p-6">

                <h2 class="text-xl font-bold text-purple-400">
                    Game React App
                </h2>

                <p class="text-gray-300 mt-3 text-sm leading-relaxed">
                    Web app videogiochi con API esterne, ricerca dinamica e UI moderna.
                </p>

                <a href="https://github.com/Felisia17/Progetto_Finale_Reactor_Aulab" target="_blank"
                   class="inline-block mt-4 text-purple-400 hover:text-purple-300 transition">
                    Vai al progetto →
                </a>

            </div>

        </div>

        </div>

    </div>

</section>

</x-layout>