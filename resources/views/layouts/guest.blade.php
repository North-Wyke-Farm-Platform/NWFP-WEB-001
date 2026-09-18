<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.ga4.measurementId') }}"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', "{{ config('services.ga4.measurementId') }}");
</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'NWFP') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net" rel="preconnect">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="icon" type="image/png" sizes="32x32" href="/icons/rres-favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/icons/rres-favicon.png">


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-banner />
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation-menu')
        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @elseif (isset($sub_header))
            <header class="bg-white shadow">
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    {{ $sub_header }}
                </div>
            </header>

        @endif
        <!-- Page Content -->
        <main>
            <div class="bg-bg02muted bg-cover bg-center bg-no-repeat py-12 backdrop-opacity-10 print:bg-none">
                <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </main>
        <!-- Page Footer-->
        <footer>
            @include('layouts.footer')
        </footer>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
