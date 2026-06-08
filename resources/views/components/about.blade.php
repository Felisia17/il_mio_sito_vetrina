<x-layout>

<section class="relative min-h-screen px-6 py-24 bg-black overflow-hidden">

    <!-- 🌌 BACKGROUND BLOBS -->
    <div class="absolute inset-0 z-0 pointer-events-none">
        <div class="blob blob-1"></div>
        <div class="blob blob-2"></div>
        <div class="blob blob-3"></div>
    </div>

    <!-- CONTENT -->
    <div class="relative z-10 max-w-5xl mx-auto">

        <!-- TITLE -->
        <div class="text-center mb-16">
            <h1 class="text-6xl font-black text-purple-500 neon-pulse">
                About Me
            </h1>

            <p class="mt-4 text-gray-400 text-lg">
                Chi sono, cosa faccio e cosa mi appassiona
            </p>
        </div>

        <!-- MAIN BOX -->
        <div class="grid md:grid-cols-2 gap-12 items-center">

            <!-- LEFT TEXT -->
            <div class="space-y-6 text-gray-300 text-lg leading-relaxed">

                <p>
                    Ciao 👋 mi chiamo <span class="text-purple-400 font-semibold">Felisia</span>,
                    sono una sviluppatrice web appassionata di design moderno e interfacce intuitive.
                </p>

                <p>
                    Mi occupo di sviluppo full-stack utilizzando tecnologie come
                    <span class="text-purple-400">Laravel</span>, 
                    <span class="text-purple-400">React</span> e
                    <span class="text-purple-400">Tailwind CSS</span>.
                </p>

                <p>
                    Amo trasformare idee in prodotti digitali curati, veloci e con una forte identità visiva.
                </p>

                <p>
                    Il mio obiettivo è crescere come developer e lavorare su progetti sempre più complessi e creativi 🚀
                </p>

            </div>

            <!-- RIGHT CARD -->
            <div class="skill-card text-center p-10">

                <div class="text-5xl mb-6">💻</div>

                <h2 class="text-2xl font-bold text-purple-400 mb-4">
                    Developer Focus
                </h2>

                <ul class="space-y-3 text-gray-300">
                    <li>✨ Frontend moderno</li>
                    <li>⚙️ Backend con Laravel</li>
                    <li>🎨 UI/UX design</li>
                    <li>🚀 Progetti full-stack</li>
                </ul>

            </div>

        </div>

        <!-- BOTTOM QUOTE -->
        <div class="text-center mt-20">
            <p class="text-gray-500 italic">
                “Creo interfacce che non sono solo funzionali, ma anche emozionali.”
            </p>
        </div>

    </div>
    <!-- 📩 CONTACT SECTION -->
<div class="mt-24 text-center">

    <h2 class="text-4xl font-black text-purple-500 neon-pulse mb-6">
        Sono alla ricerca del mio primo lavoro
    </h2>

    <p class="text-gray-400 mb-10 max-w-2xl mx-auto">
        Sono una Junior Full Stack Developer appassionata di sviluppo web.
        Sto cercando la mia prima opportunità lavorativa per crescere e contribuire a progetti reali 🚀
    </p>

    <div class="flex flex-col md:flex-row justify-center items-center gap-6">

        <div class="flex items-center gap-3 px-6 py-3 rounded-full border border-purple-500/40 bg-zinc-900/50">
            <span class="text-purple-400 text-xl">✉</span>
            <span class="text-gray-300">felisia.passarelli@icloud.com</span>
        </div>

        <div class="flex items-center gap-3 px-6 py-3 rounded-full border border-purple-500/40 bg-zinc-900/50">
            <span class="text-purple-400 text-xl">💻</span>
            <span class="text-gray-300">https://github.com/Felisia17</span>
        </div>

        <div class="flex items-center gap-3 px-6 py-3 rounded-full border border-purple-500/40 bg-zinc-900/50">
            <span class="text-purple-400 text-xl">🔗</span>
            <span class="text-gray-300">https://www.linkedin.com/in/felisia-passarelli-12818b254/</span>
        </div>
    </div>

    <!-- SMALL NOTE -->
    <p class="mt-10 text-sm text-gray-600 italic">
        Aperta a stage, junior position e collaborazioni.
    </p>

</div>

</section>

</x-layout>