<x-guest-layout>
@php
        $title = "Agri-Modelling";
    @endphp
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __($title) }}
            </h2>
           <x-share-on-bluesky>{{ urlencode($title) . ' -  '. app('request')->url() }}</x-share-on-bluesky>
        </div>
    </x-slot>
    <div class="p-3">
        <x-button-link href="#data_use">Data Use</x-button-link>
        <x-button-link href="#input_data">Input Data</x-button-link>
        <x-button-link href="#calibration_data">Calibration data</x-button-link>
        <x-button-link href="#further_data">Further Data and Resources</x-button-link>
        <x-button-link href="#models">Models</x-button-link>

    </div>
    <div class="flex">
        <div class="p-3">

            <p>The North Wyke Farm Platform provides a response to the needs of modellers who have long required more
                agri-environmental data for simulations regarding sustainable agriculture, providing data for agri-model
                input and calibration data to compare with simulated output.
            </p><br>
            <p>This page provides a guide to using the Farm Platform Data Portal for data, splitting it into input
                data and calibration data. We provide some examples of results produced using the models we have used.
            </p><br>
            <p>The aim is that the Data Portal supplies data on temperate high rainfall grassland livestock systems
                internationally for models to use the Farm Platform in their simulations.
            </p><br>
            <p>Please let us know if you have used the Farm Platform data for your modelling, we would appreciate your
                feedback on how easy or difficult you found the Data Portal.
            </p>
        </div>
        <!---<div class="border-3 mt-0 border-dotted border-nw-blue-700 p-3">--->
        <div class="border-2 border-dotted mt-0 mr-3 border-nw-blue-700 p-2">
            <p>Rothamsted North Wyke has a long history of modelling experimental data, for example the
                <a class="px-0 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="http://www.sciencedirect.com/science/article/pii/S0048969711005742"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                    SIMSDairy
                </a>and the <a class="px-0 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="https://www.dndc.sr.unh.edu/papers/Brown.pdf"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                    UK-DNDC
                </a>models.
            </p>
            <p>
                Models that have used or are currently using data from the farm platform include:
            </p><br>
            <ul class="space-y-3">
                <x-li-dot class="bg-nw-blue-700"><a
                        class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        href="https://www.sciencedirect.com/science/article/pii/S0304380006003802"
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                        SPACSYS
                    </a></x-li-dot>
                <x-li-dot class="bg-nw-blue-700"><a
                        class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        href="http://www.nrel.colostate.edu/projects/daycent/"
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                        DayCent</a>
                </x-li-dot>
                <x-li-dot class="bg-nw-blue-700"><a
                        class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        href="https://iwaponline.com/hr/article/48/1/277-294/1702"
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                        SH2O-NW
                    </a></x-li-dot>
                <x-li-dot class="bg-nw-blue-700"><a
                        class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        href="https://www.sciencedirect.com/science/article/pii/S004896971731896X?via%3Dihub"
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                        The Landscape Model
                    </a></x-li-dot><br>
                    Descriptions of these models are given below.
            </ul>
        </div>
    </div>
    <br>
    <h2 class="mt-4 h-12 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50" id="data_use">
        <span
            class="me-2 rounded-full border-2 border-nw-blue-50 bg-nw-blue-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
            Data Use
        </span> How to use the Data Portal and User Guides for modelling <a href="#top"><i> (back to top) </i></a>
    </h2>
    <div class="p-3">
        <p>When using the Farm Platform Data Portal for the first time, to gain a good familiarisation to the
            North Wyke Farm Platform and the data, it is useful to read:

        The dedicated   <a class=" text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="https://repository.rothamsted.ac.uk/item/98y1x/the-north-wyke-farm-platform-design-establishment-and-development"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no');
                    return false;">  &nbsp; User Guides  &nbsp; </a> contain background information on the design, establishment and continued development of the Farm Platform.
</p><br>

        <ul class="space-y-3">
            <x-li-dot class="bg-nw-blue-700">
                <a class=" text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="https://repository.rothamsted.ac.uk/item/98y1x/the-north-wyke-farm-platform-design-establishment-and-development"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no');
                    return false;">User Guides  &nbsp; </a>:  contain background information on the design, establishment and continued development of the Farm Platform.

</x-li-dot>

            <x-li-dot class="bg-nw-blue-700">Supporting documents</x-li-dot>
            <ul class="m-5 space-y-3">
                <x-li-arrow><a
                        class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        href="/documents/Harrod and Hogan 2008.pdf"
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Soils
                        of North Wyke</a></x-li-arrow>
                <x-li-arrow><a
                        class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        href="/documents/AssessmentDraft report v5 (31 Oct 08).pdf"
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Hydrological
                        Assessment</a></x-li-arrow>
            </ul>

            <x-li-dot class="bg-nw-blue-700"><a
                    class="px-1 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="{{ route('nw-guides') }}"><span class="font-semibold">User Guides</span></a>: also have the range of parameters measured, and data collection methods
                for all the datasets available on the portal on the page such as:</a>
            </x-li-dot>
            <ul class="m-5 space-y-3">

                <x-li-arrow>User Guide to the
                    <a class="px-0 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        href="https://repository.rothamsted.ac.uk/item/98y34/the-north-wyke-farm-platform-fine-resolution-15-minute-hydrology-and-water-quality-data"
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                        15 Minute Hydrology and Water Quality Data</a>
                </x-li-arrow>
                <x-li-arrow>User Guide to the
                    <a class="px-0 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        href="https://repository.rothamsted.ac.uk/item/98y4x/the-north-wyke-farm-platform-fine-resolution-15-minute-soil-moisture-station-data"
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                        15 Minute Soil Moisture Station Data</a>
                </x-li-arrow>
                <x-li-arrow>User Guide to the
                    <a class="px-0 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        href="https://repository.rothamsted.ac.uk/item/98y4w/the-north-wyke-farm-platform-fine-resolution-15-minute-meteorological-data"
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                        15 Minute Meteorological Data</a>
                </x-li-arrow>
            </ul><br>

        <p>First look at the datasets (both downloaded datasets and metadata) and assess if they
            would be relevant for input to your model.
        </p>
            <x-li-dot class="bg-nw-blue-700">
            These
            <a class="px-1 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
            href="https://nwfp.rothamsted.ac.uk/fpdownload/QC_Reports/15_minute_Data_Reports_External/Annual_Reports/showfiles.aspx"
            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no');
            return false;"><span class="font-semibold">Annual Reports</span></a>
            <a> containing statistical summaries might help you.</a>
            </x-li-dot>
            <x-li-dot class="bg-nw-blue-700">
                Input to your model one dataset at a time from the data portal (information on
                datasets are supplied
                <a class="px-1 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="/content/data_collection"><span class="font-semibold">here</span>).
                </a>

            </x-li-dot>
            <x-li-dot class="bg-nw-blue-700">
                Explore changing dataset years or parameters and see what difference it makes. This
                helps the user become familiar with the data format and values.
            </x-li-dot>
            <x-li-dot class="bg-nw-blue-700">
                Check the
                <a class="px-1 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="{{ route('information') }}"><span class="font-semibold">Known Issues and
                        Workarounds</span></a>
                <a>page for known problems with using the data portal.</a>

            </x-li-dot>
            <x-li-dot class="bg-nw-blue-700">
                When you are more familiar with the data and its format, if you have any questions,
                consult the more detailed explanatory information provided in the data portal user
                guides, including data conversion methods, sensor sensitivity, and potential
                limitations of data. If you still have questions email the data query contact
                address, but please remember the Farm Platform team can answer questions relating to
                data, not modelling.
            </x-li-dot>
        </ul>
        <br>
        <p>Reading the explanatory guides are a very important step, and not to be bypassed but the
            explanatory information may be absorbed and understood better when you have familiarised
            yourself with the datasets available.</p>
            <p>Please contact
                <a class="px-0 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"href="mailto:nw.farmplatform@rothamsted.ac.uk">
                    nw.farmplatform@rothamsted.ac.uk
                </a> or <a class="px-0 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"href="mailto:paul.harris@rothamsted.ac.uk">
                    paul.harris@rothamsted.ac.uk
                </a>
                for all NWFP data queries.

            </p>

    </div>
    <br>
    <h2 class="mt-4 h-12 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50" id="input_data">
        <span
            class="me-2 rounded-full border-2 border-nw-blue-50 bg-nw-blue-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
            Input Data
        </span> Datasets suitable for process model input <a href="#top"><i> (back to top) </i></a>
    </h2>
    <div class="grid grid-cols-2 gap-6 p-3">
        <div>
            <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Soils information can
                be gained from:</h3>
            <ul class="mx-3 space-y-3">
                <x-li-arrow>
                    <p><a class="px-0 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                            href="/documents/Harrod and Hogan 2008.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"><u>Soils
                                of North Wyke</u></a> which contains % sand, silt, clay for available water
                        capacity determination</p>
                </x-li-arrow>
                <x-li-arrow>
                    <p>Data Portal - Field Surveys - Soil Survey contains pH and bulk density</p>
                </x-li-arrow>
            </ul>
        </div>
        <div>
            <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Weather data can be
                obtained from:</h3>
            <ul class="mx-3 space-y-3">
                <x-li-arrow>Data Portal </x-li-arrow>
                <x-li-arrow>Time Series data </x-li-arrow>
                <x-li-arrow>MET Station for whole of Farm Platform.
                </x-li-arrow>
            </ul>
        </div>
        <div>
            <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">
                Field management data including fertilizer applications and silage cutting operations can be gained
                from:</h3>
            <ul class="mx-3 space-y-3">
                <x-li-arrow>
                    Data Portal
                </x-li-arrow>
                <x-li-arrow>
                    Livestock, Field Event &amp; Survey data
                </x-li-arrow>
                <x-li-arrow>
                    Field Events datasets*.
                </x-li-arrow>
                <x-li-arrow>
                    <p>These should be used with
                        <a class="px-0 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                            href="/documents/FP Technical case study 2 Field Spreading Areas.pdf"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                            <u>Technical case study 2: Field Spreading Areas</u>,
                        </a> to calculate the rate of application.
                    </p>
                </x-li-arrow>
            </ul>
        </div>
        <div>
            <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">
                Stock numbers per field can be gained from:</h3>
            <ul class="mx-3 space-y-3">
                <x-li-arrow>
                    Data Portal
                </x-li-arrow>
                <x-li-arrow>
                    Livestock datasets
                </x-li-arrow>
            </ul>
        </div>
    </div>
    <div class = "p-3">
        <p class="italic">*The field events files are described in farming operations terms, hence the Defra RB209
            Fertilizer Manual is useful for conversion. Ready converted fertilizer to elemental
            amounts are included <a
                class="px-0 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="/documents/Fertiliser conversion (oxide to element).pdf"
                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"><span class="font-semibold"><u>here</u></span>
            </a> for the fertilizer types used on the Farm Platform.
        </p>
    </div>
    <br>
    <h2 class="mt-4 h-12 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50" id ="calibration_data">
        <span
            class="me-2 rounded-full border-2 border-nw-blue-50 bg-nw-blue-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
            Calibration data
        </span> Datasets suitable for process model calibration and validation <a href="#top"><i> (back to top)
            </i></a>
    </h2>
    <div class="grid grid-cols-2 gap-6 p-3">
        <div>
            <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Crop Production</h3>
            <ul class="mx-3 space-y-3">
                <x-li-arrow>Data Portal</x-li-arrow>
                <x-li-arrow>Field Surveys</x-li-arrow>
                <x-li-arrow>Silage Cut Survey gives dry matter yield from the herbage cut for silage
                    production</x-li-arrow>
            </ul>
        </div>
        <div>
            <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Soil moisture sensor
            </h3>
            <ul class="mx-3 space-y-3">
                <x-li-arrow>Data Portal</x-li-arrow>
                <x-li-arrow>Time Series data</x-li-arrow>
                <x-li-arrow>Soil moisture &amp; Precipitation for each catchment</x-li-arrow>
            </ul>
        </div>
        <div>
            <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Flume runoff flow &amp;
                nutrients in runoff water</h3>
            <ul class="mx-3 space-y-3">
                <x-li-arrow>Data Portal</x-li-arrow>
                <x-li-arrow>Time Series data</x-li-arrow>
                <x-li-arrow>Water Flow and Properties for each catchment</x-li-arrow>
            </ul>
        </div>
        <div>
            <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Above-ground herbage
                nitrogen
                &amp; carbon</h3>
            <ul class="mx-3 space-y-3">
                <x-li-arrow>Data Portal</x-li-arrow>
                <x-li-arrow> Livestock, Field Event and Survey data</x-li-arrow>
                <x-li-arrow>Herbage survey</x-li-arrow>
            </ul>
        </div>
    </div>
    <br>
    <h2 class="mt-4 h-12 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50" id="further_data">
        <span
            class="me-2 rounded-full border-2 border-nw-blue-50 bg-nw-blue-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
            Further Data and Resources
        </span> Links to external data repositories and associated organisations <a href="#top"><i> (back to top)
            </i></a>
    </h2>
    <div class="p-3">
        Extra data which may be useful in modelling North Wyke Farm Platform daily time-steps can be found on the Data Portal
        <a class="px-0 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
            href="https://nwfp.rothamsted.ac.uk/fpdownload/"
            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
            <span class="font-semibold"><u>file store</u></span></a>
            <a> since it contains statistical summaries of the 15-minute datasets,
            including dailyweather data, flume measurements and soil moisture, temperature and field precipitation. The
            file store also contains GIS shape files for the farm platform fields.</a>
        <p>Links to additional sources of data, including datasets from the North Wyke Farm Platform:</p>
        <div class="grid grid-cols-2 gap-6 p-3">
            <div>
                <h3 class="mt-4 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Additional Data
                    Sources</h3>
                <br>
                <p>
                <ul class="mx-0 space-y-3">
                    <x-li-dot class="bg-nw-blue-700">
                        <a class="px-1 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                            href="https://data.rothamsted.ac.uk/dataset/"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                            <u>Rothamsted Research Data Repository</u></a>(hosted on CKAN)
                    </x-li-dot>

                    <x-li-dot class="bg-nw-blue-700">
                        <a class="px-1 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                            href="https://www.agrimetrics.co.uk/"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                            <u>Agrimetrics</u></a>
                    </x-li-dot>

                    <x-li-dot class="bg-nw-blue-700">
                        <a class="px-1 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                            href="https://ecn.ac.uk/"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                            <u>Environmental Change Network (ECN)</u></a>
                    </x-li-dot>
                </ul>
                </p>

            </div>
            <div>
                <h3 class="mt-4 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Associated
                    Organisations</h3>
                <br>
                <p>
                <ul class="mx-0 space-y-3">
                    <x-li-dot class="bg-nw-blue-700">
                        <a class="px-1 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                            href="https://www.ecologicalcontinuitytrust.org/"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                            <u>Ecological Continuity Trust (ECT)</u></a>
                    </x-li-dot>

                    <x-li-dot class="bg-nw-blue-700">
                        <a class="px-1 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                            href="https://cosmos.ceh.ac.uk/"
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                            <u>Cosmic-ray Soil Moisture Observing System (COSMOS)</u></a>
                    </x-li-dot>
                </ul>
                </p>
            </div>
        </div>

    </div>
    <br>
    <h2 class="mt-4 h-12 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50" id ="models">
        <span
            class="me-2 rounded-full border-2 border-nw-blue-50 bg-nw-blue-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-nw-blue-50">
            Models
        </span> Model descriptions <a href="#top"><i>
                (back to top) </i></a>
    </h2>
    <div class="p-3">
        <h3 class="mt-4 text-lg font-medium text-nw-blue-900 underline underline-offset-4">
            SPACSYS
        </h3>
        <div class="ms-10 pt-5">
            <p>The SPACSYS model (Wu et al., 2007) is a field scale, weather-driven and daily-time-step
                dynamic simulation model. The current version includes a plant growth and development
                component, a nitrogen cycling component, a carbon cycling component, a phosphorus cycling
                component, plus a soil water component that includes representation of water flow to field
                drains as well as downwards through the soil layers, together with a heat transfer
                component. The model has a capability to simulate the interaction of C, N, P, soil water and
                temperature in the soil-plant-atmosphere continuum system.</p>
            <p>The main processes concerning plant growth in the model are plant development, assimilation,
                respiration, and partition of photosynthate and nitrogen from uptake estimated with various
                mechanisms implemented in the model, plus N fixation for legume plants, and root growth and
                development that is described in 3D root system by the following processes: branching,
                extension, architecture, mortality, water uptake and nutrient uptake. An alternative 1D root
                system is implemented to simplify processes involved in root growth and development. The
                functionality on water and nitrogen uptake by roots is also quantified.</p>
            <p>The model has been used to investigate a number of issues including nitrate leaching,
                resource use efficiency by crops, root systems, GHG emissions and and the responses of
                cropping/grassland systems on environmental changes. The model can address the questions,
                such as, how to increase N and water use efficiency through manipulating genetic traits of
                plant root architecture; what field managements to mitigate GHG emissions and diffuse
                pollution; how response of plants/cropping systems to climate change and carbon sequestered
                into soils with land use change.
            </p><br>
            <p>Wu, L., McGechan, M. B., McRoberts, N., Baddeley, J. A., Watson, C. A., 2007. SPACSYS:
                integration of a 3D root architecture component to carbon, nitrogen and water cycling -
                model description. <span class="italic">Ecol. Model</span>. 200, 343-359. <a
                    class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="https://doi.org/10.1016/j.ecolmodel.2006.08.010"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                    (https://doi.org/10.1016/j.ecolmodel.2006.08.010)</a>
            </p>
        </div>
        <h3 class="mt-4 text-lg font-medium text-nw-blue-900 underline underline-offset-4">
            DAYCENT
        </h3>
        <div class="ms-10 pt-5">
            <p>DAYCENT is the daily time-step version of the CENTURY biogeochemical model (Parton et al.,
                1994). DAYCENT simulates fluxes of C and N among the atmosphere, vegetation, and soil
                (Parton et al., 1998). Submodels include soil water content and temperature by layer, plant
                production and allocation of net primary production (NPP), decomposition of litter and soil
                organic matter, mineralization of nutrients, N gas emissions from nitrification and
                denitrification, and CH4 oxidation in non-saturated soils.
            </p>
            <p>Operators create a schedule file which calls in modules for field management and makes it
                possible to manage operations on a daily basis. Model outputs include: daily N-gas flux
                (N2O, NOx, N2), CO2 flux from heterotrophic soil respiration, soil organic C and N, NPP, H2O
                and NO3 leaching, and other ecosystem parameters.
            </p><br>

            <p>Parton, W.J. and Rasmussen, P.E. (1994). Long term effects of crop management in
                wheat/fallow: II. CENTURY model simulations. <span class="italic">Soil Science Society of America
                    Journal</span> 58:
                530-536. <a class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="https://doi.org/10.2136/sssaj1994.03615995005800020040x"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">(https://doi.org/10.2136/sssaj1994.03615995005800020040x)</a>
            </p><br>

            <p>Parton, W.J., Hartman, M., Ojima, D., Schimel, D. 1998. DAYCENT and its land surface
                submodel: description and testing. <span class="italic">Global Planetary Change</span>, 19, 35-48.<a
                    class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="https://doi.org/10.1016/S0921-8181(98)00040-X"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">(https://doi.org/10.1016/S0921-8181(98)00040-X)</a> </p>
        </div>
        <h3 class="mt-4 text-lg font-medium text-nw-blue-900 underline underline-offset-4">
            SH20-NW
        </h3>
        <div class="ms-10 pt-5">
            <p>SH2O-NW is a simple but effective soil water model to predict the soil moisture stored in the
                root zone and determine field runoff from soil (Shepherd et al., 2002). The model has been
                validated for the North Wyke Farm Platform (Shepherd et al., 2016), and is parsimonious
                requiring available water capacity and soil runoff curve number plus meteorological data.
            </p>
            <p>Water availability in the root zone involves a water balance in which effective rainfall,
                runoff and evapo-transpiration are the main factors. The model assumes that in the absence
                of a water table, effective rainfall is the only source of water. The effective rainfall is
                calculated from rainfall minus surface runoff. If the available water is below a critical
                threshold, the crop demand cannot be met. The relative reduction in water use is related to
                the ratio of the available water and the water holding capacity.</p><br>

            <p>A. Shepherd, S.M. McGinn, G.C.L. Wyseure. (2002). Simulation of the effect of water
                shortage on the yields of winter wheat in North-East England. <a
                    class="px-0 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="https://abdn.pure.elsevier.com/en/publications/simulation-of-the-effect-of-water-shortage-on-the-yields-of-winte"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"><span
                        class="italic">Ecological Modelling</span>, 147(1), 41-52.</a></p><br>
            <p>A. Shepherd, W. Atuhaire, L. Wu, D. Hogan, R. Dunn and L. Cardenas (2016). Historic
                record of pasture soil water and the influence of the North Atlantic Oscillation in
                south-west England. Hydrology Research.<a
                    class="px-0 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="https://doi.org/10.2166/nh.2016.195"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                    (https://doi.org/10.2166/nh.2016.195)</a>
            </p>
        </div><br>

        <h3 class="mt-4 text-lg font-medium text-nw-blue-900 underline underline-offset-4">
            The Landscape Model
        </h3>
        <div class="ms-10 pt-5">
            <p>This first version of the model integrates agricultural production, water movement and nutrient flow in a landscape.
                The model combines aspects of several published models [RothC (Coleman and Jenkinson, 2014), LINTUL (Wolf, 2012),
                SUCROS (van Laar et al., 1997), and Century (Parton et al., 1994)], but also includes novel factors that have been implemented
                to capture potential improvements in yield that result from management actions. These include coupling the RothC model to
                include the dynamics of N and P and responses to changes in bulk-density that
                result from changes in soil organic matter. The model is evaluated against data on crop growth and nutrient uptake for
                cereals and for grass, and the integration in space of water and nutrients leaving agricultural fields.
                The model can be used to explore trade-offs between production and environment with a scenario based on a wheat crop grown
                in conditions typical of arable England.
            </p>
            <p>
                The model was validated using data from the Broadbalk and Park Grass long-term experiments at Rothamsted Research, in Harpenden, SE England, and
                spatial interactions were tested on data from the North Wyke Farm Platform.
            </p><br>

            <p>Coleman, K. and Jenkinson, D. S. 2014. RothC - A model for the turnover of carbon in soil.
                Model description and users guide (Windows version) (updated June 2014). pp. 1-44. <a
                    class="px-0 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="https://repository.rothamsted.ac.uk/item/98xv8/rothc-a-model-for-the-turnover-of-carbon-in-soil-model-description-and-users-guide-windows-version-updated-june-2014"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                    (https://repository.rothamsted.ac.uk/item/98xv8/rothc-a-model-for-the-turnover-of-carbon-in-soil-model-description-and-users-guide-windows-version-updated-june-2014)</a>
            </p><br>

            <p>Laar, H. V., Goudriaan, J. V., & Keulen, H. V. (1997). SUCROS97: Simulation of crop growth for potential and water-limited production situations as applied to spring wheat.
                    Quantitative Approaches in Systems Analysis, ab-dlo, Netherlands (1997). <a
                    class="px-0 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="https://agris.fao.org/search/en/providers/122575/records/64746b7179cbb2c2c1afb54f"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                    (https://agris.fao.org/search/en/providers/122575/records/64746b7179cbb2c2c1afb54f)</a>
            </p><br>

            <p>Parton, W. J., Hartman, M., Ojima, D., & Schimel, D. S. (1994). DAYCENT and its land surface submodel: description and testing.
                Global Change Biology, 1(2), 101-109. <a
                    class="px-0 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="https://acsess.onlinelibrary.wiley.com/doi/abs/10.2136/sssaspecpub39.c9"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                    (https://acsess.onlinelibrary.wiley.com/doi/abs/10.2136/sssaspecpub39.c9)</a>
            </p><br>

            <p>Wolf, J. (2012).User Guide for LINTUL4 and LINTUL4V: Simple Generic Model for Simulation of Crop Growth Under Potential, Water Limited and Nitrogen Limited Conditions
                Wageningen UR, Wageningen (2012), p. 58. <a
                    class="px-0 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="https://library.wur.nl/WebQuery/wurpubs/444718"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                    (https://library.wur.nl/WebQuery/wurpubs/444718)</a>
            </p>

        </div>
    </div>

</x-guest-layout>
