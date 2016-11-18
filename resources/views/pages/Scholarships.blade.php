<!doctype html>
<html>
<head>
    <title>Scholarship</title>
    @include('includes.head')
</head>
<body>
<div class="container-fluid">

    <header class="row">
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