<!doctype html>
<html>
<head>
    <title>About</title>
    @include('includes.head')
</head>
<body id="about">
<div class="container-fluid">

    <header class="row">
        @include('includes.header')
    </header>


    <!-- main content -->
    <div>
        <br><br>
        @yield('content')
    </div>


    <footer class="row" id="BladeFooter">
        @include('includes.footer')
    </footer>
</div>
</body>
</html>