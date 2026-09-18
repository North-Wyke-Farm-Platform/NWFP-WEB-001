<x-guest-layout>
    <x-slot name="header">
        @php
        $title = "A NICE TITLE";
    @endphp
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __($title) }}
            </h2>
            <x-share-on-bluesky>{{ urlencode($title) . ' -  '. app('request')->url() }}</x-share-on-bluesky>
        </div>
    </x-slot>


    <div>
        <h1 class="mt-0 h-12 content-center bg-nw-blue-50 px-4 text-2xl font-bold text-nw-blue-900">Heading 1</h1>

        <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Heading 2</h2>

        <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Heading 3</h3>
        <h4 class="mt-4 p-3 font-semibold text-nw-blue-700">Heading 4 </h4>

        <span
            class="me-2 rounded-full  border-nw-blue-50 bg-nw-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
            Pill 500
        </span>
        <span
            class="me-2 rounded-full  border-nw-blue-50 bg-nw-blue-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
            Pill 600
        </span>
        <span
            class="me-2 rounded-full  border-nw-blue-50 bg-nw-blue-700 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
            Pill 700
        </span>
        <span
            class="me-2 rounded-full  border-nw-blue-50 bg-nw-blue-800 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
            Pill 800
        </span>
        <span
            class="me-2 rounded-full  border-nw-blue-50 bg-nw-blue-900 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
            Pill 900
        </span>

        <ul class="space-y-3 p-3">
            <x-li-dot class="bg-nw-blue-500">List with a DOT x-li-dot</x-li-dot>
            <x-li-dot class="bg-nw-blue-600">List with a DOT x-li-dot</x-li-dot>
            <x-li-dot class="bg-nw-blue-700">List with a DOT x-li-dot</x-li-dot>
            <x-li-dot class="bg-nw-blue-900">List with a DOT x-li-dot</x-li-dot>
        </ul>
        <ul class="space-y-3">
            <x-li-arrow>List with an arrow x-li-arrow</x-li-arrow>
            <x-li-arrow>List with an arrow x-li-arrow</x-li-arrow>
            <x-li-arrow>List with an arrow x-li-arrow</x-li-arrow>
            <x-li-arrow>List with an arrow x-li-arrow</x-li-arrow>
            <x-li-arrow>List with an arrow x-li-arrow</x-li-arrow>
            <x-li-arrow>List with an arrow x-li-arrow</x-li-arrow>
        </ul>
        </div>

        <h2 class="mt-4 h-12 content-center bg-nw-blue-500 px-4 text-lg font-medium text-nw-blue-50">
            <span
                class="me-2 rounded-full  border-nw-blue-50 bg-nw-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
                Data Use
            </span> heading 2 with a pill of color 500
        </h2>
        <div class="p-3">
            (<a
            class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
            href="mailto:paul.harris@rothamsted.ac.uk)">paul.harris@rothamsted.ac.uk)</a>
        </div>
    </div>

</x-guest-layout>
