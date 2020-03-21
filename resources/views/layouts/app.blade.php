@include('layouts._head')

<body class="font-body">
    @include('layouts._bar')
    <div id="app">
        @include('layouts._header')
        <main>
            @yield('content')
        </main>
        @include('layouts._footer')
    </div>
</body>

</html>
