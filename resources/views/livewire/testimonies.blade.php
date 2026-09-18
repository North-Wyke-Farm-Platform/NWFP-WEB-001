<div class="container">
    <x-slot name="sub_header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Testimonies') }}
        </h2>
    </x-slot>
    <div class="mx-auto grid max-w-xs items-start gap-6  p-5 lg:max-w-none lg:grid-cols-3">
        @foreach ($testimonies as $testimony)
            <!-- card -->
            <div
                class="border-nw-blue-700  bg-gray-200 hover:bg-gray-100  shadow-slate-950/5 flex h-full flex-col overflow-hidden rounded-2xl">
                <!-- media -->
                @if ($testimony->video_id)
                    <iframe
                        class="w-full scale-100 transform overflow-hidden rounded-lg object-cover transition-transform"
                        src="https://www.youtube.com/embed/{{ $testimony->video_id }}" title="YouTube video player"
                        width="400" height="225" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                @elseif ($testimony->video_file)
                    <video
                        class="w-full scale-100 transform overflow-hidden rounded-lg object-cover transition-transform"
                        controls muted>
                        <source src="/videos/{{ $testimony->video_file }}" type="video/mp4">

                        Your browser does not support the video tag.
                    </video>
                @else
                    <a href="{{ $testimony->URL }}"><img
                            class="h-56 w-full scale-100 transform overflow-hidden rounded-lg object-cover transition-transform"
                            src="https://picsum.photos/id/542/400/225" title="{{ $testimony->URL }}" width="400"
                            height="225" frameborder="0" /></a>
                @endif

                <!-- content -->
                <div class="flex flex-1 flex-col p-6">
                    <div class="flex-1">
                        <h3 class="truncate text-lg font-semibold leading-tight">{{ $testimony->title }}</h3>
                        <p class="mt-2 text-sm tracking-wide text-gray-700">
                            {!! $testimony->short !!}
                        </p>
                    </div>
                    <div class="flex justify-end space-x-2">
                        <x-button-link class="bn-primary mt-auto" href="/testimonies/{{ $testimony->id }}">
                            More...
                        </x-button-link>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
</div>
