<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Datasets Available on the Data Portal and Record Counts') }}
        </h2>
    </x-slot>

    <h2 class="h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Datasets available </h2>
    <p><iframe src="https://nwfp.rothamsted.ac.uk/fpdownload/qc_reports/fp_data_catalogue/FPDataportalDatasets_PROD.html"
            frameborder="0" height="900" scrolling="true" width="100%"></iframe></p>


            <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Record Counts</h2>
    <p><iframe
            src="https://nwfp.rothamsted.ac.uk/fpdownload/qc_reports/fp_data_catalogue/FPDataportalDataset_Counts_PROD.html"
            frameborder="0"  height="900"  scrolling="true" width="100%"></iframe></p>

</x-guest-layout>
