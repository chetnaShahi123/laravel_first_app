<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

    <header class="row main_header">
        @include('includes.header')
    </header>

    <div id="main" class="row"></br>
             @include('flash-message')

            @yield('content')

    </div>

    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>