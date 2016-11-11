<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

    <header>
        @include('includes.header')
    </header>

    <div>
        <!-- main content -->
        <div>
            @yield('content')
        </div>
    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>
</div>
</body>
</html>