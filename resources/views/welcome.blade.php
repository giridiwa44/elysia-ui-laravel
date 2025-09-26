@extends('layouts.app')

@section('content')
    <x-navbar />
    <main class="grow bg-white dark:bg-secondary-900 pt-[4.5rem]">
        <div class="bg-white dark:bg-secondary-900 hidden"></div>
        <div class="relative overflow-hidden bg-white dark:bg-secondary-900 dark:text-secondary-100">
            <div class="container mx-auto xl:max-w-7xl py-16 lg:py-32 px-4 lg:px-8">
                <div class="grid grid-cols-1 items-center text-center md:grid-cols-2 md:gap-16 md:text-left">
                    <div>
                        <div id="lenis-text">
                            <a href="/"
                                class="group mb-4 inline-flex items-center gap-1 rounded-lg bg-secondary-100 px-2 py-1.5 text-sm leading-4 font-semibold text-secondary-700 transition-all ease-out hover:bg-rose-100 hover:text-rose-700 active:border-secondary-200 active:bg-secondary-200/50 active:text-secondary-700 dark:border-secondary-700 dark:bg-secondary-700/25 dark:text-secondary-300 dark:hover:border-rose-900 dark:hover:bg-rose-800 dark:hover:text-rose-100 dark:active:border-secondary-700 dark:active:bg-secondary-700/50 dark:active:text-secondary-300">
                                <span>Crafted with</span> ♥ <span>Elysia UI</span>
                            </a>
                            <h2 id="hero-title"
                                class="mb-4 text-4xl font-black text-black lg:text-5xl/[1.12] dark:text-white"> Beautiful UI
                                components build with Tailwind CSS and Alpine JS.</h2>
                            <p id="hero-text" class="mt-4 text-lg text-gray-600">
                                An open-source collection of copy-and-paste components for quickly building application UIs.
                            </p>
                        </div>
                        <div class="flex flex-wrap items-center justify-center gap-2 pt-8 pb-16 sm:gap-3 md:justify-start">
                            <x-button>Getting Started</x-button> <x-button>View All Component</x-button>
                        </div>
                    </div>
                    <div class="flex items-center justify-center">
                        <div class="relative mx-auto w-full max-w-lg">
                            <div
                                class="absolute inset-0 rounded-full bg-linear-to-b from-primary-500 via-elysia-primary to-elysia-hover opacity-40 blur-3xl transition group-hover:scale-95">
                            </div>
                            <img id="img-zoom" src="{{ asset('img/elysia.webp') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white dark:bg-secondary-900 dark:text-secondary-100">
            <div class="container mx-auto xl:max-w-7xl px-4 lg:px-8 pb-8 lg:pb-16">
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 lg:grid-cols-3 xl:gap-8">
                    <div class="relative m-px grow rounded-xl bg-secondary-50 p-6 lg:p-8 xl:p-10 dark:bg-secondary-800">
                        <div
                            class="absolute end-2 top-2 rounded-full bg-secondary-200/50 px-2 py-1 text-xs font-medium text-secondary-950 dark:bg-secondary-400/15 dark:text-secondary-50">
                            Built with V3</div>
                        <div class="relative mb-8 w-12 text-elysia-info">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                                <path fill="#F4A9D9" fill-rule="evenodd"
                                    d="M98.444 35.562 126 62.997 98.444 90.432 70.889 62.997z" clip-rule="evenodd" />
                                <path fill="#F4A9D9" fill-rule="evenodd" d="m29.556 35.562 57.126 56.876H31.571L2 62.997z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <h4 class="font-bold capitalize text-2xl mb-3">Alphine Js</h4>
                        <p class="text-sm leading-relaxed font-medium text-secondary-600 dark:text-secondary-400">Alpine is
                            a rugged, minimal tool for composing behavior directly in your markup. Think of it like jQuery
                            for the modern web</p>
                    </div>
                    <div class="relative m-px grow rounded-xl bg-secondary-50 p-6 lg:p-8 xl:p-10 dark:bg-secondary-800">
                        <div
                            class="absolute end-2 top-2 rounded-full bg-secondary-200/50 px-2 py-1 text-xs font-medium text-secondary-950 dark:bg-secondary-400/15 dark:text-secondary-50">
                            Built with V4</div>
                        <div class="relative mb-8 w-12 text-elysia-info">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128">
                                <path
                                    d="M64.004 25.602c-17.067 0-27.73 8.53-32 25.597 6.398-8.531 13.867-11.73 22.398-9.597 4.871 1.214 8.352 4.746 12.207 8.66C72.883 56.629 80.145 64 96.004 64c17.066 0 27.73-8.531 32-25.602-6.399 8.536-13.867 11.735-22.399 9.602-4.87-1.215-8.347-4.746-12.207-8.66-6.27-6.367-13.53-13.738-29.394-13.738zM32.004 64c-17.066 0-27.73 8.531-32 25.602C6.402 81.066 13.87 77.867 22.402 80c4.871 1.215 8.352 4.746 12.207 8.66 6.274 6.367 13.536 13.738 29.395 13.738 17.066 0 27.73-8.53 32-25.597-6.399 8.531-13.867 11.73-22.399 9.597-4.87-1.214-8.347-4.746-12.207-8.66C55.128 71.371 47.868 64 32.004 64zm0 0"
                                    fill="#F4A9D9" />
                            </svg>
                        </div>
                        <h4 class="font-bold capitalize text-2xl mb-3">Tailwind CSS</h4>
                        <p class="text-sm leading-relaxed font-medium text-secondary-600 dark:text-secondary-400">A
                            utility-first CSS framework packed with classes to rapidly build modern websites without ever
                            leaving your HTML.</p>
                    </div>
                    <div class="relative m-px grow rounded-xl bg-secondary-50 p-6 lg:p-8 xl:p-10 dark:bg-secondary-800">

                        <div class="relative mb-8 w-12 text-elysia-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-12">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                            </svg>

                        </div>
                        <h4 class="font-bold capitalize text-2xl mb-3">Fully Responsive</h4>
                        <p class="text-sm leading-relaxed font-medium text-secondary-600 dark:text-secondary-400">Fully
                            Responsive For Your Mode Size Devices, Our components are carefully crafted to look perfect on
                            any device.Without Breaking Your Design</p>
                    </div>

                    <div class="relative m-px grow rounded-xl bg-secondary-50 p-6 lg:p-8 xl:p-10 dark:bg-secondary-800">

                        <div class="relative mb-8 w-12 text-elysia-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-12">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 17.25v3.375c0 .621-.504 1.125-1.125 1.125h-9.75a1.125 1.125 0 0 1-1.125-1.125V7.875c0-.621.504-1.125 1.125-1.125H6.75a9.06 9.06 0 0 1 1.5.124m7.5 10.376h3.375c.621 0 1.125-.504 1.125-1.125V11.25c0-4.46-3.243-8.161-7.5-8.876a9.06 9.06 0 0 0-1.5-.124H9.375c-.621 0-1.125.504-1.125 1.125v3.5m7.5 10.375H9.375a1.125 1.125 0 0 1-1.125-1.125v-9.25m12 6.625v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H9.75" />
                            </svg>


                        </div>
                        <h4 class="font-bold capitalize text-2xl mb-3">Easy To Use For Your Project</h4>
                        <p class="text-sm leading-relaxed font-medium text-secondary-600 dark:text-secondary-400">Just by
                            copying and pasting you can use the component.</p>
                    </div>

                </div>
            </div>
    </main>
    <footer id="page-footer"
        class="relative flex-none border-t border-secondary-100 bg-secondary-50 
           dark:border-secondary-800 dark:bg-secondary-950 dark:text-secondary-100 overflow-hidden">

        <!-- Gambar di pojok kanan bawah -->
        <div class="absolute bottom-0 right-0 opacity-10 pointer-events-none">
            <img src="{{ asset('img/elysia-realm.webp') }}" alt="Elysia Logo"
                class="max-w-[200px] md:max-w-[300px] lg:max-w-[400px]">
        </div>

        <!-- Konten footer -->
        <div class="container mx-auto xl:max-w-7xl py-16 lg:py-32 px-4 lg:px-8 relative z-10">
            <div class="grid grid-cols-2 gap-12 md:grid-cols-3 md:gap-6 lg:gap-10">
                <div class="space-y-6">
                    <h4 class="font-medium tracking-wider text-secondary-400 uppercase dark:text-secondary-500 text-sm">
                        Elysia UI</h4>
                    <nav class="flex flex-col items-start gap-3 text-sm">
                        <a class="font-medium text-secondary-600 hover:text-secondary-500 dark:text-secondary-400"
                            dark:hover:text-secondary-50" href="/">Introduction</a>
                        <a class="font-medium text-secondary-600 hover:text-secondary-500 dark:text-secondary-400"
                            dark:hover:text-secondary-50" href="/">Getting Started</a>
                        <a class="font-medium text-secondary-600 hover:text-secondary-500 dark:text-secondary-400"
                            dark:hover:text-secondary-50" href="/">Components</a>
                        <a class="font-medium text-secondary-600 hover:text-secondary-500 dark:text-secondary-400"
                            dark:hover:text-secondary-50" href="/">License</a>
                        <a class="font-medium text-secondary-600 hover:text-secondary-500 dark:text-secondary-400"
                            dark:hover:text-secondary-50" href="/">Privacy Policy</a>
                        <a class="font-medium text-secondary-600 hover:text-secondary-500 dark:text-secondary-400"
                            dark:hover:text-secondary-50" href="/">Term Of Service</a>
                    </nav>
                </div>
                <div class="space-y-6">
                    <h4 class="font-medium tracking-wider text-secondary-400 uppercase dark:text-secondary-500 text-sm">More
                        Project</h4>
                    <nav class="flex flex-col items-start gap-3 text-sm">
                        <a class="font-medium text-secondary-600 hover:text-secondary-500 dark:text-secondary-500"
                            dark:hover:text-secondary-50" href="#">Coming Soon</a>
                    </nav>
                </div>
                <div class="col-span-2 space-y-6 md:col-span-1">
                    <h4 class="text-xs font-medium tracking-wider text-secondary-400 uppercase dark:text-secondary-500">More
                        Info ?</h4>
                    <div class="space-y-4">
                        <p class="text-sm leading-relaxed text-secondary-700 dark:text-secondary-400"> Subscribe to our
                            elysia ui newsletter and we will notify you about all the new Alpine components as they are made
                            available.</p>
                        <div class="relative" id="subscribe">
                            <form class="space-y-3">
                                <div class="relative flex gap-1.5">
                                    <div class="relative grow">
                                        <input
                                            class="block w-full rounded-lg border border-secondary-200 placeholder:text-secondary-500 focus:border-primary-500 focus:ring-1 focus:ring-elysia-hover dark:border-secondary-700 dark:bg-secondary-900/10 dark:focus:border-primary-500 px-2.5 py-2 text-sm leading-5 absolute inset-0 z-2 outline-none"
                                            type="text" name="ui-color" tabindex="-1" value="" placeholder="Your E-mail">
                                    </div>
                                    <button type="submit"
                                        class="group inline-flex items-center justify-center gap-2 rounded-lg border border-elysia-primary bg-elysia-primary font-semibold text-elysia-dark hover:border-elysia-hiver hover:bg-elysia-hover hover:text-white focus:ring-secondary-500/50 active:border-secondary-700 active:bg-secondary-700 dark:border-secondary-600/50 dark:bg-secondary-500/50 dark:ring-secondary-600/50 dark:hover:border-secondary-600 dark:hover:bg-secondary-600/75 dark:active:border-secondary-600/50 dark:active:bg-secondary-600/50 focus:ring-2 focus:outline-hidden min-w-[1.875rem] px-1.5 py-2 text-sm leading-5 sm:px-2 flex-none"><span
                                            class="px-1">Subscribe!</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-10 flex flex-col gap-6 rounded-lg bg-secondary-100 p-4 text-center text-sm md:-mx-4 md:flex-row-reverse md:justify-between md:gap-0 md:text-left dark:bg-secondary-800/35"><div class="flex items-center justify-center gap-1 font-semibold text-secondary-500 dark:text-secondary-400"><span>Crafted With</span>❤<span> by <a href="/" class="transition font-medium text-secondary-700 underline decoration-secondary-500/50 underline-offset-2 hover:text-black dark:text-secondary-300 dark:decoration-secondary-400/50 dark:hover:text-white">Elysia Ui</a></div><div class="text-secondary-700 dark:text-secondary-300"><span class="font-semibold">Elysia UI</span> © 2025</div>
        </div>
            <div class="flex items-center justify-center gap-2 pt-10 font-medium"><span class="text-sm">Designed with</span><a href="/" class="group flex items-center gap-1">❤</span></a></div>
    </footer>
@endsection
