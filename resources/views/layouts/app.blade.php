<!DOCTYPE html>
    <html lang="ja">
        <title>@yield('title')</title>
        @include('layouts.head')
    <body>
        @yield('contents')
        @include('layouts.script')
        @stack('script')
    </body>
</html>
