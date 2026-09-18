<x-guest-layout>

        @php
        $title = "Timeline of Events";
    @endphp
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __($title) }}
            </h2>
           <x-share-on-bluesky>{{ urlencode($title) . ' -  '. app('request')->url() }}</x-share-on-bluesky>
        </div>
    </x-slot>

    <p><iframe
            src="https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1KQ75WdA1zVxpyPTH7U_LrjEicULz6ymZNjI_njEKMtU&amp;font=Default&amp;lang=en&amp;initial_zoom=1&amp;height=650"
            style="width: 100%; height: 700px;" frameborder="0" height="14" scrolling="no" width="47"></iframe></p>
    <!---<h1>Animation of Reseeding Events</h1>
    <p><img src="/images/FP_Seeding_12_16.gif" alt="" style="width: 621px; height: 877px;" /></p>--->

</x-guest-layout>
