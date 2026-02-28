<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Informatika UBHI')</title>

    <meta name="description" content="{{ $meta['description'] ?? 'Program Studi Informatika UBHI' }}">

    {{-- Open Graph --}}
    <meta property="og:title" content="{{ $meta['title'] ?? 'Informatika UBHI' }}">
    <meta property="og:description" content="{{ $meta['description'] ?? 'Program Studi Informatika UBHI' }}">
    <meta property="og:image" content="{{ $meta['image'] ?? asset('images/default-og.jpg') }}">
    <meta property="og:type" content="{{ $meta['type'] ?? 'website' }}">
    <meta property="og:url" content="{{ url()->current() }}">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">

    @vite(['resources/css/frontend.scss', 'resources/js/frontend.js'])

    @stack('styles')
</head>
<body>

    {{-- Shared Components --}}
    @include('sections.shared.navbar')

    <main>
        @yield('content')
    </main>

    @include('sections.shared.footer')

    @stack('scripts')

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>