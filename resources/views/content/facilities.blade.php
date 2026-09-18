<x-guest-layout>
    <x-slot name="header">
        @php
        $title = "Using Our Facilities and Opportunities for Co-Development";
    @endphp
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __($title) }}
            </h2>
            <x-share-on-bluesky>{{ urlencode($title) . ' -  '. app('request')->url() }}</x-share-on-bluesky>
        </div>
    </x-slot>

    <div class="sticky top-0 border-b-4 border-nw-blue-700">
        <h2 class="h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Download Request Forms</h2>
        <div class="p-3">
            <ul>
                <x-li-dot class="bg-nw-blue-500">
                    <a class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        type="application/vnd.openxmlformats-officedocument.wordprocessingml.document; length=652728"
                        href="/documents/Farm Platform Access Request Form.docx"
                        title="Farm Platform Access Request Form.docx">Farm Platform Access Request Form</a>
                </x-li-dot>
                <x-li-dot class="bg-nw-blue-500">
                    <a class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        type="application/vnd.openxmlformats-officedocument.wordprocessingml.document; length=37292"
                        href="/documents/Farm Platform Archived Sample Request Form.docx"
                        title="Farm Platform Archived Sample Request Form.docx">Farm Platform Archive Sample Request
                        Form</a>
                </x-li-dot>
            </ul><br>
            <p>Our facilities are part-funded by CIEL<a class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="https://www.cielivestock.co.uk/"
                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">(https://www.cielivestock.co.uk/).</a>

                As such, if you are considering applying for funding to conduct an NWFP or SRF experiment, then please
                contact us so that we can ensure a small charge (typically 2%) is captured in the funding application reflecting CIEL's
                investment.</p><br>
        </div>
    </div>

    <div class="flex items-center justify-between gap-2 sticky top-0">
        <div class="p-3">
            <div style="text-align:justify" class="p-4">
                <p>This unique facility is located in the South West of the UK and offers the research
                    community access to a range of <i>in-situ</i> state-of-the-art instrumentation installed over three hydrologically
                    isolated farming systems or farmlets.
                </p>
                <br>
                <p>The facility also has an instrumented indoor cattle system for evaluation of more intensive finishing.
                </p>
                <br>
                <p>All core input and output data collected from across the platform is freely available to all
                    national and international research users and collaborators via our
                    <a class="px-0 text-nw-blue-800 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        href="https://nwfp.rothamsted.ac.uk/"
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Data Portal.
                    </a>
                </p>
            </div>
        </div>

        <div class="p-3">
            <p><img src="/images/facilities01.png" alt ="Location"width="900"/></p>
        </div>
        <div class="p-3">
            <p><img src="/images/facilities02.png" alt="Map of the site" width="700"/></p>
        </div>
    </div>

    <br>

    <div class="flex items-center justify-between gap-4 sticky top-0 border-b-4 border-nw-blue-700">
        <div class="p-3">
            <div style="text-align:justify" class="p-4">
                <ul>
                    <x-li-dot class="bg-nw-blue-700">
                        <p>Each outdoor farmlet consists of five component sub-catchments comprising just over 20 ha in total per farmlet.</p>
                    </x-li-dot><br>
                    <x-li-dot class="bg-nw-blue-700">
                        <p>They are currently managed as beef cattle, sheep and arable enterprises with a high degree of
                            control over inputs.</p>
                    </x-li-dot><br>
                    <x-li-dot class="bg-nw-blue-700">
                        <p>The key concept of the Farm Platform is to explore different ways of managing sustainable and
                            resilient grazing livestock production alongside a wide range of agro-ecosystem attributes at farm
                            scale. Opportunities also exist for investigating net zero strategies.</p>
                    </x-li-dot><br>
                    <x-li-dot class="bg-nw-blue-700">
                        <p>The facility attracts researchers from different communities and disciplines to promote new
                            ideas or tackle old challenges in novel ways to better address key issues in sustainable and resilient
                            agriculture.</p>
                    </x-li-dot>
            </ul>
            </div>
        </div>
    </div>
    <br>
    <div class="p-3">
        <div style="text-align:justify" class="p-4">
            <p class="p-3">We have dedicated laboratories to handle soil, herbage, air and water samples and have a
            wide range of analytical techniques available in our Analytical Laboratories.</p>

            <h2 style = "text-align:center;font-weight:bold;font-size:23px;" class="h-8 content-center px-4 text-lg font-medium text-black">
                Analytical Laboratories</h2>
            <p><img class="mx-auto p-4" src="/images/facilities03.png" /></p>
            <br>
            <br>
            <p class="p-3">In addition, we have the Small Ruminant Facility (SRF; Robert Orr building) which is used to
            not only house the Farm Platform sheep during the winter period but which also contains 24 automated biocontrol units. These
            units allow the recording of individual feed intake using automatically weighed feed hoppers and which are
            available for studies concerning animal health, welfare and performance. Some pens within the facility have also been
            specifically designed to accommodate goat housing.</p>

            <h2 style = "text-align:center;font-weight:bold;font-size:23px;" class="h-8 content-center px-4 text-lg font-medium text-black">
                Small Ruminant Facility and Biocontrol Units</h2>
            <p><img class="mx-auto p-4" src="/images/SmallRuminantFacility.png" /></p>
        </div>
    </div>
    <br>

    <div class="items-top justify-beween flex p-4">
        <div style="text-align:justify;padding-right:20px" class="size-2/3 p-4">
            <p>We welcome opportunities for co-development of projects on the platform.
                Project proposals can be of any size and through any funding body.</p>
            <br>
            <p>If you are interested in proposing or conducting a research project
                using the Farm Platform facilities, please contact the Farm Platform team at
                <a class="px-0 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="mailto:nw.farmplatform@rothamsted.ac.uk">nw.farmplatform@rothamsted.ac.uk</a> for initial
                discussions, where we will align you with the contacts and expertise to facilitate your proposal or project.
                Following initial consultation the next step is to download and complete a
                'Farm Platform Access Request Form' available on the right or at the top of this page and submit for approval.</p>
                <br>
                <p>You can also request soil or herbage samples from our archive store using the
                    'Farm Platform Archive Sample Request Form' also available on the right or at the top of this page.
                </p>

        </div>

        <div class="3/3">
            <h2 class="h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Download Request Forms</h2>
            <div class="p-3">
                <ul>
                    <x-li-dot class="bg-nw-blue-500">
                        <a class="px-0 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                            type="application/vnd.openxmlformats-officedocument.wordprocessingml.document; length=652728"
                            href="/documents/Farm Platform Access Request Form.docx"
                            title="Farm Platform Access Request Form.docx">Farm Platform Access Request Form</a>
                    </x-li-dot>
                    <x-li-dot class="bg-nw-blue-500">
                        <a class="px-0 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                            type="application/vnd.openxmlformats-officedocument.wordprocessingml.document; length=37292"
                            href="/documents/Farm Platform Archived Sample Request Form.docx"
                            title="Farm Platform Archived Sample Request Form.docx">Farm Platform Archive Sample
                            Request Form</a>
                    </x-li-dot>
                </ul>
            </div>

        </div>
    </div>
    <br>
    <br>
    <br>
    <!---<h2 class="h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Funding</h2>
    <div class="p-3">
        <p>Our facilities are part-funded by CIEL<a class="px-2 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                href="https://www.cielivestock.co.uk/"
                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">(https://www.cielivestock.co.uk/).</a>
            As such, if you are considering applying for funding to conduct an NWFP or SRF experiment, then please
            contact us so that we can ensure a small charge (typically 2%) is captured in the funding application reflecting CIEL's
            investment.</p>
    </div>
    <br>
    <h2 class="h-8 content-center bg-nw-blue-700 px-4 text-lg font-medium text-nw-blue-50">Aknowledgment</h2>
    <div class="p-3">
        If you decide to use our data in any publications or have used the NWFP facilities, then please:
        <ul class="space-y-3 p-3">
            <x-li-dot class="bg-nw-blue-500">
                <p class="font-semibold">1. Cite one or both of the following 2 papers:</p>
            </x-li-dot>
            <ul class="space-y-3">
                <x-li-arrow>
                    R.J. Orr, P.J. Murray, C.J. Eyles, M.S.A. Blackwell, L.M. Cardenas, A.L. Collins,
                    J.A.J. Dungait, K.W.T.Goulding, B.A. Griffith, S.J. Gurr, P. Harris, J.M.B. Hawkins, T.H. Misselbrook,
                    C. Rawlings, A. Shepherd, H. Sint, T. Takahashi, K.N. Tozer, A.P. Whitmore, L. Wu and M.R.F. Lee. (2016). The North Wyke
                    Farm Platform: effect of temperate grassland farming systems on soil moisture contents, runoff and
                    associated water quality dynamics. European Journal of Soil Science, 67, 374-385.DOI: <a
                        class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        href="https://doi.org/10.1111/ejss.12350">https://doi.org/10.1111/ejss.12350</a>

                </x-li-arrow>
                <x-li-arrow>
                    T. Takahashi, P. Harris, M. S. A. Blackwell, L. M. Cardenas, A. L. Collins, J. A. J. Dungait,
                    J. M. B. Hawkins, T. H. Misselbrook, G. A. McAuliffe, J. N. McFadzean, P. J. Murray, R. J. Orr, M. J.
                    Rivero, L. Wu, M. R. F. Lee, 2018. Roles of instrumented farm-scale trials in trade-off assessments of
                    pasture-based ruminant production systems. Animal, 1766-1776.DOI: <a
                        class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                        href="https://doi.org/10.1017/S1751731118000502">https://doi.org/10.1017/S1751731118000502</a>
                </x-li-arrow>
            </ul>
            <br>
            <x-li-dot class="bg-nw-blue-500">
                <p class="font-semibold">2. Add that data were downloaded from the Farm Platform Data Portal, with the
                    URL:  <a class="text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="https://nwfp.rothamsted.ac.uk/">https://nwfp.rothamsted.ac.uk/</a></p>
            </x-li-dot>
            <br>
           <x-li-dot class="bg-nw-blue-500">
                <p class="font-semibold">3. For the datasets used, please cite the latest version of the relevant User Guide PDF document(s),
                    that describe the establishment and development of the NWFP, and the various datasets produced in detail.
                    These are listed on the <a class="px-0 text-nw-blue-700 visited:text-amber-900 hover:text-orange-700 active:text-orange-900"
                    href="{{ route('nw-guides') }}"><span class="font-semibold">Data User Guides</span></a> webpage.<br>
                    Note that the User Guide entitled "NWFP_UG_Design_Develop.pdf" should be cited irrespective of the dataset used.
                </p>
            </x-li-dot>
            <br>
            <x-li-dot class="bg-nw-blue-500">
                <p class="font-semibold">4. Add the following to your acknowledgments section:</p>
            </x-li-dot>
            <div class="border-2 border-red-700 bg-red-50 p-2">
                <p>The North Wyke Farm Platform is a National Bioscience Research Infrastructure (NBRI) supported by the Biotechnology and
                    Biological Sciences Research Council (BBSRC) by grants BB/J004308/1, BBS/E/C/000J0100
                    and currently supported by grant BBS/E/RH/23NB0008 (2023-28).</p>
                <p>We acknowledge the interests of the Ecological Continuity Trust (ECT), whose national network of LTEs
                    includes the experiment on which this research was conducted.</p>
            </div>
        </ul>
    </div>--->

</x-guest-layout>
