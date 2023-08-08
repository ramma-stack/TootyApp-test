<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite('resources/css/app.css')
</head>

<body>
    {{-- start main  --}}
    <main class="w-full h-screen flex gap-5 overflow-x-hidden bg-gray-100 font-rabar">

        {{-- start sidenav --}}
        <section class="h-screen pt-7 pb-10 bg-gray-900">
            <div class="px-6 flex flex-col items-center mb-6">
                <p class="flex-none text-xl text-indigo-600 font-bold uppercase">tooty</p>
                <p class="flex-none text-[8px] font-medium text-gray-400 uppercase">Testing</p>
            </div>
            <nav class="w-full flex flex-col flex-wrap">
                <ul class="space-y-2.5">
                    <li>
                        <a href="#"
                            class="flex flex-col items-center gap-1 gap-x-3.5 py-2.5 px-2.5 bg-gray-100 text-xs font-medium text-slate-700 hover:bg-gray-800 dark:bg-gray-900 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w-6 h-6 text-gray-600">
                                <path fill-rule="evenodd"
                                    d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                                    clip-rule="evenodd" />
                            </svg>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex flex-col items-center gap-1 gap-x-3.5 py-2.5 px-2.5 bg-gray-100 text-xs font-medium text-slate-700 hover:bg-gray-800 dark:bg-slate-700 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w-6 h-6 text-gray-600">
                                <path
                                    d="M14.916 2.404a.75.75 0 01-.32 1.012l-.596.31V17a1 1 0 01-1 1h-2.26a.75.75 0 01-.75-.75v-3.5a.75.75 0 00-.75-.75H6.75a.75.75 0 00-.75.75v3.5a.75.75 0 01-.75.75h-3.5a.75.75 0 010-1.5H2V9.957a.75.75 0 01-.596-1.372L2 8.275V5.75a.75.75 0 011.5 0v1.745l10.404-5.41a.75.75 0 011.012.32zM15.861 8.57a.75.75 0 01.736-.025l1.999 1.04A.75.75 0 0118 10.957V16.5h.25a.75.75 0 110 1.5h-2a.75.75 0 01-.75-.75V9.21a.75.75 0 01.361-.64z" />
                            </svg>
                            Paimanga
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex flex-col items-center gap-1 gap-x-3.5 py-2.5 px-2.5 bg-gray-100 text-xs font-medium text-slate-700 hover:bg-gray-800 dark:bg-gray-900 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                class="w-6 h-6 text-gray-600">
                                <path fill-rule="evenodd"
                                    d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm6.39-2.908a.75.75 0 01.766.027l3.5 2.25a.75.75 0 010 1.262l-3.5 2.25A.75.75 0 018 12.25v-4.5a.75.75 0 01.39-.658z"
                                    clip-rule="evenodd" />
                            </svg>
                            Course
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex flex-col items-center gap-1 gap-x-3.5 py-2.5 px-2.5 bg-gray-100 text-xs font-medium text-slate-700 hover:bg-gray-800 dark:bg-gray-900 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6 text-gray-600">
                                <path fill-rule="evenodd"
                                    d="M9 2.25a.75.75 0 01.75.75v1.506a49.38 49.38 0 015.343.371.75.75 0 11-.186 1.489c-.66-.083-1.323-.151-1.99-.206a18.67 18.67 0 01-2.969 6.323c.317.384.65.753.998 1.107a.75.75 0 11-1.07 1.052A18.902 18.902 0 019 13.687a18.823 18.823 0 01-5.656 4.482.75.75 0 11-.688-1.333 17.323 17.323 0 005.396-4.353A18.72 18.72 0 015.89 8.598a.75.75 0 011.388-.568A17.21 17.21 0 009 11.224a17.17 17.17 0 002.391-5.165 48.038 48.038 0 00-8.298.307.75.75 0 01-.186-1.489 49.159 49.159 0 015.343-.371V3A.75.75 0 019 2.25zM15.75 9a.75.75 0 01.68.433l5.25 11.25a.75.75 0 01-1.36.634l-1.198-2.567h-6.744l-1.198 2.567a.75.75 0 01-1.36-.634l5.25-11.25A.75.75 0 0115.75 9zm-2.672 8.25h5.344l-2.672-5.726-2.672 5.726z"
                                    clip-rule="evenodd" />
                            </svg>
                            Dictionary
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex flex-col items-center gap-1 gap-x-3.5 py-2.5 px-2.5 bg-gray-100 text-xs font-medium text-slate-700 hover:bg-gray-800 dark:bg-gray-900 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6 text-gray-600">
                                <path fill-rule="evenodd"
                                    d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                    clip-rule="evenodd" />
                            </svg>
                            Users
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex flex-col items-center gap-1 gap-x-3.5 py-2.5 px-2.5 bg-gray-100 text-xs font-medium text-slate-700 hover:bg-gray-800 dark:bg-gray-900 dark:text-gray-200">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6 text-blue-500">
                                <path
                                    d="M21.721 12.752a9.711 9.711 0 00-.945-5.003 12.754 12.754 0 01-4.339 2.708 18.991 18.991 0 01-.214 4.772 17.165 17.165 0 005.498-2.477zM14.634 15.55a17.324 17.324 0 00.332-4.647c-.952.227-1.945.347-2.966.347-1.021 0-2.014-.12-2.966-.347a17.515 17.515 0 00.332 4.647 17.385 17.385 0 005.268 0zM9.772 17.119a18.963 18.963 0 004.456 0A17.182 17.182 0 0112 21.724a17.18 17.18 0 01-2.228-4.605zM7.777 15.23a18.87 18.87 0 01-.214-4.774 12.753 12.753 0 01-4.34-2.708 9.711 9.711 0 00-.944 5.004 17.165 17.165 0 005.498 2.477zM21.356 14.752a9.765 9.765 0 01-7.478 6.817 18.64 18.64 0 001.988-4.718 18.627 18.627 0 005.49-2.098zM2.644 14.752c1.682.971 3.53 1.688 5.49 2.099a18.64 18.64 0 001.988 4.718 9.765 9.765 0 01-7.478-6.816zM13.878 2.43a9.755 9.755 0 016.116 3.986 11.267 11.267 0 01-3.746 2.504 18.63 18.63 0 00-2.37-6.49zM12 2.276a17.152 17.152 0 012.805 7.121c-.897.23-1.837.353-2.805.353-.968 0-1.908-.122-2.805-.353A17.151 17.151 0 0112 2.276zM10.122 2.43a18.629 18.629 0 00-2.37 6.49 11.266 11.266 0 01-3.746-2.504 9.754 9.754 0 016.116-3.985z" />
                            </svg>
                            Language
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="relative flex flex-col items-center gap-1 gap-x-3.5 py-2.5 px-2.5 bg-gray-100 text-xs font-medium text-slate-700 hover:bg-gray-800 dark:bg-gray-900 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="relative w-6 h-6 text-gray-600">
                                <path
                                    d="M4.913 2.658c2.075-.27 4.19-.408 6.337-.408 2.147 0 4.262.139 6.337.408 1.922.25 3.291 1.861 3.405 3.727a4.403 4.403 0 00-1.032-.211 50.89 50.89 0 00-8.42 0c-2.358.196-4.04 2.19-4.04 4.434v4.286a4.47 4.47 0 002.433 3.984L7.28 21.53A.75.75 0 016 21v-4.03a48.527 48.527 0 01-1.087-.128C2.905 16.58 1.5 14.833 1.5 12.862V6.638c0-1.97 1.405-3.718 3.413-3.979z" />
                                <path
                                    d="M15.75 7.5c-1.376 0-2.739.057-4.086.169C10.124 7.797 9 9.103 9 10.609v4.285c0 1.507 1.128 2.814 2.67 2.94 1.243.102 2.5.157 3.768.165l2.782 2.781a.75.75 0 001.28-.53v-2.39l.33-.026c1.542-.125 2.67-1.433 2.67-2.94v-4.286c0-1.505-1.125-2.811-2.664-2.94A49.392 49.392 0 0015.75 7.5z" />
                                <span
                                    class="absolute top-1/5 right-1/4 block rounded-full px-1 bg-red-400/70 text-white text-xs font-bold">
                                    23
                                </span>
                            </svg>
                            Comunity
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex flex-col items-center gap-1 gap-x-3.5 py-2.5 px-2.5 bg-gray-100 text-xs font-medium text-slate-700 hover:bg-gray-800 dark:bg-gray-900 dark:text-gray-400">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="w-6 h-6 text-gray-600">
                                <path
                                    d="M18.75 12.75h1.5a.75.75 0 000-1.5h-1.5a.75.75 0 000 1.5zM12 6a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 0112 6zM12 18a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 0112 18zM3.75 6.75h1.5a.75.75 0 100-1.5h-1.5a.75.75 0 000 1.5zM5.25 18.75h-1.5a.75.75 0 010-1.5h1.5a.75.75 0 010 1.5zM3 12a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 013 12zM9 3.75a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5zM12.75 12a2.25 2.25 0 114.5 0 2.25 2.25 0 01-4.5 0zM9 15.75a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" />
                            </svg>
                            General
                        </a>
                    </li>
                </ul>
            </nav>
        </section>
        {{-- end sidenav --}}

        {{-- start central section --}}
        <section class="py-16 px-8 w-full flex gap-10">

            {{-- Left side --}}
            <div class="flex flex-col gap-5">

                {{-- start importants tasks --}}
                <div class="flex justify-between gap-2">
                    {{-- start left side task --}}
                    <div class="flex gap-4">
                        <button type="button"
                            class="py-3 px-4 w-40 inline-flex justify-center items-center gap-2 rounded-xl shadow-lg bg-gray-900 border border-transparent font-semibold text-gray-100 hover:text-white hover:bg-gray-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                            ئاستی فێرخوازان
                        </button>
                        <button type="button"
                            class="py-3 px-4 w-40 inline-flex justify-center items-center gap-2 rounded-xl shadow-lg bg-gray-200 border border-transparent font-semibold text-gray-400 hover:text-white hover:bg-gray-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                            پۆلەکان
                        </button>
                        <button type="button"
                            class="py-3 px-4 w-40 inline-flex justify-center items-center gap-2 rounded-xl shadow-lg bg-gray-200 border border-transparent font-semibold text-gray-400 hover:text-white hover:bg-gray-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                            بڕوانامە
                        </button>
                        <button type="button"
                            class="py-3 px-4 w-40 inline-flex justify-center items-center gap-2 rounded-xl shadow-lg bg-gray-200 border border-transparent font-semibold text-gray-400 hover:text-white hover:bg-gray-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                            داهات
                        </button>
                    </div>
                    {{-- end left side task --}}
                </div>
                {{-- end importants tasks --}}

                {{-- start classes btn --}}
                <div class="flex justify-between gap-2">
                    {{-- start left side btn --}}
                    <div class="flex gap-2">
                        <button type="button"
                            class="py-2 px-2.5 inline-flex justify-center items-center gap-2 rounded-full border border-orange-500 font-semibold text-gray-500 hover:text-white hover:bg-orange-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-orange-500 focus:ring-offset-2 transition-all text-sm">
                            All Levels
                        </button>
                        <button type="button"
                            class="py-2 px-2.5 inline-flex justify-center items-center gap-2 rounded-full border border-orange-500 font-semibold bg-orange-500 text-gray-100 hover:text-white hover:bg-orange-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-orange-500 focus:ring-offset-2 transition-all text-sm">
                            A1
                        </button>
                        <button type="button"
                            class="py-2 px-2.5 inline-flex justify-center items-center gap-2 rounded-full border border-orange-500 font-semibold text-gray-500 hover:text-white hover:bg-orange-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-orange-500 focus:ring-offset-2 transition-all text-sm">
                            A2
                        </button>
                        <button type="button"
                            class="py-2 px-2.5 inline-flex justify-center items-center gap-2 rounded-full border border-orange-500 font-semibold text-gray-500 hover:text-white hover:bg-orange-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-orange-500 focus:ring-offset-2 transition-all text-sm">
                            B1
                        </button>
                        <button type="button"
                            class="py-2 px-2.5 inline-flex justify-center items-center gap-2 rounded-full border border-orange-500 font-semibold text-gray-500 hover:text-white hover:bg-orange-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-orange-500 focus:ring-offset-2 transition-all text-sm">
                            B2
                        </button>
                        <button type="button"
                            class="py-2 px-2.5 inline-flex justify-center items-center gap-2 rounded-full border border-orange-500 font-semibold text-gray-500 hover:text-white hover:bg-orange-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-orange-500 focus:ring-offset-2 transition-all text-sm">
                            C1
                        </button>
                        <button type="button"
                            class="py-2 px-2.5 inline-flex justify-center items-center gap-2 rounded-full border border-orange-500 font-semibold text-gray-500 hover:text-white hover:bg-orange-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-orange-500 focus:ring-offset-2 transition-all text-sm">
                            C2
                        </button>
                    </div>
                    {{-- end left side btn --}}
                </div>
                {{-- end classes btn --}}

                {{-- start search filde --}}
                <div class="flex justify-between gap-2">
                    {{-- start search --}}
                    <div class="w-full rounded-lg">
                        <div class="relative">
                            <input
                                class="appearance-none border-2 pl-12 font-semibold placeholder:text-gray-500 bg-gray-200 border-gray-200 hover:border-gray-200 transition-colors rounded-lg w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:ring-orange-600 focus:border-orange-600 focus:shadow-outline"
                                id="username" type="text" placeholder="Search" />
                            <div class="absolute right-0 inset-y-0 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="-ml-1 mr-3 h-5 w-5 text-gray-400 hover:text-gray-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </div>
                            <div class="absolute left-0 inset-y-0 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" class="h-6 w-6 ml-3 text-gray-600">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    {{-- end search --}}
                </div>
                {{-- end search filde --}}

                <!-- Table Section -->
                <div class="w-auto">
                    <!-- Card -->
                    <div class="flex flex-col">
                        <div class="-m-1.5 overflow-x-auto">
                            <div class="p-1.5 min-w-full inline-block align-middle">
                                <div class="overflow-hidden">

                                    <!-- Table -->
                                    <table class="min-w-full">
                                        <thead class="bg-transparent">
                                            <tr>
                                                <th scope="col" class="pl-6 lg:pl-3 xl:pl-0 pr-6 pb-5 text-left">
                                                    <div class="flex items-center justify-center gap-x-2">
                                                        <span
                                                            class="text-base font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-400">
                                                            ناو
                                                        </span>
                                                    </div>
                                                </th>
                                                <th scope="col" class="px-6 pb-5 text-left">
                                                    <div class="flex items-center justify-center gap-x-2">
                                                        <span
                                                            class="text-base font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-400">
                                                            ئاست
                                                        </span>
                                                    </div>
                                                </th>
                                                <th scope="col" class="px-6 pb-5 text-left">
                                                    <div class="flex items-center justify-center gap-x-2">
                                                        <span
                                                            class="text-base font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-400">
                                                            پۆل
                                                        </span>
                                                    </div>
                                                </th>
                                                <th scope="col" class="px-3 py-3 text-right"></th>
                                                <th scope="col" class="px-3 py-3 text-right"></th>
                                                <th scope="col" class="px-3 py-3 text-right"></th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td class="h-px w-72 whitespace-nowrap">
                                                    <div class="pl-6 lg:pl-3 xl:pl-0 pr-6 py-3">
                                                        <div class="flex items-center gap-x-3">
                                                            <img class="inline-block h-12 w-12 rounded-full"
                                                                src="https://flowbite.com/docs/images/people/profile-picture-4.jpg"
                                                                alt="Image Description">
                                                            <div class="grow">
                                                                <span class="text-lg font-bold text-gray-800">
                                                                    Christina Bersh ●
                                                                </span>
                                                                <span class="block text-sm font-bold text-gray-500">
                                                                    christina@site.com
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="h-px w-20 whitespace-nowrap">
                                                    <div class="px-3 py-3 flex justify-center">
                                                        <p
                                                            class="py-1.5 px-4 w-24 inline-flex justify-center items-center gap-2 rounded-xl bg-gray-200 border border-transparent font-semibold text-gray-500 text-sm">
                                                            A1
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="h-px w-20 whitespace-nowrap">
                                                    <div class="px-3 py-3 flex justify-center">
                                                        <select
                                                            class="py-1 px-4 inline-flex justify-center items-center gap-2 rounded-xl bg-gray-200 border border-transparent font-semibold text-gray-500 text-sm">
                                                            <option>G1</option>
                                                            <option>G2</option>
                                                            <option>G3</option>
                                                            <option>G4</option>
                                                            <option>G5</option>
                                                            <option>G6</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td class="h-px w-10 whitespace-nowrap">
                                                    <div class="px-3 py-3 flex justify-center">
                                                        <button
                                                            class="py-1.5 px-4 inline-flex justify-center items-center gap-2 rounded-xl border border-transparent font-semibold text-gray-400 text-sm">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 24 24" fill="currentColor"
                                                                class="w-6 h-6">
                                                                <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </td>
                                                <td class="h-px w-20 whitespace-nowrap">
                                                    <div class="px-3 py-3 flex justify-center">
                                                        <button
                                                            class="py-1.5 px-4 inline-flex justify-center items-center gap-2 rounded-xl border border-transparent font-semibold text-gray-400 text-sm">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 24 24" fill="currentColor"
                                                                class="w-6 h-6">
                                                                <path fill-rule="evenodd"
                                                                    d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="h-px w-72 whitespace-nowrap">
                                                    <div class="pl-6 lg:pl-3 xl:pl-0 pr-6 py-3">
                                                        <div class="flex items-center gap-x-3">
                                                            <img class="inline-block h-12 w-12 rounded-full"
                                                                src="https://images.unsplash.com/photo-1531927557220-a9e23c1e4794?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                                                                alt="Image Description">
                                                            <div class="grow">
                                                                <span class="text-lg font-bold text-gray-800">
                                                                    Christina Bersh ●
                                                                </span>
                                                                <span class="block text-sm font-bold text-gray-500">
                                                                    christina@site.com
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="h-px w-20 whitespace-nowrap">
                                                    <div class="px-3 py-3 flex justify-center">
                                                        <p
                                                            class="py-1.5 px-4 w-24 inline-flex justify-center items-center gap-2 rounded-xl bg-gray-200 border border-transparent font-semibold text-gray-500 text-sm">
                                                            A1
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="h-px w-20 whitespace-nowrap">
                                                    <div class="px-3 py-3 flex justify-center">
                                                        <select
                                                            class="py-1 px-4 inline-flex justify-center items-center gap-2 rounded-xl bg-gray-200 border border-transparent font-semibold text-gray-500 text-sm">
                                                            <option>G1</option>
                                                            <option>G2</option>
                                                            <option>G3</option>
                                                            <option>G4</option>
                                                            <option>G5</option>
                                                            <option>G6</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td class="h-px w-10 whitespace-nowrap">
                                                    <div class="px-3 py-3 flex justify-center">
                                                        <button
                                                            class="py-1.5 px-4 inline-flex justify-center items-center gap-2 rounded-xl border border-transparent font-semibold text-gray-400 text-sm">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 24 24" fill="currentColor"
                                                                class="w-6 h-6">
                                                                <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </td>
                                                <td class="h-px w-20 whitespace-nowrap">
                                                    <div class="px-3 py-3 flex justify-center">
                                                        <button
                                                            class="py-1.5 px-4 inline-flex justify-center items-center gap-2 rounded-xl border border-transparent font-semibold text-gray-400 text-sm">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 24 24" fill="currentColor"
                                                                class="w-6 h-6">
                                                                <path fill-rule="evenodd"
                                                                    d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="h-px w-72 whitespace-nowrap">
                                                    <div class="pl-6 lg:pl-3 xl:pl-0 pr-6 py-3">
                                                        <div class="flex items-center gap-x-3">
                                                            <img class="inline-block h-12 w-12 rounded-full"
                                                                src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                                                alt="Image Description">
                                                            <div class="grow">
                                                                <span class="text-lg font-bold text-gray-800">
                                                                    Christina Bersh ●
                                                                </span>
                                                                <span class="block text-sm font-bold text-gray-500">
                                                                    christina@site.com
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="h-px w-20 whitespace-nowrap">
                                                    <div class="px-3 py-3 flex justify-center">
                                                        <p
                                                            class="py-1.5 px-4 w-24 inline-flex justify-center items-center gap-2 rounded-xl bg-gray-200 border border-transparent font-semibold text-gray-500 text-sm">
                                                            A1
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="h-px w-20 whitespace-nowrap">
                                                    <div class="px-3 py-3 flex justify-center">
                                                        <select
                                                            class="py-1 px-4 inline-flex justify-center items-center gap-2 rounded-xl bg-gray-200 border border-transparent font-semibold text-gray-500 text-sm">
                                                            <option>G1</option>
                                                            <option>G2</option>
                                                            <option>G3</option>
                                                            <option>G4</option>
                                                            <option>G5</option>
                                                            <option>G6</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td class="h-px w-10 whitespace-nowrap">
                                                    <div class="px-3 py-3 flex justify-center">
                                                        <button
                                                            class="py-1.5 px-4 inline-flex justify-center items-center gap-2 rounded-xl border border-transparent font-semibold text-gray-400 text-sm">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 24 24" fill="currentColor"
                                                                class="w-6 h-6">
                                                                <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </td>
                                                <td class="h-px w-20 whitespace-nowrap">
                                                    <div class="px-3 py-3 flex justify-center">
                                                        <button
                                                            class="py-1.5 px-4 inline-flex justify-center items-center gap-2 rounded-xl border border-transparent font-semibold text-gray-400 text-sm">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 24 24" fill="currentColor"
                                                                class="w-6 h-6">
                                                                <path fill-rule="evenodd"
                                                                    d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="h-px w-72 whitespace-nowrap">
                                                    <div class="pl-6 lg:pl-3 xl:pl-0 pr-6 py-3">
                                                        <div class="flex items-center gap-x-3">
                                                            <img class="inline-block h-12 w-12 rounded-full"
                                                                src="https://images.unsplash.com/photo-1531927557220-a9e23c1e4794?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                                                                alt="Image Description">
                                                            <div class="grow">
                                                                <span class="text-lg font-bold text-gray-800">
                                                                    Christina Bersh ●
                                                                </span>
                                                                <span class="block text-sm font-bold text-gray-500">
                                                                    christina@site.com
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="h-px w-20 whitespace-nowrap">
                                                    <div class="px-3 py-3 flex justify-center">
                                                        <p
                                                            class="py-1.5 px-4 w-24 inline-flex justify-center items-center gap-2 rounded-xl bg-gray-200 border border-transparent font-semibold text-gray-500 text-sm">
                                                            A1
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="h-px w-20 whitespace-nowrap">
                                                    <div class="px-3 py-3 flex justify-center">
                                                        <select
                                                            class="py-1 px-4 inline-flex justify-center items-center gap-2 rounded-xl bg-gray-200 border border-transparent font-semibold text-gray-500 text-sm">
                                                            <option>G1</option>
                                                            <option>G2</option>
                                                            <option>G3</option>
                                                            <option>G4</option>
                                                            <option>G5</option>
                                                            <option>G6</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td class="h-px w-10 whitespace-nowrap">
                                                    <div class="px-3 py-3 flex justify-center">
                                                        <button
                                                            class="py-1.5 px-4 inline-flex justify-center items-center gap-2 rounded-xl border border-transparent font-semibold text-gray-400 text-sm">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 24 24" fill="currentColor"
                                                                class="w-6 h-6">
                                                                <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </td>
                                                <td class="h-px w-20 whitespace-nowrap">
                                                    <div class="px-3 py-3 flex justify-center">
                                                        <button
                                                            class="py-1.5 px-4 inline-flex justify-center items-center gap-2 rounded-xl border border-transparent font-semibold text-gray-400 text-sm">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 24 24" fill="currentColor"
                                                                class="w-6 h-6">
                                                                <path fill-rule="evenodd"
                                                                    d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- End Table -->

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
                <!-- End Table Section -->

            </div>
            {{-- end Left section --}}

        </section>
        {{-- end central section --}}

    </main>
    {{-- end main --}}

</body>

</html>
