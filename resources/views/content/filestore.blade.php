<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Data Summaries and Supplementary Information') }}
        </h2>
    </x-slot>
    <div class="p-3">
     Information and data summary files that are not available on the Data Portal can be directly
            downloaded from the Farm Platform file store and includes:
    </div>
    <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">
        Data Summary Files</h2>
    <div class="p-3">
        <ul class="list-disc pl-5">
            <x-li-dot class="bg-nw-blue-700">
                <a class="px-1 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="https://nwfp.rothamsted.ac.uk/fpdownload/SummaryStatistics_15min_Data/showfiles.aspx"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                    Daily and 4-weekly Summary Statistics of the 15-Minute data
                </a>
            </x-li-dot>

            <x-li-dot class="bg-nw-blue-700">
                <a class="px-1 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="https://nwfp.rothamsted.ac.uk/fpdownload/QC_Reports/15_minute%20QC-reports/Reports_QC_v3/showfiles.aspx"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                    Quality Control Reports
                </a>
            </x-li-dot>

            <x-li-dot class="bg-nw-blue-700">
                <a class="px-1 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="https://nwfp.rothamsted.ac.uk/fpdownload/QC_Reports/15_minute_Data_Reports_External/Annual_Reports/showfiles.aspx"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                    Annual 15-Minute Data Summary Statistics
                </a>
            </x-li-dot>

            <x-li-dot class="bg-nw-blue-700">
                <a class="px-1 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="https://nwfp.rothamsted.ac.uk/fpdownload/Animal_Counts_Gantts/showfiles.aspx"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                    Animal Count Pivot Tables
                </a>
            </x-li-dot>
        </ul>
    </div>
    <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">
        Maps, Shape Files and Database Updates</h2>
    <div class="p-3">
        <ul class="list-disc pl-5">

            <x-li-dot class="bg-nw-blue-700"><a class="px-1 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="https://nwfp.rothamsted.ac.uk/fpdownload/Farm_Platform_Maps/showfiles.aspx"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                    Farm Platform Maps
                </a>
            </x-li-dot>

            <x-li-dot class="bg-nw-blue-700"><a class="px-1 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="https://nwfp.rothamsted.ac.uk/fpdownload/ArcGIS_SHP_Files/showfiles.aspx"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                    ArcGIS Shape Files of the Farm Platform fields
                </a>
            </x-li-dot>

            <x-li-dot class="bg-nw-blue-700"><a class="px-1 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="https://nwfp.rothamsted.ac.uk/fpdownload/DB_Updates/showfiles.aspx"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                    Database Updates
                </a>
            </x-li-dot>
        </ul>
    </div>
        <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">
                Soil and Hydrology Reports</h2>
    <div class="p-3">
        <ul class="list-disc pl-5">
            <x-li-dot class="bg-nw-blue-700"><a class="px-1 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="https://repository.rothamsted.ac.uk/item/96xqw/the-soils-of-north-wyke-and-rowden"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                    Soils of North Wyke  [Harrod and Hogan, 2008]
                </a>
            </x-li-dot>

            <x-li-dot class="bg-nw-blue-700"><a class="px-1 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="/documents/AssessmentDraft report v5 (31 Oct 08).pdf" >
                Hydrological Assessment (Draft report v5 31 Oct 08.pdf)</a>
            </x-li-dot>

            <x-li-dot class="bg-nw-blue-700">
                <a class="px-1 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="/documents/Revised flow estimates (18 Aug 09).pdf" >
                Design Flow Estimates (18 Aug 09)</a></x-li-dot>

            <x-li-dot class="bg-nw-blue-700">
                <a class="px-1 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="/documents/Hydrological Incontinence at Catchment 12 (Dairy North).pdf"
                >
                Report on Hydrological Incontinence at Catchment 12 (Dairy North)</a> <a style="color:red;font-weight:bold"> - IMPORTANT please read!</a>
            </x-li-dot>
        </ul>
    </div>

</x-guest-layout>
