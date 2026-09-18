<div class="bg-nw-blue-900 text-nw-blue-50">
    <div class="flex justify-center px-8 py-2 print:hidden">
        <div class="overflow-visible px-20 text-left text-sm">
            <h2 class="font-mono text-xl font-semibold">Our Sponsors</h2>
            <div class="rounded-full bg-white">
                <a href="https://www.rothamsted.ac.uk">
                    <img class="-p-1 block h-12 object-fill" src="/logos/rothamsted-logo.png" />
                </a>
            </div>

            <div>
                <a href="https://www.ukri.org/councils/bbsrc/">
                    <img class="my-2 block h-16 bg-white p-1" src="/logos/BBSRC-logo.png" />
                </a>
            </div>

        </div>
        <div class="overflow-visible px-20 text-left text-sm">
            <h2 class="font-mono text-xl font-semibold">Official Links</h2>
            <p><a class="hover:font-semibold hover:text-yellow-300 hover:shadow-lg active:text-orange-600 active:shadow-lg"
                    href="/documents/NWFP Portal Data Terms of Use v1.pdf">Legal Notice - Data Portal</a></p>
            <p><a class="hover:font-semibold hover:text-yellow-300 hover:shadow-lg active:text-orange-600 active:shadow-lg"
                    href="/documents/NWFP API Data Licence Statement v1.pdf">Legal Notice - API</a></p>
            <p><a class="hover:font-semibold hover:text-yellow-300 hover:shadow-lg active:text-orange-600 active:shadow-lg"
                    href="https://www.rothamsted.ac.uk/privacy-and-cookies">Privacy and Cookies</a></p>
            <p><a class="hover:font-semibold hover:text-yellow-300 hover:shadow-lg active:text-orange-600 active:shadow-lg"
                    href="/documents/Modern-Slavery-Act 2015-2019.pdf">Modern Slavery</a></p>
        </div>
        <div class="overflow-visible px-20 text-left text-sm">
            <h2 class="font-mono text-xl font-semibold">Connect With Us</h2>
            <p><a class="hover:font-semibold hover:text-yellow-300 hover:shadow-lg active:text-orange-600 active:shadow-lg"
                    href="{{ route('content.with.page', ['page' => 'contacts']) }}">Contact us</a></p>
            <p><a class="hover:font-semibold hover:text-yellow-300 hover:shadow-lg active:text-orange-600 active:shadow-lg"
                    href="{{ route('content.with.page', ['page' => 'news']) }}">News</a></p>
            <p class="inline-block align middle"><a target="_blank"  class="inline-block align middle hover:font-semibold hover:text-yellow-300 hover:shadow-lg active:text-orange-600 active:shadow-lg"
                href="https://bsky.app/profile/thefarmplatform.bsky.social"> <img src="/logos/bluesky-LOGO.svg" class="inline-block align middle"> thefarmplatform.bsky</a></p>
        </div>
        <div class="overflow-visible px-20 text-left text-sm">
            <h2 class="font-mono text-xl font-semibold">Other NBRIs</h2>
            <div>
                <a href="https://www.era.rothamsted.ac.uk">
                    <img class="h-16 w-auto object-scale-down py-2" src="/logos/2024-RLTE-LOGO.png" />
                </a>
            </div>
            <div>
                <a href="https://insectsurvey.com">
                    <img class="block h-16 w-auto object-scale-down py-2" src="/logos/2024-RIS-LOGO.png" />
                </a>
            </div>
        </div>
    </div>
    <div class="border mx-auto border-t border-nw-blue-50 bg-nw-blue-900 p-4 text-nw-blue-50 sm:p-6 lg:p-4">

        <div class="flex justify-between">

            <div>&copy;Rothamsted Research 2024</div>
            <div><a href="mailto: comms@rothamsted.ac.uk">comms@rothamsted.ac.uk</a></div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-xs-12 text-right">+44 (0) 1582 763 133</div>
        </div>

    </div>
    @if (env('FILAMENT_USE'))


    <div class="border mx-auto border-t border-nw-blue-50 bg-nw-blue-900 p-4 text-nw-blue-50 sm:p-6 lg:p-8 print:hidden">
        <div class="flex justify-end">

            @if (Route::has('login'))
                @auth
                @else
                    <x-button-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                        {{ __('Log in') }}
                    </x-button-link>
                    {{-- <x-button-link href="{{ route('register') }}" :active="request()->routeIs('register')">
                                {{ __('Register') }}
                        </x-button-link>
                         --}}
                @endif
            @endauth
        </div>
    </div>
    @endif
</div>

