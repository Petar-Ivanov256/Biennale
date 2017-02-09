<!doctype html>
<html>
<head>
    @include('includes.head')
    <title>
        Biennale - @yield('title')
    </title>
    @yield('head')
</head>
<body>
    <header>
        @include('includes.header')
    </header>

    <div>
        @include('includes.notificationBox')
    </div>
    
    <div id="main">
        @include('includes.leftSide')
        @yield('content')
    </div>

    <footer>
        @include('includes.footer')
    </footer>
    
    @include('includes.scripts')
    @yield('foot')

</body>
</html>