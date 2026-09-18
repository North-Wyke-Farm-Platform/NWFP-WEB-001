<div>
    <form class="flex items-center p-3">
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
                id="simple-search" type="text" wire:model.live="searchProj" placeholder="Type to search Projects"
                required="" />

        </div>

    </form>
    <div class="w-100 container mx-auto grid grid-cols-2 gap-4 px-3 lg:w-4/5">

        @foreach ($projects as $project)
            <!-- card -->
            <div class="w-100 mx-2 mt-4 rounded-lg bg-white shadow-xl md:flex-row" v-for="card in cards">
                <!-- media -->
                <div class="w-full">
                    <img class="inset-0 h-full w-full object-cover object-center" src="/images/banner1.png" />
                </div>
                <!-- content -->
                <div class="flex w-full flex-col justify-between px-6 py-4 text-gray-800">
                    <h3 class="truncate text-lg font-semibold leading-tight">{{ $project->name }}</h3>
                    <p class="mt-2 border-b-4 border-nw-blue-700 text-sm tracking-wide text-gray-700">
                        GOAL: {!! $project->goal !!}
                    </p>

                    <x-lb.element.modal>

                        <x-slot name="trigger">
                            <x-button-link>Preview...</x-button-link>

                        </x-slot>

                        <x-lb.element.modal.panel>


                            <x-lb.element.modal.body>
                                <p class="mt-2 border-b-4 border-nw-blue-700 text-sm tracking-wide text-gray-700">
                                    DESCRIPTION:
                                </p>
                                {!! Str::substr($project->description, 0, 200) !!}...
                                <p class="mt-2 border-b-4 border-nw-blue-700 text-sm tracking-wide text-gray-700">
                                    THEMES:
                                </p>
                                <ul class="mt-2 border-b-4  border-nw-blue-700  text-sm tracking-wide text-gray-700">
                                    @foreach ($project->themes as $theme)
                                        <x-li-dot class="bg-nw-blue-600">{{ $theme->name }}</x-li-dot>
                                    @endforeach
                                </ul>
                                <p class="mt-2 border-b-4 border-nw-blue-700 text-sm tracking-wide text-gray-700">
                                    DATA:
                                </p>
                                <ul class="mt-2 text-sm tracking-wide text-gray-700">
                                    @foreach ($project->data as $field)
                                        <x-li-dot class="bg-nw-blue-600">{{ $field->name }}</x-li-dot>
                                    @endforeach
                                </ul>
                            </x-lb.element.modal.body>

                            <x-lb.element.modal.footer>
                                <x-button-link href="/projects/{{ $project->id }}">
                                    View
                                </x-button-link>
                                <x-button-link>Close</x-button-link>

                            </x-lb.element.modal.footer>

                        </x-lb.element.modal.panel>

                    </x-lb.element.modal>

                </div>
            </div><!--/ card-->
        @endforeach
    </div>
</div>
