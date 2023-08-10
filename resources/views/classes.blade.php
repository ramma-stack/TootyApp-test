<div>
    <section class="w-full grid grid-cols-8 gap-10 pt-16 pb-8 px-8">

        {{-- Left side --}}
        <div class="w-full col-span-7 flex flex-col gap-5 pr-5">

            {{-- start importants tasks --}}
            <div class="flex justify-between gap-2">
                {{-- start left side task --}}
                <div class="flex gap-4">
                    <a href="{{ route('levels') }}"
                        class="py-3 px-4 w-40 inline-flex justify-center items-center gap-2 rounded-xl shadow-lg bg-gray-200 border border-transparent font-semibold text-gray-400 hover:text-white hover:bg-gray-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                        ئاستی فێرخوازان
                    </a>
                    <a href="{{ route('classes') }}"
                        class="py-3 px-4 w-40 inline-flex justify-center items-center gap-2 rounded-xl shadow-lg bg-gray-900 border border-transparent font-semibold text-gray-100 hover:text-white hover:bg-gray-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                        پۆلەکان
                    </a>
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
                    <a href="{{ route('classes') }}"
                        class="py-2 px-2.5 inline-flex justify-center items-center gap-2 rounded-full border border-orange-500 font-semibold {{ $classes === null ? 'bg-orange-500 text-gray-100' : 'text-gray-500' }} hover:text-white hover:bg-orange-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-orange-500 focus:ring-offset-2 transition-all text-sm">
                        All Classes
                    </a>
                    @foreach ($showClasses as $show)
                        <a href="{{ route('classes') . '?class=' . $show->name }}"
                            class="py-2 px-2.5 inline-flex justify-center items-center gap-2 rounded-full border border-orange-500 font-semibold {{ $show->name === $classes ? 'bg-orange-500 text-gray-100' : 'text-gray-500' }} hover:text-white hover:bg-orange-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-orange-500 focus:ring-offset-2 transition-all text-sm">
                            {{ $show->name }}
                        </a>
                    @endforeach
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
                        Class: <span>{{ !empty($classesInfo->name) ? $classesInfo->name : 'All' }}</span>
                    </h3>
                    <h3
                        class="py-3 px-4 inline-flex justify-center items-center gap-1 border border-transparent font-semibold text-gray-500 text-base">
                        Level: <span>{{ !empty($classesInfo->level) ? $classesInfo->level : 'All' }}</span>
                    </h3>
                    <h3
                        class="py-3 px-4 inline-flex justify-center items-center gap-1 border border-transparent font-semibold text-gray-500 text-base">
                        Age:
                        <span>{{ !empty($classesInfo->age) ? $this->updatedArrayInput($classesInfo->age) : '10 - 30' }}</span>
                    </h3>
                    <h3
                        class="py-3 px-4 inline-flex justify-center items-center gap-1 border capitalize border-transparent font-semibold text-gray-500 text-base">
                        Gender:
                        <span>{{ !empty($classesInfo->gender) ? $classesInfo->gender : 'Male + Female' }}</span>
                    </h3>
                </div>
                @if ($classes != null)
                    <button type="button" wire:click="modalClass('deleteClass')"
                        class="py-3 px-4 whitespace-nowrap inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-red-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm">
                        سڕینەوەی پۆل
                    </button>
                    @if ($deleteClass)
                        <div class="modal fixed inset-0 flex items-center justify-center z-50">
                            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                                <!-- Modal content -->
                                <div wire:click="modalClass('deleteClass')"
                                    class="fixed inset-0 bg-gray-950 bg-opacity-20 z-10">
                                </div>
                                <div
                                    class="relative z-20 p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
                                    <button type="button" wire:click="modalClass('deleteClass')"
                                        class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-toggle="deleteModal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto"
                                        aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <p class="mb-4 text-gray-500 dark:text-gray-300">
                                        دڵنیای کە دەتەوێت ئەم پۆلە بسڕیتەوە؟
                                    </p>
                                    <div class="flex justify-center items-center space-x-4">
                                        <button wire:click="modalClass('deleteClass')" type="button"
                                            class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                            نەخێر، هەڵیوەشێنەرەوە
                                        </button>
                                        <button type="submit" wire:click="deleteClass"
                                            class="py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900">
                                            بەڵێ دڵنیام
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif
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
                                            <th scope="col" class="px-3 py-3 text-right">
                                            </th>
                                            <th scope="col" class="px-3 py-3 text-right">
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($students->total() > 0)
                                            @foreach ($students as $student)
                                                <tr>
                                                    <td class="h-px w-72 whitespace-nowrap">
                                                        <div class="pl-6 lg:pl-3 xl:pl-0 pr-6 py-3">
                                                            <div class="flex items-center gap-x-3">
                                                                <img class="inline-block h-12 w-12 rounded-full"
                                                                    src="{{ asset('image/photo2.png') }}"
                                                                    alt="Image Description">
                                                                <div class="grow">
                                                                    <span class="text-lg font-bold text-gray-800">
                                                                        {{ $student->name }} ●
                                                                    </span>
                                                                    <span
                                                                        class="block text-sm font-bold text-gray-500">
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
                                                            <button
                                                                wire:click="showModal({{ $student->id }}, 'modal')"
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
                                                                                stroke-width="1.5"
                                                                                stroke="currentColor" class="w-6 h-6">
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
                                                                                        <h1
                                                                                            class="text-4xl text-center">
                                                                                            ئاست
                                                                                        </h1>
                                                                                        <h1
                                                                                            class="text-4xl text-center">
                                                                                            {{ $student->level }}
                                                                                        </h1>
                                                                                        <button type="button"
                                                                                            class="py-3 px-4 inline-flex justify-end items-center gap-2">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 24 24"
                                                                                                fill="currentColor"
                                                                                                class="w-12 h-12 text-gray-500">
                                                                                                <path
                                                                                                    fill-rule="evenodd"
                                                                                                    d="M7.875 1.5C6.839 1.5 6 2.34 6 3.375v2.99c-.426.053-.851.11-1.274.174-1.454.218-2.476 1.483-2.476 2.917v6.294a3 3 0 003 3h.27l-.155 1.705A1.875 1.875 0 007.232 22.5h9.536a1.875 1.875 0 001.867-2.045l-.155-1.705h.27a3 3 0 003-3V9.456c0-1.434-1.022-2.7-2.476-2.917A48.716 48.716 0 0018 6.366V3.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM16.5 6.205v-2.83A.375.375 0 0016.125 3h-8.25a.375.375 0 00-.375.375v2.83a49.353 49.353 0 019 0zm-.217 8.265c.178.018.317.16.333.337l.526 5.784a.375.375 0 01-.374.409H7.232a.375.375 0 01-.374-.409l.526-5.784a.373.373 0 01.333-.337 41.741 41.741 0 018.566 0zm.967-3.97a.75.75 0 01.75-.75h.008a.75.75 0 01.75.75v.008a.75.75 0 01-.75.75H18a.75.75 0 01-.75-.75V10.5zM15 9.75a.75.75 0 00-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 00.75-.75V10.5a.75.75 0 00-.75-.75H15z"
                                                                                                    clip-rule="evenodd" />
                                                                                            </svg>
                                                                                        </button>
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex flex-col items-center gap-1">
                                                                                        <div
                                                                                            class="w-16 h-16 bg-gray-200 rounded-full overflow-hidden flex justify-center items-center border border-red-500">
                                                                                            <p
                                                                                                class="text-center text-sm">
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
                                                                                            id="name"
                                                                                            type="text"
                                                                                            placeholder="type" />
                                                                                        <label for="name">:</label>
                                                                                        <label
                                                                                            for="name">نازناو</label>
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                                        <input wire:model="phone"
                                                                                            class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                            id="name"
                                                                                            type="text"
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
                                                                                            id="age"
                                                                                            type="text"
                                                                                            placeholder="type" />
                                                                                        <label for="age">:</label>
                                                                                        <label
                                                                                            for="age">تەمەن</label>
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                                        <input wire:model="gender"
                                                                                            class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                            id="name"
                                                                                            type="text"
                                                                                            placeholder="type" />
                                                                                        <label for="name">:</label>
                                                                                        <label
                                                                                            for="name">ڕەگەز</label>
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                                        <input
                                                                                            class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                            id="name"
                                                                                            type="text"
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
                                                                                        <label
                                                                                            for="name">پۆل</label>
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                                        <input wire:model="level"
                                                                                            class="appearance-none border-2 @error('level') border-red-500 @enderror font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                            id="name"
                                                                                            type="text"
                                                                                            placeholder="type" />
                                                                                        <label for="name">:</label>
                                                                                        <label
                                                                                            for="name">ئاست</label>
                                                                                    </div>
                                                                                    <div
                                                                                        class="flex items-center justify-between gap-10 w-full text-gray-500 pt-1 text-sm">
                                                                                        <input
                                                                                            class="appearance-none border-2 font-semibold placeholder:text-gray-400 bg-gray-100 border-gray-100 hover:border-gray-200 transition-colors rounded w-full py-1 px-2 text-gray-500 leading-tight focus:outline-none"
                                                                                            id="name"
                                                                                            type="text"
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
                                                            <button
                                                                wire:click="showModal({{ $student->id }}, 'print')"
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
                                                                    <div
                                                                        class="flex items-center justify-between mb-8">
                                                                        <div
                                                                            class="px-6 flex flex-col items-center mb-6">
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
                                                                            <div class="text-sm">Invoice #: INV12345
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="border-b-2 border-gray-300 pb-8 mb-8">
                                                                        <h2 class="text-2xl font-bold mb-4">Bill To:
                                                                        </h2>
                                                                        <div class="text-gray-700 mb-2">
                                                                            {{ $name }}</div>
                                                                        <div class="text-gray-700 mb-2">
                                                                            Level {{ $level }} and Class
                                                                            {{ $class }}
                                                                        </div>
                                                                        <div class="text-gray-700 mb-2">Anytown, USA
                                                                            12345
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
                                                                                <td class="py-4 text-gray-700">Product
                                                                                    1
                                                                                </td>
                                                                                <td class="py-4 text-gray-700">1</td>
                                                                                <td class="py-4 text-gray-700">$100.00
                                                                                </td>
                                                                                <td class="py-4 text-gray-700">$100.00
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="py-4 text-gray-700">Product
                                                                                    2
                                                                                </td>
                                                                                <td class="py-4 text-gray-700">2</td>
                                                                                <td class="py-4 text-gray-700">$50.00
                                                                                </td>
                                                                                <td class="py-4 text-gray-700">$100.00
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="py-4 text-gray-700">Product
                                                                                    3
                                                                                </td>
                                                                                <td class="py-4 text-gray-700">3</td>
                                                                                <td class="py-4 text-gray-700">$75.00
                                                                                </td>
                                                                                <td class="py-4 text-gray-700">$225.00
                                                                                </td>
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
                                                                        <div class="text-gray-700 mb-2">Please make
                                                                            checks
                                                                            payable to Your Company Name and mail to:
                                                                        </div>
                                                                        <div class="text-gray-700">123 Main St.,
                                                                            Anytown,
                                                                            USA 12345</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="h-px w-20 whitespace-nowrap">
                                                        <div class="px-6 py-2 flex justify-center">
                                                            <p
                                                                class="py-1 px-4 inline-flex justify-between items-center gap-2 rounded-xl bg-gray-200 border border-transparent font-semibold text-gray-500/80 text-sm">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 24 24" class="h-6 w-6"
                                                                    fill="currentColor">
                                                                    <path
                                                                        d="M17 2h-4v4.059a8.946 8.946 0 0 1 4 1.459V2zm-6 0H7v5.518a8.946 8.946 0 0 1 4-1.459V2zm1 20a7 7 0 1 0 0-14 7 7 0 0 0 0 14zm-1.225-8.519L12 11l1.225 2.481 2.738.397-1.981 1.932.468 2.727L12 17.25l-2.449 1.287.468-2.727-1.981-1.932 2.737-.397z">
                                                                    </path>
                                                                </svg>
                                                                <!-- Circle -->
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="1.5"
                                                                    stroke="currentColor"
                                                                    class="w-6 h-6 text-green-500">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                                                                </svg>
                                                            </p>
                                                        </div>
                                                    </td>
                                                    <td class="h-px w-20 whitespace-nowrap">
                                                        <div class="px-3 py-3 flex justify-center">
                                                            <div
                                                                class="border-2 border-gray-400 rounded-2xl p-[2.5px]">
                                                                <span
                                                                    class="text-white bg-green-500 rounded-l-xl px-2">Paid</span>
                                                                <span class="text-green-500 px-3">100.000</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="h-px w-20 whitespace-nowrap">
                                                        <div class="px-3 py-3 flex justify-center">
                                                            <div
                                                                class="flex border-2 border-gray-400 rounded-2xl p-[2.5px]">
                                                                <div
                                                                    class="flex items-center text-white bg-gray-400 rounded-l-xl px-3">
                                                                    <svg class="h-5 w-5 text-gray-100"
                                                                        fill="currentColor"
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
                                            @endforeach
                                        @endif
                                        {{-- <tr>
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
                                                                    fill="transparent"
                                                                    :stroke-dasharray="circumference"
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
                                                        <span
                                                            class="text-white bg-green-500 rounded-l-xl px-2">Paid</span>
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
                                                            viewBox="0 0 24 24" stroke-width="1.5"
                                                            stroke="currentColor" class="w-6 h-6 text-green-500">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                                                        </svg>
                                                    </p>
                                                </div>
                                            </td>
                                            <td :class="{ 'hidden': isActive }" class="h-px w-20 whitespace-nowrap">
                                                <div class="px-3 py-3 flex justify-center">
                                                    <div class="border-2 border-gray-400 rounded-2xl p-0.5 pt-[3px]">
                                                        <span
                                                            class="text-white bg-red-500 rounded-l-xl px-2">Paid</span>
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
                                                                    fill="transparent"
                                                                    :stroke-dasharray="circumference"
                                                                    :stroke-dashoffset="circumference - 35 / 100 *
                                                                        circumference"
                                                                    class="text-blue-500 " />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr> --}}
                                    </tbody>
                                </table>
                                <!-- End Table -->

                                @if ($students->total() === 0)
                                    <div class="w-full mt-10 bg-gray-500 text-sm text-white rounded-md p-4"
                                        role="alert">
                                        <span class="font-bold">Alert!</span>
                                        <span class="block sm:inline"> No data found.</span>
                                    </div>
                                @endif

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

        {{-- Right section --}}
        <div class="col-span-1 flex flex-col justify-between">
            {{-- top btn --}}
            <div class="flex flex-col items-end gap-3">
                <button type="button" wire:click="modalClass('createClass')"
                    class="py-3 px-4 w-40 inline-flex justify-center items-center gap-2 rounded-xl shadow-lg bg-gray-900 border border-transparent font-semibold text-gray-100 hover:text-white hover:bg-gray-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                    پۆلی نوێ
                </button>
                @if ($createClass)
                    <div class="modal fixed inset-0 flex items-center justify-center z-50">
                        <!-- Modal content -->
                        <div wire:click="modalClass('createClass')"
                            class="fixed inset-0 bg-gray-950 bg-opacity-20 z-10">
                        </div>
                        <div class="relative bg-white p-4 shadow-lg rounded-lg z-20">
                            <button wire:click="modalClass('createClass')"
                                class="absolute top-2 right-2 bg-gray-300 text-white rounded-full p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                            <div class="w-full">
                                <form wire:submit.prevent="addClass()"
                                    class="border-2 border-gray-300 rounded-xl p-5 w-full flex flex-col gap-3 items-center overflow-hidden">
                                    <h1 class="text-center text-xl">
                                        پۆلی نوێ
                                    </h1>
                                    <div class="flex items-center w-full gap-10">
                                        <label for="name">Name:</label>
                                        <input wire:model="name"
                                            class="appearance-none border-2 @error('name') border-red-500 @enderror font-semibold placeholder:text-gray-500 bg-gray-200 border-gray-200 hover:border-gray-200 transition-colors rounded-lg w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:ring-orange-600 focus:border-orange-600 focus:shadow-outline"
                                            id="name" type="text" placeholder="type" />
                                    </div>
                                    <div class="flex items-center w-full gap-10">
                                        <label for="level">Level:</label>
                                        <input wire:model="level"
                                            class="appearance-none border-2 @error('level') border-red-500 @enderror  font-semibold placeholder:text-gray-500 bg-gray-200 border-gray-200 hover:border-gray-200 transition-colors rounded-lg w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:ring-orange-600 focus:border-orange-600 focus:shadow-outline"
                                            id="level" type="text" placeholder="type" />
                                    </div>
                                    <div class="flex items-center w-full gap-5">
                                        <label for="age">Age:</label>
                                        <select wire:model="age" id="age"
                                            class="appearance-none border-2 @error('age') border-red-500 @enderror font-semibold bg-gray-200 border-gray-200 hover:border-gray-200 transition-colors rounded-lg w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:ring-orange-600 focus:border-orange-600 focus:shadow-outline">
                                            <option value="">Select Age</option>
                                            @for ($i = 10; $i <= 30; $i++)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>
                                        <span>to</span>
                                        <select wire:model="to" id="to"
                                            class="appearance-none border-2 @error('to') border-red-500 @enderror font-semibold bg-gray-200 border-gray-200 hover:border-gray-200 transition-colors rounded-lg w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:ring-orange-600 focus:border-orange-600 focus:shadow-outline">
                                            <option value="">Select Age</option>
                                            @for ($i = 10; $i <= 30; $i++)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="flex items-center w-full gap-10">
                                        <label for="gender">Gender:</label>
                                        <select wire:model="gender" id="gender"
                                            class="appearance-none border-2 @error('gender') border-red-500 @enderror font-semibold bg-gray-200 border-gray-200 hover:border-gray-200 transition-colors rounded-lg w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:ring-orange-600 focus:border-orange-600 focus:shadow-outline">
                                            <option value="">Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="Male + Female">Male + Female</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col w-full gap-1">
                                        <label for="name">Note:</label>
                                        <textarea wire:model="note"
                                            class="appearance-none h-28 border-2 @error('note') border-red-500 @enderror  font-semibold placeholder:text-gray-500 bg-gray-200 border-gray-200 hover:border-gray-200 transition-colors rounded-lg w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:ring-orange-600 focus:border-orange-600 focus:shadow-outline"
                                            id="name" type="text" placeholder="type"></textarea>
                                    </div>
                                    <button type="submit"
                                        class="py-3 px-4 w-40 inline-flex justify-center items-center gap-2 rounded-xl bg-gray-800 border border-transparent font-semibold text-gray-100 hover:text-white hover:bg-gray-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                                        دروستکردنی پۆل
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif

                <button type="button" wire:click="modalClass('updateClass')"
                    class="py-3 px-4 w-40 inline-flex justify-center items-center gap-2 rounded-xl shadow-lg bg-gray-900 border border-transparent font-semibold text-gray-100 hover:text-white hover:bg-gray-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                    دەستکاریکردنی پۆل
                </button>
                @if ($updateClass)
                    <div class="modal fixed inset-0 flex items-center justify-center z-50">
                        <!-- Modal content -->
                        <div wire:click="modalClass('updateClass')"
                            class="fixed inset-0 bg-gray-950 bg-opacity-20 z-10">
                        </div>
                        <div class="relative bg-white p-4 shadow-lg rounded-lg z-20">
                            <button wire:click="modalClass('updateClass')"
                                class="absolute top-2 right-2 bg-gray-300 text-white rounded-full p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                            <div class="w-full">
                                <form wire:submit.prevent="updateClass()"
                                    class="border-2 border-gray-300 rounded-xl p-5 w-full flex flex-col gap-3 items-center overflow-hidden">
                                    <h1 class="text-center text-xl">
                                        دەستکاریکردنی پۆل
                                    </h1>
                                    <div class="flex items-center w-full gap-10">
                                        <label for="name">Name:</label>
                                        <select wire:model="name" id="name"
                                            class="appearance-none border-2 @error('name') border-red-500 @enderror font-semibold bg-gray-200 border-gray-200 hover:border-gray-200 transition-colors rounded-lg w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:ring-orange-600 focus:border-orange-600 focus:shadow-outline">
                                            <option value="">Select Name Class</option>
                                            @foreach ($showClasses as $show)
                                                <option value="{{ $show->name }}">
                                                    {{ $show->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="flex items-center w-full gap-10">
                                        <label for="level">Level:</label>
                                        <input wire:model="level"
                                            class="appearance-none border-2 @error('level') border-red-500 @enderror  font-semibold placeholder:text-gray-500 bg-gray-200 border-gray-200 hover:border-gray-200 transition-colors rounded-lg w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:ring-orange-600 focus:border-orange-600 focus:shadow-outline"
                                            id="level" type="text" placeholder="type" />
                                    </div>
                                    <div class="flex items-center w-full gap-5">
                                        <label for="age">Age:</label>
                                        <select wire:model="age" id="age"
                                            class="appearance-none border-2 @error('age') border-red-500 @enderror font-semibold bg-gray-200 border-gray-200 hover:border-gray-200 transition-colors rounded-lg w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:ring-orange-600 focus:border-orange-600 focus:shadow-outline">
                                            <option value="">Select Age</option>
                                            @for ($i = 10; $i <= 30; $i++)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>
                                        <span>to</span>
                                        <select wire:model="to" id="to"
                                            class="appearance-none border-2 @error('to') border-red-500 @enderror font-semibold bg-gray-200 border-gray-200 hover:border-gray-200 transition-colors rounded-lg w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:ring-orange-600 focus:border-orange-600 focus:shadow-outline">
                                            <option value="">Select Age</option>
                                            @for ($i = 10; $i <= 30; $i++)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="flex items-center w-full gap-10">
                                        <label for="gender">Gender:</label>
                                        <select wire:model="gender" id="gender"
                                            class="appearance-none border-2 @error('gender') border-red-500 @enderror font-semibold bg-gray-200 border-gray-200 hover:border-gray-200 transition-colors rounded-lg w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:ring-orange-600 focus:border-orange-600 focus:shadow-outline">
                                            <option value="">Select Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="Male + Female">Male + Female</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col w-full gap-1">
                                        <label for="name">Note:</label>
                                        <textarea wire:model="note"
                                            class="appearance-none h-28 border-2 @error('note') border-red-500 @enderror  font-semibold placeholder:text-gray-500 bg-gray-200 border-gray-200 hover:border-gray-200 transition-colors rounded-lg w-full py-2 px-3 text-gray-800 leading-tight focus:outline-none focus:ring-orange-600 focus:border-orange-600 focus:shadow-outline"
                                            id="name" type="text" placeholder="type"></textarea>
                                    </div>
                                    <button type="submit"
                                        class="py-3 px-4 w-40 inline-flex justify-center items-center gap-2 rounded-xl bg-gray-800 border border-transparent font-semibold text-gray-100 hover:text-white hover:bg-gray-500 focus:outline-none focus:ring-2 ring-offset-white focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm">
                                        هەڵگرتنی گۆڕانکاری
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
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
