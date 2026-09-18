<x-guest-layout>
    <x-slot name="header">
        @php
            // we don't like & here ! sorry - it messes up the share button
            $title = "Overview & Hypotheses";
        @endphp
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __($title) }}
            </h2>
            <x-share-on-bluesky>{{ urlencode($title) . ' -  ' . app('request')->url() }}</x-share-on-bluesky>
        </div>
    </x-slot>

    <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Core Remit</h2>
    <div class="p-3">
    <p>The core remit of the platform is the comparison of treatments using a farm systems approach. The
        core hypothesis reflects this via the calculation of "sustainability metrics" that can accurately
        predict the long-term performance of each treatment - economically, environmentally and socially.
    </p>
    <p>Metrics are directly calculated from the platform's fine resolution data collections; and are
        carefully chosen to be transferrable to other farming systems, across the UK and the world. In this
        way, outputs from the platform directly influence sustainable land use both nationally and
        internationally.</p>
        <br>
    <p>A critical over-arching challenge concerns approaches for reliably detecting the impacts of the
        treatments per se, in the context of natural hydro-climatic variability and inherent limitations of
        the platform design itself. The acknowledgment of spatiotemporal effects in the system is critical,
        either advancing science through a direct understanding of such dynamic processes or determining a
        sufficient observational scale so that a given hypothesis can be reliably tested, independent of
        such effects. Static spatial confounders also exert an influence, such as topography, soil class,
        and the physical layout of the fields.</p>
    </div>
    <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Past, Current, and Planned Treatments</h2>

    <div class="grid grid-cols-2 gap-8 p-4">
    <div class="flex flex-col items-center">
        <p>The platform consists of three outdoor farming systems, each consisting of five
            component catchments over 21 ha. Catchments comprise single or multiple fields,
            that are heavily monitored to provide fine resolution data on all inputs, outputs and events.
            The farming systems periodically change, where the timeline of each system's treatment change are as follows:
 <br><br>
            <ul class="space-y-3 p-3">
                <x-li-dot class="bg-nw-blue-800"><span class="font-semibold">From April 2011 to March 2013:</span></x-li-dot>
                    All three pasture-based livestock farming systems were as one (permanent pasture) with no separate treatments in operation. This is the baseline period.<br><br>
                <x-li-dot class="bg-nw-blue-800"><span class="font-semibold">From April 2013 to September 2015:</span></x-li-dot>
                    Two of three systems gradually transitioned into the first system change period, one re-sown with high sugar grasses (red system), the other
                    re-sown with high sugar grass, white clover mix (blue system). The remaining (green) system
                    continued as permanent pasture and will always do so, for long-term monitoring. <br><br>
                <x-li-dot class="bg-nw-blue-800"><span class="font-semibold">From September 2015 to April 2019:</span></x-li-dot>
                    The first system change is in full operation across all three livestock farming systems and pasture treatments. <br><br>
                <x-li-dot class="bg-nw-blue-800"><span class="font-semibold">From April 2019:</span></x-li-dot>
                    The first system change embarked on a transition to a second system change period, where the red system transitioned
                    to an arable system growing human edible crops. Given the red system transition to an arable system, the livestock linked to this
                    system are housed representing a fourth (brown) system (or treatment) for evaluation of more intensive finishing and fine resolution monitoring.
            </ul>
        </p>
    </div>
    <img src="{{ asset('images/20250723_map_Userguide.png') }}" alt="fields" class="shadow-xl rounded-2xl w-48 h-48 border border-gray-200"
     alt="Profile Photo" style="width: 100%; height: 800px;">
    </div>

    <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Selected Treatment Hypotheses</h2>
    <div class="p-3">
    <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Hypotheses associated with the baseline period include:</h3>
    <ul class="space-y-3 p-3">
        <x-li-dot class="bg-nw-blue-800"> Emissions to water under best practice lowland grazing farming will still exceed intrinsic losses
            as driven by soil type and slope.</x-li-dot>
        <x-li-dot class="bg-nw-blue-800">Emissions to water under best practice lowland grazing farming will still exceed some environmental
            thresholds for aquatic biology.</x-li-dot>
        <x-li-dot class="bg-nw-blue-800">Animal performance will be benchmarked within typical UK production levels (sheep and beef).</x-li-dot>
    </ul>
    <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Hypotheses associated with the first system change period include:</h3>
    </h3>
    <ul class="space-y-3 p-3">
        <x-li-dot class="bg-nw-blue-800">The re-seeding of permanent grassland with varieties that increase C sequestration and improve
            animal nutrition provide more sustainable grassland systems.</x-li-dot>
        <x-li-dot class="bg-nw-blue-800">The use of clover in pasture-based livestock production offers a high-risk high-return option for
            both commercial producers and the natural environment.</x-li-dot>
        <x-li-dot class="bg-nw-blue-800">Re-seeding of permanent pasture will provide greater returns in terms of animal performance than
            permanent pasture and in concert, reduce emission intensity.</x-li-dot>
    </ul>
    <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Hypotheses associated with the second system change period include:</h3>
    </h3>
    <ul class="space-y-3 p-3">
        <x-li-dot class="bg-nw-blue-800">In agro-ecological zones where the geographical environment does not suit human edible crop
            production, farming systems without livestock are unsustainable - economically, environmentally and
            socially.</x-li-dot>
        <x-li-dot class="bg-nw-blue-800">Intensive housed finishing of cattle provides more sustainable outputs than extended grazing
            systems – economically, environmentally and socially.</x-li-dot>
    </ul>
</x-guest-layout>
