<x-guest-layout>
    <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Known Issues and Workarounds') }}
            </h2>
    </x-slot>
    <div class="p-3">
        <p>We are aware that there are certain issues with the Data Portal. However, there are ways to get around
            these.
            Below is a list of the current known issues and the temporary solutions.</p>
        <div class="grid grid-cols-3 gap-4 rounded-top ">
            <div>
                <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">1.
                    MET-DATA Data Download</h2>
                <p><span class="text-nw-blue-700 font-semibold underline">Issue:</span> The data-download doesn't contain the selected MET data.</p>
                <p><span class="text-nw-blue-700 font-semibold underline">Solution:</span>   catchment 4 in the map. As the MET station is located in the 'old' catchment 4.
                </p>
            </div>
            <div>
                <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">2. Live
                    Trends Graphs</h2>
                <p><span class="text-nw-blue-700 font-semibold underline">Issue:</span> The text on the axes of the Live Trends graphs is too small to read</p>
                <p><span class="text-nw-blue-700 font-semibold underline">Solution:</span>  Zoom in on graph using the browser zoom controls (Ctrl +)</p>
            </div>
            <div>
                <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">
                    <strong>3. Graph on Download page is refreshing all the time</strong>
                </h2>
                <p><span class="text-nw-blue-700 font-semibold underline">Issue:</span> When selecting variables, the graph is constantly updating, and the user has to wait until
                    the loading has
                    finished until another variable can be selected.</p>
                <p><span class="text-nw-blue-700 font-semibold underline">Solution:</span>  Change the date-interval to fall outside the available data period (above the variable
                    selection boxes
                    is stated when the data is available), then tick all the variables required. After all selection
                    boxes are
                    ticked, change the date to the desired date-interval. This way all the data will be loaded only
                    once.</p>
            </div>
            <div>
                <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">4.
                    Issues with iPhone or Android phone</h2>
                <p><span class="text-nw-blue-700 font-semibold underline">Issue:</span> Some of the icon buttons on the NWFP front page aren't appearing, making it impossible to
                    enter the Data
                    Portal.</p>
                <p><span class="text-nw-blue-700 font-semibold underline">Solution:</span>  No solution at present.</p>
            </div>
            <div>
                <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">5.
                    Closing the help page in the Data Portal in Chrome</h2>
                <p><span class="text-nw-blue-700 font-semibold underline">Issue:</span> The close button isn't always visible on a laptop screen.</p>
                <p><span class="text-nw-blue-700 font-semibold underline">Solution:</span>  Use the mouse wheel to scroll down the page, or CTRL Page Down.</p>

            </div>
        </div>
    </div>
</x-guest-layout>
