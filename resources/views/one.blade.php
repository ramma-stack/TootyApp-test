@extends('layouts.layout')

@section('content')
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
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                class="h-6 w-6 ml-3 text-gray-600">
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
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor" class="w-6 h-6">
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
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor" class="w-6 h-6">
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
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor" class="w-6 h-6">
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
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor" class="w-6 h-6">
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
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor" class="w-6 h-6">
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
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor" class="w-6 h-6">
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
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor" class="w-6 h-6">
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
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor" class="w-6 h-6">
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
@endsection
