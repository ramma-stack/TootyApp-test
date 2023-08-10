<div>
    <section class="py-16 px-8 w-full flex gap-10">

        {{-- Left side --}}
        <div class="flex flex-col gap-5">

            {{-- start importants tasks --}}
            <div class="flex justify-between gap-2">
                {{-- start left side task --}}
                <div class="flex gap-4">
                    <a href="{{ route('levels') }}"
                        class="py-3 px-4 w-40 inline-flex justify-center items-center gap-2 rounded-xl shadow-lg bg-gray-900 border border-transparent font-semibold text-gray-100 hover:text-white hover:bg-gray-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                        ئاستی فێرخوازان
                    </a>
                    <a href="{{ route('classes') }}"
                        class="py-3 px-4 w-40 inline-flex justify-center items-center gap-2 rounded-xl shadow-lg bg-gray-200 border border-transparent font-semibold text-gray-400 hover:text-white hover:bg-gray-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                        پۆلەکان
                    </a>
                    <a href="#"
                        class="py-3 px-4 w-40 inline-flex justify-center items-center gap-2 rounded-xl shadow-lg bg-gray-200 border border-transparent font-semibold text-gray-400 hover:text-white hover:bg-gray-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                        بڕوانامە
                    </a>
                    <a href="#"
                        class="py-3 px-4 w-40 inline-flex justify-center items-center gap-2 rounded-xl shadow-lg bg-gray-200 border border-transparent font-semibold text-gray-400 hover:text-white hover:bg-gray-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                        داهات
                    </a>
                </div>
                {{-- end left side task --}}
            </div>
            {{-- end importants tasks --}}

            {{-- start classes btn --}}
            <div class="flex justify-between gap-2">
                {{-- start left side btn --}}
                <div class="flex gap-2">
                    <a href="{{ route('levels') }}"
                        class="py-2 px-2.5 inline-flex justify-center items-center gap-2 rounded-full border border-orange-500 font-semibold {{ $levels === null ? 'bg-orange-500 text-gray-100' : 'text-gray-500' }} hover:text-white hover:bg-orange-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-orange-500 focus:ring-offset-2 transition-all text-sm">
                        All Levels
                    </a>
                    @foreach ($showLevels as $show)
                        <a href="{{ route('levels') . '?level=' . $show->level }}"
                            class="py-2 px-2.5 inline-flex justify-center items-center gap-2 rounded-full border border-orange-500 font-semibold {{ $show->level === $levels ? 'bg-orange-500 text-gray-100' : 'text-gray-500' }} hover:text-white hover:bg-orange-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-orange-500 focus:ring-offset-2 transition-all text-sm">
                            {{ $show->level }}
                        </a>
                    @endforeach
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
                            id="search" wire:model="search" type="text" placeholder="Search" />
                        @if (!empty($search))
                            <button wire:click="$set('search', '')"
                                class="absolute right-0 inset-y-0 flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="-ml-1 mr-3 h-5 w-5 text-gray-400 hover:text-gray-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        @endif
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

            <!-- Flash Message Container -->
            @if (session()->has('message'))
                <div
                    class="notification-message fixed top-5 right-5 bg-green-500 text-white py-3 px-4 rounded-lg shadow">
                    {{ session('message') }}
                    <span id="countdown">6</span>
                </div>
                <script>
                    var countdownElement = document.getElementById('countdown');
                    var countdown = 6;

                    var countdownInterval = setInterval(function() {
                        countdown--;
                        countdownElement.textContent = countdown;

                        if (countdown <= 0) {
                            clearInterval(countdownInterval);
                            var notificationMessage = document.querySelector('.notification-message');
                            if (notificationMessage) {
                                notificationMessage.remove();
                            }
                        }
                    }, 1000); // 1000 milliseconds = 1 second
                </script>
            @endif
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
                                        @foreach ($students as $student)
                                            <tr>
                                                <td class="h-px w-72 whitespace-nowrap">
                                                    <div class="pl-6 lg:pl-3 xl:pl-0 pr-6 py-3">
                                                        <div class="flex items-center gap-x-3">
                                                            <img class="inline-block h-12 w-12 rounded-full"
                                                                src="{{ asset('image/photo1.png') }}"
                                                                alt="Image Description">
                                                            <div class="grow">
                                                                <span class="text-lg font-bold text-gray-800">
                                                                    {{ $student->name }} ●
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
                                                            {{ $student->level }}
                                                        </p>
                                                    </div>
                                                </td>
                                                <td class="h-px w-20 whitespace-nowrap">
                                                    <div class="px-3 py-3 flex justify-center">
                                                        <p
                                                            class="py-1.5 px-4 w-24 inline-flex justify-center items-center gap-2 rounded-xl bg-gray-200 border border-transparent font-semibold text-gray-500 text-sm">
                                                            {{ !empty($student->studentClass->name) ? $student->studentClass->name : 'Class' }}
                                                        </p>
                                                    </div>
                                                </td>
                                                {{-- <td class="h-px w-20 whitespace-nowrap">
                                                        <div class="px-3 py-3 flex justify-center">
                                                            <select
                                                                value="{{ !empty($student->studentClass->name) ? $student->studentClass->name : 'Class' }}"
                                                                class="py-1 px-4 inline-flex justify-center items-center gap-2 rounded-xl bg-gray-200 border border-transparent font-semibold text-gray-500 text-sm">
                                                                <option value="Class">Class</option>
                                                                @foreach ($showClasses as $show)
                                                                    <option value="{{ $show->name }}"
                                                                        {{ (!empty($student->studentClass->name) ? $student->studentClass->name : 'Class') == $show->name ? 'selected' : '' }}>
                                                                        {{ $show->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </td> --}}
                                                <td class="h-px w-10">
                                                    <div>
                                                        <button wire:click="showModal({{ $student->id }}, 'modal')"
                                                            class="py-1.5 px-4 inline-flex justify-center items-center gap-2 rounded-xl border border-transparent font-semibold text-gray-400 text-sm">
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                fill="currentColor" class="w-6 h-6">
                                                                <path d="M12 15a3 3 0 100-6 3 3 0 000 6z" />
                                                                <path fill-rule="evenodd"
                                                                    d="M1.323 11.447C2.811 6.976 7.028 3.75 12.001 3.75c4.97 0 9.185 3.223 10.675 7.69.12.362.12.752 0 1.113-1.487 4.471-5.705 7.697-10.677 7.697-4.97 0-9.186-3.223-10.675-7.69a1.762 1.762 0 010-1.113zM17.25 12a5.25 5.25 0 11-10.5 0 5.25 5.25 0 0110.5 0z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </button>
                                                        @if ($showModal)
                                                            <div
                                                                class="modal fixed inset-0 flex items-center justify-center z-50">
                                                                <!-- Modal content -->
                                                                <div wire:click="toggleModal"
                                                                    class="fixed inset-0 bg-gray-950 bg-opacity-20 z-10">
                                                                </div>
                                                                <div
                                                                    class="relative bg-white p-4 shadow-lg rounded-lg z-20">
                                                                    <button wire:click="toggleModal"
                                                                        class="absolute top-2 right-2 bg-gray-300 text-white rounded-full p-1">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            fill="none" viewBox="0 0 24 24"
                                                                            stroke-width="1.5" stroke="currentColor"
                                                                            class="w-6 h-6">
                                                                            <path stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                d="M6 18L18 6M6 6l12 12" />
                                                                        </svg>
                                                                    </button>
                                                                    <div class="w-full flex flex-col gap-5">
                                                                        <div
                                                                            class="flex justify-between items-center px-10 pt-2">
                                                                            <div class="flex-shrink-0 group block">
                                                                                <div class="flex items-center">
                                                                                    <img class="inline-block flex-shrink-0 h-14 w-14 rounded-full"
                                                                                        src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                                                                                        alt="Image Description" />
                                                                                    <div class="ml-3">
                                                                                        <h3
                                                                                            class="text-xl text-gray-900">
                                                                                            {{ $name }} ●
                                                                                        </h3>
                                                                                        <p
                                                                                            class="text-sm font-medium text-gray-400">
                                                                                            maria@gmail.com
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="w-20 h-20 bg-gray-200 rounded-full overflow-hidden flex justify-center items-center border border-red-500">
                                                                                <p class="text-center text-base">
                                                                                    لۆگۆی پەیمانگا
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="grid grid-cols-3 h-full">
                                                                            <div
                                                                                class="col-span-1 flex flex-col justify-between items-center gap-5 mt-7">
                                                                                <div
                                                                                    class="flex flex-col items-center gap-7">
                                                                                    <h1 class="text-4xl text-center">
                                                                                        ئاست
                                                                                    </h1>
                                                                                    <h1 class="text-4xl text-center">
                                                                                        {{ $student->level }}
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
                                                                                <div
                                                                                    class="flex flex-col items-center gap-1">
                                                                                    <div
                                                                                        class="w-16 h-16 bg-gray-200 rounded-full overflow-hidden flex justify-center items-center border border-red-500">
                                                                                        <p class="text-center text-sm">
                                                                                            لۆگۆی تووتی
                                                                                        </p>
                                                                                    </div>
                                                                                    <p class="text-center text-xs">
                                                                                        Powerd by TOOTY
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <form
                                                                                wire:submit.prevent="updateStudent({{ $selectedStudentId }})"
                                                                                class="col-span-2 border-2 border-gray-200 rounded-xl p-3 w-full flex flex-col gap-1 items-center divide-y-2 divide-gray-200">
                                                                                <div
                                                                                    class="flex items-center justify-between gap-10 w-full text-gray-500 text-sm">
                                                                                    <input wire:model="name"
                                                                                        class="appearance-none border-2 @error('name') border-red-500 @enderror font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                        id="name" type="text"
                                                                                        placeholder="type" />
                                                                                    <label for="name">:</label>
                                                                                    <label
                                                                                        for="name">نازناو</label>
                                                                                </div>
                                                                                <div
                                                                                    class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                                    <input wire:model="phone"
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
                                                                                    <input wire:model="age"
                                                                                        class="appearance-none border-2 @error('age') border-red-500 @enderror font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                        id="age" type="text"
                                                                                        placeholder="type" />
                                                                                    <label for="age">:</label>
                                                                                    <label for="age">تەمەن</label>
                                                                                </div>
                                                                                <div
                                                                                    class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                                    <input wire:model="gender"
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
                                                                                    <label
                                                                                        for="name">قوتابخانە</label>
                                                                                </div>
                                                                                <div
                                                                                    class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                                    <select wire:model="class"
                                                                                        id="name"
                                                                                        class="appearance-none border-2 @error('class') border-red-500 @enderror font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none">
                                                                                        <option value="">
                                                                                            Select Name Class
                                                                                        </option>
                                                                                        @foreach ($showClasses as $show)
                                                                                            <option
                                                                                                value="{{ $show->name }}">
                                                                                                {{ $show->name }}
                                                                                            </option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                    <label for="name">:</label>
                                                                                    <label for="name">پۆل</label>
                                                                                </div>
                                                                                <div
                                                                                    class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                                    <input wire:model="level"
                                                                                        class="appearance-none border-2 @error('level') border-red-500 @enderror font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                        id="name" type="text"
                                                                                        placeholder="type" />
                                                                                    <label for="name">:</label>
                                                                                    <label for="name">ئاست</label>
                                                                                </div>
                                                                                <div
                                                                                    class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                                    <input
                                                                                        class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                        id="name" type="text"
                                                                                        placeholder="type" />
                                                                                    <label for="name">:</label>
                                                                                    <label
                                                                                        for="name">ناونیشان</label>
                                                                                </div>
                                                                                <div
                                                                                    class="w-full flex flex-col items-end justify-between gap-2 text-gray-500 pt-1 text-sm">
                                                                                    <label
                                                                                        for="name">:تێبینی</label>
                                                                                    <textarea
                                                                                        class="appearance-none border-2 h-20 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-200 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                        id="name" type="text" placeholder="type"></textarea>
                                                                                </div>
                                                                                <button type="submit"
                                                                                    class="py-3 px-4 w-40 inline-flex justify-center items-center mt-5 gap-2 rounded-xl bg-gray-800 border border-transparent font-semibold text-gray-100 hover:text-white hover:bg-gray-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                                                                                    هەڵگرتن
                                                                                </button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </td>
                                                <td class="h-px w-20 whitespace-nowrap">
                                                    <div class="px-3 py-3 flex justify-center">
                                                        <button wire:click="showModal({{ $student->id }}, 'print')"
                                                            class="py-1.5 px-4 inline-flex justify-center items-center gap-2 rounded-xl border border-transparent font-semibold text-gray-400 text-sm">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 24 24" fill="currentColor"
                                                                class="w-6 h-6">
                                                                <path fill-rule="evenodd"
                                                                    d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </button>
                                                        <!-- Content to be printed -->
                                                        <div id="printable-content" class="hidden">
                                                            <!-- Your content here -->
                                                            <div style="font-family: 'Ubuntu', sans-serif;"
                                                                class="bg-white px-8 py-10 max-w-xl mx-auto">
                                                                <div class="flex items-center justify-between mb-8">
                                                                    <div class="px-6 flex flex-col items-center mb-6">
                                                                        <p
                                                                            class="flex-none text-xl text-indigo-600 font-bold uppercase">
                                                                            tooty</p>
                                                                        <p
                                                                            class="flex-none text-xs font-medium text-gray-400 uppercase">
                                                                            Testing</p>
                                                                    </div>
                                                                    <div class="text-gray-700">
                                                                        <div class="font-bold text-xl mb-2">INVOICE
                                                                        </div>
                                                                        <div class="text-sm">Date:
                                                                            {{ $created_at }}
                                                                        </div>
                                                                        <div class="text-sm">Invoice #: INV12345</div>
                                                                    </div>
                                                                </div>
                                                                <div class="border-b-2 border-gray-300 pb-8 mb-8">
                                                                    <h2 class="text-2xl font-bold mb-4">Bill To:</h2>
                                                                    <div class="text-gray-700 mb-2">
                                                                        {{ $name }}</div>
                                                                    <div class="text-gray-700 mb-2">
                                                                        Level {{ $level }} and Class
                                                                        {{ $class }}
                                                                    </div>
                                                                    <div class="text-gray-700 mb-2">Anytown, USA 12345
                                                                    </div>
                                                                    <div class="text-gray-700">johndoe@example.com
                                                                    </div>
                                                                </div>
                                                                <table class="w-full text-left mb-8">
                                                                    <thead>
                                                                        <tr>
                                                                            <th
                                                                                class="text-gray-700 font-bold uppercase py-2">
                                                                                Description</th>
                                                                            <th
                                                                                class="text-gray-700 font-bold uppercase py-2">
                                                                                Quantity</th>
                                                                            <th
                                                                                class="text-gray-700 font-bold uppercase py-2">
                                                                                Price</th>
                                                                            <th
                                                                                class="text-gray-700 font-bold uppercase py-2">
                                                                                Total</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="py-4 text-gray-700">Product 1
                                                                            </td>
                                                                            <td class="py-4 text-gray-700">1</td>
                                                                            <td class="py-4 text-gray-700">$100.00</td>
                                                                            <td class="py-4 text-gray-700">$100.00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="py-4 text-gray-700">Product 2
                                                                            </td>
                                                                            <td class="py-4 text-gray-700">2</td>
                                                                            <td class="py-4 text-gray-700">$50.00</td>
                                                                            <td class="py-4 text-gray-700">$100.00</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="py-4 text-gray-700">Product 3
                                                                            </td>
                                                                            <td class="py-4 text-gray-700">3</td>
                                                                            <td class="py-4 text-gray-700">$75.00</td>
                                                                            <td class="py-4 text-gray-700">$225.00</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <div class="flex justify-end mb-8">
                                                                    <div class="text-gray-700 mr-2">Subtotal:</div>
                                                                    <div class="text-gray-700">$425.00</div>
                                                                </div>
                                                                <div class="text-right mb-8">
                                                                    <div class="text-gray-700 mr-2">Tax:</div>
                                                                    <div class="text-gray-700">$25.50</div>

                                                                </div>
                                                                <div class="flex justify-end mb-8">
                                                                    <div class="text-gray-700 mr-2">Total:</div>
                                                                    <div class="text-gray-700 font-bold text-xl">
                                                                        $450.50</div>
                                                                </div>
                                                                <div class="border-t-2 border-gray-300 pt-8 mb-8">
                                                                    <div class="text-gray-700 mb-2">Payment is due
                                                                        within 30 days. Late payments are subject to
                                                                        fees.</div>
                                                                    <div class="text-gray-700 mb-2">Please make checks
                                                                        payable to Your Company Name and mail to:</div>
                                                                    <div class="text-gray-700">123 Main St., Anytown,
                                                                        USA 12345</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <!-- End Table -->

                                {{ $students->links('inc.paginate') }}

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

    @push('scripts')
        <script>
            document.addEventListener('livewire:load', function() {
                Livewire.on('printPage', function() {
                    printDiv('printable-content');
                });
            });

            function printDiv(divName) {
                var printContents = document.getElementById(divName).innerHTML;
                var originalContents = document.body.innerHTML;

                document.body.innerHTML = printContents;

                window.print();

                document.body.innerHTML = originalContents;

                location.reload();
            }
        </script>
    @endpush
</div>
