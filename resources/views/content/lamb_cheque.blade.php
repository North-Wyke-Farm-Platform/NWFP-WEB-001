<x-guest-layout>

        <x-slot name="header">
        @php
            $title = 'Trial finds ewe data is route to bigger lamb cheque';
        @endphp
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __($title) }}
            </h2>
            <x-share-on-bluesky>{{ urlencode($title) . ' -  ' . app('request')->url() }}</x-share-on-bluesky>
        </div>
    </x-slot>

    <p><a href="https://www.fwi.co.uk/livestock/sheep/trial-finds-ewe-data-is-route-to-bigger-lamb-cheque"
            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">https://www.fwi.co.uk/livestock/sheep/trial-finds-ewe-data-is-route-to-bigger-lamb-cheque</a>
    </p>
    <p></p>
    <p>The results from the trial are published in the following research publication:</p>
    <p>Jones, A., Takahashi, T., Fleming, H., Griffith, B., Harris, P., Lee, M.R.F. (2021). Quantifying the value of
        on-farm measurements to inform the selection of key performance indicators for livestock production systems.
        Scientific Reports, 11,16874. (<a href="https://www.nature.com/articles/s41598-021-96336-1"
            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">doi.org/10.1038/s41598-021-96336-1</a>)
    </p>

</x-guest-layout>
