<!doctype html>
<html>
<head>
    @include('includes.head')
    <title>Biennale</title>
</head>
<body>
<div class="container-fluid">

    <header class="row">
        @include('includes.header')
    </header>

    <div id="main" class="row">
        @yield('content')
    </div>
    
    <div id="application-form" class="row col-md-8 col-md-offset-7">
        @include('includes.applicationForm')
    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>
</div>
</body>
</html>