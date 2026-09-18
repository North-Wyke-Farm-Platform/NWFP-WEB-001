<div>
    <x-slot name="sub-header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('North Wyke Farm Platform Data User Guides') }}
        </h2>
    </x-slot>

        @foreach ($publications as $pub)
            <div class="p-3    ">
              @php
                  $slice = Str::after($pub->title, 'The North Wyke Farm Platform: ');
              @endphp
                <b>{{ $slice }}</b>
                <div class="px-5 py-0">
                    @if ($pub->abstract)
                    <p class="italic" >{{ $pub->abstract  }}</p>
                    @endif

                    @if ($pub->doi)

                        <span class="font-semibold">DOI: </span><a
                            class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                            href="https://doi.org/{{ $pub->doi }}">{{ $pub->doi }}
                        </a>
                    @elseif ($pub->url)
                    <br />
                        <a class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                            href="{{ $pub->url }}">{{ $pub->url }}
                        </a>
                    @endif
                </div>
            </div>
        @endforeach

</div>
