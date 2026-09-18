<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Welcome to The North Wyke Farm Platform') }}
        </h2>
    </x-slot>


    {{--
    <p><iframe
            src="https://cdn.knightlab.com/libs/timeline3/latest/embed/index.html?source=1KQ75WdA1zVxpyPTH7U_LrjEicULz6ymZNjI_njEKMtU&amp;font=Default&amp;lang=en&amp;initial_zoom=1&amp;height=650"
            style="width: 100%; height: 600px;" frameborder="0" height="14" scrolling="no" width="47"></iframe>
        </p>
 --}}

 <livewire:pages />

</x-guest-layout>
