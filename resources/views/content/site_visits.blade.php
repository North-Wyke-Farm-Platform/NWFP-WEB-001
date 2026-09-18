<x-guest-layout>
    <div>
        <x-slot name="header">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Site Visits') }}
            </h2>
        </x-slot>
        <div class="p-3">
            <div class="border-2 border-nw-blue-700 bg-nw-blue-50 p-5">
                <p>If you wish to visit the NWFP please complete the
                    <span class="font-semibold">
                        <a
                            href="https://forms.office.com/pages/responsepage.aspx?id=JTaItkGJQkOw43uMyDkvZLcwcoUWgp9DttNqwK3TGQ1UME9IWTJPMUxIVlNHNFZPMFUxVzRFVjZQWi4u&amp;web=1&amp;wdLOR=c82212539-350C-4D18-BEDE-1A0595854399"
                            style="color: blue; text-decoration: underline",
                            onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">
                            visit request form
                        </a>.
                    </span>
                    We will assess your request and contact you to arrange a visit or to provide you
                    with details of upcoming open days.
                </p>
                <br>
                <p>
                    <span class="italic">
                        If
                        you want to check in advance of submitting a visit request, please call / email
                        <a href="https://www.rothamsted.ac.uk/people/melanie-wright" style="color: blue; text-decoration: underline",
                        onclick="window.open(this.href, '', 'resizable=yes,status=no,location=yes,toolbar=no,menubar=yes,fullscreen=no,scrollbars=yes,dependent=no'); return false;">Melanie
                        Wright
                        </a>


                    </span>
                </p>
            </div>
            <div class="mt-3">
                <ul class="space-y-3">
                    <x-li-arrow>As a working research institute, we are limited in how many
                        visitor groups we can host each year, and in the size of those groups. We
                        therefore reserve the right to decline a visit request if it is not relevant to
                        our mission or if we are unable to provide staff members to host.</x-li-arrow>
                        <x-li-arrow>Both our main sites occasionally run open days when multiple
                            groups may visit and meet a range of experts. Details are publicised in advance.
                            If an open day is planned, you may be asked to plan your visit to coincide with
                            that day. </x-li-arrow>
                        <x-li-arrow>For outdoor visits, you can expect to walk over rough
                            farmland. If anyone in your party has mobility issues, please notify us in
                            advance. Please also bring suitable outdoor clothing.</x-li-arrow>
                        <x-li-arrow>For some visitors, there may be a charge to cover room hire
                            and staff time. Once the form below has been submitted, we will send you
                            notification if a charge is to be levied.</x-li-arrow>


                </ul>

                <p  class="mt-3">Our scientists are always happy to share their expertise, but
                    cannot necessarily offer specific solutions to day-to-day farming challenges as
                    our strategic research often needs further development before it can deliver
                    successful market-based solutions. </p>

            </div>
        </div>
    </div>
</x-guest-layout>
