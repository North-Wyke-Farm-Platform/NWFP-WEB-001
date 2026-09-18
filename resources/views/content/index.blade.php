<x-guest-layout>

    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Content - List of Page') }}
        </h2>
    </x-slot>

    <p class="m-5 rounded-sm border border-red-700 bg-orange-400 p-3 text-lg font-semibold text-white"> A working document -
        the link to the old page and to the new pages. progress</p>
    <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Done</h2>
    <ul>

        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="{{ route('content.with.page', ['page' => 'agri_modelling']) }}">Agri Modelling</a>
        </li>
    </ul>
    <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">In Progress</h2>
    <ul>
        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="{{ route('content.with.page', ['page' => 'advanced_technologies']) }}">Advanced Technologies- Issue#20</a> North Wyke and the Farm
                Platform as a Test-Bed For Advances in Sensor Technologies - Issue#20
            http://resources.rothamsted.ac.uk/north-wyke-farm-platform/north-wyke-and-farm-platform-test-bed-advances-sensor-technologies
        </li>
        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="{{ route('content.with.page', ['page' => 'agri_modelling'])  }}">Agri-Modelling - Issue#21</a> -
            http://resources.rothamsted.ac.uk/farm-platform-national-capability/agri-modelling-0
        </li>
        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="{{ route('content.with.page', ['page' => 'map']) }}">Farm Platform Map - Issue#17</a>
            http://resources.rothamsted.ac.uk/farm-platform-national-capability/farm-platform-map
        </li>
        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="{{ route('content.with.page', ['page' => 'data_collection']) }}">Datasets Available on the Data Portal and Record Counts -
                Issue#18</a>
            http://resources.rothamsted.ac.uk/farm-platform-national-capability/data-collections
        </li>
        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="{{ route('content.with.page', ['page' => 'information']) }}">Information on trouble shooting - Issue#22</a>
            http://resources.rothamsted.ac.uk/farm-platform-national-capability/data-portal-guides-and-information
        </li>
        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600">
            <a class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="{{ route('content.with.page', ['page' => 'site_visits']) }}">Site
                Visits - Issue#23</a> :
            http://resources.rothamsted.ac.uk/farm-platform-national-capability/about-farm-platform

        </li>
        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="{{ route('content.with.page', ['page' => 'key_findings']) }}">Key Research Findings - Issue#19</a> -
            http://resources.rothamsted.ac.uk/north-wyke-farm-platform/key-research-findings
        </li>
        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="{{ route('content.with.page', ['page' => 'contacts'])}}"> Contacts - issue#24</a>
        </li>

        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="{{ route('content.with.page', ['page' => 'overview']) }}">Overview & Hypotheses - 25</a> -
            http://resources.rothamsted.ac.uk/north-wyke-farm-platform/overview-hypotheses
        </li>
        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="{{ route('content.with.page', ['page' => 'live_trends']) }}">Live Catchment Data Trends - issue #27</a>
            http://resources.rothamsted.ac.uk/farm-platform-national-capability/farm-platform-live-trends-and-met-data
        </li>
        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="{{ route('content.with.page', ['page' => 'metdata-live']) }}">Meteorogical Data - Issue #26</a>
            http://resources.rothamsted.ac.uk/farm-platform-national-capability/farm-platform-live-trends-and-met-data
        </li>
        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="{{ route('content.with.page', ['page' => 'facilities']) }}">Using Our Facilities and Opportunities for Co-Development -#28</a>
            http://resources.rothamsted.ac.uk/farm-platform-national-capability/using-our-facilities
        </li>

    </ul>

    <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Static Pages - To Do
    </h2>

    <ul class="list-disc">


    </ul>
    <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Pages depending on
        Databases</h2>
    <ul>
        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="{{ route('nw-guides') }}">User Guides, Information, Data Portal Updates and External Links</a>
            http://resources.rothamsted.ac.uk/farm-platform-national-capability/data-portal-guides-and-information
        </li>
        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="{{ route('publications') }}">
                Publications</a> -
            http://resources.rothamsted.ac.uk/north-wyke-farm-platform/publications
        </li>

    </ul>

    <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Needs Sorting</h2>
    <ul>
        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="{{ route('home') }}"> Landing page - will be done later</a>:
            was : http://resources.rothamsted.ac.uk/farmplatform
        </li>

        <li class="hover:text-slate-100 m-5 rounded-lg border border-nw-blue-700 p-3 hover:bg-nw-blue-600"> <a
                class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="{{ route('content.with.page', ['page' => 'timeline']) }}">Timeline of Events</a>
            http://resources.rothamsted.ac.uk/farm-platform-national-capability/timeline-events
        </li>

    </ul>
    <h1 class="mt-0 h-12 content-center bg-nw-blue-50 px-4 text-2xl font-bold text-nw-blue-900">Heading 1</h1>

    <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Heading 2</h2>

    <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Heading 3</h3>
    <h4 class="mt-4 p-3 font-semibold text-nw-blue-700">Heading 4 </h4>

    <span
        class="me-2 rounded-full border-2 border-nw-blue-50 bg-nw-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
        Pill 500
    </span>
    <span
        class="me-2 rounded-full border-2 border-nw-blue-50 bg-nw-blue-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
        Pill 600
    </span>
    <span
        class="me-2 rounded-full border-2 border-nw-blue-50 bg-nw-blue-700 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
        Pill 700
    </span>
    <span
        class="me-2 rounded-full border-2 border-nw-blue-50 bg-nw-blue-800 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
        Pill 800
    </span>
    <span
        class="me-2 rounded-full border-2 border-nw-blue-50 bg-nw-blue-900 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
        Pill 900
    </span>

    <ul class="space-y-3 p-3">
        <x-li-dot class="bg-nw-blue-500">List with a DOT x-li-dot</x-li-dot>
        <x-li-dot class="bg-nw-blue-600">List with a DOT x-li-dot</x-li-dot>
        <x-li-dot class="bg-nw-blue-700">List with a DOT x-li-dot</x-li-dot>
        <x-li-dot class="bg-nw-blue-900">List with a DOT x-li-dot</x-li-dot>
    </ul>
    <ul class="space-y-3">
        <x-li-arrow>List with an arrow x-li-arrow</x-li-arrow>
        <x-li-arrow>List with an arrow x-li-arrow</x-li-arrow>
        <x-li-arrow>List with an arrow x-li-arrow</x-li-arrow>
        <x-li-arrow>List with an arrow x-li-arrow</x-li-arrow>
        <x-li-arrow>List with an arrow x-li-arrow</x-li-arrow>
        <x-li-arrow>List with an arrow x-li-arrow</x-li-arrow>
    </ul>

    <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Soils</h3>
    <!-- ------------------------ One People Card -------------------   -->
    <a
        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"href="https://www.rothamsted.ac.uk/people/martin-blackwell">
        <div class="flex items-center gap-4 p-3 hover:bg-nw-blue-50">
            <img class="h-12 w-12 rounded-full p-1 hover:ring-2 hover:ring-nw-blue-700"
                src="/profile-photos/martin-blackwell.jpg">
            <div class="font-medium dark:text-white">
                <div>
                    Martin-Blackwell
                </div>
                <div class="text-sm text-gray-500 dark:text-gray-400">
                    Soil Scientist
                </div>
            </div>
        </div>

    </a>
    <!-- ------------------------ One People Card With Initials -------------------   -->
    <div class="flex items-center gap-4 p-3">
        <div
            class="relative inline-flex h-12 w-12 items-center justify-center overflow-hidden rounded-full bg-gray-100 dark:bg-gray-600">
            <span class="font-medium text-gray-600 dark:text-gray-300">AN</span>
        </div>
        <div class="font-medium dark:text-white">
            <div>
                Andy Neal
            </div>
            <div class="text-sm text-gray-500 dark:text-gray-400">
                Soil Scientist
            </div>
        </div>
    </div>


    <h2 class="mt-4 h-12 content-center bg-nw-blue-500 px-4 text-lg font-medium text-nw-blue-50">
        <span
            class="me-2 rounded-full border-2 border-nw-blue-50 bg-nw-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
            Data Use
        </span> heading 2 with a pill of color 500
    </h2>

</x-guest-layout>
