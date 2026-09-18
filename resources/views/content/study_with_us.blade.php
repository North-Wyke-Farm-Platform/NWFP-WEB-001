<x-guest-layout>
    <div>
        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Study with us') }}
            </h2>
        </x-slot>

        <section class="body-font text-gray-600">
            <div class="container mx-auto flex flex-col items-center px-10 py-10 md:flex-row">
                <div
                    class="mb-16 flex flex-col items-center text-center md:mb-0 md:w-1/2 md:items-start md:pr-16 md:text-left lg:grow lg:pr-24">

                    <p class="mb-8 leading-relaxed" style = "text-align:justify">
                        The North Wyke Farm Platform is an exceptional resource for research student projects.
                        Research projects can take place on the farm platform or our long term data sets
                        can be used as the basis for research projects.
                        As well as being open to your own ideas we have a list of suggested projects that we'd
                        be happy to discuss with you whether you are a undergraduate/postgraduate student or a Director
                        of
                        Studies or Supervisor.
                        <br><br>
                    </p>
                    <x-button-link class="btn-primary ml-20" href="/content/supervisor_resources">
                        Information for Supervisors
                    </x-button-link>
                </div>
                <div class="w-5/6 md:w-1/2 lg:w-full lg:max-w-lg">
                    <img class="rounded-sm object-cover object-center" src="/images/data2.png" alt="Data imagery">
                </div>
            </div>
        </section>

        <section class="m-0 bg-gray-100">
            <div class="p-10">
                <div class="p-0" style="text-align:justify;padding-right:0px">
                    <b>We are excited to support projects from a wide range of disciplines. Recent collaborations at
                        Masters and PhD level include:-</b>

                    <div class="grid grid-cols-2 gap-4 p-3">
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
                            <ul>
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
        </section>
        <section class="py-5">
            <div class="px-2">
                <div class="flex justify-center">
                    <div class="px-2">

                        <div class="max-w-sm overflow-hidden rounded-sm shadow-lg">
                            <video width="400" height="300" controls muted>
                                <source src="/videos/NorthWyke_V1.mp4" type="video/mp4">

                                Your browser does not support the video tag.
                            </video>
                            <div class="px-6 py-4">
                                <div class="mb-2 text-xl font-bold">The Farm Platform Data Collection</div>
                                <p class="text-base text-gray-700">
                                    An overview of the range of data that the North Wyke Farm Platform openly provides
                                    for teaching, learning, and academic studies.
                                </p>
                            </div>
                            <!---<div class="px-6 pb-2 pt-4">
                                <span
class="mb-2 mr-2 inline-block rounded-full bg-gray-200 px-3 py-1 text-sm font-semibold text-gray-700">#data</span>
                                <span
class="mb-2 mr-2 inline-block rounded-full bg-gray-200 px-3 py-1 text-sm font-semibold text-gray-700">#farm</span>
                                <span
class="mb-2 mr-2 inline-block rounded-full bg-gray-200 px-3 py-1 text-sm font-semibold text-gray-700">#experiment</span>
                            </div>--->
                        </div>
                    </div>
                    <div class="px-2">

                        <div class="max-w-sm overflow-hidden rounded-sm shadow-lg">
                            <video width="400" height="300" controls muted>
                                <source src="/videos/Post_Grad_research_overview.mp4" type="video/mp4">

                                Your browser does not support the video tag.
                            </video>
                            <div class="px-6 py-4">
                                <div class="mb-2 text-xl font-bold">The Farm Platform Overview</div>
                                <p class="text-base text-gray-700">
                                    An overview of the research and facilities on the North Wyke Farm Platform as a
                                    resource for post graduate research and training.
                                </p>
                            </div>
                            <!---<div class="px-6 pb-2 pt-4">
                                <span
class="mb-2 mr-2 inline-block rounded-full bg-gray-200 px-3 py-1 text-sm font-semibold text-gray-700">#this</span>
                                <span
class="mb-2 mr-2 inline-block rounded-full bg-gray-200 px-3 py-1 text-sm font-semibold text-gray-700">#could</span>
                                <span
class="mb-2 mr-2 inline-block rounded-full bg-gray-200 px-3 py-1 text-sm font-semibold text-gray-700">#disapear</span>
                            </div>--->
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <section class="py-5">

            <h2 class="h-16 content-center bg-nw-blue-700 text-center text-2xl font-medium text-nw-blue-50">
                Student Testimonies</h2>
            <livewire:testimonies />

        </section>

        <section class="body-font text-gray-600">
            <h2 class="h-16 content-center bg-nw-blue-700 text-center text-2xl font-medium text-nw-blue-50">
                Available Projects</h2>

            <livewire:projects />

            <h2 class="h-16 content-center bg-nw-blue-700 text-center text-2xl font-medium text-nw-blue-50">
                Student Publications </h2>


            @livewire('publications', ['keyref' => "keyRefStudent", 'hasButtons'=>"NO", 'hasSearch'=> "NO", 'hasYears'=>"NO"])
        </section>


        <section class="m-0 bg-gray-100">
            <div class="flex justify-center p-10">

                <x-button-link class="btn-primary ml-20" href="/content/supervisor_resources">
                    Information for Supervisors
                </x-button-link>
            </div>
        </section>
</x-guest-layout>
