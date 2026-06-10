<nav class="fixed top-0 left-0 w-full z-50 backdrop-blur-md bg-black/60">

    <div class="flex justify-center items-center py-5 px-4">

        <div class="flex flex-wrap justify-center gap-4 md:gap-16 text-sm md:text-xl">

            <a href="{{ route('home') }}"
               class="float-link text-purple-300 hover:text-purple-400">
                Home
            </a>

            <a href="{{ route('about') }}"
               class="float-link text-purple-300 hover:text-purple-400">
                About
            </a>

            <a href="{{ route('skills') }}"
               class="float-link text-purple-300 hover:text-purple-400">
                Skills
            </a>

            <a href="{{ route('projects') }}"
               class="float-link text-purple-300 hover:text-purple-400">
                Projects
            </a>

        </div>

    </div>

</nav>