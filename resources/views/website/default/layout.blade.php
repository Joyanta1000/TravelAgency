<!DOCTYPE html>
<html>

<head>
    @include('website.includes.head')
</head>

<body>
    <div id="page-wrapper">
        <header id="header" class="navbar-static-top">
            @include('website.includes.header')
        </header>

        @yield('content')

        <footer id="footer">
            @include('website.includes.footer')
        </footer>

    </div>
    @include('website.includes.script')
</body>

</html>