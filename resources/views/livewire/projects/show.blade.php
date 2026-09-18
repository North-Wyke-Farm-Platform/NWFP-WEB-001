<div>

    @php
        //dd($id)
    @endphp

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('' . $project->name) }}
        </h2>
    </x-slot>

    <div class="bg-nw-blue-900 p-10 text-center text-3xl font-medium text-gray-50">
        <div class="text-3xl">{!! $project->name !!} <br >
        <x-button-link  href="{{ url()->previous() }}">Back</x-button-link>  </div>
    </div>
    <div class="px-10 py-5 text-lg italic">{!! $project->goal !!}</div>

    <div class="border-t-2 border-nw-blue-900 px-3 py-3">
        <p class="mt-2 text-sm tracking-wide text-gray-700">
            DESCRIPTION:
        </p>
        {!! $project->description !!}
    </div>
    <div class="columns-2 gap-4 border-t-2 border-nw-blue-900 px-3 py-3">

        <p class="mt-2">
            THEMES:
        </p>
        <ul class="mt-2 text-sm tracking-wide text-gray-700">
            @foreach ($project->themes as $theme)
                <x-li-dot class="bg-nw-blue-600">{{ $theme->name }}</x-li-dot>
            @endforeach
        </ul>

        <p class="mt-2 text-sm tracking-wide text-gray-700">
            DATA:
        </p>
        <ul class="mt-2 text-sm tracking-wide text-gray-700">
            @foreach ($project->data as $field)
                <x-li-dot class="bg-nw-blue-600">{{ $field->name }}</x-li-dot>
            @endforeach
        </ul>

    </div>

</div>
