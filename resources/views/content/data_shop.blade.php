<x-guest-layout>
    <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Where To Get Data') }}
            </h2>
    </x-slot>
    <div class="p-3">
        <p>Core data and non-core or worked-up data sets are freely available via the different routes as described below:</p>
        <div class="grid grid-cols-3 gap-4 rounded-top ">
            <div>
                <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">
                    <strong>1. NWFP Data Portal</strong>
                </h2>

                <br>
                <p>Core data as yearly .csv files are available from the dedicated portal.
                    Please note you are required to register in order to use the portal.</p>
            </div>

            <div>
                <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">
                    <strong>2. API</strong></h2>
                <br>
                <p>Access to the core data via API.</p>
            </div>

            <div>
                <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">
                    <strong>3. Non-core and Worked-up Datasets</strong></h2>
                <br>
                <p> A collection of non-core and worked-up datasets are available from the Rothamsted Data Repository.
                    <br><br>
                    Note that the <a class="px-0 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"  href="{{ route('publications') }}" class="text-blue-500 hover:underline">Publications page</a> also contains sources of data under the Dataset category.</p>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-4 rounded-top ">
            <div>
            <p class="px-0 pt-5">
                <x-button-datalinks href="https://nwfp.rothamsted.ac.uk/" target="_blank" class="btn-primary">
                    Click to Access Data Portal
                </x-button-datalinks>
            </div>
            <div>
                <p class="px-0 pt-5">
                    <x-button-datalinks href="https://api-nwfp.rothamsted.ac.uk/" target="_blank" class="btn-primary">
                        Click to Access API
                    </x-button-datalinks>
                </div>
                <div>
                    <p class="px-0 pt-5">
                        <x-button-datalinks href="https://repository.rothamsted.ac.uk/cgi/tabbed_search/archive/advanced?refereed=EITHER&dataset=archive&screen=Material%3A%3ATabbedSearch&keywords=NWFP%20data" target="_blank" class="btn-primary">
                            Click to Access Rothamsted Repository
                        </x-button-datalinks>
                </div>

        </div>
    </div><br>
<h2 class="mt-10 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Aknowledgment</h2>
    <div class="p-3">
        If you decide to use our data in any publications or have used the NWFP facilities, then please:
        <ul class="space-y-3 p-3">
            <x-li-dot class="bg-nw-blue-500">
                <p class="font-semibold">1. Cite one or both of the following 2 papers:</p>
            </x-li-dot>
            <ul class="space-y-3">
                <x-li-arrow>
                    R.J. Orr, P.J. Murray, C.J. Eyles, M.S.A. Blackwell, L.M. Cardenas, A.L. Collins,
                    J.A.J. Dungait, K.W.T.Goulding, B.A. Griffith, S.J. Gurr, P. Harris, J.M.B. Hawkins, T.H. Misselbrook,
                    C. Rawlings, A. Shepherd, H. Sint, T. Takahashi, K.N. Tozer, A.P. Whitmore, L. Wu and M.R.F. Lee. (2016). The North Wyke
                    Farm Platform: effect of temperate grassland farming systems on soil moisture contents, runoff and
                    associated water quality dynamics. European Journal of Soil Science, 67, 374-385.DOI: <a
                        class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        href="https://doi.org/10.1111/ejss.12350">https://doi.org/10.1111/ejss.12350</a>

                </x-li-arrow>
                <x-li-arrow>
                    T. Takahashi, P. Harris, M. S. A. Blackwell, L. M. Cardenas, A. L. Collins, J. A. J. Dungait,
                    J. M. B. Hawkins, T. H. Misselbrook, G. A. McAuliffe, J. N. McFadzean, P. J. Murray, R. J. Orr, M. J.
                    Rivero, L. Wu, M. R. F. Lee, 2018. Roles of instrumented farm-scale trials in trade-off assessments of
                    pasture-based ruminant production systems. Animal, 1766-1776.DOI: <a
                        class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        href="https://doi.org/10.1017/S1751731118000502">https://doi.org/10.1017/S1751731118000502</a>
                </x-li-arrow>
            </ul>
            <br>
            <x-li-dot class="bg-nw-blue-500">
                <p class="font-semibold">2. Add that data were downloaded from the Farm Platform Data Portal, with the
                    URL:  <a class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="https://nwfp.rothamsted.ac.uk/">https://nwfp.rothamsted.ac.uk/</a></p>
            </x-li-dot>

            <x-li-dot class="bg-nw-blue-500">
                <p class="font-semibold">3. For the datasets used, please cite the latest version of the relevant User Guide PDF document(s),
                    that describe the establishment and development of the NWFP, and the various datasets produced in detail.
                    These are listed on the <a class="px-0 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="{{ route('nw-guides') }}"><span class="font-semibold">Data User Guides</span></a> webpage.<br>
                    Note that the User Guide entitled "NWFP_UG_Design_Develop.pdf" should be cited irrespective of the dataset used.
                </p>
            </x-li-dot>

            <x-li-dot class="bg-nw-blue-500">
                <p class="font-semibold">4. Add the following to your acknowledgments section:</p>
            </x-li-dot>
            <div class="border-2 border-red-700 bg-red-50 p-2">
                <p>The North Wyke Farm Platform is a National Bioscience Research Infrastructure (NBRI) supported by the Biotechnology and
                    Biological Sciences Research Council (BBSRC) by grants BB/J004308/1, BBS/E/C/000J0100
                    and currently supported by grant BBS/E/RH/23NB0008 (2023-28).</p>
                <p>We acknowledge the interests of the Ecological Continuity Trust (ECT), whose national network of LTEs
                    includes the experiment on which this research was conducted.</p>
            </div>
        </ul>
    </div>

</x-guest-layout>
