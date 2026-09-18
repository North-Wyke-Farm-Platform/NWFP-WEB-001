<div>
    <x-slot name="sub-header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Publications') }}
        </h2>
    </x-slot>
    @if ($hasSearch != "NO")
    <div
        class="flex flex-col items-center justify-between space-y-3 p-4 md:flex-row md:space-x-4 md:space-y-0 print:hidden">
        <div class="w-full md:w-1/2">
            <form class="flex items-center">
                <label class="sr-only" for="simple-search">Search</label>
                <div class="relative w-full">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="h-5 w-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                            viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input
                        class="focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2 pl-10 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                        id="simple-search" type="text" wire:model.live="searchRef"
                        placeholder="Search Title, Keywords..." required="">
                </div>
            </form>
        </div>
        <div class="w-full md:w-1/2">
            <form class="flex items-center">
                <label class="sr-only" for="simple-search">Search</label>
                <div class="relative w-full">
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="h-5 w-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                            viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <input
                        class="focus:ring-primary-500 focus:border-primary-500 dark:focus:ring-primary-500 dark:focus:border-primary-500 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2 pl-10 text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400"
                        id="simple-search" type="text" wire:model.live="searchAuth" placeholder="Search Authors..."
                        required="">
                </div>
            </form>
        </div>
    </div>
    @endif
    @if ($hasButtons != "NO")
    <div class="border-t-4 border-nw-blue-700 p-3">
        @foreach ($types as $typeID => $type)
            <x-button-link href="#{{ $typeID }}">{{ $type }}</x-button-link>
        @endforeach
    </div>
    @endif
    @foreach ($types as $typeID => $type)
        @php
            // this removes the empty ref TYpes headers $j is the number of items that year
            $j = 0;

            foreach ($publications as $pub) {
                if (strpos($pub->ref_type, $type) !== false) {
                    $j = $j + 1;
                }
            }
        @endphp
        @if ($j > 0)
            <h2 class="py-auto mt-4 h-8 bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50"
                id="{{ $typeID }}">{{ $type }}</h2>
        @endif
        @foreach ($years as $year)
            @php
                // this removes the empty year headers $i is the number of items that year
                $i = 0;

                foreach ($publications as $pub) {
                    if (strpos($pub->ref_type, $type) !== false && $pub->pub_year == $year->pub_year) {
                        $i = $i + 1;
                    }
                }
            @endphp
            @if ($i > 0)
                <h2 class="py-auto mt-4 h-8 bg-gray-300 px-4 font-medium">{{ $year->pub_year }}</h2>
                <ul class="space-y-3 p-3">

                    @foreach ($publications as $pub)
                        @if (strpos($pub->ref_type, $type) !== false && $pub->pub_year == $year->pub_year)
                            <li class="list-inside list-disc">

                                {{ $pub->authors }} ({{ $pub->pub_year }})
                                "{{ $pub->title }}",
                                <span class="italic">{{ $pub->journal }}</span>,
                                @if ($pub->volume)
                                    {{ $pub->volume }},
                                @endif
                                @if ($pub->issue)
                                    {{ $pub->issue }},
                                @endif
                                @if ($pub->pages)
                                    {{ $pub->pages }},
                                @endif
                                @if ($pub->doi)
                                    <span class="font-semibold">DOI: </span><a
                                        class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                                        href="https://doi.org/{{ $pub->doi }}">{{ $pub->doi }}
                                    </a>
                                @elseif ($pub->url)
                                    <!---<a class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                                        href="https://doi.org/{{ $pub->url }}">{{ $pub->url }}
                                    </a>--->
                                    <a class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                                        href="{{ $pub->url }}">{{ $pub->url }}
                                    </a>

                                @endif

                            </li>
                        @endif
                    @endforeach
                </ul>
            @endif
        @endforeach
    @endforeach

</div>
