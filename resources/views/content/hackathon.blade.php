<x-guest-layout>

    <x-slot name="header">
        @php
            $title = 'Rothamsted Data Hackathon: Communicating Science Through Data';
        @endphp
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __($title) }}
            </h2>
            <x-share-on-bluesky>{{ urlencode($title) . ' -  ' . app('request')->url() }}</x-share-on-bluesky>
        </div>
    </x-slot>

    <div>
        <p class="m-8 text-center font-semibold text-nw-blue-700">
            "Hackathon: an integration of the words hack and marathon, is traditionally an event in which a
            large number of people meet to engage in collaborative computer programming."
        </p>
        <div class="container mx-auto flex flex-col items-center px-10 py-10 md:flex-row">
            <div
                class="mb-16 flex flex-col items-center text-center md:mb-0 md:w-1/2 md:items-start md:pr-16 md:text-left lg:grow lg:pr-24">

                <p>
                    Under the guidance of our experts, you will have access to our data and APIs (Application
                    Programming Interfaces) with a challenge to communicate science and achievements.
                    <br />
                    This <b>FREE</b> event takes places in the magnificent grounds of the Royal Agricultural University,
                    in the
                    heart of the beautiful Cotswolds.
                    <br />
                    Whether you are a developer, designer, project manager, branding/marketing expert, or something else
                    entirely, you are welcome to this event, either as a team or join a team on the day. This is an
                    opportunity to network with people in the field of bioscience, agriculture and application
                    development and learn new skills.
                    <br />
                    Additionally, we will be rewarding the best teams with prizes!
                    <br />
                    Spaces are available on first come - first served basis and early booking is advisable.
                    <br /><br /><br />
                </p>

            </div>
            <div class="w-5/6 md:w-1/2 lg:w-full lg:max-w-lg">
                <img class="mx-auto rounded-sm object-cover object-center" src="/images/banner-nature-4.jpg" alt="nature">
                <ul class="mt-3 space-y-3">
                    <x-li-arrow><b>Start Date - Time: </b> Saturday 13th September 2025, 12pm </x-li-arrow>
                    <x-li-arrow><b>End Date - Time: </b> Sunday 14th September 2025, 5:30pm </x-li-arrow>
                    <x-li-arrow><b>Venue: </b> Royal Agricultural University, GL7 6JS </x-li-arrow>
                    <x-li-arrow><b>Cost: </b> FREE </x-li-arrow>
            </div>
        </div>
        <div class="w-100 content-center text-center">
            <x-button-link class="btn-primary mx-auto my-4"
                href="https://www.tickettailor.com/events/rothamstedresearch6/1692961">
                More information and Registration
            </x-button-link>
        </div>
        <h2 class="h-16 content-center bg-nw-blue-700 text-center text-2xl font-medium text-nw-blue-50">
            NWFP Published Datasets </h2>

        @livewire('publications', ['keyref' => 'keyRefDataSet', 'hasButtons' => 'NO', 'hasSearch' => 'YES', 'hasYears' => 'NO'])

</x-guest-layout>
