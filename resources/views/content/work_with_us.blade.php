<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Work with us') }}
        </h2>
    </x-slot>
    <h2 class="h-16 content-center bg-nw-blue-700 px-4 text-center text-2xl font-medium text-nw-blue-50">
        Research Projects</h2>

    <div class=" content-center items-center pb-10 text-center">
        <div class="p-10">
            <b>We are excited to support projects from a wide range of disciplines. Recent collaborations
                include:-</b>

            <div class="mx-auto grid grid-cols-2 gap-4 p-3">
                <div class="p-5">
                    <ul class="space-y-1">
                        <x-li-arrow>
                            AI and Machine Learning
                        </x-li-arrow>
                        <x-li-arrow>
                            Data Visualisation and Data Journalism
                        </x-li-arrow>
                        <x-li-arrow>
                            Computer Science
                        </x-li-arrow>
                        <x-li-arrow>
                            Uncertainty
                        </x-li-arrow>
                        <x-li-arrow>
                            Sensor Development and Sensor Technologies
                        </x-li-arrow>
                        <x-li-arrow>
                            Bio-Acoustics
                        </x-li-arrow>
                    </ul>
                </div>
                <div class="p-5">
                    <ul class="space-y-1">
                        <x-li-arrow>
                            Soil, Air, Water, Meteorology
                        </x-li-arrow>
                        <x-li-arrow>
                            Animal and Crop Production
                        </x-li-arrow>
                        <x-li-arrow>
                            Farm Management Data
                        </x-li-arrow>
                        <x-li-arrow>
                            Biodiversity
                        </x-li-arrow>
                        <x-li-arrow>
                            Data Wrangling
                        </x-li-arrow>
                        <x-li-arrow>
                            Coding
                        </x-li-arrow>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col content-center items-center pb-10 text-center">
        <x-button-link class="btn-primary" href="/content/projects">
            Examples of Projects
        </x-button-link>
    </div>

    <h2 class="h-16 content-center bg-nw-blue-700 px-4 text-center text-2xl font-medium text-nw-blue-50">
        Use of the Facilities</h2>

    <div class="flex flex-col content-center items-center pb-10 text-center">
        <div class="p-10">
            <p> The unique facility is located in the South West of the UK and offers the research
                community access to a range of <span class="italic">in-situ</span> state-of-the-art instrumentation
                installed
                over three
                hydrologically isolated farming systems or farmlets.</p>

        </div>
    </div>
    <div class="flex flex-col content-center items-center pb-10 text-center">
        <x-button-link class="btn-primary" href="/content/facilities">
            Check our Facilities
        </x-button-link>
    </div>


    <h2 class="h-16 content-center bg-nw-blue-700 px-4 text-center text-2xl font-medium text-nw-blue-50">
        Post Graduate Research and Training</h2>

        <div class="flex flex-col content-center items-center pb-10 text-center">
            <div class="p-10">
                <p> The North Wyke Farm Platform is an exceptional resource for research student projects.
                    Research projects can take place on the farm platform or our long term data sets
                    can be used as the basis for research projects.
                    As well as being open to your own ideas we have a list of suggested projects that we'd
                    be happy to discuss with you whether you are a undergraduate/postgraduate student or a Director
                    of
                    Studies or Supervisor.</p>

            </div>
        </div>
        <div class="flex flex-col content-center items-center pb-10 text-center">
            <x-button-link class="btn-primary" href="/content/supervisor_resources">
                Information for Supervisors
            </x-button-link>
        </div>

        <div class="p-1">
            <div class="border-2 border-nw-blue-700 bg-nw-blue-50 p-3">
                <b>Please contact</b>
                <a href="mailto:nw.farmplatform@rothamsted.ac.uk"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                    <u>nw.farmplatform@rothamsted.ac.uk</u>
                </a>for enquiries.
                </p>
            </div>
        </div>



</x-guest-layout>
