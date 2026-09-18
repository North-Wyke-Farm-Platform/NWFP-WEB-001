<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Live Catchment Data Trends (last 30 days)') }}
        </h2>
    </x-slot>

    <h2 class="h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Daily precipitation</h2>
    <img src="https://exadcon.rothamsted.ac.uk/trend/graph?panel=7498&amp;public=true&amp;width=1162&amp;height=390&amp;showLegend=true"
        alt="" />
    <h2 class="h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Mean Soil and Air Temperature
    </h2>
    <div class="p-3">
        <a href="/rr_tools/farmplatform_charts/view/1" title="Sum Daily Precipitation" rel="lightbox[graph]"><img
                src="https://exadcon.rothamsted.ac.uk/trend/graph?panel=5167&amp;public=true&amp;width=1162&amp;height=390&amp;showLegend=true"
                alt="" /></a>
        <div class="flex justify-center">
            <div class="p-5">Red: Air temperature (deg
                C) at Met Station</div>
            <div class="p-5">Blue: Mean soil temperature (deg C)
                from 15 sensors at 15cm</div>
        </div>

    </div>
    <h2 class="h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Flow and Precipitation
        (largest catchment on each farmlet2)</h2>

    <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700"><span
            class="me-2 rounded-full border-2 border-red-800 bg-red-800 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-red-50">
            Red Farmlet - Catchment 2</span>
    </h3>
    <a href="https://www.rothamsted.ac.uk/rr_tools/farmplatform_charts/view/2"
        title="Blue:  Soil temperature 15cm (deg c). Mean of the 15 sensors located in each catchment. Red: Air temperature (deg c)"
        rel="lightbox[graph]"><img
            src="https://exadcon.rothamsted.ac.uk/trend/graph?panel=5175&amp;public=true&amp;width=1162&amp;height=390&amp;showLegend=true"
            alt="" style="width: 1162px; height: 390px;" /></a>
    <div class="flex justify-center">
        <div class="p-5">Line: Flow (litres/sec)</div>
        <div class="p-5">Bars: Precipitation</div>
    </div>

    <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700"><span
            class="me-2 rounded-full border-2 border-green-800 bg-green-800 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-red-50">
            Green Farmlet - Catchment 4</span>
    </h3>

    <img src="https://exadcon.rothamsted.ac.uk/trend/graph?panel=5168&amp;public=true&amp;width=1162&amp;height=390&amp;showLegend=true"
        alt="" style="width: 1162px; height: 390px;" />
    <div class="flex justify-center">
        <div class="p-5">Line: Flow (litres/sec)</div>
        <div class="p-5">Bars: Precipitation</div>
    </div>
    <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700"><span
            class="me-2 rounded-full border-2 border-nw-blue-800 bg-nw-blue-800 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-red-50">
            Blue Farmlet - Catchment 9</span>
    </h3>

    <img src="https://exadcon.rothamsted.ac.uk/trend/graph?panel=6123&amp;public=true&amp;width=1162&amp;height=390&amp;showLegend=true"
        alt="" style="width: 1162px; height: 390px;" />

    <div class="flex justify-center">
        <div class="p-5">Line: Flow (litres/sec)</div>
        <div class="p-5">Bars: Precipitation</div>
    </div>

</x-guest-layout>
