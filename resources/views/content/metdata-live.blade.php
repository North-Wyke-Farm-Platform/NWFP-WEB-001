<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Live Met data') }}
        </h2>
    </x-slot>
    <div>

        <div class="p-3">
            <div class="border-2 border-nw-blue-700 bg-nw-blue-50 p-5"><p>This interactive tool displays live meterological data from the Farm Platform's dedicated
                automatic weather station and allows users to plot trends over time</p>
            </div>
        <p class="px-3 pt-2">
            <a class="inline-flex items-center rounded-md border border-transparent bg-nw-blue-700 px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white transition duration-150 ease-in-out hover:bg-lime-500 hover:text-nw-blue-900 focus:bg-lime-700 focus:outline-hidden focus:ring-2 focus:ring-lime-700 focus:ring-offset-2 active:bg-lime-500 disabled:opacity-50"
                href="http://exadcon.rothamsted.ac.uk/livedata/collection.jsf?template=weather&amp;node=4826&amp;units=metric" >
            Visit Site
            </a>
        </p>

        <iframe class="p-3"
            src="http://exadcon.rothamsted.ac.uk/livedata/collection.jsf?template=weather&amp;node=4826&amp;units=metric"
            frameborder="0" height="1000" width="100%" marginheight="0" marginwidth="0" scrolling="no">
            Loading live met data...
        </iframe>



        This interactive tool displays live meterological data from the Farm Platform's dedicated
        automatic weather station and allows users to plot trends over time

    </div>
    </div>

</x-guest-layout>
