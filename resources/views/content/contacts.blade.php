<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('The Teams') }}
        </h2>
    </x-slot>
    <div class="p-1">
        <div class="border-2 border-nw-blue-700 bg-nw-blue-50 p-4">
            <p>Please contact
                <a class="px-0 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"href="mailto:nw.farmplatform@rothamsted.ac.uk">
                    nw.farmplatform@rothamsted.ac.uk
                </a>
                for all NWFP data queries.
            </p>
        </div>
    </div>
    <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Farm Platform Team</h2>
    <div class="md:grid-col-3 grid gap-4 sm:grid-cols-1 lg:grid-cols-4">
        <div>
            <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Principal
                Investigator:</h3>
            <!-- ------------------------ One People Card -------------------   -->
            <a href="https://www.rothamsted.ac.uk/people/paul-harris"
                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                <div class="flex items-center gap-4 p-3 hover:bg-nw-blue-50"><img
                        class="h-12 w-12 rounded-full p-1 hover:ring-2 hover:ring-nw-blue-700"
                        src="/profile-photos/paul-harris.jpg">
                    <div class="font-medium dark:text-white">
                        <div>
                            Paul Harris
                        </div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">
                            Project Leader
                        </div>
                    </div>
                </div>
            </a>

        </div>
        <div>
            <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4"> Co-Investigator:
            </h3>

            <!-- ------------------------ One People Card -------------------   -->
            <a
                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"href="https://www.rothamsted.ac.uk/people/bruce-griffith">
                <div class="flex items-center gap-4 p-3 hover:bg-nw-blue-50"><img
                        class="h-12 w-12 rounded-full p-1 hover:ring-2 hover:ring-nw-blue-700"
                        src="/profile-photos/bruce-griffith.jpg">
                    <div class="font-medium dark:text-white">
                        <div>
                            Bruce Griffith
                        </div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">
                            Research Farm Manager
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Work Package Team</h2>
    <div class="md:grid-col-3 grid gap-4 sm:grid-cols-1 lg:grid-cols-4">
        <div>
            <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Farm and Design
            </h3>
            <!-- ------------------------ One People Card -------------------   -->
            <a
                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"href="https://www.rothamsted.ac.uk/people/andy-jones">
                <div class="flex items-center gap-4 p-3 hover:bg-nw-blue-50"><img
                        class="h-12 w-12 rounded-full p-1 hover:ring-2 hover:ring-nw-blue-700"
                        src="/profile-photos/andy-jones.jpg">
                    <div class="font-medium dark:text-white">
                        <div>
                            Andy Jones
                        </div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">
                            Small Ruminant Facility Experimental Manager
                        </div>
                    </div>
                </div>
            </a>
           <!-- ------------------------ One People Card With Initials -------------------   -->
            <div class="flex items-center gap-4 p-3">
                <div
                    class="relative inline-flex h-12 w-12 items-center justify-center overflow-hidden rounded-full bg-gray-100 dark:bg-gray-600">
                    <span class="font-medium text-gray-600 dark:text-gray-300">MS</span>
                </div>
                <div class="font-medium dark:text-white">
                    <div>
                        Matthew Smallwood
                    </div>
                    <div class="text-sm text-gray-500 dark:text-gray-400">
                        Livestock and Research Technician
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Soils</h3>
            <!-- ------------------------ One People Card Vacant Position-------------------   -->
            <a
                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"href="https://www.rothamsted.ac.uk/people/martin-blackwell">
                <div class="flex items-center gap-4 p-3 hover:bg-nw-blue-50">
                    <div
                    class="relative inline-flex h-12 w-12 items-center justify-center overflow-hidden rounded-full bg-gray-100 dark:bg-gray-600">
                    <span class="font-medium text-gray-600 dark:text-gray-300">AK</span>
                </div>
                    <div class="font-medium dark:text-white">
                        <div>
                            Alex Kelly
                        </div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">
                            Agricultural Research Technician
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div>
            <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">
                Biodiversity
            </h3>
            <!-- ------------------------ One People Card -------------------   -->
            <a
                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"href="https://www.rothamsted.ac.uk/people/deborah-beaumont">
                <div class="flex items-center gap-4 p-3 hover:bg-nw-blue-50">
                    <img class="h-12 w-12 rounded-full p-1 hover:ring-2 hover:ring-nw-blue-700"
                        src="/profile-photos/deborah-beaumont.jpg">
                    <div class="font-medium dark:text-white">
                        <div>
                            Deborah Beaumont
                        </div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">
                            Ecologist
                        </div>
                    </div>
                </div>
            </a>
            <!-- ------------------------ One People Card -------------------   -->
            <a
                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"href="https://www.rothamsted.ac.uk/people/jonathan-storkey">
                <div class="flex items-center gap-4 p-3 hover:bg-nw-blue-50">
                    <img class="h-12 w-12 rounded-full p-1 hover:ring-2 hover:ring-nw-blue-700"
                        src="/profile-photos/jonathan-storkey.jpg">
                    <div class="font-medium dark:text-white">
                        <div>Jonathan Storkey
                        </div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">
                            Plant Ecologist
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div>
            <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Water</h3>
            <!-- ------------------------ One People Card -------------------   -->
            <a
                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"href="https://www.rothamsted.ac.uk/people/adie-collins">
                <div class="flex items-center gap-4 p-3 hover:bg-nw-blue-50">
                    <img class="h-12 w-12 rounded-full p-1 hover:ring-2 hover:ring-nw-blue-700"
                        src="/profile-photos/adie-collins.jpg">
                    <div class="font-medium dark:text-white">
                        <div>
                            Adie Collins
                        </div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">
                            Science Director
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div>
            <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Gases</h3>
            <!-- ------------------------ One People Card -------------------   -->
            <a
                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"href="https://www.rothamsted.ac.uk/people/laura-cardenas">
                <div class="flex items-center gap-4 p-3 hover:bg-nw-blue-50">
                    <img class="h-12 w-12 rounded-full p-1 hover:ring-2 hover:ring-nw-blue-700"
                        src="/profile-photos/laura-cardenas.jpg">
                    <div class="font-medium dark:text-white">
                        <div>Laura Cardenas
                        </div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">
                            Amospheric Chemist
                        </div>
                    </div>
                </div>
            </a>
            <!-- ------------------------ One People Card -------------------   -->
            <a
                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"href="https://www.rothamsted.ac.uk/people/nadine-loick">
                <div class="flex items-center gap-4 p-3 hover:bg-nw-blue-50">
                    <img class="h-12 w-12 rounded-full p-1 hover:ring-2 hover:ring-nw-blue-700"
                        src="/profile-photos/nadine-loick.jpg">
                    <div class="font-medium dark:text-white">
                        <div>Nadine Loick
                        </div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">
                            Environmental Scientist
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div>
            <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Remote Sensing</h3>
            <!-- ------------------------ One People Card -------------------   -->
            <a
                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"href="https://www.rothamsted.ac.uk/people/chris-powe">
                <div class="flex items-center gap-4 p-3 hover:bg-nw-blue-50">
                    <img class="h-12 w-12 rounded-full p-1 hover:ring-2 hover:ring-nw-blue-700"
                        src="/profile-photos/chris-powe.jpg">
                    <div class="font-medium dark:text-white">
                        <div>Chris Powe
                        </div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">
                            <p>Drone Pilot &amp; Science Technician</p>
                        </div>
                    </div>
                </div>

            </a>
        </div>
        <div>
            <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Data</h3>
            <!-- ----------------------- One People Card HS-------------------   -->
            <a
                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"href="https://www.rothamsted.ac.uk/people/hadewij-sint">
                <div class="flex items-center gap-4 p-3 hover:bg-nw-blue-50">
                    <img class="h-12 w-12 rounded-full p-1 hover:ring-2 hover:ring-nw-blue-700"
                        src="/profile-photos/hadewij-sint.jpg">
                    <div class="font-medium dark:text-white">
                        <div>Hadewij Sint
                        </div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">
                            <p>GIS &amp; Data Specialist</p>
                        </div>
                    </div>
                </div>
            </a>
            <!-- ------------------------ One People Card TD -------------------   -->
            <a
                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"href="https://www.rothamsted.ac.uk/people/tegan-darch">

                <div class="flex items-center gap-4 p-3 hover:bg-nw-blue-50">
                    <img class="h-12 w-12 rounded-full p-1 hover:ring-2 hover:ring-nw-blue-700"
                        src="/profile-photos/tegan-darch.jpg">
                    <div class="font-medium dark:text-white">
                        <div>Tegan Darch
                        </div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">
                            Research Data Manager
                        </div>
                    </div>
                </div>
            </a>
            <!-- ------------------------ One People Card LO-------------------   -->
            <a
                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"href="https://www.rothamsted.ac.uk/people/louise-olde">
                <div class="flex items-center gap-4 p-3 hover:bg-nw-blue-50">
                    <img class="h-12 w-12 rounded-full p-1 hover:ring-2 hover:ring-nw-blue-700"
                        src="/profile-photos/louise-olde.jpg">
                    <div class="font-medium dark:text-white">
                        <div>Louise Olde
                        </div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">
                            <p>Sensors &amp; Data Specialist (Water &amp; Gases)</p>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div>
            <h3 class="mt-4 p-3 text-lg font-medium text-nw-blue-700 underline underline-offset-4">Data systems</h3>
            <!-- ------------------------ One People Card -------------------   -->
            <a
                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"href="https://www.rothamsted.ac.uk/people/tegan-darch">

                <div class="flex items-center gap-4 p-3 hover:bg-nw-blue-50">
                    <img class="h-12 w-12 rounded-full p-1 hover:ring-2 hover:ring-nw-blue-700"
                        src="/profile-photos/nathalie-castells.jpg">
                    <div class="font-medium dark:text-white">
                        <div>Nathalie Castells
                        </div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">
                            Software Engineer
                        </div>
                    </div>
                </div>
            </a>
            <!-- ------------------------ One People Card RO-------------------   -->
            <a
                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"href="https://www.rothamsted.ac.uk/people/richard-ostler">

                <div class="flex items-center gap-4 p-3 hover:bg-nw-blue-50">
                    <img class="h-12 w-12 rounded-full p-1 hover:ring-2 hover:ring-nw-blue-700"
                        src="/profile-photos/richard-ostler.jpg">
                    <div class="font-medium dark:text-white">
                        <div>Richard Ostler
                        </div>
                        <div class="text-sm text-gray-500 dark:text-gray-400">
                            <p>Agri-Informatician &amp;</p>
                            <p>Data Specialist</>
                        </div>
                    </div>
                </div>
            </a>
            <!-- ------------------------ One People Card With Initials -------------------   -->
            <div class="flex items-center gap-4 p-3">
                <div
                    class="relative inline-flex h-12 w-12 items-center justify-center overflow-hidden rounded-full bg-gray-100 dark:bg-gray-600">
                    <span class="font-medium text-gray-600 dark:text-gray-300">AS</span>
                </div>
                <div class="font-medium dark:text-white">
                    <div>
                        Alberto Stella
                    </div>
                    <div class="text-sm text-gray-500 dark:text-gray-400">
                        Software Engineer
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Technical Team</h2>
    <div class="md:grid-col-3 grid gap-4 sm:grid-cols-1 lg:grid-cols-4">
        <!-- ------------------------ One People Card -------------------   -->
        <a
            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"href="https://www.rothamsted.ac.uk/people/helena-taylor">
            <div class="flex items-center gap-4 p-3 hover:bg-nw-blue-50">
                <img class="h-12 w-12 rounded-full p-1 hover:ring-2 hover:ring-nw-blue-700"
                    src="/profile-photos/helena-taylor.jpg">
                <div class="font-medium dark:text-white">
                    <div>Helena Taylor
                    </div>
                    <div class="text-sm text-gray-500 dark:text-gray-400">
                        <p>Soil &amp; Plant</p>
                        <p>Laboratory Technician</p>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Statistical Support
    </h2>
    <div class="md:grid-col-3 grid gap-4 sm:grid-cols-1 lg:grid-cols-4">
        <!-- ------------------------ One People Card -------------------   -->
        <a
            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"href="https://www.rothamsted.ac.uk/people/andrew-mead">
            <div class="flex items-center gap-4 p-3 hover:bg-nw-blue-50">
                <img class="h-12 w-12 rounded-full p-1 hover:ring-2 hover:ring-nw-blue-700"
                    src="/profile-photos/andrew-mead.jpg">
                <div class="font-medium dark:text-white">
                    <div>Andrew Mead
                    </div>
                    <div class="text-sm text-gray-500 dark:text-gray-400">
                        Senior Statistician
                    </div>
                </div>
            </div>
        </a>
        <!-- ------------------------ One People Card With Initials -------------------   -->
        <div class="flex items-center gap-4 p-3 hover:bg-nw-blue-50">
            <div
                class="relative inline-flex h-12 w-12 items-center justify-center overflow-hidden rounded-full bg-gray-100 dark:bg-gray-600">
                <span class="font-medium text-gray-600 dark:text-gray-300">GL</span>
            </div>
            <div class="font-medium dark:text-white">
                <div>
                    Graham Leask
                </div>
                <div class="text-sm text-gray-500 dark:text-gray-400">
                    Statistician
                </div>
            </div>
        </div>
    </div>
    <h2 class="mt-4 h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">External Relations,
        Knowledge Exchange &amp; Commercialisation</h2>
    <!-- ------------------------ One People Card -------------------   -->
    <a
        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"href="https://www.rothamsted.ac.uk/people/melanie-wright">
        <div class="flex items-center gap-4 p-3 hover:bg-nw-blue-50">
            <img class="h-12 w-12 rounded-full p-1 hover:ring-2 hover:ring-nw-blue-700"
                src="/profile-photos/melanie-wright.jpg">
            <div class="font-medium dark:text-white">
                <div>Melanie Wright
                </div>
                <div class="text-sm text-gray-500 dark:text-gray-400">
                    Knowledge Exchange Manager
                </div>
            </div>
        </div>
    </a>
    <!-- onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;"-->
</x-guest-layout>
