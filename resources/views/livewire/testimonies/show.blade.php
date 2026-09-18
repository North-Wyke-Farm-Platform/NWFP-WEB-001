<div>

    @php
        //dd($id)
    @endphp

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Student Testimony from ' . $student->first_name . ' ' . $student->last_name) }}
        </h2>
    </x-slot>

    <div class="bg-nw-blue-900 p-10 text-center text-3xl font-medium text-gray-50">
        <div class="text-3xl"> {!! $testimony->title !!}</div>
        <div class="text-lg">{{ $student->first_name . ' ' . $student->last_name }} - {{ $organisation->name }}
        </div>

        <x-button-link href="/content/study_with_us">Study with us</x-button-link>
    </div>
    <div class="px-10 py-5 text-center text-lg italic">{!! $testimony->short !!}</div>

    <div class="w-100 flex flex-col items-center bg-gray-300">
        @if ($testimony->video_id)
            <iframe class="scale-100 transform overflow-hidden rounded-lg object-cover transition-transform"
                src="https://www.youtube.com/embed/{{ $testimony->video_id }}" title="YouTube video player"
                width="400" height="225" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        @elseif ($testimony->video_file)
            <video class="scale-100 transform overflow-hidden rounded-lg object-cover transition-transform" controls
                muted>
                <source src="/videos/{{ $testimony->video_file }}" type="video/mp4">

                Your browser does not support the video tag.
            </video>
        @else
            <a href="{{ $testimony->URL }}"><img
                    class="h-56 w-full scale-100 transform overflow-hidden rounded-lg object-cover transition-transform"
                    src="https://picsum.photos/id/542/400/225" title="{{ $testimony->URL }}" width="400"
                    height="225" frameborder="0" /></a>
        @endif
    </div>

    @if ($testimony->long)
        <div class="border-t-2 border-nw-blue-900 px-3 py-3">{!! $testimony->long !!}</div>
    @endif

    @if ($testimony->video_id == null && $testimony->URL)
        <p class="p-2"><a
                class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="{{ $testimony->URL }}">{{ $testimony->URL }}</p>
    @endif
    @if ($testimony->project_id)
        <div class="p-5">
            <ul>
                <x-li-arrow>Project : <a
                        class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        href="/projects/{{ $project->id }}">{{ $project->name }} </x-li-arrow>

            </ul>
        </div>
    @endif

</div>
