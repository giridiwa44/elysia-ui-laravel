@extends('layouts.app')

@section('content')
    <x-navbar />
    <main class="grow bg-white dark:bg-secondary-900 pt-[4.5rem]">
        <div class="bg-white dark:bg-secondary-900 hidden"></div>
        <div class="relative overflow-hidden bg-white dark:bg-secondary-900 dark:text-secondary-100">
            <div class="container mx-auto xl:max-w-7xl py-16 lg:py-32 px-4 lg:px-8">
                <div class="grid grid-cols-1 items-center text-center md:grid-cols-2 md:gap-16 md:text-left">
                    <div>
                        <div>
                            <a href="/"
                                class="group mb-4 inline-flex items-center gap-1 rounded-lg bg-secondary-100 px-2 py-1.5 text-sm leading-4 font-semibold text-secondary-700 transition-all ease-out hover:bg-rose-100 hover:text-rose-700 active:border-secondary-200 active:bg-secondary-200/50 active:text-secondary-700 dark:border-secondary-700 dark:bg-secondary-700/25 dark:text-secondary-300 dark:hover:border-rose-900 dark:hover:bg-rose-800 dark:hover:text-rose-100 dark:active:border-secondary-700 dark:active:bg-secondary-700/50 dark:active:text-secondary-300">
                                <span>Crafted with</span> ♥ <span>Elysia UI</span>
                            </a>
                            <h2 class="mb-4 text-4xl font-black text-black lg:text-5xl/[1.12] dark:text-white"> Beautiful UI
                                components build with Tailwind CSS and Alpine JS.</h2>
                            <p class="mt-4 text-lg text-gray-600">
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
                            <img src="{{ asset('img/elysia.webp') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white dark:bg-secondary-900 dark:text-secondary-100">
            <div class="container mx-auto xl:max-w-7xl px-4 lg:px-8 pb-8 lg:pb-16">
                <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-6 lg:grid-cols-3 xl:gap-8">
                    <div
                        class="group relative flex flex-col overflow-hidden rounded-xl bg-secondary-50 before:absolute before:-top-full before:-right-full before:-bottom-full before:-left-full before:-m-96 before:block before:animate-spin-slow before:bg-[conic-gradient(#42C5B7,transparent,transparent)] before:opacity-0 before:content-[''] hover:before:opacity-75 dark:bg-secondary-800">
                        <div class="relative m-px grow rounded-xl bg-secondary-50 p-6 lg:p-8 xl:p-10 dark:bg-secondary-800">
                            <div
                                class="absolute end-2 top-2 rounded-full bg-secondary-200/50 px-2 py-1 text-xs font-medium text-secondary-950 dark:bg-secondary-400/15 dark:text-secondary-50">
                                Built with v3 </div>
                            <div class="relative mb-8 w-12 text-primary-500"><svg viewBox="0 0 45.116 22.806"
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="logo-alpine absolute right-0 bottom-0 inline-block size-10 translate-x-2 translate-y-2 opacity-25 transition group-hover:translate-x-0 group-hover:translate-y-0 group-hover:opacity-0">
                                    <g opacity=".8">
                                        <path d="M33.71 0 11.207 22.693l.113.113h22.586l11.21-11.304z" fill="#77C1D2">
                                        </path>
                                        <path d="m11.405 0 22.578 22.769-.039.037H11.209L0 11.502z" fill="currentColor">
                                        </path>
                                    </g>
                                </svg><svg viewBox="0 0 45.116 22.806" xmlns="http://www.w3.org/2000/svg"
                                    class="logo-alpine relative inline-block size-12 transition group-hover:translate-x-1 group-hover:translate-y-1">
                                    <g opacity=".8">
                                        <path d="M33.71 0 11.207 22.693l.113.113h22.586l11.21-11.304z" fill="#77C1D2">
                                        </path>
                                        <path d="m11.405 0 22.578 22.769-.039.037H11.209L0 11.502z" fill="currentColor">
                                        </path>
                                    </g>
                                </svg></div>
                            <h4 class="mb-3 text-xl font-bold">Alphine JS</h4>
                            <p class="text-sm leading-relaxed font-medium text-secondary-600 dark:text-secondary-400"> A
                                rugged, minimal tool for composing behavior directly in your HTML markup. Think of it like
                                jQuery for the modern web. </p>
                        </div>
                    </div>
                    <div class="relative m-px grow rounded-xl bg-secondary-50 p-6 lg:p-8 xl:p-10 dark:bg-secondary-800">
                        <div
                            class="absolute end-2 top-2 rounded-full bg-secondary-200/50 px-2 py-1 text-xs font-medium text-secondary-950 dark:bg-secondary-400/15 dark:text-secondary-50">
                            Built with v3 </div>
                        <div class="relative mb-8 w-12 text-primary-500"><svg viewBox="0 0 45.116 22.806"
                                xmlns="http://www.w3.org/2000/svg"
                                class="logo-alpine absolute right-0 bottom-0 inline-block size-10 translate-x-2 translate-y-2 opacity-25 transition group-hover:translate-x-0 group-hover:translate-y-0 group-hover:opacity-0">
                                <g opacity=".8">
                                    <path d="M33.71 0 11.207 22.693l.113.113h22.586l11.21-11.304z" fill="#77C1D2">
                                    </path>
                                    <path d="m11.405 0 22.578 22.769-.039.037H11.209L0 11.502z" fill="currentColor">
                                    </path>
                                </g>
                            </svg><svg viewBox="0 0 45.116 22.806" xmlns="http://www.w3.org/2000/svg"
                                class="logo-alpine relative inline-block size-12 transition group-hover:translate-x-1 group-hover:translate-y-1">
                                <g opacity=".8">
                                    <path d="M33.71 0 11.207 22.693l.113.113h22.586l11.21-11.304z" fill="#77C1D2">
                                    </path>
                                    <path d="m11.405 0 22.578 22.769-.039.037H11.209L0 11.502z" fill="currentColor">
                                    </path>
                                </g>
                            </svg></div>
                        <h4 class="mb-3 text-xl font-bold">Tailwind Css</h4>
                        <p class="text-sm leading-relaxed font-medium text-secondary-600 dark:text-secondary-400"> A
                            rugged, minimal tool for composing behavior directly in your HTML markup. Think of it like
                            jQuery for the modern web. </p>
                    </div>
                </div>
            </div>
    </main>
@endsection
