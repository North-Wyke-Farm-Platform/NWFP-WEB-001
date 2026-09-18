<x-guest-layout>

    <x-slot name="header">
        @php
            $title = 'Key Research Findings';
        @endphp
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __($title) }}
            </h2>
            <x-share-on-bluesky>{{ urlencode($title) . ' -  ' . app('request')->url() }}</x-share-on-bluesky>
        </div>
    </x-slot>

    <h2 class="h-12 content-center bg-nw-blue-900 px-4 text-lg font-medium text-nw-blue-50">1. Soil health and flood
        prevention</h2>
    <div class="grid-col-1 grid gap-4 p-3 lg:grid-cols-2">

        <div class="rounded-lg border-2 border-nw-blue-700 shadow-sm">
            <h2 class="h-16 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">1a: Livestock
                grazing
                improves soil health and thereby reduces the chance of floods</h2>
            <div class="pl-5 pr-5 pt-5"><img class="mx-auto" src="/images/Fig1a.png"
                    alt="French drain water capturing system at North Wykes" /></div>

            <div class="p-3">
                <p><span class="italic">Fig .1a 'French drain' water capturing system at North
                        Wyke.</span></p>
                <p>Each additional cow on pasture has been shown to enable the soil to retain
                    further 360 L ha<sup>-1</sup> yr<sup>-1</sup> of water, rather than losing it downstream along with
                    dissolved nutrients.
                </p>
                <div class="mt-2">
                    <p class="text-sm">[Takahashi <span class="italic">et al</span>., (2018). Animal, 12, 8, 1766-1776.
                        <a class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                            href="https://doi.org/10.1017/S1751731118000502">(doi:
                            10.1017/S1751731118000502)</a>.]
                    </p>
                </div>
            </div>
        </div>
        <div class="rounded-lg border-2 border-nw-blue-700 shadow-sm">
            <h2 class="h-16 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">1b. Maintaining
                soil
                health, in turn, also helps animals grow more efficiently</h2>
            <div class="pb-7"><img class="mx-auto" src="/images/Fig1b.png" alt="" /></p>
            </div>
            <div class="p-3">
                <p><span class="italic">Fig. 1b. </span>Relationship between soil organic carbon and the animal
                    performance
                    observed at each grazing field. </p>

                <p>The positive correlation between soil organic carbon and animal weight gain highlights
                    the importance of soil management in livestock farming. </p>

                <div class="mt-2">
                    <p class="text-sm">[Takahashi <span class="italic">et al</span>., (2018). Animal, 12, 8, 1766-1776.
                        <a class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                            href="https://doi.org/10.1017/S1751731118000502">(doi:
                            10.1017/S1751731118000502)</a>.]
                    </p>
                </div>
            </div>

        </div>
    </div>
    <h2 class="mt-4 h-12 content-center bg-nw-blue-900 px-4 text-lg font-medium text-nw-blue-50">2. Practical solutions
        for sustainable livestock systems</h2>
    <div class="grid-col-1 grid gap-4 p-3 lg:grid-cols-2">
        <div class="rounded-lg border-2 border-nw-blue-700 shadow-sm">
            <h2 class="h-16 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">2a: Clovers can
                help cut down the carbon footprint of cattle and sheep farms.</h2>
            <img class="mx-auto" src="/images/Fig2a.png" alt="" />
            <div class="p-3">
                <p><span class="italic">Fig. 2a. Carbon footprint of animals reared at North Wyke is
                        measured at an unprecedentedly high resolution.</span></p>

                <p>The white clover-based system has been shown to be environmentally more
                    efficient as it is not responsible for greenhouse gases produced during the synthesis of nitrogen
                    fertilisers. </p>

                <div class="mt-2">
                    <p class="text-sm">[McAuliffe <span class="italic">et al</span>., (2018). Journal of Cleaner
                        Production, 177, 1672-1680.
                        <a class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                            href="https://doi.org/10.1016/j.jclepro.2017.10.113">(doi.org/10.1016/j.jclepro.2017.10.113)</a>.]
                    </p>
                </div>

            </div>
        </div>
        <div class="rounded-lg border-2 border-nw-blue-700 shadow-sm">
            <h2 class="h-16 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">2b: If you
                decide to test your soil, you might as well do it right</h2>
            <img class="mx-auto" src="/images/Fig2b.png" alt="" />
            <div class="p-3">
                <p><span class="italic">Fig. 2b. Newly identified relationship between the number of
                        soil samples collected and the accuracy of animal growth forecasting.</span></p>

                <p>Infrequent spot sampling commonplace in the industry is unlikely to
                    provide useful information.</p>
                <div class="mt-2">
                    <p class="text-sm">[Takahashi <span class="italic">et al</span>., (2018). European Federation of
                        Animal Science, Book of Abstracts No.24, 422.
                        <a class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                            href="https://docs.eaap.org/boa/2018_Dubrovnik_EAAP_Book_Abstracts.pdf">(https://docs.eaap.org/boa/2018_Dubrovnik_EAAP_Book_Abstracts.pdf)</a>.]
                    </p>
                </div>

            </div>
        </div>
    </div>
    <h2 class="mt-4 h-12 content-center bg-nw-blue-900 px-4 text-lg font-medium text-nw-blue-50">3. Informing
        agricultural policy in the UK and beyond</h2>
    <div class="grid-col-1 grid gap-4 p-3 lg:grid-cols-2">
        <div class="rounded-lg border-2 border-nw-blue-700 shadow-sm">
            <h2 class="h-16 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">3a: There are
                'green' cows
                and 'not-so-green' cows</h2>

            <img class="mx-auto" src="/images/Fig3a.png"
                alt="Carbon footprints of individual cattle and their
                        growth performances" />
            <div class="p-3">
                <p><span class="italic">Fig. 3a. Carbon footprints of individual cattle and their
                        growth performances. </span></p>

                <p>Less polluting animals are also economically more profitable,
                    suggesting that environmentally sustainable grazing management is
                    commercially feasible. </p>
                <div class='mt-2'>
                    <p class="text-sm">[McAuliffe <span class="italic">et al</span>., (2018). Journal of Cleaner
                        Production, 177, 1672-1680.
                        <a class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                            href="https://doi.org/10.1016/j.jclepro.2017.10.113">(doi.org/10.1016/j.jclepro.2017.10.113)];</a>
                    </p>
                    <p class="text-sm">[Balmford <span class="italic">et al.,</span> (2018). Nature Sustainability, 1,
                        9, 477-485.
                        <a class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                            href="https://doi.org/10.1038/s41893-018-0138-5">(doi.org/10.1038/s41893-018-0138-5)</a>]
                    </p>
                </div>

            </div>

        </div>
        <div class="rounded-lg border-2 border-nw-blue-700 shadow-sm">
            <h2 class="h-16 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">3b: Contrary to
                common
                belief, beef may be greener than chicken if consumed responsibly</h2>
            <img class="mx-auto" src="/images/Fig3b.png"
                alt="Carbon footprint of grass-fed beef and free-range
                    chicken per weight of meat" />
            <div class="p-3">
                <p><span class="italic">Fig.3b. Carbon footprint of grass-fed beef and free-range
                        chicken per weight of meat (left) and per contribution to recommended daily intake of 12
                        essential nutrients (centre). </span></p>

                <p>The reversal is due to high levels of iron, zinc, vitamin
                    B12, omega-3 fatty acids and other beneficial nutrients found in grass-fed beef.
                    Beef also requires less land suitable for arable
                    production (right). </p>
                <div class='mt-2'>
                    <p class="text-sm">[McAuliffe <span class="italic">et al</span>., (2018). Food and Energy Security,
                        7, 3, 143.
                        <a class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                            href="https://doi.org/10.1002/fes3.143">(doi.org/10.1002/fes3.143)];</a>
                    </p>
                    <p class="text-sm">[Lee <span class="italic">et al.,</span> (2018). European Federation of
                        Animal Science, Book of Abstracts No.24, 339.
                        <a class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                            href="https://docs.eaap.org/boa/2018_Dubrovnik_EAAP_Book_Abstracts.pdf">(https://docs.eaap.org/boa/2018_Dubrovnik_EAAP_Book_Abstracts.pdf)</a>]
                    </p>
                </div>

            </div>
        </div>
    </div>

</x-guest-layout>
