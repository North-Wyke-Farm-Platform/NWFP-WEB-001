<x-guest-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Information for Supervisors and Programme Directors') }}
        </h2>
    </x-slot>

    <h2 class="h-16 content-center bg-nw-blue-700 px-4 text-center text-2xl font-medium text-nw-blue-50">
        Introduction</h2>

    <section class="m-6">
        <div class="p-3" style="text-align:justify">
            <p>The North Wyke Farm Platform and wider facilities has a
                long track record of supporting post graduate research projects.
                One of the purposes of the farm platform is to provide exceptional resources and data for academics from
                any
                discipline and location to use.
                Data is readily available and quality controlled meaning that projects can be initiated rapidly, with
                little
                cost.</p>
            <br>
            <p>You can access this data for your students or for your own study immediately and for free by
                <a href="https://nwfp.rothamsted.ac.uk/"
                    onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                    <u style="color:red;">registering on the NWFP Data Portal</u></a>.
            </p>
            <br>
            We are happy to discuss your ideas on projects and do anything that might be required to help. This can be
            anything from a conversation
            through to co-development of funding proposals.
        </div>
    </section>

    <div class="p-0">
        <h2 class="h-16 content-center bg-nw-blue-700 px-4 text-center text-2xl font-medium text-nw-blue-50">
            How we support students</h2>
    </div>
    <section class="mx-0 my-0 bg-white">
        <ul class="m-10">
            <x-li-dot class="bg-nw-blue-500">Student and staff accommodation</x-li-dot>
            <x-li-dot class="bg-nw-blue-500">Student / Staff Support</x-li-dot>
            <x-li-dot class="bg-nw-blue-500">Data orientation / explanation</x-li-dot>
            <x-li-dot class="bg-nw-blue-500">Assistance with use of API's</x-li-dot>
            <x-li-dot class="bg-nw-blue-500">Co-supervision / Mentoring (subject to collaboration agreement /
                funding)</x-li-dot>
            <x-li-dot class="bg-nw-blue-500">Co-development of learning and teaching resources or data set
                publication</x-li-dot>
            <x-li-dot class="bg-nw-blue-500">Support in the understanding of FAIR data and access to our Electronic
                Research Notebook (ERN)</x-li-dot>
            <x-li-dot class="bg-nw-blue-500"> Hypothesis and Idea generation (link to student project ideas
                document)</x-li-dot>
        </ul>


        <div class="w-100 container mx-auto grid grid-cols-2 gap-4 p-10 lg:w-4/5">
            <div class="aspect-w-16 aspect-h-9">
                <iframe src="https://www.youtube.com/embed/q_YGPW_T9oM?si=651Ze1SyKp13s4fu" title="YouTube video player"
                    width="377" height="210" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="aspect-w-16 aspect-h-9">
                <iframe src="https://www.youtube.com/embed/FYW_j0rGjkM?si=_orT8xm48xxIVZnb" title="YouTube video player"
                    width="377" height="210" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <div class="p-1">
        <div class="border-2 border-nw-blue-700 bg-nw-blue-50 p-3">
            <b>Please contact</b>
            <a href="mailto:nw.farmplatform@rothamsted.ac.uk"
                onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                <u>nw.farmplatform@rothamsted.ac.uk</u>
            </a>for enquiries.
            </p>
        </div>
    </div>
    <section class="m-0 bg-gray-100">
        <div class="flex justify-center p-10">

            <x-button-link class="btn-primary ml-20" href="/content/student_projects">
                Back to Student's projects
            </x-button-link>
        </div>
    </section>

</x-guest-layout>
