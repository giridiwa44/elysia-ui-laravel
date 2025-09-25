<header id="page-header"
    class="fixed inset-x-0 top-0 z-30 flex flex-none items-center border-b border-secondary-100 bg-white/90 backdrop-blur-sm dark:border-secondary-800 dark:bg-secondary-900/90 h-[4.5rem]">

    <div class="container mx-auto xl:max-w-7xl px-4 lg:px-8 flex grow items-center justify-between gap-2">
        <div class="flex items-center gap-3">
            <a href="/"
                class="group inline-flex items-center gap-1.5 text-lg font-bold text-secondary-950 hover:text-secondary-600 dark:text-secondary-100 dark:hover:text-secondary-300">
                <span>🌸</span>

                <span
                    class="hidden transition-opacity duration-150 ease-out group-hover:opacity-75 sm:inline-block">Elysia
                    UI</span>
            </a>
        </div>
        <div class="flex items-center">
            <nav class="mr-1.5 hidden items-center gap-7 lg:flex">
                <a class="group relative text-sm font-semibold text-secondary-900 hover:text-black dark:text-secondary-100 dark:hover:text-white"
                    href="/">
                    <span
                        class="absolute -inset-x-2.5 -inset-y-1.5 rounded-xl bg-secondary-100 dark:bg-secondary-700/50 scale-0 transition ease-out group-hover:scale-100 group-active:scale-105 group-active:bg-secondary-200 dark:group-active:bg-secondary-700/75"></span>
                    <span class="relative grow">Docs</span>
                </a>
                <a class="group relative text-sm font-semibold text-secondary-900 hover:text-black dark:text-secondary-100 dark:hover:text-white"
                    href="/">
                    <span
                        class="absolute -inset-x-2.5 -inset-y-1.5 rounded-xl bg-secondary-100 dark:bg-secondary-700/50 scale-0 transition ease-out group-hover:scale-100 group-active:scale-105 group-active:bg-secondary-200 dark:group-active:bg-secondary-700/75"></span>
                    <span class="relative grow">Component</span>
                </a>
                <a href="#" @click.prevent="open = true"
                    class="px-2 py-1 bg-white border border-elysia-border/20 rounded-lg hover:border-elysia-primary flex items-center cursor-text dark:bg-secondary-700/50 dark:text-white">
                    <span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-search-icon lucide-search w-4 h-4">
                            <path d="m21 21-4.34-4.34" />
                            <circle cx="11" cy="11" r="8" />
                        </svg></span>
                    <span class="font-sans text-elysia-dark/20 dark:text-white">Quick Search ...</span>
                    <kbd class="ml-2 border border-slate-200 py-0 px-2 rounded text-[16px]">CTRL K</kbd>
                </a>
            </nav>
            <div
                class="mx-6 hidden h-8 w-px bg-linear-to-b from-transparent via-secondary-200 to-transparent lg:block dark:via-secondary-700">
            </div>
            <div class="flex gap-3">
                <button><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-sun-icon lucide-sun w-4 h-4">
                        <circle cx="12" cy="12" r="4" />
                        <path d="M12 2v2" />
                        <path d="M12 20v2" />
                        <path d="m4.93 4.93 1.41 1.41" />
                        <path d="m17.66 17.66 1.41 1.41" />
                        <path d="M2 12h2" />
                        <path d="M20 12h2" />
                        <path d="m6.34 17.66-1.41 1.41" />
                        <path d="m19.07 4.93-1.41 1.41" />
                    </svg></button>
                <a href="/" class="md:flex hidden hover:text-elysia-hover">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-github-icon lucide-github w-5 h-5">
                        <path
                            d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4" />
                        <path d="M9 18c-4.51 2-5-2-7-2" />
                    </svg>
                </a>
                <!-- Button Mobile -->
                <button @click="open = !open"
                    class="hover:text-elysia-primary text-elysia-dark dark:text-elysia-neutral cursor-pointer md:hidden flex">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-menu-icon lucide-menu w-5 h-5">
                        <path d="M4 5h16" />
                        <path d="M4 12h16" />
                        <path d="M4 19h16" />
                    </svg>
                </button>

            </div>
        </div>
    </div>
</header>
<div x-data="docSearch()" x-init="init()" @keydown.window.cmd.k.prevent="open = !open"
    @keydown.window.ctrl.k.prevent="open = !open">

    <!-- Trigger ada di atas -->

    <!-- Modal -->
    <div x-show="open" class="fixed inset-0 bg-secondary-900/50 flex items-start justify-center z-50 p-4">
        <div class="bg-white dark:bg-gray-800 w-full max-w-xl rounded-lg shadow-lg p-4">


            <input name="search" type="text" x-model="query" placeholder="Cari komponen..."
                class="w-full p-2 outline-none border border-gray-300 rounded dark:bg-secondary-700 dark:text-white focus:border focus:border-pink-400"
                autocomplete="off">

            <ul class="mt-2 max-h-60 overflow-y-auto">
                <template x-for="result in results" :key="result.item.url">
                    <li>
                        <a :href="result.item.url" x-text="result.item.title"
                            class="block px-2 py-1 rounded hover:bg-gray-100 dark:hover:bg-gray-700">📕</a>
                    </li>
                </template>
            </ul>

            <button @click="open = false" class="mt-2 text-sm text-gray-500 cursor-pointer">Tutup</button>
        </div>
    </div>
</div>
