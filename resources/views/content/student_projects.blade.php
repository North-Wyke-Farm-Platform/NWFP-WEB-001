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
                    <h1 class="title-font mb-6 text-3xl font-medium text-gray-900 sm:text-4xl">
                        Introduction
                        <br class="hidden lg:inline-block">
                    </h1>
                    <p class="mb-8 leading-relaxed" style = "text-align:justify">
                        The North Wyke Farm Platform is an exceptional resource for research student projects.
                        Research projects can take place on the farm platform or our long term data sets
                        can be used as the basis for research projects.
                        As well as being open to your own ideas we have a list of suggested projects that we'd
                        be happy to discuss with you whether you are a undergraduate/postgraduate student or a Director
                        of
                        Studies or Supervisor.
                        <br><br></p>
                        <x-button-link class="btn-primary ml-20" href="/content/supervisor_resources">
                            Information for Supervisors
                        </x-button-link>
                </div>
                <div class="w-5/6 md:w-1/2 lg:w-full lg:max-w-lg">
                    <img class="rounded-sm object-cover object-center" src="/images/data2.png" alt="Data imagery">
                </div>
            </div>
        </section>

        <section class="m-0 bg-gray-100 ">
            <div class="p-10">
                <div class="p-0" style="text-align:justify;padding-right:0px">
                    <b>We are excited to support projects from a wide range of disciplines. Recent collaborations at
                        Masters and PhD level include:-</b>

                    <div class="w-100 container mx-auto grid grid-cols-2 gap-4 p-3">
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




        <section class="body-font text-gray-600">
            <h2 class="h-16 content-center bg-nw-blue-700 text-center text-2xl font-medium text-nw-blue-50">
                Available Projects</h2>

            <livewire:projects />

            <h2 class="h-16 content-center bg-nw-blue-700  text-center text-2xl font-medium text-nw-blue-50">
                Student Publications </h2>
            <livewire:publications keyref="keyRefStudent" />
        </section>
        <section>
            <h2 class="h-16 content-center text-center bg-nw-blue-700 px-4 text-2xl font-medium text-nw-blue-50">
                Video Testimonies</h2>
                <p style="text-align:center" class="px-1 pt-5">
                </p>
            <div class="w-100 container mx-auto grid grid-cols-2 gap-4 px-3 lg:w-4/5">
                <div class="aspect-w-16 aspect-h-9">
                    <iframe src="https://www.youtube.com/embed/q_YGPW_T9oM?si=651Ze1SyKp13s4fu" title="YouTube video player"
                        width="377" height="210" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="aspect-w-16 aspect-h-9">
                    <iframe src="https://www.youtube.com/embed/FYW_j0rGjkM?si=_orT8xm48xxIVZnb" title="YouTube video player"
                        width="377" height="210" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </section>
        <section class="pt-3">

        <h2 class="h-16 content-center bg-nw-blue-700  text-center text-2xl font-medium text-nw-blue-50">
            Student Testimonies</h2>
        <livewire:testimonies />
        </section>
        <section class="m-0 bg-gray-100">
            <div class="flex justify-center p-10">

                <x-button-link class="btn-primary ml-20" href="/content/supervisor_resources">
                    Information for Supervisors
                </x-button-link>
            </div>
        </section>
</x-guest-layout>
