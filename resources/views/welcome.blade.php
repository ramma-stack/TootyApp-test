@extends('layouts.layout')

@section('content')
    <section x-data="{ isActive: false }" class="w-full grid grid-cols-8 gap-10 py-16 px-8">

        {{-- Left side --}}
        <div :class="{ 'col-span-7': !isActive, 'col-span-6': isActive }" class="w-full col-span-7 flex flex-col gap-5">

            {{-- start importants tasks --}}
            <div class="flex justify-between gap-2">
                {{-- start left side task --}}
                <div class="flex gap-4">
                    <button type="button"
                        class="py-3 px-4 w-40 inline-flex justify-center items-center gap-2 rounded-xl shadow-lg bg-gray-200 border border-transparent font-semibold text-gray-400 hover:text-white hover:bg-gray-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                        ئاستی فێرخوازان
                    </button>
                    <button type="button"
                        class="py-3 px-4 w-40 inline-flex justify-center items-center gap-2 rounded-xl shadow-lg bg-gray-900 border border-transparent font-semibold text-gray-100 hover:text-white hover:bg-gray-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
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
                        All Classes
                    </button>
                    <button type="button"
                        class="py-2 px-2.5 inline-flex justify-center items-center gap-2 rounded-full border border-orange-500 font-semibold bg-orange-500 text-gray-100 hover:text-white hover:bg-orange-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-orange-500 focus:ring-offset-2 transition-all text-sm">
                        G1
                    </button>
                    <button type="button"
                        class="py-2 px-2.5 inline-flex justify-center items-center gap-2 rounded-full border border-orange-500 font-semibold text-gray-500 hover:text-white hover:bg-orange-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-orange-500 focus:ring-offset-2 transition-all text-sm">
                        G2
                    </button>
                    <button type="button"
                        class="py-2 px-2.5 inline-flex justify-center items-center gap-2 rounded-full border border-orange-500 font-semibold text-gray-500 hover:text-white hover:bg-orange-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-orange-500 focus:ring-offset-2 transition-all text-sm">
                        G3
                    </button>
                    <button type="button"
                        class="py-2 px-2.5 inline-flex justify-center items-center gap-2 rounded-full border border-orange-500 font-semibold text-gray-500 hover:text-white hover:bg-orange-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-orange-500 focus:ring-offset-2 transition-all text-sm">
                        G4
                    </button>
                    <button type="button"
                        class="py-2 px-2.5 inline-flex justify-center items-center gap-2 rounded-full border border-orange-500 font-semibold text-gray-500 hover:text-white hover:bg-orange-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-orange-500 focus:ring-offset-2 transition-all text-sm">
                        G5
                    </button>
                    <button type="button"
                        class="py-2 px-2.5 inline-flex justify-center items-center gap-2 rounded-full border border-orange-500 font-semibold text-gray-500 hover:text-white hover:bg-orange-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-orange-500 focus:ring-offset-2 transition-all text-sm">
                        G6
                    </button>
                </div>
                {{-- end left side btn --}}
            </div>
            {{-- end classes btn --}}

            {{-- start information --}}
            <div class="flex justify-between gap-2">
                {{-- start info --}}
                <div class="flex gap-10 px-5 w-full bg-gray-200 rounded-xl">
                    <h3
                        class="py-3 px-4 inline-flex justify-center items-center gap-1 border border-transparent font-semibold text-gray-500 text-base">
                        Class: <span>G1</span>
                    </h3>
                    <h3
                        class="py-3 px-4 inline-flex justify-center items-center gap-1 border border-transparent font-semibold text-gray-500 text-base">
                        Level: <span>A1 + A2</span>
                    </h3>
                    <h3
                        class="py-3 px-4 inline-flex justify-center items-center gap-1 border border-transparent font-semibold text-gray-500 text-base">
                        Age: <span>10 - 13</span>
                    </h3>
                    <h3
                        class="py-3 px-4 inline-flex justify-center items-center gap-1 border border-transparent font-semibold text-gray-500 text-base">
                        Gender: <span>Male + Female</span>
                    </h3>
                </div>
                {{-- end info --}}
            </div>
            {{-- end information --}}

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
                                            <th scope="col" :class="{ 'hidden': isActive }" class="px-3 py-3 text-right">
                                            </th>
                                            <th scope="col" :class="{ 'hidden': isActive }" class="px-3 py-3 text-right">
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
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
                                            <td class="h-px w-10">
                                                <div x-data="{ showModal: false }" class="px-3 py-3 flex justify-center">
                                                    <button @click="showModal = true"
                                                        class="py-1.5 px-4 inline-flex justify-center items-center gap-2 rounded-xl border border-transparent font-semibold text-gray-400 text-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor" class="w-6 h-6">
                                                            <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                                            <path fill-rule="evenodd"
                                                                d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                    <div x-show="showModal"
                                                        class="fixed inset-0 flex items-center justify-center z-50 bg-gray-950/60"
                                                        style="display: none;">
                                                        <!-- Modal content -->
                                                        <div @click.away="showModal = false"
                                                            class="relative bg-white p-4 shadow-lg rounded-lg">
                                                            <button @click="showModal = false"
                                                                class="absolute top-2 right-2 bg-gray-300 text-white rounded-full p-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="w-6 h-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M6 18L18 6M6 6l12 12" />
                                                                </svg>
                                                            </button>
                                                            <div class="w-full flex flex-col gap-5">
                                                                <div class="flex justify-between items-center px-10 pt-2">
                                                                    <div class="flex-shrink-0 group block">
                                                                        <div class="flex items-center">
                                                                            <img class="inline-block flex-shrink-0 h-14 w-14 rounded-full"
                                                                                src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                                                                                alt="Image Description" />
                                                                            <div class="ml-3">
                                                                                <h3 class="text-xl text-gray-900">
                                                                                    Maria Wanner ●</h3>
                                                                                <p
                                                                                    class="text-sm font-medium text-gray-400">
                                                                                    maria@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="w-20 h-20 bg-gray-200 rounded-full overflow-hidden flex justify-center items-center border border-red-500">
                                                                        <p class="text-center text-base">لۆگۆی
                                                                            پەیمانگا</p>
                                                                    </div>
                                                                </div>
                                                                <div class="grid grid-cols-3 h-full">
                                                                    <div
                                                                        class="col-span-1 flex flex-col justify-between items-center gap-5 mt-7">
                                                                        <div class="flex flex-col items-center gap-7">
                                                                            <h1 class="text-4xl text-center">ئاست
                                                                            </h1>
                                                                            <h1 class="text-4xl text-center">C2
                                                                            </h1>
                                                                            <button type="button"
                                                                                class="py-3 px-4 inline-flex justify-end items-center gap-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24"
                                                                                    fill="currentColor"
                                                                                    class="w-12 h-12 text-gray-500">
                                                                                    <path fill-rule="evenodd"
                                                                                        d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z"
                                                                                        clip-rule="evenodd" />
                                                                                </svg>
                                                                            </button>
                                                                        </div>
                                                                        <div class="flex flex-col items-center gap-1">
                                                                            <div
                                                                                class="w-16 h-16 bg-gray-200 rounded-full overflow-hidden flex justify-center items-center border border-red-500">
                                                                                <p class="text-center text-sm">
                                                                                    لۆگۆی تووتی</p>
                                                                            </div>
                                                                            <p class="text-center text-xs">Powerd
                                                                                by TOOTY</p>
                                                                        </div>
                                                                    </div>
                                                                    <form action="" method="POST"
                                                                        class="col-span-2 border-2 border-gray-200 rounded-xl p-3 w-full flex flex-col gap-1 items-center divide-y-2 divide-gray-200">
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">نازناو</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name"
                                                                                class="whitespace-nowrap">ژمارە
                                                                                مۆبایل</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">ڕۆژبوون</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">ڕەگەز</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">قوتابخانە</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">پۆل</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">پارێزگا</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">شار</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">گەڕەک</label>
                                                                        </div>
                                                                        <div
                                                                            class="w-full flex flex-col items-end justify-between gap-2 text-gray-500 pt-1 text-sm">
                                                                            <label for="name">:تێبینی</label>
                                                                            <textarea
                                                                                class="appearance-none border-2 h-20 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-200 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text" placeholder="type"></textarea>
                                                                        </div>
                                                                        <button type="button"
                                                                            class="py-3 px-4 w-40 inline-flex justify-center items-center mt-5 gap-2 rounded-xl bg-gray-800 border border-transparent font-semibold text-gray-100 hover:text-white hover:bg-gray-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                                                                            هەڵگرتن
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                            <td class="h-px w-20 whitespace-nowrap">
                                                <div class="px-6 py-2 flex justify-center">
                                                    <p
                                                        class="py-1 px-4 inline-flex justify-between items-center gap-2 rounded-xl bg-gray-200 border border-transparent font-semibold text-gray-500/80 text-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            class="h-6 w-6" fill="currentColor">
                                                            <path
                                                                d="M17 2h-4v4.059a8.946 8.946 0 0 1 4 1.459V2zm-6 0H7v5.518a8.946 8.946 0 0 1 4-1.459V2zm1 20a7 7 0 1 0 0-14 7 7 0 0 0 0 14zm-1.225-8.519L12 11l1.225 2.481 2.738.397-1.981 1.932.468 2.727L12 17.25l-2.449 1.287.468-2.727-1.981-1.932 2.737-.397z">
                                                            </path>
                                                        </svg>
                                                        <!-- Circle -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-6 h-6 text-green-500">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                                                        </svg>
                                                    </p>
                                                </div>
                                            </td>
                                            <td :class="{ 'hidden': isActive }" class="h-px w-20 whitespace-nowrap">
                                                <div class="px-3 py-3 flex justify-center">
                                                    <div class="border-2 border-gray-400 rounded-2xl p-[2.5px]">
                                                        <span class="text-white bg-green-500 rounded-l-xl px-2">Paid</span>
                                                        <span class="text-green-500 px-3">100.000</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td :class="{ 'hidden': isActive }" class="h-px w-20 whitespace-nowrap">
                                                <div class="px-3 py-3 flex justify-center">
                                                    <div class="flex border-2 border-gray-400 rounded-2xl p-[2.5px]">
                                                        <div
                                                            class="flex items-center text-white bg-gray-400 rounded-l-xl px-3">
                                                            <svg class="h-5 w-5 text-gray-100" fill="currentColor"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 209.281 209.281">
                                                                <path
                                                                    d="M207.17,99.424l-20.683-21.377l4.168-29.455c0.567-4.006-2.145-7.739-6.131-8.438l-29.298-5.137L141.285,8.739 c-1.896-3.575-6.287-4.998-9.919-3.223L104.64,18.582L77.916,5.517c-3.636-1.777-8.023-0.351-9.92,3.223L54.055,35.018 l-29.298,5.137c-3.985,0.698-6.698,4.432-6.131,8.438l4.167,29.455L2.11,99.424c-2.813,2.907-2.813,7.522,0,10.43l20.682,21.378 l-4.167,29.456c-0.566,4.005,2.146,7.738,6.13,8.438l29.299,5.14l13.942,26.275c1.896,3.574,6.284,5,9.919,3.223l26.724-13.062 l26.727,13.062c1.059,0.518,2.181,0.763,3.288,0.763c2.691,0,5.286-1.454,6.63-3.986l13.942-26.275l29.299-5.14 c3.984-0.699,6.697-4.433,6.13-8.438l-4.168-29.456l20.684-21.378C209.984,106.946,209.984,102.332,207.17,99.424z M173.158,123.438c-1.608,1.662-2.359,3.975-2.035,6.266l3.665,25.902l-25.764,4.52c-2.278,0.4-4.245,1.829-5.329,3.872 l-12.26,23.105l-23.502-11.486c-1.039-0.508-2.166-0.762-3.294-0.762c-1.127,0-2.254,0.254-3.293,0.762l-23.5,11.486l-12.26-23.105 c-1.084-2.043-3.051-3.472-5.329-3.872l-25.764-4.52l3.664-25.902c0.324-2.29-0.427-4.603-2.036-6.265l-18.186-18.799 l18.186-18.797c1.608-1.662,2.36-3.975,2.036-6.265l-3.664-25.901l25.763-4.517c2.279-0.399,4.246-1.829,5.331-3.872l12.259-23.108 l23.499,11.489c2.078,1.017,4.508,1.017,6.588,0l23.501-11.489l12.26,23.108c1.084,2.043,3.051,3.473,5.33,3.872l25.763,4.517 l-3.665,25.901c-0.324,2.291,0.427,4.603,2.036,6.266l18.186,18.796L173.158,123.438z">
                                                                </path>
                                                                <path
                                                                    d="M80.819,98.979c10.014,0,18.16-8.146,18.16-18.158c0-10.016-8.146-18.164-18.16-18.164 c-10.015,0-18.162,8.148-18.162,18.164C62.657,90.834,70.805,98.979,80.819,98.979z M80.819,74.657c3.397,0,6.16,2.765,6.16,6.164 c0,3.396-2.764,6.158-6.16,6.158c-3.398,0-6.162-2.763-6.162-6.158C74.657,77.422,77.421,74.657,80.819,74.657z">
                                                                </path>
                                                                <path
                                                                    d="M140.867,68.414c-2.342-2.343-6.143-2.344-8.484,0l-63.968,63.967c-2.343,2.343-2.343,6.142,0,8.485 c1.172,1.172,2.707,1.757,4.243,1.757c1.535,0,3.071-0.586,4.243-1.757l63.967-63.967C143.21,74.556,143.21,70.757,140.867,68.414z ">
                                                                </path>
                                                                <path
                                                                    d="M128.46,110.301c-10.013,0-18.158,8.146-18.158,18.158c0,10.016,8.146,18.164,18.158,18.164 c10.016,0,18.164-8.148,18.164-18.164C146.624,118.447,138.476,110.301,128.46,110.301z M128.46,134.624 c-3.395,0-6.158-2.765-6.158-6.164c0-3.395,2.763-6.158,6.158-6.158c3.398,0,6.164,2.763,6.164,6.158 C134.624,131.858,131.859,134.624,128.46,134.624z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <p class="text-gray-400 px-3">0.0</p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="h-px w-72 whitespace-nowrap">
                                                <div class="pl-6 lg:pl-3 xl:pl-0 pr-6 py-3">
                                                    <div class="flex items-center gap-x-3">
                                                        <img class="inline-block h-12 w-12 rounded-full"
                                                            src="https://flowbite.com/docs/images/people/profile-picture-3.jpg"
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
                                            <td class="h-px w-10">
                                                <div x-data="{ showModal: false }" class="px-3 py-3 flex justify-center">
                                                    <button @click="showModal = true"
                                                        class="py-1.5 px-4 inline-flex justify-center items-center gap-2 rounded-xl border border-transparent font-semibold text-gray-400 text-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor" class="w-6 h-6">
                                                            <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                                            <path fill-rule="evenodd"
                                                                d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                    <div x-show="showModal"
                                                        class="fixed inset-0 flex items-center justify-center z-50 bg-gray-950/60"
                                                        style="display: none;">
                                                        <!-- Modal content -->
                                                        <div @click.away="showModal = false"
                                                            class="relative bg-white p-4 shadow-lg rounded-lg">
                                                            <button @click="showModal = false"
                                                                class="absolute top-2 right-2 bg-gray-300 text-white rounded-full p-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="w-6 h-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M6 18L18 6M6 6l12 12" />
                                                                </svg>
                                                            </button>
                                                            <div class="w-full flex flex-col gap-5">
                                                                <div class="flex justify-between items-center px-10 pt-2">
                                                                    <div class="flex-shrink-0 group block">
                                                                        <div class="flex items-center">
                                                                            <img class="inline-block flex-shrink-0 h-14 w-14 rounded-full"
                                                                                src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                                                                                alt="Image Description" />
                                                                            <div class="ml-3">
                                                                                <h3 class="text-xl text-gray-900">
                                                                                    Maria Wanner ●</h3>
                                                                                <p
                                                                                    class="text-sm font-medium text-gray-400">
                                                                                    maria@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="w-20 h-20 bg-gray-200 rounded-full overflow-hidden flex justify-center items-center border border-red-500">
                                                                        <p class="text-center text-base">لۆگۆی
                                                                            پەیمانگا</p>
                                                                    </div>
                                                                </div>
                                                                <div class="grid grid-cols-3 h-full">
                                                                    <div
                                                                        class="col-span-1 flex flex-col justify-between items-center gap-5 mt-7">
                                                                        <div class="flex flex-col items-center gap-7">
                                                                            <h1 class="text-4xl text-center">ئاست
                                                                            </h1>
                                                                            <h1 class="text-4xl text-center">C2
                                                                            </h1>
                                                                            <button type="button"
                                                                                class="py-3 px-4 inline-flex justify-end items-center gap-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24"
                                                                                    fill="currentColor"
                                                                                    class="w-12 h-12 text-gray-500">
                                                                                    <path fill-rule="evenodd"
                                                                                        d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z"
                                                                                        clip-rule="evenodd" />
                                                                                </svg>
                                                                            </button>
                                                                        </div>
                                                                        <div class="flex flex-col items-center gap-1">
                                                                            <div
                                                                                class="w-16 h-16 bg-gray-200 rounded-full overflow-hidden flex justify-center items-center border border-red-500">
                                                                                <p class="text-center text-sm">
                                                                                    لۆگۆی تووتی</p>
                                                                            </div>
                                                                            <p class="text-center text-xs">Powerd
                                                                                by TOOTY</p>
                                                                        </div>
                                                                    </div>
                                                                    <form action="" method="POST"
                                                                        class="col-span-2 border-2 border-gray-200 rounded-xl p-3 w-full flex flex-col gap-1 items-center divide-y-2 divide-gray-200">
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">نازناو</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name"
                                                                                class="whitespace-nowrap">ژمارە
                                                                                مۆبایل</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">ڕۆژبوون</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">ڕەگەز</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">قوتابخانە</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">پۆل</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">پارێزگا</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">شار</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">گەڕەک</label>
                                                                        </div>
                                                                        <div
                                                                            class="w-full flex flex-col items-end justify-between gap-2 text-gray-500 pt-1 text-sm">
                                                                            <label for="name">:تێبینی</label>
                                                                            <textarea
                                                                                class="appearance-none border-2 h-20 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-200 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text" placeholder="type"></textarea>
                                                                        </div>
                                                                        <button type="button"
                                                                            class="py-3 px-4 w-40 inline-flex justify-center items-center mt-5 gap-2 rounded-xl bg-gray-800 border border-transparent font-semibold text-gray-100 hover:text-white hover:bg-gray-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                                                                            هەڵگرتن
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                            <td class="h-px w-20 whitespace-nowrap">
                                                <div class="px-6 py-2 flex justify-center">
                                                    <div
                                                        class="py-px px-4 inline-flex justify-between items-center gap-2 rounded-xl bg-gray-200 border border-transparent font-semibold text-gray-500/80 text-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            class="h-6 w-6" fill="currentColor">
                                                            <path
                                                                d="M17 2h-4v4.059a8.946 8.946 0 0 1 4 1.459V2zm-6 0H7v5.518a8.946 8.946 0 0 1 4-1.459V2zm1 20a7 7 0 1 0 0-14 7 7 0 0 0 0 14zm-1.225-8.519L12 11l1.225 2.481 2.738.397-1.981 1.932.468 2.727L12 17.25l-2.449 1.287.468-2.727-1.981-1.932 2.737-.397z">
                                                            </path>
                                                        </svg>
                                                        <!-- Circle -->
                                                        <div class="flex items-center justify-center"
                                                            x-data="{ circumference: 2 * 22 / 7 * 8 }">
                                                            <svg class="transform -rotate-90 w-7 h-7">
                                                                <circle cx="14" cy="13" r="8"
                                                                    stroke="currentColor" stroke-width="3"
                                                                    fill="transparent" class="text-gray-300" />
                                                                <circle cx="14" cy="13" r="8"
                                                                    stroke="currentColor" stroke-width="3"
                                                                    fill="transparent" :stroke-dasharray="circumference"
                                                                    :stroke-dashoffset="circumference - 35 / 100 *
                                                                        circumference"
                                                                    class="text-blue-500 " />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td :class="{ 'hidden': isActive }" class="h-px w-20 whitespace-nowrap">
                                                <div class="px-3 py-3 flex justify-center">
                                                    <div class="border-2 border-gray-400 rounded-2xl p-[2.5px]">
                                                        <span class="text-white bg-green-500 rounded-l-xl px-2">Paid</span>
                                                        <span class="text-green-500 px-3">80,000</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td :class="{ 'hidden': isActive }" class="h-px w-20 whitespace-nowrap">
                                                <div class="px-3 py-3 flex justify-center">
                                                    <div class="flex border-2 border-gray-400 rounded-2xl p-[2.5px]">
                                                        <div
                                                            class="flex items-center text-white bg-blue-500 rounded-l-xl px-3">
                                                            <svg class="h-5 w-5 text-gray-100" fill="currentColor"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 209.281 209.281">
                                                                <path
                                                                    d="M207.17,99.424l-20.683-21.377l4.168-29.455c0.567-4.006-2.145-7.739-6.131-8.438l-29.298-5.137L141.285,8.739 c-1.896-3.575-6.287-4.998-9.919-3.223L104.64,18.582L77.916,5.517c-3.636-1.777-8.023-0.351-9.92,3.223L54.055,35.018 l-29.298,5.137c-3.985,0.698-6.698,4.432-6.131,8.438l4.167,29.455L2.11,99.424c-2.813,2.907-2.813,7.522,0,10.43l20.682,21.378 l-4.167,29.456c-0.566,4.005,2.146,7.738,6.13,8.438l29.299,5.14l13.942,26.275c1.896,3.574,6.284,5,9.919,3.223l26.724-13.062 l26.727,13.062c1.059,0.518,2.181,0.763,3.288,0.763c2.691,0,5.286-1.454,6.63-3.986l13.942-26.275l29.299-5.14 c3.984-0.699,6.697-4.433,6.13-8.438l-4.168-29.456l20.684-21.378C209.984,106.946,209.984,102.332,207.17,99.424z M173.158,123.438c-1.608,1.662-2.359,3.975-2.035,6.266l3.665,25.902l-25.764,4.52c-2.278,0.4-4.245,1.829-5.329,3.872 l-12.26,23.105l-23.502-11.486c-1.039-0.508-2.166-0.762-3.294-0.762c-1.127,0-2.254,0.254-3.293,0.762l-23.5,11.486l-12.26-23.105 c-1.084-2.043-3.051-3.472-5.329-3.872l-25.764-4.52l3.664-25.902c0.324-2.29-0.427-4.603-2.036-6.265l-18.186-18.799 l18.186-18.797c1.608-1.662,2.36-3.975,2.036-6.265l-3.664-25.901l25.763-4.517c2.279-0.399,4.246-1.829,5.331-3.872l12.259-23.108 l23.499,11.489c2.078,1.017,4.508,1.017,6.588,0l23.501-11.489l12.26,23.108c1.084,2.043,3.051,3.473,5.33,3.872l25.763,4.517 l-3.665,25.901c-0.324,2.291,0.427,4.603,2.036,6.266l18.186,18.796L173.158,123.438z">
                                                                </path>
                                                                <path
                                                                    d="M80.819,98.979c10.014,0,18.16-8.146,18.16-18.158c0-10.016-8.146-18.164-18.16-18.164 c-10.015,0-18.162,8.148-18.162,18.164C62.657,90.834,70.805,98.979,80.819,98.979z M80.819,74.657c3.397,0,6.16,2.765,6.16,6.164 c0,3.396-2.764,6.158-6.16,6.158c-3.398,0-6.162-2.763-6.162-6.158C74.657,77.422,77.421,74.657,80.819,74.657z">
                                                                </path>
                                                                <path
                                                                    d="M140.867,68.414c-2.342-2.343-6.143-2.344-8.484,0l-63.968,63.967c-2.343,2.343-2.343,6.142,0,8.485 c1.172,1.172,2.707,1.757,4.243,1.757c1.535,0,3.071-0.586,4.243-1.757l63.967-63.967C143.21,74.556,143.21,70.757,140.867,68.414z ">
                                                                </path>
                                                                <path
                                                                    d="M128.46,110.301c-10.013,0-18.158,8.146-18.158,18.158c0,10.016,8.146,18.164,18.158,18.164 c10.016,0,18.164-8.148,18.164-18.164C146.624,118.447,138.476,110.301,128.46,110.301z M128.46,134.624 c-3.395,0-6.158-2.765-6.158-6.164c0-3.395,2.763-6.158,6.158-6.158c3.398,0,6.164,2.763,6.164,6.158 C134.624,131.858,131.859,134.624,128.46,134.624z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <p class="text-blue-500 px-3">20.0</p>
                                                    </div>
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
                                            <td class="h-px w-10">
                                                <div x-data="{ showModal: false }" class="px-3 py-3 flex justify-center">
                                                    <button @click="showModal = true"
                                                        class="py-1.5 px-4 inline-flex justify-center items-center gap-2 rounded-xl border border-transparent font-semibold text-gray-400 text-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor" class="w-6 h-6">
                                                            <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                                            <path fill-rule="evenodd"
                                                                d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                    <div x-show="showModal"
                                                        class="fixed inset-0 flex items-center justify-center z-50 bg-gray-950/60"
                                                        style="display: none;">
                                                        <!-- Modal content -->
                                                        <div @click.away="showModal = false"
                                                            class="relative bg-white p-4 shadow-lg rounded-lg">
                                                            <button @click="showModal = false"
                                                                class="absolute top-2 right-2 bg-gray-300 text-white rounded-full p-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="w-6 h-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M6 18L18 6M6 6l12 12" />
                                                                </svg>
                                                            </button>
                                                            <div class="w-full flex flex-col gap-5">
                                                                <div class="flex justify-between items-center px-10 pt-2">
                                                                    <div class="flex-shrink-0 group block">
                                                                        <div class="flex items-center">
                                                                            <img class="inline-block flex-shrink-0 h-14 w-14 rounded-full"
                                                                                src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                                                                                alt="Image Description" />
                                                                            <div class="ml-3">
                                                                                <h3 class="text-xl text-gray-900">
                                                                                    Maria Wanner ●</h3>
                                                                                <p
                                                                                    class="text-sm font-medium text-gray-400">
                                                                                    maria@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="w-20 h-20 bg-gray-200 rounded-full overflow-hidden flex justify-center items-center border border-red-500">
                                                                        <p class="text-center text-base">لۆگۆی
                                                                            پەیمانگا</p>
                                                                    </div>
                                                                </div>
                                                                <div class="grid grid-cols-3 h-full">
                                                                    <div
                                                                        class="col-span-1 flex flex-col justify-between items-center gap-5 mt-7">
                                                                        <div class="flex flex-col items-center gap-7">
                                                                            <h1 class="text-4xl text-center">ئاست
                                                                            </h1>
                                                                            <h1 class="text-4xl text-center">C2
                                                                            </h1>
                                                                            <button type="button"
                                                                                class="py-3 px-4 inline-flex justify-end items-center gap-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24"
                                                                                    fill="currentColor"
                                                                                    class="w-12 h-12 text-gray-500">
                                                                                    <path fill-rule="evenodd"
                                                                                        d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z"
                                                                                        clip-rule="evenodd" />
                                                                                </svg>
                                                                            </button>
                                                                        </div>
                                                                        <div class="flex flex-col items-center gap-1">
                                                                            <div
                                                                                class="w-16 h-16 bg-gray-200 rounded-full overflow-hidden flex justify-center items-center border border-red-500">
                                                                                <p class="text-center text-sm">
                                                                                    لۆگۆی تووتی</p>
                                                                            </div>
                                                                            <p class="text-center text-xs">Powerd
                                                                                by TOOTY</p>
                                                                        </div>
                                                                    </div>
                                                                    <form action="" method="POST"
                                                                        class="col-span-2 border-2 border-gray-200 rounded-xl p-3 w-full flex flex-col gap-1 items-center divide-y-2 divide-gray-200">
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">نازناو</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name"
                                                                                class="whitespace-nowrap">ژمارە
                                                                                مۆبایل</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">ڕۆژبوون</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">ڕەگەز</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">قوتابخانە</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">پۆل</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">پارێزگا</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">شار</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">گەڕەک</label>
                                                                        </div>
                                                                        <div
                                                                            class="w-full flex flex-col items-end justify-between gap-2 text-gray-500 pt-1 text-sm">
                                                                            <label for="name">:تێبینی</label>
                                                                            <textarea
                                                                                class="appearance-none border-2 h-20 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-200 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text" placeholder="type"></textarea>
                                                                        </div>
                                                                        <button type="button"
                                                                            class="py-3 px-4 w-40 inline-flex justify-center items-center mt-5 gap-2 rounded-xl bg-gray-800 border border-transparent font-semibold text-gray-100 hover:text-white hover:bg-gray-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                                                                            هەڵگرتن
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                            <td class="h-px w-20 whitespace-nowrap">
                                                <div class="px-6 py-2 flex justify-center">
                                                    <p
                                                        class="py-1 px-4 inline-flex justify-between items-center gap-2 rounded-xl bg-gray-200 border border-transparent font-semibold text-gray-500/80 text-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            class="h-6 w-6" fill="currentColor">
                                                            <path
                                                                d="M17 2h-4v4.059a8.946 8.946 0 0 1 4 1.459V2zm-6 0H7v5.518a8.946 8.946 0 0 1 4-1.459V2zm1 20a7 7 0 1 0 0-14 7 7 0 0 0 0 14zm-1.225-8.519L12 11l1.225 2.481 2.738.397-1.981 1.932.468 2.727L12 17.25l-2.449 1.287.468-2.727-1.981-1.932 2.737-.397z">
                                                            </path>
                                                        </svg>
                                                        <!-- Circle -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                            class="w-6 h-6 text-green-500">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                                                        </svg>
                                                    </p>
                                                </div>
                                            </td>
                                            <td :class="{ 'hidden': isActive }" class="h-px w-20 whitespace-nowrap">
                                                <div class="px-3 py-3 flex justify-center">
                                                    <div class="border-2 border-gray-400 rounded-2xl p-0.5 pt-[3px]">
                                                        <span class="text-white bg-red-500 rounded-l-xl px-2">Paid</span>
                                                        <span class="text-red-500 px-3">100.000</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td :class="{ 'hidden': isActive }" class="h-px w-20 whitespace-nowrap">
                                                <div class="px-3 py-3 flex justify-center">
                                                    <div class="flex border-2 border-gray-400 rounded-2xl p-[2.5px]">
                                                        <div
                                                            class="flex items-center text-white bg-gray-400 rounded-l-xl px-3">
                                                            <svg class="h-5 w-5 text-gray-100" fill="currentColor"
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 209.281 209.281">
                                                                <path
                                                                    d="M207.17,99.424l-20.683-21.377l4.168-29.455c0.567-4.006-2.145-7.739-6.131-8.438l-29.298-5.137L141.285,8.739 c-1.896-3.575-6.287-4.998-9.919-3.223L104.64,18.582L77.916,5.517c-3.636-1.777-8.023-0.351-9.92,3.223L54.055,35.018 l-29.298,5.137c-3.985,0.698-6.698,4.432-6.131,8.438l4.167,29.455L2.11,99.424c-2.813,2.907-2.813,7.522,0,10.43l20.682,21.378 l-4.167,29.456c-0.566,4.005,2.146,7.738,6.13,8.438l29.299,5.14l13.942,26.275c1.896,3.574,6.284,5,9.919,3.223l26.724-13.062 l26.727,13.062c1.059,0.518,2.181,0.763,3.288,0.763c2.691,0,5.286-1.454,6.63-3.986l13.942-26.275l29.299-5.14 c3.984-0.699,6.697-4.433,6.13-8.438l-4.168-29.456l20.684-21.378C209.984,106.946,209.984,102.332,207.17,99.424z M173.158,123.438c-1.608,1.662-2.359,3.975-2.035,6.266l3.665,25.902l-25.764,4.52c-2.278,0.4-4.245,1.829-5.329,3.872 l-12.26,23.105l-23.502-11.486c-1.039-0.508-2.166-0.762-3.294-0.762c-1.127,0-2.254,0.254-3.293,0.762l-23.5,11.486l-12.26-23.105 c-1.084-2.043-3.051-3.472-5.329-3.872l-25.764-4.52l3.664-25.902c0.324-2.29-0.427-4.603-2.036-6.265l-18.186-18.799 l18.186-18.797c1.608-1.662,2.36-3.975,2.036-6.265l-3.664-25.901l25.763-4.517c2.279-0.399,4.246-1.829,5.331-3.872l12.259-23.108 l23.499,11.489c2.078,1.017,4.508,1.017,6.588,0l23.501-11.489l12.26,23.108c1.084,2.043,3.051,3.473,5.33,3.872l25.763,4.517 l-3.665,25.901c-0.324,2.291,0.427,4.603,2.036,6.266l18.186,18.796L173.158,123.438z">
                                                                </path>
                                                                <path
                                                                    d="M80.819,98.979c10.014,0,18.16-8.146,18.16-18.158c0-10.016-8.146-18.164-18.16-18.164 c-10.015,0-18.162,8.148-18.162,18.164C62.657,90.834,70.805,98.979,80.819,98.979z M80.819,74.657c3.397,0,6.16,2.765,6.16,6.164 c0,3.396-2.764,6.158-6.16,6.158c-3.398,0-6.162-2.763-6.162-6.158C74.657,77.422,77.421,74.657,80.819,74.657z">
                                                                </path>
                                                                <path
                                                                    d="M140.867,68.414c-2.342-2.343-6.143-2.344-8.484,0l-63.968,63.967c-2.343,2.343-2.343,6.142,0,8.485 c1.172,1.172,2.707,1.757,4.243,1.757c1.535,0,3.071-0.586,4.243-1.757l63.967-63.967C143.21,74.556,143.21,70.757,140.867,68.414z ">
                                                                </path>
                                                                <path
                                                                    d="M128.46,110.301c-10.013,0-18.158,8.146-18.158,18.158c0,10.016,8.146,18.164,18.158,18.164 c10.016,0,18.164-8.148,18.164-18.164C146.624,118.447,138.476,110.301,128.46,110.301z M128.46,134.624 c-3.395,0-6.158-2.765-6.158-6.164c0-3.395,2.763-6.158,6.158-6.158c3.398,0,6.164,2.763,6.164,6.158 C134.624,131.858,131.859,134.624,128.46,134.624z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        <p class="text-gray-400 px-3">0.0</p>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
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
                                            <td class="h-px w-10">
                                                <div x-data="{ showModal: false }" class="px-3 py-3 flex justify-center">
                                                    <button @click="showModal = true"
                                                        class="py-1.5 px-4 inline-flex justify-center items-center gap-2 rounded-xl border border-transparent font-semibold text-gray-400 text-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            fill="currentColor" class="w-6 h-6">
                                                            <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                                            <path fill-rule="evenodd"
                                                                d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </button>
                                                    <div x-show="showModal"
                                                        class="fixed inset-0 flex items-center justify-center z-50 bg-gray-950/60"
                                                        style="display: none;">
                                                        <!-- Modal content -->
                                                        <div @click.away="showModal = false"
                                                            class="relative bg-white p-4 shadow-lg rounded-lg">
                                                            <button @click="showModal = false"
                                                                class="absolute top-2 right-2 bg-gray-300 text-white rounded-full p-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor" class="w-6 h-6">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        d="M6 18L18 6M6 6l12 12" />
                                                                </svg>
                                                            </button>
                                                            <div class="w-full flex flex-col gap-5">
                                                                <div class="flex justify-between items-center px-10 pt-2">
                                                                    <div class="flex-shrink-0 group block">
                                                                        <div class="flex items-center">
                                                                            <img class="inline-block flex-shrink-0 h-14 w-14 rounded-full"
                                                                                src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                                                                                alt="Image Description" />
                                                                            <div class="ml-3">
                                                                                <h3 class="text-xl text-gray-900">
                                                                                    Maria Wanner ●</h3>
                                                                                <p
                                                                                    class="text-sm font-medium text-gray-400">
                                                                                    maria@gmail.com</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="w-20 h-20 bg-gray-200 rounded-full overflow-hidden flex justify-center items-center border border-red-500">
                                                                        <p class="text-center text-base">لۆگۆی
                                                                            پەیمانگا</p>
                                                                    </div>
                                                                </div>
                                                                <div class="grid grid-cols-3 h-full">
                                                                    <div
                                                                        class="col-span-1 flex flex-col justify-between items-center gap-5 mt-7">
                                                                        <div class="flex flex-col items-center gap-7">
                                                                            <h1 class="text-4xl text-center">ئاست
                                                                            </h1>
                                                                            <h1 class="text-4xl text-center">C2
                                                                            </h1>
                                                                            <button type="button"
                                                                                class="py-3 px-4 inline-flex justify-end items-center gap-2">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    viewBox="0 0 24 24"
                                                                                    fill="currentColor"
                                                                                    class="w-12 h-12 text-gray-500">
                                                                                    <path fill-rule="evenodd"
                                                                                        d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z"
                                                                                        clip-rule="evenodd" />
                                                                                </svg>
                                                                            </button>
                                                                        </div>
                                                                        <div class="flex flex-col items-center gap-1">
                                                                            <div
                                                                                class="w-16 h-16 bg-gray-200 rounded-full overflow-hidden flex justify-center items-center border border-red-500">
                                                                                <p class="text-center text-sm">
                                                                                    لۆگۆی تووتی</p>
                                                                            </div>
                                                                            <p class="text-center text-xs">Powerd
                                                                                by TOOTY</p>
                                                                        </div>
                                                                    </div>
                                                                    <form action="" method="POST"
                                                                        class="col-span-2 border-2 border-gray-200 rounded-xl p-3 w-full flex flex-col gap-1 items-center divide-y-2 divide-gray-200">
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">نازناو</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name"
                                                                                class="whitespace-nowrap">ژمارە
                                                                                مۆبایل</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">ڕۆژبوون</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">ڕەگەز</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">قوتابخانە</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">پۆل</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">پارێزگا</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">شار</label>
                                                                        </div>
                                                                        <div
                                                                            class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                            <input
                                                                                class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text"
                                                                                placeholder="type" />
                                                                            <label for="name">:</label>
                                                                            <label for="name">گەڕەک</label>
                                                                        </div>
                                                                        <div
                                                                            class="w-full flex flex-col items-end justify-between gap-2 text-gray-500 pt-1 text-sm">
                                                                            <label for="name">:تێبینی</label>
                                                                            <textarea
                                                                                class="appearance-none border-2 h-20 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-200 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                id="name" type="text" placeholder="type"></textarea>
                                                                        </div>
                                                                        <button type="button"
                                                                            class="py-3 px-4 w-40 inline-flex justify-center items-center mt-5 gap-2 rounded-xl bg-gray-800 border border-transparent font-semibold text-gray-100 hover:text-white hover:bg-gray-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                                                                            هەڵگرتن
                                                                        </button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                            <td class="h-px w-20 whitespace-nowrap">
                                                <div class="px-6 py-2 flex justify-center">
                                                    <div
                                                        class="py-px px-4 inline-flex justify-between items-center gap-2 rounded-xl bg-gray-200 border border-transparent font-semibold text-gray-500/80 text-sm">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                            class="h-6 w-6" fill="currentColor">
                                                            <path
                                                                d="M17 2h-4v4.059a8.946 8.946 0 0 1 4 1.459V2zm-6 0H7v5.518a8.946 8.946 0 0 1 4-1.459V2zm1 20a7 7 0 1 0 0-14 7 7 0 0 0 0 14zm-1.225-8.519L12 11l1.225 2.481 2.738.397-1.981 1.932.468 2.727L12 17.25l-2.449 1.287.468-2.727-1.981-1.932 2.737-.397z">
                                                            </path>
                                                        </svg>
                                                        <!-- Circle -->
                                                        <div class="flex items-center justify-center"
                                                            x-data="{ circumference: 2 * 22 / 7 * 8 }">
                                                            <svg class="transform -rotate-90 w-7 h-7">
                                                                <circle cx="14" cy="13" r="8"
                                                                    stroke="currentColor" stroke-width="3"
                                                                    fill="transparent" class="text-gray-300" />
                                                                <circle cx="14" cy="13" r="8"
                                                                    stroke="currentColor" stroke-width="3"
                                                                    fill="transparent" :stroke-dasharray="circumference"
                                                                    :stroke-dashoffset="circumference - 35 / 100 *
                                                                        circumference"
                                                                    class="text-blue-500 " />
                                                            </svg>
                                                        </div>
                                                    </div>
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

        {{-- Right section --}}
        <div :class="{ 'col-span-1': !isActive, 'col-span-2': isActive }"
            class="col-span-1 flex flex-col justify-between">
            {{-- top btn --}}
            <div class="flex flex-col items-end gap-3">
                <button type="button" @click="isActive = !isActive"
                    class="py-3 px-4 w-40 inline-flex justify-center items-center gap-2 rounded-xl shadow-lg bg-gray-900 border border-transparent font-semibold text-gray-100 hover:text-white hover:bg-gray-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                    پۆلی نوێ
                </button>
                <button type="button"
                    class="py-3 px-4 w-40 inline-flex justify-center items-center gap-2 rounded-xl shadow-lg bg-gray-900 border border-transparent font-semibold text-gray-100 hover:text-white hover:bg-gray-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                    دەستکاریکردنی پۆل
                </button>
                {{-- center form --}}
                <form :class="{ 'hidden': !isActive, 'flex': isActive }"
                    class="border-2 hidden border-gray-400 rounded-xl p-5 w-full flex-col gap-5 items-center">
                    <div class="flex items-center gap-10">
                        <label for="name">Name:</label>
                        <input
                            class="appearance-none border-2 font-semibold placeholder:text-gray-500 bg-gray-200 border-gray-200 hover:border-gray-200 transition-colors rounded-lg w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:ring-orange-600 focus:border-orange-600 focus:shadow-outline"
                            id="name" type="text" placeholder="type" />
                    </div>
                    <div class="flex items-center gap-10">
                        <label for="level">Level:</label>
                        <input
                            class="appearance-none border-2 font-semibold placeholder:text-gray-500 bg-gray-200 border-gray-200 hover:border-gray-200 transition-colors rounded-lg w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:ring-orange-600 focus:border-orange-600 focus:shadow-outline"
                            id="level" type="text" placeholder="type" />
                    </div>
                    <div class="flex items-center gap-5">
                        <label for="age">Age:</label>
                        <input
                            class="appearance-none border-2 font-semibold placeholder:text-gray-500 bg-gray-200 border-gray-200 hover:border-gray-200 transition-colors rounded-lg w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:ring-orange-600 focus:border-orange-600 focus:shadow-outline"
                            id="age" type="text" placeholder="type" />
                        <label for="age">to</label>
                        <input
                            class="appearance-none border-2 font-semibold placeholder:text-gray-500 bg-gray-200 border-gray-200 hover:border-gray-200 transition-colors rounded-lg w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:ring-orange-600 focus:border-orange-600 focus:shadow-outline"
                            id="to" type="text" placeholder="type" />
                    </div>
                    <div class="flex items-center gap-10">
                        <label for="gender">Gender:</label>
                        <input
                            class="appearance-none border-2 font-semibold placeholder:text-gray-500 bg-gray-200 border-gray-200 hover:border-gray-200 transition-colors rounded-lg w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:ring-orange-600 focus:border-orange-600 focus:shadow-outline"
                            id="gender" type="text" placeholder="type" />
                    </div>
                    <div class="flex flex-col w-full gap-1">
                        <label for="name">Note:</label>
                        <textarea
                            class="appearance-none h-20 border-2 font-semibold placeholder:text-gray-500 bg-gray-200 border-gray-200 hover:border-gray-200 transition-colors rounded-lg w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:ring-orange-600 focus:border-orange-600 focus:shadow-outline"
                            id="name" type="text" placeholder="type"></textarea>
                    </div>
                    <button type="button"
                        class="py-3 px-4 w-40 inline-flex justify-center items-center gap-2 rounded-xl bg-gray-800 border border-transparent font-semibold text-gray-100 hover:text-white hover:bg-gray-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                        دروستکردنی پۆل
                    </button>
                </form>
                {{-- end center form --}}
            </div>
            {{-- end top btn --}}


            {{-- bottom btn --}}
            <div class="flex flex-col items-end gap-3">
                <button type="button" class="py-3 px-4 inline-flex justify-end items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        class="w-12 h-12 text-gray-500">
                        <path fill-rule="evenodd"
                            d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
                <button type="button"
                    class="py-3 px-4 w-40 inline-flex justify-center items-center gap-2 rounded-xl bg-green-500 border border-transparent font-semibold text-gray-100 hover:text-white hover:bg-gray-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                    هەڵگرتن
                </button>
            </div>
            {{-- end bottom btn --}}
        </div>
        {{-- end right section --}}

    </section>
@endsection
